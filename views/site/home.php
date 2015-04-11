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
                                        <!-- 
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon pininterest-icon" data-original-title="pininterest">pininterest</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon dribble-icon" data-original-title="dribble">dribble</a>
                                        </li>
                                         -->
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
                                    <img src="<?php echo $imgLoc;?>images/main_logo.png" alt="Kanzi HTML5 Template"/>
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
                                            <a href="home-version1.html" class="activelink">
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
                                            <!-- 
                                            <ul>

                                                <li>
                                                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/register">Sign Up </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/login">Sign In</a>
                                                </li>

                                            </ul>
                                             -->
                                        </li>
                                        <li>
                                            <a href="services.html">
                                                <span class="label-nav">
                                                    Services
                                                </span>
                                            </a>         
                                        </li>
                                        <li>
                                            <a href="contact.html">
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
                                     data-easing="easeOutCubic" data-end="6000" data-endspeed="500">Logistics Technology</div>


                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
                                    We our leaders in logistics systems that meet your<br /> 
                                    supply chain needs!
                                </div>
                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
                                    <a href="#" class="button btn-flat">More Info</a>
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
                                     data-easing="easeOutCubic" data-end="6000" data-endspeed="500">IMS Innovation</div>


                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="200" data-start="1000" data-easing="easeOutBack" data-end="4500" data-endspeed="500">
                                    Our world class experience gives your systems the innovative<br />
                                    edge! 
                                </div>
                                <div class="tp-caption slider-text-description sft str"  data-x="20" data-y="280" data-start="1500" data-easing="easeOutBack" data-end="5000" data-endspeed="500">
                                    <a href="#" class="button btn-flat">More Info</a>
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
                                <div class="content-box content-style4 medium animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-settings-streamline"></i>
                                        CRM Development
                                    </h4>
                                    <div class="content-box-text">
                                        Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                        ligula. Nunc commodo lacinia eros ac condimentum

                                        <div>
                                            <a href="#" class=" btn btn-sm">
                                                <span>read more</span>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-camera-streamline-video"></i>
                                        Sharepoint Development
                                    </h4>
                                    <div class="content-box-text">
                                        Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                        ligula. Nunc commodo lacinia eros ac condimentum

                                        <div>
                                            <a href="#" class=" btn btn-sm">
                                                <span>read more</span>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-computer-imac"></i>
                                        Workflow Automation
                                    </h4>
                                    <div class="content-box-text">
                                        Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                        ligula. Nunc commodo lacinia eros ac condimentum

                                        <div>
                                            <a href="#" class=" btn btn-sm">
                                                <span>read more</span>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="content-box content-style4 medium animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-paint-bucket-streamline"></i>
                                        Custom Development
                                    </h4>
                                    <div class="content-box-text">
                                        Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                        ligula. Nunc commodo lacinia eros ac condimentum

                                        <div>
                                            <a href="#" class=" btn btn-sm">
                                                <span>read more</span>
                                            </a>
                                        </div>

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
                                    <div class="thumb-label-item animated seo"
                                         data-animtype="fadeInUp"
                                         data-animrepeat="0"
                                         data-speed="1s"
                                         data-delay="0.6s">
                                        <div class="img-overlay thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/portfolio1.jpg"
                                                alt=""/>

                                            <div class="item-img-overlay">
                                                <a class="portfolio-zoom fa fa-plus"
                                                   href="<?php echo $imgLoc;?>images/placeholders/portfolio1.jpg"
                                                   data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                <div class="item_img_overlay_content">
                                                    <h3 class="thumb-label-item-title">
                                                        <a href=""> Aenean llus mtus </a>
                                                    </h3>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item animated seo"
                                         data-animtype="fadeInUp"
                                         data-animrepeat="0"
                                         data-speed="1s"
                                         data-delay="0.8s">
                                        <div class="img-overlay thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/portfolio2.jpg"
                                                alt=""/>

                                            <div class="item-img-overlay">
                                                <a class="portfolio-zoom fa fa-plus"
                                                   href="<?php echo $imgLoc;?>images/placeholders/portfolio2.jpg"
                                                   data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                <div class="item_img_overlay_content">
                                                    <h3 class="thumb-label-item-title">
                                                        <a href=""> Donec vitae sapien </a>
                                                    </h3>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item animated seo"
                                         data-animtype="fadeInUp"
                                         data-animrepeat="0"
                                         data-speed="1s"
                                         data-delay="1s">
                                        <div class="img-overlay thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/portfolio3.jpg"
                                                alt=""/>

                                            <div class="item-img-overlay">
                                                <a class="portfolio-zoom fa fa-plus"
                                                   href="<?php echo $imgLoc;?>images/placeholders/portfolio3.jpg"
                                                   data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                <div class="item_img_overlay_content">
                                                    <h3 class="thumb-label-item-title">
                                                        <a href=""> Maecas nec odio </a>
                                                    </h3>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <div class="thumb-label-item animated branding"
                                         data-animtype="fadeInUp"
                                         data-animrepeat="0"
                                         data-speed="1s"
                                         data-delay="1.2s">
                                        <div class="img-overlay thumb-label-item-img">
                                            <img
                                                src="<?php echo $imgLoc;?>images/placeholders/portfolio4.jpg"
                                                alt=""/>

                                            <div class="item-img-overlay">
                                                <a class="portfolio-zoom fa fa-plus"
                                                   href="http://www.youtube.com/watch?v=mcw6j-QWGMo"
                                                   data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                <div class="item_img_overlay_content">
                                                    <h3 class="thumb-label-item-title">
                                                        <a href=""> Vestibum friilla </a>
                                                    </h3>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
