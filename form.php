<?php

require 'connect.php';
$login = $_POST['login'];
$email = $_POST['email'];
$pass= $_POST['pass'];
$repass= $_POST['repass'];
$hpgurl= $_POST['hpgurl'];

$recaptcha = $_POST['g-recaptcha-response'];
 

if(!empty($recaptcha)) {
    
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    
    $secret = '6LfjdygUAAAAANldXM7QMuHBJMV_s5aKVCPwAF8j';
    
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
 
   
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
   
    $curlData = curl_exec($curl);
 
    curl_close($curl);  
 
    $curlData = json_decode($curlData, true);
 
   
    if($curlData['success']) {

if($pass == $repass){
        $insert_sql = "INSERT INTO NC (user, email, pass, url)" .
"VALUES('{$login}',  '{$email}', '{$pass}', '{$hpgurl}');";
mysql_query($insert_sql);
echo '<a href="admin_mode.php">&#1044;&#1086;&#1073;&#1072;&#1074;&#1083;&#1077;&#1085;&#1086;,&#1074;&#1077;&#1088;&#1085;&#1091;&#1090;&#1100;&#1089;&#1103;</a>';
 
 
   }
else{echo '<a>&#1055;&#1086;&#1074;&#1090;&#1086;&#1088;&#1080;&#1090;&#1077; &#1087;&#1086;&#1087;&#1099;&#1090;&#1082;&#1091;.</a>';

}

      
 
 
    } else {
        //&#1050;&#1072;&#1087;&#1095;&#1072; &#1085;&#1077; &#1087;&#1088;&#1086;&#1081;&#1076;&#1077;&#1085;&#1072;, &#1089;&#1086;&#1086;&#1073;&#1097;&#1072;&#1077;&#1084; &#1087;&#1086;&#1083;&#1100;&#1079;&#1086;&#1074;&#1072;&#1090;&#1077;&#1083;&#1102;, &#1074;&#1089;&#1077; &#1079;&#1072;&#1082;&#1088;&#1099;&#1074;&#1072;&#1077;&#1084; &#1089;&#1090;&#1080;&#1088;&#1072;&#1077;&#1084; &#1080; &#1090;&#1072;&#1082; &#1076;&#1072;&#1083;&#1077;&#1077;
    }
}
else {
    //&#1050;&#1072;&#1087;&#1095;&#1072; &#1085;&#1077; &#1074;&#1074;&#1077;&#1076;&#1077;&#1085;&#1072;, &#1089;&#1086;&#1086;&#1073;&#1097;&#1072;&#1077;&#1084; &#1087;&#1086;&#1083;&#1100;&#1079;&#1086;&#1074;&#1072;&#1090;&#1077;&#1083;&#1102;, &#1074;&#1089;&#1077; &#1079;&#1072;&#1082;&#1088;&#1099;&#1074;&#1072;&#1077;&#1084; &#1089;&#1090;&#1080;&#1088;&#1072;&#1077;&#1084; &#1080; &#1090;&#1072;&#1082; &#1076;&#1072;&#1083;&#1077;&#1077;
}

?>