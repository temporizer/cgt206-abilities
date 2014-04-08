<?php include_once "includes/header.inc.php"; ?>

		<section id="content">
			<?php 
				// login("nate","nopassword");

				if (loggedIn()) {
					?>
						<h1>Hello, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></h1>
						<h2>Your email address is <?php echo $_SESSION['email']; ?></h2>

					<?php
					echo '<button><a href="logout.php">Logout</a></button>';
				} else {
					?>
					<form action="login.php" method="POST">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<button type="submit">Log In!</button>
					</form>
					<?php
				}

			 ?>
		</section>

<?php include "includes/footer.inc.php"; ?>