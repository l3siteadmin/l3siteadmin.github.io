
<?php
$name = "/_posts/" + $datePost + $namePost + ".markup";
$myfile = fopen($name, "w") or die("Unable to create file!");
$txt = "---\n";
fwrite($myfile, $txt);
$txt = "layout: post\n";
fwrite($myfile, $txt);
$txt = "title:  \n" + $titlePost;
fwrite($myfile, $txt);
$txt = "---\n";
fwrite($myfile, $txt);
$txt = "---\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

