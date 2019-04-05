<html>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<form action="" method="POST">
  <label> Name:
    <input type="text" name="Name" class="Input" style="width: 225px" required>
  </label>
  <br><br>
  <label> Comment: <br>
    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
  </label>
  <br><br>
  <input type="submit" name="Submit" value="Submit Comment" class="Submit">

</form>
<p><a href="https://furryfandomsite.github.io/Loggedin/index.html">Home</a>
</body>

</html>

<?php
if(isset($_POST['Submit'])){
print "<h1>Your comment has been submitted!</h1>";
$Name = $_POST['Name'];
$Comment = $_POST['Comment'];
#Get old comments
$old = fopen("../read/comments.txt", "r+t");
$old_comments = fread($old, 1024);
#Delete everything, write down new and old comments
$write = fopen("../read/comments.txt", "w+");
$string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
fwrite($write, $string);
fclose($write);
fclose($old);
}
#Read comments
$read = fopen("../read/comments.txt", "r+t");
echo "<br><br>Comments<hr>".fread($read, 1024);
fclose($read);
?>
