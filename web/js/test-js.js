$(function() {


	/*$(".p17otro").each(function() {
		if ($(this).val()) {
			switch($(this).attr('id')) {
		    case "p17otro_0":
		    	$(".p17otro").attr("disabled", "disabled");
		    	$("#p17texto_0 :last").attr("selected", "selected");
		    	$("#p17otro_0").removeAttr("disabled");
		    	break;
		    case "p17otro_1":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_1 :last").attr("selected", "selected");
		        break;
		    case "p17otro_2":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_2 :last").attr("selected", "selected");
		        break;
		    case "p17otro_3":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_3 :last").attr("selected", "selected");
		        break;
		    case "p17otro_4":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_4 :last").attr("selected", "selected");
		        break;
			} 
		} else {
			$(".p17otro").attr("disabled", "disabled");
		}
	});*/
    $("input:checked").each(function() {
		switch($(this).attr('id')) {
	    case "form_p17letra_0":
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled"); 
	        break;
	    case "form_p17letra_1":
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17texto_2").removeAttr("disabled");
	        break;
	    case "form_p17letra_2":
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17texto_2").removeAttr("disabled");
	    	$("#p17texto_3").removeAttr("disabled");
	        break;
	    case "form_p17letra_3":
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17texto_2").removeAttr("disabled");
	    	$("#p17texto_3").removeAttr("disabled");
	    	$("#p17texto_4").removeAttr("disabled");
	        break;	
	    case "form_p18letra_0":
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled"); 
	        break;
	    case "form_p18letra_1":
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18texto_2").removeAttr("disabled");
	        break;
	    case "form_p18letra_2":
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18texto_2").removeAttr("disabled");
	    	$("#p18texto_3").removeAttr("disabled");
	        break;
	    case "form_p18letra_3":
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18texto_2").removeAttr("disabled");
	    	$("#p18texto_3").removeAttr("disabled");
	    	$("#p18texto_4").removeAttr("disabled");
	        break;
		}
    });
        
/*
    var ano = (new Date).getFullYear();
    $("#fecha").text(ano);

    $('[data-toggle="tooltip"]').tooltip();

    function inputDisabled(){
        $("div.form-group input[type=radio]").each(function() {
    		$(this).parent().siblings('input[type=text]').attr('disabled', 'true');
        });
    }

    inputDisabled();*/

    $("button[type=reset]").click(function(event) {
        if (confirm('¿está seguro de que quiere borrar el formulario?')) {
            inputDisabled();
        }
    });

	/*$("div.form-group input[type=radio]").change(function(e, name) {
		var miname =$(this).prop('name');
        
		$("input[name=" + miname + "]").each(function() {
			if($(this).is(":checked")){
				$(this).parent().siblings('input[type=text]').removeAttr('disabled');
				// console.log("checked");
			}else{
				$(this).parent().siblings('input[type=text]').attr('disabled', 'true').val('');
				// console.log("No checked");
			}
		});

	});*/
	
	//Pregunta2. Count persents
	countPregunta2_1();
	countPregunta2_2();
	
	$(".p2").change(function() {
		countPregunta2_1();
		countPregunta2_2();
	});
	
	//Pregunta4. Required #p4texto field if #form_p4_3 ischecked
	$("#form_p4_3").change(function() {
	    if(this.checked) {
	    	$("#p4texto").attr("required", "required");
	    } 
	});
	
	$("#form_p4_0").change(function() {
	    if(this.checked) {
	    	$("#p4texto").removeAttr('required').val("");
	    } 
	});
	$("#form_p4_1").change(function() {
	    if(this.checked) {
	    	$("#p4texto").removeAttr('required').val("");
	    } 
	});
	$("#form_p4_2").change(function() {
	    if(this.checked) {
	    	$("#p4texto").removeAttr('required').val("");
	    } 
	});
	
	//Pregunta9 if Si then No unchecked
	$("#9radios-0").change(function() {
	    if(this.checked) {
	    	$("#form_p9_0").removeAttr('checked');
	    	$("#p9addition").css('display','block');
	    }
	});
	
	//Pregunta9 if No than Si unchecked
	$("#form_p9_0").change(function() {
	    if(this.checked) {
	    	$("#9radios-0").removeAttr('checked');
	    	$("#p9addition").css('display','none');
	    }
	});
	
	//Pregunta15. Required #p15texto field if #form_p15_2 ischecked
	$("#form_p15_2").change(function() {
		if(this.checked) {
	    	$("#p15texto").attr("required", "required");
	    } 
	});
	
	$("#form_p15_0").change(function() {
	    if(this.checked) {
	    	$("#p15texto").removeAttr('required').val("");
	    } 
	});
	$("#form_p15_1").change(function() {
	    if(this.checked) {
	    	$("#p15texto").removeAttr('required').val("");
	    } 
	});
	
   	//Pregunta17 and Pregunta18 set placeholders
	/*$(".p17").attr("placeholder", "Indique cuáles");
	$(".p18").attr("placeholder", "Indique cuáles");*/
	
	//Pregunta17
	if($("#form_p17letra_0").checked) {
		$(".p17texto").attr("disabled", "disabled");
	    $("#p17texto_0").removeAttr("disabled");
	    $("#p17texto_1").removeAttr("disabled"); 
	}
	
	if($("#form_p17letra_1").checked) {
		$(".p17texto").attr("disabled", "disabled");
    	$("#p17texto_0").removeAttr("disabled");
    	$("#p17texto_1").removeAttr("disabled");
    	$("#p17texto_2").removeAttr("disabled");
    }
	
	if($("#form_p17letra_2").checked) {
		$(".p17texto").attr("disabled", "disabled");
    	$("#p17texto_0").removeAttr("disabled");
    	$("#p17texto_1").removeAttr("disabled");
    	$("#p17texto_2").removeAttr("disabled");
    	$("#p17texto_3").removeAttr("disabled");
    }
	
	if($("#form_p17letra_3").checked) {
		$(".p17texto").attr("disabled", "disabled");
    	$("#p17texto_0").removeAttr("disabled");
    	$("#p17texto_1").removeAttr("disabled");
    	$("#p17texto_2").removeAttr("disabled");
    	$("#p17texto_3").removeAttr("disabled");
    	$("#p17texto_4").removeAttr("disabled");
    } 
	
	$("#form_p17letra_0").change(function() {
		if(this.checked) {
			$(".p17texto").attr("disabled", "disabled");
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17otro_2").val("").attr("disabled", "disabled");
	    	$("#p17otro_3").val("").attr("disabled", "disabled");
	    	$("#p17otro_4").val("").attr("disabled", "disabled");
	    } 
	});
	
	$("#form_p17letra_1").change(function() {
		if(this.checked) {
			$(".p17texto").attr("disabled", "disabled");
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17texto_2").removeAttr("disabled");
	    	$("#p17otro_3").val("").attr("disabled", "disabled");
	    	$("#p17otro_4").val("").attr("disabled", "disabled");
	    } 
	});
	
	$("#form_p17letra_2").change(function() {
		if(this.checked) {
			$(".p17texto").attr("disabled", "disabled");
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17texto_2").removeAttr("disabled");
	    	$("#p17texto_3").removeAttr("disabled");
	    	$("#p17otro_4").val("").attr("disabled", "disabled");
	    } 
	});
	
	$("#form_p17letra_3").change(function() {
		if(this.checked) {
			$(".p17texto").attr("disabled", "disabled");
	    	$("#p17texto_0").removeAttr("disabled");
	    	$("#p17texto_1").removeAttr("disabled");
	    	$("#p17texto_2").removeAttr("disabled");
	    	$("#p17texto_3").removeAttr("disabled");
	    	$("#p17texto_4").removeAttr("disabled");
	    } 
	});
	
	$(".p17texto").change(function() {
		if ($(this).val() == "Otra") {
			switch($(this).attr('id')) {
		    case "p17texto_0":
		    	$("#p17otro_0").removeAttr("disabled").attr("required", "required").focus();
		        break;
		    case "p17texto_1":
		    	$("#p17otro_1").removeAttr("disabled").attr("required", "required").focus();
		        break;
		    case "p17texto_2":
		    	$("#p17otro_2").removeAttr("disabled").attr("required", "required").focus();
		        break;
		    case "p17texto_3":
		    	$("#p17otro_3").removeAttr("disabled").attr("required", "required").focus();
		        break;		     
			}
			//alert($(this).attr('id'));
		}
		
		if ($(this).val() != "Otra") {
			switch($(this).attr('id')) {
		    case "p17texto_0":
		    	$("#p17otro_0").attr('disabled', 'true').removeAttr("required").val("");
		        break;
		    case "p17texto_1":
		    	$("#p17otro_1").attr('disabled', 'true').removeAttr("required").val("");
		        break;
		    case "p17texto_2":
		    	$("#p17otro_2").attr('disabled', 'true').removeAttr("required").val("");
		        break;
		    case "p17texto_3":
		    	$("#p17otro_3").attr('disabled', 'true').removeAttr("required").val("");
		        break;		     
			}
		}
	});
	
	//Pregunta18
	if($("#form_p18letra_0").checked) {
			$(".p18texto").attr("disabled", "disabled");
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled"); 
	}
	
	if($("#form_p18letra_1").checked) {
		$(".p18texto").attr("disabled", "disabled");
    	$("#p18texto_0").removeAttr("disabled");
    	$("#p18texto_1").removeAttr("disabled");
    	$("#p18texto_2").removeAttr("disabled");
    }
	
	if($("#form_p18letra_2").checked) {
		$(".p18texto").attr("disabled", "disabled");
    	$("#p18texto_0").removeAttr("disabled");
    	$("#p18texto_1").removeAttr("disabled");
    	$("#p18texto_2").removeAttr("disabled");
    	$("#p18texto_3").removeAttr("disabled");
    }
	
	if($("#form_p18letra_3").checked) {
		$(".p18texto").attr("disabled", "disabled");
    	$("#p18texto_0").removeAttr("disabled");
    	$("#p18texto_1").removeAttr("disabled");
    	$("#p18texto_2").removeAttr("disabled");
    	$("#p18texto_3").removeAttr("disabled");
    	$("#p18texto_4").removeAttr("disabled");
    } 
	
	$("#form_p18letra_0").change(function() {
		if(this.checked) {
			$(".p18texto").attr("disabled", "disabled");
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18otro_2").val("").attr("disabled", "disabled");
	    	$("#p18otro_3").val("").attr("disabled", "disabled");
	    	$("#p18otro_4").val("").attr("disabled", "disabled");
	    } 
	});
	
	$("#form_p18letra_1").change(function() {
		if(this.checked) {
			$(".p18texto").attr("disabled", "disabled");
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18texto_2").removeAttr("disabled");
	    	$("#p18otro_3").val("").attr("disabled", "disabled");
	    	$("#p18otro_4").val("").attr("disabled", "disabled");
	    } 
	});
	
	$("#form_p18letra_2").change(function() {
		if(this.checked) {
			$(".p18texto").attr("disabled", "disabled");
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18texto_2").removeAttr("disabled");
	    	$("#p18texto_3").removeAttr("disabled");
	    	$("#p18otro_4").val("").attr("disabled", "disabled");
	    } 
	});
	
	$("#form_p18letra_3").change(function() {
		if(this.checked) {
			$(".p18texto").attr("disabled", "disabled");
	    	$("#p18texto_0").removeAttr("disabled");
	    	$("#p18texto_1").removeAttr("disabled");
	    	$("#p18texto_2").removeAttr("disabled");
	    	$("#p18texto_3").removeAttr("disabled");
	    	$("#p18texto_4").removeAttr("disabled");
	    } 
	});
	
	$(".p18texto").change(function() {
		if ($(this).val() == "Otra") {
			switch($(this).attr('id')) {
		    case "p18texto_0":
		    	$("#p18otro_0").removeAttr("disabled").attr("required", "required").focus();
		        break;
		    case "p18texto_1":
		    	$("#p18otro_1").removeAttr("disabled").attr("required", "required").focus();
		        break;
		    case "p18texto_2":
		    	$("#p18otro_2").removeAttr("disabled").attr("required", "required").focus();
		        break;
		    case "p18texto_3":
		    	$("#p18otro_3").removeAttr("disabled").attr("required", "required").focus();
		        break;		     
			}
			//alert($(this).attr('id'));
		}
		
		if ($(this).val() != "Otra") {
			switch($(this).attr('id')) {
		    case "p18texto_0":
		    	$("#p18otro_0").attr('disabled', 'true').removeAttr("required").val("");
		        break;
		    case "p18texto_1":
		    	$("#p18otro_1").attr('disabled', 'true').removeAttr("required").val("");
		        break;
		    case "p18texto_2":
		    	$("#p18otro_2").attr('disabled', 'true').removeAttr("required").val("");
		        break;
		    case "p18texto_3":
		    	$("#p18otro_3").attr('disabled', 'true').removeAttr("required").val("");
		        break;		     
			}
		}
	});
	
	//Pregunta20. Required #p20texto field if #form_p20_2 ischecked
	$("#form_p20_3").change(function() {
		if(this.checked) {
	    	$("#p20texto").attr("required", "required");
	    } 
	});
	
	$("#form_p20_0").change(function() {
	    if(this.checked) {
	    	$("#p20texto").removeAttr('required').val("");
	    } 
	});
	$("#form_p20_1").change(function() {
	    if(this.checked) {
	    	$("#p20texto").removeAttr('required').val("");
	    } 
	});
	$("#form_p20_2").change(function() {
	    if(this.checked) {
	    	$("#p20texto").removeAttr('required').val("");
	    } 
	});
	
	//field Especialidad for userinfo page
	$("#form_especialidad").change(function() {
		if ($(this).val() == "Otros") {
		    $("#otro").removeAttr("disabled").attr("required", "required").focus();
		}
		
		if ($(this).val() != "Otros") {
	    	$("#otro").attr('disabled', 'true').removeAttr("required").val("");
		}
	});
	
	//Working with "Otra" after user back to re-edit the page
	$(".p17texto").each(function() {
		if ($(this).val() == 'Otra') {
			
			$(".p17otro").attr("disabled", "disabled");

			switch($(this).attr('id')) {
		    case "p17otro_0":
		    	
		    	$("#p17texto_0 :last").attr("selected", "selected");
		    	$("#p17otro_0").removeAttr("disabled");
		    	break;
		    case "p17otro_1":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_1 :last").attr("selected", "selected");
		        break;
		    case "p17otro_2":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_2 :last").attr("selected", "selected");
		        break;
		    case "p17otro_3":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_3 :last").attr("selected", "selected");
		        break;
		    case "p17otro_4":
		    	$(this).removeAttr("disabled");
		    	$("#p17texto_4 :last").attr("selected", "selected");
		        break;
			}
		} else {
			$(".p17otro").attr("disabled", "disabled");
		}
		//alert($(this).val());
	});
	
});

