@extends('layouts.master')

@section('content')

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-white text-center">Login</h2>
{{--                            <ol class="breadcrumb text-left text-black mt-10">--}}
{{--                                <li><a href="#">Home</a></li>--}}
{{--                                <li><a href="#">Pages</a></li>--}}
{{--                                <li class="active text-gray-silver">Page Title</li>--}}
{{--                            </ol>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Contact -->
        <section class="divider">
            <div class="container pt-0">
                <div class="row pt-10">
                    <div class="col-md-12">

                        @include("parts.alert")

                        <h4 class="mt-0 mb-30 line-bottom">Welcom in Site </h4>


                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="{{route("site.login")}}" method="post">
                            @csrf
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password">Password <small>*</small></label>
                                        <input name="password" class="form-control required" type="password" placeholder="Enter Password">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" name="remember" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                               Remember Me
                                            </label>
                                            <a style="font-size: 16px" href=" {{ url("password/reset") }}" class="btn btn-link">
                                                Forget password
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary " > Login </button>
                            </div>
                        </form>

                        <!-- Contact Form Validation-->
                        <script type="text/javascript">
                            $("#contact_form").validate();
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection

@section("scripto")
    <script>

    </script>
@endsection