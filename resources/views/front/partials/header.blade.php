    <!-- preloader -->
    <div id="preloader">
            <div id="spinner">
              <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
              </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
          </div>

          <!-- Header -->
          <header id="header" class="header">
            {{-- <div class="header-top bg-theme-color-2 sm-text-center p-0">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="widget no-border m-0">
                      <ul class="list-inline font-13 sm-text-center mt-5">
                        <li>
                          <a class="text-white" href="#">FAQ</a>
                        </li>
                        <li class="text-white">|</li>
                        <li>
                          <a class="text-white" href="#">Help Desk</a>
                        </li>
                        <li class="text-white">|</li>
                        <li>
                          <a class="text-white" href="#">Login</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                      <ul class="list-inline pull-right">
                        <li class="mb-0 pb-0">
                          <div class="top-dropdown-outer pt-5 pb-10">
                            <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i> (12)</a>
                            <ul class="dropdown">
                              <li>
                                <!-- dropdown cart -->
                                <div class="dropdown-cart">
                                  <table class="table cart-table-list table-responsive">
                                    <tbody>
                                      <tr>
                                        <td><a href="#"><img alt="" src="http://placehold.it/85x85"></a></td>
                                        <td><a href="#"> Product Title</a></td>
                                        <td>X3</td>
                                        <td>$ 100.00</td>
                                        <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="#"><img alt="" src="http://placehold.it/85x85"></a></td>
                                        <td><a href="#"> Product Title</a></td>
                                        <td>X2</td>
                                        <td>$ 70.00</td>
                                        <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div class="total-cart text-right">
                                    <table class="table table-responsive">
                                      <tbody>
                                        <tr>
                                          <td>Cart Subtotal</td>
                                          <td>$170.00</td>
                                        </tr>
                                        <tr>
                                          <td>Shipping and Handling</td>
                                          <td>$20.00</td>
                                        </tr>
                                        <tr>
                                          <td>Order Total</td>
                                          <td>$190.00</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="cart-btn text-right">
                                      <a class="btn btn-theme-colored btn-xs" href="shop-cart.html"> View cart</a>
                                      <a class="btn btn-dark btn-xs" href="shop-checkout.html"> Checkout</a>
                                  </div>
                                </div>
                                <!-- dropdown cart ends -->
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="mb-0 pb-0">
                          <div class="top-dropdown-outer pt-5 pb-10">
                            <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                            <ul class="dropdown">
                              <li>
                                <div class="search-form-wrapper">
                                  <form method="get" class="mt-10">
                                    <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                                    <label><input type="submit" name="submit" value=""></label>
                                  </form>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
                      <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <div class="header-middle p-0 bg-lightest xs-text-center">
              <div class="container pt-0 pb-0">
                <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-5">
                    <div class="widget no-border m-0">
                      <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)">
                          <img src="{{ asset("front/images/logo-wide.png") }}" alt="">

                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="header-nav">
              <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                <div class="container">
                  <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                    <ul class="menuzord-menu">
                      <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">{{ __("menu.home")}}</a></li>
{{--                      <li><a href="/suggestions">{{ __("menu.sug")}}</a></li>--}}
{{--                      <li><a href="/news">{{ __("menu.news")}}</a></li>--}}
{{--                      <li><a href="/gallery">{{ __("menu.gallery")}}</a></li>--}}
{{--                      <li><a href="/contact">{{ __("menu.contact")}}</a></li>--}}

{{--                      <li><a href="">{{ __("menu.about.main")}}</a>--}}
{{--                        <ul class="dropdown">--}}
{{--                          <li><a href="page-course-gird.html">{{ __("menu.about.brief")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.about.vision")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.about.goals")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.about.structure")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.about.certificate")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.about.iPartner")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.about.rPartner")}}</a></li>--}}
{{--                        </ul>--}}
{{--                      </li>--}}

{{--                      <li><a href="">{{ __("menu.team.main")}}</a>--}}
{{--                        <ul class="dropdown">--}}
{{--                          <li><a href="page-course-gird.html">{{ __("menu.team.board")}}</a></li>--}}
{{--                          <li><a href="page-course-list.html">{{ __("menu.team.trainers")}}</a></li>--}}
{{--                          <li><a href="">{{ __("menu.team.employees")}}</a></li>--}}
{{--                        </ul>--}}
{{--                      </li>--}}

