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
								<a href="javascript:void(0);">SDD</a>
							</li>
							<li class="breadcrumb-item active">Master_User</li>
						</ol>
					</div>
				</div>
				<!--end page-title-box--></div>
			<!--end col--></div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
							<div class="row">
								<div class="col-sm-12">
									<div class="dataTables_length" id="datatable_length">
									</div>
									<button type="button"  onclick="window.location.href='<?php echo site_url('MasterUser/create') ?>'"  font-size="10px" class="btn btn-sm btn-warning" >+</button>
								</div>
								<div class="col-sm-12">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
									<thead>
									<tr role="row">
										<th>No</th>
										<th>ID</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Password</th>
										<th>Alamat</th>
										<th>telepon</th>
										<th>CRE_DATE</th>
                                        <th colspan="2">aksi</th>
                                    </tr>
									</thead>
									<?php 
									$no=1;
									foreach($listUser as $usr):?>							
									<tbody>
									<tr role="row" class="odd">
									<td><?php echo $no++ ?></td>
										<td><?php echo $usr->ID; ?></td>
										<td><?php echo $usr->Nama ?></td>
										<td><?php echo $usr->Email ?></td>
										<td><?php echo $usr->Password ?></td>
										<td><?php echo $usr->Alamat ?></td>
										<td><?php echo $usr->Telepon ?></td>
										<td><?php echo $usr->CRE_DATE ?></td>
                                        <td><button type="button"  onclick="window.location.href='<?php echo site_url('MasterUser/edit/' . $usr->ID) ?>'"  class="btn btn-sm btn-warning" >Edit</button>&nbsp;<button type="button"  onclick="window.location.href='<?php echo site_url('MasterUser/delete/' . $usr->ID) ?>'" onClick=\"return confirm('Are you sure you want to delete?')\") class="btn btn-sm btn-warning" >Delete</button>
									</tr>
									<?php endforeach; ?>



									</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
</div>
			<!-- end col --></div>
		<!-- end row -->

	<!-- container -->
	
	<!--end footer--></div>

	<?php echo $this->endSection() ?>  <!-- tambah area -->


