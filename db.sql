-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2025 at 10:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello789`
--

-- --------------------------------------------------------

--
-- Table structure for table `otp_log`
--

CREATE TABLE `otp_log` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `otp` varchar(6) DEFAULT NULL,
  `ref_id` varchar(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `type` enum('bank','ewallet') NOT NULL,
  `name_th` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `code` varchar(5) DEFAULT NULL,
  `icon_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `type`, `name_th`, `name_en`, `code`, `icon_path`) VALUES
(1, 'bank', 'กรุงเทพ', 'ฺฺBBL', 'bbl', 'asset/img/bank/bbl.webp'),
(2, 'bank', 'กสิกรไทย', 'KBANK', 'kbank', 'asset/img/bank/kbank.webp'),
(3, 'bank', 'กรุงไทย', 'KTB', 'ktb', 'asset/img/bank/ktb.webp'),
(4, 'bank', 'ทหารไทยธนชาต', 'TTB', 'ttb', 'asset/img/bank/ttb.webp'),
(5, 'bank', 'ไทยพาณิชย์', 'SCB', 'scb', 'asset/img/bank/scb.webp'),
(6, 'bank', 'ซีไอเอ็มบีไทย', 'CIMBT', 'cimbt', 'asset/img/bank/cimbt.webp'),
(7, 'bank', 'ยูโอบี', 'UOBT', 'uobt', 'asset/img/bank/uobt.webp'),
(8, 'bank', 'กรุงศรีอยุธยา', 'BAY', 'bay', 'asset/img/bank/bay.webp'),
(9, 'bank', 'ออมสิน', 'GSB', 'gsb', 'asset/img/bank/gsb.webp'),
(10, 'bank', 'อาคารสงเคราะห์', 'GHB', 'ghb', 'asset/img/bank/ghb.webp'),
(11, 'bank', 'เพื่อการเกษตรและสหกรณ์การเกษตร', 'BAAC', 'baac', 'asset/img/bank/baac.webp'),
(12, 'ewallet', 'ทรูมันนี่วอลเล็ท', 'Truewallet', 'tw', 'asset/img/ewallet/tw.webp'),
(13, 'bank', 'เกียรตินาคินภัทร', 'KKP', 'kkp', 'asset/img/bank/kkp.webp');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `setting_key` varchar(255) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `setting_title` text DEFAULT NULL,
  `setting_link` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `order_id`, `setting_key`, `setting_value`, `setting_title`, `setting_link`, `status`) VALUES
