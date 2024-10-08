<?php

    // $connect = new mysqli('localhost', 'landing_user', 'Aqar@town2023', 'aqar_website');
    // mysqli_set_charset($connect, 'utf8');
    // if ($connect->connect_error) {
    //   die("Connection failed: " . $connect->connect_error);
    // }
    // else
    // {
    //   $query = $connect->prepare("SELECT * FROM products ORDER BY id DESC limit 3");
    //   $query->execute();
    //   $result = $query->get_result();
    //   while($fetching = $result->fetch_array())
    //   {
    //       echo $fetching["name"]."<br>";
    //   }
    // }

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title><?php echo $lang["title"]?></title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="style-ar.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.8.13, nicepage.com">
    <meta name="referrer" content="origin">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Aqar Town",
    "logo": "images/1647882841header-logo.png",
    "sameAs": [
        "tel:01100659191",
        "https://www.facebook.com/Aqartown",
        "https://www.instagram.com/aqar_town_business/",
        "https://api.whatsapp.com/send/?phone=%2B201100659191&text&app_absent=0",
        "https://www.linkedin.com/company/aqar-town",
        "https://www.facebook.com/AqarTownBusiness"
    ]
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Page 1">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/" />
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '594573298147439');
    fbq('track', 'PageView');
    fbq('track', 'ViewContent');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" 
         src="https://www.facebook.com/tr?id=594573298147439&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

    <link rel="icon"  type="image/x-icon" href="https://aqartown.com/assets/images/1647882903header-logo.png"/>
