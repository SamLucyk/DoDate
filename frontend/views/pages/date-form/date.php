<div class="col-md-12">
    <h4>When is your date?</h4>
    <div class="form-group" style="color:black">
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' name='date' class="form-control"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
                    format: 'MM/DD/YYYY'
                });
    });
</script>