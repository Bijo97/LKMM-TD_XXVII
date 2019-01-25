$(document).ready(function() {
	$('a[class^=t]').click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
	});
});

$('.klik').click(function(e){
    e.preventDefault();
});

$('#tombol').click(function(){
	$('#menu').animate({width: 'toggle'}, 400);
	$('#menu').addClass('active');
	// $('#menumenu').animate({width: 'toggle'}, 400);
	// $('#menumenu').addClass('active');
	$('#tombol').addClass('hidden');
});

$('#close').click(function(){
	$('#menu').animate({width: 'toggle'}, 400);
	$('#menu').removeClass('active');
	// $('#menumenu').animate({width: 'toggle'}, 400);
	// $('#menumenu').removeClass('active');
	$('#tombol').removeClass('hidden');
});

//Menu otomatis tutup waktu di link klik
// $('a[class^=t]').click(function(){
// 	$('#menu').animate({width: 'toggle'}, 400);
// 	$('#menu').removeClass('active');
// 	// $('#menumenu').animate({width: 'toggle'}, 400);
// 	// $('#menumenu').removeClass('active');
// 	$('#tombol').removeClass('hidden');
// });

window.onclick = function(event){
  if (!event.target.matches('#tombol') && !event.target.matches('#menu')) {
  	event.stopPropagation();
    var nav = document.getElementById("menu");
    var i;
    for (i = 0; i < nav.length; i++) {
      var openNav = nav[i];
      if (openNav.classList.contains('active')) {
        $('#menu').animate({width: 'toggle'}, 400);
		$('#menu').removeClass('active');
		$('#tombol').removeClass('hidden');
      }
    }
  }
}