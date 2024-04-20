<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>


<?php include_once './parts/header.php'; ?>






<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <img src="images/download.jpg" alt="">
        <h1 class="display-4 fw-normal">ادخل بالسحب</h1>
        <p class="lead fw-normal">انتظر حتى</p>
        <h3 id="countdown"></h3>
        <p class="lead fw-normal">للسحب على نسخة مجانية من البرنامج</p>
    </div>

    <div class="container">
        <h3>للدخول للسحب اتبع مايلي </h3>
    <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">تابع البث المباشر على يوتيوب</h5>   
    </div>
    <p class="mb-1">على قناة محمد بوسبيت</p>
    </a>
    <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">سيفتح بث لمدة ساعة فيه الغاز مفتوحة للكل</h5>
    </div>
    <p class="mb-1">في الساعة 12 ظهرا بتوقيت السعودية</p>    
    </a>
    <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">في نهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</h5>
    </div>
    <p class="mb-1">عليك الاجابة على الالغاز والتسجيل في الأسفل</p>
    </a>
    </div>
    </div>

</div>





<div class="container">

<div class="position-relative text-center">
<div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <h3>رجاءً أدخل معلوماتك</h3>
            <div class="mb-3">
                <label for="firstName" class="form-label">الاسم الأول</label>
                <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
            <div class="form-text error"><?php  echo $errors ['firstNameError']  ?></div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">الاسم الأخير</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
            <div class="form-text error"><?php  echo $errors ['lastNameError']  ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
            <div class="form-text error"><?php  echo $errors ['emailError']  ?></div>
                </div>
        <button type="submit" name="submit" class="btn btn-primary">ارسال</button>
    </form>
</div>
</div>

<div class="loader-con">
    <div id="loader">
	    <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id= "winner" class="btn btn-primary">
    اختيار الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title fs-5" id="modalLabel">الفائز بالسحب</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                            <?php foreach ($users as $user) : ?>
                                <h1 class="display-3 text-center modal-title" id="modalLabel"><?php  echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName'])?></h1>
                            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<div id="cards" class="row mb-5 pb-5">

        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email']) ?></p>
                </div>
            </div>
        </div>
</div>






<?php include_once './parts/footer.php'; ?>
