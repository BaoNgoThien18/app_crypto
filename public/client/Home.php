<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");


if (!CheckLogin()) header("Location: /Login");

$title = 'Home';


require_once(__DIR__ . "../../../public/client/Header.php");
require_once(__DIR__ . "../../../public/client/Nav.php");

?>




<!-- Mobile Searchbar -->
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<!-- <div id="ShowPage">
        -->
<p id="notifyinfo"></p>
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <!-- Main
            Content Wrapper -->
    <div class="mt-12 text-center">
        <div class="col-span-12 lg:col-span-8">
            <div class="card bg-gradient-to-br from-blue-500 to-blue-600 px-4 pb-4 sm:px-8">
                <div class="flex items-center justify-between py-3 text-white">
                    <h2 class="text-sm+ font-medium tracking-wide">Total Balance</h2>
                    <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                    <div>
                        <div class="flex w-9/12 items-center space-x-1">
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
                            <p class="text-indigo-100">Daily Income</p>
                            <div class="mt-1 flex items-center space-x-2">
                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6"></path>
                                    </svg>
                                </div>
                                <p class="text-base font-medium text-white">$<?= auto_decimal_format($BNZ->get_row("SELECT SUM(`amount`) FROM `transactions` WHERE `email` = '" . $user['email'] . "' AND `from_to` = 'From'  ")['SUM(`amount`)']) ?: '0.00' ?></p>

                            </div> <a href="<?= $url ?>Overview" class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30 btnLink" id="overview.php"> Receive </a>
                        </div>
                        <div>
                            <p class="text-indigo-100">Daily Expense</p>
                            <div class="mt-1 flex items-center space-x-2">
                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                    </svg>
                                </div>
                                <p class="text-base font-medium text-white">$<?= auto_decimal_format($BNZ->get_row("SELECT SUM(`amount`) FROM `transactions` WHERE `email` = '" . $user['email'] . "' AND `from_to` = 'To'  ")['SUM(`amount`)']) ?: '0.00' ?></p>

                            </div> <a href="<?= $url ?>Overview" class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30 btnLink" id="overview.php"> Send </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4 pb-1 sm:mt-5 lg:mt-3" style="background-color: #192132;">
                <div class="card">
                    <div class="flex divide-x divide-slate-150 border-t border-slate-150 dark:divide-navy-500 dark:border-navy-500">
                        <button class="btn h-11 w-full rounded-none rounded-bl-lg font-medium text-success hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-success dark:bg-navy-800 btnLink" stroke="currentColor" id="w_bank"> Wallet to Bank </button> <button class="btn h-11 w-full rounded-none rounded-br-lg font-medium text-warning hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-warning dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25 btnLink" stroke="currentColor" id="sell.php"> Sell Order </button> <button class="btn h-11 w-full rounded-none rounded-br-lg font-medium text-error hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-error dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25 btnLink" stroke="currentColor" id="mining.php"> Mining </button>
                    </div>
                </div>
            </div>
            <p id="all_news">
            <div class="card mt-6 pb-1 sm:mt-5 lg:mt-6">
                <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                    <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100"> NEWS </h2>
                </div>
                <div class="p-4 rounded"><script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                    <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,tron,tether,binancecoin" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
            </div>
            </div>
            </p>
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Latest Activities </h2>
                </div>
                <div class="card mt-3">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-hoverable w-full text-left">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Activity </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Amount </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Date </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($BNZ->get_list("SELECT * FROM `transactions` WHERE   `email` = '" . $user['email'] . "'  ORDER BY `id` DESC ") as $tranItem) {
                                    $coin = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $tranItem['coin'] . "' ");
                                ?>
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500" id="24828678">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <a href="<?= $url ?>Transaction/<?= $tranItem['tran_id'] ?>" <div class="flex items-center space-x-4">

                                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg text-slate-300 dark:bg-navy-500 dark:text-navy-100 <?php if ($tranItem['status'] == 'Completed')  echo ' bg-success/10 text-success dark:bg-success dark:text-white';
                                                                                                                                                                            elseif ($tranItem['status'] == 'Pending') echo 'bg-warning/10 text-warning dark:bg-warning dark:text-white'
                                                                                                                                                                            ?>">
                                                    <i class="fa fa-arrow-<?= $tranItem['from_to'] == 'From' ? 'down' : 'up' ?>"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-400 dark:text-navy-100"> Transfer </p>
                                                    <p class="mt-0.2 text-xs text-slate-400 dark:text-navy-300">
                                                    </p>
                                                    <p class="font-semibold text-<?= status($tranItem['status']) ?>"><small><?= $tranItem['from_to'] ?>
                                                            <?= hideAddress($tranItem['address']) ?></small> </p>
                                                </div>
                    </div>
                    </a>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <p class="font-semibold text-<?= status($tranItem['status']) ?>"><small><?= auto_decimal_format($tranItem['unit']) ?> <?= $coin['name2'] ?></small></p>
                        <p class="font-semibold text-<?= status($tranItem['status']) ?>"><small>$<?= auto_decimal_format($tranItem['amount']) ?></small></p>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <small><?= gettime($tranItem['date']) ?></small>
                    </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div> <br> <br>
    </div>
    <!-- </main> --><br>

</main>
</div><br>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>