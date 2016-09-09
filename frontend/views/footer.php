</div>
</div>
<script>
        function whatSelect() {
            value = document.getElementById("what").value;
            if (value == "rest") {
                document.getElementById("rest").style.display = "inline";
                document.getElementById("dinner").style.display = "none";
                document.getElementById("drinks").style.display = "none";
                document.getElementById("neighborhood").style.display = "inline";
                document.getElementById("what").style.color = "#000";
            }
            if (value == "drinks") {
                document.getElementById("rest").style.display = "none";
                document.getElementById("dinner").style.display = "none";
                document.getElementById("drinks").style.display = "inline";
                document.getElementById("neighborhood").style.display = "inline";
                document.getElementById("what").style.color = "#000";
            }
            if (value == "dinner") {
                document.getElementById("rest").style.display = "none";
                document.getElementById("dinner").style.display = "inline";
                document.getElementById("drinks").style.display = "inline";
                document.getElementById("neighborhood").style.display = "inline";
                document.getElementById("what").style.color = "#000";
            }
            if (value == "none") {
                document.getElementById("rest").style.display = "none";
                document.getElementById("dinner").style.display = "none";
                document.getElementById("drinks").style.display = "none";
                document.getElementById("what").style.color = "#bfbfbf";
            }
        }

        function whoSelect() {
            value = document.getElementById("who").value;
            if (value == "none") {
                document.getElementById("who").style.color = "#bfbfbf";
            }
            else {
                document.getElementById("who").style.color = "#000";
            }
        }

        function select(item){
            if (item.value == "none") {
                item.style.color = "#bfbfbf";
            }
            else {
                item.style.color = "#000";
            }
        }

        function inputFocus(i){
            if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
        }

        function inputBlur(i){
            if(i.value==""){ i.value=i.defaultValue; i.style.color="#bfbfbf"; }
        }

        $(function () {
            $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY'
            });
        });
        
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validate() {
            $("#result").text("");
            var email = $("#email").val();
            if (validateEmail(email)) {
                $("#result").text(email + " is valid :)");
                $("#result").css("color", "green");
            } else {
                $("#result").text(email + " is not valid :(");
                $("#result").css("color", "red");
            }
            return false;
}
    </script>
</body>
</html>