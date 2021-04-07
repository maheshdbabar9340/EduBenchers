<!DOCTYPE html>
<html>
<body>

<?php
echo readfile("try.txt");

echo "<br>";

$myfile = fopen("try.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("try.txt"));
fclose($myfile);

echo "<br>";


$myfile = fopen("try.txt", "r");
// some code to be executed....
fclose($myfile);

echo "<br>";

$myfile = fopen("try.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

echo "<br>";

$myfile = fopen("try.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

echo "<br>";

$myfile = fopen("try.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile)."<br>";
}
fclose($myfile);

echo "<br>";

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Motu Patlu Heloo \n";
fwrite($myfile, $txt);
$txt = "Chotta Bheem\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<br>";

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>