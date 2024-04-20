<?php


$firstName =    $_POST['firstName'] ?? '';
$lastName  =    $_POST['lastName'] ?? '';
$email     =    $_POST['email'] ?? '';


$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

$sql = "";

if (isset($_POST['submit'])) 
{




//تحقق الاسم الأول
if (empty($firstName))
{
    $errors ['firstNameError'] = ' <font color="red"> من فضلك ضع اسمك الاول </font>';
}

// تحقق الاسم الاخير
if (empty($lastName))
{
    $errors ['lastNameError']  = '<font color="red"> من فضلك ضع اسمك الاخير </font>';
}

// تحقيق البريد
if (empty($email))
{
    $errors ['emailError']  =  '<font color="red"> من فضلك ضع بريدك الالكتروني </font>';
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $errors ['emailError']  =  'ً<font color="red"> من فضلك ضع بريداً صحيحا </font>';
}

if (!array_filter($errors))
{
    $firstName =    mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName  =    mysqli_real_escape_string($conn, $_POST['lastName']);
    $email     =    mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";

{
    if(mysqli_query($conn, $sql))
    {
        header('location: index.php');
    }
    else 
    {
        echo '<font color="red"> هنالك خطأ </font>' . mysqli_error($conn);
    }
}
}
}