<div class="bbh-form-wrapper">
	<form action="<?php echo $data->url . $data->customer . '?lang=' . $data->locale; ?>" method="post" class="bbh-form-container">
		<div class="bbh-form-item bbh-arrive">
			<input type="text" id="arrive" name="arrive" class="bbh-date-input" required placeholder="<?php _e("Arrival", "bebetterhotels"); ?>">
			<?php echo bbh_generate_sels_date("check_in_day", "check_in_month"); ?>
		</div>

		<div class="bbh-form-item bbh-depart">
			<input type="text" id="depart" name="depart" class="bbh-date-input" required placeholder="<?php _e("Departure", "bebetterhotels"); ?>">
			<?php echo bbh_generate_sels_date("check_out_day", "check_out_month"); ?>
		</div>

		<div class="bbh-form-item bbh-adults">
			<select id="adults" name="cmb_adults" class="bbh-select" <?php echo $data->adults_field?>>
				<?php echo bbh_dropdown_numeric_options("Adults", 1, 10); ?>
			</select>
		</div>

		<?php if ($data->show_childrens === "yes"): ?>
			<div class="bbh-form-item bbh-childrens">
				<select id="children" name="cmb_children" class="bbh-select" <?php echo $data->childrens_field?>>
					<?php echo bbh_dropdown_numeric_options("Childrens", 0, 9); ?>
				</select>
			</div>
		<?php endif ?>

		<div class="bbh-form-item bbh-book-btn">
			<button type="submit" name="btn_next" class="bbh-button"
				style="border-color:<?=$data->button_border_color;?>;background-color:<?=$data->button_background_color;?>;color:<?=$data->button_text_color;?>">
				<?php _e("Book Now", "bebetterhotels"); ?>
			</button>
		</div>
	</form>
</div>