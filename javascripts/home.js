$(document).ready(function(){
	$("#log-in").hide();
	$("#box1").delay().animate({
			left: '45%', opacity:'1', width:'10%'
		}, 500, function() {
	});
	
	
	$("#box1").click(function(){
		
		$("#box1").delay().animate({
			top: '15%', opacity:'1'
		}, 200, function() {
		});
		
		$("#box2").delay(100).animate({
			top: '15%', opacity:'0.25'
		}, 200, function() {
		});
		
		$("#box3").delay(200).animate({
			top: '15%', opacity:'0.25'
		}, 200, function() {
		});
		
		
		$("#newsdiv").delay(0).animate({
			opacity:'0', left: '100%'
		}, 500, function() {
		});
		
		$("#aboutdiv").delay(0).animate({
			opacity:'0', left: '100%'
		}, 500, function() {
		});
		
		$("#historydiv").delay(1000).animate({
			left: '15%', opacity:'1'
		}, 500, function() {
		});
	});
	
	$("#box2").delay(700).animate({
			top: '35%', opacity:'1'
		}, 300, function() {
	});
	
	$("#box2").click(function(){
		
		$("#box1").delay().animate({
			top: '15%', opacity:'0.25'
		}, 200, function() {
		});
		
		$("#box2").delay(100).animate({
			top: '15%', opacity:'1'
		}, 200, function() {
		});
		
		$("#box3").delay(200).animate({
			top: '15%', opacity:'0.25'
		}, 200, function() {
		});
		
		$("#historydiv").delay(0).animate({
			opacity:'0', left: '100%'
		}, 500, function() {
		});
		
		$("#aboutdiv").delay(0).animate({
			opacity:'0', left: '100%'
		}, 500, function() {
		});
		
		$("#newsdiv").delay(1000).animate({
			left: '15%', opacity:'1'
		}, 500, function() {
		});
		
		
	});
	
	$("#box3").delay(1200).animate({
			top: '35%', opacity:'1'
		}, 300, function() {
	});

	$("#box3").click(function(){
		
		$("#box1").delay().animate({
			top: '15%', opacity:'0.25'
		}, 200, function() {
		});
		
		$("#box2").delay(100).animate({
			top: '15%', opacity:'0.25'
		}, 200, function() {
		});
		
		$("#box3").delay(200).animate({
			top: '15%', opacity:'1'
		}, 200, function() {
		});
		
		$("#historydiv").delay(0).animate({
			opacity:'0', left: '100%'
		}, 500, function() {
		});
		
		$("#newsdiv").delay(0).animate({
			opacity:'0', left: '100%'
		}, 500, function() {
		});
		
		$("#aboutdiv").delay(1000).animate({
			left: '15%', opacity:'1'
		}, 500, function() {
		});
		
		
	});

	
	$("#piccontainer").delay(1700).animate({
			opacity:'1'
		}, 300, function() {
	});
	
	$("#log-in").delay(2000).slideDown();
});