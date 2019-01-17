<?php $page_title = "Contact Us"?>

<?php require_once '../partials/header.php' ?>

<?php require_once '../partials/navbar.php' ?>

<main class="hero">
	<div class="hero-body">
		<div class="container">
	<div class="columns">
		<div class="column">
			<div class="contwrap">
			<h3 class="con_inf">Contact Information</h3>
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d663.0100718664783!2d121.0320877491258!3d14.63032976256963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b64b66d8994d%3A0x2456e5f6237e562f!2s11+Sct.+Tuason+St%2C+Diliman%2C+Quezon+City%2C+1103+Metro+Manila!5e0!3m2!1sen!2sph!4v1547733079096" allowfullscreen></iframe>
			<p>Avanzare Aurora Foundation</p>
			<p>11 Scout Tuazon Street</p>
			<p>Quezon City, Philippines</p>
			<p>aurorafoundationinc@gmail.com</p>
			<hr>
			<p>For donations, please use the bank information below and make it payable to:</p>
			<p>Avanze Aurora Foundation</p>
			<p>Bank: Philippine National Bank (PNB)</p>
			<p>Branch: Cebu</p>
			</div>
		</div>
		<div class="column">
			<h3 class="has-text-right">Feel free to contact us through the form below!</h3>
				<form>
					<div class="columns">
						<div class="control column">
							<input class="input" type="text" name="name" id="name" placeholder="Your Name">
						</div>
						<div class="control column">
							<input class="input" type="email" name="email" id="email" placeholder="Your Email">
						</div>
					</div>
					<div class="field">
						<div class="control">
							<input class="input" type="text" name="name" id="name" placeholder="Subject line (optional)">
						</div>
					</div>
					<div class="field">
						<div class="control">
							<textarea rows="9" placeholder="Your message" class="textarea has-fixed-size"></textarea>
						</div>
					</div>
					<div class="control has-text-centered">
						<button class="button is-white is-large">SUBMIT</button>
					</div>
				</form>
		</div>
	</div>
	</div>
	</div>
</main>

<?php require_once '../partials/footer.php' ?>