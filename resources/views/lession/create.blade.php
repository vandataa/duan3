@extends('layoutindex.layout')

@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Content</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Grid System</li>
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
            <div class="card">
                <div class="card-body">


                    <form action="{{ route('lession.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Name Lession</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Name your lession">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Video</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <input type="file" class="form-control" name="video"
                                            placeholder="How many lession?">
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Description</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="fm-search">
                                <div class="mb-0">
                                    <div class="breadcrumb-title pe-3">Session</div>
                                    <div class="input-group input-group-lg"> <span
                                            class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                        <select class="form-select" name="session"
                                            aria-label="Default select example">
                                            <option selected>Session</option>
                                            @foreach ($session as $session)
                                                <option value="{{ $session->id }}">
                                                    {{ $session->nameSession }}</option>
                                            @endforeach
                                        </select>
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
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
<!--start overlay-->
<div class="overlay toggle-btn-mobile"></div>
@endsection
