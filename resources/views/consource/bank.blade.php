@extends('layout.layout')

@section('content')

<main class="page_content">
    <section class="page_banner">
        <div class="container">
            <div class="content_wrapper"
                style="background-image:url(assets/images/banner/page_banner_image.png)">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <ul class="breadcrumb_nav unordered_list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">Pages</a></li>
                            <li>Pricing</li>
                        </ul>
                        <h1 class="page_title">Pricing Plans</h1>
                        <p class="page_description">Egestas sed tempus urna et pharetra. Leo integer malesuada
                            nunc vel. Libero id faucibus nisl tincidunt eget nullam non nisi. Faucibus turpis in
                            eu mi bibendum neque egestas</p>
                        <form action="#">
                            <div class="form_item mb-0"><input type="search" name="search"
                                    placeholder="What do you want to learn ?"> <button type="submit"
                                    class="btn btn_dark"><span><small>Search</small>
                                        <small>Search</small></span></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing_section section_space_lg pb-0">
        <div class="container decoration_wrap">
            <div class="section_heading text-center">
                <h2 class="heading_text mb-0">Premium Price Packages</h2>
            </div>
            <div class="pricing_cards_wrapper row align-items-center">
                <div class="col col-lg-4">
                    <div class="pricing_card text-center tilt">
                        <h3 class="card_heading">Basic Plan</h3>
                        <div class="pricing_wrap"><span class="price_value"><sup>$</sup>50</span> <small
                                class="d-block">per 3 mounth</small></div>
                        <hr>
                        <ul class="info_list unordered_list_block text-start">
                            <li><i class="fas fa-caret-right"></i> <span>All Video for 3 Months</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Testing for 10 Courses</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Checking 5 Homework</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Mentor Consultation</span></li>
                        </ul>
                        <div class="btn_wrap pb-0"><a class="btn border_dark" href="#!"><span><small>Grav
                                        Now</small> <small>Grav Now</small></span></a></div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="pricing_card text-center bg_dark tilt">
                        <div class="card_badge">recommended</div>
                        <h3 class="card_heading">Standart Plan</h3>
                        <div class="pricing_wrap"><span class="price_value"><sup>$</sup>150</span> <small
                                class="d-block">per 6 mounth</small></div>
                        <hr>
                        <ul class="info_list unordered_list_block text-start">
                            <li><i class="fas fa-caret-right"></i> <span>All Video for 3 Months</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Testing for 10 Courses</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Checking 5 Homework</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Mentor Consultation</span></li>
                        </ul>
                        <div class="btn_wrap pb-0"><a class="btn btn_primary" href="#!"><span><small>Grav
                                        Now</small> <small>Grav Now</small></span></a></div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="pricing_card text-center tilt">
                        <h3 class="card_heading">Premium Plan</h3>
                        <div class="pricing_wrap"><span class="price_value"><sup>$</sup>250</span> <small
                                class="d-block">per 12 mounth</small></div>
                        <hr>
                        <ul class="info_list unordered_list_block text-start">
                            <li><i class="fas fa-caret-right"></i> <span>All Video for 3 Months</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Testing for 10 Courses</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Checking 5 Homework</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>Mentor Consultation</span></li>
                        </ul>
                        <div class="btn_wrap pb-0"><a class="btn border_dark" href="#!"><span><small>Grav
                                        Now</small> <small>Grav Now</small></span></a></div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'><img
                    src="assets/images/shape/shape_img_4.png" alt="Collab – Online Learning Platform"></div>
            <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'><img
                    src="assets/images/shape/shape_img_5.png" alt="Collab – Online Learning Platform"></div>
        </div>
    </section>
    <section class="faq_section section_space_lg">
        <div class="container">
            <div class="section_heading text-center mb-3">
                <div class="row justify-content-center">
                    <div class="col col-lg-7">
                        <h2 class="heading_text">Popular Questions to Ask Before Choosing a Course</h2>
                        <p class="heading_description mb-0">Egestas sed tempus urna et pharetra. Leo integer
                            malesuada nunc vel. Libero id faucibus nisl tincidunt eget nullam non nisi. Faucibus
                            turpis in eu mi bibendum neque egestas</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-6">
                    <div class="accordion" id="faq_accordion_1">
                        <div class="accordion-item">
                            <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_one" aria-expanded="true">How Do I Select a Course?
                            </div>
                            <div id="collapse_one" class="accordion-collapse collapse show"
                                data-bs-parent="#faq_accordion_1">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_two" aria-expanded="false">How Do I Access My Course?
                            </div>
                            <div id="collapse_two" class="accordion-collapse collapse"
                                data-bs-parent="#faq_accordion_1">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_three" aria-expanded="false">Do I Receive Anything
                                After I Complete a Course?</div>
                            <div id="collapse_three" class="accordion-collapse collapse"
                                data-bs-parent="#faq_accordion_1">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_four" aria-expanded="false">When should I register?
                            </div>
                            <div id="collapse_four" class="accordion-collapse collapse"
                                data-bs-parent="#faq_accordion_1">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="accordion" id="faq_accordion_2">
                        <div class="accordion-item">
                            <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                data-bs-target="#a2_collapse_one" aria-expanded="true">How Does Online Learning
                                Work?</div>
                            <div id="a2_collapse_one" class="accordion-collapse collapse show"
                                data-bs-parent="#faq_accordion_2">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#a2_collapse_two" aria-expanded="false">Can I Take More Than One
                                Course at a Time?</div>
                            <div id="a2_collapse_two" class="accordion-collapse collapse"
                                data-bs-parent="#faq_accordion_2">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#a2_collapse_three" aria-expanded="false">Where can I go for
                                help?</div>
                            <div id="a2_collapse_three" class="accordion-collapse collapse"
                                data-bs-parent="#faq_accordion_2">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#a2_collapse_four" aria-expanded="false">Convallis posuere morbi
                                leo urna ?</div>
                            <div id="a2_collapse_four" class="accordion-collapse collapse"
                                data-bs-parent="#faq_accordion_2">
                                <div class="accordion-body">
                                    <p class="mb-0">Dictum non consectetur a erat. Odio morbi quis commodo odio
                                        aenean. Blandit libero volutpat sed cras ornare arcu. Tempus urna et
                                        pharetra pharetra. Enim ut sem viverra aliquet. Nisl vel pretium lectus
                                        quam id. Augue eget arcu dictum varius duis at consectetur. Egestas dui
                                        id ornare arcu. Nec ullamcorper sit amet risus nullam eget felis eget
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newslatter_section">
        <div class="container">
            <div class="newslatter_box" style="background-image:url(assets/images/shape/shape_img_6.svg)">
                <div class="row justify-content-center">
                    <div class="col col-lg-6">
                        <div class="section_heading text-center">
                            <h2 class="heading_text">Subscribe Now Forget 20% Discount Every Courses</h2>
                            <p class="heading_description mb-0">Nam ipsum risus, rutrum vitae, vestibulum eu,
                                molestie vel, lacus. Sed magna purus, fermentum eu</p>
                        </div>
                        <form action="#">
                            <div class="form_item m-0"><input type="email" name="email"
                                    placeholder="Your Email"> <button type="submit"
                                    class="btn btn_dark"><span><small>Subsctibe</small>
                                        <small>Subsctibe</small></span></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
