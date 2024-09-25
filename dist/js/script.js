// Navbar Fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector("#totop");

  if (window.pageYOffset > fixedNav) {
    header.classList.add("navbar-fixed");
    toTop.classList.remove("hidden");
    toTop.classList.add("flex");
  } else {
    header.classList.remove("navbar-fixed");
    toTop.classList.remove("flex");
    toTop.classList.add("hidden");
  }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// Klik diluar Hamburger, maka menu hilang
window.addEventListener("click", function (e) {
  if (e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove("hamburger-active");
    navMenu.classList.add("hidden");
  }
});

// Dark Mode Toggle
const darkToggle = document.querySelector("#dark-toggle");
const html = document.querySelector("html");

darkToggle.addEventListener("click", function () {
  if (darkToggle.checked) {
    html.classList.add("dark");
    localStorage.theme = "dark";
  } else {
    html.classList.remove("dark");
    localStorage.theme = "light";
  }
});

// Pindahkan Posisi Toggle Sesuai Mode
if (
  localStorage.theme === "dark" ||
  (!("theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  darkToggle.checked = true;
} else {
  darkToggle.checked = false;
}

// memanggil data API Instagram
const userId = "8350676161707252"; // Ganti dengan user ID Anda
const accessToken =
  "IGQWROVzhLaUl3STNOY08yVC00ZAUg1QnQ0a0dmc1VyNHlRaWRMZAWx6OV92X0hlZA0dxYm1Lcl9xaWZAPSGMwUHZAqMThZAQlFnZAGlPUF8xUmpWVEFVMmV5VlFqbklPaE1vdUtMUVc3Rzd4SExmaTZAUcnhWNVZA1cDhQODQZD"; // Ganti dengan token akses Anda

fetch(
  `https://graph.instagram.com/${userId}?fields=id,username,profile_picture_url,followers_count,name&access_token=${accessToken}`
)
  .then((response) => {
    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }
    return response.json();
  })
  .then((data) => {
    // Menampilkan data ke halaman
    document.getElementById("profile-picture").src = data.profile_picture_url;
    document.getElementById(
      "username"
    ).innerText = `Username: ${data.username}`;
    document.getElementById(
      "followers-count"
    ).innerText = `Followers: ${data.followers_count}`;
  })
  .catch((error) => console.error("Error fetching data:", error));
