@extends('layout.layout')

@section('content')
        <main class="page_content">
            <section class="hero_banner style_1">
                <div class="container">
                    <div class="content_wrap">
                        <div class="row">
                            <div class="col col-lg-7">
                                <h1 class="banner_small_title">Learning Excellence</h1>
                                <h2 class="banner_big_title">The Best Free Online Courses of All Time</h2>
                                <p class="banner_description">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum fugiat nulla pariatur</p>
                                <ul class="banner_btns_group unordered_list">
                                    <li><a class="btn btn_primary" href="/paid_session"><span><small>Explore
                                                    Courses</small> <small>Explore Courses</small></span></a></li>
                                    <li><a class="video_play_btn text-white popup_video"
                                            href="https://www.youtube.com/watch?v=7e90gBu4pas"><span class="icon"
                                                data-magnetic><i class="fas fa-play"></i></span> <span
                                                class="text">Watch video</span></a></li>
                                </ul>
                            </div>
                            <div class="col col-lg-5">
                                <div class="banner_image_1 decoration_wrap">
                                    <div class="image_wrap"><img src="{{asset('assets/images/banner/hero_banner_img_1.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="satisfied_student">
                                        <h3 class="wrap_title">220+ Satisfied Student</h3>
                                        <ul class="students_thumbnail unordered_list_center">
                                            <li><span><img src="{{asset('assets/images/meta/student_thumbnail_1.png')}}"
                                                        alt="Collab – Online Learning Platform"></span></li>
                                            <li><span><img src="{{asset('assets/images/meta/student_thumbnail_2.png')}}"
                                                        alt="Collab – Online Learning Platform"></span></li>
                                            <li><span><img src="{{asset('assets/images/meta/student_thumbnail_3.png')}}"
                                                        alt="Collab – Online Learning Platform"></span></li>
                                            <li><span><img src="{{asset('assets/images/meta/student_thumbnail_4.png')}}"
                                                        alt="Collab – Online Learning Platform"></span></li>
                                            <li><span><img src="{{asset('assets/images/meta/student_thumbnail_5.png')}}"
                                                        alt="Collab – Online Learning Platform"></span></li>
                                        </ul>
                                    </div>
                                    <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                                        <img src="{{asset('assets/images/shape/shape_img_1.png')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="deco_item shape_img_2" data-parallax='{"y" : 160, "smoothness": 6}'><img
                                            src="{{asset('assets/images/shape/shape_img_2.png')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="expect_from_course section_space_lg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-6">
                            <div class="section_heading">
                                <h2 class="heading_text">What to Expect from a Collab Course</h2>
                                <p class="heading_description mb-0">Rutrum tellus pellentesque eu tincidunt. Venenatis
                                    cras sed felis eget velit aliquet sagittis id consectetur</p>
                            </div>
                            <div class="image_widget"><img src="{{asset('assets/images/about/about_image_1.jpg')}}"
                                    alt="Collab – Online Learning Platform"></div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="btn_wrap pt-0 d-none d-lg-flex justify-content-end"><a class="btn border_dark"
                                    href="course.html"><span><small>Explore Courses</small> <small>Explore
                                            Courses</small></span></a></div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="service_item" data-magnetic>
                                        <div class="item_icon"><img src="{{asset('assets/images/service/icon_academic_cap.svg')}}"
                                                alt="Collab – Online Learning Platform"></div>
                                        <div class="item_content">
                                            <h3 class="item_title">Knowledge</h3>
                                            <p class="mb-0">Duis aute irure dolor in repreh in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="service_item" data-magnetic>
                                        <div class="item_icon"><img src="{{asset('assets/images/service/icon_physics.svg')}}"
                                                alt="Collab – Online Learning Platform"></div>
                                        <div class="item_content">
                                            <h3 class="item_title">Unlimited access</h3>
                                            <p class="mb-0">Libero nunc consequat interd varius sit amet mattis vulpute
                                                enim liquet sagittis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="service_item" data-magnetic>
                                        <div class="item_icon"><img src="{{asset('assets/images/service/icon_communication.svg')}}"
                                                alt="Collab – Online Learning Platform"></div>
                                        <div class="item_content">
                                            <h3 class="item_title">Practical Skills</h3>
                                            <p class="mb-0">Vulputate enim nulla aliquet porttitor lacus luctus accums.
                                                Cras sed felis eget velit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="service_item" data-magnetic>
                                        <div class="item_icon"><img src="{{asset('assets/images/service/icon_diploma.svg')}}"
                                                alt="Collab – Online Learning Platform"></div>
                                        <div class="item_content">
                                            <h3 class="item_title">A certificate</h3>
                                            <p class="mb-0">Excepteur sint occaecat cupid non proident, sunt in culpa
                                                qui officia deserunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_wrap pb-0 d-block d-lg-none text-center"><a class="btn border_dark"
                                    href="course.html"><span><small>Explore Courses</small> <small>Explore
                                            Courses</small></span></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="counter_section bg_light section_space_md">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6">
                            <div class="counter_item">
                                <h3 class="counter_value"><span class="counter_value_text">500</span> <span>+</span>
                                </h3>
                                <p class="mb-0">Hours of hands-on learning in our courses</p>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6">
                            <div class="counter_item">
                                <h3 class="counter_value"><span class="counter_value_text">1500</span> <span>+</span>
                                </h3>
                                <p class="mb-0">Students Passed Our Competitions and Got a Job</p>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6">
                            <div class="counter_item">
                                <h3 class="counter_value"><span class="counter_value_text">25</span> <span>/75</span>
                                </h3>
                                <p class="mb-0">The Ratio of Theory and Practice in Each Course</p>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6">
                            <div class="counter_item">
                                <h3 class="counter_value"><span class="counter_value_text">40</span> <span>+</span></h3>
                                <p class="mb-0">We teach people from 4 continents and over 40 countries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="courses_section section_space_lg">
                <div class="container">
                    <div class="section_heading">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col col-lg-6">
                                <h2 class="heading_text mb-0">Highest Rated Online Courses</h2>
                            </div>
                            <div class="col col-lg-5">
                                <p class="heading_description mb-0 text-lg-end">Dignissim enim sit amet venenatis urna
                                    cursus eget nunc. Egestas sed sed risus pretium quam vulputate</p>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_wrapper">
                        <ul class="nav" role="tablist">
                            <li role="presentation"><button class="active" data-bs-toggle="tab" data-bs-target="#teb_hr"
                                    type="button" role="tab" aria-selected="true"><i class="fas fa-users"></i>
                                    <span>HR</span></button></li>
                            <li role="presentation"><button data-bs-toggle="tab" data-bs-target="#teb_photography"
                                    type="button" role="tab" aria-selected="false"><i class="fas fa-camera"></i>
                                    <span>Photography</span></button></li>
                            <li role="presentation"><button data-bs-toggle="tab" data-bs-target="#teb_programming"
                                    type="button" role="tab" aria-selected="false"><i class="fas fa-chart-network"></i>
                                    <span>Programming</span></button></li>
                            <li role="presentation"><button data-bs-toggle="tab" data-bs-target="#teb_marketing"
                                    type="button" role="tab" aria-selected="false"><i class="fas fa-lightbulb-on"></i>
                                    <span>Marketing</span></button></li>
                            <li role="presentation"><button data-bs-toggle="tab" data-bs-target="#teb_design"
                                    type="button" role="tab" aria-selected="false"><i class="fas fa-palette"></i>
                                    <span>Design</span></button></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                                <div class="row">
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_1.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Programming for
                                                        Everybody (Getting Started with Python)</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_2.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Photography
                                                        Masterclass: A Complete Guide to Photography</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_3.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Project Management
                                                        Principles and Practices</a></h3><a class="btn_unfill"
                                                    href="course_details.html"><span class="btn_text">View Course</span>
                                                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teb_photography" role="tabpanel">
                                <div class="row">
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_1.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Programming for
                                                        Everybody (Getting Started with Python)</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_2.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Photography
                                                        Masterclass: A Complete Guide to Photography</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_3.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Project Management
                                                        Principles and Practices</a></h3><a class="btn_unfill"
                                                    href="course_details.html"><span class="btn_text">View Course</span>
                                                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teb_programming" role="tabpanel">
                                <div class="row">
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_1.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Programming for
                                                        Everybody (Getting Started with Python)</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_2.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Photography
                                                        Masterclass: A Complete Guide to Photography</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_3.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Project Management
                                                        Principles and Practices</a></h3><a class="btn_unfill"
                                                    href="course_details.html"><span class="btn_text">View Course</span>
                                                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teb_marketing" role="tabpanel">
                                <div class="row">
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_1.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Programming for
                                                        Everybody (Getting Started with Python)</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_2.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Photography
                                                        Masterclass: A Complete Guide to Photography</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_3.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Project Management
                                                        Principles and Practices</a></h3><a class="btn_unfill"
                                                    href="course_details.html"><span class="btn_text">View Course</span>
                                                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teb_design" role="tabpanel">
                                <div class="row">
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_1.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Programming for
                                                        Everybody (Getting Started with Python)</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_2.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Photography
                                                        Masterclass: A Complete Guide to Photography</a></h3><a
                                                    class="btn_unfill" href="course_details.html"><span
                                                        class="btn_text">View Course</span> <span class="btn_icon"><i
                                                            class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4">
                                        <div class="course_card">
                                            <div class="item_image"><a href="course_details.html"
                                                    data-cursor-text="View"><img
                                                        src="{{asset('assets/images/course/course_image_3.jpg')}}"
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
                                                <h3 class="item_title"><a href="course_details.html">Project Management
                                                        Principles and Practices</a></h3><a class="btn_unfill"
                                                    href="course_details.html"><span class="btn_text">View Course</span>
                                                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                            class="fas fa-long-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="advertisement_section bg_dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <div class="section_heading mb-lg-0">
                                <h2 class="heading_text text-white">Take the Next Step Toward Your Personal and
                                    Professional Goals</h2>
                                <p class="heading_description mb-0 text-white">Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                                <div class="btn_wrap pb-0"><a class="btn btn_primary"
                                        href="course.html"><span><small>Explore Courses</small> <small>Explore
                                                Courses</small></span></a></div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="row images_group decoration_wrap">
                                <div class="col col-md-6 col-sm-6 col-6">
                                    <div class="image_wrap"><img src="{{asset('assets/images/advertisement/grid_img_1.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="image_wrap"><img src="{{asset('assets/images/advertisement/grid_img_2.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                </div>
                                <div class="col col-md-6 col-sm-6 col-6">
                                    <div class="image_wrap"><img src="{{asset('assets/images/advertisement/grid_img_3.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="image_wrap"><img src="{{asset('assets/images/advertisement/grid_img_4.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                </div>
                                <div class="deco_item shape_img_1" data-parallax='{"y" : -80, "smoothness": 6}'><img
                                        src="{{asset('assets/images/shape/shape_img_3.png')}}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="deco_item shape_img_2" data-parallax='{"y" : 80, "smoothness": 6}'><img
                                        src="{{asset('assets/images/shape/shape_img_3.png')}}"
                                        alt="Collab – Online Learning Platform"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="courses_info_section section_space_lg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <div class="image_widget"><img src="{{asset('assets/images/about/about_image_2.jpg')}}"
                                    alt="Collab – Online Learning Platform"></div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="content_wrap ps-lg-3">
                                <div class="section_heading">
                                    <h2 class="heading_text">Supporting Student Learning in Your Course</h2>
                                    <p class="heading_description mb-0">Rutrum tellus pellentesque eu tincidunt.
                                        Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Sit amet
                                        porttitor eget dolor morbi</p>
                                </div>
                                <ul class="info_list unordered_list_block">
                                    <li><i class="fas fa-square"></i> <span>Learn in-demand skills with over 183,000
                                            video courses</span></li>
                                    <li><i class="fas fa-square"></i> <span>Choose courses taught by real-world
                                            experts</span></li>
                                    <li><i class="fas fa-square"></i> <span>Learn at your own pace, with lifetime access
                                            on mobile and desktop</span></li>
                                </ul>
                                <div class="btn_wrap pb-0"><a class="btn btn_dark" href="mentor.html"><span><small>Our
                                                Mentors</small> <small>Our Mentors</small></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing_section section_space_lg bg_light">
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
                            src="{{asset('assets/images/shape/shape_img_4.png')}}" alt="Collab – Online Learning Platform"></div>
                    <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'><img
                            src="{{asset('assets/images/shape/shape_img_5.png')}}" alt="Collab – Online Learning Platform"></div>
                </div>
            </section>
            <section class="testimonial_section section_space_lg">
                <div class="container">
                    <div class="section_heading">
                        <div class="row align-items-center">
                            <div class="col col-lg-7">
                                <h2 class="heading_text mb-0">Don’t just take our word for it</h2>
                            </div>
                            <div class="col col-lg-5 d-lg-flex d-none justify-content-end">
                                <div class="carousel_arrow"><button type="button" class="cc2c_left_arrow"><i
                                            class="far fa-arrow-left"></i> <i class="far fa-arrow-left"></i></button>
                                    <button type="button" class="cc2c_right_arrow"><i class="far fa-arrow-right"></i> <i
                                            class="far fa-arrow-right"></i></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_carousel">
                        <div class="common_carousel_2col" data-cursor-text="Drag" data-slick='{"dots":false}'>
                            <div class="carousel_item">
                                <div class="testimonial_item">
                                    <div class="testimonial_image"><img
                                            src="{{asset('assets/images/testimonial/testimonial_img_1.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="testimonial_content">
                                        <ul class="rating_star unordered_list">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h3 class="testimonial_title">Very interesting course</h3>
                                        <p>Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus
                                            sed viverra tellus in hac habitasse platea</p>
                                        <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                        <h5 class="testimonial_name">Matthew Lina</h5><span class="quote_icon"><i
                                                class="fas fa-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_item">
                                <div class="testimonial_item">
                                    <div class="testimonial_image"><img
                                            src="{{asset('assets/images/testimonial/testimonial_img_2.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="testimonial_content">
                                        <ul class="rating_star unordered_list">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h3 class="testimonial_title">Very interesting course</h3>
                                        <p>Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus
                                            sed viverra tellus in hac habitasse platea</p>
                                        <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                        <h5 class="testimonial_name">Nahia Colunga</h5><span class="quote_icon"><i
                                                class="fas fa-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_item">
                                <div class="testimonial_item">
                                    <div class="testimonial_image"><img
                                            src="{{asset('assets/images/testimonial/testimonial_img_1.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="testimonial_content">
                                        <ul class="rating_star unordered_list">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h3 class="testimonial_title">Very interesting course</h3>
                                        <p>Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus
                                            sed viverra tellus in hac habitasse platea</p>
                                        <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                        <h5 class="testimonial_name">Matthew Lina</h5><span class="quote_icon"><i
                                                class="fas fa-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel_item">
                                <div class="testimonial_item">
                                    <div class="testimonial_image"><img
                                            src="{{asset('assets/images/testimonial/testimonial_img_2.jpg')}}"
                                            alt="Collab – Online Learning Platform"></div>
                                    <div class="testimonial_content">
                                        <ul class="rating_star unordered_list">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h3 class="testimonial_title">Very interesting course</h3>
                                        <p>Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus
                                            sed viverra tellus in hac habitasse platea</p>
                                        <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                        <h5 class="testimonial_name">Nahia Colunga</h5><span class="quote_icon"><i
                                                class="fas fa-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_arrow d-lg-none d-flex justify-content-center"><button type="button"
                                class="cc2c_left_arrow"><i class="far fa-arrow-left"></i> <i
                                    class="far fa-arrow-left"></i></button> <button type="button"
                                class="cc2c_right_arrow"><i class="far fa-arrow-right"></i> <i
                                    class="far fa-arrow-right"></i></button></div>
                    </div>
                </div>
            </section>
            <section class="newslatter_section">
                <div class="container">
                    <div class="newslatter_box" style="background-image:url({{asset('assets/images/shape/shape_img_6.svg')}}">
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
