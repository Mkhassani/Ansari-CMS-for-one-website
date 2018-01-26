<?php
require_once("application/libraries/gettext.php");
require_once("application/libraries/streams.php");


function tran($text){
    $CI = & get_instance();  //get instance, access the CI superobject
    $lang = $CI->session->userdata('lang');
    global $local_fetch;
   
    $local_file=new FileReader("application/language/{$lang}/broozmarket_fa.mo");
$local_fetch=new gettext_reader($local_file);

return $local_fetch->translate($text);
}