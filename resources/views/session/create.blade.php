@extends('layoutindex.layout')

@section('content')
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Applications</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button"
                                class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                    href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                    link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">


                    <div class="col-12 col-lg-9">
                        <div class="card">
                            <form action="{{ route('session.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="fm-search">
                                        <div class="mb-0">
                                            <div class="breadcrumb-title pe-3">Title image</div>
                                            <div class="input-group input-group-lg"> <span
                                                    class="input-group-text bg-transparent"><i
                                                        class='bx bx-search'></i></span>

                                                <input type="file" class="form-control" name="anh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-search">
                                        <div class="mb-0">
                                            <div class="breadcrumb-title pe-3">Name Session</div>
                                            <div class="input-group input-group-lg"> <span
                                                    class="input-group-text bg-transparent"><i
                                                        class='bx bx-search'></i></span>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Name your session">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-search">
                                        <div class="mb-0">
                                            <div class="breadcrumb-title pe-3">Session</div>
                                            <div class="input-group input-group-lg"> <span
                                                    class="input-group-text bg-transparent"><i
                                                        class='bx bx-search'></i></span>
                                                <input type="text" class="form-control" name="session"
                                                    placeholder="How many session?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-search">
                                        <div class="mb-0">
                                            <div class="breadcrumb-title pe-3">Lession</div>
                                            <div class="input-group input-group-lg"> <span
                                                    class="input-group-text bg-transparent"><i
                                                        class='bx bx-search'></i></span>
                                                <input type="text" class="form-control" name="lession"
                                                    placeholder="How many lession ?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-search">
                                        <div class="mb-0">
                                            <div class="breadcrumb-title pe-3">Teacher</div>
                                            <div class="input-group input-group-lg"> <span
                                                    class="input-group-text bg-transparent"><i
                                                        class='bx bx-search'></i></span>
                                                <select class="form-select" name="nameTeacher"
                                                    aria-label="Default select example">
                                                    <option selected>Name Teacher</option>
                                                    @foreach ($teacher as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->nameTeacher }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-search">
                                        <div class="mb-0">
                                            <div class="breadcrumb-title pe-3">Role sesion</div>
                                            <div class="input-group input-group-lg">
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="role" id="btnradio1"
                                                        checked value="1" autocomplete="off" checked>
                                                    <label class="btn btn-outline-primary" for="btnradio1">Free</label>
                                                    <input type="radio" class="btn-check" name="role"
                                                        id="btnradio2" value="0" autocomplete="off">
                                                    <label class="btn btn-outline-primary" for="btnradio2">Cost</label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-text" id="btnGroupAddon">Cost</div>
                                                <input type="text" class="form-control" name="cost"
                                                    placeholder="Input group cost for session"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="up" value="New Session" class="btn btn-primary"
                                        id="">
                                </div>


                                <div class="table-responsive mt-3">

                                </div>


                            </form>
                        </div>
                    </div>
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
@endsection
