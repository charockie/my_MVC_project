$( '#activity1' ).click(function() {
    $('#activity').hide();
    $('#buyer').show();
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '25%'}, 1);
});

$( '#activity2, #activity3' ).click(function() {
    $('#activity').hide();
    $('#distrib_manufact').show();
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '25%'}, 1);
});

$( '#role1' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_private').show();
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

$( '#role2, #role4' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_businessman').show().addClass('js-active');
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

$( '#role3, #role5' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_organization').show().addClass('js-active');
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

$( '.private_btn' ).click(function() {
    $('#input_form_private').hide();
    $('#input_form_private_file').show().addClass('js-active');
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '75%'}, 1);
});



$(function() {
    $('.form-horizontal').submit(function(e) {
        var $errors = false;
        $errors = jeneralValidation();
        console.log($errors);


        if (!$errors) {
            var $form = $(this);
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize()
            }).done(function () {
                console.log('success');
            }).fail(function () {
                console.log('fail');
            });
        }
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });

});

// $("#myModal").on("show.bs.modal", function (e) {
//     var id = $(e.relatedTarget).data("id");
//     $.ajax({
//         url:"site/student",
//         data: ({ id: id }),
//         type:"POST",
//         dataType: "json",
//         success: function(data){
//             $("#name").html(data.surname+" "+data.name);
//             $("#email").html(data.email);
//             $("#phone").html(data.phone);
//             $("#age").html(data.age);
//             $("#address").html(data.address);
//             $("#gpa").html(data.gpa);
//             $("#visit").html(data.last_visit);
//             $("#group").html(data.title);
//         },
//         error: function(e){
//         }
//     });
//     $("#myInput").focus();
// });