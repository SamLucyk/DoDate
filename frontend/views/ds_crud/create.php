<h3>
	<?php echo $labels['create']; ?>
	<a class="btn btn-success btn-sm" href="<?php echo site_url("$module/create/"); ?>">
		<?php echo $labels['create_new_link']; ?>
	</a>
</h3>
<hr>

<?php
if( isset($dbaction) ){
	if( $dbaction=='insert' ){ ?>
		<div class="alert alert-success">
			Creación exitosa. <strong><a href="<?php echo site_url("$module"); ?>">Volver</a></strong>
		</div>
	<?php }else{ ?>
		<div class="alert alert-danger">
			An error has ocurred.  <strong><a href="<?php echo site_url("$module"); ?>">Back</a></strong>
		</div>
	<?php }
}
?>

<form method="POST" role="form">
	<?php foreach ($fields['form_create'] as $key => $value): ?>
		<div class="form-group  col-sm-6">
			<label for="<?php echo $value['db_field'] ?>"><?php echo $value['label'] ?></label>
			<input name="fd[<?php echo $value['db_field'] ?>]" id="<?php echo $value['db_field'] ?>" class="form-control">
		</div>
	<?php endforeach; ?>

	<button type="submit" class="btn btn-default"><?php echo $labels['create_submit_button']; ?></button>
	<a class="btn btn-danger" href="<?php echo site_url("$module"); ?>"><?php echo $labels['create_cancel_button']; ?></a>
</form>
