
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
    <form action="" method="POST">
        <label>Number 1: </label>
        <input type="number" class="" id="num1" name="Num1" ><br>
        <label>Number 2:  </label>
        <input type="number" class="" id="num2" name="Num2" ><br>
        <input type="button" id="cal" onclick="calc('Add');" value="+" name="Add">
        <input type="button" id="cal" onclick="calc('Sub');" value="-" >
        <input type="button" id="cal" onclick="calc('Mul');" value="*">
        <input type="button" id="cal" onclick="calc('Div');" value="/">
    </form>

    <div id="divId">
        <label id="lbl"></label>
    </div>

    <?php


    if(isset($_POST["Add"])){
        $x= $_POST["Num1"];
        $y= $_POST["Num2"];

        if(strlen($_POST["Num1"])==0){
            echo "Please enter a Valid Number <br/>";
        }
        if(strlen($_POST["Num2"])==0)
        {
            echo "Please enter a Valid Number";

        }

        function addsum($a, $b){
            $sum= intval($a)+ intval($b);
            echo "Addition is :" . $sum;
        }
        addsum($x,$y);
    }
    ?>

    <script>
        function calc(y){
            var num1=document.getElementById("num1").value;
            var num2=document.getElementById("num2").value;
            var label= document.getElementById('lbl');
            var res;
            label.innerHTML = "";
            if(num1=="" || num2==""){
               return;
            }
            if(y=='Add'){
                 res=parseInt(num1,10)+parseInt(num2,10);
            }
            else if(y=='Sub'){
                 res=parseInt(num1,10)-parseInt(num2,10);
            }
            else if(y=='Mul'){
                 res=parseInt(num1,10)*parseInt(num2,10);
            }
            else if(y=='Div'){
                 res=parseInt(num1,10)/parseInt(num2,10);
            }

            label.innerHTML = y+" is : "+res +"<br>";
            label.setAttribute("style", "font-weight:normal");


        }




    </script>


</body>
</html>

