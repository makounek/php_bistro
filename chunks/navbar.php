<section class="fnavbar">
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper teal lighten-2">
		      <a href="#" class="brand-logo center">U Dvou Přátel</a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="index.php" class="hvr-grow">Domů</a></li>
		        <li><a href="rezervace.php" class="hvr-grow">Rezervace</a></li>
		        <li><a href="menu.php" class="hvr-grow">Menu</a></li>

		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php" class="hvr-grow">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1">Přihlásit</a></li>
		        		<li><a href="#" class="hvr-grow modal-trigger" data-target="modal2">Registrovat</a></li>';
		        	}

		        ?>
		        
		      </ul>
		    </div>
		  </nav>
		</div>

	</section>