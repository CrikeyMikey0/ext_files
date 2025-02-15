<!doctype html>
<html lang="en">

<head>
    <?php require '../structure/head.php'; ?>
</head>

<body>
    <?php require '../structure/topbody.php'; ?>

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Blog</h2>
                        <p>Explore our latest updates, tips, and stories.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs -->
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <?php
                    // Sample blog posts data
                    $blog_posts = [
                        [
                            'title' => 'Celebration with Music',
                            'days_ago' => 2, // Number of days ago the post was published
                            'image' => 'images/blog1.jpg',
                            'content' => 'Music has always been a vital part of celebrations. Whether it’s a wedding, birthday, or corporate event, the right music can elevate the atmosphere and create unforgettable memories.',
                            'comments' => 5
                        ],
                        [
                            'title' => 'Corporate Dining',
                            'days_ago' => 5, // Number of days ago the post was published
                            'image' => ['images/blog2.jpg', 'images/blog3.jpg', 'images/blog4.jpg'],
                            'content' => 'Corporate dining is more than just a meal; it’s an experience. From elegant presentations to exquisite flavors, we ensure every detail is perfect for your business events.',
                            'comments' => 3
                        ],
                        [
                            'title' => 'Daily Exercise is Essential',
                            'days_ago' => 10, // Number of days ago the post was published
                            'image' => 'images/blog3.jpg',
                            'content' => 'Incorporating daily exercise into your routine is crucial for maintaining a healthy lifestyle. It boosts energy, improves mood, and enhances overall well-being.',
                            'comments' => 7
                        ],
                        [
                            'title' => 'Presentation is as Important as Taste',
                            'days_ago' => 15, // Number of days ago the post was published
                            'image' => 'images/blog4.jpg',
                            'content' => 'The way food is presented can significantly impact the dining experience. A beautifully plated dish not only delights the eyes but also enhances the overall enjoyment of the meal.',
                            'comments' => 4
                        ]
                    ];

                    foreach ($blog_posts as $post) {
                        // Calculate the dynamic date based on the current date minus the number of days ago
                        $post_date = date('M d, Y', strtotime('-' . $post['days_ago'] . ' days'));

                        echo '<div class="blog_item padding-bottom">';
                        echo '<h2>' . $post['title'] . '</h2>';
                        echo '<ul class="comments">';
                        echo '<li><a href="#.">' . $post_date . '</a></li>';
                        echo '<li><a href="#."><i class="icon-chat-2"></i>' . $post['comments'] . '</a></li>';
                        echo '</ul>';

                        // Handle single image or image slider
                        if (is_array($post['image'])) {
                            echo '<div class="image_container">';
                            echo '<div id="blog-slider" class="owl-carousel">';
                            foreach ($post['image'] as $image) {
                                echo '<div class="item"><img src="' . $image . '" class="img-responsive" alt="blog post"></div>';
                            }
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '<div class="image_container">';
                            echo '<img src="' . $post['image'] . '" class="img-responsive" alt="blog post">';
                            echo '</div>';
                        }

                        echo '<p>' . $post['content'] . '</p>';
                        echo '<a class="btn-common button3" href="blog-detail.html">Read more</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="col-md-4 col-sm-5">
                    <aside class="sidebar">
                        <div class="widget">
                            <ul class="tabs">
                                <li class="active" rel="tab1">Popular </li>
                                <li rel="tab2">Latest</li>
                                <li rel="tab3">Comments</li>
                            </ul>
                            <div class="tab_container bg_grey">
                                <h3 class="d_active tab_drawer_heading" rel="tab1">Popular</h3>
                                <div id="tab1" class="tab_content">
                                    <div class="single_comments">
                                        <img alt="" src="images/avator1.jpg">
                                        <p><a href="#.">Celebration with Music </a>
                                            <span><?php echo date('M d, Y', strtotime('-2 days')); ?></span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="single_comments">
                                        <img alt="" src="images/avator1.jpg">
                                        <p><a href="#.">Corporate Dining</a><span><?php echo date('M d, Y', strtotime('-5 days')); ?></span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="single_comments no-margin">
                                        <img alt="" src="images/avator1.jpg">
                                        <p><a href="#.">Daily Exercise is Essential</a> <span><?php echo date('M d, Y', strtotime('-10 days')); ?></span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h3 class="tab_drawer_heading" rel="tab2">Latest</h3>
                                <div id="tab2" class="tab_content">
                                    <div class="single_comments">
                                        <img alt="" src="images/avator1.jpg">
                                        <p><a href="#.">Presentation is as Important as Taste</a> <span><?php echo date('M d, Y', strtotime('-15 days')); ?></span></p>
                                    </div>
                                </div>
                                <h3 class="tab_drawer_heading" rel="tab3">Comments</h3>
                                <div id="tab3" class="tab_content">
                                    <div class="single_comments">
                                        <img alt="" src="images/avator1.jpg">
                                        <p><a href="#.">Great post!</a> <span><?php echo date('M d, Y', strtotime('-1 day')); ?></span></p>
                                    </div>
                                    <div class="single_comments">
                                        <img alt="" src="images/avator1.jpg">
                                        <p><a href="#.">Very informative</a> <span><?php echo date('M d, Y', strtotime('-3 days')); ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h3>Categories</h3>
                            <ul class="widget_links">
                                <li><a href="#.">Food</a></li>
                                <li><a href="#.">Special Occasion</a></li>
                                <li><a href="#.">Presentation</a></li>
                                <li><a href="#.">Corporate Dining</a></li>
                                <li><a href="#.">Reservation</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3>Tags</h3>
                            <ul class="tags">
                                <li><a href="#.">Our Events</a></li>
                                <li><a href="#.">Healthy Living</a></li>
                                <li><a href="#.">Corporate Events</a></li>
                                <li><a href="#.">Presentation</a></li>
                                <li><a href="#.">Reservation</a></li>
                                <li><a href="#.">Special Occasion</a></li>
                                <li><a href="#.">Lunch</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <?php require '../structure/footer.php'; ?>
    </footer>

    <a href="#." id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
    <script src="../design/js/jquery-2.2.3.js" type="text/javascript"></script>
    <script src="../design/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../design/js/jquery.geocomplete.min.js"></script>
    <script src="../design/js/jquery.parallax-1.1.3.js"></script>
    <script src="../design/js/jquery.themepunch.tools.min.js"></script>
    <script src="../design/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../design/js/slider.js" type="text/javascript"></script>
    <script src="../design/js/jquery.appear.js"></script>
    <script src="../design/js/jquery-countTo.js"></script>
    <script src="../design/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../design/js/jquery.fancybox.js"></script>
    <script src="../design/js/jquery.mixitup.min.js"></script>
    <script src="../design/js/functions.js" type="text/javascript"></script>
</body>

</html>