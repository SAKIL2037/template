<?php
/*
type: layout
name: Checkout
position: 3
description: Checkout
*/
?>
<?php include template_dir() . "header.php"; ?>

<div class="" rel="content" field="electron_content">
        <div class="page-section section pt-60 pb-80">
            <div class="container">
            <div class="text-center">
                <h2>Complete your order</h2>
            </div>
                <div class="row">
                    <module type="shop/checkout" id="cart_checkout" template="default"/>
                </div>
            </div>
        </div>
    </div>


<?php include template_dir() . "footer.php"; ?>