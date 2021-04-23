<?php

include "../database/db_connect.php";

$db = new connection();

if(isset($_POST["save"]))
    {
        $brandId = $_POST["brand_id"];
        $brandName = $_POST["brand_name"];

        $sql = $db->link->query("INSERT INTO brand_table (brand_id, brand_name) VALUES ('$brandId' , '$brandName')");

        if($sql)
        {
            echo "Add Successfully";
        }
        else 
        {
            echo "Add Unsuccessful";
        }
    }
    if(isset($_GET["del"]))
            {
                $del = $db->link->query("DELETE FROM brand_table where `brand_id` = '".$_GET["del"]."'");

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

<!-- Mirrored from mosaddek.com/theme/Tanim/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>brand add</title>

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
                            <h4 class="mb-0">Add Brand</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">brand add</li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-wrappper">
                    <div class="form-group">
                        <label>Brand ID</label>
                        <input type="text" name="brand_id" class="form-control" placeholder="Brand ID">
                    </div>
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" name="brand_name" class="form-control" placeholder="Brand Name">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-success" value="Save">
                        <input type="submit" name="view" class="btn btn-info" value="View">
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
                                                <td>Brand_id</td>
                                                <td>Brand Name</td>
                                                <td>Action</td>
                                        </tr>
                                        <?php
                                                $sql=$db->link->query("SELECT * FROM brand_table");
                                                $i=1;
                                                while($fetch=$sql->fetch_array())
                                                {?>
                                                    <tr>
                                                            <td><?php echo $i++;?></td>
                                                            <td><?php echo $fetch[0];?></td>
                                                            <td><?php echo $fetch[1];?></td>
                                                            <td>
                                                                <a href="brand_add.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                                                <a href="brand_add.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                    </tr>
                                                    <?php
                                                }
                                        ?>
                                    </table>
                            <?php
                        }
            ?>