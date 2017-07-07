
<div class="navbar-inverse eduu-navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <div class="mini-logo">
                    <img style="height:25px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/LogoMagic.png" />
                </div>
                <button id="collapsed-btn" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div  class="navbar-collapse collapse">
                <div>
                    <div class="big-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="height:40px" alt="Hình ảnh" src="<?php bloginfo('template_directory');?>/image/LogoMagic.png" /></a>
                    </div>
                    <ul class="nav navbar-nav pull-right" style="padding-top:12px">
                        <li class="dropdown tb-show">
                            <a class="hasSub" href="#">DỊCH VỤ</a>
                            <ul class="dropdown-menu">
                                <li style="padding-top:4px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/magic/seo">SEO</a></li>
                                <li style="padding-top:4px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/google-ads">QUẢNG CÁO GOOGLE</a></li>
                                <li style="padding-top:4px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-ke-website">THIẾT KẾ WEBSITE</a></li>
                            </ul>
                        </li>

                        <li class="dropdown tb-show">
                            <a class="hasSub" href="http://blog.magica.top/">SEO BLOG</a>
                            
                        </li>

                        <li class="tb-hide" style="padding:5px 0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/seo">SEO</a></li>
                        <li class="tb-hide" style="padding:5px 0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/google-ads">QUẢNG CÁO GOOGLE</a></li>
                        <li class="tb-hide" style="padding:5px 0;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-ke-website">THIẾT KẾ WEBSITE</a></li>
                        <li class="tb-hide" style="padding:5px 0; margin-bottom:7px"><a href="http://blog.magica.top/">SEO BLOG</a></li>
                        <li>
                            <a href="#"><span class="top-hotline">
                                <i class="fa fa-phone" aria-hidden="true">    
                                </i> 
                                    <?php 
                                        global $wp_query;  
                                        $page = $wp_query->page;
                                        $phone = get_field('phone-number', $page->ID);
                                        if ($phone) {
                                            echo $phone;
                                        }
                                    ?>
                            </span></a>
                        </li>
                    </ul>
                </div>             
            </div>
        </div>
    </div>
