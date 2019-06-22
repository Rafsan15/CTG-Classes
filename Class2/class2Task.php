<html>
<head>
    <title>Class 2 Assignment</title>
</head>
<body>
    <h1>
        <?php
        $x= $_POST["NameField"];
        $names= array();
        for($i=0;$i<$x;$i++){
            $c= (string)$i;
            $names[$i]=$_POST["Name".$c];
        }

            echo "Names are : <br/>";
            for($i=0; $i<count($names);$i++){
                echo ($i+1).": ". $names[$i] . " <br/>";
            }
            for($i=1;$i<count($names); $i++){
                $j= $i-1;
                $name= $names[$i];
                while($j>=0 && strlen($names[$j])>strlen($name) ){
                    $names[$j+1]=$names[$j];
                    $j--;
                }
                $names[$j+1]=$name;
            }

        echo "<br/>Shortest Name is : ".$names[0]. ".";
            if(strlen($names[0])%2==0){
                echo "<br/>".$names[0].  " you are general";

            }
            else{
                echo "<br/>".$names[0].  " you are different";
            }
        ?>
    </h1>
</body>

<script>
</script>
</html>