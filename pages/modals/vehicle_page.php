<div class="modal fade" id="vehicle_delete_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Διαγραφή οχήματος
				</h5>

			</div>




			<div class="modal-body">

				<h5>Eίστε σίγουροι για την Διαγραφή?</h5>

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Κλείσιμο
				</button>
				<button type="button" class="btn btn-primary" onClick='delete_vehicle_c();'>
					Διαγραφή
				</button>
			</div>
		</div>
	</div>
</div>




<div class="modal fade" id="edit_vehicle_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Προσθήκη οχήματος
				</h5>

			</div>
			<div class="modal-body">

				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="vehicle_edit_form">
					<div class="m-portlet__body">

						<div class="m-form__content">
							<div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
								<div class="m-alert__icon">
									<i class="la la-warning"></i>
								</div>
								<div class="m-alert__text">
									Παρακαλώ συμπληρώστε όλα τα απαιτούμενα πεδία
								</div>
								<div class="m-alert__close">
									<button type="button" class="close" data-close="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>

						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">


							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Κατηγορία
									</label>
									<div class="m-input-icon  ">
										<select id="vc_category" name="v_category" class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
											<option value="">
												-
											</option>
										</select>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-link"></i>
											</span>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Πινακίδα
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='vc_plate' name='v_plate' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-cc-jcb"></i>
											</span>
										</span>
									</div>
								</div>
							</div>



							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Μάρκα
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='vc_brand' name='v_brand' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-dedent "></i>
											</span>
										</span>
									</div>
								</div>
							</div>


							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Μοντέλο
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='vc_model' name='v_model' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-dedent "></i>
											</span>
										</span>
									</div>
								</div>
							</div>



						</div>




						<br>


						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Χρονολογία
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type='text' id='vc_v_date_dp' class="form-control m-input m-input--pill m-input--air" readonly name='vc_v_date_dp' required value="" />
										<span class="m-input-icon__icon m-input-icon__icon--right">
											<span>
												<i class="la la-angle-down"></i>
											</span>
										</span>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-calendar"></i>
											</span>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Κυβικά
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='vc_cc' name='v_cc' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-cc"></i>
											</span>
										</span>
									</div>
								</div>
							</div>



							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Άλογα
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="number" class="form-control m-input m-input--pill m-input--air" id='vc_horse_p' name='v_horse_p' required>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-bullseye"></i>
											</span>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Xρώμα
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='vc_color' name='v_color' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-delicious"></i>
											</span>
										</span>
									</div>
								</div>
							</div>

						</div>




						<br>





						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">


							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Χωρ.Καυσίμου
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='vc_fuel_c' name='v_fuel_c' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-tachometer"></i>
											</span>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Χωρ.Ατόμων
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='vc_people_c' name='v_people_c' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-users"></i>
											</span>
										</span>
									</div>
								</div>
							</div>


							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Τ.Καυσίμου
									</label>
									<div class="m-input-icon  ">
										<select id='vc_fuel_t' name='v_fuel_t' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
											<option value=''>
												-
											</option>
										</select>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-tint"></i>
											</span>
										</span>
									</div>
								</div>
							</div>


							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Τ.Κιβωτίου
									</label>
									<div class="m-input-icon  ">
										<select id='vc_trans_t' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
											<option value=''>
												-
											</option>
										</select>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-gear"></i>
											</span>
										</span>
									</div>
								</div>
							</div>



						</div>

					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Kλείσιμο
				</button>
				<button type="submit" form="vehicle_edit_form" class="btn btn-primary">
					Προσθήκη
				</button>
			</div>
		</div>
	</div>
</div>











<div class="modal fade" id="vehicle_transfare_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Μεταφορά οχήματος
				</h5>

			</div>




			<div class="modal-body">
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="vehicle_transfare_form">
					<div class="m-portlet__body">

						<div class="m-form__content">
							<div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
								<div class="m-alert__icon">
									<i class="la la-warning"></i>
								</div>
								<div class="m-alert__text">
									Παρακαλώ συμπληρώστε όλα τα απαιτούμενα πεδία
								</div>
								<div class="m-alert__close">
									<button type="button" class="close" data-close="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>

						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">






							<div class="col-xs-12 col-md-12">


								<div class="form-group m-form__group a">
									<label>
										Κατάστημα
									</label>
									<div class="m-input-icon  ">
										<select id='car_ggfd' name='car_ggfd' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
											<option value=''>
												-
											</option>
										</select>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-tint"></i>
											</span>
										</span>
									</div>
								</div>


							</div>




						</div>

					</div>

				</form>

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Kλείσιμο
				</button>
				<button type="submit" form="vehicle_transfare_form" class="btn btn-primary">
					Συνέχεια
				</button>
			</div>
		</div>
	</div>
</div>














<div class="modal fade" id="upload_vehicle_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Yποβολή άδειας οχήματος
				</h5>

			</div>




			<div class="modal-body">
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="upload_form">
					<div class="m-portlet__body">


						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">

							<div class="col-lg-3 col-md-3 col-sm-3">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">


								Επιλέξτε αρχείο:
								<input type="file" name="upload_field" id="upload_field">



							</div>
						</div>


					</div>

				</form>

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Kλείσιμο
				</button>
				<button type="submit" form="upload_form" class="btn btn-primary">
					Συνέχεια
				</button>
			</div>
		</div>
	</div>
</div>







<div class="modal fade" id="vehicle_mileage_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Aλλαγή χιλιομέτρων
				</h5>

			</div>




			<div class="modal-body">
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="vehicle_mileage_form">
					<div class="m-portlet__body">

						<div class="m-form__content">
							<div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
								<div class="m-alert__icon">
									<i class="la la-warning"></i>
								</div>
								<div class="m-alert__text">
									Παρακαλώ συμπληρώστε όλα τα απαιτούμενα πεδία
								</div>
								<div class="m-alert__close">
									<button type="button" class="close" data-close="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>

						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">










							<div class="form-group m-form__group a">
								<label>
									Χιλιόμετρα
								</label>
								<div class="m-input-icon m-input-icon--left m-input-icon--right">
									<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='vef_mileage' name='vef_mileage' required value="">
									<span class="m-input-icon__icon m-input-icon__icon--left">
										<span>
											<i class="la la-users"></i>
										</span>
									</span>
								</div>
							</div>






						</div>

					</div>

				</form>

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Kλείσιμο
				</button>
				<button type="submit" form="vehicle_mileage_form" class="btn btn-primary">
					Συνέχεια
				</button>
			</div>
		</div>
	</div>
</div>




<div class="modal fade" id="activate_withdraw_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Προσωρινή απόσυρση οχήματος
				</h5>

			</div>




			<div class="modal-body">

				<h5>Eίστε σίγουροι για την Προσωρινή απόσυρση?</h5>

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Κλείσιμο
				</button>
				<button type="button" class="btn btn-primary" onClick='activate_withdraw();'>
					Απόσυρση
				</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="deactivate_withdraw_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Επαναφορά απόσυρσης οχήματος
				</h5>

			</div>




			<div class="modal-body">

				<h5>Eίστε σίγουροι για την Επαναφορά απόσυρσης?</h5>

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Κλείσιμο
				</button>
				<button type="button" class="btn btn-primary" onClick='deactivate_withdraw();'>
					Επαναφορά
				</button>
			</div>
		</div>
	</div>
</div>