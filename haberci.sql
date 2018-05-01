-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Ara 2015, 13:21:51
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `haberci`
--
CREATE DATABASE IF NOT EXISTS `haberci` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `haberci`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `foto_galeri1`
--

CREATE TABLE IF NOT EXISTS `foto_galeri1` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `foto_galeri1`
--

INSERT INTO `foto_galeri1` (`foto`) VALUES
('f6.jpg'),
('f7.jpg'),
('f8.jpg'),
('f9.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `foto_galeri2`
--

CREATE TABLE IF NOT EXISTS `foto_galeri2` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `foto_galeri2`
--

INSERT INTO `foto_galeri2` (`foto`) VALUES
('f10.jpg'),
('f11.jpg'),
('f12.jpg'),
('f13.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gezi_fotolari1`
--

CREATE TABLE IF NOT EXISTS `gezi_fotolari1` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gezi_fotolari1`
--

INSERT INTO `gezi_fotolari1` (`foto`) VALUES
('g1.jpg'),
('g2.jpg'),
('g3.jpg'),
('g4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gezi_fotolari2`
--

CREATE TABLE IF NOT EXISTS `gezi_fotolari2` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gezi_fotolari2`
--

INSERT INTO `gezi_fotolari2` (`foto`) VALUES
('g5.jpg'),
('g6.jpg'),
('g7.jpg'),
('g8.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sagdaki_haber`
--

CREATE TABLE IF NOT EXISTS `sagdaki_haber` (
  `foto` varchar(100) NOT NULL,
  `bilgi` text NOT NULL,
  PRIMARY KEY (`foto`),
  KEY `foto` (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sagdaki_haber`
--

INSERT INTO `sagdaki_haber` (`foto`, `bilgi`) VALUES
('abd.JPG', 'Bugünkü yazısının son bölümünde ''''Başika’ya asker yollayacağımızdan ABD’nin haberi var mıydı?'''' şeklinde ara başlık açıp, bu sorunun cevabını arayan Hürriyet Yazarı Verda Özer, Türk askerinin ABD’nin bilgisi dahilinde gönderildiğini vurguladı.'),
('askerler.jpg', 'Güvenlik Güçlerimiz Pkknın Gücünü Büyük oranda azalttı TSK''nın Açıklamasına Göre 10000 Pkklı Öldürüldü.'),
('cami_hoparlorunden_ibrahim_tatlises_sarkisi_1450545323_27.jpg', 'Yunusemre ilçesine bağlı Dış Mahalle İzmir Caddesi üzerinde bulunan Şeyh FenariCamisi’nde meydana geldi. Cami hoparlörü sistemine giren kişi veya kişiler önce,“Selami abi orda mısın, duyuyor musun beni?” gibi ifadeler kullandı.'),
('perfume-green.jpg', 'Piyasaya sürülen kaçak parfümler halkı perişan etti kaçak parfümler yüzünden 3 kişi ağır yaralandı...'),
('scent-apple.jpg', 'Prf.Dr Canan Karatay Elmanın İçindaki Karbonhidrattan dolayı Millete Elma Aldırıyor Bundan dolayı Askeri Üçretli bir işçi dava Açtı'),
('teleferik.JPG', '10 kilometre hat üzerinde toplam 6 istasyondan oluşan Mecidiyeköy-Zincirlikuyu-Altunizade- Çamlıca teleferik hattı tamamlandığında Mecidiyeköy Çamlıca arası yolculuk süresi 22 dakikaya inecek.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siyaset_fotolari1`
--

CREATE TABLE IF NOT EXISTS `siyaset_fotolari1` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siyaset_fotolari1`
--

INSERT INTO `siyaset_fotolari1` (`foto`) VALUES
('sys1.jpg'),
('sys2.jpg'),
('sys3.jpg'),
('sys4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siyaset_fotolari2`
--

CREATE TABLE IF NOT EXISTS `siyaset_fotolari2` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siyaset_fotolari2`
--

INSERT INTO `siyaset_fotolari2` (`foto`) VALUES
('sys5.jpg'),
('sys6.jpg'),
('sys7.jpg'),
('sys8.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `son_dakika_fotolari1`
--

CREATE TABLE IF NOT EXISTS `son_dakika_fotolari1` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `son_dakika_fotolari1`
--

INSERT INTO `son_dakika_fotolari1` (`foto`) VALUES
('sf1.JPG'),
('sf2.JPG'),
('sf3.JPG'),
('sf4.JPG');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `son_dakika_fotolari2`
--

CREATE TABLE IF NOT EXISTS `son_dakika_fotolari2` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `son_dakika_fotolari2`
--

INSERT INTO `son_dakika_fotolari2` (`foto`) VALUES
('sf5.JPG'),
('sf6.JPG'),
('sf7.JPG'),
('sf8.JPG');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `spor_fotolari1`
--

CREATE TABLE IF NOT EXISTS `spor_fotolari1` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `spor_fotolari1`
--

INSERT INTO `spor_fotolari1` (`foto`) VALUES
('spor1.JPG'),
('spor2.JPG'),
('spor3.JPG'),
('spor4.JPG');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `spor_fotolari2`
--

CREATE TABLE IF NOT EXISTS `spor_fotolari2` (
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `spor_fotolari2`
--

INSERT INTO `spor_fotolari2` (`foto`) VALUES
('spor5.JPG'),
('spor6.JPG'),
('spor7.JPG'),
('spor8.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
