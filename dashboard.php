<!DOCTYPE html>
<html>
<head>
    <title>Inventory Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js"></script>


</head>

<br>

    <?php

    //Navbar
    include_once 'tamplets/header.php';
    ?>

</br>
<div class="container" >
    <div class="row">
        <div class="col-md-4">

            <div class="card mx-auto" >
                <img src="images/user.png" style="width: 60%"  class="card-img-top mx-auto" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Profile Info</h5>
                    <p class="card-text"><i class="fa fa-user"> &nbsp;</i>Muhammad Shahroz Abbas</p>
                    <p class="card-text"><i class="fa fa-user"> &nbsp;</i>Admin</p>
                    <p class="card-text"><i class="fa fa-clock-o"> &nbsp;</i>Last Login</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"> &nbsp;</i>Edit Profile</a>
                </div>
            </div>
        </div>
<div class="col-md-8">
    <div class="jumbotron" style="width: 100%; height: 100%">
<h1>Wellcome Admin</h1>
        <div class="row">
        <div class="col-sm-6">
            <iframe src="http://free.timeanddate.com/clock/i6m3p4ji/n756/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>

        </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Orders</h5>
                        <p class="card-text">You can book an order & generate invoice</p>
                        <a href="#" class="btn btn-primary">New Orders</a>
                    </div>

        </div>
        </div>


    </div>
</div>
    </div>

</div>
</div>
<p></p>
    <p></p>
    <div class="container" >
        <div class="row">
            <div class="col-md-4">

                <div class="card" >
                    <div class="card-body" >
                        <h5 class="card-title"> Categories</h5>
                        <p class="card-text">You can manage your categories and add new parent ans sub categories</p>
                        <?php include_once 'tamplets/category.php'?>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_Category">Add </a>
                        <a href="#" class="btn btn-primary">Manage </a>
                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-body" >
                        <h5 class="card-title"> Brand</h5>
                        <p class="card-text">You can manage your brand and add new parent ans sub brand</p>
                        <?php include_once 'tamplets/Brand.php'?>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_Brand">Add </a>
                        <a href="#" class="btn btn-primary">Manage </a>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-body" >
                        <h5 class="card-title"> Products</h5>
                        <p class="card-text">You can manage your products and add new parent ans sub products</p>
                        <?php include_once 'tamplets/Product.php'?>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_Product">Add </a>
                        <a href="#" class="btn btn-primary">Manage </a>
                    </div>

                </div>
            </div>

    </div>

    </div>




</body>
</html>