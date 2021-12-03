<?php
#highlight_file(__FILE__);
class Myfile  
{	
    public function __wakeup()
    	{
            if(strlen($this->contant)> 14)
                die("hacker!!!");
            $file_name = fopen($this->pagename , "a");
            fwrite($file_name, $this->contant);
            fwrite($file_name, "\r\n");
	    fclose($file_name);
    }
}

class mysite
{
    public $pagename = "hello.txt";
    public $contant = '';
    public $title1 = 'title 1';
    public $title2 = '';
    

    public function data($output)
    {
        echo "We are working on it......";
        
    }

    public function myfun()
    {
      echo "hi from title 1<br/>";
    }

}   
if(preg_match('/pagename/', $_GET['data']))   
         die("haker????!!!");
$info = unserialize($_GET['data']);
$obj = new mysite;
$obj -> myfun($info);
?>
