@extends('web_layout')
@section('content')





<style>
    #Fuelyourgrowth {

        background-size: cover;
        background-image: url("{{ asset('images/webimages/images/611.jpg') }}");
        background-size: 56% !important;
        background-repeat: no-repeat !important;
        background-position-x: 103% !important;
        background-position-y: -20% !important;
    }

    #itshouldbefull {
        background-size: 100% !important;
        background-position: center;
    }

    /* Define your CSS styles */
    .thisclass {
        /* Other styles for the class */
        background-size: 70%;
    }

    .smaller a {
        color: white !important;
    }

    /*  .pointed-div {
        position: relative;
        width: 200px;
        height: 100px;
        background-color: #2E28A8;
        margin: 50px auto;
    }

    .pointed-div::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 20px solid #2E28A8; 
    } */

    .parent {
        position: relative;
    }

    .child {
        border-top: 68px solid rgb(233, 236, 239);
        border-left: 50vw solid transparent;
        border-right: 50vw solid transparent;
        width: 0;
        height: 0;
        bottom: -65px;
        content: "";
        display: block;
        position: absolute;
        overflow: hidden;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 5;
    }
</style>
<style>
    #movingImage {
        position: relative;
        width: 100px;
        /* Adjust the width as needed */
        height: 100px;
        /* Adjust the height as needed */
    }
</style>
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>






    <section id="firstblock" class="thisclass p-xs-5">
        <div class="row firstblock mt-md-5 p-md-5">
            <div class="col-xl-6 p-xs-1 p-md-5  ">
                <h1 style="color:black" class="mb-4">Put <span class="id-color-2">the Rev</span> in Revenue</h1>
                <p style="font-size: 30px; line-height: 35px; color:black" class="mb-4">Meet the first AI-powered B2B
                    demand
                    generation engine for Marketing, Sales, and Media professionals
                    that accelerates the buyer journey from hello to happy customer</p>
                <div class="col-left onlypc">
                    <a class="btn-custom" href="contact.php"> Learn More</a>
                </div>
            </div>

            <div id="shouldbehiddedinbig" class="col-12  "><img style="position:relative; width:120%" class="w-100" img
                    src="{{ asset('images/webimages/images/933.png') }}" alt=""></div>
        </div>

    </section>
    <!-- <div id="shouldbehiddedinbig" style="position: relative; height: 50vh; margin-bottom:3rem"   class="container-fluid" > <img width="130%" id="thefirstimage" img src="{{ asset('images/webimages/images/911.png') }}" alt=""></div>
    -->
    <div id="ourapproach"></div>
    <section style="background-color:#e9ecef ; padding-bottom: 2rem" id="section-highlight">
        <div class="container" id="about">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="col text-center">

                        <h1 class="text-black onlypc">Increase Revenue. <i>Faster</i>. With RevUp </h1>
                        <h1 style="font-size:30px" class="text-black onlymobile">Increase Revenue. <i>Faster</i>. With
                            RevUp </h1>
                        <p class="text-dark fs-5 text"> A new data-driven approach to help fuel B2B customer acquisition
                            <br> and drive <b>rev</b>enue <b>up</b>lift
                        </p>






                    </div>
                </div>
            </div>
        </div>
</div>

