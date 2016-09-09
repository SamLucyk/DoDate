<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
<div class="main-wraper padd-40-40">
    <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 padd-0-40 center">
        Who are you with: <?php echo $who; ?><br>
        What do you want: <?php echo $what; ?>
        <h3 class="padd-0-40">
            Thank you <?php echo $first; ?>! We will email you soon at <?php echo $email; ?> with your perfect date!
        </h3>
        <div class="col-md-12 center">
            <a href="<?php echo base_url()?>"><input  class="btn btn-info" style="font-size:25px" value="Home"></a>
        </div>
    </div>
    
</div>
<?php $this->load->view('footer'); ?>
