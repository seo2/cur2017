(function($){
    $.fn.MySlider = function(interval) {
        var slides;
        var cnt;
        var amount;
        var i;
		var timer;
        function run() {
            // hiding previous image and showing next
            $(slides[i]).fadeOut(1000,function(){
				i++;
            if (i >= amount) i = 0;
            $(slides[i]).fadeIn(1000);
			});
            // updating counter
            cnt.text(i+1+' / '+amount);

            // loop
            timer = setTimeout(run, interval);
        }

        slides = $('#my_slider').children();
        cnt = $('#counter');
        amount = slides.length;
        i=0;

        // updating counter
        cnt.text(i+1+' / '+amount);

        var timer = setTimeout(run, interval);
		$(".prev_button").click(function(){
			clearTimeout(timer)
			$(slides[i]).fadeOut(1000,function(){
					i--;
				if (i < 0) i = parseInt(amount-1);
				$(slides[i]).fadeIn(1000);
				
			});
			timer = setTimeout(run, interval);
			return false;
		});
		$(".next_button").click(function(){
			clearTimeout(timer)
			$(slides[i]).fadeOut(1000,function(){
					i++;
				if (i >= amount) i = 0;
				$(slides[i]).fadeIn(1000);
				
			});
			timer = setTimeout(run, interval);
			return false;
		});
    };
})(jQuery);