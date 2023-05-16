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
       
    </head>
    <body>
       <div>
           <?php include('header.php'); ?> 
       </div>
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-12 col-xs-12">
                    <form  name="quick_find">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Enter search keywords here" class="form-control input-lg" id="inputGroup"/>
                                <span class="input-group-addon">
                                    <a href="#" style="color:white">Search</a>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            <div class="">
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 left_sidebar1">
                        <div id="left_part">
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Categories</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <i  id="accordan_plus" class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">
                                                    <a href="product.php">Prescription</a>&nbsp;(94)<br />
                                                    <a href="product.php">Non-Prescription</a>&nbsp;(9)<br />
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What's New?</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right accordan_plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContainer">  
                                                    <div class="infoBoxHeading">
                                                        <a href="#">What's New?</a>
                                                    </div> 
                                                    <div class="infoBoxContents" id="sidebar">
                                                        <div>
                                                            <a href="single-product.php">
                                                                <img src="images/img4.jpg" class="img-responsive" />
                                                            </a>
                                                        </div>
                                                        <a href="single-product.php">Lorem Simply</a><br /><i class="fa fa-inr"></i>21.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Specials</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents" id="sidebar">

                                                    <a href="single-product.php">
                                                        <img src="images/img6.jpg" class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.php">Lorem Big Block</a><br /><del></del>
                                                    <span class="productSpecialPrice"><i class="fa fa-inr"></i>21.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <script>
                            function toggleChevron(e) {
                                $(e.target)
                                        .prev('.panel-heading')
                                        .find("i.indicator")
                                        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                            }
                            $('#accordion').on('hidden.bs.collapse', toggleChevron);
                            $('#accordion').on('shown.bs.collapse', toggleChevron);
                        </script>

                    </div> 
                    <div class="col-md-9 col-sm-8 col-xs-12" id="content">            
                        <div class="contentText">
                            <div class="breadcrumbs">
                                <a href="home.php"><i class="fa fa-home"></i></a>
                                <a href="#">Product List</a>
                            </div>
                            <h1>Lorem</h1>
                            <div class="row">
                                <div class="col-sm-2 col-xs-6"><img class="img-thumbnail"  src="images/img1.png"></div>
                                <div class="col-sm-10 col-xs-6"><p>
                                        Example of category description text</p>
                                </div>
                            </div>
                            <hr>
                            <h3>Refine Search</h3>
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul>
                                        <li><a href="#">Ab (0)</a></li>
                                        <li><a href="#">AB-one (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a id="compare-total" href="#">Product Compare (0)</a></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="btn-group hidden-xs">
                                        <a class="btn btn-default" id="list-view" ><i class="fa fa-th-list"></i></a>
                                        <a class="btn btn-default" id="grid-view" href="product.php"><i class="fa fa-th"></i></a>   
                                    </div>
                                </div>
                                <div class="col-md-2 text-right txt-left">
                                    <label for="input-sort" class="control-label">Sort By:</label>
                                </div>
                                <div class="col-md-3 text-right">
                                    <select  class="form-control" id="input-sort">
                                        <option selected="selected">Default</option>
                                        <option>Name (Z - A)</option>
                                    </select>
                                </div>
                                <div class="col-md-1 text-right txt-left">
                                    <label for="input-limit" class="control-label">Show:</label>
                                </div>
                                <div class="col-md-2 text-right">
                                    <select  class="form-control" id="input-limit">
                                        <option selected="selected">15</option>
                                        <option>25</option>
                                        <option>50</option>
                                        <option>75</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row margin-top">
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="single-product.php"><img class="img-responsive"  src="images/d26.jpg" width="200" height="200"></a></div>
                                        <div class="product-details-box" style="overflow: hidden">
                                            <div class="caption">
                                                <h4 class="product_title"><a href="single-product.php">Lorem small</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price"><i class="fa fa-inr"></i>110.00</span> 
                                                    <span class="old_price"><i class="fa fa-inr"></i>122.00</span>
                                                    <span class="price-tax">Ex Tax: <i class="fa fa-inr"></i>90.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="cart.php">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="single-product.php"><img class="img-responsive"  src="images/d15.jpg" width="200" height="200"></a></div>
                                        <div class="product-details-box" style="overflow: hidden">
                                            <div class="caption">
                                                <h4 class="product_title"><a href="single-product.php">SIMPHNY</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price"><i class="fa fa-inr"></i>165.00</span> 
                                                    <span class="old_price"><i class="fa fa-inr"></i>182.00</span>
                                                    <span class="price-tax">Ex Tax: <i class="fa fa-inr"></i>95.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="cart.php">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="single-product.php"><img class="img-responsive"  src="images/d21.jpg" width="200" height="200"></a></div>
                                        <div class="product-details-box" style="overflow: hidden">
                                            <div class="caption">
                                                <h4 class="product_title"><a href="single-product.php">Lorem block</a></h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p>
                                                <p class="price">
                                                    <span class="new_price"><i class="fa fa-inr"></i>210.00</span> 
                                                    <span class="old_price"><i class="fa fa-inr"></i>252.00</span>
                                                    <span class="price-tax">Ex Tax: <i class="fa fa-inr"></i>120.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="cart.php">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div>
             <?php include('footer.php'); ?>
        </div>
        
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 