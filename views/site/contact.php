<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use  yii\helpers\BaseHtml;
use app\assets\HomeAsset;


/* @var $this yii\web\View */
$this->title = 'Teknet Media, Inc.';

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
        <title>Teknet Media, Inc. - Contact Us!</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->

        <meta name="description" content="Teknetmedia Inc - Contact Us!">

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
            </div><!--.top wrapper end -->

            <div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>


            <div class="content-wrapper hide-until-loading">
      


                <!-- Contact Map -->
                <div class="body-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="contact-body">
                                    <h3 class="h3-body-title">
                                        Leave A Message
                                    </h3>
                                    <p class="body_paragraph contact-paragraph">
                                        Teknet Media prides itself on being responsive to customers, prospects, and partners. Please provide the details below and a knowledgeable representative will contact you shortly.
                                    </p>
                                    
                                    <div class="form">
                                    
                                     <?php $form = ActiveForm::begin([
										        'id' => 'contact-form',
										        'options' => ['class' => 'form-wrapper'],
										        'fieldConfig' => [
										            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
										            'labelOptions' => ['class' => 'col-lg-1 control-label'],
										        ],
										    ]); ?>
                                    
                                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="name">
                                                         <?php echo Html::activeLabel($model,'name'); ?>
                                                    </label>
                                                         <?php echo Html::activeTextInput($model,'name', ['class' => 'form-control', 'placeholder' => 'Name']) ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="email">
                                                         <?php echo Html::activeLabel($model,'email'); ?>
                                                    </label>
                                                        <?php echo Html::activeTextInput($model,'email', ['class' => 'form-control', 'placeholder' => 'Email']) ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <label for="message">
                                                       <?php echo Html::activeLabel($model,'subject'); ?>
                                                    </label>
                                                       <?php echo Html::activeTextInput($model,'subject', ['class' => 'form-control', 'placeholder' => 'Subject']) ?>                                                                                                              
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <label for=message">
                                                        <?php echo Html::activeLabel($model,'body'); ?>
                                                    </label>                                                                                                        
    											        <?php echo Html::activeTextarea($model,'body', ['class' => 'form-control', 'rows' => '5' ]) ?>    											   	                                                              
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 offset2">
                                                        <?php echo Html::submitButton('Submit', array('class'=>'btn btn-lg'))?>                                                
                                            </div>
                                        </div>

                                 
                                   <?php ActiveForm::end(); ?>
								</div><!-- form -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1">
                                <div class="sidebar">


                                    <div class="sidebar-block">
                                        <h3 class="h3-sidebar-title">
                                            Contact Us
                                        </h3>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-phone"></i> (+1) 777-444-333
                                        </div>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-email"></i>info@teknetmedia.com
                                        </div>
                                        <div class="sidebar-icon-item">
                                            <i class="icon-home"></i> Jacksonville, Fl
                                        </div>
                                    </div>

                                    <div class="sidebar-block">
                                    </div>
                                    <div class="sidebar-block">

                                    </div>
                                    </div>
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