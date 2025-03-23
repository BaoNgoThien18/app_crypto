<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    <div class="main-sidebar">
        <div class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
            <!-- Application Logo -->
            <div class="flex pt-4">
                <a>
                    <!--
                            <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                                 src="images/app-logo.svg"  alt="logo"  /> -->
                </a> <button @click="$store.global.isSidebarExpanded = false" class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg> </button>
            </div>
            <!-- Main Sections Links -->
            <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
                <!--
                        Dashobards -->
                <a id="home" href="<?= $url ?>Home" class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90 bulletinLink" x-tooltip.placement.right="'Dashboards'"> <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-opacity=".3" d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z">
                        </path>
                        <path fill="currentColor" d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z">
                        </path>
                        <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"></path>
                        <path fill="currentColor" d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z">
                        </path>
                    </svg> </a>
                <!-- Apps -->
                <a id="overview" href="<?= $url ?>Overview" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 bulletinLink" x-tooltip.placement.right="'Overview'"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M7.228,11.464H1.996c-0.723,0-1.308,0.587-1.308,1.309v5.232c0,0.722,0.585,1.308,1.308,1.308h5.232                  c0.723,0,1.308-0.586,1.308-1.308v-5.232C8.536,12.051,7.95,11.464,7.228,11.464z M7.228,17.351c0,0.361-0.293,0.654-0.654,0.654                  H2.649c-0.361,0-0.654-0.293-0.654-0.654v-3.924c0-0.361,0.292-0.654,0.654-0.654h3.924c0.361,0,0.654,0.293,0.654,0.654V17.351z                   M17.692,11.464H12.46c-0.723,0-1.308,0.587-1.308,1.309v5.232c0,0.722,0.585,1.308,1.308,1.308h5.232                  c0.722,0,1.308-0.586,1.308-1.308v-5.232C19,12.051,18.414,11.464,17.692,11.464z M17.692,17.351c0,0.361-0.293,0.654-0.654,0.654                  h-3.924c-0.361,0-0.654-0.293-0.654-0.654v-3.924c0-0.361,0.293-0.654,0.654-0.654h3.924c0.361,0,0.654,0.293,0.654,0.654V17.351z                   M7.228,1H1.996C1.273,1,0.688,1.585,0.688,2.308V7.54c0,0.723,0.585,1.308,1.308,1.308h5.232c0.723,0,1.308-0.585,1.308-1.308                  V2.308C8.536,1.585,7.95,1,7.228,1z M7.228,6.886c0,0.361-0.293,0.654-0.654,0.654H2.649c-0.361,0-0.654-0.292-0.654-0.654V2.962                  c0-0.361,0.292-0.654,0.654-0.654h3.924c0.361,0,0.654,0.292,0.654,0.654V6.886z M17.692,1H12.46c-0.723,0-1.308,0.585-1.308,1.308                  V7.54c0,0.723,0.585,1.308,1.308,1.308h5.232C18.414,8.848,19,8.263,19,7.54V2.308C19,1.585,18.414,1,17.692,1z M17.692,6.886                  c0,0.361-0.293,0.654-0.654,0.654h-3.924c-0.361,0-0.654-0.292-0.654-0.654V2.962c0-0.361,0.293-0.654,0.654-0.654h3.924                  c0.361,0,0.654,0.292,0.654,0.654V6.886z">
                        </path>
                    </svg> </a>
                <!-- Forms -->
                <a id="connect" href="<?= $url ?>Connect" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 bulletinLink" x-tooltip.placement.right="'Wallet Connect'"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M4.3,15.249H3.428c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,15.444,4.541,15.249,4.3,15.249 M6.916,15.249H6.044c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,15.444,7.157,15.249,6.916,15.249 M13.894,8.271h0.872c0.241,0,0.437-0.195,0.437-0.437c0-0.241-0.195-0.436-0.437-0.436h-0.872c-0.241,0-0.437,0.194-0.437,0.436C13.457,8.077,13.652,8.271,13.894,8.271 M4.3,7.399H3.428c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437H4.3c0.241,0,0.436-0.195,0.436-0.437C4.736,7.594,4.541,7.399,4.3,7.399 M15.638,11.324c-0.241,0-0.436,0.194-0.436,0.436s0.194,0.437,0.436,0.437s0.437-0.195,0.437-0.437S15.879,11.324,15.638,11.324 M14.766,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.241,0,0.437-0.195,0.437-0.437C15.202,15.444,15.007,15.249,14.766,15.249 M12.149,7.399h-0.872c-0.241,0-0.437,0.194-0.437,0.436c0,0.242,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,7.594,12.39,7.399,12.149,7.399 M17.818,9.144V5.655c0-0.939-0.745-1.7-1.676-1.737l-0.104-0.859L9.276,3.88L2.824,2.151l-0.471,1.76H2.119c-0.963,0-1.744,0.781-1.744,1.744v10.466c0,0.963,0.781,1.744,1.744,1.744h13.955c0.963,0,1.744-0.781,1.744-1.744v-1.744c0.963,0,1.744-0.781,1.744-1.745v-1.744C19.562,9.925,18.781,9.144,17.818,9.144 M16.946,5.655v0.242c-0.18-0.104-0.377-0.178-0.589-0.213L16.25,4.801C16.646,4.882,16.946,5.234,16.946,5.655 M15.277,4.029l0.184,1.507l-3.929-1.052L15.277,4.029z M3.44,3.219l9.09,2.436H2.788L3.44,3.219z M1.247,5.655c0-0.481,0.39-0.872,0.871-0.872l-0.24,0.896C1.65,5.711,1.438,5.786,1.247,5.897V5.655z M16.946,16.121c0,0.48-0.392,0.872-0.872,0.872H2.119c-0.482,0-0.872-0.392-0.872-0.872V7.399c0-0.481,0.39-0.872,0.872-0.872h13.955c0.48,0,0.872,0.391,0.872,0.872v1.744h-1.744c-0.964,0-1.745,0.781-1.745,1.744v1.744c0,0.964,0.781,1.745,1.745,1.745h1.744V16.121z M18.69,12.632c0,0.481-0.392,0.873-0.872,0.873h-2.616c-0.482,0-0.873-0.392-0.873-0.873v-1.744c0-0.481,0.391-0.872,0.873-0.872h2.616c0.48,0,0.872,0.391,0.872,0.872V12.632z M12.149,15.249h-0.872c-0.241,0-0.437,0.195-0.437,0.436c0,0.241,0.195,0.437,0.437,0.437h0.872c0.24,0,0.436-0.195,0.436-0.437C12.585,15.444,12.39,15.249,12.149,15.249 M9.533,15.249H8.661c-0.241,0-0.436,0.195-0.436,0.436c0,0.241,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,15.444,9.774,15.249,9.533,15.249 M6.916,7.399H6.044c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C7.352,7.594,7.157,7.399,6.916,7.399 M9.533,7.399H8.661c-0.241,0-0.436,0.194-0.436,0.436c0,0.242,0.195,0.437,0.436,0.437h0.872c0.241,0,0.436-0.195,0.436-0.437C9.969,7.594,9.774,7.399,9.533,7.399">
                        </path>
                    </svg> </a>
                <!------Profile------>
                <a id="profile" href="<?= $url ?>Profile" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 bulletinLink" x-tooltip.placement.right="'Profile'"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M14.023,12.154c1.514-1.192,2.488-3.038,2.488-5.114c0-3.597-2.914-6.512-6.512-6.512                c-3.597,0-6.512,2.916-6.512,6.512c0,2.076,0.975,3.922,2.489,5.114c-2.714,1.385-4.625,4.117-4.836,7.318h1.186                c0.229-2.998,2.177-5.512,4.86-6.566c0.853,0.41,1.804,0.646,2.813,0.646c1.01,0,1.961-0.236,2.812-0.646                c2.684,1.055,4.633,3.568,4.859,6.566h1.188C18.648,16.271,16.736,13.539,14.023,12.154z M10,12.367                c-2.943,0-5.328-2.385-5.328-5.327c0-2.943,2.385-5.328,5.328-5.328c2.943,0,5.328,2.385,5.328,5.328                C15.328,9.982,12.943,12.367,10,12.367z">
                        </path>
                    </svg> </a>
                <!-- Components -->
                <a id="settings" href="<?= $url ?>Settings" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 bulletinLink" x-tooltip.placement.right="'Settings'"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M10.032,8.367c-1.112,0-2.016,0.905-2.016,2.018c0,1.111,0.904,2.014,2.016,2.014c1.111,0,2.014-0.902,2.014-2.014C12.046,9.271,11.143,8.367,10.032,8.367z M10.032,11.336c-0.525,0-0.953-0.427-0.953-0.951c0-0.526,0.427-0.955,0.953-0.955c0.524,0,0.951,0.429,0.951,0.955C10.982,10.909,10.556,11.336,10.032,11.336z">
                        </path>
                        <path fill="none" d="M17.279,8.257h-0.785c-0.107-0.322-0.237-0.635-0.391-0.938l0.555-0.556c0.208-0.208,0.208-0.544,0-0.751l-2.254-2.257c-0.199-0.2-0.552-0.2-0.752,0l-0.556,0.557c-0.304-0.153-0.617-0.284-0.939-0.392V3.135c0-0.294-0.236-0.532-0.531-0.532H8.435c-0.293,0-0.531,0.237-0.531,0.532v0.784C7.582,4.027,7.269,4.158,6.966,4.311L6.409,3.754c-0.1-0.1-0.234-0.155-0.376-0.155c-0.141,0-0.275,0.055-0.375,0.155L3.403,6.011c-0.208,0.207-0.208,0.543,0,0.751l0.556,0.556C3.804,7.622,3.673,7.935,3.567,8.257H2.782c-0.294,0-0.531,0.238-0.531,0.531v3.19c0,0.295,0.237,0.531,0.531,0.531h0.787c0.105,0.318,0.236,0.631,0.391,0.938l-0.556,0.559c-0.208,0.207-0.208,0.545,0,0.752l2.254,2.254c0.208,0.207,0.544,0.207,0.751,0l0.558-0.559c0.303,0.154,0.616,0.285,0.938,0.391v0.787c0,0.293,0.238,0.531,0.531,0.531h3.191c0.295,0,0.531-0.238,0.531-0.531v-0.787c0.322-0.105,0.636-0.236,0.938-0.391l0.56,0.559c0.208,0.205,0.546,0.207,0.752,0l2.252-2.254c0.208-0.207,0.208-0.545,0.002-0.752l-0.559-0.559c0.153-0.303,0.285-0.615,0.389-0.938h0.789c0.295,0,0.532-0.236,0.532-0.531v-3.19C17.812,8.495,17.574,8.257,17.279,8.257z M16.747,11.447h-0.653c-0.241,0-0.453,0.164-0.514,0.398c-0.129,0.496-0.329,0.977-0.594,1.426c-0.121,0.209-0.089,0.473,0.083,0.645l0.463,0.465l-1.502,1.504l-0.465-0.463c-0.174-0.174-0.438-0.207-0.646-0.082c-0.447,0.262-0.927,0.463-1.427,0.594c-0.234,0.061-0.397,0.271-0.397,0.514V17.1H8.967v-0.652c0-0.242-0.164-0.453-0.397-0.514c-0.5-0.131-0.98-0.332-1.428-0.594c-0.207-0.123-0.472-0.09-0.646,0.082l-0.463,0.463L4.53,14.381l0.461-0.463c0.169-0.172,0.204-0.434,0.083-0.643c-0.266-0.461-0.467-0.939-0.596-1.43c-0.06-0.234-0.272-0.398-0.514-0.398H3.313V9.319h0.652c0.241,0,0.454-0.162,0.514-0.397c0.131-0.498,0.33-0.979,0.595-1.43c0.122-0.208,0.088-0.473-0.083-0.645L4.53,6.386l1.503-1.504l0.46,0.462c0.173,0.172,0.437,0.204,0.646,0.083c0.45-0.265,0.931-0.464,1.433-0.597c0.233-0.062,0.396-0.274,0.396-0.514V3.667h2.128v0.649c0,0.24,0.161,0.452,0.396,0.514c0.502,0.133,0.982,0.333,1.433,0.597c0.211,0.12,0.475,0.089,0.646-0.083l0.459-0.462l1.504,1.504l-0.463,0.463c-0.17,0.171-0.202,0.438-0.081,0.646c0.263,0.448,0.463,0.928,0.594,1.427c0.061,0.235,0.272,0.397,0.514,0.397h0.651V11.447z">
                        </path>
                    </svg> </a>
                <!-- Elements -->
                <a href="<?= $url ?>Logout" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25" x-tooltip.placement.right="'Logout'">
                    <svg class="svg-icon" viewBox="0 0 20 20" id="logout_account">
                        <path d="M12.546,4.6h-5.2C4.398,4.6,2,7.022,2,10c0,2.978,2.398,5.4,5.346,5.4h5.2C15.552,15.4,18,12.978,18,10C18,7.022,15.552,4.6,12.546,4.6 M12.546,14.6h-5.2C4.838,14.6,2.8,12.536,2.8,10s2.038-4.6,4.546-4.6h5.2c2.522,0,4.654,2.106,4.654,4.6S15.068,14.6,12.546,14.6 M12.562,6.2C10.488,6.2,8.8,7.904,8.8,10c0,2.096,1.688,3.8,3.763,3.8c2.115,0,3.838-1.706,3.838-3.8C16.4,7.904,14.678,6.2,12.562,6.2 M12.562,13C10.93,13,9.6,11.654,9.6,10c0-1.654,1.33-3,2.962-3C14.21,7,15.6,8.374,15.6,10S14.208,13,12.562,13">
                        </path>
                    </svg> </a>
            </div>
            <!-- Bottom Links -->
        </div>
    </div>
    <!-- </div> -->
    <!-- App Header Wrapper-->
    <nav class="header print:hidden">
        <!-- App
            Header -->
        <div class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden">
            <!-- Header Items -->
            <div class="flex w-full items-center justify-between">
                <!-- Left:
                    Sidebar Toggle Button -->
                <div style="    width: 130px;">
                    <a href="<?= $url ?>Home"><img src="<?= $BNZ->site('logo') ?>" alt=""></a>
                </div>
                <!-- Right: Header
                    buttons -->
                <div class="-mr-1.5 flex items-center space-x-2">
                    <!-- Mobile whatsapp Toggle                        -->
                    <!-- <a href="https://api.whatsapp.com/send?phone=447418373231" target="_blank"> <img class="whatsapp-icon" src="https://bitvortax.com/app/whatsapp-icon.png" alt="WhatsApp Support 1" width="23px"> </a> -->
                    <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="$store.global.isDarkModeEnabled" x-transition:enter="transition-transform duration-200 ease-out absolute origin-top" x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static" class="h-6 w-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24" style="display: none;">
                            <path d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z">
                            </path>
                        </svg> <svg xmlns="http://www.w3.org/2000/svg" x-show="!$store.global.isDarkModeEnabled" x-transition:enter="transition-transform duration-200 ease-out absolute origin-top" x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static" class="h-6 w-6 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg> </button>
                    <button @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <i class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"></i>
                    </button>
                    <!-- Notification-->
                    <div x-effect="if($store.global.isSearchbarActive) isShowPopper = false" x-data="usePopper({placement:'bottom-end',offset:12})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="flex"> <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="btn relative h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500 dark:text-navy-100" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z">
                                </path>
                            </svg> <span class="absolute -top-px -right-px flex h-3 w-3 items-center justify-center"> <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-180"><b>
                                        <font color="white"></font>
                                    </b></span> <span class="inline-flex h-2 w-2 rounded-full bg-secondary"></span> </span>
                        </button>
                        <!-- XXXXXXXXXXXXXXXXXXXX -->
                        <div :class="isShowPopper &amp;&amp; 'show'" class="popper-root" x-ref="popperRoot" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-58px, 58px);" data-popper-placement="bottom-end">
                            <div x-data="{activeTab:'tabAll'}" class="popper-box mx-4 mt-1 flex max-h-[calc(100vh-6rem)] w-[calc(100vw-2rem)] flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark sm:m-0 sm:w-80">
                                <div class="rounded-t-lg bg-slate-100 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                                    <div class="flex items-center justify-between px-4 pt-2">
                                        <div class="flex items-center space-x-2">
                                            <h3 class="font-medium text-slate-700 dark:text-navy-100">
                                                Notifications </h3>
                                            <div class="badge h-5 rounded-full bg-primary/10 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                                <?= $BNZ->num_rows("SELECT * FROM `hoatdong` WHERE `username` = '" . $user['email'] . "' ") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="is-scrollbar-hidden flex shrink-0 overflow-x-auto px-3">
                                        <!-- <button @click="activeTab = 'tabAll'" :class="activeTab === 'tabAll' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-primary dark:border-accent text-primary dark:text-accent-light">
                                            <span>All</span> </button>  -->

                                    </div>


                                </div>
                                <div class="tab-content flex flex-col overflow-hidden">
                                    <div x-show="activeTab === 'tabAll'" x-transition:enter="transition-all duration-300 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                        <? foreach ($BNZ->get_list("SELECT * FROM `hoatdong` WHERE `username` = '" . $user['email'] . "' ORDER BY `id` DESC") as $noti) { ?>
                                            <div class="flex items-center space-x-3 bulletinLink">
                                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                                                    <i class="fa fa-bell text-warning"></i>
                                                </div>


                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100"><?= $noti['content'] ?></p>
                                                    <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        <?= timeAgo($noti['time']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- xxxx -->
                    </div>
                </div>
                <!-- xxxx
                    -->
            </div>
        </div>
    </nav>