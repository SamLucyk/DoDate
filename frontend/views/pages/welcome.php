<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
<div class="main-wraper padd-40-40">
    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 padd-0-40 center">
        <h4 class="padd-0-40">
            About us: We are on online dating advice platform for the newyork Area. Fill out our form and we will set you up with the perfect date for you and who ever you are with!
        </h4>
        <div id="form-btn" class="padd-0-220 col-md-12 center">
            <a onclick="display_form()"><input  class="btn btn-info" style="font-size:25px" value="To Form"></a>
        </div>
    </div>
</div>

<div id='date-form' style="display:none;">
    <?php $this->load->view('pages/date-form'); ?>
</div>
<script>
    function display_form() {
        var form = document.getElementById("date-form");   
        form.style.display = ""; 
        var btn = document.getElementById('form-btn');
        btn.style.display = "none";
        $('html, body').animate({
        scrollTop: $("#form1").offset().top
    }, 1000);
    }
</script>
<?php $this->load->view('footer'); ?>