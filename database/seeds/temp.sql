-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table k2_mig.license: ~10 rows (approximately)
/*!40000 ALTER TABLE `license` DISABLE KEYS */;
INSERT INTO `license` (`license_number`, `license_issued`, `license_valid_till`, `created_at`, `updated_at`) VALUES
	(50000001, '2017-09-14 00:00:00', '2027-09-14 00:00:00', NULL, NULL),
	(50000002, '2017-03-05 00:00:00', '2027-03-05 00:00:00', NULL, NULL),
	(50000003, '2016-09-14 00:00:00', '2026-09-14 00:00:00', NULL, NULL),
	(50000004, '2013-01-14 00:00:00', '2023-01-14 00:00:00', NULL, NULL),
	(50000005, '2017-04-14 00:00:00', '2027-04-14 00:00:00', NULL, NULL),
	(50000006, '2017-12-14 00:00:00', '2027-12-14 00:00:00', NULL, NULL),
	(50000007, '2014-12-16 00:00:00', '2024-12-16 00:00:00', NULL, NULL),
	(50000008, '2017-09-14 00:00:00', '2027-09-14 00:00:00', NULL, NULL),
	(50000009, '2017-11-14 00:00:00', '2027-11-14 00:00:00', NULL, NULL),
	(50000010, '2017-08-14 00:00:00', '2027-08-14 00:00:00', NULL, NULL);
/*!40000 ALTER TABLE `license` ENABLE KEYS */;

-- Dumping data for table k2_mig.license_type: ~11 rows (approximately)
/*!40000 ALTER TABLE `license_type` DISABLE KEYS */;
INSERT INTO `license_type` (`license_number`, `license_type`, `created_at`, `updated_at`) VALUES
	(50000001, 'B', NULL, NULL),
	(50000001, 'BE', NULL, NULL),
	(50000002, 'BE', NULL, NULL),
	(50000003, 'C', NULL, NULL),
	(50000004, 'B', NULL, NULL),
	(50000005, 'B', NULL, NULL),
	(50000006, 'C', NULL, NULL),
	(50000007, 'B', NULL, NULL),
	(50000008, 'B', NULL, NULL),
	(50000009, 'BE', NULL, NULL),
	(50000010, 'B', NULL, NULL);
/*!40000 ALTER TABLE `license_type` ENABLE KEYS */;

