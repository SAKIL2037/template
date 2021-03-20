<?php

/*

type: layout

name: Product Inner Page - Featured Products

description: Skin 1

*/
?>
<?php


$tn = $tn_size;
if (!isset($tn[0]) or ($tn[0]) == 150) {
    $tn[0] = 350;
}
if (!isset($tn[1])) {
    $tn[1] = $tn[0];
}


?>
<?php if (!empty($data)): ?>
    <?php $count = 0; ?>

    <div class="products-list featured">
        <?php
        foreach ($data as $item):

            $count++;
            ?>

            <div class="col-xs-12 col-sm-4 col-lg-3 product-single">
                <?php if ($show_fields == false or in_array('thumbnail', $show_fields)): ?>
                    <div class="post-thumb">
                        <?php if ($show_fields == false or in_array('price', $show_fields)): ?>
                            <?php if (isset($item['prices']) and is_array($item['prices'])) { ?>
                                <?php
                                 $vals2 = array_values($item['prices']);
                                 $val1 = array_shift($vals2);
                                 $taxam = 0; $tax= mw()->tax_manager->get();
                                 !empty($tax) ? $taxam = $tax['0']['rate'] : $taxam = 0 ;
                                 $val1 = $val1 + ($taxam*$val1)/100;
                                 ?>
                                <span class="price-holder"><?php print currency_format($val1); ?></span>
                            <?php } ?>
                        <?php endif; ?>

                        <a href="<?php print $item['link'] ?>" class="image" style="background-image: url('<?php print thumbnail($item['image'], $tn[0], $tn[1]); ?>');" itemscope
                           itemtype="<?php print $schema_org_item_type_tag ?>"></a>
                           <!-- Quick Checkout Button Start MHB -->
                           <div class="add-cart">
                                    <?php
                                    $add_cart_text = get_option('data-add-to-cart-text', $params['id']);
                                    if ($add_cart_text == false or $add_cart_text == "") {
                                        $add_cart_text = '';
                                    }

                                    ?>
                                    <?php if (is_array($item['prices'])): ?>
                                        <button class="add-to-cart" type="button" data-toggle="modal" data-target="#shoppingCartModal" onclick="mw.cart.add_item('<?php print $item['id'] ?>');">
                                            <i class="material-icons left">shopping_cart</i> <?php print $add_cart_text ?>
                                        </button>
                                    <?php endif; ?>
                                </div>
                        <!-- Quick Checkout Button End MHB --> 
                    </div>
                <?php endif; ?>

                <div class="post-info post-info-modify">
                    <?php if ($show_fields == false or in_array('title', $show_fields)): ?>
                        <h2 itemprop="name"><a itemprop="url" class="lead" href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>
                    <?php endif; ?>


                    <div class="product-description">
                        <!-- Product Footer Added Start MHB -->
                        <div class="product-details-wrapper">
                                        
                            <div class="row">
                                    <div class="product-tax-text" style="display:flex;align-items:center;font-size: 14px;">
                                            <?php $tax= mw()->tax_manager->get();
                                            ?>
                                            <span class="" field="content_body" rel="post">
                                                inkl. <?=intval(!empty($tax['0']['rate']) ? $tax['0']['rate'] : 0)?>% MwSt. zzgl.
                                            </span>
                                            <span>
                                                <a href="<?php print site_url("delivery-conditions"); ?>" style="color:#23a1d1;margin-left:5px;">Versand</a>
                                            </span>
                                    </div>
                            </div>

                            <div class="row">
                                    <?php if (is_logged()) { ?>

                                        <div class="product-wishlist">
                                            <span class="material-icons wishlist-logo" id="wishlist-logo-<?= $item['id']; ?>">
                                                favorite
                                            </span>
                                            <label for="wishlist-select-<?= $item['id']; ?>"></label>
                                            <select id="wishlist-select-<?= $item['id']; ?>" class="js-example-basic-multiple"

                                                    name="states[]" multiple="multiple">
                                            </select>
                                        </div>
                                        <?php } ?>
                            </div>
                                                
                            <div class="row">
                                    <div class="product-quickcheckout-btn">
                                        <?php if (user_id() == 1): ?>
                                            <button class="btn btn-primary copy-url" type="button" data-id="<?php echo $item['id']; ?>" data-lang="<?= url_segment(0); ?>"><i class="fa fa-files-o" style="margin-right:5px;" aria-hidden="true"></i>Schnelle Kaufabwicklung</button>
                                            <?php endif; ?>

                                    </div>
                            </div>

                        </div>
                    <!-- Product Footer Added End MHB -->
                    </div>
                </div>

                <?php if (is_array($item['prices'])): ?>
                    <?php foreach ($item['prices'] as $k => $v): ?>
                        <div class="clear products-list-proceholder mw-add-to-cart-<?php print $item['id'] . $count ?>">
                            <input type="hidden" name="price" value="<?php print $v ?>"/>
                            <input type="hidden" name="content_id" value="<?php print $item['id'] ?>"/>
                        </div>
                        <?php break; endforeach; ?>
                <?php endif; ?>
            </div>

        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>


