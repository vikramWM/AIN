@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Writer-Availability
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignment In Need</small>
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Filter</span>
                    </h3>
                </div>
                <form action="">
                    <div class="card-body py-3">
                        <div class="d-flex">
                            <div class="col-lg-3 fv-row fv-plugins-icon-container me-2">
                                <input type="date" name="available_date"  class="form-control form-control-solid" placeholder="Search By OrderCode">
                            </div>
                            <div class="col-lg-3 fv-row fv-plugins-icon-container">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="card card-xl-stretch mb-xl-">
            <div class="card-body py-3">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Available Writers</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                <div class="container">
                        <h1>Writers Available on {{ $today }}</h1>
                        
                        @if($users->isEmpty())
                            <p>No writers available.</p>
                        @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Available After</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->index + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->available_today_after)
                                                    {{ $user->available_today_after }}
                                                @else
                                                    All day
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
