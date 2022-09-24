/* Fixed navbar on scroll */

window.addEventListener("scroll", (e) => {
  const navbar = document.getElementById("navbar");
  navbar.classList.toggle("navbar-scroll", window.scrollY > 0);
});

/* Tabs */
const loginBtn = document.getElementById("LoginBtn");
const registerBtn = document.getElementById("RegisterBtn");
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");
const registerImg = document.getElementById("registerImg");
const loginImg = document.getElementById("loginImg");

loginBtn.addEventListener("click", (e) => {
  loginForm.style.display = "block";
  registerForm.style.display = "none";
  registerImg.style.display = "none";
  loginImg.style.display = "block";
  loginBtn.classList.add("active-button");
  registerBtn.classList.remove("active-button");
});

registerBtn.addEventListener("click", (e) => {
  loginForm.style.display = "none";
  registerForm.style.display = "block";
  registerImg.style.display = "block";
  loginImg.style.display = "none";
  loginBtn.classList.remove("active-button");
  registerBtn.classList.add("active-button");
});
