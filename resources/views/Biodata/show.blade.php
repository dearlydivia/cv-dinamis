<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--=============== BOXICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css"/>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <title>PORTFOLIO WEBSITE DIVIA</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Divia</a>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home-alt"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="bx bx-user"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="bx bx-book"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#work" class="nav__link">
                <i class="bx bx-briefcase-alt-2"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="bx bx-message-square-detail"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- nav-menu -->

        <!-- Theme change button -->
        <i class="bx bxs-moon change-theme" id="theme-button"></i>
      </nav>
    </header>
    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__data">
            @foreach ($data as $data)   
                <span class="home__greeting">Hello, I'm {{ $data->nama }}</span>
            {{-- <h1 class="home__name">Divia Anggraini</h1> --}}
            <h3 class="home__education">Frontend Developer</h3>

            <div class="home__buttons">
              <a download="" href="assets/pdf/CV_DIVIA ANGGRAINI.pdf" class="button button--ghost"> Download CV </a>
              <a href="#about" class="button">About me</a>
            </div>
          </div>

          <div class="home__handle">
            <img src="assets/img/perfil.png" alt="" class="home__img" />
          </div>

          <div class="home__social">
            <a href="https://acesse.one/sF6JI" target="_blank" class="home__social-link">
              <i class="bx bxl-linkedin-square"></i>
            </a>
            <a href="https://github.com/dearlydivia/" target="_blank" class="home__social-link">
              <i class="bx bxl-github"></i>
            </a>
            <a href="https://www.instagram.com/dearlydivia/" target="_blank" class="home__social-link">
              <i class="bx bxl-instagram"></i>
            </a>
          </div>

          <a href="#about" class="home__scroll">
            <i class="bx bx-mouse home__scroll-icon"></i>
            <span class="home__scroll-name">Scroll Down</span>
          </a>
        </div>
      </section>

      <!--=============== ABOUT ===============-->
<section class="about section" id="about">
  <span class="section__subtitle">My Intro</span>
  <h2 class="section__title">About Me</h2>

  <div class="about__container container grid">
    <img src="assets/img/about.jpg" alt="" class="about__img" />

    <div class="about__data">
      <div class="about__info">
        <div class="about__box">
          <i class="bx bx-award about__icon"></i>
          <h3 class="about__title">Education</h3>
          <span class="about__subtitle">Politeknik Negeri Jember</span>
        </div>

        <div class="about__box">
          <i class="bx bx-briefcase-alt about__icon"></i>
          <h3 class="about__title">Department</h3>
          <span class="about__subtitle">Management Informatics</span>
        </div>

        <div class="about__box">
          <i class="bx bx-support about__icon"></i>
          <h3 class="about__title">Interest</h3>
          <span class="about__subtitle">Web Development</span>
          <span class="about__subtitle">Data Science</span>
        </div>
      </div>

      <p class="about__description">
        {{ $data->keterangan }}
        {{-- Hello, I'm Divia Anggraini, an Informatics Management student at Jember State Polytechnic. I’m passionate about web development and data science, aiming to create impactful online solutions and leverage data for strategic
        insights. I thrive on collaboration and am eager to explore innovative ideas with like-minded teams. --}}
      </p>
      @endforeach
      <a href="#contact" class="button">Contact Me</a>
    </div>
  </div>
</section>

      <!--=============== SKILLS ===============-->
      <section class="skills section" id="skills">
        <span class="section__subtitle">That I've Learned</span>
        <h2 class="section__title">My Skills</h2>

        <div class="skills__container container grid">
          <div class="skills__content">
            <h3 class="skills__title">Frontend Developer</h3>

            <div class="skills__box">
              <div class="skills_group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">HTML</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">CSS</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Boostrap</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>
              </div>

              <div class="skills_group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">PHP</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">MYSQL</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Javascript</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="skills__content">
            <h3 class="skills__title">Data Scientist</h3>

            <div class="skills__box">
              <div class="skills_group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Python</h3>
                    <span class="skills__level">Intemediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Power Bi</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Tableau</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>
              </div>

              <div class="skills_group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Statistic</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Deep Learning</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Machine Learning</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== WORK ===============-->
