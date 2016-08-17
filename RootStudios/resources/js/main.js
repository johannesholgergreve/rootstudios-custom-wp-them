
/*************************************************************************************************************/
/******************************************* PAGE LOAD ANIMATION *********************************************/
/*************************************************************************************************************/

$("#mainWrapper > *:not(script) ").velocity("transition.slideDownIn",{stagger:200, delay:500, duration: 600});




var clickTap = ('ontouchstart' in document.documentElement != true ) ? 'click' : 'tap',
	swipeleft = ('ontouchstart' in document.documentElement != true ) ? 'null' : 'swipeleft',
	swiperight = ('ontouchstart' in document.documentElement != true ) ? 'null' : 'swiperight',
	windowHeight = $(window).innerHeight(),
	windowWidth = $(window).innerWidth(),
	productsMenu = false,
	lightLogoSrc = "https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/root-studios-logo.png",
	darkLogoSrc = "https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/root-studios-logo-dark.png";






/*************************************************************************************************************/
/*********************************************** HEADER SCRIPTS **********************************************/
/*************************************************************************************************************/

if (windowWidth < 992){
	$("#mainNavigation").addClass("mainNavMobile");
	$("#subNavigation").addClass("subNavMobile");
	$("#mainNavigation").removeClass("mainNavDesktop");
	$("#subNavigation").removeClass("subNavDesktop");
	$("#calcHeaderButton").removeClass("calcHeaderButtonDesktop");
}
else if (windowWidth >= 992){
	$("#calcHeaderButton").addClass("calcHeaderButtonDesktop");
	$("#mainNavigation").addClass("mainNavDesktop");
	$("#subNavigation").addClass("subNavDesktop");
	$("#mainNavigation").removeClass("mainNavMobile");
	$("#subNavigation").removeClass("subNavMobile");	
}





$(document).on("touchmove","#goToCalculatorWrap, #subNavigation",function(e){
	e.preventDefault();
});


$( window ).resize(function() {
	windowWidth = $(document).width();
	$("#leftBorder, #rightBorder").height("height: 120%;");
	if (windowWidth < 992){
		$("#mainNavigation").addClass("mainNavMobile");
		$("#subNavigation").addClass("subNavMobile");
		$("#mainNavigation").removeClass("mainNavDesktop");
		$("#subNavigation").removeClass("subNavDesktop");
		$("#calcHeaderButton").removeClass("calcHeaderButtonDesktop");
		$("header").css({"background-color":"#FFFFFF"});

		$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon-dark.png");
	}
	if(windowWidth < 992 && $(".mainNavMobile").css("display") == "block"){
		$("html, body").addClass("bodyNoScroll");
		$("header").css("height","110%");
		$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/exit-icon.png");
		$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon.png");
		$("#backHeaderButton").css("display","none");
		$("#calcHeaderButton").css("display","block");
	}
	if(windowWidth < 992 && $(".subNavMobile").css("display") == "block"){
		$("html, body").addClass("bodyNoScroll");
		$("header").css("height","110%");
		$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/exit-icon.png");
		$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon.png");
		$("#calcHeaderButton").css("display","none");
		$("#backHeaderButton").css("display","block");
	}
	if(windowWidth < 992 && $("#goToCalculatorWrap").css("display") == "block"){
		$("html, body").addClass("bodyNoScroll");
		$("header").css("height","110%");
		$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon.png");
		$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon.png");
		$("#backHeaderButton").css("display","none");
		$("#calcHeaderButton").css("display","block");
	}
	else if (windowWidth >= 992){
		$("html, body").removeClass("bodyNoScroll");
		$("header").css("height","auto");
		$("#calcHeaderButton").addClass("calcHeaderButtonDesktop");
		$("#mainNavigation").addClass("mainNavDesktop");
		$("#subNavigation").addClass("subNavDesktop");
		$("#mainNavigation").removeClass("mainNavMobile");
		$("#subNavigation").removeClass("subNavMobile");
		$("#goToCalculatorWrap").css("display","none");	
		$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon-dark.png");
		$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon-dark.png");
	
	}
	return;
});



