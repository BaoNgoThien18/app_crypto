<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");


if (!CheckLogin()) header("Location: /Login");

$wallet_address = (array)json_decode($user['wallet_address']);

if (isset($_GET['id'])) {

    if ($BNZ->num_rows("SELECT * FROM `coin` WHERE `symboy` = '" . $_GET['id'] . "'") < 1) {
        header("Location: /Overview");
    } else {
        $row = $BNZ->get_row("SELECT * FROM `coin` WHERE `symboy` = '" . $_GET['id'] . "'");
    }
}



$title = $BNZ->site('description');

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
    <div class="mt-12 text-center">
      

        <div class="imgbg" id="htmltoimage">
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                <?=$row['img']?>
                <h3 class="pt-6 text-lg font-medium text-slate-700 dark:text-navy-100"> <?=$row['name2']?> </h3>
                <div>
                    <div class="card mt-3">
                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table class="is-hoverable w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Address </th>
                                        <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            <i class="fa fa-certificate" style="float:right;"> <?=$row['name']?></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody> </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="h-7 w-7"> </div>
                    <form method="POST">
                        <p class="response"></p>
                        <div> <label class="block">
                                <center width="100px"> <img src="<?=$wallet_address[$row['symboy']]->qrcode?>" width="200px"><br>
                                    <p>Send only ETH to this deposit address. This address does not support
                                        deposit of non-fungible tokens.</p>
                                </center>
                            </label>
                        </div><br>
                        <div> <label class="mt-1 flex -space-x-px"> <span class="flex items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                                    <span><?=$row['name2']?></span> </span> <input class="form-input w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent input value1" placeholder="<?=$wallet_address[$row['symboy']]->address?>" type="text" name="amount" id="address" value="<?=$wallet_address[$row['symboy']]->address?>" readonly="">
                                <p class="copied"></p> <span class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                                    <span id="copyButton" class="copy" data-clipboard-text="<?=$wallet_address[$row['symboy']]->address?>">Copy</span> </span>
                            </label>
                        </div>
                    </form>
                </div>
            </div><br>
            <!-- <div class="h-7 w-7">
                <a class="flex-grow-1"> <button onclick="downloadimage()" class="clickbtn btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Save
                        <i class="fa fa-download" id="download"></i> </button> </a>
            </div> -->
        </div><br><br> <br> <br>



    </div>
</main>
</div><br>

<script src="<?= $url ?>public/client/ThemeAuth/js/jquery-3.4.1.min.js"></script>


<script>
    $(document).ready(function() {
        $('#send').on('submit', function(e) {
            e.preventDefault();
            $(".response").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Main.php',
                data: $('#send').serialize(),
                dataType: "json",
                success: function(data) {
                    $(".response").html(data.content);
                },
                error: function(data, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });
    });
</script>

<script>
    $('#amount').on('change', function() {

        $.ajax({
            url: '<?= $url ?>assets/ajaxs/Main.php',
            type: 'POST',
            data: {
                type: 'getAmountCoin',
                unit: $('#amount').val(),
                coin: '<?= $row['symboy'] ?>'
            }
        }).done(function(res) {
            data = JSON.parse(res)
            $('#resAmount').html('$' + data.amount);
        });

    })
</script>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>