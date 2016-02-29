<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户登录</title>
	<link rel="stylesheet" type="text/css" href="css/user_login.css">
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
					this.style.borderTop="2px solid #00bc9b";
					this.style.background="#fff";
					this.getElementsByTagName('a')[0].style.color="#00bc9b";
					oDiv[this.index].style.display="block";
				};
			}
		};
	</script>
</head>
<body>
	<div class="left"></div>
    <div id="box">
        <ul>
            <li id="li1"><a id="a1">登录</a></li>
            <li><a>注册</a></li>

        </ul>
        <!-- 登录表单 -->
        <div class="liDiv" style="display:block">
            <div class="userContent">
                <label for="userName">账户</label>
                <input type="text" id="userName" placeholder="请输入用户名">
            </div>
            <div class="userContent">
                <label for="userPswd">密码</label>
                <input type="pswd" id="userPswd" placeholder="请输入密码">
            </div>
        <input type="button" value="登录" method="post" action="logincheck.php">
		</div> 
        <!-- 注册表单 -->
        <div class="liDiv" style="display:none">
             <div class="userContent">
                <label for="Name">用户名</label>
                <input type="text" name="Name" id="name" placeholder="请输入用户名"/>
            </div>
            <div class="userContent">
                <label for="pswd1">密码</label>
                <input type="pswd" name="pswd1" id="pswd1" placeholder="请输入密码"/>
            </div>
            <div class="userContent">
                <label for="pswd2" class="lastlabel">确认密码</label>
                <input type="pswd" name="pswd2" id="pswd2" placeholder="请确认你的密码"/>
            </div>
            <input type="button" value="立即注册" method="post" action="logincheck.php">
        </div>
    </div>
   <!--  底部信息 -->
   <div id="footer">
      
   </div>
   
</body>
</html>