      <div id="content" >
	           <section><!-- <body> --><div align="center">

<div class="uf-reg-wrap">

<?php
	if (!empty($_POST["button_reg"])) {
		$success = false;
		$email = htmlspecialchars($_POST["email"]);
		$password_1 = htmlspecialchars($_POST["password_1"]);
		$password_2 = htmlspecialchars($_POST["password_2"]);

		if (strlen($email) < 3) {
			
			$success = true;
		}
		elseif (strlen($password_1) < 3) {
			
			$success = true;
		}
		elseif ($password_1 != $password_2) {
			
			$success = true;
		}
		else {
			
			$success = addUser($email, md5($password_1));
			$alert = "Вы успешно зарегистрировались";
		}
		//else {$success = false;
		//}
						#$alert = strlen($success);
		/*elseif (strlen($password_1) < 3) {
			$success = false;
		} elseif ($password_1 != $password_2) {
			$success = false;
		} else {$success = addUser($email, md5($password_1));
		}*/

		/*if(!$success) {
			$alert = "Ошибка при регистрации";
		} else {
			$alert = "Вы успешно зарегистрировались";
		}
		#$alert = file_get_contents('php://input');*/

		//include "alert.php";
			include "alert.php";
	}
?>

	<h2>Регистрация</h2>
	<form name="reg" action="" method="post">
	
	<div class="uf-soc-icons">
	<p class="uf-soc-openselect">Через социальную сеть</p>
	<p class="uf-soc-closeselect">Выберите социальную сеть...</p>
	<ul>
	<li><a href="javascript://" onclick="window.open('http://login.uid.me/?site=epruanis&amp;ref=http://pruanis.ucoz.net','unetLoginWnd','width=500,height=350,resizable=yes,titlebar=yes');return false;" class="login-with uid" title="Войти через uID" rel="nofollow"><i></i> <b>uCoz uID</b></a></li>
	<li><a href="javascript://" onclick="return uSocialLogin('facebook');" class="login-with facebook" title="Войти через Facebook" rel="nofollow"><i></i> <b>Facebook</b></a></li>
	<li><a href="javascript://" onclick="return uSocialLogin('vkontakte');" class="login-with vkontakte" title="Войти через ВКонтакте" rel="nofollow"><i></i> <b>ВКонтакте</b></a></li>
	<li><a href="javascript://" onclick="return uSocialLogin('google');" class="login-with google" title="Войти через Google+" rel="nofollow"><i></i> <b>Google+</b></a></li>
	<li><a href="javascript://" onclick="return uSocialLogin('ok');" class="login-with ok" title="Войти через Однокласcники" rel="nofollow"><i></i> <b>Однокласcники</b></a></li>
	<li><a href="javascript://" onclick="return uSocialLogin('yandex');" class="login-with yandex" title="Войти через Яндекс" rel="nofollow"><i></i> <b>Яндекс</b></a></li>
	<li><a href="javascript://" onclick="return uSocialLogin('twitter');" class="login-with twitter" title="Войти через Twitter" rel="nofollow"><i></i> <b>Twitter</b></a></li>
	</ul>
	<div class="clear"></div>
	</div>
	
	
	<div class="uf-fields-wrap">
	<p>или через форму на сайте</p>
 	

	

	
	<div class="uf-field">
	<label>E-mail</label><input type="text" name="email"/>
	<span class="uf-status-icon text-field" id="uf-name-status-icon"></span>
	</div>
	

	
	<div class="uf-field">
	<label>Пароль</label><input type="password" name="password_1"/>
	<span class="uf-status-icon text-field" id="uf-surname-status-icon"></span>
	</div>
	
	
		<div class="uf-field">
	<label>Подтвердите пароль</label><input type="password" name="password_2"/>
	<span class="uf-status-icon text-field" id="uf-surname-status-icon"></span>
	</div>

	
 
	<div id="uf-form-status"></div><input type="submit" name="button_reg" value="Зарегистрировать"/>
	</div>
	</form>
	<div style="clear:both"></div>
</div>

