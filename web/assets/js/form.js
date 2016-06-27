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



//показ форм для заполнения данных
//Частное лицо: p_email, p_fio, p_tel
$( '#role1' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_private').show();

    $('[name = b_inn]').attr('disabled', 'disabled');
    $('[name = b_flp]').attr('disabled', 'disabled');
    $('[name = b_fio]').attr('disabled', 'disabled');
    $('[name = b_tel]').attr('disabled', 'disabled');
    $('[name = b_email]').attr('disabled', 'disabled');

    $('[name = o_edrpou]').attr('disabled', 'disabled');
    $('[name = o_organization]').attr('disabled', 'disabled');
    $('[name = o_boss]').attr('disabled', 'disabled');
    $('[name = o_fio]').attr('disabled', 'disabled');
    $('[name = o_tel]').attr('disabled', 'disabled');
    $('[name = o_email]').attr('disabled', 'disabled');
    $('[name = o_pdv]').attr('disabled', 'disabled');

    $('[name = p_email]').attr('disabled', 'disabled');
    $('[name = p_fio]').attr('disabled', 'disabled');
    $('[name = p_tel]').attr('disabled', 'disabled');

    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

//Предприниматель: b_inn, b_flp, b_fio, b_tel, b_email, b_pdv
$( '#role2, #role4' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_businessman').show();

    $('[name = b_inn]').attr('disabled', 'disabled');
    $('[name = b_flp]').attr('disabled', 'disabled');
    $('[name = b_fio]').attr('disabled', 'disabled');
    $('[name = b_tel]').attr('disabled', 'disabled');
    $('[name = b_email]').attr('disabled', 'disabled');

    $('[name = o_edrpou]').attr('disabled', 'disabled');
    $('[name = o_organization]').attr('disabled', 'disabled');
    $('[name = o_boss]').attr('disabled', 'disabled');
    $('[name = o_fio]').attr('disabled', 'disabled');
    $('[name = o_tel]').attr('disabled', 'disabled');
    $('[name = o_email]').attr('disabled', 'disabled');
    $('[name = o_pdv]').attr('disabled', 'disabled');

    $('[name = p_email]').attr('disabled', 'disabled');
    $('[name = p_fio]').attr('disabled', 'disabled');
    $('[name = p_tel]').attr('disabled', 'disabled');

    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

//Организация: o_edrpou, o_organization, o_boss, o_fio, o_tel, o_email, o_pdv
$( '#role3, #role5' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_organization').show();

    $('[name = b_inn]').attr('disabled', 'disabled');
    $('[name = b_flp]').attr('disabled', 'disabled');
    $('[name = b_fio]').attr('disabled', 'disabled');
    $('[name = b_tel]').attr('disabled', 'disabled');
    $('[name = b_email]').attr('disabled', 'disabled');

    $('[name = o_edrpou]').attr('disabled', 'disabled');
    $('[name = o_organization]').attr('disabled', 'disabled');
    $('[name = o_boss]').attr('disabled', 'disabled');
    $('[name = o_fio]').attr('disabled', 'disabled');
    $('[name = o_tel]').attr('disabled', 'disabled');
    $('[name = o_email]').attr('disabled', 'disabled');
    $('[name = o_pdv]').attr('disabled', 'disabled');

    $('[name = p_email]').attr('disabled', 'disabled');
    $('[name = p_fio]').attr('disabled', 'disabled');
    $('[name = p_tel]').attr('disabled', 'disabled');

    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});


//фото
$( '.private_btn' ).click(function() {
    $('#input_form_private').hide();
    $('#input_form_private_file').show().addClass('js-active');
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '75%'}, 1);
});



// $(function() {
//     $('.form-horizontal').submit(function(e) {
//         // jeneralValidation();
//
//         // if (!$errors) {
//             var $form = $(this);
//             $.ajax({
//                 type: $form.attr('method'),
//                 url: $form.attr('action'),
//                 data: $form.serialize()
//             }).done(function () {
//                 console.log('success');
//             }).fail(function () {
//                 console.log('fail');
//             });
//         // }
//         //отмена действия по умолчанию для кнопки submit
//         e.preventDefault();
//     });
//
// });

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