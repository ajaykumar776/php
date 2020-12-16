
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  <input type="submit" value="Upload Image" name="upload">
</form>
</body>
</html>
<?php
  $a = $_REQUEST['name'];
  $b = $_REQUEST['email'];
  $c = $_REQUEST['website'];
  $d = $_REQUEST['comment'];
  $e = $_REQUEST['gender'];
?>
<?php
echo "Today is " . date("d/m/Y") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("h:i: a") ."<br>";
?>
<?php
$myfile = fopen("webdictionary.txt", "r+") or die("unable");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
  