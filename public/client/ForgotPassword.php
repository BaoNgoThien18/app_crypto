<?php
require_once("../../config/config.php");
require_once("../../config/function.php");
$title = 'FORGOT PASSWORD | ' . $BNZ->site('webname');
require_once("../../public/client/Header_Auth.php");

?>

<?php

if (isset($_POST['login'])) {
    $username = check_string($_POST['username']);
    $password = check_string($_POST['password']);

    $user = $BNZ->get_row("SELECT * FROM `users` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "'");
    if ($user) {
        $_SESSION['username'] = $user['username'];
        header("Location: /admin");
    } else {
    }
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
                        Re-set Password
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Get access to your account
                    </p>
                </div>
            </div>

            <form method="POST" id="ForgetPassword">


                <input type="hidden" name="type" value="ForgotPassword">

                <div class="card mt-5 rounded-lg p-5 lg:p-7">
                    <!-- <label class="block">
                            <span>Full Name:</span>
                            <span class="relative mt-1.5 flex">
                                <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Enter Fullname" type="text" id="name" name="name">
                                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <a class="fa fa-user"></a>
                                </span>
                            </span>
                        </label><br> -->


                    <label class="block">
                        <span>Email:</span>
                        <span class="relative mt-1.5 flex">
                            <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Enter Email" type="email" id="email" name="email">
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <a class="fa fa-envelope"></a>
                            </span>
                        </span>
                    </label>



                    <!-- <label class="mt-4 block">
                            <span>Password:</span>
                            <span class="relative mt-1.5 flex">
                                <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Enter Password" type="password" id="password" name="password">
                                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <a class="fa fa-lock"></a>
                                </span>
                            </span>
                        </label>

                        <div class="mt-4 flex items-center justify-between space-x-2">
                            <label class="inline-flex items-center space-x-2">
                                <input class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent" type="checkbox" />
                                <span class="line-clamp-1">Remember me</span>
                            </label>
                            <a href="password-forget" class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">Forgot Password?</a>
                        </div> -->

                    <br>

                    <p class="response alert flex rounded-lg bg-error p-4 d-none  text-white " style="display: none"></p>




                    <button type="submit" id="forget" class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus">Sign In </button>

                    <div class="mt-4 text-center text-xs+">
                        <p class="line-clamp-1">
                            <span>Back to login?
                            </span>
                            <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent" href="<?= $url ?>Login">Login</a>
                        </p>
                    </div>


                    <!-- <div class="my-7 flex items-center space-x-3">
                            <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                            <p>OR</p>
                            <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                        </div>

                        <a class="flex space-x-4" href="<?= $url ?>ForgotPassword">
                            <p class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <a href="<?= $url ?>ForgotPassword">
                                <a  class="fa fa-lock"></a>
                                <span>   <a href="<?= $url ?>ForgotPassword"> Recover Using Email  </a></span>
                                </a>
                            </p>
                        </a> -->

                </div>



            </form>

            <form method="POST" id="CodeForgetPassword" style="display: none;">

                <input type="hidden" id="CodeEmail" name="CodeEmail" value="">
                <input type="hidden" name="type" value="CodeForgetPassword">

                <div class="card mt-5 rounded-lg p-5 lg:p-7">
                    <label class="mt-4 block">
                        <span>OTP CODE:</span>
                        <span class="relative mt-1.5 flex">
                            <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Enter OPT CODE" type="tel" id="code" name="code" maxlength="6" />
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <a class="fa fa-code"></a>
                            </span>
                        </span>
                    </label>

                    <label class="mt-4 block">
                        <span>NEW PASSWORD:</span>
                        <span class="relative mt-1.5 flex">
                            <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="NEW PASSWORD" type="password" id="password1" name="password1" />
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <a class="fa fa-key"></a>
                            </span>
                        </span>
                    </label>

                    <label class="mt-4 block">
                        <span>RE-TYPE PASSWORD:</span>
                        <span class="relative mt-1.5 flex">
                            <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="RE-TYPE PASSWORD" type="password" id="password2" name="password2" />
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <a class="fa fa-key"></a>
                            </span>
                        </span>
                    </label>

                    <br>

                    <p class="response1 alert flex rounded-lg bg-error p-4 d-none  text-white " style="display: none"></p>


                    <button type="submit" id="login" class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Re-Set &nbsp; <a class="fa fa-key"></a></button>
            </form>



        </div>
        <div class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300">
            <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
        </div>

        <div class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300">
            <a href="#">Privacy Notice</a>
            <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
            <a href="#">Term of service</a>
        </div>

</div>
</main>
</div>
<? require_once("../../public/client/Footer_Auth.php"); ?>

<script>
    $(document).ready(function() {
        $('#ForgetPassword').on('submit', function(e) {
            e.preventDefault();
            $(".response").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")
            $(".response").css('display', 'block');
            $('#forget').attr('disabled', 'disabled')

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Auth.php',
                data: $('#ForgetPassword').serialize(),
                dataType: "json",
                success: function(data) {

                    $('#forget').removeAttr('disabled')

                    $(".response").html(data.content);
                    $(".response").css('display', 'block');


                    if (data.status == 1) {

                        $(".response").removeClass('bg-error')
                        $(".response").addClass('bg-success')
                        $('#ForgetPassword').css('display', 'none')
                        $('#CodeForgetPassword').css('display', 'block')
                        $('#CodeEmail').val($('#email').val())




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
        $('#CodeForgetPassword').on('submit', function(e) {
            e.preventDefault();
            $(".response1").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Auth.php',
                data: $('#CodeForgetPassword').serialize(),
                dataType: "json",
                success: function(data) {
                    $(".response1").html(data.content);
                    $(".response1").css('display', 'block');


                    if (data.status == 1) {

                        $(".response1").removeClass('bg-error')
                        $(".response1").addClass('bg-success')

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