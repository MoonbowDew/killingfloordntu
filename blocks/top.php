<?php
require_once "/../start.php";
	if(checkUser($_SESSION["email"], $_SESSION["password"]))
		require_once "user_panel.php";
	else require_once "auth_form.php"
?>
<form name="auth" action="auth.php" method="post">
<div class="inner">
                     <div class="user-box">
                      
                      <div class="user-ttl"><!--<s5212>-->Приветствую Вас<!--</s>-->, <b>Гость</b>!</div>
                      <div class="user-btns"><a title="Регистрация" href="register.php"><!--<s3089>-->Регистрация<!--</s>--></a><a title="Вход" href="javascript://" rel="nofollow" onclick="new _uWnd('LF',' ',-250,-110,{autosize:1,closeonesc:1,resize:1},{url:'/index/40'});return false;"><!--<s3087>--><!--</s>--></a></div>
                     </div>
                    </div>
					</form>