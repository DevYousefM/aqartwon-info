console.log("HERE");

let baseUrl = "http://127.0.0.1:8000";
$(document).ready(function () {
  // productsParent
  $.ajax({
    url: baseUrl + "/api/info/products", // The route or URL where the request will be sent
    type: "GET",
    data: {
      lang,
    },
    success: function (response) {
      response.forEach((product) => {
        let product_card = `
          <div class="card bg-dark text-white mb-4" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('${product.image}'); background-size: cover; background-position: center; height: 300px;">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h3 class="card-title text-end">${product.price}</h3>
              <a href="${product.url}" class="card-text text-end text-white">${product.name}</a>
            </div>
          </div>
        `;
        $("#productsParent").append(product_card);
      });
    },
  });
  $.ajax({
    url: baseUrl + "/api/info/subcategories", // The route or URL where the request will be sent
    type: "GET",
    data: {
      lang,
    },
    success: function (response) {
      response.forEach((subcategory, index) => {
        let subcategory_card = `
        <div class="subcategory-card">
            <div class="u-container-style u-effect-slide-left u-hover-box u-hover-feature u-image u-image-round u-layout-cell u-radius-50 u-shading u-size-30 u-image-1 u-images" data-href="${
              subcategory.url
            }" data-target="_blank" data-image-width="2000" data-image-height="2000" style="background-image: linear-gradient(0deg, rgba(26,26,26,0.2), rgba(26,26,26,0.2)), url(${
          subcategory.image
        })">
                      <div class="u-back-slide u-container-layout u-container-layouts"></div>
                      <div class="u-container-layout u-gradient u-opacity u-opacity-25 u-over-slide u-valign-bottom u-container-layout-after">
                        <h3 class="u-align-center u-custom-font u-font-lobster u-hover-feature u-text u-text-body-alt-color u-text-default unit-name u-text-unitName" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">${
                          subcategory.name
                        }</h3>
                        <h4 class="u-text u-text-body-alt-color u-text-nb">0${
                          index + 1
                        }</h4>
                      </div>
                    </div>
        </div>
        `;
        $("#subcategoriesParent").append(subcategory_card);
      });
    },
  });
  $.ajax({
    url: baseUrl + "/api/info/latestwork",
    type: "GET",
    data: {
      lang,
    },
    success: function (response) {
      let count = 0;
      let work_card = "";
      response.forEach((work, index) => {
        let single = `
          <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-24">
            <div class="u-back-slide" data-image-width="225" data-image-height="225">
              <img class="u-back-image u-expanded" src="${work.image}">
            </div>
          </div>
        `;

        if (count === 0) {
          work_card += `
            <div class="${
              index === 0 ? "u-active" : ""
            } u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-8">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-9">
                  <div class="u-gallery-inner u-gallery-inner-9">
          `;
        }

        work_card += single;

        count++;

        if (count === 3 || index === response.length - 1) {
          work_card += `
                  </div>
                </div>
              </div>
            </div>
          `;

          $("#latestworks").append(work_card);

          work_card = "";
          count = 0;
        }
      });
    },
  });
  $.ajax({
    url: baseUrl + "/api/info/info-areas",
    type: "POST",
    data: {
      lang,
    },
    success: function (response) {
      response.forEach((area) => {
        $(".areaSelect").append(
          `<option value="${area.id}">${area.name}</option>`
        );
      });
    },
  });
  $.ajax({
    url: baseUrl + "/api/info/info-budgets",
    type: "POST",
    data: {
      lang,
    },
    success: function (response) {
      response.forEach((budget) => {
        $(".budgetSelect").append(
          `<option value="${budget.id}">${budget.name}</option>`
        );
      });
    },
  });
});
function submitContactForm(e) {
  let form = $(e.target).closest("form");
  let success_message = form.find(".sucess_message");
  let error_message = form.find(".error_message");

  $.ajax({
    url: baseUrl + "/api/info/store-request",
    type: "POST",
    data: form.serialize() + "&lang=" + lang,
    success: function (response) {
      if (response.status == true) {
        success_message.text(response.msg);
        success_message.removeClass("d-none").show();
        error_message.hide();
        form[0].reset();
      } else {
        error_message.text(response.msg);
        error_message.removeClass("d-none").show();
        success_message.hide();
      }
    },
  });
}
