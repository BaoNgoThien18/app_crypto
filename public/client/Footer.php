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
</div>
<div id="footermenu">
    <ul>
        <div style="display: flex; justify-content: center; align-items: center;">
            <li><a href="<?= $url ?>Home" class="bulletinLink unselectable flex-grow-1" id="home"><i class="fas fa-home"></i></a></li>
            <li><a href="<?= $url ?>Overview" class="bulletinLink unselectable flex-grow-1" id="overview"><i class="fa fa-qrcode"></i></a></li>
            <li>
                <a href="<?= $url ?>Connect" class="bulletinLink unselectable flex-grow-1" id="connect" x-tooltip="'Connect to external wallet with no charges applied'"> <i class="fa fa-wallet"></i></a>
            </li>
            <li><a href="<?= $url ?>Profile" class="bulletinLink unselectable flex-grow-1" id="profile"><i class="fa fa-user"></i></a></li>
            <li><a href="<?= $url ?>Settings" class="bulletinLink unselectable flex-grow-1" id="settings"><i class="fa fa-gear"></i></a></li>
            <li><a href="<?= $url ?>Logout" class="unselectable flex-grow-1" id="logout_account1"><i class="fa fa-power-off"></i></a></li>
        </div>
    </ul>
</div>
<div id="x-teleport-target"></div>
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
</script>
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
<script src="<?= $url ?>assets/template/jquery-3.4.1.min.js"></script>
<script src="<?= $url ?>assets/template/page_set.js"></script>



<style type="text/css">
    .unselectable {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    #footermenu {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #2a3042;
        color: #fff;
        border-radius: 8px;
    }

    #footermenu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    #footermenu li {
        text-align: center;
        font-size: 18px;
    }

    #footermenu a {
        display: block;
        color: #fff;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    #footermenu i {
        margin-right: 10px;
    }
</style>
<style>
    /*Translator*/

    @media (max-width: 1450px) {
        #yt-widget .yt-listbox {
            width: 700px !important;
        }
    }

    @media (max-width: 1000px) {
        #yt-widget .yt-listbox {
            width: 450px !important;
        }
    }

    @media (max-width: 750px) {
        #yt-widget .yt-listbox {
            width: 300px !important;
        }
    }

    @media (max-width: 600px) {
        #yt-widget .yt-listbox {
            width: 100% !important;
        }
    }

    .ytWidget {
        position: fixed !important;
        left: 50%;
        transform: translate(-50%);
        bottom: 12px !important;
        z-index: 99999 !important;
        text-align: center !important;
    }

    #yt-widget .yt-listbox {
        overflow-x: scroll !important;
        bottom: 40px !important;
    }

    .yt-servicelink {
        display: none !important;
    }

    /**/
</style>
<p class="logout"></p>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div id="google_translate_element" class="ytWidget"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new
        google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>

<script>
    new ClipboardJS('.copy');
</script>

<?= $BNZ->site('plugin'); ?>


<style>
.widget-visible>iframe:first-child {
    bottom: 72px !important;
}
iframe#s8qstastoaa1693311040663 {
    bottom: 62px !important;
}
.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
    padding-top: 100px !important;
}

</style>


<!-- <script src="//code.tidio.co/ixhsnlfm8bnej42rcglxts0k5d88xpew.js" async=""></script> -->
<!-- <script
    type="text/javascript"
    src="http:////translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

<!-- <script src=".<?= $url ?>assets/template/widget-v4.tidiochat.com.js" type="text/javascript"></script> -->
</div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
</svg><iframe id="tidio-chat-code" title="Tidio Chat code" style="display: none;"></iframe>
<div id="tidio-chat"><iframe title="Tidio Chat" id="tidio-chat-iframe" style="display: block; border: none; position: fixed; inset: auto 9px 35px auto; width: 264px; height: 94px; opacity: 1; color-scheme: none; background: none transparent !important; margin: 0px; max-height: 100vh; max-width: 100vw; transform: translateY(0px); transition: none 0s ease 0s !important; visibility: visible; z-index: 999999999 !important; border-radius: 47px 30px 47px 47px;"></iframe>
</div>
</body>