$(document).on(clickTap, "#calcHeaderButton", function(e){
	if (windowWidth < 992) {
		e.preventDefault();
		if ($("header").css("height") == "55px" && productsMenu == false){
			$("html, body").addClass("bodyNoScroll");
			$("header").velocity({height:"110%", backgroundColor:"#FFFFFF"},{queue:false});
			$("#goToCalculatorWrap").velocity("transition.slideDownBigIn",{delay:200, stagger:200});
			$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon-dark.png");
			$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/exit-icon-dark.png");
		} 
		else if ($("#mainNavigation").css("display") == "block" || $("#subNavigation").css("display") == "block") {
			$("#mainNavigation, #subNavigation").velocity("transition.slideRightBigOut");
			$("#goToCalculatorWrap").velocity("transition.slideLeftBigIn",{delay:500});
			$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon-dark.png");
			$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/exit-icon-dark.png");
		}

		else if ($("header").css("height") != "55px" && $("#mainNavigation").css("display") != "block" || $("header").css("height") != "55px"&& $("#subNavigation").css("display") != "block") {
			$("#goToCalculatorWrap").velocity("fadeOut");
			setTimeout(function(){
				headerSlideUp();
			},250);
		}
	}
	else{
		return true;
	}
});



$(document).on(clickTap, "#menuIcon", function(e){
	e.preventDefault();
	if ($("header").css("height") == "55px" && productsMenu == true){
		$("#calcHeaderButton").fadeOut();	
		$("#backHeaderButton").fadeIn();
		headerSlideDown();
		$("#mainNavigation, #subNavigation").velocity({ backgroundColor:"#FFFFFF"},{queue:false});
		$("#subNavigation").velocity("transition.slideDownBigIn",{delay:200, stagger:200});
	}
	else if ($("header").css("height") == "55px" && productsMenu == false){
		headerSlideDown();
		$("#mainNavigation, #subNavigation").velocity({ backgroundColor:"#FFFFFF"},{queue:false});
		$("#mainNavigation").velocity("transition.slideDownBigIn",{delay:200, stagger:200});
	}
	else if ($("#goToCalculatorWrap").css("display") == "block"){
		$("#goToCalculatorWrap").velocity("transition.slideLeftBigOut");
		$("#mainNavigation").velocity("transition.slideRightBigIn",{delay:500});
		$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/exit-icon-dark.png");
		$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon-dark.png");
		$("#mainNavigation, #subNavigation").velocity({ backgroundColor:"#FFFFFF"},{queue:false});

	} 
	else  {
		headerSlideUp();
		$("#mainNavigation, #subNavigation").slideUp();
		$("#mainNavigation, #subNavigation").velocity({ backgroundColor:"#FFFFFF"},{queue:false});
	}

});


function headerSlideDown(){
	$("html, body").addClass("bodyNoScroll");
	$("header").velocity({height:"110%", backgroundColor:"#FFFFFF"},{queue:false});
	$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/exit-icon-dark.png");

}

function headerSlideUp(){
	$("header").velocity({backgroundColor:"#FFFFFF", height:"55px"});
	$("#backHeaderButton").fadeOut();
	$("#calcHeaderButton").fadeIn();
	$("html, body").removeClass("bodyNoScroll");
	$("#menuIcon img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/menu-Ikon-dark.png");
	$("#calcHeaderButton img").attr("src","https://rootstudios.dk/wp-content/themes/rootstudios/resources/images/lommeregner-ikon-dark.png");
}


$(document).on(clickTap, "#productsTab", function(e){
	if (windowWidth < 992){
		e.preventDefault();
		$("#mainNavigation").velocity("transition.slideLeftBigOut");
		$("#subNavigation").velocity("transition.slideRightBigIn",{delay:600});
		$("#calcHeaderButton").fadeOut();
		$("#backHeaderButton").delay(200).fadeIn();
		productsMenu = true;
	}
	else if (windowWidth > 992){
		$("#subNavigation").slideToggle();
	}
});



$(document).on(clickTap, "#backHeaderButton", function(e){
	e.preventDefault();
	$("#subNavigation").velocity("transition.slideRightBigOut");
	$("#mainNavigation").velocity("transition.slideLeftBigIn",{delay:600});
	$("#backHeaderButton").fadeOut();
	$("#calcHeaderButton").delay(200).fadeIn();
	productsMenu = false;
});

$(document).on("mouseenter", "header li", function(){
	$(this).children().css({"opacity":"0.6"});
});

$(document).on("mouseleave", "header li", function(){
	$(this).children().css({"opacity":"0.9"});
});

$(document).on("mouseenter", ".calcHeaderButtonDesktop", function(){
	$("#toolTip").velocity("fadeIn",300);
});

