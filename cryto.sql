-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2023 at 10:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryto`
--

-- --------------------------------------------------------

--
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `name2` text DEFAULT NULL,
  `symboy` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `price_24h` text DEFAULT NULL,
  `time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coin`
--

INSERT INTO `coin` (`id`, `name`, `name2`, `symboy`, `img`, `price`, `price_24h`, `time`) VALUES
(1, 'Bitcoin', 'BTC', 'BTCUSDT', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 256 256\"><defs><linearGradient id=\"logosBitcoin0\" x1=\"49.973%\" x2=\"49.973%\" y1=\"-.024%\" y2=\"99.99%\"><stop offset=\"0%\" stop-color=\"#F9AA4B\"/><stop offset=\"100%\" stop-color=\"#F7931A\"/></linearGradient></defs><path fill=\"url(#logosBitcoin0)\" d=\"M252.171 158.954c-17.102 68.608-86.613 110.314-155.123 93.211c-68.61-17.102-110.316-86.61-93.213-155.119C20.937 28.438 90.347-13.268 158.957 3.835c68.51 17.002 110.317 86.51 93.214 155.119Z\"/><path fill=\"#FFF\" d=\"M188.945 112.05c2.5-17-10.4-26.2-28.2-32.3l5.8-23.1l-14-3.5l-5.6 22.5c-3.7-.9-7.5-1.8-11.3-2.6l5.6-22.6l-14-3.5l-5.7 23c-3.1-.7-6.1-1.4-9-2.1v-.1l-19.4-4.8l-3.7 15s10.4 2.4 10.2 2.5c5.7 1.4 6.7 5.2 6.5 8.2l-6.6 26.3c.4.1.9.2 1.5.5c-.5-.1-1-.2-1.5-.4l-9.2 36.8c-.7 1.7-2.5 4.3-6.4 3.3c.1.2-10.2-2.5-10.2-2.5l-7 16.1l18.3 4.6c3.4.9 6.7 1.7 10 2.6l-5.8 23.3l14 3.5l5.8-23.1c3.8 1 7.6 2 11.2 2.9l-5.7 23l14 3.5l5.8-23.3c24 4.5 42 2.7 49.5-19c6.1-17.4-.3-27.5-12.9-34.1c9.3-2.1 16.2-8.2 18-20.6Zm-32.1 45c-4.3 17.4-33.7 8-43.2 5.6l7.7-30.9c9.5 2.4 40.1 7.1 35.5 25.3Zm4.4-45.3c-4 15.9-28.4 7.8-36.3 5.8l7-28c7.9 2 33.4 5.7 29.3 22.2Z\"/></svg>', '26150.82', '+0.33%', '1693022822'),
(2, 'Ethereum', 'ETH', 'ETHUSDT', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 32 32\"><g fill=\"none\" fill-rule=\"evenodd\"><circle cx=\"16\" cy=\"16\" r=\"16\" fill=\"#627EEA\"/><g fill=\"#FFF\" fill-rule=\"nonzero\"><path fill-opacity=\".602\" d=\"M16.498 4v8.87l7.497 3.35z\"/><path d=\"M16.498 4L9 16.22l7.498-3.35z\"/><path fill-opacity=\".602\" d=\"M16.498 21.968v6.027L24 17.616z\"/><path d=\"M16.498 27.995v-6.028L9 17.616z\"/><path fill-opacity=\".2\" d=\"m16.498 20.573l7.497-4.353l-7.497-3.348z\"/><path fill-opacity=\".602\" d=\"m9 16.22l7.498 4.353v-7.701z\"/></g></g></svg>', '1651.73', '+0.21%', '1693022823'),
(3, 'BNB', 'BNB', 'BNBUSDT', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 32 32\"><g fill=\"none\"><circle cx=\"16\" cy=\"16\" r=\"16\" fill=\"#F3BA2F\"/><path fill=\"#FFF\" d=\"M12.116 14.404L16 10.52l3.886 3.886l2.26-2.26L16 6l-6.144 6.144l2.26 2.26zM6 16l2.26-2.26L10.52 16l-2.26 2.26L6 16zm6.116 1.596L16 21.48l3.886-3.886l2.26 2.259L16 26l-6.144-6.144l-.003-.003l2.263-2.257zM21.48 16l2.26-2.26L26 16l-2.26 2.26L21.48 16zm-3.188-.002h.002V16L16 18.294l-2.291-2.29l-.004-.004l.004-.003l.401-.402l.195-.195L16 13.706l2.293 2.293z\"/></g></svg>', '217.42', '+0.18%', '1693022824'),
(4, 'Tether', 'USDT', 'USDTUSD4', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 32 32\"><g fill=\"none\" fill-rule=\"evenodd\"><circle cx=\"16\" cy=\"16\" r=\"16\" fill=\"#26A17B\"/><path fill=\"#FFF\" d=\"M17.922 17.383v-.002c-.11.008-.677.042-1.942.042c-1.01 0-1.721-.03-1.971-.042v.003c-3.888-.171-6.79-.848-6.79-1.658c0-.809 2.902-1.486 6.79-1.66v2.644c.254.018.982.061 1.988.061c1.207 0 1.812-.05 1.925-.06v-2.643c3.88.173 6.775.85 6.775 1.658c0 .81-2.895 1.485-6.775 1.657m0-3.59v-2.366h5.414V7.819H8.595v3.608h5.414v2.365c-4.4.202-7.709 1.074-7.709 2.118c0 1.044 3.309 1.915 7.709 2.118v7.582h3.913v-7.584c4.393-.202 7.694-1.073 7.694-2.116c0-1.043-3.301-1.914-7.694-2.117\"/></g></svg>', '1.00', '+0.28%', '1693022825'),
(5, 'TRON', 'TRX', 'TRXUSDT', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 32 32\"><g fill=\"none\"><circle cx=\"16\" cy=\"16\" r=\"16\" fill=\"#EF0027\"/><path fill=\"#FFF\" d=\"M21.932 9.913L7.5 7.257l7.595 19.112l10.583-12.894l-3.746-3.562zm-.232 1.17l2.208 2.099l-6.038 1.093l3.83-3.192zm-5.142 2.973l-6.364-5.278l10.402 1.914l-4.038 3.364zm-.453.934l-1.038 8.58L9.472 9.487l6.633 5.502zm.96.455l6.687-1.21l-7.67 9.343l.983-8.133z\"/></g></svg>', '0.07755', '+0.09%', '1693022826');

-- --------------------------------------------------------

--
-- Table structure for table `dongtien`
--

CREATE TABLE `dongtien` (
  `id` int(11) NOT NULL,
  `sotientruoc` int(11) DEFAULT NULL,
  `coin` text DEFAULT NULL,
  `sotienthaydoi` int(11) DEFAULT NULL,
  `sotiensau` int(11) DEFAULT NULL,
  `thoigian` varchar(255) DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `dongtien`
--

INSERT INTO `dongtien` (`id`, `sotientruoc`, `coin`, `sotienthaydoi`, `sotiensau`, `thoigian`, `noidung`, `username`) VALUES
(54, 94995, 'USDTUSD4', 500, 95495, '1693152924', 'Admin (tranthilienltqb1979@gmail.com) cộng tiền giao dịch ( 500 USDT ) | ', 'tranthilienltqb1979@gmail.com'),
(55, 95495, 'USDTUSD4', 50, 95545, '1693154697', 'Admin (tranthilienltqb1979@gmail.com) cộng tiền giao dịch ( 50 USDT ) | ', 'tranthilienltqb1979@gmail.com'),
(56, 95545, 'USDTUSD4', 5, 95550, '1693208816', 'Admin (xtho980@gmail.com) cộng tiền giao dịch ( 5 USDT ) | ', 'xtho980@gmail.com'),
(57, 95550, 'USDTUSD4', 5, 95555, '1693208939', 'Admin (ngovanco081976@gmail.com) cộng tiền giao dịch ( 5 USDT ) | ', 'ngovanco081976@gmail.com'),
(58, 95555, 'USDTUSD4', 10, 95565, '1693209032', 'Admin (ngovanco081976@gmail.com) cộng tiền giao dịch ( 10 USDT ) | ', 'ngovanco081976@gmail.com'),
(59, 95565, 'USDTUSD4', 500, 96065, '1693209091', 'Admin (ngocnhideptrais1tg@gmail.com) cộng tiền giao dịch ( 500 USDT ) | ', 'ngocnhideptrais1tg@gmail.com'),
(60, 96065, 'USDTUSD4', 5, 96070, '1693209326', 'Admin (ngothienbao13102004@gmail.com) cộng tiền giao dịch ( 5 USDT ) | ', 'ngothienbao13102004@gmail.com'),
(61, 0, 'ETHUSDT', 5, 5, '1693287550', 'Admin (ngothienbao13102004@gmail.com) cộng tiền giao dịch ( 5 ETH ) | ', 'ngothienbao13102004@gmail.com'),
(62, 5, 'ETHUSDT', 5, 10, '1693287555', 'Admin (ngothienbao13102004@gmail.com) cộng tiền giao dịch ( 5 ETH ) | ', 'ngothienbao13102004@gmail.com'),
(63, 96070, 'USDTUSD4', 20, 96090, '1693287637', 'Swap ( 20 USDTUSD4 to 0.012108516525098 ETHUSDT )', 'ngothienbao13102004@gmail.com'),
(64, 96050, 'USDTUSD4', 20, 96070, '1693287660', 'Swap ( 20 USDTUSD4 to 0.012108516525098 ETHUSDT )', 'ngothienbao13102004@gmail.com'),
(65, 96030, 'USDTUSD4', 20, 96050, '1693287674', 'Swap ( 20 USDTUSD4 to 0.012108516525098 ETHUSDT )', 'ngothienbao13102004@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hoatdong`
--

