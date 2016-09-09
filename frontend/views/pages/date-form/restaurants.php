<!--If Dinner + Drinks or Drinks -->
<div class="col-md-12" id="drinks" style="display:none;">
    <h4>What are your thoughts on...</h4>
    <?php 
    $options = ["Restaurants with no reservations (I want time to talk)","Wine and Wine Bars", "Craft Beers", "Craft Cocktails", "Champagne", "Bars With a Speakeasy Feel", "Dive Bars"];
    $i = 1;
    foreach($options as $option){ 
    ?>
    <div class="form-group">
        <label for="sel1">
            <?php echo $option; ?>
        </label>
        <select onchange="select(this)" class="pointer form-control" name="<?php echo "option".$i ?>" style="color:#bfbfbf;">
            <option value="none">-- Select one --</option>
            <option value="1">I'm into it!</option>
            <option value="2">No no, I'm not down with that.</option>
            <option value="3">I'm indifferent</option>
        </select>
    </div>
    <?php 
    $i += 1;} 
    ?>
</div> 