<!--                                     <div class="thumb-label-item animated branding" -->
<!--                                          data-animtype="fadeInUp" -->
<!--                                          data-animrepeat="0" -->
<!--                                          data-speed="1s" -->
<!--                                          data-delay="1.4s"> -->
<!--                                         <div class="img-overlay thumb-label-item-img"> -->
<!--                                             <img -->
<!--                                                 src="images/placeholders/portfolio5.jpg" -->
<!--                                                 alt=""/> -->

<!--                                             <div class="item-img-overlay"> -->
<!--                                                 <a class="portfolio-zoom fa fa-plus" -->
<!--                                                    href="images/placeholders/portfolio5.jpg" -->
<!--                                                    data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                 <div class="item_img_overlay_content"> -->
<!--                                                     <h3 class="thumb-label-item-title"> -->
<!--                                                         <a href=""> Curatur lula </a> -->
<!--                                                     </h3> -->
<!--                                                 </div> -->

<!--                                             </div> -->
<!--                                         </div> -->


                                    </div>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
<!--                                     <div class="thumb-label-item animated videos" -->
<!--                                          data-animtype="fadeInUp" -->
<!--                                          data-animrepeat="0" -->
<!--                                          data-speed="1s" -->
<!--                                          data-delay="1.6s"> -->
<!--                                         <div class="img-overlay thumb-label-item-img"> -->
<!--                                             <img -->
<!--                                                 src="images/placeholders/portfolio6.jpg" -->
<!--                                                 alt=""/> -->

<!--                                             <div class="item-img-overlay"> -->
<!--                                                 <a class="portfolio-zoom fa fa-plus" -->
<!--                                                    href="http://www.youtube.com/watch?v=mcw6j-QWGMo" -->
<!--                                                    data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                 <div class="item_img_overlay_content"> -->
<!--                                                     <h3 class="thumb-label-item-title"> -->
<!--                                                         <a href=""> Pellentesque </a> -->
<!--                                                     </h3> -->
<!--                                                 </div> -->

<!--                                             </div> -->
<!--                                         </div> -->


<!--                                     </div> -->
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
<!--                                     <div class="thumb-label-item animated seo" -->
<!--                                          data-animtype="fadeInUp" -->
<!--                                          data-animrepeat="0" -->
<!--                                          data-speed="1s" -->
<!--                                          data-delay="1.8s"> -->
<!--                                         <div class="img-overlay thumb-label-item-img"> -->
<!--                                             <img -->
<!--                                                 src="images/placeholders/portfolio7.jpg" -->
<!--                                                 alt=""/> -->

<!--                                             <div class="item-img-overlay"> -->
<!--                                                 <a class="portfolio-zoom fa fa-plus" -->
<!--                                                    href="images/placeholders/portfolio7.jpg" -->
<!--                                                    data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                 <div class="item_img_overlay_content"> -->
<!--                                                     <h3 class="thumb-label-item-title"> -->
<!--                                                         <a href=""> In enim justo </a> -->
<!--                                                     </h3> -->
<!--                                                 </div> -->

