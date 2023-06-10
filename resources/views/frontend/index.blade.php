@extends('frontend.layouts.main')

@section('main-container')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{url('frontend/images/video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Welcome to my blog by</h6>
                <marquee behavior="alternate" direction="right"><h2>Abhishek <em>Mehta</em></h2></marquee>
                <div class="main-button">
                    <a href="{{url('/contact')}}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Blog posts</em></h2>
                        <img src="{{url('frontend/images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'>Artificial Intelligence: The Future of Innovation</a></li>
                        <li><a href='#tabs-2'>Advantages and Disadvantages of Artificial Intelligence</a></li>
                        <li><a href='#tabs-3'>Revolutionizing Digital Marketing: The Power of Artificial Intelligence</a></li>
                        <div class="main-rounded-button"><a href="{{url('/blog')}}">Read More</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="{{url('frontend/images/Artificial-Intelligence-1024x538.png')}}" alt="">
                            <h4>Artificial Intelligence: The Future of Innovation</h4>

                            <p><i class="fa fa-user"></i> Abhishek Mehta &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                06.05.2023 6:47 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>

                            <p>Artificial Intelligence, or AI, is the capacity of machines to perform assignments that
                                would regularly require human knowledge. These machines can gain as a matter of fact and
                                adjust to new circumstances, making them progressively significant in different
                                enterprises. AI mirrors human points of view, for example, critical thinking and
                                independent direction. It includes building …</p>
                            <div class="main-button">
                                <a href="{{url('/blog-details')}}">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="{{url('frontend/images/The-Power-of-Artificial-Intelligence.png')}}" alt="">
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
                                <a href="{{url('/blog-details')}}">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="{{url('frontend/images/Advantages-and-Disadvantages-of-AI.png')}}" alt="">
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
                                <a href="{{url('/blog-details')}}">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <section class="section section-bg" id="schedule"
        style="background-image: url({{url('frontend/images/about-fullscreen-1-1920x700.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="{{url('frontend//images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim!
                            Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit
                            voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia
                            laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium
                            dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius
                            doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
   
    @endsection