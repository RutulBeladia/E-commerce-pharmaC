<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <style type="text/css">
        #loading
         {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
        }
        .box
        {
            background:#fff;
            height: 400px;
            width:550px;
            padding: 20px;
            padding-top: 20px;
            box-shadow: 0px 1px 5px powderblue; 
        }
        table{
            margin: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>    
    </head>
    <body onload="myfunction()">
        <div id="loading"></div>
            <div class="col-sm-12" id="content">            
                <div class="breadcrumbs">
                    <a href="home.php"><i class="fa fa-home"></i></a>
                    <a href="login.php">Login</a>
                </div>
               <div class="container box">
                <form method="post" action="pforget.php">
                    <h3>Forget Password</h3>
                    <br><br>
                            <span>Email:</span>
                            <input type="text" class="form-control" name="email" value="" placeholder="Enter Email">
                            <span>Secutiy Question:</span>
                            <select class="form-control" name="squ" id="sque">
                                     <option hidden disabled selected> --- Please Select --- </option>
                                    <option>Who is your daddy?</option>
                                    <option>Who is your mummy?</option>
                                    <option>Who is your sister?</option>
                                    <option>Who is your brother?</option>
                                    <option>Who is your favorite  color?</option>
                                    <option>Who is your lifepatner?</option>
                                    <option>Who is your childhood friend?</option>
                                    <option>Who is your favorite celebrity?</option>
                                </select>
                            <span>Answer</span>
                            <input type="text" class="form-control" name="ans" value="" placeholder="Enter Email">
                            <br>
                            <a href="changepwd.php"><button  name="submit" class="btn btn-info"  style="float: right;">NEXT</button></a>&nbsp;&nbsp;<input type="button" class="btn btn-default" name="reset"  value="RESET">
                </form>
               </div>
            </div>
        </div>
    </div>
</div>
</div>
<a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
    <i class="fa fa-chevron-up"></i>
</a>
<script>
var preloader=document.getElementById('loading');

function myfunction()
{
preloader.style.display='none';
}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html> 
