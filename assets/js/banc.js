$(document).ready(function(){
  $("#header a, #collections a")
  	.hover(
  		function(){
  			$("#header").css( "background-image", "url("+$( this ).attr( "data-img" )+")");
  			$("#header .jumbotron h2").html($( this ).html());
  			$("#header .jumbotron .lead").html($( this ).attr( "data-original-title"));
  		}, 
  		function(){
  			$("#header").css( "background-image", "none");

  			$("#header .jumbotron h2").html($("#header .jumbotron h2").attr("title"));
  			$("#header .jumbotron .lead").html($("#header .jumbotron .lead").attr( "title"));
  		}
  	);

  $("a #content").tooltip();

});