<html>
<body>

<h2>Divsion</h2>

<p><?php print_r($_GET)?></p>

<h4><?="The division of ${_GET['div_first']} and ${_GET['div_second']} is:"?></h4>
<h4><?=$_GET['div_first']/$_GET['div_second']?></h4>

<a href="index.php">Reset</a>
</body>
</html>