<html>
<head><title>Hi!</title></head>
<body>
<?php if (isset($_GET['name'])) { ?>
    <h1>Aloha <?php echo $_GET['name']; ?>!</h1>
<?php } ?>

<?php echo $_GET['name'];
$a = 5;
$a = $a + 37;
echo $a;
?>
</body>
</html>
