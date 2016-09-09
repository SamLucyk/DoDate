<h3>
	<?php echo $labels['update']; ?>
	<a class="btn btn-success btn-sm" href="<?php echo site_url("$module/create/"); ?>">
		<?php echo $labels['create_new_link']; ?>
	</a>
</h3>
<hr>

<?php
if( isset($dbaction) ){
	if( $dbaction=='update' ){ ?>
		<div class="alert alert-success">
			Successfully updated. <strong><a href="<?php echo site_url("$module"); ?>">Back</a></strong>
		</div>
	<?php }else{ ?>
		<div class="alert alert-danger">
			An error has ocurred.  <strong><a href="<?php echo site_url("$module"); ?>">Back</a></strong>
		</div>
	<?php }
}
?>

<form method="POST" role="form">
	<div class="row">
		<?php foreach ($fields['form_update'] as $key => $value): ?>
			<div class="form-group col-sm-6">
				<label for="<?php echo $value['db_field'] ?>"><?php echo $value['label'] ?></label>
				<input name="fd[<?php echo $value['db_field'] ?>]" id="<?php echo $value['db_field'] ?>" value="<?php echo $element->{$value['db_field']}; ?>" class="form-control">
			</div>
		<?php endforeach; ?>
	</div>

	<button type="submit" class="btn btn-default"><?php echo $labels['update_submit_button']; ?></button>
	<a class="btn btn-danger" href="<?php echo site_url("$module"); ?>"><?php echo $labels['update_cancel_button']; ?></a>
</form>
