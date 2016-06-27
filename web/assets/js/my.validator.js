$(document).ready(function(){
    $(".form-horizontal").validate({

        rules: {

            street: {
                required: true,
                minlength: 4,
                maxlength: 16
            },

            house: {
                required: true,
                minlength: 5,
                maxlength: 16
            }

        },

        message: {

            street: {
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 4 символа",
                maxlength: "Максимальное число символо - 16"
            },

            house: {
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 5 символа",
                maxlength: "Максимальное число символо - 16"
            }

        }

    });
});