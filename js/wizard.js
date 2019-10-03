var total_price = {};

function recalc(){
    sub_total = 0;
    $.each(window.total_price, function(index, value){
        sub_total = sub_total + value;
    });
    $("#add_service").html( sub_total );
    $("#service-total").val( sub_total )
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

            $('#cleanup-discard').prop("checked", false);
            $('#step1-set').val(1);
            window.total_price.clean_up = $('.cleanup-check:checked').length * window.sqr * 125;

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


$('.pass-to-gates').keyup(
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


$('.vip-parking').keyup(
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

//Site banner advertising
$('#site-ads-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('.site-ads').prop("checked", false);
            $(".site-ads-info").css("display", "none");
        }
    });

$('.site-ads').change(
    function(){
        $('#site-ads-discard').prop("checked", false);
        $(".site-ads-info").css("display", "none");
        $("#site-ads-info-" + this.value).css("display", "block");
    }
)

//Conference hall
$('#conference-hall-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('#conference-hall').prop("checked", false);
        }
    });

$('#conference-hall').change(
    function(){
        $('#conference-hall-discard').prop("checked", false);
    }
)

//internet
$('#internet-discard').change(
    function(){
        if ($(this).is(':checked')) {
            $('.internet-type').prop("checked", false);
            window.total_price.internet = 0
            $('.internet-type').val(0);
        }
        window.recalc();
    });

$('.internet-type').keyup(
    function(){
        internet_price = 0;

        $('#conference-hall-discard').prop("checked", false);
        $.each($('.internet-type'), function(index, item){
            internet_price = internet_price + ($(item).data('price') * $(item).val());
        })
        window.total_price.internet = internet_price;

        window.recalc();
    }
)

//radio radio-ads-discard
$('#radio-ads-discard').change(
    function(){
        if ($(this).is(':checked')) {
            window.total_price.radio_ads = 0
            $('.radio-ads').val('');
        }
        window.recalc();
    });

$('.radio-ads').keyup(

    function(e){
        radio_ads = 0;
/*
        count_ads = parseInt($(".radio-ads[name='radio-ads-count']").val(), 10);
        if(isNaN(count_ads) ) count_ads = 0;

        if(count_ads == 0) {
            $(".radio-ads[name='radio-ads-count']").val('1')
        } else {
            $(".radio-ads[name='radio-ads-count']").val(count_ads)
        }
*/
        $('#radio-ads-discard').prop("checked", false);

        radio_ads = radio_ads + ($(".radio-ads[name='radio-ads-count']").val() * 750);

        window.total_price.radio_ads = radio_ads;

        window.recalc();
    }
)
