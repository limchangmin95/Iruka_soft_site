(function () {
  console.log("test11");

  let contact_btn = document.getElementById("contact-submit");
  if (contact_btn) {
    contact_btn.addEventListener("click", function () {
      let input_tags = document.querySelectorAll(".wpcf7-form-control-wrap");
      for (let i = 0; i < input_tags.length; i++) {
        input_tags[i].classList.add("is-show");
      }
    });
  }

  let info_href = document.getElementById("menu-item-19");

  info_href.addEventListener("click", function () {
    location.href = "http://localhost/wordpress/info/";
  });

  let ideology_href = document.getElementById("menu-item-20");

  ideology_href.addEventListener("click", function () {
    location.href = "http://localhost/wordpress/ideology/";
  });

  let business_href = document.getElementById("menu-item-21");

  business_href.addEventListener("click", function () {
    location.href = "http://localhost/wordpress/business/";
  });

  let recruit_href = document.getElementById("menu-item-22");

  recruit_href.addEventListener("click", function () {
    location.href = "http://localhost/wordpress/recruit/";
  });

  let contact_href = document.getElementById("menu-item-23");

  contact_href.addEventListener("click", function () {
    location.href = "http://localhost/wordpress/contact/";
  });
})();
