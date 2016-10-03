<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
<div>
    <div class="main-wraper padd-20-40">
    <div id="about" class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 padd-0-40" style="display:none;">
        <?php $this->load->view('pages/front/about'); ?>
    </div>
    </div>
    
    <div class="white-text" id='date-form' style="display:none;">
        <?php $this->load->view('pages/date-form'); ?>
    </div>
    
</div>

<script>
    function display_form() {
        var content = document.getElementById("content");   
        content.style.display = ""; 
        var form = document.getElementById("date-form");   
        form.style.display = ""; 
        var about = document.getElementById("about");   
        about.style.display = "none"; 
        var this_btn = document.getElementById('form-btn');
        this_btn.classList = "button button-selected";
        var other_btn = document.getElementById('about-btn');
        other_btn.classList = "button button-info";
        var header = document.getElementById('header');
        $('html, body').animate({
        scrollTop: $("#form1").offset().top - 20
    }, 1000);
    }
    function display_about() {
        var content = document.getElementById("content");   
        content.style.display = ""; 
        var form = document.getElementById("date-form");   
        form.style.display = "none"; 
        var about = document.getElementById("about");   
        about.style.display = ""; 
        var this_btn = document.getElementById('about-btn');
        this_btn.classList = "button button-selected";
        var other_btn = document.getElementById('form-btn');
        other_btn.classList = "button button-info";
        var header = document.getElementById('header');
        $('html, body').animate({
        scrollTop: $("#about").offset().top - 20
    }, 1000);
    }
</script>
<?php $this->load->view('footer'); ?>