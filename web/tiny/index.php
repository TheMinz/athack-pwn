?source=view


<?php

// Configuratoin
$hiring_date= "may/2016";
$admin_secret= "ADMIN-SECRET-554793221458763325155";
$creds = [
        "username"=>"johnwick",
        "role"=>"guest",
        "secret"=>"USER-SECRET-234978124679152367982"
    ];



// to view the source
@$view= $_GET['source'];
if (@extract($view)??$view) {
    highlight_file(__FILE__);
}

// Authentication
if (!empty($creds['username'])) {
    $uname= $creds['username'];
}
if (!empty($creds['role'])) {
    $role=$creds['role'];
}
if (!empty($creds['secret'])) {
    $secret=$creds['secret'];
}
if (!empty($uname) && !empty($role) && !empty($secret)) {
        $auth_token = md5($uname.$role.$secret);
    }



if (!empty($auth_token) && $auth_token === "42508d300ac45f989ab1f0523adbdeb4" ) {
   #include('../admin.php');
   echo 'you got the flag';
}else{
   #include('../guest.php');
   echo 'nahh you did not';
}


?>
