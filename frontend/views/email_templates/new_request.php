<?php $this->load->view('email_templates/email_header'); ?>
<table border="0" style="max-width: 600px; width:100%; margin-left:50px; margin-right:auto; color:#333;">
    <tr>
        <td>
            <div style="font-size: 16px; line-height: 24px;">
            <p style="margin-top:0px">
                <b>Name: </b><?php echo $first . " " . $last;?><br>
                <b>Email: </b><?php echo $email;?><br>
                <b>Who are you with?: </b><?php echo $who;?><br>
                <b>What do you want to do?: </b><?php echo $what;?><br>
                <b>When is your date?: </b><?php echo $date;?><br>
                <b>Price Range: </b><?php echo $price;?><br>
                
                <?php if (isset($time)){?>
                <b>Time of day?: </b><br>  
                    <?php 
                        $last = end($time);
                        foreach ($time as $value) { 
                        echo $value; 
                        if (!($value == $last)){?> -- 
                    <?php }} ?><br>
                <?php } ?>
                
                <?php if (isset($location)){?>
                <b>Do you have a neighbor hood preference?: </b><br>  
                    <?php 
                        $last = end($location);
                        foreach ($location as $value) { 
                        echo $value; 
                        if (!($value == $last)){?> -- 
                    <?php }} ?><br>
                <?php } ?>
                
                <?php if (isset($dinner)){?>
                <b>What type of eats are you looking for?: </b><br>  
                    <?php
                        $last = end($dinner);
                        foreach ($dinner as $value) { 
                        echo $value; 
                        if (!($value == $last)){?> -- 
                    <?php }} ?><br>
                <?php } ?>
                
            </p>
            </div>
        </td>
        </tr>
</table>
<?php $this->load->view('email_templates/email_footer'); ?>
