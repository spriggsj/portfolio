<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        

    

    <?php wp_head(); ?>
    <script>
        
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

  </head>

      <body <?php body_class(); ?>>

        <!-- wrapper -->
        <!-- <div class="wrapper">-->

          <!-- header -->
          <!--<header class="header clear" role="banner">-->
                <nav class="navbar navbar-inverse navbar-static-top">
                <div class="navbar  navbar-custom" style="border-radius:0px;"> 
                    <!-- Brand and toggle get grouped for better mobile display --> 
                        <div class="container"> 
                            <div class="row">
                                <div class="col-xs-12 col-md-5 main-img">
                                    <a href="<?php bloginfo('url');?>" class="navbar-brand">Spriggs Studio</a>
                                </div>

                                <div class="col-xs-12 col-md-7">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-12 contact-img">
                                            
                                            
                                        </div>
                                             <div class="col-xs-9 col-md-12">
                                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span> 
                                                </button>
                                            </div> 
                                 
                                        <!-- Collect the nav links, forms, and other content for toggling --> 
                                            <div class="collapse navbar-collapse navHeaderCollapse"> 
                                                <div class="col-xs-12 main-nav">
                                                    <?php /* Primary navigation */
                                                        wp_nav_menu( array(
                                                        'menu' => 'primary',
                                                        'theme-location' => 'primary',
                                                        'depth' => 2,
                                                        'menu_class' => 'nav navbar-nav ',
                                                        'fallback-cb' => 'wp_bootstrap_navwalker::fallback',
                                                        //Process nav menu using our custom nav walker
                                                        'walker' => new wp_bootstrap_navwalker())
                                                        );
                                                    ?>
                                                </div>
                                            </div>
                                    </div>

                                </div><!--end div class collapse navbar-collapse navHeaderCollapse -->
                            </div>
                        </div><!--end div class container-fluid-->
                    </div><!--end div class navbar  navbar-static-top navbar-custom-->
                </nav> 
                <!--end nav-->

                
           


  