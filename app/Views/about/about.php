<?php echo $this->extend('layout/Default'); ?>  <!-- tambah area -->

<?php echo $this->section('content') ?>  <!-- tambah area -->


<div class="page-content-tab">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="float-right">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="javascript:void(0);">Metrica</a>
							</li>
							<li class="breadcrumb-item">
								<a href="javascript:void(0);">Pages</a>
							</li>
							<li class="breadcrumb-item active">Blogs</li>
						</ol>
					</div>
					<h4 class="page-title">WELCOME DI WEB E-DOCUMENT PT. SWADHARMA DUTA DATA</h4>
				</div>
				<!--end page-title-box--></div>
			<!--end col--></div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="blog-card">
							<img src="<?php echo base_url(); ?>/template/assets/images/small/img-91.jpg" alt="" class="img-fluid">
							<h4 class="my-3"><a href="#" class="">SDD</a></h4>
							<p class="text-muted">
							RANCANG BANGUN SISTEM ARSIP DIGITAL PENCARIAN MASUK DAN SURAT KELUAR MENGGUNAKAN ALGORITMA AHO-CORASICK BERBASIS WEB
							</p>
							<hr class="hr-dashed">
							<div class="d-flex justify-content-between">
								<div class="meta-box">
									<div class="media">
										<img src="<?php echo base_url(); ?>/template/assets/images/users/user-1.png" alt="" class="thumb-sm rounded-circle mr-2">
										<div class="media-body align-self-center text-truncate">
											<h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
											<ul class="p-0 list-inline mb-0">
												<li class="list-inline-item">26 mars 2020</li>
												<li class="list-inline-item">
													by <a href="#">admin</a>
												</li>
											</ul>
										</div>
										<!--end media-body--></div>
								</div>
								<!--end meta-box-->
								<div class="align-self-center">
									<a href="#" class="text-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							</div>
						</div>
						<!--end blog-card--></div>
					<!--end card-body--></div>
				<!--end card--></div>
			<!--end col-->

	<!-- container -->
	<!--  Modal content for the above example -->
	<div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
					<button type="button" class="btn btn-sm btn-soft-primary btn-circle btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
				</div>
				<div class="modal-body">
					<!-- Nav tabs -->
					<ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
						<li class="nav-item waves-effect waves-light">
							<a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>
						</li>
						<li class="nav-item waves-effect waves-light">
							<a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>
						</li>
						<li class="nav-item waves-effect waves-light">
							<a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="ActivityTab" role="tabpanel">
							<div class="bg-light mx-n3">
								<img src="<?php echo base_url(); ?>/template/assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">
							</div>
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 654px;">
								<div class="slimscroll scroll-rightbar" style="overflow: hidden; width: auto; height: 654px;">
									<div class="activity">
										<div class="activity-info">
											<div class="icon-info-activity">
												<i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
											</div>
											<div class="activity-info-text mb-2">
												<div class="mb-1">
													<small class="text-muted d-block mb-1">10 Min ago</small><a href="#" class="m-0 w-75">Task finished</a>
												</div>
												<p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
											</div>
										</div>
										<div class="activity-info">
											<div class="icon-info-activity">
												<i class="mdi mdi-timer-off bg-soft-pink"></i>
											</div>
											<div class="activity-info-text mb-2">
												<div class="mb-1">
													<small class="text-muted d-block mb-1">50 Min ago</small><a href="#" class="m-0 w-75">Task Overdue</a>
												</div>
												<p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
												<span class="badge badge-soft-secondary">Design</span><span class="badge badge-soft-secondary">HTML</span>
											</div>
										</div>
										<div class="activity-info">
											<div class="icon-info-activity">
												<i class="mdi mdi-alert-decagram bg-soft-purple"></i>
											</div>
											<div class="activity-info-text mb-2">
												<div class="mb-1">
													<small class="text-muted d-block mb-1">10 hours ago</small><a href="#" class="m-0 w-75">New Task</a>
												</div>
												<p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
											</div>
										</div>
										<div class="activity-info">
											<div class="icon-info-activity">
												<i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
											</div>
											<div class="activity-info-text mb-2">
												<div class="mb-1">
													<small class="text-muted d-block mb-1">yesterday</small><a href="#" class="m-0 w-75">New Comment</a>
												</div>
												<p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
											</div>
										</div>
										<div class="activity-info">
											<div class="icon-info-activity">
												<i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
											</div>
											<div class="activity-info-text mb-2">
												<div class="mb-1">
													<small class="text-muted d-block mb-1">01 feb 2020</small><a href="#" class="m-0 w-75">New Lead Meting</a>
												</div>
												<p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
											</div>
										</div>
										<div class="activity-info">
											<div class="icon-info-activity">
												<i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
											</div>
											<div class="activity-info-text mb-2">
												<div class="mb-1">
													<small class="text-muted d-block mb-1">26 jan 2020</small><a href="#" class="m-0 w-75">Task finished</a>
												</div>
												<p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
											</div>
										</div>
									</div>
									<!--end activity--></div>
								<div class="slimScrollBar" style="background: rgba(162, 177, 208, 0.13) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 1; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
								<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
							</div>
							<!--end activity-scroll--></div>
						<!--end tab-pane-->
						<div class="tab-pane" id="TasksTab" role="tabpanel">
							<div class="m-0" style="position: relative;">
								<div id="rightbar_chart" class="apex-charts" style="min-height: 250px;">
									<div id="apexcharts7fabb3" class="apexcharts-canvas apexcharts7fabb3" style="width: 0px; height: 250px;">
										<svg id="SvgjsSvg1009" width="0" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1011" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs1010"></defs></g></svg>
										<div class="apexcharts-legend"></div>
									</div>
								</div>
								<div class="resize-triggers">
									<div class="expand-trigger">
										<div style="width: 1px; height: 1px;"></div>
									</div>
									<div class="contract-trigger"></div>
								</div>
							</div>
							<div class="text-center mt-n2 mb-2">
								<button type="button" class="btn btn-soft-primary">Create Project</button><button type="button" class="btn btn-soft-primary">Create Task</button>
							</div>
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 654px;">
								<div class="slimscroll scroll-rightbar" style="overflow: hidden; width: auto; height: 654px;">
									<div class="p-2">
										<div class="media mb-3">
											<img src="<?php echo base_url(); ?>/template/assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
											<div class="media-body align-self-center text-truncate ml-3">
												<p class="text-success font-weight-semibold mb-0 font-14">Project</p>
												<h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>
											</div>
											<!--end media-body--></div>
										<span><b>Deadline:</b> 02 June 2020</span><a href="javascript: void(0);" class="d-block mt-3">
										<p class="text-muted mb-0">
											Complete Tasks<span class="float-right">75%</span>
										</p>
										<div class="progress mt-2" style="height: 4px;">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										</a>
									</div>
									<hr class="hr-dashed"></div>
								<div class="slimScrollBar" style="background: rgba(162, 177, 208, 0.13) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 1; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
								<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
							</div>
						</div>
						<!--end tab-pane-->
						<div class="tab-pane" id="SettingsTab" role="tabpanel">
							<div class="p-1 bg-light mx-n3">
								<h6 class="px-3">Account Settings</h6>
							</div>
							<div class="p-2 text-left mt-3">
								<div class="custom-control custom-switch switch-primary mb-3">
									<input type="checkbox" class="custom-control-input" id="settings-switch1" checked=""><label class="custom-control-label" for="settings-switch1">Auto updates</label>
								</div>
								<div class="custom-control custom-switch switch-primary mb-3">
									<input type="checkbox" class="custom-control-input" id="settings-switch2"><label class="custom-control-label" for="settings-switch2">Location Permission</label>
								</div>
								<div class="custom-control custom-switch switch-primary mb-3">
									<input type="checkbox" class="custom-control-input" id="settings-switch3" checked=""><label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
								</div>
							</div>
							<div class="p-1 bg-light mx-n3">
								<h6 class="px-3">General Settings</h6>
							</div>
							<div class="p-2 text-left mt-3">
								<div class="custom-control custom-switch switch-primary mb-3">
									<input type="checkbox" class="custom-control-input" id="settings-switch4" checked=""><label class="custom-control-label" for="settings-switch4">Show me Online</label>
								</div>
								<div class="custom-control custom-switch switch-primary mb-3">
									<input type="checkbox" class="custom-control-input" id="settings-switch5"><label class="custom-control-label" for="settings-switch5">Status visible to all</label>
								</div>
								<div class="custom-control custom-switch switch-primary mb-3">
									<input type="checkbox" class="custom-control-input" id="settings-switch6" checked=""><label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
								</div>
							</div>
						</div>
						<!--end tab-pane--></div>
					<!--end tab-content--></div>
				<!--end modal-body--></div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!--end footer--></div>


    <?php echo $this->endSection() ?>  <!-- tambah area -->