$(document).on("mouseleave", ".calcHeaderButtonDesktop", function(){
	$("#toolTip").velocity("fadeOut",300);
});










var productBox = $(".frontpageProducBox");
var productBoxWidth = productBox.width();


$(document).ready(function(){
	productBox.height(productBoxWidth);
});

$(window).resize(function(){
	var productBoxWidth = productBox.width();
	productBox.height(productBoxWidth);
});




	var kompetenceBox = $(".kompetenceHalfBox");
	var kompetenceBoxWidth = kompetenceBox.width();


	$(document).ready(function(){
		kompetenceBox.height(kompetenceBoxWidth);
		console.log("hej");
	});

	$(window).resize(function(){
		var kompetenceBoxWidth = kompetenceBox.width();
		kompetenceBox.height(kompetenceBoxWidth);
	});
	








/*************************************************************************************************************/
/********************************************* ABOUT PAGE SCRIPTS ********************************************/
/*************************************************************************************************************/


$(document).on(clickTap,"#aboutMenuBar ul li", function(){
	var tabId = $(this).attr("id");
	if (windowWidth < 992){
		$("#aboutMenuBar").velocity({height:"65px"});
		$("#aboutMenuBar ul li").velocity({ opacity: 0 },{complete: function(){$("#aboutMenuBar ul").velocity("slideUp")}});
	}

	$("#aboutMenuBarMobileBtn").velocity({
		    rotateZ: "0deg"
		});	
	
	setTimeout(function() {
		$(".tabContent").velocity("fadeOut",{complete: function(){$("#"+tabId+"Content").velocity("fadeIn")}});
	}, 500);



});

$(document).on(clickTap,"#aboutMenuBarMobileBtn", function(){
	if($("#aboutMenuBar ul").css("display") == "none"){
		$("#aboutMenuBarMobileBtn").velocity({
		    rotateZ: "180deg"
		});	
		$("#aboutMenuBar").velocity({height:"96%"});
		$("#aboutMenuBar ul").velocity("slideDown",{complete: function(){$("#aboutMenuBar ul li").velocity({ opacity: 1 })}});
	}
	else{
		$("#aboutMenuBar ul li").velocity({ opacity: 0 },{complete: function(){$("#aboutMenuBar ul").velocity("slideUp")}});
		$("#aboutMenuBar").velocity({height:"65px"});
		$("#aboutMenuBarMobileBtn").velocity({
		    rotateZ: "0deg"
		});	
	}
});


$(document).on("mouseenter","#aboutMenuBar ul li, #skillsMenuBar ul li",function(){
	$(this).css("text-decoration","none");
	$(this).css("text-decoration","underline");
});

$(document).on("mouseleave","#aboutMenuBar ul li, #skillsMenuBar ul li",function(){
	$(this).css("text-decoration","none");
});










var numberListItems = $('.produktIconBox').length;
	
setTimeout(function(){
	for (i = 0; i < numberListItems; i++) {
		theItem = $(".produktIconBox")[i];
		wantedHeight = $(theItem).parent().find(".produktInfoBox").outerHeight();
		console.log(wantedHeight);
		theItem.style.height = wantedHeight+"px";
	}
}, 50);



$(window).resize(function(){
	numberListItems = $('.produktIconBox').length;

	for (i = 0; i < numberListItems; i++) {
		theItem = $(".produktIconBox")[i];
		wantedHeight = $(theItem).parent().find(".produktInfoBox").outerHeight();
		console.log(wantedHeight);
		theItem.style.height = wantedHeight+"px";
	}
});



$(document).on("mouseenter", ".toSingleProduktBtnNegative, .toSingleProduktBtn, .productHeroBtn, .heroButton, .smallBtn, #socialeMedierFooter img, .frontpageProducBox, .viewCaseBtn", function(){
$(this).css("opacity", "0.9");
});

$(document).on("mouseleave", ".toSingleProduktBtnNegative, .toSingleProduktBtn, .productHeroBtn, .heroButton, .smallBtn, #socialeMedierFooter img, .frontpageProducBox, .viewCaseBtn", function(){
$(this).css("opacity", "1.0");
});


$(document).on("mouseenter", ".caption p a, .wysiwygGreyLinks a, .toSingleFaqLink a, .singleContentField a, #kontaktContentWrap a,  .kompetenceContent a, #aboutContent a, .roleLink", function(){
	$(this).css("text-decoration", "underline");
});


