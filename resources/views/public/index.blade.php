<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Auth::check() ? Auth::user()->role . 'Page' : 'GuestPage' }}</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

        /* HTML */
        * {
            scroll-behavior: smooth;
            font-family: "Montserrat";
        }

        html {
            overflow-x: hidden;
        }

        section {
            overflow: auto;
        }

        /* Navbar */
        .active {
            background-color: #01162b;
            border-radius: 10px;
            border: 1px solid white;
        }

        .navbar {
            background-color: #00274D;
            z-index: 1000;
            position: fixed;
            width: 100%;
        }

        /* Company */
        .company {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .company::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url("https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/home.jpg?raw=true");
            background-size: cover;
            filter: brightness(0.7) contrast(1.1) saturate(0.8) hue-rotate(-10deg);
            z-index: -1;
        }

        .company .name {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        .company .name h1 {
            color: white;
            font-weight: 600;
            font-size: 3rem;
            z-index: 1;
        }

        .company .visi-misi {
            height: auto;
            display: flex;
            z-index: 1;
        }

        .company p {
            color: #fff;
            z-index: 1;
            text-align: justify;
        }

        .company::after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 30%;
            bottom: 0;
            background: linear-gradient(0deg,
                    rgba(1, 1, 3, 1) 2%,
                    rgba(255, 255, 255, 0) 50%);
        }

        /* Visi Misi */
        .visi-misi {
            min-height: 100vh;
            position: relative;
        }

        .visi-misi::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url("https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/shipping.jpg?raw=true");
            background-size: cover;
            filter: brightness(0.7) contrast(1.1) saturate(0.8) hue-rotate(-10deg);
            z-index: -1;
        }

        .visi-misi p {
            text-align: justify;
            word-spacing: 5px;
            font-size: large;
            font-weight: 500;
        }

        .visi-misi h2 {
            color: black;
            z-index: 1;
            text-align: start;
        }

        /* Layanan */
        .layanan img {
            width: 100%;
            aspect-ratio: 1/0.5;
            object-fit: cover;
            padding: 0;
            border-radius: 10px 10px 0 0;
        }

        .layanan:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        /* Kontak */
        #contact {
            background-color: gray;
            color: whitesmoke;
        }

        .garis {
            background-color: whitesmoke;
            color: gray;
            height: 1px;
            width: 170px;
        }

        .isi {
            text-align: left;
            font-size: small;
        }

        a {
            text-decoration: none;
            color: white !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">PT NAMA PERUSAHAAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cekResiPublic">Cek Resi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginForm">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main -->
    <main>
        <section class="company" id="home">
            <div class="name">
                <h1 class="title-company">NAMA PERUSAHAAN</h1>
            </div>
            <div class="container mt-4">
                <p class="sejarah mt-3 text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta alias
                    molestiae exercitationem sequi, a eveniet dolores recusandae nobis
                    optio placeat inventore incidunt illum officia! Doloremque, ex sit.
                    Perspiciatis, asperiores dolorem. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Et est incidunt quas, fuga commodi
                    maxime corporis ex, sapiente accusamus reprehenderit aspernatur
                    iusto optio suscipit repudiandae distinctio quisquam neque nam
                    dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptate obcaecati quos sed consequatur dolore dicta nesciunt ipsum
                    pariatur, laboriosam eius dolorem accusamus omnis quod tempore
                    nostrum eaque perferendis quo error.
                </p>
            </div>
        </section>
        <section class="visi-misi mt-5" id="about">
            <div class="visi-misi-content container mt-5 ps-5 pe-5 row">
                <div class="visi col-5 offset-1">
                    <h2 class="title-visi">Visi</h2>
                    <p class="visi-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis officiis aperiam inventore totam placeat velit maiores
                        vitae minus fugit obcaecati a facilis, ratione dolore voluptate
                        quo debitis deserunt iste porro.
                    </p>
                </div>
                <div class="misi col-5 offset-1">
                    <h2 class="title-misi">Misi</h2>
                    <p class="misi-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis officiis aperiam inventore totam placeat velit maiores
                        vitae minus fugit obcaecati a facilis, ratione dolore voluptate
                        quo debitis deserunt iste porro.
                    </p>
                </div>
            </div>
        </section>
        <div id="service" class="container-fluid mt-5 py-2">
            <h2 class="text-center">Layanan Kami</h2>
            <div class="row py-4">
                <div class="col-md-4 mt-4 layanan">
                    <div class="card" style="min-height: 375px; border-radius: 10px">
                        <img src="https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/cargo.jpg?raw=true" alt="" />
                        <div class="card-body text-left">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">
                                lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 layanan">
                    <div class="card" style="min-height: 375px; border-radius: 10px">
                        <img src="https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/shipping.jpg?raw=true" alt="" />
                        <div class="card-body text-left">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">
                                lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 layanan">
                    <div class="card" style="min-height: 375px; border-radius: 10px">
                        <img src="https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/air-freight.jpg?raw=true" alt="" />
                        <div class="card-body text-left">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">
                                lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 layanan">
                    <div class="card" style="min-height: 375px; border-radius: 10px">
                        <img src="https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/cargo.jpg?raw=true" alt="" />
                        <div class="card-body text-left">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">
                                lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 layanan">
                    <div class="card" style="min-height: 375px; border-radius: 10px">
                        <img src="https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/shipping.jpg?raw=true" alt="" />
                        <div class="card-body text-left">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">
                                lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 layanan">
                    <div class="card" style="min-height: 375px; border-radius: 10px">
                        <img src="https://github.com/DhamarPutra/dhamarputra.github.io/blob/main/logistik_collab/assets/img/air-freight.jpg?raw=true" alt="" />
                        <div class="card-body text-left">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">
                                lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam, quos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe id="cekResiPublic" src="/cekResiPublic" frameborder="0" class="container"></iframe>
        <section id="maps" class="mb-5 map-section text-center">
            <div class="container">
                <h2>Lokasi Kami</h2>
                <div class="map-responsive">
                    <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.378960321821!2d106.68897417441168!3d-6.344945862075961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e50078ae00b1%3A0x81a60674ba49b072!2sUnpam%20Viktor!5e0!3m2!1sid!2sid!4v1717081022293!5m2!1sid!2sid" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
    </main>
    <!-- Main End -->

    <!-- Footer -->
    <footer id="contact" class="container-fluid py-3">
        <div class="row">
            <div class="col">
                <h4>About Us</h4>
                <p class="garis">garis</p>
                <div class="row">
                    <p class="col isi">
                        <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                            ullam, magnam labore iure aspernatur nisi, cupiditate harum
                            laboriosam nihil veritatis iusto minima tempore ratione nesciunt
                            dolore minus rerum optio! Blanditiis.</i>
                    </p>
                    <p class="col isi">
                        <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                            ullam, magnam labore iure aspernatur nisi, cupiditate harum
                            laboriosam nihil veritatis iusto minima tempore ratione nesciunt
                            dolore minus rerum optio! Blanditiis.</i>
                    </p>
                </div>
            </div>
            <div class="col isi">
                <h4>Factory</h4>
                <p class="garis">garis</p>
                <p>Lorem Ipsum</p>
                <p>Lorem Ipsum</p>
                <p>Lorem Ipsum</p>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col">
                <h4>Social Media</h4>
                <p class="garis">garis</p>
                <div class="row">
                    <p class="logo">
                        <a href="#"><i class="fa-brands fa-instagram col fa-lg text-white"></i></a>
                        <a href="#"><i class="fa-solid fa-x col fa-lg text-white"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok col fa-lg text-white"></i></a>
                    </p>
                    <div class="row">
                        <p class="logo">
                            <a href="#"><i class="fa-brands fa-linkedin col fa-lg text-white"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook col fa-lg text-white"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>Contact us</h4>
                <p class="garis">garis</p>
                <div>
                    <p>
                        <a href="#"><i class="fa-solid fa-headset fa-lg text-white"></i> (021)
                            88888</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa-solid fa-envelope fa-lg text-white"></i>
                            loremipsum@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Script -->
    <script src="https://kit.fontawesome.com/d10ed69d92.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // ScrollReveal
        ScrollReveal({
            distance: "80px",
            duration: 2000,
            delay: 200,
        });
        ScrollReveal().reveal(".name, .title-company", {
            origin: "top"
        });
        ScrollReveal().reveal(".sejarah", {
            origin: "bottom"
        });
        ScrollReveal().reveal(".title-visi, .visi", {
            origin: "left"
        });
        ScrollReveal().reveal(".title-misi, .misi", {
            origin: "right"
        });

        // Navbar
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll(".nav-item");

            navLinks.forEach((link) => {
                link.addEventListener("click", function() {
                    navLinks.forEach((link) => link.classList.remove("active"));

                    this.classList.add("active");
                });
            });
        });

        function resizeIframe() {
            var iframe = document.getElementById('cekResiPublic');
            if (iframe) {
                iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
            }
        }
        document.getElementById('cekResiPublic').onload = resizeIframe;
        window.onresize = resizeIframe;
    </script>
</body>

</html>