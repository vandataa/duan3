@extends('layoutindex.layout')

@section('content')
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Contatcs</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Contatcs</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a type="button" href="{{ route('teacher.create') }}" class="btn btn-primary">New teacher</a>

                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    @foreach ($top as $top)
                        <div class="col-lg-3">
                            <div class="card radius-15">
                                <div class="card-body text-center">
                                    <img src="{{ asset('storage/image/' . $top->image) }}" width="100" height="100"
                                        class="rounded-circle p-1 border bg-white" alt="" />
                                    <h5 class="mb-0 mt-4">{{ $top->nameTeacher }}</h5>
                                    <p class="mb-0 text-secondary">{{ $top->skill }}</p>
                                    <div class="list-inline contacts-social mt-3">
                                        <a href="{{ $top->facebook }}" class="list-inline-item text-facebook"><i
                                                class='bx bxl-facebook'></i></a>
                                        <a href="{{ $top->twiter }}" class="list-inline-item text-twitter"><i
                                                class='bx bxl-twitter'></i></a>
                                        <a href="{{ $top->phone }}" class="list-inline-item"><i
                                                class='bx bxs-phone'></i></a>
                                        <a href="{{ $top->skyer }}" class="list-inline-item text-skype"><i
                                                class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--end row-->
                <div class="row">
                    @foreach ($teacher as $teacher)
                        <div class="col-lg-4">
                            <div class="card radius-15 bg-warning">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('storage/image/' . $teacher->image) }}" width="80"
                                            height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                        <div class="">
                                            <h5 class="mb-0">{{ $teacher->nameTeacher }}</h5>
                                            <p class="mb-0">{{ $teacher->nameTeacher }}</p>
                                            <div class="list-inline contacts-social mt-2">
                                                <a href="{{ $top->facebook }}" class="list-inline-item text-facebook"><i
                                                        class='bx bxl-facebook'></i></a>
                                                <a href="{{ $top->twiter }}" class="list-inline-item text-twitter"><i
                                                        class='bx bxl-twitter'></i></a>
                                                <a href="{{ $top->phone }}" class="list-inline-item"><i
                                                        class='bx bxs-phone'></i></a>
                                                <a href="{{ $top->skyer }}" class="list-inline-item text-skype"><i
                                                        class='bx bxl-skype'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!--end row-->
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
        <p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent"
                target="_blank">codervent</a>
        </p>
    </div>
    <!-- end footer -->
    </div>
@endsection
