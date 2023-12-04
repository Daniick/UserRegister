const menuToggle = document.getElementById("menuToggle");
const dropdownMenu = document.getElementById("dropdownMenu");

menuToggle.addEventListener("click", function () {
  dropdownMenu.classList.toggle("active");
  menuToggle.classList.toggle("active");
});
