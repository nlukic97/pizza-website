<?php
require "partials/header.php"
?>


<!-- page content -->
<section class="container">

	<h1 class="page-title">Reserve a table</h1>
	<div id="chef"></div>
	<h2 class="page-title" id="reserve-h2">Reservation form</h2>

	<form action="/action_page.php" method="get" id="reserve-form">
		<input type="text" placeholder="Name and Surname">
		<input type="text" placeholder="E-mail">
		<input type="date">
		<input type="number" placeholder="No. of Persons">
		<input type="text" placeholder="Smoking Area">
		<input type="text" placeholder="Additional information/ requests" id="extra-info">
		<input type="submit" value="Submit" id="form-submit">
	</form>

	<p id="all-reservations">*All reservations shall be confirmed via e-mail. Table availibility may vary.</p>
</section>

<!-- Footer -->
<?php
require "partials/footer.php"
?>