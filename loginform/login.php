<!-- connect -->
<?php include'template/header.php' ?>

	<!-- start login-->
	<section class="login">
		<div class="inputForm">
			<form >
				<h2>Log in</h2>
				<div class="inputBox">
					<input type="text" required autocomplete="off">
					<span>Email</span>
				</div>
				<div class="inputBox">
					<input type="password" required autocomplete="off">
					<span>Password</span>
				</div>
				<div class="form-check">
  					<input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
  					<label class="form-check-label" for="flexCheckIndeterminate">
    					Remember me
  					</label>
				</div>
				<div class="inputBox">
					<button type="button" class="btn btn-info"><a href="../index.html">Log in</a></button>
					<button type="button" class="btn btn-warning"><a href="../form.html">Register</a></button>
				</div>
			</form>	
		</div>
	</section>
	<!-- finish login -->

<!-- connect -->
<?php include'template/footer.php' ?>