(1, 0, 'title', 'MVP999BET', '', '', 1),
(2, 0, 'description', 'MVP999BET ศูนย์รวมความบันเทิงคาสิโนออนไลน์ครบวงจร สล็อตแตกง่าย หวยออนไลน์ และเดิมพันกีฬาครบทุกประเภท สนุก ปลอดภัย ได้เงินจริง', '', '', 1),
(3, 0, 'keywords', 'MVP999BET, คาสิโนออนไลน์, สล็อตแตกง่าย, พนันออนไลน์, แทงหวย, พนันกีฬา, บาคาร่า, เกมยิงปลา, แทงบอล, casino online, slot online, lottery, sports betting, baccarat, poker, gambling, jackpot, football betting', '', '', 1),
(7, 0, 'background', '/asset/img/uploads/691793f0c28bc_login_backdrop.webp', '', '', 1),
(8, 0, 'primary_button_color', '#F6D694', '', '', 1),
(9, 0, 'primary_theme_color', '#4D4C4B', '', '', 1),
(10, 0, 'secondary_theme_color', '#171616', '', '', 1),
(11, 0, 'text_button_color', '#000000', '', '', 1),
(16, 0, 'secondary_button_color', '#9C7130', '', '', 1),
(17, 0, 'text_theme_color', '#FFFFFF', '', '', 1),
(18, 0, 'shadow_button_color', '#F6D69400', '', '', 1),
(19, 0, 'border_theme_color', '#FCBD16', '', '', 1),
(20, 0, 'text_highlight_color', '#E4CBA3', '', '', 1),
(21, 0, 'line_contact_link', 'https://lin.ee/EEknzr1', '', '', 1),
(52, 0, 'banner', '/asset/img/uploads/691794714d6f7_2_ps8azx.webp', '', '', 1),
(53, 2, 'banner', '/asset/img/uploads/69179476b0e27_4_dm2lnf.webp', '', '', 1),
(54, 1, 'banner', '/asset/img/uploads/6917947507a21_3_m3y8l7.webp', '', '', 1),
(56, 0, 'promotion', '/asset/img/uploads/69179480e85d0_pro1_w9xcdp.png', '', '', 1),
(57, 1, 'promotion', '/asset/img/uploads/6917948282417_pro2_l62l3j.png', '', '', 1),
(58, 2, 'promotion', '/asset/img/uploads/691794843be43_pro3_uha9ab.png', '', '', 1),
(59, 3, 'promotion', '/asset/img/uploads/6917948610f81_pro4_ucuuoe.png', '', '', 1),
(60, 4, 'promotion', '/asset/img/uploads/6917948770f8e_pro5_bk5x9g.jpg', '', '', 1),
(97, 0, 'announcement', 'โปรโมชั่นพิเศษ! เติมเงินวันนี้ รับโบนัสเพิ่ม 20% ทุกยอดฝาก', '', '', 1),
(99, 0, 'popup', '/asset/img/uploads/69179933a5a7e_pro1_w9xcdp.png', '', '', 1),
(100, 0, 'deposit_info', '<strong>คำแนะนำ:</strong><br>\n  1. เข้าสู่ระบบ และไปที่หน้าฝากเงิน<br>\n  2. คัดลอกเลขบัญชีด้านบน<br>\n  3. โอนเงินผ่านแอปธนาคาร (ขั้นต่ำ 10 บาท)<br>\n  4. กลับมาที่หน้าเว็บ แล้วแนบสลิปยืนยัน<br>\n  5. รอระบบปรับยอดอัตโนมัติภายใน 1-3 นาที', '', '', 1),
(101, 0, 'affiliate_info', '<div class=\"mb-2 font-semibold text-yellow-400\"><i class=\"mr-1 fad fa-lightbulb-on\"></i>คำแนะนำในการแนะนำเพื่อน</div>\n          <ul class=\"space-y-1 list-disc list-inside\">\n            <li>แชร์ลิงค์ชวนเพื่อนให้กับคนรู้จักของคุณ</li>\n            <li>เมื่อเพื่อนสมัครผ่านลิงค์และเริ่มเล่น คุณจะได้รับค่าคอมมิชชั่น</li>\n            <li>ยิ่งแนะนำมาก ยิ่งมีรายได้ต่อเนื่อง</li>\n            <li>ระบบจ่ายรายได้ตามระดับชั้นที่กำหนดไว้</li>\n            <li>ตรวจสอบรายได้และรายชื่อเพื่อนได้ในแท็บที่เกี่ยวข้อง</li>\n          </ul>', '', '', 1),
(102, 0, 'withdraw_info', '<center><strong>โปรดอ่านก่อนทำการถอนเงิน</strong></center><br>\n\nระบบจะโอนเงินเฉพาะบัญชีที่ผูกไว้เท่านั้น<br>\nหลีกเลี่ยงการทำรายการในช่วงเวลา 00.00 – 01.00 น. เพื่อป้องกันความล่าช้า<br>\nโปรดตรวจสอบข้อมูลทุกครั้ง หากพบข้อผิดพลาด กรุณาติดต่อทีมงานทันที', '', '', 1),
(103, 0, 'logo_auth', '/asset/img/uploads/69184936083b1_6916482c101c9_logo.gif', '', '', 1),
(104, 0, 'logo_main', '/asset/img/uploads/69184938536b8_6916482e94a26_logo.webp', '', '', 1),
(106, 0, 'logo_play', '/asset/img/uploads/69179c810ea9f_69164832a7750_home2.png', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `role` enum('1','2') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `status`, `role`, `username`, `password`, `last_login`) VALUES
(12, '0eeabc9726f5f6e2', 'active', '2', 'admin', 'K1GUt+aZpns=', NULL),
(14, 'f9f6627a21cc3c85', 'active', '1', 'test', 'L1WUsA==', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `status` enum('success','error') NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_for` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `action`, `detail`, `from`, `to`, `status`, `created_at`, `created_by`, `created_for`, `ip`) VALUES
(1, 'เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', 'test', 'success', '2025-06-28 16:51:17', 'owner', 'd36be0a9960be77e', '::1'),
(2, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-28 17:33:16', 'owner', '', '::1'),
(3, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-28 17:37:29', 'owner', '', '::1'),
(4, 'เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', 'test', 'success', '2025-06-28 18:29:45', 'owner', '4f2a1abdb2d96591', '::1'),
(5, 'เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', 'test', 'success', '2025-06-28 18:30:13', 'owner', 'dfe29d02d5b184b5', '::1'),
(6, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-28 23:23:46', 'owner', '', '::1'),
(7, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-28 23:24:06', 'admin', '', '::1'),
(8, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-28 23:25:28', 'owner', '', '::1'),
(9, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 14:21:31', 'owner', '', '::1'),
(10, 'เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', 'admin', 'success', '2025-06-29 14:52:08', 'owner', '0eeabc9726f5f6e2', '::1'),
(11, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 14:53:31', 'admin', '', '::1'),
(12, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 17:33:39', 'admin', '', '172.20.1.162'),
(13, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 20:28:42', 'admin', '', '::1'),
(14, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 20:32:17', 'admin', '', '::1'),
(15, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 20:36:26', 'admin', '', '::1'),
(16, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 21:13:48', 'admin', '', '::1'),
(17, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 21:14:30', 'admin', '', '::1'),
(18, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-06-29 21:42:19', 'admin', '', '::1'),
(19, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-09-22 17:25:06', 'admin', '', '::1'),
(20, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-13 23:30:07', 'admin', '', '::1'),
(21, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-13 23:34:23', 'admin', '', '::1'),
(22, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-14 18:39:27', 'admin', '', '::1'),
(23, 'เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', 'test', 'success', '2025-11-14 18:39:43', 'admin', 'ee103038a40df853', '::1'),
(24, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-14 18:40:33', 'admin', '', '::1'),
(25, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-15 02:52:47', 'admin', '', '::1'),
(26, 'เพิ่มผู้ใช้ใหม่', 'เพิ่มผู้ใช้', '', 'test', 'success', '2025-11-15 03:51:12', 'admin', 'f9f6627a21cc3c85', '::1'),
(27, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-15 03:51:18', 'test', '', '::1'),
(28, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-15 03:51:32', 'admin', '', '::1'),
(29, 'เข้าสู่ระบบ', 'เข้าสู่ระบบสำเร็จ', '', '', 'success', '2025-11-15 16:29:23', 'admin', '', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otp_log`
--
ALTER TABLE `otp_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otp_log`
--
ALTER TABLE `otp_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
