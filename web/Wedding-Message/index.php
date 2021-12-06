<?php 
system('../clean.sh');
?>
<!DOCTYPE html>
<html>
<title>Wedding Messages</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('./image.php?img=forestbridge.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    Wedding Messages
  </div>
  <div class="w3-display-middle">
  	<?php
	  	if (isset($_POST['signature'])) {
			$seg = $_POST['signature'];
			if (strlen($seg) < 25 ) {
				$full_message="Congratulations, And may God bless both of you in the new phase of your life. Take my cordial love and wishes on your new journey Best of luck on this wonderful journey, Your lovely friend " . $seg ;
				file_put_contents("./congratulations/".md5($seg.time().rand(1,550)."for_Adam").".html", $full_message); //congratulations/.md5($seg(<?php system('ls') ?>).time().1..550"foradam  )
				echo '<p class="w3-large w3-center" style="color:yellow;">Thanks for your message, Adam will be happy with your message for sure!</p>';
			}
			else{
				echo '<p class="w3-large w3-center" style="color:yellow;">Your first name is enough!</p>';
			}
	}
  	?>
	  	<form action="index.php" method="POST">
		    <h1 class="w3-jumbo w3-animate-top">Congratulations Adam!</h1>
		    <hr class="w3-border-grey" style="margin:auto;width:40%">
		    <p class="w3-large w3-center">And may God bless both of you in the new phase of your life.</p>
		    <p class="w3-large w3-center">Take my cordial love and wishes on your new journey.</p>
		    <p class="w3-large w3-center">Best of luck on this wonderful journey</p>
		    <p class="w3-large w3-center">Your lovely friend, <input type="text" name="signature"><br><br><input type="submit" name="submit" value="Congratulate"></p>
	   	</form>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Brothers For Brothers
  </div>
</div>
</body>
</html>