<div style="background-color:#e9ecef; padding-bottom: 2rem" class="container-fluid">
    <div style="background-color:#e9ecef" class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12   " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div style="height: 300px;" class="top bg-light text-dark">
                        <img src="{{ asset('images/webimages/images/artificial-intelligence.png') }}" class="size96"
                            alt="">
                        <div class="inner">
                            <div class="clearfix"></div>
                            <h2 class="id-color-2">Intuitive AI </h2>
                            <p style="font-size: 20px; line-height: 25px;">Enhance campaigns with access to
                                engagement-ready buyer personas</p>


                            <!-- <a href="index2.php#Transform&Generate" class="btn-custom mb10">More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12   " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div style="height: 300px;" class="top bg-light text-dark">
                        <img src="{{ asset('images/webimages/images/radio-station.png') }}" class="size96" alt="">
                        <div class="inner">
                            <div class="clearfix"></div>
                            <h2 class="id-color-2">Behavioral Intent </h2>
                            <p style="font-size: 20px; line-height: 25px;">Leverage actionable signals to identify your
                                best fit accounts exhibiting <br> in-market activity</p>


                            <!-- <a href="index2.php#Transform&Generate" class="btn-custom mb10">More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div style="height: 300px;" class="top bg-light text-dark">
                        <img src="{{ asset('images/webimages/images/engineer.png') }}" class="size96" alt="">
                        <div class="inner">
                            <div class="clearfix"></div>
                            <h2 class="id-color-2">Similarity Search Engine </h2>
                            <p style="font-size: 20px; line-height: 25px;">Build look-a-like lists that mirror your
                                ideal customer profile</p>


                            <!-- <a href="index2.php#Transform&Generate" class="btn-custom mb10">More</a> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12   " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div style="height: 300px;" class="top bg-light text-dark">
                        <img src="{{ asset('images/webimages/images/sheet.png') }}" class="size96" alt="">
                        <div class="inner">
                            <div class="clearfix"></div>
                            <h2 class="id-color-2">Content Activation </h2>
                            <p style="font-size: 20px; line-height: 25px;">Prescriptive placement of your high-value
                                content with the right buyers at the right time</p>


                            <!-- <a href="index2.php#Transform&Generate" class="btn-custom mb10">More</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12   " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div style="height: 300px;" class="top bg-light text-dark">
                        <img src="{{ asset('images/webimages/images/analyticsnew.png') }}" class="size96" alt="">
                        <div class="inner">
                            <div class="clearfix"></div>
                            <h2 class="id-color-2">Analytics </h2>
                            <p style="font-size: 20px; line-height: 25px;"> Drive actionable insights and understand
                                buyer behavior to boost performance</p>


                            <!-- <a href="index2.php#Transform&Generate" class="btn-custom mb10">More</a> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12   " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div style="height: 300px;" class="top bg-light text-dark">
                        <img src="{{ asset('images/webimages/images/expansion.png') }}" class="size96" alt="">
                        <div class="inner">
                            <div class="clearfix"></div>
                            <h2 class="id-color-2">Global Scale </h2>
                            <p style="font-size: 20px; line-height: 25px;">Connect with one of the industry's largest
                                audiences of B2B buyers</p>


                            <!-- <a href="index2.php#Transform&Generate" class="btn-custom mb10">More</a> -->
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!--   <div style="  width: 100%;
      height: 0;
      border-left: 54rem solid transparent;
      border-right: 54rem solid transparent;
      border-top: 100px solid #e9ecef;">

               </div>  -->


<!--  <div class="pointed-div"></div> -->
</section>
<div class="parent">
    <div class="child"></div>
    <!--/child-->
</div>
<!--/parent-->


<section style="padding-bottom: 0 ; padding-top: 5rem" aria-label="section">
    <div class="container">
        <div class="row">

            <div class="col-md-12   ">
                <div class="text-center px-5 ">
                    <h2 class="id-color-2 onlypc">Supported by the best team in the business</h2>
                    <h2 style="font-size:30px" class="id-color-2  onlymobile">Supported by the best team in the business
                    </h2>

                    <!-- <div class="spacer-20"></div> -->
                </div>
                <img width="100%" img src="{{ asset('images/webimages/images/people999.png') }}" alt="">
            </div>



        </div>
    </div>
</section>

