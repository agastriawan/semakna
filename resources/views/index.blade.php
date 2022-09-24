<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educator - Online Courses & Education</title>

    <!--
    - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media_queries.css">
    <link rel="stylesheet" href="./assets/css/animation.css">

    <!--
    - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

</head>

<body>

    <!--- main container-->

    <div class="container">

        <!--- #HEADER-->

        <header>

            <nav class="navbar">

                <div class="navbar-brand">
                    <img src="./assets/images/semakna.png" alt="Educator Logo">
                </div>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#event">Jadwal Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#instructor">Pemateri</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about">About</a>
                    </li>
                </ul>

                <a style="text-decoration: none;" href="/kelas">
                    <button class="btn btn-primary">
                        <p class="btn-text">Daftar Sekarang</p>
                        <span class="square"></span>
                    </button>
                </a>

                <button class="nav-toggle-btn">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </nav>

        </header>





        <main>
            <!--- #HOME SECTION-->

            <section class="home" id="home">

                <div class="deco-shape shape-1">
                    <img src="./assets/images/shape-1.png" alt="art shape" width="70">
                </div>
                <div class="deco-shape shape-2">
                    <img src="./assets/images/shape-2.png" alt="art shape" width="55">
                </div>
                <div class="deco-shape shape-3">
                    <img src="./assets/images/shape-3.png" alt="art shape" width="120">
                </div>
                <div class="deco-shape shape-4">
                    <img src="./assets/images/shape-4.png" alt="art shape" width="30">
                </div>

                <div class="home-left">

                    <p class="section-subtitle">Unlocking Your Potential Batch 2</p>

                    <h1 class="main-heading">
                        Jurus Jitu Mendidik & Menasehati Anak Agar Membekas Di Hati
                        <span class="underline-img">Instructor <img src="./assets/images/banner-line.png"
                                alt="line"></span>
                    </h1>

                    <p>Disini ayah & bunda akan belajar sebanyak 10x pertemuan mulai dari prophetic parenting, memahami
                        karakter anak, Gadget dan anak generasi sekarang, cara komunikasi efektif hingga Tips menasehati
                        anak agar membekas </p>

                    <p class="section-text">
                        <center>Bersama</center>
                        <b> Kak Erlan Iskandar </b> l Kak Yogi Kusprayogi l <b> Kak Muhammad Iqbal </b>l Kak Yogi Triadi
                        l <b>Kak
                            Halfizh</b>
                    </p>

                </div>

            </section>





            <!--
        - #COURSE CATEGORY SECTION
      -->

            <section class="category">

                <p class="section-subtitle">Features</p>

                <h6 class="section-title">Apa Saja yang Akan di Pelajari di Kelas Ini ?</h6>

                <ul class="course-item-group">

                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-2.png" alt="category icon"
                                class="category-icon default">

                            <img src="./assets/images/course-category-icon-2-w.png" alt="category icon white"
                                class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">Learn Data Science</a>
                            </h3>

                            <p class="category-subtitle">Data is Everything</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-2.png" alt="category icon"
                                class="category-icon default">

                            <img src="./assets/images/course-category-icon-2-w.png" alt="category icon white"
                                class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">Business Strategy</a>
                            </h3>

                            <p class="category-subtitle">Improve your business</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-3.png" alt="category icon"
                                class="category-icon default">

                            <img src="./assets/images/course-category-icon-3-w.png" alt="category icon white"
                                class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">Learn Art & Design</a>
                            </h3>

                            <p class="category-subtitle">Fun & Challenging</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-4.png" alt="category icon"
                                class="category-icon default">

                            <img src="./assets/images/course-category-icon-4-w.png" alt="category icon white"
                                class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">Learn Lifestyle</a>
                            </h3>

                            <p class="category-subtitle">New Skills, New You</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-5.png" alt="category icon"
                                class="category-icon default">

                            <img src="./assets/images/course-category-icon-5-w.png" alt="category icon white"
                                class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">Learn Marketing</a>
                            </h3>

                            <p class="category-subtitle">Improve your business</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-6.png" alt="category icon"
                                class="category-icon default">

                            <img src="./assets/images/course-category-icon-6-w.png" alt="category icon white"
                                class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">Learn Finance</a>
                            </h3>

                            <p class="category-subtitle">Fun & Challenging</p>
                        </div>

                    </li>

                </ul>

            </section>

            <!--
        - #EVENT SECTION
      -->

            <section class="event" id="event">

                <div class="event-left">

                    <div class="event-banner">
                        <img src="./assets/images/post.jpeg" alt="event banner" class="banner-img">
                    </div>

                </div>

                <div class="event-right">

                    <p class="section-subtitle">Jadwal Kelas</p>

                    <h2 class="section-title">Bergabung dalam kelas kami</h2>

                    <div class="event-card-group">

                        <div class="event-card">

                            <div class="content-left">
                                <p class="day">13</p>
                                <p class="month">Agustus, 2022</p>
                            </div>

                            <div class="content-right">
                                <div class="schedule">
                                    <p class="time">Jakarta</p>
                                    <p class="place">Indonesia</p>
                                </div>
                                <a href="#" class="event-name">Unlocking Your Potential</a>
                            </div>

                        </div>

                        <div class="event-card">

                            <div class="content-left">
                                <p class="day">Live</p>
                                <p class="month">On</p>
                            </div>

                            <div class="content-right">
                                <div class="schedule">
                                    <p class="time">10:30 s/d 14:30 WIB</p>
                                    <p class="place">Link Ekslusive</p>
                                </div>

                                <a href="#" class="event-name">Zoom Meetings & Youtube</a>
                            </div>

                        </div>

                        <div class="event-card">

                            <div class="content-left">
                                <p class="day">IDR</p>
                            </div>

                            <div class="content-right">
                                <div class="schedule">
                                    <p class="time"> E-Sertifikat </p>
                                    <p class="place">10 kali Pertemuan Online</p>
                                </div>

                                <a href="#" class="event-name"><s style="color: red">100.000</s> 79.000</a>
                            </div>

                        </div>

                        <a style="text-decoration: none;" href="/kelas">
                            <button class="btn btn-primary">
                                <p class="btn-text">Daftar Sekarang</p>
                                <span class="square"></span>
                            </button>
                        </a>

                    </div>

                </div>

            </section>

            <section class="instructor" id="instructor">

                <p class="section-subtitle">Pemateri</p>

                <h2 class="section-title">Para Pemateri dalam kelas "Unlocking Your Potential Batch 2"</h2>

                <div class="instructor-grid">

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./assets/images/instructor-1.jpg" alt="instructor louis sullivan">

                            <div class="social-link">
                                <a href="#" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>

                                <a href="#" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>

                                <a href="#" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </div>
                        </div>

                        <h4 class="instructor-name">Bang Steve</h4>

                        <p class="instructor-title">Pemateri</p>

                    </div>

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./assets/images/instructor-2.jpg" alt="instructor camden david">

                            <div class="social-link">
                                <a href="#" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>

                                <a href="#" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>

                                <a href="#" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </div>
                        </div>

                        <h4 class="instructor-name">Bang Kevin</h4>

                        <p class="instructor-title">Pemateri</p>

                    </div>

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./assets/images/instructor-3.jpg" alt="instructor fiona dean">

                            <div class="social-link">
                                <a href="#" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>

                                <a href="#" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>

                                <a href="#" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </div>
                        </div>

                        <h4 class="instructor-name">Kak Elli</h4>

                        <p class="instructor-title">Pemateri</p>

                    </div>

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./assets/images/instructor-4.jpg" alt="instructor cherish sosa">

                            <div class="social-link">
                                <a href="#" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>

                                <a href="#" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>

                                <a href="#" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </div>
                        </div>

                        <h4 class="instructor-name">Kak Cymberly</h4>

                        <p class="instructor-title">Pemateri</p>

                    </div>

                </div>

            </section>




            <!--
        - #ABOUT SECTION
      -->

            <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">

                        <img src="./assets/images/back-3.png" alt="about person" class="about-img">
                    </div>

                </div>

                <div class="about-right">

                    <p class="section-subtitle">Tentang Kelas</p>

                    <h2 class="section-title">Kami Memiliki Kelas Online Terbaik</h2>

                    <p class="section-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsam eos et, soluta in
                        voluptate
                        dignissimos pariatur veniam dolorum unde delectus reprehenderit, quas quibusdam dolore? Sint
                        libero quasi,
                        quas laborum doloribus aliquam incidunt magnam ut praesentium culpa reprehenderit mollitia sit a
                        earum
                        velit? Ut consequuntur dolore vero qui quas corrupti.
                    </p>

                    <ul class="about-ul">

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>Suspendisse nunc massa, pellentesque eu nibh eget.</p>
                        </li>

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>Suspendisse nunc massa, pellentesque eu nibh eget.</p>
                        </li>

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>Suspendisse nunc massa, pellentesque eu nibh eget.</p>
                        </li>

                    </ul>

                </div>

            </section>









            <section class="testimonials" style="margin-bottom: 10%">

                <div class="testimonials-left">

                    <p class="section-subtitle">Testimonial</p>

                    <h2 class="section-title">
                        Apa Kata Klien Kami Tentang Kami</h2>

                    <p class="section-text">
                        Banyak orang yang ingin menjadi penulis dan memiliki karya sendiri, tapi hanya sekedar ingin dan
                        tak mau
                        berusaha. Hari
                        ini mari bulatkan tekad lalu mulailah menulis.
                    </p>

                </div>

                <div class="testimonials-right">

                    <div class="testimonials-card">
                        <img src="./assets/images/quote.png" alt="quote icon" class="quote-img">

                        <p class="testimonials-text">
                            “Alhamdulillah ‘Ala Kulli Hall menurut ana Masya Allah bagus, pematerinya ramah, teman-teman
                            yang lain
                            juga asik,
                            antusias dan semangat belajar menulisnya tinggi, materi yang disampaikan juga jelas dan
                            mudah dipahami.
                            Insya Allah
                            membantu dalam mengembangkan skill menulis apalagi buat ana yang masih pemula.😊”
                        </p>

                        <div class="testimonials-client">

                            <div class="client-img-box">
                                <img src="./assets/images/agas.jpeg" alt="client christine rose">
                            </div>

                            <div class="client-detail">
                                <h4 class="client-name">Agas Triawan</h4>

                                <p class="client-title">Pelajar</p>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

            <!--- #CONTACT-->
            <section class="contact">

                <div class="contact-card" id="contact">
                    <img src="./assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

                    <h2>Mulai Kelas Online Bersama Kami</h2>

                    <a style="text-decoration: none;" href="/kelas">
                        <button class="btn btn-primary">
                            <p class="btn-text">Daftar Sekarang</p>
                            <span class="square"></span>
                        </button>
                    </a>
                </div>

            </section>

        </main>





        <!--
      - #FOOTER
    -->

        <footer>

            <div class="footer-grid">

                <div class="grid-item">

                    <div class="footer-logo">
                        <img src="./assets/images/semakna.png" alt="educator logo white">
                    </div>

                    <p class="footer-text">
                        Gg. Jamat No.31 RT 02/021, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16475
                    </p>

                    <div class="social-link">
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </div>

                </div>

                <ul class="grid-item">

                    <h4 class="item-heading">Our Link</h4>

                    <li class="list-item">
                        <a href="#home">Home</a>
                    </li>

                    <li class="list-item">
                        <a href="#event">Jadwal Kelas</a>
                    </li>

                    <li class="list-item">
                        <a href="#about">About</a>
                    </li>


                </ul>

                <ul class="grid-item">

                    <h4 class="item-heading">Other Link</h4>

                    <li class="list-item">
                        <a href="#">Instructor</a>
                    </li>

                    <li class="list-item">
                        <a href="https://wa.me/+6289601673536">Contact Us</a>
                    </li>


                </ul>

            </div>

        </footer>

    </div>





    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
