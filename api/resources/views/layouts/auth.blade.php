@extends('layouts.app')
@section('content')
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-8 ml-auto mr-auto">
                        @include ('layouts.errors')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
