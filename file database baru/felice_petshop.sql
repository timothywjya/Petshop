-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 08:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `felice_petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `product`) VALUES
(101, 'Pet Food', '700-830-food.png'),
(102, 'Pet Vitamin', '496-vitamin.png'),
(103, 'Pet Shampoo', '623-shampoo.png'),
(104, 'Pet Bedsure', '223-bedsure.png'),
(105, 'Pet Carrier', '257-carrier.png'),
(106, 'Pet Toys', '494-toys.png'),
(101, 'Pet Food', '700-830-food.png'),
(102, 'Pet Vitamin', '496-vitamin.png'),
(103, 'Pet Shampoo', '623-shampoo.png'),
(104, 'Pet Bedsure', '223-bedsure.png'),
(105, 'Pet Carrier', '257-carrier.png'),
(106, 'Pet Toys', '494-toys.png');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `sejarah`) VALUES
(101, 'Felice Petshop merupakan sebuah perusahaan yang didirikan dengan visi awal untuk membantu para pemilik dari hewan kesayangan mereka dalam merawat hewan peliharaan mereka. Felice Petshop ini didirikan pada tanggal 23 Maret 2022. Awal mula berdirinya petshop ini dikarenakan kisah masa lalu pemilik yang merasa gagal dalam memelihara hewan peliharaanya. sehingga dengan berdirinya petshop ini diharapkan dapat membantu para pemilik hewan dalam merawat peliharaanya. Felice Petshop ini diambil dari kata \"Felice\" yang berasal dari bahasa Italia yang memiliki arti kesuksesan dan kebahagiaan. Kata \"Felice\" ini juga memiliki arti sifat yang nyaman dan optimis. begitu juga dengan keinginan yang dicapai oleh Petshop ini. Kami harap Felice Petshop ini pun nantinya akan memberikan kebahagiaan dan kesuksesan bagi banyak orang'),
(101, 'Felice Petshop merupakan sebuah perusahaan yang didirikan dengan visi awal untuk membantu para pemilik dari hewan kesayangan mereka dalam merawat hewan peliharaan mereka. Felice Petshop ini didirikan pada tanggal 23 Maret 2022. Awal mula berdirinya petshop ini dikarenakan kisah masa lalu pemilik yang merasa gagal dalam memelihara hewan peliharaanya. sehingga dengan berdirinya petshop ini diharapkan dapat membantu para pemilik hewan dalam merawat peliharaanya. Felice Petshop ini diambil dari kata \"Felice\" yang berasal dari bahasa Italia yang memiliki arti kesuksesan dan kebahagiaan. Kata \"Felice\" ini juga memiliki arti sifat yang nyaman dan optimis. begitu juga dengan keinginan yang dicapai oleh Petshop ini. Kami harap Felice Petshop ini pun nantinya akan memberikan kebahagiaan dan kesuksesan bagi banyak orang');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(7) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `nama`, `service`) VALUES
(101, 'Pet Grooming', '103-687-grooming.png'),
(102, 'Pet Clinic', '4-clinic_1.png'),
(103, 'Pet Hotel', '81-hotel.png'),
(104, 'Pet Training', '368-training.png'),
(105, 'Pet Spa', '674-spa.png'),
(106, 'Pet Matting', '512-matting.png'),
(101, 'Pet Grooming', '103-687-grooming.png'),
(102, 'Pet Clinic', '4-clinic_1.png'),
(103, 'Pet Hotel', '81-hotel.png'),
(104, 'Pet Training', '368-training.png'),
(105, 'Pet Spa', '674-spa.png'),
(106, 'Pet Matting', '512-matting.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cat`
--

