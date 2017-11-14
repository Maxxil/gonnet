$('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 50, // Creates a dropdown of 15 years to control year
      labelMonthNext: 'Mois suivant',
	  labelMonthPrev: 'Mois précédent',
		labelMonthSelect: 'Selectionner le mois',
		labelYearSelect: 'Selectionner une année',
		monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
		monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
		weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
		weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
		weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
		today: 'Aujourd\'hui',
		clear: 'Réinitialiser',
		close: 'Fermer',
		format: 'dd/mm/yyyy'
		
});

var resizer={
	body: function(){
		var height=$(window).height();
		$('body').css('height',$(window).height()+'px');
	},
	bgvideo: function(){
		var height=$(window).height();
		$('video#bg-video').css('height',$(window).height()+'px');
	},
};

$(function(){
	resizer.body();
	new WOW().init();
});

$(window).resize(function(){
	resizer.body();
});

$(function(){
	var height = $('.absolute-center').children().height();
	var width = $('.absolute-center').children().width();

	$('.absolute-center').attr('style','height:'+height+'px;width:'+width+'px;');
});

function moveTop(){
	if($('#link-top').hasClass('top10')!==true){
		$('#link-top').addClass('top10');
		$('#link-right').removeClass('right');
		$('#link-bottom').removeClass('bottom');
		$('#link-left').removeClass('left');
		$('#link-right').addClass('wait-right');
		$('#link-bottom').addClass('wait-center');
		$('#link-left').addClass('wait-left');
		$('.wrapper').css('background-position','50% 0%');
	}else{
		$('#link-top').removeClass('top10');
		$('#link-right').removeClass('wait-right');
		$('#link-bottom').removeClass('wait-center');
		$('#link-left').removeClass('wait-left');
		$('#link-right').addClass('right');
		$('#link-bottom').addClass('bottom');
		$('#link-left').addClass('left');
		$('.wrapper').css('background-position','50% 50%');
	}
};