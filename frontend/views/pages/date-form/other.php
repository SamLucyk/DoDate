<div class="col-md-12 padd-0-40" id="rest" style="display:none;">
    <h4>Check all that interest you!</h4>
    <div class="col-md-8 left">
        <?php 
        $count = -1;
        $list = [
            "Movie",
            "Bowling",
            "Spoting event",
            "Museum",
            "Arts",
            "Anything outdoors",
            "I'm down for the get down, I'll do whatever you say, my date-planning guru"
        ];
        foreach ($list as $value) { 
            $count += 1; ?>
            <input name="other[<?php echo strval($count); ?>]" type="checkbox" id="ca<?php echo strval($count); ?>" class="css-checkbox med" value="<?php echo $value; ?>"/>
            <label for="ca<?php echo strval($count); ?>" class="css-label med elegant" ><?php echo $value; ?></label><br>
        <?php } ?>
    </div>
</div>