<div id="oursolutions"></div>
<section id="pricing-table" class="pb40 bgcolor-variation">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="text-center px-5">
                    <h1 class="id-color-2 onlypc">Start Your Engines </h1>
                    <h1 style="font-size: xx-large;" class="id-color-2 onlymobile">Start Your Engines </h1>
                    <p class="px-md-5 fs-5 text"> Multi-channel B2B solutions that turbocharge your marketing and sales
                        from first hello to latest renewal </p>

                    <div class="spacer-20"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12  " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div class="top bg-light">
                        <h2 style="font-size: xx-large;" class="text-black">RevUp Marketing </h2>
                        <img src="{{ asset('images/webimages/images/revup-marketing1.jpg') }}" class="w-100" alt="">
                        <div class="inner text-dark">
                            <div class="clearfix"></div>

                            <h3 class="text-dark">Give your database a tune-up </h3>
                            <p class="text-center">
                                Make your marketing engine hum with <br> <b class=" fs-5 text"
                                    style="font-weight: 800;">Nurture Ready Leads</b><br> who want to hear more from you
                            </p>


                            <a style="width: 40%;margin: auto;" href="contact.php" class="btn-custom mb10 onlypc">Start
                                My Engine</a>
                            <a style="width: 60%;margin: auto;" href="contact.php"
                                class="btn-custom mb10 onlymobile">Start My Engine</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div class="top bg-light">
                        <h2 style="font-size: xx-large;" class="text-black">RevUp Sales </h2>
                        <img src="{{ asset('images/webimages/images/revupsales1.jpg') }}" class="w-100" alt="">
                        <div class="inner text-dark">
                            <div class="clearfix"></div>

                            <h3 class="text-dark">Power up your inside teams </h3>
                            <p class="text-center">
                                Supercharge your sales funnel with <br> <b class=" fs-5 text"
                                    style="font-weight: 800;">Sales Ready Leads</b><br> and start cranking up the
                                conversations
                            </p>


                            <a style="width: 40%;margin: auto;" href="contact.php" class="btn-custom mb10 onlypc">Start
                                My Engine</a>
                            <a style="width: 60%;margin: auto;" href="contact.php"
                                class="btn-custom mb10 onlymobile">Start My Engine</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  " data--delay="0s">
                <div class="pricing-s2 mb30">
                    <div class="top bg-light">
                        <h2 style="font-size: xx-large;" class="text-black">RevUp Renewals </h2>
                        <img src="{{ asset('images/webimages/images/333.jpg') }}" class="w-100" alt="">
                        <div class="inner text-dark">
                            <div class="clearfix"></div>

                            <h3 class="text-dark">Fuel service contract uplift </h3>
                            <p class="text-center">
                                Ignite your renewals business with <br> <b class=" fs-5 text"
                                    style="font-weight: 800;">Sales Ready Leads</b><br> who need to extend their
                                contracts
                            </p>


                            <a style="width: 40%;margin: auto;" href="contact.php" class="btn-custom mb10 onlypc">Start
                                My Engine</a>
                            <a style="width: 60%;margin: auto;" href="contact.php"
                                class="btn-custom mb10 onlymobile">Start My Engine</a>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

</section>



