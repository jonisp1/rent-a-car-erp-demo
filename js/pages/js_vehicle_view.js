var tranfer_id_global;
var upload_v_id;
var withdraw_v_id;

$('#vc_v_date_dp').datepicker({

	format: 'dd/mm/yyyy',
	todayHighlight: true,
	orientation: "bottom left",
	endDate: '-0m',
	templates: {
		leftArrow: '<i class="la la-angle-left"></i>',
		rightArrow: '<i class="la la-angle-right"></i>'
	},

});


var vehicle_table_init = function () {
	var data;
	page_load_show();

	$.post("backend/function_router.php",
		{
			function: "take_all_vehicles",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {
				var datatable = $('#vehicle_table').mDatatable({
					data: {
						type: 'local',
						source: data,
						pageSize: 100,
						saveState: {
							cookie: true,
							webstorage: true
						}
					},

					layout: {
						theme: 'default',
						class: '',
						scroll: false,
						footer: false
					},
					sortable: true,
					filterable: false,
					pagination: true,
					columns: [
						{
							field: "category",
							title: "Κατηγορία",
							width: 100,

						},
						{
							field: "vehicle_status",
							title: "Κατάσταση",
							width: 40,
							template: function (row) {
								if (row.active == 0) {
									ret = '<i class="la la-file-powerpoint-o"></i>';
								}
								else
									ret = '';

								return ret;
							}

						},
						{
							field: "plate",
							title: "Πινακίδα",
							width: 150

						},
						{
							field: "brand",
							title: "Μάρκα",
							width: 130

						},
						{
							field: "model",
							title: "Μοντέλο",
							width: 100

						},
						{
							field: "fuel_type",
							title: "Τ.Καυσίμου",
							width: 200

						},
						{
							field: "transmission_type",
							title: "Τ.Κιβωτίου",
							width: 150

						},
						{
							field: "shop_name",
							title: "Τρεχ.κατάστημα",
							width: 150

						},
						{
							field: "custom_price",
							title: " ",
							width: 40,
							template: function (row) {
								if (row.custom_price == 1) {
									ret = '<i class="la la-money"></i>';
								}
								else
									ret = '';

								return ret;
							}

						},
						{
							field: "Actions",
							width: 110,
							title: "Actions",
							sortable: false,
							overflow: 'visible',
							template: function (row) {
								var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';
								var ret = '\
										<div class="dropdown '+ dropup + '">\
											<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
												<i class="la la-ellipsis-h"></i>\
											</a>\
											  <div class="dropdown-menu dropdown-menu-right">\
												<a class="dropdown-item" onClick="show_details_vehicle('+ row.vehicle_id + ');"><i class="la la-book"></i> Προεπισκόπηση</a>\
												<a class="dropdown-item" onClick="edit_details_vehicle('+ row.vehicle_id + ');"><i class="la la-edit"></i> Επεξεργασία</a>\
												<a class="dropdown-item" onClick="edit_mileage_vehicle('+ row.vehicle_id + ');"><i class="la la-edit"></i> Αλλαγή χιλιομέτρων</a>\
												<a class="dropdown-item" onClick="change_vehicle_shop('+ row.vehicle_id + ');"><i class="la la-send"></i> Mεταφορά οχήματος</a>';

								if (row.active == 1)
									ret += '<a class="dropdown-item" onClick="$(\'#activate_withdraw_modal\').modal(\'show\'); withdraw_v_id=' + row.vehicle_id + ';"><i class="la la-exclamation"></i> Προσωρινή απόσυρση</a>';
								else
									ret += '<a class="dropdown-item" onClick="$(\'#deactivate_withdraw_modal\').modal(\'show\'); withdraw_v_id=' + row.vehicle_id + ';"><i class="la la-exclamation"></i> Άρση απόσυρσης</a>';

								if ((row.registration == '') || (row.registration == null))
									ret += '<a class="dropdown-item" onClick="upload_vehicle(' + row.vehicle_id + ');"><i class="la la-send"></i> Yποβολή αδειας</a>';
								else
									ret += '<a class="dropdown-item" onClick="print_upload_vehicle(' + row.vehicle_id + ');"><i class="la la-send"></i> Εκτύπωση αδειας</a>';

								ret += '<a class="dropdown-item" onClick="delete_vehicle(' + row.vehicle_id + ');"><i class="la la-times-circle"></i> Διαγραφή οχήματος</a>';
								ret += '</div>\
										</div>\
									';

								return ret;
							}
						}



					]
				});



				var query = datatable.getDataSourceQuery();

				$('#m_form_search').on('keyup', function (e) {
					datatable.search($(this).val().toLowerCase());
				}).val(query.generalSearch);

				$('#m_form_status').on('change', function () {
					datatable.search($(this).val(), 'Status');
				}).val(typeof query.Status !== 'undefined' ? query.Status : '');

				$('#m_form_type').on('change', function () {
					datatable.search($(this).val(), 'Type');
				}).val(typeof query.Type !== 'undefined' ? query.Type : '');

				$('#m_form_status, #m_form_type').selectpicker();
			}



		});


}



