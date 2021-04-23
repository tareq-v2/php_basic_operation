                <?php

                    include "../database/db_connect.php";

                    $db = new connection();

                    if(isset($_POST["save"]))
                        {
                            $pId = $_POST["p_id"];
                            $iName = $_POST["p_id"];
                            $cName = $_POST["c_name"];
                            $subcName = $_POST["subc_name"];
                            $bName = $_POST["b_name"];
                            $pName = $_POST["p_name"];
                            $description = $_POST["description"];
                            $sPrice = $_POST["s_price"];

                            $sql = $db->link->query("INSERT INTO product_table (product_id, item_name, category_name, subc_name, brand_name, product_name, description, sale_price) VALUES ('$pId','$iName','$cName','$subcName','$bName','$pName','$description','$sPrice')");

                            if($sql)
                            {   
                                $path="../img/$pId.jpg";
                                move_uploaded_file($_FILES['file']['tmp_name'],$path);
                                echo "Add Successfully";
                            }
                            else 
                            {
                                echo "Add Unsuccessful";
                            }
                        }
                        if(isset($_GET["del"]))
                            {
                                $del = $db->link->query("DELETE FROM product_table where `product_id` = '".$_GET["del"]."'");

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
                                     $select = $db->link->query("SELECT * FROM product_table where `product_id` = '".$_GET["edit"]."'");
                                     $fetch=$select->fetch_array(); 
                                }
                ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/Tanim/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
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
                            <h4 class="mb-0">Add product</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Add product</li>
                            </ol>
                        </div>
                    </div>
                </div>
        </div>
            <div class="container-fluid">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-wrappper">
                    <div class="form-group">
                        <label>Product ID</label>
                        <input type="text" name="p_id" class="form-control" placeholder="Product ID">
                    </div>
                    <div class="form-group">
                        <label>Item Name</label>
                            <select name="i_Name"class="form-control">
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
                        <label>Category Name</label>
                            <select name="c_name"class="form-control">
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
                        <label>Sub-Category Name</label>
                            <select name="subc_name"class="form-control">
                                <option>Select Sub-Category Name</option>
                                <?php
                                    $selectItem= $db->link->query("SELECT * FROM `sub_category_table`");
                                    while($fetchitem=$selectItem->fetch_array())
                                    {
                                        print "<option>$fetchitem[1]</option>";
                                    }
                                ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Brand Name</label>
                            <select name="b_name"class="form-control">
                                <option>Select Brand Name</option>
                                <?php
                                    $selectItem= $db->link->query("SELECT * FROM `brand_table`");
                                    while($fetchitem=$selectItem->fetch_array())
                                    {
                                        print "<option>$fetchitem[1]</option>";
                                    }
                                ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="p_name" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description Name">
                    </div>
                    <div class="form-group">
                        <label>Sale price</label>
                        <input type="text" name="s_price" class="form-control" placeholder="Sale price">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="file" class="form-control" placeholder="Sub-Category Name">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-success" value="Save">
                        <input type="submit" name="update" class="btn btn-info" value="Update">
                        <input type="submit" name="view" class="btn btn-danger" value="view">
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
                                                <td>Item Name</td>
                                                <td>Category Name</td>
                                                <td>Sub-Category Name</td>
                                                <td>Brand name</td>
                                                <td>Product Name</td>
                                                <td>Description</td>
                                                <td>Sale price</td>
                                                <td>Image</td>
                                                <td>Action</td>
                                        </tr>
                                        <?php
                                                $sql=$db->link->query("SELECT * FROM product_table");
                                                $i=1;
                                                while($fetch=$sql->fetch_array())
                                                {?>
                                                    <tr>
                                                            <td><?php echo $fetch[0];?></td>
                                                            <td><?php echo $fetch[1];?></td>
                                                            <td><?php echo $fetch[2];?></td>
                                                            <td><?php echo $fetch[3];?></td>
                                                            <td><?php echo $fetch[4];?></td>
                                                            <td><?php echo $fetch[5];?></td>
                                                            <td><?php echo $fetch[6];?></td>
                                                            <td><?php echo $fetch[7];?></td>
                                                            <td><img src="../img/<?php echo $fetch[0];?>.jpg" height="50" width="50"></td>
                                                            <td>
                                                                <a href="product_add.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                                                <a href="product_add.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                    </tr>
                                                    <?php
                                                }
                                        ?>
                                    </table>
                            <?php
                        }
            ?>