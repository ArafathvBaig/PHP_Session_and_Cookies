<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    $_SESSION["user_name"] = "Arafath Baig";
    $_SESSION["user_id"] = "123456789";
    echo "Session Variables are Set:";
    ?>
</body>

</html>