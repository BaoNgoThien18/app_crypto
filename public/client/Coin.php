<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");


if (!CheckLogin()) header("Location: /Login");



if (isset($_GET['id'])) {

    if ($BNZ->num_rows("SELECT * FROM `coin` WHERE `symboy` = '" . $_GET['id'] . "'") < 1) {
        header("Location: /Overview");
    } else {
        $row = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $_GET['id'] . "'");
    }
}


$title = 'Coin';


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
    <div class="mt-12 text-center unselectable">
        <!-- <div class="h-7 w-7">
                    <a class="flex-grow-1"> </a><a
                        class="unselectable fa fa-angle-double-left dark:text-accent-light/200 backLink"
                        id="overview.php">back</a>
                </div> -->
        <div class="col-span-12 lg:col-span-8">
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                <!-- <p style="position: relative; top:-40px; right:-140px;"> <i id="balance1"><i
                                    class="fa fa-bar-chart" aria-hidden="true"></i>
                                <font color="red">-2.04%</font>
                            </i>
                        </p> -->

                <!--
                        <div class="avatar h-20 w-20"> -->
                <?= $row['img'] ?>
                <!--
                        </div> -->
                <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                    <center id="balance_usd">$<?= auto_decimal_format($my_coin[$row['symboy']] * $row['price'], 2)  ?></center>
                </h3>
                <p class="text-xs+" id="balance_val" style="text-transform: uppercase;-">
              
                <?= auto_decimal_format($my_coin[$row['symboy']], 0000) ?> (<?= $row['name'] ?>)</p>
                <div class="inline-space mt-3 flex grow flex-wrap items-start"> <a href="<?= $url ?>Send/<?= $row['symboy'] ?>" class="btn h-9 w-9 is-hexagon bg-info p-0 font-medium text-white hover:bg-info-focus hover:shadow-lg hover:shadow-error/50 focus:bg-info-focus active:bg-info-focus/90 btnLink" x-tooltip="'Send <?= $row['name2'] ?>'"> <i class="fa-solid fa-paper-plane"></i> </a>
                    <a href="<?= $url ?>Receive/<?= $row['symboy'] ?>" class="btn h-9 w-9 rounded-full bg-success p-0 font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus active:bg-success-focus/90 btnLink" id="receive.php?cryp=1&amp;net=BITCOIN" x-tooltip="'Receive <?= $row['name2'] ?>'"> <i class="fa fa-arrow-down"></i> </a> 
                    <a href="<?=$url?>Swap/<?=$row['symboy']?>" class="btn h-9 w-9 is-hexagon bg-primary p-0 font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus active:bg-primary-focus/90 btnLink" id="swap.php?cryp=1&amp;net=BITCOIN" x-tooltip="'Swap Your BTC To Other cryptocurrency'"> <i class="fa fa-exchange"></i>
                    </a> <button class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus hover:shadow-lg hover:shadow-info/50 focus:bg-info-focus active:bg-info-focus/90" onclick="window.location.href='https://www.moonpay.com/buy';" x-tooltip="'Buy <?= $row['name2'] ?>"> <i class="fa fa-shopping-cart"></i> </button>
                     <a href="<?=$url?>Connect" class="btn h-9 w-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus hover:shadow-lg hover:shadow-info/50 focus:bg-info-focus active:bg-info-focus/90 btnLink" id="connect.php" x-tooltip="'Connect to external wallet with no charges applied'"> <i class="fa fa-wallet"></i> </a>
                </div>
                <div class="mt-6 grid w-full grid-cols-2 gap-2"> </div>
            </div>
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
                                        Transactions </th>
                                    <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        <i class="fa fa-certificate"></i> Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="records">
                                <?php foreach ($BNZ->get_list("SELECT * FROM `transactions` WHERE   `email` = '" . $user['email'] . "' AND `coin` = '" . $row['symboy'] . "' ORDER BY `id` DESC ") as $tranItem) {
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
                        <p class="font-semibold text-<?= status($tranItem['status']) ?>"><small>$<?= auto_decimal_format( $tranItem['amount']) ?></small></p>
                    </td>
                    </tr>
                <?php } ?>


                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>&nbsp;<br><br>
    </div>

</main>
</div><br>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>