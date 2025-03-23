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

        <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
            <?= $row['img'] ?>
            <h3 class="pt-6 text-lg font-medium text-slate-700 dark:text-navy-100"> <?= auto_decimal_format($my_coin[$row['symboy']]) ?>
                <?= $row['name2'] ?></h3>
            <p class="text-xs+">$<?= auto_decimal_format($my_coin[$row['symboy']] * $row['price']) ?></p>
        </div>
        <form id="send" method="POST">
            <input type="hidden" name="type" value="Send">
            <input type="hidden" name="coin" value="<?= $row['symboy'] ?>">
            <div> <label class="block"> <span class="font-medium text-slate-600 dark:text-navy-100">Address</span>
                    <input class="mt-3 form-input rounded w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent input value1" placeholder="Address" type="text" value="" id="address" name="address"> </label>
            </div><br>
            <div>
                <label class="block "> <span class="font-medium text-slate-600 dark:text-navy-100">Network</span>

                    <select class="mt-3 form-input rounded w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent input value1" name="network" id="network">
                        <option value="">Select the Network</option>
                        <option value="BITCOIN">BITCOIN</option>
                        <option value="ERC20">ETHEREUM (ERC20)</option>
                        <option value="TRC20">TRON (TRC20)</option>
                        <option value="SOLANA">SOLANA</option>
                        <option value="POLYGON">POLYGON</option>
                        <option value="BEP20">BNB SMART CHAIN (BEP20)</option>
                    </select>
                    <div class="ts-wrapper mt-1.5 w-full single full has-items input-hidden">

                        <div class="ts-dropdown single" style="display: none; visibility: visible;">
                            <div role="listbox" tabindex="-1" class="ts-dropdown-content" id="network-ts-dropdown">
                                <div data-selectable="" data-value="BITCOIN" class="option" role="option" id="network-opt-1">BITCOIN</div>
                                <div data-selectable="" data-value="BEP20" class="option selected" role="option" id="network-opt-3">BNB SMART CHAIN (BEP20)</div>
                                <div data-selectable="" data-value="ERC20" class="option" role="option" id="network-opt-2">ETHEREUM (ERC20)</div>
                                <div data-selectable="" data-value="POLYGON" class="option" role="option" id="network-opt-6">POLYGON</div>
                                <div data-selectable="" data-value="SOLANA" class="option" role="option" id="network-opt-5">SOLANA</div>
                                <div data-selectable="" data-value="TRC20" class="option active" role="option" id="network-opt-4" aria-selected="true">TRON (TRC20)</div>
                            </div>
                        </div>
                    </div>
                </label>
            </div><br>
            <div> <span class="font-medium text-slate-600 dark:text-navy-100">Amount</span> <label class="mt-1 flex -space-x-px"> <span class="flex items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                        <span><?= $row['name2'] ?></span> </span>
                    <input class="form-input  w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent input value1" placeholder="Enter Price" type="number" name="amount" id="amount" step="0.00001" min="0" title="Currency" pattern="^\\d+(?:\\.\\d{1,2})?$"> <span class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                        <span id="usd"><small id="resAmount">$0</small></span> </span> </label>
            </div><br>

            <? if ($my_coin['ETHUSDT'] > 0) {
            echo '
            <div> <span class="font-medium text-slate-600 dark:text-navy-100">Estimated Gas Charge</span> <label class="mt-1 flex -space-x-px">
                    </span>
                    <input disabled id="fee" class="form-input rounded w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent input value1" type="text">
                    <span class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                        <span><small id="">ETH</small></span> </span> </label>
            </div><br>
             <? '; }?>


            <b class="font-medium text-slate-600 dark:text-navy-100">
                Google Authentication Code</span> <input class="form-input rounded w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent input value1" placeholder="- - - - - -" type="text" pattern="[0-9]*" inputmode="numeric" maxlength="6" name="pin" id="pin"> </label>
                <br>
                <br>

                <p class="response alert flex rounded-lg bg-error p-4 d-none     text-white" style="display: none">
                </p>
                <div class="mt-6 grid w-full grid-cols-2 gap-2">
                    <button class="btn space-x-2 bg-primary px-0 font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" id="submit-btn">Send</button>
                </div><br><br><br>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


            </b>
        </form>
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
                    $(".response").css('display', 'block');

                    if (data.status == 1) {

                        $(".response").removeClass('bg-error')
                        $(".response").addClass('bg-success')

                        setTimeout(() => {
                            window.location.href = "<?= $url ?>Coin/<?= $row['name'] ?>"
                        }, 2000);
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
            $('#fee').val(data.fee);

        });

    })
</script>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>