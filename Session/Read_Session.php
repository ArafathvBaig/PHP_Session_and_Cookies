<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    echo "User Name:: " . $_SESSION["user_name"];
    echo "User Id:: " . $_SESSION["user_id"];
    ?>
</body>

</html>