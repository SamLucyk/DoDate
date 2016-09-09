<div id="form1" class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 padd-0-40">
        <form action="thankyou" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="first" title="First" style="color:#bfbfbf; font-variant: none;" 
                    value="First" onfocus="inputFocus(this)" onblur="inputBlur(this)">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="last" title="Last" style="color:#bfbfbf; font-variant: none;" 
                    value="Last" onfocus="inputFocus(this)" onblur="inputBlur(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" title="Email" style="color:#bfbfbf; font-variant: none;" 
                    value="Email Address" onfocus="inputFocus(this)" onblur="inputBlur(this)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Who are you with?</h4>
                        <div class="form-group">
                            <select onchange="whoSelect()" class="form-control pointer" name="who" id="who" style="color:#bfbfbf;">
                                <option value="none">-- Select one --</option>
                                <option>Flying Solo</option>
                                <option>A date, and it's a new thing, so make me loog good.</option>
                                <option>A date, but not the first one.</option>
                                <option>A longtime partner, please save me from another night of "so what should we do this weekend"</option>
                                <option>I'm not into labels, don't make this weird.</option>
                                <option>A friend.</option>
                                <option>A large group of friends (6 or more)</option>
                            </select>
                        </div>
                </div>
                <div class="col-md-6">
                    <h4>What do you want to do?</h4>
                    <div class="form-group">
                        <select onchange="whatSelect()" class="form-control pointer" name="what" id="what" style="color:#bfbfbf;">
                            <option value="none">-- Select one --</option>
                            <option value="drinks">Drink only</option>
                            <option value="dinner">Dinner, maybe some drinks after.</option>
                            <option value="rest">Try to find me something other than dinner + drinks</option>
                        </select>
                    </div>
                </div>
            </div>
            <!--Price-->
            <div class="row">
                <div class="col-md-3">
                    <h4>Price Range</h4>
                    <div class="form-group">
                        <select onchange="select(this)" class="form-control pointer" id="price" style="color:#bfbfbf;">
                            <option value="none">-- Select one --</option>
                            <option value="affordable">Affordable (budget under $50/person)</option>
                            <option value="classy">Keep it Classy (budget under $100/person)</option>
                            <option value="bank">Break the Bank (budget over $100/person)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>When is your date?</h4>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Times of day?</h4>
                    <div class="form-group">
                        <div class="col-md-12 left">
                            <input type="checkbox" id="cd1" class="css-checkbox med"/>
                            <label for="cd1" class="css-label med elegant">Daytime date   </label>
                            <input type="checkbox" id="cd2" class="css-checkbox med"/>
                            <label for="cd3" class="css-label med elegant">Late night date   </label><br>
                            <input type="checkbox" id="cd3" class="css-checkbox med"/>
                            <label for="cd2" class="css-label med elegant">Evening date</label>
                            <input type="checkbox" id="cd4" class="css-checkbox med"/>
                            <label for="cd4" class="css-label med elegant">Please just choose for me!</label>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Price-->
            <!--If Dinner + Drinks or Drinks -->
            <div class="col-md-6" id="drinks" style="display:none;">
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
            <!--End Dinner + Drinks or Drinks -->
            <!--If Dinner + Drinks -->
            <div class="col-md-6" id="dinner" style="display:none;">
                <h4>What type of eats are you looking for?</h4>
                <div class="col-md-10 left">
                    <input type="checkbox" id="cb1" class="css-checkbox med"/>
                    <label for="cb1" class="css-label med elegant">Suprise me!</label><br>
                    <input type="checkbox" id="cb2" class="css-checkbox med"/>
                    <label for="cb2" class="css-label med elegant">American</label><br>
                    <input type="checkbox" id="cb3" class="css-checkbox med"/>
                    <label for="cb3" class="css-label med elegant">Asian</label><br>
                    <input type="checkbox" id="cb4" class="css-checkbox med"/>
                    <label for="cb4" class="css-label med elegant">French</label><br>
                    <input type="checkbox" id="cb5" class="css-checkbox med"/>
                    <label for="cb5" class="css-label med elegant">Indian</label><br>
                    <input type="checkbox" id="cb6" class="css-checkbox med"/>
                    <label for="cb6" class="css-label med elegant">Italian</label><br>
                    <input type="checkbox" id="cb7" class="css-checkbox med"/>
                    <label for="cb7" class="css-label med elegant">Japanese</label><br>
                    <input type="checkbox" id="cb8" class="css-checkbox med"/>
                    <label for="cb8" class="css-label med elegant">Latin</label><br>
                    <input type="checkbox" id="cb9" class="css-checkbox med"/>
                    <label for="cb9" class="css-label med elegant">Mediterranean</label><br>
                    <input type="checkbox" id="cb10" class="css-checkbox med"/>
                    <label for="cb10" class="css-label med elegant">Mexican</label><br>
                    <input type="checkbox" id="cb11" class="css-checkbox med"/>
                    <label for="cb11" class="css-label med elegant">Seafood</label><br>
                    <input type="checkbox" id="cb12" class="css-checkbox med"/>
                    <label for="cb12" class="css-label med elegant">Small plates of any persuasion</label><br>
                    <input type="checkbox" id="cb13" class="css-checkbox med"/>
                    <label for="cb13" class="css-label med elegant">Thai</label><br>
                    <input type="checkbox" id="cb14" class="css-checkbox med"/>
                    <label for="cb14" class="css-label med elegant">Vietnamese</label>
                </div>
            </div>
            <!--End Dinner + Drinks -->
            <!--If rest -->
            <div class="col-md-6 padd-0-20" id="rest" style="display:none;">
                <h4>Check all that interest you!</h4>
                <div class="col-md-8 left">
                    <input type="checkbox" id="ca1" class="css-checkbox med"/>
                    <label for="ca1" class="css-label med elegant">Movie</label><br>
                    <input type="checkbox" id="ca2" class="css-checkbox med"/>
                    <label for="ca2" class="css-label med elegant">Bowling</label><br>
                    <input type="checkbox" id="ca3" class="css-checkbox med"/>
                    <label for="ca3" class="css-label med elegant">Spoting event</label><br>
                    <input type="checkbox" id="ca4" class="css-checkbox med"/>
                    <label for="ca4" class="css-label med elegant">Museum</label><br>
                    <input type="checkbox" id="ca5" class="css-checkbox med"/>
                    <label for="ca5" class="css-label med elegant">Arts</label><br>
                    <input type="checkbox" id="ca6" class="css-checkbox med"/>
                    <label for="ca6" class="css-label med elegant">Anything outdoors</label><br>
                    <input type="checkbox" id="ca7" class="css-checkbox med"/>
                    <label for="ca7" class="css-label med elegant">I'm down for the get down, I'll do whatever you say, my date-planning guru</label>
                </div>
            </div>
            <!--End rest -->
            <!--Neighborhood-->
            <div class="col-md-6 padd-0-20" id="neighborhood">
                <h4>Do you have a neighbor hood preference?</h4>
                <div class="col-md-10 left">
                    <input type="checkbox" id="cc1" name="manhattan" class="css-checkbox med"/>
                    <label for="cc1" class="css-label med elegant">Anywhere in downtown <br>Manhattan</label><br><br>
                    <input type="checkbox" id="cc2" class="css-checkbox med"/>
                    <label for="cc2" class="css-label med elegant">East Village</label><br>
                    <input type="checkbox" id="cc3" class="css-checkbox med"/>
                    <label for="cc3" class="css-label med elegant">Financial District</label><br>
                    <input type="checkbox" id="cc4" class="css-checkbox med"/>
                    <label for="cc4" class="css-label med elegant">Lower East Side</label><br>
                    <input type="checkbox" id="cc5" class="css-checkbox med"/>
                    <label for="cc5" class="css-label med elegant">Meatpacking</label><br>
                    <input type="checkbox" id="cc6" class="css-checkbox med"/>
                    <label for="cc6" class="css-label med elegant">Soho/ Nolita</label><br>
                    <input type="checkbox" id="cc7" class="css-checkbox med"/>
                    <label for="cc7" class="css-label med elegant">West Village/ Greenwich Village /Noho</label>
                </div>
            </div>
            <!--End Neighborhood-->
            <!--Submit-->            
            <div class="col-md-12 center rays">
                <input type="submit" class="btn btn-info" style="font-size:25px" value="Submit">
            </div>
            <!--End Submit-->
        </form>
    </div>