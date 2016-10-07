<?php $this->load->view('head'); ?>

<div class="banner" style="background:url('<?php echo base_url(); ?>/img/banner.jpg'); ">
    <div class="title-sm">
        <div class="row">
            <img src='<?php echo base_url(); ?>img/logo.png' class="logo-sm">
            <div class="main-wraper padd-40-40">
                <div class="transbox-b col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 center">
                    <h1>
                        Thank you <?php echo $first; ?>!
                    </h1>
                    <p>
                        We’re working on your date right now! We'll email you soon with the plan.<br>If you’re not into it – we’ll make it right.<br>If you like what you see - then we’ll go ahead and book.
                    </p>
                </div>
                    <div class="col-md-12 center padd-20-0">
                        <a href="<?php echo base_url()?>">
                            <input  class="button btn-info" style="font-size:25px" value="Home">
                        </a>
                    </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('footer'); ?>
