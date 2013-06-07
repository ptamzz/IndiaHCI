/*
	Custom jQuery & Javascript Functions
	Author: Pritam Pebam
	Version: 2.1.0
	Email: ptamzz@gmail.com
 */

// JavaScript Document

var tempPage;

$(function() {
	
	//URL handling
	var page =  window.location.hash;
	if(page != '') { loadPage(page); }
	
	$(window).bind('hashchange', function() {
		var page =  window.location.hash;
		loadPage(page);
	});
	
	//slide open workshop panels
	$(".eventProfile li").live("click", function(){
		var elem = $(this);
		
		if(elem.hasClass("open")){
			elem.children(".desc").hide("blind", 400);
			elem.removeClass("open");
		} else {
			$(this).siblings().children(".desc").hide("blind", 100, function(){
				elem.children(".desc").show("blind", 400);
			});
			$(this).siblings().removeClass("open");
			elem.addClass("open");
		}
		
		$(this).children(".desc").show("blind", 400);
		
	});
	
	//Papers page nav
	$(".paperNav li").live("click", function(){
		var elem = $(this);
		
		elem.siblings().removeClass('active');
		elem.addClass('active');
		
		var tab = $(this).data('id');
		console.log(tab);
		$("#paperWrap>li").removeClass("show").addClass("hide");
		$("#"+tab).addClass("show");
	});
	
	//Handling navigation button
	$('.mainNav li').live('click', function(){
		$(this).siblings().removeClass("on");
		$(this).addClass("on")
	});
	
	//Clicked at home button
	$("#homeLogo").live("click", function(){
		$('.mainNav li').removeClass("on");
	});
	
}); // jQuery $(funtion() ends


function loadPage(page){
	var data = page.split('/'), html;
	getPage(data[1], "null");
	tempPage = data[1];
}


function getPage(d1, d2){
	
	if(tempPage != d1){
		$('.ajax-loader').show();
		$("#cWrap>*").hide();
		$.scrollTo({top: 0, left:0});

		$.ajax({
			type: "POST",
			url: "php/loadPage.php",
			data: { "page" : encodeURIComponent(d1) },
			cache: false,
			error: function(xhr){
				if(xhr.status == 403){
					$('#cWrap').html("<section class='page'>It seems you are using an old browser. Kindly consider updgrading or using another browser.</section>");
				}
			},
			success: function(html){
				$('.ajax-loader').hide();
				$("#cWrap").html(html);
				$("#cWrap").fadeIn(100);
			}
		});
	}
}