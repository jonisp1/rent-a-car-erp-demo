var last_page_load;
var tm;




$(document).ready(function () {

	$('.modal').on('hidden.bs.modal', function (e) {
		$('body').removeClass('modal-open');
	});

	$('.modal').on('shown.bs.modal', function (e) {
		$('body').addClass('modal-open');
	});
	
});


function page_load_show() {
	mApp.blockPage({
		overlayColor: '#000000',
		type: 'loader',
		state: 'primary',
		message: 'Processing...'
	});

}

function modal_load_show(modal) {
	mApp.block('#' + modal + ' .modal-content', {
		overlayColor: '#000000',
		type: 'loader',
		state: 'primary',
		message: 'Processing...'
	});
}

function modal_load_hide(modal) {
	mApp.unblock('#' + modal + ' .modal-content');
}

function page_load_hide() {
	mApp.unblockPage();
}


toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": true,
	"progressBar": true,
	"positionClass": "toast-top-center",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "6000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
};

function load_page(page, title) {
	$("#main_page").load("pages//" + page);
	document.getElementById("main_page_title").innerHTML = title;
	last_page_load = page;

}

function load_page_with_callback(page, callback) {
	$("#main_page").load("pages/" + page, function (responseTxt, statusTxt, xhr) {
		if (statusTxt == "success") {
			callback();
			last_page_load = page;
		}
		if (statusTxt == "error")
			console.log("Error: " + xhr.status + ": " + xhr.statusText);
	});

}

function removeOptions(selectbox) {
	var i;
	for (i = selectbox.options.length - 1; i >= 0; i--) {
		selectbox.remove(i);
	}


}

function addOptions(selectbox, text, value) {
	var x = selectbox;
	var option = document.createElement("option");
	option.text = text;
	option.value = value;
	x.add(option);
}



function change_datepicker_date(input, datepicker) {


	var dt = input.split(" ");
	var date = new Date(dt[0]);
	var year = date.getFullYear();
	var month = (1 + date.getMonth()).toString();
	month = month.length > 1 ? month : '0' + month;
	var day = date.getDate().toString();
	day = day.length > 1 ? day : '0' + day;
	$("#" + datepicker).datepicker("update", date);
	return day + '/' + month + '/' + year;
}



function date_for_input(input) {


	var dt = input.split(" ");
	var date = new Date(dt[0]);
	var year = date.getFullYear();
	var month = (1 + date.getMonth()).toString();
	month = month.length > 1 ? month : '0' + month;
	var day = date.getDate().toString();
	day = day.length > 1 ? day : '0' + day;
	return day + '/' + month + '/' + year;
}




function show_alert(type, msg) {

	if (type == 1) {
		$('#alert-div').addClass('alert-success');
		document.getElementById("alert_msg_1").innerHTML = 'Complete';
		document.getElementById("alert_msg_2").innerHTML = msg;
		$('#alert-div').addClass('show');
		document.getElementById("alert-div").style.display = null;
		setTimeout(func, 10000);
		function func() {
			hide_alert();
		}

	}
	if (type == 0) {
		$('#alert-div').addClass('alert-danger');
		document.getElementById("alert_msg_1").innerHTML = 'error';
		document.getElementById("alert_msg_2").innerHTML = msg;
		$('#alert-div').addClass('show');
		document.getElementById("alert-div").style.display = null;
	}
}



function hide_alert() {
	$('#alert-div').removeClass('alert-success');
	$('#alert-div').removeClass('alert-danger');
	$('#alert-div').removeClass('show');
	document.getElementById("alert_msg_1").innerHTML = '';
	document.getElementById("alert_msg_2").innerHTML = '';
	document.getElementById("alert-div").style.display = 'none';

}



function closePrint() {
	document.body.removeChild(this.__container__);
}


function setPrint() {
	this.contentWindow.__container__ = this;
	this.contentWindow.onbeforeunload = closePrint;
	this.contentWindow.onafterprint = closePrint;
	this.contentWindow.focus(); // Required for IE
	this.contentWindow.print();
}


function printPage(sURL) {

	var oHiddFrame = document.createElement("iframe");
	oHiddFrame.onload = setPrint;
	oHiddFrame.style.visibility = "hidden";
	oHiddFrame.style.position = "fixed";
	oHiddFrame.style.right = "0";
	oHiddFrame.style.bottom = "0";
	oHiddFrame.src = sURL;
	document.body.appendChild(oHiddFrame);
}



$(document.body).bind("mousemove keypress", function (e) {
	tm = new Date().getTime();
});


function refresh() {
	if (new Date().getTime() - tm >= 90000) //3 lepta anenergos
	{
		toastr.warning("θα γίνει ανανέωση της σελίδας", "Υπάρχουν αλλαγές στο σύστημα");
		window.location.reload(true);
	}
	else
		setTimeout(refresh, 60000); //3anakita se 1 lepto
}

function hard_refresh() {
	window.location.reload(true);
}

function init_user_renew() {
	setInterval(function () {

		$.post("backend/function_router.php",
			{
				function: "login_renew"
			},
			function (response, status) {
				console.log(response);
				console.warn('renew');
				if (response == '2') {
					console.warn('refresh');
					setTimeout(refresh, 60);
				}
				if (response == '3') {
					console.warn('hard_refresh');
					toastr.error("θα γίνει ανανέωση της σελίδας σε 20 Δευτερόλεπτα", "Υπάρχουν αλλαγές στο σύστημα");
					setTimeout(hard_refresh, 20000);
				}

			});


	}, 300000); //5lepta
}