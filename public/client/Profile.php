<?php
require_once(__DIR__ . "../../../config/config.php");
require_once(__DIR__ . "../../../config/function.php");
$title = 'Profile';
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

        <!--
                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                -->
        <div class="col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="flex items-center space-x-2 pb-4">
                <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                    <p class="fa fa-user"></p>
                </div>
                <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100"> Account Details </h4>
            </div>

            <div x-data="{expandedItem:'item-1'}" class="space-y-4 sm:space-y-5">
                <div class="card" x-data="accordionItem('item-1')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> User Name </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" hidden="" style="height: 0px; overflow: hidden; display: none;">
                        <div class="px-4 pb-4">
                            <p> <?=$user['name']?> </p>
                        </div>
                    </div>
                </div>
                <div class="card" x-data="accordionItem('item-2')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> User Email </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> <?=$user['email']?></p>
                        </div>
                    </div>
                </div>
                <div class="card" x-data="accordionItem('item-3')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Mobile Number </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> <?=hideNumber($user['phone'])?> </p>
                        </div>
                    </div>
                </div>
                <div class="card" x-data="accordionItem('item-4')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Country </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> <?=$user['country']?> </p>
                        </div>
                    </div>
                </div>
                <div class="card" x-data="accordionItem('item-5')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> IP Address </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> <?=$user['ip']?> </p>
                        </div>
                    </div>
                </div>
                <div class="card" x-data="accordionItem('item-6')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Device </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="px-4 pb-4">
                            <p> <?=$user['device']?> </p>
                        </div>
                    </div>
                </div>
                <div class="card" x-data="accordionItem('item-7')">
                    <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"> Registration Date </h3>
                        <div :class="expanded &amp;&amp; '-rotate-180'" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300 -rotate-180"> <i class="fas fa-chevron-down"></i> </div>
                    </div>
                    <div x-collapse="" x-show="expanded" style="height: auto;">
                        <div class="px-4 pb-4">
                            <p> <?=date("Y/m/d", $user['createdate'])?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>
   
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



<?php require_once(__DIR__ . "../../../public/client/Footer.php"); ?>