CREATE TABLE `hoatdong` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoatdong`
--

INSERT INTO `hoatdong` (`id`, `username`, `content`, `time`) VALUES
(3, 'ngothienbao13102004@gmail.com', 'Account successfully created', '1693117609'),
(4, 'ngothienbao13102004@gmail.com', 'Password successfully changed', '1693118868'),
(5, 'ngothienbao13102004@gmail.com', 'Account successfully created', '1693285262'),
(6, 'ngothienbao13102004@gmail.com', 'Change Authentication successfully', '1693287627'),
(7, 'ngothienbao13102004@gmail.com', 'Admin ngothienbao13102004@gmail.com thay đổi user ngothienbao13102004@gmail.com', '1693287983'),
(8, 'ngothienbao13102004@gmail.com', 'Admin ngothienbao13102004@gmail.com thay đổi user ngothienbao13102004@gmail.com', '1693288192');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`) VALUES
(1, 'tenweb', 'WSV.ASIA'),
(2, 'mota', 'Hệ thống bán mã nguồn, tạo website số 1 Việt Nam'),
(3, 'tukhoa', 'wsv, wsv.asia, webservice, bán mã nguồn, tạo website, dịch vụ web'),
(4, 'logo', 'https://i.imgur.com/SfGqVC3.png'),
(5, 'email', ''),
(6, 'pass_email', ''),
(11, 'noidung_naptien', 'NAPTIEN'),
(12, 'thongbao', '<p style=\"text-align: left;\">- Chào mừng các bạn đến với <b style=\"color: rgb(156, 0, 255);\">WSV.ASIA</b></p><p>- Nhóm zalo trò chuyện hỗ trợ dịch vụ <a href=\"https://zalo.me/g/eorudk986\" target=\"_blank\">zalo.me</a></p><p>- Mọi hoạt động trên website đều được xử lí tự động, nếu gặp vấn đề vui lòng ib <a href=\"//zalo.me/0862185425\" target=\"_blank\"><font color=\"#9c00ff\"><b>admin</b></font> </a>để được xử lí !</p><p>- Gạch thẻ siêu top 1 tại <b><font color=\"#9c00ff\"><a href=\"https://webthe.vn\" target=\"_blank\">webthe.vn</a></font></b></p>'),
(13, 'anhbia', 'https://i.imgur.com/SCLXfK0.png'),
(14, 'favicon', 'https://i.imgur.com/uplbiui.png'),
(17, 'baotri', 'ON'),
(18, 'chinhsach', '<p>BẰNG VIỆC SỬ DỤNG C&Aacute;C DỊCH VỤ HOẶC MỞ MỘT T&Agrave;I KHOẢN, BẠN CHO BIẾT RẰNG BẠN CHẤP NHẬN, KH&Ocirc;NG R&Uacute;T LẠI, C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG SỬ DỤNG C&Aacute;C DỊCH VỤ CỦA CH&Uacute;NG T&Ocirc;I HAY TRUY CẬP TRANG WEB. NẾU BẠN DƯỚI 18 TUỔI HOẶC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot;PH&Ugrave; HỢP Ở NƠI BẠN SỐNG, BẠN PHẢI XIN PH&Eacute;P CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P ĐỂ MỞ MỘT T&Agrave;I KHOẢN V&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P PHẢI ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG BIẾT BẠN C&Oacute; THUỘC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot; Ở NƠI BẠN SỐNG HAY KH&Ocirc;NG, HOẶC KH&Ocirc;NG HIỂU PHẦN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG TẠO T&Agrave;I KHOẢN CHO ĐẾN KHI BẠN Đ&Atilde; NHỜ CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA BẠN GI&Uacute;P ĐỠ. NẾU BẠN L&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA MỘT TRẺ VỊ TH&Agrave;NH NI&Ecirc;N MUỐN TẠO MỘT T&Agrave;I KHOẢN, BẠN PHẢI CHẤP NHẬN C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y THAY MẶT CHO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; V&Agrave; BẠN SẼ CHỊU TR&Aacute;CH NHIỆM ĐỐI VỚI TẤT CẢ HOẠT ĐỘNG SỬ DỤNG T&Agrave;I KHOẢN HAY C&Aacute;C DỊCH VỤ, BAO GỒM C&Aacute;C GIAO DỊCH MUA H&Agrave;NG DO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N THỰC HIỆN, CHO D&Ugrave; T&Agrave;I KHOẢN CỦA TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; ĐƯỢC MỞ V&Agrave;O L&Uacute;C N&Agrave;Y HAY ĐƯỢC TẠO SAU N&Agrave;Y V&Agrave; CHO D&Ugrave; TRẺ VỊ TH&Agrave;NH NI&Ecirc;N C&Oacute; ĐƯỢC BẠN GI&Aacute;M S&Aacute;T TRONG GIAO DỊCH MUA H&Agrave;NG Đ&Oacute; HAY KH&Ocirc;NG.</p>\r\n'),
(27, 'min_ruttien', '100000'),
(28, 'ck_con', '3'),
(29, 'phi_chuyentien', '500'),
(30, 'status_chuyentien', 'ON'),
(31, 'hotline', '0947838128'),
(32, 'facebook', 'https://www.facebook.com/ntgtanetwork/'),
(33, 'theme_color', '#01578B'),
(34, 'modal_thongbao', ''),
(42, 'api_bank', 'dLREMoIkBPnyiXFhbjqfeHSpwuDvJUKTQWmrGNlZCYxtOAaVzscg'),
(43, 'status_napbank', 'ON'),
(44, 'status_demo', 'OFF'),
(45, 'api_card', 'YrDqbMwiejBgAkstzJPIKNCyVdomWnfSvcHuXRFxUQhpEalZTGLO'),
(46, 'luuy_naptien', '<font color=\"#ff0000\">- Sai mệnh giá mất thẻ</font>'),
(47, 'id_video_youtube', 'Zzn9-ATB9aU'),
(48, 'ck_bank', ''),
(49, 'luuy_napbank', '<font color=\"#ff0000\"><b>Nhập đúng nội dùng để được cộng tiền tự động !</b></font>'),
(50, 'check_time_cron', '0'),
(51, 'api_momo', '9276E1CC-36DB-BDC9-FBAA-E1E031EF7A46'),
(52, 'stk_bank', '0862185425'),
(53, 'mk_bank', 'Bao13102004@'),
(54, 'check_time_cron_bank', '0'),
(55, 'bengachthe', 'webthe.vn'),
(56, 'partnerid', '6448150981'),
(57, 'partnerkey', '3856f6fb70630735ad88b15f15a58e43'),
(58, 'chietkhau_napthe', '15'),
(59, 'telegram_chat_id', '-828974652'),
(60, 'telegram_token', '6006300098:AAFIek8RW9v7VceX8pAt9K1xBPCNSfxB64c'),
(61, 'tienhosting', '100000'),
(62, 'slide', 'https://i.imgur.com/SCLXfK0.png|https://i.imgur.com/SCLXfK0.png'),
(63, 'check_time_cron_check_money', '1680830741');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `name` text NOT NULL,
  `value` longtext NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`name`, `value`, `id`) VALUES
