
<!DOCTYPE HTML>
<html>
<head>
   <?php include_once 'template/head.php' ?>
</head>
<body>
	<?php include_once 'template/header.php' ?>
		
	<!--content-->
    	<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Thông tin liên hệ</h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5>Địa chỉ</h5>
                                        <p>120, Tôn Đức Thắng, TP. Đà Nẵng</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5>Số điện thoại</h5>
										<p>0123-456-789</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5>Email</h5>
										<p><a href="mailto:tuandat@gmail.com">tuandat@gmail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
                                <p style=" border-top: 3px solid #000000; margin: 1em 6em;"></p>
								<div class="mail-bottom">
									<form action="#" method="post">
										<input type="text" value="Tên người gửi" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên người gửi';}" required="">
										<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
										<input type="text" value="Số điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Số điện thoại';}" required="">
										<textarea  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nội dung tin nhắn...';}" required="">Nội dung tin nhắn...</textarea>
										<input type="submit" value="Gửi" >
										<input type="reset" value="Xóa" >

									</form>
								</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
	<!--content-->
		
    <?php include_once 'template/footer.php' ?>
</body>
</html>