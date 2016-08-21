<html>
  <body>
    Posting
<?php
$name = "/_posts/" + $_POST["datePost"] + $_POST["namePost"] + ".markup";
$myfile = fopen($name, "w") or die("Unable to create file!");
$txt = "---\n";
fwrite($myfile, $txt);
$txt1 = "layout: post\n";
fwrite($myfile, $txt1);
$txt2 = "title:  \n" + $_POST["titlePost"];
fwrite($myfile, $txt2);
$txt3 = "categories: jekyll update\n";
fwrite($myfile, $txt3);
$txt4 = "---\n";
fwrite($myfile, $txt4);
$txt4 = $_POST["messagePost"];
fwrite($myfile, $txt5);
fclose($myfile);
?>
</body>
</html>
