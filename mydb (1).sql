-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Haz 2021, 00:32:46
-- Sunucu sürümü: 10.3.13-MariaDB
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mydb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Ertu'),
(4, 'Turan', '202cb962ac59075b964b07152d234b70', 'ErtuÄŸrul Turan Topal'),
(5, 'kobe', '202cb962ac59075b964b07152d234b70', 'kobe'),
(6, 'nihal', '123', 'nihal'),
(7, 'zeynep', '202cb962ac59075b964b07152d234b70', 'zeynep'),
(9, 'kobe1', 'd5e2fbef30a4eb668a203060ec8e5eef', 'Kobe'),
(11, 'Ertug', '6512bd43d9caa6e02c990b0a82652dca', 'Admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_adi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uye_eposta` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uye_kod` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `uye_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `uye_onay` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adi`, `uye_sifre`, `uye_eposta`, `uye_kod`, `uye_tarih`, `uye_onay`) VALUES
(23, 'Ertu', '1234', 'etopa96@gmail.com', 'd0d89d9dd7defc9ac836b9d1c44e3afe', '2017-06-12 22:43:54', 1),
(24, 'Turan', '1234', 'topalturan35@gmail.com', 'ca8b8f34738c9afc4f77cd71653f8d40', '2017-06-12 22:44:35', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf16_turkish_ci NOT NULL,
  `foyuncu` text COLLATE utf16_turkish_ci NOT NULL,
  `yorum` text COLLATE utf16_turkish_ci NOT NULL,
  `onay` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `adi`, `foyuncu`, `yorum`, `onay`) VALUES
(1, 'Ertu', 'Kobe', 'Kobe RIP...', 1),
(2, 'Turan', 'Lebron', 'kobe', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `üye`
--

CREATE TABLE `üye` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf16_turkish_ci NOT NULL,
  `password` text COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `üye`
--
ALTER TABLE `üye`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `üye`
--
ALTER TABLE `üye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
