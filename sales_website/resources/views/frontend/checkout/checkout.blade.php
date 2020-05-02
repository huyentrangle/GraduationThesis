@extends('frontend.master.master')
@section('title','Chi tiết sản phầm')
@section('content')
<!-- main -->

<div class="colorlib-shop">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1">
				<div class="process-wrap">
					<div class="process text-center active">
						<p><span>01</span></p>
						<h3>Giỏ hàng</h3>
					</div>
					<div class="process text-center active">
						<p><span>02</span></p>
						<h3>Thanh toán</h3>
					</div>
					<div class="process text-center">
						<p><span>03</span></p>
						<h3>Hoàn tất thanh toán</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<form method="post" class="colorlib-form">
					<h2>Chi tiết thanh toán</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="fname">Họ & Tên</label>
								<input type="text" id="fname" class="form-control" placeholder="First Name">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="fname">Địa chỉ</label>
								<input type="text" id="address" class="form-control" placeholder="Nhập địa chỉ của bạn">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<label for="email">Địa chỉ email</label>
								<input type="email" id="email" class="form-control" placeholder="Ex: youremail@domain.com">
							</div>
							<div class="col-md-6">
								<label for="Phone">Số điện thoại</label>
								<input type="text" id="zippostalcode" class="form-control" placeholder="Ex: 0123456789">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">

							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="cart-detail">
					<h2>Tổng Giỏ hàng</h2>
					<ul>
						<li>

							<ul>
								<li><span>1 x Tên sản phẩm</span> <span>₫ 990.000</span></li>
								<li><span>1 x Tên sản phẩm</span> <span>₫ 780.000</span></li>
							</ul>
						</li>

						<li><span>Tổng tiền đơn hàng</span> <span>₫ 1.370.000</span></li>
					</ul>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p><a href="order-complete.html" class="btn btn-primary">Thanh toán</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end main -->

<!-- subscribe -->
<div id="colorlib-subscribe">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="col-md-6 text-center">
					<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
				</div>
				<div class="col-md-6">
					<form class="form-inline qbstp-header-subscribe">
						<div class="row">
							<div class="col-md-12 col-md-offset-0">
								<div class="form-group">
									<input type="text" class="form-control" id="email" placeholder="Nhập email của bạn">
									<button type="submit" class="btn btn-primary">Đăng ký</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end  subscribe -->
<!-- footer -->
@endsection