</head>
  <body data-home-page="" data-home-page-title="" class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="ar">
    <?php include 'header.php'; ?>
    <section class="u-align-left u-clearfix u-image u-shading u-section-1" src="" data-image-width="1500" data-image-height="1000" id="Home">
      <div class="u-clearfix u-sheet u-sheet-1">
        
        <div class="u-border-10 u-border-white u-hidden-md u-hidden-sm u-hidden-xs u-shape u-shape-bottom u-shape-right u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="X" data-animation-delay="250"></div>
        <div class="u-container-style u-custom-color-7 u-group u-hidden-md u-hidden-sm u-hidden-xs u-shape-rectangle u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000">

          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-align-center u-custom-font u-font-oswald u-text u-text-1"><?php echo $lang["getStarted"]?><br></h1>

            <p class="u-align-center u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"><?php echo $lang["bookAnAppointment"]?></p>

            <div class="u-align-center u-form u-form-1">
              <form action="controller.php" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 0px;" source="email" name="setAppointment" method="POST" id="appointment-form">
                <div class="u-form-email u-form-group u-label-none">
                  <input dir="rtl" type="text" placeholder="<?php echo $lang["fname"];?>" id="text-faed" name="fname" class="u-input u-input-rectangle u-input-1" required="required">
                </div>
                <div class="u-form-group u-label-none u-form-group-2">
                  <input dir="rtl" type="text" placeholder="<?php echo $lang["lname"];?>" id="text-243c" name="lname" class="u-input u-input-rectangle u-input-2" required="required">
                </div>
                <div class="u-form-email u-form-group u-label-none">
                  <input dir="rtl" type="email" placeholder="<?php echo $lang["email"];?>" id="email-a854" name="email" class="u-input u-input-rectangle u-input-3" required="">
                </div>
                <div class="u-form-group u-label-none u-form-group-3">
                  <input type="hidden" name="phone" id="countryCode-appointment">
                </div>
                <div class="u-form-group u-form-phone u-label-none u-form-group-4 u-phone-appointment">
                  <div class="iti iti--allow-dropdown">
                          <div class="iti__flag-container">
                            <div class="iti__selected-flag flag_appointment" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="United States: +1" aria-activedescendant="iti-0__item-us-preferred"><!--div class="iti__flag iti__us"></div-->
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="112px" height="112px" viewBox="0 0 112 112" enable-background="new 0 0 112 112" xml:space="preserve" style="width: 1.2em; height: 1.2em;">
                                <path fill="#EDEDED" d="M51.3,63.9V96h-3.5V70.7L11,96H7.1l39.8-27.3h-7.8L0,95.5v-7.8l27.5-19H0v-4.8C0,63.9,51.3,63.9,51.3,63.9z
                                   M61.7,96h3.4V70.7l37,25.3h9.9v-0.8L73.2,68.7H81l31,21.2v-3.1L85.4,68.7H112v-4.8H61.7V96z M51.3,16h-3.5v26.9L8.8,16H0v0.8
                                   l40.9,28.1h-7.7L0,22.1v3.8l27.5,19H0v4.8h51.3V16z M67.3,44.9L109.4,16h-5.1L65.1,42.9V16h-3.4v33.7H112v-4.8H85.4L112,26.6v-7
                                   L75,44.9H67.3z"></path>
                                <path fill="#1A237B" d="M65.1,42.9V16h39.2L65.1,42.9z M47.8,16h-39l39,26.9V16z M112,44.9V26.6L85.4,44.9H112z M112,86.8V68.7H85.4
                                L112,86.8z M11,96h36.8V70.7L11,96z M65.1,96h37l-37-25.3V96z M0,68.7v19l27.5-19H0z M0,25.9v19h27.5L0,25.9z"></path>
                                <path fill="#BD0034" d="M112,16v3.6L75,44.9h-7.7L109.4,16H112z M73.2,68.7L112,95.2v-5.3L81,68.7H73.2z M40.9,44.9L0,16.8v5.3
                                l33.2,22.8C33.2,44.9,40.9,44.9,40.9,44.9z M39.1,68.7L0,95.5V96h7.1l39.8-27.3H39.1z M61.7,16H51.3v33.7H0v14.2h51.3V96h10.4V63.9
                                H112V49.7H61.7V16z"></path>
                              </svg>
                              <div class="iti__arrow"></div>
                            </div>
                          </div>
                          <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="PHONE NUMBER" id="phone-appointment" name="phoneInput" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                         <script type="text/javascript">
                          $("#appointment-form").on('click keyup change', function(){
                            var country = $(".u-phone-appointment .iti__selected-flag").attr("title");
                            var code = country.split(': ')[1];
                            var val = $("#phone-appointment").val();
                            $("#countryCode-appointment").val(code+val);
                          });
                          </script>

                        </div>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-none">
                  <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-text-body-alt-color u-btn-2"><?php echo $lang["submit"];?></a>
                  <input type="submit" value="submit" class="u-form-control-hidden" name="setAppointment">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="5a1fafe913e166a06530e82ef3fe2883">
              </form>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $(document).ready(function(){
            $(".u-btn-bookAppointment").click(function(){
              $(".u-mobile-form").css("display","block");
            })
            $(".cancel").click(function(){
              $(".u-mobile-form").css("display","none");
            })
          })
        </script>
        <div class="u-hidden-lg u-hidden-xl u-mobile-form">
                      <!-- mobile form -->
                        <div class="u-align-center u-form u-form-1">
              <form action="controller.php" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 0px;" source="email" name="setAppointment" method="POST" id="appointment-form-mobile">
                <div class="u-form-email u-form-group u-label-none">
                  <input dir="rtl" type="text" placeholder="<?php echo $lang["fname"];?>" id="text-faed" name="fname" class="u-input u-input-rectangle u-input-1" required="required">
                </div>
                <div class="u-form-group u-label-none u-form-group-2">
                  <input dir="rtl" type="text" placeholder="<?php echo $lang["lname"];?>" id="text-243c" name="lname" class="u-input u-input-rectangle u-input-2" required="required">
                </div>
                <div class="u-form-email u-form-group u-label-none">
                  <input dir="rtl" type="email" placeholder="<?php echo $lang["email"];?>" id="email-a854" name="email" class="u-input u-input-rectangle u-input-3" required="">
                </div>
                <div class="u-form-group u-label-none u-form-group-3">
                  <input type="hidden" name="phone" id="countryCode-appointment-mobile">
                </div>
                <div class="u-form-group u-form-phone u-label-none u-form-group-4 u-phone-appointment-mobile">
                  <div class="iti iti--allow-dropdown">
                          <div class="iti__flag-container">
                            <div class="iti__selected-flag flag_appointment" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="United States: +1" aria-activedescendant="iti-0__item-us-preferred"><!--div class="iti__flag iti__us"></div-->
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="112px" height="112px" viewBox="0 0 112 112" enable-background="new 0 0 112 112" xml:space="preserve" style="width: 1.2em; height: 1.2em;">
                                <path fill="#EDEDED" d="M51.3,63.9V96h-3.5V70.7L11,96H7.1l39.8-27.3h-7.8L0,95.5v-7.8l27.5-19H0v-4.8C0,63.9,51.3,63.9,51.3,63.9z
                                   M61.7,96h3.4V70.7l37,25.3h9.9v-0.8L73.2,68.7H81l31,21.2v-3.1L85.4,68.7H112v-4.8H61.7V96z M51.3,16h-3.5v26.9L8.8,16H0v0.8
                                   l40.9,28.1h-7.7L0,22.1v3.8l27.5,19H0v4.8h51.3V16z M67.3,44.9L109.4,16h-5.1L65.1,42.9V16h-3.4v33.7H112v-4.8H85.4L112,26.6v-7
                                   L75,44.9H67.3z"></path>
                                <path fill="#1A237B" d="M65.1,42.9V16h39.2L65.1,42.9z M47.8,16h-39l39,26.9V16z M112,44.9V26.6L85.4,44.9H112z M112,86.8V68.7H85.4
                                L112,86.8z M11,96h36.8V70.7L11,96z M65.1,96h37l-37-25.3V96z M0,68.7v19l27.5-19H0z M0,25.9v19h27.5L0,25.9z"></path>
                                <path fill="#BD0034" d="M112,16v3.6L75,44.9h-7.7L109.4,16H112z M73.2,68.7L112,95.2v-5.3L81,68.7H73.2z M40.9,44.9L0,16.8v5.3
                                l33.2,22.8C33.2,44.9,40.9,44.9,40.9,44.9z M39.1,68.7L0,95.5V96h7.1l39.8-27.3H39.1z M61.7,16H51.3v33.7H0v14.2h51.3V96h10.4V63.9
                                H112V49.7H61.7V16z"></path>
                              </svg>
                              <div class="iti__arrow"></div>
                            </div>
                          </div>
                          <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="PHONE NUMBER" id="phone-appointment-mobile" name="phoneInput" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                         <script type="text/javascript">
                          $("#appointment-form-mobile").on('click keyup change', function(){
                            var country = $(".u-phone-appointment-mobile .iti__selected-flag").attr("title");
                            var code = country.split(': ')[1];
                            var val = $("#phone-appointment-mobile").val();
                            $("#countryCode-appointment-mobile").val(code+val);
                          });
                          </script>

                        </div>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-none">
                  <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-text-body-alt-color u-btn-2"><?php echo $lang["submit"];?></a>
                  <input type="submit" value="submit" class="u-form-control-hidden" name="setAppointment">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="5a1fafe913e166a06530e82ef3fe2883">
              </form>
              <button class="cancel"><?php echo $lang['cancel']; ?></button>
            </div>
            <!-- end mobile form -->
        </div>
        <h1 class="u-align-right u-text u-title u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="Left" data-animation-delay="0" data-animation-out="1" dir="<?php echo $lang['direction']?>"> <?php echo $lang["firstBlockTitle"];?></h1>
        <p class="u-align-right u-large-text u-text u-text-variant u-text-4 u-align-right-xs" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> <?php echo $lang["firstBlockSubtitle"];?></p>
        <div style="display:grid; grid-auto-flow: column; width:max-content;float: right; direction: rtl"><a href="#<?php echo $lang['about']?>" class="u-align-right u-border-2 u-border-grey-90 u-border-hover-grey-90 u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-round u-button-style u-custom-color-4 u-radius-1 u-top-left-radius-0 u-top-right-radius-0 u-btn-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"><?php echo $lang["readMore"];?></a>
        <a href="#" class="u-border-2 u-border-grey-90 u-border-hover-grey-90 u-btn u-btn-round u-button-style u-custom-color-5 u-hidden-lg u-hidden-xl u-radius-1 u-btn-1 u-btn-bookAppointment" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" ><?php echo $lang["bookAnAppointment"]?></a></div>

      </div>
    </section>
    <!-- sorna hon -->
    <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="Aboutus">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
        <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"></div>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h3 class="u-align-right u-text u-text-1"><?php echo $lang['about-front'] ?></h3>
                  <p class="about-text u-align-right u-text u-text-2"><?php echo $lang['aboutus-parag'] ?></p>
                  <a href="<?php echo $lang['mainURL']?>/about-us" class="u-active-black u-align-right u-border-2 u-border-active-black u-border-custom-color-3 u-border-hover-custom-color-5 u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-text-active-white u-text-body-color u-text-hover-white u-btn-1"><?php echo $lang['readMore']?></a>
                </div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250" data-image-width="1080" data-image-height="1080">
                <div class="u-container-layout u-valign-bottom u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-8" id="sec-7660">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-right u-text u-text-1"><?php echo $lang['latestRentalUnits-title'] ?></h2>
        <div class="u-clearfix u-custom-html u-custom-html-1">
          <div style="font-size:15vW;font-weight:bolder;opacity:0.1;color:#4a7298;z-index:4;" dir="rtl"><?php echo $lang['latestRentalUnits-title'] ?></div>
        </div>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-align-center u-repeater u-repeater-1">
                      <div style="background-image: linear-gradient(0deg, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('https://aqartown.com/assets/images/products/603069.jpg');" class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-1 u-images" data-image-width="1080" data-image-height="1080" data-href="https://aqartown.com/ar/item/522/%D8%A8%D8%A7%D8%B1%D8%AA%D9%8A%D8%B4%D9%86-%D9%84%D9%84%D8%A5%D9%8A%D8%AC%D8%A7%D8%B1-%D9%81%D9%8A-%D9%85%D9%86%D8%B7%D9%82%D8%A9-%D8%AD%D9%8A%D9%88%D9%8A%D8%A9-%D9%88%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9-%D8%A8%D8%AF%D8%A7%D8%A6%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D8%B9%D8%A7%D8%AF%D9%8A%D8%8C-%D9%8A%D9%82%D8%B9-%D8%A3%D9%85%D8%A7%D9%85-%D8%A8%D9%86%D8%B2%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%B4%D8%A7%D8%B1%D8%B9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A" data-target="_blank">
                        <div class="u-container-layout u-similar-container u-container-layouts">
                            <h3 class="u-text u-text-default u-headline u-align-right" dir="rtl">15000 جنيه</h3>
                            <p class="u-text u-text-default u-desc u-align-right" dir="rtl">بارتيشن للإيجار في منطقة حيوية وتجارية بدائري المعادي، يقع أمام بنزينة الإمارات على الشارع الرئيسي</p>
                        </div>
                    </div>
                    <div style="background-image: linear-gradient(0deg, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('https://aqartown.com/assets/images/products/603069.jpg');" class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-1 u-images" data-image-width="1080" data-image-height="1080" data-href="https://aqartown.com/ar/item/522/%D8%A8%D8%A7%D8%B1%D8%AA%D9%8A%D8%B4%D9%86-%D9%84%D9%84%D8%A5%D9%8A%D8%AC%D8%A7%D8%B1-%D9%81%D9%8A-%D9%85%D9%86%D8%B7%D9%82%D8%A9-%D8%AD%D9%8A%D9%88%D9%8A%D8%A9-%D9%88%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9-%D8%A8%D8%AF%D8%A7%D8%A6%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D8%B9%D8%A7%D8%AF%D9%8A%D8%8C-%D9%8A%D9%82%D8%B9-%D8%A3%D9%85%D8%A7%D9%85-%D8%A8%D9%86%D8%B2%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%B4%D8%A7%D8%B1%D8%B9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A" data-target="_blank">
                        <div class="u-container-layout u-similar-container u-container-layouts">
                            <h3 class="u-text u-text-default u-headline u-align-right" dir="rtl">15000 جنيه</h3>
                            <p class="u-text u-text-default u-desc u-align-right" dir="rtl">بارتيشن للإيجار في منطقة حيوية وتجارية بدائري المعادي، يقع أمام بنزينة الإمارات على الشارع الرئيسي</p>
                        </div>
                    </div>
                    <div style="background-image: linear-gradient(0deg, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('https://aqartown.com/assets/images/products/603069.jpg');" class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-1 u-images" data-image-width="1080" data-image-height="1080" data-href="https://aqartown.com/ar/item/522/%D8%A8%D8%A7%D8%B1%D8%AA%D9%8A%D8%B4%D9%86-%D9%84%D9%84%D8%A5%D9%8A%D8%AC%D8%A7%D8%B1-%D9%81%D9%8A-%D9%85%D9%86%D8%B7%D9%82%D8%A9-%D8%AD%D9%8A%D9%88%D9%8A%D8%A9-%D9%88%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9-%D8%A8%D8%AF%D8%A7%D8%A6%D8%B1%D9%8A-%D8%A7%D9%84%D9%85%D8%B9%D8%A7%D8%AF%D9%8A%D8%8C-%D9%8A%D9%82%D8%B9-%D8%A3%D9%85%D8%A7%D9%85-%D8%A8%D9%86%D8%B2%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%B4%D8%A7%D8%B1%D8%B9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A" data-target="_blank">
                        <div class="u-container-layout u-similar-container u-container-layouts">
                            <h3 class="u-text u-text-default u-headline u-align-right" dir="rtl">15000 جنيه</h3>
                            <p class="u-text u-text-default u-desc u-align-right" dir="rtl">بارتيشن للإيجار في منطقة حيوية وتجارية بدائري المعادي، يقع أمام بنزينة الإمارات على الشارع الرئيسي</p>
                        </div>
                    </div>
          </div>
        </div>
      </div>
    </section>
    <section class="skrollable u-align-center u-clearfix u-image u-parallax u-shading u-section-3" id="Services" data-image-width="1600" data-image-height="528">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="X" data-animation-delay="1000">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-text-white u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250" data-animation-direction=""><img src="images/5442183-22f9599d.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250"><?php echo $lang['Commercial-Real-Estate-Consultations'] ?></h3>
                <a href="https://aqartown.com/ar/category/%D8%A5%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA%20%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9%20%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9" class="u-border-2 u-border-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-light-1 u-btn-1" target="_blank"><?php echo $lang['readMore2'] ?></a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="750">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-text-white u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250" data-animation-direction=""><img src="images/6888097-1c407584.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250"><?php echo $lang['Commercial-Real-Estate-Brokerage'] ?></h3>
                <a href="https://aqartown.com/ar/category/%D8%A7%D9%84%D9%88%D8%B3%D8%A7%D8%B7%D8%A9%20%D8%A7%D9%84%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9%20%D8%A7%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9" class="u-border-2 u-border-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-light-1 u-btn-2" target="_blank"><?php echo $lang['readMore2'] ?></a>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-text-white u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250" data-animation-direction=""><img src="images/10714335-61c3d05c.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250"><?php echo $lang['Marketing-Commercial-Real-Estate-Projects'] ?></h3>
                <a href="https://aqartown.com/ar/category/%D8%AA%D8%B3%D9%88%D9%8A%D9%82%20%D9%85%D8%B4%D8%A7%D8%B1%D9%8A%D8%B9%20%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9%20%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A%D8%A9" class="u-border-2 u-border-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-light-1 u-btn-3" target="_blank"><?php echo $lang['readMore2'] ?></a>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-file-icon u-icon u-text-white u-icon-4" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250" data-animation-direction=""><img src="images/1452662-d954b02a.png" alt=""></span>
                <h3 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250"><?php echo $lang['Commercial-Leasing'] ?><br>
                  <br>
                </h3>
                <a href="https://aqartown.com/ar/category/%D8%A7%D9%84%D8%AA%D8%A3%D8%AC%D9%8A%D8%B1%20%D8%A7%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A" class="u-border-2 u-border-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-light-1 u-btn-4" target="_blank"><?php echo $lang['readMore2'] ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-grey-5 u-section-4" id="Rentalunits">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-right u-text u-text-1"><?php echo $lang['rentalUnits-title'] ?></h2>
        <div class="u-clearfix u-custom-html u-custom-html-1">
          <div class="u-align-right u-clearfix u-custom-html u-expanded-width u-custom-html-1" style="font-size:15vW;font-weight:bolder;opacity:0.1;color:#4a7298;z-index:4;" dir="rtl"><?php echo $lang['rentalUnits-title'] ?></div>
        </div>
        <div class="u-clearfix u-gutter-30 u-layout-wrap unit-img u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-effect-slide-left u-hover-box u-hover-feature u-image u-image-round u-layout-cell u-radius-50 u-shading u-size-30 u-image-1 u-images" data-href="https://aqartown.com/en/category/Marketing-of-shops/Shops" data-target="_blank" data-image-width="2000" data-image-height="2000">
                    <div class="u-back-slide u-container-layout u-container-layouts"></div>
                    <div class="u-container-layout u-gradient u-opacity u-opacity-25 u-over-slide u-valign-bottom u-container-layout-after">
                      <h3 class="u-align-center u-custom-font u-font-lobster u-hover-feature u-text u-text-body-alt-color u-text-default unit-name u-text-unitName" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><?php echo $lang['shops'] ?></h3>
                      <h4 class="u-text u-text-body-alt-color u-text-nb">01 </h4>
                    </div>
                  </div>
                  <div class="u-container-style u-effect-slide-left u-hover-box u-hover-feature u-image u-image-round u-layout-cell u-radius-50 u-shading u-size-30 u-image-2 u-images" data-image-width="4500" data-image-height="4500" data-href="https://aqartown.com/en/category/Marketing-of-shops/Cafes" data-target="_blank">
                    <div class="u-back-slide u-container-layout u-container-layouts"></div>
                    <div class="u-container-layout u-gradient u-opacity u-opacity-25 u-over-slide u-valign-bottom u-container-layout-after">
                      <h3 class="u-align-center u-custom-font u-font-lobster u-hover-feature u-text u-text-body-alt-color u-text-default unit-name u-text-unitName"><?php echo $lang['cafes'] ?></h3>
                      <h4 class="u-text u-text-body-alt-color u-text-nb">02</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-effect-slide-left u-hover-box u-hover-feature u-image u-image-round u-layout-cell u-radius-50 u-shading u-size-30 u-image-3 u-images" data-image-width="4000" data-image-height="4000" data-href="https://aqartown.com/en/category/Marketing-of-shops/Restaurants" data-target="_blank">
                    <div class="u-back-slide u-container-layout u-container-layouts"></div>
                    <div class="u-container-layout u-gradient u-opacity u-opacity-25 u-over-slide u-valign-bottom u-container-layout-after">
                      <h3 class="u-align-center u-custom-font u-font-lobster u-hover-feature u-text u-text-body-alt-color u-text-default unit-name u-text-unitName"><?php echo $lang['restaurants'] ?></h3>
                      <h4 class="u-text u-text-body-alt-color u-text-nb">03</h4>
                    </div>
                  </div>
                  <div class="u-container-style u-effect-slide-left u-hover-box u-hover-feature u-image u-image-round u-layout-cell u-radius-50 u-shading u-size-30 u-image-4 u-images" data-image-width="4500" data-image-height="4500" data-href="https://aqartown.com/en/category/Marketing-of-shops/Commercial-projects" data-target="_blank">
                    <div class="u-back-slide u-container-layout u-container-layouts"></div>
                    <div class="u-container-layout u-gradient u-opacity u-opacity-25 u-over-slide u-valign-bottom u-container-layout-after">
                      <h3 class="u-align-center u-custom-font u-font-lobster u-hover-feature u-text u-text-body-alt-color u-text-default unit-name u-text-unitName"><?php echo $lang['commercial-projects'] ?></h3>
                      <h4 class="u-text u-text-body-alt-color u-text-nb">04</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
    </section>
    <section class="u-align-center u-clearfix u-section-7" id="Previouswork">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-right u-clearfix u-custom-html u-expanded-width u-custom-html-1">
          <div class="u-align-right u-clearfix u-custom-html u-expanded-width u-custom-html-1" style="font-size:15vW;font-weight:bolder;opacity:0.1;color:#4a7298;z-index:4;" dir="rtl"><?php echo $lang['previous-work'] ?></div>
        </div>
        <h2 class="u-align-right u-custom-font u-font-montserrat u-text u-text-1"><?php echo $lang['previous-work'] ?></h2>
        <div id="carousel-8627" data-interval="3000" data-u-ride="carousel" class="fff u-carousel u-expanded-width-lg u-expanded-width-xl u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-8627" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="2" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="3" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="4" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="5" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="6" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="7" style="height: 10px; width: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gallery u-hidden-md u-hidden-sm u-hidden-xs u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-47af">
                  <div class="u-gallery-inner u-gallery-inner-1" role="listbox">
                    <div class="u-effect-fade u-gallery-item u-shape-rectangle u-gallery-item-1">
                      <div class="u-back-slide" data-image-width="2048" data-image-height="2048">
                        <img class="u-back-image u-expanded" src="images/1680724986327631322_853735022583537_6400762641622294531_n.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-over-slide-1">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-shape-rectangle u-gallery-item-2">
                      <div class="u-back-slide" data-image-width="1000" data-image-height="1000">
                        <img class="u-back-image u-expanded" src="images/16535767482a1c37a6-bde1-408d-abaa-0fa682e12564.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-over-slide-2">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-shape-rectangle u-gallery-item-3">
                      <div class="u-back-slide" data-image-width="1080" data-image-height="1080">
                        <img class="u-back-image u-expanded" src="images/16535767698ded779d-bd05-4f0b-9b96-1ed65d71c4d4.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-over-slide-3">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-expanded-width u-gallery u-hidden-lg u-hidden-xl u-layout-grid u-lightbox u-show-text-on-hover u-gallery-2">
                  <div class="u-gallery-inner u-gallery-inner-2">
                    <div class="u-effect-fade u-gallery-item">
                      <div class="u-back-slide" data-image-width="2048" data-image-height="2048">
                        <img class="u-back-image u-expanded" src="images/1680724986327631322_853735022583537_6400762641622294531_n.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-4">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                      <div class="u-back-slide" data-image-width="1000" data-image-height="1000">
                        <img class="u-back-image u-expanded" src="images/16535767482a1c37a6-bde1-408d-abaa-0fa682e12564.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-5">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                      <div class="u-back-slide" data-image-width="1080" data-image-height="1080">
                        <img class="u-back-image u-expanded" src="images/16535767698ded779d-bd05-4f0b-9b96-1ed65d71c4d4.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-6">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-expanded-width-xl u-slide">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width-lg u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-3">
                  <div class="u-gallery-inner u-gallery-inner-3">
                    <div class="u-effect-fade u-gallery-item u-gallery-item-7">
                      <div class="u-back-slide" data-image-width="796" data-image-height="796">
                        <img class="u-back-image u-expanded" src="images/1653576801163827041_712815946082582_5820588313047084429_n.jpg">
                      </div>
                      <div class="u-container-align-center u-over-slide u-shading u-valign-middle u-over-slide-7">
                        <h3 class="u-align-center u-gallery-heading" style="width: 283px; margin-right: 0px; margin-left: 0px;"></h3>
                        <p class="u-align-center u-gallery-text" style="width: 283px; margin-right: 0px; margin-left: 0px;"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-8">
                      <div class="u-back-slide" data-image-width="225" data-image-height="225">
                        <img class="u-back-image u-expanded" src="images/1653577214images.jpg">
                      </div>
                      <div class="u-container-align-center u-over-slide u-shading u-valign-middle u-over-slide-8">
                        <h3 class="u-align-center u-gallery-heading" style="width: 283px; margin-right: 0px; margin-left: 0px;"></h3>
                        <p class="u-align-center u-gallery-text" style="width: 283px; margin-right: 0px; margin-left: 0px;"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-9">
                      <div class="u-back-slide" data-image-width="1000" data-image-height="1000">
                        <img class="u-back-image u-expanded" src="images/1661710634300161655_432836132197434_2410304899508940822_n.jpg">
                      </div>
                      <div class="u-container-align-center u-over-slide u-shading u-valign-middle u-over-slide-9">
                        <h3 class="u-align-center u-gallery-heading" style="width: 283px; margin-right: 0px; margin-left: 0px;"></h3>
                        <p class="u-align-center u-gallery-text" style="width: 283px; margin-right: 0px; margin-left: 0px;"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-3">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                  <div class="u-gallery-inner u-gallery-inner-4">
                    <div class="u-effect-fade u-gallery-item u-gallery-item-10">
                      <div class="u-back-slide" data-image-width="1079" data-image-height="1079">
                        <img class="u-back-image u-expanded" src="images/1653577193270289369_152664197093541_7656780396437844989_n.jpg">
                      </div>
                      <div class="u-container-align-center u-over-slide u-shading u-valign-middle u-over-slide-10">
                        <h3 class="u-align-center u-gallery-heading" style="width: 283px; margin-right: 0px; margin-left: 0px;"></h3>
                        <p class="u-align-center u-gallery-text" style="width: 283px; margin-right: 0px; margin-left: 0px;"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-11">
                      <div class="u-back-slide" data-image-width="1280" data-image-height="1280">
                        <img class="u-back-image u-expanded" src="images/1671036900.jpg">
                      </div>
                      <div class="u-container-align-center u-over-slide u-shading u-valign-middle u-over-slide-11">
                        <h3 class="u-align-center u-gallery-heading" style="width: 283px; margin-right: 0px; margin-left: 0px;"></h3>
                        <p class="u-align-center u-gallery-text" style="width: 283px; margin-right: 0px; margin-left: 0px;"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item u-gallery-item-12">
                      <div class="u-back-slide" data-image-width="204" data-image-height="248">
                        <img class="u-back-image u-expanded u-back-image-12" src="images/1653577224download.png">
                      </div>
                      <div class="u-container-align-center u-over-slide u-shading u-valign-middle u-over-slide-12">
                        <h3 class="u-align-center u-gallery-heading" style="width: 283px; margin-right: 0px; margin-left: 0px;"></h3>
                        <p class="u-align-center u-gallery-text" style="width: 283px; margin-right: 0px; margin-left: 0px;"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-4">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-5">
                  <div class="u-gallery-inner u-gallery-inner-5">
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-13">
                      <div class="u-back-slide" data-image-width="150" data-image-height="130">
                        <img class="u-back-image u-expanded" src="images/1653576882dc61e451-2580-11e8-add5-0242ac110011.jpg">
                      </div>
                      <div class="u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-over-slide u-shading u-valign-middle u-over-slide-13">
                        <h3 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-gallery-heading" style="width: 233px; margin-right: -136px; margin-left: -136px;"></h3>
                        <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-gallery-text" style="width: 233px; margin-right: -136px; margin-left: -136px;"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-14">
                      <div class="u-back-slide" data-image-width="2048" data-image-height="2048">
                        <img class="u-back-image u-expanded u-image-contain" src="images/1653577167PicsArt_09-22-02.10.05.jpg">
                      </div>
                      <div class="u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-over-slide u-shading u-valign-middle u-over-slide-14">
                        <h3 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-gallery-heading" style="width: 233px; margin-right: -136px; margin-left: -136px;"></h3>
                        <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-gallery-text" style="width: 233px; margin-right: -136px; margin-left: -136px;"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-15">
                      <div class="u-back-slide" data-image-width="1280" data-image-height="1272">
                        <img class="u-back-image u-expanded" src="images/1680382700325474704_897032894988968_2970314499271032655_n.jpg">
                      </div>
                      <div class="u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-over-slide u-shading u-valign-middle u-over-slide-15">
                        <h3 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-gallery-heading" style="width: 233px; margin-right: -136px; margin-left: -136px;"></h3>
                        <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-gallery-text" style="width: 233px; margin-right: -136px; margin-left: -136px;"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-5">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-6">
                  <div class="u-gallery-inner u-gallery-inner-6">
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-16">
                      <div class="u-back-slide" data-image-width="1080" data-image-height="1080">
                        <img class="u-back-image u-expanded" src="images/1653576873a1387e3e-2dca-46d2-8f1f-39f71cf7b823.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-16">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-17">
                      <div class="u-back-slide" data-image-width="958" data-image-height="957">
                        <img class="u-back-image u-expanded" src="images/1653576823210224559_272368784686041_1674625036031757823_n.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-17">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-18">
                      <div class="u-back-slide" data-image-width="225" data-image-height="225">
                        <img class="u-back-image u-expanded" src="images/1653576913download4.png">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-18">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-6">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-7">
                  <div class="u-gallery-inner u-gallery-inner-7">
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-19">
                      <div class="u-back-slide" data-image-width="2048" data-image-height="2048">
                        <img class="u-back-image u-expanded" src="images/1653576866280856546_428510909278493_6164828381403678367_n.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-19">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-20">
                      <div class="u-back-slide" data-image-width="1080" data-image-height="1080">
                        <img class="u-back-image u-expanded u-image-contain" src="images/1653576849273473537_5023530847696999_2430480242375850009_n.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-20">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-21">
                      <div class="u-back-slide" data-image-width="225" data-image-height="225">
                        <img class="u-back-image u-expanded u-image-contain" src="images/1653577185download1.png">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-21">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-7">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-8">
                  <div class="u-gallery-inner u-gallery-inner-8">
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-22">
                      <div class="u-back-slide" data-image-width="773" data-image-height="773">
                        <img class="u-back-image u-expanded" src="images/16710397331.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-over-slide-22">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-23">
                      <div class="u-back-slide" data-image-width="960" data-image-height="960">
                        <img class="u-back-image u-expanded" src="images/1671036470310285226_109594238598857_7681578941095811955_n.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-over-slide-23">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-8">
                <div class="u-align-center u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-9">
                  <div class="u-gallery-inner u-gallery-inner-9">
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-24">
                      <div class="u-back-slide" data-image-width="225" data-image-height="225">
                        <img class="u-back-image u-expanded" src="images/1653577176download2.png">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-24">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-25">
                      <div class="u-back-slide" data-image-width="1024" data-image-height="1024">
                        <img class="u-back-image u-expanded u-image-contain" src="images/1661710652301883762_1064549970861223_133040987908862045_n.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-25">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-hover-zoom u-gallery-item u-gallery-item-26">
                      <div class="u-back-slide" data-image-width="2048" data-image-height="2048">
                        <img class="u-back-image u-expanded u-image-contain" src="images/1653577167PicsArt_09-22-02.10.05.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-26">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-custom-color-4 u-hover-custom-color-5 u-icon-rectangle u-shape-circle u-spacing-10 u-text-body-alt-color u-carousel-control-1" href="#carousel-8627" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 256 256"><g><polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
