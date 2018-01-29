<?php get_header(); ?>
<body data-spy="scroll" data-target=".navbar-example" >
    <div class="wrapper">
        <div id="header">
            <div class="top">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbar-example">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar" style="color: #fff"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" style="color: #00a8ff">The Curseborn Saga</a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li id="ho"><a href="#header" class="">HOME</a></li>
                                <li id="in"><a href="#content" class="">INFO</a></li>
                                <li id="ch"><a href="#book" class="">THE BOOKS SERIES</a></li>
                                <li id="th"><a href="#creww" class="">THE CREW</a></li>
                                <li id="se"><a href="#see" class="">SEE OUR WORLD</a></li>
                                <li id="ba"><a href="#baza" class="">BAZAAR</a></li>
                                <li id="co"><a href="#ct" class="">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <?php $header= new WP_Query(
                array(
                    'post_type'=>'header',
                    'post_per_page'=>'3',
                    'order'=>'ASC',
                    'orderby'=>'id'
                )
            );
            ?>
            <?php if($header->have_posts()): while($header->have_posts()): $header->the_post();
            ?>
            <div class="center" style="background-image: url('<?php  echo get_the_post_thumbnail_url($header->id); ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="center-header">
                                <span><?php the_title(); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <!--<section id="section02" class="demo">-->
                                <!--<div class="st">-->
                                    <!--<a href="#section03"><div class="stt" ><span class="section" style="margin-top: 150px"></span></div></a>-->
                                    <!--</div>-->
                                    <!--</section>-->
                                    <div class="bottom item"><button class="circle"><a href="#section03"><i class="arrow fa fa-arrow-down" aria-hidden="true"></i></a></button></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div id="content">
                <section id="section03">
                    <div class="container">
                        <div class="row">
                            <div class="content-header">
                                <div class="col-md-6 col-xs-12">
                                    <div class="content-top">
                                        <?php $content= new WP_Query(
                                            array(
                                                'post_type'=>'content',
                                                'post_per_page'=>'3',
                                                'order'=>'ASC',
                                                'orderby'=>'id'
                                            )
                                        );
                                        ?>
                                        <?php if($content->have_posts()): while($content->have_posts()): $content->the_post();?>
                                            <span class="content-span"><?php the_title(); ?></span>
                                            <div class="content-p1">
                                                <p><?php the_content(); ?></p>
                                            </div>
                                        <?php endwhile; endif; ?>
                                        <div class="content-button">
                                            <button class="button"><i class="fa fa-briefcase" aria-hidden="true"></i> READ MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="content-img">
                                    <div class="content-bg" style="background-image: url('<?php  echo get_the_post_thumbnail_url($content->id); ?>');">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php $Characters = new WP_Query(
                array(
                    'post_type'=>'character',
                    'post_per_page'=>'2',
                    'order'=>'ASC',
                    'orderby'=>'id'
                )
            );
            ?>
            <?php if($Characters->have_posts()): while($Characters->have_posts()): $Characters->the_post(); ?>
                <div id="book" class="bg" style="background-image: url('<?php  echo get_the_post_thumbnail_url($Characters->id); ?>');">
                    <div class="container" style="width: 100%;">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="bg-item">
                                    <span><?php the_title(); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                    <div class="item-1"></div>
                    <div class="item-2"></div>
                    <div class="row">
                        <div class="item" id="slide" >
                            <?php
                            while ( $Characters->have_posts() ) : $Characters->the_post();
                                if ( get_post_gallery() ) :
                                    $gallery = get_post_gallery( get_the_ID(), false );
                                    foreach( $gallery['src'] as $src ) : ?>
                                    <div class="col-md-3 col-xs-12 col-sm-6">
                                        <div class="image-1">
                                            <img src="<?php echo $src; ?>" class="image-1" alt="Gallery image" />
                                        </div>
                                        <div class="info">
                                            <span>STORM</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            endif; 
                        endwhile; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="creww" class="crew">
            <?php $crew = new WP_Query(
                array(
                    'post_type'=>'the_crew',
                    'post_per_page'=>'2',
                    'order'=>'ASC',
                    'orderby'=>'id'
                )
            );
            ?>
            <?php if($crew->have_posts()): while($crew->have_posts()): $crew->the_post(); ?>
                <div class="container">
                    <div class="crew-header">
                        <P><?php the_title(); ?></P>
                    </div>
                    <div class="item-1-crew"></div>
                    <div class="item-2-crew"></div>
                    <div class="crew-content">
                        <p><?php the_content(); ?></p>
                        <button class="crew-button"><i class="fa fa-briefcase" aria-hidden="true"></i> READ MORE</button>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <?php $novella = new WP_Query(
            array(
                'post_type'=>'novella',
                'post_per_page'=>'2',
                'order'=>'ASC',
                'orderby'=>'id'
            )
        );
        ?>
        <?php if($novella->have_posts()): while($novella->have_posts()): $novella->the_post();
        ?>
        <div  class="novella" style="background-image: url('<?php  echo get_the_post_thumbnail_url($novella->id); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="nevolla-header">
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
                </div>
                <?php
                    $a=array();
                    $a[]= get_post_meta( get_the_ID(), 'content_1', true );
                    $a[]= get_post_meta( get_the_ID(),'content_2',true );
                    $a[]= get_post_meta( get_the_ID(),'content_3',true );
                    $a[]= get_post_meta( get_the_ID(),'content_4',true );
                    $a[]= get_post_meta( get_the_ID(),'content_5',true );
                    // echo "<pre>";
                    // var_dump($a);
                    // echo "<pre>";

                ?>
                <div class="item-1"></div>
                <div class="item-2"></div>
                <div class="row">
                    <div id="nove" class="nove-i">
                        <?php foreach($a as $b){ ?>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="square"><p><?php echo $b;?></p></div>
                        </div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    <div id="see" class="seeworld">
        <div class="container">
            <div class="seeworld-header">
                SEE <b>OUR WORLD</b>
            </div>
            <div class="item-1-seeworld"></div>
            <div class="item-2"></div>
            <div class="seeworld-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
        </div>
    </div>
    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="filter-header">
                    <div class="col-md-8 col-xs-6">
                        <div class="filter-type">
                            <p>Filter by type</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="filter-character">
                        <div class="filter-menu">
                            <ul class="nav nav-tabs">
                                <?php $args = array('taxonomy' => 'thefilter');
                                $tax_menu_items = get_categories( $args );
                                // echo "<pre>";
                                // var_dump($tax_menu_items);
                                // echo "</pre>";
                                ?>
                                <?php
                                $a=array();
                                foreach($tax_menu_items as $tax_menu_item)
                                    $a[]=get_term_link($tax_menu_item,$tax_menu_item->taxonomy);
                                    //     asort($a);
                                    // print_r($a);
                                ?>
                                <li class="active"><a class="title-tab" data-toggle="tab" href="#menu1" id="tab-menu1">The Characters</a></li>
                                <li><a class="title-tab" data-toggle="tab" href="#menu2" id="tab-menu2">Conceptual Artwork</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="filter-image">
                    <div class="row">
                        <div class="tab-pane fade in active" id="menu1">
                            <?php
                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'thefilter',
                                        'field' => 'slug',
                                        'terms' => array( 'thecharacter' )
                                    ),
                                ),
                                'post_type' => 'world'
                            );
                            $loop = new WP_Query($args);
                            if($loop->have_posts()) {
                                $term = $wp_query->queried_object;
                                while($loop->have_posts()) : $loop->the_post(); 
                                    ?>
                                    <div class='col-lg-3 col-md-4 col-sm-4 col-xs-6'>
                                        <div class='thumbnail'>
                                            <div class='type-image' style="background-image: url('<?php echo get_the_post_thumbnail_url($loop->id); ?>');height: 302.5px;">  
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                endwhile;
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="menu2">
                            <?php
                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'thefilter',
                                        'field' => 'slug',
                                        'terms' => array( 'artwork' )
                                    ),
                                ),
                                'post_type' => 'world'
                            );
                            $loop = new WP_Query($args);
                            if($loop->have_posts()) {
                                $term = $wp_query->queried_object;
                                while($loop->have_posts()) : $loop->the_post(); 
                                    ?>
                                    <div class='col-lg-3 col-md-4 col-sm-4 col-xs-6'>
                                        <div class='thumbnail'>
                                            <div class='type-image' style="background-image: url('<?php echo get_the_post_thumbnail_url($loop->id); ?>');height: 302.5px;">  
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                endwhile;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $bazzaar = new WP_Query(
        array(
            'post_type'=>'bazzar',
            'post_per_page'=>'2',
            'order'=>'ASC',
            'orderby'=>'id'
        )
    );
    ?>
    <?php if($bazzaar->have_posts()): while($bazzaar->have_posts()): $bazzaar->the_post(); ?>
        <div id="baza" class="bazzaar" style="background-image: url('<?php  echo get_the_post_thumbnail_url($bazzaar->id); ?>');" data-parallax="scroll" data-image-src="./img/bazzarbg.png">
            <div class="bazzaar-header">
                <p><?php the_title(); ?></p>
            </div>
            <div class="item-1"></div>
            <div class="item-2"></div>
            <div class="container">
                <div class="bazzaar-content">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <div id="ct" class="contact">
        <div class="container">
            <div class="contact-header">
                <?php $feelfree = new WP_Query(
                    array(
                        'post_type'=>'feelfree',
                        'post_per_page'=>'2',
                        'order'=>'ASC',
                        'orderby'=>'DES'

                    )
                );
                ?>
                <?php if($feelfree->have_posts()): while($feelfree->have_posts()): $feelfree->the_post();?>
                    <p><?php the_title(); ?></b></p>
                </div>
                <div class="item-1-contact"></div>
                <div class="item-2-contact"></div>
                <div class="contact-content">
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile; endif; ?>
            <!--<div class="row">
                <div class="col-md-6">
                    <div class="name">
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="email">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="message" style="font-size: 20px;margin-top: 40px">
                        <div class="form-group">
                            <label for="comment">Message:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="send" style="text-align: right;">
                            <button type="button" class="btn btn-default" style="background: #00a5ff;color:#ffffff">SEND</button>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <?php get_footer(); ?>