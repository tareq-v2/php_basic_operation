<?php

include "../database/db_connect.php";

$db = new connection();

if(isset($_POST["save"]))
    {   
        $subcId = $_POST["subc_id"];
        $subcName = $_POST["subc_name"];
        $cName = $_POST["c_name"];
        $iName = $_POST["itemName"];

        $sql = $db->link->query("INSERT INTO sub_category_table (subc_id, subc_name, category_name, item_name) VALUES ('$subcId', '$subcName','$cName','$iName')");

        if($sql)
        {
            echo "Add Successfully";
        }
        else 
        {
            echo "Add Unsuccessful";
        }
    }
    if(isset($_POST["update"]))
    {
        $subcId = $_POST["subc_id"];
        $subcName = $_POST["subc_name"];
        $cName = $_POST["c_name"];
        $iName = $_POST["itemName"];
        if(!empty($subcName) && !empty($cName) && !empty($iName))
        {
        $sql = $db->link->query("REPLACE INTO sub_category_table (subc_id, subc_name, category_name, item_name) VALUES ('$subcName','$subcId','$cName','$iName')");

        if($sql)
            {
                echo "Update Successfully";
            }else{
                echo "Update Unsuccessful";
            }
                
            }else{
                print "Please fill up all fields!!";
            }
    }
    if(isset($_GET["del"]))
            {
                $del = $db->link->query("DELETE FROM sub_category_table where `subc_id` = '".$_GET["del"]."'");

                    if($del)
                    {
                        echo "Delete Successfully";
                    }
                    else 
                    {
                        echo "Delete Unsuccessful";
                    }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Khassfood Admin</title>
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">  
    <link href="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> Sub-Category add</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Sub-category add</li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-wrappper">
                    <div class="form-group">
                        <label>Sub-Category ID</label>
                        <input type="text" name="subc_id" class="form-control" placeholder="sub-Category ID">
                    </div>
                    <div class="form-group">
                        <label>Sub-Category Name</label>
                        <input type="text" name="subc_name" class="form-control" placeholder="sub-Category Name">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <select name="c_Name"class="form-control">
                                <option>Select Category Name</option>
                                <?php
                                    $selectItem= $db->link->query("SELECT * FROM `category_table`");
                                    while($fetchitem=$selectItem->fetch_array())
                                    {
                                        print "<option>$fetchitem[0]</option>";
                                    }
                                ?>
                            </select>
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
                        <input type="submit" name="save" class="btn btn-success" value="Save">
                        <input type="submit" name="update" class="btn btn-success" value="Update">
                        <input type="submit" name="view" class="btn btn-info" value="view">
                    </div>
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
                                                <td>Sub-Category ID</td>
                                                <td>Sub-Category Name</td>
                                                <td>Category Name</td>
                                                <td>Item name</td>
                                                <td>Action</td>
                                        </tr>
                                        <?php
                                                $sql=$db->link->query("SELECT * FROM sub_category_table");
                                                $i=1;
                                                while($fetch=$sql->fetch_array())
                                                {?>
                                                    <tr>
                                                            <td><?php echo $i++;?></td>
                                                            <td><?php echo $fetch[0];?></td>
                                                            <td><?php echo $fetch[1];?></td>
                                                            <td><?php echo $fetch[2];?></td>
                                                            <td><?php echo $fetch[3];?></td>
                                                            <td>
                                                                <a href="sub_catagorey_add.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                                                <a href="sub_catagorey_add.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                    </tr>
                                                    <?php
                                                }
                                        ?>
                                    </table>
                            <?php
                        }
            ?>