</g></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 256 256"><g><polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
</g></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-custom-color-4 u-hover-custom-color-5 u-icon-rectangle u-shape-circle u-spacing-10 u-text-body-alt-color u-carousel-control-2" href="#carousel-8627" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 306 306"><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
</g></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 306 306"><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
</g></svg>
            </span>
          </a>
        </div>
        <a href="Page-1.html#sec-2a5d" class="u-active-black u-align-center u-border-active-black u-border-hover-black u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-custom-color-3 u-radius-50 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><?php echo $lang['bookAnAppointment'] ?></a>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-5 u-section-6" id="Contactus">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-subtitle u-text u-text-1"><?php echo $lang['contact-front'] ?></h2>
        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                  <div class="u-align-left u-form u-form-1">
                    <form action="controller.php" class="u-clearfix u-form-spacing-28 u-inner-form" style="padding: 0px;" source="email" name="form" method="POST" id="contact-form">
                      <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-none">
                        <input type="text" placeholder="<?php echo $lang['fullName'] ?>" id="name-5a14" name="fullName" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required="" dir="rtl">
                      </div>
                      <div class="u-form-email u-form-group u-form-partition-factor-2 u-label-none">
                        <input  dir="rtl" type="email" placeholder="<?php echo $lang['email'] ?>" id="email-5a14" name="email" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required="">
                      </div>
                      <div class="u-form-group u-label-none u-form-group-3">
                        <input type="hidden" name="phone" id="countryCode-contact">
                      </div>
                      <div class="u-form-group u-form-phone u-label-none u-phone-contact">
                       <div class="iti iti--allow-dropdown">
                          <div class="iti__flag-container">
                            <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="United States: +1" aria-activedescendant="iti-0__item-us-preferred"><!--div class="iti__flag iti__us"></div-->
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="112px" height="112px" viewBox="0 0 112 112" enable-background="new 0 0 112 112" xml:space="preserve" style="width: 1.2em; height: 1.2em;">
                                <path fill="#EDEDED" d="M51.3,63.9V96h-3.5V70.7L11,96H7.1l39.8-27.3h-7.8L0,95.5v-7.8l27.5-19H0v-4.8C0,63.9,51.3,63.9,51.3,63.9z
                                   M61.7,96h3.4V70.7l37,25.3h9.9v-0.8L73.2,68.7H81l31,21.2v-3.1L85.4,68.7H112v-4.8H61.7V96z M51.3,16h-3.5v26.9L8.8,16H0v0.8
                                   l40.9,28.1h-7.7L0,22.1v3.8l27.5,19H0v4.8h51.3V16z M67.3,44.9L109.4,16h-5.1L65.1,42.9V16h-3.4v33.7H112v-4.8H85.4L112,26.6v-7
                                   L75,44.9H67.3z"></path>
                                <path fill="#1A237B" d="M65.1,42.9V16h39.2L65.1,42.9z M47.8,16h-39l39,26.9V16z M112,44.9V26.6L85.4,44.9H112z M112,86.8V68.7H85.4
                                L112,86.8z M11,96h36.8V70.7L11,96z M65.1,96h37l-37-25.3V96z M0,68.7v19l27.5-19H0z M0,25.9v19h27.5L0,25.9z"></path>
                                <path fill="#BD0034" d="M112,16v3.6L75,44.9h-7.7L109.4,16H112z M73.2,68.7L112,95.2v-5.3L81,68.7H73.2z M40.9,44.9L0,16.8v5.3
                                l33.2,22.8C33.2,44.9,40.9,44.9,40.9,44.9z M39.1,68.7L0,95.5V96h7.1l39.8-27.3H39.1z M61.7,16H51.3v33.7H0v14.2h51.3V96h10.4V63.9
                                H112V49.7H61.7V16z"></path>
                              </svg>
                              <div class="iti__arrow"></div>
                            </div>
                          </div>
                          <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="PHONE NUMBER" id="phone-contact" name="phoneInput" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                          <script type="text/javascript">
                            $("#contact-form").on('click keyup change', function(){
                              var country = $(".u-phone-contact .iti__selected-flag").attr("title");
                              var code = country.split(': ')[1];
                              var val = $("#phone-contact").val();
                              $("#countryCode-contact").val(code+val);
                            });
                          </script>

                        </div>
                      </div>
                      <div class="u-form-group u-label-none">
                        <input  dir="rtl" type="text" placeholder="<?php echo $lang['subject'] ?>" id="text-0715" name="subject" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                      </div>
                      <div class="u-form-group u-form-message u-label-none">
                        <textarea  dir="rtl" rows="4" cols="50" id="message-5a14" name="msg" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required="" placeholder="<?php echo $lang['msg'] ?>"></textarea>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit u-label-none">
                        <a href="#" class="u-active-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-5 u-palette-3-base u-radius-50 u-btn-1"><?php echo $lang['submit'] ?></a>
                        <input  dir="rtl" type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true" name="contactMessage">
                      </div>
                      <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                      <input  dir="rtl" type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                      <input  dir="rtl" type="hidden" name="formServices" value="5a1fafe913e166a06530e82ef3fe2883">
                    </form>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="250" data-animation-direction="">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-align-right u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-custom-color-5 u-icon-1"><img src="images/ce131fa2-9b26-4c33-a9f7-aff3357242a7-288d3367.png" alt=""></span>
                          <h5 class="u-text u-text-2"><?php echo $lang['contact-front2'] ?></h5>
                          <p class="u-text u-text-3">
                            <span style="background-image: none; font-size: 1.125rem; padding: 0px;">
                              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="tel:01148222118">01148222118</a>&nbsp;,&nbsp;<a href="tel:01100659191" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">01100659191</a>
                            </span>
                          </p>
                        </div>
                      </div>
                      <div class="u-align-right u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-file-icon u-icon u-text-custom-color-5 u-icon-1"><img src="images/450016-fb4bb387.png" alt=""></span>
                          <h5 class="u-text u-text-2"><?php echo $lang['address'] ?></h5>
                          <p class="u-text u-text-5"><?php echo $lang['address-details'] ?><a href="https://aqartown.com/en/contact#" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4"></a>
                          </p>
                        </div>
                      </div>
                      <div class="u-align-right u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-text-custom-color-5 u-icon-1"><img src="images/447114-064f3b2b.png" alt=""></span>
                          <h5 class="u-text u-text-2"><?php echo $lang['working-hours'] ?></h5>
                          <p class="u-text u-text-7"><?php echo $lang['working-hours-details'] ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-light-2 u-typography-custom-page-typography-12--Map u-section-7" id="sec-a603">
      <div class="u-expanded u-grey-light-2 u-map">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13811.751528178265!2d31.345600000000005!3d30.067315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583ffb9830c727%3A0xcc9b321db66ce549!2sAQAR%20TOWN!5e0!3m2!1sen!2seg!4v1684688541012!5m2!1sen!2seg" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlMkMlMjJlbWJlZCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkZtYXBzJTJGZW1iZWQlM0ZwYiUzRCExbTE0ITFtOCExbTMhMWQxMzgxMS43NTE1MjgxNzgyNjUhMmQzMS4zNDU2MDAwMDAwMDAwMDUhM2QzMC4wNjczMTUhM20yITFpMTAyNCEyaTc2OCE0ZjEzLjEhM20zITFtMiExczB4MTQ1ODNmZmI5ODMwYzcyNyUyNTNBMHhjYzliMzIxZGI2NmNlNTQ5ITJzQVFBUiUyNTIwVE9XTiE1ZTAhM20yITFzZW4hMnNlZyE0djE2ODQ2ODg1NDEwMTIhNW0yITFzZW4hMnNlZyUyMiU3RA=="></iframe>
        </div>
      </div>
    </section>
    
    
      <footer class="u-clearfix u-custom-color-3 u-footer" id="Footer">
        <div class="triangle triangle-1"></div>
        <div class="triangle triangle-2"></div>
        <div class="triangle triangle-3"></div>
        <div class="triangle triangle-4"></div>

        <div class="triangle2 triangle-5"></div>
        <div class="triangle2 triangle-6"></div>
        <div class="triangle2 triangle-7"></div>
        <div class="triangle2 triangle-8"></div>

        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>

        <div class="circle square-1"></div>
        <div class="circle square-2"></div>
        <div class="circle square-3"></div>
        <div class="circle square-4"></div>
        <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-align-left-md u-align-right-lg u-align-right-xl u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-3">
                <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xl u-valign-top-xs u-container-layout-3">
                  <h3>
                    <?php echo $lang['follow-us'] ?>
                    <hr>
                  </h3>
                  <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" target="_blank" data-type="Phone" title="Phone" href="tel:01100659191">
                      <span class="u-icon u-social-icon u-social-phone u-icon-1">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-41be"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-41be">
                          <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                          <path fill="#FFFFFF" d="M82.7,66c-3.9,0-7.7-0.6-11.3-1.8c-1.8-0.6-4,0-5,1.1l-7.1,5.4c-8.3-4.4-13.4-9.5-17.7-17.7l5.2-7
                            c1.4-1.4,1.8-3.3,1.3-5.2c-1.2-3.6-1.8-7.5-1.8-11.3c0-2.8-2.3-5.1-5.1-5.1H29.5c-2.8,0-5.1,2.3-5.1,5.1c0,32.2,26.2,58.4,58.4,58.4
                            c2.8,0,5.1-2.3,5.1-5.1V71.1C87.8,68.3,85.6,66,82.7,66z"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/Aqartown">
                      <span class="u-icon u-social-facebook u-social-icon u-icon-2">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b545"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b545">
                          <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                          <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
                          c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/aqar_town_business/">
                      <span class="u-icon u-social-icon u-social-instagram u-icon-3">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-aa89"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-aa89">
                          <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                          <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
                          z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                          <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                          <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
                          C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
                          c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="Whatsapp" title="Whatsapp" href="https://api.whatsapp.com/send/?phone=%2B201100659191&amp;text&amp;app_absent=0">
                      <span class="u-icon u-social-icon u-social-whatsapp u-icon-4">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5a0e"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5a0e">
                          <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                          <path fill="#FFFFFF" d="M83.8,28.3C77.2,21.7,68.4,18,59,18c-19.3,0-35.1,15.7-35.1,35.1c0,6.2,1.6,12.2,4.7,17.5l-5,18.2L42.2,84
                          c5.1,2.8,10.9,4.3,16.8,4.3h0l0,0c19.3,0,35.1-15.7,35.1-35.1C94.1,43.8,90.5,35,83.8,28.3 M59,82.3L59,82.3
                          c-5.2,0-10.4-1.4-14.9-4.1l-1.1-0.6l-11,2.9L35,69.8l-0.7-1.1c-2.9-4.6-4.5-10-4.5-15.5C29.8,37,42.9,24,59,24
                          c7.8,0,15.1,3,20.6,8.6c5.5,5.5,8.5,12.8,8.5,20.6C88.2,69.2,75.1,82.3,59,82.3 M75,60.5c-0.9-0.4-5.2-2.6-6-2.9
                          c-0.8-0.3-1.4-0.4-2,0.4s-2.3,2.9-2.8,3.4c-0.5,0.6-1,0.7-1.9,0.2c-0.9-0.4-3.7-1.4-7.1-4.4c-2.6-2.3-4.4-5.2-4.9-6.1
                          c-0.5-0.9-0.1-1.4,0.4-1.8c0.4-0.4,0.9-1,1.3-1.5c0.4-0.5,0.6-0.9,0.9-1.5c0.3-0.6,0.1-1.1-0.1-1.5c-0.2-0.4-2-4.8-2.7-6.5
                          c-0.7-1.7-1.4-1.5-2-1.5c-0.5,0-1.1,0-1.7,0c-0.6,0-1.5,0.2-2.3,1.1c-0.8,0.9-3.1,3-3.1,7.3c0,4.3,3.1,8.5,3.6,9.1
                          c0.4,0.6,6.2,9.4,15,13.2c2.1,0.9,3.7,1.4,5,1.8c2.1,0.7,4,0.6,5.5,0.3c1.7-0.3,5.2-2.1,5.9-4.2c0.7-2,0.7-3.8,0.5-4.2
                          C76.5,61.1,75.9,60.9,75,60.5"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn" href="https://www.linkedin.com/company/aqar-town">
                      <span class="u-icon u-social-icon u-social-linkedin u-icon-5">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-800e"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-800e">
                          <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                          <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
                          C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
                          H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="Facebook" title="Facebook" href="https://www.facebook.com/AqarTownBusiness">
                      <span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-6">
                        <img src="images/3955011.png" alt="">
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xl u-valign-top-xs u-container-layout-2">
                  <a href="https://nicepage.com" class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-image u-logo u-image-1" data-image-width="832" data-image-height="300">
                    <img src="images/1647882841header-logo.png" class="u-logo-image u-logo-image-1">
                  </a>
                  <div data-position="" class="u-position u-position-1"><!--block-->
                      <div class="u-block">
                        <div class="u-block-container u-clearfix"><!--block_content-->
                          <div class="u-align-right u-block-content u-text u-text-1" lang="ar">
                            <?php echo $lang['footer-parag'] ?> 
                          </div><!--/block_content-->
                        </div>
                      </div><!--/block-->
                    </div><!--/position-->
                </div>
              </div>
              <div class="u-align-right-sm u-align-right-xs u-align-right-md u-align-right-xl u-container-style u-layout-cell u-layout-cell-3 u-right-cell u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs" style="min-height: 319px; align-items: center;">
                  <div class="u-container-layout u-container-layout-1"><!--position-->
                    
                    <h3>
                    <?php echo $lang['quick-links'] ?>
                    <hr>
                  </h3>
                  <ul class="u-align-right u-nav u-popupmenu-items u-spacing-0 u-unstyled u-nav-3" style="display: grid;">
                  <li class="u-nav-item">
                  <a class="u-button-style u-nav-link" href="#<?php echo $lang["home"]?>"><?php echo $lang["home-front"];?></a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="#<?php echo $lang["about"]?>"><?php echo $lang["about-front"];?></a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="#<?php echo $lang["services"]?>"><?php echo $lang["services-front"];?></a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="#<?php echo $lang["rentalunits"]?>"><?php echo $lang["rentalunits-front"];?></a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="#<?php echo $lang["contact"]?>"><?php echo $lang["contact-front"];?></a>
                  </li>
                </ul>

                  </div>
                </div>
            </div>
          </div>
        </div>
      </div></footer>
    <!-- <section class="u-backlink u-clearfix u-grey-80">
        <span>Landing Page Template | </span>
      <p class="u-text">
        <span>Created by</span>
      </p>
      <a class="u-link" href="http://portfolio.doublvy.com/" target="_blank">
        <span>Wael Mahfouz</span>
      </a>. 
    </section> -->
    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 30px; bottom: 30px; padding: 20px; background-image: none;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-90 u-palette-1-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use>
        </svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98">
          <path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path>
        </svg>
    </span>
</body></html>