$(window).scroll(function() {

    var navbarColor = "255,255,255"; //color attr for rgba
    var smallLogoHeight = $('.small-logo').height();
    var bigLogoHeight = $('.big-logo').height();
    var navbarHeight = $('.navbar').height();
    if (navbarHeight > 50) {
        navbarHeight = 50;
    }

    var smallLogoEndPos = 0;
    var smallSpeed = (smallLogoHeight / bigLogoHeight);

    var ySmall = ($(window).scrollTop() * smallSpeed);
    var smallPadding = navbarHeight - ySmall;
    if (smallPadding > navbarHeight) {
        smallPadding = navbarHeight;
    }
    if (smallPadding < smallLogoEndPos) {
        smallPadding = smallLogoEndPos;
    }
    if (smallPadding < 0) {
        smallPadding = 0;
    }

    $('.small-logo-container ').css({
        "padding-top": smallPadding
    });

    var navOpacity = ySmall / smallLogoHeight;
    if (navOpacity > 1) {
        navOpacity = 1;
    }
    if (navOpacity < 0) {
        navOpacity = 0;
    }
    var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
    $('.navbar-fixed-top').css({
        "background-color": navBackColor
    });

    var shadowOpacity = navOpacity * 0.4;
    if (ySmall > 1) {
        $('.navbar-fixed-top').css({
            "box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"
        });
    } else {
        $('.navbar-fixed-top').css({
            "box-shadow": "none"
        });
    }

    var navbarBottomHeight = $('.footerWrapper').height();
    var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
    var fixedBottom = scrollBottom - navbarBottomHeight;
    if (fixedBottom <= 0) {
        $(".navbar-fixed-bottom").addClass('navbar-nofixed-bottom');
        $(".navbar-fixed-bottom > div").removeClass('container');
    } else {
        $(".navbar-fixed-bottom").removeClass('navbar-nofixed-bottom');
        $(".navbar-fixed-bottom > div").addClass('container');
    }

});

