<?php
     class Session{

          public static function init(){
               session_start();
          }
          public static function set($key,$value){
               $_SESSION[$key]=$value;
          }
          public static function get($key){
               if(isset($_SESSION[$key])){
                    return $_SESSION[$key];
               }else{
                    return false;
               }
          } 
          public static function acheck(){
               self::init();
               if(self::get('alogin')==false){
                    self::destroy();
                    header('Location:login.php');
               }
          }   
          public static function acheckLogin(){
               self::init();
               if(self::get('alogin')){
                    header('Location:dashboard.php');
               }
          }
          public static function check(){
               self::init();
               if(self::get('login')==false){
                    self::destroy();
                    header('Location:login.php');
               }
          }
          public static function checkLogin(){
               self::init();
               if(self::get('login')){
                    header('Location:dashboard.php');
               }
          }
          public static function destroy(){
               session_destroy();
               header('Location:login.php');
          }
     }