{{--                      <li><a href="#">{{ __("menu.services.main")}}</a>--}}
{{--                        <ul class="dropdown">--}}
{{--                          <li><a href="#">{{ __("menu.services.programmes.main")}}</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                              <li><a href="#">{{ __("menu.services.programmes.academic.main")}}</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                  <li><a href="portfolio-boxed-gutter-1-col.html">{{ __("menu.services.programmes.academic.teaching-systems")}}</a></li>--}}
{{--                                  <li><a href="portfolio-boxed-gutter-2-col.html">{{ __("menu.services.programmes.academic.sResearch")}}</a></li>--}}
{{--                                  <li><a href="portfolio-boxed-gutter-3-col.html">{{ __("menu.services.programmes.academic.leadership")}}</a></li>--}}
{{--                                  <li><a href="portfolio-boxed-gutter-4-col.html">{{ __("menu.services.programmes.academic.personal")}}</a></li>--}}
{{--                                  <li><a href="portfolio-boxed-gutter-5-col.html">{{ __("menu.services.programmes.academic.elearning")}}</a></li>--}}
{{--                                </ul>--}}
{{--                              </li>--}}
{{--                              <li><a href="#">{{ __("menu.services.programmes.others.main")}}</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                  <li><a href="portfolio-boxed-1-col.html">{{ __("menu.services.programmes.others.langs")}}</a></li>--}}
{{--                                  <li><a href="portfolio-boxed-2-col.html">{{ __("menu.services.programmes.others.hr")}}</a></li>--}}
{{--                                </ul>--}}
{{--                              </li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}

{{--                          <li><a href="#">{{ __("menu.services.consultation.main")}}</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li><a href="portfolio-boxed-gutter-1-col.html">{{ __("menu.services.consultation.needs")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-2-col.html">{{ __("menu.services.consultation.design")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-3-col.html">{{ __("menu.services.consultation.implementation")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-4-col.html">{{ __("menu.services.consultation.impact")}}</a></li>--}}
{{--                              </ul>--}}
{{--                          </li>--}}
{{--                        --}}
{{--                          <li><a href="#">{{ __("menu.services.accreditation.main")}}</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li><a href="portfolio-boxed-gutter-1-col.html">{{ __("menu.services.accreditation.centers")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-2-col.html">{{ __("menu.services.accreditation.programmes")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-3-col.html">{{ __("menu.services.accreditation.trainers")}}</a></li>--}}
{{--                              </ul>--}}
{{--                          </li>--}}
{{--                          <li><a href="#">{{ __("menu.services.special.main")}}</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li><a href="portfolio-boxed-gutter-1-col.html">{{ __("menu.services.special.scientific_research")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-2-col.html">{{ __("menu.services.special.teaching_process")}}</a></li>--}}
{{--                                <li><a href="portfolio-boxed-gutter-3-col.html">{{ __("menu.services.special.elearning")}}</a></li>--}}
{{--                              </ul>--}}
{{--                          </li>--}}
{{--                        </ul>--}}
{{--                      </li>--}}

                      @guest
                      <li {{ (request()->is('site/login')) || (request()->is('site/register'))  ? 'active' : '' }}><a href="{{ route("site.showLogin") }}">{{ __("menu.login.current")}}</a>
                        <ul class="dropdown">

                            <li class=""><a href="{{ route("site.showRegiser") }}">{{ __("menu.login.new")}}</a></li>
                        </ul>
                      </li>
                      @else
                      <li class=" {{ (request()->is('booking')) || (request()->is('make-request')) ? 'active' : '' }} " ><a href="/booking">{{ __("menu.booking")}}</a></li>

                      <li class="nav-item {{ (request()->is('site/edit-profile')) ? 'active' : '' }}">
                      <a class="nav-link js-scroll" href="{{ route("edit.form") }}">{{Auth::user()->username}}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link js-scroll" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                              {{ __("menu.login.Logout") }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                      @endguest

                      @php $locale = session()->get('locale'); @endphp

                      <li><a href="">{{ __("menu.lang.main")}}</a>
                        <ul class="dropdown">
                            <li class=""><a href="{{route("langue.change",["locale"=>"en"])}}"><img src="{{asset('front/images/us.png')}}" width="30px" height="20x"> {{ __("menu.lang.english")}}</a></li>
                            <li class=""><a href="{{route("langue.change",["locale"=>"ar"])}}"><img src="{{asset('front/images/ar.png')}}" width="30px" height="20x"> {{ __("menu.lang.arabic")}}</a></li>
                        </ul>
                      </li>

                    </ul>

                    <ul class="pull-right flip hidden-sm hidden-xs">
                      {{-- <li>
                        <!-- Modal: donate now Starts -->
                        <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/reservation-form.html">Book Now</a>
                        <!-- Modal: donate now End -->
                      </li> --}}
                      {{-- <li class=""><a href="/loogin">Login</a></li>
                      <li class=""><a href="/register">Register</a></li> --}}

                    </ul>
                    <div id="top-search-bar" class="collapse">
                      <div class="container">
                        <form role="search" action="#" class="search_form_top" method="get">
                          <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                          <span class="search-close"><i class="fa fa-search"></i></span>
                        </form>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </header>