$(document).on("mouseleave", ".caption p a, .wysiwygGreyLinks a, .toSingleFaqLink a, .singleContentField a, #kontaktContentWrap a,  .kompetenceContent a, #aboutContent a, .roleLink", function(){
	$(this).css("text-decoration", "none");
});






/*************************************************************************************************************/
/******************************************** SINGLE CASE SCRIPTS ********************************************/
/*************************************************************************************************************/


$(document).on(clickTap, ".singleCaseSlideDown", function () {
	$(".default2ColTextarea").stop().velocity("scroll", {
		offset: -50,
		duration: 800,
		delay: 100
	});
})



/******************************************** CAROUSEL SCRIPTS ********************************************/

if (clickTap == "click") {
	duration = 1100;
}else {
	duration = 600;
}

var counter = 1;
var carouselWidth; 
var counterLength = $('#carouselSlides .slideWrap').length;	

carouselWidth = $(".slideWrap").length * 100;
$("#carouselSlides").css("width",carouselWidth+"%");
$(".dot").first().addClass("active");


$("#carouselDots").css("width",""+( counterLength * 33)+"px");


$(document).on(clickTap,"#nextSlide", function(){
	nextSlide();
});

$(document).on(clickTap,"#prevSlide", function(){
	prevSlide();
});

$(document).on(swipeleft,"#carouselSection", function(){
	nextSlide();
});

$(document).on(swiperight,"#carouselSection", function(){
	prevSlide();
});




function nextSlide(){
	if(counter == counterLength){
		return false;
	}
	else {
		counter ++;

		$(".dot").removeClass("active");
		$("#dot"+counter).addClass("active");

		$("#carouselSlides").velocity({
		    left: "-"+((counter-1)*100)+"%",
		}, {
		    duration: duration, 
		    easing: "easeOutQuad"
		});
	}
}

function prevSlide(){
	if(counter == 1){
		return false;
	}
	else {
		counter--;

		$(".dot").removeClass("active");
		$("#dot"+counter).addClass("active");

		$("#carouselSlides").velocity({
			left: "-"+((counter-1)*100)+"%",
		}, {
		    duration: duration, 
		    easing: "easeOutQuad"
		});
	}
}



/****************************************** SINGLE CASE GRID SCRIPT ******************************************/

var caseGridBoxRight = $("#gridBoxRight"),
	caseGridBoxRightWidth = caseGridBoxRight.width(),
	caseGridBoxLeft = $("#gridBoxLeft"),
	caseGridBoxLeftWidth = caseGridBoxLeft.width();

if (windowWidth > 768){
	caseGridBoxRight.height(caseGridBoxRightWidth);
	caseGridBoxLeft.height(caseGridBoxLeftWidth);
}
else if (windowWidth < 768 && windowWidth > 550){
	caseGridBoxRight.height("350px");
	caseGridBoxLeft.height("600px");
}
else{
	caseGridBoxRight.height("250px");
	caseGridBoxLeft.height("450px");	
}


$(window).resize(function(){
	if (windowWidth > 768){
		caseGridBoxRightWidth = caseGridBoxRight.width();
		caseGridBoxRight.height(caseGridBoxRightWidth);

		caseGridBoxLeftWidth = caseGridBoxLeft.width();
		caseGridBoxLeft.height(caseGridBoxLeftWidth);
	}
	else if (windowWidth < 768 && windowWidth > 550){
		caseGridBoxRight.height("350px");
		caseGridBoxLeft.height("600px");
	}
	else{
		caseGridBoxRight.height("250px");
		caseGridBoxLeft.height("450px");	
	}
});








/*************************************************************************************************************/
/****************************************** PRICE CALCULATOR SCRIPTS *****************************************/
/*************************************************************************************************************/


 $(".priceCalculatorTable").first().css("border-top","1px solid #DCDCDC");
 $(".priceCalculatorTableExtra").first().css("border-top","1px solid #DCDCDC");

$(document).on(clickTap, ".priceTableText span", function(){
	var url = $(this).attr("data-link"), 
	loadHeading = $("#lightBox h3"),
	loadContent = $("#lightBox p");
	$("#lightBox a").attr("href",url);

	$.get(url, function(data){
		var theHeading = $(data).find('.singleAnswerLoad-0 .theLoadHeading').text();
		var theContent = $(data).find('.singleAnswerLoad-0 p').text();
		$(loadHeading).text(theHeading);
		$(loadContent).text(theContent);
	});

	setTimeout(function(){
		$("#lightBox").velocity('transition.slideDownIn', {duration: 600});		
	}, 500 );

	$(document).on(clickTap, "#exitBtn", function(){
		$("#lightBox").velocity('transition.slideUpOut',{duration:400});		
	});
});