<!-- Script Added For Wishlist & Share button Start MHB -->
<script>
	  $(document).ready(function(){
		  $('.js-example-basic-multiple').select2();
	  });
  </script>




<script type="text/javascript">
    <?php if (is_logged()) { ?>
    $(document).ready(() => {
        $.get(`<?= api_url('get_wishlist_sessions'); ?>`, result => {
            const selected = [];
            const list = [];
            result.forEach(function (session) {
                console.log(session);
                list.push('<option value=' + session['id'] + '>' + session['name'] + '</option>');

                $("#wishlist-list").append('<li title="'+session['name']+'"><div class="wish-list-det"><div><a href="shop?wishlist_id=' + session["id"] + '" data-category-id="'+session['id']+'" title="'+session['name']+'" class="depth-0">'+session['name']+'</a></div><div><button type="button" id="delete_sss" class="btn" data-toggle="modal" data-name="'+session['name']+'" ><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></button><button type="button" id="edit_sss" class="btn" data-toggle="modal" data-target="#exampleModalCenteredit" data-name="'+session['name']+'" ><i class="fa fa-pencil text-success" aria-hidden="true"></i></button></div></div></li>');
                session['products'].forEach(function (prod) {
                    if (selected[parseInt(prod['product_id'])] === undefined) {
                        selected[parseInt(prod['product_id'])] = [];
                    }
                    selected[parseInt(prod['product_id'])].push(session.id.toString())
                })
            });

            <?php if (!empty($data)): ?>
            <?php foreach ($data as $item): ?>
            var wishlistProduct = $("#wishlist-select-<?php echo $item['id'];?>");
            wishlistProduct.empty();
            wishlistProduct.append('<option disabled value="null"></option>');
            list.forEach(function (value) {
                wishlistProduct.append(value);
            });

            var didd = <?php echo $item['id'];?>;
            wishlist_details(didd);

            <?php endforeach; ?>
            <?php endif; ?>

            selected.forEach(function (value, index) {
                const wishlistProduct2 = $("#wishlist-select-" + index.toString());
                wishlistProduct2.select2().val(value).trigger("change");
            });
            function wishlist_details(didd) {
                if (selected[didd] && selected[didd].length > 0){
                    $("#wishlist-logo-"+didd).text("favorite");
            }
                else{
                    $("#wishlist-logo-"+didd).text("favorite_border");
                }
            }

        });
    });

    <?php if (!empty($data)): ?>
    <?php foreach ($data as $item): ?>
    $("#wishlist-select-<?php echo $item['id'];?>").on('select2:unselect', function (e) {
        removeProduct(<?php echo $item['id'];?>, e.params.data.id)
        if ($("#wishlist-select-<?php echo $item['id'];?>").val().length == 0) {
            $("#wishlist-logo-<?php echo $item['id'];?>").text("favorite_border");
        }
    });

    $("#wishlist-select-<?php echo $item['id'];?>").on('select2:select', function (e) {
        addProduct(<?php echo $item['id'];?>, e.params.data.id)
        $("#wishlist-logo-<?php echo $item['id'];?>").text("favorite");
    });

    <?php endforeach; ?>
    <?php endif; ?>

    function removeProduct(productId, sessionId) {
        $.post("<?php print api_url('remove_wishlist_sessions'); ?>", {productId: productId, sessionId: sessionId}, () => {
        });
    }

    function addProduct(productId, sessionId) {
        $.post("<?php print api_url('add_wishlist_sessions'); ?>", {productId: productId, sessionId: sessionId}, () => {
        });
    }
    <?php } ?>
    function wishlist_filter(wId){
        $.post("<?php print site_url('en/shop'); ?>", {wishlist_id: wId}, () => {
        });
    }
    $("#input_text").hide();
    $("#clickBtn").on('click',function(){
        $("#clickBtn").hide();
        $("#clickBtn").parent().hide();
        $("#input_text").show();
        share_wishlist();
    });

    $(document).on('click','#input_text', function(){
        this.select();
        document.execCommand('copy');
    });
    function share_wishlist() {
        return $.post($('form#wishlist_short_url_form').attr('action'), $('form#wishlist_short_url_form').serialize(), (res) => {
            $('#input_text').val(res.url)
        });
    }

    $(document).on('click','#edit_sss', function(){

let name = $(this).data('name');

console.log(name);
// console.log(id);


$("#exampleInputEmailedit").val(name);
$("#exampleInputEmailedithide").val(name);
});


