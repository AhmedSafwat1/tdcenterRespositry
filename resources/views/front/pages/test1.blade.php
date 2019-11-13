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
                <h2 class="title text-white">{{ $page->title_en}}</h2>


                {{-- {!!$page->tree_en!!} --}}

                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Divider: Contact -->
        <section class="divider">
          <div class="container pt-0">
            <div class="row mb-60 bg-deep">

            </div>

            {!!$page->body_en !!}

          </div>
        </section>
      </div>
      <!-- end main-content -->

@endsection
