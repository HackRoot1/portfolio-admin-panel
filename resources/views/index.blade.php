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
            content="Saurabh Damale, saurabh damale, saurabh, damale, Full Stack Developer, Web Developer, Portfolio, Projects, Skills, HTML, CSS, JavaScript, PHP, MySQL, React, Node.js"
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
        <!-- 
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="Portfolio - Saurabh Damale">
            <meta name="twitter:description" content="Explore the portfolio of Saurabh Damale, featuring web development projects, skills, and contact information.">
            <meta name="twitter:image" content="URL_to_your_image"> 
        -->
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
                <a href="#about-section">About Me</a>
                <a href="#skills-section">Skills</a>
                <a href="#project-section">Projects</a>
                <a href="#education-section">Education</a>
                <a href="https://hackroot1.hashnode.dev/">Blogs</a>
                <a href="#contact-section">Contact</a>
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
                    <a href="#">Home</a>
                    <a href="#about-section">About Me</a>
                    <a href="#skills-section">Skills</a>
                    <a href="#project-section">Projects</a>
                    <a href="#education-section">Education</a>
                    <a href="https://hackroot1.hashnode.dev/">Blogs</a>
                    <a href="#contact-section">Contact</a>
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
            <!-- 1. Fixed  Sidebar  -->

            <!-- 2. About Section -->
            <section id="about-section">
                <div class="about-information">
                    <div class="note">Hello I'm</div>
                    <div class="name">Saurabh Damale</div>
                    <div class="role">Full Stack Developer</div>
                    <div class="links">
                        <a
                            href="./assets/files/Saurabh_Damale_CV.pdf"
                            download="CV.pdf"
                            >Download CV
                            <span><i class="uil uil-download-alt"></i></span
                        ></a>
                        <a
                            href="./assets/files/saurabh-damale.pdf"
                            download="resume.pdf"
                            >Download Resume
                            <span><i class="uil uil-download-alt"></i></span
                        ></a>
                    </div>
                </div>
                <div class="about-illustration">
                    <div class="square-rotate1"></div>
                    <div class="text">Saurabh</div>
                    <div class="square-rotate2"></div>
                </div>
            </section>

            <hr />
            <!-- 3. Skills Section -->
            <section id="skills-section">
                <div class="title">My Skills</div>
                <div class="skill-list">
                    @foreach ($skills as $skill)
                    <div>
                        <span style="--i: {{ $skill->color }}"
                            ><i class="{{ $skill->icon }}"></i
                        ></span>
                        {{ $skill->name }}
                    </div>
                    @endforeach
                    
                </div>
            </section>

            <hr />

            <!-- 4. Project Section -->
            <section id="project-section">
                <div class="title">My Projects</div>
                <div class="project-list">
                    <div class="box">
                        <div class="box-item">
                            <div class="box-info">
                                <div class="background-img">
                                    <div
                                        class="img"
                                        style="--img: url(../images/todo.png)"
                                    ></div>
                                </div>
                                <div class="title">To Do WebApp</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, PHP, MySQL, JQuery, Ajax
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/to_do_webapp"
                                        target="_blank"
                                        >Core PHP<i
                                            class="fa-brands fa-github"
                                        ></i
                                    ></a>
                                    <a
                                        href="https://github.com/HackRoot1/laravel-to-do-webapp"
                                        target="_blank"
                                        >Laravel
                                        <i class="fa-brands fa-github"></i
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
                                        style="--img: url(../images/hms.png)"
                                    ></div>
                                </div>
                                <div class="title">HMS</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, PHP, MySQL
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/HMS"
                                        target="_blank"
                                        >Core PHP<i
                                            class="fa-brands fa-github"
                                        ></i
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
                                            --img: url(../images/job_portal.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">JobSpere</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, PHP, MySQL
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/JobSphere"
                                        target="_blank"
                                        >Core PHP<i
                                            class="fa-brands fa-github"
                                        ></i
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
                                        style="--img: url(../images/rms.png)"
                                    ></div>
                                </div>
                                <div class="title">CraveBox</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, PHP, MySQL
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/CraveBox"
                                        target="_blank"
                                        >Core PHP<i
                                            class="fa-brands fa-github"
                                        ></i
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
                                            --img: url(../images/book-review-app.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Book Review App</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, Bootstrap, Ajax, PHP, MySQL,
                                    Laravel
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/laravel-book-review-app"
                                        target="_blank"
                                        >Laravel<i
                                            class="fa-brands fa-github"
                                        ></i
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
                                            --img: url(../images/chatApp.png);
                                        "
                                    ></div>
                                </div>
                                <div class="title">Chat WebApp</div>
                                <div class="description">
                                    <b>Technologies Used:</b> HTML, CSS,
                                    JavaScript, React.js, Firebase
                                </div>
                                <div class="links">
                                    <a
                                        href="https://github.com/HackRoot1/react-firebase-chatapp"
                                        target="_blank"
                                        >Code <i class="fa-brands fa-github"></i
                                    ></a>
                                    <a
                                        href="https://chatapp-omega-fawn.vercel.app/"
                                        target="_blank"
                                        >Visit <i class="fas fa-globe"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="more-projects-link">
                    <a href="{{ route('miniprojects') }}">
                        <span>More Projects</span>
                        <span> <i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </section>

            <hr />

            <!-- 5. Certificates Section -->
            <section id="certificate-section">
                <div class="title">My Certificates</div>
                <div class="certificate-list">
                    <div class="row">
                        <img src="./assets/images/CSCFWB7145.png" alt="" />
                        <div class="layer">
                            <h5>WebBuzz: Web Development Challenge</h5>
                            <div><span>Issued by:</span> CypherSage</div>
                            <div><span>Date Earned:</span> 22 Oct 2024</div>
                            <a
                                href="https://saurabh-damale-portfolio.vercel.app/assets/images/CSCFWB7145.png"
                                >View Certificate</a
                            >
                        </div>
                    </div>

                    <div class="row">
                        <img src="./assets/images/techXpression.jpg" alt="" />
                        <div class="layer">
                            <h5>Code Conversion Event</h5>
                            <div>
                                <span>Issued by:</span> B. K. Birla College,
                                Kalyan
                            </div>
                            <div><span>Date Earned:</span> 12 March 2022</div>
                            <a
                                href="https://saurabh-damale-portfolio.vercel.app/assets/images/techXpression.jpg"
                                >View Certificate</a
                            >
                        </div>
                    </div>

                    <div class="row">
                        <img src="./assets/images/apiCertificate.jpg" alt="" />
                        <div class="layer">
                            <h5>Master the Art of API Testing</h5>
                            <div>
                                <span>Issued by:</span> Techdome Solutions Pvt.
                                Ltd.
                            </div>
                            <div><span>Date Earned:</span> 05 Dec 2024</div>
                            <a
                                href="https://unstop.com/certificate-preview/d0e426ed-2673-428b-ba60-bc5acf5037b7"
                                >View Certificate
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <img src="./assets/images/hr.jpg" alt="" />
                        <div class="layer">
                            <h5>Analytica: HR Beyond Spreadsheets</h5>
                            <div><span>Issued by:</span> IIM Rohtak</div>
                            <div><span>Date Earned:</span> 18 Sep 2024</div>
                            <a
                                href="https://unstop.com/certificate-preview/f5c2c21d-bc46-4b8a-8870-0b659b67b395"
                                >View Certificate</a
                            >
                        </div>
                    </div>
                </div>
            </section>

            <hr />

            <!-- 6. Education Section -->
            <section id="education-section">
                <div class="title">My Education</div>
                <div class="education-boxes">
                    <div class="illustration">
                        <img
                            src="./assets/images/college.png"
                            width="auto"
                            height="auto"
                            alt="My Education"
                        />
                    </div>
                    <div class="edu-details">
                        <div class="box">
                            <div>
                                <div class="name">
                                    MSc. in Information Technology
                                </div>
                                <div class="year">2022-23</div>
                                <div class="info">
                                    SONUBHAU BASWANT COLLEGE, SHAHAPUR
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <div class="name">
                                    BSC in Information Technology
                                </div>
                                <div class="year">2020-21</div>
                                <div class="info">
                                    SONUBHAU BASWANT COLLEGE, SHAHAPUR
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <div class="name">HSC</div>
                                <div class="year">2017-18</div>
                                <div class="info">J.S.S.P. COLLEGE, KHARDI</div>
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <div class="name">SSC</div>
                                <div class="year">2015-16</div>
                                <div class="info">
                                    K.V.E.S. HIGHSCHOOL, KHARDI
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr />

            <!-- 7. Contact Section -->
            <section id="contact-section">
                <div class="title">Contact Me</div>
                <div class="contact-details">
                    <div class="contact-info">
                        <div class="name">Saurabh Damale</div>
                        <div class="contact-using">
                            <div>Phone: +91 7709131547 <br /></div>

                            <div style="word-wrap: break-word">
                                Email : saurabh.damale.developer@gmail.com
                            </div>
                        </div>

                        <div>Connect With Me</div>

                        <div class="social-links">
                            <span style="--h: purple">
                                <a
                                    href="https://www.instagram.com/algoatlas?igsh=YnlhMTY0bmMybTJt"
                                    aria-label="Go to my instagram profile"
                                >
                                    <i class="uil uil-instagram"></i>
                                </a>
                            </span>
                            <span style="--h: red">
                                <a
                                    href="https://youtube.com/@algoatlas11?si=HgcdQUggvoQ5z6IK"
                                    aria-label="Go to my youtube channel"
                                >
                                    <i class="uil uil-youtube"></i>
                                </a>
                            </span>
                            <span style="--h: gray">
                                <a
                                    href="https://github.com/HackRoot1"
                                    aria-label="Go to my github account"
                                >
                                    <i class="uil uil-github"></i>
                                </a>
                            </span>
                            <span style="--h: blue">
                                <a
                                    href="#"
                                    aria-label="Go to my twitter account"
                                >
                                    <i class="uil uil-twitter"></i>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="contact-form">
                        <form id="form-info">
                            <div>
                                <div>
                                    <input
                                        type="text"
                                        name="fname"
                                        id="firstName"
                                        placeholder="First Name"
                                    />
                                    <input
                                        type="text"
                                        name="lname"
                                        id="lastName"
                                        placeholder="Last Name"
                                    />
                                </div>
                            </div>
                            <div>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="E-mail Address"
                                />
                            </div>
                            <div class="feedback">
                                <textarea
                                    name="feedback"
                                    id="feedback"
                                    cols="30"
                                    rows="5"
                                    placeholder="Give Me Some Feedback Here...."
                                ></textarea>
                            </div>
                            <div>
                                <input
                                    type="submit"
                                    value="Submit"
                                    id="form-info-btn"
                                />
                            </div>
                        </form>
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

        <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
        ></script>

        <script type="text/javascript">
            (function () {
                emailjs.init("A8WOpcYrB7cNM98T7");
            })();
            $(document).ready(function () {
                $("#form-info").on("submit", function (e) {
                    e.preventDefault(); // Prevent the default form submission

                    // alert("Submitted");
                    // let info = $(this).serialize();
                    // let formData = $(this).serialize();
                    let firstName = $("#firstName").val();
                    let lastName = $("#lastName").val();
                    let email = $("#email").val();

                    if (
                        firstName != "" &&
                        lastName != "" &&
                        email != "" &&
                        email.match(/@gmail.com$/)
                    ) {
                        let formData = {
                            firstName: firstName,
                            lastName: lastName,
                            email: email,
                            feedback: $("#feedback").val(),
                        };
                        emailjs
                            .send(
                                "service_ex9672a",
                                "template_tua6e6k",
                                formData
                            )
                            .then(
                                function (response) {
                                    $("#form-info").trigger("reset");
                                    alert("Email sent successfully:", response);
                                },
                                function (error) {
                                    alert("Error sending email:", error);
                                }
                            );
                    } else {
                        alert("Please fill out all contact fields.");
                    }
                });
            });
        </script>

        <script src="./assets/js/theme.js"></script>
    </body>
</html>
