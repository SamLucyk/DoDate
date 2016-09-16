<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
<div class="main-wraper padd-20-40">
    <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 padd-0-40">
        <div class="col-sm-10 col-sm-offset-1 col-xs-12 padd-0-20">
            <h2 class="center padd-0-20">
                About Us
            </h2>
            <p>
               DoDate is a date-planning service – we take the guesswork out of planning the ideal date. Whether you’re swiping right, wining and dining your soulmate, stuck answering, “so what should we do tonight,” or anything in between, we’ve got you covered.
            </p>
            <p>
                We simplify the dating game by planning and reserving everything on your behalf. You tell us what you want on any given day, and we take care of the rest. Fear not, friends, DoDate has arrived. 
            </p>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-xs-12 padd-0-40">
            <h2 class="center padd-0-20">
                How This Works
            </h2>
           <ul>
              <li><p>It’s free.</p></li>
              <li><p>We’re going to ask you a few questions about what you want to do – based on your answers we’ll plan your date.</p></li>
              <li><p>You’ll receive your date plan by email, and we’ll get your OK before booking anything.</p></li>
              <li><p>If <i>exactly</i> what you want is not available, we’re going to give you the next best thing. We’re pretty choosy about our bars, restaurants and activities, so rather than send you somewhere that isn’t up to snuff, we’ll make some adjustments based on the questions you’ve answered.</p></li>
            </ul>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-xs-12 padd-0-40">
            <p>
            Right now we’re keeping our services to below 14th Street in Manhattan.  We’re working on the rest of Manhattan and the outer boroughs in our quest for world domination, and an app, so stay tuned for updates!
            </p>
        </div>
        <div id="form-btn" class="padd-0-220 col-md-12 center">
            <a onclick="display_form()"><input  class="btn btn-info" style="font-size:25px" value="Let's Get Planning!"></a>
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
        scrollTop: $("#form1").offset().top - 20
    }, 1000);
    }
</script>
<?php $this->load->view('footer'); ?>