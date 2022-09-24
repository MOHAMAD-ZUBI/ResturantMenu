/* reset form and code form */
const resetForm = document.getElementById("resetForm");
const codeForm = document.getElementById("codeForm");
const resetBtn = document.getElementById("resetBtn");

resetBtn.addEventListener("click", (e) => {
  resetForm.style.display = "none";
  codeForm.style.display = "flex";
});
