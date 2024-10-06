<?php
    require_once 'functions.php';
    if(isset($_POST['submit'])){
        $num1=$_POST['a'];
        $num2=$_POST['b'];
        $result=add($a,$b);
        echo "result=$result";
      }
?>