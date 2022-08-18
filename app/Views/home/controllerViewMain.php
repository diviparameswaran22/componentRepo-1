<?php
$i = 0;
$classValue = [];
$dataValue = [];
foreach ( $whichController  as $key )
 {
    if ( $key[ 'admin_page_name' ] == 'home-section1' )
 {

        $classValue[ $i ] = $key[ 'admin_page_component_name' ];
        $dataValue[ $i ] = $key[ 'admin_page_component_data' ];
        $i++;
    }
}
?>
<!-- Section 1 Start -->
<header class='masthead'>
    <div class='container'>
        <div class='<?php echo $classValue[0]?>'><?php echo $dataValue[ 0 ]?></div>
        <div class='<?php echo $classValue[1]?>'><?php echo $dataValue[ 1 ]?></div>
        <a class='<?php echo $classValue[2]?>' target='_blank' href='#'><?php echo $dataValue[ 2 ]?></a>
    </div>
</header>
<!-- Section 1 End -->
<!-- Section 2 Start -->

<section class='page-section bg-shape-image-position' id='services'>
    <div class='container'>
        <div class='bg-shape-image'>
            <img class="<?php echo $classValue[0]?>" src="<?php echo $dataValue[0]?>" alt='Bg images'>
        </div>
        <div class='left-heading'>
            <h2 class="<?php echo $classValue[1]?>"><?php echo $dataValue[ 1 ]?></h2>
        </div>
        <div class='row text-center'>
            <div class='col-md-12 col-lg-4'>
                <div class='Design'>
                    <span class='icon'>
                        <i class='fa fa-diamond' aria-hidden='true'></i>
                    </span>
                    <h4 class="<?php echo $classValue[2]?>"><?php echo $dataValue[ 2 ]?></h4>
                    <p class="<?php echo $classValue[3]?>"><?php echo $dataValue[ 3 ]?></p>
                    <a class="<?php echo $classValue[4]?>" data-hover='Learn More' target='_blank'
                        href='https://devigntech.com/web-designing-services'><?php echo $dataValue[ 4 ]?></a>
                </div>
            </div>
            <div class='col-md-12 col-lg-4'>
                <div class='Ecommerce'>
                    <span class='icon'>
                        <i class='fa fa-shopping-basket' aria-hidden='true'></i>
                    </span>
                    <h4 class="<?php echo $classValue[5]?>"><?php echo $dataValue[ 5 ]?></h4>
                    <p class="<?php echo $classValue[6]?>"><?php echo $dataValue[ 6 ]?></p>
                    <a class="<?php echo $classValue[7]?>" data-hover='Learn More' target='_blank'
                        href='https://devigntech.com/ecommerce-web-development-services-pune-india'><?php echo $dataValue[ 7 ]?></a>
                </div>
            </div>
            <div class='col-md-12 col-lg-4'>
                <div class='Mobile-app'>
                    <span class='icon'>
                        <i class='fa fa-code' aria-hidden='true'></i>
                    </span>
                    <h4 class="<?php echo $classValue[8]?>"><?php echo $dataValue[ 8 ]?></h4>
                    <p class="<?php echo $classValue[9]?>"><?php echo $dataValue[ 9 ]?></p>
                    <a class="<?php echo $classValue[10]?>" data-hover='Learn More' target='_blank'
                        href='https://devigntech.com/web-and-software-application-development'><?php echo $dataValue[ 10 ]?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 2 End -->
<!-- Section 3 Start -->
<section class='page-section' id='whyus'>
    <div class='container'>
        <div class="<?php echo $classValue[0]?>"><?php echo $dataValue[ 0 ]?></div>
    </div>
</section>
<!-- Section 3 End -->
<!-- Section 4 Start -->
<section class="page-section" id="converting">
    <div class="color-bg">
        <div class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?></div>
        <?php echo $dataValue[1]?>

    </div>
</section>
<!-- Section 4 End -->
<!-- Section 5 Start -->
<section class="page-section" id="blockquote">
    <div class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?>
        <a class="<?php echo $classValue[1]?>" target="_blank" href="#"><?php echo $dataValue[1]?><span
                class="button-text"><i class="fa fa-caret-right" aria-hidden="true"></i> </span></a>
    </div>