<section style="background-color: #1c2160" aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
                <div class="col-md-12   ">
                    <div class="text-center px-5">
                        <h2 class="id-color-2 onlypc">Attract leads, drive connection, and increase revenue </h2>
                        <h1 style="font-size: xx-large;" class="id-color-2 onlymobile">Attract leads, drive connection,
                            and increase revenue </h1>
                        <p class="px-md-5 text-light fs-5 text">B2B Marketing and Sales need to connect better with
                            customers </p>


                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="col-md-12  " data--delay="0s">
                    <div id="owl-logo2" class="logo-carousel owl-carousel owl-theme">


                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/algorithms.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Intuitive <br> Algorithm </h3>
                        </div>

                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/lightbulb.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Predictive <br> Intent </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/responsive-design.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Emails & <br> Landing Pages </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/report.png') }}" alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Install Base <br> Campaigns </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/5g.png') }}" alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Multi-Channel Outreach </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/call-center.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Direct <br> Dials </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/smartphone.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Mobile <br> Numbers </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/linguistics.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Translation <br> Services </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/targetnewnew.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">ABM // ABX <br> Activation </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/touch-screen.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Multi-Touch Campaigns </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/ads.png') }}" alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Re-targeting <br> Ads </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/quiz.png') }}" alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Profiling & Qualification </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/schedule.png') }}" alt="decentralized-network" />
                            <h3 class="text-center  mt-2">Event <br> Support </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/live.png') }}" alt="decentralized-network" />
                            <h3 class="text-center  mt-2">24 Hour <br> Program Activation </h3>
                        </div>
                        <div class="img-fluid ">
                            <img style="width:30%;     margin-inline: auto;" width="50" height="50" img
                                src="{{ asset('images/webimages/images/energy-system.png') }}"
                                alt="decentralized-network" />
                            <h3 class="text-center  mt-2">MAP & CRM Integration </h3>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12  ">
            <div class="col-md-12  mt-5 ">
                <div class="text-center px-md-4">
                    <!--  <h2 class=""><b class="id-color-2">RevUp</b><br> helps your team go from first hello to latest renewal - <b class="id-color-2">fast</b> - <br> by providing exclusive tools and resources to align with your strategy and <br> <b class="id-color-2">grow your business</b> </h2>
                              -->
                    <h2 class="id-color-2"><b style="color:#f27307">RevUp</b> </h2>
                    <p class="px-md-5 fs-5 text text-light">helps your team go from first hello to latest renewal -
                        <b>fast</b> - <br> by providing flexible tools and resources to align with your strategy and
                        <br> <b style="color:#f27307">grow your business</b>
                    </p>
                    <div class="m-5"></div>
                    <a style="width: 50%; margin: top 5rem;" href="contact.php" class="btn-custom mb10 mt-5">Start My
                        Engine</a>

                    <div class="spacer-20"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="showonlybigscreen">

    <!-- ////////////////////////////////////////////////////////////////////// -->

    <div id="ourdata"></div>
    <section style="padding-top: 0; " id="section-banner"
        class="img-fluid bg-gradient-to-right  text-light relative pos-top pt40 pb40">

        <div class="container-fluid" id="Transform&Generate">
            <div class="row align-items-center" id="Transform&Generate">




                <div style="padding-left:4rem; padding-top:3rem" class="col-lg-4 col-md-4   fadeIn" data--delay="1s">
                    <div class="p-sm-30">
                        <h1 class=""><i>Get your rev up</i>. Globally </h1>

                        <p class="" style="font-size: 25px; line-height: 35px;">Instant access to a global, <i>first
                                party</i>
                            B2B community that connects you to engagement-ready IT and LOB buyers everywhere. At scale.
                            And oh yeah, <i>fast.</i> </p>
                        <div class="spacer-half"></div>
                        <!--  <img style="width: 125%;" img src="{{ asset('images/webimages/images/thechart.png') }}" alt=""> -->
                        <!--  <a class="btn-custom" href="contact.php"></a>  -->
                        <!--    <div class="w-50">
  <canvas id="myChart"></canvas>
