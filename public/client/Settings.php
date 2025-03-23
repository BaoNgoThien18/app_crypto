<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");
$title = 'Setting';

require_once(__DIR__ . "../../../public/client/Header.php");
require_once(__DIR__ . "../../../public/client/Nav.php");


require_once '../../class/GoogleAuthenticator.php';
$ga = new PHPGangsta_GoogleAuthenticator();

$secret = $ga->createSecret();
$qrCodeUrl = $ga->getQRCodeGoogleUrl($BNZ->site('webname') . ' (' . $user['email'] . ')', $secret);


?>




<!-- Mobile Searchbar -->
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<!-- <div id="ShowPage">
        -->
<p id="notifyinfo"></p>
<main class="main-content w-full px-[var(--margin-x)] pb-8" id="ShowPage" style="height:auto;" onscroll="document.getElementById('toolbar').style.top = Math.max(100, window.scrollY) + 'px'">
    <div class="mt-12 text-center">

        <!-- <div
                    class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6"> -->
        <div class="col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="flex items-center space-x-2 pb-4">
                <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <p class="fa fa-user"></p>
                </div>
                <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100"> Account Settings
                </h4>
            </div>
            <!-- <div x-data="{expandedItem:'item-1'}"
                            class="space-y-4 sm:space-y-5"> -->
            <div class="" x-data="accordionItem('item-1')">
                <div class="card" x-data="accordionItem('item-1')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Reset Password </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <form method="POST" id="ChangePassword">
                        <input type="hidden" name="type" value="ChangePassword">
                        <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                            <div class="px-4 pb-4">
                                <p> <label class="block"> <span>Old
                                            Password</span> <input class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-success/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/20 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-100 pw3" placeholder="*****" type="password" inputmode="numeric" name="old_pin" id="old_pin"> </label> <label class="block"> <span>New Password</span> <input class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-success/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/20 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-100 pw3" placeholder="*****" type="password" inputmode="numeric" name="new_pin" id="new_pin"> </label> <label class="block"> <span>Re-Type Password</span> <input class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-success/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/20 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-100 pw3" placeholder="*****" type="password" inputmode="numeric" name="new_pin1" id="new_pin1"> </label> <br> </p>
                                            <p class="response alert flex rounded-lg bg-error p-4 d-none  text-white " style="display: none"></p>

                                <button class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Re-Set
                                </button>
                                <p></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!--- SET TRANSACTION PIN
                                FOR USER--->
                <div class="card mt-4" x-data="accordionItem('item-2')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Change Google Authentication </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> </p>
                         
                                <div class="text-center">
                                    <img src='<?= $qrCodeUrl ?>' style='border:10px; margin: 0 auto' width='140px'>
                                </div>

                                <h4 class="text-center mt-3">Secret Key: <span><?= $secret ?></span></h4>


                            </span>
                            <form id="ResetAuthen" method="POST">
                                <input type="text" id="type" name="type" style="display:none;" value="ResetAuthen">
                                <input type="text" id="type" name="secret" style="display:none;" value="<?= $secret ?>">



                                <label class="mt-4 block"> <span>Enter Google Authenticator.</span>
                                    <span class="relative mt-1.5 flex"> <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Google Authenticator Code" type="tel" id="digit1" name="code" maxlength="6" max="3"> <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <a class="fa fa-lock"></a> </span> </span>
                                </label><br> <span>Enter Account Password</span> <input class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-success/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/20 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-100 pw3" placeholder="*****" type="password" name="password" id="pin_one">

                                <br><span>Are you sure you want to change account Google Authentication
                                    ?</span><br> <br>
                                    <p class="response1 alert flex rounded-lg bg-error p-4 d-none  text-white " style="display: none"></p>

                                 <br> <button type="submit" class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" id="hidebnt"><i class="fa fa-key"></i>&nbsp; Change</button>
                                <small>
                                    <li>1. Open the Google Authenticator app and click on the '+'
                                        button to add a new account.</li>
                                    <li>2. Choose the option to
                                        scan a QR code or manually enter the key provided by our
                                        service.</li>
                                    <li>3. If you choose to scan a QR code, point
                                        your device's camera at the QR code on your computer screen. If
                                        you choose to enter the key manually, Copy the key provided by
                                        above.</li>
                                    <li>4. Once the app has scanned the code or you
                                        have entered the key, a six-digit verification code will appear
                                        in the app. Use this code to verify your account.</li>
                                </small>
                            </form>
                        </div>
                    </div>
                </div>
                <!---RECOVER SECURY PHARASE USING USER
                                PASSWORD -->
                <div class="card mt-4" x-data="accordionItem('item-3')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Security Phrase </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> </p>
                            <form method="POST" id="get_phrase"> <span>Enter Account Password</span>
                                <input type="hidden" name="type" value="GetPhrase">
                                <div class="relative mt-1.5 flex"> <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" type="password" x-tooltip="Enter Password to get your 12 Phrase" placeholder="Password" id="pass" name="pass"> <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <i class="fa-solid fa-lock text-base"></i> </span> </div>
                                <br>
                                <p class="response3 alert flex rounded-lg bg-error p-4 d-none  text-white " style="display: none"></p>

                                <textarea id="show-phrase" name="" readonly style="display: none" class="d-none form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300" id="" cols="30" rows="10"></textarea>
                                <button type="submit" class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" id="hide_phrase">Get Phrase </button>
                            </form>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>
    <script src="<?= $url ?>public/client/ThemeAuth/js/jquery-3.4.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <div id="loader" style="display: none; background-color:#31202000;" class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color:#31202000; border: 1px solid rgba(0, 0, 0, 0);">
                <div class="modal-body">
                    <center>
                        <p><img src="loader.gif" width="70px"></p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</main>
</div><br>

<script>
    $(document).ready(function() {
        $('#ResetAuthen').on('submit', function(e) {
            e.preventDefault();
            $(".response1").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Auth.php',
                data: $('#ResetAuthen').serialize(),
                dataType: "json",
                success: function(data) {
                    $(".response1").html(data.content);
                        $(".response1").css('display' , 'block');
                         

                        if (data.status == 1) {

                            $(".response1").removeClass('bg-error')
                            $(".response1").addClass('bg-success')
                        }
                },
                error: function(data, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#get_phrase').on('submit', function(e) {
            e.preventDefault();
            $(".response3").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Auth.php',
                data: $('#get_phrase').serialize(),
                dataType: "json",
                success: function(data) {
                    $(".response3").html(data.content);
                        $(".response3").css('display' , 'block');
                         

                        if (data.status == 1) {

                            $(".response3").removeClass('bg-error')
                            $(".response3").addClass('bg-success')
                        }


                },
                error: function(data, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#ChangePassword').on('submit', function(e) {
            e.preventDefault();
            $(".response").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Auth.php',
                data: $('#ChangePassword').serialize(),
                dataType: "json",
                success: function(data) {
                    $(".response").html(data.content);
                        $(".response").css('display' , 'block');
                         

                        if (data.status == 1) {

                            $(".response").removeClass('bg-error')
                            $(".response").addClass('bg-success')
                        }
                },
                error: function(data, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });
    });
</script>


<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>