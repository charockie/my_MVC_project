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
    $('#input_form_businessman').show();
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

$( '#role3, #role5' ).click(function() {
    $('#buyer, #distrib_manufact').hide();
    $('#input_form_organization').show();
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '50%'}, 1);
});

$( '.private_btn' ).click(function() {
    $('#input_form_private').hide();
    $('#input_form_private_file').show();
    $('.step').html('Шаг 2');
    $('.progress-bar').attr('aria-valuenow', '50').animate({width: '75%'}, 1);
});