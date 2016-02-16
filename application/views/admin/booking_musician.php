
				<div class="row">
				   <?php  if ($query->num_rows() > 0):?>
				      <?php  foreach ($query->result() as $row):?>
							<div class="col-md-2">
								<label class="musician-label">
									<img src="/uploads/profile/<?php echo $row->image?>" alt="" /><br>
									<?php echo $row->m_name?>
									<input type="radio" name="musician" id="musician" value="<?php echo $row->m_id?>" <?php if ($m_id == $row->m_id) echo "checked"?>/>
								</label>
							</div>
						<?php endforeach;?>
					<?php endif?>
					
				</div>
				<input type="hidden" name="musician_booking" id="musician_booking" value="<?php echo $booking_id?>">
			