
<!DOCTYPE HTML>
<html>
<head>
   <?php include_once 'template/head.php' ?>
</head>
<body>
	<?php include_once 'template/header.php' ?>
	<script>
        var checkFields = function() {
            var message;
            message = checkField($("#userName"), "Tên đăng nhập");
            if (message != "")
            {
                return message;
            }
                                
            message = checkField($("#password"), "Mật khẩu");
            if (message != "")
                return message;
            
            return "";
        };
        var login = function() {
            var message = checkFields() ;
            if(message != "")
            {                
                $("#error").html(message);
                $("#error").show();
                return ;
            } 
             $.ajax({
                type: "POST",
                url: "php/login.php",
                data: {'userName': $("#userName").val(), 'password': $("#password").val()},
             
                success: function (response) {
                    if (response.indexOf("thành công") < 0)
                    {
                        $("#error").html(response);   
                        $("#error").show();
                        $("#userName").focus();                        
                    }
                    else 
                    {
                        window.location.href = "index.php";
                    } 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert ("Lỗi khi đăng nhập: " + errorThrown);
                }
            });   
        };
        $(function() { 
           
            $( "#login" ).click(function() {             
                login();
                return false;
            });
        });
    </script>	
	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Đăng nhập tài khoản</h3>
                        <div class="error" id="error"></div>
						<form action="#" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input autofocus type="text" value="vancong" name="userName" placeholder="Tên đăng nhập/email" id="userName" required=""/>
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="cong1234" placeholder="Mật khẩu" id="password" required="" />
								<div class="clearfix"></div>
							</div>
							<div style="text-align: center;"><input type="submit" value="Đăng nhập" id="login"/></div>
						</form>
					</div>
					<div class="forg">
						<a href="#" class="forg-left">Quên mật khẩu</a>
						<a href="registered.php" class="forg-right">Đăng ký</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--login-->
		</div>
	<!--content-->
		
    <?php include_once 'template/footer.php' ?>
</body>
</html>