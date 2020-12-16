<?php

// $name= fopen("form.php","r");
// if(!$name)
// {
//   die("unable to open this file");
// }
// else
// {
//   echo "read";
// }
// $readfile = fread($name,filesize("form.php"));
// echo $readfile;
// $count =filesize("form.php"); echo "<br><br>  ";
// echo $count;

if(!readfile("read.txt","#"))
{
  echo "unable to open this file";

}else
{
  echo "sucessfully read";
}

?>