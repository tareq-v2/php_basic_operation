<?php

include "../database/db_connect.php";

$db = new connection();
$fetch[0]="";
$fetch[1]="";
if(isset($_POST["save"]))
    {
        $itemId = $_POST["i_id"];
        $iName = $_POST["i_name"];
        if(!empty($itemId) && !empty($iName))
        {
        $sql = $db->link->query("INSERT INTO item_table (`item_id`,`item_name`) VALUES ('$itemId','$iName')");

            if($sql)
            {
                $path="../img/$itemId.jpg";
                move_uploaded_file($_FILES['file']['tmp_name'],$path);
                echo "Add Successfully";
            }
            else 
            {
                echo "Add Unsuccessful";
            }
        }
        else{
            print "Please fill up all fields!!";
        }
    }

if(isset($_POST["update"]))
    {
        $itemId = $_POST["i_id"];
        $iName = $_POST["i_name"];
        if(!empty($itemId) && !empty($iName))
        {
        $sql = $db->link->query("REPLACE INTO  item_table (`item_id`,`item_name`) VALUES ('$itemId','$iName')");

        if($sql)
            {
            $path="../img/$itemId.jpg";
            move_uploaded_file($_FILES['file']['tmp_name'],$path);
            echo "Update Successfully";
            }else 
                {
                    echo "Update Unsuccessful";
                }
                
            }
            else{
                print "Please fill up all fields!!";
            }
    }
if(isset($_GET["del"]))
            {
                $del = $db->link->query("DELETE FROM item_table where `item_id` = '".$_GET["del"]."'");

                    if($del)
                    {

                        $path="../img/".$_GET["del"].".jpg";
                        unlink($path);
                        echo "Delete Successfully";
                    }
                    else 
                    {
                        echo "Delete Unsuccessful";
                    }
            }
    if(isset($_GET["edit"]))
            {
                 $select = $db->link->query("SELECT * FROM item_table where `item_id` = '".$_GET["edit"]."'");
                 $fetch=$select->fetch_array(); 
            }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Khassfood Admin</title>

    <!--google font-->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--common style-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--easy pie chart-->
    <link href="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">

    <!--custom css-->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
    <div class="page-title">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-8">
                    <h4 class="mb-0"> Add Item</h4>
                       <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="default-color">Admin</a></li>
                              <li class="breadcrumb-item active">Add item</li>
                        </ol>
                </div>
             </div>
        </div>
    </div>
    <div class="container-fluid">
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label>Item ID</label>
                <input type="text" name="i_id" class="form-control" placeholder="Item id">
            </div>
            <div class="form-group">
                <label>Item Name</label>
                <input type="text" name="i_name" class="form-control" placeholder="Item Name">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="file" class="form-control" placeholder="Sub-Category Name">
            </div>
            <div class="form-group">
                <input type="submit" name="save" class="btn btn-success" value="Save">
                <input type="submit" name="update" class="btn btn-primary" value="Update">
                <input type="submit" name="view" class="btn btn-info" value="View">
            </div>
        </form>
    </div>         
            <?php
                        if(isset($_POST["view"]))
                        {
                            ?>
                                    <table class="table table-bordered">
                                        <tr>
                                                <td>SL</td>
                                                <td>Item_id</td>
                                                <td>Item Name</td>
                                                <td>Picture</td>
                                                <td>Action</td>
                                        </tr>
                                        <?php
                                                $sql=$db->link->query("SELECT * from item_table");
                                                $i=1;
                                                while($fetch=$sql->fetch_array())
                                                {?>
                                                    <tr>
                                                            <td><?php echo $i++;?></td>
                                                            <td><?php echo $fetch[0];?></td>
                                                            <td><?php echo $fetch[1];?></td>
                                                            <td><img src="../img/<?php echo $fetch[0];?>.jpg" height="100" width="100"></td>
                                                       
                                                            <td>
                                                                <a href="item_info.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                                                <a href="item_info.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                    </tr>
                                                    <?php
                                                }
                                        ?>
                                    </table>
                            <?php
                        }
            ?>