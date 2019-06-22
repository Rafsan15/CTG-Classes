<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/11/2019
 * Time: 3:49 PM
 */

class Entry
{
    public function __construct()
    {
//        $this->MyForm();
    }
    private function MyForm()
    {    ?>

        <form action='index.php'  method='POST'>
            <label> Name : </label></label><input type=text name='Name'><br>
            <label> Model : </label></label><input type=text name='Model'><br>
            <label> Price : </label></label><input type=text name='Price'><br>
            <input type=submit name='Submit' value='Submit'>
        </form>
        <?php
    }

    public function ShowData($data)
    {
        ?>
        <table border="1">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $d){?>
                <tr>
                    <td><?php echo $d['Name'] ?></td>
                    <td><?php echo $d['Model']; ?></td>
                    <td><?php echo $d['Price']; ?></td>
                    <td><input type="button" name="delete" value="Delete"</td>
                </tr>
            <?php  }?>
            </tbody>
        </table>
<?php

    }
}