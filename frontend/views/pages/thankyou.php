<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
<div class="main-wraper padd-40-40">
    <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 padd-0-40 center">
        <h2 class="padd-0-20">
            Thank you <?php echo $first; ?>!
        </h2>
        <p class="padd-0-40">
        We’re working on your date right now! Within an hour you’ll have your plan.<br>If you’re not into it – we’ll make it right.<br>If you like what you see - then we’ll go ahead and book.
        </p>
        <div class="col-md-12 center">
            <a href="<?php echo base_url()?>"><input  class="btn btn-info" style="font-size:25px" value="Home"></a>
        </div>
    </div>
    
</div>
<?php $this->load->view('footer'); ?>
