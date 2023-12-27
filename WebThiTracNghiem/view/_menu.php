<header class="top-bar text-dark">
	<div class="topbar">

		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-6 col-12 d-lg-block d-none">
					<div class="topbar-social text-center text-md-start topbar-left">
						<ul class="list-inline d-md-flex d-inline-block">
							<li class="ms-10 pe-10"><a href="#"><i class="fa fa-question-circle"></i> Hỏi đáp</a>
							</li>
							<li class="ms-10 pe-10"><a href="#"><i class="fa fa-envelope"></i> xuongthph33874@fpt.edu.vn</a>
							</li>
							<li class="ms-10 pe-10"><a href="#"><i class="fa fa-phone"></i> +(97) 365-75-94</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-12 xs-mb-10">
					<div class="topbar-call text-center text-lg-end topbar-right">
						<ul class="list-inline d-lg-flex justify-content-end">
							<?php if (isset($_SESSION['user'])) { ?>
								<li class="me-10 ps-10 lng-drop">
									<select class="header-lang-bx selectpicker" onchange="location = this.value;">

										<option>Xin chào
											<?php echo $_SESSION['user']['fullname'] ?>
										</option>
										<option>Thông tin cá nhân</option>
										<?php if ($_SESSION['user']['role'] == "1") { ?>
											<option value="../admin/index.php">Đăng nhập Admin</option>
										<?php } ?>
										<option>Quên mật khẩu</option>
										<option value="?act=logout">Đăng xuất</option>

									</select>

								</li>
							<?php } ?>
							<?php if (!isset($_SESSION['user'])) { ?>
								<li class="me-10 ps-10"><a href="?act=login"><i class="fa fa-user d-md-inline-block d-none"></i>
										Register</a></li>
								<li class="me-10 ps-10"><a href="?act=login"><i class="fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav hidden class="nav-dark nav-transparent">

		<ul class="menu">
			<li class="dropdown">
				<a href="#">Hỗ trợ</a>
			</li>
			<li class="dropdown">
				<a href="#">Điểm</a>
			</li>

			<li class="dropdown">
				<a href="#">Chuyên đề</a>
				<ul class="dropdown-menu">
					<li><a href="courses_list.html">Chuyên đề cái nịt</a></li>
					<li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li>
					<li><a href="courses_list-map.html">Courses with Map</a></li>
					<li><a href="courses_categories.html">Courses Categories</a></li>
					<li><a href="courses_details.html">Courses Details</a></li>
					<li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li>
				</ul>
			</li>


			<li class="dropdown">
				<a href="#">Kì thi</a>
				<ul class="dropdown-menu">
					<li><a href="courses_list.html">Kỳ thi cái nịt</a></li>
					<li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li>
					<li><a href="courses_list-map.html">Courses with Map</a></li>
					<li><a href="courses_categories.html">Courses Categories</a></li>
					<li><a href="courses_details.html">Courses Details</a></li>
					<li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li>
				</ul>
			</li>
			<li>
				<a href="?act=trangchu">Trang chủ</a>
			</li>

		</ul>



		<div class="wrap-search-fullscreen">
			<div class="container">
				<button class="close-search"><span class="ti-close"></span></button>
				<input type="text" placeholder="Search..." />
			</div>
		</div>
	</nav>
</header>