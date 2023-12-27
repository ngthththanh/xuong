
<!--Page content -->

<section class="py-50">
	<div class="container">
		<div class="row justify-content-center g-0 container-login ">
			<div class="col-lg-5 col-md-5 col-12">
				<div class="box box-body">
					<div class="content-top-agile pb-0 pt-20">
						<h2 class="text-primary">Đăng nhập</h2>
						<p class="mb-0">Đăng nhập để tiếp tục.</p>
					</div>
					<div class="p-40">
						<form class="user" action="?act=login" method="post">
							<?php
							if (isset($thongbao)) {
								echo $thongbao;
							}
							?>
							<div class="form-group">
								<div class="input-group mb-15">
									<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
									<input type="text" class="form-control ps-15 bg-transparent" name="username" placeholder="Tên đăng nhập">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-15">
									<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
									<input type="password" class="form-control ps-15 bg-transparent" name="password" placeholder="Mật khẩu">
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="checkbox ms-5">
										<input type="checkbox" id="basic_checkbox_1">
										<label for="basic_checkbox_1" class="form-label">Remember Me</label>
									</div>
								</div>
								<!-- /.col -->

								<!-- /.col -->
								<div class="col-12 text-center">
									<button type="submit" class="btn btn-info w-p100 mt-15" name="btnSubmit">ĐĂNG NHẬP</button>
								</div>
								<!-- /.col -->
							</div>
						</form>
						<div class="col-6">
							<div class="fog-pwd text-end">
								<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Quên mật khẩu</a><br>
							</div>
						</div>
						<div class="text-center">
							<p class="mt-15 mb-0">Bạn chưa có tài khoản ?<a href="?act=register" class="text-warning ms-5">Taọ tài khoản</a></p>
						</div>
					</div>
				</div>

				<div class="text-center">
					<p class="mt-20">- Đăng nhập bằng -</p>
					<p class="d-flex gap-items-2 mb-0 justify-content-center">
						<a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-light py-30">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-9 col-12">
				<div class="text-md-start text-center">
					<h2><strong> EduLearn: </strong> fully responsive template in the market</h2>
					<p class="mb-0">Exclusive multi-purpose lightweight responsive with powerful features.</p>
				</div>
			</div>
			<div class="col-md-3 col-12">
				<div class="text-md-end text-center mt-30 mt-md-0">
					<a class="btn btn-primary" href="#">Purchase Now</a>
				</div>
			</div>
		</div>
	</div>
</section>