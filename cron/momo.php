<?php
    require_once("../config/config.php");
    require_once("../config/function.php");

    if($CMSNT->site('api_momo') == '')
    {
        die('Thiếu API');
    }

    if(time() - $CMSNT->site('check_time_cron') < 20)
    {
        die('Không thể cron vào lúc này!');
    }

    $CMSNT->update("options", [
        'value' => time()
    ], " `key` = 'check_time_cron' ");
    $token = $CMSNT->site('api_momo');

    $result = curl_get("https://api.dichvudark.vn/historyapimomoweb/$token");
    $result = json_decode($result, true);

    function tachCMT($comment_) {
        global $CMSNT;
        $index = strpos( $comment_,      $CMSNT->site('noidung_naptien'));
        if ($index > 0) {
            
            $result = '';
            for ($i=$index; $i<strlen($comment_); $i++) {
                if ($comment_[$i] == ' ') break;
                $result = $result . $comment_[$i];
            }

        } else {
            return null;
        }
        return explode($CMSNT->site('noidung_naptien'), $result)[1];
    }


    foreach($result['momoMsg']['tranList'] as $data)
    {
        $partnerId      = $data['partnerId'];               // SỐ ĐIỆN THOẠI CHUYỂN
        $comment        = $data['comment'];                 // NỘI DUNG CHUYỂN TIỀN
        $tranId         = $data['tranId'];                  // MÃ GIAO DỊCH
        $partnerName    = $data['partnerName'];             // TÊN CHỦ VÍ
        // $id_momo        = parse_order_id($comment);         // TÁCH NỘI DUNG CHUYỂN TIỀN
        $amount         = $data['amount'];

    
        $id = tachCMT($comment);
        if ($id == null) continue; 
        $comment = $CMSNT->site('noidung_naptien').$id;
        $check = $CMSNT->get_row("SELECT * FROM `momo` WHERE `tranId` = '".$tranId."' ");
        if ($check) continue; 

        $file = @fopen('LogMOMO.txt', 'a');
        if ($file)
        {
            $data = "partnerId => $partnerId comment => $comment ($id) amount => $amount partnerName => $partnerName".PHP_EOL;
            fwrite($file, $data);
        }
        if ($id)
        {
            $row = $CMSNT->get_row(" SELECT * FROM `users` WHERE `id` = '$id' ");
            if($row['id'])
            {
                if($CMSNT->num_rows(" SELECT * FROM `momo` WHERE `tranId` = '$tranId' ") == 0)
                {

                    $create = $CMSNT->insert("momo", array(
                        'tranId'        => $tranId,
                        'username'      => $row['username'],
                        'comment'       => $comment,
                        'time'          => time(),
                        'partnerId'     => $partnerId,
                        'amount'        => $amount,
                        'partnerName'   => $partnerName
                    ));
                    
                    if ($create)
                    {
                        // $real_amount = $amount + $amount * $CMSNT->site('ck_bank') / 100;
                        $isCheckMoney = $CMSNT->cong("users", "money", $amount, " `username` = '".$row['username']."' ");

                        if($isCheckMoney)
                        {
                            $CMSNT->cong("users", "total_money", $amount, " `username` = '".$row['username']."' ");
                            $CMSNT->insert("dongtien", array(
                                'sotientruoc'   => $row['money'],
                                'sotienthaydoi' => $amount,
                                'sotiensau'     => $row['money'] + $amount,
                                'thoigian'      => time(),
                                'noidung'       => 'Nạp tiền tự động qua ví MOMO ('.$tranId.')',
                                'username'      => $row['username']
                            ));

                            sendTele(
                                "Username " . $row['username'] .PHP_EOL.
                                'Nạp tiền tự động qua ví MOMO ('.$tranId.')' .PHP_EOL.
                                "Số tiền " . number_format($amount)
                            );
                        }
                    }
                }
            }
        }         
    }
 