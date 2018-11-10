let USER_NAME = "admin";
let PASSWORD = "softwareguy";

var imag_dict = {
	"Pants" : ["pants.jpg", "Goodthreads’ collection of men’s clothing crafted with care takes wear-everywhere apparel to the next level. "],
	"Pajama": ["pajama.jpg", "Our irresistibly soft and cozy fleece pajama set makes perfect gift for yourself and or your loved ones."],
	"Dress" : ["dress.jpg", "Women's Vintage Patchwork Pockets Puffy Swing Casual Party Dress O-Neck,Ball Gown,Fit and Flare."],
	"Handbag" : ["handbag.jpg", "Classic and luxurious style, simple and stylish color can make you fit most of the wear."],
	"Backpack": ["backpack.jpg", "Business Laptop Backpack Hiking Waterproof 15.6, 2.0 USB 40L Large Travel Backpacks Anti Theft"],
	"Scarf" : ["scarf.jpg", "Women's Fall Winter Scarf Classic Tassel Plaid Scarf Warm Soft Chunky Large Blanket Wrap Shawl Scarves"],
	"Short" : ["short.jpg", "Wrangler Authentics Big & Tall Performance Cargo Short"],
	"Shoes" : ["shoes.jpg", "206 Collective Men's Barnes Suede Casual Oxford"],
	"Hat" : ["hat.jpg", "MONTIQUE Long Lasting Wide Brim 2 7/8 Wool Felt Dress Hat for Men H61"],
	"Shirt" : ["shirt.jpg", "BUTTONED DOWN Men's Classic Fit Spread-Collar Supima Cotton Dress Casual Shirt"]
}
$("#home-button").on("click", function(){
	$("div.screen").hide();
	$("#home").css("display", "flex");
});
$("#about-button").on("click",function(){
	$("div.screen").hide();
	$("#about").css("display", "flex");
});
$("#product-button").click(function(){
	$("div.screen").hide();
	$("#product").css("display", "flex");
});
$("#news-button").click(function(){
	$("div.screen").hide();
	$("#news").css("display", "flex");
});
$("#contacts-button").click(function(){
	$("div.screen").hide();
	$("#contacts").css("display", "flex");
});
$("#admin-button").click(function(){
	$("div.screen").hide();
	$("#admin").css("display", "flex");
});
$("#submit").click(function(){
	var username = $("#username").val();
	var password = $("#password").val();
	$("#secure").hide();
	$("wrong-pass").hide();
	if (username === USER_NAME && password == PASSWORD){
		$("#secure").show();
	} 
	else{
		var div = document.getElementById("wrong-pass");
		div.innerHTML = "Password is incorrect. Please try again."
	}
	// $("div.screen").hide();
	// $("#secure-field").show()
});

