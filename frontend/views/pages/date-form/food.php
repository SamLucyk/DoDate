<!--If Dinner + Drinks -->
<div class="col-md-12" id="dinner" style="display:none;">
    <h4>What type of eats are you looking for?</h4>
    <ul class="left">
        <?php 
        $count = -1;
        $dinner_list = [
            "Suprise me!",
            "American",
            "East Asian - [Chinese; Japanese; Korean]",
            "French",
            "Indian",
            "Italian",
            "Latin - [Mexican; Cuban; Caribbean]",
            "Mediterranean",
            "Seafood",
            "Small plates of any persuasion",
            "Southeast Asian - [Thai; Vietnamese]",
            "Southern eats"
        ];
        foreach ($dinner_list as $value) { 
            $count += 1; ?>
            <li>
                <input name="dinner[<?php echo strval($count); ?>]" type="checkbox" id="cb<?php echo strval($count); ?>" class="css-checkbox med" value="<?php echo $value; ?>"/>
                <label for="cb<?php echo strval($count); ?>" class="css-label med elegant" ><?php echo $value; ?></label>
            </li>
        <?php } ?>
    </ul>
</div>