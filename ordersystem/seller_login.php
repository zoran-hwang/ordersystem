<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/seller_login.css">
	<script type="text/javascript">
	window.onload=function(){
		oLi=document.getElementsByTagName('li');
		oDiv=document.getElementsByClassName('liDiv');
		for(var i=0;i<oLi.length;i++){
			oLi[i].index=i;
			oLi[i].onclick=function(){			
				for(var i=0;i<oLi.length;i++){
						oLi[i].style.background="#f1f1f1";
						oLi[i].getElementsByTagName('a')[0].style.color="#707070";				
						oLi[i].style.borderTop="none";
						oDiv[i].style.display="none";
				}
				this.style.borderTop="2px solid #ff7200";
				this.style.background="#fff";
				this.getElementsByTagName('a')[0].style.color="#ff7200";				
				oDiv[this.index].style.display="block";
			};
		}
	};
	</script>
</head>
<body>
	<div id="top-nav"></div>
	<div id="content">
		<ul>
			<li id="li1"><a id="a1">登录</a></li>
			<li><a>注册</a></li>
		</ul>
		<div class="liDiv" style="display:block">
			<div class="sellerContent">
                <label for="sellerName">用户名</label>
                <input type="text" id="sellerName" placeholder="请输入用户名">
            </div>
            <div class="sellerContent">
                <label for="sellerPswd">用户名</label>
                <input type="text" id="userPswd" placeholder="请输入用户名">
            </div>
            <input type="button" value="登录">
		</div>
		<div class="liDiv" style="display:none">
			<div class="sellerContent">
                <label for="nameShop">店名</label>
                <input type="text" id="nameShop" name="nameShop" placeholder="请输入店名">
            </div>
            <div class="sellerContent">
                <label for="nameSeller">用户名</label>
                <input type="text" id="nameSeller" name="nameSeller" placeholder="请输入用户名">
            </div>
            <div class="sellerContent">
                <label for="pswdSeller1">密码</label>
                <input type="text" id="pswdSeller1" name="pswdSeller1" placeholder="请输入密码">
            </div>
            <div class="sellerContent">
                <label for="pswdSeller2">确认密码</label>
                <input type="text" id="pswdSeller2" name="pswdSeller2" placeholder="请再次输入密码">
            </div>
            <input type="button" value="注册">
		</div>
		<div id="right"></div>
	</div>
</body>
</html>