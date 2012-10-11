jQuery(function ($) {
	

	if($("#branding #s").val() === ""){
		$("#branding #s").val("buscar...");
	} else {
		$("#branding #s").addClass("s_focus");

	}

	$("#branding #s").focus(function(){
		if($(this).val() === "buscar..."){
			$(this).val("");
		}
	});
	$("#branding #s").blur(function(){
		if($(this).val() === ""){
			$(this).val("buscar...");
		}
		$(".s_focus").removeClass("s_focus");
	});
	
	$(".thumb-col").closest("a").addClass("thumb_link");
	
	var col_izq = $(".port-col-sola");
	var col_der = $(".port-col-span");
	
	if(col_izq.height() < col_der.height()){
		col_izq.height(col_der.height());
	} else {
		col_der.height(col_izq.height());
	}
	
	
	/*
	* Posicion de movimientos
	* autor: wachunei
	**/
	
	$(window).scroll(function(){
		var menu = $('#feuc2013-candidatos');
		if($(window).scrollTop() <= 230) {
			menu.css('position','absolute').css('top',230);
		}else{
			menu.css('position','fixed').css('top',0);
		}
	});
	
	
	/**
	* Codigo para banner de evento
	* autor: wachunei.
	**/
	
	
	/* if($.cookie('banner_evento') === 'cerrado' ){
		$('#banner_evento').slideUp(300);
	}

	$('#banner_evento a.boton_cerrar').click(function(){
		$.cookie('banner_evento','cerrado',{ path: '/', expires:5});
		$('#banner_evento').slideUp();
	});*/
	

	/**
	*	Codigo que esconde disclaimer de posts de opiniones
	*	autor: wachunei.
	**/
	
	//$.cookie('opinion-alert', null); //borrar al lanzar

	
	if($.cookie('opinion-alert') !== 'closed') {
		$('.opinion-alert').fadeIn('fast');

	}

	$('.cerrar-opinion-alert').html("x");
	$('.opinion-alert-undo').hide();

	var hideAlert;
    $('.cerrar-opinion-alert').click(function(e){
		$.cookie('opinion-alert','closed', {path: '/', expires:365});
		$('.opinion-alert').animate({
			padding: '10px',
		},'fast');
		$(this).fadeOut();
		$('.opinion-alert-text').fadeOut('fast',function(){
			$('.opinion-alert-undo').fadeIn('slow');
			hideAlert = setTimeout(function(){
				$('.opinion-alert').slideUp();
			},4000)
		});
    	e.preventDefault();
    });

    $('.opinion-alert-undo a').click(function(e){
    	clearTimeout(hideAlert);
		$.cookie('opinion-alert',null);
		$('.opinion-alert').animate({
			padding: '20px',
		},'fast');
		$('.cerrar-opinion-alert').fadeIn();
		$('.opinion-alert-undo').fadeOut('fast',function(){
			$('.opinion-alert-text').fadeIn('slow');
		});
    	e.preventDefault();
    });

});