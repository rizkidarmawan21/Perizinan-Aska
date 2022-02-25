 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

 	<!-- Main Content -->
 	<div id="content">

 		<!-- Topbar -->
 		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

 			<!-- Sidebar Toggle (Topbar) -->
 			<button id="sidebarToggleTop" class="btn text-success btn-link d-md-none rounded-circle mr-3">
 				<i class="fa fa-bars"></i>
 			</button>

 			<div>

 				<span class="mr-2 d-none d-lg-inline text-gray-600"><?php date_default_timezone_set('Asia/Jakarta');
																		echo  date('l, d F Y  h:i A'); ?></span>
 				<a class="col-12" data-toggle="modal" data-target="#modalReport">Report Bug</a>
 			</div>
 			<!-- Topbar Navbar -->
 			<ul class="navbar-nav ml-auto">

 				<div class="topbar-divider d-none d-sm-block"></div>

 				<!-- Nav Item - User Information -->
 				<li class="nav-item dropdown no-arrow">

 					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 						<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'] ?></span>
 						<br>
 						<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
 					</a>

 					<!-- Dropdown - User Information -->
 					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
 						<a class="dropdown-item" href="<?= base_url('user') ?>">
 							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
 							My Profile
 						</a>
 						<div class="dropdown-divider"></div>
 						<a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
 							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
 							Logout
 						</a>
 					</div>
 				</li>

 			</ul>

 		</nav>
 		<!-- End of Topbar -->


 		<!-- Modal -->
 		<div class="modal fade" id="modalReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 			<div class="modal-dialog" role="document">
 				<div class="modal-content">
 					<div class="modal-header">
 						<h5 class="modal-title" id="exampleModalLabel">Report Bug</h5>
 						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 							<span aria-hidden="true">&times;</span>
 						</button>
 					</div>
 					<form action="<?= base_url('report/store') ?>" method="post">
 						<div class="modal-body">

 							<div class="form-group">
								 <label for="">Send message for developer</label>
								 <textarea name="message" id="" cols="10" rows="5" class="form-control"></textarea>
 							</div>

 						</div>
 						<div class="modal-footer">
 							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 							<button type="submit" class="btn btn-success">Send</button>
 						</div>

 					</form>
 				</div>
 			</div>
 		</div>
