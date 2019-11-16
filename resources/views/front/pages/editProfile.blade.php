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
                        <h2 class="title text-white text-center">Reigster</h2>
                        <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Profile</a></li>
                                <li class="active text-gray-silver">Edit</li>
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

                    <h4 class="mt-0 mb-30 line-bottom">  Profile - {{ $user->username  }} </h4>


                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="{{route("site.profile.edit")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden"  name="id" value="{{auth()->id()}}">
                    <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">User Name <small>*</small></label>
                                <input name="username" class="form-control required " type="text" value="{{$user["username"]}}" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email <small>*</small></label>
                                <input name="email" class="form-control required email" type="email" value="{{$user["email"]}}" placeholder="Enter Email">
                            </div>

                        </div>

                    </div>

                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">First Name Arabic <small>*</small></label>
                                    <input name="fname_ar" class="form-control required " type="text" value="{{ $user["fname_ar"] }}" placeholder="Enter First Name Arabic">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">First Name English <small>*</small></label>
                                    <input name="fname_en" class="form-control required " type="text" value="{{$user["fname_en"] }}" placeholder="First Name English">
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
                                            type="text" value="{{$user["nationality"]}}"
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
                                            type="number" value="{{$user["national_id"]}}"
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
                                            type="number" value="{{$user["phone_number"]}}"
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
                                            type="number" value="{{$user["home_phone"]}}"
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
                                            <option value="{{ $univercity->id }}"
                                                    @if($univercity->id == $user->university_id) selected @endif
                                            > {{ $univercity['name_'.$lang]  }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email"> Faculty <small>*</small></label>
                                    <select class="form-control required" name="faculty_id" id="faculty" >
                                        <option value="{{null}}"> chose your Faculty</option>
                                        @foreach($user->university->faculties as $univercity)
                                            <option value="{{ $univercity->id }}"
                                                    @if($univercity->id == $user->faculty_id) selected @endif
                                            > {{ $univercity['name_'.$lang]  }} </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        </div>


                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Department<small>*</small></label>
                                    <select class="form-control required" id="department" name="department_id"  >
                                        @foreach($user->faculty->departments as $univercity)
                                            <option value="{{ $univercity->id }}"
                                                    @if($univercity->id == $user->department_id) selected @endif
                                            > {{ $univercity['name_'.$lang]  }} </option>
                                        @endforeach
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
                                                    @if($univercity->id  == $user["degree_id"]) selected @endif> {{ $univercity['name_'.$lang]  }} </option>
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
                                                    @if($user["gender"]== "female")) checked @endif
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
                                                    @if($user["gender"] == "male") checked @endif
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
                                            type="date" value="{{$user["birthdate"]}}"
                                            placeholder="Birth Date "
                                    >
                                </div>

                            </div>

                        </div>

                    <div class="row justify-content-md-center">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="newPasseord">Password <small>*</small></label>
                                <input name="password" id="newPasseord" class="form-control "  value="" autocomplete="off" type="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Confirm Password <small>*</small></label>
                                <input name="password_confirmation" class="form-control " type="password" placeholder="Enter confirm  Password">
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
                                        <option value="{{ $univercity->id }}" @if($univercity->id  == $user["employment_case_id"]) selected @endif> {{ $univercity['name_'.$lang]  }}  </option>
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
                    <div class="row">
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary btn-block  btn-lg " > Update </button>
                       </div>
                        <div class="col-md-6">
                            <a href="{{ url("/") }}" class="btn btn-danger btn-block btn-lg " > Exist </a>
                        </div>
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
     $(`input[name='password']`).val("")
 }
</script>
@endsection