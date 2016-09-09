<?php $this->load->view('header'); ?>

    <!-- INNER-BANNER -->
    <div class="inner-banner style-6" style="min-height:350px;">

        <img class="center-image" src="<?php echo base_url(); ?>img/content/about_us.jpg" alt="">
        <div class="tour-layer delay-1" style="opacity:.4;"></div>

        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2" style="padding-top:100px;">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><span>ERROR 404</span></li>
                        </ul>
                        <h2 class="color-white">NOT FOUND</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- DETAIL WRAPPER -->
    <div class="main-wraper padd-70-70">
        <div class="container">

            <div class="second-title">
                <h2>OOPS!</h2>
            </div>

  			<div class="row">
  				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <p class="lead text-center">The page that you are trying to visit does not exist.</p>
                    <p class="lead text-center">Please visit our <a href="<?php echo site_url(); ?>">homepage</a> to book your next tour!</p>
  				</div>
  			</div>

  		</div>
  	</div>

    <?php //$this->load->view('front/cta_support.php'); ?>

<?php $this->load->view('footer'); ?>
