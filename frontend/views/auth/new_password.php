<?php $this->load->view('header'); ?>
  <div class="container">

    <div class="row" style="margin-top:60px;">
      <div class="col-lg-4 col-lg-offset-4">

      	<?php if( $this->input->get('msj') == 'error-pass' ): ?>
			<em>Las contraseñas no coinciden, inténtelo nuevamente.</em>
		<?php endif; ?>

      	<?php if( $this->input->get('msj') == 'error-update' ): ?>
			<em>Ha ocurrido un error al intentar cambiar la contraseña, inténtelo nuevamente.</em>
		<?php endif; ?>

		<?php if( $this->input->get('key') ): ?>
			<?php echo form_open('login/reactivate'); ?>
	          <fieldset>
	            <legend>Restablecer contraseña</legend>

	            <input type="hidden" class="form-control" id="key" name="key" value="<?php echo $this->input->get('key'); ?>" >
	            <div class="form-group">
	              <label for="exampleInputPassword">Contraseña</label>
	              <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su contraseña">
	            </div>
	            <div class="form-group">
	              <label for="exampleInputPassword">Repetir Contraseña</label>
	              <input type="password" class="form-control" id="repass" name="repass" placeholder="Repita su contraseña">
	            </div>
	            <button type="submit" class="btn btn-default">Restablecer contraseña</button>
	            <a href="<?php echo site_url('login'); ?>" class="btn btn-link">Cancelar</a>
	          </fieldset>
	        </form>
		<?php endif; ?>

      </div>
    </div>

  </div>
<?php $this->load->view('footer'); ?>
