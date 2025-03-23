<?php

require_once("../../config/config.php");
require_once("../../config/function.php");

if ($_POST['type'] == 'getAmountCoin') {

    $unit = check_string($_POST['unit']);
    $coin = check_string($_POST['coin']);

    $row = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $coin . "'");

    $ETH = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = 'ETHUSDT'");

    // $row['price'] = str_replace(".", "", $row['price']);
    // $row['price'] = str_replace(",", ".", $row['price']);

    $amount = $row['price'] * $unit;
    $my_coin = (array)json_decode($user['money']);

    $fee = round( $amount * $user['phi_rut'] / 100 / $ETH['price'], 6);

    die(json_encode(['amount' => $amount, 'fee' => $fee, 'status' => 1]));
}

if ($_POST['type'] == 'Send') {

    $coin = check_string($_POST['coin']);
    $address = check_string($_POST['address']);
    $network = check_string($_POST['network']);
    $unit = check_string($_POST['amount']);
    $pin = check_string($_POST['pin']);

    $coin = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $coin . "' ");

    if (empty($_SESSION['username'])) {
        die(json_encode(['content' => 'Please Login"', 'status' => 0]));
    }

    if (!$address) {
        die(json_encode(['content' => 'Please enter address', 'status' => 0]));
    }


    if (!$network) {
        die(json_encode(['content' => 'Please enter network', 'status' => 0]));
    }

    if (!$unit) {
        die(json_encode(['content' => 'Please enter amount', 'status' => 0]));
    }

    if (!$pin) {
        die(json_encode(['content' => 'Please enter Auth code', 'status' => 0]));
    }


    if ($coin['symboy'] == 'BTCUSDT')
        if ($network != 'BITCOIN')
            die(json_encode(['content' => 'Please choose the right network for your cryptocurrency.', 'status' => 0]));
    if ($coin['symboy'] == 'ETHUSDT')
        if ($network != 'ERC20')
            die(json_encode(['content' => 'Please choose the right network for your cryptocurrency.', 'status' => 0]));
    if ($coin['symboy'] == 'BNBUSDT')
        if ($network != 'BEP20')
            die(json_encode(['content' => 'Please choose the right network for your cryptocurrency.', 'status' => 0]));
    if ($coin['symboy'] == 'USDTUSD4')
        if ($network != 'ERC20')
            die(json_encode(['content' => 'Please choose the right network for your cryptocurrency.', 'status' => 0]));
    if ($coin['symboy'] == 'TRXUSDT')
        if ($network != 'TRC20')
            die(json_encode(['content' => 'Please choose the right network for your cryptocurrency.', 'status' => 0]));


      

    $my_coin = (array)json_decode($user['money']);

    if ($my_coin['ETHUSDT'] == 0) {
        die(json_encode(['content' => "No ETH to pay gas fees", 'status' => 0]));
        
    }

    if ($unit < $user['rut_toi_thieu']) {
        die(json_encode(['content' => 'The minimum withdrawal amount is ' . $user['rut_toi_thieu'] . " USDT", 'status' => 0]));
    }

    if ($my_coin[$coin['symboy']] < $unit) {
        die(json_encode(['content' => "You do not have enough " . $coin['name2'], 'status' => 0]));
    }

    if ($my_coin['ETHUSDT'] == 0) {
        die(json_encode(['content' => "You do not have enough ETH", 'status' => 0]));
    }

    $ETH = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = 'ETHUSDT'");
    $fee = auto_decimal_format($unit * $coin['price'] * $user['phi_rut'] / 100 / $ETH['price'], 6);

    if ($fee > $my_coin['ETHUSDT']) {
        die(json_encode(['content' => "You do not have enough ETH", 'status' => 0]));
    }


    require_once '../../class/GoogleAuthenticator.php';
    $ga = new PHPGangsta_GoogleAuthenticator();




    $checkResult = $ga->verifyCode($user['google_auth_code'], $pin, 2);    // 2 = 2*30sec clock tolerance
    if ($checkResult) {

        $BNZ->insert("dongtien", [
            'coin' => $coin['symboy'],
            'sotientruoc' => $my_coin[$coin['symboy']],
            'sotienthaydoi' => $unit,
            'sotiensau' => $my_coin[$coin['symboy']] + $unit,
            'thoigian' => time(),
            'noidung' => 'Send ( ' . $unit . ' ' . $coin['symboy'] . ' )',
            'username' => $user['email']
        ]);

        $my_coin[$coin['symboy']] -= $unit;
        $my_coin['ETHUSDT'] = round($my_coin['ETHUSDT'] - $fee, 2);

        $BNZ->update('users', [
            'money' => json_encode($my_coin),
        ], " `id` = '" . $user['id'] . "' ");

        $amount = $unit * $coin['price'];

        $BNZ->insert("transactions", array(
            'email'         => $user['email'],
            'tran_id'         => '' . rand(11111111, 99999999),
            'unit'         => $unit,
            'coin'         => $coin['symboy'],
            'amount'         => $amount,
            'address'         => $address,
            'from_to'         => 'To',
            'confirmation'         => '0/10',
            'status' => 'Pending',
            'date' => time(),
        ));

        die(json_encode(['content' => 'Create a successful transaction', 'status' => 1]));
    } else {
        die(json_encode(['content' => 'Incorrect GG Authentication code']));
    }
}

