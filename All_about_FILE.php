<?php
if(isset($_POST)){
    print_r($_POST);
}
if(isset($_FILE['image'])){
    echo "he;llo ";
echo "<pre>";
print_r($_FILE);
echo "</pre>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" >
    <input type="file" name="image" >
<button type="submit" name ="submit"> Know the information of Your File  </button>
</form>
</body>
</html>