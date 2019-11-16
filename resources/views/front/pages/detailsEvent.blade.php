@extends('layouts.master')

@section('content')

    <!-- Start main-content -->
    <div class="main-content" id="myapp"  >

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-white text-center">Details Event</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Event</a></li>
                                <li class="active text-gray-silver">Details</li>
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

                        <h4 class="mt-0 mb-30 line-bottom">  Details -{{ $event->program['name_'.$lang] }} <span style="color: red;">Event </span>  </h4>



                        <!-- Contact Form Validation-->
                        <script type="text/javascript">
                            $("#contact_form").validate();
                        </script>
                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <article class="post clearfix mb-sm-30">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth" style="max-height: 400px">
                                </div>
                            </div>
                            <div class="entry-content p-20 pr-10 bg-white">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            <li class="font-16 text-white font-weight-600 border-bottom">{{ $event->event_start->format("d")}}</li>
                                            <li class="font-12 text-white text-uppercase">{{ $event->event_start->shortEnglishMonth }}</li>
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"> {{ $event->program['name_'.$lang] }} </a></h4>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-user mr-5 text-theme-colored"></i> {{ $event->users_count  }}  Join</span>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-users mr-5 text-theme-colored"></i> {{ $event->capacity }} Max </span>

                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-calendar mr-5 text-theme-colored"></i> {{ $event->event_start->format("d-m-Y") }} <span style="color: #0F9E5E"> Start </span> </span>

                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-calendar mr-5 text-theme-colored"></i> {{ $event->event_end->format("d-m-Y") }}  <span style="color: red"> End</span> </span>
                                        </div>
                                    </div>
                                </div>
                                <p  class="mt-10">
                                    {{ $event->program["description_".$lang] }}
                                </p>
                                <p>
                                    <span class="badge badge-primary">Program Module </span>
                                     {{ $event->program->module['name_'.$lang] }}
                                </p>
                                <p>
                          <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                          </span>
                                    {{ $event->location }}
                                </p>
                                <p>
                                    @if($event->trainers)
                                        Trainers :
                                        @endif
                                    @foreach( explode(",",$event->trainers) as $trainer)
                                        <span>
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </span>
                                        {{ $trainer }}
                                    @endforeach
                                </p>
                                <a href="#" class="btn btn-info "> <i class="fa fa-ticket"></i> Book Now</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection

@section("scripto")
    <script>

        {{--window.onload = function () {--}}
        {{--    $univercity  = $("#univercity")--}}
        {{--    $facaulty    = $("#faculty")--}}
        {{--    $department  = $("#department")--}}
        {{--    $("body").on("change","#univercity",function(){--}}
        {{--        let x = $(this).val()--}}
        {{--        if( x){--}}
        {{--            let url = "{{url("site/get-faculty")}}"+"/"+ x--}}
        {{--            $.ajax({--}}
        {{--                type: "GET",--}}
        {{--                url:url,--}}
        {{--                dataType: "json",--}}
        {{--                success: (resultData)=>{--}}
        {{--                    if (resultData.key == "1"){--}}
        {{--                        $facaulty.html("").attr("disabled",false)--}}
        {{--                        $facaulty.html(resultData.data)--}}
        {{--                        $department.html("").attr("disabled",true)--}}
        {{--                    }--}}
        {{--                    else {--}}
        {{--                        $facaulty.html("").attr("disabled",true)--}}
        {{--                        $department.html("").attr("disabled",true)--}}
        {{--                    }--}}

        {{--                },--}}
        {{--                error:function (error) {--}}
        {{--                    alert("error")--}}
        {{--                    $facaulty.html("").attr("disabled",true)--}}
        {{--                    $department.html("").attr("disabled",true)--}}
        {{--                }--}}
        {{--            })--}}
        {{--        }--}}
        {{--        else{--}}
        {{--            $facaulty.html("").attr("disabled",true)--}}
        {{--            $department.html("").attr("disabled",true)--}}
        {{--        }--}}

        {{--    })--}}

        {{--    $("body").on("change","#faculty",function(){--}}
        {{--        let x = $(this).val()--}}
        {{--        if( x){--}}
        {{--            let url = "{{url("site/get-department")}}"+"/"+ x--}}
        {{--            $.ajax({--}}
        {{--                type: "GET",--}}
        {{--                url:url,--}}
        {{--                dataType: "json",--}}
        {{--                success: (resultData)=>{--}}
        {{--                    if (resultData.key == "1"){--}}
        {{--                        $department.html("").attr("disabled",false)--}}
        {{--                        $department.html(resultData.data)--}}
        {{--                    }--}}
        {{--                    else {--}}
        {{--                        $department.html("").attr("disabled",true)--}}
        {{--                    }--}}

        {{--                },--}}
        {{--                error:function (error) {--}}
        {{--                    alert("error")--}}
        {{--                    $department.html("").attr("disabled",true)--}}
        {{--                }--}}
        {{--            })--}}
        {{--        }--}}
        {{--        else{--}}
        {{--            $department.html("").attr("disabled",true)--}}
        {{--        }--}}

        {{--    })--}}
        {{--    $(`input[name='password']`).val("")--}}
        {{--}--}}
    </script>
@endsection