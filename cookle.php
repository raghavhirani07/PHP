<?php
$cookie_name="user";
$cookir_value="Raghav";
setcookie($cookie_name,$cookir_value,time()+(86400),"/");

?>
<html>

<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
             echo "cookie is not set ";
        }
        else
        {
             echo $_COOKIE[$cookie_name];
            //?  echo "<pre>";
            //?  print_r($_COOKIE);
            //?  echo "</pre>";
        }

        ?>
</body>

</html>