<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link href="dist/output.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header Start -->
    <header
      class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
    >
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#home" class="font-bold text-primary text-lg block py-6"
              >mwardani</a
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
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="#home"
                    class="text-base text-dark py-2 mx-8 flex hover:text-primary"
                    >Beranda</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#about"
                    class="text-base text-dark py-2 mx-8 flex hover:text-primary"
                    >Tentang Saya</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#portfolio"
                    class="text-base text-dark py-2 mx-8 flex hover:text-primary"
                    >Portfolio</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#clients"
                    class="text-base text-dark py-2 mx-8 flex hover:text-primary"
                    >Clients</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#blogs"
                    class="text-base text-dark py-2 mx-8 flex hover:text-primary"
                    >Blogs</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#contact"
                    class="text-base text-dark py-2 mx-8 flex hover:text-primary"
                    >Contact</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1
              class="text-base font-semibold text-primary md:text-xl lg:text-2xl"
            >
              Haloo kawan, saya
              <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl"
                >Mazhrur Rahman Kusuma Wardani</span
              >
            </h1>
            <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">
              Freelance Web Designer & <span class="text-dark">Developer</span>
            </h2>
            <p class="font-medium text-secondary mb-10 leading-relaxed">
              Belajar <span class="text-dark font-bold">semua</span> tentang
              desain ... 🙌
            </p>
            <a
              href="#contact"
              class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-75 transition duration-300 ease-in-out"
              >Hubungi Saya</a
            >
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-9 lg:right-0">
              <img
                src="dist/img/myAvatar.png"
                alt="Mazhrur Rahman Kusuma Wardani"
                class="max-w-full mx-auto"
              />
              <span
                class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125"
              >
                <svg
                  width="400"
                  height="400"
                  viewBox="0 0 150 170"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#f43f5e"
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
    <section id="about" class="pt-36 pb-32 mt-36 mb-32">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-lg mb-3">
              Tentang Saya
            </h4>
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">
              Banyak belajar pemrograman dari Pak Dhika ... 🙌
            </h2>
            <p class="font-medium text-base text-secondary max-w-xl lg-text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
              excepturi voluptatem soluta laboriosam dolorem cupiditate placeat!
            </p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3
              class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10"
            >
              Ikuti Saya
            </h3>
            <p class="font-medium text-base text-secondary mb-6 lg:text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi et
              sapiente commodi reiciendis consequuntur, nemo incidunt?
            </p>
            <div class="flex items-center">
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
      </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="pt-36 pb-32 bg-rose-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Portfolio
            </h4>
            <h2
              class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              Project Terbaru
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero,
              impedit quibusdam! Beatae distinctio maiores minus neque explicabo
              corrupti, quam delectus.
            </p>
          </div>
        </div>

        <div
          class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto"
        >
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img
                src="dist/img/portfolio/1.jpg"
                alt="Landing Page"
                width="w-full"
              />
            </div>
            <h3 class="font-semibold text-xl text-dark mt-5 mb-3">
              Landing Page MWardani
            </h3>
            <p class="font-medium text-base text-secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis praesentium iure magni optio architecto! Et, impedit.
            </p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img
                src="dist/img/portfolio/2.jpg"
                alt="Landing Page"
                width="w-full"
              />
            </div>
            <h3 class="font-semibold text-xl text-dark mt-5 mb-3">
              Landing Page MWardani
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
            <h3 class="font-semibold text-xl text-dark mt-5 mb-3">
              Landing Page MWardani
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
            <h3 class="font-semibold text-xl text-dark mt-5 mb-3">
              Landing Page MWardani
            </h3>
            <p class="font-medium text-base text-secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis praesentium iure magni optio architecto! Et, impedit.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Clients Section Start -->
    <section id="clients" class="pt-36 pb-32 bg-rose-900">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Clients
            </h4>
            <h2
              class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              Yang Pernah Bekerjasama
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero,
              impedit quibusdam! Beatae distinctio maiores minus neque explicabo
              corrupti, quam delectus.
            </p>
          </div>
        </div>
        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center">
            <a
              href="#"
              class="max-w-[90px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/google.svg" alt="Google" />
            </a>
            <a
              href="#"
              class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/tokopedia.svg" alt="Tokopedia" />
            </a>
            <a
              href="#"
              class="max-w-[90px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/google.svg" alt="Google" />
            </a>
            <a
              href="#"
              class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/tokopedia.svg" alt="Tokopedia" />
            </a>
            <!-- <a
              href="#"
              class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/gojek.svg" alt="Gojek" />
            </a>
            <a
              href="#"
              class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/traveloka.svg" alt="Traveloka" />
            </a>
            <a
              href="#"
              class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8"
            >
              <img src="dist/img/clients/tokopedia.svg" alt="Tokopedia" />
            </a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Clients Section End -->

    <!-- Blogs Section Start -->
    <section id="blogs" class="pt-36 pb-32 bg-white">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Blogs
            </h4>
            <h2
              class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              Tulisan Terkini
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
              nesciunt facilis dolorem cumque voluptas?
            </p>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <a href="#" class="w-full hover:opacity-70"
                ><img
                  src="https://source.unsplash.com/360x200?programming"
                  alt="Programming"
                  class="w-full"
              /></a>
              <div class="py-8 px-6">
                <h3>
                  <a
                    href="#"
                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"
                    >Tips Belajar Programming</a
                  >
                </h3>
                <p class="font-medium text-base text-secondary mb-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                  aspernatur.
                </p>
                <a
                  href="#"
                  class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70"
                  >Baca selengkapnya</a
                >
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <a href="#" class="w-full hover:opacity-70"
                ><img
                  src="https://source.unsplash.com/360x200?computer"
                  alt="Programming"
                  class="w-full"
              /></a>
              <div class="py-8 px-6">
                <h3>
                  <a
                    href="#"
                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"
                    >Belajar Dasar Jaringan</a
                  >
                </h3>
                <p class="font-medium text-base text-secondary mb-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magnam, nisi!
                </p>
                <a
                  href="#"
                  class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70"
                  >Baca selengkapnya</a
                >
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <a href="#" class="w-full hover:opacity-70"
                ><img
                  src="https://source.unsplash.com/360x200?keyboard"
                  alt="Programming"
                  class="w-full"
              /></a>
              <div class="py-8 px-6">
                <h3>
                  <a
                    href="#"
                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"
                    >Mekenikal Keyboard</a
                  >
                </h3>
                <p class="font-medium text-base text-secondary mb-6">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repellendus?
                </p>
                <a
                  href="#"
                  class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70"
                  >Baca selengkapnya</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BLogs Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 bg-rose-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-5xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">
              Contact
            </h4>
            <h2
              class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              Hubungi Kami
            </h2>
            <p class="font-medium text-md text-secondary md:text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi
              itaque numquam voluptas asperiores.
            </p>
          </div>
        </div>

        <form>
          <div class="w-full md:w-2/3 md:mx-auto">
            <div class="w-full px-4 mb-8">
              <label for="name" class="text-base font-bold text-primary"
                >Nama</label
              >
              <input
                type="text"
                id="name"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
              />
            </div>
            <div class="w-full px-4 mb-8">
              <label for="email" class="text-base font-bold text-primary"
                >Email</label
              >
              <input
                type="email"
                id="email"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
              />
            </div>
            <div class="w-full px-4 mb-8">
              <label for="message" class="text-base font-bold text-primary"
                >Pesan</label
              >
              <textarea
                type="text"
                id="message"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"
              ></textarea>
            </div>
            <div class="w-full px-4">
              <button
                class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-75 hover:shadow-lg transition duration-500"
              >
                Kirim
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer class="bg-rose-900 pt-24 pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-secondary font-medium md:w-1/3">
            <h2 class="font-bold text-4xl text-white mb-5">MWardani</h2>
            <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
            <p>inadraw.amusu@gmail.com</p>
            <p>Jl. Simo Langit 14 Nomor. 48c</p>
            <p>Surabaya</p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl text-white mb-5">
              Kategori Tulisan
            </h3>
            <ul class="text-secondary">
              <li>
                <a
                  href="#"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Programming</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Teknologi</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Desain</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
            <ul class="text-secondary">
              <li>
                <a
                  href="#home"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Beranda</a
                >
              </li>
              <li>
                <a
                  href="#about"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Tentang Saya</a
                >
              </li>
              <li>
                <a
                  href="#portfolio"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Portfolio</a
                >
              </li>
              <li>
                <a
                  href="#clients"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Clients</a
                >
              </li>
              <li>
                <a
                  href="#blogs"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Blogs</a
                >
              </li>
              <li>
                <a
                  href="#contact"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full pt-10 border-t border-primary">
          <div class="flex items-center justify-center mb-5">
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
          <p class="font-medium text-xs text-secondary text-center">
            Created by
            <a
              href="https://www.instagram.com/mwardani.id/"
              target="_blank"
              class="font-bold text-white"
              >MWardani</a
            > 2023, using
            <a
              href="https://tailwindcss.com"
              target="_blank"
              class="font-bold text-white"
              >Tailwind CSS</a
            >
          </p>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <script src="dist/js/script.js"></script>
  </body>
</html>
