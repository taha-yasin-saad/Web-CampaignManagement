-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2020 at 11:46 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `closor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 123456788, 'admin@yahoo.com', '$2y$10$5oK5fhAl/rOe2ZNMCNrvVu16NmTPeXQcEf3Nuz0sj./8N0dlzqu5u', NULL, '2020-02-04 19:03:00', '2020-02-04 19:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint DEFAULT NULL,
  `phonecode` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `source_id` int DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scheduled_on` timestamp NULL DEFAULT NULL,
  `last_contact` timestamp NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `lead` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `product_id`, `user_id`, `source_id`, `phone`, `email`, `scheduled_on`, `last_contact`, `status`, `lead`, `created_at`, `updated_at`) VALUES
(1, 'kareem222', 6, NULL, NULL, '1234567654', 'kareemkima@gmail.com\r\n', NULL, NULL, 0, '{\"name\":\"kareem222\",\"phone\":\"1234567654\",\"product_id\":\"6\",\"mobile\":\"22345678987654\"}', '2020-02-23 02:10:22', '2020-02-23 02:10:22'),
(2, 'kareem222', 6, NULL, NULL, '1234567654', 'kareemkima@gmail.com', NULL, NULL, 0, '{\"name\":\"kareem222\",\"phone\":\"1234567654\",\"product_id\":\"6\",\"mobile\":\"22345678987654\"}', '2020-02-23 02:10:47', '2020-02-23 02:10:47'),
(3, 'kareemTest', 2, NULL, NULL, '0123987662', 'kareemkima@gmail.com', NULL, NULL, 0, '{\"name\":\"kareemTest\",\"email\":\"kareemkima@gmail.com\",\"phone\":\"0123987662\",\"address\":\"miami\",\"city\":\"alexandria\",\"social\":\"http:\\/\\/facebook.com\",\"occupation\":\"Manager\",\"workplace_id\":\"4\",\"product_id\":\"2\"}', '2020-02-23 02:36:55', '2020-02-23 02:36:55'),
(4, 'kareemTest2', 6, NULL, NULL, '0123987662', 'kareemkima@gmail.com', NULL, NULL, 0, '{\"name\":\"kareemTest2\",\"email\":\"kareemkima@gmail.com\",\"phone\":\"0123987662\",\"address\":\"miami\",\"city\":\"alexandria\",\"social\":\"http:\\/\\/facebook.com\",\"occupation\":\"Manager\",\"workplace_id\":\"6\",\"product_id\":\"6\"}', '2020-02-23 02:37:58', '2020-02-23 02:37:58'),
(5, 'kareemTest2', 6, NULL, NULL, '0123987662', 'kareemkima@gmail.com', NULL, NULL, 0, '{\"name\":\"kareemTest2\",\"email\":\"kareemkima@gmail.com\",\"phone\":\"0123987662\",\"address\":\"miami\",\"city\":\"alexandria\",\"social\":\"http:\\/\\/facebook.com\",\"occupation\":\"Manager\",\"workplace_id\":\"6\",\"product_id\":\"6\"}', '2020-02-23 02:38:02', '2020-02-23 02:38:02'),
(6, 'kareemTest2', 6, NULL, NULL, '0123987662', 'kareemkima@gmail.com', NULL, NULL, 0, '{\"name\":\"kareemTest2\",\"email\":\"kareemkima@gmail.com\",\"phone\":\"0123987662\",\"address\":\"miami\",\"city\":\"alexandria\",\"social\":\"http:\\/\\/facebook.com\",\"occupation\":\"Manager\",\"workplace_id\":\"6\",\"product_id\":\"6\"}', '2020-02-23 02:38:11', '2020-02-23 02:38:11'),
(7, 'midooo', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"midooo\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":null,\"city\":null,\"social\":null,\"occupation\":null,\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:07:29', '2020-02-24 22:07:29'),
(8, 'midooo', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"midooo\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:07:39', '2020-02-24 22:07:39'),
(9, 'midooo', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"midooo\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:07:44', '2020-02-24 22:07:44'),
(10, 'dada', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"dada\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:10:21', '2020-02-24 22:10:21'),
(11, 'dada', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"dada\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:10:47', '2020-02-24 22:10:47'),
(12, 'dada', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"dada\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:10:48', '2020-02-24 22:10:48'),
(13, 'dada', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"dada\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:11:20', '2020-02-24 22:11:20'),
(14, 'fofo', 7, NULL, NULL, '123456', NULL, NULL, NULL, 0, '{\"name\":\"fofo\",\"email\":\"hanafy@gmail.com\",\"phone\":\"123456\",\"address\":\"1\",\"city\":\"1\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-24 22:11:25', '2020-02-24 22:11:25'),
(15, 'Abu Yazeed', 7, NULL, NULL, '01016789919', NULL, NULL, NULL, 0, '{\"name\":\"Abu Yazeed\",\"email\":\"info@ahmedmohsen.com\",\"phone\":\"01016789919\",\"address\":\"5 Hefny Nasif, From Kornish, Sidi Gaber\",\"city\":\"Alexandria\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-25 22:07:33', '2020-02-25 22:07:33'),
(16, 'Abu Yazeed', 7, NULL, NULL, '01016789919', NULL, NULL, NULL, 0, '{\"name\":\"Abu Yazeed\",\"email\":\"info@ahmedmohsen.com\",\"phone\":\"01016789919\",\"address\":\"5 Hefny Nasif, From Kornish, Sidi Gaber\",\"city\":\"Alexandria\",\"social\":\"1\",\"occupation\":\"1\",\"workplace_id\":\"1\",\"product_id\":\"7\"}', '2020-02-25 22:07:35', '2020-02-25 22:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_27_174431_create_workplaces_table', 2),
(4, '2020_01_29_174431_create_products_table', 3),
(5, '2020_01_29_184028_create_user_products_table', 3),
(7, '2020_02_04_163012_create_admins_table', 4),
(8, '2020_02_13_150832_add_columns_to_worlplaces_table', 5),
(9, '2020_02_13_184028_create_workplace_users_table', 5),
(10, '2020_02_17_153418_add_role_to_workplace_users_table', 6),
(11, '2020_02_22_135657_create_leads_table', 7),
(12, '2020_05_05_231141_add_country_code_to_users_table', 8),
(13, '2020_05_6_135657_create_times_table', 8),
(14, '2020_07_25_164157_create_sources_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('info@ahmedmohsen.com', '$2y$10$B45ONmoktKOHVi596c8YgOni5in41FTAl.7VIi4LpnTkms9nY30cy', '2020-06-21 05:28:00'),
('mohamedfathybasha@gmail.com', '$2y$10$tZWtZ.5gtQ70fCbcRXkKeusJBiOMSBQEn5l83VhOmA/XRwGdJSnRC', '2020-07-19 01:11:48'),
('sherif@atumstudio.com', '$2y$10$4HGxrq4HWqds3iLxGc6m/eMqWs6Ol1r/Bj7HY9e2vhqeWAL3vko0W', '2020-07-26 19:49:52'),
('mohammed.fathy.abdelrhman@gmail.com', '$2y$10$2GbYdmBcBEfq/bDvOiAUxuEn9jkdBMX.FfzcOYQ7.8ex3ztgjaQzi', '2020-08-25 21:02:36'),
('egyman1973@gmail.com', '$2y$10$xhP7/wtUtaOXrjJkDSQOpOA2vKXSAITgrU8640nyJXykLrl8c.wRO', '2020-08-29 03:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `workplace_id` int NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `workplace_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 4, 'vola p1', '2020-02-16 15:09:35', '2020-02-16 15:09:35'),
(2, 4, 'vola p2', '2020-02-16 15:17:53', '2020-02-16 15:17:53'),
(3, 1, 'Legal Services', '2020-02-16 16:44:44', '2020-02-16 16:44:44'),
(4, 4, 'p3', '2020-02-16 22:59:58', '2020-02-16 22:59:58'),
(5, 5, 'test k', '2020-02-17 20:26:20', '2020-02-17 20:26:20'),
(6, 6, 'Product test', '2020-02-20 02:40:06', '2020-02-20 02:40:06'),
(7, 1, 'Corporate Registration Services', '2020-02-23 03:45:42', '2020-02-23 03:45:42'),
(8, 7, 'General', '2020-05-12 16:37:37', '2020-05-12 16:37:37'),
(9, 8, 'General', '2020-06-21 02:15:55', '2020-06-21 02:15:55'),
(10, 8, 'Sweet Corn', '2020-06-21 02:19:41', '2020-06-21 02:19:41'),
(11, 8, 'Soft Drinks', '2020-06-21 02:22:46', '2020-06-21 02:22:46'),
(12, 1, 'Remote Consultations', '2020-06-21 05:22:32', '2020-06-21 05:22:32'),
(13, 2, 'English course', '2020-06-25 23:19:53', '2020-06-25 23:19:53'),
(14, 9, 'General', '2020-07-22 20:43:14', '2020-07-22 20:43:14'),
(15, 9, 'kark', '2020-07-22 20:45:01', '2020-07-22 20:45:01'),
(16, 10, 'General', '2020-07-26 19:20:52', '2020-07-26 19:20:52'),
(17, 11, 'General', '2020-08-18 17:01:29', '2020-08-18 17:01:29'),
(18, 1, 'AI Chatbot', '2020-08-24 01:54:29', '2020-08-24 01:54:29'),
(19, 1, 'Custome Made APPs', '2020-08-24 01:55:05', '2020-08-24 01:55:05'),
(20, 12, 'General', '2020-08-31 00:54:12', '2020-08-31 00:54:12'),
(21, 13, 'General', '2020-09-02 01:04:49', '2020-09-02 01:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `id` bigint UNSIGNED NOT NULL,
  `workplace_id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `widget_type` enum('icon','text') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alignment` enum('right','left') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bubble` enum('on','off') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bubble_line_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bubble_line_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bubble_bg_color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bubble_text_color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_round` int DEFAULT NULL,
  `fields` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_lable_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_lable_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `workplace_id`, `user_id`, `name`, `country_id`, `website`, `product_id`, `widget_type`, `alignment`, `primary`, `secondary`, `icon_type`, `bubble`, `bubble_line_1`, `bubble_line_2`, `bubble_bg_color`, `bubble_text_color`, `text_text`, `text_round`, `fields`, `custom_lable_1`, `custom_lable_2`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 'ahmed', 1, 'https://kamal.com', 6, 'icon', 'right', '#a83434', '#ffffff', 'mdi mdi-headset fa-fw', 'on', 'Want to talk to an expert?', 'Our Team is 60 Second Away From You!', '#000000', '#ffffff', 'Talk to an expert!', 10, '[\"name\",\"email\",\"custom1\",\"custom2\"]', 'phone', 'age', '2020-07-26 01:23:50', '2020-07-26 01:23:50'),
(2, 7, 10, 'Home Page', 1, 'https://sherka.com', 8, 'text', 'left', '#ff0000', '#ffffff', 'mdi mdi-phone fa-fw', 'on', 'Want to talk to an expert?aa', 'Our Team is 60 Second Away From You!', '#959a9e', '#ffffff', 'Talk to an expert!', 10, '[\"name\"]', NULL, NULL, '2020-07-26 19:56:16', '2020-09-06 23:41:45'),
(3, 7, 10, 'test 2', 1, NULL, 8, 'text', 'left', '#2dc856', '#ffffff', 'mdi mdi-cellphone-android fa-fw', 'off', 'Want to talk to an expert', 'Our Team is 60 Second Away From Youuuuu', '#959a9e', '#ffffff', 'Talk to an expert!', 10, '[\"name\"]', NULL, NULL, '2020-08-14 17:10:59', '2020-08-14 17:10:59'),
(4, 11, 21, 'Kalma 1', 1, 'https://menuhat.online/', 17, 'text', 'right', '#ff8c82', '#ffff00', 'mdi mdi-phone fa-fw', 'on', 'Want to talk to an expert?', 'Our Team is 60 Second Away From You!', '#959a9e', '#ffffff', 'Talk to an expert!', 10, '[\"name\",\"email\"]', NULL, NULL, '2020-08-18 17:03:14', '2020-08-18 17:03:14'),
(5, 2, 1, 'Test widget', 3, 'http:\\\\w3schools.com', 13, 'icon', 'right', '#8934a8', '#ffffff', 'mdi mdi-headset fa-fw', 'on', 'Want to talk to an expert?', 'Our Team is 60 Second Away From You!', '#959a9e', '#ffffff', 'Talk to an expert!', 10, '[\"name\",\"email\"]', NULL, NULL, '2020-08-18 19:37:25', '2020-08-18 19:37:25'),
(6, 2, 1, 'test 2', 1, 'http:\\\\w3schools.com', 13, 'icon', 'left', '#3475a8', '#ffffff', 'mdi mdi-headset fa-fw', 'on', 'Want to talk to an expert?', 'Our Team is 60 Second Away From You!', '#959a9e', '#ffffff', 'Talk to an expert!', 10, '[\"name\",\"email\",\"custom1\"]', 'phone', NULL, '2020-08-18 19:56:13', '2020-08-18 19:56:13'),
(7, 13, 23, 'call', 1, 'http://www.max.com', 21, 'icon', 'right', '#084f1b', '#a6a6a6', 'mdi mdi-cellphone-android fa-fw', 'on', 'hay!!!', 'team 60 Second Away From You!', '#6bbcff', '#ffffff', 'Talk to an expert!', 10, '[\"name\",\"email\",\"custom2\"]', 'aaaaaaa', 'ddddddddd', '2020-09-02 01:13:22', '2020-09-10 11:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint UNSIGNED NOT NULL,
  `workplace_id` int NOT NULL,
  `sun_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `workplace_id`, `sun_start`, `sun_end`, `mon_start`, `mon_end`, `tue_start`, `tue_end`, `wed_start`, `wed_end`, `thu_start`, `thu_end`, `fri_start`, `fri_end`, `sat_start`, `sat_end`, `created_at`, `updated_at`) VALUES
(1, 7, '08:00', '14:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 16:37:37', '2020-05-12 16:37:37'),
(2, 8, '08:00', '18:00', '08:00', '18:00', '08:00', '18:00', '08:00', '18:00', '08:00', '18:00', '08:00', '18:00', '08:00', '18:00', '2020-06-21 02:15:55', '2020-06-21 02:20:16'),
(3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-21 05:21:07', '2020-06-21 05:21:07'),
(4, 9, '18:42', '20:42', '21:43', '12:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-22 20:43:14', '2020-07-22 20:43:14'),
(5, 10, '09:00', '18:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-26 19:20:52', '2020-07-26 19:20:52'),
(6, 11, '12:00', '23:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-18 17:01:29', '2020-08-18 17:01:29'),
(7, 12, NULL, NULL, '07:54', '19:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-31 00:54:12', '2020-08-31 00:54:12'),
(8, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-02 01:04:49', '2020-09-02 01:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` int DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `country_code`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', '1150305357', NULL, 'mohammed.fathy.abdelrhman@gmail.com', NULL, '$2y$10$6RRCaamt1pwJlzWePNK2Q.j8/6u0dUQ5VUj0sPKZywpRh6lb9sXw.', 'E1dd3XrcNuAPXqp0nx5COg96iDkHVorAAtOIweotYjDgO88lU1FIfVna6xie', '2020-01-26 14:26:56', '2020-06-25 23:18:57'),
(2, 'ahmed kamal', '123456789', NULL, 'kamal@gmail.com', NULL, '$2y$10$3wKpn5S5v5/84bDItu3zo.x7MAouRIiSJZxnFm/Twf0HB7STbdha.', NULL, '2020-01-27 11:18:17', '2020-01-27 12:24:19'),
(3, 'ahmed', '1020304050', NULL, 'ahmed.kamal775@gmail.com', NULL, '$2y$10$4K5QHaq8ygD2ynB4th/Mhufyr4McmzcWv5pbY2U0bLO7l6M68ffp6', 'DMSLaPS0CqBYkQjxNevLoxmsZ2XYbgaIXHLOnHqSUFOEvudW1gTEvR4Wdbca', '2020-01-29 02:03:13', '2020-01-29 04:33:25'),
(4, NULL, NULL, NULL, 'a7medkamal775@gmail.com', NULL, NULL, NULL, '2020-02-03 00:55:50', '2020-02-03 00:55:50'),
(5, 'mahmoud', '33331997', NULL, 'm7moodali88@gmail.com', NULL, '$2y$10$G8.80oHOB8a9VtAREqN7LugpFsx7hDwns5nC0eDa4Byp0xOmc0ytG', 'MfWZzC4p4x8ARuCPZvGcae0GQnzIbAtMEqaRL5bs4nW91L5Zwh2Jyy9yOK3X', '2020-02-03 18:45:19', '2020-02-03 18:45:19'),
(6, 'vola', '123789456', NULL, 'vola@yahoo.com', NULL, '$2y$10$2rzSdnuqJgiq5SOLTO.JqOzBY3hINPu8xTD/cpAghucgkoQngSKZK', NULL, '2020-02-03 19:13:53', '2020-02-03 19:13:53'),
(7, 'Ahmed El Sayed', '01016789919', 20, 'info@ahmedmohsen.com', NULL, '$2y$10$9Zzj2ycOyEGSWjiX8uqnM.vTPoKi0anVq8kk7BNg6VUJYBGjDZFFC', 'FYXIuyKdRkctWhC1QPY5qHDv0F30RMZboakTZhLGbaaxdX7DeZxsemEidBYM', '2020-02-03 19:36:19', '2020-08-24 03:09:44'),
(8, 'ahmed kamal', '1123456789', NULL, 'mohamedfathybasha@gmail.com', NULL, '$2y$10$8KyKZv3QtshENlrprFdCOu7ux6d7qL6z5Sm8ns9s4HEB6ZDCyp0Hm', NULL, '2020-02-03 12:28:08', '2020-02-03 12:28:08'),
(9, NULL, NULL, NULL, 'mo@gmail.com', NULL, NULL, NULL, '2020-02-03 13:47:13', '2020-02-03 13:47:13'),
(10, 'Mohsenous', '1016789919', 355, 'egyman1973@gmail.com', NULL, '$2y$10$ig7hj2ovM/mauvXkBqZ6s.zX.CPZUJuckoc56zchil99VZ4.iId7O', NULL, '2020-02-11 00:43:25', '2020-09-09 00:58:22'),
(11, NULL, NULL, NULL, 'egyman1973ssd@gmail.com', NULL, NULL, NULL, '2020-02-11 00:43:46', '2020-02-11 00:43:46'),
(12, 'kimo', '2011252525', NULL, 'kimo_nile@yahoo.com', NULL, '$2y$10$Suo2PUPcf.1fSqv.USU.s.ogDxdNR6mWFuzdqmh4Mtcq1U4xAUfbW', NULL, '2020-02-16 15:10:16', '2020-02-16 15:14:44'),
(13, 'mohamed fathy', '1987654321', NULL, 'fathy@gmail.com', NULL, '$2y$10$Ejkq9hM3tAwdkAsGdzvyi.EI46ixDeJas5zAPXlmJPJTeqs23KCQu', NULL, '2020-02-17 20:23:39', '2020-02-17 20:23:39'),
(14, NULL, NULL, NULL, 'mahmoud@yahoo.com', NULL, NULL, NULL, '2020-02-20 02:40:44', '2020-02-20 02:40:44'),
(15, NULL, NULL, NULL, 'zeedoo@gmail.com', NULL, NULL, NULL, '2020-02-25 22:09:10', '2020-02-25 22:09:10'),
(16, 'Tamer Ashoor', '01016789919', NULL, 'tadreb.inbox@gmail.com', NULL, '$2y$10$aYSM2nKyz07GhuHYZXEuAuwIF/nuAaqa4CoDijTygiBegKh4haORq', NULL, '2020-06-21 02:21:41', '2020-06-21 02:52:21'),
(17, NULL, NULL, NULL, 'ali@closor.com', NULL, NULL, NULL, '2020-06-21 05:25:02', '2020-06-21 05:25:02'),
(18, 'ahmed kamal', '0123145687', 20, 'ahmed@menuhat.com', NULL, '$2y$10$F/UWyGFfsiaqgh.3ym7YaOQl.tDPLRm982TPlb2Q2KlM.uUwTxqJi', NULL, '2020-07-22 20:41:47', '2020-07-22 20:41:47'),
(19, 'Sherif Adel', '123456', 1, 'sherif@atumstudio.com', NULL, '$2y$10$IXggTCiui1FiPALZnyyaWespzvuURUQIV.HqfmhollWUcPr8JOe06', NULL, '2020-07-26 19:19:24', '2020-07-26 19:47:34'),
(20, NULL, NULL, NULL, 'diab@atumstudio.com', NULL, NULL, NULL, '2020-07-26 19:21:57', '2020-07-26 19:21:57'),
(21, 'Kamal', '010050512244', 20, 'ahmed.kamal@gmail.com', NULL, '$2y$10$OMY/6fEa2DE9kaYTN0C98urRjTjCGAfnOJkvXnHUL90zirpmNE4Pi', NULL, '2020-08-18 16:59:40', '2020-08-18 16:59:40'),
(22, 'Atumtum', '123456', NULL, 'atum.mcc@gmail.com', NULL, '$2y$10$dvvTfzn8CCGQGybMwUuhe.DHyw.leKdcphGi6WyLlVaDsC8eL.6j.', '7BGGTiJXISd7xwcpy9qEtulNSk9FmhR3XmqArQM6FodbHPxx7b3j3ddEDVhU', '2020-08-24 02:06:58', '2020-08-24 02:15:21'),
(23, 'tasho', '12345677', 53, 'tashosx@gmail.com', NULL, '$2y$10$JOqnJy1RMOYzCT5yF1OscOfP9MdJHfsfG5Eb.MCepAkSvVRS.vMky', 'blFGWVZJ1Xzwo6EIn4i1X1fUBWAF2QQDTosgxNkZ08rIQN1Hjm4i3Qygn4Xo', '2020-09-02 01:04:25', '2020-09-10 11:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

CREATE TABLE `user_products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2020-02-16 15:09:35', '2020-02-16 15:09:35'),
(2, 12, 1, NULL, NULL),
(7, 13, 5, '2020-02-17 20:26:20', '2020-02-17 20:26:20'),
(5, 7, 3, NULL, NULL),
(6, 12, 4, '2020-02-16 22:59:58', '2020-02-16 22:59:58'),
(8, 5, 5, NULL, NULL),
(9, 2, 6, '2020-02-20 02:40:06', '2020-02-20 02:40:06'),
(10, 14, 6, NULL, NULL),
(11, 7, 7, '2020-02-23 03:45:42', '2020-02-23 03:45:42'),
(12, 10, 7, NULL, NULL),
(13, 15, 7, NULL, NULL),
(14, 10, 8, '2020-05-12 16:37:37', '2020-05-12 16:37:37'),
(22, 17, 12, NULL, NULL),
(21, 10, 12, NULL, NULL),
(19, 16, 11, NULL, NULL),
(27, 1, 13, NULL, NULL),
(26, 8, 13, NULL, NULL),
(28, 18, 14, '2020-07-22 20:43:14', '2020-07-22 20:43:14'),
(29, 18, 15, NULL, NULL),
(30, 19, 16, '2020-07-26 19:20:52', '2020-07-26 19:20:52'),
(31, 20, 16, NULL, NULL),
(32, 21, 17, '2020-08-18 17:01:29', '2020-08-18 17:01:29'),
(33, 15, 18, NULL, NULL),
(34, 22, 18, NULL, NULL),
(35, 3, 20, '2020-08-31 00:54:12', '2020-08-31 00:54:12'),
(36, 23, 21, '2020-09-02 01:04:49', '2020-09-02 01:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `workplaces`
--

CREATE TABLE `workplaces` (
  `id` bigint UNSIGNED NOT NULL,
  `admin_id` int NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `timezone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startday` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workplaces`
--

INSERT INTO `workplaces` (`id`, `admin_id`, `title`, `created_at`, `updated_at`, `timezone`, `website`, `startday`) VALUES
(1, 7, 'Sherkat', '2020-02-14 21:08:32', '2020-06-21 05:21:07', 'Africa/Cairo', NULL, 'Monday'),
(2, 1, 'American center', '2020-02-16 09:30:38', '2020-02-16 09:30:38', 'Africa/Cairo', NULL, 'Monday'),
(3, 5, 'malex', '2020-02-16 15:04:11', '2020-02-16 15:04:11', 'Africa/Cairo', 'https://malexs.net/', 'Monday'),
(4, 5, 'Vola', '2020-02-16 15:06:38', '2020-02-16 15:06:38', 'US/Arizona', 'https://vola.net/', 'Monday'),
(5, 13, 'kamal', '2020-02-17 20:25:08', '2020-02-17 20:25:08', 'Africa/Cairo', 'kamal.com', 'Monday'),
(6, 2, 'My work', '2020-02-20 02:39:36', '2020-02-20 02:39:36', 'Africa/Cairo', NULL, 'Monday'),
(7, 10, 'My Clinic', '2020-05-12 16:37:37', '2020-05-12 16:37:37', 'Africa/Cairo', 'https://clinic.com', 'Monday'),
(8, 7, 'Popcorn', '2020-06-21 02:15:55', '2020-06-21 02:20:16', 'Africa/Cairo', 'https://popcorn.com', 'Monday'),
(9, 18, 'menuhat', '2020-07-22 20:43:14', '2020-07-22 20:43:14', 'Africa/Cairo', 'https://menuhat.online/', 'Sunday'),
(10, 19, 'Trix Studio', '2020-07-26 19:20:52', '2020-07-26 19:20:52', 'Africa/Cairo', 'https://Trix.com', 'Monday'),
(11, 21, 'Kalma', '2020-08-18 17:01:29', '2020-08-18 17:01:29', 'Africa/Cairo', 'https://menuhat.online/', 'Sunday'),
(12, 3, 'new', '2020-08-31 00:54:12', '2020-08-31 00:54:12', 'Africa/Cairo', 'https://example.com', 'Monday'),
(13, 23, 'max', '2020-09-02 01:04:49', '2020-09-02 01:04:49', 'Africa/Cairo', 'http://www.max.com', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `workplace_users`
--

CREATE TABLE `workplace_users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `workplace_id` int NOT NULL,
  `role` int NOT NULL DEFAULT '0' COMMENT '0-owner,1-admin,2-leader,3-salesAgent',
  `status` int NOT NULL DEFAULT '1' COMMENT '0:deactivate , 1:activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workplace_users`
--

INSERT INTO `workplace_users` (`id`, `user_id`, `workplace_id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 0, 1, '2020-02-14 21:08:32', '2020-03-06 09:19:07'),
(2, 1, 2, 0, 1, '2020-02-16 09:30:38', '2020-02-16 09:30:38'),
(3, 5, 3, 0, 1, '2020-02-16 15:04:11', '2020-02-16 15:04:11'),
(4, 5, 4, 0, 1, '2020-02-16 15:06:38', '2020-02-16 15:06:38'),
(5, 12, 4, 0, 1, '2020-02-16 15:10:16', '2020-02-16 15:10:16'),
(7, 13, 5, 0, 1, '2020-02-17 20:25:08', '2020-02-17 20:25:08'),
(8, 5, 5, 0, 1, '2020-02-17 20:27:08', '2020-02-17 20:27:08'),
(9, 2, 6, 0, 1, '2020-02-20 02:39:36', '2020-02-20 02:39:36'),
(10, 14, 6, 2, 1, '2020-02-20 02:40:44', '2020-02-20 02:40:44'),
(11, 10, 1, 3, 1, '2020-02-23 03:46:28', '2020-02-23 03:46:28'),
(12, 15, 1, 3, 1, '2020-02-25 22:09:11', '2020-02-25 22:09:11'),
(13, 10, 7, 0, 1, '2020-05-12 16:37:37', '2020-05-12 16:37:37'),
(14, 7, 8, 0, 1, '2020-06-21 02:15:55', '2020-06-21 02:15:55'),
(15, 16, 8, 3, 1, '2020-06-21 02:21:41', '2020-06-21 02:21:41'),
(16, 17, 1, 3, 1, '2020-06-21 05:25:02', '2020-06-21 05:25:02'),
(17, 8, 2, 1, 1, '2020-07-19 01:04:43', '2020-07-19 01:04:43'),
(18, 18, 9, 0, 1, '2020-07-22 20:43:14', '2020-07-22 20:43:14'),
(19, 19, 10, 0, 1, '2020-07-26 19:20:52', '2020-07-26 19:20:52'),
(20, 20, 10, 3, 1, '2020-07-26 19:21:57', '2020-07-26 19:21:57'),
(21, 21, 11, 0, 1, '2020-08-18 17:01:29', '2020-08-18 17:01:29'),
(22, 22, 1, 3, 1, '2020-08-24 02:06:58', '2020-08-24 02:06:58'),
(23, 3, 12, 0, 1, '2020-08-31 00:54:12', '2020-08-31 00:54:12'),
(24, 23, 13, 0, 1, '2020-09-02 01:04:49', '2020-09-02 01:04:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workplaces`
--
ALTER TABLE `workplaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workplace_users`
--
ALTER TABLE `workplace_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_products`
--
ALTER TABLE `user_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `workplaces`
--
ALTER TABLE `workplaces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `workplace_users`
--
ALTER TABLE `workplace_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
