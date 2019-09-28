	$('#steps').steps({
	      onFinish: function () {


	        console.log('Wizard Completed');

	      }
	    });


	    var stepBtnNext = $('.step-btn.next');
	    var stepBtnPrev = $('.step-btn.prev');
	    var stepBtnFinish = $('.step-btn.finish');

	    var step1 = $('#step1');
	    var step2 = $('#step2');
	    var step3 = $('#step3');
	    var step4 = $('#step4');
	    var step5 = $('#step5');
	    var step6 = $('#step6');
	    var step7 = $('#step7');
	    var step8 = $('#step8');

	    var refuse1 = $('#refuse1');
	    var refuse2 = $('#refuse2');
	    var refuse3 = $('#refuse3');
	    var refuse4 = $('#refuse4');
	    var refuse5 = $('#refuse5');
	    var refuse6 = $('#refuse6');
	    var refuse7 = $('#refuse7');
	    var refuse8 = $('#refuse8');

	    var day1 = $('#day1');
	    var day2 = $('#day2');
	    var day3 = $('#day3');
	    var gates1 = $('#gates1');
	    var gates2 = $('#gates2');
	    var parking1 = $('#parking1');
	    var billboard = $('#billboard');
	    var proektor = $('#proektor');
	    var audio = $('#audio');
	    var hole = $('#hole');
	    var radio = $('#radio');
	    var net = $('#net');

	    function propChecked(item) {
	    	return item.prop('checked');
	    }

	    function emptyField(item) {
	    	return item.val();
	    }

	    if( !propChecked(refuse1)
	    	&& !propChecked(day1)
	    	&& !propChecked(day2)
	    	&& !propChecked(day3)) {
	    	stepBtnNext.prop('disabled', true);
	    } else {
	    	stepBtnNext.prop('disabled', false);
	    }

	    if(step2.hasClass('active')) {
			if( !emptyField(gates1) && !emptyField(gates2)) {
				stepBtnNext.prop('disabled', true);
			} else {
				stepBtnNext.prop('disabled', false);
			}
		} else if(step7.hasClass('active')) {
			if( !emptyField(radio)) {
				stepBtnNext.prop('disabled', true);
			} else {
				stepBtnNext.prop('disabled', false);
			}
		}

	    $("input[type=text]").on('change', function () {
	    	if(step2.hasClass('active')) {
		    	if( !emptyField(gates1) && !emptyField(gates2)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step7.hasClass('active')) {
		    	if( !emptyField(radio)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    }
	    });

	    $("input[type=checkbox]").on('change', function () {
		    var self = $(this);

		    if(step1.hasClass('active')) {
		    	if( !propChecked(refuse1)
			    	&& !propChecked(day1)
			    	&& !propChecked(day2)
			    	&& !propChecked(day3)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step2.hasClass('active')) {
		    	if( !propChecked(refuse2) 
		    		&& !emptyField(gates1)
		    		&& !emptyField(gates2)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step3.hasClass('active')) {
		    	if( !propChecked(refuse3) 
		    		&& !propChecked(parking1)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step4.hasClass('active')) {
		    	if( !propChecked(refuse4) 
		    		&& !propChecked(billboard)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step5.hasClass('active')) {
		    	if( !propChecked(refuse5) 
		    		&& !propChecked(proektor)
		    		&& !propChecked(audio)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step6.hasClass('active')) {
		    	if( !propChecked(refuse6) 
		    		&& !propChecked(hole)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step7.hasClass('active')) {
		    	if( !propChecked(refuse7) 
		    		&& !emptyField(radio)) {
			    	stepBtnNext.prop('disabled', true);
			    } else {
			    	stepBtnNext.prop('disabled', false);
			    }
		    } else if(step8.hasClass('active')) {
		    	if( !propChecked(refuse8) 
		    		&& !propChecked(net)) {
			    	stepBtnFinish.prop('disabled', true);
			    } else {
			    	stepBtnFinish.prop('disabled', false);
			    }
		    }
		});