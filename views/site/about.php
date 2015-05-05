<?php
use yii\helpers\Html;
use app\assets\HomeAsset;

/* @var $this yii\web\View */
$this->title = 'Teknet Media Inc';

$hmBundle = HomeAsset::register($this);

$imgLoc = $hmBundle->baseUrl.'/home/';

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
        <title>Teknetmedia Inc - About</title>

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
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
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




                               <nav>
                                    <ul class="navigation">
                                        <li>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/index">
                                                <span class="label-nav">
                                                    Home
                                                </span>
                                            </a>                                          
                                        </li>
                                        <li>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about"  class="activelink">
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
                <div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="page-info">
                                    <h1 class="h1-page-title">About Us</h1>

                                    <h2 class="h2-page-desc">
                                        Know The Reasons Behind Our Success
                                    </h2>

                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/index">Home</a>
                                            </li>
                                            <li class="active">About Us</li>
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
                            <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.4s">
                                <h2 class="h2-section-title">About Us</h2>
                                <div class="i-section-title">
                                    <i class="icon-feather">

                                    </i>
                                </div>
                            </div>
                        </div>

                        <div class="space-sep20"></div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Why Choose Us</h3>
                                    <div class="title-seperator"></div>
                                </div>                <p>
                                    We help small to medium size companies support unique business goals and objectives. 
                                    Leveraging mobile, automated and process management solutions. Our consulting services enable companies to customize their systems.
                                </p>
                                <p>
                                    Streamline your process into automate services and scale your solutions to meet your business needs.
                                    We solve business challenges using enterprise-level custom software development solutions.                                   

                                </p>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="cycle-slideshow frame1"
                                     data-cycle-slides="> .slider-img"
                                     data-cycle-swipe="true"
                                     data-cycle-prev=".cycle-prev"
                                     data-cycle-next=".cycle-next"
                                     data-cycle-overlay-fx-out="slideUp"
                                     data-cycle-overlay-fx-in="slideDown"
                                     data-cycle-timeout=0>
                                    <div class="fa fa-chevron-right cycle-next"></div>
                                    <div class="fa fa-chevron-left cycle-prev"></div>

                                    <div class="cycle-pager"></div>

                                    <!-- slider item -->
                                    <div class="slider-img">

                                        <img src="<?php echo $imgLoc;?>images/placeholders/Logistics_Warehouse_picture.png" alt="Logistics_Warehouse_picture.png"/>
                                    </div>
                                    <!-- //slider item// -->
                                    <!-- slider item -->
                                    <div class="slider-img">

                                        <img src="<?php echo $imgLoc;?>images/placeholders/image-placeholder.jpg" alt="image-placeholder.jpg"/>
                                    </div>
                                    <!-- //slider item// -->
                                </div>


                            </div>               

                        </div>

                        <div class="space-sep40"></div>


                        <div class="row">

                            <div class="col-md-6 col-sm-6">

                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Your Business Solution</h3>
                                    <div class="title-seperator"></div>
                                </div><div class="accordion" data-toggle="off" data-active-index="0">


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>Inventory Managment</h4>
                                        </div>
                                        <div class="desc">Inventory management solution to reduce your carrying costs by tracking products and parts as they are
                                                        transported from a vendor to a warehouse, between warehouses, and finally to a retail location or directly to a customer.</div>
                                    </div>


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>CRM Solutions</h4>
                                        </div>
                                        <div class="desc">Managing interactions with current and future customers ,often involves using technology to organize,
                                                          automate, and synchronize sales, marketing, customer service, and technical support. Our CRM solutions will give you and excellent ROI.</div>
                                    </div>


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>Workflow Automation</h4>
                                        </div>
                                        <div class="desc"> Worlflow solutions, which automates the tasks, resources and internal operations are esstinal to ever business. Our solutions
                                                          provide the unique solutions your business needs!</div>
                                    </div>


                                </div>            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Our Skills</h3>
                                    <div class="title-seperator"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="100%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">.NET / MVC / CRM</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="100%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">IMS / WMS</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="100%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">CUSTOM CODING</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="100%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">HTML5 / CSS3</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-sep40"></div>

                </div>

            </div>
            
            <!--.content-wrapper end -->
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
                                        <ul class="tweetList footer-recent-tweets">
                                            <li class="tweet_content item">
                                                <p>Grab a copy of the popular Boomerang theme for $10 until its next release! </p>
                                                <p class="timestamp">2 days ago</p>
                                            </li>
                                            <li class="tweet_content item">
                                                <p>Newest Blog Awesome post: Stacking Text and Icons <a href="http://t.co/1qRP8K1wjG">Check it</a></p>
                                                <p class="timestamp">4 days ago</p>
                                            </li>
                                        </ul>
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