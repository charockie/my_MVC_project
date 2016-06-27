<style>
    .error{
        color: red;
    }
</style>
<form id="loginform" action="" method="post">
    Ваш логин:<br>
    <input type="text" name="login" /><br>
    Ваш пароль:<br>
    <input type="text" name="pswd" /><br>
    <input type="submit" name="enter" value="Войти" />
</form>

<script type="text/javascript" src="assets/js/jquery-1.9.1.js"></script>
<!--<script type="text/javascript" src="assets/js/jquery.validate.js"></script>-->
<script>
//    $(document).ready(function(){
//        $("#loginform").validate({
//            rules:{
//                login:{
//                    required: true,
//                    minlength: 4,
//                    maxlength: 16
//                },
//                pswd:{
//                    required: true,
//                    minlength: 6,
//                    maxlength: 16
//                }
//            },
//            messages:{
//                login:{
//                    required: "Это поле обязательно для заполнения",
//                    minlength: "Логин должен быть минимум 4 символа",
//                    maxlength: "Максимальное число символо - 16"
//                },
//                pswd:{
//                    required: "Это поле обязательно для заполнения",
//                    minlength: "Пароль должен быть минимум 6 символа",
//                    maxlength: "Пароль должен быть максимум 16 символов"
//                }
//            }
//        });
//    });
</script>