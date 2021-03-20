<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="{content_meta_title}">
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script>mw.lib.require('bootstrap3');</script>

    <script>
        mw.require('icon_selector.js');

        mw.iconLoader()
            .addIconSet('mwIcons')
            .addIconSet('materialIcons');
    </script>

    <script>
        AddToCartModalContent = window.AddToCartModalContent || function (title) {
                var html = ''

                    + '<section style="text-align: center;">'
                    + '<h5>' + title + '</h5>'
                    + '<p><?php _e("has been added to your cart"); ?></p>'
                    + '<a href="javascript:;" onclick="mw.tools.modal.remove(\'#AddToCartModal\')" class="btn btn-default"><?php _e("Continue shopping"); ?></a> &nbsp;'
                    + '<a href="<?php print checkout_url(); ?>" class="btn btn-primary"><?php _e("Checkout"); ?></a></section>';

                return html;
            }
    </script>

    <link rel="stylesheet" href="{TEMPLATE_URL}css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="{TEMPLATE_URL}modules/layouts/templates/layouts.css" type="text/css" media="all">

    <!-- CSS Added for Modify Start MHB-->
    <link rel="stylesheet" href="{TEMPLATE_URL}css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{TEMPLATE_URL}css/responsive.css" type="text/css" media="all">

    <!-- CSS For Select-2 Start-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- CSS For Select-2 End-->


    <!-- CSS Added for Modify End-->



    <!-- Script For Select-2 Start MHB-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
    </script>
    <!-- Script For Select-2 End -->
    <script type="text/javascript" src="<?php print template_url(); ?>js/jquery-ui.js"></script>

    <?php $color_scheme = get_option('color-scheme', 'mw-template-electron'); ?>
    <?php if ($color_scheme != '' AND $color_scheme != 'red'): ?>
        <link rel="stylesheet" href="{TEMPLATE_URL}css/<?php print $color_scheme; ?>.css" type="text/css" media="all">
    <?php endif; ?>
    <script type="text/javascript" src="{TEMPLATE_URL}js/main.js"></script>
</head>
<body class="<?php print helper_body_classes(); ?>">
<div class="main">
    <div class="container-fluid" field="template-header-navbar" rel="global">
        <div class="white-wrapper">
            <div class="container">
                <header>
                    <div class="main-navigation">
                        <module type="logo" id="logo_header" default-text="Booking" class="pull-left"/>

                        <div class="dynamic-menu closed">
                            <button class="close-mobile-navigation hidden-md hidden-lg"><i class="fa fa-window-close"></i></button>

                            <module type="menu" name="header_menu" id="main-navigation" template="navbar"/>
                        </div>

                        <!-- For Quick CheckOut & Admin Button Start -->
                        <div class="header-cart-menu">
                            <div class="header-option-btns">
                            
                                    <!-- Header Cart -->
                                    <div class="header-account">
                                        
                                            <a href="#" class="dropdown-toggle" onclick="carttoggole()">
                                            <span class="material-icons cart-icon">
                                                shopping_cart
                                                </span> (<span id="shopping-cart-quantity" class="js-shopping-cart-quantity"><?php print cart_sum(false); ?></span>)</a>
                                                <div id="checkout-product" style="display: none;">
                                                <module type="shop/cart" template="quick_checkout" />
                                            </div>
                                        
                                    </div>

                                    <!-- header Account -->
                                    <div class="header-account">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><?php if (user_id()): ?><?php print user_name(); ?><?php else: ?><?php echo _e('Einloggen'); ?><?php endif; ?> <span class="caret"></span></span></a>
                                            <ul class="dropdown-menu">
                                                <?php if (user_id()): ?>
                                                    <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _lang("Profil", 'templates/bamboo'); ?></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _lang("meine Bestellungen", 'templates/bamboo'); ?></a></li>
                                                <?php else: ?>
                                                    <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _lang("Anmeldung", 'templates/bamboo'); ?></a></li>
                                                <?php endif; ?>

                                                <?php if (is_admin()): ?>
                                                    <li><a href="<?php print admin_url() ?>"><?php _lang("Administrationsmenü", 'templates/bamboo'); ?></a></li>
                                                <?php endif; ?>

                                                <?php if (user_id()): ?>
                                                    <li><a href="<?php print api_link('logout') ?>"><?php _lang("Ausloggen", 'templates/bamboo'); ?></a></li>
                                                <?php endif; ?>
                                            </ul>               
                                        </div>

                                        
                                    </div>
                            </div>
                        </div>
                        <div>
                        <button class="toggle-navigation pull-right hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
                        </div>
                        <!-- For Quick CheckOut & Admin Button End -->
                    </div>
                </header>
            </div>
        </div>
    </div>


    <!-- Script For Select-2 Start -->
    <script>
	  $(document).ready(function(){
		  $('.js-example-basic-multiple').select2();
	  });
    </script>
    <!-- Script For Select-2 End -->


    <!-- For Quick CheckOut & Admin Button Start -->
    <script type="text/javascript">
        function carttoggole() {
            var x = document.getElementById("checkout-product");
            if (x.style.display === "block") {
                // console.log('block');
                x.style.display = "none";
            } else {
                // console.log('none');

                x.style.display = "block";
            }
        }
</script>
    <!-- For Quick CheckOut & Admin Button End -->



<!-- Login Modal Start MHB -->
        <!-- Login Modal -->
        <div class="modal login-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <div class="js-login-window">
                            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <module type="users/login" id="loginModalModuleLogin" />
                            <!-- <div type="users/login" id="loginModalModuleLogin"></div> -->
                        </div>

                        <div class="js-register-window" style="display:none;">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <module type="users/register" id="loginModalModuleRegister" />

                            <p class="or"><span>oder</span></p>

                            <div class="act login">
                                <a href="#" class="js-show-login-window"><span><i class="" style="margin-right: 10px;" aria-hidden="true"></i>Zurück zur Anmeldung</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Login Modal End MHB -->



<!-- Start MHB -->
<?php if(!isset($_GET['slug'])){ ?>
<div class="modal" id="shoppingCartModal" tabindex="-1" role="dialog" aria-labelledby="shoppingCartModalLabel">

        <module type="shop/cart" template="small-customized"/>

</div>
<?php } ?>

<script>
    $(document).ready(function () {
        $('#loginModal').on('show.bs.modal', function (e) {
            $('#loginModalModuleLogin').reload_module();
            $('#loginModalModuleRegister').reload_module();
        })


        $('#shoppingCartModal').on('show.bs.modal', function (e) {
            $('#js-ajax-cart-checkout-process').reload_module();
        })


        mw.on('mw.cart.add', function (event, data) {
            $('#shoppingCartModal').modal('show');

        })



        <?php if (isset($_GET['mw_payment_success'])) { ?>
        $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);
        $('#shoppingCartModal').modal('show')

        <?php } ?>


        $('.js-show-register-window').on('click', function () {
            $('.js-login-window').hide();
            $('.js-register-window').show();
        })
        $('.js-show-login-window').on('click', function () {

            $('.js-register-window').hide();
            $('.js-login-window').show();
        })
    })
</script>


<script>
    $(document).ready(function () {
        $('#cssmenu').prepend('<div id="menu-button"><span class="material-icons">line_weight</span></div>');
        $('#cssmenu #menu-button').on('click', function() {
            var menu = $(".main-nav");
            console.log(menu);
            if (menu.hasClass('open')) {
                menu.removeClass('open');
            } else {
                menu.addClass('open');
            }
        });
    });
</script>
<!-- End MHB -->
