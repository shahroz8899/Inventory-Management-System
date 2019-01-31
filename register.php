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
    <div class="card mx-auto" style="width: 30rem ">

        <div class="card-header" align="center"><b>Registration</b></div>

        <form>
            <div class="form-group " >
                <label for="inputEmail4">User Name</label>
                <input type="text" name="username" class="form-control" id="inputEmail" placeholder="User Name">
            </div>
                <div class="form-group ">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group ">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            <div class="form-group >
                <label for="inputPassword">Re-Enter Password</label>
                <input type="password" name="re-enter password" class="form-control" id="inputPassword" placeholder="Re-Enter Password">
            </div>

            <div class="form-group">
                <label for="usertype">User Type</label>
                <select>
                    <option value="1">Admin</option>
                    <option value="0">Other</option>

                </select>
            </div>




            <button type="submit" name="user_register" class="btn btn-primary">
                <span class="fa fa-user"></span>&nbsp;Register</button>
    <span><a href="#">Login</a></span>
        </form>
    <div class="card-footer text-muted">
        <a href="#"> Forget Password</a>

    </div>
    </div>


</div>

</body>
</html>