</section>
<!-- Section 5 End -->
<!-- Section 6 Start -->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 col-lg-6">
                <h2 class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?></h2>
                <h3 class="<?php echo $classValue[1]?>"><?php echo $dataValue[1]?></h3>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="<?php echo $classValue[2]?>">
                    <span data-filter="*" class="active"><?php echo $dataValue[2]?></span>
                    <span data-filter=".Branding" class=""><?php echo $dataValue[3]?></span>
                    <span data-filter=".Web" class=""><?php echo $dataValue[4]?></span>
                    <span data-filter=".Ecomerce" class=""><?php echo $dataValue[5]?></span>
                </div>
            </div>
            <div class="col-12 text-center w-100">
                <div class="row grid form-row gallery text-center" style="position: relative; height: 1141.12px;">
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[6]?>">
                                <img src="<?php echo $dataValue[6]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[7]?>"></i>
                                </a>
                                <?php echo $dataValue[7]?>
                                <?php echo $dataValue[8]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/2.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[9]?>"></i>
                                </a>
                                <?php echo $dataValue[9]?>
                                <?php echo $dataValue[10]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Branding"
                        style="position: absolute; left: 0px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/branding.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[11]?>"></i>
                                </a>
                                <?php echo $dataValue[11]?>
                                <?php echo $dataValue[12]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 270px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[13]?>">
                                <img src="<?php echo $dataValue[13]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[14]?>"></i>
                                </a>
                                <?php echo $dataValue[14]?>
                                <?php echo $dataValue[15]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 0px; top: 747.156px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[16]?>">
                                <img src="<?php echo $dataValue[16]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[17]?>"></i>
                                </a>
                                <?php echo $dataValue[17]?>
                                <?php echo $dataValue[18]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 767.547px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[19]?>">
                                <img src="<?php echo $dataValue[19]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[20]?>"></i>
                                </a>
                                <?php echo $dataValue[20]?>
                                <?php echo $dataValue[21]?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 6 End -->
<!-- Section 7 Start -->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 col-lg-6">
                <h2 class="<?php echo $classValue[0]?>"><?php echo $dataValue[0]?></h2>
                <h3 class="<?php echo $classValue[1]?>"><?php echo $dataValue[1]?></h3>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="<?php echo $classValue[2]?>">
                    <span data-filter="*" class="active"><?php echo $dataValue[2]?></span>
                    <span data-filter=".Branding" class=""><?php echo $dataValue[3]?></span>
                    <span data-filter=".Web" class=""><?php echo $dataValue[4]?></span>
                    <span data-filter=".Ecomerce" class=""><?php echo $dataValue[5]?></span>
                </div>
            </div>
            <div class="col-12 text-center w-100">
                <div class="row grid form-row gallery text-center" style="position: relative; height: 1141.12px;">
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[6]?>">
                                <img src="<?php echo $dataValue[6]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[7]?>"></i>
                                </a>
                                <?php echo $dataValue[7]?>
                                <?php echo $dataValue[8]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 0px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/2.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[9]?>"></i>
                                </a>
                                <?php echo $dataValue[9]?>
                                <?php echo $dataValue[10]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Branding"
                        style="position: absolute; left: 0px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="../assets/images/portfolio/branding.jpg" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[11]?>"></i>
                                </a>
                                <?php echo $dataValue[11]?>
                                <?php echo $dataValue[12]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 270px; top: 373.578px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[13]?>">
                                <img src="<?php echo $dataValue[13]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[14]?>"></i>
                                </a>
                                <?php echo $dataValue[14]?>
                                <?php echo $dataValue[15]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Ecomerce"
                        style="position: absolute; left: 0px; top: 747.156px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[16]?>">
                                <img src="<?php echo $dataValue[16]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[17]?>"></i>
                                </a>
                                <?php echo $dataValue[17]?>
                                <?php echo $dataValue[18]?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item Web"
                        style="position: absolute; left: 270px; top: 767.547px;">
                        <div class="portfolio-wrapper">
                            <div class="<?php echo $classValue[19]?>">
                                <img src="<?php echo $dataValue[19]?>" alt="...">
                            </div>
                            <div class="portfolio-overlay">
                            </div>
                            <div class="portfolio-content">
                                <a class="popimg ml-0" target="_blank" href="#">
                                    <i class="<?php echo $classValue[20]?>"></i>
                                </a>
                                <?php echo $dataValue[20]?>
                                <?php echo $dataValue[21]?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 7 End -->
<!-- Section 8 Start -->
section class = 'page-section' id = 'blockquote'>
<div class='<?php echo $classValue[0]?>'>
    <h3><?php echo $dataValue[0]?></h3>
</div>
</section>
<!-- Section 8 End -->
<!-- Section 9 Start -->
<section class="page-section bg-light" id="Bestcompany">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">GyanDevign Tech – Best Website <br>Development Company in Pune</h2>
        </div>
        <div class="company-info">
            <p>As a website design and development agency, we solve marketing problems by creating a web strategy that
                generates high website traffic + increases app downloads. Our focus relies on creating delightful user
                experience making every visitor stand and notice your work.</p>
            <p>Our web design and development experts focus on designing websites that don't just look good, they
                perform, they convert. We work on <b>Woocommerce, PHP CodeIgniter and Shopify</b> for creating
                conversion-driven ecommerce stores. Be it more inquiries, increase sales or brand awareness, we plan
                your web development activity to achieve that outcome.</p>
            <p>We don’t sell packages. Your business is unique, not a commodity. It requires a humane approach to solve
                problems. We bring that humane touch in all our conversations. You can set up a call to understand, if
                we really walk the talk.</p>
        </div>
    </div>
