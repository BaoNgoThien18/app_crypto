<?php
require_once("../../config/config.php");
require_once("../../config/function.php");




require_once("../../public/admin/Header.php");
require_once("../../public/admin/Sidebar.php");

?>

<?php


if (isset($_POST['add']) && $user['level'] == 'admin') {


    $unit = check_string($_POST['unit']);
    $email = check_string($_POST['email']);
    $coin = check_string($_POST['coin']);
    // $amount = check_string($_POST['amount']);
    $address = check_string($_POST['address']);
    $from = check_string($_POST['from']);
    $status = check_string($_POST['status']);

    $tran_id = rand(11111111, 99999999);

    $row = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '".$coin."'");
    $amount = round($row['price'] * $unit, 4);

    $user  = $BNZ->getUser($email);


    $money_de = json_decode($user['money']);

    $BNZ->insert("dongtien", [
        'coin' => $coin,
        'sotientruoc' => $money_de->$coin,
        'sotienthaydoi' => $amount,
        'sotiensau' => $money_de->$coin + $amount,
        'thoigian' => time(),
        'noidung' => 'Admin tạo giao dịch ( '.$unit. ' '.$coin.' )',
        'username' => $user['email']
    ]);

  
    $money_de->$coin += auto_decimal_format($unit, 6);

    $BNZ->update('users', [
        'money' => json_encode($money_de),
    ], " `id` = '" . $user['id'] . "' ");

    
  

    $BNZ->insert("transactions", array(
        'email'         => $email,
        'tran_id'         => $tran_id,
        'unit'         => $unit,
        'coin'         => $coin,
        'amount'         => $amount,
        'address'         => $address,
        'from_to'         => $from,
        'confirmation'         => '10/10',
        'status' => $status,
        'date' => time(),

    ));
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

    $money_de->$coin += auto_decimal_format($value, 6);

    $BNZ->update('users', [
        'money' => json_encode($money_de),
    ], " `id` = '" . $row['id'] . "' ");



    sweet_alert("Success", "Update Successfully", "success", 500, getPresentHref());
}



?>


<div class="content-wrapper">

    <section class="content mt-5">
        <div class="row">
            <!-- <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">TẠO GIAO DỊCH</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Emaill</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <select class="select2 form-control" name="email">
                                            <?php foreach ($BNZ->get_list("SELECT * FROM `users` ORDER BY  `id` DESC ") as $row) { ?>
                                                <option value="<?= $row['email'] ?>"><?= $row['email'] ?></option>
                                            <?php } ?>

                                        </select>


                                    </div>
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Coin</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <select class="form-control" id="coin" name="coin">
                                            <option value="USDTUSD">
                                                USDTUSD
                                            </option>
                                            <option value="BTCUSDT">
                                                BTCUSDT
                                            </option>
                                            <option value="ETHUSDT">
                                                ETHUSDT
                                            </option>
                                            <option value="BNBUSDT">
                                                BNBUSDT
                                            </option>

                                            <option value="TRXUSDT">
                                                TRXUSDT
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Unit ( coin )</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="number" class="form-control" id="unit" name="unit" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Amoutn</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="number" class="form-control" id="amount" name="amount" value="0" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="" name="address" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">From / To</label>
                                <div class="col-sm-10">
                                    <div class="form-line">

                                        <select class="form-control" name="from">
                                            <option value="from">
                                                From
                                            </option>
                                            <option value="to">
                                                To
                                            </option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <div class="form-line">

                                        <select class="form-control" name="status">
                                            <option value="Completed">
                                                Completed
                                            </option>
                                            <option value="Pending">
                                                Pending
                                            </option>
                                            <option value="Cancelled">
                                                Cancelled
                                            </option>

                                        </select>

                                    </div>
                                </div>
                            </div>


                            <button type="submit" name="add" class="btn btn-primary btn-block waves-effect">
                                <span>LƯU</span>
                            </button>

                        </form>
                    </div>
                </div>
            </div> -->

            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Lịch sử giao dịch</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Email</th>
                                        <th>Tran ID</th>
                                        <th>UnitC</th>
                                        <th>Amount</th>
                                        <th>Coin</th>
                                        <th>Address</th>
                                        <th>From</th>
                                        <th>Comfirmation</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($BNZ->get_list(" SELECT * FROM `transactions`  ORDER BY id DESC ") as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['tran_id'] ?></td>
                                            <td><?= $row['unit'] ?></td>
                                            <td><?= $row['amount'] ?></td>
                                            <td><?= $row['coin'] ?></td>
                                            <td><?= $row['address'] ?></td>
                                            <td><?= $row['from_to'] ?></td>
                                            <td><?= $row['confirmation'] ?></td>
                                            <td><?= $row['status'] ?></td>
                                            <td><?= gettime($row['date']) ?></td>
                                            <td><a class="btn btn-primary" href="<?=$url?>Admin/GiaoDich/Edit/<?=$row['id']?>">Edit</a></td>
                                   
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
</div>




<?php
require_once("../../public/admin/Footer.php");
?>

<script>
    $('#unit').on('change', function() {

        var unitz = $('#unit')
        var coin = $('#coin')

        $.ajax({
            url: '<?= $url ?>assets/ajaxs/Main.php',
            type: 'POST',
            data: {
                type: 'getAmountCoin',
                unit: unitz.val(),
                coin: coin.val()
            }
        }).done(function(res) {
            data = JSON.parse(res)
            $('#amount').val(data.amount);
        });

    })
</script>