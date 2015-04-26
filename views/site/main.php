<?php
use yii\helpers\Html;
use app\assets\MainAsset;

/* @var $this yii\web\View */
$this->title = 'Teknet Media Inc';

$hmBundle = MainAsset::register($this);

$imgLoc = $hmBundle->baseUrl.'/home/';

/*TODO: Remove this comment*/

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
    <?php $this->head()?>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Teknetmedia Inc - Home</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->
        
        <link rel="icon" type="image/png" href="<?php echo $imgLoc;?>images/favicon.ico" sizes="32x32" />

        <meta name="description" content="Teknetmedia Inc.">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- This should placed first off all other scripts -->
        
        <link href="/teknetmediabeta/web/home/css/skins/light-blue.css" rel='stylesheet' type='text/css' id="skin-file">                      

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/respond.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php $this->beginBody() ?>






        <div id="wrapper"  >

            <div class="top_wrapper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                        	<!--
                            <div class="col-sm-7">
                                <div class="call-us top-bar-block">
                                    <i class="icon-phone"></i>
                                    <span>
                                        Call us at 1- 888 - 999
                                    </span>
                                </div>
                                <div class="mail-us top-bar-block">
                                    <i class="icon-email"></i>                            
                                    <span>
                                        E-mail: info@example.com
                                    </span>                            
                                </div>

                            </div>
                            -->
                            <div class="col-sm-9">

                                <!-- Search Box -->
                                <div class="searchbox">
                                    <form action="#" method="get">
                                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="s" placeholder="Search.."/>
                                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                                        <input type="submit" class="searchbox-submit" value="Search"/>
                                    </form>
                                </div>
                                <!-- //Search Box// -->
                                <!-- 
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon pininterest-icon" data-original-title="pininterest">pininterest</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon dribble-icon" data-original-title="dribble">dribble</a>
                                        </li>
                                    </ul>
                               </div>
                               -->                               
                            </div>
	                            <div class="col-sm-3">
	                                <div class="call-us top-bar-block">
	                                    <!-- i class="icon-phone"></i -->
	                                    <span>
	                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=register/view">Hello, <?php echo $model->firstNm; ?></a>
	                                    </span>
	                                </div>
	                                <div class="mail-us top-bar-block">
	                                    <!-- i class="icon-email"></i-->                            
	                                    <span>
	                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/login">Logout</a>
	                                    </span>                            
	                                </div>
	                            </div>                              
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <header id="header">
                    <div class="container">

                        <div class="row header">

                            <!-- Logo -->
                            <div class="col-xs-2 logo">
                                <a href="home-version1.html">
                                    <img src="<?php echo $imgLoc;?>images/main_logo.png" alt="Teknet Meida, Inc."/>
                                </a>
                            </div>
                            <!-- //Logo// -->


                            <!-- Navigation File -->
                            <div class="col-md-10">

                                <!-- Mobile Button Menu -->
                                <div class="mobile-menu-button">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                                <!-- //Mobile Button Menu// -->

                                <!-- Mobile Nav. Container -->
                                <ul class="mobile-nav">
                                    <li class="responsive-searchbox">
                                        <!-- Responsive Nave -->
                                        <form action="#" method="get">
                                            <input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s" />
                                            <button class="icon-search"></button>
                                        </form>
                                        <!-- //Responsive Nave// -->
                                    </li>
                                </ul>
                                <!-- //Mobile Nav. Container// -->
                            </div>
                            <!-- Nav -->

                        </div>



                    </div>
                </header>
                <!-- //Header// -->
                <div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="page-info">
                                    <h1 class="h1-page-title"><?php echo $model->welcomeMsg; ?></h1>


                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="">Home</a>
                                            </li>
                                            <!-- li class="active">Sidebar Navigation</li -->
                                        </ol>
                                    </div>
                                    <!-- BreadCrumb -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.top wrapper end -->

            <div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>


            <div class="content-wrapper hide-until-loading"><div class="body-wrapper">
                    <div class="container">
                    
                       <div class="row">
                    	
                            <div class="col-md-12 col-sm-12">                         
                                <div class="callout-box image-box clearfix">

                                    <!-- button href="#" class="btn btn-lg btn-outlined">Purchase Theme</button -->

                                    <div class="callout-content">
                                        <h2>Optimizing your business and maximizing growth</h2>    
                                    </div>


                                </div>
                            </div>                    	
                    	
                    	</div> 
                    	
                    	<br/>
                    	<br/>
                    
                    	<div class="row">
                    	
                            <div class="col-md-12 col-sm-12">
                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Home Menu</h3>
                                    <div class="title-seperator"></div>
                                </div>                           
                            </div>                    	
                    	
                    	</div>                     	                   	                   	                   
                    
                    	<div class="row">
                    	
                        <div class="space-sep20"></div>       
                        <div class="row">
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box style5 medium  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="fa fa-user"></i>
                                        <strong>Complete </strong> Profile
                                    </h4>
                                    <div class="content-box-text">
                                        Update your profile and complete registration
                                        so we can get a better understanding of your
                                        company needs.

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box style5 medium  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-settings-streamline"></i>
                                        <strong>Access </strong> Dashboard
                                    </h4>
                                    <div class="content-box-text">
                                        Enter your company's Inventory, create
                                        Purchase Orders, view Inventory Levels
                                        and Manage Inventory                                     

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box style5 medium  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-painting-roll-streamline"></i>
                                        <strong>Asset </strong> Tracking
                                    </h4>
                                    <div class="content-box-text">
                                        Track your Inventory by Sku or barcodes.
                                        Leverage our world class tracking system
                                        to track your items in real time.

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box style5 medium  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-file-settings"></i>
                                        <strong>Ad Hoc</strong> Reporting
                                    </h4>
                                    <div class="content-box-text">
                                        Customize reporting to suite your business
                                        needs.  Create, build, and modify Ad Hoc reports.                                      

                                    </div>

                                </div>
                            </div>                    	
                    	
                    	</div> 
                    	
                        <br/>
                        
                    	<div class="row">
                    		<div class="divider divider-shadow"></div>                    	                    	
						</div> 												                       
                        
                        <div class="row">
                        
                                <!-- Blog Post, Type:Quote -->
                                <div class="blog-post">
                                    <div class="blog-span">

                                        <div class="blog-post-body">
                                            <div class="blog_post_quote">
                                                "The best in the business when it comes to Inventory Mangement.  World class product while providing valuble customer service.  If you didn't choose Teknet, then you are making a HUGE mistake!"<div class="quote-author">Tommy Manning, ABC Distributors Inc.</div>                    
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- //Blog Post, Type:Quote// -->                        
                        
                        </div>                     	                    	
                    
                    	<!-- 
                    	<div class="row">
                    	
                            <div class="col-md-12 col-sm-12">
                                <div class="title-block">
                                    <h3 class="h3-body-title">Our Mantra</h3>
                                    <div class="title-seperator"></div>
                                </div>                           
                            </div>                    	
                    	
                    	</div>
                    	 -->                     	
						
                        <div class="row"> 

                            <div class="col-md-12 col-sm-12">
                                <h2 class="h2-section-title" style="font-weight: 700;">"Hands Down" - We are the Best Inventory Management Experts</h2>
                                <br/>
                                <br/>
                                <p style="font-size: 17px;"><span class="dropcaps dropcaps-color-style">Empowering</span> retailers and wholesalers to become as fast and efficient as today&#146;s modern e-Commerce businesses. Teknetmedia beautifully fuses inventory management operations, critical business applications and online commerce to build the central core of wholesale business operations. Teknetmedia is a cloud-based inventory management platform for retailers and wholesalers that want effortless commerce.</p>
                                <br/>
                                <p style="font-size: 17px;"><span class="dropcaps dropcaps-color-style">Revolutionize</span> Inventory Management Systems by making inventory transactions as easy as shopping on Amazon. Our beautiful and intuitive cloud-based software combines the most powerful inventory management suite with integrations that are essential to business, freeing you up to focus on what makes your business special, not what makes it run. TradeGecko supports businesses that operate with multi-users, multi-currencies and tax requirements, multi-warehouses,  as well as CRM tools and integrations that are essential to business such as QuickBooks, Xero, Shopify, Bigcommerce and more.</p>
                             </div>
                             
                        </div>
                        
                        <br/>
                        <br/>
                        <br/>

                        <div class="row">
                    	
                            <div class="col-md-12 col-sm-12">
                                <div class="title-block">
                                    <h3 class="h3-body-title">Videos</h3>
                                    <div class="title-seperator"></div>
                                </div>                           
                            </div>                    	
                    	
                    	</div> 

                        </div>						
						
                                <!-- Video Blog Post ( vimeo ) -->
                                <div class="blog-post">
                                    <div class="blog-post-type">
                                        <i class="icon-video"> </i>
                                    </div>
                                    <div class="blog-span">


                                        <div class="blog-post-featured-img blog-post-featured-img-with-vid">
                                            <!-- Vimeo video, dont forget to blog-post-vimeo class-->
                                            <a href="http://vimeo.com/23237102" class="blog-post-vimeo">My Video</a>
                                        </div>

                                        <h2>
                                            <a href="">
                                                Vimeo Video Post Type Example
                                            </a>
                                        </h2>

                                        <div class="blog-post-body">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.            </div>

                                        <div class="blog-post-details">

                                            <!-- Date -->
                                            <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
                                                22 January, 2014
                                            </div>

                                            <div class="blog-post-details-item blog-post-details-item-left icon-user">
                                                <a href="">
                                                    Admin
                                                </a>
                                            </div>
                                            <!-- //Author Name// -->


                                            <!-- Tags -->
                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
                                                <a href="">
                                                    Business
                                                </a> ,
                                                <a href="">
                                                    Investment
                                                </a> ,
                                                <a href="">
                                                    Freelancing
                                                </a>
                                            </div>
                                            <!-- //Tags// -->

                                            <!-- Comments -->
                                            <div
                                                class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
                                                <a href="">
                                                    3 Comments
                                                </a>
                                            </div>
                                            <!-- //Comments// -->


                                            <!-- Read More -->
                                            <div class="blog-post-details-item blog-post-details-item-right">
                                                <a href="">
                                                    read more <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </div>
                                            <!-- //Read More// -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Video Blog Post -->						                                                                    	 
                    	
                        <br/>
                        <br/>
                        
                    	<div class="row">
                    	
                            <div class="col-md-12 col-sm-12">
                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Lastest News</h3>
                                    <div class="title-seperator"></div>
                                </div>                            
                            </div>                    	
                    	
                    	</div>                     	                      
                        
                        <div class="row">
                                                
							<!-- Begin Child Main Content -->							
							
							<div class="col-md-12 col-sm-12">
							
								<!-- Begin Sub Content -->
								
									<div class="body-wrapper">
					                    <div class="container">
					                        <div class="row">
					                            <div class="col-md-12 col-sm-12">										
					
					                                <!-- Slider Blog Post -->
					                                <div class="blog-post">
					                                    <div class="blog-post-type">
					                                        <i class="icon-photo"> </i>
					                                    </div>
					                                    <div class="blog-span">
					
					                                        <!-- Slider -->
					                                        <div class="blog-post-featured-img">
					
					                                            <div class="blog-slider cycle-slideshow"
					                                                 data-cycle-slides="> .slider-img"
					                                                 data-cycle-swipe="true"
					                                                 data-cycle-prev=".cycle-prev"
					                                                 data-cycle-next=".cycle-next"
					                                                 data-cycle-timeout=0
					                                                 >
					
					                                                <div class="fa fa-chevron-right cycle-next"></div>
					                                                <div class="fa fa-chevron-left cycle-prev"></div>
					                                                <div class="cycle-pager"></div>
					
					                                                <!-- slider item -->
					                                                <div class="slider-img">
					                                                    <img src="<?php echo $imgLoc;?>images/placeholders/blog2.jpg" alt=""/>
					                                                </div>
					                                                <!-- //slider item// -->
					                                                <!-- slider item -->
					                                                <div class="slider-img">
					                                                    <img src="<?php echo $imgLoc;?>images/placeholders/blog3.jpg" alt=""/>
					                                                </div>
					                                                <!-- //slider item// -->
					                                                <!-- slider item -->
					                                                <div class="slider-img">
					                                                    <img src="<?php echo $imgLoc;?>images/placeholders/blog4.jpg" alt=""/>
					                                                </div>
					                                                <!-- //slider item// -->
					                                            </div>
					                                        </div>
					                                        <!-- Slider -->
					                                        <h2>
					                                            <a href="">
					                                                Gallery Post Type Example
					                                            </a>
					                                        </h2>
					
					                                        <div class="blog-post-body">
					                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.            </div>
					
					                                        <div class="blog-post-details">
					
					                                            <!-- Date -->
					                                            <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
					                                                22 January, 2014
					                                            </div>
					
					                                            <div class="blog-post-details-item blog-post-details-item-left icon-user">
					                                                <a href="">
					                                                    Admin
					                                                </a>
					                                            </div>
					                                            <!-- //Author Name// -->
					
					
					                                            <!-- Tags -->
					                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
					                                                <a href="">
					                                                    Business
					                                                </a> ,
					                                                <a href="">
					                                                    Investment
					                                                </a> ,
					                                                <a href="">
					                                                    Freelancing
					                                                </a>
					                                            </div>
					                                            <!-- //Tags// -->
					
					                                            <!-- Comments -->
					                                            <div
					                                                class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
					                                                <a href="">
					                                                    3 Comments
					                                                </a>
					                                            </div>
					                                            <!-- //Comments// -->
					
					
					                                            <!-- Read More -->
					                                            <div class="blog-post-details-item blog-post-details-item-right">
					                                                <a href="">
					                                                    read more <i class="fa fa-chevron-right"></i>
					                                                </a>
					                                            </div>
					                                            <!-- //Read More// -->
					
					                                        </div>
					                                    </div>
					                                </div>
					                                <!-- Slider Blog Post -->																									
					
					                                <!-- Blog Post, Type:LINK -->
					                                <div class="blog-post">
					                                    <div class="blog-post-type">
					                                        <i class="icon-clip"> </i>
					                                    </div>
					                                    <div class="blog-span">
					                                        <h2>
					                                            <a href="">
					                                                Link Post Type Example
					                                            </a>
					                                            <span class="blog-post-link"> http://www.wrapbootstrap.com/  </span>
					                                        </h2>
					
					                                        <div class="blog-post-body">
					                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.            </div>
					
					                                        <div class="blog-post-details">
					
					                                            <!-- Date -->
					                                            <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
					                                                22 January, 2014
					                                            </div>
					
					                                            <div class="blog-post-details-item blog-post-details-item-left icon-user">
					                                                <a href="">
					                                                    Admin
					                                                </a>
					                                            </div>
					                                            <!-- //Author Name// -->
					
					
					                                            <!-- Tags -->
					                                            <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
					                                                <a href="">
					                                                    Business
					                                                </a> ,
					                                                <a href="">
					                                                    Investment
					                                                </a> ,
					                                                <a href="">
					                                                    Freelancing
					                                                </a>
					                                            </div>
					                                            <!-- //Tags// -->
					
					                                            <!-- Comments -->
					                                            <div
					                                                class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
					                                                <a href="">
					                                                    3 Comments
					                                                </a>
					                                            </div>
					                                            <!-- //Comments// -->
					
					
					                                            <!-- Read More -->
					                                            <div class="blog-post-details-item blog-post-details-item-right">
					                                                <a href="">
					                                                    read more <i class="fa fa-chevron-right"></i>
					                                                </a>
					                                            </div>
					                                            <!-- //Read More// -->
					
					                                        </div>
					                                    </div>
					                                </div>
					                                <!-- //Blog Post, Type:LINK// -->										
					
														
					                 </div>								
								
								<!-- End Sub Content -->								
							
							</div>
							
							<!-- End Child Main Content -->                        
                        
                        </div>


                    </div>

                </div>
            </div><!--.content-wrapper end -->
            <footer>
                <div class="footer">
                    <div class="copyright">
                        <div class="container">
                                <div class="center-text">
                                    <div class="copyright-text">&copy; 2015 Teknetmedia</div>
                                </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div><!-- wrapper end -->
    

    <?php $this->endBody() ?> 
    </body>
</html>
<?php $this->endPage() ?>