</section>
<!-- Section 9 End -->
<!-- Section 10 Start -->
<section class="page-section" id="needhelp">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">Do you Want to Build Your Web Presence?</h2>
            <h3 class="section-subheading text-muted">Let's work together</h3>
        </div>
        <div class="company-info">
            <!--  <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Call Us <i class="fa fa-caret-right" aria-hidden="true"></i></span></a> -->
            <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i>rahulg@devigntech.com</span>
            <span class="phone-call"><i class="fa fa-phone" aria-hidden="true"></i>+91 75078 35565</span>
        </div>
    </div>
</section>
<!-- Section 10 End -->
<!-- Section 11 Start -->
<section class="page-section bg-light" id="testimonial">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">Pune's Top Reviewed Web Design Company</h2>
        </div>
        <div class="cient-testimonial">
            <div class="row">
                <div class="col-md-6">
                    <div class="client-words">
                        <span class="client-img">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <div class="client-desc">
                            <p>"In early 2019, I engaged devigntech.com to create a blog website for me. As a total
                                newbie in the world of website creation, I had to depend upon Rahul and his team to both
                                teach me what I needed to do, as well as creating the site, "FoundersHope.com".
                                Ultimately, the site came together on schedule and within budget. I'm looking forward to
                                adding various enhancements to the site in the near-term with devigntech.com as a major
                                player.</p>
                            <div class="client-designation">Bill Lauahojyls</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="client-words">
                        <span class="client-img">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <div class="client-desc">
                            <p>"Thanks DevignTech team for building our responsive maternity hospital website. You have
                                taken care of all the things from content-design to presentation. I liked the simplicity
                                and information you have put. I highly recommend GyanDevign Tech as a professional web
                                development company in Pune.</p>
                            <div class="client-designation">Avinash Lodam</div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<!-- Section 11 End -->
<!-- Section 12 Start -->
<section class="page-section" id="ClientPersona">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">Our Ideal Client Persona</h2>
            <h3 class="section-subheading text-muted">The website design and app development service offer is ideal for
                you </h3>
        </div>
        <div class="client-col">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box1">
                        <span class="box-icon">
                            <img src="../assets/images/layer.svg" alt="Icon Images">
                            <div class="text">1</div>
                        </span>
                        <span class="cient-info">If you’re a small business owner not happy with the present web design
                            or you now realize that a positive online authority will scale your bottom line.</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box2">
                        <span class="box-icon">
                            <img src="../assets/images/layer.svg" alt="Icon Images">
                            <div class="text">2</div>
                        </span>
                        <span class="cient-info">If you understand that quality work requires a minimum investment of
                            USD 500-1000 (for professional business websites) and USD 3000-USD 6000 for mobile app
                            development.</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box3">
                        <span class="box-icon">
                            <img src="../assets/images/layer.svg" alt="Icon Images">
                            <div class="text">3</div>
                        </span>
                        <span class="cient-info">If you want to rank your business in a competitive niche, it takes
                            time. It's not just about traffic, lead or sales. Content marketing helps your sales team
                            close deals faster. To build that you need to invest in search engine marketing
                            activities(min USD 500- 1000/.month).</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box4">
                        <span class="box-icon">
                            <img src="../assets/images/layer.svg" alt="Icon Images">
                            <div class="text">4</div>
                        </span>
                        <span class="cient-info">If both of us make an effort to understand and value each other, it
                            gives a reason to do business together.</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box5">
                        <span class="box-icon">
                            <img src="../assets/images/layer.svg" alt="Icon Images">
                            <div class="text">5</div>
                        </span>
                        <span class="cient-info">If you are a startup founder (with no cash crunch), who understands
                            that building a B2B or B2C application requires time, cost and patience from the team. If
                            you plan judiciously and respond to your user feedback, you can scale fast.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 12 End -->
<!-- Section 13 Start -->
<section class="page-section" id="calculator">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h2 class="section-heading">Try Out Our Project Estimator Tool</h2>
                <p>Are you not sure how much a website or an application development would cost? Have you received
                    packages from vendors claiming,” know it all”? Is your partner not asking enough questions to define
                    the scope of work?</p>
                <p>Well, You’re not alone. Your agony ends here. Use the project estimator tool to easily identify a
                    budget range for developing a website or a mobile application.</p>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> An Interactive calculator that asks you
                        relevant questions</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> You get the estimates in 5 minutes</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> You make a strong buying decision</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Prompts you to set up a call with our
                        technical expert</li>
                </ul>
                <div class="btn-grp">
                    <a class="axil-button btn-large btn-transparent" target="_blank"
                        href="https://devigntech.com/mobile-app-cost-calculator"><span class="button-text">Try Mobile
                            Calculator <i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                    <a class="axil-button btn-large btn-transparent" target="_blank"
                        href="https://devigntech.com/web-app-cost-calculator"><span class="button-text">Try Web App
                            Calculator <i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                    <a class="axil-button btn-large btn-transparent" target="_blank"
                        href="https://devigntech.com/web-design-cost-calculator"><span class="button-text">Try Website
                            Calculator <i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="thumbnail">
                    <div class="image">
                        <img src="../assets/images/calculator.jpg" alt="Calculator">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Section 13 End -->
<!-- Section 14 Start -->

<!-- Section 14 End -->