('webname', 'ZENSWALLET', 1),
('description', 'Best Cryptocurrency Wallet | Ethereum Wallet | ERC20 Wallet | Zens Wallet', 2),
('keywords', 'Best Cryptocurrency Wallet, Zens Wallet, Crypto wallet, Online wallet for cryptocurrencies,  Best crypto wallet, Mobile crypto wallet, Crypto wallet app', 3),
('favicon', 'https://i.imgur.com/60wvqjj.png', 4),
('image', 'https://i.imgur.com/60wvqjj.png', 5),
('logo', 'http://cryto.local/assets/img/logo.svg', 6),
('ETH_address', '0x713304676F31A7CE298E0BBcC90910fab4B5bD6C', 7),
('ETH_qr', 'https://i.imgur.com/vzqN3dz.png', 8),
('plugin', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/64916714cc26a871b023987e/1h3bvla71\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->                                                                                ', 9),
('mail_smtp', '{\r\n  \"Host\": \"mail.zenswallet.com\",\r\n  \"Username\": \"_mainaccount@zenswallet.com\",\r\n  \"Password\": \"Vipbaoz123\",\r\n  \"SMTPSecure\": \"ssl\",\r\n  \"Port\": \"465\"\r\n}', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `tran_id` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `amount` decimal(10,4) DEFAULT NULL,
  `coin` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `from_to` text DEFAULT NULL,
  `confirmation` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `email`, `tran_id`, `unit`, `amount`, `coin`, `address`, `from_to`, `confirmation`, `status`, `date`) VALUES
(88, 'tranthilienltqb1979@gmail.com', '30540843', '500', '500.0000', 'USDTUSD4', '0xh4k6ehqSQQB1E9hKsq8MbAlOydcmfK8kmZnfC4', 'From', '10/10', 'Completed', '1693152924'),
(89, 'tranthilienltqb1979@gmail.com', '66321745', '50', '50.0000', 'USDTUSD4', '0xaxR8pthy04YHpM0Vpj8TPIKKzjP5BMWvDEESzM', 'From', '10/10', 'Completed', '1693154697'),
(90, 'xtho980@gmail.com', '83650344', '5', '5.0000', 'USDTUSD4', '0xs0zAAcFFpG2vGNZkApYNNlBr43ars2Vq0sZxPD', 'From', '10/10', 'Completed', '1693208816'),
(91, 'ngovanco081976@gmail.com', '89723243', '5', '5.0000', 'USDTUSD4', '0xlAxrrGYkddvlLMcpQfG7OLq0HP0Ca8UByns6Vq', 'From', '10/10', 'Completed', '1693208939'),
(92, 'ngovanco081976@gmail.com', '27777134', '10', '10.0000', 'USDTUSD4', '0x3ZfLBX5RiZ2s9zT7VdrvkOmJnGa1KV3OQCcFYs', 'From', '10/10', 'Completed', '1693209032'),
(93, 'ngocnhideptrais1tg@gmail.com', '20365597', '500', '500.0000', 'USDTUSD4', '0xpJfdqhdbhk5Zauz36bwjLezTEjpLp8f5H2z4FY', 'From', '10/10', 'Completed', '1693209091'),
(94, 'ngothienbao13102004@gmail.com', '42722744', '5', '5.0000', 'USDTUSD4', '0xUjwO8OZeUdSoViFuV4JhvA9I4XkMgGRBV71tBE', 'From', '10/10', 'Completed', '1693209326'),
(95, 'ngothienbao13102004@gmail.com', '54409833', '5', '8258.6500', 'ETHUSDT', '0xGJbbt7rTAqftfUxSV16rkiKw4aF274EIkzQnfd', 'From', '10/10', 'Completed', '1693287550'),
(96, 'ngothienbao13102004@gmail.com', '85296515', '5', '8258.6500', 'ETHUSDT', '0xGJbbt7rTAqftfUxSV16rkiKw4aF274EIkzQnfd', 'From', '10/10', 'Completed', '1693287555'),
(97, 'ngothienbao13102004@gmail.com', '83084188', '20', '20.0000', 'USDTUSD4', '', 'Swap', '0/10', 'Pending', '1693287637'),
(98, 'ngothienbao13102004@gmail.com', '52148730', '20', '20.0000', 'USDTUSD4', '', 'Swap', '0/10', 'Pending', '1693287660'),
(99, 'ngothienbao13102004@gmail.com', '80402825', '20', '20.0000', 'USDTUSD4', '', 'Swap', '0/10', 'Pending', '1693287674');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `money` text NOT NULL DEFAULT '{ 	"BTCUSDT": "0", 	"ETHUSDT": "0", 	"BNBUSDT": "0", 	"USDTUSD": "0", 	"TRXUSDT": "0" }',
  `level` varchar(255) DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'confirm',
  `confirm_email` text DEFAULT NULL,
  `createdate` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `daily` int(11) DEFAULT 0,
  `otp` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `device` text DEFAULT NULL,
  `chietkhau` float DEFAULT 0,
  `time` varchar(255) DEFAULT NULL,
  `chitieu` int(11) NOT NULL DEFAULT 0,
  `total_money` int(11) NOT NULL DEFAULT 0,
  `google_auth_code` text DEFAULT NULL,
  `secret_phrase` text DEFAULT NULL,
  `wallet_id` text DEFAULT NULL,
  `wallet_address` text DEFAULT NULL,
  `phi_rut` text DEFAULT '\'0.6\'',
  `rut_toi_thieu` text DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `country`, `token`, `money`, `level`, `banned`, `status`, `confirm_email`, `createdate`, `ref`, `daily`, `otp`, `ip`, `device`, `chietkhau`, `time`, `chitieu`, `total_money`, `google_auth_code`, `secret_phrase`, `wallet_id`, `wallet_address`, `phi_rut`, `rut_toi_thieu`) VALUES
