<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");


if (!CheckLogin()) header("Location: /Login");


$title = 'Overview';

require_once(__DIR__ . "../../../public/client/Header.php");
require_once(__DIR__ . "../../../public/client/Nav.php");

?>




<!-- Mobile Searchbar -->
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<!-- <div id="ShowPage">
        -->
<p id="notifyinfo"></p>
<main class="main-content w-full px-[var(--margin-x)] pb-8" id="ShowPage" style="height:auto;" onscroll="document.getElementById('toolbar').style.top = Math.max(100, window.scrollY) + 'px'">
    <!-- Main
            Content Wrapper -->
    <!-- <main class="main-content w-full px-[var(--margin-x)] pb-8"> -->
    <div class="mt-12 text-center">
        <div class="col-span-12 lg:col-span-8 unselectable">
            <div class="col-span-12 grid card bg-gradient-to-br from-blue-500 to-blue-600 px-4 pb-4 sm:px-5">
                <div class="flex items-center justify-between py-3 text-white">
                    <h2 class="text-sm+ font-medium tracking-wide">Total Balance</h2>

                    <small class="text-indigo-100 text-xxs coinLink" id="connect.php"><a href="<?= $url ?>Connect"><i class="fa fa-wallet flex items-right"> Connect
                                Wallet </a></small></i>

                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                    <div>
                        <div class="flex w-9/12 items-left space-x-1">
                            <p class="text-xs text-indigo-100 line-clamp-1"> WALLET ID
                                <b><?= $user['wallet_id'] ?></b>


                            </p> <button data-clipboard-text="<?= $user['wallet_id'] ?>" class="copy btn h-5 w-5 shrink-0 rounded-full p-0 text-white hover:bg-white/20 focus:bg-white/20 active:bg-white/25" id="copy_id"> <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z">
                                    </path>
                                    <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z">
                                    </path>
                                </svg>
                                <p class="copied"></p>
                            </button>


                        </div>
                        <div class="mt-3 text-3xl text-left font-bold text-white"> $<?= $total_money ?> </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 sm:gap-5 lg:gap-6 text-3sm text-left">
                        <div>
                            <p class="text-indigo-100">Today's Income</p>
                            <div class="mt-1 flex items-center space-x-2">
                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6"></path>
                                    </svg>
                                </div>
                                <p class="text-base font-medium text-white">$<?= auto_decimal_format( $BNZ->get_row("SELECT SUM(`amount`) FROM `transactions` WHERE `email` = '" . $user['email'] . "' AND `from_to` = 'From'  ")['SUM(`amount`)']  ) ? : '0.00' ?></p>
                            </div>
                        </div>
                        <div>
                            <p class="text-indigo-100">Today's Expense</p>
                            <div class="mt-1 flex items-center space-x-2">
                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                    </svg>
                                </div>
                                <p class="text-base font-medium text-white">$<?= auto_decimal_format( $BNZ->get_row("SELECT SUM(`amount`) FROM `transactions` WHERE `email` = '" . $user['email'] . "' AND `from_to` = 'To' ")['SUM(`amount`)']  ) ? : '0.00' ?></p>
                            </div>
                            <!--
                                        <button
                                            class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30 btnLink"
                                            id="overview.php" > Connect &nbsp; <i class="fa fa-exchange"></i>
                                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-5 lg:mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Coin price </h2>
                    <!-- <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        My Coin </h2> -->
                </div>

                <div class="card mt-3"> </div>
            </div>
        </div>


        <div class="mt-5">
            <?php $i = 0;
            foreach ($BNZ->get_list("SELECT * FROM `coin`") as $row) {
                $i++; ?>
                <a href="<?= $url ?>Coin/<?= $row['symboy'] ?>">
                    <div class="mt-4 col-span-12 grid-cols-1 gap-1 sm:gap-3 lg:col-span-4 lg:gap-6 coinLink">
                        <div class="flex cursor-pointer items-center justify-between unselectable">
                            <div class="flex items-center space-x-3">
                                <div class="avatar">
                                    <?= $row['img'] ?>
                                </div>
                                <div>
                                    <p class="text-slate-700 dark:text-navy-100"> $<?=  auto_decimal_format( $row['price'] ) ?> </p>
                                    <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200"> <span class="badge bg-danger ms-1 align-bottom">
                                            <font color="red"><?= $row['price_24h'] ?></font>
                                        </span> </p>
                                </div>
                            </div>
                            <p class="mt-0 text-xs text-indigo-600" style="float:right;">
                            <?= auto_decimal_format($my_coin[$row['symboy']], 3) ?> <?= $row['name2'] ?> <br> 
                            <small style="float:right;" class="text-slate-300">$<?= auto_decimal_format( $my_coin[$row['symboy']] * $row['price'] ) ?> </small></p>
                        </div> <br>
                    </div>
                </a>
            <?php } ?>
        </div>

    </div><br><br>
</main>
</div><br>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>