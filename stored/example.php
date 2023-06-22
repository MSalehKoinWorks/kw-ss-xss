<?php
require_once "../config/db.php";
session_start();

if (!isset($_SESSION['username'])) {
  echo "<script>alert('Silahkan login terlebih dahulu!'); location.href = '../auth/login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored XSS</title>
  </head>
  <body>
    <h2>Meningkatkan Produktivitas Kerja Programmer Melalui Work From Home (WFH)</h2>
    <p>Seiring dengan kemajuan teknologi dan perubahan paradigma bekerja, banyak perusahaan mengadopsi model Work From Home (WFH) sebagai solusi bagi para programmer. WFH memberikan kebebasan dan fleksibilitas dalam mengatur waktu dan tempat kerja, namun juga membutuhkan disiplin yang tinggi untuk mencapai produktivitas yang optimal. Artikel ini akan menjelaskan manfaat WFH bagi programmer dan memberikan tips yang efektif untuk meningkatkan produktivitas kerja mereka.</p>
    <ol>
      <li>
        Fleksibilitas Waktu:
        <br>
        Salah satu keuntungan utama WFH bagi programmer adalah fleksibilitas dalam mengatur waktu kerja. Programmer dapat menyesuaikan jadwal kerja mereka sesuai dengan preferensi pribadi mereka. Ini memungkinkan mereka untuk bekerja pada saat mereka merasa paling produktif dan kreatif, yang dapat meningkatkan kualitas pekerjaan yang dihasilkan.
      </li>
      <li>
        Pengurangan Gangguan:
        <br>
        Bekerja dari rumah mengurangi gangguan dan interupsi yang umumnya terjadi di lingkungan kantor. Dengan lingkungan yang tenang dan bebas dari gangguan, programmer dapat fokus sepenuhnya pada tugas yang sedang mereka kerjakan. Ini dapat meningkatkan konsentrasi dan efisiensi kerja.
      </li>
      <li>
        Pengaturan Lingkungan Kerja yang Ideal:
        <br>
        Setiap programmer memiliki preferensi dan gaya kerja yang berbeda. Dalam lingkungan WFH, mereka memiliki kesempatan untuk menciptakan lingkungan kerja yang ideal sesuai dengan kebutuhan dan preferensi mereka. Beberapa programmer mungkin lebih baik dalam suasana tenang dan minim gangguan, sementara yang lain mungkin membutuhkan latar belakang musik yang lembut. Dengan menciptakan lingkungan kerja yang sesuai, produktivitas dapat meningkat secara signifikan.
      </li>
      <li>
        Pemanfaatan Alat dan Teknologi:
        <br>
        Dalam era digital saat ini, tersedia banyak alat dan teknologi yang dapat membantu programmer dalam bekerja secara efisien. Kolaborasi online, sistem manajemen proyek, dan alat pengujian perangkat lunak adalah contoh beberapa alat yang dapat memfasilitasi kerja tim dan meningkatkan produktivitas. Dalam lingkungan WFH, programmer dapat memanfaatkan teknologi ini dengan lebih baik untuk meningkatkan kinerja mereka.
      </li>
      <li>
        Pemeliharaan Keseimbangan Kerja-Hidup:
        <br>
        Salah satu aspek penting dari WFH adalah kemampuannya untuk membantu programmer memelihara keseimbangan antara pekerjaan dan kehidupan pribadi. Dengan bekerja dari rumah, programmer memiliki fleksibilitas untuk mengatur waktu untuk melakukan kegiatan pribadi, seperti olahraga, waktu bersama keluarga, dan waktu luang. Hal ini dapat mengurangi stres dan membantu me
      </li>
    </ol>
    <h3>Komentar</h3>
    <form action="" method="POST">
      <textarea name="komentar" style="width: 100%;" rows="10" placeholder="Silahkan masukkan komentar anda tentang artikel yang ada di atas pada kolom komentar ini..." required></textarea>
      <br>
      <input type="submit" value="Kirim Komentar">
    </form>
    <h3>Semua Komentar</h3>
    <ul>
      <?php
        $data = mysqli_query($conn, "SELECT * FROM komentar");
        while($d = mysqli_fetch_array($data)) echo "<li>{$d['komentar']}</li>";
      ?>
    </ul>
    <?php

      if (isset($_POST['komentar'])) {
        $komentar = $_POST['komentar'];
        $sql = "INSERT INTO komentar VALUES (NULL, '$komentar')";

        if (mysqli_query($conn, $sql)) echo "<script>alert('Terima kasih untuk komentar yang telah anda berikan 🤘🏼');</script>";
        else echo "<script>alert('". mysqli_error($conn) ."')</script>";
      }

    ?>
  </body>
</html>