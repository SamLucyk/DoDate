<!--If Dinner + Drinks -->
<div class="col-md-12" id="dinner" style="display:none;">
    <h4>What type of eats are you looking for?</h4>
    <div class="col-md-10 left">
        <?php 
        $count = -1;
        $dinner_list = [
            "Suprise me!",
            "American",
            "Asian",
            "French",
            "Indian",
            "Italian",
            "Japanese",
            "Latin",
            "Mediterranean",
            "Mexican",
            "Seafood",
            "Small plates of any persuasion",
            "Thai",
            "Vietnamese"
        ];
        foreach ($dinner_list as $value) { 
            $count += 1; ?>
            <input name="dinner[<?php echo strval($count); ?>]" type="checkbox" id="cb<?php echo strval($count); ?>" class="css-checkbox med" value="<?php echo $value; ?>"/>
            <label for="cb<?php echo strval($count); ?>" class="css-label med elegant" ><?php echo $value; ?></label><br>
        <?php } ?>
    </div>
</div>