$(document).on(clickTap, ".optDisabled", function(){
	$("#lightBoxSmallWrap").velocity('fadeIn', {duration: 400});
	setTimeout( function(){
		$("#lightBoxSmallWrap").velocity('fadeOut', {duration: 400});
	},3000);
});


// $(window).scroll(function(){
// 	if($(window).scrollTop() >= 50){
// 		$("#prisberegnerSub").css({"opacity":0});
// 		$(".priceCalculatorHero").addClass("priceCalculatorHeroSmaller");
// 	}
// 	else if($(window).scrollTop() < 50){
// 		$(".priceCalculatorHero").removeClass("priceCalculatorHeroSmaller");
// 		$("#prisberegnerSub").css({"opacity":1});
// 	}
// });


// $(".optDisabled").css({"opacity":0.6,"cursor":"default"});
// $(".optDisabled").parent().parent().find(".priceTableText").css({"opacity":0.4});








	var totalPrice = 0;
	var disCountRate = 0.70;
	var currentWebdesignPrice = 0;
	var currentWebDevPrice = 0;
	var currentSEOPrice = 0;
	var currentSupportPrice = 0;
	var oChosenFeatures = {"features":[]}; 
	var SupportNameBefore;
	var SeoNameBefore;


	// *************** SWITCH PAGES COUNT ************** //
	// ************************************************* //
	// ************************************************* //

	$(document).on(clickTap, ".selectPageCountBtn", function(){
		var webdesignPrice = parseInt($(this).attr("data-design-price"));
		var webDevPrice = parseInt($(this).attr("data-dev-price"));
		var antalSider = $(this).attr("data-name");
		var designName = $("#designBtn").attr("data-name");
		var webdevName = $("#devBtn").attr("data-name");


		$(".optDisabled").removeClass("optDisabled");

		for (var i = 0; i < oChosenFeatures.features.length; i++) {
	        var cur = oChosenFeatures.features[i];
	        if (cur.dataValue == "-") {
	            oChosenFeatures.features.splice(i, 1);
	            break;
	        }
	    }


	    var oFeature = {"dataName":antalSider, "dataValue":"-", "discountValue":"-"};
		oChosenFeatures.features.push(oFeature);


		if ($("#designBtn").hasClass("on")) {

			totalPrice -= currentWebdesignPrice;
			totalPrice += webdesignPrice;
			deleteCurObject(designName);
			addCurObject(designName, webdesignPrice, webdesignPrice);
			updatePrice(totalPrice);

		}

		if ($("#devBtn").hasClass("on")) {

			totalPrice -= currentWebDevPrice;
			totalPrice += webDevPrice;
			deleteCurObject(webdevName);
			addCurObject(webdevName, webDevPrice, webDevPrice);
			updatePrice(totalPrice);

		}

		currentWebdesignPrice = webdesignPrice;
		currentWebDevPrice = webDevPrice;
		console.log(totalPrice)
		console.log(oChosenFeatures.features)

		$("#designBtn").attr("data-value", webdesignPrice);
		$("#devBtn").attr("data-value", webDevPrice);

		if(!$(this).hasClass('pageCountOn')){
			$(".selectPageCountBtn").removeClass("pageCountOn");
			$(this).addClass("pageCountOn");
		}



	});



	// *************** ON / OFF BUTTONS **************** //
	// ************************************************* //
	// ************************************************* //

	$(document).on(clickTap, ".onOffBtn", function(){

		
		
			var thisBtn = $(this);
			var theName = thisBtn.attr("data-name");
			var theValue = parseInt(thisBtn.attr("data-value"));
			var disCountValue = Math.floor(theValue * disCountRate);
			
			if (thisBtn.hasClass('optDisabled')) {
				return;
			}

			if(!thisBtn.hasClass('on')){

				totalPrice += theValue;

				addCurObject(theName, theValue, disCountValue);
				animateBtnOn(thisBtn);
			}
			else{	

			    deleteCurObject(theName);
				totalPrice -= theValue;
				animateBtnOff(thisBtn);
			}

			updatePrice(totalPrice);


			console.log(oChosenFeatures);
			console.log(totalPrice);





		
	});




	// *** ADD ON PRODUTS SLIDE DOWN + REMOVE ********** //
	// ************************************************* //
	// ************************************************* //

	$(document).on(clickTap, ".onOffToggleBtnSEO, .onOffToggleBtnSupport", function(){
		
		var thisBtn = $(this);
		var theName = thisBtn.attr("data-name");
		var theValue = parseInt(thisBtn.attr("data-value"));
		var disCountValue = Math.floor(theValue * disCountRate);
		
		if (thisBtn.hasClass('optDisabled')) {
			return;
		}
		
		if(!thisBtn.hasClass('on')){
			animateBtnOn(thisBtn);
			thisBtn.parent().parent().next().velocity("slideDown");
		} 

		else {
			animateBtnOff(thisBtn);
			thisBtn.parent().parent().next().velocity("slideUp");
			
			if (thisBtn.hasClass("onOffToggleBtnSEO")) {
				thisBtn.parent().parent().next().find(".radioBtnSEO").removeClass("activeRadio");
				totalPrice -= currentSEOPrice;
			    deleteCurObject(SeoNameBefore);
			    updatePrice(totalPrice);
			    currentSEOPrice = 0;

			} else {
				thisBtn.parent().parent().next().find(".radioBtnSupport").removeClass("activeRadio");
				totalPrice -= currentSupportPrice;
				deleteCurObject(SupportNameBefore);
				updatePrice(totalPrice);
				currentSupportPrice = 0;
			}
		}

		console.log(oChosenFeatures.features);
	});



	// *********** RADIO BUTTONS SEO ADD ON ************ //
	// ************************************************* //
	// ************************************************* //


	$(document).on(clickTap, ".radioBtnSEO", function(){

		var thisBtn = $(this);
		var SeoPrice = parseInt(thisBtn.attr("data-value"));
		var SeoName = thisBtn.attr("data-name");

		if(!thisBtn.hasClass('activeRadio')){
			$(".radioBtnSEO").removeClass("activeRadio");
			thisBtn.addClass("activeRadio");


			totalPrice -= currentSEOPrice;
			totalPrice += SeoPrice;


		    deleteCurObject(SeoNameBefore);
		    addCurObject(SeoName, SeoPrice, SeoPrice);

			currentSEOPrice = SeoPrice;
			SeoNameBefore = SeoName;

			console.log(totalPrice);
			updatePrice(totalPrice);

			console.log(oChosenFeatures.features);
		}
	});



	// ********* RADIO BUTTONS SUPPORT ADD ON ********** //
	// ************************************************* //
	// ************************************************* //

	

	$(document).on(clickTap, ".radioBtnSupport", function(){

		var thisBtn = $(this);
		var SupportPrice = parseInt(thisBtn.attr("data-value"));
		var SupportName = thisBtn.attr("data-name");

		console.log(SupportPrice);

		if(!thisBtn.hasClass('activeRadio')){
			$(".radioBtnSupport").removeClass("activeRadio");
			thisBtn.addClass("activeRadio");

			totalPrice -= currentSupportPrice;
			totalPrice += SupportPrice;

		    deleteCurObject(SupportNameBefore);
		    addCurObject(SupportName, SupportPrice, SupportPrice);


			currentSupportPrice = SupportPrice;
			SupportNameBefore = SupportName;

			console.log(totalPrice);
			updatePrice(totalPrice);

			console.log(oChosenFeatures.features);
		} 
	});



	function deleteCurObject(theName) {
		for (var i = 0; i < oChosenFeatures.features.length; i++) {
	        var cur = oChosenFeatures.features[i];
	        if (cur.dataName == theName) {
	            oChosenFeatures.features.splice(i, 1);
	            break;
	        }
	    }
	}


	function addCurObject(dataname, dataValue, discountValue) {
		var dataValue = Math.floor(dataValue);
		var discountValue = Math.floor(dataValue*disCountRate);
		var dataValue = dataValue.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
		var discountValue = discountValue.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");

		var oFeature = {"dataName":dataname, "dataValue":dataValue, "discountValue":discountValue};
		oChosenFeatures.features.push(oFeature);
	}


	function updatePrice(totalPrice) {
		totalPrice = Math.floor(totalPrice);
		totalDiscountPrice = Math.floor(totalPrice*disCountRate);
		totalPrice = totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
		totalDiscountPrice = totalDiscountPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
		$(".smallHeroTitlePrice p").html(totalDiscountPrice);
		$(".singlePriceSubHeading p").html('Værdi:&nbsp; '+totalPrice+' &nbsp;DKK')
	}



	function animateBtnOn(thisBtn){
		thisBtn.addClass('on');
		if(windowWidth > 1800) {
			thisBtn.children().velocity({left:"61px"},{duration:200});
		}
		else if(windowWidth > 768){
			thisBtn.children().velocity({left:"47px"},{duration:200});
		}
		else{
			thisBtn.children().velocity({left:"37px"},{duration:200});
		}
		thisBtn.css({
			"background":"#2B5062",
			"-webkit-transition":"background 0.4s",
			"-moz-transition":"background 0.4s",
			"-o-transition":"background 0.4s",
			"transition":"background 0.4s",
		});
			thisBtn.children().css({
			"background":"#728995",
			"-webkit-transition":"background 0.4s",
			"-moz-transition":"background 0.4s",
			"-o-transition":"background 0.4s",
			"transition":"background 0.4s",
		});
	}

	function animateBtnOff(thisBtn){
		thisBtn.removeClass('on');
		thisBtn.children().velocity({left:"3px"},{duration:200});
		thisBtn.css({
			"background":"#D9D9D9",
			"-webkit-transition":"background 0.4s",
			"-moz-transition":"background 0.4s",
			"-o-transition":"background 0.4s",
			"transition":"background 0.4s",
		});
			thisBtn.children().css({
			"background":"#ECECEC",
			"-webkit-transition":"background 0.4s",
			"-moz-transition":"background 0.4s",
			"-o-transition":"background 0.4s",
			"transition":"background 0.4s",
		});
	}






