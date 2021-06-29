-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Haz 2017, 22:57:02
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

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
  `uye_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uye_onay` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adi`, `uye_sifre`, `uye_eposta`, `uye_kod`, `uye_tarih`, `uye_onay`) VALUES
(23, 'mehmet', '1234', 'mehmet.cemil.nuralp@gmail.com', 'd0d89d9dd7defc9ac836b9d1c44e3afe', '2017-06-12 22:43:54', 1),
(24, 'mehmet', '1234', 'mehmet.cemil.nuralp@gmail.com', 'ca8b8f34738c9afc4f77cd71653f8d40', '2017-06-12 22:44:35', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
