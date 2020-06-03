
<section class="loginmodal">
	<div id="modal1" class="modal">
	    <div class="modal-content center">
	      <h4>Přihlášení</h4>

	      <h5><small class="center" id="login_error" style="color: red;"></small></h5>
	      <form action="">

	      	<div class="row">

	        <div class="input-field col s12">
	          <input id="email_login" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>

		    <div class="input-field col s12">
	          <input id="password_login" type="password" class="validate">
	          <label for="password">Heslo</label>
	        </div>
	        
		  </div>

		  <a href="javascript:void(0)" class="modal-close waves-effect waves-light btn" id="login_btn" style="background: #ee6e73 !important;">Přihlásit</a>
              <?php
              require_once 'backends/facebook.php';

              #region přihlašování pomocí Facebooku
              //inicializujeme helper pro vytvoření odkazu
              $fbHelper = $fb->getRedirectLoginHelper();

              //nastavení parametrů pro vyžádání oprávnění a odkaz na přesměrování po přihlášení
              $permissions = ['email'];
              $callbackUrl = htmlspecialchars('https://eso.vse.cz/~resj01/fb-callback.php');


              //necháme helper sestavit adresu pro odeslání požadavku na přihlášení
              $fbLoginUrl = $fbHelper->getLoginUrl($callbackUrl, $permissions);

              //vykreslíme odkaz na přihlášení
              echo ' <a href="'.$fbLoginUrl.'" class="btn btn-primary">přihlásit se pomocí Facebooku</a>';
              #endregion přihlašování pomocí Facebooku
              ?>
	      </form>
	    </div>
	  </div>
  </section>