<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
<div>
    <div class="main-wraper padd-20-40">
    <div class="white-text col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 padd-0-40">
        <?php $this->load->view('pages/front/about'); ?>
    </div>
    </div>
    
    <div id='date-form' style="display:none;">
        <?php $this->load->view('pages/date-form'); ?>
    </div>
    
</div>
</div>

<script>
    function display_form() {
        var form = document.getElementById("date-form");   
        form.style.display = ""; 
        var btn = document.getElementById('form-btn');
        btn.style.display = "none";
        var header = document.getElementById('header');
        $('html, body').animate({
        scrollTop: $("#form1").offset().top - 20
    }, 1000);
    }
</script>
<?php $this->load->view('footer'); ?>