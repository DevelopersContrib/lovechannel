<table class="table table-striped table-bordered">
	<tbody>
		<tr>
			<td>
				<strong>
					Booking ID
				</strong>
			</td>
			<td>
				<?php echo $query->row()->booking_id?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Package
				</strong>
			</td>
			<td>
				<?php echo $query->row()->service_name?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Customer Name
				</strong>
			</td>
			<td>
				<?php echo $query->row()->customer_name?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Event Date
				</strong>
			</td>
			<td>
				<?php echo $query->row()->event_date?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Occasion
				</strong>
			</td>
			<td>
				<?php echo $query->row()->occasion?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Customer Email
				</strong>
			</td>
			<td>
				<?php echo $query->row()->customer_email?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Customer Phone
				</strong>
			</td>
			<td>
				<?php echo $query->row()->customer_phone?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Receiver Name
				</strong>
			</td>
			<td>
				<?php echo $query->row()->receiver_name?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Receiver Email
				</strong>
			</td>
			<td>
				<?php echo $query->row()->receiver_email?>
			</td>
		</tr>
		<?php if ($query->row()->service_id == 1):?>
		<tr>
			<td>
				<strong>
					Online Serenade Type
				</strong>
			</td>
			<td>
				<?php echo $query->row()->online_serenade_type?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Receiver messenger
				</strong>
			</td>
			<td>
				<?php echo $query->row()->receiver_messenger?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Receiver messenger username
				</strong>
			</td>
			<td>
				<?php echo $query->row()->receiver_messenger_username?>
			</td>
		</tr>
		<?php endif?>
		<tr>
			<td>
				<strong>
					Receiver Country
				</strong>
			</td>
			<td>
				<?php echo $query->row()->country_name?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Receiver Address
				</strong>
			</td>
			<td>
				<?php echo $query->row()->address?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Songs
				</strong>
			</td>
			<td>
				<?php echo stripcslashes($query->row()->songs)?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Add Ons
				</strong>
			</td>
			<td>
				<?php 
				if ($query->row()->add_ons != ""){
					$aquery = $this->db->query("Select * from service_add_ons where add_on_id IN (".$query->row()->add_ons.")");
				    if ($aquery->num_rows() > 0){
					 	  foreach ($aquery->result() as $arow){
					 	  	 echo $arow->item_name."<br>";
					 	  }
					 }
				}
				  
				?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Special Message
				</strong>
			</td>
			<td>
				<?php echo stripcslashes($query->row()->special_message)?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Accomplice Name
				</strong>
			</td>
			<td>
				<?php echo stripcslashes($query->row()->accomplice_name)?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Accomplice Phone
				</strong>
			</td>
			<td>
				<?php echo stripcslashes($query->row()->accomplice_phone)?>
			</td>
		</tr>
		<tr>
			<td>
				<strong>
					Total
				</strong>
			</td>
			<td>
				<?php echo number_format($query->row()->total)?>
			</td>
		</tr>
	</tbody>
</table>