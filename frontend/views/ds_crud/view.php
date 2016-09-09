<h3>
	<?php echo $labels['view']; ?>
	<a class="btn btn-success btn-sm" href="<?php echo site_url("$module/create/"); ?>">
		<?php echo $labels['create_new_link']; ?>
	</a>
</h3>
<hr>

<div class="row">

	<?php foreach ($fields['view_grid'] as $key => $value): ?>
		<div class="col-sm-6">
			<label for="<?php echo $value['db_field'] ?>"><?php echo $value['label'] ?></label>
			<p id="<?php echo $value['db_field'] ?>"><?php echo $element->{$value['db_field']}; ?></p>
		</div>
	<?php endforeach; ?>

	<div class="col-sm-12">
		<a class="btn btn-danger" href="<?php echo site_url("$module"); ?>"><?php echo $labels['view_cancel_button']; ?></a>
	</div>
</form>