</div> -->
                        <div class="row text-center d-flex justify-content-between">
                            <div class="col-3 text-center  border-bottom border-light">
                                <h3>16.1M</h3>
                                <h3>SMB</h3>
                            </div>
                            <div class="col-3 text-center  border-bottom border-light">
                                <h3>29.4M</h3>
                                <h3>MM</h3>
                            </div>
                            <div class="col-3 text-center  border-bottom border-light">
                                <h3>24.5M</h3>
                                <h3>ENT</h3>
                            </div>
                        </div>
                        <div class="onlypc row text-center d-flex justify-content-center">
                            <div class="col-3 text-center m-5 border-bottom border-light">
                                <h3>42.7M</h3>
                                <h3>IT</h3>
                            </div>
                            <div class="col-3 text-center m-5 border-bottom border-light">
                                <h3>27.3M</h3>
                                <h3>LOB</h3>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block d-xl-block  text-center">
                    <!-- <h1 style="
    position: relative;
    margin-bottom: -25%;
    z-index: 2;" > 127M Audience</h1> -->
                    <img class="img-fluid  " img src="{{ asset('images/webimages/images/mapwithphoneimglast.png') }}"
                        alt="">
                </div>
            </div>
        </div>

    </section>



    <!-- ////////////////////////////////////////////////////////////////////////////// -->

    <section style="background-image: url({{ asset('images/webimages/images/overlaybgg.png') }});"
        class="container-fulid p-3 overlay-gradient t70">
        <div class="row d-flex justify-content-center p-3 mt-3 mb-3">
            <div class="col-md-8 text-center p-5">
                <h1>There's light at the end of the funnel </h1>
                <p id="ourdata" class="mb-5" style="font-size: 30px; line-height: 35px;">Our AI-powered Data Lab
                    identifies your best fit accounts and contacts to help you meet more buyers along
                    their path to purchase </p>
                <a style="width: 50%; " href="contact.php" class="btn-custom mb10 mt-5">Learn More</a>
            </div>
        </div>
    </section>





    <div id="whydemandgine" class="p-5 "></div>
    <div id="Fuelyourgrowth" class="container-fluid  ">
        <div style="height: 95vh;" class="row ">

            <div style="padding-left: 5rem; " class="col-lg-6 pr-5  col-md-6  pl-5 pt-5 fadeIn">
                <div class="p-sm-30">
                    <h1 class="text-dark mt-5">Va Va Vroom </h1>
                    <p id="thistext" style="font-size: 25px; padding-right: 3rem;" class="lead text-dark">
                        At Demandgine, we put <i>the rev</i> in revenue. Our team of industry experts brings decades of
                        B2B experience to help our clients increase
                        revenue. Faster. With a combination of global first party data and behavioral intent, powered by
                        a proprietary AI algorithm
                        and in-house execution, RevUp is the engine to supercharge your pipeline and fast track reliable
                        revenue streams.
                    </p>
                    <div class="spacer-half"></div>
                    <a class="btn-custom mb-5" href="contact.php">Start My Engine</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block d-xl-block  text-center">

            </div>






        </div>
    </div>
</div>





