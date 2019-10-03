    var steps = $('#steps');
    var step1ErrMsg = $('#step1ErrMsg');

    var step1 = $('#step1');
    var step2 = $('#step2');
    var step3 = $('#step3');
    var step4 = $('#step4');
    var step5 = $('#step5');
    var step6 = $('#step6');
    var step7 = $('#step7');
    var step8 = $('#step8');

    var stepItem1 = $('#stepItem1');
    var stepItem2 = $('#stepItem2');
    var stepItem3 = $('#stepItem3');
    var stepItem4 = $('#stepItem4');
    var stepItem5 = $('#stepItem5');
    var stepItem6 = $('#stepItem6');
    var stepItem7 = $('#stepItem7');
    var stepItem8 = $('#stepItem8');

    var btnNext = $('button[data-direction="next"]');
    var btnPrev = $('button[data-direction="prev"]');
    var btnFinish = $('button[data-direction="finish"]');

    btnNext.attr("disabled",true);
    btnPrev.attr("disabled",true);
    stepItem1.addClass('activeItem');

    //STEP1
    step1.addClass('activeStep');

    var step1Validate = function() {
        if ($('#step1 input[type=checkbox]:checked').length == 0) {
            btnNext.attr("disabled",true);
        }
        else {
            btnNext.attr("disabled",false);
        }
    }

    $('#step1 input[type=checkbox]').change(function () {
        step1Validate()
    });
    //END STEP1

    //STEP2
    var step2Validate = function() {
        var inputs = $('#step2 input[type=text]');
        var emptyInput = 0;
        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value != '') {
                emptyInput++
            }
        }
        
        if($('#step2 input[type=checkbox]:checked').length == 0) {
            if(emptyInput == 0) {
                btnNext.attr("disabled",true);
            } else {
                btnNext.attr("disabled",false);
            }
        } else {
            btnNext.attr("disabled",false);
        }
    }

    $('#step2 input[type=checkbox]').change(function () {
        step2Validate();
    });

    $('#step2 input[type=text]').bind('input', function() {
        var replace = $(this).val().replace(/[^\+\d]/g, '');
        $(this).val(replace);
        step2Validate();
    });
    //END STEP2

    //STEP3
    var step3Validate = function() {
        var input = $('#step3 input[type=text]');
        
        if($('#step3 input[type=checkbox]:checked').length == 0) {
            if(input[0].value == '') {
                btnNext.attr("disabled",true);
            } else {
                btnNext.attr("disabled",false);
            }
        } else {
            btnNext.attr("disabled",false);
        }
    }
    $('#step3 input[type=checkbox]').change(function () {
        step3Validate();
    });

    $('#step3 input[type=text]').bind('input', function() {
        var replace = $(this).val().replace(/[^\+\d]/g, '');
        $(this).val(replace);
        step3Validate();
    });
    //END STEP3

    //STEP4
    var step4Validate = function() {
        var inputs = $('#step4 input[type=text]');
        var filledItems = 0;
        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value != '0' && inputs[i].value != '') {
                filledItems++
            }
        }
        
        if($('#step4 #advert-banners-discard:checked').length == 0) {
            if(filledItems == 0) {
                btnNext.attr("disabled",true);
            } else {
                btnNext.attr("disabled",false);
            }
        } else {
            btnNext.attr("disabled",false);
        }
    }
    $('#step4 input[type=checkbox]').change(function () {
        step4Validate();
    });

    $('#step4 input[type=text]').bind('input', function() {
        var replace = $(this).val().replace(/[^\+\d]/g, '');
        $(this).val(replace);
        step4Validate();
    });
    //END STEP4

    //STEP5
    var step5Validate = function() {
        if($('#step5 input[type=checkbox]:checked').length == 0) {
            btnNext.attr("disabled",true);
        } else {
            btnNext.attr("disabled",false);
        }
    }
    $('#step5 input[type=checkbox]').change(function () {
        step5Validate();
    });
    //END STEP5

    //STEP6
    var step6Validate = function() {
        var inputs = $('#step6 input[type=text]');
        var filledItems = 0;
        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value != '0' && inputs[i].value != '') {
                filledItems++
            }
        }
        
        if($('#step6 #radio-ads-discard:checked').length == 0) {
            if(filledItems == 0) {
                btnNext.attr("disabled",true);
            } else {
                btnNext.attr("disabled",false);
            }
        } else {
            btnNext.attr("disabled",false);
        }
    }

    $('#step6 input[type=checkbox]').change(function () {
        step6Validate();
    });

    $('#step6 input[type=text]').bind('input', function() {
        var replace = $(this).val().replace(/[^\+\d]/g, '');
        $(this).val(replace);
        step6Validate();
    });
    //END STEP6

    //STEP7
    var step7Validate = function() {
        var inputs = $('#step7 input[type=text]');
        var emptyInput = 0;
        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value != '') {
                emptyInput++
            }
        }
        
        if($('#step7 input[type=checkbox]:checked').length == 0) {
            if(emptyInput == 0) {
                btnNext.attr("disabled",true);
            } else {
                btnNext.attr("disabled",false);
            }
        } else {
            btnNext.attr("disabled",false);
        }
    }

    $('#step7 input[type=checkbox]').change(function () {
        step7Validate();
    });

    $('#step7 input[type=text]').bind('input', function() {
        var replace = $(this).val().replace(/[^\+\d]/g, '');
        $(this).val(replace);
        step7Validate();
    });
    //END STEP7

    var stepper = function(direction) {
        var id = steps.find('.activeStep')[0].id;
        if(direction === 'next') {
            btnNext.attr("disabled",true);
            switch(id) {
                case 'step1':
                    step1.removeClass('activeStep');
                    step2.addClass('activeStep');
                    stepItem2.addClass('activeItem');
                    btnPrev.attr("disabled",false);
                    step2Validate();
                    break;
                case 'step2':
                    step2.removeClass('activeStep');
                    step3.addClass('activeStep');
                    stepItem3.addClass('activeItem');
                    step3Validate();
                    break;
                case 'step3':
                    step3.removeClass('activeStep');
                    step4.addClass('activeStep');
                    stepItem4.addClass('activeItem');
                    step4Validate();
                    break;
                case 'step4':
                    step4.removeClass('activeStep');
                    step5.addClass('activeStep');
                    stepItem5.addClass('activeItem');
                    step5Validate();
                    break;
                case 'step5':
                    step5.removeClass('activeStep');
                    step6.addClass('activeStep');
                    stepItem6.addClass('activeItem');
                    step6Validate();
                    break;
                case 'step6':
                    step6.removeClass('activeStep');
                    step7.addClass('activeStep');
                    stepItem7.addClass('activeItem');
                    step7Validate();
                    break;
                case 'step7':
                    step7.removeClass('activeStep');
                    step8.addClass('activeStep');
                    stepItem8.addClass('activeItem');
                    btnNext.removeClass('visible');
                    btnFinish.addClass('visible');
                    break;
            }
        } else {
            switch(id) {
                case 'step1':
                    break;
                case 'step2':
                    step2.removeClass('activeStep');
                    stepItem2.removeClass('activeItem');
                    step1.addClass('activeStep');
                    btnPrev.attr("disabled",true);
                    step1Validate();
                    break;
                case 'step3':
                    step3.removeClass('activeStep');
                    stepItem3.removeClass('activeItem');
                    step2.addClass('activeStep');
                    step2Validate();
                    break;
                case 'step4':
                    step4.removeClass('activeStep');
                    stepItem4.removeClass('activeItem');
                    step3.addClass('activeStep');
                    step3Validate();
                    break;
                case 'step5':
                    step5.removeClass('activeStep');
                    stepItem5.removeClass('activeItem');
                    step4.addClass('activeStep');
                    step4Validate();
                    break;
                case 'step6':
                    step6.removeClass('activeStep');
                    stepItem6.removeClass('activeItem');
                    step5.addClass('activeStep');
                    step5Validate();
                    break;
                case 'step7':
                    step7.removeClass('activeStep');
                    stepItem7.removeClass('activeItem');
                    step6.addClass('activeStep');
                    step6Validate();
                    break;
                case 'step8':
                    step8.removeClass('activeStep');
                    stepItem8.removeClass('activeItem');
                    step7.addClass('activeStep');
                    btnNext.addClass('visible');
                    btnFinish.removeClass('visible');
                    step7Validate();
                    break;
            }
        }
    }

    btnNext.on('click', function(e) {
        e.preventDefault();
        stepper('next');
    })

    btnPrev.on('click', function(e) {
        e.preventDefault();
        stepper('prev');
    })

    btnFinish.on('click', function(e) {
        e.preventDefault();
        $('#form').submit();
    })