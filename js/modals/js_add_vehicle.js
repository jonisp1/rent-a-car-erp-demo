$(document).on("click", "#add_vehicle_menu", function () {
	document.getElementById("vehicle_add_form").reset();

	vehicle_add_form_validation();
	upload_form_validation();
	vehicle_mileage_form_validation();
	vehicle_change_form_validation();

	vehicle_add_init_selects();

	$("#add_vehicle_modal").modal('show');
});


$('#v_v_date_dp').datepicker({

	format: 'dd/mm/yyyy',
	todayHighlight: true,
	orientation: "bottom left",
	endDate: '-0m',
	templates: {
		leftArrow: '<i class="la la-angle-left"></i>',
		rightArrow: '<i class="la la-angle-right"></i>'
	},

});

$('#v_next_kteo_dp').datepicker({
	format: 'dd/mm/yyyy',
	todayHighlight: true,
	orientation: "bottom left",
	startDate: '-0m',
	templates: {
		leftArrow: '<i class="la la-angle-left"></i>',
		rightArrow: '<i class="la la-angle-right"></i>'
	}
});


$('#v_exp_safty_dp').datepicker({
	format: 'dd/mm/yyyy',
	todayHighlight: true,
	orientation: "bottom left",
	startDate: '-0m',
	templates: {
		leftArrow: '<i class="la la-angle-left"></i>',
		rightArrow: '<i class="la la-angle-right"></i>'
	}
});



var vehicle_add_form_validation = function () {
	validator = $("#vehicle_add_form").validate({
		submitHandler: function (form) {


			var v_v_date_dp = $("#v_v_date_dp").data('datepicker').getFormattedDate('yyyy-mm-dd 00:00:00');
			var v_next_kteo_dp = $("#v_next_kteo_dp").data('datepicker').getFormattedDate('yyyy-mm-dd 00:00:00');
			var v_exp_safty_dp = $("#v_exp_safty_dp").data('datepicker').getFormattedDate('yyyy-mm-dd 00:00:00');

			var e = document.getElementById("v_category");
			var v_category = e.options[e.selectedIndex].value;

			var e = document.getElementById("v_fuel_t");
			var v_fuel_t = e.options[e.selectedIndex].value;

			var e = document.getElementById("v_trans_t");
			var v_trans_t = e.options[e.selectedIndex].value;

			var e = document.getElementById("v_current_wher");
			var v_current_wher = e.options[e.selectedIndex].value;

			var e = document.getElementById("v_current_shop");
			var v_current_shop = e.options[e.selectedIndex].value;


			var v_next_serv = document.getElementById("v_next_serv").value;
			var v_miles_b = document.getElementById("v_miles_b").value;
			var v_people_c = document.getElementById("v_people_c").value;
			var v_fuel_c = document.getElementById("v_fuel_c").value;
			var v_color = document.getElementById("v_color").value;
			var v_horse_p = document.getElementById("v_horse_p").value;
			var v_cc = document.getElementById("v_cc").value;
			var v_model = document.getElementById("v_model").value;
			var v_brand = document.getElementById("v_brand").value;
			var v_plate = document.getElementById("v_plate").value;
			var v_chassis_number = document.getElementById("v_chassis_number").value;


			modal_load_show('add_vehicle_modal');


			$.post("backend/function_router.php",
				{
					function: "add_vehicle",
					group: "vehicle",
					v_v_date_dp: v_v_date_dp,
					v_next_kteo_dp: v_next_kteo_dp,
					v_exp_safty_dp: v_exp_safty_dp,
					v_category: v_category,
					v_fuel_t: v_fuel_t,
					v_trans_t: v_trans_t,
					v_current_wher: v_current_wher,
					v_current_shop: v_current_shop,
					v_next_serv: v_next_serv,
					v_miles_b: v_miles_b,
					v_people_c: v_people_c,
					v_fuel_c: v_fuel_c,
					v_color: v_color,
					v_horse_p: v_horse_p,
					v_cc: v_cc,
					v_model: v_model,
					v_brand: v_brand,
					v_plate: v_plate,
					v_chassis_number: v_chassis_number,

				},
				function (response, status) {
					console.log(response);
					modal_load_hide('add_vehicle_modal');
					if (response == '1') {
						toastr.success("Επιτυχής καταχώρηση", "Success");
						if (last_page_load == 'page_vehicle_view.php')
							load_page('page_vehicle_view.php');
						document.getElementById("vehicle_add_form").reset();
					}
					else if (response == '3')
						show_alert(0, 'Το οχημα υπαρχει');



					document.getElementById("vehicle_add_form").reset();
					$("#v_category").val('-');
					$('#v_category').selectpicker('refresh');
					$("#v_fuel_t").val('-');
					$('#v_fuel_t').selectpicker('refresh');
					$("#v_trans_t").val('-');
					$('#v_trans_t').selectpicker('refresh');
					$("#v_current_wher").val('-');
					$('#v_current_wher').selectpicker('refresh');
					$("#v_current_shop").val('-');
					$('#v_current_shop').selectpicker('refresh');


					$('#add_vehicle_modal').modal('hide');
				});

		}
	});
}



function vehicle_add_init_selects() {
	var data;

	$.post("backend/function_router.php",
		{
			function: "take_categories",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {
			
				for (var i = 0; i < data.length; i++) {

					addOptions(document.getElementById("v_category"), data[i]['type'], data[i]['category_id']);
				}
			}
			$('#v_category').selectpicker('refresh');


		});


	$.post("backend/function_router.php",
		{
			function: "take_trans",
			group: "vehicle"
		},
		function (response, status) { 
			if (data = JSON.parse(response)) {

				for (var i = 0; i < data.length; i++) {
					addOptions(document.getElementById("v_trans_t"), data[i]['type'], data[i]['transmission_type_id']);
				}
			}
			$('#v_trans_t').selectpicker('refresh');


		});


	$.post("backend/function_router.php",
		{
			function: "take_fuel",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {

				for (var i = 0; i < data.length; i++) {
					addOptions(document.getElementById("v_fuel_t"), data[i]['type'], data[i]['fuel_type_id']);
				}
			}
			$('#v_fuel_t').selectpicker('refresh');



		});


	$.post("backend/function_router.php",
		{
			function: "take_wherehouse",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {

				for (var i = 0; i < data.length; i++) {
					addOptions(document.getElementById("v_current_wher"), data[i]['name'], data[i]['wherehouse_id']);
				}
			}
			$('#v_current_wher').selectpicker('refresh');


		});



	document.getElementById('v_current_wher').onchange = function () {
		var index = this.selectedIndex;
		var wherehouse = this.children[index].value;

		removeOptions(document.getElementById("v_current_shop"));
		addOptions(document.getElementById("v_current_shop"), "-", "");

		$.post("backend/function_router.php",
			{
				function: "take_shop",
				group: "vehicle",
				wherehouse: wherehouse,
			},
			function (response, status) {

				if (data = JSON.parse(response)) {

					for (var i = 0; i < data.length; i++) {
						addOptions(document.getElementById("v_current_shop"), data[i]['shop_name'], data[i]['shop_id']);
					}
				}
				$('#v_current_shop').selectpicker('refresh');
			});

	}

}