function show_vehicle_preview() {

	document.getElementById("vehicle_preview").style.display = null;

}



function hide_vehicle_preview() {

	document.getElementById("vehicle_preview").style.display = 'none';

}


function activate_withdraw() {
	var v_id = withdraw_v_id;
	$.post("backend/function_router.php",
		{ 
			function: "activate_withdraw",
			group: "vehicle",
			field_1: v_id,

		},
		function (response, status) { 
			$('#activate_withdraw_modal').modal('hide');
			if (response == '1') {
				toastr.success("Επιτυχής απόσυρση οχήματος", "Success");
				load_page('page_vehicle_view.php', 'Διαχείριση οχημάτων');
			}
			else if (response == '1-') {
				toastr.warning("οι κρατήσεις αυτες βρίσκονται πλέον στίς Άνοιχτές κρατήσεις", "Υπήρχαν κρατήσεις που περιλάμβαναν αυτο το όχημα");
				load_page('page_vehicle_view.php', 'Διαχείριση οχημάτων');
			}
			else {
				toastr.warning("Ανανεώστε την σελίδα", "Error");
			}

		}
	);
}


function deactivate_withdraw() {
	var id = withdraw_v_id;
	$.post("backend/function_router.php",
		{ 
			function: "deactivate_withdraw",
			group: "vehicle",
			id: id,

		},
		function (response, status) { 
			$('#deactivate_withdraw_modal').modal('hide');
			if (response != '0') {
				toastr.success("Επιτυχής επαναφορά οχήματος", "Success");
				load_page('page_vehicle_view.php', 'Διαχείριση οχημάτων');
			}
			else {
				toastr.warning("Ανανεώστε την σελίδα", "Error");
			}

		}
	);
}


function show_details_vehicle(id) {
	var data;
	$.post("backend/function_router.php",
		{ 
			function: "take_vehicle_id",
			group: "vehicle",
			id: id
		},
		function (response, status) { 

			if (data = JSON.parse(response)) {
				
				document.getElementById("vv_v_date_dp").innerHTML = date_for_input(data[0]['age']);
				if (data[0]['kteo_exp']) document.getElementById("vv_next_kteo_dp").innerHTML = date_for_input(data[0]['kteo_exp']);
				if (data[0]['safty_exp']) document.getElementById("vv_exp_safty_dp").innerHTML = date_for_input(data[0]['safty_exp']);

				document.getElementById("vv_next_serv").innerHTML = data[0]['service_exp'];

				document.getElementById("vv_category").innerHTML = data[0]['category'];
				document.getElementById("vv_fuel_t").innerHTML = data[0]['fuel_type'];
				document.getElementById("vv_trans_t").innerHTML = data[0]['transmission_type'];
				document.getElementById("vv_current_wher").innerHTML = data[0]['wherehouse_name'];
				document.getElementById("vv_current_shop").innerHTML = data[0]['shop_name'];

				document.getElementById("vv_miles_b").innerHTML = data[0]['mileage'];
				document.getElementById("vv_people_c").innerHTML = data[0]['people_max'];
				document.getElementById("vv_fuel_c").innerHTML = data[0]['fuel_max'];
				document.getElementById("vv_color").innerHTML = data[0]['color'];
				document.getElementById("vv_horse_p").innerHTML = data[0]['hoursepower'];
				document.getElementById("vv_cc").innerHTML = data[0]['cc'];
				document.getElementById("vv_model").innerHTML = data[0]['model'];
				document.getElementById("vv_brand").innerHTML = data[0]['brand'];
				document.getElementById("vv_plate").innerHTML = data[0]['plate'];
				document.getElementById("vv_chassis_number").innerHTML = data[0]['chassis_number'];

				if (data[0]['active'] == 1)
					document.getElementById("vv_withdraw_status").innerHTML = '<b> Ενεργό </b>';
				else
					document.getElementById("vv_withdraw_status").innerHTML = '<b> Προσωρινή απόσυρση </b>';
				show_vehicle_preview();
				$('html, body').animate({ scrollTop: 0 }, 'fast');

			}
			else

				toastr.warning("Ανανεώστε την σελίδα", "Error");
		});


}




