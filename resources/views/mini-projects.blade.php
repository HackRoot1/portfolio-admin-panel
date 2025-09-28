<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="Portfolio of Saurabh Damale, a Full Stack Developer showcasing projects, skills, and contact information."
        />
        <meta
            name="keywords"
            content="Saurabh Damale, Full Stack Developer, Web Developer, Portfolio, Projects, Skills, HTML, CSS, JavaScript, PHP, MySQL, React, Node.js"
        />
        <meta name="author" content="Saurabh Damale" />
        <meta property="og:title" content="Portfolio - Saurabh Damale" />
        <meta
            property="og:description"
            content="Explore the portfolio of Saurabh Damale, featuring web development projects, skills, and contact information."
        />
        <meta property="og:image" content="URL_to_your_image" />
        <meta
            property="og:url"
            content="https://saurabh-damale-portfolio.vercel.app/"
        />
        <!-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio - Saurabh Damale">
    <meta name="twitter:description" content="Explore the portfolio of Saurabh Damale, featuring web development projects, skills, and contact information.">
    <meta name="twitter:image" content="URL_to_your_image"> -->
        <link
            rel="canonical"
            href="https://saurabh-damale-portfolio.vercel.app/"
        />

        <title>Portfolio - Saurabh Damale</title>

        <!-- ======== email.js cdn link =========== -->
        <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

        <!-- ===== Iconscout CSS ====== -->
        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
        />

        <!-- ======== jquery link ========= -->
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
        ></script>

        <link rel="stylesheet" href="./assets/css/style.css" />

        <!-- ================ Font Awesome Icons =========== -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- ================== Favicon ================== -->
        <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    </head>
    <body>
        <!-- ========================= Navigation Bar ======================= -->
        <section id="top-scrollbar">
            <i class="fa-solid fa-angle-up"></i>
        </section>

        <script>
            topScrollbar = document.getElementById("top-scrollbar");
            window.addEventListener("scroll", function () {
                topScrollbar.style.opacity = window.scrollY > 30 ? "1" : "0";
            });

            topScrollbar.addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });
        </script>

        <nav>
            <div class="logo"><a href="{{ route('home') }}">Portfolio</a></div>
            <div class="nav-links">
                <a href="{{ route('home') }}#about-section">About Me</a>
                <a href="{{ route('home') }}#skills-section">Skills</a>
                <a href="{{ route('home') }}#project-section">Projects</a>
                <a href="{{ route('home') }}#education-section">Education</a>
                <a href="https://hackroot1.hashnode.dev/">Blogs</a>
                <a href="{{ route('home') }}#contact-section">Contact</a>
            </div>
            <div class="switch-btn">
                <div class="switch-toggle-btn">
                    <div class="toggle-icon">
                        <!-- <i class="uil uil-brightness"></i> -->
                        <i class="uil uil-moon"></i>
                    </div>
                </div>
            </div>
            <div class="sidebar-btn">
                <i class="uil uil-bars"></i>
                <!-- <i class="uil uil-times"></i> -->
            </div>
        </nav>

        <section id="sidebar-nav">
            <div class="sidebar-nav-section">
                <div class="nav-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('home') }}#about-section">About Me</a>
                    <a href="{{ route('home') }}#skills-section">Skills</a>
                    <a href="{{ route('home') }}#project-section">Projects</a>
                    <a href="{{ route('home') }}#education-section">Education</a>
                    <a href="https://hackroot1.hashnode.dev/">Blogs</a>
                    <a href="{{ route('home') }}#contact-section">Contact</a>
                </div>
                <div class="switch-btn">
                    <div class="switch-text">Appearance</div>
                    <div class="switch-toggle-btn">
                        <div class="toggle-icon">
                            <!-- <i class="uil uil-brightness"></i> -->
                            <i class="uil uil-moon"></i>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <div class="link-items">
                        <a
                            href="https://www.instagram.com/algoatlas?igsh=YnlhMTY0bmMybTJt"
                            aria-label="Go to my instagram profile"
                        >
                            <i class="uil uil-instagram"></i>
                        </a>
                    </div>
                    <div class="link-items">
                        <a
                            href="https://github.com/HackRoot1"
                            aria-label="Go to my github account"
                        >
                            <i class="uil uil-github"></i>
                        </a>
                    </div>
                    <div class="link-items">
                        <a href="#" aria-label="Go to my twitter account">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                    <div class="link-items">
                        <a
                            href="https://youtube.com/@algoatlas11?si=HgcdQUggvoQ5z6IK"
                            aria-label="Go to my youtube channel"
                        >
                            <i class="uil uil-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $(document).ready(function () {
                $("#sidebar-nav").hide();

                $(".sidebar-btn").on("click", function () {
                    $("#sidebar-nav").slideToggle(1000);
                    $(".sidebar-btn i").toggleClass("uil-bars");
                    $(".sidebar-btn i").toggleClass("uil-times");
                    $("main").fadeToggle();
                });

                $("#sidebar-nav a").on("click", function () {
                    $("#sidebar-nav").slideUp(1000);
                    $(".sidebar-btn i").toggleClass("uil-bars");
                    $(".sidebar-btn i").toggleClass("uil-times");
                    $("main").fadeToggle();
                });
            });
        </script>
        <!-- ========================= End Navigation ======================= -->

        <!-- ========================= Main Section ========================= -->
        <main>
            <section id="project-section">
                <div class="title">My Mini Projects</div>
                <div class="project-list">
                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/ticTacToe.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Tic Tac Toe Game</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, React.js
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/tic-tac-toe"
                                        target="_blank"
                                        >Code <i class="fas fa-arrow-right"></i
                                    ></a>
                                    <a
                                        href="https://tic-tac-toe-lovat-chi.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/ageCalculator.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Age Calculator</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/JS-Projects/tree/main/AgeCalculator"
                                        target="_blank"
                                        >Code <i class="fas fa-arrow-right"></i
                                    ></a>
                                    <a
                                        href="https://age-calculator-saurabh-damales-projects.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/analogClock.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Analog Clock</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/JS-Projects/tree/main/Analog-clock"
                                        target="_blank"
                                        >Code <i class="fas fa-arrow-right"></i
                                    ></a>
                                    <a
                                        href="https://analog-clock-amber-two.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/countdownTimer.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Countdown Timer</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/JS-Projects/tree/main/CountdownTimer"
                                        target="_blank"
                                        >Code <i class="fas fa-arrow-right"></i
                                    ></a>
                                    <a
                                        href="https://countdown-timer-liard-ten.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/stopWatch.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Stop Watch</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/JS-Projects2/tree/main/StopWatch"
                                        target="_blank"
                                        >Code <i class="fas fa-arrow-right"></i
                                    ></a>
                                    <a
                                        href="https://stop-watch-azure-theta.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="project-section">
                <div class="title">UI Projects</div>
                <div class="project-list">
                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/e-commerce-website.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">E-commerce Website</div>
                                <div class="description">
                                    <b>Technologies Used:</b> React.js, Tailwind
                                    CSS
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/E-commerce-template"
                                        target="_blank"
                                        >Code <i class="fa-brands fa-github"></i
                                    ></a>
                                    <a
                                        href="https://e-commerce-template-chi.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/restaurant-landing-page.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Restaurant Landing Page</div>
                                <div class="description">
                                    <b>Technologies Used:</b> React.js, Tailwind
                                    CSS
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/restaurant-landing-page-react-tailwind"
                                        target="_blank"
                                        >Code <i class="fa-brands fa-github"></i
                                    ></a>
                                    <a
                                        href="https://restaurant-landing-page-react-tailwind.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="
                                            --img: url(../images/restaurant-landing-page-2.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">
                                    Restaurant Landing Page 2
                                </div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS, JS,
                                    Tailwind CSS
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/template-4"
                                        target="_blank"
                                        >Code <i class="fa-brands fa-github"></i
                                    ></a>
                                    <a
                                        href="https://restaurant-template-teal.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- ========================= End Main Section ===================== -->

        <hr />

        <footer>
            Designed With
            <i class="fa-solid fa-heart" style="color: red; margin: 0 5px"></i>
            By Saurabh Damale
        </footer>

        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
        ></script>
        <script src="./assets/js/theme.js"></script>
    </body>
</html>
