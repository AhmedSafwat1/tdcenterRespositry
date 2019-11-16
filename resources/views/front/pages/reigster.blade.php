@extends('layouts.master')

@section('content')

<!-- Start main-content -->
<div class="main-content" id="myapp"  facilties="{{json_encode($facilites)}}" univercity="{{json_encode($univercites)}}">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white text-center">Reigster</h2>
                        {{--                            <ol class="breadcrumb text-left text-black mt-10">--}}
                            {{--                                <li><a href="#">Home</a></li>--}}
                            {{--                               config <li><a href="#">Pages</a></li>--}}
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

                    <h4 class="mt-0 mb-30 line-bottom">Welcom in Register </h4>


                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="{{route("site.register")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">User Name <small>*</small></label>
                                <input name="username" class="form-control required " type="text" value="{{old("username")}}" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email <small>*</small></label>
                                <input name="email" class="form-control required email" type="email" value="{{old("email")}}" placeholder="Enter Email">
                            </div>

                        </div>

                    </div>

                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">First Name Arabic <small>*</small></label>
                                    <input name="fname_ar" class="form-control required " type="text" value="{{old("fname_ar")}}" placeholder="Enter First Name Arabic">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">First Name English <small>*</small></label>
                                    <input name="fname_en" class="form-control required " type="text" value="{{old("fname_en")}}" placeholder="First Name English">
                                </div>

                            </div>

                        </div>

                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Nationality <small>*</small></label>
                                    <input
                                            name="nationality"
                                            class="form-control required "
                                            type="text" value="{{old("nationality")}}"
                                            placeholder="Enter Nationality"
                                    >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">National Id<small>*</small></label>
                                    <input
                                            name="national_id"
                                            class="form-control required "
                                            type="number" value="{{old("national_id")}}"
                                            placeholder="Enter National id"
                                    >
                                </div>

                            </div>

                        </div>

                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Phone Number <small>*</small></label>
                                    <input
                                            name="phone_number"
                                            class="form-control required "
                                            type="number" value="{{old("phone_number")}}"
                                            placeholder="Enter Phone Number"
                                    >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Home phone</label>
                                    <input
                                            name="home_phone"
                                            class="form-control  "
                                            type="number" value="{{old("home_phone")}}"
                                            placeholder="Enter Home phone"
                                    >
                                </div>

                            </div>

                        </div>

                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Univercity<small>*</small></label>
                                    <select class="form-control required" id="univercity" name="university_id" >
                                        <option value="{{null}}"> chose your univercity</option>
                                        @foreach($univercites as $univercity)
                                            <option value="{{ $univercity->id }}"> {{ $univercity['name_'.$lang]  }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email"> Faculty <small>*</small></label>
                                    <select class="form-control required" name="faculty_id" id="faculty" disabled="true" >
                                    </select>
                                </div>

                            </div>

                        </div>


                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Department<small>*</small></label>
                                    <select class="form-control required" id="department" name="department_id"  disabled>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email"> Degree <small>*</small></label>
                                    <select class="form-control required" id="degree" name="degree_id"  >
                                        <option value="{{null}}"> chose your Degree</option>
                                        @foreach($degres as $univercity)
                                            <option value="{{ $univercity->id }}"
                                                    @if($univercity->id  == old("degree_id")) selected @endif> {{ $univercity['name_'.$lang]  }} </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        </div>



                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Gander <small>*</small></label>
                                    <div class="row">
                                        <div class="form-check col-md-6">
                                            <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="gender"
                                                    id="gridRadios1"
                                                    value="female"
                                                    @if(old("gender") == "female" || (old("gender") == "")) checked @endif
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Famel
                                            </label>
                                        </div>
                                        <div class="form-check col-md-6">
                                            <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="gender"
                                                    id="gridRadios1"
                                                    value="male"
                                                    @if(old("gender") == "male") checked @endif
                                            >
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Birth Date </label>
                                    <input
                                            name="birthdate"
                                            class="form-control required "
                                            type="date" value="{{old("birthdate")}}"
                                            placeholder="Birth Date "
                                    >
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Confirm Password <small>*</small></label>
                                <input name="password_confirmation" class="form-control required" type="password" placeholder="Enter confirm  Password">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Employee Case<small>*</small></label>
                                <select class="form-control required" id="employment_case_id" name="employment_case_id" >
                                    <option value="{{null}}"> chose Employee Case</option>
                                    @foreach($employes as $univercity)
                                        <option value="{{ $univercity->id }}" @if($univercity->id  == old("employment_case_id")) selected @endif> {{ $univercity['name_'.$lang]  }}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">

                                <label class="form-check-label" for="gridCheck">
                                    File upload
                                </label>
                                <input class="form-check-input " name="upload_file" type="file" id="gridCheck">


                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg " > Reigster </button>
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

 window.onload = function () {
        $univercity  = $("#univercity")
        $facaulty    = $("#faculty")
        $department  = $("#department")
        $("body").on("change","#univercity",function(){
            let x = $(this).val()
           if( x){
               let url = "{{url("site/get-faculty")}}"+"/"+ x
               $.ajax({
                   type: "GET",
                   url:url,
                   dataType: "json",
                   success: (resultData)=>{
                       if (resultData.key == "1"){
                          $facaulty.html("").attr("disabled",false)
                          $facaulty.html(resultData.data)
                           $department.html("").attr("disabled",true)
                       }
                       else {
                           $facaulty.html("").attr("disabled",true)
                           $department.html("").attr("disabled",true)
                       }

                   },
                   error:function (error) {
                       alert("error")
                       $facaulty.html("").attr("disabled",true)
                       $department.html("").attr("disabled",true)
                   }
               })
           }
           else{
               $facaulty.html("").attr("disabled",true)
               $department.html("").attr("disabled",true)
           }

        })

        $("body").on("change","#faculty",function(){
         let x = $(this).val()
         if( x){
             let url = "{{url("site/get-department")}}"+"/"+ x
             $.ajax({
                 type: "GET",
                 url:url,
                 dataType: "json",
                 success: (resultData)=>{
                     if (resultData.key == "1"){
                         $department.html("").attr("disabled",false)
                         $department.html(resultData.data)
                     }
                     else {
                         $department.html("").attr("disabled",true)
                     }

                 },
                 error:function (error) {
                     alert("error")
                     $department.html("").attr("disabled",true)
                 }
             })
         }
         else{
             $department.html("").attr("disabled",true)
         }

     })
 }
</script>
@endsection