$(document).ready(function() {
	//console.log("hello");
	$('#calendar').fullCalendar({
		// height: 'parent',
		googleCalendarApiKey: 'AIzaSyCZSBv92hgV59-rx7kzBc0OyNum6hPwg3w',

		events: {
			googleCalendarId: 'homebase.works_cgg8li5ipu69dg8a0qusjb8rf0@group.calendar.google.com',
			//className: 'gcal-event' // an option!
			backgroundColor: '#444',
			//color: '#1E508B',   // an option!
			textColor: '#f1f1f1', // an option!
			borderColor: '#fff'
		},

		timeFormat: 'h(:mm)t',

		header: {
			left:   'title',
			center: '',
			right:  'today listWeek,month prev,next' //basicWeek,basicDay,agendaWeek,agendaDay,month
		},
		views: {
				listWeek: {
						buttonText: 'agenda'
				}
		},

		defaultView: 'listWeek'

	});

});
