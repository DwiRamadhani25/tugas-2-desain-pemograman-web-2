<!DOCTYPE html>
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
<html lang="en">

<head>
    <title>King Of Pasta</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="{{ url('public') }}/js/jquery.js"></script>
    <script src="{{ url('public') }}/js/jquery.glide.js"></script>

    <link rel="stylesheet" href="{{ url('public') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('public') }}/css/animate.css">
    <script type="text/javascript" src="{{ url('public') }}/js/MyJQ.js"></script>
    <script src="{{ url('public') }}/js/jquery.localScroll.min.js" type="text/javascript"></script>
    <script src="{{ url('public') }}/js/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script src="{{ url('public') }}/js/wow.min.js" type="text/javascript"></script>

    <!-- scroll function -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#navigations').localScroll({
                duration: 800
            });
        });
    </script>


    <script src="{{ url('public') }}/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>


</head>

<body>

    <!--============ Navigation ============-->

    <div class="headerwrapper">
        <div id="header" class="container">
            <div class="logo"> <a href="#"><img src="{{ url('public') }}/images/LOGO.png" alt="logo" width="165" height="74"></a>
            </div>
            <!--end of Logo-->
            <nav>
                <ul id="navigations">
                    <li><a href="{{ url('home')}}">HOME</a></li>
                    <li> <a href="#slider">ABOUT</a></li>
                    <li><a href="#map">LOCATONS</a></li>
                    <li><a href="#bestdishes">MENU</a></li>
                    <li><a href="{{ url ('login') }}">LOGIN</a></li>
                </ul>
            </nav>
        </div>
        <!--end of header-->
    </div> <!-- end of headerwrapper-->



    <!--============ Slider ============-->


    <div class="sliderwrapper">
        <div id="slider" class="container">
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into
                            electronic typesetting</p>
                        <img src="{{ url('public') }}/images/slideimg.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slide1img">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into
                            electronic typesetting</p>
                        <img src="{{ url('public') }}/images/slideimg.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into
                            electronic typesetting</p>
                        <img src="{{ url('public') }}/images/slideimg.png" width="317" height="256" class="wow fadeInRight"
                            data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                </ul>
            </div>
        </div> <!-- End of Slider-->
    </div> <!-- end of sliderwrapper-->



    <!--============ Best Dishes ============-->



    <div class="bestdisheswrapper">
        <div id="bestdishes" class="container">

            <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <div class="item">
                            <img src="{{ url('public') }}/images/thumb1.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>Pasta Capellini</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="{{ url('public') }}/images/thumb2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>Pasta Pillus</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="{{ url('public') }}/images/thumb3.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                                data-wow-delay=".8s">
                            <h3>Pasta Fusilli</h3>
                        </div> <!-- end of item-->
                    </li>
                    <li class="slide">
                        <div class="item">
                            <img src="{{ url('public') }}/images/thumb1.png" width="226" height="225" alt="sliderimg">
                            <h3>Pasta Capellini</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="{{ url('public') }}/images/thumb2.jpg" width="226" height="225" alt="sliderimg">
                            <h3>Pasta Pillus</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="{{ url('public') }}/images/thumb3.png" width="226" height="225" alt="sliderimg">
                            <h3>Pasta Fusilli</h3>
                        </div> <!-- end of item-->
                    </li>

                </ul>
            </div> <!-- end of slider-->
        </div> <!-- end of besth dishes-->
    </div> <!-- end of bestdishes wrapper-->

    <!--============ BOOK ONLINE ============-->

    <br/>
    <br/>
    <br/>
    <br/>


  


    <!--============ FOOTER ============-->


    <div class="footerwrapper">
        <footer class="container">
            <div class="customerreview">
                <h2>Customer Reviews</h2>
                <div class="review">
                    <p><strong>&#8220; </strong>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                        auctor
                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                        nec sagittis sem nibh id elit.
                        Duis sed odio sit amet nibh vulputate a ornare odio. Sed non mauris vitae erat consequat
                        <strong>&#8221;</strong>
                    </p>

                    <h4>- JOHN ALVES</h4>


                </div> <!-- end of review-->

                <div class="clearfix"></div>
                <div class="line"></div>

                <div class="review">
                    <p><strong>&#8220; </strong>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                        auctor
                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                        nec sagittis sem nibh id elit.
                        Duis sed odio sit amet nibh vulputate a ornare odio. Sed non mauris vitae erat consequat
                        <strong>&#8221;</strong>
                    </p>

                    <h4>- CATHREINE JOHNES</h4>


                </div> <!-- end of review-->





            </div>


            <div class="sendfeedback">
                <h2>Send Feedback</h2>
                <form>
                    <h6>Your Name:</h6>
                    <input type="text" class="yourname">
                    <h6>Mobile Number :</h6>
                    <input type="text" class="mobilenumber">
                    <h6>Message :</h6>
                    <textarea></textarea>

                    <button>SUBMIT </button>



                </form>

            </div> <!-- end of feedback-->




        </footer> <!-- end of footer-->

    </div> <!-- end of footer-->




    <!--============ COPYRIGHTS ============-->


    <div class="copyrightswrapper">
        <div id="copyrights" class="container">

            <p>Copyright 2014 <a href="https://www.facebook.com/Mido.HHH"> Mohamed Sobhy </a> All Rights Reserved</p>

        </div> <!-- end of copyrights-->
    </div> <!-- end of website-->




    <div class="fixedsocial">
        <a href="https://www.facebook.com/Mido.HHH"><img src="{{ url('public') }}/images/facebook.png" width="20" height="20" alt="fb"> </a>
        <a href="https://www.behance.net/Mido_HHH"><img src="{{ url('public') }}/images/behance.png" width="20" height="20" alt="behance">
        </a>




    </div>

    <script type="text/javascript">
        $('.sliderwrapper .slider').glide({
            autoplay: 7000,
            animationDuration: 3000,
            arrows: true,



        });
    </script>

    <script type="text/javascript">
        $('.bestdisheswrapper .slider').glide({
            autoplay: false,
            animationDuration: 700,
            arrows: true,
            navigation: false,



        });
    </script>




</body>

</html>