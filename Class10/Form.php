<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:32 PM
 */
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script>
            function Confirmation() {
                var del=confirm("Are you sure you want to delete this record?");
                if (del==true){
                    return true;
                }
                else{
                    return false;
                }
            }
            
            // function changeName(id) {
            //     var name=document.getElementById(id).value;
            //     if(name=="Unmarked")
            //         document.getElementById(id).value="Marked";
            //     else
            //         document.getElementById(id).value="Unmarked";
            //
            //
            // }
        </script>
    </head>
    <body>


<?php
class Form
{

    private function NavBar(){?>
        <div class="Nav">

            <form action="LogIn.php" method="post">
                <input type="submit" name="LogInBtn" value="LogIn">
            </form>
            <form action="Registration.php" method="post">
                <input type="submit" name="ListBtn" value="Registration">
            </form>


        </div>

        <?php
    }
    public function MessageShow()
    {

            $this->NavBar();
        ?>
        <form action="MessagePost.php" method="post">
            <label>Message : </label>
            <textarea name="Message" placeholder="Type Your Message Here"></textarea>
            <br>
            <input type="submit" name="SubmitBtn" value="Submit">
        </form>



<?php
    }

    public function RegisterPage()
    {
        ?>
        <form action="Registration.php" method="post" enctype="multipart/form-data">
            <input type="text" name="Name" placeholder="Name"><br>
            <span id="NameSpan" style="color: #e8491d"></span>
            <input type="email" name="Email" placeholder="Email"><br>
            <span id="EmailSpan" style="color: #e8491d"></span>
            <input type="text" name="Password" placeholder="Password"><br>
            <span id="PriceSpan" style="color: #e8491d"></span>

            <input type="submit" name="Register" class="Btn" value="Submit">
        </form>

<?php
    }

    public function LogInPage()
    {
        ?>
        <form action="LogIn.php" method="post" enctype="multipart/form-data">

            <input type="text" name="Email" placeholder="Email"><br>
            <span id="EmailSpan" style="color: #e8491d"></span>
            <input type="password" name="Password" placeholder="Password"><br>
            <span id="PriceSpan" style="color: #e8491d"></span>
            <input type="submit" name="LogIn" class="Btn" value="Submit">
        </form>

        <?php
    }

    public function Messages($data)
    {?>
         <table border="1">
            <th>Message</th>
            <th>Delete</th>
            <th>Mark</th>
            <?php foreach ($data as $d){?>
                <tr>
                    <td><?php echo $d['Message'] ?></td>
                    <td><form action="DeleteMsg.php" method="post" onsubmit="return Confirmation()">
                            <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                            <input type="submit" name="DeleteMsg" value="Delete">
                        </form></td>
                    <td><form name="ChangeName" action="IsImp.php" method="post">
                            <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                            <input type="hidden" name="IsMarked" value="<?php echo $d['IsImportant'] ?>">
                            <?php
                                if($d["IsImportant"]=="True"){

                                    ?>
                                    <input type="submit" id="<?php echo $d['Id'] ?>" name="MarkImp" value="Marked" onclick="changeName(<?php echo $d['Id'] ?>)">

                                    <?php
                                }
                                else{
                                    ?>
                                    <input type="submit" id="<?php echo $d['Id'] ?>" name="MarkImp" value="Unmarked" onclick="changeName(<?php echo $d['Id'] ?>)">

                                    <?php
                                }

                            ?>
                        </form></td>
                </tr>
            <?php  }?>
        </table>

        <?php
    }
}


