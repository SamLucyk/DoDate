<div id="form1" class="form col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 padd-0-20">
    <form action="thankyou" method="post">
        <div class="" style="background:url('<?php echo base_url(); ?>/img/nyc.jpg') no-repeat right top; background-position-y:30%; background-attachment: fixed;">
            <div class="padd-30 transbox-b">
                <div class="row">
                    <?php $this->load->view('pages/date-form/name'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/email'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/who'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/what'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/price'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/date'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/time'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/location'); ?>
                </div>
                <div class="row ">
                    <?php $this->load->view('pages/date-form/restaurants'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/food'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/other'); ?>
                </div>
                <div class="row">
                    <?php $this->load->view('pages/date-form/important'); ?>
                </div>
                <div class="center padd-40-20">
                    <input type="submit" class="button button-info" style="font-size:25px" value="Submit">
                </div>
            </div>
        </div>
    </form>
        
    
</div>