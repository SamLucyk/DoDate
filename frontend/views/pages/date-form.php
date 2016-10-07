<div id="form1">
    <form action="thankyou" method="post">
        <div class="padd-30 padd-0-20 transbox-b col-sm-10 col-sm-offset-1 col-xs-12">
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
            <div class="col-md-12 center">
                <input type="submit" class="button button-info" style="padding-left: 15px;
    padding-right: 15px;" value="Submit">
            </div>
        </div>
    </form>
        
    
</div>