
        <div id="customer" class="col-md-12 col-sm-12 col-md-12" style="background-color:#fff; padding-top:50px; ">
            <div class="margin-detail col-md-12">
                <h2 style="color:#6ab139">Khách Hàng Của Chúng Tôi</h2>
            </div>
            <div class="col-md-12 no-padding">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus1.jpg" tppabs="http://magica.top/Imgs/cus1.jpg" /> -->
                            <?php 
                                        $image = get_field('customer1');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['280px'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/cus6.jpg" tppabs="http://magica.top/Imgs/cus6.jpg" /> -->
                            <?php 
                                        $image = get_field('customer2');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus3.jpg" tppabs="http://magica.top/Imgs/cus3.jpg" /> -->
                            <?php 
                                        $image = get_field('customer3');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 no-padding">
                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/cus7.jpg" tppabs="http://magica.top/Imgs/cus7.jpg" /> -->
                            <?php 
                                        $image = get_field('customer4');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">

                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus5.jpg" tppabs="http://magica.top/Imgs/cus5.jpg" /> -->
                            <?php 
                                        $image = get_field('customer5');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">

                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php// bloginfo('template_directory');?>/image/cus2.jpg" tppabs="http://magica.top/Imgs/cus2.jpg" /> -->
                            <?php 
                                        $image = get_field('customer6');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['sizes'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a  <?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">

                        <div>
                            <!-- <img style="height:280px;width:100%" alt="Hình ảnh" src="<?php //bloginfo('template_directory');?>/image/cus4.jpg" tppabs="http://magica.top/Imgs/cus4.jpg" /> -->
                            <?php 
                                        $image = get_field('customer7');
                                        if( !empty($image) ): 
                                            // vars
                                            $url = $image['url'];
                                            $title = $image['hinhanh'];
                                            $alt = $image['alt'];
                                            $caption = $image['caption'];
                                            // thumbnail
                                            $size = 'large';
                                            $thumb = $image['sizes'][ $size ];
                                            $width = $image['150px'][ $size . '-width' ];
                                            $height = $image['280px'][ $size . '-height' ];
                                            if( $caption ): ?>
                                                <div class="wp-caption">
                                            <?php endif; ?>
                                            <a   title="<?php echo $title; ?>">
                                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                            </a>
                                            <?php if( $caption ): ?>
                                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                                        </div>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >
                <div class="row" >
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 footer">
                        <div class="col-md-6 col-sm-6 col-xs-12 footerlogo" style="padding-left: 7em; padding-top: 3em;">
                            <img style="height:60px" src="<?php bloginfo('template_directory');?>/image/LogoMagic.png" />
                            <p>Mở cánh cửa đến với khách hàng</p>
                        </div>
                        
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3 style="color:#fff">Liên hệ</h3>
                            <div class="col-md-6">
                                
                                <ul class="arr">
                                    <li><i class="fa fa-fw fa-map-marker" aria-hidden="true"></i> 
                                        <?php 
                                            global $wp_query;  
                                            $page = $wp_query->page;
                                            $addr = get_field('addr', $page->ID); 
                                            if ($addr) {
                                                echo $addr;
                                            }
                                        ?>
                                        
                                    </li>
                                    <li><i class="fa fa-fw fa-phone" aria-hidden="true"></i>
                                        <?php 
                                            global $wp_query;  
                                            $page = $wp_query->page;
                                            $phone = get_field('phone-number', $page->ID); 
                                            if ($phone) {
                                                echo $phone;
                                            }
                                        ?>
                                     </li>
                                    <li><i class="fa fa-fw fa-envelope" aria-hidden="true">
                                    </i> 
                                        <?php 
                                            global $wp_query;  
                                            $page = $wp_query->page;
                                            $email = get_field('email', $page->ID); 
                                            if ($email) {
                                                echo $email;
                                            }
                                        ?>
                                    </li>
                                    <li><a style="color:#fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/cong-tac-vien">Cộng tác viên kinh doanh</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="arr">
                                    <li><a style="color:#fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/lien-he">Liên hệ</a></li>
                                    <li><a style="color:#fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></li>
                                    <li><a style="color:#fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/ve-chung-toi">Về chúng tôi</a></li>
                                    <li><a style="color:#fff" href="<?php echo esc_url( home_url( '/' ) ); ?>/dieu-khoan-su-dung">Điều khoản sử dụng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </footer>




