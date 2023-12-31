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
                        <a href="{{route('lession.create')}}" class="btn btn-primary">New Lession</a>

                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="mb-0">Available breakpoints</h5>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name Lesison</th>
                                    <th>Video</th>
                                    <th>Session</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($lession as $lession)
                                <tr>
                                    <td>{{$lession->nameLession}}</td>
                                    <td><video src="{{asset('storage/videos/'.$lession->video)}}" controls width="200px" height="auto"></video>
                                    </td>
                                    <td>{{$lession->id_session}}</td>
                                    <td>
                                        <form action="{{ route('lession.destroy',$lession->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('lession.edit',$lession->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="mb-0">Containers</h5>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td class="border-dark"></td>
                                    <th scope="col">Extra small
                                        <br>	<span class="fw-normal">&lt;576px</span>
                                    </th>
                                    <th scope="col">Small
                                        <br>	<span class="fw-normal">≥576px</span>
                                    </th>
                                    <th scope="col">Medium
                                        <br>	<span class="fw-normal">≥768px</span>
                                    </th>
                                    <th scope="col">Large
                                        <br>	<span class="fw-normal">≥992px</span>
                                    </th>
                                    <th scope="col">X-Large
                                        <br>	<span class="fw-normal">≥1200px</span>
                                    </th>
                                    <th scope="col">XX-Large
                                        <br>	<span class="fw-normal">≥1400px</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container-sm</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container-md</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container-lg</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container-xl</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container-xxl</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal"><code>.container-fluid</code>
                                    </th>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                    <td class="text-muted">100%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="mb-0">Grid options</h5>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">xs
                                        <br>	<span class="fw-normal">&lt;576px</span>
                                    </th>
                                    <th scope="col">sm
                                        <br>	<span class="fw-normal">≥576px</span>
                                    </th>
                                    <th scope="col">md
                                        <br>	<span class="fw-normal">≥768px</span>
                                    </th>
                                    <th scope="col">lg
                                        <br>	<span class="fw-normal">≥992px</span>
                                    </th>
                                    <th scope="col">xl
                                        <br>	<span class="fw-normal">≥1200px</span>
                                    </th>
                                    <th scope="col">xxl
                                        <br>	<span class="fw-normal">≥1400px</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-nowrap" scope="row">Container <code class="fw-normal">max-width</code>
                                    </th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                    <td><code>.col-</code>
                                    </td>
                                    <td><code>.col-sm-</code>
                                    </td>
                                    <td><code>.col-md-</code>
                                    </td>
                                    <td><code>.col-lg-</code>
                                    </td>
                                    <td><code>.col-xl-</code>
                                    </td>
                                    <td><code>.col-xxl-</code>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row"># of columns</th>
                                    <td colspan="6">12</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                    <td colspan="6">1.5rem (.75rem on left and right)</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Custom gutters</th>
                                    <td colspan="6"><a href="https://codervent.com/docs/5.0/layout/gutters/">Yes</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Nestable</th>
                                    <td colspan="6"><a href="#nesting">Yes</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                    <td colspan="6"><a href="https://codervent.com/docs/5.0/layout/columns/#reordering">Yes</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