-- Dumping data for table k2_mig.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2018_01_16_132908_license', 1),
	(2, '2018_01_16_132914_license_type', 1),
	(3, '2018_01_16_132923_objects', 1),
	(4, '2018_01_16_132931_order', 1),
	(5, '2018_01_16_132938_order_option', 1),
	(6, '2018_01_16_132947_option', 1),
	(7, '2018_10_12_100000_create_password_resets_table', 1),
	(8, '2018_10_12_500000_create_users_table', 1),
	(9, '3018_01_17_085122_foreign', 1),
	(10, '2018_01_19_092458_promos', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table k2_mig.objects: ~11 rows (approximately)
/*!40000 ALTER TABLE `objects` DISABLE KEYS */;
INSERT INTO `objects` (`obj_id`, `license_plate`, `chassis_number`, `obj_type`, `brand`, `type`, `year`, `mass_inventory`, `mass_max`, `length_till`, `length_construction`, `height`, `license_needed`, `price_day`, `price_week`, `created_at`, `updated_at`, `image_link`, `day_view_image_link`, `night_view_image_link`) VALUES
	(1, 'WD-55-TG', '7DR239047112292', 'caravan', 'Hobby', '495 UL', 2015, 1350, 1500, 713, 595, 262, 'BE', 50.00, 300.00, NULL, NULL, NULL, NULL, NULL),
	(2, 'WL-23-SD', '7DR239047233162', 'caravan', 'Hobby', '460 LU', 2013, 1100, 1350, 661, 550, 260, 'BE', 40.00, 250.00, NULL, NULL, NULL, NULL, NULL),
	(3, 'WG-13-BM', '7DR239047119811', 'caravan', 'Hobby', '495 UL', 2018, 1350, 1550, 713, 595, 260, 'BE', 60.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(4, 'WG-38-TY', '7DR239047511206', 'caravan', 'Hobby', '460 LU', 2013, 1250, 1350, 661, 550, 260, 'BE', 40.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(5, 'WX-75-22', '7DR239047114003', 'caravan', 'Hobby', '460 LU', 2013, 1250, 1350, 661, 550, 260, 'BE', 40.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(6, 'BC-113-P', '7BMDF239047114003', 'camper', 'Optima', 'V60GF', 2015, 2900, 3500, 600, 430, 270, 'B', 100.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(7, 'BD-287-T', '7BMDF239042148800', 'camper', 'Optima', 'V60GF', 2017, 2900, 3500, 600, 430, 270, 'B', 115.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(8, 'DV-441-K', '7BMDG239047112297', 'camper', 'Optima', 'T70E', 2015, 2900, 3500, 738, 510, 270, 'B', 115.00, 700.00, NULL, NULL, NULL, NULL, NULL),
	(9, 'DD-419-L', '7BMDFH23904737121', 'camper', 'Optima', 'T70E', 2018, 2900, 3500, 738, 510, 270, 'B', 130.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(10, 'DZ-712-R', '7BMDK239067822023', 'camper', 'Optima', 'A65GM', 2016, 3000, 3650, 649, 520, 277, 'CE', 130.00, 400.00, NULL, NULL, NULL, NULL, NULL),
	(12, 'WP-12-AS', '7DR239047111147', 'caravan', 'Hobby', '495 UL', 2017, 1350, 1550, 713, 595, 262, 'BE', 60.00, 400.00, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `objects` ENABLE KEYS */;

-- Dumping data for table k2_mig.option: ~10 rows (approximately)
/*!40000 ALTER TABLE `option` DISABLE KEYS */;
INSERT INTO `option` (`option_id`, `option_description`, `option_price`, `created_at`, `updated_at`) VALUES
	(1, 'Voortent', 100.00, NULL, NULL),
	(2, 'Bijzettent', 75.00, NULL, NULL),
	(3, 'Windscherm', 20.00, NULL, NULL),
	(4, 'Barbecue', 30.00, NULL, NULL),
	(5, 'Skottelbraai', 50.00, NULL, NULL),
	(6, 'Televisietoestel, schotelantenne en abonnement', 90.00, NULL, NULL),
	(7, 'Uitbreidingsset servies en bestek (per couvert)', 5.00, NULL, NULL),
	(8, 'Annuleringsverzekering', 50.00, NULL, NULL),
	(9, 'Inboedelverzekering', 40.00, NULL, NULL),
	(10, 'Verzekering hagelschade', 50.00, NULL, NULL);
/*!40000 ALTER TABLE `option` ENABLE KEYS */;

-- Dumping data for table k2_mig.order: ~11 rows (approximately)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`ordernumber`, `date_ordered`, `customer_id`, `obj_id`, `obj_date_in`, `obj_date_out`, `created_at`, `updated_at`) VALUES
	(1, '2018-01-08 09:24:59', 1, 5, '2018-02-04 09:26:00', '2018-06-29 17:00:00', NULL, NULL),
	(2, '2018-01-10 05:44:45', 2, 1, '2018-03-06 12:24:00', '2018-06-04 14:00:00', NULL, NULL),
	(3, '2018-01-11 20:23:12', 3, 2, '2018-01-07 16:45:00', '2018-04-15 19:00:00', NULL, NULL),
	(4, '2018-01-12 16:16:23', 5, 7, '2018-02-23 23:59:00', '2018-03-29 12:00:00', NULL, NULL),
	(5, '2018-01-12 15:34:40', 3, 4, '2018-03-08 12:15:00', '2018-07-18 14:00:00', NULL, NULL),
	(6, '2018-01-13 20:55:52', 10, 9, '2018-02-14 16:30:00', '2018-09-14 16:00:00', NULL, NULL),
	(7, '2018-01-14 23:08:30', 8, 6, '2018-02-16 04:50:00', '2018-12-25 20:00:00', NULL, NULL),
	(8, '2018-01-15 18:14:59', 5, 10, '2018-02-24 06:40:00', '2018-03-14 14:00:00', NULL, NULL),
	(9, '2018-01-15 16:40:50', 6, 3, '2018-02-05 07:30:00', '2018-04-25 21:00:00', NULL, NULL),
	(10, '2018-01-16 13:59:00', 7, 8, '2018-02-09 08:00:00', '2018-11-16 13:00:00', NULL, NULL),
	(11, '2018-01-23 14:21:12', 1, 1, '2018-01-23 14:21:12', '2018-01-25 14:21:12', '2018-01-23 14:21:12', '2018-01-23 14:21:12');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping data for table k2_mig.order_option: ~10 rows (approximately)
/*!40000 ALTER TABLE `order_option` DISABLE KEYS */;
INSERT INTO `order_option` (`ordernumber`, `option_id`, `option_date_in`, `option_date_out`, `created_at`, `updated_at`) VALUES
	(1, 2, '2018-02-04 15:16:00', '2018-06-29 17:00:00', NULL, NULL),
	(1, 3, '2018-02-04 15:16:00', '2018-06-29 17:00:00', NULL, NULL),
	(1, 8, '2018-02-04 15:16:00', '2018-06-29 17:00:00', NULL, NULL),
	(2, 3, '2018-02-06 12:24:00', '2018-06-04 14:00:00', NULL, NULL),
	(2, 5, '2018-02-06 12:24:00', '2018-06-04 14:00:00', NULL, NULL),
	(8, 1, '2018-02-24 06:40:00', '2018-03-14 14:00:00', NULL, NULL),
	(8, 3, '2018-02-24 06:40:00', '2018-03-14 14:00:00', NULL, NULL),
	(8, 7, '2018-02-24 06:40:00', '2018-03-14 14:00:00', NULL, NULL),
	(10, 1, '2018-02-09 08:00:00', '2018-11-16 13:00:00', NULL, NULL),
	(10, 9, '2018-02-09 08:00:00', '2018-11-16 13:00:00', NULL, NULL);
/*!40000 ALTER TABLE `order_option` ENABLE KEYS */;

-- Dumping data for table k2_mig.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table k2_mig.promos: ~1 rows (approximately)
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
INSERT INTO `promos` (`id`, `object_id`, `percentage`, `active`) VALUES
	(1, 1, 10, 1);
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;

-- Dumping data for table k2_mig.users: ~10 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`customer_id`, `license_number`, `customer_initial`, `customer_insertion`, `customer_lastname`, `customer_address`, `customer_postal_code`, `customer_town`, `customer_phone`, `customer_mobile`, `customer_email`, `customer_username`, `customer_password`, `customer_status`, `email_confirmed`, `is_admin`, `remember_token`, `created_at`, `updated_at`, `test_moment`, `qualified`) VALUES
	(1, 50000001, 'GJ', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000001', '06-00000001', 'someone@something.com', 'customer1', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', 'confirmed', 1, 'bhTmGoWAGCa6drrCVzOqejt5nWSq9nrfx5Gp5i67HE9fsmamMKL2wXnyfa2S', '2018-01-01 00:00:00', '2018-01-19 10:03:46', '01-01-2018 9:00 - 11:00', 1),
	(2, 50000002, 'B', '', 'Mulder', 'somewhere 8', '8080JA', 'Someplace', '+31-0000002', '06-00000002', 'someone@something.com', 'customer2', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, 'sZmktp0zn0nmsSWBVVFmCQ5eMRLOQkDFmGMarguY0hNE0rvxPJ8RWCjot5CQ', '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(3, 50000003, 'JA', 'van der', 'Golen', 'somewhere 7', '8080JA', 'Someplace', '+31-0000003', '06-00000003', 'someone@something.com', 'customer3', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(4, 50000004, 'DS', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000004', '06-00000004', 'someone@something.com', 'customer4', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(5, 50000005, 'C', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000005', '06-00000005', 'someone@something.com', 'customer5', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(6, 50000006, 'QR', 'van', 'Heren', 'somewhere 7', '8080JA', 'Someplace', '+31-0000006', '06-00000006', 'someone@something.com', 'customer6', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(7, 50000007, 'CD', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000007', '06-00000007', 'someone@something.com', 'customer7', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(8, 50000008, 'W', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000008', '06-00000008', 'someone@something.com', 'customer8', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(9, 50000009, 'LD', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000009', '06-00000009', 'someone@something.com', 'customer9', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0),
	(10, 50000010, 'ZM', '', 'Dijkuis', 'somewhere 7', '8080JA', 'Someplace', '+31-0000010', '06-00000010', 'someone@something.com', 'customer10', '$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW', '1', '', 0, NULL, '2018-01-01 00:00:00', '2018-01-01 00:00:00', NULL, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
