/**
* 
 * Plugin kkcountdown counts down to specific dates in the future.
 *
 * @example
 * $(".come-class").kkcountdown();
 *
 * @type jQuery
 *
 * @name kkcountdown
 * @author Krzysztof Furtak http://krzysztof-furtak.pl/
 * @version 1.3.7
 * 
 * Documentation: http://krzysztof-furtak.pl/2010/05/kk-countdown-jquery-plugin/
 * Under GNU General Public License, version 2
 */

 //Elements should be translated to English language
(function($){
    $.fn.kkcountdown = function(options) {
            var defaults = {
                dayText			: 	'day ',
                days2Text       :   'days ',
                daysText		: 	'days ',
                hourText		: 	':',
                hours2Text      :   'hours ',
                hoursText		: 	':',
                minutesText		:	':',
                secondsText		:	'',
                textAfterCount	: 	'---',
                oneDayClass		:	false,
                displayDays		: 	true,
                displayZeroDays	:	true,
                addClass		: 	false,
                callback		: 	false,
                warnSeconds		:	60,
                warnClass		:	false,
                rusNumbers      :   false
            };

            var options =  $.extend(defaults, options);

            // rather than continue to read the timestamp/seconds from the dom element, store it within the plugin
            var countdowns = new Array();

            this.each(function(){
            	var _this = $(this);

		        var box = $(document.createElement('span')).addClass('kkcountdown-box');
		        var boxdays = $(document.createElement('span')).addClass('kkc-days');
		        var boxGodz = $(document.createElement('span')).addClass('kkc-hours');
		        var boxMin = $(document.createElement('span')).addClass('kkc-min');
		        var boxSec = $(document.createElement('span')).addClass('kkc-sec');
		        var boxdaysText = $(document.createElement('span')).addClass('kkc-days-text');
		        var boxGodzText = $(document.createElement('span')).addClass('kkc-hours-text');
		        var boxMinText = $(document.createElement('span')).addClass('kkc-min-text');
		        var boxSecText = $(document.createElement('span')).addClass('kkc-sec-text');

		        if(options.addClass != false){
		        	box.addClass(options.addClass);
		        }

		        boxGodzText.html(options.hoursText);
	            boxMinText.html(options.minutesText);
	            boxSecText.html(options.secondsText);

		        box.append(boxdays).append(boxdaysText).append(boxGodz).append(boxGodzText).append(boxMin).append(boxMinText).append(boxSec).append(boxSecText);
		        _this.append(box);

            	kkCountdownInit(_this);

            });

            function kkCountdownInit(_this){
            	/*
            	 * look first for the number of seconds and not a time attribute on the object
            	 * - time relies on the browser's time being set in sync with the server
            	 * - number of seconds can be confidently set based on the server time
            	 */
            	var count = 0;
            	if (_this.id === undefined) {
	            	_this.id = 'kk_'+ Math.random( new Date().getTime() );
            	}
            	if (_this.id in countdowns) count = countdowns[_this.id];
            	else count = _this.attr('data-seconds');

            	if (count === undefined) {
	            	var now = new Date();
	            	now = Math.floor(now.getTime() / 1000);
	            	var	event = _this.attr('data-time');
	            	if (event === undefined) event = _this.attr('time'); // backward-compatibility
	            	count = event - now;
		        }
		        countdowns[_this.id] = count-1;

		        if (options.warnClass && count < options.warnSeconds) {
			        _this.addClass(options.warnClass)
		        }
		        if(count < 0){
		            _this.html(options.textAfterCount);
		            if(options.callback){
		            	options.callback(_this);
		            }
		        }else if(count <= 24*60*60){
		        	setTimeout(function(){
						kkCountDown(true, _this, count);
						kkCountdownInit(_this);
					}, 1000);
		        }else{
		        	setTimeout(function(){
		            	kkCountDown(false, _this, count);
		            	kkCountdownInit(_this);
		            }, 1000);
		        }
            }

            function kkCountDown(oneDay, obj, count){
            	var seconds = fixTime(count % 60);
	            count = Math.floor(count/60);
	            var inutes = fixTime(count % 60);
	            count = Math.floor(count/60);
	            var hours = fixTime(count % 24);
	            count = Math.floor(count/24);
	            var days = count;

				if(oneDay && options.oneDayClass != false){
		            obj.addClass(options.oneDayClass);
				}

            if (days == 0 && !options.displayZeroDays) {

            } else {
					obj.find('.kkc-days').html(days);
                obj.find('.kkc-days-text').html(formatNumberedText(days, 'day'));
	            }

	            obj.find('.kkc-hours').html(hours);
            obj.find('.kkc-hours-text').html(formatNumberedText(hours, 'hour'));

	            obj.find('.kkc-min').html(inutes);
	            obj.find('.kkc-sec').html(seconds);
            }

        /**
        * @var int number
        * @var string optionText - {daysText: day, dayText: day, hoursText: hour, etc}
        */
        function formatNumberedText(number, optionText) {
            var daysText = options[optionText+'sText'];

            if (options.rusNumbers) {
                if (number >= 5 && number < 20) {
                    daysText = options[optionText+'sText'];
                } else {
                    var lastDigit = (""+number).replace(/^\d+(\d)$/, '$1') * 1;
                    if (lastDigit == 1) {
                        daysText = options[optionText+'Text'];
                    } else {
                        if (lastDigit >= 2 && lastDigit <= 4) {
                            daysText = options[optionText+'s2Text'];
                        } else {
                            daysText = options[optionText+'sText'];
                        }
                    }
                }
            } else {
                if (1 == number) {
                    daysText = options[optionText+'Text'];
                }
            }
            return daysText;
        }

        function fixTime(obj){
		    s = '';
		    if(obj < 10){
		        obj = '0' + obj;
		    }
		    return obj;
		}
      }
})(jQuery);
