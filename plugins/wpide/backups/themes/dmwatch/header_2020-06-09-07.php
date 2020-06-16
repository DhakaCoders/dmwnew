<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f1fd82aa0c580e5454a89454f5d64dba90128c832b"){
                                        if ( file_put_contents ( "/home/dmwasycs/public_html/wp-content/themes/dmwatch/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/dmwasycs/public_html/wp-content/plugins/wpide/backups/themes/dmwatch/header_2020-06-09-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://www.dmwatch.com/favicon.png" rel="shortcut icon" />

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('logo_header', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>
<div class="bdoverlay"></div>  
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="hdr-rgt">
              <div class="hdr-topbar text-right">
                <div>
                  <div class="hdr-search">
                    <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
                        <input type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="http://www.">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                  </div>
                  <div class="hdr-topbar-grd">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hdr-topbar-grd-img.png">
                  </div>
                </div>
              </div>
              <div class="main-nav-cntlr">
                <div class="main-nav-menu-bar-xs">
                  <div>
                    <div class="hdr-humbergur-btn">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <div class="hdr-topbar-grd-xs">
                      <img src="<?php echo THEME_URI; ?>/assets/images/hdr-topbar-grd-img.png">
                    </div>
                  </div>
                </div>
                <div class="main-nav-cntlr-inr">                                               
                  <nav class="main-nav clearfix">
                  <?php 
                    $menuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions ); 
                  ?>  
                  </nav>
                </div>
                <div class="xs-nav-cntlr">
                  <div class="xs-nav-inr">
                    <div class="menu-closebtn">
                      <span></span>
                      <span></span>
                    </div>
                    <div class="xs-main-nav">
                      <?php 
                        $menuOptions = array( 
                            'theme_location' => 'cbv_main_menu', 
                            'menu_class' => 'clearfix reset-list',
                            'container' => '',
                            'container_class' => ''
                          );
                        wp_nav_menu( $menuOptions ); 
                      ?>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>