CREATE TABLE `tb_cat` (
  `id` int(4) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `file_image` varchar(80) DEFAULT NULL,
  `file_video` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=Active |0= Not Active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cat`
--

INSERT INTO `tb_cat` (`id`, `title`, `harga`, `file_image`, `file_video`, `flag_active`) VALUES
(3, 'cat food', 900000, 'cat food.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_clinic`
--

CREATE TABLE `tb_clinic` (
  `clinic_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_clinic`
--

INSERT INTO `tb_clinic` (`clinic_id`, `title`, `image`, `desc`, `detail`) VALUES
(1, 'Vaccination', 'vaccination.jpg', 'Layanan vaksinasi agar pet Anda lebih sehat dan terhindar dari penyakit.', '<label>Tersedia 4 jenis vaksin kucing yaitu : </label> 										<div class=\"row\"> 											<div class=\"col-sm-7\"> 												<ul> 													<li>Vaksin rabies</li> 													<li>Vaksin FVRCP (FPV+ FHV-1+ FCV)</li> 													<li>Virus leukemia kucing (FeLV)</li> 													<li>Vaksin bordetella</li> 												</ul> 											</div> 											<div class=\"col-sm-5\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 100000</li> 													<li>💸 IDR 200000</li> 													<li>💸 IDR 180000</li> 													<li>💸 IDR 140000</li> 												</ul> 											</div>	 										</div>	 										<label>Tersedia 8 jenis vaksin anjing yaitu : </label>	 										<div class=\"row\"> 											<div class=\"col-sm-7\">		 												<ul> 													<li>Vaksin rabies</li> 													<li>Vaksin distemper</li> 													<li>Vaksin hepatitis</li> 													<li>Vaksin parvovirus</li> 													<li>Virus influenza anjing</li> 													<li>Vaksin penyakit lyme</li> 													<li>Vaksin leptospirosis</li> 													<li>Vaksin bordetella bronchiseptica</li> 												</ul> 											</div> 											<div class=\"col-sm-5\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 120000</li> 													<li>💸 IDR 100000</li> 													<li>💸 IDR 150000</li> 													<li>💸 IDR 110000</li> 													<li>💸 IDR 100000</li> 													<li>💸 IDR 180000</li> 													<li>💸 IDR 135000</li> 													<li>💸 IDR 140000</li> 												</ul> 											</div> 										</div>'),
(2, 'Food and Diet Plan', 'food_and_diet_plan.jpg', 'Layanan konsultasi tentang jadwal makan yang baik untuk pet Anda.', '<label>Tersedia 2 jenis  yaitu : </label> 										<div class=\"row\"> 											<div class=\"col-sm-8\"> 												<ul> 													<li>Kucing</li> 													<li>Anjing</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 55000</li> 													<li>💸 IDR 65000</li> 												</ul> 											</div> 										</div>	'),
(3, 'Skin Treatment', 'skin_treatment.jpg', 'Layanan konsultasi dan pengobatan kulit pet Anda.', '<div class=\"row\"> 												<div class=\"col-sm-8\"> 													<ul> 														<li>Harga konsultasi</li> 													</ul>	 												</div> 												<div class=\"col-sm-4\"> 													<ul style=\"list-style-type:none;\"> 														<li>💸 IDR 50000</li> 													</ul> 												</div> 											</div> 											<ul>	 												<li>Harga konsultasi tidak dihitung jika ada pengobatan</li> 												<li>Harga pengobatan tergantung pada tingkat keparahan sakit/luka kulit pet Anda.</li> 											</ul>'),
(4, 'Dental Care', 'dental_care.jpg', 'Layanan konsultasi dan pengobatan gigi pet Anda.', '<div class=\"row\"> 												<div class=\"col-sm-8\"> 													<ul> 														<li>Harga konsultasi</li> 													</ul>	 												</div> 												<div class=\"col-sm-4\"> 													<ul style=\"list-style-type:none;\"> 														<li>💸 IDR 30000</li> 													</ul> 												</div> 											</div> 											<ul>	 												<li>Harga konsultasi tidak dihitung jika ada pengobatan</li> 												<li>Harga pengobatan tergantung pada tingkat keparahan gigi pet Anda.</li> 											</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dog`
--

CREATE TABLE `tb_dog` (
  `id` int(4) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `file_image` varchar(80) DEFAULT NULL,
  `file_video` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=Active |0= Not Active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dog`
--

INSERT INTO `tb_dog` (`id`, `title`, `harga`, `file_image`, `file_video`, `flag_active`) VALUES
(2, 'dog food himalaya food', 90000, 'himalaya healthy food.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_grooming`
--

CREATE TABLE `tb_grooming` (
  `grooming_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_grooming`
--

INSERT INTO `tb_grooming` (`grooming_id`, `title`, `image`, `desc`, `detail`) VALUES
(1, 'Bathing', 'bathing.jpg', 'Layanan mandi untuk pet Anda. Ada beberapa jenis mandi sesuai dengan kondisi dan kesehatan.', '<label>Tersedia 4 jenis layanan mandi dengan 3 kategori yaitu : </label><br> 										- KUCING & ANJING KECIL : 										<div class=\"row\"> 											<div class=\"col-sm-7\"> 												<ul> 													<li>Mandi sehat</li> 													<li>Mandi kutu</li> 													<li>Mandi jamur</li> 													<li>Mandi lengkap (kutu + jamur)</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 50000</li> 													<li>💸 IDR 65000</li> 													<li>💸 IDR 65000</li> 													<li>💸 IDR 85000</li> 												</ul> 											</div> 										</div>	 										- ANJING SEDANG :  										<div class=\"row\"> 											<div class=\"col-sm-7\"> 												<ul> 													<li>Mandi sehat</li> 													<li>Mandi kutu</li> 													<li>Mandi jamur</li> 													<li>Mandi lengkap (kutu + jamur)</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 55000</li> 													<li>💸 IDR 70000</li> 													<li>💸 IDR 70000</li> 													<li>💸 IDR 95000</li> 												</ul> 											</div> 										</div> 										- ANJING BESAR : 	 										<div class=\"row\"> 											<div class=\"col-sm-7\"> 												<ul> 													<li>Mandi sehat</li> 													<li>Mandi kutu</li> 													<li>Mandi jamur</li> 													<li>Mandi lengkap (kutu + jamur)</li> 												</ul> 											</div> 											<div class=\"col-sm-5\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 60000</li> 													<li>💸 IDR 75000</li> 													<li>💸 IDR 75000</li> 													<li>💸 IDR 100000</li> 												</ul> 											</div> 										</div>	'),
(2, 'Teeth Brushing', 'teeth_brushing.jpg', 'Layanan membersihkan dan menyikat gigi pet Anda.', '<label>Tersedia 4 kategori teeth brushing yaitu : </label> 										<div class=\"row\"> 											<div class=\"col-sm-8\"> 												<ul> 													<li>Kucing</li> 													<li>Anjing kecil</li> 													<li>Anjing sedang</li> 													<li>Anjing besar</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 20000</li> 													<li>💸 IDR 20000</li> 													<li>💸 IDR 22000</li> 													<li>💸 IDR 25000</li> 												</ul> 											</div> 										</div>	'),
(3, 'Brush Out', 'brush_out.jpg', 'Layanan menyikat bulu pet Anda agar megar, rapi, dan bisa berpenampilan lucu.', '<label>Tersedia 4 kategori pet brush out yaitu : </label> 										<div class=\"row\"> 											<div class=\"col-sm-8\"> 												<ul> 													<li>Kucing</li> 													<li>Anjing kecil</li> 													<li>Anjing sedang</li> 													<li>Anjing besar</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 25000</li> 													<li>💸 IDR 25000</li> 													<li>💸 IDR 30000</li> 													<li>💸 IDR 35000</li> 												</ul> 											</div> 										</div>	'),
(4, 'Style Cuts', 'style_cuts.jpg', 'Layanan memotong bulu pet sesuai keinginan Anda.', '<label>Tersedia 3 kategori style cuts berdasarkan ketebalan pemotongan bulu yaitu : </label> 										<div class=\"row\"> 											<div class=\"col-sm-8\"> 												<ul> 													<li>Potong sedikit</li> 													<li>Potong sedang</li> 													<li>Potong banyak</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 25000</li> 													<li>💸 IDR 30000</li> 													<li>💸 IDR 35000</li> 												</ul> 											</div> 										</div>	'),
(5, 'Nail Trimming', 'nail_trimming.jpg', 'Layanan memotong kuku pet Anda.', '<label>Tersedia 4 kategori nail trimming yaitu : </label> 										<div class=\"row\"> 											<div class=\"col-sm-8\"> 												<ul> 													<li>Kucing</li> 													<li>Anjing kecil</li> 													<li>Anjing sedang</li> 													<li>Anjing besar</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 10000</li> 													<li>💸 IDR 10000</li> 													<li>💸 IDR 12000</li> 													<li>💸 IDR 15000</li> 												</ul> 											</div> 										</div>	'),
(6, 'Ear Cleaning', 'ear_cleaning.jpg', 'Layanan membersihkan telinga pet Anda.', '<label>Tersedia 4 kategori ear cleaning yaitu : </label> 											<div class=\"col-sm-8\"> 												<ul> 													<li>Kucing</li> 													<li>Anjing kecil</li> 													<li>Anjing sedang</li> 													<li>Anjing besar</li> 												</ul> 											</div> 											<div class=\"col-sm-4\"> 												<ul style=\"list-style-type:none;\"> 													<li>💸 IDR 12000</li> 													<li>💸 IDR 12000</li> 													<li>💸 IDR 15000</li> 													<li>💸 IDR 17000</li> 												</ul> 											</div>'),
(7, 'ALL GROOMING', 'discount10_.jpg', 'Diskon 10% jika Anda memesan semua grooming services kami yang tersedia untuk 1 pet.', 'Diskon 10% jika Anda memesan semua grooming services kami yang tersedia untuk 1 pet.'),
(8, 'GROOMING SET', 'discount7_.jpg', 'Diskon 7% jika Anda memesan grooming services yang terdiri dari full bathing (mandi lengkap) dan teeth brushing untuk 1 pet.', 'Diskon 7% jika Anda memesan grooming services yang terdiri dari full bathing (mandi lengkap) dan teeth brushing untuk 1 pet.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotelimg`
--

CREATE TABLE `tb_hotelimg` (
  `img_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hotelimg`
--

INSERT INTO `tb_hotelimg` (`img_id`, `image`) VALUES
(1, 'pet_hotel.jpg'),
(2, 'food.jpg'),
(3, 'bathing_hotel.jpg'),
(4, 'brush_out.jpg'),
(5, 'playground.jpg'),
(6, 'swimming_pool.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotelprice`
--

CREATE TABLE `tb_hotelprice` (
  `pet_id` int(11) NOT NULL,
  `pet_type` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `time_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hotelprice`
--

INSERT INTO `tb_hotelprice` (`pet_id`, `pet_type`, `price`, `time_type`) VALUES
(1, 'Kucing', 200000, 'hari'),
(2, 'Anjing Kecil', 200000, 'hari'),
(3, 'Anjing Sedang', 250000, 'hari'),
(4, 'Anjing Besar', 300000, 'hari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_maps`
--

CREATE TABLE `tb_maps` (
  `peta_id` int(10) NOT NULL,
  `data_peta` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_maps`
--

INSERT INTO `tb_maps` (`peta_id`, `data_peta`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0031027341342!2d106.81622371430932!3d-6.13028336181133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e076112ebad%3A0xacd0a7987f401f11!2sUniversitas%20Bunda%20Mulia!5e0!3m2!1sen!2sid!4v1655347622737!5m2!1sen!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nope`
--

CREATE TABLE `tb_nope` (
  `nope_id` int(10) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `alt_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nope`
--

INSERT INTO `tb_nope` (`nope_id`, `nomor_hp`, `alt_hp`) VALUES
(1, '+6287730777776', '+6287830999999');

-- --------------------------------------------------------

--
-- Table structure for table `tb_our_service`
--

CREATE TABLE `tb_our_service` (
  `id` int(4) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `file_image` varchar(200) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=Active|0=Not Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_our_service`
--

INSERT INTO `tb_our_service` (`id`, `title`, `description`, `file_image`, `flag_active`) VALUES
(1, 'Pet Shop', 'Perlengkapan dan kebutuhan hewan kesayangan anda dapat dipenuhi disini baik dari pemesanan online maupun dengan datang ke toko kami secara langsung.	\r\n		\r\n		\r\n	', 'Pict 1.jpg', 1),
(2, 'Pet Grooming', 'Grooming yang disediakan oleh kami dilakukan oleh profesional dan dilakukan dengan hati-hati dan penuh cinta untuk hewan kesayangan anda.	\r\n		\r\n	', 'Pict 2.jpg', 1),
(3, 'Pet Clinic', 'Pelayanan yang terbaik dan kesehatan hewan kesayangan anda adalah prioritas kami.', 'Pict 3.jpg', 1),
(4, 'Pet Hotel', 'Tempat terbaik dan pemenuhan kebutuhan yang sempurna bagi hewan kesayangan anda saat anda ingin pergi jauh dan tidak ada yang dapat mengawasi mereka.', 'Pict 4.jpg', 1),
(5, 'Pet Training', 'Memberikan pelatihan kepada hewan kesayangan anda dengan penuh cinta dan ketegasan agar hewan peliharaan kita memiliki sipat yang baik dan patuh.', 'pict 5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(4) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `file_image` varchar(80) DEFAULT NULL,
  `file_video` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=Active |0= Not Active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `title`, `harga`, `file_image`, `file_video`, `flag_active`) VALUES
(37, 'Cat Food Dispenser', 80000, 'cat food dispenser.jpg', '', 1),
(38, 'Happy dog Greece', 700000, 'happy dog greece.jpg', '', 1),
(39, 'Pet Toys', 90000, 'Pet toys.jpg', '', 1),
(40, 'Chew Dog Toys', 150000, 'chew dog toys.jpg', '', 1),
(41, 'Dog Toys', 90000, 'Dog toys.jpg', '', 1),
(43, 'Cat Backpack', 650000, 'Cat Backpack.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_titledesc`
--

CREATE TABLE `tb_titledesc` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `service_desc` text NOT NULL,
  `clinic_desc` text NOT NULL,
  `hotel_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_titledesc`
--

INSERT INTO `tb_titledesc` (`id`, `title`, `service_desc`, `clinic_desc`, `hotel_desc`) VALUES
(1, 'OUR SERVICES', 'Service kami terdiri dari pet grooming, pet clinic, pet training, dan pet hotel untuk kucing dan anjing Anda. Didukung oleh tenaga yang profesional dan peralatan yang lengkap menjamin kebersihan dan kesehatan pet Anda. Details dan harganya bisa dilihat di bawah ini. Anda juga bisa melakukan reservasi terlebih dahulu sebelum pergi ke tempat kami agar proses pendaftaran lebih cepat. Form reservasi bisa diakses melalui tombol yang ada di bagian kanan bawah layar Anda.', 'Kami melayani konsultasi, pemeriksaan dan pengobatan lain yang tidak ditunjukkan di atas. Harga pengobatan tergantung pada tingkat keparahan sakit/luka dan obat pet Anda.', 'Layanan penginapan yang didapatkan antara lain:<br> 				- Makan dan minum 2-3 kali sehari -<br> 				- Mandi 2 kali sehari -<br> 				- Jalan-jalan 2 kali sehari -<br> 				- Penyisiran bulu supaya tidak gimbal -<br> 				- Terdapat CCTV di setiap kandang untuk keamanan -<br> 				- Pengecekan dan pembersihan kandang setiap 3 jam untuk menghindari bau dan bakteri -<br> 				- Fasilitas playground dan kolam renang -<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_top_product`
--

CREATE TABLE `tb_top_product` (
  `id` int(4) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `web` varchar(15) DEFAULT NULL,
  `file_image` varchar(200) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=Active|0=Not Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_top_product`
--

INSERT INTO `tb_top_product` (`id`, `title`, `description`, `web`, `file_image`, `flag_active`) VALUES
(1, 'Whiskas Junior Dry Cat Food', '	Ini merupakan makanan kucing kering untuk kucing junior atau yang belum dewasa.	\r\n		\r\n		', 'cat.html', 'Whiskas Junior Dry Cat Food.jpg', 1),
(2, 'Pedigree Adult Dry Dog Food', 'Ini merupakan makanan anjing dewasa dengan jenis makanan kering	', 'dog.html', 'Padigree Adult Dry Dog Food.jpg', 1),
(3, 'Chiro Cat Food Dispenser', '	Ini merupakan tempat makanan untuk memberi makan kucing.	', 'product.html', 'Chiro Cat Food Dispenser.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `training_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`training_id`, `title`, `image`, `desc`, `price`) VALUES
(1, 'Behavioral Training', 'behavioral_training.jpg', 'Layanan melatih pet Anda bagaimana menanggapi situasi apapun tanpa diperintahkan.', 200000),
(2, 'Obedience Training', 'obedience_training.jpg', 'Layanan melatih pet Anda untuk patuh pada perintah yang diberikan.', 150000),
(3, 'Swimming Training', 'swimming_training.jpg', 'Layanan melatih renang agar bisa berenang dan mengembangkan kemampuan renang pet Anda.', 150000),
(4, 'Tricks Training', 'tricks_training.jpg', 'Layanan melatih berbagai trik yang seru dan menyenangkan untuk pet Anda.', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `first_name`, `last_name`, `user_email`, `user_password`) VALUES
(1, 'randy', 'matthew', 'randy@gmail.com', '4297f44b13955235245b2497399d7a93'),
(2, 'abu', 'dabi', 'abudabi@gmail.com', 'e9889843edd5485770fccbda7755c01e'),
(9, 'randy', 'randy', 'randy@gmail.com', '4297f44b13955235245b2497399d7a93'),
(10, 'tes', 'user', 'tes@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id` int(4) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `file_video` varchar(200) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=Active|0=Not Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id`, `title`, `description`, `file_video`, `flag_active`) VALUES
(1, 'Petshop Video', '						Video Pertama pada Home website Felice Pet Shop	\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n	', 'Petshop Indonesia - Company Profile.mp4', 1),
(2, 'Lagu', 'Ini video lagu untuk test', 'Ghost_Town_-_HVC_concert.mp4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(111, 'Menjadi wadah dan tempat berbagi informasi yang ditujukan untuk para pecinta hewan dan pemilik hewan pada umumnya dan masyarakat yang memiliki kaitan dengan hewan', 'Memberikan produk dan layanan yang baik, tepat, dan aman bagi hewan peliharaan dan \r\nMemberikan fasilitas yang dapat memudahkan pecinta hewan untuk dapat dengan mudah mendapatkan informasi – informasi seputar hewan peliharaan.'),
(111, 'Menjadi wadah dan tempat berbagi informasi yang ditujukan untuk para pecinta hewan dan pemilik hewan pada umumnya dan masyarakat yang memiliki kaitan dengan hewan', 'Memberikan produk dan layanan yang baik, tepat, dan aman bagi hewan peliharaan dan \r\nMemberikan fasilitas yang dapat memudahkan pecinta hewan untuk dapat dengan mudah mendapatkan informasi – informasi seputar hewan peliharaan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cat`
--
ALTER TABLE `tb_cat`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tb_clinic`
--
ALTER TABLE `tb_clinic`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `tb_dog`
--
ALTER TABLE `tb_dog`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tb_grooming`
--
ALTER TABLE `tb_grooming`
  ADD PRIMARY KEY (`grooming_id`);

--
-- Indexes for table `tb_hotelimg`
--
ALTER TABLE `tb_hotelimg`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tb_hotelprice`
--
ALTER TABLE `tb_hotelprice`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `tb_maps`
--
ALTER TABLE `tb_maps`
  ADD PRIMARY KEY (`peta_id`);

--
-- Indexes for table `tb_nope`
--
ALTER TABLE `tb_nope`
  ADD PRIMARY KEY (`nope_id`);

--
-- Indexes for table `tb_our_service`
--
ALTER TABLE `tb_our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tb_titledesc`
--
ALTER TABLE `tb_titledesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_top_product`
--
ALTER TABLE `tb_top_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`,`user_email`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cat`
--
ALTER TABLE `tb_cat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_clinic`
--
ALTER TABLE `tb_clinic`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_dog`
--
ALTER TABLE `tb_dog`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_grooming`
--
ALTER TABLE `tb_grooming`
  MODIFY `grooming_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_hotelimg`
--
ALTER TABLE `tb_hotelimg`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_hotelprice`
--
ALTER TABLE `tb_hotelprice`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_maps`
--
ALTER TABLE `tb_maps`
  MODIFY `peta_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_nope`
--
ALTER TABLE `tb_nope`
  MODIFY `nope_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_our_service`
--
ALTER TABLE `tb_our_service`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_titledesc`
--
ALTER TABLE `tb_titledesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_top_product`
--
ALTER TABLE `tb_top_product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_training`
--
ALTER TABLE `tb_training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
