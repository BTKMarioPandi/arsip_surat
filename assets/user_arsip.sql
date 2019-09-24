-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2019 pada 16.19
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Bidang Pelayanan 2'),
(2, 'Bidang pelayanan 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fa`
--

CREATE TABLE `tbl_fa` (
  `id_font` int(11) NOT NULL,
  `font` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_fa`
--

INSERT INTO `tbl_fa` (`id_font`, `font`) VALUES
(1, 'fa-500px'),
(2, 'fa-amazon'),
(3, 'fa-balance-scale'),
(4, 'fa-battery-0'),
(5, 'fa-battery-1'),
(6, 'fa-battery-2'),
(7, 'fa-battery-3'),
(8, 'fa-battery-4'),
(9, 'fa-battery-empty'),
(10, 'fa-battery-full'),
(11, 'fa-battery-half'),
(12, 'fa-battery-quarter'),
(13, 'fa-battery-three-quarters'),
(14, 'fa-black-tie'),
(15, 'fa-calendar-check-o'),
(16, 'fa-calendar-minus-o'),
(17, 'fa-calendar-plus-o'),
(18, 'fa-calendar-times-o'),
(19, 'fa-cc-diners-club'),
(20, 'fa-cc-jcb'),
(21, 'fa-chrome'),
(22, 'fa-clone'),
(23, 'fa-commenting'),
(24, 'fa-commenting-o'),
(25, 'fa-contao'),
(26, 'fa-creative-commons'),
(27, 'fa-expeditedssl'),
(28, 'fa-firefox'),
(29, 'fa-fonticons'),
(30, 'fa-genderless'),
(31, 'fa-get-pocket'),
(32, 'fa-gg'),
(33, 'fa-gg-circle'),
(34, 'fa-hand-grab-o'),
(35, 'fa-hand-lizard-o'),
(36, 'fa-hand-paper-o'),
(37, 'fa-hand-peace-o'),
(38, 'fa-hand-pointer-o'),
(39, 'fa-hand-rock-o'),
(40, 'fa-hand-scissors-o'),
(41, 'fa-hand-spock-o'),
(42, 'fa-hand-stop-o'),
(43, 'fa-hourglass'),
(44, 'fa-hourglass-1'),
(45, 'fa-hourglass-2'),
(46, 'fa-hourglass-3'),
(47, 'fa-hourglass-end'),
(48, 'fa-hourglass-half'),
(49, 'fa-hourglass-o'),
(50, 'fa-hourglass-start'),
(51, 'fa-houzz'),
(52, 'fa-i-cursor'),
(53, 'fa-industry'),
(54, 'fa-internet-explorer'),
(55, 'fa-map'),
(56, 'fa-map-o'),
(57, 'fa-map-pin'),
(58, 'fa-map-signs'),
(59, 'fa-mouse-pointer'),
(60, 'fa-object-group'),
(61, 'fa-object-ungroup'),
(62, 'fa-odnoklassniki'),
(63, 'fa-odnoklassniki-square'),
(64, 'fa-opencart'),
(65, 'fa-opera'),
(66, 'fa-optin-monster'),
(67, 'fa-registered'),
(68, 'fa-safari'),
(69, 'fa-sticky-note'),
(70, 'fa-sticky-note-o'),
(71, 'fa-television'),
(72, 'fa-trademark'),
(73, 'fa-tripadvisor'),
(74, 'fa-tv'),
(75, 'fa-vimeo'),
(76, 'fa-wikipedia-w'),
(77, 'fa-y-combinator'),
(78, 'fa-yc'),
(79, 'fa-adjust'),
(80, 'fa-anchor'),
(81, 'fa-archive'),
(82, 'fa-area-chart'),
(83, 'fa-arrows'),
(84, 'fa-arrows-h'),
(85, 'fa-arrows-v'),
(86, 'fa-asterisk'),
(87, 'fa-at'),
(88, 'fa-automobile'),
(89, 'fa-balance-scale'),
(90, 'fa-ban'),
(91, 'fa-bank'),
(92, 'fa-bar-chart'),
(93, 'fa-bar-chart-o'),
(94, 'fa-barcode'),
(95, 'fa-bars'),
(96, 'fa-battery-0'),
(97, 'fa-battery-1'),
(98, 'fa-battery-2'),
(99, 'fa-battery-3'),
(100, 'fa-battery-4'),
(101, 'fa-battery-empty'),
(102, 'fa-battery-full'),
(103, 'fa-battery-half'),
(104, 'fa-battery-quarter'),
(105, 'fa-battery-three-quarters'),
(106, 'fa-bed'),
(107, 'fa-beer'),
(108, 'fa-bell'),
(109, 'fa-bell-o'),
(110, 'fa-bell-slash'),
(111, 'fa-bell-slash-o'),
(112, 'fa-bicycle'),
(113, 'fa-binoculars'),
(114, 'fa-birthday-cake'),
(115, 'fa-bolt'),
(116, 'fa-bomb'),
(117, 'fa-book'),
(118, 'fa-bookmark'),
(119, 'fa-bookmark-o'),
(120, 'fa-briefcase'),
(121, 'fa-bug'),
(122, 'fa-building'),
(123, 'fa-building-o'),
(124, 'fa-bullhorn'),
(125, 'fa-bullseye'),
(126, 'fa-bus'),
(127, 'fa-cab'),
(128, 'fa-calculator'),
(129, 'fa-calendar'),
(130, 'fa-calendar-check-o'),
(131, 'fa-calendar-minus-o'),
(132, 'fa-calendar-o'),
(133, 'fa-calendar-plus-o'),
(134, 'fa-calendar-times-o'),
(135, 'fa-camera'),
(136, 'fa-camera-retro'),
(137, 'fa-car'),
(138, 'fa-caret-square-o-down'),
(139, 'fa-caret-square-o-left'),
(140, 'fa-caret-square-o-right'),
(141, 'fa-caret-square-o-up'),
(142, 'fa-cart-arrow-down'),
(143, 'fa-cart-plus'),
(144, 'fa-cc'),
(145, 'fa-certificate'),
(146, 'fa-check'),
(147, 'fa-check-circle'),
(148, 'fa-check-circle-o'),
(149, 'fa-check-square'),
(150, 'fa-check-square-o'),
(151, 'fa-child'),
(152, 'fa-circle'),
(153, 'fa-circle-o'),
(154, 'fa-circle-o-notch'),
(155, 'fa-circle-thin'),
(156, 'fa-clock-o'),
(157, 'fa-clone'),
(158, 'fa-close'),
(159, 'fa-cloud'),
(160, 'fa-cloud-download'),
(161, 'fa-cloud-upload'),
(162, 'fa-code'),
(163, 'fa-code-fork'),
(164, 'fa-coffee'),
(165, 'fa-cog'),
(166, 'fa-cogs'),
(167, 'fa-comment'),
(168, 'fa-comment-o'),
(169, 'fa-commenting'),
(170, 'fa-commenting-o'),
(171, 'fa-comments'),
(172, 'fa-comments-o'),
(173, 'fa-compass'),
(174, 'fa-copyright'),
(175, 'fa-creative-commons'),
(176, 'fa-credit-card'),
(177, 'fa-crop'),
(178, 'fa-crosshairs'),
(179, 'fa-cube'),
(180, 'fa-cubes'),
(181, 'fa-cutlery'),
(182, 'fa-dashboard'),
(183, 'fa-database'),
(184, 'fa-desktop'),
(185, 'fa-diamond'),
(186, 'fa-dot-circle-o'),
(187, 'fa-download'),
(188, 'fa-edit'),
(189, 'fa-ellipsis-h'),
(190, 'fa-ellipsis-v'),
(191, 'fa-envelope'),
(192, 'fa-envelope-o'),
(193, 'fa-envelope-square'),
(194, 'fa-eraser'),
(195, 'fa-exchange'),
(196, 'fa-exclamation'),
(197, 'fa-exclamation-circle'),
(198, 'fa-exclamation-triangle'),
(199, 'fa-external-link'),
(200, 'fa-external-link-square'),
(201, 'fa-eye'),
(202, 'fa-eye-slash'),
(203, 'fa-eyedropper'),
(204, 'fa-fax'),
(205, 'fa-feed'),
(206, 'fa-female'),
(207, 'fa-fighter-jet'),
(208, 'fa-file-archive-o'),
(209, 'fa-file-audio-o'),
(210, 'fa-file-code-o'),
(211, 'fa-file-excel-o'),
(212, 'fa-file-image-o'),
(213, 'fa-file-movie-o'),
(214, 'fa-file-pdf-o'),
(215, 'fa-file-photo-o'),
(216, 'fa-file-picture-o'),
(217, 'fa-file-powerpoint-o'),
(218, 'fa-file-sound-o'),
(219, 'fa-file-video-o'),
(220, 'fa-file-word-o'),
(221, 'fa-file-zip-o'),
(222, 'fa-film'),
(223, 'fa-filter'),
(224, 'fa-fire'),
(225, 'fa-fire-extinguisher'),
(226, 'fa-flag'),
(227, 'fa-flag-checkered'),
(228, 'fa-flag-o'),
(229, 'fa-flash'),
(230, 'fa-flask'),
(231, 'fa-folder'),
(232, 'fa-folder-o'),
(233, 'fa-folder-open'),
(234, 'fa-folder-open-o'),
(235, 'fa-frown-o'),
(236, 'fa-futbol-o'),
(237, 'fa-gamepad'),
(238, 'fa-gavel'),
(239, 'fa-gear'),
(240, 'fa-gears'),
(241, 'fa-gift'),
(242, 'fa-glass'),
(243, 'fa-globe'),
(244, 'fa-graduation-cap'),
(245, 'fa-group'),
(246, 'fa-hand-grab-o'),
(247, 'fa-hand-lizard-o'),
(248, 'fa-hand-paper-o'),
(249, 'fa-hand-peace-o'),
(250, 'fa-hand-pointer-o'),
(251, 'fa-hand-rock-o'),
(252, 'fa-hand-scissors-o'),
(253, 'fa-hand-spock-o'),
(254, 'fa-hand-stop-o'),
(255, 'fa-hdd-o'),
(256, 'fa-headphones'),
(257, 'fa-heart'),
(258, 'fa-heart-o'),
(259, 'fa-heartbeat'),
(260, 'fa-history'),
(261, 'fa-home'),
(262, 'fa-hotel'),
(263, 'fa-hourglass'),
(264, 'fa-hourglass-1'),
(265, 'fa-hourglass-2'),
(266, 'fa-hourglass-3'),
(267, 'fa-hourglass-end'),
(268, 'fa-hourglass-half'),
(269, 'fa-hourglass-o'),
(270, 'fa-hourglass-start'),
(271, 'fa-i-cursor'),
(272, 'fa-image'),
(273, 'fa-inbox'),
(274, 'fa-industry'),
(275, 'fa-info'),
(276, 'fa-info-circle'),
(277, 'fa-institution'),
(278, 'fa-key'),
(279, 'fa-keyboard-o'),
(280, 'fa-language'),
(281, 'fa-laptop'),
(282, 'fa-leaf'),
(283, 'fa-legal'),
(284, 'fa-lemon-o'),
(285, 'fa-level-down'),
(286, 'fa-level-up'),
(287, 'fa-life-bouy'),
(288, 'fa-life-buoy'),
(289, 'fa-life-ring'),
(290, 'fa-life-saver'),
(291, 'fa-lightbulb-o'),
(292, 'fa-line-chart'),
(293, 'fa-location-arrow'),
(294, 'fa-lock'),
(295, 'fa-magic'),
(296, 'fa-magnet'),
(297, 'fa-mail-forward'),
(298, 'fa-mail-reply'),
(299, 'fa-mail-reply-all'),
(300, 'fa-male'),
(301, 'fa-map'),
(302, 'fa-map-marker'),
(303, 'fa-map-o'),
(304, 'fa-map-pin'),
(305, 'fa-map-signs'),
(306, 'fa-meh-o'),
(307, 'fa-microphone'),
(308, 'fa-microphone-slash'),
(309, 'fa-minus'),
(310, 'fa-minus-circle'),
(311, 'fa-minus-square'),
(312, 'fa-minus-square-o'),
(313, 'fa-mobile'),
(314, 'fa-mobile-phone'),
(315, 'fa-money'),
(316, 'fa-moon-o'),
(317, 'fa-mortar-board'),
(318, 'fa-motorcycle'),
(319, 'fa-mouse-pointer'),
(320, 'fa-music'),
(321, 'fa-navicon'),
(322, 'fa-newspaper-o'),
(323, 'fa-object-group'),
(324, 'fa-object-ungroup'),
(325, 'fa-paint-brush'),
(326, 'fa-paper-plane'),
(327, 'fa-paper-plane-o'),
(328, 'fa-paw'),
(329, 'fa-pencil'),
(330, 'fa-pencil-square'),
(331, 'fa-pencil-square-o'),
(332, 'fa-phone'),
(333, 'fa-phone-square'),
(334, 'fa-photo'),
(335, 'fa-picture-o'),
(336, 'fa-pie-chart'),
(337, 'fa-plane'),
(338, 'fa-plug'),
(339, 'fa-plus'),
(340, 'fa-plus-circle'),
(341, 'fa-plus-square'),
(342, 'fa-plus-square-o'),
(343, 'fa-power-off'),
(344, 'fa-print'),
(345, 'fa-puzzle-piece'),
(346, 'fa-qrcode'),
(347, 'fa-question'),
(348, 'fa-question-circle'),
(349, 'fa-quote-left'),
(350, 'fa-quote-right'),
(351, 'fa-random'),
(352, 'fa-recycle'),
(353, 'fa-refresh'),
(354, 'fa-registered'),
(355, 'fa-remove'),
(356, 'fa-reorder'),
(357, 'fa-reply'),
(358, 'fa-reply-all'),
(359, 'fa-retweet'),
(360, 'fa-road'),
(361, 'fa-rocket'),
(362, 'fa-rss'),
(363, 'fa-rss-square'),
(364, 'fa-search'),
(365, 'fa-search-minus'),
(366, 'fa-search-plus'),
(367, 'fa-send'),
(368, 'fa-send-o'),
(369, 'fa-server'),
(370, 'fa-share'),
(371, 'fa-share-alt'),
(372, 'fa-share-alt-square'),
(373, 'fa-share-square'),
(374, 'fa-share-square-o'),
(375, 'fa-shield'),
(376, 'fa-ship'),
(377, 'fa-shopping-cart'),
(378, 'fa-sign-in'),
(379, 'fa-sign-out'),
(380, 'fa-signal'),
(381, 'fa-sitemap'),
(382, 'fa-sliders'),
(383, 'fa-smile-o'),
(384, 'fa-soccer-ball-o'),
(385, 'fa-sort'),
(386, 'fa-sort-alpha-asc'),
(387, 'fa-sort-alpha-desc'),
(388, 'fa-sort-amount-asc'),
(389, 'fa-sort-amount-desc'),
(390, 'fa-sort-asc'),
(391, 'fa-sort-desc'),
(392, 'fa-sort-down'),
(393, 'fa-sort-numeric-asc'),
(394, 'fa-sort-numeric-desc'),
(395, 'fa-sort-up'),
(396, 'fa-space-shuttle'),
(397, 'fa-spinner'),
(398, 'fa-spoon'),
(399, 'fa-square'),
(400, 'fa-square-o'),
(401, 'fa-star'),
(402, 'fa-star-half'),
(403, 'fa-star-half-empty'),
(404, 'fa-star-half-full'),
(405, 'fa-star-half-o'),
(406, 'fa-star-o'),
(407, 'fa-sticky-note'),
(408, 'fa-sticky-note-o'),
(409, 'fa-street-view'),
(410, 'fa-suitcase'),
(411, 'fa-sun-o'),
(412, 'fa-support'),
(413, 'fa-tablet'),
(414, 'fa-tachometer'),
(415, 'fa-tag'),
(416, 'fa-tags'),
(417, 'fa-tasks'),
(418, 'fa-taxi'),
(419, 'fa-television'),
(420, 'fa-terminal'),
(421, 'fa-thumb-tack'),
(422, 'fa-thumbs-down'),
(423, 'fa-thumbs-o-down'),
(424, 'fa-thumbs-o-up'),
(425, 'fa-thumbs-up'),
(426, 'fa-ticket'),
(427, 'fa-times'),
(428, 'fa-times-circle'),
(429, 'fa-times-circle-o'),
(430, 'fa-tint'),
(431, 'fa-toggle-down'),
(432, 'fa-toggle-left'),
(433, 'fa-toggle-off'),
(434, 'fa-toggle-on'),
(435, 'fa-toggle-right'),
(436, 'fa-toggle-up'),
(437, 'fa-trademark'),
(438, 'fa-trash'),
(439, 'fa-trash-o'),
(440, 'fa-tree'),
(441, 'fa-trophy'),
(442, 'fa-truck'),
(443, 'fa-tty'),
(444, 'fa-tv'),
(445, 'fa-umbrella'),
(446, 'fa-university'),
(447, 'fa-unlock'),
(448, 'fa-unlock-alt'),
(449, 'fa-unsorted'),
(450, 'fa-upload'),
(451, 'fa-user'),
(452, 'fa-user-plus'),
(453, 'fa-user-secret'),
(454, 'fa-user-times'),
(455, 'fa-users'),
(456, 'fa-video-camera'),
(457, 'fa-volume-down'),
(458, 'fa-volume-off'),
(459, 'fa-volume-up'),
(460, 'fa-warning'),
(461, 'fa-wheelchair'),
(462, 'fa-wifi'),
(463, 'fa-wrench'),
(464, 'fa-hand-grab-o'),
(465, 'fa-hand-lizard-o'),
(466, 'fa-hand-o-down'),
(467, 'fa-hand-o-left'),
(468, 'fa-hand-o-right'),
(469, 'fa-hand-o-up'),
(470, 'fa-hand-paper-o'),
(471, 'fa-hand-peace-o'),
(472, 'fa-hand-pointer-o'),
(473, 'fa-hand-rock-o'),
(474, 'fa-hand-scissors-o'),
(475, 'fa-hand-spock-o'),
(476, 'fa-hand-stop-o'),
(477, 'fa-thumbs-down'),
(478, 'fa-thumbs-o-down'),
(479, 'fa-thumbs-o-up'),
(480, 'fa-thumbs-up'),
(481, 'fa-ambulance'),
(482, 'fa-automobile'),
(483, 'fa-bicycle'),
(484, 'fa-bus'),
(485, 'fa-cab'),
(486, 'fa-car'),
(487, 'fa-fighter-jet'),
(488, 'fa-motorcycle'),
(489, 'fa-plane'),
(490, 'fa-rocket'),
(491, 'fa-ship'),
(492, 'fa-space-shuttle'),
(493, 'fa-subway'),
(494, 'fa-taxi'),
(495, 'fa-train'),
(496, 'fa-truck'),
(497, 'fa-wheelchair'),
(498, 'fa-genderless'),
(499, 'fa-intersex'),
(500, 'fa-mars'),
(501, 'fa-mars-double'),
(502, 'fa-mars-stroke'),
(503, 'fa-mars-stroke-h'),
(504, 'fa-mars-stroke-v'),
(505, 'fa-mercury'),
(506, 'fa-neuter'),
(507, 'fa-transgender'),
(508, 'fa-transgender-alt'),
(509, 'fa-venus'),
(510, 'fa-venus-double'),
(511, 'fa-venus-mars'),
(512, 'fa-file'),
(513, 'fa-file-archive-o'),
(514, 'fa-file-audio-o'),
(515, 'fa-file-code-o'),
(516, 'fa-file-excel-o'),
(517, 'fa-file-image-o'),
(518, 'fa-file-movie-o'),
(519, 'fa-file-o'),
(520, 'fa-file-pdf-o'),
(521, 'fa-file-photo-o'),
(522, 'fa-file-picture-o'),
(523, 'fa-file-powerpoint-o'),
(524, 'fa-file-sound-o'),
(525, 'fa-file-text'),
(526, 'fa-file-text-o'),
(527, 'fa-file-video-o'),
(528, 'fa-file-word-o'),
(529, 'fa-file-zip-o'),
(530, 'fa-circle-o-notch'),
(531, 'fa-cog'),
(532, 'fa-gear'),
(533, 'fa-refresh'),
(534, 'fa-spinner'),
(535, 'fa-check-square'),
(536, 'fa-check-square-o'),
(537, 'fa-circle'),
(538, 'fa-circle-o'),
(539, 'fa-dot-circle-o'),
(540, 'fa-minus-square'),
(541, 'fa-minus-square-o'),
(542, 'fa-plus-square'),
(543, 'fa-plus-square-o'),
(544, 'fa-square'),
(545, 'fa-square-o'),
(546, 'fa-cc-amex'),
(547, 'fa-cc-diners-club'),
(548, 'fa-cc-discover'),
(549, 'fa-cc-jcb'),
(550, 'fa-cc-mastercard'),
(551, 'fa-cc-paypal'),
(552, 'fa-cc-stripe'),
(553, 'fa-cc-visa'),
(554, 'fa-credit-card'),
(555, 'fa-google-wallet'),
(556, 'fa-paypal'),
(557, 'fa-area-chart'),
(558, 'fa-bar-chart'),
(559, 'fa-bar-chart-o'),
(560, 'fa-line-chart'),
(561, 'fa-pie-chart'),
(562, 'fa-bitcoin'),
(563, 'fa-btc'),
(564, 'fa-cny'),
(565, 'fa-dollar'),
(566, 'fa-eur'),
(567, 'fa-euro'),
(568, 'fa-gbp'),
(569, 'fa-gg'),
(570, 'fa-gg-circle'),
(571, 'fa-ils'),
(572, 'fa-inr'),
(573, 'fa-jpy'),
(574, 'fa-krw'),
(575, 'fa-money'),
(576, 'fa-rmb'),
(577, 'fa-rouble'),
(578, 'fa-rub'),
(579, 'fa-ruble'),
(580, 'fa-rupee'),
(581, 'fa-shekel'),
(582, 'fa-sheqel'),
(583, 'fa-try'),
(584, 'fa-turkish-lira'),
(585, 'fa-usd'),
(586, 'fa-won'),
(587, 'fa-yen'),
(588, 'fa-align-center'),
(589, 'fa-align-justify'),
(590, 'fa-align-left'),
(591, 'fa-align-right'),
(592, 'fa-bold'),
(593, 'fa-chain'),
(594, 'fa-chain-broken'),
(595, 'fa-clipboard'),
(596, 'fa-columns'),
(597, 'fa-copy'),
(598, 'fa-cut'),
(599, 'fa-dedent'),
(600, 'fa-eraser'),
(601, 'fa-file'),
(602, 'fa-file-o'),
(603, 'fa-file-text'),
(604, 'fa-file-text-o'),
(605, 'fa-files-o'),
(606, 'fa-floppy-o'),
(607, 'fa-font'),
(608, 'fa-header'),
(609, 'fa-indent'),
(610, 'fa-italic'),
(611, 'fa-link'),
(612, 'fa-list'),
(613, 'fa-list-alt'),
(614, 'fa-list-ol'),
(615, 'fa-list-ul'),
(616, 'fa-outdent'),
(617, 'fa-paperclip'),
(618, 'fa-paragraph'),
(619, 'fa-paste'),
(620, 'fa-repeat'),
(621, 'fa-rotate-left'),
(622, 'fa-rotate-right'),
(623, 'fa-save'),
(624, 'fa-scissors'),
(625, 'fa-strikethrough'),
(626, 'fa-subscript'),
(627, 'fa-superscript'),
(628, 'fa-table'),
(629, 'fa-text-height'),
(630, 'fa-text-width'),
(631, 'fa-th'),
(632, 'fa-th-large'),
(633, 'fa-th-list'),
(634, 'fa-underline'),
(635, 'fa-undo'),
(636, 'fa-unlink'),
(637, 'fa-angle-double-down'),
(638, 'fa-angle-double-left'),
(639, 'fa-angle-double-right'),
(640, 'fa-angle-double-up'),
(641, 'fa-angle-down'),
(642, 'fa-angle-left'),
(643, 'fa-angle-right'),
(644, 'fa-angle-up'),
(645, 'fa-arrow-circle-down'),
(646, 'fa-arrow-circle-left'),
(647, 'fa-arrow-circle-o-down'),
(648, 'fa-arrow-circle-o-left'),
(649, 'fa-arrow-circle-o-right'),
(650, 'fa-arrow-circle-o-up'),
(651, 'fa-arrow-circle-right'),
(652, 'fa-arrow-circle-up'),
(653, 'fa-arrow-down'),
(654, 'fa-arrow-left'),
(655, 'fa-arrow-right'),
(656, 'fa-arrow-up'),
(657, 'fa-arrows'),
(658, 'fa-arrows-alt'),
(659, 'fa-arrows-h'),
(660, 'fa-arrows-v'),
(661, 'fa-caret-down'),
(662, 'fa-caret-left'),
(663, 'fa-caret-right'),
(664, 'fa-caret-square-o-down'),
(665, 'fa-caret-square-o-left'),
(666, 'fa-caret-square-o-right'),
(667, 'fa-caret-square-o-up'),
(668, 'fa-caret-up'),
(669, 'fa-chevron-circle-down'),
(670, 'fa-chevron-circle-left'),
(671, 'fa-chevron-circle-right'),
(672, 'fa-chevron-circle-up'),
(673, 'fa-chevron-down'),
(674, 'fa-chevron-left'),
(675, 'fa-chevron-right'),
(676, 'fa-chevron-up'),
(677, 'fa-exchange'),
(678, 'fa-hand-o-down'),
(679, 'fa-hand-o-left'),
(680, 'fa-hand-o-right'),
(681, 'fa-hand-o-up'),
(682, 'fa-long-arrow-down'),
(683, 'fa-long-arrow-left'),
(684, 'fa-long-arrow-right'),
(685, 'fa-long-arrow-up'),
(686, 'fa-toggle-down'),
(687, 'fa-toggle-left'),
(688, 'fa-toggle-right'),
(689, 'fa-toggle-up'),
(690, 'fa-arrows-alt'),
(691, 'fa-backward'),
(692, 'fa-compress'),
(693, 'fa-eject'),
(694, 'fa-expand'),
(695, 'fa-fast-backward'),
(696, 'fa-fast-forward'),
(697, 'fa-forward'),
(698, 'fa-pause'),
(699, 'fa-play'),
(700, 'fa-play-circle'),
(701, 'fa-play-circle-o'),
(702, 'fa-random'),
(703, 'fa-step-backward'),
(704, 'fa-step-forward'),
(705, 'fa-stop'),
(706, 'fa-youtube-play'),
(707, 'fa-500px'),
(708, 'fa-adn'),
(709, 'fa-amazon'),
(710, 'fa-android'),
(711, 'fa-angellist'),
(712, 'fa-apple'),
(713, 'fa-behance'),
(714, 'fa-behance-square'),
(715, 'fa-bitbucket'),
(716, 'fa-bitbucket-square'),
(717, 'fa-bitcoin'),
(718, 'fa-black-tie'),
(719, 'fa-btc'),
(720, 'fa-buysellads'),
(721, 'fa-cc-amex'),
(722, 'fa-cc-diners-club'),
(723, 'fa-cc-discover'),
(724, 'fa-cc-jcb'),
(725, 'fa-cc-mastercard'),
(726, 'fa-cc-paypal'),
(727, 'fa-cc-stripe'),
(728, 'fa-cc-visa'),
(729, 'fa-chrome'),
(730, 'fa-codepen'),
(731, 'fa-connectdevelop'),
(732, 'fa-contao'),
(733, 'fa-css3'),
(734, 'fa-dashcube'),
(735, 'fa-delicious'),
(736, 'fa-deviantart'),
(737, 'fa-digg'),
(738, 'fa-dribbble'),
(739, 'fa-dropbox'),
(740, 'fa-drupal'),
(741, 'fa-empire'),
(742, 'fa-expeditedssl'),
(743, 'fa-facebook'),
(744, 'fa-facebook-f'),
(745, 'fa-facebook-official'),
(746, 'fa-facebook-square'),
(747, 'fa-firefox'),
(748, 'fa-flickr'),
(749, 'fa-fonticons'),
(750, 'fa-forumbee'),
(751, 'fa-foursquare'),
(752, 'fa-ge'),
(753, 'fa-get-pocket'),
(754, 'fa-gg'),
(755, 'fa-gg-circle'),
(756, 'fa-git'),
(757, 'fa-git-square'),
(758, 'fa-github'),
(759, 'fa-github-alt'),
(760, 'fa-github-square'),
(761, 'fa-gittip'),
(762, 'fa-google'),
(763, 'fa-google-plus'),
(764, 'fa-google-plus-square'),
(765, 'fa-google-wallet'),
(766, 'fa-gratipay'),
(767, 'fa-hacker-news'),
(768, 'fa-houzz'),
(769, 'fa-html5'),
(770, 'fa-instagram'),
(771, 'fa-internet-explorer'),
(772, 'fa-ioxhost'),
(773, 'fa-joomla'),
(774, 'fa-jsfiddle'),
(775, 'fa-lastfm'),
(776, 'fa-lastfm-square'),
(777, 'fa-leanpub'),
(778, 'fa-linkedin'),
(779, 'fa-linkedin-square'),
(780, 'fa-linux'),
(781, 'fa-maxcdn'),
(782, 'fa-meanpath'),
(783, 'fa-medium'),
(784, 'fa-odnoklassniki'),
(785, 'fa-odnoklassniki-square'),
(786, 'fa-opencart'),
(787, 'fa-openid'),
(788, 'fa-opera'),
(789, 'fa-optin-monster'),
(790, 'fa-pagelines'),
(791, 'fa-paypal'),
(792, 'fa-pied-piper'),
(793, 'fa-pied-piper-alt'),
(794, 'fa-pinterest'),
(795, 'fa-pinterest-p'),
(796, 'fa-pinterest-square'),
(797, 'fa-qq'),
(798, 'fa-ra'),
(799, 'fa-rebel'),
(800, 'fa-reddit'),
(801, 'fa-reddit-square'),
(802, 'fa-renren'),
(803, 'fa-safari'),
(804, 'fa-sellsy'),
(805, 'fa-share-alt'),
(806, 'fa-share-alt-square'),
(807, 'fa-shirtsinbulk'),
(808, 'fa-simplybuilt'),
(809, 'fa-skyatlas'),
(810, 'fa-skype'),
(811, 'fa-slack'),
(812, 'fa-slideshare'),
(813, 'fa-soundcloud'),
(814, 'fa-spotify'),
(815, 'fa-stack-exchange'),
(816, 'fa-stack-overflow'),
(817, 'fa-steam'),
(818, 'fa-steam-square'),
(819, 'fa-stumbleupon'),
(820, 'fa-stumbleupon-circle'),
(821, 'fa-tencent-weibo'),
(822, 'fa-trello'),
(823, 'fa-tripadvisor'),
(824, 'fa-tumblr'),
(825, 'fa-tumblr-square'),
(826, 'fa-twitch'),
(827, 'fa-twitter'),
(828, 'fa-twitter-square'),
(829, 'fa-viacoin'),
(830, 'fa-vimeo'),
(831, 'fa-vimeo-square'),
(832, 'fa-vine'),
(833, 'fa-vk'),
(834, 'fa-wechat'),
(835, 'fa-weibo'),
(836, 'fa-weixin'),
(837, 'fa-whatsapp'),
(838, 'fa-wikipedia-w'),
(839, 'fa-windows'),
(840, 'fa-wordpress'),
(841, 'fa-xing'),
(842, 'fa-xing-square'),
(843, 'fa-y-combinator'),
(844, 'fa-y-combinator-square'),
(845, 'fa-yahoo'),
(846, 'fa-yc'),
(847, 'fa-yc-square'),
(848, 'fa-yelp'),
(849, 'fa-youtube'),
(850, 'fa-youtube-play'),
(851, 'fa-youtube-square'),
(852, 'fa-ambulance'),
(853, 'fa-h-square'),
(854, 'fa-heart'),
(855, 'fa-heart-o'),
(856, 'fa-heartbeat'),
(857, 'fa-hospital-o'),
(858, 'fa-medkit'),
(859, 'fa-plus-square'),
(860, 'fa-stethoscope'),
(861, 'fa-user-md'),
(862, 'fa-wheelchair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nav`
--

CREATE TABLE `tbl_nav` (
  `id_nav` int(11) NOT NULL,
  `desc_nav` varchar(32) DEFAULT NULL,
  `fa` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nav`
--

INSERT INTO `tbl_nav` (`id_nav`, `desc_nav`, `fa`) VALUES
(1, 'contoh', 'fa-chrome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_online`
--

CREATE TABLE `tbl_online` (
  `id_user` char(36) NOT NULL,
  `session` char(36) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_online`
--

INSERT INTO `tbl_online` (`id_user`, `session`, `date_time`) VALUES
('405b7502-5fdf-4156-9bf0-c914ddb496ab', 'd82a01d3-1ac8-48f3-a688-b8f800d0665b', '2018-12-14 13:51:14'),
('asjkhakjsha', '81c8d21b-51d4-472c-8e73-1a882bd1f754', '2019-05-23 16:18:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `id_permissions` int(11) NOT NULL,
  `priv_permissions` int(11) DEFAULT NULL,
  `nav_permissions` int(11) DEFAULT NULL,
  `create_permissions` char(1) DEFAULT NULL,
  `read_permissions` char(1) DEFAULT NULL,
  `update_permissions` char(1) DEFAULT NULL,
  `delete_permissions` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id_permissions`, `priv_permissions`, `nav_permissions`, `create_permissions`, `read_permissions`, `update_permissions`, `delete_permissions`) VALUES
(1, 2, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_privilages`
--

CREATE TABLE `tbl_privilages` (
  `id_priv` int(11) NOT NULL,
  `desc_priv` varchar(32) DEFAULT NULL,
  `desc_priv_more` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_privilages`
--

INSERT INTO `tbl_privilages` (`id_priv`, `desc_priv`, `desc_priv_more`) VALUES
(1, 'admin', 'administrator'),
(2, 'Operator', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_scan_sulur`
--

CREATE TABLE `tbl_scan_sulur` (
  `id` bigint(20) NOT NULL,
  `id_sulur` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deskripsi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_scan_sulur`
--

INSERT INTO `tbl_scan_sulur` (`id`, `id_sulur`, `path`, `tgl`, `deskripsi`) VALUES
(1042019164913, 5, '2019/01042019164913.png', '2019-04-01 14:49:13', 'halaman 1'),
(1042019164921, 5, '2019/01042019164921.jpg', '2019-04-01 14:49:21', 'halaman 2'),
(18052019164538, 7, '2019/18052019164538.PNG', '2019-05-18 14:45:38', 'halaman 1'),
(18052019164557, 7, '2019/18052019164557.jpg', '2019-05-18 14:45:57', 'halaman 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_scan_suma`
--

CREATE TABLE `tbl_scan_suma` (
  `id` bigint(20) NOT NULL,
  `id_suma` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_scan_suma`
--

INSERT INTO `tbl_scan_suma` (`id`, `id_suma`, `path`, `tgl`, `deskripsi`) VALUES
(1042019154716, 2, '2019/01042019154716.jpg', '2019-04-01 13:47:16', 'halaman 1'),
(1042019154741, 2, '2019/01042019154741.png', '2019-04-01 13:47:41', 'halaman 2'),
(18052019164806, 3, '2019/18052019164806.png', '2019-05-18 14:48:06', 'halaman 1'),
(18052019164818, 3, '2019/18052019164818.png', '2019-05-18 14:48:18', 'halaman disposisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_suma`
--

CREATE TABLE `tbl_suma` (
  `id_suma` bigint(20) UNSIGNED NOT NULL,
  `no_suma` char(128) NOT NULL,
  `pengirim_suma` varchar(256) NOT NULL,
  `perihal_suma` varchar(256) NOT NULL,
  `diterima_suma` date NOT NULL,
  `tgl_entri_suma` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `disposisi` text NOT NULL,
  `bidang` int(11) NOT NULL,
  `tgl_suma` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_suma`
--

INSERT INTO `tbl_suma` (`id_suma`, `no_suma`, `pengirim_suma`, `perihal_suma`, `diterima_suma`, `tgl_entri_suma`, `disposisi`, `bidang`, `tgl_suma`) VALUES
(1, '474.3/98', 'disperkim', 'permintaan data', '2019-03-30', '2019-03-30 02:33:16', 'laksanakan', 1, '2019-03-29'),
(2, '363.7/121', 'tidak di ketahui', 'permohonan', '2019-03-30', '2019-03-30 03:49:41', 'bubar', 1, '2019-03-30'),
(3, '475.3/V/2019/0009', 'Dinas Perikanan', 'Permohonan Data', '2019-05-18', '2019-05-18 14:47:42', 'Kasih data sesuai dengan database', 2, '2019-05-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id_sulur` bigint(11) UNSIGNED NOT NULL,
  `nomer_sulur` int(11) NOT NULL,
  `kode_sulur` char(32) NOT NULL,
  `kepada_sulur` varchar(256) NOT NULL,
  `perihal_sulur` varchar(256) NOT NULL,
  `tanggal_sulur` date NOT NULL,
  `pengolah_sulur` int(11) NOT NULL,
  `tgl_entri_sulur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_sulur`, `nomer_sulur`, `kode_sulur`, `kepada_sulur`, `perihal_sulur`, `tanggal_sulur`, `pengolah_sulur`, `tgl_entri_sulur`) VALUES
(3, 1, '464.9', 'disparbut', 'perihal', '2019-03-29', 1, '2019-03-29 13:09:06'),
(4, 2, '474.3/', 'dispendukcapil', 'undangan rapat', '2019-03-29', 1, '2019-03-29 13:45:37'),
(5, 3, '878.1/', 'yoi ah', 'au ah gelap', '2019-03-29', 1, '2019-03-29 13:48:12'),
(6, 4, '9901', 'desa', 'undangan', '2019-03-29', 1, '2019-03-29 13:50:34'),
(7, 5, '474.2/2019/', 'dinas ketenagakerjaan', 'lamaran pekerjaan', '2019-05-18', 2, '2019-05-18 14:45:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` char(36) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `privilages_user` int(3) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `flag` char(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `privilages_user`, `create_at`, `flag`) VALUES
('13fasfasf', 'opr', '202cb962ac59075b964b07152d234b70', 2, '2018-10-10 00:00:00', '0'),
('1b1d49d1-0fa1-46b8-9ae5-bf3792388561', 'opr1', '202cb962ac59075b964b07152d234b70', 2, '2019-03-26 13:28:02', '0'),
('405b7502-5fdf-4156-9bf0-c914ddb496ab', 'admin3', '202cb962ac59075b964b07152d234b70', 1, '2018-11-25 18:35:33', '1'),
('asjkhakjsha', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2018-10-10 00:00:00', '0'),
('b737b749-4592-4c1a-8938-10953f3a8a7c', 'pelayanan', '202cb962ac59075b964b07152d234b70', 2, '2019-05-18 16:42:39', '0'),
('df492639-977a-4ef6-bba8-4207de5eedb7', 'operator', '202cb962ac59075b964b07152d234b70', 2, '2018-12-15 05:48:02', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_desc`
--

CREATE TABLE `tbl_user_desc` (
  `id_user` char(36) NOT NULL,
  `user_fullname` varchar(64) DEFAULT NULL,
  `user_email` varchar(64) DEFAULT NULL,
  `user_address` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_desc`
--

INSERT INTO `tbl_user_desc` (`id_user`, `user_fullname`, `user_email`, `user_address`, `photo`) VALUES
('1b1d49d1-0fa1-46b8-9ae5-bf3792388561', 'akun779', 'akun779@gmail.com', 'MARGOYOSO RT 1 RW 3 KALINYAMATAN', '1b1d49d1-0fa1-46b8-9ae5-bf379238856126_03_2019_14_18_48.png'),
('asjkhakjsha', 'administrator bro', 'admin@localhost.com', 'yoiyoi', 'asjkhakjsha30_03_2019_03_53_19.jpg'),
('b737b749-4592-4c1a-8938-10953f3a8a7c', 'pelayanan', 'pelayanan@gmail.com', 'MARGOYOSO RT 1 RW 3 KALINYAMATAN', 'b737b749-4592-4c1a-8938-10953f3a8a7c18_05_2019_16_43_46.jpg'),
('df492639-977a-4ef6-bba8-4207de5eedb7', 'operator', 'operator@gmail.com', '', 'df492639-977a-4ef6-bba8-4207de5eedb730_03_2019_05_10_57.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_log`
--

CREATE TABLE `tbl_user_log` (
  `number` int(11) NOT NULL,
  `id_user` char(36) NOT NULL,
  `date_and_time` datetime NOT NULL,
  `user_agents` varchar(255) NOT NULL,
  `ip_address` int(11) NOT NULL,
  `log` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_log`
--

INSERT INTO `tbl_user_log` (`number`, `id_user`, `date_and_time`, `user_agents`, `ip_address`, `log`) VALUES
(1, 'asjkhakjsha', '2018-11-17 21:50:27', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(2, 'asjkhakjsha', '2018-11-17 21:50:39', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(3, 'asjkhakjsha', '2018-11-17 21:57:04', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(4, 'asjkhakjsha', '2018-11-17 21:57:23', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(5, 'asjkhakjsha', '2018-11-17 22:55:01', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(6, '13fasfasf', '2018-11-17 22:56:46', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(7, 'asjkhakjsha', '2018-11-17 22:57:05', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(8, '13fasfasf', '2018-11-17 22:57:16', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(9, 'asjkhakjsha', '2018-11-18 19:19:00', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(10, 'asjkhakjsha', '2018-11-18 19:19:20', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(11, 'asjkhakjsha', '2018-11-18 19:20:50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(12, 'asjkhakjsha', '2018-11-18 22:07:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(13, 'asjkhakjsha', '2018-11-18 22:33:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(14, 'asjkhakjsha', '2018-11-18 23:00:23', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(15, 'asjkhakjsha', '2018-11-18 23:04:05', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(16, 'asjkhakjsha', '2018-11-19 18:57:45', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(17, 'asjkhakjsha', '2018-11-19 19:00:07', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(18, 'asjkhakjsha', '2018-11-19 21:36:03', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(19, 'asjkhakjsha', '2018-11-19 21:36:37', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(20, 'asjkhakjsha', '2018-11-23 03:14:43', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(21, 'asjkhakjsha', '2018-11-23 03:14:46', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(22, 'asjkhakjsha', '2018-11-23 03:14:50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(23, 'asjkhakjsha', '2018-11-23 03:16:43', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(24, 'asjkhakjsha', '2018-11-23 03:19:02', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(25, 'asjkhakjsha', '2018-11-23 03:23:07', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(26, 'asjkhakjsha', '2018-11-23 03:23:10', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(27, 'asjkhakjsha', '2018-11-23 03:27:08', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(28, 'asjkhakjsha', '2018-11-23 03:27:10', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(29, 'asjkhakjsha', '2018-11-23 19:21:11', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(30, 'asjkhakjsha', '2018-11-24 18:55:35', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(31, 'asjkhakjsha', '2018-11-25 09:27:25', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(32, 'asjkhakjsha', '2018-11-25 12:05:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(33, 'asjkhakjsha', '2018-11-25 18:26:18', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(34, 'asjkhakjsha', '2018-11-25 19:05:10', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(35, 'asjkhakjsha', '2018-11-25 20:11:12', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(36, 'asjkhakjsha', '2018-11-25 20:11:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(37, 'asjkhakjsha', '2018-11-26 18:32:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(38, 'asjkhakjsha', '2018-11-26 19:34:10', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(39, 'asjkhakjsha', '2018-11-26 20:18:42', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(40, 'asjkhakjsha', '2018-11-26 20:36:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(41, 'asjkhakjsha', '2018-11-26 20:37:49', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(42, 'asjkhakjsha', '2018-11-28 18:20:43', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(43, 'asjkhakjsha', '2018-11-28 18:20:59', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'logout'),
(44, 'asjkhakjsha', '2018-11-28 18:21:09', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 0, 'login'),
(45, 'asjkhakjsha', '2018-11-30 19:30:41', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(46, 'asjkhakjsha', '2018-11-30 19:31:49', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(47, 'asjkhakjsha', '2018-11-30 19:31:57', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(48, 'asjkhakjsha', '2018-11-30 20:53:43', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(49, 'asjkhakjsha', '2018-11-30 22:13:23', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(50, 'asjkhakjsha', '2018-12-01 08:30:25', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(51, 'asjkhakjsha', '2018-12-01 08:51:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(52, 'asjkhakjsha', '2018-12-01 08:55:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(53, 'asjkhakjsha', '2018-12-01 09:50:37', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(54, 'asjkhakjsha', '2018-12-01 12:39:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(55, 'asjkhakjsha', '2018-12-01 18:24:24', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(56, 'asjkhakjsha', '2018-12-01 19:27:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(57, 'asjkhakjsha', '2018-12-01 20:02:26', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(58, 'asjkhakjsha', '2018-12-01 20:39:15', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(59, 'asjkhakjsha', '2018-12-02 08:44:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(60, 'asjkhakjsha', '2018-12-02 11:47:30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(61, 'asjkhakjsha', '2018-12-02 13:06:21', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(62, 'asjkhakjsha', '2018-12-02 13:16:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(63, 'asjkhakjsha', '2018-12-02 14:46:54', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(64, 'asjkhakjsha', '2018-12-02 14:49:46', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(65, 'asjkhakjsha', '2018-12-02 15:06:35', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(66, 'asjkhakjsha', '2018-12-02 21:07:24', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(67, 'asjkhakjsha', '2018-12-02 15:09:53', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(68, 'asjkhakjsha', '2018-12-02 21:10:14', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(69, 'asjkhakjsha', '2018-12-02 15:10:25', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(70, 'asjkhakjsha', '2018-12-02 21:10:42', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(71, 'asjkhakjsha', '2018-12-02 21:36:55', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(72, 'asjkhakjsha', '2018-12-05 14:03:33', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(73, 'asjkhakjsha', '2018-12-05 20:15:21', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(74, 'asjkhakjsha', '2018-12-09 03:58:55', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(75, 'asjkhakjsha', '2018-12-09 04:30:04', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(76, 'asjkhakjsha', '2018-12-09 04:30:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(77, 'asjkhakjsha', '2018-12-09 04:34:27', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(78, 'asjkhakjsha', '2018-12-09 04:34:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(79, 'asjkhakjsha', '2018-12-09 05:04:54', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(80, 'asjkhakjsha', '2018-12-09 13:50:30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(81, 'asjkhakjsha', '2018-12-09 14:05:18', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(82, 'asjkhakjsha', '2018-12-09 14:06:07', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(83, 'asjkhakjsha', '2018-12-09 14:06:38', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(84, 'asjkhakjsha', '2018-12-09 14:07:21', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(85, 'asjkhakjsha', '2018-12-09 14:21:24', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(86, 'asjkhakjsha', '2018-12-14 13:29:31', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(87, 'asjkhakjsha', '2018-12-14 13:50:06', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(88, '405b7502-5fdf-4156-9bf0-c914ddb496ab', '2018-12-14 13:50:57', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(89, '405b7502-5fdf-4156-9bf0-c914ddb496ab', '2018-12-14 13:51:01', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(90, '405b7502-5fdf-4156-9bf0-c914ddb496ab', '2018-12-14 13:51:14', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(91, 'asjkhakjsha', '2018-12-14 13:51:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(92, 'asjkhakjsha', '2018-12-14 13:52:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(93, 'asjkhakjsha', '2018-12-15 05:47:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(94, 'asjkhakjsha', '2018-12-15 12:15:50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(95, 'asjkhakjsha', '2018-12-15 19:00:14', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(96, 'asjkhakjsha', '2018-12-15 13:00:58', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(97, 'asjkhakjsha', '2018-12-15 13:01:10', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(98, 'asjkhakjsha', '2018-12-15 13:04:16', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(99, 'asjkhakjsha', '2018-12-15 13:04:20', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(100, 'asjkhakjsha', '2018-12-15 13:04:30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(101, 'asjkhakjsha', '2018-12-15 13:10:48', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'login'),
(102, 'asjkhakjsha', '2018-12-15 13:37:11', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'logout'),
(103, 'asjkhakjsha', '2018-12-15 13:37:21', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(104, 'asjkhakjsha', '2018-12-15 13:38:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'login'),
(105, 'asjkhakjsha', '2018-12-15 13:43:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'logout'),
(106, 'asjkhakjsha', '2018-12-15 13:44:10', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'login'),
(107, 'asjkhakjsha', '2018-12-15 13:44:16', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'logout'),
(108, 'asjkhakjsha', '2018-12-15 13:44:22', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(109, 'asjkhakjsha', '2018-12-15 13:48:37', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(110, 'asjkhakjsha', '2018-12-15 13:48:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(111, 'asjkhakjsha', '2018-12-15 13:53:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(112, 'asjkhakjsha', '2018-12-15 13:53:53', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(113, 'asjkhakjsha', '2018-12-15 13:54:24', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(114, 'asjkhakjsha', '2018-12-15 13:54:49', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(115, 'asjkhakjsha', '2018-12-15 13:55:16', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(116, 'asjkhakjsha', '2018-12-15 13:57:51', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(117, 'asjkhakjsha', '2018-12-15 14:11:49', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(118, 'asjkhakjsha', '2018-12-15 14:11:57', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(119, 'asjkhakjsha', '2018-12-15 14:12:20', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(120, 'asjkhakjsha', '2018-12-15 14:55:09', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(121, 'asjkhakjsha', '2018-12-15 14:55:15', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(122, 'asjkhakjsha', '2018-12-15 14:55:23', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'login'),
(123, 'asjkhakjsha', '2018-12-15 14:55:46', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0', 0, 'logout'),
(124, 'asjkhakjsha', '2018-12-15 15:05:13', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(125, 'asjkhakjsha', '2018-12-15 17:14:39', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(126, 'asjkhakjsha', '2018-12-15 17:39:46', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(127, 'asjkhakjsha', '2018-12-15 17:40:32', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(128, 'asjkhakjsha', '2018-12-16 08:12:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(129, 'asjkhakjsha', '2018-12-16 08:13:30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(130, 'asjkhakjsha', '2018-12-16 08:14:22', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'logout'),
(131, 'asjkhakjsha', '2018-12-16 08:15:21', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 0, 'login'),
(132, 'asjkhakjsha', '2019-03-26 13:16:28', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(133, 'asjkhakjsha', '2019-03-26 13:18:08', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(134, 'asjkhakjsha', '2019-03-26 13:19:35', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(135, 'asjkhakjsha', '2019-03-26 13:25:28', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(136, 'asjkhakjsha', '2019-03-26 13:28:05', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(137, '1b1d49d1-0fa1-46b8-9ae5-bf3792388561', '2019-03-26 13:28:37', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(138, '1b1d49d1-0fa1-46b8-9ae5-bf3792388561', '2019-03-26 13:29:53', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(139, '1b1d49d1-0fa1-46b8-9ae5-bf3792388561', '2019-03-26 13:41:52', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(140, '1b1d49d1-0fa1-46b8-9ae5-bf3792388561', '2019-03-26 14:19:17', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(141, 'asjkhakjsha', '2019-03-26 14:19:20', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(142, 'asjkhakjsha', '2019-03-26 14:20:06', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(143, '1b1d49d1-0fa1-46b8-9ae5-bf3792388561', '2019-03-26 14:21:25', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(144, '1b1d49d1-0fa1-46b8-9ae5-bf3792388561', '2019-03-26 14:21:31', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(145, 'asjkhakjsha', '2019-03-26 14:23:42', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'login'),
(146, 'asjkhakjsha', '2019-03-26 15:09:58', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 0, 'logout'),
(147, 'asjkhakjsha', '2019-03-28 13:16:40', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(148, 'asjkhakjsha', '2019-03-28 13:47:32', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(149, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-28 13:47:39', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(150, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-28 13:49:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(151, 'asjkhakjsha', '2019-03-28 14:08:11', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(152, 'asjkhakjsha', '2019-03-28 14:09:09', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(153, 'asjkhakjsha', '2019-03-28 14:09:17', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(154, 'asjkhakjsha', '2019-03-28 14:31:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(155, 'asjkhakjsha', '2019-03-28 14:32:08', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(156, 'asjkhakjsha', '2019-03-29 12:49:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(157, 'asjkhakjsha', '2019-03-29 16:57:35', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(158, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-29 17:22:02', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(159, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-29 17:23:06', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(160, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-29 17:23:25', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(161, 'asjkhakjsha', '2019-03-30 03:47:50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(162, 'asjkhakjsha', '2019-03-30 03:53:25', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(163, 'asjkhakjsha', '2019-03-30 03:53:30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(164, 'asjkhakjsha', '2019-03-30 03:54:41', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(165, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 03:54:44', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(166, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 04:14:54', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(167, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 12:59:35', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(168, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 14:22:04', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(169, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 14:39:40', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(170, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 14:43:57', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(171, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 14:44:04', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(172, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-30 17:46:45', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(173, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 03:32:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(174, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 04:29:50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(175, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 08:48:36', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(176, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 09:04:38', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(177, 'asjkhakjsha', '2019-03-31 09:04:42', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(178, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 09:31:44', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(179, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 10:41:50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(180, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 11:14:02', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(181, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 12:02:07', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(182, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-03-31 12:29:17', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(183, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-04-01 15:46:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(184, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-04-01 16:03:35', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(185, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-04-01 16:48:59', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(186, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-04-01 17:04:14', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(187, 'asjkhakjsha', '2019-04-07 16:17:03', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'login'),
(188, 'asjkhakjsha', '2019-04-07 16:17:31', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 0, 'logout'),
(189, 'asjkhakjsha', '2019-05-01 04:17:54', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 0, 'login'),
(190, 'asjkhakjsha', '2019-05-01 04:19:11', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 0, 'logout'),
(191, 'asjkhakjsha', '2019-05-18 16:41:56', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, 'login'),
(192, 'asjkhakjsha', '2019-05-18 16:43:08', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, 'logout'),
(193, 'b737b749-4592-4c1a-8938-10953f3a8a7c', '2019-05-18 16:43:12', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, 'login'),
(194, 'b737b749-4592-4c1a-8938-10953f3a8a7c', '2019-05-18 16:50:11', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 0, 'logout'),
(195, 'asjkhakjsha', '2019-05-23 16:03:02', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'login'),
(196, 'asjkhakjsha', '2019-05-23 16:03:29', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'logout'),
(197, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-05-23 16:03:34', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'login'),
(198, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-05-23 16:06:31', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'login'),
(199, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-05-23 16:06:40', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'login'),
(200, 'df492639-977a-4ef6-bba8-4207de5eedb7', '2019-05-23 16:07:00', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'logout'),
(201, 'asjkhakjsha', '2019-05-23 16:07:07', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 0, 'login');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_fa`
--
ALTER TABLE `tbl_fa`
  ADD PRIMARY KEY (`id_font`);

--
-- Indexes for table `tbl_nav`
--
ALTER TABLE `tbl_nav`
  ADD PRIMARY KEY (`id_nav`);

--
-- Indexes for table `tbl_online`
--
ALTER TABLE `tbl_online`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD PRIMARY KEY (`id_permissions`);

--
-- Indexes for table `tbl_privilages`
--
ALTER TABLE `tbl_privilages`
  ADD PRIMARY KEY (`id_priv`);

--
-- Indexes for table `tbl_scan_sulur`
--
ALTER TABLE `tbl_scan_sulur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_scan_suma`
--
ALTER TABLE `tbl_scan_suma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_suma`
--
ALTER TABLE `tbl_suma`
  ADD PRIMARY KEY (`id_suma`);

--
-- Indexes for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id_sulur`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_desc`
--
ALTER TABLE `tbl_user_desc`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_fa`
--
ALTER TABLE `tbl_fa`
  MODIFY `id_font` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=863;
--
-- AUTO_INCREMENT for table `tbl_nav`
--
ALTER TABLE `tbl_nav`
  MODIFY `id_nav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  MODIFY `id_permissions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_privilages`
--
ALTER TABLE `tbl_privilages`
  MODIFY `id_priv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_suma`
--
ALTER TABLE `tbl_suma`
  MODIFY `id_suma` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_sulur` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_online`
--
ALTER TABLE `tbl_online`
  ADD CONSTRAINT `tbl_online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
