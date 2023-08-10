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
                            <li>Courses</li>
                        </ul>
                        <h1 class="page_title">Course List</h1>
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
    <section class="courses_archive_section section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9">
                    @foreach ($session as $session)

                    <div class="course_card list_layout">
                        <div class="item_image"><a href="course_details.html" data-cursor-text="View"><img
                                    src="{{asset('storage/image/'.$session->titleimage)}}"
                                    alt="Collab – Online Learning Platform"></a></div>
                        <div class="item_content">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">programming</a></li>
                                </ul>
                                @if ($session->role_session == 1)
                                <div class="item_price"><span class="sale_price">Free</span>
                                    </div>
                        </div>
                    @else
                    <div class="item_price"><span class="sale_price">{{$session->cost}}</span> </div>
            </div>
                    @endif

                            <ul class="meta_info_list unordered_list">
                                <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                            </ul>
                            <h3 class="item_title"><a href="/free_resource/{{$session->id}}">{{$session->nameSession}}</a></h3><a class="btn_unfill"
                                href="/free_resource/{{$session->id}}"><span class="btn_text">View Course</span> <span
                                    class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                        class="fas fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                    @endforeach

                    <div class="pagination_wrap">
                        <ul class="pagination_nav unordered_list">
                            <li><a href="#!"><i class="fas fa-long-arrow-left"></i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!">3</a></li>
                            <li><a href="#!">...</a></li>
                            <li><a href="#!">12</a></li>
                            <li><a href="#!"><i class="fas fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <aside class="sidebar filter_offcanvas">
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_category" aria-expanded="true"
                                aria-controls="collapse_category">Category</div>
                            <div class="collapse show" id="collapse_category">
                                <div class="card card-body">
                                    <div class="checkbox_item"><input id="checkbox_design" type="checkbox">
                                        <label
                                            for="checkbox_design"><span>Design</span><span>(18)</span></label>
                                    </div>
                                    <div class="checkbox_item"><input id="checkbox_it_software" type="checkbox">
                                        <label for="checkbox_it_software"><span>IT &
                                                Software</span><span>(11)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_development" type="checkbox">
                                        <label
                                            for="checkbox_development"><span>Development</span><span>(10)</span></label>
                                    </div>
                                    <div class="checkbox_item"><input id="checkbox_marketing" type="checkbox">
                                        <label
                                            for="checkbox_marketing"><span>Marketing</span><span>(4)</span></label>
                                    </div>
                                    <div class="checkbox_item"><input id="checkbox_business" type="checkbox">
                                        <label
                                            for="checkbox_business"><span>Business</span><span>(8)</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ratings_widget widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_ratings" aria-expanded="true"
                                aria-controls="collapse_ratings">Ratings</div>
                            <div class="collapse show" id="collapse_ratings">
                                <div class="card card-body">
                                    <div class="checkbox_item"><input id="checkbox_star5" type="checkbox">
                                        <label for="checkbox_star5"><span><i class="fas fa-star"></i> 5 stars
                                            </span><span>(23)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_star4half" type="checkbox">
                                        <label for="checkbox_star4half"><span><i class="fas fa-star"></i> 4.5
                                                stars </span><span>(22)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_star4" type="checkbox">
                                        <label for="checkbox_star4"><span><i class="fas fa-star"></i> 4 stars
                                            </span><span>(20)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_star3half" type="checkbox">
                                        <label for="checkbox_star3half"><span><i class="fas fa-star"></i> 3.5
                                                stars </span><span>(18)</span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_instructors" aria-expanded="true"
                                aria-controls="collapse_instructors">Instructors</div>
                            <div class="collapse show" id="collapse_instructors">
                                <div class="card card-body">
                                    <div class="checkbox_item"><input id="checkbox_lisa_baker" type="checkbox">
                                        <label for="checkbox_lisa_baker"><span>Lisa
                                                Baker</span><span>(18)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_brandy_carlson"
                                            type="checkbox"> <label for="checkbox_brandy_carlson"><span>Brandy
                                                Carlson</span><span>(10)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_kevin_taylor"
                                            type="checkbox"> <label for="checkbox_kevin_taylor"><span>Kevin
                                                Taylor</span><span>(11)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_catherine_parker"
                                            type="checkbox"> <label
                                            for="checkbox_catherine_parker"><span>Catherine
                                                Parker</span><span>(11)</span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_price" aria-expanded="true"
                                aria-controls="collapse_price">Price</div>
                            <div class="collapse show" id="collapse_price">
                                <div class="card card-body">
                                    <div class="checkbox_item"><input id="checkbox_all" type="checkbox"> <label
                                            for="checkbox_all"><span>All</span><span>(18)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_free" type="checkbox"> <label
                                            for="checkbox_free"><span>FREE</span><span>(10)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_paid" type="checkbox"> <label
                                            for="checkbox_paid"><span>Paid</span><span>(11)</span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_level" aria-expanded="true"
                                aria-controls="collapse_level">Level</div>
                            <div class="collapse show" id="collapse_level">
                                <div class="card card-body">
                                    <div class="checkbox_item"><input id="checkbox_all_levels" type="checkbox">
                                        <label for="checkbox_all_levels"><span>All
                                                Levels</span><span>(18)</span></label></div>
                                    <div class="checkbox_item"><input id="checkbox_beginner" type="checkbox">
                                        <label
                                            for="checkbox_beginner"><span>Beginner</span><span>(10)</span></label>
                                    </div>
                                    <div class="checkbox_item"><input id="checkbox_intermediate"
                                            type="checkbox"> <label
                                            for="checkbox_intermediate"><span>Intermediate</span><span>(11)</span></label>
                                    </div>
                                    <div class="checkbox_item"><input id="checkbox_expert" type="checkbox">
                                        <label
                                            for="checkbox_expert"><span>Expert</span><span>(11)</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
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
