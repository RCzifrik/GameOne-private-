<?php include_once ('defaults/head.php'); ?>
<html>
	<body>
		<?php include_once('./defaults/header.php'); include_once('./defaults/nav.php'); ?>
		<div class="aa container-fluid d-flex justify-content-center flex-grow-1 align-items-center flex-column">
			<form action="POST" class="d-flex flex-column gap-3 p-5 bg-light mb-0 rounded">
				<input type="text" name="first_name" id="first-name" placeholder="First name" class="ab">
				<input type="text" name="last_name" id="last-name" placeholder="Last name" class="ab">
				<input type="text" name="username" id="username" placeholder="Username" class="ab">
				<input type="password" name="password" id="password" placeholder="Password" class="ab">
				<div class="d-flex flex-column gap-1">
					<a href="#" class="ac">Forgot password?</a>
					<button type="submit" class="ad btn btn-dark">Register</button>
				</div>
			</form>
		</div>
		<?php include_once('./defaults/footer.php');?>
	</body>
</html>