<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BBS TEST</title>
</head>
<body>
<hr>
BBS TEST
<hr>

<form method="post" action="/test01/index.php/bbs/">
名前：<input type="text" name="name" /><br />
<input type="submit" name="write" value="書き込む" />
</form>

<hr>

<dl>
<?php foreach ($list as $row):?>

<dt><?php echo $row[0];?></dt>
<dd><?php echo $row[1];?></dd>

<?php endforeach;?>
</dl>
</body>
</html>