<!--                                             </div> -->
<!--                                         </div> -->


<!--                                     </div> -->
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
<!--                                     <div class="thumb-label-item animated web-design" -->
<!--                                          data-animtype="fadeInUp" -->
<!--                                          data-animrepeat="0" -->
<!--                                          data-speed="1s" -->
<!--                                          data-delay="2s"> -->
<!--                                         <div class="img-overlay thumb-label-item-img"> -->
<!--                                             <img -->
<!--                                                 src="images/placeholders/portfolio8.jpg" -->
<!--                                                 alt=""/> -->

<!--                                             <div class="item-img-overlay"> -->
<!--                                                 <a class="portfolio-zoom fa fa-plus" -->
<!--                                                    href="images/placeholders/portfolio8.jpg" -->
<!--                                                    data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                 <div class="item_img_overlay_content"> -->
<!--                                                     <h3 class="thumb-label-item-title"> -->
<!--                                                         <a href=""> Lutus puvinar </a> -->
<!--                                                     </h3> -->
<!--                                                 </div> -->

<!--                                             </div> -->
<!--                                         </div> -->


<!--                                     </div> -->
                                    <!-- //Portfolio Item// -->


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
<!--                                     <li class="tab active"> -->
<!--                                         <a href="#tabc1"> Our News</a> -->
<!--                                     </li> -->
                                    <li class="tab">
                                        <a href="#tabc2"> Clients</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#tabc3"> NewsLetter</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="container">

                                <div class="tab-content">

<!--                                     <div id="tabc1"> -->
<!--                                         <div class="row"> -->
<!--                                             <div class="col-md-3 col-sm-3"> -->
<!--                                                 <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.4s"> -->
<!--                                                     <div class="feature-image img-overlay"> -->
<!--                                                         <img src="images/placeholders/blog1.jpg" alt="Blog"> -->

<!--                                                         <div class="item-img-overlay"> -->
<!--                                                             <a class="portfolio-zoom fa fa-plus" href="images/placeholders/blog1.jpg" -->
<!--                                                                data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                         </div> -->

<!--                                                     </div> -->

<!--                                                     <div class="feature-content"> -->
<!--                                                         <h3 class="h3-body-title blog-title"> -->
<!--                                                             <a href="">Vix sumo ferri an</a> -->
<!--                                                         </h3> -->
<!--                                                         <p> -->
<!--                                                             Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...] -->
<!--                                                         </p> -->



<!--                                                     </div> -->

<!--                                                     <div class="feature-details"> -->
<!--                                                         <i class="icon-calendar"></i> -->
<!--                                                         <span>July 10, 2013</span> -->
<!--                                                         <span class="details-seperator"></span> -->

<!--                                                         <a href="#"><i class="icon-comment"></i><span>4</span></a> -->


<!--                                                         <div class="feature-share"> -->
<!--                                                             <a href="#"><i class="icon-heart"></i></a> -->
<!--                                                             <a href="#"><i class="icon-facebook"></i></a> -->
<!--                                                         </div> -->
<!--                                                     </div>         -->
<!--                                                 </div> -->
<!--                                             </div> -->
<!--                                             <div class="col-md-3 col-sm-3"> -->
<!--                                                 <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.6s"> -->
<!--                                                     <div class="feature-image img-overlay"> -->
<!--                                                         <img src="images/placeholders/blog2.jpg" alt="Blog"> -->

<!--                                                         <div class="item-img-overlay"> -->
<!--                                                             <a class="portfolio-zoom fa fa-plus" href="images/placeholders/blog2.jpg" -->
<!--                                                                data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                         </div> -->

<!--                                                     </div> -->

<!--                                                     <div class="feature-content"> -->
<!--                                                         <h3 class="h3-body-title blog-title"> -->
<!--                                                             <a href="">Donec vitae sapien</a> -->
<!--                                                         </h3> -->
<!--                                                         <p> -->
<!--                                                             Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...] -->
<!--                                                         </p> -->



<!--                                                     </div> -->

<!--                                                     <div class="feature-details"> -->
<!--                                                         <i class="icon-calendar"></i> -->
<!--                                                         <span>July 10, 2013</span> -->
<!--                                                         <span class="details-seperator"></span> -->

<!--                                                         <a href="#"><i class="icon-comment"></i><span>4</span></a> -->


