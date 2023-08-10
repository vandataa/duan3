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
                            <a type="button" href="{{ route('teacher.create') }}" class="btn btn-primary">Settings</a>

                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <form action="{{ route('teacher.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Image Teacher</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="Image your teacher">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Name teacher</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="nameTeacher"
                                            placeholder="Name teacher">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Skill</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="skill"
                                            placeholder="Skill teacher have">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Phone</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Skill teacher have">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">FaceBook</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="facebook"
                                            placeholder="Skill teacher have">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Tiwter</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="twiter"
                                            placeholder="Skill teacher have">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Skyer</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="skyer"
                                            placeholder="Skill teacher have">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="New Teacher" class="btn btn-primary" >
                    </form>
                </div>
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
