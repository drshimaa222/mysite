<?php

$hash=password_hash("123", PASSWORD_DEFAULT);
echo $hash;
if (password_verify('123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


?>
<iframe src="view/consult.php" width="50%" height="100%" scrolling="no">