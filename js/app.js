$(function(){
	$(document).foundation();

	$('.owl-carousel').owlCarousel({
	    loop: true,
	    margin: 0,
	    nav: true,
	    items: 1,
	    responsiveClass:true,
	    responsive: {
	        0: {
	            items: 1
	        }
	    }
	});

	datepickr('#reservation-date', {
		minDate: new Date().getTime(),
		dateFormat: 'm/d/Y'
	});

	$('#find-table').on('click', function(e){
		e.preventDefault();
		var date = $('#reservation-date').val(),
			time = $('#reservation-time').val(),
			time = time.split(' ');
			party = parseInt($('#reservation-party').val(), 10);
			url = 'http://www.opentable.com/opentables.aspx?m=73&p='+party+'&d='+date+'%20'+time[0]+':00%20'+time[1]+'&rid=92896&t=single&scpref=125';

		$(this).attr('href', url);
		window.open($(this).attr("href"), "_blank");
	});
});