<!--                                                         <div class="feature-share"> -->
<!--                                                             <a href="#"><i class="icon-heart"></i></a> -->
<!--                                                             <a href="#"><i class="icon-facebook"></i></a> -->
<!--                                                         </div> -->
<!--                                                     </div>         -->
<!--                                                 </div> -->
<!--                                             </div> -->
<!--                                             <div class="col-md-3 col-sm-3"> -->
<!--                                                 <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.8s"> -->
<!--                                                     <div class="feature-image img-overlay"> -->
<!--                                                         <img src="images/placeholders/blog3.jpg" alt="Blog"> -->

<!--                                                         <div class="item-img-overlay"> -->
<!--                                                             <a class="portfolio-zoom fa fa-plus" href="images/placeholders/blog3.jpg" -->
<!--                                                                data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                         </div> -->

<!--                                                     </div> -->

<!--                                                     <div class="feature-content"> -->
<!--                                                         <h3 class="h3-body-title blog-title"> -->
<!--                                                             <a href="">Aenean tellus metus</a> -->
<!--                                                         </h3> -->
<!--                                                         <p> -->
<!--                                                             Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...] -->
<!--                                                         </p> -->



<!--                                                     </div> -->

<!--                                                     <div class="feature-details"> -->
<!--                                                         <i class="icon-calendar"></i> -->
<!--                                                         <span>July 10, 2013</span> -->
<!--                                                         <span class="details-seperator"></span> -->

<!--                                                         <a href="#"><i class="icon-comment"></i><span>4</span></a> -->


<!--                                                         <div class="feature-share"> -->
<!--                                                             <a href="#"><i class="icon-heart"></i></a> -->
<!--                                                             <a href="#"><i class="icon-facebook"></i></a> -->
<!--                                                         </div> -->
<!--                                                     </div>         -->
<!--                                                 </div> -->
<!--                                             </div> -->
<!--                                             <div class="col-md-3 col-sm-3"> -->
<!--                                                 <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="1s"> -->
<!--                                                     <div class="feature-image img-overlay"> -->
<!--                                                         <img src="images/placeholders/blog4.jpg" alt="Blog"> -->

<!--                                                         <div class="item-img-overlay"> -->
<!--                                                             <a class="portfolio-zoom fa fa-plus" href=">images/placeholders/blog4.jpg" -->
<!--                                                                data-rel="prettyPhoto[portfolio]" title="Title goes here"></a> -->

<!--                                                         </div> -->

<!--                                                     </div> -->

<!--                                                     <div class="feature-content"> -->
<!--                                                         <h3 class="h3-body-title blog-title"> -->
<!--                                                             <a href="">Aenean tellus metus</a> -->
<!--                                                         </h3> -->
<!--                                                         <p> -->
<!--                                                             Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...] -->
<!--                                                         </p> -->



<!--                                                     </div> -->

<!--                                                     <div class="feature-details"> -->
<!--                                                         <i class="icon-calendar"></i> -->
<!--                                                         <span>July 10, 2013</span> -->
<!--                                                         <span class="details-seperator"></span> -->

<!--                                                         <a href="#"><i class="icon-comment"></i><span>4</span></a> -->


