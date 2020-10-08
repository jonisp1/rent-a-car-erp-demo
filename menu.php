			<header class="m-grid__item		m-header " data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize">
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->

							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="index.php" class="m-brand__logo-wrapper">
											<img alt="" src="img/logo_2.png" />
										</a>

									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">

										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- end::Responsive Header Menu Toggler-->
										<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>
										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>
							<!-- end::Brand -->
							<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">

											<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
												<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
													<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
													<span class="m-nav__link-icon">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-music-2" style="color: #cdcde2;"></i>
														</span>
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
															<span class="m-dropdown__header-title">
																<div id='new_notifications'> </div>
															</span>
															<span class="m-dropdown__header-subtitle">
																Ειδοποιήσεις
															</span>
														</div>
														<div class="m-dropdown__body" style="overflow-y: scroll; height: 550px;">
															<div class="m-dropdown__content">


																<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																	<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																		<div id="notification_div"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
													<span class="m-nav__link-icon">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-grid-menu" style="color: #cdcde2;"></i>
														</span>
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
															<div class="m-card-user m-card-user--skin-dark">
																<div class="m-card-user__pic">
																	<img src="img/logo_u.png" class="m--img-rounded m--marginless" alt="" />
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		<?php echo $_SESSION['user_username']  ?>
																	</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">
																		<?php echo $_SESSION['user_email']  ?>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow">

										<li class="m-menu__item" data-redirect="true" aria-haspopup="true">
											<a class="m-menu__link " onclick="load_page('preview_view.php' , 'Προεπισκόπηση');" id="menu_prev">
												<i class="m-menu__link-icon "></i>
												<span class="m-menu__link-title">
													<span class="m-menu__link-wrap">
														<span class="m-menu__link-text">
															Προεπισκόπηση
														</span>
													</span>
												</span>
											</a>
										</li>


										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true" id="menu_res">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Κρατήσεις
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id='add_reservation_menu' class="m-menu__link ">
															<i class="m-menu__link-icon la la-plus"></i>
															<span class="m-menu__link-text">
																Προσθήκη κράτησης
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link" onclick="load_page('open_reservation_view.php' , 'Ανοιχτές κρατήσεις');">
															<i class="m-menu__link-icon  la la-bookmark"></i>
															<span class="m-menu__link-text">
																Ανοιχτές κρατήσεις
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('reservation_view.php' , 'Τρέχουσες κρατήσεις');">
															<i class="m-menu__link-icon la la-book"></i>
															<span class="m-menu__link-text">
																Τρέχουσες κρατήσεις
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('reservation_complete_view.php' , 'Ολοκληρωμένες κρατήσεις');">
															<i class="m-menu__link-icon la flaticon-interface-7"></i>
															<span class="m-menu__link-text">
																Ολοκληρωμένες κρατήσεις
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id='availability_menu' class="m-menu__link ">
															<i class="m-menu__link-icon la la-calendar"></i>
															<span class="m-menu__link-text">
																Έλεγχος διαθεσιμοτητας
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>



										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click_%^$^" aria-haspopup="true">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Χρονομισθώσεις
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon la la-plus"></i>
															<span class="m-menu__link-text">
																Προσθήκη Χρονομίσθωσης
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon la la-reorder"></i>
															<span class="m-menu__link-text">
																Διαχείριση Χρονομισθώσεων
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>


										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true" id="menu_cust">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Πελάτες
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id="add_user_menu" class="m-menu__link ">
															<i class="m-menu__link-icon la la-plus"></i>
															<span class="m-menu__link-text">
																Προσθήκη πελάτη
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('customer_view.php' , 'Διαχείριση Πελατών');">
															<i class="m-menu__link-icon la la-reorder"></i>
															<span class="m-menu__link-text">
																Διαχείριση Πελατών
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>




										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true" id="menu_veh">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Στόλος
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id="add_vehicle_menu" class="m-menu__link ">
															<i class="m-menu__link-icon la la-plus"></i>
															<span class="m-menu__link-text">
																Προσθήκη οχήματος
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page_with_callback('vehicle_view.php',vehicle_table_init);">
															<i class="m-menu__link-icon la la-reorder"></i>
															<span class="m-menu__link-text">
																Διαχείριση οχήματων
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('maintenance_view.php' , 'Συντηρήσεις');">
															<i class="m-menu__link-icon la la-wrench"></i>
															<span class="m-menu__link-text">
																Συντηρήσεις
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('damage_view.php' , 'Συνεργείο');">>
															<i class="m-menu__link-icon la la-legal"></i>
															<span class="m-menu__link-text">
																Συνεργείο
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>



										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true" id="menu_ger">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Εξοπλισμός
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id='add_gear_menu' class="m-menu__link ">
															<i class="m-menu__link-icon la la-plus"></i>
															<span class="m-menu__link-text">
																Προσθήκη εξοπλισμού
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('gear_view.php' , 'Διαχείριση εξοπλισμού');">
															<i class="m-menu__link-icon la la-reorder"></i>
															<span class="m-menu__link-text">
																Διαχείριση εξοπλισμού
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>


										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true" id="menu_age">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Πρακτορεια
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id='add_agent_menu' class="m-menu__link ">
															<i class="m-menu__link-icon la la-plus"></i>
															<span class="m-menu__link-text">
																Προσθήκη πρακτορείου
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " onclick="load_page('agent_view.php' , 'Διαχείριση πρακτορείων');">
															<i class="m-menu__link-icon la la-reorder"></i>
															<span class="m-menu__link-text">
																Διαχείριση πρακτορείων
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>


										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true" id="menu_set">
											<a href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Ρυθμίσεις
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">

													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a id="general_settings_menu" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-settings"></i>
															<span class="m-menu__link-text">
																Γενικές Ρυθμίσεις
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " id='edit_price_menu'>
															<i class="m-menu__link-icon  flaticon-coins "></i>
															<span class="m-menu__link-text">
																Τίμες κατηγορίας
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " id='manual_reciept_menu'>
															<i class="m-menu__link-icon  flaticon-list-3 "></i>
															<span class="m-menu__link-text">
																Έκδοση απόδειξης
															</span>
														</a>
													</li>
													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " id='manual_invoice_menu'>
															<i class="m-menu__link-icon  flaticon-list-3 "></i>
															<span class="m-menu__link-text">
																Έκδοση τιμολογίου
															</span>
														</a>
													</li>

													<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
														<a class="m-menu__link " id='logistics_menu'>
															<i class="m-menu__link-icon  flaticon-list-3 "></i>
															<span class="m-menu__link-text">
																Λογιστικά
															</span>
														</a>
													</li>


												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- end::Horizontal Menu -->
							<!--begin::Search-->
							<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch" data-search-type="default">
								<!--begin::Search Form -->
								<!--end::Search Form -->
								<!--begin::Search Results -->
								<div class="m-dropdown__wrapper">
									<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__body">
											<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
												<div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Search Results -->
							</div>
							<!--end::Search-->
						</div>
					</div>
				</div>
			</header>