(62, 'Ngô Thiên Bảo', 'ngothienbao13102004@gmail.com', '123123', '0862185425', 'Viet Nam', 'kjJlwZgLEuSDPKzmbWRXTNvinaAepMcfyIdUFGtHsVoOQCYxqrhB', '{\"BTCUSDT\":\"0.000000\",\"ETHUSDT\":10.0299999999999993605115378159098327159881591796875,\"BNBUSDT\":\"0.000000\",\"USDTUSD4\":96010.02999999999883584678173065185546875,\"TRXUSDT\":\"0.000000\"}', 'admin', 0, 'active', NULL, '1693117609', NULL, 0, '871549', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/116.0.0.0', 0, '1693117609', 0, 0, '2M2OGPQLXI6TYZFX', 'water field style pave shoe emotion risk fluid vibrant apart clip moon ', '78471614368', '{\"BTCUSDT\":{\"address\":\"0xIpGR1bcjwvmxbgoXDHbPEnYnkqjp01KvfI4XOa\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"},\"ETHUSDT\":{\"address\":\"ETH_address\",\"qrcode\":\"ETH_qr\"},\"BNBUSDT\":{\"address\":\"0xPf2DnRRs49J4ijBA4EtQku4q6iISonEQz6kS2h\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"},\"USDTUSD4\":{\"address\":\"0x60qlV0uCA4oxTP6sMUyVClqQIi1QFhTgVwgclk\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"},\"TRXUSDT\":{\"address\":\"0x63Wdz0JX0hTROL1A3TPFFtDt745LB2HaZdhFcr\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"}}', '50', '0'),
(63, 'Ngô Thiên Bảo 2', 'ngothienbao13102004@gmail.com', '123123', '0862185425', 'Albania', '', '{\"BTCUSDT\":\"0.000000\",\"ETHUSDT\":\"0.000000\",\"BNBUSDT\":\"0.000000\",\"USDTUSD4\":\"0.000000\",\"TRXUSDT\":\"0.000000\"}', 'admin', 0, 'active', NULL, '1693285262', NULL, 0, NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/116.0.0.0', 0, '1693285262', 0, 0, NULL, 'endless distance vibrant uniform orient palace expand color critic regular half renew ', '644617243992', '{\"BTCUSDT\":{\"address\":\"0xSV4bGiGtCkrhg7efjyuxsEvgJii1YnhenNjs6W\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"},\"ETHUSDT\":{\"address\":\"0x2806E566bfAEE21cC6EcD125BF0d06537Eb7F176\",\"qrcode\":\"https:\\/\\/i.imgur.com\\/CEvbukB.jpg\"},\"BNBUSDT\":{\"address\":\"0xEzgc5VJ94DOyqCGKEskCkDg9rOKFDUazkYSBEu\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"},\"USDTUSD4\":{\"address\":\"0xK3SXHMUKPeJWzO5DBR1fDGxPunhBD7jfrGQMFN\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"},\"TRXUSDT\":{\"address\":\"0xow4mOl5lST9knWpzVC2cARJonkyUzP5cu5wTmN\",\"qrcode\":\"data:image\\/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABvAQMAAADYCwwjAAAABlBMVEX\\/\\/\\/8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABHklEQVQ4jdXUsa3EIAwAUEcUdLAAUtZwx0rJArnLAslKdKyBxAL3Owp0\\/uZy\\/36HaQ+hKK9AtokdgG9cluiOafOZKIk0oA50U8h3GKDnl3xgPssQz3LtIe4BbFRDBHXGtOB\\/kh1yvZwS70\\/5HfKaiB\\/pc5kdWsoU3a3UNY6wGqyLd9s7qy5DfuL8QC4ZRE7tTrjetGmZtigqdSpuvcrvEjCtwW06n2GAXlGkvZ0FkRzCcLEeblGmwZlIcQMsOsmE2urVdMAI809xNnBEkKnrAvmh56ceoCe+SYNEJPMVCxZINiSR3LHc3jySx\\/VBu+RZ2COsMZkRej7FrULvP4PEM3DH\\/uUv8cC6eXejAfL8hjaP1+D02ea3RXEGZH7f+gWJm94\\/C9Z5yAAAAABJRU5ErkJggg==\"}}', '1', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dongtien`
--
ALTER TABLE `dongtien`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dongtien`
--
ALTER TABLE `dongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
