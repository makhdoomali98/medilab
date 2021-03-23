<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<html>
<body>
	<?php include '../../Helper/ViewHelper.php';
	$temp = new ViewHelperModel();
		$data=$temp->get_bank_users_data();
		$tran=$temp->get_all_transactions_data();
		?>
	<div class="conatiner-fluid" style="padding: 50px">
		
		<h1 class="text-center">Bank Dashboard</h1>
		<div class= "table-1">
			<h1>Users</h1>
			<table class= "table">
				<thead class="text-center">
					<tr>
						<td>ID</td>
						<td>User-ID</td>
						<td>Name</td>
						<td>Email</td>
						<td>Password</td>
						<td>Account Number</td>
						<td>Token number</td>
						<td>Card Number</td>
						<td>Expire Date</td>
						<td>CVV Number</td>
					</tr>
				</thead>
				<tbody class="text-center">
					
				</tbody>
				<tfoot class="text-center">
					<?php if (isset($data)) {
                  while ($dataa = mysqli_fetch_assoc($data)) {
                 ?>
					<tr>
						<td><?php echo $dataa['id']?></td>
						<td><?php echo $dataa['user_id']?></td>
						<td><?php echo $dataa['name']?></td>
						<td><?php echo $dataa['email']?></td>
						<td><?php echo $dataa['password']?></td>
						<td><?php echo $dataa['account_number']?></td>
						<td><?php echo $dataa['token_number']?></td>
						<td><?php echo $dataa['card_number']?></td>
						<td><?php echo $dataa['expire_date']?></td>
						<td><?php echo $dataa['cvv_number']?></td>
					</tr>
					<?php
                           } } ?>
				</tfoot>
			</table>
		</div>
		<br>
		<div class= "table-2">
			<h1>Transactions</h1>
			<table class= "table">
				<thead class="text-center">
					<tr>
						<td>ID</td>
						<td>Sender User-ID</td>
						<td>Name</td>
						<td>Email</td>
						<td>Sender Token Number</td>
						<td>Sender Card Number</td>
						<td>Sender CVC Number</td>
						<td>Reciever Token Number</td>
						<td>Transaction Amount</td>
						<td>Transaction Date</td>
					</tr>
				</thead>
				<tbody class="text-center">
					
				</tbody>
				<tfoot class="text-center">
					<?php if (isset($tran)) {
                  while ($trans = mysqli_fetch_assoc($tran)) {
                 ?>
					<tr>
						<td><?php echo $trans['id']?></td>
						<td><?php echo $trans['sender_user_id']?></td>
						<td><?php echo $trans['name']?></td>
						<td><?php echo $trans['email']?></td>
						<td><?php echo $trans['sender_token_number']?></td>
						<td><?php echo $trans['sender_card_number']?></td>
						<td><?php echo $trans['sender_cvv_number']?></td>
						<td><?php echo $trans['reciever_token_number']?></td>
						<td><?php echo $trans['transaction_amount']?></td>
						<td><?php echo $trans['transaction_date']?></td>
					</tr>
					<?php
                           } } ?>
				</tfoot>
			</table>
		</div>
	</div>
</body>
</html>