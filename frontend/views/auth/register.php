<?php $this->load->view('header'); ?>
  <div class="container">

    <div class="row" style="margin-top:60px;">
      <div class="col-lg-4 col-lg-offset-4">

      	<?php if( $this->input->get('msj') == 'sent' ): ?>
			<em>Hemos enviado un enlace de activación a su dirección de correo.</em>
		<?php endif; ?>

      	<?php if( $this->input->get('msj') == 'error' ): ?>
			<em>Ha ocurrido un error al intentar completar el registro, inténtelo nuevamente.</em>
		<?php endif; ?>

		<?php if( $this->input->get('msj') != 'sent' ): ?>
            <form action="<?php echo site_url('login/validate_register'); ?>" method="GET">
	          <fieldset>
	            <legend>Registro</legend>
	            <div class="form-group">
	              <label for="exampleInputEmail">Email</label>
	              <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su email">
	            </div>
                <div class="form-group">
	              <label>RUT</label>
	              <input type="text" class="form-control" id="rut" name="rut" placeholder="XX.XXX.XXX-X">
	            </div>
	            <div class="form-group">
	              <label for="exampleInputPassword">Contraseña</label>
	              <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su contraseña">
	            </div>
	            <div class="form-group">
	              <label for="exampleInputPassword">Repetir Contraseña</label>
	              <input type="password" class="form-control" id="repass" name="repass" placeholder="Repita su contraseña">
	            </div>
	            <button type="submit" class="btn btn-success">Registarme</button>
	            <a href="<?php echo site_url('login'); ?>" class="btn btn-link">Ingresar</a>
	          </fieldset>
	        </form>
		<?php endif; ?>

      </div>
    </div>

  </div>
<?php $this->load->view('footer'); ?>
