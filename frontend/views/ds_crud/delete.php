<h3>
	<?php echo $labels['delete']; ?>
	<a class="btn btn-success btn-sm" href="<?php echo site_url("$module/create/"); ?>">
		<?php echo $labels['create_new_link']; ?>
	</a>
</h3>
<hr>

<?php
if( isset($dbaction) ){
	if( $dbaction=='delete' ){ ?>
		<div class="alert alert-success">
			Datos borrados exitosamente. <strong><a href="<?php echo site_url("$module"); ?>">Volver</a></strong>
		</div>
	<?php }else{ ?>
		<div class="alert alert-danger">
			Ha ocurrido un error. <strong><a href="<?php echo site_url("$module"); ?>">Volver</a></strong>
		</div>
	<?php }
}
?>
