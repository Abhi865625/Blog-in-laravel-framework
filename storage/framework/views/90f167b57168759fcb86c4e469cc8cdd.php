

<?php $__env->startSection('main-container'); ?>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action"
        style="background-image: url(<?php echo e(url('frontend/images/banner-image-1-1920x500.jpg')); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>Blog</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article>
                            <img src="<?php echo e(url('frontend/images/Artificial-Intelligence-1024x538.png')); ?>" alt="">
                            <h4>Artificial Intelligence: The Future of Innovation</h4>

                            <p><i class="fa fa-user"></i> Abhishek Mehta &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.05.2023 5:30 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>

                            <p>Artificial Intelligence, or AI, is the capacity of machines to perform assignments that
                                would regularly require human knowledge. These machines can gain as a matter of fact and
                                adjust to new circumstances, making them progressively significant in different
                                enterprises. AI mirrors human points of view, for example, critical thinking and
                                independent direction. It includes building …</p>
                            <div class="main-button">
                                <a href="<?php echo e(url('/blog-details')); ?>">Continue Reading</a>
                            </div>
                        </article>

                        <br>
                        <br>

                        <article>
                            <img src="<?php echo e(url('frontend/images/The-Power-of-Artificial-Intelligence.png')); ?>" alt="">
                            <h4>Revolutionizing Digital Marketing: The Power of Artificial Intelligence</h4>
                            <p><i class="fa fa-user"></i> Abhishek Mehta &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.05.2023 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>15 comments</p>
                            <p>Artificial Intelligence
                                (AI) is a branch of computer science that aims to create intelligent machines that can
                                perform tasks normally requiring human intelligence, such as visual perception, speech
                                recognition, decision-making, and language translation. In recent years, AI has gained
                                significant attention in the digital marketing space due to its ability to gather and
                                analyze vast …</p>
                            <div class="main-button">
                                <a href="<?php echo e(url('/blog-details')); ?>">Continue Reading</a>
                            </div>
                        </article>

                        <br>
                        <br>

                        <article>
                            <img src="<?php echo e(url('frontend/images/Advantages-and-Disadvantages-of-AI.png')); ?>" alt="">
                            <h4>Advantages and Disadvantages of AI
                                Advantages and Disadvantages of Artificial Intelligence</h4>
                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                5.06.2023 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                            <p>Artificial Intelligence (AI) has become an increasingly important topic in today’s world
                                and for a good reason. It is a rapidly evolving technology that has the potential to
                                revolutionize industries, improve efficiencies, and enhance decision-making processes.
                                In this article, we will explore the advantages and disadvantages of AI and its
                                implications for society. Artificial Intelligence …</p>
                            <div class="main-button">
                                <a href="<?php echo e(url('/blog-details')); ?>">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>

                <div class="col-lg-4">
                    <h5 class="h5">Search</h5>

                    <div class="contact-form">
                        <form id="search_form" name="gs" method="GET" action="#">
                            <input type="text" name="q" class="searchText" placeholder="type to search..."
                                autocomplete="on">
                        </form>
                    </div>

                    <h5 class="h5">Recent posts</h5>

                    <ul>
                        <li>
                            <p><a href="<?php echo e(url('/blog-details')); ?>">Artificial Intelligence: The Future of Innovation</a></p>
                            <small><i class="fa fa-user"></i> Abhishek Mehta &nbsp;|&nbsp; <i
                                    class="fa fa-calendar"></i>
                                6.05.2023 10:10</small>
                        </li>

                        <li><br></li>

                        <li>
                            <p><a href="<?php echo e(url('/blog-details')); ?>">Revolutionizing Digital Marketing: The Power of Artificial
                                    Intelligence</a></p>
                            <small><i class="fa fa-user"></i> Abhishek Mehta &nbsp;|&nbsp; <i
                                    class="fa fa-calendar"></i>
                                2.06.2023 10:10</small>
                        </li>

                        <li><br></li>

                        <li>
                            <p><a href="<?php echo e(url('/blog-details')); ?>">Advantages and Disadvantages of AI
                                    Advantages and Disadvantages of Artificial Intelligence</a>
                            </p>

                            <small><i class="fa fa-user"></i> Abhishek Mehta &nbsp;|&nbsp; <i
                                    class="fa fa-calendar"></i>
                                27.05.2023 10:10</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Footer Start ***** -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo-app\resources\views/frontend/blog.blade.php ENDPATH**/ ?>