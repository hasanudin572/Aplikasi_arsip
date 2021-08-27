<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<title>APLIKASI PENCARIAN SURAT DIGITAL</title>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
<meta content="" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>/template/assets/images/favicon.ico">
<!-- App css -->
<link href="<?php echo base_url(); ?>/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/template/assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/template/assets/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/template/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/template/assets/css/app.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
	<div class="main-icon-menu">
		<a href="crm-index.html" class="logo logo-metrica d-block text-center"><span><img src="<?php echo base_url(); ?>/template/assets/images/logo-sm.png" alt="logo-small" class="logo-sm"></span></a><nav class="nav"><a href="#MetricaCRM" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="CRM" data-trigger="hover"><i data-feather="pie-chart" class="align-self-center menu-icon icon-dual"></i></a>
		<!--end MetricaCRM-->
		<a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Apps" data-trigger="hover"><i data-feather="grid" class="align-self-center menu-icon icon-dual"></i></a>		<!--end nav-->
		<div class="pro-metrica-end">
			<a href="#" class="help" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Chat"><i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i></a><a href="#" class="profile"><img src="<?php echo base_url(); ?>/template/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm"></a>
		</div>
	</div>
	<!--end main-icon-menu-->
	<div class="main-menu-inner">
		<!-- LOGO -->
		<div class="topbar-left">
			<a href="crm-index.html" class="logo"><span><a class="nav-link dropdown-toggle waves-effect waves-light nav-user"  href="<?php echo site_url('About/about') ?>" role="button" ><span>PT. SWADHARMA DUTA DATA</span></a>

		</div>
		<!--end logo-->
		<div class="menu-body slimscroll">
			<div id="MetricaCRM" class="main-icon-menu-pane">
				<div class="title-box">
					<h6 class="menu-title">Master</h6>
				</div>
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('MasterUser/index') ?>">User</a>
					</li>
				</ul>
			</div>
			<!-- end CRM -->
			<div id="MetricaApps" class="main-icon-menu-pane">
				<div class="title-box">
					<h6 class="menu-title">Apps</h6>
				</div>
				<ul class="nav metismenu">
					<li class="nav-item">
						<a class="nav-link" href="javascript: void(0);"><span class="w-100">Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="#" data-toggle="modal" data-animation="bounce" data-target=".compose-modal">Create</a>
							</li>
							<li>
								<a href="<?php echo site_url('mail/inbox') ?>">Inbox</a>
							</li>
							<li>
								<a href="<?php echo site_url('mail/outbox'); ?>">Outbox</a>
							</li>
							<li>
								<a href="<?php echo site_url('mail/draft'); ?>">Draft</a>
							</li>
						</ul>
					</li>
					<!--end nav-item--> 	
					<li class="nav-item">
						<a class="nav-link" href="../apps/chat.html">Chat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../apps/contact-list.html">Contact List</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../apps/calendar.html">Calendar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../apps/invoice.html">Invoice</a>
					</li>
				</ul>
			</div>

		<!--end menu-body--></div>
	<!-- end main-menu-inner--></div>
