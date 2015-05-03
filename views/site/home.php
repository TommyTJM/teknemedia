<?php
use yii\helpers\Html;
use app\assets\HomeAsset;

/* @var $this yii\web\View */
$this->title = 'Teknet Media Inc';

$hmBundle = HomeAsset::register($this);

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
        <title>Teknet Media, Inc. - Home</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->
        
        <link rel="icon" type="image/png" href="<?php echo $imgLoc;?>images/favicon.ico" sizes="32x32" />

        <meta name="description" content="Teknet Media, Inc.">

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
        <script>  !function(d,s,id){

             var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
             
            if(!d.getElementById(id)){
                  js=d.createElement(s);
                  js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                 fjs.parentNode.insertBefore(js,fjs);
                }
            }(document,"script","twitter-wjs");
          
		</script>
        
    </head>
    <body>
    <?php $this->beginBody() ?>


        <div id="wrapper"  >

            <div class="top_wrapper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">

                                <!-- Search Box -->
                                <div class="searchbox">
                                    <form action="#" method="get">
                                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="s" placeholder="Search.."/>
                                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                                        <input type="submit" class="searchbox-submit" value="Search"/>
                                    </form>
                                </div>
                                <!-- //Search Box// -->
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/TeknetI" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>                                      
                                    </ul>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="call-us top-bar-block">
                                    <!-- i class="icon-phone"></i -->
                                    <span>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/register">Sign Up </a>
                                    </span>
                                </div>
                                <div class="mail-us top-bar-block">
                                    <!-- i class="icon-email"></i-->                            
                                    <span>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/login">Login</a>
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
                               <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about">
                                    <img src="<?php echo $imgLoc;?>images/main_logo.png" alt="Teknet Media, Inc."/>
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




                                <nav>
                                    <ul class="navigation">
                                        <li>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/index" class="activelink">
                                                <span class="label-nav">
                                                    Home
                                                </span>
                                            </a>                                          
                                        </li>
                                        <li>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about">
                                                <span class="label-nav">
                                                    About Us
                                                </span>
                                            </a>                                          
                                        </li>
                                        <li>
                                             <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/services">
                                                <span class="label-nav">
                                                    Services
                                                </span>
                                            </a>         
                                        </li>
                                        <li>
                                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/contact">
                                                <span class="label-nav">
                                                    Contact Us
                                                </span>
                                            </a>         
                                        </li>
                                           
                                    </ul>

                                </nav>

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
                <div class="rev-slider-full">
                    <div class="rev-slider-banner-full  rev-slider-full">
                        <ul>


                            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                                <img src="<?php echo $imgLoc;?>images/placeholders/slider1/bg1.jpg"  alt="rev-full1" data-fullwidthcentering="on">

                                <div class="tp-caption lft stb stl"
                                     data-x="650"
                                     data-y="93"
                                     data-speed="500"
                                     data-start="500"
                                     data-easing="easeOutExpo" data-end="6000" data-endspeed="500"><img src="<?php echo $imgLoc;?>images/placeholders/slider1/imac.png" alt="Image 1"></div>

                                <div class="tp-caption lfb stb stl"
                                     data-x="616"
                                     data-y="194"
                                     data-speed="500"
                                     data-start="700"
                                     data-easing="easeOutExpo" data-end="6000" data-endspeed="500"><img src="<?php echo $imgLoc;?>images/placeholders/slider1/ipad.png" alt="Image 1"></div>

                                <div class="tp-caption lfr stb stl"
                                     data-x="751"
                                     data-y="290"
                                     data-speed="1000"
                                     data-start="1000"
                                     data-easing="easeOutExpo" data-end="6000" data-endspeed="500"><img src="<?php echo $imgLoc;?>images/placeholders/slider1/iphone.png" alt="Image 1"></div>

                                <div class="tp-caption slider-text-title sft str"
                                     data-x="20"
                                     data-y="150"
                                     data-speed="300"
                                     data-start="800"
                                     data-easing="easeOutCubic" data-end="6000" data-endspeed="500">IMS Technology</div>


                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
                                    We our leaders in INVENTORY MANAGEMENT SYSTEM's let us meet your<br /> 
                                    supply chain needs!
                                </div>
                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
                                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about"class="button btn-flat">More Info</a>
                                </div>                  

                            </li>


                            <li  data-transition="slideleft" data-slotamount="14">
                                <img src="<?php echo $imgLoc;?>images/placeholders/slider1/bg2.jpg" alt="Rev Full">

                                <div class="caption sfb" data-x="693" data-y="75" data-speed="700" data-start="0"
                                     data-easing="easeOutBack">
                                    <img src="<?php echo $imgLoc;?>images/placeholders/slider1/mobile.png" alt=""/>
                                </div>

                                <div class="tp-caption slider-text-title sft str"
                                     data-x="20"
                                     data-y="150"
                                     data-speed="300"
                                     data-start="800"
                                     data-easing="easeOutCubic" data-end="6000" data-endspeed="500">WMS Innovation</div>


                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
                                    Our world class WAREHOUSE MANAGEMENT SOLUTION gives your warehouse<br />
                                    the innovative edge! 
                                </div>
                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
                                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about" class="button btn-flat">More Info</a>
                                </div>                

                            </li>

                        </ul>
                        <div class="tp-bannertimer tp-bottom"></div>
                    </div>
                </div></div><!--.top wrapper end -->

            <div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>


            <div class="content-wrapper hide-until-loading">

                <div class="section-content top-body">
                    <div class="container">
                        <div class="row">
							<div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium" >
                                    <h4 class="h4-body-title">
                                        <i class="icon-paint-bucket-streamline"></i>
                                        Inventory Management 
                                    </h4>                                     
									  <div class="content-box-text" style="text-align:center">   
                                     </div>
                                </div>
                            </div>
                                   
							<div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium" >
                                    <h4 class="h4-body-title">
                                        <i class="icon-paint-bucket-streamline"></i>
                                        CRM Solutions
                                    </h4>
                                    <div class="content-box-text">
                                    </div>
                                </div>
                            </div>
                                  
							<div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium" >
                                    <h4 class="h4-body-title">
                                        <i class="icon-paint-bucket-streamline"></i>
                                        Ad-hoc Reporting
                                    </h4>
                                    
		                                <div class="content-box-text">                                     
		                                </div>                                                             

                                </div>
                            </div>
                                  
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium" >
                                    <h4 class="h4-body-title">
                                        <i class="icon-paint-bucket-streamline"></i>
                                        Workflow Management
                                    </h4>                                   
									      <div class="content-box-text">
		                                   </div>                         
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="body-wrapper">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animated" data-animtype="flipInY"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.5s">
                                <h2 class="h2-section-title">Our Work</h2>

                                <div class="i-section-title">
                                    <i class="icon-files">

                                    </i>
                                </div>

                                <div class="space-sep20"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portfolio-items">

                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item" >

                                        <div class="thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/stock1.png"
                                                alt=""/>
                                        </div>


                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item">
                                       
                                        <div class="thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/Stock8.png"
                                                alt=""/>
                                        </div>
                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item">
                                       
                                        <div class="thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/Stock2.png"
                                                alt=""/>
                                         </div>
                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item animated branding">                                       
                                        <div class="thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/Stock9.png"
                                                alt=""/>
                                     </div>


                                    </div>
                                    <!-- //Portfolio Item// -->
    
                                    </div>
    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="space-sep40"></div>

                    <div class="section-content section-tabs section-px stones-bg white-text">
                        <div class="tab-container">
                            <div class="section-tab-arrow"></div>
                            <div class="section-etabs-container">
                                <ul class="section-etabs">                                
                                    <li class="tab">
                                        <a href="#tabc3"> NewsLetter</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="container">

                                <div class="tab-content">

                                    <div id="tabc3">
                                        <h2 class="h2-section-title animated" data-animtype="flipInY"
                                            data-animrepeat="0"
                                            data-speed="1s"
                                            data-delay="0.2s">
                                            Subscribe To Our NewsLetter
                                        </h2>
                                        <div class="section-subscribe animated" data-animtype="flipInX"
                                             data-animrepeat="0"
                                             data-speed="1s"
                                             data-delay="0.5s">                                         
										    
                                             <?php echo Html::beginForm(); ?>
                                            	<form action="index" method="post">
                                            	    <?php echo Html::activeTextInput($model,'email', ['class' => 'subscribe-input text-input', 'placeholder' => 'Email..']) ?>
                                                	<button class="subscribe-button icon-email-plane">
                                                	</button>
                                            	</form>
                                             <?php echo Html::endForm(); ?>

                                            <div class="social-icons circle">

                                                <a href="#" target="_blank" class="social-media-icon facebook-icon bounceIn" data-original-title="facebook">facebook</a>

                                                <a href="#" target="_blank" class="social-media-icon twitter-icon bounceIn" data-original-title="twitter">Twitter</a>
                                               
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>  
                   </div>

                    <div class="space-sep40"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.4s">
                                <h2 class="h2-section-title">What We Offer</h2>

                                <div class="i-section-title">
                                    <i class="icon-drive">
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 right-text">
                                <ul class="icon-content-list-container">

                                    <li class="icon-content-single">

                                        <div class="content-box  style5  animated "
                                             data-animtype="fadeIn"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.2s"
                                             >
                                               <h4 class="h4-body-title">
                                                <strong>Inventory </strong> Management            

                                                <i class="fa fa-film"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                 The process of managing and locating object or materials can be a tremendous effort.
                                                 We provide innovative solutions to handle your inventory.                                                 
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </li>

                                    <li class="icon-content-single">

                                        <div class="content-box  style5  animated "
                                             data-animtype="fadeIn"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.2s"
                                             >
                                             <h4 class="h4-body-title">                                       
                                       			 <strong>Asset Tracking </strong> Solutions  
                                       			 <i class="icon-eye"></i>
                                    		</h4>
			                                    <div class="content-box-text">
            			                           Track your assets with our top of line RFID solution.
                        			               Record the location and usage of the assets and generate reports in real time.
                                    			</div>
                                        </div>
                                    </li>

                                    <li class="icon-content-single">

                                        <div class="content-box  style5  animated "
                                             data-animtype="fadeIn"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.2s"
                                             >
                                               <h4 class="h4-body-title">
		                                        <i class="icon-eye"></i>
                                                <strong>Ad-hoc </strong> Reporting                                                
                                            </h4>
                                            <div class="content-box-text">
                                                  Our ad-hoc reporting goal is to empower end-users to query company data, without IT 
                                                  creating a myriad of reports.
                                            </div> 
                                           
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="icon-content-list-container">

                                    <li class="icon-content-single">

                                        <div class="content-box  style5  animated "
                                             data-animtype="fadeIn"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.2s"
                                             >
                                             <h4 class="h4-body-title">
                                                <strong>Customer Realtionship </strong> Management            

                                                <i class="icon-ipad"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                 CRM solutions help service providers manage customers,
                                                 suppliers and support complex business processes.                                                  
                                                </p>
                                            </div>
                                          
                                        </div>
                                    </li>
                                    <li class="icon-content-single">

                                        <div class="content-box  style5  animated "
                                             data-animtype="fadeIn"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.2s"
                                             >
                                              <h4 class="h4-body-title">
                                                <strong>Workflow </strong> Management            

                                                <i class="icon-painting-roll-streamline"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                  Complex business models need automated process to ensure timely execution.
                                                  Automate your business process with our workflow solutions!                                                 
                                                </p>
                                            </div>
                                           
                                        </div>
                                    </li>

                                    <li class="icon-content-single">

                                        <div class="content-box  style5  animated "
                                             data-animtype="fadeIn"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.2s"
                                             >
                                             <h4 class="h4-body-title">
                                                <strong>Custom </strong> Deveploment            

                                                <i class="icon-eye"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
												Custom solutions provide companies with detailed execution of their business model.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="testimonial-big">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <div class="testimonial-big-text animated" data-animtype="fadeInRight"
                                     data-animrepeat="1"
                                     data-speed="1s"
                                     data-delay="0s">
                                    Customizing and developing applications can drain IT budgets and resources. Our flexible development methods provide scalable solutions that address short-term business
                                    requirements and long-term strategic growth objectives.
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div><!--.content-wrapper end -->
            <footer>
                <div class="footer">

                    <div class="container">
                        <div class="footer-wrapper">
                            <div class="row">


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-content">
                                        <div class="footer-content-logo">
                                            <img src="<?php echo $imgLoc;?>images/main_logo.png" alt=""/>
                                        </div>
                                        <div class="footer-content-text">
                                            <p>We have over 10 years of logistic technology experience. Listening to our clients and delivering quality software
                                               is the cornerstone of our success.</p>
                                            <p>We deliver flexible, scalable solutions that simultaneously address short-term business requirements and long-term
                                               strategic growth objectives</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->



                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-title">
                                        Recent Tweets
                                    </div>
                                    <div class="footer-content footer-recent-tweets-container">
                              			<a class="twitter-timeline" href="https://twitter.com/TeknetI" data-widget-id="594938586790764544">Tweets by @TeknetI</a>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-title">
                                        Links
                                    </div>
                                    <div class="footer-content">
                                        <ul class="footer-category-list">
                                            <li>
                                                <a href="">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="">Dolor Sit Amet</a>
                                            </li>
                                            <li>
                                                <a href="">Nullam dignissim</a>
                                            </li>
                                            <li>
                                                <a href="">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="">Dolor Sit Amet</a>
                                            </li>
                                            <li>
                                                <a href="">Dolor Sit Amet</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                                              
                            </div>
                        </div>

                    </div>
                     <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 center-text">
                                    <div class="copyright-text">&copy; 2012 - 2015 Teknet Media, Inc.</div>
                                </div>

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
