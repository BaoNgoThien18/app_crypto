<?php
require_once("../../config/config.php");
require_once("../../config/function.php");


if (isset($_GET['id'])) {
    $row = $BNZ->get_row(" SELECT * FROM `transactions` WHERE `id` = '" . check_string($_GET['id']) . "'  ");
    if (!$row) {
        sweet_alert("Error", "Unknow link", "error", 500, "/Admin/Home");
    }
} else {
    sweet_alert("Error", "Unknow link", "error", 500, "/Admin/Home");
}


if (isset($_POST['edit']) && isset($_GET['id']) && $user['level'] == 'admin') {

    $status = check_string($_POST['status']);
    $confirmation = check_string($_POST['confirmation']);

    $BNZ->update("transactions", array(

        'status'         => $status,
        'confirmation'        => $confirmation
    ), " `id` = '" . $row['id'] . "' ");

    sweet_alert("Success", "Update Successfully", "success", 500, getPresentHref());
}


if (isset($_POST['btnCongTien']) &&  $user['level'] == 'admin') {


    $coin = check_string($_POST['coin']);
    $value = check_string($_POST['value']);
    $ghichu = check_string($_POST['ghichu']);


    $t = 'cộng tiền';

    $money_de = json_decode($row['money']);


    if ($value <= 0) {

        $t = 'trừ tiền';

        if ($money_de->$coin + $value < 0) {
            sweet_alert("Error", "Vui lòng nhập số tiền hợp lệ", "error", 500, getPresentHref());
        }
    }




    $BNZ->insert("dongtien", [
        'coin' => $coin,
        'sotientruoc' => $money_de->$coin,
        'sotienthaydoi' => $value,
        'sotiensau' => $money_de->$coin += $value,
        'thoigian' => time(),
        'noidung' => 'Admin ' . $t . ' (' . $ghichu . ')',
        'username' => $row['email']
    ]);

    $money_de->$coin += $value;

    $BNZ->update('users', [
        'money' => json_encode($money_de),
    ], " `id` = '" . $row['id'] . "' ");



    sweet_alert("Success", "Update Successfully", "success", 500, getPresentHref());
}

require_once("../../public/admin/Header.php");
require_once("../../public/admin/Sidebar.php");



?>

<?php





?>


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">

                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['email']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Transaction ID</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['tran_id']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['unit']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['amount']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Coin</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['coin']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">From</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['from_to']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= $row['address']; ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Confirmation</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="confirmation" value="<?= $row['confirmation']; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <div class="form-line">


                                        <select class="form-control" name="status">
                                            <option <?= $row['status'] == 'Completed' ? 'selected' : "" ?> value="Completed">
                                                Completed
                                            </option>
                                            <option <?= $row['status'] == 'Pending' ? 'selected'  : ""  ?> value="Pending">
                                                Pending
                                            </option>
                                            <option <?= $row['status'] == 'Cancelled' ? 'selected'  : ""  ?> value="Cancelled">
                                                Cancelled
                                            </option>

                                        </select>



                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= gettime($row['date']) ?>" disabled>
                                    </div>
                                </div>
                            </div>



                    </div>
                    <button type="submit" name="edit" class="btn btn-primary btn-block waves-effect">
                        <span>LƯU</span>
                    </button>

                    </form>
                </div>
            </div>
        </div>




</div>
</section>
</div>





<?php
require_once("../../public/admin/Footer.php");
?>