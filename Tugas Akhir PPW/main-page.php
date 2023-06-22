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
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/main-styles.css">
        <script>
            function toggleDetails(packageId) {
                var detailsElement = document.getElementById(packageId + "-details");
                if (detailsElement.style.display === "none") {
                    detailsElement.style.display = "block";
                } else {
                    detailsElement.style.display = "none";
                }
            }
        </script>
        <title>GetPhoto</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">GetPhoto</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#discover" class="nav__link">Discover</a>
                        </li>
                        <li class="nav__item">
                            <a href="#place" class="nav__link">Pack</a>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <section class="home home__section" id="home">
                <img src="assets/img/home1.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle">Find Your Perfect Image</span>
                        <h1 class="home__data-title">Discover <br> Stunning <b>High-Quality <br> Photographs</b></h1>
                        <a href="#about" class="button">Explore>></a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </section>

            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">More Information <br> About the Finest Photography</h2>
                        <p class="about__description">Experience the beauty and serenity of breathtaking destinations captured in stunning photographs. With our special discounts, you can find the perfect place that matches your preferences. We'll be your guide every step of the way. Don't wait any longer, secure your spot now and embark on a remarkable journey.
                        </p>
                        <a href="#place" class="button">Buy Now!</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/about4.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/about.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="discover section" id="discover">
                <h2 class="section__title">Delve into  <br> Beautiful Imagery</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                            </div>
                        </div>
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                            </div>
                        </div>
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                            </div>
                        </div>          
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover4.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="experience section">
                <h2 class="section__title">With Our Experience, <br> We are Ready to Support You</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">20</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">600+</h2>
                            <span class="experience__description">Album</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">10.000+</h2>
                            <span class="experience__description">Sold</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/experience.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/experience3.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <section class="video section">
                <h2 class="section__title">Videography</h2>

                <div class="video__container container">
                    <p class="video__description">We look forward to hearing from you as you embark on your journey in selling footage.
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/mount.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <section class="place section" id="place">
                <h2 class="section__title">Choose Your Pack</h2>

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

            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a 
                            special 30% discount.
                        </p>
    
                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">
    
                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors1.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors2.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors4.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors5.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">GetPhoto</h3>
                        <p class="footer__description">Discover your desired <br> photograph, 
                            we offer you the <br> perfect visual experience.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>
    
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
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 Mahendra Yuda. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>