<section class="work section" id="work">
  <span class="section__subtitle">My Portfolio</span>
  <h2 class="section__title">Recent Works</h2>

  <div class="work__filters">
    <span class="work__item active-work" data-filter="all">All</span>
    <span class="work__item" data-filter=".web">Web</span>
    <span class="work__item" data-filter=".desktop">Desktop</span>
    <span class="work__item" data-filter=".ml">Machine Learning</span>
  </div>

  <div class="work__container container grid">
    <!-- Work 1: Link to TABRIIZ -->
    <div class="work__card mix web">
      <img src="assets/img/work1.png" alt="" class="work__img" />

      <h3 class="work__title">Web Design</h3>

      <a href="https://dearlydivia.github.io/TABRIIZ/" class="work__button" target="_blank"> Demo 
        <i class="bx bxs-right-arrow work__icon"></i> 
      </a>
    </div>

    <div class="work__card mix desktop">
      <img src="assets/img/work2.png" alt="" class="work__img" />

      <h3 class="work__title">Desktop Application</h3>

      <a href="#" class="work__button"> Demo 
        <i class="bx bxs-right-arrow work__icon"></i> 
      </a>
    </div>

    <!-- Work 3: Link to Colab Machine Learning Project -->
    <div class="work__card mix ml">
      <img src="assets/img/work3.png" alt="" class="work__img" />

      <h3 class="work__title">Machine Learning Project</h3>

      <a href="https://colab.research.google.com/drive/1xtYaoppuzmNSeVTs1uo_lsZvJB7yC10j#scrollTo=0_rFcXlxzFyW" class="work__button" target="_blank"> Demo 
        <i class="bx bxs-right-arrow work__icon"></i> 
      </a>
    </div>

    <!-- Work 4: Link to Alvin Helm -->
    <div class="work__card mix web">
      <img src="assets/img/work4.png" alt="" class="work__img" />

      <h3 class="work__title">Web Design</h3>

      <a href="https://dearlydivia.github.io/Alvin_Helm/" class="work__button" target="_blank"> Demo 
        <i class="bx bxs-right-arrow work__icon"></i> 
      </a>
    </div>

    <div class="work__card mix web">
      <img src="assets/img/work5.png" alt="" class="work__img" />

      <h3 class="work__title">Web Design</h3>

      <a href="#" class="work__button"> Demo 
        <i class="bx bxs-right-arrow work__icon"></i> 
      </a>
    </div>
  </div>
</section>

      <!--=============== CERTIFICATION ===============-->
<section class="certification section">
  <span class="section__subtitle">Verified Qualifications</span>
  <h2 class="section__title">CERTIFICATION</h2>

  <div class="certification__container container grid">
      <div class="certification__card">
          <img src="assets/img/cert1.jpg" alt="Graphic Designer Certificate" class="certification__img">
          <h3 class="certification__title">Graphic <br />Designer</h3>
          <span class="certification__button"> See more <i class="bx bx-right-arrow-alt certification__icon"></i> </span>

          <!-- Modal -->
          <div class="certification__modal">
            <div class="certification__modal-content">
              <i class="bx bx-x certification__modal-close"></i>
              <h3 class="certification__modal-title">Graphic Designer</h3>
              <p class="certification__modal-description">I have completed comprehensive training in Graphic Design, organized by the Ministry of Communication and Information Technology. This program covered essential graphic design principles and techniques, and included a thorough competency assessment. The training has equipped me with a solid foundation in graphic design, enhancing my ability to create visually compelling and effective designs. This certificate represents my commitment to mastering the skills and knowledge necessary for professional graphic design..</p>
            </div>
          </div>
      </div>

      <div class="certification__card">
          <img src="assets/img/cert2.jpg" alt="Data Science Certificate" class="certification__img">
          <h3 class="certification__title">Data <br />Science</h3>
          <span class="certification__button"> See more <i class="bx bx-right-arrow-alt certification__icon"></i> </span>

          <!-- Modal -->
          <div class="certification__modal">
            <div class="certification__modal-content">
              <i class="bx bx-x certification__modal-close"></i>
              <h3 class="certification__modal-title">Data Science</h3>
              <p class="certification__modal-description">I have successfully completed a certified independent study in Data Science, organized by PT Mitra Talenta Grup under the Merdeka Campus Program. This semester-long study encompassed a wide range of competencies, including Database & SQL, Data Warehouse & ETL, Python, Statistics, Tableau, Machine Learning, and Deep Learning. The program provided me with a robust understanding of data science principles and practices, enabling me to analyze and interpret complex data effectively. This certificate signifies my dedication to acquiring advanced skills and knowledge in the field of data science..</p>
            </div>
          </div>
      </div>

      <div class="certification__card">
          <img src="assets/img/cert3.jpg" alt="Desktop Development Certificate" class="certification__img">
          <h3 class="certification__title">Desktop <br />Development</h3>
          <span class="certification__button"> See more <i class="bx bx-right-arrow-alt certification__icon"></i> </span>

          <!-- Modal -->
          <div class="certification__modal">
            <div class="certification__modal-content">
              <i class="bx bx-x certification__modal-close"></i>
              <h3 class="certification__modal-title">Desktop Development</h3>
              <p class="certification__modal-description">I am honored to have received this certificate for securing third place in the Desktop Development competition for the creation of the Helm Alvin Store sales application. This achievement highlights my proficiency in developing desktop applications and showcases my ability to design and implement functional, user-friendly solutions. The project demonstrated my skills in application development, from conception through execution, and affirmed my commitment to excellence in desktop software engineering..</p>
            </div>
          </div>
      </div>
  </div>
