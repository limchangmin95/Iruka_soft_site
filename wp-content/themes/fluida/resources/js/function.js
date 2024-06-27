(function () {
  console.log("test11");

  let contact_btn = document.getElementById("contact-submit");

  contact_btn.addEventListener("click", function () {
    let input_tags = document.querySelectorAll(".wpcf7-form-control-wrap");
    for (let i = 0; i < input_tags.length; i++) {
      input_tags[i].classList.add("is-show");
    }
  });
})();