function edit_details_vehicle(id) {
	
	var data;
	$.post("backend/function_router.php",
		{
			function: "take_vehicle_id",
			group: "vehicle",
			id: id,

		},
		function (response, status) {
			console.log(response);

			if (data = JSON.parse(response)) {
				JSON.parse(response);
				document.getElementById("vehicle_edit_form").reset();

				change_datepicker_date(data[0]['age'], 'vc_v_date_dp');

				document.getElementById("vc_people_c").value = data[0]['people_max'];
				document.getElementById("vc_fuel_c").value = data[0]['fuel_max'];
				document.getElementById("vc_color").value = data[0]['color'];
				document.getElementById("vc_horse_p").value = data[0]['hoursepower'];
				document.getElementById("vc_cc").value = data[0]['cc'];
				document.getElementById("vc_model").value = data[0]['model'];
				document.getElementById("vc_brand").value = data[0]['brand'];
				document.getElementById("vc_plate").value = data[0]['plate'];

				$("#vc_trans_t").val(data[0]['transmission_type_id']);
				$('#vc_trans_t').selectpicker('refresh');

				$("#vc_category").val(data[0]['category_id']);
				$('#vc_category').selectpicker('refresh');

				$("#vc_fuel_t").val(data[0]['fuel_type_id']);
				$('#vc_fuel_t').selectpicker('refresh');

				$("#edit_vehicle_modal").modal('show');
			}
			else
				//show_alert(0,'Ανεπιτυχής καταχώρηση');
				toastr.warning("Ανανεώστε την σελίδα", "Error");

		});



}



var vehicle_edit_form_validation = function () {
	validator = $("#vehicle_edit_form").validate({
		submitHandler: function (form) {

			var v_v_date_dp = $("#vc_v_date_dp").data('datepicker').getFormattedDate('yyyy-mm-dd 00:00:00');

			var e = document.getElementById("vc_category");
			var v_category = e.options[e.selectedIndex].value;

			var e = document.getElementById("vc_fuel_t");
			var v_fuel_t = e.options[e.selectedIndex].value;

			var e = document.getElementById("vc_trans_t");
			var v_trans_t = e.options[e.selectedIndex].value;

			var v_people_c = document.getElementById("vc_people_c").value;
			var v_fuel_c = document.getElementById("vc_fuel_c").value;
			var v_color = document.getElementById("vc_color").value;
			var v_horse_p = document.getElementById("vc_horse_p").value;
			var v_cc = document.getElementById("vc_cc").value;
			var v_model = document.getElementById("vc_model").value;
			var v_brand = document.getElementById("vc_brand").value;
			var v_plate = document.getElementById("vc_plate").value;


			modal_load_show('edit_vehicle_modal');
			$.post("backend/function_router.php",
				{
					function: "edit_vehicle",
					group: "vehicle",
					v_v_date_dp: v_v_date_dp,
					v_category: v_category,
					v_fuel_t: v_fuel_t,
					v_trans_t: v_trans_t,
					v_people_c: v_people_c,
					v_fuel_c: v_fuel_c,
					v_color: v_color,
					v_horse_p: v_horse_p,
					v_cc: v_cc,
					v_model: v_model,
					v_brand: v_brand,
					v_plate: v_plate,
					vehicle_id: vehicle_id,
				},
				function (response, status) { // Required Callback Function
					console.log(response);
					modal_load_hide('edit_vehicle_modal');
					if (response == '1') {
						toastr.success("Επιτυχής επεξεργασία", "Success");
						load_page('page_vehicle_view.php', 'Διαχείριση οχημάτων');
						document.getElementById("vehicle_edit_form").reset();
					}
					else
						toastr.warning("Ανεπιτυχής επεξεργασία", "Error");

					$('#edit_vehicle_modal').modal('hide');
				});

		}
	});
}

