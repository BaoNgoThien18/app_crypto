<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");


if (!CheckLogin()) header("Location: /Login");



if (isset($_GET['id'])) {

    if ($BNZ->num_rows("SELECT * FROM `transactions` WHERE `tran_id` = '" . $_GET['id'] . "'") < 1) {
        header("Location: /Overview");
    } else {
        $row = $BNZ->get_row("SELECT * FROM `transactions` WHERE `tran_id` = '" . $_GET['id'] . "'");
    }
}


$coin = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $row['coin'] . "' ");

$title = 'Transaction';


require_once(__DIR__ . "../../../public/client/Header.php");
require_once(__DIR__ . "../../../public/client/Nav.php");


?>




<!-- Mobile Searchbar -->
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<!-- <div id="ShowPage">
        -->
<p id="notifyinfo"></p>
<main class="main-content w-full px-[var(--margin-x)] pb-8" style="height:auto;">
    <div class="mt-12 text-center" style="height:600px;">
        <!-- <div class="h-7 w-7 unselectable">
            <a class="flex-grow-1"> </a><a class="unselectable fa fa-angle-double-left dark:text-accent-light/100 backLink" id="account.php?cryp=USDT&amp;net=ERC20">back</a>
        </div> -->
        <div class="mt-4 sm:mt-5 lg:mt-6 imgbg" id="htmltoimage">
            <div class="col-span-12 lg:col-span-8 unselectable">
                <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                    <?= $coin['img'] ?>
                    <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                        <center>
                            <p class="font-bold text-success" style="float:right;"><b><?= auto_decimal_format($row['unit']) ?> <?= $coin['name2'] ?></b></p>
                        </center>
                    </h3>
                    <p class="text-xs+"></p>
                    <p class="font-semibold text-success" style="float:right;"><b>$<?= auto_decimal_format($row['amount']) ?></b></p>
                    <p></p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                    <table class="is-hoverable w-full text-left">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 unselectable"> Details </th>
                                <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"> <i class=" fa-dot" style="float:right;">ID <span class="text-danger">18680614</i> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Unit </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <p class="font-bold text-success" style="float:right;"><b><?= auto_decimal_format($row['unit']) ?> <?= $coin['name2'] ?></b></p>
                                </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Amount </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <p class="font-semibold text-success" style="float:right;"><b>$<?= auto_decimal_format($row['amount']) ?></b></p>
                                </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Coin </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5"> <b style="float:right;"><?= $coin['name2'] ?></b> </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Address </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5"> <small style="float:right;"><?= hideAddress($row['address']) ?></small> </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Confirmation </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5"> 
                                    <b style="float:right;"><?= $row['confirmation'] ?> <?= $row['confirmation'] == '10/10' ? '&nbsp;<i class="fa fa-check"></i>' : '' ?> </b> 
                                    <?= $row['confirmation'] == '0/10' ? '<div style="float:right;" class="mx-2 spinner h-5 w-5 animate-spin rounded-full border-2 border-primary border-r-transparent dark:border-accent dark:border-r-transparent"></div>' : '' ?>
                                    
                            
                            </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Status </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5"> <b style="float:right;">
                                        <font color="#33880d;" class="text-<?= status($row['status']) ?>">
                                            <p style="float:right;"><?= $row['status'] ?></p>
                                        </font>
                                    </b> </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500 unselectable">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Date </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5"> <b style="float:right;"><?= gettime($row['date']) ?></b> </td>
                            </tr>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <p class="font-medium text-slate-400 dark:text-navy-100"> Transaction ID </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5"> <b style="float:right;"># <?= $row['tran_id'] ?></b> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- </div> -->
            <div class="h-7 w-7"> </div>
            <div class="h-7 w-7">
                <!-- <a class="flex-grow-1"> <button onclick="downloadimage()" class="clickbtn btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Save <i class="fa fa-download" id="download"></i>           </button>                            </a> -->
            </div>
        </div> <br> <br> <br> <br> <br><br>



    </div>
</main>
</div><br>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>