<style type="text/css">
.uf-reg-wrap { text-align: left; max-width: 600px; }
#uf-register .uf-field { margin: 15px 0 20px 0; white-space:nowrap }
#uf-register .uf-field>label { display:block; margin:3px 0; text-align:left }
#uf-register .uf-field input { width:85%; font-size:1em; padding-left:5px; padding-right:5px; }
#uf-register .uf-field img { vertical-align:middle;}
#uf-register input#uf-show-pass[type="checkbox"]{ display:none }
#uf-register input#uf-show-pass[type="checkbox"] + label span { display:inline-block; width:16px; height:16px; background:url(.s/img/icon/social/pw.svg) no-repeat center center #c6c6c6; background-size:80% 80%; vertical-align:middle; margin-left:-23px; cursor:pointer; border-radius:10px }
#uf-register input#uf-show-pass[type="checkbox"] + label { display:inline-block }
#uf-register input#uf-show-pass[type="checkbox"]:checked + label span { background:url(.s/img/icon/social/pw-s.svg) no-repeat center center #c6c6c6; background-size:80% 80% }
#uf-register .uf-changed input#uf-show-pass[type="checkbox"] + label span { margin-left:-38px;}
#uf-register .uf-status-icon { display:none; vertical-align:middle; width:16px; height:16px; background-repeat:no-repeat; background-size:cover; position:relative }
#uf-register .uf-status-icon.text-field { margin-left:-23px }
#uf-captcha-status-icon { margin-left:-193px }
#uf-captcha-img { width:125px; height:35px }
#uf-email-status-icon.fail, #uf-password-status-icon.fail, #uf-captcha-status-icon.fail { cursor:pointer }
#uf-register span.fail { display:inline-block; background-image:url(.s/img/icon/social/fail.svg) }
#uf-register span.pass { display:inline-block; background-image:url(.s/img/icon/social/pass.svg) }
#uf-register span.wait { display:inline-block; background-image:url(.s/img/icon/ajsml.gif) }
#uf-register span.uf-status{ display:none; position:absolute; right:-15px; margin:0; z-index:5 }
#uf-register span.uf-status p { background-color:rgba(0,0,0,0.7); color:#fff; padding:5px 10px; white-space:nowrap; font:12px/29px 'Arial'; border-radius:3px; margin:6px 0 0 0;  }
#uf-register span.uf-status i { float:right; margin-right:18px;  display:block;  width:0; height:0; border-left:6px solid transparent; border-right:6px solid transparent; border-bottom:6px solid rgba(0,0,0,0.7) }
#uf-register .uf-refresh { cursor:pointer }
#uf-captcha { width:80px!important }
#uf-register .captcha img { vertical-align:middle }
#uf-submit { margin:10px 0 10px 0; clear:both }
#uf-submit.disabled { opacity:0.2 }
#uf-register .uf-field input.uf-gender, #uf-register .uf-field input.uf-click { width:auto }
#uf-register .uf-field label.uf-inline-label, #uf-register .uf-field label#uf-terms-label { display:inline }
#uf-register .uf-fields-wrap, #uf-register .uf-soc-icons{ float:left; width:50%; padding:1px 0 }
#uf-register .uf-soc-closeselect { display:none }
.uf-soc-icons ul { list-style-type:none; margin:0; padding:0 }
.uf-soc-icons ul li { text-align:left; float:left; width:50%; margin:2px 0 }
#uf-register .uf-soc-icons ul li b { display:block; position:absolute; left:0; padding-left:42px; top:8px; width:60px; font-weight:normal }

