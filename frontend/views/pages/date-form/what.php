<div class="col-md-12">
<h4>What do you want to do?</h4>
<div class="form-group">
    <select onchange="whatSelect()" class="form-control pointer" name="what" id="what" style="color:#bfbfbf;">
        <?php 
        $list = array(
            "-- Select one --" => 'none',
            "Drink only" => 'drinks',
            "Dinner, maybe some drinks after." => 'dinner',
            "Try to find me something other than Dinner + Drinks" => 'rest'
        );
        foreach ($list as $key => $value) { ?>
            <option value="<?php echo $value; ?>"><?php echo $key; ?></option>
        <?php } ?>
        
    </select>
</div>
</div>