</section>

      <!--=============== CONTACT ===============-->
<section class="contact section" id="contact">
  <span class="section__subtitle">Get in touch</span>
  <h2 class="section__title">Contact Me</h2>

  <div class="contact__container container grid">
    <div class="contact__content">
      <h3 class="contact__title">Talk to me</h3>

      <div class="contact__info">
        <div class="contact__card">
          <i class="bx bxl-instagram contact__card-icon"></i>
          <h3 class="contact__card-title">Instagram</h3>
          <span class="contact__card-data">@dearlydivia</span>

          <a href="https://www.instagram.com/dearlydivia/" target="_blank" class="contact__button"> Write me <i class="bx bx-chevron-right contact__button-icon"></i> </a>
        </div>

        <div class="contact__card">
          <i class="bx bxl-whatsapp contact__card-icon"></i>
          <h3 class="contact__card-title">Whatsapp</h3>
          <span class="contact__card-data">0812-4967-0291</span>

          <a href="https://api.whatsapp.com/send?phone=6281249670291&text=Hello, more information!" target="_blank" class="contact__button"> Write me <i class="bx bx-chevron-right contact__button-icon"></i> </a>
        </div>

        <div class="contact__card">
          <i class="bx bxl-telegram contact__card-icon"></i>
          <h3 class="contact__card-title">Telegram</h3>
          <span class="contact__card-data">0812-4967-0291</span>

          <a href="https://t.me/081249670291" target="_blank" class="contact__button"> Write me <i class="bx bx-chevron-right contact__button-icon"></i> </a>
        </div>
      </div>
    </div>

    <div class="contact__content">
      <h3 class="contact__title">Write me your project</h3>

      <form action="https://formspree.io/f/mnnardno" method="post" class="contact__form">
        <div class="contact__form-div">
          <label for="name" class="contact__form-tag">Names</label>
          <input type="text" id="name" name="name" placeholder="Insert your Name" class="contact__form-input" required />
        </div>

        <div class="contact__form-div">
          <label for="email" class="contact__form-tag">Mail</label>
          <input type="email" id="email" name="email" placeholder="Insert your email" class="contact__form-input" required />
        </div>

        <div class="contact__form-div contact__form-area">
          <label for="project" class="contact__form-tag">Project</label>
          <textarea id="project" name="project" cols="30" rows="10" placeholder="Write your project" class="contact__form-input" required></textarea>
        </div>

        <button type="submit" class="button">Send Message</button>
      </form>
    </div>
  </div>
</section>

    <!--=============== FOOTER ===============-->
<footer class="footer">
  <div class="footer__container container">
    <h1 class="footer__title">Divia Anggraini</h1>

    <ul class="footer__social">
      <li>
        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link" aria-label="Facebook">
          <i class="bx bxl-facebook-square"></i>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link" aria-label="Instagram">
          <i class="bx bxl-instagram-alt"></i>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/" target="_blank" class="footer__social-link" aria-label="Twitter">
          <i class="bx bxl-twitter"></i>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/" target="_blank" class="footer__social-link" aria-label="LinkedIn">
          <i class="bx bxl-linkedin-square"></i>
        </a>
      </li>
    </ul>

    <span class="footer__copy"> &#169; Divia Anggraini 2024. All rights reserved </span>
  </div>
</footer>

      
    <!-- JQUERY -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>

  </body>
</html>
