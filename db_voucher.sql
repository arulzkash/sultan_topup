/*
Navicat MySQL Data Transfer

Source Server         : Kashidota
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_voucher

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-21 02:02:54
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES ('1', 'admin', '123');

-- ----------------------------
-- Table structure for `t_game`
-- ----------------------------
DROP TABLE IF EXISTS `t_game`;
CREATE TABLE `t_game` (
  `id_game` int(11) NOT NULL AUTO_INCREMENT,
  `nama_game` varchar(50) DEFAULT NULL,
  `foto_game` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_game`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_game
-- ----------------------------
INSERT INTO `t_game` VALUES ('1', 'Point Blank', 'pointblank.jpg', '1');
INSERT INTO `t_game` VALUES ('2', 'Mobile Legends', 'mobilelegends.jpg', '3');
INSERT INTO `t_game` VALUES ('3', 'Clash Royales', 'clashroyale.jpg', '2');
INSERT INTO `t_game` VALUES ('4', 'Free Fire', 'freefire.jpg', '4');
INSERT INTO `t_game` VALUES ('5', 'Pubg Mobile', 'pubg.jpg', '2');
INSERT INTO `t_game` VALUES ('6', 'FIFA Mobile', 'fifa.jpg', '6');
INSERT INTO `t_game` VALUES ('7', 'Genshin Impact', 'genshin.jpg', '3');
INSERT INTO `t_game` VALUES ('8', 'Call Of Duty Mobile', 'codm.jpg', '4');
INSERT INTO `t_game` VALUES ('9', 'Honkai Star Rail', 'honkaisr.jpg', '2');
INSERT INTO `t_game` VALUES ('11', 'Valorant', 'valorant.jpg', '1');

-- ----------------------------
-- Table structure for `t_metode`
-- ----------------------------
DROP TABLE IF EXISTS `t_metode`;
CREATE TABLE `t_metode` (
  `id_metode` int(11) NOT NULL AUTO_INCREMENT,
  `nama_metode` varchar(50) DEFAULT '',
  `foto_metode` varchar(50) DEFAULT '',
  PRIMARY KEY (`id_metode`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_metode
-- ----------------------------
INSERT INTO `t_metode` VALUES ('1', 'QRIS', 'qris.png');
INSERT INTO `t_metode` VALUES ('2', 'Gopay', 'gopay.png');
INSERT INTO `t_metode` VALUES ('3', 'OVO', 'ovo.png');
INSERT INTO `t_metode` VALUES ('4', 'DANA', 'dana.png');
INSERT INTO `t_metode` VALUES ('5', 'Bank Transfer', 'bank.png');
INSERT INTO `t_metode` VALUES ('6', 'Telkomsel', 'telkomsel.png');
INSERT INTO `t_metode` VALUES ('7', 'Indosat', 'indosat.png');
INSERT INTO `t_metode` VALUES ('8', 'Tri', 'tri.png');
INSERT INTO `t_metode` VALUES ('9', 'XL', 'xl.png');
INSERT INTO `t_metode` VALUES ('10', 'Shopee Pay', 'shopee.png');
INSERT INTO `t_metode` VALUES ('11', 'Indomart', 'indomart.png');
INSERT INTO `t_metode` VALUES ('12', 'Alfamart', 'alfamart.png');
INSERT INTO `t_metode` VALUES ('14', 'Link Aja', 'linkaja1.png');

-- ----------------------------
-- Table structure for `t_pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `t_pembayaran`;
CREATE TABLE `t_pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `status_pembayaran` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_struk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_pembayaran
-- ----------------------------
INSERT INTO `t_pembayaran` VALUES ('1', '0', '1', '49');
INSERT INTO `t_pembayaran` VALUES ('2', '0', '1', '50');
INSERT INTO `t_pembayaran` VALUES ('3', '2', '1', '51');
INSERT INTO `t_pembayaran` VALUES ('4', '0', '1', '52');
INSERT INTO `t_pembayaran` VALUES ('5', '0', '1', '53');
INSERT INTO `t_pembayaran` VALUES ('6', '0', '1', '54');
INSERT INTO `t_pembayaran` VALUES ('7', '0', '1', '55');
INSERT INTO `t_pembayaran` VALUES ('8', '2', '1', '56');
INSERT INTO `t_pembayaran` VALUES ('9', '0', '1', '57');
INSERT INTO `t_pembayaran` VALUES ('10', '0', '1', '58');
INSERT INTO `t_pembayaran` VALUES ('11', '2', '1', '59');
INSERT INTO `t_pembayaran` VALUES ('12', '1', '1', '60');
INSERT INTO `t_pembayaran` VALUES ('13', '1', '1', '61');
INSERT INTO `t_pembayaran` VALUES ('14', '1', '1', '62');
INSERT INTO `t_pembayaran` VALUES ('15', '0', '1', '63');
INSERT INTO `t_pembayaran` VALUES ('16', '2', '1', '64');
INSERT INTO `t_pembayaran` VALUES ('17', '2', '1', '65');
INSERT INTO `t_pembayaran` VALUES ('18', '2', '1', '66');
INSERT INTO `t_pembayaran` VALUES ('19', '2', '1', '67');
INSERT INTO `t_pembayaran` VALUES ('20', '2', '2', '68');
INSERT INTO `t_pembayaran` VALUES ('21', '2', '3', '69');

-- ----------------------------
-- Table structure for `t_pesan`
-- ----------------------------
DROP TABLE IF EXISTS `t_pesan`;
CREATE TABLE `t_pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `email_pengirim` varchar(50) DEFAULT NULL,
  `subjek_pesan` varchar(50) DEFAULT NULL,
  `isi_pesan` varchar(200) DEFAULT '',
  `tanggal_pesan` date DEFAULT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_pesan
-- ----------------------------
INSERT INTO `t_pesan` VALUES ('1', 'Arul', 'arul@gmail.com', 'Teach me', 'Kamu keren banget, plis ajarin aku gimana caranya, apa yang harus aku lakukan supaya bisa bikin web kaya kamu!', '2023-06-13');
INSERT INTO `t_pesan` VALUES ('2', 'Berbatos', 'berbatos@gmail.com', 'Great', 'How to make this great website. Wonderful!', '2023-06-14');
INSERT INTO `t_pesan` VALUES ('3', 'Elon Musk', 'elonmusk@spacex.com', 'Pertanyaan tentang pembelian voucher', 'Halo, saya ingin menanyakan informasi tentang proses pembelian voucher game. Apakah ada promo atau diskon yang sedang berlangsung?', '2023-06-15');
INSERT INTO `t_pesan` VALUES ('4', 'Jeff Bezos', 'jeffbezos@amazon.com', 'Saran untuk perbaikan web', 'Hai, saya telah menggunakan layanan top up voucher game ini dan memiliki beberapa saran untuk perbaikan tampilan dan fungsionalitas web. Apakah ada saluran komunikasi khusus untuk memberikan saran?', '2023-06-16');
INSERT INTO `t_pesan` VALUES ('5', 'Mark Zuckerberg', 'markzuckerberg@facebook.com', 'Permintaan penawaran khusus\r\n', 'Halo tim, saya adalah seorang pelanggan setia yang sering melakukan top up voucher game di web ini. Apakah ada kemungkinan untuk mendapatkan penawaran khusus atau diskon sebagai pelanggan yang loyal?', '2023-06-17');
INSERT INTO `t_pesan` VALUES ('6', 'Bernard Arnault', 'bernardarnault@lvmh.com', 'Permintaan bantuan penggunaan voucher', 'Halo, saya baru pertama kali menggunakan voucher game dan agak bingung dengan proses penggunaannya. Bisakah Anda memberikan panduan langkah demi langkah untuk menggunakan voucher dengan benar?', '2023-06-18');
INSERT INTO `t_pesan` VALUES ('7', 'Larry Ellison', 'larryellison@oracle.com', 'Permintaan informasi ketersediaan voucher terbatas', 'Selamat pagi, saya tertarik dengan voucher game yang diklaim memiliki stok terbatas. Apakah Anda bisa memberikan informasi terkini tentang ketersediaan voucher tersebut? Saya ingin melakukan pembelian', '2023-06-19');
INSERT INTO `t_pesan` VALUES ('8', 'arul', 'arul@gmail.com', 'menanyakan kabar', 'Bagaimana kabarnya setelah web ini berlangsung selama beberapa waktu?', '2023-06-20');
INSERT INTO `t_pesan` VALUES ('9', 'kashi', 'kashi@gmail.com', 'HAI', 'HAI. Aku senang bisa mengirim pesan disini', '2023-06-20');
INSERT INTO `t_pesan` VALUES ('10', 'Raffi', 'raffi@gmail.com', 'Presentasi', 'Bismillah Semoga presentasinya lancar. Aamiin', '2023-06-20');

-- ----------------------------
-- Table structure for `t_struk`
-- ----------------------------
DROP TABLE IF EXISTS `t_struk`;
CREATE TABLE `t_struk` (
  `id_struk` int(11) NOT NULL AUTO_INCREMENT,
  `uid_game` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT '',
  `tanggal_struk` date DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `total_amount` varchar(50) DEFAULT '',
  `id_verifikasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_struk`),
  KEY `fk_struk_metode` (`id_metode`),
  KEY `fk_struk_voucher` (`id_voucher`),
  CONSTRAINT `fk_struk_metode` FOREIGN KEY (`id_metode`) REFERENCES `t_metode` (`id_metode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_struk_voucher` FOREIGN KEY (`id_voucher`) REFERENCES `t_voucher` (`id_voucher`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_struk
-- ----------------------------
INSERT INTO `t_struk` VALUES ('22', 'aa', '10:19:57 Wednesday, 14 June', '2023-06-14', '7', '5', '550000', null);
INSERT INTO `t_struk` VALUES ('23', 'aab', '10:33:04 Wednesday, 14 June', '2023-06-14', '3', '11', '55000', null);
INSERT INTO `t_struk` VALUES ('24', 'Master_Arulz', '18:10:08 Wednesday, 14 June', '2023-06-14', '4', '2', '110000', null);
INSERT INTO `t_struk` VALUES ('26', 'arul', '12:58:08 Friday, 16 June', '2023-06-16', '11', '3', '48507', null);
INSERT INTO `t_struk` VALUES ('27', 'arul', '15:42:12 Friday, 16 June', '2023-06-16', '26', '14', '50000', null);
INSERT INTO `t_struk` VALUES ('28', 'arul', '16:28:10 Friday, 16 June', '2023-06-16', '50', '7', '47500', null);
INSERT INTO `t_struk` VALUES ('29', 'arul', '14:49:34 Saturday, 17 June', '2023-06-17', '44', '5', '50000', null);
INSERT INTO `t_struk` VALUES ('30', 'kashidota', '15:29:10 Saturday, 17 June', '2023-06-17', '50', '14', '47500', null);
INSERT INTO `t_struk` VALUES ('31', 'kashidota', '15:34:26 Saturday, 17 June', '2023-06-17', '12', '4', '68543', null);
INSERT INTO `t_struk` VALUES ('32', 'kashidota', '17:59:00 Saturday, 17 June', '2023-06-17', '5', '11', '217800', null);
INSERT INTO `t_struk` VALUES ('33', 'arul', '18:18:19 Saturday, 17 June', '2023-06-17', '39', '4', '790550', null);
INSERT INTO `t_struk` VALUES ('34', 'arul', '18:19:46 Saturday, 17 June', '2023-06-17', '38', '4', '474330', null);
INSERT INTO `t_struk` VALUES ('35', 'arul', '18:53:24 Saturday, 17 June', '2023-06-17', '34', '3', '375060', null);
INSERT INTO `t_struk` VALUES ('36', 'arul', '18:58:05 Saturday, 17 June', '2023-06-17', '32', '5', '74730', null);
INSERT INTO `t_struk` VALUES ('39', 'kashidota', '15:07:46 Tuesday, 20 June', '2023-06-20', '15', '10', '12769.4', null);
INSERT INTO `t_struk` VALUES ('40', 'arul', '15:13:43 Tuesday, 20 June', '2023-06-20', '7', '7', '544500', null);
INSERT INTO `t_struk` VALUES ('41', 'arul', '15:14:17 Tuesday, 20 June', '2023-06-20', '20', '4', '19200', null);
INSERT INTO `t_struk` VALUES ('42', 'arul', '16:14:23 Tuesday, 20 June', '2023-06-20', '53', '7', '235125', null);
INSERT INTO `t_struk` VALUES ('43', 'kashidota', '16:19:40 Tuesday, 20 June', '2023-06-20', '29', '14', '490000', null);
INSERT INTO `t_struk` VALUES ('44', 'kashidota', '17:00:18 Tuesday, 20 June', '2023-06-20', '4', '14', '108900', null);
INSERT INTO `t_struk` VALUES ('45', 'arul', '17:01:13 Tuesday, 20 June', '2023-06-20', '18', '12', '258176.1', null);
INSERT INTO `t_struk` VALUES ('46', 'masd', '17:10:45 Tuesday, 20 June', '2023-06-20', '20', '3', '19200', null);
INSERT INTO `t_struk` VALUES ('47', 'arul', '17:43:26 Tuesday, 20 June', '2023-06-20', '37', '2', '247350', null);
INSERT INTO `t_struk` VALUES ('48', 'arul', '19:50:28 Tuesday, 20 June', '2023-06-20', '36', '4', '78570', null);
INSERT INTO `t_struk` VALUES ('49', 'aku', '20:41:35 Tuesday, 20 June', '2023-06-20', '21', '3', '48000', null);
INSERT INTO `t_struk` VALUES ('50', 'kashidota', '20:56:49 Tuesday, 20 June', '2023-06-20', '42', '5', '19200', null);
INSERT INTO `t_struk` VALUES ('51', 'kashidota', '01:55:03 Wednesday, 21 June', '2023-06-21', '46', '14', '96000', '25');
INSERT INTO `t_struk` VALUES ('52', 'kaka', '21:36:39 Tuesday, 20 June', '2023-06-20', '3', '5', '54450', null);
INSERT INTO `t_struk` VALUES ('53', 'kaka', '21:41:31 Tuesday, 20 June', '2023-06-20', '50', '3', '47025', null);
INSERT INTO `t_struk` VALUES ('54', 'kaka', '21:43:20 Tuesday, 20 June', '2023-06-20', '39', '14', '790550', null);
INSERT INTO `t_struk` VALUES ('55', 'kaka', '21:45:36 Tuesday, 20 June', '2023-06-20', '36', '5', '78570', null);
INSERT INTO `t_struk` VALUES ('56', 'kaka', '21:46:49 Tuesday, 20 June', '2023-06-20', '36', '5', '78570', '18');
INSERT INTO `t_struk` VALUES ('57', 'kaka', '21:46:55 Tuesday, 20 June', '2023-06-20', '36', '5', '78570', null);
INSERT INTO `t_struk` VALUES ('58', 'kaka', '21:49:31 Tuesday, 20 June', '2023-06-20', '36', '5', '78570', null);
INSERT INTO `t_struk` VALUES ('59', 'kaka', '21:50:45 Tuesday, 20 June', '2023-06-20', '36', '5', '78570', '3');
INSERT INTO `t_struk` VALUES ('60', 'kaka', '22:43:41 Tuesday, 20 June', '2023-06-20', '2', '4', '21780', '12');
INSERT INTO `t_struk` VALUES ('61', 'kaka', '22:45:16 Tuesday, 20 June', '2023-06-20', '2', '4', '21780', '13');
INSERT INTO `t_struk` VALUES ('62', 'kaka', '22:46:37 Tuesday, 20 June', '2023-06-20', '2', '14', '21780', '17');
INSERT INTO `t_struk` VALUES ('63', 'arul', '22:58:05 Tuesday, 20 June', '2023-06-20', '47', '3', '115200', null);
INSERT INTO `t_struk` VALUES ('64', 'arul', '23:00:14 Tuesday, 20 June', '2023-06-20', '47', '3', '115200', '22');
INSERT INTO `t_struk` VALUES ('65', 'arul', '23:03:15 Tuesday, 20 June', '2023-06-20', '47', '3', '115200', '19');
INSERT INTO `t_struk` VALUES ('66', 'kash', '00:04:59 Wednesday, 21 June', '2023-06-21', '10', '14', '23526.38', '20');
INSERT INTO `t_struk` VALUES ('67', 'kash', '00:10:19 Wednesday, 21 June', '2023-06-21', '50', '2', '47025', '21');
INSERT INTO `t_struk` VALUES ('68', 'arulz', '01:30:47 Wednesday, 21 June', '2023-06-21', '12', '3', '66486.71', '23');
INSERT INTO `t_struk` VALUES ('69', 'kashidota', '01:37:52 Wednesday, 21 June', '2023-06-21', '53', '3', '235125', '24');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', 'arul', '123');
INSERT INTO `t_user` VALUES ('2', 'arulz', '123456');
INSERT INTO `t_user` VALUES ('3', 'kashidota', '123456');

-- ----------------------------
-- Table structure for `t_verifikasi`
-- ----------------------------
DROP TABLE IF EXISTS `t_verifikasi`;
CREATE TABLE `t_verifikasi` (
  `id_verifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `foto_verifikasi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_verifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_verifikasi
-- ----------------------------
INSERT INTO `t_verifikasi` VALUES ('1', '347300.jpg');
INSERT INTO `t_verifikasi` VALUES ('2', '3473001.jpg');
INSERT INTO `t_verifikasi` VALUES ('3', '3473002.jpg');
INSERT INTO `t_verifikasi` VALUES ('4', '3473003.jpg');
INSERT INTO `t_verifikasi` VALUES ('5', '3473004.jpg');
INSERT INTO `t_verifikasi` VALUES ('6', '3473005.jpg');
INSERT INTO `t_verifikasi` VALUES ('7', '3473006.jpg');
INSERT INTO `t_verifikasi` VALUES ('8', '3473007.jpg');
INSERT INTO `t_verifikasi` VALUES ('9', '3473008.jpg');
INSERT INTO `t_verifikasi` VALUES ('10', '3473009.jpg');
INSERT INTO `t_verifikasi` VALUES ('11', '34730010.jpg');
INSERT INTO `t_verifikasi` VALUES ('12', '34730011.jpg');
INSERT INTO `t_verifikasi` VALUES ('13', '34730012.jpg');
INSERT INTO `t_verifikasi` VALUES ('14', '34730013.jpg');
INSERT INTO `t_verifikasi` VALUES ('15', '34730014.jpg');
INSERT INTO `t_verifikasi` VALUES ('16', '34730015.jpg');
INSERT INTO `t_verifikasi` VALUES ('17', '34730016.jpg');
INSERT INTO `t_verifikasi` VALUES ('18', '34730017.jpg');
INSERT INTO `t_verifikasi` VALUES ('19', '34730018.jpg');
INSERT INTO `t_verifikasi` VALUES ('20', '34730019.jpg');
INSERT INTO `t_verifikasi` VALUES ('21', '34730020.jpg');
INSERT INTO `t_verifikasi` VALUES ('22', '34730021.jpg');
INSERT INTO `t_verifikasi` VALUES ('23', '111.jpg');
INSERT INTO `t_verifikasi` VALUES ('24', 'lokasi-pusat-utbk-upi-bumsil.jpg');
INSERT INTO `t_verifikasi` VALUES ('25', '34730022.jpg');

-- ----------------------------
-- Table structure for `t_voucher`
-- ----------------------------
DROP TABLE IF EXISTS `t_voucher`;
CREATE TABLE `t_voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `nama_voucher` varchar(50) DEFAULT NULL,
  `harga_voucher` varchar(50) DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_voucher`),
  KEY `fk_game_voucher` (`id_game`),
  CONSTRAINT `fk_game_voucher` FOREIGN KEY (`id_game`) REFERENCES `t_game` (`id_game`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_voucher
-- ----------------------------
INSERT INTO `t_voucher` VALUES ('1', '1200 PB Cash', '11000', '1');
INSERT INTO `t_voucher` VALUES ('2', '2400 PB Cash', '22000', '1');
INSERT INTO `t_voucher` VALUES ('3', '6000 PB Cash', '55000', '1');
INSERT INTO `t_voucher` VALUES ('4', '12000 PB Cash', '110000', '1');
INSERT INTO `t_voucher` VALUES ('5', '24000 PB Cash', '220000', '1');
INSERT INTO `t_voucher` VALUES ('6', '36000 PB Cash', '330000', '1');
INSERT INTO `t_voucher` VALUES ('7', '60000 PB Cash', '550000', '1');
INSERT INTO `t_voucher` VALUES ('9', '53 Diamonds', '16872', '2');
INSERT INTO `t_voucher` VALUES ('10', '77 Diamonds', '24254', '2');
INSERT INTO `t_voucher` VALUES ('11', '154 Diamonds', '48507', '2');
INSERT INTO `t_voucher` VALUES ('12', '217 Diamonds', '68543', '2');
INSERT INTO `t_voucher` VALUES ('14', '256 Diamonds', '84360', '2');
INSERT INTO `t_voucher` VALUES ('15', '90 Gems', '13030', '3');
INSERT INTO `t_voucher` VALUES ('16', '500 Gems', '65749', '3');
INSERT INTO `t_voucher` VALUES ('17', '1200 Gems', '131647', '3');
INSERT INTO `t_voucher` VALUES ('18', '2500 Gems', '263445', '3');
INSERT INTO `t_voucher` VALUES ('19', '6500 Gems', '658839', '3');
INSERT INTO `t_voucher` VALUES ('20', '140 Diamonds', '20000', '4');
INSERT INTO `t_voucher` VALUES ('21', '355 Diamonds', '50000', '4');
INSERT INTO `t_voucher` VALUES ('22', '720 Diamonds', '100000', '4');
INSERT INTO `t_voucher` VALUES ('23', '1450 Diamonds', '200000', '4');
INSERT INTO `t_voucher` VALUES ('24', '2180 Diamonds', '300000', '4');
INSERT INTO `t_voucher` VALUES ('25', '125 UC', '25000', '5');
INSERT INTO `t_voucher` VALUES ('26', '250 UC', '50000', '5');
INSERT INTO `t_voucher` VALUES ('27', '500 UC', '100000', '5');
INSERT INTO `t_voucher` VALUES ('28', '1250 UC', '250000', '5');
INSERT INTO `t_voucher` VALUES ('29', '2500 UC', '500000', '5');
INSERT INTO `t_voucher` VALUES ('30', '150 FIFA Points', '16000', '6');
INSERT INTO `t_voucher` VALUES ('31', '500 FIFA Points', '49000', '6');
INSERT INTO `t_voucher` VALUES ('32', '1050 FIFA Points', '79500', '6');
INSERT INTO `t_voucher` VALUES ('33', '2200 FIFA Points', '159000', '6');
INSERT INTO `t_voucher` VALUES ('34', '5750 FIFA Points', '399000', '6');
INSERT INTO `t_voucher` VALUES ('35', '60 Genesis Crystals', '16500', '7');
INSERT INTO `t_voucher` VALUES ('36', '300 Genesis Crystals', '81000', '7');
INSERT INTO `t_voucher` VALUES ('37', '980 Genesis Crystals', '255000', '7');
INSERT INTO `t_voucher` VALUES ('38', '1980 Genesis Crystals', '489000', '7');
INSERT INTO `t_voucher` VALUES ('39', '3280 Genesis Crystals', '815000', '7');
INSERT INTO `t_voucher` VALUES ('40', '60 Stellar Jade', '16000', '9');
INSERT INTO `t_voucher` VALUES ('41', '330 Stellar Jade', '79000', '9');
INSERT INTO `t_voucher` VALUES ('42', '127 CP', '20000', '8');
INSERT INTO `t_voucher` VALUES ('44', '320 CP', '50000', '8');
INSERT INTO `t_voucher` VALUES ('46', '645 CP', '100000', '8');
INSERT INTO `t_voucher` VALUES ('47', '800 CP', '120000', '8');
INSERT INTO `t_voucher` VALUES ('48', '1373 CP', '200000', '8');
INSERT INTO `t_voucher` VALUES ('49', '125 Points', '14250', '11');
INSERT INTO `t_voucher` VALUES ('50', '420 Points', '47500', '11');
INSERT INTO `t_voucher` VALUES ('51', '700 Points', '76000', '11');
INSERT INTO `t_voucher` VALUES ('52', '1375 Points', '142500', '11');
INSERT INTO `t_voucher` VALUES ('53', '2400 Points', '237500', '11');