//pregunta2 Validation summa. Preguntas 17 y 18.
document.getElementById("form1").addEventListener("submit", function(event){
	
	//Pregunta17 value = Otra
    $(".p17texto").each(function() {
		if ($(this).val() == "Otra") {
			switch($(this).attr('id')) {
		    case "p17texto_0":
		    	$(this).children().val($("#p17otro_0").val());
		    	break;
		    case "p17texto_1":
		    	$(this).children().val($("#p17otro_1").val());
		        break;
		    case "p17texto_2":
		    	$(this).children().val($("#p17otro_2").val());
		        break;
		    case "p17texto_3":
		    	$(this).children().val($("#p17otro_3").val());
		        break;		     
			}
		}
    });
    
	//Pregunta18 value = Otra
    $(".p18texto").each(function() {
		if ($(this).val() == "Otra") {
			switch($(this).attr('id')) {
		    case "p18texto_0":
		    	$(this).children().val($("#p18otro_0").val());
		    	break;
		    case "p18texto_1":
		    	$(this).children().val($("#p18otro_1").val());
		        break;
		    case "p18texto_2":
		    	$(this).children().val($("#p18otro_2").val());
		        break;
		    case "p18texto_3":
		    	$(this).children().val($("#p18otro_3").val());
		        break;		     
			}
		}
    });
	
	if (($("#pregunta2result1").html() != "100 %") || ($("#pregunta2result2").html() != "100 %")) {
		
		$("#pregunta2error1").html("");
		$("#pregunta2error2").html("");
			
		if ($("#pregunta2result1").html() != "100 %") {
			event.preventDefault();
			location.href = "#form_p2a";
			$("#pregunta2error1").html("Columna1. Tiene que ser 100%");
		} 
		
		if ($("#pregunta2result2").html() != "100 %") {
			event.preventDefault();
			location.href = "#form_p2a";
			$("#pregunta2error2").html("Columna2. Tiene que ser 100%");
		} 	
	}
	
});