$(document).on('click','#delete_sss', function(){

let name = $(this).data('name');

console.log(name);
// console.log(id);
$.post("<?php print api_url('delete_wishlist_sessions'); ?>", {name: name}, function (sessions) {
                if (sessions === 'false') {
                    // emailHelp.show();
                    location.reload();

                } else {
                    location.reload();
                }
            });


});


</script>


<script>

    $(document).ready(function(){

        function copyTextToClipboard(text) {
            var textArea = document.createElement("textarea");

            //
            // *** This styling is an extra step which is likely not required. ***
            //
            // Why is it here? To ensure:
            // 1. the element is able to have focus and selection.
            // 2. if the element was to flash render it has minimal visual impact.
            // 3. less flakyness with selection and copying which **might** occur if
            //    the textarea element is not visible.
            //
            // The likelihood is the element won't even render, not even a
            // flash, so some of these are just precautions. However in
            // Internet Explorer the element is visible whilst the popup
            // box asking the user for permission for the web page to
            // copy to the clipboard.
            //

            // Place in the top-left corner of screen regardless of scroll position.
            textArea.style.position = 'fixed';
            textArea.style.top = 0;
            textArea.style.left = 0;

            // Ensure it has a small width and height. Setting to 1px / 1em
            // doesn't work as this gives a negative w/h on some browsers.
            textArea.style.width = '2em';
            textArea.style.height = '2em';

            // We don't need padding, reducing the size if it does flash render.
            textArea.style.padding = 0;

            // Clean up any borders.
            textArea.style.border = 'none';
            textArea.style.outline = 'none';
            textArea.style.boxShadow = 'none';

            // Avoid flash of the white box if rendered for any reason.
            textArea.style.background = 'transparent';


            textArea.value = text;

            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            document.execCommand('copy');

        }

        function copyClipBoardText(className) {
        /* Get the text field */
        // var copyText = document.getElementsByClassName(class);
        var copyText = document.getElementsByClassName(className);
        // console.log(copyText);
        /* Select the text field */
        copyText[0].select();

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        // alert("Copied the text: " + copyText[0].value);
    }
       $(document).on('click','.copy-url',function() {
            // event.preventDefault();
            let id = $(this).data('id');
            let lang = $(this).data('lang');
            $.ajax({
                method: 'POST',
                url: "<?php print api_url('guest_checkout'); ?>",
                data: {iid: id, lang: lang},
                success: function(response){
                    if (response.success) {
                        // $('.clipboard-data-'+id).val(response.url);
                        // console.log(response.url);
                        copyTextToClipboard(response.url);
                        // copyClipBoardText('clipboard-data-'+id);

                    }
                }
            });
            // $.post("<?php print api_url('guest_checkout'); ?>", {iid: id, lang: lang}, (res) => {
            //     console.log(res);
            // });
        });

    });
</script>


<!-- Script Added For Wishlist & Share button End MHB -->