<html>
<body>
<p>Thanks!</p>
<p>Your input has been recorded as:</p>
<p><?=$_GET['name']?></p>
<p><?=$_GET['street'] . "\n" . $_GET['city'] . ", " . $_GET['state']?></p>
<p><?=$_GET['phone']?></p>
<a href="index.php">Reset</a>
</body>
</html>