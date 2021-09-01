@include('web.inc.header')

@php
    foreach ($about as $data) {
        if($data->name == "slide"){
            $slide = $data;
        }
    }

@endphp

<div class="wrapper">

    <!-- Home banner start -->
    <div class="home-banner-area py-5">
        <div class="container">
            <div class="row py-5">
                <div class="banner-content col-lg-6 col-md-12 justify-content-center pt-5">
                    <div class="me fontrobo">
                        {{$slide->shorttitlr}}
                    </div>
                    <h1 class="fontpop">{{$slide->maintitle}}</h1>
                    <div class="intro">
                        <p class="para fontrobo py-3">{{$slide->desc}}</p>
                    </div>
                    <div class="intro">
                        <p class="para fontrobo py-3">{{$slide->title}}</p>
                    </div>
                    <div class="contact">
                        <a href="#" class="btn-contact" data-toggle="modal" data-target=".bd-example-modal-lg">Contact me </a>
                    </div>
                </div>
                <div class="banner-img col-lg-6 col-md-6 align-self-end ">
                    <div class="text-center">
                        <!-- Image should be in Potrait -->
                        <img src="img/imgww.png" class="img-fluid minus">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- QUaltity section -->
    <div class="quality-area">
        <div class="container">
            <div class="quality-wrap d-flex justify-content-center">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters owl1 owl-carousel owl-theme owl-loaded">
                    <div class="item">
                        <h4>Motivational Speaker</h4>
                    </div>
                    <div class="item">
                        <h4>Vlogger </h4>
                    </div>
                    <div class="item">
                        <h4>Entrepreneur </h4>
                    </div>
                    <div class="item">
                        <h4>Blogger </h4>
                    </div>
                    <div class="item">
                        <h4>Freelancer </h4>
                    </div>
                    <div class="item">
                        <h4>Marketer </h4>
                    </div>
                    <div class="item">
                        <h4>Forex Trader</h4>
                    </div>
                    <div class="item">
                        <h4> Forex Trainer</h4>
                    </div>
                    <div class="item">
                        <h4>Mentor </h4>
                    </div>
                    <div class="item">
                        <h4>Analysist</h4>
                    </div>
                    <div class="item">
                        <h4>Career Counselor</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Experience section start -->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="fontpop">My Experience</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $experience)
                <div class="col-lg-6">
                    <div class="single-job" data-toggle="modal" data-target="#exp-1">
                        <div class="top-sec d-flex justify-content-between">
                            <div class="top-left">
                                <h4 class="fontpop">{{$experience->title}}</h4>
                                <p class="fontrobo Experience-description">{{$experience->city}}</p>
                            </div>
                            <div class="top-right">
                                <a href="#" class="btn-date">2010-Till Now</a>
                            </div>
                        </div>
                        <div class=" Experience-description fontrobo">
                            <p>{{$experience->desc}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- latest works section -->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="fontpop">Latest Works</h2>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow border-none">
                        <div class="img">
                            <img src="{{url('public/assets/web/img/1.jpg')}}" alt="Avatar" class="w-100 position-relative hov-img">
                        </div>
                        <div class="card-body">
                            <small><a href="#" class="post-date">20 November 2019</a></small>
                            <h4>
                                <h4>Forex Expo in Dubai 2019</h4>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi exercitationem,
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- testimonial section -->
    <div class="py-5 testi-bg">
        <div class="container fontpop">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="fontpop text-white m-0">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide testimonial-carousel section-padding" data-ride="carousel">
                <ol class="carousel-indicators chotiimg">
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="1">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="2">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="3">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="4">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="5">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="6">
                        <img src="img/avatar.png" class="img-s">
                    </li>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#" class="othersindicator">and 51 others</a>
                    </div>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="single-testi">
                            <div class="img-area">
                                <img src="img/avatar.png" alt="">
                            </div>
                            <div class="img-text">
                                <h2>John doe</h2>
                                <h3>Top Rated Customer</h3>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <hr>
                                <p>I have seen quite a few Forex experts presentations on Forex trading plateform and feel that Raheel Nawaz is not only very professional but also very honest teacher in terms of teaching this trade. Among 15 good forex traders and teachers, I have selected Raheel Nawaz.I don't know about him more and I just got information through youtube when I heard about Forex trading. After watching videos, I just look around to sir Raheel's videos then I was impressed by his way of teaching and guiding. Then I contacted him for getting exact information ralated to this trading. He is really cooperative, nice man and great ustaad. May Allah bless him with a lot of happiness and make his life more successful because who helps othera then Allah help himself and he is a nice man. Good luck and thanks for guiding me.😊</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="single-testi">
                            <div class="img-area">
                                <img src="img/avatar.png" alt="">
                            </div>
                            <div class="img-text">
                                <h2>John doe</h2>
                                <h3>Top Rated Customer</h3>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <hr>
                                <p>I have seen quite a few Forex experts presentations on Forex trading plateform and feel that Raheel Nawaz is not only very professional but also very honest teacher in terms of teaching this trade. Among 15 good forex traders and teachers, I have selected Raheel Nawaz.I don't know about him more and I just got information through youtube when I heard about Forex trading. After watching videos, I just look around to sir Raheel's videos then I was impressed by his way of teaching and guiding. Then I contacted him for getting exact information ralated to this trading. He is really cooperative, nice man and great ustaad. May Allah bless him with a lot of happiness and make his life more successful because who helps othera then Allah help himself and he is a nice man. Good luck and thanks for guiding me.😊</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="single-testi">
                            <div class="img-area">
                                <img src="img/avatar.png" alt="">
                            </div>
                            <div class="img-text">
                                <h2>John doe</h2>
                                <h3>Top Rated Customer</h3>
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <hr>
                                <p>I have seen quite a few Forex experts presentations on Forex trading plateform and feel that Raheel Nawaz is not only very professional but also very honest teacher in terms of teaching this trade. Among 15 good forex traders and teachers, I have selected Raheel Nawaz.I don't know about him more and I just got information through youtube when I heard about Forex trading. After watching videos, I just look around to sir Raheel's videos then I was impressed by his way of teaching and guiding. Then I contacted him for getting exact information ralated to this trading. He is really cooperative, nice man and great ustaad. May Allah bless him with a lot of happiness and make his life more successful because who helps othera then Allah help himself and he is a nice man. Good luck and thanks for guiding me.😊</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feedback section -->
    <div class="contact-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 con-section-pad">
                    <div class="p-3">
                        <div class="about-p">
                            <h2 class="fontpop pb-3 text-white">
                                ABOUT
                            </h2>
                            <p class="fontrobo text-c6 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                        <div class="basic-info about-p">
                            <h2 class="fontpop py-3 text-white">BASIC INFO</h2>
                            <hr>
                            <div class="">
                                <p>
                                    <span class="mr-3 text-bl">
                                        PHONE
                                    </span>
                                    <span class="text-c6">
                                        03456542380
                                    </span>
                                </p>
                                <hr>
                                <p>
                                    <span class="mr-3 text-bl">
                                        ADDRESS
                                    </span>
                                    <span class="text-c6">
                                        Gujranwala,Pakistan
                                    </span>
                                </p>
                                <hr>
                                <p>
                                    <span class="mr-3 text-bl">
                                        EMAIL
                                    </span>
                                    <span class="text-c6">
                                        info@raheelnawaz.com
                                    </span>
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 con-section-pad bg-white px-5">
                    <div>
                        <div class="about-p about-contact">
                            <h1 class="fontmon pb-3 ">
                                GIVE US A FEEDBACK
                            </h1>
                            <p class="fontrobo  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                        <div class="pt-3 ">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="fontpop">Email address <i class=" text-bl fa fa-check-circle-o"></i></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="fontpop">Password <i class=" text-bl fa fa-check-circle-o"></i></label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label for="exampleCheck1" class="fontpop">Message <i class=" text-bl fa fa-check-circle-o"></i></label>
                                            <textarea class="form-control" rows="7" placeholder="Enter your message here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <p>Upload your Image here</p>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="filename">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" name="" class="submit-btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter large section -->
    <section id="section-cta">
        <div class="sep-background-mask"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="quick_newsletter">
                        <div class="row">
                            <div class="newsletter-info col-md-4 col-sm-4">
                                <h3>Subscribe to Newsletters</h3>
                                <p>And stay informed about our news and events</p>
                            </div>
                            <div class="newsletter-element col-md-8 col-sm-8">
                                <form action="http://raheelnawaz.com/inc/newsletter.php" method="post">
                                    <div class="row justify-content-center">
                                        <p class="col-md-4 col-sm-4"><input class="newsletter-firstname input-text" type="text" placeholder="Your Name"></p>
                                        <p class="col-md-4 col-sm-4"><input class="newsletter-email input-text" type="email" placeholder="Enter email"></p>
                                        <p class="col-md-4 col-sm-4"><button class="newsletter-submit btn" type="submit"><i class="fa fa-paper-plane"></i> Subscribe</button></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@include('web.inc.footer')
