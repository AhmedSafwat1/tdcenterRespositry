@extends('layouts.master')

@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Event Table</h3>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Schedule -->
    <section id="schedule" class="divider parallax layer-overlay overlay-white-8" data-bg-img="">
      <div class="container pt-80 pb-60">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">


              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Event Start</th>
                        <th>Program Name</th>
                        {{-- <th>Room</th> --}}
                        <th>Book</th>
                        <th>Status</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody> --}}
                <tbody>
                    @foreach ($all as $event)

                    {{-- @if ($event->event_id != null) --}}


                    <tr>
                        <td>
                            {{$event->event_start}}
                        </td>
                        <td>
                            {{$event->name_en}}
                        </td>
                        {{-- <td>
                            {{$event->room_id}}
                        </td> --}}

                        {{-- /**
                        * Booked == 1
                        * Canceled == 0
                        * Waiting == 2
                        */ --}}
                        <td>
                            @if($event->status == 0)
                            <a href="/testbooking/book/{{$event->id}}" class="btn btn-success"> Book

                            {{-- @elseif($event->status == 1) --}}
                            @elseif($event->status == 1)
                            <form action="/testbooking/cancel/{{$event->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" value="Submit">Cancel</button>
                            </form>
                            {{-- <a href="/testbooking/cancel/{{$event->id}}" class="btn btn-danger"> Cancel --}}
                            @elseif($event->status == 2)
                            <form action="/testbooking/cancel/{{$event->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning" value="Submit">Cancel</button>
                            </form>
                            @endif
                            {{-- <input class="btn btn-success" type="submit" value="Book"> --}}
                            {{-- <a href="/testbooking/{{$event->id}}" class="btn btn-success"> Book --}}
                        </td>
                        <td>
                            @if($event->status == 0)

                            @elseif($event->status == 1)
                            Booked
                            @elseif($event->status == 2)
                            Waiting
                            @endif

                        </td>
                    </tr>
                    {{-- @endif --}}

                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

@endsection

@section('scripto')

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

@endsection
