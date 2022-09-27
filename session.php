<?php

//* used to manage inforamtion across difference pages
//* in session use senstive data

session_start();
$_SESSION['username']='Raghav';
$_SESSION['favcat']="books";

//* unset data
session_unset();

//* destory session

session_destroy();

?>