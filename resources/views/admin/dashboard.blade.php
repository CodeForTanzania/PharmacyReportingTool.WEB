@extends('layouts.master')

@section('title')
    Administrator - Dashboard | Maduka ya Madawa - Code for Tanzania
@stop

@section('content')
    <div class="container-fluid margin-bottom-100px">
        @include('admin.includes.navigations')

        <div class="row admin-bottom">
            <div class="row">
                <div class="col-md-12">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div><!-- close div .admin-bottom -->

        <div class="row admin-contents">
            <div class="row">
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['dispensers']) }}</h1>
                        <h2>Dispensers</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['addos']) }}</h1>
                        <h2>Addos</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['pharmacists']) }}</h1>
                        <h2>Pharmacists</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['pharmacies']) }}</h1>
                        <h2>Pharmacies</h2>
                    </div>
                </div>
            </div><!-- close div .row -->
            <hr />
            <br />
            <div class="row">
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['owners']) }}</h1>
                        <h2>Owners</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['reports']) }}</h1>
                        <h2>Reports</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['attendances']) }}</h1>
                        <h2>Attendances</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h1 class="color-pink">{{ count($data['users']) }}</h1>
                        <h2>Users</h2>
                    </div>
                </div>
            </div><!-- close div .row -->
        </div><!-- close div .admin-contents -->
    </div><!-- close div .container-fluid -->
@stop