<html>
<body>
    <h1>
<!--        --><?php
//            $foot=10;
//            function footToInch($foot){
//                return ($foot*12);
//            }
//            echo "Inch :".footToInch($foot);
//        ?>
        <?php

        ?>
    </h1>
<!--    <form action="form.php" method="get">-->
<!--        <input type="text" class="" name="FName" ><br>-->
<!--        <input type="text" class="" name="LName" ><br>-->
<!--        <input type="number" class="" name="Num1" ><br>-->
<!--        <input type="number" class="" name="Num2" ><br>-->
<!--        <input type="submit" value="submit">-->
<!--    </form>-->

    <?php


//    if(isset($_POST['submit'])){
//        if(strlen($_POST["UserName"])==0){
//            echo "Please enter Name <br/>";
//        }
//        if(strlen($_POST["Password"])==0)
//        {
//            echo "Please enter Password";
//
//        }
//        if(strlen($_POST["Password"])<6)
//        {
//            echo "Please enter Password at least 6 character";
//        }
//    }
//    ?>
<!---->
<!--    <form action=""  method="POST">-->
<!--        <label>UserName: </label>-->
<!--        <input type="text" class="" onchange="change();" name="UserName" id="uname" ><br>-->
<!--        <span name="span1" style="color: red ; display: none" id="sp1" ></span><br>-->
<!---->
<!--        <label>Password: </label>-->
<!--        <input type="password" class="" onchange="change2();" name="Password" id="pass" ><br>-->
<!--        <span name="span2" style="color: red " id="sp2" ></span><br>-->
<!---->
<!--        <input type="submit" name="submit"  value="Save">-->
<!--    </form>-->
<!---->
<!--<script>-->
<!--    function change(){-->
<!--        var x=document.getElementById("uname").value;-->
<!---->
<!---->
<!--        if(x=="" ){-->
<!---->
<!--            document.getElementById("sp1").innerHTML="Please insert your NAME";-->
<!--        }-->
<!--        else{-->
<!--            document.getElementById("sp1").style.display="none";-->
<!--        }-->
<!---->
<!---->
<!--    }-->
<!---->
<!--    function change2() {-->
<!--        var y=document.getElementById("pass").value;-->
<!--        if(y=="" ){-->
<!--            document.getElementById("sp2").innerHTML="Please insert your Password";-->
<!--        }-->
<!--        else{-->
<!--            document.getElementById("sp2").style.display="none";-->
<!--        }-->
<!--        // if(y.length<6 ){-->
<!--        //     document.getElementById("sp2").innerHTML="Please insert your Password at least 6 character";-->
<!--        // }-->
<!--        // else{-->
<!--        //     document.getElementById("sp2").style.display="none";-->
<!--        // }-->
<!--    }-->
<!--    -->
<!---->
<!--</script>-->

<?php
    if(isset($_POST["Submit"])){
        $tmp=$_FILES["image"]["tmp_name"];
        $x=explode('.',$_FILES["image"]["name"]);
        move_uploaded_file($tmp,"photos/".uniqid().".".end($x));
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/jpeg, image/x-png">
    <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>

