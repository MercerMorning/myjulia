<?php get_header(); ?>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php
            $service_types = new WP_Query ( array(
                'post_type' => 'service_types'
            ) );
            if ($service_types->have_posts()) :
                while ($service_types->have_posts()) :
                    $service_types->the_post();
                    ?>
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="media-body">
                                <div class="icon d-flex mb-3 justify-content-center">
                                    <!--                                <span class="flaticon-curl"></span>-->
                                    <img src="<?php echo get_field('image')['url']; ?>" width="40" height="40">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h3 class="heading"><?php echo get_the_title(); ?></h3>
                                <p><?php echo get_field('description'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Наши эксперты</h2>
<!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
            </div>
        </div>
        <div class="row">
            <?php
            $service_types = new WP_Query ( array(
                'post_type' => 'employees'
            ) );
            if ($service_types->have_posts()) :
                while ($service_types->have_posts()) :
                    $service_types->the_post();
                    ?>
                    <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html"><?php the_title(); ?></a></h3>
<!--                                <span class="position">Stylist</span>-->
                                <div class="text">
                                    <p><?php echo get_field('description'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php
$service_types = new WP_Query ( array(
    'post_type' => 'sales'
) );
if ($service_types->have_posts()) :
    while ($service_types->have_posts()) :
        $service_types->the_post();
        ?>
        <section class="ftco-section ftco-discount img" style="background-image: url(<?php echo get_field('image')['url']; ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-5 discount ftco-animate">
                        <h3><?php the_title(); ?></h3>
                        <p class="mb-4"><?php echo get_field('description'); ?></p>
<!--                        <h2 class="mb-4">Student Discount</h2>-->
<!--                        <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>-->
<!--                        <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3">Book Now</a></p>-->
                    </div>
                </div>
            </div>
        </section>
    <?php
    endwhile;
endif;
wp_reset_postdata();
?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Мои работы</h2>
<!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
            </div>
        </div>
        <div class="row">
            <?php
            $service_types = new WP_Query ( array(
                'post_type' => 'works'
            ) );
            if ($service_types->have_posts()) :
                while ($service_types->have_posts()) :
                    $service_types->the_post();
                    ?>
                    <div class="col-md-4 ftco-animate">
                        <a href="#" class="work-entry">
                            <img src="<?php echo get_field('image')['sizes']['Работа']; ?>" class="img-fluid" alt="Colorlib Template">
                            <div class="info d-flex align-items-center">
                                <div>
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="icon-search"></span>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<!--<section class="ftco-partner bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row partner justify-content-center">-->
<!--            <div class="col-md-10">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-3 ftco-animate">-->
<!--                        <a href="#" class="partner-entry">-->
<!--                            <img src="images/partner-1.jpg" class="img-fluid" alt="Colorlib template">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 ftco-animate">-->
<!--                        <a href="#" class="partner-entry">-->
<!--                            <img src="images/partner-2.jpg" class="img-fluid" alt="Colorlib template">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 ftco-animate">-->
<!--                        <a href="#" class="partner-entry">-->
<!--                            <img src="images/partner-3.jpg" class="img-fluid" alt="Colorlib template">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 ftco-animate">-->
<!--                        <a href="#" class="partner-entry">-->
<!--                            <img src="images/partner-4.jpg" class="img-fluid" alt="Colorlib template">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Цены на услуги</h2>
<!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
            </div>
        </div>
        <div class="row">
            <?php
            $service_types = new WP_Query ( array(
                'post_type' => 'services'
            ) );
            if ($service_types->have_posts()) :
                while ($service_types->have_posts()) :
                    $service_types->the_post();
                    ?>
                    <div class="col-md-3 ftco-animate">
                        <div class="pricing-entry pb-5 text-center">
                            <div>
                                <h3 class="mb-4"><?php the_title(); ?></h3>
                                <p>
                                    <span class="price"><?php echo get_field('price'); ?> ₽</span>
<!--                                    <span class="per">/ one trip</span>-->
                                </p>
                            </div>
                            <ul>
                                <?php $include = explode(' | ',get_field('include')); ?>
                                <?php foreach ($include as $item) : ?>
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
<!--                            <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>-->
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
    </div>
</section>

<!--<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-10">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <div class="icon"><span class="flaticon-flower"></span></div>-->
<!--                                <span>Makeup Over Done</span>-->
<!--                                <strong class="number" data-number="3500">0</strong>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <div class="icon"><span class="flaticon-flower"></span></div>-->
<!--                                <span>Procedure</span>-->
<!--                                <strong class="number" data-number="1000">0</strong>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <div class="icon"><span class="flaticon-flower"></span></div>-->
<!--                                <span>Happy Client</span>-->
<!--                                <strong class="number" data-number="3000">0</strong>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <div class="icon"><span class="flaticon-flower"></span></div>-->
<!--                                <span>Skin Treatment</span>-->
<!--                                <strong class="number" data-number="900">0</strong>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="ftco-section">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center mb-5 pb-3">-->
<!--            <div class="col-md-7 heading-section ftco-animate text-center">-->
<!--                <h2 class="mb-4">Recent from blog</h2>-->
<!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row d-flex">-->
<!--            <div class="col-md-4 d-flex ftco-animate">-->
<!--                <div class="blog-entry align-self-stretch">-->
<!--                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">-->
<!--                    </a>-->
<!--                    <div class="text py-4 d-block">-->
<!--                        <div class="meta">-->
<!--                            <div><a href="#">Sept 10, 2018</a></div>-->
<!--                            <div><a href="#">Admin</a></div>-->
<!--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
<!--                        </div>-->
<!--                        <h3 class="heading mt-2"><a href="#">Skin Care for Teen Skin</a></h3>-->
<!--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 d-flex ftco-animate">-->
<!--                <div class="blog-entry align-self-stretch">-->
<!--                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">-->
<!--                    </a>-->
<!--                    <div class="text py-4 d-block">-->
<!--                        <div class="meta">-->
<!--                            <div><a href="#">Sept 10, 2018</a></div>-->
<!--                            <div><a href="#">Admin</a></div>-->
<!--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
<!--                        </div>-->
<!--                        <h3 class="heading mt-2"><a href="#">Skin Care for Teen Skin</a></h3>-->
<!--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 d-flex ftco-animate">-->
<!--                <div class="blog-entry align-self-stretch">-->
<!--                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">-->
<!--                    </a>-->
<!--                    <div class="text py-4 d-block">-->
<!--                        <div class="meta">-->
<!--                            <div><a href="#">Sept 10, 2018</a></div>-->
<!--                            <div><a href="#">Admin</a></div>-->
<!--                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
<!--                        </div>-->
<!--                        <h3 class="heading mt-2"><a href="#">Skin Care for Teen Skin</a></h3>-->
<!--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<section class="ftco-section ftco-appointment">
    <?php the_content(); ?>
<!--    <div class="overlay"></div>-->
<!--    <div class="container">-->
<!--        <div class="row d-md-flex align-items-center">-->
<!--            <div class="col-md-2"></div>-->
<!--            <div class="col-md-4 d-flex align-self-stretch ftco-animate">-->
<!--                <div class="appointment-info text-center p-5">-->
<!--                    <div class="mb-4">-->
<!--                        <h3 class="mb-3">Address</h3>-->
<!--                        <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>-->
<!--                    </div>-->
<!--                    <div class="mb-4">-->
<!--                        <h3 class="mb-3">Phone</h3>-->
<!--                        <p class="day"><strong>000 123 456</strong> or <strong>000 987 654</strong></p>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <h3 class="mb-3">Opening Hours</h3>-->
<!--                        <p class="day"><strong>Monday - Friday</strong></p>-->
<!--                        <span>08:00am - 09:00pm</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 appointment pl-md-5 ftco-animate">-->
<!--                <h3 class="mb-3">Appointments</h3>-->
<!--                <form action="#" class="appointment-form">-->
<!--                    <div class="row form-group d-flex">-->
<!--                        <div class="col-md-6">-->
<!--                            <input type="text" class="form-control" placeholder="First Name">-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <input type="text" class="form-control" placeholder="Last Name">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row form-group d-flex">-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="input-wrap">-->
<!--                                <div class="icon"><span class="ion-md-calendar"></span></div>-->
<!--                                <input type="text" id="appointment_date" class="form-control" placeholder="Date">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <input type="text" class="form-control" placeholder="Phone">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="submit" value="Order" class="btn btn-white btn-outline-white py-3 px-4">-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</section>
<?php get_footer(); ?>
