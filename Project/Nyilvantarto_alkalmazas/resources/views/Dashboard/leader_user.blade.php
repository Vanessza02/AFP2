@extends('layouts.index')

@section('content')
<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Profil</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <!-- end row -->

                    <!-- START ROW -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Personal Data</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Firstame</th>
                                                    <th scope="col">Lastname</th>
                                                    <th scope="col">Nickname</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Profile Picture</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> {{ Auth::user()->firstname }}</td>
                                                    <td> {{ Auth::user()->lastname }}</td>
                                                    <td>{{ Auth::user()->nickname }}</td>
                                                    <td>{{ Auth::user()->email }}</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{$userAvatar->avatar}}" alt="user" class="rounded-circle">
                                                        </div>
                                                    </td>                                               
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END ROW -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

@endsection
