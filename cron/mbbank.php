<?php
    require_once("../config/config.php");
    require_once("../config/function.php");


    /* ĐƠN VỊ THIẾT KẾ WEB WWW.CMSNT.CO | ZALO 0947838128 | FB.COM/NTGTANETWORK */
    if($CMSNT->site('api_bank') == '')
    {
        die('Thiếu API');
    }
    if(time() - $CMSNT->site('check_time_cron_bank') < 20)
    {
        die('Không thể cron vào lúc này!');
    }
    $CMSNT->update("options", [
        'value' => time()
    ], " `key` = 'check_time_cron_bank' ");
    
    $token = $CMSNT->site('api_bank');
    $stk = $CMSNT->site('stk_bank');
    $mk = $CMSNT->site('mk_bank');

    function get_lsgd_mbb($token, $stk)
    {   
        $dataPost = array(
         "Loai_api" => "lsgdv2",
         );
         $curl = curl_init();
         curl_setopt_array($curl, array(
         CURLOPT_URL => "https://api.dichvudark.vn/api/ApiMbBank",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => $dataPost,
         CURLOPT_HTTPHEADER => array(
         "Code: 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",
         "Token: $token",
         "Stk: $stk")
         ));
         $response = curl_exec($curl);
         curl_close($curl);
         return $response;
    }
    

    function tachSTK($comment_) {
        $comment_ = explode('tu', $comment_)[1];
        $comment_ = explode('toi', $comment_)[0];
        return trim($comment_);

    }
    
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


    $result = get_lsgd_mbb($token, $stk);
    
    $result = json_decode($result, true);
    
   


    if($result['result']['responseCode'] != '00')

    {
        dd($result);
    }
    

    foreach($result['transactionHistoryList'] as $data)
    {
        // $des = $data['MoTa'];
        // $amount = str_replace(',' ,'', $data['SoTienGhiCo']);
        // $tid = $data['SoThamChieu'];
        // $id = parse_order_id($des);

        $partnerId      = $data['accountNo'];               // SỐ ĐIỆN THOẠI CHUYỂN
        $comment        = $data['description'];                 // NỘI DUNG CHUYỂN TIỀN
        $tranId         = explode('\\', $data['refNo'])[0];                  // MÃ GIAO DỊCH
        $partnerName    = $data['bankName'];             // TÊN CHỦ VÍ
        $amount         = $data['creditAmount'];

        $id = tachCMT($comment);
        if ($id == null) continue; 
        $comment = $CMSNT->site('noidung_naptien').$id;

        
        $file = @fopen('LogBank.txt', 'a');
     
        if ($id)
        {
          
            
            $row = $CMSNT->get_row(" SELECT * FROM `users` WHERE `id` = '$id' ");
            if (!$row) continue;
            
            if($row['username'])
            {
                if($CMSNT->num_rows(" SELECT * FROM `bank_auto` WHERE `tid` = '$tranId' ") == 0)
                {
                    /* GHI LOG BANK AUTO */
                   
                  
                    $create = $CMSNT->insert("bank_auto", array(
                        'tid' => $tranId,
                        'partnerName' => tachSTK($data['description']),
                        'description' => $comment,
                        'amount' => $amount,
                        'time' => time(),
                        'username' => $row['username'],
                        'bankName' => 'MBBANK',
                        ));
                        
                    if ($create)
                    {
                        // $real_amount = $amount + $amount * $CMSNT->site('ck_bank') / 100;
                        $isCheckMoney = $CMSNT->cong("users", "money", $amount, " `username` = '".$row['username']."' ");
                        if($isCheckMoney)
                        {
                            $CMSNT->cong("users", "total_money", $amount, " `username` = '".$row['username']."' ");
                            /* GHI LOG DÒNG TIỀN */
                            $CMSNT->insert("dongtien", array(
                                'sotientruoc' => $row['money'],
                                'sotienthaydoi' => $amount,
                                'sotiensau' => $row['money'] + $amount,
                                'thoigian' => time(),
                                'noidung' => 'Nạp tiền tự động ngân hàng MBBANK ('.$tranId.')',
                                'username' => $row['username']
                            ));
                        }

                        sendTele(
                            "Username " . $row['username'] .PHP_EOL.
                            'Nạp tiền tự động ngân hàng MBBANK ('.$tranId.')' .PHP_EOL.
                            "Số tiền " . number_format($amount)
                        );
                    }
                }
            }
        }    
    }

