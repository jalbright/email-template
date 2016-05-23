<!DOCTYPE html>
<html lang="en">
<body>
<img src="<?php echo $_POST['Location'] . $_POST['Alert_Level']
?>"></br>
<b>Region: </b><?php echo str_replace('_',' ',$_POST['Location']) ?></br>
<b>Alert Level: </b><?php echo $_POST['Alert_Level'] ?></br>
<?php echo $_POST['Text']; ?>
</body>
</html>
