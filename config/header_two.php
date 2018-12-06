<header>
		<?php include 'config.php'; 
		include 'dbh.inc.php';
				?>
			<a href=""><img id="logo" src="../img/logo.png"></a>
				<nav>
					<ul id="nav">
						<li>
							<div class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" >
								<a href="../pages/index.php">HOME</a>
							</div>
						</li>
						<li><div class="<?php echo ($current_page == 'contact.php' || $current_page == '') ? 'active' : NULL ?>" ><a href="../pages/contact.php">CONTACT</a></div></li>
						<li>
							<div class="<?php echo ($current_page == 'search.php') ? 'active' : NULL ?>">
								<a href="../pages/search.php">BROWSE BOOKS</a>
							</div>
						</li>
						<li>
							<div class="<?php echo ($current_page == 'library.php') ? 'active': NULL ?>"
								method='post' name='logout'>
								<a href="../pages/library.php">MY LIBRARY</a>
							</div>
						</li>
						<li>
							<div id="log_in">
								<a href="../config/logout.php">LOGOUT</a>
							</div>
						</li>
					</ul>
				</nav>
</header>