$(document).on(clickTap,"#continueBtn", function(e){
	e.preventDefault();
	// $("body").fadeOut();

	totalPrice = totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");

	var sChosenFeatures = JSON.stringify(oChosenFeatures.features);
	console.log(sChosenFeatures);
	var sChosenFeaturesClean = encodeURI(sChosenFeatures);


	var url = "https://rootstudios.dk/prisberegner-indsendelse/?theString="+sChosenFeaturesClean+"&totalPrice="+totalPrice+"&totalDiscountPrice="+totalDiscountPrice;
	// $("body").load(url, function(){
	// 	$("body").velocity("transition.slideDownBigIn",{stagger:200, delay:350});
	// });
	window.location.href = url;


});






/*************************************************************************************************************/
/*************************************** CONFIRM / SEND TICKET SCRIPTS ***************************************/
/*************************************************************************************************************/


$(document).on("keyup", ".ticket input", function(){
	var thisInp = $(this).attr("id");
	keyupInputValidation(thisInp);
});


function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function keyupInputValidation(thisInp){

		switch(thisInp) {
		    case "nameInp":
		    	if($("#"+thisInp).val().length < 1 ){
		    		$("#"+thisInp).parent().find("span").fadeOut();
		    	}
				else if (!($("#"+thisInp).val().length >= 2)) {
					$("#"+thisInp).parent().find("span").removeClass("inputPassed");
					$("#"+thisInp).parent().find("span").addClass("inputError");
					$("#"+thisInp).next().fadeIn();
				}
				else {
					$("#"+thisInp).parent().find("span").removeClass("inputError");
					$("#"+thisInp).parent().find("span").addClass("inputPassed");
				}
		    break;
		    
		    case "emailInp":
		    	if($("#"+thisInp).val().length < 1 ){
		    		$("#"+thisInp).parent().find("span").fadeOut();
		    	}
				else if (!validateEmail($("#"+thisInp).val())) {
					$("#"+thisInp).parent().find("span").removeClass("inputPassed");
					$("#"+thisInp).parent().find("span").addClass("inputError");
					$("#"+thisInp).next().fadeIn();				}
				else {
					$("#"+thisInp).parent().find("span").removeClass("inputError");
					$("#"+thisInp).parent().find("span").addClass("inputPassed");
				}
		    break;

		    case "phoneInp":
		    	if($("#"+thisInp).val().length < 1 ){
		    		$("#"+thisInp).parent().find("span").fadeOut();
		    	}
				else if (!($("#"+thisInp).val().match(/(\D*\d){8}/))) {
					$("#"+thisInp).parent().find("span").removeClass("inputPassed");
					$("#"+thisInp).parent().find("span").addClass("inputError");
					$("#"+thisInp).next().fadeIn();
				}
				else {
					$("#"+thisInp).parent().find("span").removeClass("inputError");
					$("#"+thisInp).parent().find("span").addClass("inputPassed");
				}
		    break;
		}
	} // END TEST FUNCTION





