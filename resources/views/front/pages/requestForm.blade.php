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
                            <h2 class="title text-white text-center">Request</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="{{ route("event.booking") }}">Booking</a></li>
                                <li><a href="#">Request</a></li>
                                <li class="active text-gray-silver">Make Request</li>
                            </ol>
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

                        <h4 class="mt-4 mb-30 text-center "  >
                            <span class="p-4" style="border-bottom: 2px solid red;padding-bottom: 20px;">
                            السيد الأستاذ الدكتور/ مدير مركزالتدريب والتطوير بجامعة عين شمس تحية طيبة وبعد , برجاء التكرم من سيادتكم بالموافقة على طلب
                            </span>
                        </h4>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="{{route("request.save")}}" method="post">

                            @csrf
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email"> Request Name <small>*</small></label>
                                        <input name="request_name" class="form-control required " type="text"  value="{{ old("request_name") }}" placeholder="Enter Request Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label for="email">Type of Request<small>*</small></label>
                                        <select class="form-control required" id="request_type_id" name="request_type_id" >
                                            <option value="{{null}}"> chose Request type</option>
                                            @foreach($types as $type)
                                                <option value="{{ $type->id }}" @if($type->id  == old("request_type_id")) selected @endif> {{ $type['name']  }}  </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                            </div>


                            <div>
                                <button type="submit" class="btn btn-primary " >
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Make Request </button>
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