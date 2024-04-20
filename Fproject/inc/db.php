<?php

$conn = mysqli_connect('localhost' , 'root' , '' , '3h project');


if (!$conn){
    echo 'هنالك خطأ' . mysqli_connect_error();
}