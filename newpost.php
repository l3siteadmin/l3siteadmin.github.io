<html>
  <body>
    Posting
<?php
$name = "/_posts/" + $_POST[datePost] + $_POST[namePost] + ".markup";
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
</body>
</html>
