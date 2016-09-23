<div class="col-md-12">
    <h4>Times of day?</h4>
    <div class="form-group">
        <div class="col-md-12 left">
            <?php 
            $count = -1;
            $list = [
                "Daytime date",
                "Late night date",
                "Evening date",
                "Please just choose for me!"
            ];
            foreach ($list as $value) { 
                $count += 1; ?>
                <input name="time[<?php echo strval($count); ?>]" type="checkbox" id="cd<?php echo strval($count); ?>" class="css-checkbox med" value="<?php echo $value; ?>"/>
                <label for="cd<?php echo strval($count); ?>" class="css-label med elegant" ><?php echo $value; ?></label><br>
        <?php } ?>
        </div>
    </div>
</div>