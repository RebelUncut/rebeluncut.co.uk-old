<?php 
	$title = "Contact";
	$keywords = "key1";
	include "partials/_header.php";
?>
<div class="page-title">
	<div class="wrapper">
		<h1>Contact Us</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officiis reiciendis ipsa.
		</p>
	</div>
</div>

<div class="contact">
	<div class="form match">
		<h2>Send a Message</h2>
		<form method="POST" action="//formspree.io/nat@rebeluncut.co.uk">
			<label for="email">Email Address</label>
			<input type="email" name="_replyto" id="email">
			<label for="message">Your Message</label>
			<textarea name="name" id="message" rows="5"></textarea>
			<input type="hidden" name="_next" value="/thanks">
			<input type="submit" value="Go">
		</form>
		<h3>Or give us a ring on <a href="tel:01212364588">01212364588</a></h3>
	</div>
	<div class="map match">
		<h2>Come &amp; Say Hi!</h2>
		<section>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.690562227114!2d-1.9045297999999866!3d52.484738199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc92a028dca9%3A0x8f6bed6b250d57d9!2sLudgate+House%2C+28D+Ludgate+Hill%2C+Birmingham%2C+West+Midlands+B3+1DX!5e0!3m2!1sen!2suk!4v1428565557257" frameborder="0" style="border:0"></iframe>
			<address>
				1st Floor, 
				Ludgate Hosue, 
				28D Ludgate Hill, 
				Birmingham, 
				B3 1DX
				Registered in England: 07608595
			</address>
		</section>
	</div>
</div>

<?php include "partials/_footer.php" ?>