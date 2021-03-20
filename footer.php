            <div class="container-fluid">
                <footer>
                    <div class="silver-wrapper">
                        <div class="container edit nodrop safe-mode" field="electron_footer" rel="global">
                            <div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <module type="logo" id="logo_footer" default-text="Electron"/>
                                        <div class="allow-drop">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <h3 class="section-title">Last News</h3>
                                        <module type="posts" id="footer-posts" limit="2" hide-paging="true" data-show="title,description" description-length="80" template="skin-2" />
                                    </div>

                                    <div class="col-md-2 footer-links">
                                        <h3 class="section-title">Links</h3>
                                        <module type="menu" name="footer_menu" id="footer-navigation" template="small"/>
                                    </div>

                                    <div class="col-md-3 contact-us">
                                        <h3 class="section-title">Contact us</h3>
                                        <p><i class="fa fa-map-marker"></i> ELECTRON CENTER NEW YOURK</p>
                                        <p><i class="fa fa-mobile"></i> Phone: +1 000 111 222</p>
                                        <p><i class="fa fa-envelope"></i> E-mail: info@yourwebsite.com</p>
                                        <p><i class="fa fa-globe"></i> Website: yourwebsite.com</p>

                                        <module type="social_links" class="socials"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="black-wrapper powered-by">
                        <div class="container">
                            <div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php print powered_by_link(); ?> | <a href="<?php print admin_url() ?>">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </body>
</html>