<html>
<body>

<h2>Addition</h2>

<p><?php print_r($_GET)?></p>

<h4><?="The sum of ${_GET['add_first']} and ${_GET['add_second']} is:"?></h4>
<h4><?=$_GET['add_first']+$_GET['add_second']?></h4>

<a href="index.php">Reset</a>
</body>
</html>