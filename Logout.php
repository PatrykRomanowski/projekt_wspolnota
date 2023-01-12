<?php
// set the expiration date to one hour ago
    $cookie_name = "Login";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
?>
<html>
<body>

<?php
echo "Cookie 'Login' is deleted.";
?>

</body>
</html>