<?php echo $this->extend('layout/Default'); ?>  <!-- tambah area -->

<?php echo $this->section('content') ?>  <!-- tambah area -->
	<!-- Page Content-->
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
									<a href="javascript:void(0);">Apps</a>
								</li>
								<li class="breadcrumb-item active">Inbox</li>
							</ol>
						</div>
						<h4 class="page-title">Draft</h4>
					</div>
					<!--end page-title-box--></div>
				<!--end col--></div>
			<!-- end page title end breadcrumb -->
			<div class="row">
				<div class="col-12">

					<!-- Right Sidebar -->
					<div>
						<div class="float-right d-flex justify-content-between">
							<div class="btn-group ml-1">
								<button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-question-circle"></i></button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Updates</a><a class="dropdown-item" href="#">Social</a><a class="dropdown-item" href="#">Team Manage</a>
								</div>
							</div>
							<div class="btn-group ml-1">
								<button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog"></i></button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Display density</a><a class="dropdown-item" href="#">Themes</a><a class="dropdown-item" href="#">Help</a>
								</div>
							</div>
						</div>
						<!-- end div -->
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<button type="button" class="btn btn-outline-info waves-light waves-effect"><i class="fas fa-inbox"></i></button><button type="button" class="btn btn-outline-info waves-light waves-effect"><i class="fas fa-exclamation-circle"></i></button><button type="button" class="btn btn-outline-info waves-light waves-effect"><i class="fas fa-trash"></i></button>
							</div>
							<div class="btn-group ml-1">
								<button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-folder"></i><i class="mdi mdi-chevron-down ml-1"></i></button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Updates</a><a class="dropdown-item" href="#">Social</a><a class="dropdown-item" href="#">Team Manage</a>
								</div>
							</div>
							<div class="btn-group ml-1">
								<button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-tag"></i><i class="mdi mdi-chevron-down ml-1"></i></button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Updates</a><a class="dropdown-item" href="#">Social</a><a class="dropdown-item" href="#">Team Manage</a>
								</div>
							</div>
							<div class="btn-group ml-1">
								<button type="button" class="btn btn-outline-info waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">More<i class="mdi mdi-chevron-down ml-1"></i></button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Mark as Unread</a><a class="dropdown-item" href="#">Mark as Important</a><a class="dropdown-item" href="#">Add to Tasks</a><a class="dropdown-item" href="#">Add Star</a><a class="dropdown-item" href="#">Mute</a>
								</div>
							</div>
						</div>
						<!-- end toolbar -->
						<div class="card my-3">
							<ul class="message-list">
								<li>
									<div class="col-mail col-mail-1">
										<div class="checkbox-wrapper-mail">
											<input type="checkbox" id="chk19"><label for="chk19" class="toggle"></label>
										</div>
										<a href="#">
										<p class="title">Peter, me (3)</p>
										<span class="star-toggle far fa-star"></span></a>
									</div>
									<div class="col-mail col-mail-2">
										<a href="#" class="subject">Hello &nbsp;–&nbsp; <span class="teaser">Trip home from 🎉 Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span></a>
										<div class="date">Mar. 6</div>
									</div>
								</li>

							</ul>
						</div>
						<!-- panel -->
						<div class="row mb-3">
							<div class="col-7 align-self-center">Showing 1 - 20 of 1,524</div>
							<!-- end Col -->
							<div class="col-5">
								<div class="btn-group float-right">
									<button type="button" class="btn btn-sm btn-gradient-primary waves-effect mb-0"><i class="fa fa-chevron-left"></i></button><button type="button" class="btn btn-sm btn-gradient-primary waves-effect mb-0"><i class="fa fa-chevron-right"></i></button>
								</div>
							</div>
							<!-- end Col --></div>
						<!--end row--></div>
					<!-- end email-rightbar --></div>
				<!-- end Col --></div>
			<!-- End row --></div>
		<!-- container -->
		
		<!--start rightbar-->
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
									<img src="../assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">
								</div>
								<div class="slimscroll scroll-rightbar">
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
								<!--end activity-scroll--></div>
							<!--end tab-pane-->
							<div class="tab-pane" id="TasksTab" role="tabpanel">
								<div class="m-0">
									<div id="rightbar_chart" class="apex-charts"></div>
								</div>
								<div class="text-center mt-n2 mb-2">
									<button type="button" class="btn btn-soft-primary">Create Project</button><button type="button" class="btn btn-soft-primary">Create Task</button>
								</div>
								<div class="slimscroll scroll-rightbar">
									<div class="p-2">
										<div class="media mb-3">
											<img src="../assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
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
	<!-- end page content --></div>
	<?php echo $this->endSection() ?>  <!-- tambah area -->