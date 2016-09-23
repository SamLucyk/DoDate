<div class="col-md-12" id="neighborhood">
    <h4>Do you have a neighbor hood preference?</h4>
    <div class="col-md-10 left">
        <?php 
        $count = -1;
        $list = [
            "Anywhere in downtown Manhattan",
            "East Village",
            "Financial District",
            "Lower East Side",
            "Meatpacking",
            "Soho/ Nolita",
            "West Village",
            "Greenwich Village",
            "Noho"
        ];
        foreach ($list as $value) { 
            $count += 1; ?>
            <input name="location[<?php echo strval($count); ?>]" type="checkbox" id="cc<?php echo strval($count); ?>" class="css-checkbox med" value="<?php echo $value; ?>"/>
            <label for="cc<?php echo strval($count); ?>" class="css-label med elegant" ><?php echo $value; ?></label><br>
        <?php } ?>
    </div>
</div>