<!--                                                         <div class="feature-share"> -->
<!--                                                             <a href="#"><i class="icon-heart"></i></a> -->
<!--                                                             <a href="#"><i class="icon-facebook"></i></a> -->
<!--                                                         </div> -->
<!--                                                     </div>         -->
<!--                                                 </div> -->
<!--                                             </div> -->
<!--                                         </div>             -->
<!--                                     </div> -->
                                    <div id="tabc2">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <h2 class="h2-section-title animated" data-animtype="flipInX" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s">Our Clients </h2>
                                                <h3 class="h3-section-info animated" data-animtype="flipInX" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                                    rhoncus ut, imperdiet</h3>
                                                <ul class="section-clients">
                                                    <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.2s"><img src="<?php echo $imgLoc;?>images/placeholders/clients/white_logo1.png" alt="Logo" class="img-responsive client-image" /></li>
                                                    <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.3s"><img src="<?php echo $imgLoc;?>images/placeholders/clients/white_logo2.png" alt="Logo" class="img-responsive client-image" /></li>
                                                    <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.4s"><img src="<?php echo $imgLoc;?>images/placeholders/clients/white_logo3.png" alt="Logo" class="img-responsive client-image" /></li>
                                                    <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.5s"><img src="<?php echo $imgLoc;?>images/placeholders/clients/white_logo4.png" alt="Logo" class="img-responsive client-image" /></li>
                                                    <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.6s"><img src="<?php echo $imgLoc;?>images/placeholders/clients/white_logo5.png" alt="Logo" class="img-responsive client-image" /></li>
                                                </ul>
                                            </div>
                                        </div>            </div>
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
                                            <form action="#" method="post">
                                                <input type="text" name="q" class="subscribe-input text-input" placeholder="Email.."/>
                                                <button class="subscribe-button icon-email-plane">

                                                </button>
                                            </form>

                                            <div class="social-icons circle">

                                                <a href="#" target="_blank" class="social-media-icon facebook-icon bounceIn" data-original-title="facebook">facebook</a>

                                                <a href="#" target="_blank" class="social-media-icon twitter-icon bounceIn" data-original-title="twitter">Twitter</a>

                                                <a href="#" target="_blank" class="social-media-icon skype-icon bounceIn" data-original-title="skype">skype</a>

                                                <a href="#" target="_blank" class="social-media-icon evernote-icon bounceIn" data-original-title="evernote">evernote</a>

                                                <a href="#" target="_blank" class="social-media-icon flickr-icon bounceIn" data-original-title="flickr">flickr</a>

                                                <a href="#" target="_blank" class="social-media-icon instagram-icon bounceIn" data-original-title="instagram">instagram</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>    </div>

<!--                     <div class="section-content no-padding"> -->


<!--                         <div class="container"> -->

<!--                             <div class="row"> -->
<!--                                 <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp" -->
<!--                                      data-animrepeat="0" -->
<!--                                      data-speed="1s" -->
<!--                                      data-delay="0.4s"> -->
<!--                                     <h2 class="h2-section-title">Take A Closer Look</h2> -->

<!--                                     <div class="i-section-title"> -->
<!--                                         <i class="icon-zoom-in"> -->

<!--                                         </i> -->
<!--                                     </div> -->

<!--                                     <h3 class="h3-section-info"> -->
<!--                                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque -->
<!--                                         laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et -->
<!--                                         quasi architecto beatae vitae dicta sunt explicabo. -->
<!--                                     </h3> -->
<!--                                 </div> -->

<!--                             </div> -->

<!--                             <div class="row"> -->
<!--                                 <div class="col-md-12 col-sm-12 no-bottom-margin animated" data-animtype="fadeInUp" -->
<!--                                      data-animrepeat="0" -->
<!--                                      data-animspeed="1s" -->
<!--                                      data-animdelay="0.7s"> -->
<!--                                     <img src="images/placeholders/responsive-mockup2-placeholder.png" alt="MockUp" class="img-responsive" /> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->

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
                                                <strong>CRM </strong> Development            

                                                <i class="icon-ipad"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                                <strong>Sharepoint </strong> Development            

                                                <i class="icon-settings"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                                <strong>Automate </strong> Business Processes            

                                                <i class="icon-file-settings"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
                                                </p>
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
                                                <strong>Custom </strong> Deveploment            

                                                <i class="icon-eye"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                                <strong>Workflow </strong> Managment            

                                                <i class="icon-world"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                                <strong>Inventory </strong> Management            

                                                <i class="fa fa-film"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                                <strong>Government </strong> Contracting            

                                                <i class="icon-lab"></i>
                                            </h4>
                                            <div class="content-box-text">
                                                <p> 
                                                    Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
                                                    ligula. Nunc commodo lacinia eros ac condimentum
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
                                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                    nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="testimonial-big-img animated" data-animtype="fadeInLeft"
                                     data-animrepeat="1"
                                     data-speed="1s"
                                     data-delay="0s">
                                    <img src="<?php echo $imgLoc;?>images/placeholders/testimonial-big.png" alt=""/>
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
                                            <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor.</p>
                                            <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor.</p>
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
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-title">
                                        Photostream
                                    </div>
                                    <div class="footer-content">
                                        <div class="flickr_badge_wrapper">
                                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=all_tag&tag=Sky,scrappers" id="flicker-images"></script>                            
                                        </div>
                                        <!-- //Footer Col.// -->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 center-text">
                                    <div class="copyright-text">&copy; 2013 Kanzi Theme | Theme Developed By <a href="http://www.activeaxon.com" target="_blank">ActiveAxon</a></div>
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