<div class="onlysmallscreendiv">
    <div id="Transform&Generate"></div>
    <div id="ourdata2"></div>
    <section style="padding-bottom: 0;">
        <div style="padding: 3rem" class="row firstblock  p-md-5 text-center">
            <div class="col-xl-6 p-md-5   ">
                <h1 class="text-dark"><i>Get your rev up</i>. Globally </h1>
                <p class="text-dark" style="font-size: 25px; line-height: 35px;">Instant access to a global, <i>first
                        party</i>
                    B2B community that connects you to engagement-ready IT and LOB buyers everywhere. At scale. And oh
                    yeah, <i>fast</i>. </p>
                <div class="row text-center d-flex justify-content-between">
                    <div class="col-3 text-center text-dark  border-bottom border-dark">
                        <h3 class="text-dark">16.1M</h3>
                        <h3 class="text-dark">SMB</h3>
                    </div>
                    <div class="col-3 text-center  text-dark border-bottom border-dark">
                        <h3 class="text-dark">29.4M</h3>
                        <h3 class="text-dark">MM</h3>
                    </div>
                    <div class="col-3 text-center text-dark border-bottom border-dark">
                        <h3 class="text-dark">24.5M</h3>
                        <h3 class="text-dark">ENT</h3>
                    </div>
                </div>
                <div class="row text-center d-flex justify-content-around mt-5">
                    <div class="col-3 text-center onlymobile text-dark  border-bottom border-dark">
                        <h3 class="text-dark">42.7M</h3>
                        <h3 class="text-dark">IT</h3>
                    </div>
                    <div class="col-3 text-center onlymobile text-dark   border-bottom border-dark">
                        <h3 class="text-dark">27.3M</h3>
                        <h3 class="text-dark">LOB</h3>
                    </div>



                </div>

            </div>
            <div class="col-xl-6 text-center  "> <img class="img-fluid  " img
                    src="{{ asset('images/webimages/images/mapwithphoneimglast.png') }}" alt="">
            </div>
        </div>
    </section>

    <section>

        <section style="background-image: url({{ asset('images/overlaybgg.png') }}); padding-top: 0;"
            class="container-fulid p-3 ">
            <div class="row d-flex justify-content-center p-3 mt-3 mb-3">
                <div class="col-md-8 text-center p-5">
                    <h3>There's light at the end of the funnel </h3>
                    <p class="mb-5" style="font-size: 20px; line-height: 35px;">Our AI-powered Data Lab identifies your
                        best fit accounts and contacts to help you meet more buyers along
                        their path to purchase </p>
                    <a style="width: 50%; " href="contact.php" class="btn-custom mb10 mt-5">Learn More</a>
                </div>
            </div>
        </section>
    </section>
    <div id="whydemandgine2"></div>
    <section>
        <div class="row firstblock  p-md-5">
            <div class="col-xl-6 p-md-5 text-center ">
                <h1 style="color:black">Va Va Vroom</h1>
                <p style="color:black"> At RevUp, we put the rev in revenue. Our team of industry experts brings decades
                    of B2B experience to help our clients increase
                    revenue. Faster. With a combination of global first party data and behavioral intent, powered by a
                    proprietary AI algorithm
                    and in-house execution, Demandgine is the engine to supercharge your pipeline and fast track
                    reliable revenue streams.</p>
                <div class="tp-caption tp-text text-left" data-height="none" data-responsive_offset="on"
                    data-splitin="none" data-splitout="none" data-start="1300"
                    data-transform_in="y:100px;opacity:0;s:800;e:Power2.easeOut;"
                    data-transform_out="opacity:0;y:30;s:700;e:Power2.easeInOut;" data-whitespace="nowrap"
                    data-width="none" data-x="0" data-y="380">

                    <div class="mx-auto"> <a class="btn-slider mt-5" href="contact.php">Get in touch</a></div>
                </div>
            </div>

        </div>
    </section>
</div>




<div></div>

<!-- <div class="no-bottom " id="content">
                <div id="top"></div> -->

<!--  <section style="" id="section-hero"   data-stellar-background-ratio=".2">
    
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                           
                          <div class="col text-center">
                            
                            <h1 class="id-color-2">It’s All About the Numbers</h1>
                            <h3> </h3>
                            
                           
                            
                             
                          
                             
                          </div></div>
                        </div>
                    </div>
    
                </section>
              
                
    
                <section id="section-features" class="pos-top no-top mt-60 no-bg bgcolor-variation">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div id="owl-features" class="owl-carousel owl-theme">
                                    
                            <div class="feature-box-type-2">
    
    <h1>500M+</h1>
    <h3> Datapoints Processed Monthly</h3>
</div>

<div class="feature-box-type-2">
   
    <h1>124M</h1>
    <h3>Global Audience</h3>
</div>

<div class="feature-box-type-2">
   
    <h1>10000’s</h1>
    <h3> Leads Delivered Monthly</h3>
</div>

<div class="feature-box-type-2">
  
    <h1>20x</h1>
    <h3>Buyer Engagement Boost</h3>
</div>

<div class="feature-box-type-2">
   
    <h1>100s </h1>
    <h3>Funnels Fueled</h3>
</div>

<div class="feature-box-type-2">
    
    <h1>10x</h1>
    <h3>ROI</h3>
</div>
                                    
                                  
                                    
                            </div>
                        </div>
                    </div>
                </section> -->




<!-- </div> -->




