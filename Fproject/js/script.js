var countDownDate = new Date ( "Apr 10, 2024 11:30:00 " ).getTime();
// "mar 25, 2024 14:30:00"
var x = setInterval(function () {
    var counter = document.querySelector("#countdown");
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    counter.innerHTML =
    days +
    " يوم " +
    hours +
    " ساعة " +
    minutes +
    " دقيقة " +
    seconds +
    " ثانية ";
    if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "للأسف تأخرت تابعنا للمزيد";
    }
}, 1000);

