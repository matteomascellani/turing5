<pre>
<?php
$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
$action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : 'article';
$name = isset($_POST["name"]) ? $_POST["name"] : "";

$rows = [];
if($res = mysqli_connect('localhost', 'root', '', 'turing')) {
	$result = mysqli_query($res,'SELECT * FROM books INER JOIN author ON books.author_id = authors.id');
	while($row = mysqli_fetch_object($result)) {
		$rows[] = $row;
		$result = mysqli_query($res,'
		SELECT * 
		FROM authors WHERE id = ' $row["author_id"]);
	}
}

print_r($rows);




?>
</pre>
<?php if($name && $id): ?>
Hai compilato il form con il nome <?php echo $name; ?> e stavi editando il record <?php echo $id; ?>
<?php elseif($name && !$id): ?>
Hai compilato il form con il nome <?php echo $name; ?> e stavi creando un record
<?php else: ?>
Stai compilando il form per gestire un oggetto di tipo <?php echo $action; ?><br />
<form method="post" action="test.php">
<input type="text" name="name" value="<?php echo $name; ?>" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" value="Invia" />
</form>
<?php endif; ?>