
<div class="login_box" style="text-align:center"><span style="font-size:14px;color:red;"><?php if(p()->user->hasFlash('err')) echo p()->user->getFlash('err')?></span>
<form action="" id="f" method="POST">
		<ul>
			<li><input type="text" name="sid" class="username" placeholder="学生身份证号"></li>
         <input type="hidden" name="openid" value="<?php echo $openid?>"/>
         <input type="hidden" name="code" value="<?php echo $code?>"/>
			<li><a href="javascript:document.getElementById('f').submit();" class="submit_btn">绑定手机</a></li>
		</ul>
</form>
	</div>




