<?php


$fptr=fopen('hello.txt','r');
//* one by one line read

// echo fgets($fptr);
//* print line by line
/*while($a=fgets($fptr)){
    echo $a;
}*/
//* print charter by charater
while($a=fgetc($fptr)){
    echo $a;

}
fclose($fptr);
?>