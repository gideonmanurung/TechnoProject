/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.7.12-log : Database - techno
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`techno` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `techno`;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noTelp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `employee_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `employee` */

insert  into `employee`(`name`,`alamat`,`noTelp`,`email`,`username`,`password`,`remember_token`,`created_at`,`updated_at`) values ('Joko','DEl','082353212523','joko@gmail.com','joko','123',NULL,NULL,NULL);

/*Table structure for table `fuel` */

DROP TABLE IF EXISTS `fuel`;

CREATE TABLE `fuel` (
  `idPemesanan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalHarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPemesanan`),
  UNIQUE KEY `fuel_idpemesanan_unique` (`idPemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `fuel` */

insert  into `fuel`(`idPemesanan`,`email`,`jumlah`,`alamat`,`kategori`,`totalHarga`,`remember_token`,`created_at`,`updated_at`) values (1,'gideondirgahayu3@gmail.com','20','del','Pertalite','180000',NULL,'2016-12-16 01:43:30','2016-12-16 01:43:30');

/*Table structure for table `layanan` */

DROP TABLE IF EXISTS `layanan`;

CREATE TABLE `layanan` (
  `idLayanan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idReserve` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userpegawai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idLayanan`),
  UNIQUE KEY `layanan_idlayanan_unique` (`idLayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `layanan` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_11_29_033824_CreateTableReserve',2),(7,'2016_11_29_034837_CreateTableEmployee',4),(13,'2016_12_13_044350_CreateTablePesananSparepart',9),(14,'2016_12_05_082654_CreateTableLayanan',10),(18,'2016_12_05_082217_CreateTableServices',13),(19,'2016_12_05_084517_CreateTableSpareParts',14),(20,'2016_11_29_034302_CreateTableFuel',15);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pesanansparepart` */

DROP TABLE IF EXISTS `pesanansparepart`;

CREATE TABLE `pesanansparepart` (
  `idPemesanan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emailPemesan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idSparepart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamatPengiriman` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPemesanan`),
  UNIQUE KEY `pesanansparepart_idpemesanan_unique` (`idPemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pesanansparepart` */

insert  into `pesanansparepart`(`idPemesanan`,`emailPemesan`,`idSparepart`,`jumlah`,`alamatPengiriman`,`remember_token`,`created_at`,`updated_at`) values (1,'gideondirgahayu3@gmail.com','1','','del',NULL,'2016-12-15 03:25:39','2016-12-15 03:25:39'),(2,'gideondirgahayu3@gmail.com','2','','del',NULL,'2016-12-15 03:26:43','2016-12-15 03:26:43'),(3,'gideondirgahayu3@gmail.com','10','','del',NULL,'2016-12-15 04:05:05','2016-12-15 04:05:05');

/*Table structure for table `reserve` */

DROP TABLE IF EXISTS `reserve`;

CREATE TABLE `reserve` (
  `idReserve` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idReserve`),
  UNIQUE KEY `reserve_idreserve_unique` (`idReserve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `reserve` */

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `idService` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jangkaWaktu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idService`),
  UNIQUE KEY `service_idservice_unique` (`idService`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `service` */

insert  into `service`(`idService`,`email`,`alamat`,`jenis`,`kategori`,`jangkaWaktu`,`remember_token`,`created_at`,`updated_at`) values (1,'gideondirgahayu3@gmail.com','del','Motor','Ringan','1',NULL,'2016-12-14 22:53:50','2016-12-14 22:53:50'),(2,'gideondirgahayu3@gmail.com','del','Mobil','Berat','1',NULL,'2016-12-14 22:54:06','2016-12-14 22:54:06'),(3,'gideondirgahayu3@gmail.com','del','Motor','Lengkap','1',NULL,'2016-12-14 22:58:45','2016-12-14 22:58:45'),(4,'gideondirgahayu3@gmail.com','del','Motor','Berat','1',NULL,'2016-12-14 22:58:52','2016-12-14 22:58:52'),(5,'gideondirgahayu3@gmail.com','del','Mobil','Lengkap','1',NULL,'2016-12-14 22:59:08','2016-12-14 22:59:08'),(6,'gideondirgahayu3@gmail.com','del','Mobil','Ringan','1',NULL,'2016-12-14 22:59:52','2016-12-14 22:59:52'),(7,'gideondirgahayu3@gmail.com','del','Mobil','Ringan','1',NULL,'2016-12-14 23:02:04','2016-12-14 23:02:04'),(8,'gideondirgahayu3@gmail.com','del','Motor','Ringan','1',NULL,'2016-12-14 23:02:23','2016-12-14 23:02:23'),(9,'gideondirgahayu3@gmail.com','del','Mobil','Berat','1',NULL,'2016-12-14 23:02:47','2016-12-14 23:02:47'),(10,'gideondirgahayu3@gmail.com','del','Motor','Lengkap','1',NULL,'2016-12-14 23:03:01','2016-12-14 23:03:01'),(11,'gideondirgahayu3@gmail.com','del','Motor','Ringan','2',NULL,'2016-12-15 02:32:01','2016-12-15 02:32:01'),(12,'gideondirgahayu3@gmail.com','del','Mobil','Ringan','1',NULL,'2016-12-16 04:04:39','2016-12-16 04:04:39');

/*Table structure for table `sparepart` */

DROP TABLE IF EXISTS `sparepart`;

CREATE TABLE `sparepart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namaProduk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sparepart_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sparepart` */

insert  into `sparepart`(`id`,`jenis`,`namaProduk`,`stok`,`description`,`harga`,`remember_token`,`created_at`,`updated_at`) values (1,'Motor','Noken As Yamaha Mio','5','Yamaha Mio','200.000',NULL,NULL,NULL),(2,'Motor','Karburator Original Honda Mega Pro 2010','7','Honda Mega Pro','1.530.000',NULL,NULL,NULL),(3,'Motor','Busi Iridium Ninja','6','Kawasaki Ninja','100.000',NULL,NULL,NULL),(4,'Motor','Ganda Kopling Assy KMR-Mio','4','Yamaha Mio','180.000',NULL,NULL,NULL),(5,'Motor','Aki kering/Tiger 2000 Honda','8','Honda Tiger','265.000',NULL,NULL,NULL),(6,'Motor','Bohlam Yamaha Vixion','4','Yamaha Vixion','25.000',NULL,NULL,NULL),(7,'Motor','Rumah Roller Komplit Beat','8','Honda Beat','95.000',NULL,NULL,NULL),(8,'Motor','Pirigan Rem Cakram','10','All Kendaraan','85.000',NULL,NULL,NULL),(9,'Motor','Gir Kopling Raccy','11','All Kendaraan','72.000',NULL,NULL,NULL),(10,'Mobil','Kaliper Kit-Toyota','5','Toyota','66.000',NULL,NULL,NULL),(11,'Mobil','Spring Buffer Datsun','7','Datsun','310.000',NULL,NULL,NULL),(12,'Mobil','Pompa Solar Panther','2','Panther','155.000',NULL,NULL,NULL),(13,'Mobil','Switch Spion Retract','10','All Kendaraan','150.000',NULL,NULL,NULL),(14,'Mobil','Motor Fan Radiator Nissan','4','Nissan','400.000',NULL,NULL,NULL),(15,'Mobil','Brake Drumm/Tromol Inova','8','Innova','407.000',NULL,NULL,NULL),(16,'Mobil','Busi Bosch Platinum Plus','7','All Kendaraan','60.000',NULL,NULL,NULL),(17,'Mobil','Filter Evaporator Ac Honda Jazz','4','Honda','65.000',NULL,NULL,NULL),(18,'Mobil ','Sensor Spedomotor Maestro','8','All Kendaraan','225.000',NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noTelp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`alamat`,`noTelp`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Gideon Dirgahayu Manurung','del','082363332790','gideondirgahayu3@gmail.com','$2y$10$CycgXozT6gjs4qv2wIQWVeoznHH1mjbzYfYx0C4p6Obtrz3qPhmz6','lV89grXhwCGZ7phABA8J6gt8UxuJrrGLw2vdoS5pl0XldIJsKNuGN8GjpNC4','2016-11-28 11:18:00','2016-12-16 03:40:55'),(2,'Gideon Dirgahayu Manurung','del','082363332790','gideondirgahayu3@yahoo.com','$2y$10$gY5P3fJlq7PncpnSINl4K.3xOkDilWU1ivlWeGty02fkaUk5UeuaW','Yb7nmTLCdp4V2Ck0FvajfAsOk83iEq8EmXd1TKxI6yfGjbkrOPzN2bxgDr8s','2016-11-28 15:03:25','2016-11-28 15:03:49'),(3,'Mei Sari Harianja','del','082363332790','mei@yahoo.com','$2y$10$cJ85jPn7VPGmyULIojI95OzFit/jYhh1ks.bSGrejS0ItTfAfQgiu','QdJ4kBHeYecNIA5Qs5GLbkKiPrgKvNZS7wGMcDCliLtc2kYZnbRPMLb1FEuT','2016-12-13 22:48:35','2016-12-13 22:49:24'),(4,'Mey Sari Harianja','Del','082354259231','meysari@gmail.com','$2y$10$NyFnqHi4nNmS1RqXx8gMMeqXhM3wA2NzVKPCXWnwA5rvZ9sXGOO1.','kzci09F5foOnNrnLvRLY81vPjymQkrurPvi2RWeAYwKrBciH2KpIz5ybqHpb','2016-12-16 00:42:47','2016-12-16 00:54:04'),(5,'Mey Sari Harianja','Perdaganggan','082354259231','meisaari@yahoo.com','$2y$10$ROMcdK0iGBf6QtQTmEHiM.UfX4p5WPZ.hlztKSOhu.4jLwVSn3TmK','RoO29NIndigI4ent0n5qfBIQvIoYbysvfXhLHYiIodPxfohbTywHdtm8a4BM','2016-12-16 03:42:15','2016-12-16 03:50:48');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
