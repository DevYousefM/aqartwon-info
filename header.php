<?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') echo '<link rel="stylesheet" href="assets/css/ar.css" media="screen">'; ?>
    <header class="u-clearfix u-header u-palette-1-dark-1 u-sticky u-sticky-7142 u-header" id="sec-fb85">
      <style class="u-sticky-style" data-style-id="7142">
        .u-sticky-fixed.u-sticky-7142:before, .u-body.u-sticky-fixed .u-sticky-7142:before {
          borders: top right bottom left !important
        }
      </style>
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1 logo-ar">
        <a href="<?php echo $lang['mainURL']?>" class="u-image u-logo u-image-1" data-image-width="832" data-image-height="300" title="Aqar Town">
          <img src="images/1647882841header-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-palette-3-base" href="#" style="">
              <svg class="u-svg-link" viewBox="0 0 24 24">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
              </svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </g>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="#<?php echo $lang["home"]?>" style="padding: 10px;"><?php echo $lang["home-front"]?></a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="#<?php echo $lang["about"]?>" style="padding: 10px;"><?php echo $lang["about-front"]?></a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="#<?php echo $lang["services"]?>" style="padding: 10px;"><?php echo $lang["services-front"]?></a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="#<?php echo $lang["rentalunits"]?>" style="padding: 10px;"><?php echo $lang["rentalunits-front"]?></a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="#<?php echo $lang["previousWork"]?>" style="padding: 10px;"><?php echo $lang["previousWork-front"]?></a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="#<?php echo $lang["contact"]?>" style="padding: 10px;"><?php echo $lang["contact-front"]?></a>
              </li>
              <li class="u-nav-item">
                <div class="button-cover">
                  <div class="button r" id="button-1">
                    <input type="checkbox" class="checkbox" id="langSwitch" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en' || isset($_GET['lang']) && $_GET['lang'] == 'en') echo 'checked="checked"'?>/>
                    <div class="knobs"></div>
                    <div class="layer"></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-container-style u-custom-color-5 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-spacing-0 u-unstyled u-nav-2">
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
                  <li class="u-nav-item">
                    <div class="button-cover">
                      <div class="button r" id="button-1">
                        <input type="checkbox" class="checkbox" id="langSwitch-collapse" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en' || isset($_GET['lang']) && $_GET['lang'] == 'en') echo 'checked="checked"'?>/>
                        <div class="knobs"></div>
                        <div class="layer"></div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      $(document).ready(function(){
                          $(this).scrollTop(0);
                      });
                      $("#langSwitch").change(function(){
                          var lang;
                          if( $("#langSwitch").is(':checked')){
                            lang = 'en';
                            $("#langSwitch-collapse").attr('checked',true);
                          }
                          else{ 
                            lang = 'ar';
                            $("#langSwitch-collapse").removeAttr('checked');
                          }
                          $.get( "index.php?lang="+lang);
                          setTimeout(function(){
                            location.reload();
                          }, 200);
                      });

                      $("#langSwitch-collapse").change(function(){
                          var lang;
                          if( $("#langSwitch-collapse").is(':checked')){
                            lang = 'en';
                            $("#langSwitch").attr('checked',true);
                          }
                          else{ 
                            lang = 'ar';
                            $("#langSwitch").removeAttr('checked');
                          }
                          $.get( "index.php?lang="+lang);
                          setTimeout(function(){
                            location.reload();
                          }, 200);
                      });
                    </script>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>