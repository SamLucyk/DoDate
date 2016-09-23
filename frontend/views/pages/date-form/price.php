<div class="col-md-12">
    <h4>Price Range</h4>
    <div class="form-group">
        <select onchange="select(this)" name="price" class="form-control pointer" id="price" style="color:#bfbfbf;">
            <?php
            $list = ["-- Select one --",
                    "Affordable (budget under $50/person)",
                    "Keep it Classy (budget under $100/person)",
                    "Break the Bank (budget over $100/person)"];
            foreach ($list as $value) { ?>
            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
        <?php } ?>
        </select>
    </div>
</div>