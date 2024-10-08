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
});