function sendInputValidation(thisInp){

		switch(thisInp) {
		    case "nameInp":
		    	if (!($("#"+thisInp).val().length >= 2)) {
					$("#"+thisInp).parent().find("span").removeClass("inputPassed");
					$("#"+thisInp).parent().find("span").addClass("inputError");
					$("#"+thisInp).next().fadeIn();
				}
				else {
					$("#"+thisInp).parent().find("span").removeClass("inputError");
					$("#"+thisInp).parent().find("span").addClass("inputPassed");
				}
		    break;
		    
		    case "emailInp":
		    	if (!validateEmail($("#"+thisInp).val())) {
					$("#"+thisInp).parent().find("span").removeClass("inputPassed");
					$("#"+thisInp).parent().find("span").addClass("inputError");
					$("#"+thisInp).next().fadeIn();				}
				else {
					$("#"+thisInp).parent().find("span").removeClass("inputError");
					$("#"+thisInp).parent().find("span").addClass("inputPassed");
				}
		    break;

		    case "phoneInp":
		    	if (!($("#"+thisInp).val().match(/(\D*\d){8}/))) {
					$("#"+thisInp).parent().find("span").removeClass("inputPassed");
					$("#"+thisInp).parent().find("span").addClass("inputError");
					$("#"+thisInp).next().fadeIn();
				}
				else {
					$("#"+thisInp).parent().find("span").removeClass("inputError");
					$("#"+thisInp).parent().find("span").addClass("inputPassed");
				}
		    break;
		}
	} // END TEST2 FUNCTION




	function textFadeAnimation(){

	$(".swipeBtn p span").each(function(i){
		$(this).velocity({opacity:0.9},{
			duration: 400, 
			stagger: 100,
			delay: (i*70),
			complete: function(){
				$(this).velocity({opacity:0.3},{
					duration: 400, 
					stagger: 100,
				});
			},
		});
	});

	}
	textFadeAnimation();
	setInterval(textFadeAnimation,2500);




