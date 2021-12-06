<?php
$ip = $_SERVER['REMOTE_ADDR'];
if($ip === "127.0.0.1"){
  echo "Hello Admin";
}
else{
  die("You are not: 127.0.0.1");
}
$blocklist = array("|","$","(","-",")","`","{","}",";",">","<","&");
if(isset($_GET["ip"])) {
  $my_ip = $_GET["ip"];
  foreach ($blocklist as $key) {
    if(strpos($my_ip, $key) !== false){
      die("Hacker?!!!");
    }
  }
   system("ping -c 4". $my_ip);
}
?>

<html>	
<body>
<h2>Admin panel</h2>
  <form>
    <input type="text" name="ip">
    <input type="submit">
  </form>
</html>