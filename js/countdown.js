var javascript_countdown = function () {
	var time_left = 10; //number of seconds for countdown
	var output_element_id = 'javascript_countdown_time';
	var keep_counting = 1;
	var no_time_left_message = 'Primer día de elecciones FEUC 2012';
 
	function countdown() {
		if(time_left < 2) {
			keep_counting = 0;
		}
 
		time_left = time_left - 1;
	}
 
	function add_leading_zero(n) {
		if(n.toString().length < 2) {
			return '0' + n;
		} else {
			return n;
		}
	}
 
	function format_output() {
		var days, hours, minutes, seconds;
		seconds = time_left % 60;
		minutes = Math.floor(time_left / 60) % 60;
		hours = Math.floor(time_left / 3600) % 24;
		days = Math.floor(time_left / (3600 * 24));
 
		seconds = add_leading_zero( seconds );
		minutes = add_leading_zero( minutes );
		hours = add_leading_zero( hours );
		days = add_leading_zero( days );
		
 
		return /*"<div class='countdown-time-part'><div class='countdown-number'>"+days+
				"</div><div class='countdown-text'>días</div></div>" + 
				"<div class='countdown-time-part'><div class='countdown-number'>"+hours+
				"</div><div class='countdown-text'>horas</div></div>" +
				"<div class='countdown-time-part'><div class='countdown-number'>"+minutes+
				"</div><div class='countdown-text'>minutos</div></div>";*/ "hola";
	}
 
	function show_time_left() {
		document.getElementById(output_element_id).innerHTML = format_output();//time_left;
	}
 
	function no_time_left() {
		document.getElementById(output_element_id).innerHTML = no_time_left_message;
	}
 
	return {
		count: function () {
			countdown();
			show_time_left();
		},
		timer: function () {
			javascript_countdown.count();
 
			if(keep_counting) {
				setTimeout("javascript_countdown.timer();", 1000);
			} else {
				no_time_left();
			}
		},
		//Kristian Messer requested recalculation of time that is left
		setTimeLeft: function (t) {
			time_left = t;
			if(keep_counting == 0) {
				javascript_countdown.timer();
			}
		},
		init: function (t, element_id) {
			time_left = t;
			output_element_id = element_id;
			javascript_countdown.timer();
		}
	};
}();

function seconds_between(date1, date2) {

    // The number of milliseconds in one second
    var ONE_SEC = 1000

    // Convert both dates to milliseconds
    var date1_ms = date1.getTime()
    var date2_ms = date2.getTime()

    // Calculate the difference in milliseconds
    var difference_ms = Math.abs(date1_ms - date2_ms)
    
    // Convert back to days and return
    return Math.round(difference_ms/ONE_SEC)

  }
 
//time to countdown in seconds, and element ID
javascript_countdown.init(seconds_between(new Date(), new Date('2011','09','26')), 'countdown');