<!-- end leftbar-tab-menu-->
<!-- Top Bar Start -->
<div class="topbar">
	<!-- Navbar -->
	<nav class="navbar-custom">
	<ul class="list-unstyled topbar-nav float-right mb-0">
		<li class="hidden-sm">
			<a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false">English <img src="<?php echo base_url(); ?>/template/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""><i class="mdi mdi-chevron-down"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript: void(0);"><span>German</span><img src="<?php echo base_url(); ?>/template/assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>Italian</span><img src="<?php echo base_url(); ?>/template/assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>French</span><img src="<?php echo base_url(); ?>/template/assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>Spanish</span><img src="<?php echo base_url(); ?>/template/assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>Russian</span><img src="<?php echo base_url(); ?>/template/assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"></a>
			</div>
		</li>
		<li class="dropdown notification-list">
			<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ti-bell noti-icon"></i><span class="badge badge-danger badge-pill noti-icon-badge">2</span></a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
				<h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">Notifications <span class="badge badge-light badge-pill">2</span></h6>
				<div class="slimscroll notification-list">
					<!-- item-->
					<a href="#" class="dropdown-item py-3"><small class="float-right text-muted pl-2">2 min ago</small>
					<div class="media">
						<div class="avatar-md bg-primary">
							<i class="la la-cart-arrow-down text-white"></i>
						</div>
						<div class="media-body align-self-center ml-2 text-truncate">
							<h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
							<small class="text-muted mb-0">Dummy text of the printing and industry.</small>
						</div>
						<!--end media-body--></div>
					<!--end media--></a>
					<!--end-item-->
					<!-- item-->
					<a href="#" class="dropdown-item py-3"><small class="float-right text-muted pl-2">10 min ago</small>
					<div class="media">
						<div class="avatar-md bg-success">
							<i class="la la-group text-white"></i>
						</div>
						<div class="media-body align-self-center ml-2 text-truncate">
							<h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
							<small class="text-muted mb-0">It is a long established fact that a reader.</small>
						</div>
						<!--end media-body--></div>
					<!--end media--></a>
					<!--end-item-->
					<!-- item-->
					<a href="#" class="dropdown-item py-3"><small class="float-right text-muted pl-2">40 min ago</small>
					<div class="media">
						<div class="avatar-md bg-pink">
							<i class="la la-list-alt text-white"></i>
						</div>
						<div class="media-body align-self-center ml-2 text-truncate">
							<h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
							<small class="text-muted mb-0">Dummy text of the printing.</small>
						</div>
						<!--end media-body--></div>
					<!--end media--></a>
					<!--end-item-->
					<!-- item-->
					<a href="#" class="dropdown-item py-3"><small class="float-right text-muted pl-2">1 hr ago</small>
					<div class="media">
						<div class="avatar-md bg-warning">
							<i class="la la-truck text-white"></i>
						</div>
						<div class="media-body align-self-center ml-2 text-truncate">
							<h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
							<small class="text-muted mb-0">It is a long established fact that a reader.</small>
						</div>
						<!--end media-body--></div>
					<!--end media--></a>
					<!--end-item-->
					<!-- item-->
					<a href="#" class="dropdown-item py-3"><small class="float-right text-muted pl-2">2 hrs ago</small>
					<div class="media">
						<div class="avatar-md bg-info">
							<i class="la la-check-circle text-white"></i>
						</div>
						<div class="media-body align-self-center ml-2 text-truncate">
							<h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
							<small class="text-muted mb-0">Dummy text of the printing.</small>
						</div>
						<!--end media-body--></div>
					<!--end media--></a>
					<!--end-item--></div>
				<!-- All-->
				<a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>
			</div>
		</li>
		<li class="dropdown">
			<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="<?php echo base_url(); ?>/template/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle"><span class="ml-1 nav-user-name hidden-sm">-- <i class="mdi mdi-chevron-down"></i></span></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a><a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a><a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a><a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo site_url('Auth/logout')?>"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
			</div>
		</li>
		<li class="mr-2">
			<a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar"><i data-feather="align-right" class="align-self-center"></i></a>
		</li>
	</ul>
	<!--end topbar-nav-->
	<ul class="list-unstyled topbar-nav mb-0">
		<li>
			<a href="crm-index.html"><span class="responsive-logo"><img src="<?php echo base_url(); ?>/template/assets/images/logo-sm.png" alt="logo-small" class="logo-sm align-self-center" height="34"></span></a>
		</li>
		<li>
			<button class="button-menu-mobile nav-link"><i data-feather="menu" class="align-self-center"></i></button>
		</li>
		<li class="dropdown">
			<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">APLIKASI PENCARIAN SURAT </span></a>

		</li>
		<li class="hide-phone app-search">
			<form role="search" class="">
				<input type="text" id="AllCompo" placeholder="Search..." class="form-control"><a href="#"><i class="fas fa-search"></i></a>
			</form>
		</li>
	</ul>
	</nav>
	<!-- end navbar--></div>
<!-- Top Bar End -->
	<!-- Page Content-->
    <?= $this->renderSection('content') ?> 
    <!-- /Render -->
	<!-- end page content -->

	<!-- Modal -->
	<div class="modal fade compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title mt-0" id="exampleModalLabel">Compose Mail</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="card mb-0 p-3">
							<form method='POST' action="<?php echo site_url('Mail/proses_create_mail') ?>">
								<div class="form-group mb-3">
									<!-- <input type="Text" class="form-control" name="Kepada" placeholder="Kepada"></div> -->
									<select name="Kepada" id="Kepada" class="form-control">
										<?php if(count($listReply) > 0): ?>
										<?php foreach($listReply as $item): ?>
										<option value="<?php echo $item->ID; ?>"><?php echo $item->ID . "-" . $item->Nama; ?></option>
										<?php endforeach; ?>
										<?php endif; ?>
									</select>
								<!--end form-group-->
								<div class="form-group mb-3">
									<input type="text" class="form-control" name="Nomor_surat" placeholder="Nomor_surat"></div>
								<!--end form-group-->
								<div class="form-group mb-3">
									<input type="text" class="form-control" name="Judul_surat" placeholder="Judul Surat"></div>
								<!--end form-group-->
								<div class="form-group mb-3">
								<textarea  id="Isi_surat" class="form-control" name="Isi_surat"></textarea></div>							
								<!--end form-group-->
								<div class="btn-toolbar form-group mb-0">
									<div class="pull-right">
										<button type="button" class="btn btn-gradient-info waves-effect waves-light"><span>Print</span><i class="far fa-save ml-3"></i></button><button class="btn btn-gradient-primary waves-effect waves-light"><span>Send</span><i class="far fa-paper-plane ml-3"></i></button><button type="button" class="btn btn-gradient-danger waves-effect waves-light"><span>Delete</span><i class="far fa-trash-alt ml-3"></i></button>
									</div>
								</div>
								<!--end form-group--></form>
							<!--end form--></div>
						<!--end card--></div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="<?php echo base_url(); ?>/template/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/template/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>/template/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/template/assets/js/metismenu.min.js"></script>
<script src="<?php echo base_url(); ?>/template/assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>/template/assets/js/feather.min.js"></script>
<script src="<?php echo base_url(); ?>/template/assets/js/jquery.slimscroll.min.js"></script>
<!-- App js -->
<script src="<?php echo base_url(); ?>/template/assets/js/app.js"></script>
<script src="<?php echo base_url();?>/template/assets/tinymce/tinymce.min.js"></script>

<script type='text/javascript'> 
tinymce.init({
  selector: 'textarea#Isi_surat',
  height: 240,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>
</body>

<footer class="footer text-center text-sm-left">&copy; 2019 - 2020 DUTA DATA <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> Hasanudin S,kom</span></footer>
</html>