if ($_POST['type'] == 'Swap') {

    $coin = check_string($_POST['coin']);
    $unit = check_string($_POST['amount']);
    $to = check_string($_POST['to']);
    $pin = check_string($_POST['pin']);

    $coin = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $coin . "' ");

    if (!$coin) {
        die(json_encode(['content' => 'Please enter coin ', 'status' => 0]));
    }

    if (empty($_SESSION['username'])) {
        die(json_encode(['content' => 'Please Login"', 'status' => 0]));
    }

    if (!$to) {
        die(json_encode(['content' => 'Please enter to ', 'status' => 0]));
    }


    if (!$unit) {
        die(json_encode(['content' => 'Please enter amount', 'status' => 0]));
    }

    if (!$pin) {
        die(json_encode(['content' => 'Please enter Auth code', 'status' => 0]));
    }


    $my_coin = (array)json_decode($user['money']);

    if ($my_coin['ETHUSDT'] == 0) {
        die(json_encode(['content' => "No ETH to make Swap", 'status' => 0]));
        
    }

    if ($unit < $user['rut_toi_thieu']) {
        die(json_encode(['content' => 'The minimum withdrawal amount is ' . $user['rut_toi_thieu'] . " ETH", 'status' => 0]));
    }

    if ($my_coin[$coin['symboy']] < $unit) {
        die(json_encode(['content' => "You do not have enough " . $coin['name2'], 'status' => 0]));
    }

    if ($my_coin['ETHUSDT'] == 0) {
        die(json_encode(['content' => "You do not have enough ETH", 'status' => 0]));
    }

    // --------------------------------------------
    // SWAP 

    $amount = $unit * $coin['price'];

    $ETH = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = 'ETHUSDT'");
    $fee = auto_decimal_format($unit * $coin['price'] * $user['phi_rut'] / 100 / $ETH['price'], 6);

    if ($fee > $my_coin['ETHUSDT']) {
        die(json_encode(['content' => "You do not have enough ETH", 'status' => 0]));
    }

    $to  = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $to . "'");

    $swap = $amount / $to['price'];

    require_once '../../class/GoogleAuthenticator.php';
    $ga = new PHPGangsta_GoogleAuthenticator();


    $checkResult = $ga->verifyCode($user['google_auth_code'], $pin, 2);    // 2 = 2*30sec clock tolerance
    if ($checkResult) {

        $BNZ->insert("dongtien", [
            'coin' => $coin['symboy'],
            'sotientruoc' => $my_coin[$coin['symboy']],
            'sotienthaydoi' => $unit,
            'sotiensau' => $my_coin[$coin['symboy']] + $unit,
            'thoigian' => time(),
            'noidung' => 'Swap ( ' . $unit . ' ' . $coin['symboy'] . ' to '.$swap.' '.$to['symboy'].' )',
            'username' => $user['email']
        ]);

        $my_coin[$coin['symboy']] -= $unit;
        $my_coin[$to['symboy']] += $swap;
        $my_coin['ETHUSDT'] = round($my_coin['ETHUSDT'] - $fee, 2);

        $BNZ->update('users', [
            'money' => json_encode($my_coin),
        ], " `id` = '" . $user['id'] . "' ");

        

        $BNZ->insert("transactions", array(
            'email'         => $user['email'],
            'tran_id'         => '' . rand(11111111, 99999999),
            'unit'         => $unit,
            'coin'         => $coin['symboy'],
            'amount'         => $amount,
            'address'         => isset($address) ? $address : null,
            'from_to'         => 'Swap',
            'confirmation'         => '0/10',
            'status' => 'Pending',
            'date' => time(),
        ));

        die(json_encode(['content' => 'Create a successful transaction', 'status' => 1]));
    } else {
        die(json_encode(['content' => 'Incorrect GG Authentication code']));
    }
}
