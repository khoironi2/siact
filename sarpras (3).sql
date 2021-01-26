-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Jan 2021 pada 04.33
-- Versi server: 5.7.24
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Dosen'),
(2, 'Staff'),
(4, 'Kepala Unit Penjamin Mutu'),
(5, 'Direktur Politeknik Akbara'),
(6, 'Wakil Direktur II'),
(7, 'Bagian Sarana Prasarana'),
(8, 'Direktur Politeknik Akbara'),
(9, 'Wakil Direktur I'),
(10, 'Admin Akbara'),
(11, 'SDM'),
(12, 'Relawan'),
(13, 'Komandan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penelitian`
--

CREATE TABLE `tbl_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `reputasi_penelitian` enum('internasional','nasional_akreditasi','nasional_tidak_akreditasi') DEFAULT NULL,
  `link_penelitian` varchar(255) DEFAULT NULL,
  `file_penelitian` varchar(255) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `time_update_data_penelitian` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_penelitian`
--

INSERT INTO `tbl_penelitian` (`id_penelitian`, `judul_penelitian`, `reputasi_penelitian`, `link_penelitian`, `file_penelitian`, `id_users`, `time_update_data_penelitian`, `created_by`) VALUES
(1, 'Diagnosis Expert System Using Bayes Algorithm', 'nasional_tidak_akreditasi', 'https://doi.org/10.46764/teknimedia.v1i2.24', 'file.pdf', 1, NULL, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `judul_pengajuan` varchar(255) DEFAULT NULL,
  `latar_belakang_pengajuan` longtext,
  `tujuan_pengajuan` longtext,
  `manfaat_pengajuan` longtext,
  `jenis_pengajuan` longtext,
  `biaya_pengajuan` varchar(255) DEFAULT NULL,
  `waktu_pengajuan_awal` datetime DEFAULT NULL,
  `waktu_pengajuan_akhir` datetime DEFAULT NULL,
  `peserta_pengajuan` longtext,
  `penutup_pengajuan` longtext,
  `file_pengajuan` varchar(255) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `dirumuskan_pengajuan` int(11) DEFAULT NULL,
  `diperiksa_pengajuan` int(11) DEFAULT NULL,
  `ditetapkan_pengajuan` int(11) DEFAULT NULL,
  `dikendalikan_pengajuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `judul_pengajuan`, `latar_belakang_pengajuan`, `tujuan_pengajuan`, `manfaat_pengajuan`, `jenis_pengajuan`, `biaya_pengajuan`, `waktu_pengajuan_awal`, `waktu_pengajuan_akhir`, `peserta_pengajuan`, `penutup_pengajuan`, `file_pengajuan`, `id_users`, `dirumuskan_pengajuan`, `diperiksa_pengajuan`, `ditetapkan_pengajuan`, `dikendalikan_pengajuan`) VALUES
(15, 'STANDAR OPERASIONAL PROSEDUR PENGADAAN SARANA PRASARANA POLITEKNIK AKBARA SURAKARTA', '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:10.0pt;margin-left:49.65pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-1.0cm;line-height:150%;mso-list:l0 level2 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-weight:\r\nbold\">1.1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nmso-bidi-font-size:12.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Sarana\r\nprasarana adalah </span><span lang=\"IN\" style=\"font-size:11.0pt;mso-bidi-font-size:\r\n12.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN\">segala\r\nsesuatu yang dapat dipakai sebagai alat dan </span><span lang=\"EN-US\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;font-family:\r\n&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;</span><span lang=\"IN\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN\">penunjang untuk\r\npelaksanaan proses pencapaian </span><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nmso-bidi-font-size:12.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif\">suatu\r\n</span><span lang=\"IN\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN\">tujuan</span><span lang=\"EN-US\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Arial&quot;,sans-serif\">.<b> </b><b><o:p></o:p></b></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:10.0pt;margin-left:49.65pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-1.0cm;line-height:150%;mso-list:l0 level2 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-weight:\r\nbold\">1.2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nmso-bidi-font-size:12.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Sarana\r\ndan pendukung dilingkungan Politeknik Akbara adalah segala sesuatu berupa\r\nbarang inventaris kantor, peralatan mesin, gedung perkuliahan, laboratorium,\r\nperpustakaan, ruang pimpinan, ruang bagian, ruang ujian, ruang senat, ruang\r\njurnal, halaman, taman, tempat parkir, wc…dll, yang dapat digunakan sebagai\r\nalat dan bahan serta pendukung proses kegiatan dalam pencapaian tujuan sebuah\r\ninstitusi.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:10.0pt;margin-left:49.65pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-1.0cm;line-height:150%;mso-list:l0 level2 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-weight:\r\nbold\">1.3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nmso-bidi-font-size:12.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Pengadaan\r\nsarana prasarana adalah suatu proses pembelian/penyediaan fasilitas barang\r\ndilingkungan kampus berdasarkan ketentuan dan peraturan yang barlaku.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:10.0pt;margin-left:49.65pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-1.0cm;line-height:150%;mso-list:l0 level2 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-bidi-font-weight:\r\nbold\">1.4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nmso-bidi-font-size:12.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Rencana\r\npengadaan sarana dan prasarana adalah suatu kegiatan yang diawali dengan\r\ninventarisasi kebutuhan sarana dan prasarana , penyusunan anggaran dan alokasi\r\nanggaran pengadaan sarana dan prasarana.<o:p></o:p></span></p>\r\n                         ', '<p class=\"MsoListParagraph\" style=\"margin-left:21.3pt;mso-add-space:auto;\r\ntext-align:justify;line-height:150%\"><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Standar Operasional Prosedur\r\n(SOP) ini bertujuan untuk memberikan penjelasan tentang tata cara/mekanisme\r\npengadaan sarana dan prasarana dilingkungan Politeknik Akbara.<o:p></o:p></span></p>\r\n                         ', '<p class=\"MsoListParagraph\" style=\"margin-left:21.3pt;mso-add-space:auto;\r\ntext-align:justify;line-height:150%\"><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Ruang lingkup SOP ini meliputi\r\npersiapan pengadaan sarana dan prasarana, proses pengadaan sarana dan\r\nprasarana, pelaksanaan pengadaan dan pencatatan sarana prasarana.<o:p></o:p></span></p>                         ', 'Pengajuan Ac Portable', '900.000.000', '2021-01-06 08:38:59', '2021-01-06 08:38:59', '<span lang=\"EN-US\" style=\"font-size:11.0pt;font-family:\r\n&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Edy Setiyawan</span>                         ', '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Bagian Keuangan melakukan\r\nrapat koordinasi dengan Bagian Umum dan Bagian Perlengkapan (Sarana prasarana)\r\ndalam rangka persiapan pengadaan sarana dan prasarana Politeknik Akbara.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Staf perlengkapan/staf sarana\r\nprasarana yang sudah ditunjuk, melakukan inventarisasi kebutuhan sarana\r\nprasarana dilingkungan Politeknik Akbara.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Staf perlengkapan/staf sarana\r\nprasarana menyampaikan kepada atasan langsung (Kabag Sarpras) daftar\r\ninventarisasi kebutuhan Sarana prasarana.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Kabag Sarana prasarana\r\nmenyampaikan daftar kebutuhan kepada Bagian Keuangan atau Kepala Bagian\r\nKeuangan (Kabag Keuangan).<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Kabag Keuangan melaporkan\r\nkepada Wakil Direktur II daftar kebutuhan sarana prasarana untuk\r\nditindaklanjuti.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Wakil Direktur II dan Bagian\r\nKeuangan mengadakan rapat koordinasi&nbsp;\r\nuntuk penentuan jumlah dan alokasi anggara serta tata cara&nbsp; pengadaan sarana prasarana.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Pengadaan sarana prasarana\r\ndilakukan oleh Bagian Sarana Prasarana.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:49.5pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.8.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Pelaporan/penyerahan sarana\r\nprasarana oleh Bagian Sarana Prasarana kepada Pimpinan Politeknik.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left:49.5pt;mso-add-space:auto;\r\ntext-align:justify;text-indent:-27.0pt;line-height:150%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial;mso-bidi-font-weight:bold\">4.9.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:11.0pt;\r\nline-height:150%;font-family:&quot;Arial&quot;,sans-serif\">Penandatanganan berita acara\r\npenyerahan sarana prasarana.<o:p></o:p></span></p>                         ', 'SK_NIK_Des_202020201224_125330542.pdf', 2, 3, 1, 4, 3),
(17, 'STANDAR MUTU PENGELOLAAN PENGABDIAN KEPADA MASYARAKAT POLITEKNIK AKBARA SURAKARTA', '<p class=\"Isi\"><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Sesuai dengan amanat\r\nPeraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia\r\nNo. 62 tahun 2016 tentang Sistem Penjaminan Mutu Pendidikan Tinggi, dan\r\ntercantum dalam Statuta AKBARA Surakarta Nomor 01/YPMI/VII/2019 yang ditetapkan\r\npada tanggal 31 Juli 2019, bahwa AKBARA Surakarta memiliki komitmen untuk\r\nmembangun budaya mutu dalam berbagai bentuk pelayanan perguruan tinggi dalam\r\nbentuk Sistem Penjaminan Mutu Internal. Adapun bentuk perguruan tinggi ini\r\nuntuk selanjutnya disebut Politeknik Akbara sesuai dengan SK Perubahan Bentuk\r\ndari Akademi Teknologi Bank Darah (AKBARA) Surakarta menjadi Politeknik Akbara\r\nNomor 591/M/2020. Lembaga Penjaminan Mutu Politeknik AKBARA dibentuk untuk\r\nmemastikan keberlangsungan dan kualitas mutu kegiatan Tri Dharma Politeknik\r\nAKBARA sebagai bentuk kontribusi nyata dalam peningkatan daya saing bangsa.\r\nPoliteknik AKBARA menerapkan Sistem Penjaminan Mutu Internal (SPMI) secara\r\nberkesinambungan, konsisten, efisien, dan akuntabel. Melalui dokumen ini, Lembaga\r\nPenjaminan Mutu Politeknik AKBARA berupaya membangun standar minimal pada\r\ntiap-tiap layanan pendidikan tinggi di lingkungan Politeknik AKBARA. Dokumen\r\nini disusun berdasarkan peraturan perundangan yang ada dan melalui proses\r\nmasukan dari berbagai pihak, utamanya stakeholder. Dokumen Manual Mutu\r\nKompetensi Lulusan ini selanjutnya akan menjadi panduan bagi pengelola\r\nPerguruan Tinggi baik di tingkat pimpinan maupun staf pengajar, staf dan\r\nmahasiswa dalam upaya peningkatan mutu berkelanjutan dalam pengelolaan\r\npendidikan tinggi yang lebih baik.</span><br></p>\r\n                         ', '<p class=\"Isi\"><span lang=\"IN\">Tujuan Perguruan Tinggi Politeknik Akbara adalah:<o:p></o:p></span></p>\r\n\r\n<p class=\"ListNumbersCxSpFirst\" style=\"margin-left:54.0pt;mso-add-space:auto;\r\ntext-indent:-18.0pt;mso-list:l0 level1 lfo2;tab-stops:36.0pt\"><!--[if !supportLists]--><span lang=\"IN\">1)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\">Menghasilkan lulusan yang beriman, bertaqwa, berakhlak mulia, dan berkarakter\r\nnasionalisme yang memiliki wawasan kebangsaan serta selalu menjunjung\r\nnilai-nilai kemanusiaan, dan memiliki daya saing tinggi pada era global.<o:p></o:p></span></p>\r\n\r\n<p class=\"ListNumbersCxSpLast\" style=\"margin-left:54.0pt;mso-add-space:auto;\r\ntext-indent:-18.0pt;mso-list:l0 level1 lfo1;tab-stops:36.0pt\"><!--[if !supportLists]--><span lang=\"IN\">2)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\">Menghasilkan pengabdian kepada masyarakat terapan maupun pengembangan\r\nkeilmuan dalam memenuhi kebutuhan persaingan global dan peningkatan derajat\r\nkapasitas serta kesejahteraan masyarakat.<o:p></o:p></span></p>\r\n                         ', '<p class=\"ListalfabetCxSpFirst\"><!--[if !supportLists]--><span lang=\"IN\">A.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">LPPM Politeknik AKBARA memiliki Rencana Induk Pengabdian\r\nKepada Masyarakat atau Roadmap Pengabdian Kepada Masyarakat.</span><span lang=\"IN\"><o:p></o:p></span></p>\r\n\r\n<p class=\"ListalfabetCxSpMiddle\"><!--[if !supportLists]--><span lang=\"IN\">B.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">LPPM memiliki program kerja tahunan meliputi perencanaan\r\nkegiatan dan perencanaan keuangan. </span><span lang=\"IN\"><o:p></o:p></span></p>\r\n\r\n<p class=\"ListalfabetCxSpMiddle\"><!--[if !supportLists]--><span lang=\"IN\">C.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">Pelaksanaan kegiatan Pengabdian Kepada Masyarakat\r\ndilakukan dengan mengikuti kaidah akademik dan panduan peraturan\r\nperundang-undangan yang berlaku.</span><span lang=\"IN\"><o:p></o:p></span></p>\r\n\r\n<p class=\"ListalfabetCxSpMiddle\"><!--[if !supportLists]--><span lang=\"IN\">D.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">Kegiatan Pengabdian Kepada\r\nMasyarakat dilakukan sebagai bentuk pembelajaran kepada mahasiswa di luar\r\nlingkungan kampus.<o:p></o:p></span></p>\r\n\r\n<p class=\"ListalfabetCxSpLast\"><!--[if !supportLists]--><span lang=\"IN\">E.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">Kegiatan Pengabdian Kepada\r\nMasyarakat didasarkan pada hasil penelitian dan pengembangan keilmuan yang\r\ndilakukan oleh sivitas akademika Politeknik AKBARA Surakarta.<o:p></o:p></span></p>                         ', 'Pengajuan Komputer', 'Rp. 900.800.000', '2021-01-06 20:56:23', '2021-01-06 20:56:23', 'Mas EDY DKK', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;text-align:justify;text-indent:\r\n36.0pt;line-height:150%\"><span lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial\">Dokumen Manual Mutu SPMI Politeknik Akbara ini\r\ndisusun sebagai langkah awal dari implementasi Sistem Penjaminan Mutu Internal\r\nPoliteknik Akbara. Adapun dokumen ini merupakan perwujudan dari salah satu\r\ntahapan SPMI, yakni penetapan komitmen mutu Manajemen Perguruan Tinggi\r\nPoliteknik Akbara yang digunakan sebagai dasar penyelenggaraan Sistem\r\nPenjaminan Mutu Internal dalam pengelolaan layanan pendidikan tinggi di\r\nlingkungan Politeknik Akbara.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;text-align:justify;text-indent:\r\n36.0pt;line-height:150%\"><span lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,sans-serif;\r\nmso-fareast-font-family:Arial\">Hal-hal yang berkenaan dengan perbaikan dokumen\r\nyang disebabkan oleh perkembangan layanan Politeknik Akbara, selanjutnya akan\r\ndilakukan peninjauan ulang oleh Lembaga Penjaminan Mutu Akbara untuk seterusnya\r\ndilakukan perubahan terhadap dokumen-dokumen SPMI Politeknik Akbara dan\r\ndiajukan kembali kepada bagian terkait di Politeknik Akbara untuk proses\r\npenetapan kembali.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;text-indent:36.0pt;line-height:\r\n150%\"><span lang=\"EN-US\" style=\"font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\r\nArial\">Demikian dokumen ini dibuat untuk kemudian dapat ditaati oleh semua\r\npihak yang terkait dalam pengelolaan Politeknik Akbara. Terima kasih.</span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">&nbsp;</span></p>                         ', 'AKBARA_SISTEM_INFORMASI_UNIT_BAGIAN2.csv', 2, 2, 1, 4, 3),
(18, 'aaaaaaaaaaaaaaa', 'cs', 's\r\n                         ', 'sadas', 'sa', 'sc', '2021-01-11 13:59:43', '2021-01-11 13:59:43', 'mas edy dkk', 'ok', '4__Manual_Mutu_Penilaian_Penelitian_Ok.docx', 2, 2, 3, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `time_login_users` datetime DEFAULT NULL,
  `time_logout_users` datetime DEFAULT NULL,
  `time_create_users` datetime DEFAULT NULL,
  `time_update_users` datetime DEFAULT NULL,
  `status_login` enum('1','0') DEFAULT NULL,
  `gambar_users` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama_users` varchar(255) DEFAULT NULL,
  `kewarganegaraan_users` varchar(255) DEFAULT NULL,
  `NIK_KTP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nik`, `password`, `email`, `nama_lengkap`, `nama_panggilan`, `id_jabatan`, `time_login_users`, `time_logout_users`, `time_create_users`, `time_update_users`, `status_login`, `gambar_users`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama_users`, `kewarganegaraan_users`, `NIK_KTP`) VALUES
(1, '06503620048', '$2y$10$w1GPdwAxhNNE.ngmiT9/9OilHEDDctgsmYb7BXZX.4EJfdVXdu7YS', 'masrony37@gmail.com', 'Khoironi, S.Kom., M.Kom', 'Roni', 13, '2021-01-27 00:57:22', '2021-01-27 01:06:02', '2021-01-04 14:07:43', NULL, NULL, 'khoironi.png', 'Laki - Laki', 'Sampang', '1996-03-07', 'Islam', 'Indonesia', NULL),
(2, '06503620047', '$2y$10$sURGBwtJGLm11e8P12qYqe9Oznl5q/MjlgABTKEPmgFzRfwqe2aY6', NULL, 'Muhammad Luthfi Hamdani, S.M., M.M', 'Lutfi', 12, '2021-01-27 03:55:31', '2021-01-13 10:08:58', '2021-01-04 15:01:31', NULL, NULL, 'lutfi.png', 'Laki - Laki', NULL, NULL, 'Islam', 'Indonesia', NULL),
(3, '06503620046', '$2y$10$602AkUkG5WDCca7B7EFIS.mq69K6yo7u3quM4gqHwwNDASgIzLsIC', NULL, 'Roudlotul Jannati Rochnadia Noorva Yudhitya, S.E., M.M', 'Ova', 1, '2021-01-13 10:55:08', '2021-01-13 10:11:37', '2021-01-04 15:51:36', NULL, NULL, 'ofa.png', 'Perempuan', 'Kartasura', '1990-11-07', 'Islam', 'Indonesia', NULL),
(4, '0650361001', '$2y$10$lgGKuXgX0XYL.59lj5ZLRuboEUPG5Ng3cvCl/VcEw.RSssHJD8tla', NULL, 'Dr. H. Titis Wahyuono, M.Si.', 'Dr. Titis', 1, '2021-01-11 14:04:12', NULL, '2021-01-06 20:42:29', NULL, NULL, NULL, 'Laki - Laki', NULL, NULL, NULL, NULL, NULL),
(5, '06503620037', '$2y$10$uQrizR6vD/TeXDpsFcwdteQKzoxfDI0vLYxOtZ/wiWt649reABzt.', NULL, 'Mega Santi Sekartaji, S.KM.', NULL, 11, '2021-01-14 00:13:48', NULL, '2021-01-13 09:08:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_penelitian`
--
ALTER TABLE `tbl_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_penelitian`
--
ALTER TABLE `tbl_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
