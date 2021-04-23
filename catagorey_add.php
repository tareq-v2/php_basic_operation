<?php

include "../database/db_connect.php";

$db = new connection();
$fetch[0]="";
$fetch[1]="";
if(isset($_POST["save"]))
    {
        $categoryName = $_POST["c_name"];
        $cat_d = $_POST["cat_id"];
        $iName = $_POST["itemName"];
        if(!empty($cat_d) && !empty($categoryName))
        {
        $sql = $db->link->query("INSERT INTO category_table (`cat_id`,`category_name`,`item_name`) VALUES ('$cat_d','$categoryName','$iName')");

            if($sql)
            {
                $path="../img/$cat_d.jpg";
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

    if(isset($_POST["Update"]))
        {
            $categoryName = $_POST["c_name"];
            $cat_d = $_POST["cat_id"];
            $iName = $_POST["itemName"];
            if(!empty($cat_d) && !empty($categoryName))
            {
            $sql = $db->link->query("REPLACE INTO category_table (`cat_id`,`category_name`,`item_name`) VALUES ('$cat_d','$categoryName','$iName')");

                if($sql)
                {

                    $path="../img/$cat_d.jpg";
                    move_uploaded_file($_FILES['file']['tmp_name'],$path);
                    echo "Update Successfully";
                }
                else 
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
                $del = $db->link->query("DELETE FROM category_table where `cat_id`='".$_GET["del"]."'");

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
                 $select = $db->link->query("SELECT * FROM category_table where `cat_id`='".$_GET["edit"]."'");
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
                    <h4 class="mb-0">Add Category</h4>
                       <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="default-color">Admin</a></li>
                              <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                </div>
             </div>
        </div>
    </div>
            <div class="container-fluid">
                <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-wrappper">
                    <div class="form-group">
                        <label>Category ID</label>
                        <input type="text" name="cat_id" class="form-control" placeholder="Category ID" value="<?php print $fetch[1]?>">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="c_name" class="form-control" placeholder="Category Name" value="<?php print $fetch[0]?>">
                    </div>
                    <div class="form-group">
                        <label>Item Name</label>
                            <select name="itemName"class="form-control">
                                <option>Select Item Name</option>
                                <?php
                                    $selectItem= $db->link->query("SELECT * FROM `item_table`");
                                    while($fetchitem=$selectItem->fetch_array())
                                    {
                                        print "<option>$fetchitem[1]</option>";
                                    }
                                ?>
                            </select>
                    </div> 

                     <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="file" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-success" value="Save">
                        <input type="submit" name="Update" class="btn btn-success" value="Update">
                        <input type="submit" name="view" class="btn btn-info" value="View">
                    </div>
                </div>
                </form>

                <?php
                        if(isset($_POST["view"]))
                        {
                            ?>
                                    <table class="table table-bordered">
                                        <tr>
                                                <td>SL</td>
                                                <td>Category_id</td>
                                                <td>Category Name</td>
                                                <td>Picture</td>
                                                <td>Action</td>
                                        </tr>
                                        <?php
                                                $sql=$db->link->query("SELECT * from category_table");
                                                $i=1;
                                                while($fetch=$sql->fetch_array())
                                                {?>
                                                    <tr>
                                                            <td><?php echo $i++;?></td>
                                                            <td><?php echo $fetch[1];?></td>
                                                            <td><?php echo $fetch[0];?></td>
                                                            <td><img src="../img/<?php echo $fetch[1];?>.jpg" height="100" width="100"></td>
                                                       
                                                            <td>
                                                                <a href="catagorey_add.php?edit=<?php echo $fetch[1];?>" class="btn btn-info">Edit</a>
                                                                <a href="catagorey_add.php?del=<?php echo $fetch[1];?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                    </tr>
                                                    <?php
                                                }
                                        ?>
                                    </table>
                            <?php
                        }
                ?>
            </div>
