console.log("HERE");

$(document).ready(function () {
  // productsParent
  $.ajax({
    url: "https://aqartown.com/api/info/products", // The route or URL where the request will be sent
    type: "GET",
    data: {
      lang
    },
    success: function (response) {
      response.forEach((product) => {
        let product_card = `
        <div style="background-image: linear-gradient(0deg, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('${product.image}');" class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-1 u-images" data-image-width="1080" data-image-height="1080" data-href="https://aqartown.com/ar/item/522/%D8%A8%D8%A7%D8%B1%D8%AA%D9%8A%D8%B4%D9%86-%D9%84%D9%84%D8%A5%D9%8A%D8%AC%D8%A7%D8%B1-%D9%81%D9%8A-%D9%85%D9%86%D8%B7%D9%82%D8%A9-%D8%AD%D9%8A%D9%88%D9%8A%D8%A9-%D9%88%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9-%D8%A8%D8%AF%D8%A7%D8%A6%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D8%B9%D8%A7%D8%AF%D9%8A%D8%8C-%D9%8A%D9%82%D8%B9-%D8%A3%D9%85%D8%A7%D9%85-%D8%A8%D9%86%D8%B2%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%B4%D8%A7%D8%B1%D8%B9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A" data-target="_blank">
                <div class="u-container-layout u-similar-container u-container-layouts">
                  <h3 class="u-text u-text-default u-headline u-align-right" dir="rtl">${product.price}</h3>
                  <a href="${product.url}" class="u-text u-text-default u-desc u-align-right" dir="rtl">${product.name}</a>
              </div>
        `;
        $("#productsParent").append(product_card);
      });
    },
  });
  $.ajax({
    url: "https://aqartown.com/api/info/subcategories", // The route or URL where the request will be sent
    type: "GET",
    data: {
      lang
    },
    success: function (response) {
      response.forEach((subcategory, index) => {
        let subcategory_card = `
        <div class="subcategory-card">
            <div class="u-container-style u-effect-slide-left u-hover-box u-hover-feature u-image u-image-round u-layout-cell u-radius-50 u-shading u-size-30 u-image-1 u-images" data-href="${subcategory.url}" data-target="_blank" data-image-width="2000" data-image-height="2000" style="background-image: linear-gradient(0deg, rgba(26,26,26,0.2), rgba(26,26,26,0.2)), url(${subcategory.image})">
                      <div class="u-back-slide u-container-layout u-container-layouts"></div>
                      <div class="u-container-layout u-gradient u-opacity u-opacity-25 u-over-slide u-valign-bottom u-container-layout-after">
                        <h3 class="u-align-center u-custom-font u-font-lobster u-hover-feature u-text u-text-body-alt-color u-text-default unit-name u-text-unitName" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">${subcategory.name}</h3>
                        <h4 class="u-text u-text-body-alt-color u-text-nb">0${index + 1}</h4>
                      </div>
                    </div>
        </div>
        `;
        $("#subcategoriesParent").append(subcategory_card);
      });
    },
  });
});
