<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php/style.css" type="text/css">
</head>
<body>
  <h1>You need to be logged in to post!</h1>
<p><a href="https://furryfandomsite.github.io/">Home</a>
<p><a href="https://furries.ddns.net/loginsystem1/register.php/">Signup/login</a>
</body>
</html>



<?php

    if(isset($_POST['Submit'])){
        print "<h1>Your comment has been submitted!</h1>";
        $Name = $_POST['Name'];
        $Comment = $_POST['Comment'];
        #Get old comments
        $old = fopen("read/comments.txt", "r+t");
        $old_comments = fread($old, 1024);
        #Delete everything, write down new and old comments
        $write = fopen("read/comments.txt", "w+");
        $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
        fwrite($write, $string);
        fclose($write);
        fclose($old);
  }
  #Read comments
$read = fopen("read/comments.txt", "r+t");
echo "<br><br>Comments<hr>".fread($read, 1024);
fclose($read);
?>
