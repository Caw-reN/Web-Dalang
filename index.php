<?php 

    // menginclude koneksi ke database
    include 'connection.php';

    // cek jika tombol submit dipencet akan menyimpan data kedalam database
    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $comment = $_POST["comment"];
        $tanggal = date('Y-m-d');

        mysqli_query($conn, "INSERT INTO comment SET nama='$nama', comment='$comment', tanggal='$tanggal'");

        header("Location: index.php?pesan=sukses");
        exit();
    }

    // menampilan alert data berhasil di simpan dan mengearahkan ke halaman index kembali
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
        echo "<script>
            alert('Komentar berhasil dikirim!');
            window.location.href = 'index.php';
        </script>";
    }

    // query untuk mengambil data komentar
    $query = "SELECT * FROM comment ORDER BY id_comment DESC";
    $result = $conn->query($query);

    // menyimpan data yang diambil ke dalam bentuk array
    $komentar = [];
    while ($row = $result->fetch_assoc()) {
        $komentar[] = $row;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Dalang</title>
    <!-- import stylesheet -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- pembungkus utama -->
    <div class="main-container"> 
        <!-- bagian navbar -->
        <nav class="navbar">
            <div class="logo">
                <a href="#">
                    <!-- bagian logo -->
                    <img src="img/logo-daur-ulang.png" alt="Logo DALANG" /> 
                </a>
            </div>
            <!-- bagian tombol menu navbar untuk tampilan mobile -->
            <div class="menu-toggle" onclick="toggleMenu()">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  
                height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  
                stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  
                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path 
                stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path 
                d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
            </div>
            <!-- list menu -->
            <ul id="nav-menu">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="about_us.html">About Us</a>
                </li>
            </ul>
        </nav>

        <!-- bagian hero image -->
        <section class="hero">
            <div class="hero-overlay"></div>
            <!-- bagian slogan -->
            <div class="hero-content">
                <h1>Solusi Penting</br>untuk Lingkungan yang</br>Lebih Bersih</h1>
                <p>
                Daur ulang sampah adalah proses mengubah bahan-bahan bekas yang sudah tidak terpakai menjadi produk baru yang berguna.
                Proses ini sangat penting untuk mengurangi jumlah sampah yang menumpuk di tempat pembuangan akhir (TPA)
                dan membantu menjaga kelestarian lingkungan.
                </p>
            </div>     
        </section>

        <!-- bagian artikel -->
        <article id="home" class="artikel">
            <div  class="container">
                <h2>Apa Itu Daur Ulang Sampah?</h2>
                <p>
                    Daur ulang sampah adalah proses pengolahan kembali bahan atau barang 
                    bekas menjadi produk baru yang dapat digunakan kembali. Tujuan utama dari 
                    daur ulang adalah untuk mengurangi jumlah sampah yang dibuang ke tempat
                    pembuangan akhir (TPA), menghemat sumber daya alam, serta mengurangi polusi 
                    yang dihasilkan dari sampah yang dibakar atau ditimbun.
                </p>
                <p>
                    Proses daur ulang melibatkan beberapa tahapan penting, mulai dari pengumpulan sampah, 
                    penyortiran, pengolahan, hingga pembentukan produk baru. Daur ulang tidak hanya memberikan 
                    manfaat lingkungan, tetapi juga dapat menciptakan lapangan pekerjaan dan menghemat energi.
                </p>
                <h3>Daur Ulang Sampah Menjaga Keberlanjutan dengan Menumbuhkan "Kecerdasan Lingkungan"</h3>
                <p>
                    Di dunia yang terus berkembang, kita sering mendengar kata "daur ulang", namun apa sebenarnya 
                    makna dari tindakan ini? Daur ulang sering dipandang sebagai solusi praktis untuk mengurangi 
                    sampah, namun lebih dari itu, daur ulang adalah tentang mengubah cara kita berpikir tentang 
                    sumber daya. Ini adalah tentang bagaimana kita mengubah pandangan kita terhadap barang-barang 
                    yang tampaknya sudah tidak berguna lagi, dan memberi mereka kesempatan untuk hidup lagi dalam bentuk 
                    yang berbeda.
                </p>
                <p>
                    Namun, ada sebuah konsep yang jarang disadari dalam diskusi tentang daur ulang—yaitu pentingnya 
                    "kecerdasan lingkungan". Daur ulang bukan hanya soal memisahkan plastik dari kertas, tetapi lebih 
                    kepada bagaimana kita memahami dan menghargai siklus hidup sebuah barang dan pengaruhnya terhadap 
                    keberlanjutan bumi.
                </p>
                <h3>Mengapa Sampah Bisa Menjadi Sumber Daya?</h3>
                <p>
                    Di dunia modern, kita terbiasa melihat barang-barang yang sudah tidak terpakai sebagai sampah. 
                    Namun, di balik setiap potongan sampah, ada potensi yang belum dimanfaatkan. Misalnya, plastik 
                    yang dibuang begitu saja bisa diubah menjadi bahan baru yang berguna. Ini tidak hanya berlaku 
                    untuk plastik saja, tetapi hampir untuk setiap jenis sampah. Apa yang kita sebut sampah adalah 
                    masalah cara pandang kita terhadapnya.
                </p>
                <p>
                    Jika kita memandang sampah sebagai sesuatu yang berakhir di TPA, kita mungkin akan terburu-buru 
                    untuk menyingkirkannya. Namun, jika kita dapat melihat potensi tersembunyi dalam setiap benda 
                    yang kita anggap tidak berguna, kita akan menyadari bahwa setiap sampah adalah peluang untuk 
                    menciptakan sesuatu yang baru. Dalam konteks ini, sampah adalah sumber daya yang tidak dimanfaatkan 
                    dengan bijaksana.
                </p>
                <h3>Manfaat Daur Ulang Sampah </h3>
                <ol>
                    <li>
                        <h4>Mengurangi Polusi dan Dampak Lingkungan</h4>
                        <p>
                            Salah satu manfaat utama dari daur ulang adalah mengurangi polusi 
                            udara, tanah, dan air. Sampah yang dibakar menghasilkan emisi gas 
                            rumah kaca yang berbahaya bagi kesehatan manusia dan lingkungan. Dengan 
                            mendaur ulang, kita dapat mengurangi pembakaran sampah dan menghindari 
                            pencemaran tanah yang disebabkan oleh sampah yang dibuang sembarangan.
                        </p>
                    </li>
                    <li>
                        <h4>Menghemat Sumber Daya Alam</h4>
                        <p>
                            Proses daur ulang mengurangi ketergantungan pada sumber daya alam baru. 
                            Misalnya, dengan mendaur ulang plastik, kita mengurangi kebutuhan akan 
                            minyak bumi sebagai bahan baku plastik baru. Begitu pula dengan daur 
                            ulang kertas yang dapat mengurangi penebangan pohon.
                        </p>
                    </li>
                    <li>
                        <h4>Menghemat Energi</h4>
                        <p>
                            Daur ulang menghemat energi yang diperlukan untuk memproduksi barang 
                            dari bahan baku mentah. Sebagai contoh, pembuatan aluminium dari bijih
                            bauksit membutuhkan energi yang sangat besar, sementara daur ulang aluminium 
                            memerlukan sekitar 5% energi yang dibutuhkan untuk produksi baru.
                        </p>
                    </li>
                    <li>
                        <h4>Menciptakan Lapangan Kerja</h4>
                        <p>
                            Industri daur ulang menciptakan banyak lapangan pekerjaan, mulai dari 
                            pengumpulan, pemilahan, hingga pemrosesan sampah. Selain itu, industri
                            ini juga dapat menciptakan peluang ekonomi baru di sektor bisnis daur ulang.
                        </p>
                    </li>
                </ol>
                <h3>Tantangan dalam Daur Ulang dan Kesalahan Umum yang Harus Dihindari</h3>
                <p>
                    Meskipun daur ulang terlihat mudah, kenyataannya ada banyak tantangan yang harus 
                    kita hadapi. Salah satunya adalah pemahaman yang keliru tentang apa yang dapat didaur 
                    ulang. Banyak orang menganggap semua sampah plastik bisa didaur ulang, padahal tidak semua 
                    plastik memiliki potensi yang sama. Beberapa jenis plastik, seperti plastik yang terkontaminasi
                    makanan atau bahan kimia, justru akan membuat proses daur ulang menjadi lebih sulit dan bahkan 
                    berbahaya. Oleh karena itu, memahami jenis-jenis sampah yang bisa dan tidak bisa didaur ulang 
                    adalah kunci keberhasilan dalam daur ulang.
                </p>
                <p>
                    Selain itu, dalam banyak kasus, proses daur ulang juga seringkali tidak efisien. Keterbatasan 
                    fasilitas daur ulang dan kurangnya edukasi masyarakat tentang cara memilah sampah dengan benar 
                    dapat menghambat upaya untuk mengurangi volume sampah yang masuk ke TPA. Oleh karena itu, sangat 
                    penting bagi setiap individu untuk memahami pentingnya penyortiran sampah sejak dari rumah dan 
                    memastikan bahwa sampah yang dibuang benar-benar terpisah dengan baik.
                </p>
                <h3>Dari Pengurangan Sampah ke Pembentukan Nilai Baru</h3>
                <p>
                    Seringkali, orang melihat daur ulang sebagai solusi sederhana untuk mengurangi sampah. Namun, 
                    sebenarnya, daur ulang adalah tentang menciptakan nilai baru dari sesuatu yang tampaknya tidak 
                    bernilai. Setiap barang yang kita buang dapat menjadi bahan dasar untuk produk baru. 
                    Contohnya, kertas daur ulang tidak hanya digunakan untuk membuat kertas baru, tetapi juga 
                    bisa menjadi bahan untuk membuat produk lain seperti tas, dompet, atau bahkan perabot rumah 
                    tangga.
                </p>
                <p>
                    Proses ini lebih dari sekadar mengurangi volume sampah, tetapi juga berfokus pada menciptakan
                    nilai tambah dari sumber daya yang sudah ada. Daur ulang memungkinkan kita untuk memperpanjang umur 
                    pakai bahan-bahan yang telah ada, dan dengan cara ini, kita juga mengurangi dampak negatif terhadap 
                    lingkungan yang seringkali timbul dari eksploitasi bahan baku baru.
                </p>
                <h3>Kesimpulan</h3>
                <p>
                    Daur ulang sampah adalah solusi yang sangat efektif untuk mengurangi jumlah sampah yang 
                    menumpuk, menghemat sumber daya alam, serta mengurangi polusi lingkungan. Dengan semakin 
                    tingginya kesadaran masyarakat dan dukungan dari pemerintah, proses daur ulang dapat 
                    memberikan manfaat besar bagi keberlanjutan lingkungan dan perekonomian global. Oleh 
                    karena itu, kita semua harus berperan aktif dalam mendukung dan menerapkan proses daur 
                    ulang untuk masa depan yang lebih baik dan berkelanjutan.
                </p>
                <h3>Sumber Terpercaya:</h3>
                <ol>
                    <li>Circular Economy</li>
                    <li>World Economic Forum - Circular Economy</li>
                    <li>Environmental Protection Agency (EPA) - Recycling</li>
                </ol>

            </div>
        </article>

        <!-- bagian comment -->
        <div class="comment">
            <div class="comment-section">
                <h2>Tinggalkan Komentar</h2>
                <!-- form untuk menambahkan komentar -->
                <form id="commentForm" action="" method="POST">
                    <input type="text" id="nama" name="nama" placeholder="Nama" required />
                    <textarea id="komentar" rows="4" name="comment" placeholder="Komentar" required></textarea>
                    <button type="submit" name="submit">Kirim</button>
                </form> 

                <!-- list komentar -->
                <div id="daftarKomentar">
                    <h2>Komentar Terbaru</h2>
                    <!-- melakukan perulangan menggunakan foreach untuk menampilan seluruh komentar -->
                    <?php foreach ($komentar as $data): ?>
                    <div class="comment-card">
                        <div class="comment-name">
                            <p><?= $data['nama']?></p>
                        </div>
                        <div class="comment-text">
                            <p><?= $data['comment']?></p>
                        </div>
                        <div class="tanggal-komentar">
                            <?= $data['tanggal'] ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- bagian footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2025 DALANG. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- import script untuk dropdown menu pada tampilan mobile -->
    <script src="script/script.js"></script>
</body>
</html>