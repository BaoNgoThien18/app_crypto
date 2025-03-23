<?php
require_once("../../config/config.php");
require_once("../../config/function.php");

$email = $_GET['email'];
$row = $BNZ->get_row("SELECT * FROM `users` WHERE `email`  =  '".$email."' AND `status` = 'confirm' ");
if (!$row) header("Location: /Login");

$title = 'VERIFY ACCOUNT | ' . $BNZ->site('webname');
require_once("../../public/client/Header_Auth.php");



require_once '../../class/GoogleAuthenticator.php';
$ga = new PHPGangsta_GoogleAuthenticator();



$secret = $ga->createSecret();
$qrCodeUrl = $ga->getQRCodeGoogleUrl($BNZ->site('webname') . ' (' . $email . ')', $secret);



if (isset($_POST['submit'])) {

    $code = check_string($_POST['code']);
    $secret = check_string($_POST['secret']);

    $checkResult = $ga->verifyCode($secret, $code, 2);    // 2 = 2*30sec clock tolerance
    if ($checkResult) {
        echo 'OK';
    } else {
        echo 'FAILED';
    }


    dd($_POST);
} else {
}

?>


    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <main class="grid w-full grow grid-cols-1 place-items-center">
            <div class="w-full max-w-[26rem] p-4 sm:px-5">
                <div class="text-center">
                <img width="150px" class="mx-auto " src="<?= $BNZ->site('logo') ?>" alt="logo">

                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Verify Account
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            Google verification Code.
                        </p>
                    
                    </div>
                </div>

                <form method="POST" id="verify">
                    
                    
                    <input type="text" id="type" name="type" style="display:none;" value="VerifyAccount"> 
                    <input type="text" id="email" name="email" style="display:none;" value="<?=$email?>"> 
                    <input type="text" id="secret" name="secret" style="display:none;" value="<?= $secret ?>">


                    <div class="card mt-5 rounded-lg p-5 lg:p-7">
                        <center>
                            <img src='<?= $qrCodeUrl ?>' style='border:10px;' width='140px'>
                        </center>

                        <h4 class="text-center mt-3">Secret Key: <span class="copy" data-clipboard-text="<?= $secret ?>"><?= $secret ?></span></h4>

                        <div class="card mt-5" x-data="accordionItem('item-3')">
                            <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                    Google Authenticator
                                </h3>
                                <div :class="expanded && '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4">
                                    <p>
                                    <div class="flex w-9/12 items-center space-x-1">
                                        <p class="text-xs text-indigo-100 line-clamp-2">
                                            Copy Setup Key <b></b>
                                        </p>
                                    </div>
                                    <small>To use Google Authenticator, you first need to download the app on your
                                        device from the <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en_US&pli=1" style="color:#3ecf39">Google Play Store</a> or the <a href="https://apps.apple.com/us/app/google-authenticator/id388497605" style="color:#3ecf39"> Apple App Store</a>. Once you have installed the app,
                                        follow these steps to set up Google Authenticator for your accounts:
                                        <li>1. Open the app and click on the "+" button to add a new account.</li>
                                        <li>2. Choose the option to scan a QR code or manually enter the key provided by
                                            our service.</li>
                                        <li>3. If you choose to scan a QR code, point your device's camera at the QR
                                            code on your computer screen. If you choose to enter the key manually, Copy
                                            the key provided by above.</li>
                                        <li>4. Once the app has scanned the code or you have entered the key, a
                                            six-digit verification code will appear in the app. Use this code to verify
                                            your account.</li>
                                    </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <label class="mt-4 block">
                            <span>Google Authenticator:</span>
                            <span class="relative mt-1.5 flex">
                                <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Google Authenticator Code" type="tel" id="code" name="code" maxlength="6" />
                                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <a class="fa fa-lock"></a>
                                </span>
                            </span>
                        </label>

                        <br>

                        <p class="response alert flex rounded-lg bg-error p-4 d-none  text-white " style="display: none"></p>



                        <button type="submit" id="login" name="submit" class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Verify</button>


                        <small>If you choose to enter the key manually, Click the button to copy Copy Setup Key
                            provided.</small><br>
                        <!-- <p class="copied"></p>
                <div class="flex space-x-4" id="copy_id">
                    <p class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <a class="fa fa-key"></a>
                        <span>Copy Setup Key </span>
                    </p>
                </div> -->


                        <div class="card" x-data="accordionItem('item-4')">
                            <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                    <?= $BNZ->site('webname') ?> 12 Phrase </h3>
                                <div :class="expanded && '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4">
                                    <p>
                                    <div class="flex w-9/12 items-center space-x-1">
                                        <small>
                                            Write down the mnemonic phrase in order. do no send to anyone.
                                        </small>
                                    </div>
                                    <textarea rows='5' class='form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300' name="secret_phrase" readonly><?=$row['secret_phrase']?></textarea><br>
                                    Your Secret Phrase (12 Words) allows you to recover your wallet
                                    </p>
                                </div>
                            </div>
                        </div>

                </form>


                <div class="my-7 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>OR</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>

                <div class="mt-4 text-center text-xs+">
                    <p class="line-clamp-1">
                        <span>Back to </span>
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent" href="<?=$url?>Login">Login</a>
                    </p>
                </div>


            </div>
            <div class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300">
                <a href="#">Privacy Notice</a>
                <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                <a href="#">Term of service</a>
            </div>

    <script>
       

        $(document).ready(function() {
            $('#verify').on('submit', function(e) {
                e.preventDefault();
                $(".response").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")


                $.ajax({
                    type: "POST",
                    url: '<?= $url ?>assets/ajaxs/Auth.php',
                    data: $('form').serialize(),
                    dataType: "json",
                    success: function(data) {
                        $(".response").html(data.content);
                        $(".response").css('display' , 'block');
                         

                        if (data.status == 1) {

                            $(".response").removeClass('bg-error')
                            $(".response").addClass('bg-success')
                            setTimeout(() => {
                                window.location.href = '<?= $url ?>Login'
                            }, 3000);
                        }
                    },
                    error: function(data, errorThrown) {
                        Swal.fire('The Internet?', 'Check network connection!', 'question');
                    }
                });
            });
        });
    </script>


<? require_once("../../public/client/Footer_Auth.php"); ?>