if (document.getElementById('vc_category') !== null) {
	var data;
	$.post("backend/function_router.php",
		{
			function: "take_categories",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {

				for (var i = 0; i < data.length; i++) {

					addOptions(document.getElementById("vc_category"), data[i]['type'], data[i]['category_id']);
				}
			}
			$('#vc_category').selectpicker('refresh');


		});
}


if (document.getElementById('vc_trans_t') !== null) {

	$.post("backend/function_router.php",
		{
			function: "take_trans",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {


				for (var i = 0; i < data.length; i++) {
					addOptions(document.getElementById("vc_trans_t"), data[i]['type'], data[i]['transmission_type_id']);
				}
			}
			$('#vc_trans_t').selectpicker('refresh');


		});
}


if (document.getElementById('vc_fuel_t') !== null) {
	var data;
	$.post("backend/function_router.php",
		{
			function: "take_fuel",
			group: "vehicle"
		},
		function (response, status) {
			if (data = JSON.parse(response)) {

				for (var i = 0; i < data.length; i++) {
					addOptions(document.getElementById("vc_fuel_t"), data[i]['type'], data[i]['fuel_type_id']);
				}
			}
			$('#vc_fuel_t').selectpicker('refresh');



		});
}


function change_vehicle_shop(id) {
	var data;
	removeOptions(document.getElementById("car_ggfd"));
	addOptions(document.getElementById("car_ggfd"), "-", "");

	tranfer_id_global = id;

	$.post("backend/function_router.php",
		{
			function: "vehicle_transfare",
			group: "vehicle",
			id: id,
		},
		function (response, status) {
			console.log(response);
			if (data = JSON.parse(response)) {

				for (var i = 0; i < data.length; i++) {
					addOptions(document.getElementById("car_ggfd"), data[i]['shop_name'], data[i]['shop_id']);
				}
			}

			$('#car_ggfd').selectpicker('refresh');
			$('#vehicle_transfare_modal').modal('show');


		});


}


function delete_vehicle(id) {

	tranfer_id_global = id;

	$('#vehicle_delete_modal').modal('show');

}



function delete_vehicle_c() {
	$.post("backend/function_router.php",
		{
			function: "delete_vehicle",
			group: "vehicle",
			id: tranfer_id_global,

		},
		function (response, status) {

			$('#vehicle_delete_modal').modal('hide');

			if (response == '1') {
				toastr.success("Επιτυχής Διαγραφη οχήματος", "Success");
				load_page('page_vehicle_view.php', 'Διαχείριση οχημάτων');

			}
			else
				toastr.warning("Καμία αλλαγή", "Error");


		});
}



function edit_mileage_vehicle(id) {
	var data;
	$.post("backend/function_router.php",
		{
			function: "take_vehicle_id",
			group: "vehicle",
			id: id,

		},
		function (response, status) {
			console.log(response);

			if (data = JSON.parse(response)) {
				document.getElementById("vehicle_mileage_form").reset();


				document.getElementById("vef_mileage").value = data[0]['mileage'];


				$("#vehicle_mileage_modal").modal('show');
			}
			else
				toastr.warning("Ανανεώστε την σελίδα", "Error");

		});



}


var vehicle_mileage_form_validation = function () {
	validator = $("#vehicle_mileage_form").validate({
		submitHandler: function (form) {


			var vef_mileage = document.getElementById("vef_mileage").value;
			modal_load_show('vehicle_mileage_modal');
			$.post("backend/function_router.php",
				{
					function: "change_vehicle_km",
					group: "vehicle",
					id: tranfer_id_global,
					vef_mileage: vef_mileage,

				},
				function (response, status) {
					modal_load_hide('vehicle_mileage_modal');
					document.getElementById("vehicle_mileage_form").reset();

					$('#vehicle_mileage_modal').modal('hide');

					if (response == '1') {
						toastr.success("Επιτυχής επεξεργασία χιλιομέτρων", "Success");
						load_page('page_vehicle_view.php', 'Διαχείριση οχημάτων');

					}
					else
						toastr.warning("Καμία αλλαγή", "Error");

				});

		}
	});
}