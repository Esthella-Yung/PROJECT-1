<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
}
        .bg{
    background-image: url(img/bg.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}


</style>
<body class="bg">
    <center>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                
                    <fieldset style="width:30%;color:#4a148c;background-color:rgba(0,0,255,0.1);margin-top:40px;border-radius: 40px">
                    <h3 class="panel-title">Registration</h3>
                
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus style="width:60%;height:30px;font-size: 15px" >
                            </div><br>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus style="width:60%;height:30px;font-size: 15px">
                            </div><br>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" style="width:60%;height:30px;font-size: 15px">
                            </div><br>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" style="font-weight: bold;color: blue;border-color:blue">

                        </fieldset>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</center>
</body>

</html>

