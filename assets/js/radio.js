const radioGroup = document.querySelector(".radio-group");

radioGroup.addEventListener("click", function(e) {
  if (e.target.matches("input[type='radio']")) {
    let selectedOption = e.target.nextElementSibling.textContent;
    console.log(`Selected option: ${selectedOption}`);
  }
});