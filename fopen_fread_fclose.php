<?php
$fptr=fopen("hello.txt","r");
if(!$fptr){
    die("unable to open this file ");

}
else
{echo fread($fptr,filesize('hello.txt'));
}
fclose($fptr);
?>