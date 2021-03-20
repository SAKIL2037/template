<div class="shop-sidebar-main">
    <div class="edit sidebar shop-sidebar-cat" rel="inherit">
        <div class="box-container cat-border">
            <h4 class="element sidebar-title">Shop Categories</h4>
            <div class="sidebar-box custom-sidebar-style">
                <module type="categories" content-id="<?php print PAGE_ID; ?>"/>
            </div>
        </div>
    </div>
    <div class="shop-sidebar-wishlist">
        <div class="wishlist-wrapper">
            <div class="side-title">
                <h4 class="sidebar-title"><?php _lang("Wishlist"); ?></h4>
            </div>

            <div class="sidebar-box custom-sidebar-style">
                <ul class="mw-cats-menu" id="wishlist-list">

                </ul>
            </div>
        </div>

        <?php if (is_logged()) { ?>
            <div id="wishlist-sidebar"></div>
            <p>&nbsp;</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Create new wishlist
            </button>
        <?php } else { ?>
            <button data-toggle="modal" class="btn btn-primary" data-target="#loginModal">Login to add wishlist</button>
        <?php } ?>
    </div>
</div>



<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Wishlist title</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Enter wishlist title">
                        <small id="emailHelp" class="form-text text-muted red" style="display: none;">We'll never share
                            your email with anyone else.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="create_sessions()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="exampleModalCenteredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Wishlist title</label>
                        <input type="text" class="form-control" id="exampleInputEmailedit" aria-describedby="emailHelp"
                               placeholder="Enter wishlist title">
                        <input type="hidden" class="form-control" id="exampleInputEmailedithide" aria-describedby="emailHelp"
                               placeholder="Enter wishlist title">
                        <small id="emailHelp" class="form-text text-muted red" style="display: none;">We'll never share
                            your email with anyone else.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="edit_sessions()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function create_sessions() {
        let title = $('#exampleInputEmail1').val();
        const emailHelp = $('#emailHelp');
        emailHelp.hide();
        if (title.trim().length > 0) {
            $.post("<?php print api_url('set_wishlist_sessions'); ?>", {title: title}, function (sessions) {
                if (sessions === 'false') {
                    emailHelp.show();
                } else {
                    location.reload();
                }
            });
        } else {
            emailHelp.show();
        }
    }

    function edit_sessions() {
        let title = $('#exampleInputEmailedit').val();
        let titlehide = $('#exampleInputEmailedithide').val();
        const emailHelp = $('#emailHelp');
        emailHelp.hide();
        if (title.trim().length > 0) {
            $.post("<?php print api_url('edit_wishlist_sessions'); ?>", {title: title, titlehide: titlehide}, function (sessions) {
                if (sessions === 'false') {
                    emailHelp.show();
                } else {
                    location.reload();
                }
            });
        } else {
            emailHelp.show();
        }
    }
</script>
