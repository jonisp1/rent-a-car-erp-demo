<div class="modal fade" id="add_vehicle_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Προσθήκη οχήματος
				</h5>

			</div>
			<div class="modal-body">


				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="vehicle_add_form">
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
										<select id="v_category" name="v_category" class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
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
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='v_plate' name='v_plate' required value="">
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
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='v_brand' name='v_brand' required value="">
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
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='v_model' name='v_model' required value="">
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
										<input type='text' id='v_v_date_dp' class="form-control m-input m-input--pill m-input--air" readonly name='v_v_date_dp' required value="" />
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
										<input type="number" class="form-control m-input m-input--pill m-input--air" id='v_cc' name='v_cc' required value="">
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
										<input type="number" class="form-control m-input m-input--pill m-input--air" id='v_horse_p' name='v_horse_p' required>
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
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='v_color' name='v_color' required value="">
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
										<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='v_fuel_c' name='v_fuel_c' required value="">
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
										<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='v_people_c' name='v_people_c' required value="">
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
										<select id='v_fuel_t' name='v_fuel_t' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
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
										<select id='v_trans_t' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
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


						<br>

						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										χλμ.Αγοράς
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="number" min="0" class="form-control m-input m-input--pill m-input--air" id='v_miles_b' name='v_miles_b' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-road"></i>
											</span>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Επόμενο Service(χλμ)
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="number" class="form-control m-input m-input--pill m-input--air" id='v_next_serv' name='v_next_serv' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-road"></i>
											</span>
										</span>
									</div>
								</div>
							</div>



							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Επόμενο Κτεο
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type='text' id='v_next_kteo_dp' class="form-control m-input m-input--pill m-input--air" readonly required name='v_next_kteo_dp' value="" />
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
										Λήξη ασφάλειας
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type='text' id='v_exp_safty_dp' class="form-control m-input m-input--pill m-input--air" readonly required name='v_exp_safty_dp' value="" />
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

						</div>


						<br>


						<div class="form-group m-form__group row" style="background-color: #c5c5c517; border: 1px solid #b9b9b930; border-radius: 25px; padding-top: 10px; padding-bottom: 20px;">

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Τρέχον Αποθήκη
									</label>
									<div class="m-input-icon  ">
										<select id='v_current_wher' name='v_current_wher' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
											<option value=''>
												-
											</option>

										</select>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-file-powerpoint-o"></i>
											</span>
										</span>
									</div>
								</div>
							</div>


							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Τρέχον Κατάστημα
									</label>
									<div class="m-input-icon  ">

										<select id='v_current_shop' name='v_current_shop' class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker " required>
											<option value=''>
												-
											</option>

										</select>
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-home"></i>
											</span>
										</span>
									</div>
								</div>
							</div>


							<div class="col-lg-3">
								<div class="form-group m-form__group a">

								</div>
							</div>

							<div class="col-lg-3">
								<div class="form-group m-form__group a">
									<label>
										Αριθμός πλαισίου
									</label>
									<div class="m-input-icon m-input-icon--left m-input-icon--right">
										<input type="text" class="form-control m-input m-input--pill m-input--air" id='v_chassis_number' name='v_chassis_number' required value="">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-delicious"></i>
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
				<button type="submit" form="vehicle_add_form" class="btn btn-primary">
					Προσθήκη
				</button>
			</div>
		</div>
	</div>
</div>