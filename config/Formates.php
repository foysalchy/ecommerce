<?php
     class Formates{
          public function validation($value){
               $value=trim($value);
               $value=stripcslashes($value);
               $value=htmlspecialchars($value);
               return $value;
          }
          public function trimWord($text,$limite=20){
               $text=$text."";
               $text=substr($text,0,$limite);
               return $text;
          }
     }