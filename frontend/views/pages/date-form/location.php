<div class="col-md-12" id="neighborhood">
    <h4>Do you have a neighborhood preference?</h4>
    <div class="left">
        <?php 
        $count = -1;
        $list = [
            "East Village",
            "Financial District / Seaport",
            "Greenwich Village / Noho",
            "Lower East Side / Chinatown",
            "Soho / Nolita",
            "Tribeca",
            "West Village"
        ];
        foreach ($list as $value) { 
            $count += 1; ?>
            <input name="location[<?php echo strval($count); ?>]" type="checkbox" id="cc<?php echo strval($count); ?>" class="css-checkbox med" value="<?php echo $value; ?>"/>
            <label for="cc<?php echo strval($count); ?>" class="css-label med elegant" ><?php echo $value; ?></label><br>
        <?php } ?>
    </div>
</div>