//Pregunta2. Functions for counting
function countPregunta2_1(){
	p2r = parseInt($("#form_p2a").val(), 10)+
		parseInt($("#form_p2b").val(), 10)+
		parseInt($("#form_p2c").val(), 10)+
		parseInt($("#form_p2d").val(), 10)+
		parseInt($("#form_p2e").val(), 10);
	$("#pregunta2result1").html(p2r + ' %');
	
	if (p2r < 100) {
		$("#pregunta2result1").css('color','gray');
	} else if (p2r > 100) {
		$("#pregunta2result1").css('color','red');
	} else {
		$("#pregunta2result1").css('color','green');
		$("#pregunta2error1").html("");
	}
	
	// if Pregunta2E has number of persents more than 0, it shoild be filled up
	if (parseInt($("#form_p2e").val(), 10) > 0) {
		$("#form_p2texto").attr("required", "required");
	} else {
		$("#form_p2texto").removeAttr('required');
	}
}

function countPregunta2_2(){
	p2r = parseInt($("#form_p2ca").val(), 10)+
		parseInt($("#form_p2cb").val(), 10)+
		parseInt($("#form_p2cc").val(), 10)+
		parseInt($("#form_p2cd").val(), 10)+
		parseInt($("#form_p2ce").val(), 10)+
		parseInt($("#form_p2cf").val(), 10)+
		parseInt($("#form_p2cg").val(), 10);
	$("#pregunta2result2").html(p2r + ' %');
	
	if (p2r < 100) {
		$("#pregunta2result2").css('color','gray');
	} else if (p2r > 100) {
		$("#pregunta2result2").css('color','red');
	} else {
		$("#pregunta2result2").css('color','green');
		$("#pregunta2error1").html("");
	}
}
