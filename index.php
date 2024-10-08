<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link href="dist/css/final.css" rel="stylesheet" />
    <link rel="icon" href="dist/img/myAvatar.png" />
    <script>
      if (
        localStorage.theme === "dark" ||
        (!("theme" in localStorage) &&
          window.matchMedia("(prefers-color-scheme: dark)").matches)
      ) {
        document.documentElement.classList.add("dark");
      } else {
        document.documentElement.classList.remove("dark");
      }
    </script>
  </head>
  <body class="dark:bg-cyan-900">
    <!-- Header Start -->
    <header
      class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
    >
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a
              href="#home"
              class="font-extrabold text-primary text-lg block py-6"
              >RahmaNdani</a
            >
          </div>
          <div class="flex px-4 items-center">
            <button
              id="hamburger"
              name="hamburger"
              type="button"
              class="right-4 absolute block lg:hidden"
            >
              <span
                class="hamburger-line transition duration-300 ease-in-out origin-top-left"
              ></span>
              <span
                class="hamburger-line transition duration-300 ease-in-out"
              ></span>
              <span
                class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"
              ></span>
            </button>
            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:dark:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-darkmode dark:shadow-slate-500"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="#home"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white"
                    >Home</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#about"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white"
                    >About</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#portfolio"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white"
                    >Portfolio</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#photography"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white"
                    >Photography</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#blogs"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white"
                    >Blogs</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#contact"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white"
                    >Contact</a
                  >
                </li>
                <li class="mt-3 lg:mt-0 flex items-center pl-8">
                  <div class="flex">
                    <span class="mr-2 text-sm text-slate-500">light</span>
                    <input type="checkbox" class="hidden" id="dark-toggle" />
                    <label for="dark-toggle">
                      <div
                        class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1"
                      >
                        <div
                          class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"
                        ></div>
                      </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500">dark</span>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-cyan-900">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1
              class="text-base font-semibold text-primary md:text-xl lg:text-2xl"
            >
              Hellooo, I'm
              <span
                class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white"
                >M. RahmaNdani</span
              >
            </h1>
            <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">
              Freelance Web Designer &
              <span class="text-dark dark:text-white">Developer</span>
            </h2>
            <p class="font-medium text-secondary mb-10 leading-relaxed">
              Creative Design starts from a
              <span class="text-dark font-bold dark:text-white"
                >Simple Story ...</span
              >
              🙌
            </p>
            <a
              href="#contact"
              class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-75 transition duration-300 ease-in-out"
              >Contact me</a
            >
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-9 lg:right-0">
              <img
                src="dist/img/myAvatar.png"
                alt="Mazhrur Rahman Kusuma Wardani"
                class="max-w-full mx-auto relative z-10"
              />
              <span
                class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125"
              >
                <svg
                  width="400"
                  height="400"
                  viewBox="0 0 150 170"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#e11d48"
                    d="M18.8,10C5.8,33.3,-36,39.1,-43.9,18.7C-51.9,-1.7,-25.9,-48.4,-5,-51.3C15.9,-54.2,31.8,-13.3,18.8,10Z"
                    transform="translate(100 100) scale(1.6)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 mt-36 mb-32 dark:bg-cyan-900">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-lg mb-3">
              About Me
            </h4>
            <h2
              class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white"
            >
              One small part of the breadth of art science ...
            </h2>
            <p class="font-medium text-base text-secondary max-w-xl lg-text-lg">
              Not an art practitioner, only learning art from the stories of
              great people. Working in a government agency that is very far from
              the art. Trying to develop myself through social media. For more
              information, please check my portfolio. I believe in working
              together to create a whole that is greater than the sum of its
              parts. Thank You ...
            </p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3
              class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white"
            >
              Connect With Me ...
            </h3>
            <p class="font-medium text-base text-secondary mb-6 lg:text-lg">
              Find me online on digital platforms, or by clicking the links
              below.
              <br />
              For all business and projects inquiries, email me at
              <a
                href="mailto:inadraw.amusu@gmail.com"
                class="hover:text-primary"
                >inadraw.amusu@gmail.com</a
              >
            </p>
            <div class="flex items-center">
              <!-- Instagram - Kolom Pertama -->

              <div class="w-1/2 flex flex-col justify-center items-center">
                <a
                  href="https://www.instagram.com/mwardani.id/"
                  target="_blank"
                  class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    class="fill-current"
                  >
                    <title>Instagram</title>
                    <path
                      d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                    />
                  </svg>
                </a>
                <!-- menampilkan panggilan API Instagram -->
                <!-- <div class="profile">
                    <img
                      id="profile-picture"
                      src=""
                      alt="Profile Picture"
                      class="w-7"
                    />
                    <h2 id="username"></h2>
                    <p id="followers-count"></p>
                  </div> -->
              </div>

              <!-- Youtube & Facebook - Kolom Kedua -->
              <div class="w-1/2 flex">
                <!-- Youtube -->
                <a
                  href="https://www.youtube.com/@mazhwardani"
                  target="_blank"
                  class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    class="fill-current"
                  >
                    <title>YouTube</title>
                    <path
                      d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                    />
                  </svg>
                </a>

                <!-- Facebook -->
                <a
                  href="https://www.facebook.com/marahkudan"
                  target="_blank"
                  class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    class="fill-current"
                  >
                    <title>Facebook</title>
                    <path
                      d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.063 24 12.073z"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="pt-36 pb-32 bg-rose-50 dark:bg-darkmode">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Portfolio
            </h4>
            <h2
              class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white"
            >
              Latest Project
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              This is an overview of some of the projects I've worked on.
            </p>
          </div>
        </div>

        <div
          class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto"
        >
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <a
                href="https://inadraw.github.io/myportfolio/"
                class="w-full hover:opacity-70"
                ><img
                  src="dist/img/portfolio/1.jpg"
                  alt="My Portfolio"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              My Portfolio
            </h3>
            <p class="font-medium text-base text-secondary">
              The first project I made was based on knowledge from Mr. Dhika.
              Thank you very much for the knowledge given by Mr. Dhika.
            </p>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <a
                href="https://toserbaclassic.github.io/toserbaclassic/"
                target="_blank"
                class="w-full hover:opacity-70"
                ><img
                  src="dist/img/portfolio/5.jpg"
                  alt="toserbaclassic"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              Toserba Classic
            </h3>
            <p class="font-medium text-base text-secondary">
              My second project, special for my little sister's online shop. I
              got this website template from Mr Rafif. Thank you very much Mr
              Rafif.
            </p>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <a
                href="https://tracking-solusimitraalamraya.online/PencarianSppj"
                target="_blank"
                class="w-full hover:opacity-70"
                ><img
                  src="dist/img/portfolio/6.jpg"
                  alt="pencariansppj"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              Pencarian SPPJ
            </h3>
            <p class="font-medium text-base text-secondary">
              My third project. I received an order from my first customer. Data
              search application based on unique numbers or codes. I made it
              with the CodeIgniter 4 framework, MySQL database, myth/auth
              library, admin-LTE bootstrap template and some additional JQuery.
            </p>
          </div>

          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <a
                href="http://192.168.0.254/dayohpean/slide"
                target="_blank"
                class="w-full hover:opacity-70"
                ><img
                  src="dist/img/portfolio/7.jpg"
                  alt="dayohpean"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              Aplikasi Kehadiran Pihak
            </h3>
            <p class="font-medium text-base text-secondary">
              Application of party attendance, for parties in litigation who
              will appear in court. Made with two versions: CodeIgniter 4 and
              CodeIgniter 3 and two versions of php 8 and php version 5,
              Admin-LTE bootstrap template and some additional JQuery.
            </p>
          </div>
          <!-- <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img
                src="dist/img/portfolio/2.jpg"
                alt="Landing Page"
                width="w-full"
              />
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              Landing Page RahmaNdani
            </h3>
            <p class="font-medium text-base text-secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis praesentium iure magni optio architecto! Et, impedit.
            </p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img
                src="dist/img/portfolio/3.jpg"
                alt="Landing Page"
                width="w-full"
              />
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              Landing Page RahmaNdani
            </h3>
            <p class="font-medium text-base text-secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis praesentium iure magni optio architecto! Et, impedit.
            </p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img
                src="dist/img/portfolio/4.jpg"
                alt="Landing Page"
                width="w-full"
              />
            </div>
            <h3
              class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white"
            >
              Landing Page RahmaNdani
            </h3>
            <p class="font-medium text-base text-secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis praesentium iure magni optio architecto! Et, impedit.
            </p>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Photography Section Start -->
    <section id="photography" class="pt-36 pb-32 dark:bg-cyan-900">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Photography
            </h4>
            <h2
              class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white"
            >
              Photo I've ever taken
            </h2>
          </div>
          <div
            class="w-full mx-w-5xl p-5 pb-10 mx-auto mb-10 gap-5 columns-3 space-y-5"
          >
            <img src="dist/img/photography/1.jpg" alt="" />
            <img src="dist/img/photography/2.jpg" alt="" />
            <img src="dist/img/photography/3.jpg" alt="" />
            <img src="dist/img/photography/4.jpg" alt="" />
            <img src="dist/img/photography/5.jpg" alt="" />
            <img src="dist/img/photography/6.jpg" alt="" />
            <img src="dist/img/photography/7.jpg" alt="" />
            <!-- <img src="dist/img/photography/8.jpg" alt="" /> -->
            <img src="dist/img/photography/9.jpg" alt="" />
            <!-- <img src="dist/img/photography/10.jpg" alt="" /> -->
            <!-- <img src="dist/img/photography/11.jpg" alt="" /> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Photography Section End -->

    <!-- Blogs Section Start -->
    <section id="blogs" class="pt-36 pb-32 bg-rose-50 dark:bg-darkmode">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Blogs
            </h4>
            <h2
              class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white"
            >
              Recent Posts
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              Everything about digital art.
            </p>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div
              class="bg-white dark:bg-darkmode rounded-xl shadow-lg overflow-hidden mb-10"
            >
              <a href="#" class="w-full hover:opacity-70"
                ><img
                  src="dist/img/blog/1.jpg"
                  alt="Programming"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
              <div class="py-8 px-6">
                <h3>
                  <a
                    href="#"
                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white"
                    >Learning Tips Programming</a
                  >
                </h3>
                <p class="font-medium text-base text-secondary mb-6">
                  Whether you’re currently pursuing a degree in computer
                  science, a veteran using the GI Bill to choose their next
                  mission, an aspiring self-taught developer, or a coding boot
                  camp student, mastering the craft of programming is a
                  perpetual struggle.
                </p>
                <a
                  href="#"
                  class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70"
                  >Read more
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div
              class="bg-white dark:bg-darkmode rounded-xl shadow-lg overflow-hidden mb-10"
            >
              <a href="#" class="w-full hover:opacity-70"
                ><img
                  src="dist/img/blog/3.jpg"
                  alt="Programming"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
              <div class="py-8 px-6">
                <h3>
                  <a
                    href="#"
                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white"
                    >How to Create Digital Art</a
                  >
                </h3>
                <p class="font-medium text-base text-secondary mb-6">
                  Making a positive first impression on those who view your
                  artwork and designs is essential, whether you are trying to
                  establish a reputation as an artist or if you are attempting
                  to market a product. Digital artwork can take many forms, and
                  creating.
                </p>
                <a
                  href="#"
                  class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70"
                  >Read more
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div
              class="bg-white dark:bg-darkmode rounded-xl shadow-lg overflow-hidden mb-10"
            >
              <a href="#" class="w-full hover:opacity-70"
                ><img
                  src="dist/img/blog/2.jpg"
                  alt="Programming"
                  class="w-full hover:scale-110 transition duration-300 ease-in-out"
              /></a>
              <div class="py-8 px-6">
                <h3>
                  <a
                    href="#"
                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white"
                    >Create Transparent Signature</a
                  >
                </h3>
                <p class="font-medium text-base text-secondary mb-6">
                  Looking for a fast way to make a transparent digital
                  signature? With Fotor's free online signature background
                  remover, you can get it done with just one click! All you need
                  to do is upload your handwritten signature picture, and
                  Fotor’s AI background remover.
                </p>
                <a
                  href="#"
                  class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70"
                  >Read more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BLogs Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-cyan-900">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Contact
            </h4>
            <h2
              class="font-bold text-dark dark:text-white text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              Hellooo
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              Drop me a line for inquiries, collaborations, project, or just to
              say hello.
              <br />
              <a
                href="mailto:inadraw.amusu@gmail.com"
                class="hover:text-primary"
                >inadraw.amusu@gmail.com</a
              >
              <br /><br />
              Surabaya, Indonesia
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer class="bg-rose-950 pt-2 pb-2 dark:bg-darkmode">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a
              href="#home"
              class="font-extrabold text-primary text-lg block py-6"
              >RahmaNdani</a
            >
          </div>
          <div class="flex">
            <!-- Youtube -->
            <a
              href="https://www.youtube.com/@mazhwardani"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                class="fill-current"
              >
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                />
              </svg>
            </a>

            <!-- Instagram -->
            <a
              href="https://www.instagram.com/mwardani.id/"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                class="fill-current"
              >
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>

            <!-- Facebook -->
            <a
              href="https://www.facebook.com/marahkudan"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg
                role="img"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                class="fill-current"
              >
                <title>Facebook</title>
                <path
                  d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Back to Top Section Start -->
    <a
      href="#home"
      class="p-4 bottom-4 right-4 z-[9999] fixed h-14 w-14 rounded-full bg-primary hidden justify-center items-center hover:animate-pulse"
      id="totop"
    >
      <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to Top Section End -->

    <script src="dist/js/script.js"></script>
  </body>
</html>