var swipeContainer = $('.swipeBtnCircle').parent().width();
var swipeBtnPostionRight;

if(windowWidth >= 992) {
	swipeBtnPostionRight = 223;
}
else if (windowWidth < 992){
	swipeBtnPostionRight = 191;	
}

$(window).resize(function(){
	if(windowWidth >= 992) {
		swipeBtnPostionRight = 223;
	}
	else if (windowWidth < 992){
		swipeBtnPostionRight = 191;	
	}
});


$(".swipeBtnCircle").udraggable({
    containment: '.swipeBtn',
    axis:        'x',
    stop: function (e, ui) {
      var pos = ui.position
      if(pos.left > (swipeContainer / 1.75)){
      	$(this).velocity({
      		left:swipeBtnPostionRight+"px"
      	},{
	      	duration:250, 
	      	complete: function(){
				var clientName = $("#nameInp").val();
				var clientEmail = $("#emailInp").val();
				var clientPhone = $("#phoneInp").val();
	      		sendInputValidation(clientName);
	      		sendInputValidation(clientEmail);
	      		sendInputValidation(clientPhone);
				
				if (clientName.length >= 2 && clientPhone.match(/(\D*\d){8}/) && validateEmail(clientEmail)) {
					window.location.href = "https://rootstudios.dk/prisberegner-bekraeftelse/?clientName="+clientName+"&clientEmail="+clientEmail+"&clientPhone="+clientPhone;
				}else{
					if(clientName.length == 0){
						$("#nameInp").parent().find("span").removeClass("inputPassed");
						$("#nameInp").parent().find("span").addClass("inputError");
						$("#nameInp").next().fadeIn();
					}
					if(clientPhone.length == 0){
						$("#phoneInp").parent().find("span").removeClass("inputPassed");
						$("#phoneInp").parent().find("span").addClass("inputError");
						$("#phoneInp").next().fadeIn();
					}
					if(clientEmail.length == 0){
						$("#emailInp").parent().find("span").removeClass("inputPassed");
						$("#emailInp").parent().find("span").addClass("inputError");
						$("#emailInp").next().fadeIn();
					}
					$(this).velocity({left:"3px"},{duration:250});
				}
	      	}
	    });
      }
      else if(pos.left < (swipeContainer / 1.75)){
      	$(this).velocity({left:"3px"},{duration:250});
      }

    }
});

