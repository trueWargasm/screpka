var total_price = {};

function recalc(){
    sub_total = 0;
    $.each(window.total_price, function(index, value){
        sub_total = sub_total + value;
    });
    $("#add_service").html( sub_total );
}
// Уборка
$('#cleanup-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('.cleanup-check').prop("checked", false);
            $('#step1-set').val(1);
            window.total_price.clean_up = 0;
        }
        window.recalc();
    });

$('.cleanup-check').change(
    function(){
        if ($(this).is(':checked')) {
            $('#cleanup-discard').prop("checked", false);
            $('#step1-set').val(1);
            window.total_price.clean_up = $('.cleanup-check:checked').length * window.sqr * 125;
        }
        window.recalc();
});

//Пропуск к воротам
$('#pass-to-gates-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('.pass-to-gates').val(0);
            window.total_price.pass_to_gates = 0;
        }
        window.recalc();
    });


$('.pass-to-gates').change(
    function(){
        $('#step2-set').val(1);
        window.total_price.pass_to_gates = ($('.pass-to-gates[name="pass[van]"]').val() * 5700) + ($('.pass-to-gates[name="pass[car]"]').val() * 2700);
        $('#pass-to-gates-discard').prop("checked", false);
        window.recalc();
    });

//VIP
$('#vip-parking-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('.vip-parking').val(0);
            window.total_price.vip_parking = 0;
        }
        window.recalc();
    });


$('.vip-parking').change(
    function(){
        $('#step2-set').val(1);
        window.total_price.vip_parking = ($('.vip-parking:first').val() * 10000);
        window.recalc();
    });

//Print advertising
$('#advert-banners-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('.advert-banners').val(0);
            $('.advert-banners[type="checkbox"]').prop("checked", false);
            window.total_price.print_cost = 0;
            window.total_price.banners = 0;
        }
        window.recalc();
    });


$('.advert-banners').change(
    function(){
        if ($(this).attr("type") == "checkbox" ){
            if ($(this).is(':checked')) {
                //Checkbox
                sqr_calc = 0;
                $.each($('.advert-banners[type="text"]'), function(index, item){
                    sqr_calc = sqr_calc + ($(item).data('sqr') * $(item).val());
                })
                print_cost = sqr_calc / 10000 * 750;
                window.total_price.print_cost = print_cost;
            } else {
                window.total_price.print_cost = 0;
            }
        } else {
            if($('.advert-banners[type="checkbox"]').is(':checked')){
                //inputs
                sqr_calc = 0;
                $.each($('.advert-banners[type="text"]'), function(index, item){
                    sqr_calc = sqr_calc + ($(item).data('sqr') * $(item).val());
                })
                print_cost = sqr_calc / 10000 * 750;
                window.total_price.print_cost = print_cost;
            }
                //количество
                banners = 0;
                $.each($('.advert-banners[type="text"]'), function(index, item){
                    banners = banners + ($(item).data('price') *  $(item).val());
                })
                window.total_price.banners = banners;
        }
        $('#advert-banners-discard').prop("checked", false);
        window.recalc();
    });