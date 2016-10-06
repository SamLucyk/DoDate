<!--If Dinner + Drinks or Drinks -->
<div class="col-md-12" id="drinks" style="display:none;">
    <h4>What are your thoughts on...</h4>
    <?php 
    $options = ["Restaurants that do not accept reservations (meaning you may have to wait, but we’ll let you know good ways to pass the time)",
                "Restaurants that are currently a hot ticket (meaning we can get you in, but it might be a weird time)",
                "Places we like to call “cozy” (meaning it’s small, but also an awesome date vibe)",
                "Any establishment that could be described as “lively”",
                "Wine and Wine Bars", 
                "Craft Beers", 
                "Craft Cocktails", 
                "Champagne", 
                "Bars With a Speakeasy Feel", 
                "Dive Bars"];
    $i = 0;
    foreach($options as $option){ 
    ?>
    <div class="form-group">
        <label for="sel1">
            <?php echo $option; ?>
        </label>
        <select onchange="select(this)" class="pointer form-control" name="resturant[<?php echo $i ?>]" style="color:#bfbfbf;">
            <option value="none">-- Select one --</option>
            <option value="I'm into it!">I'm into it!</option>
            <option value="No no, I'm not down with that">No no, I'm not down with that.</option>
            <option value="I'm indifferent">I'm indifferent</option>
        </select>
    </div>
    <?php 
        $i += 1;
    } 
    ?>
</div> 