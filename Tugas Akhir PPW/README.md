Nama : Mahendra Yuda Pradana

Web yang saya buat merupakan tempat untuk menjual hasil foto.
Foto yang diperjualbelikan adalah foto milik perusahaan GetPhoto, yang artinya
masyarakat umum tidak dapat menjual foto kepada perusahaan GetPhoto.
Website ini hanya sebagai perantara untuk menyebarkan foto secara luas
pada zaman modern ini. Foto yang dijual nantinya akan digunakan oleh
client (pembeli) untuk kepentingan komersil atau pribadi. Foto yang dibeli dapat
digunakan sebagai background web, iklan, dan sebagainya.

Kriteria penilaian:

1.  Desain rapi mengikuti kaidah atau prinsip desain:
    Desain dari web yang saya buat didesain serapi mungkin agar nyaman untuk
    dilihat oleh masyarakat umum.
2.  Web responsif:
    @media screen and (min-width: 968px) {
    :root {
    --biggest-font-size: 4rem;
    --h1-font-size: 2.25rem;
    --h2-font-size: 1.75rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: 0.875rem;
    --smaller-font-size: 0.813rem;
    }

    Dalam kode tersebut, terdapat beberapa variabel kustom yang didefinisikan menggunakan :root, yang merupakan pseudokelas CSS yang merepresentasikan elemen root dari dokumen (biasanya elemen <html>). Variabel kustom ini ditetapkan dengan nilai-nilai yang berbeda untuk ukuran font dalam halaman web. Misalnya, --biggest-font-size diberikan nilai 4rem, yang mewakili ukuran font terbesar dalam halaman web. --h1-font-size diberikan nilai 2.25rem, yang mewakili ukuran font untuk elemen <h1>. Begitu seterusnya untuk variabel kustom lainnya.Dengan menggunakan variabel-variabel ini, dapat diterapkan ukuran font yang responsif ke elemen-elemen di halaman web dengan mengacu pada variabel tersebut dalam aturan CSS. Sebagai contoh, jika ingin mengatur ukuran font <h1> agar responsif, dapat menggunakan var(--h1-font-size) sebagai nilai ukuran font dalam aturan CSS

3.  Direct Feedback kepada pengguna website:
    <div class="footer__data">
        <h3 class="footer__subtitle">Support</h3>
            <ul>
                <li class="footer__item">
                    <a href="" class="footer__link">FAQs</a>
                </li>
            <li class="footer__item">
                <a href="" class="footer__link">Support Center</a>
            </li>
            <li class="footer__item">
                <a href="" class="footer__link">Contact Us</a>
            </li>
            </ul>
    </div>

    kode tersebut merupakan fitur direct feedback yang belum disempurnakan, yang nantinya dapat digunakan
    oleh pengguna website untuk menghubungi kontak dari perusahaan GetPhoto.

4.  konten dinamis dari database
    PHP :
    <?php
    include 'dbconnect.php';
    // Query untuk mengambil data dari tabel atau sumber data lainnya
    $query = "SELECT * FROM packages WHERE id = 1";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $price = $row['price'];
        $rating = $row['rating'];
    } else {
        echo "No data found.";
    }
    mysqli_close($conn);
    ?>
    <?php
    include 'dbconnect.php';
    // Query untuk mengambil data dari tabel atau sumber data lainnya
    $query = "SELECT * FROM packages WHERE id = 2";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title2 = $row['title'];
        $subtitle2 = $row['subtitle'];
        $price2 = $row['price'];
        $rating2 = $row['rating'];
    } else {
        echo "No data found.";
    }
    
    mysqli_close($conn);
    
    ?>
    <?php
    include 'dbconnect.php';
    // Query untuk mengambil data dari tabel atau sumber data lainnya
    $query = "SELECT * FROM packages WHERE id = 3";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title3 = $row['title'];
        $subtitle3 = $row['subtitle'];
        $price3 = $row['price'];
        $rating3 = $row['rating'];
    } else {
        echo "No data found.";
    }
    
    mysqli_close($conn);
    
    ?>

    Kode tersebut merupakan contoh penggunaan PHP untuk mengambil data dari database menggunakan koneksi yang disetup melalui file "dbconnect.php". Kode ini kemungkinan digunakan untuk mengambil data paket-paket dari tabel "packages" berdasarkan ID tertentu.

    Pada setiap blok kode, langkah-langkah yang dilakukan adalah sebagai berikut:

    a. Memasukkan file "dbconnect.php" yang berisi pengaturan koneksi database.
    b. Mengeksekusi query SQL untuk mengambil data dari tabel "packages" berdasarkan ID tertentu. Misalnya, pada blok pertama, query SELECT \* FROM packages WHERE id = 1 digunakan untuk mengambil data paket dengan ID 1.
    c. Menjalankan query dengan menggunakan fungsi mysqli_query($conn, $query) dengan parameter koneksi dan query yang sudah dibuat.
    d. Memeriksa apakah query berhasil dijalankan dan menghasilkan baris data menggunakan if ($result && mysqli_num_rows($result) > 0).
    e. Jika query menghasilkan baris data, menggunakan fungsi mysqli_fetch_assoc($result) untuk mengambil data dari baris tersebut dan menyimpannya ke variabel yang sesuai. Misalnya, $title = $row['title'] digunakan untuk menyimpan nilai kolom 'title' ke variabel $title.
    f. Jika query tidak menghasilkan baris data, maka akan ditampilkan pesan "No data found.".

    HTML :
    <div class="place__container container grid">
    <div class="place__card">
    <img src="assets/img/raw.jpg" alt="" class="place__img">

                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                            </span>
                            <div class="place__data">
                                <h3 class="place__title">Package 1</h3>
                                <span class="place__subtitle"></span>
                                <button class="button button--flex place__button" onclick="toggleDetails('package1')">
                                    <i class="ri-arrow-right-line"></i>
                                </button>
                                <div id="package1-details" style="display: none;">
                                    <p>Subtitle: <?php echo $subtitle; ?></p>
                                    <p>Price: <?php echo $price; ?></p>
                                    <p>Rating: <?php echo $rating; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place__card">
                        <img src="assets/img/enhanced.jpg" alt="" class="place__img">

                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                            </span>
                            <div class="place__data">
                                <h3 class="place__title">Package 2</h3>
                                <button class="button button--flex place__button" onclick="toggleDetails('package2')">
                                    <i class="ri-arrow-right-line"></i>
                                </button>
                                <div id="package2-details" style="display: none;">
                                    <p>Title: <?php echo $title2; ?></p>
                                    <p>Subtitle: <?php echo $subtitle2; ?></p>
                                    <p>Price: <?php echo $price2; ?></p>
                                    <p>Rating: <?php echo $rating2; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place__card">
                        <img src="assets/img/night.jpg" alt="" class="place__img">

                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                            </span>
                            <div class="place__data">
                                <h3 class="place__title">Package 3</h3>
                                <button class="button button--flex place__button" onclick="toggleDetails('package3')">
                                    <i class="ri-arrow-right-line"></i>
                                </button>
                                <div id="package3-details" style="display: none;">
                                    <p>Title: <?php echo $title3; ?></p>
                                    <p>Subtitle: <?php echo $subtitle3; ?></p>
                                    <p>Price: <?php echo $price3; ?></p>
                                    <p>Rating: <?php echo $rating3; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    Kode tersebut mengatur tampilan untuk menampilkan tiga paket yang berbeda dalam format kartu. Setiap kartu memiliki gambar, judul paket, tombol untuk memperlihatkan atau menyembunyikan detail paket, serta detail paket yang ditampilkan ketika tombol diklik.

    Berikut adalah penjelasan tentang kode tersebut:

    a. Setiap paket ditampilkan dalam sebuah div dengan kelas "place**card", yang memuat gambar, konten, dan detail paket.
    b. Gambar paket ditampilkan dengan menggunakan elemen <img> dengan kelas "place**img" dan atribut "src" yang mengarahkan ke lokasi gambar.
    c. Judul paket ditampilkan dalam elemen <h3> dengan kelas "place**title".
    d. Tombol untuk memperlihatkan atau menyembunyikan detail paket ditampilkan dalam elemen <button> dengan kelas "button button--flex place**button" dan menggunakan ikon panah ke kanan dari ikon RiIcons.
    e. Detail paket ditampilkan dalam elemen <div> dengan ID unik untuk setiap paket ("package1-details", "package2-details", "package3-details"). Detail paket ini awalnya disembunyikan dengan menggunakan inline style "display: none;".
    f. Ketika tombol pada setiap kartu diklik, fungsi toggleDetails() dipanggil dengan argumen ID detail paket yang sesuai. Fungsi ini akan mengubah tampilan detail paket dari disembunyikan menjadi ditampilkan atau sebaliknya.

Perlu dipastikan bahwa variabel $title, $subtitle, $price, dan $rating yang digunakan dalam elemen-elemen <p> di dalam elemen dengan ID "package1-details" telah didefinisikan sebelumnya dalam kode PHP. Hal yang sama berlaku untuk variabel $title2, $subtitle2, $price2, $rating2, $title3, $subtitle3, $price3, dan $rating3 yang digunakan dalam elemen-elemen <p> di dalam elemen dengan ID "package2-details" dan "package3-details".
