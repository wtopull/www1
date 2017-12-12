<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>后台管理登陆</title>
<style type="text/css">
  * {
    margin: 0;
    padding: 0;
  }
  body {
    background: #3191C1;
    -ms-user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none;
  }
  ul {
    list-style: none;
  }
  .login {
    width:404px;
    height: 200px;
    border: 1px solid #DBDBDB;
    text-align: center;
    margin: -100px 0 0 -150px;
    position: absolute;
    top: 50%;
    left: 50%;    
  }
  h2 {
    height: 52px;
    line-height: 52px;
  }
  ul li:nth-child(1), ul li:nth-child(2) {
    height: 42px;
    line-height: 42px;
  }
  ul li input:nth-child(1), ul li input:nth-child(2) {
    height: 30px;
    line-height: 30px;
    padding-left: 10px;
    width: 200px;
    ;
  }
  ul li:nth-child(3) {
    height: 50px;
    line-height: 50px;
  }
  button {
    width: 166px;
    height: 36px;
    font-size: 18px;
    text-indent: 20px;
    letter-spacing: 22px;
    border: none;
    cursor: pointer;
    outline: none;
  }
  input{background-color:#DBDBDB;border:none;outline:none;}
  ::-webkit-input-placeholder{color:#deacac;}
  ::-moz-placeholder{color:#deacac;}
  ::-ms-input-placeholder{color:#deacac;} 
</style>
</head>
<body>
  <div class="login">
    <form action="/index.php/Home/Index/login" method="post" target="nm_iframe1">
      <h2>管理员登陆</h2>
      <ul>
        <li>账号：<input type="text" name="nick_name" placeholder="请输入账号" id="d"/></li>
        <!-- <li>密码：<input type="password" name="user_pwd" placeholder="请输入密码" /></li> -->
        <li><button type="submit" />登陆</button>
        </li>
      </ul>
    </form> 
    <iframe id="id_iframe" name="nm_iframe1" style="display:none;"></iframe> 
  </div>



<!--<script type="text/javascript">
	document.getElementById("d").focus();
	document.oncontextmenu = function(){ return false; };
</script>


-->
</body>
</html>