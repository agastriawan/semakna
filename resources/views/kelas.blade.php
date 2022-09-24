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
    <link rel="stylesheet" href="./assets/css/form.css">
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
                        <a href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/">Jadwal Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Pemateri</a>
                    </li>
                    <li class="nav-item">
                        <a href="/">About</a>
                    </li>
                </ul>

                <button class="nav-toggle-btn">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </nav>

        </header>





        <main>
            <!--- #HOME SECTION-->

            <!--
        - #ABOUT SECTION
      -->

            <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">


                        <img src="./assets/images/post.jpeg" alt="about person" class="about-img">
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

        </main>


        <center>
            <div class="container-a">
                <div class="title">Daftar Kelas</div>
                <div class="content">
                    <form action="/kelas" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Nama Lengkap</span>
                                <input type="text" placeholder="Muhammad Azkanela" name="nama" id="nama"
                                    required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="email" placeholder="semakna@gmail.com" name="email" id="email"
                                    required>
                            </div>
                            <div class="input-box">
                                <span class="details">Nomer Telepon</span>
                                <input type="number" placeholder="08817262921" name="notelp" id="notelp" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Alamat</span>
                                <input type="text" placeholder="Depok, Jawa Barat" name="alamat" id="alamat"
                                    required>
                            </div>
                            <div class="input-box">
                                <span class="details">Instansi / Sekolah</span>
                                <input type="text" placeholder="SMKN 1 Depok" name="instansi" id="instansi"
                                    required>
                            </div>
                            <div class="input-box">
                                <span class="details">Judul Kelas</span>
                                <input type="text"
                                    placeholder="Jurus Jitu Mendidik & Menasehati Anak Agar Membekas Di Hati Instructor"
                                    name="judul" id="judul" required>
                            </div>
                        </div>
                        <button type="submit">Daftar</button>
                    </form>
                </div>
            </div>
        </center>




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
