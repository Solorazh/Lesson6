<?php
session_start();
if (!isset($_SESSION['visits'])) {
   $_SESSION['visits'] = 0;
   $_SESSION['visits']++; 
   echo 'Вы посещали эту страницу: '.$_SESSION['visits']." раз(а).";
} else {  
   $_SESSION['visits']++; 
  echo "Вы посещали эту страницу ".$_SESSION['visits']." раз(а).";
}
  exit();