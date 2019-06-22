<html>
<head>
    <title>MOBO HUB</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            var name = document.forms["InsertForm"]["Name"].value;
            var email = document.forms["InsertForm"]["Email"].value;
            var password = document.forms["InsertForm"]["Password"].value;
            var cpassword = document.forms["InsertForm"]["CPassword"].value;
            if (name == "") {
                document.getElementById("NameSpan").innerHTML="Name must be filled out";
                return false;
            }
            else {
                document.getElementById("NameSpan").innerHTML="";

            }
            if (email == "") {
                document.getElementById("EmailSpan").innerHTML="Email must be filled out";
                return false;
            }
            else {
                document.getElementById("EmailSpan").innerHTML="";

            }
            if (password =="") {
                document.getElementById("PasswordSpan").innerHTML="Password must be filled out";
                return false;
            }
            else {
                document.getElementById("PasswordSpan").innerHTML="";

            }
            if (cpassword =="") {
                document.getElementById("CPasswordSpan").innerHTML="Confirm Password must be filled out";
                return false;
            }
            else {
                document.getElementById("CPasswordSpan").innerHTML="";

            }
            if (cpassword !=password) {
                document.getElementById("CPasswordSpan").innerHTML="Password & Confirm Password should be same";
                return false;
            }
            else {
                document.getElementById("CPasswordSpan").innerHTML="";

            }
        }


    </script>

</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/18/2019
 * Time: 5:21 PM
 */

class MyForm
{
    private function NavBar(){?>
        <div class="Nav">
            <h1>Welcome To MOBO HUB</h1>
            <form action="List.php" method="post">
                <input type="submit" name="ListBtn" value="List">
            </form>
            <form action="index.php" method="post">
                <input type="submit" name="AddBtn" value="Add" >
            </form>

        </div>

        <?php
    }
    public function InsertForm(){
        ?>
        <div class="Insert">
            <h1>Please SignUp</h1>
            <form name="InsertForm" action="Login.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                <input type="text" name="Name" placeholder="Name"><br>
                <span id="NameSpan" style="color: #e8491d"></span>
                <input type="text" name="Email" placeholder="Email"><br>
                <span id="EmailSpan" style="color: #e8491d"></span>
                <input type="password" name="Password" placeholder="Password"><br>
                <span id="PasswordSpan" style="color: #e8491d"></span>
                <input type="password" name="CPassword" placeholder="ConfirmPassword"><br>
                <span id="CPasswordSpan" style="color: #e8491d"></span>


                <input type="submit" name="Submit" class="Btn" value="Submit">
            </form>
        </div>

        <?php

    }

    public function LoginForm(){
?>
        <div class="Insert">
            <h1>Please LogIn</h1>
            <form name="InsertForm" action="Login.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">

                <input type="text" name="Email" placeholder="Email"><br>
                <span id="EmailSpan" style="color: #e8491d"></span>
                <input type="password" name="Password" placeholder="Password"><br>
                <span id="PasswordSpan" style="color: #e8491d"></span>

                <input type="submit" name="Login" class="Btn" value="Login">
            </form>
        </div>

<?php
}
}
?>
</body>
</html>