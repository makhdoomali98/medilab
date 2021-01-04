<?php
$title='stripe';
// include '../../includes/header.php';
require_once('./config.php'); ?>
<div class="container">
<form action="charge.php" method="post">
	 <label for="data-amount">Price:</label>
  <input type="number" id="price" min="1" name="price"><br><br>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $stripe['publishable_key']; ?>" data-description="Access for a year" data-amount="" data-locale="auto"></script>
</form>
<!-- <?php include '../../includes/footer.php' ?> -->