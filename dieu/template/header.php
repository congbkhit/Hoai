<?php
global $sessionAccountType;
session_start();
?>

<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			 <div class="top-left">
				<a href="#"> Trợ giúp  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i>+0123-456-789</a>
			</div>
			<div class="top-right">
			<ul>
             <?php 
                if (isset($_COOKIE["userName"]))
                {
             ?>
                <li><a href="user.php" style="color: #000;">Chào mừng: <?php echo $_COOKIE["userName"] ?></a></li>
				<li><a href="checkout.php">Giỏ hàng</a></li>
                <li><a href="index.php" onclick="logout()" >Đăng xuất</a></li>
            <?php
                }
                else 
                {
                    if (isset($_SESSION[$sessionAccountType])) unset($_SESSION[$sessionAccountType]);
            ?>                    
				<li><a href="login.php">Đăng nhập</a></li>
				<li><a href="registered.php">Tạo tài khoản</a></li>
            <?php    
                }
            ?>
			</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="heder-bottom">
		<div class="container">
			<div class="logo-nav">
				<div class="logo-nav-left">
					<h1><a href="index.php">Tuấn Đạt Shop <span>Áo sơ mi nam</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" class="act">Trang chủ</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column">
									<div class="row">
										<div class="col-sm-3  multi-gd-img">
											<ul class="multi-column-dropdown">
												<h6>Sản phẩm ưa chuộng</h6>
												<li><a href="products.html">Mới nhất</a></li>
												<li><a href="products.html">Hot nhất</a></li>
												<li><a href="products.html">Rẻ nhất</a></li>
											</ul>
										</div>
										<div class="col-sm-3  multi-gd-img">
											<ul class="multi-column-dropdown">
												<h6>Sản phẩm chất lượng</h6>
												<li><a href="products.html">Hàng đẹp</a></li>
												<li><a href="products.html">Yêu thích</a></li>
												<li><a href="products.html">Hàng hiệu</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
                             <?php 
                                if (isset($_COOKIE["userName"]) && isset($_SESSION[$sessionAccountType]) && $_SESSION[$sessionAccountType] == 1)
                                {
                                    
                             ?>
                                <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Chỉnh sửa<b class="caret"></b></a>
									<ul class="dropdown-menu multi-column">
										<div class="row">
											<div class="col-sm-3  multi-gd-img">
												<ul class="multi-column-dropdown">
													<li><a href="products.html">Mới nhất</a></li>
													<li><a href="products.html">Hot nhất</a></li>
													<li><a href="products.html">Rẻ nhất</a></li>
												</ul>
											</div>
											<div class="col-sm-3  multi-gd-img">
												<ul class="multi-column-dropdown">
													<li><a href="products.html">Hàng đẹp</a></li>
													<li><a href="products.html">Yêu thích</a></li>
													<li><a href="products.html">Hàng hiệu</a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>                                        
                            <?php
                                }
                                else 
                                {
                            ?>      
                                    <li><a href="contact.php">Liên hệ</a></li>
                            <?php    
                                }
                            ?>
							
						</ul>
					</div>
					</nav>
				</div>
				<div class="header-right2">
                	<ul class="cd-header-buttons" >
						<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
					</ul> <!-- cd-header-buttons -->
                    <?php 
                        if (isset($_COOKIE["userName"]))
                        {
                    ?>
                        <div class="cart box_1">
							<a href="checkout.php">
								<h3> <div class="total">
									<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> Áo)</div>
									<img src="images/bag.png" alt="" />
								</h3>
							</a>
							<p><a href="javascript:;" class="simpleCart_empty">Hủy giỏ hàng</a></p>
							<div class="clearfix"> </div>
						</div>
                    <?php 
                        }
                    ?> 
						
				</div>
			</div>
		</div>
	</div>
    
</div>
<!--header-->
        
<div id="cd-search" class="cd-search">
	<form action="#" method="post">
		<input name="Search" type="search" placeholder="Search...">
	</form>
</div>	