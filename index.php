<?php
  include 'config.php';

  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en')
    include 'index-en.php';
  else
    include 'index-ar.php';