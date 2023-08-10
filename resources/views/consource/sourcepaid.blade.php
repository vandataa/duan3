@extends('layout.layout')
@section('content')

<main class="page_content">
    <section class="page_banner">
        <div class="container">
            <div class="content_wrapper">
                <div class="row align-items-center">
                    @foreach($session as $session)
                    <div class="col col-lg-7">
                        <ul class="breadcrumb_nav unordered_list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="course.html">Course</a></li>
                            <li>Course Details V.1</li>
                        </ul>

                        <h1 class="page_title">{{$session->nameSession}}</h1>

                        <ul class="meta_info_list unordered_list">
                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                        </ul>
                        <ul class="btns_group unordered_list">
                            <li>
                                <div class="item_price"><del class="remove_price">${{$session->cost}}</del> <span
                                        class="sale_price">$19.99</span></div>
                            </li>
                            <li><a href="/bystudy" class="btn btn_dark"><span><small>Get Course</small>
                                        <small>Get Course</small></span></a></li>
                        </ul>
                    </div>

                    <div class="col col-lg-5">
                        <div class="image_widget page_banner_image"><img
                                src="{{asset('storage/image/'.$session->titleimage)}}"
                                alt="Collab – Online Learning Platform"></div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="details_section courses_info_section section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6">
                    <div class="content_wrap">
                        <div class="section_heading">
                            <h2 class="heading_text mb-0">What You will Learn</h2>
                        </div>
                        <ul class="info_list unordered_list_block">
                            <li><i class="fas fa-check"></i> <span>Fermentum iaculis eu non diam phasellus
                                    vestibulum. Porta non pulvinar neque laoreet suspendisse. Justo nec ultrices
                                    dui sapien proin sed libero</span></li>
                            <li><i class="fas fa-check"></i> <span>At consectetur lorem donec massa sapien.
                                    Pulvinar sapien et ligula ullamcorper malesuada proin</span></li>
                            <li><i class="fas fa-check"></i> <span>Quisque id diam vel quam elementum pulvinar.
                                    Eget felis eget nunc lobortis mattis aliquam faucibus purus.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="service_item" data-magnetic>
                        <div class="item_icon"><img src="assets/images/icon/icon_desktop.svg"
                                alt="Collab – Online Learning Platform"></div>
                        <div class="item_content">
                            <h3 class="item_title">Course Format</h3>
                            <ul class="info_list unordered_list_block">
                                <li><i class="fas fa-square"></i> <span>Video Tutorials</span></li>
                                <li><i class="fas fa-square"></i> <span>Checking the Task</span></li>
                                <li><i class="fas fa-square"></i> <span>Pulvinar sapien</span></li>
                                <li><i class="fas fa-square"></i> <span>Software</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="service_item" data-magnetic>
                        <div class="item_icon"><img src="assets/images/icon/icon_calendar.svg"
                                alt="Collab – Online Learning Platform"></div>
                        <div class="item_content">
                            <h3 class="item_title">Duration Course</h3>
                            <ul class="info_list unordered_list_block">
                                <li><i class="fas fa-square"></i> <span>3 Weeks</span></li>
                                <li><i class="fas fa-square"></i> <span>5 Video Tutorials</span></li>
                                <li><i class="fas fa-square"></i> <span>3 Hours of Consultations</span></li>
                                <li><i class="fas fa-square"></i> <span>1.5 Hours Webinar</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="details_section course_details_section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 order-lg-last">
                    <div class="ps-lg-5">
                        <div class="section_heading">
                            <h2 class="heading_text">Course Content</h2>
                        </div>
                        @foreach($lession as $lession)
                        <div class="intro_video mb-4">
                            <div class="video_wrap"><video src="{{asset('storage/videos/'.$lession->video)}}"
                                    alt="Collab – Online Learning Platform" controls></video> <span class="icon"><i
                                            class="fas fa-play"></i></span></a></div>
                        </div>
                        @endforeach
                        <p>Nunc mattis enim ut tellus elementum sagittis vitae. Nisi lacus sed viverra tellus in
                            hac. Amet dictum sit amet justo donec enim diam. Morbi non arcu risus quis varius
                            quam quisque id. Mi eget mauris pharetra et ultrices neque. Natoque penatibus et
                            magnis dis parturient montes nascetur.</p>
                        <p>Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Vitae sapien pellentesque
                            habitant morbi tristique senectus et netus.</p><a class="btn border_dark btn_small"
                            href="#!"><span><small><img src="assets/images/icon/icon_clip.svg"
                                        alt="Collab – Online Learning Platform"> Resources</small> <small><img
                                        src="assets/images/icon/icon_clip_white.svg"
                                        alt="Collab – Online Learning Platform"> Resources</small></span></a>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="accordion style_2" id="corse_details_accordion">
                        <div class="accordion-item">

                            <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_one" aria-expanded="true">Section 1. Python Express
                                Course</div>
                            <div id="collapse_one" class="accordion-collapse collapse show"
                                data-bs-parent="#corse_details_accordion">
                                <div class="accordion-body">
                                    <p class="completed_progress"><span>1/4</span> Completed</p>
                                    <div class="checkbox_item"><input id="checkbox_1_1" type="checkbox"
                                            checked="checked"> <label for="checkbox_1_1">1. Basic Python Syntax
                                            introduction</label></div>
                                    <div class="checkbox_item"><input id="checkbox_1_2" type="checkbox"> <label
                                            for="checkbox_1_2">2. Expressions, Numbers, and Type
                                            Conversions</label></div>
                                    <div class="checkbox_item"><input id="checkbox_1_3" type="checkbox"> <label
                                            for="checkbox_1_3">3. Morbi Non Arcu Risus Numbers Varius
                                            Quam</label></div>
                                    <div class="checkbox_item"><input id="checkbox_1_4" type="checkbox"> <label
                                            for="checkbox_1_4">4. Branching with if Statements</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_two" aria-expanded="false">Section 2. Introduction to
                                Loops</div>
                            <div id="collapse_two" class="accordion-collapse collapse"
                                data-bs-parent="#corse_details_accordion">
                                <div class="accordion-body">
                                    <p class="completed_progress"><span>1/4</span> Completed</p>
                                    <div class="checkbox_item"><input id="checkbox_2_1" type="checkbox"
                                            checked="checked"> <label for="checkbox_2_1">1. Basic Python Syntax
                                            introduction</label></div>
                                    <div class="checkbox_item"><input id="checkbox_2_2" type="checkbox"> <label
                                            for="checkbox_2_2">2. Expressions, Numbers, and Type
                                            Conversions</label></div>
                                    <div class="checkbox_item"><input id="checkbox_2_3" type="checkbox"> <label
                                            for="checkbox_2_3">3. Morbi Non Arcu Risus Numbers Varius
                                            Quam</label></div>
                                    <div class="checkbox_item"><input id="checkbox_2_4" type="checkbox"> <label
                                            for="checkbox_2_4">4. Branching with if Statements</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_three" aria-expanded="false">Section 3. Strings, Lists
                                and Dictionaries</div>
                            <div id="collapse_three" class="accordion-collapse collapse"
                                data-bs-parent="#corse_details_accordion">
                                <div class="accordion-body">
                                    <p class="completed_progress"><span>1/4</span> Completed</p>
                                    <div class="checkbox_item"><input id="checkbox_3_1" type="checkbox"
                                            checked="checked"> <label for="checkbox_3_1">1. Basic Python Syntax
                                            introduction</label></div>
                                    <div class="checkbox_item"><input id="checkbox_3_2" type="checkbox"> <label
                                            for="checkbox_3_2">2. Expressions, Numbers, and Type
                                            Conversions</label></div>
                                    <div class="checkbox_item"><input id="checkbox_3_3" type="checkbox"> <label
                                            for="checkbox_3_3">3. Morbi Non Arcu Risus Numbers Varius
                                            Quam</label></div>
                                    <div class="checkbox_item"><input id="checkbox_3_4" type="checkbox"> <label
                                            for="checkbox_3_4">4. Branching with if Statements</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="details_section mentor_details_section section_space_lg">
        <div class="container">
            <div class="section_space_md pt-0">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="details_image image_widget"><img
                                src="assets/images/mentor/mentor_details_image_1.jpg"
                                alt="Collab – Online Learning Platform"></div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="details_content ps-lg-5">
                            <h2 class="details_item_title">Course Instructors</h2>
                            <h3 class="mentor_name">Alex Edwards</h3>
                            <h4 class="mentor_designation">Fullstack developer</h4>
                            <ul class="meta_info_list unordered_list">
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>4.9 (22 reviews)</span></li>
                            </ul>
                            <p>Scelerisque viverra mauris in aliquam. Mauris pharetra et ultrices neque ornare
                                aenean. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Venenatis
                                lectus magna fringilla urna porttitor rhoncus dolor. Sem fringilla ut morbi
                                tincidunt augue interdum velit euismod in. Blandit volutpat maecenas volutpat
                                blandit aliquam etiam erat velit</p>
                            <div class="row">
                                <div class="col col-lg-4">
                                    <div class="counter_item pe-0">
                                        <h3 class="counter_value"><span class="counter_value_text">45</span>
                                            <span>+</span></h3>
                                        <p class="mb-0">Persons Mentored</p>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="counter_item pe-0">
                                        <h3 class="counter_value"><span class="counter_value_text">10</span>
                                            <span>+</span></h3>
                                        <p class="mb-0">Workshops Attended</p>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="counter_item pe-0">
                                        <h3 class="counter_value"><span class="counter_value_text">8</span>
                                            <span>+</span></h3>
                                        <p class="mb-0">Coaching Certificates</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4">
                    <div class="mentor_item">
                        <div class="mentor_image"><a href="mentor_details.html"><img
                                    src="assets/images/mentor/mentor_image_1.jpg"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="mentor_content">
                            <h3 class="mentor_name"><a href="mentor_details.html">Carolyn Jackson</a></h3>
                            <p class="mentor_designation">Fullstack developer</p>
                            <ul class="meta_info_list unordered_list_center mb-0">
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>4.9 (22 reviews)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="mentor_item">
                        <div class="mentor_image"><a href="mentor_details.html"><img
                                    src="assets/images/mentor/mentor_image_2.jpg"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="mentor_content">
                            <h3 class="mentor_name"><a href="mentor_details.html">William Morgan</a></h3>
                            <p class="mentor_designation">Python Mentor</p>
                            <ul class="meta_info_list unordered_list_center mb-0">
                                <li><i class="fas fa-clock"></i> <span>100 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>5 (10 reviews)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="mentor_item">
                        <div class="mentor_image"><a href="mentor_details.html"><img
                                    src="assets/images/mentor/mentor_image_3.jpg"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="mentor_content">
                            <h3 class="mentor_name"><a href="mentor_details.html">Christine Nelson</a></h3>
                            <p class="mentor_designation">AQ/Mentor</p>
                            <ul class="meta_info_list unordered_list_center mb-0">
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>4.9 (22 reviews)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course_deals_section section_space_lg bg_light decoration_wrap overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col col-lg-5 order-lg-last">
                    <div class="image_widget"><img src="assets/images/about/about_image_5.jpg"
                            alt="Collab – Online Learning Platform"></div>
                </div>
                <div class="col col-lg-6">
                    <div class="content_wrap">
                        <div class="section_heading">
                            <h2 class="heading_text">Data Warehouse Concepts, Design, and Data Integration</h2>
                            <p class="heading_description mb-0">Tincidunt praesent semper feugiat nibh sed
                                pulvinar proin gravida hendrerit. Consectetur purus ut faucibus pulvinar
                                elementum</p>
                        </div>
                        <div class="deals_countdown">
                            <ul class="countdown_timer unordered_list" data-countdown="2023/12/31"></ul>
                            <div class="discount_value"><strong>40%</strong> <span>Sale</span></div>
                        </div>
                        <div class="btn_wrap pb-0"><a class="btn border_dark"
                                href="course.html"><span><small>Explore Courses</small> <small>Explore
                                        Courses</small></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'><img
                src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
        <div class="deco_item shape_img_2" data-parallax='{"x" : -130, "smoothness": 6}'><img
                src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
        <div class="deco_item shape_img_3" data-parallax='{"y" : -130, "smoothness": 6}'><img
                src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
    </section>
    <section class="courses_section section_space_lg">
        <div class="container">
            <div class="section_heading text-center">
                <h2 class="heading_text mb-0">Students Also Bought</h2>
            </div>
            <div class="row">
                <div class="col col-lg-4">
                    <div class="course_card">
                        <div class="item_image"><a href="course_details.html" data-cursor-text="View"><img
                                    src="assets/images/course/course_image_1.jpg"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="item_content">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Computer Science</a></li>
                                </ul>
                                <div class="item_price"><span class="sale_price">$29.99</span> <del
                                        class="remove_price">$39.99</del></div>
                            </div>
                            <ul class="meta_info_list unordered_list">
                                <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                            </ul>
                            <h3 class="item_title"><a href="course_details.html">Programming for Everybody
                                    (Getting Started with Python)</a></h3><a class="btn_unfill"
                                href="course_details.html"><span class="btn_text">View Course</span> <span
                                    class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                        class="fas fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="course_card">
                        <div class="item_image"><a href="course_details.html" data-cursor-text="View"><img
                                    src="assets/images/course/course_image_2.jpg"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="item_content">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_price"><span class="sale_price">$9.99</span></div>
                            </div>
                            <ul class="meta_info_list unordered_list">
                                <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                            </ul>
                            <h3 class="item_title"><a href="course_details.html">Photography Masterclass: A
                                    Complete Guide to Photography</a></h3><a class="btn_unfill"
                                href="course_details.html"><span class="btn_text">View Course</span> <span
                                    class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                        class="fas fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="course_card">
                        <div class="item_image"><a href="course_details.html" data-cursor-text="View"><img
                                    src="assets/images/course/course_image_3.jpg"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="item_content">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Business</a></li>
                                </ul>
                                <div class="item_price"><span class="sale_price">FREE</span></div>
                            </div>
                            <ul class="meta_info_list unordered_list">
                                <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                            </ul>
                            <h3 class="item_title"><a href="course_details.html">Project Management Principles
                                    and Practices</a></h3><a class="btn_unfill" href="course_details.html"><span
                                    class="btn_text">View Course</span> <span class="btn_icon"><i
                                        class="fas fa-long-arrow-right"></i> <i
                                        class="fas fa-long-arrow-right"></i></span></a>
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
