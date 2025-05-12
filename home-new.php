<?php

// Template Name:elements new 

//get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Element cc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid align-items-start">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="logo" class="img-fluid logo" />
                </a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Directors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Let's</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section class="hero_banner">
        <div class="video-overlay"></div>
        <video playsinline="" autoplay="" muted="" loop="" poster="" class="w-100">
            <source src="<?php the_field('hero_banner');?>">
        </video>
        <button class="btn arrow_down rounded-pill"><i class="bi bi-arrow-down"></i></button>
    </section>

    
    <section class="our_recent pd_80">
    <div class="text-center">
        <h2 class="section_heading font_40 font_700"><?php the_field('our_recent'); ?></h2>
    </div>

    <div class="slider_wrapper">
        <div class="image-slider">
            <?php if (have_rows('our_recent_slider')): ?>
                <?php while (have_rows('our_recent_slider')): the_row();
                    $image_url = get_sub_field('image');
                    if ($image_url): ?>
                        <div class="slider_item">
                            <img src="<?php echo esc_url($image_url); ?>" class="slider_img" alt="slider image" />
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


    <section class="awards_section pd_80">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-12 col-lg-6">
                    <div class="left_content">
                        <h2 class="award_text font_40 font_900" id="mainText">New England's Most <span class="highlighted-text">Award Winning</span> Firms
                            Since 1988 -
                            We've Got You
                            Covered!</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <ul class="awards_points list-unstyled row gy-3">
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Strategy</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Creative</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Production</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Editorial</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Distribution</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Motion</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Service</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Service</li>
                        </div>
                        <div class="col-6 col-lg-4">
                            <li class="awards_item">Service</li>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="pd_80 testimonial">
        <div class="container">
            <div class="text-center">
                <h2 class="section_heading font_40 font_700">What our clients say</h2>
            </div>

            <div class="testimonial-reel">
                <div>
                    <div class="box">
                        <figure class="image">
                            <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                        </figure>

                        <div class="test-component">
                            <article class="test-title">
                                <h4>
                                    Efecha Omoware
                                </h4>
                            </article>

                            <article class="test-content">
                                <p>
                                    I now enjoy financial freedom like I’ve never know before doing what I love.
                                </p>
                            </article>

                        </div>

                    </div>

                </div>

                <div>

                    <div class="box">


                        <figure class="image">
                            <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                        </figure>


                        <div class="test-component">

                            <article class="test-title">

                                <h4>
                                    Efecha Omoware
                                </h4>

                            </article>


                            <article class="test-content">
                                <p>
                                    I now enjoy financial freedom like I’ve never know before doing what I love.
                                </p>
                            </article>

                        </div>

                    </div>

                </div>

                <div>

                    <div class="box">


                        <figure class="image">
                            <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                        </figure>


                        <div class="test-component">

                            <article class="test-title">

                                <h4>
                                    Efecha Omoware
                                </h4>

                            </article>


                            <article class="test-content">
                                <p>
                                    I now enjoy financial freedom like I’ve never know before doing what I love.
                                </p>
                            </article>

                        </div>

                    </div>

                </div>

                <div>

                    <div class="box">
                        <figure class="image">
                            <img class="img-fluid rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png">
                        </figure>


                        <div class="test-component">

                            <article class="test-title">

                                <h4>
                                    Efecha Omoware
                                </h4>

                            </article>

                            <article class="test-content">
                                <p>
                                    I now enjoy financial freedom like I’ve never know before doing what I love.
                                </p>
                            </article>

                        </div>

                    </div>

                </div>


            </div>

        </div>
    </section> -->

    <section class="partner-section pd_80" id="partner">
        <div class="container">
            <div class="text-center">
                <h2 class="section_heading font_40 font_700">Proud to work with </h2>
            </div>

            <div class="clients-wrapper pt-5">
                <div class="clients-container scroll-left">
                    <div class="client-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Shark_logo_black.png"
                            alt="partner 1">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image1.png" alt="partner 2">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image2.png" alt="partner 3">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image1.png" alt="partner 4">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image2.png" alt="partner 5">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image1.png" alt="partner 6">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image2.png" alt="partner 7">
                    </div>
                    <div class="client-logo">
                        <img src="assests/images/image1.png" alt="partner 8">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="video_slider_wrapper pdb_80">
        <div class="slider_wrapper">
            <div class="video-slider">

                <div class="video-slide" data-video="https://www.w3schools.com/html/mov_bbb.mp4">
                    <img src="https://peach.blender.org/wp-content/uploads/bbb-splash.png" alt="Video 1">
                    <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                </div>

                <div class="video-slide"
                    data-video="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4">
                    <img src="https://images.pexels.com/photos/2249527/pexels-photo-2249527.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Video 2">
                    <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                </div>


                <div class="video-slide"
                    data-video="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4">
                    <img src="https://images.pexels.com/photos/1722196/pexels-photo-1722196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=11"
                        alt="Video 3">
                    <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                </div>


                <div class="video-slide"
                    data-video="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4">
                    <img src="https://images.pexels.com/photos/31887348/pexels-photo-31887348/free-photo-of-elegant-spring-white-flowers-in-bloom.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Video 4">
                    <div class="play-icon"><i class="bi bi-play-fill"></i></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content bg-dark">
                    <div class="modal-body p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <video id="modalVideo" class="w-100 h-100" controls muted></video>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="play_btn_wrapper">
        <div class="rotating-ring"></div>

        <div class="btn_content">
            <button id="playBtn" class="play_btn">Play Reel</button>
            <button class="pause_btn"><i class="bi bi-x"></i></button>
        </div>
    </div>





    <div class="VideoContainer">
        <button class="close-btn" id="closeVideo">&times;</button>
        <video id="myVideo" playsinline="" autoplay="" muted="" loop="" src="https://www.w3schools.com/html/mov_bbb.mp4"
            controls></video>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/script.js"></script>
</body>

</html>

<?php  //get_footer(); ?>