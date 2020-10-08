<div class="row" id='vehicle_preview' style='display: none;'>
	<div class="col-xl-12">
		<div class="m-portlet m-portlet--full-height">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Στοιχεία οχήματος
						</h3>
					</div>
				</div>

 
				<div class="m-portlet__head-tools">
					<ul class="m-portlet__nav">
						<li class="m-portlet__nav-item">
							<a class="m-portlet__nav-link m-portlet__nav-link--icon" onClick='hide_vehicle_preview();'>
								<i class="la la-close"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body">
				<div class="m-widget12">
					<div class="m-widget12__item">
						<span class="m-widget12__text1">
							Κατηγορία
							<br>
							<span id="vv_category">

							</span>
						</span>
						<span class="m-widget12__text2">
							Πινακίδα
							<br>
							<span id='vv_plate'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Τρέχον Κατάστημα
							<br>
							<span id='vv_current_shop'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Τρέχον Αποθήκη
							<br>
							<span id='vv_current_wher'>

							</span>
						</span>
					</div>
					<div class="m-widget12__item">
						<span class="m-widget12__text1">
							Μάρκα
							<br>
							<span id='vv_brand'>

							</span>
						</span>
						<span class="m-widget12__text2">
							Μοντέλο
							<br>
							<span id='vv_model'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Χρονολογία
							<br>
							<span id='vv_v_date_dp'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Xρώμα
							<br>
							<span id='vv_color'>

							</span>
						</span>
					</div>
					<div class="m-widget12__item">
						<span class="m-widget12__text1">
							Κυβικά
							<br>
							<span id='vv_cc'>

							</span>
						</span>
						<span class="m-widget12__text2">
							Άλογα
							<br>
							<span id='vv_horse_p'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Τ.Καυσίμου
							<br>
							<span id='vv_fuel_t'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Τ.Κιβωτίου
							<br>
							<span id='vv_trans_t'>

							</span>
						</span>
					</div>
					<div class="m-widget12__item">
						<span class="m-widget12__text1">
							Χωρ.Καυσίμου
							<br>
							<span id='vv_fuel_c'>

							</span>
						</span>
						<span class="m-widget12__text2">
							Χωρ.Ατόμων
							<br>
							<span id='vv_people_c'>

							</span>
						</span>
						<span class="m-widget12__text2">
							Αριθμός πλαισίου
							<br>
							<span id='vv_chassis_number'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Κατάσταση
							<br>
							<span id='vv_withdraw_status'>

							</span>
						</span>
					</div>

					<div class="m-widget12__item">
						<span class="m-widget12__text1">
							χλμ.Αγοράς
							<br>
							<span id='vv_miles_b'>

							</span>
						</span>
						<span class="m-widget12__text2">
							Επόμενο Service
							<br>
							<span id='vv_next_serv'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Ημερ.λήξης ΚΤΕΟ
							<br>
							<span id='vv_next_kteo_dp'>

							</span>
						</span>
						<span class="m-widget12__text3">
							Ημερ. λήξης ασφάλειας
							<br>
							<span id='vv_exp_safty_dp'>

							</span>
						</span>


					</div>

				</div>
			</div>
		</div>
	</div>
</div>




<div class="m-portlet m-portlet--mobile" id="customer_view_div">

	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="m_form_search">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span>
										<i class="la la-search"></i>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a style="color:white;" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" onclick='$("#add_vehicle_modal").modal("show");'>
						<span>
							<i class="la la-cart-plus"></i>
							<span>
								Προσθήκη οχήματος
							</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>

		<div class="m_datatable" id="vehicle_table"></div>

	</div>
</div>