<section id="powerfulsolutions" class="p-5 bg-dark">
    <div class="container-fluid  ">
        <div class="row p-md-5">
            <div style="margin-block: auto;" class="col-md-5">
                <h1>Powerful solutions <br>
                    to supercharge your <br>
                    marketing and sales funnels
                </h1>
            </div>
            <div class="col-md-7">
                <div class="row d-flex justify-content-between">
                    <div class="col-5 text-center mb-5 border-bottom border-light">
                        <h1>200M+</h1>
                        <h3>Datapoints Processed Monthly</h3>
                    </div>
                    <div class="col-5 text-center mb-5 border-bottom border-light">
                        <h1>70M+</h1>
                        <h3>Global Audience</h3>
                    </div>
                    <div class="col-5 text-center mb-5 border-bottom border-light">
                        <h1>20,000+</h1>
                        <h3>Leads Delivered Monthly</h3>
                    </div>
                    <div class="col-5 text-center mb-5 border-bottom border-light">
                        <h1>20x</h1>
                        <h3>Buyer Engagement Boost</h3>
                    </div>
                    <div class="col-5 text-center mb-5 border-bottom border-light">
                        <h1>10x</h1>
                        <h3>ROI</h3>
                    </div>
                    <div class="col-5 text-center mb-5 border-bottom border-light">
                        <h1>100s</h1>
                        <h3>Funnels Fueled</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>



<section style="background-repeat: no-repeat;     background-position: center;
    background-size: 110%; background-image:url({{ asset('images/webimages/images/bgforcontactindexpage.jpeg') }})"
    class=" no-top no-bottom text-light">

    <div class="overlay-gradient t70">
        <div class="center-y">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 offset-md-2 text-center">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <!-- <h1 class="no-bottom">Contact Us</h1> -->
                            <h1 class="onlypc">Hey Marketing, Sales, and Media professionals. Let’s put the rev in
                                revenue!</h1>
                            <h3 class="onlymobile">Hey Marketing, Sales, and Media professionals. Let’s put the rev in
                                revenue!</h3>

                        </div>
                    </div>

                    <div class="spacer-10"></div>

                    <div class="col-lg-8 mb-sm-30">
                        <form name="contactForm" id='contact_form' class="form-s1" method="post"
                            action='https://formsubmit.co/Info@demandgine.com'>
                            <input type="hidden" name="_next" value="https://DemandGine.com/thankyoupage.php">
                            <input type="hidden" name="_captcha" value="false">



                            <div class="field-set ">
                                <input type='text' required name='name' id='name' class="form-control"
                                    placeholder="Full Name">
                            </div>



                            <div class="field-set">
                                <input type='text' required name='email' id='email' class="form-control"
                                    placeholder="Email">
                            </div>

                            <div class="field-set">
                                <input type='text' required name='subject' id='phone' class="form-control"
                                    placeholder="Company">
                            </div>

                            <div class="field-set">
                                <textarea name='message' required id='message' class="form-control"
                                    placeholder="Message"></textarea>
                            </div>

                            <div class="spacer-half"></div>

                            <div id='submit'>
                                <input type='submit' value='Say Hello' class="btn btn-custom">
                            </div>
                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                        </form>
                    </div>
                    <div class="col-lg-4 mb30">



                        <div class="spacer-30"></div>

                        <div class="padding40 bg-gradient-to-right text-light rounded">
                            <h3>Contact info</h3>
                            <address class="s1">
                                <span><i class="fa fa-map-marker fa-lg"></i>
                                    Location <br>6543 South Las Vegas Blvd <br>Suite #200 <br>Las Vegas, NV 89119</span>
                                <span><i class="fa fa-phone fa-lg"></i> (702) 805-0273</span>
                                <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:Info@demandgine.com">Send A
                                        Mail <br> Info@demandgine.com</a></span>
                                <!-- <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                            </address>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>


</div>









@endsection