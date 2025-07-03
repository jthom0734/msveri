<!-- final.php -->
<?php
$email = htmlspecialchars($_POST['email'] ?? '');
?>

<p><strong>Email:</strong> <?php echo $email; ?></p>
