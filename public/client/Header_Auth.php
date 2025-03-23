<html lang="vi" class="dark">


<head>

    <meta charset="utf-8" />
    <title><?= $BNZ->site('description'); ?></title>
    <link rel="icon" type="image/png" href="<?= $BNZ->site('favicon'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= $BNZ->site('favicon'); ?>">
    <meta name="description" content="<?= $BNZ->site('description'); ?>">
    <meta name="keywords" content="<?= $BNZ->site('keywords'); ?>">
    <!-- Open Graph data -->
    <meta property="og:title" content="<?= $BNZ->site('description'); ?>">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="<?= $url ?>">
    <meta property="og:image" content="<?= $BNZ->site('image'); ?>">
    <meta property="og:description" content="<?= $BNZ->site('description'); ?>">
    <meta property="og:site_name" content="<?= $BNZ->site('webname'); ?>">
    <meta property="article:section" content="<?= $BNZ->site('description'); ?>">
    <meta property="article:tag" content="<?= $BNZ->site('keywords'); ?>">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="<?= $BNZ->site('image'); ?>">
    <meta name="twitter:site" content="@wmt24h">
    <meta name="twitter:title" content="<?= $BNZ->site('webname'); ?>">
    <meta name="twitter:description" content="<?= $BNZ->site('description'); ?>">
    <meta name="twitter:creator" content="@wmt24h">
    <meta name="twitter:image:src" content="<?= $BNZ->site('image'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <script src="<?= $url ?>public/client/ThemeAuth/js/render.js" async></script>

    <style>
        /* Positioning for the floating WhatsApp button */
        #floating-whatsapp {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 9999;
        }

        /* Styling for WhatsApp icons */
        .whatsapp-icon {
            width: 40px;
            height: 40px;
            margin: 5px;
        }
    </style>


</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">



    <!-- CSS Assets -->
    <link rel="stylesheet" href="<?= $url ?>public/client/ThemeAuth/css/app.css">

    <!-- Javascript Assets -->
    <script src="<?= $url ?>public/client/ThemeAuth/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>

    <script src="<?= $url ?>public/client/ThemeAuth/js/jquery-3.4.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .numbers-container {
            background-image: url('<?= $url ?>public/client/ThemeAuth/images/object-15.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 21px;
            width: 39px;
        }

        .number {
            font-size: 36px;
            color: white;
            padding: 20px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
    </style>


    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>