$(document).ready(function(){	
	var inputUser = $("#user");
	var inputPwd = $("#pwd");
	var inputMsn = $("#msn");
	var inputCheckbox = $(".checkbox input");
	var inputRadio = $(".radio input");

	$("#resetData").click(function(){
		var noValue = "";
		inputUser.val(noValue);
		inputPwd.val(noValue);
		inputMsn.val(noValue);
		inputCheckbox.prop('checked', false);
		inputRadio.prop('checked', false);
	});

	$("#sendData").click(function(){
		if(inputUser.val() == "") {
			inputUser.addClass("campo-vazio");
			$("#modalErro").removeClass("hide");
		} else {
			inputUser.removeClass("campo-vazio");
			$("#modalErro").addClass("hide");
			$("body").removeClass("modal-open");
		}

		if(inputPwd.val() == "") {
			inputPwd.addClass("campo-vazio");
			$("#modalErro").removeClass("hide");
		} else {
			inputPwd.removeClass("campo-vazio");
			$("body").removeClass("modal-open");
		}
	});

	inputUser.blur(function() {
		if(inputUser.val() == "") {
			inputUser.addClass("campo-vazio");
		} else {
			inputUser.removeClass("campo-vazio");
		}
	});

	inputPwd.blur(function() {
		if(inputPwd.val() == "") {
			inputPwd.addClass("campo-vazio");
		} else {
			inputPwd.removeClass("campo-vazio");
		}
	});
});