@media screen and (max-width:768px) {
	.uf-reg-wrap { text-align:center }
	a.login-with i { width:44px; height:44px; border-radius:24px;}
	#uf-register .uf-fields-wrap, #uf-register .uf-soc-icons { float:none; width:100%;text-align:center }
	#uf-register .uf-reg-wrap, #uf-register .uf-field label, #uf-register .uf-field { text-align:center }
	#uf-register .uf-soc-icons ul { margin:0 auto; overflow:auto; display:inline-block }
	#uf-register .uf-soc-icons ul li { width:auto; margin:5px }
	#uf-register .uf-soc-icons a.login-with b { display:none }
	#uf-register .uf-soc-closeselect { display:block }
	#uf-register .uf-soc-openselect { display:none }
	#uf-register .uf-field input { padding:10px 4%; font-size:120%; margin:0 auto }
	#uf-submit { margin:0 auto }
	#uf-register input#uf-show-pass[type="checkbox"] + label span { margin-left:-38px }
	#uf-register .uf-changed input#uf-show-pass[type="checkbox"] + label span { margin-left:-60px;}
}
</style>

	<script type="text/javascript">
	var uValidator = {
			name: function(obj){
				return obj.value.length<2 ? 1 : 0;
			},
			surname: function(obj){
				return obj.value.length<2 ? 1 : 0;
			}
	}
	var eFields = [];

	function uShowErr(name,err){
		var icon = $('#uf-'+name+'-status-icon');
		var hint = $('#uf-'+name+'-status');
		if (icon.length){
			//if(hint.length) hint.html('');
			if(err == 0){
				icon.removeClass('wait').addClass('pass').removeClass('fail').children('span.uf-status').fadeOut();
				uFormStatus();
			}else if(err == -1){
				icon.addClass('wait').removeClass('pass').removeClass('fail');
			}else{
				icon.removeClass('wait').removeClass('pass').addClass('fail');
				$('#uf-submit').addClass('disabled'); // .attr('disabled', 'disabled');
				if(err != 1 && hint.length){
					hint.html(err);
					icon.children('span.uf-status').fadeIn(300);
					setTimeout("$('#uf-"+name+"-status-icon').children('span.uf-status').fadeOut();",3000);
				}
			}
		}
	}

	function uFormStatus(){
		var has_err = false;
		for(field in uValidator){
			var err = uValidator[field](document.getElementById('uf-'+field),1);
			has_err = err || has_err;
		}
		if( !has_err && $('.uf-status-icon.fail').length ) {
			has_err = true;
		}
		if(has_err)
			$('#uf-submit').addClass('disabled'); // .attr('disabled', 'disabled');
		else
			$('#uf-submit').removeClass('disabled'); // .removeAttr('disabled');
	}

	$(document).ready(function(){
		$("#uf-register .uf-text").bind("blur", function(event){
			uShowErr(this.name,uValidator[this.name](this));
	    });
		$("#uf-register .uf-select").bind("change", function(event){
			var fname = this.id.split('-')[1];
			uShowErr(fname,uValidator[fname](this));
	    });
		$("#uf-register .uf-click").bind("click", function(event){
			var fname = this.id.split('-')[1];
			uShowErr(fname,uValidator[fname](this));
	    });

		$("#uf-register .uf-refresh").bind("click", function(event){
			$('#uf-captcha').attr('value','');
			$('#uf-captcha-ref').fadeOut().fadeIn();
			var el = $('#uf-captcha-img');
			el.attr('src',el.attr('src').replace(/([^=]+)$/,Math.random()));
			setTimeout("$('#uf-captcha').focus();",300);
	    });

		$("#uf-register").bind("submit", function(event){
			var has_err = false;
			for(field in uValidator){
				var err = uValidator[field](document.getElementById('uf-'+field),1);
				uShowErr(field,err);
				has_err = err || has_err;
			}
			$('#uf-submit').addClass('disabled'); // .attr('disabled', 'disabled');
			return has_err ? false : true;
	    });

		$('#uf-register .uf-status-icon').hover(function(){
		  var el = $(this);
		  if(!el.is('[showed]') && el.hasClass('fail') && el.find('span.uf-status p').html()){
			el.attr('showed',1).children('span.uf-status').fadeIn(300);
			setTimeout("$('#"+this.id+"').removeAttr('showed').children('span.uf-status').fadeOut();",3000);
		  }
		});
		
		$('#uf-register .uf-field').each(function() {
			var inputHeight = $(this).children('input').height();
			$(this).find('.uf-status').css('margin-top', 11 + inputHeight/2 +'px');
		});

	    for(var f in eFields){
			uShowErr(eFields[f],uValidator[eFields[f]](document.getElementById('uf-'+eFields[f])));
		}
		if(eFields.length < Object.keys(uValidator).length) $('#uf-submit').addClass('disabled'); // .attr('disabled', 'disabled');
	});
	</script>





		</div><!-- </body> --></section>
	  </div>

    