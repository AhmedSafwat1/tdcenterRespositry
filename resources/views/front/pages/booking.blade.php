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
                            <h2 class="title text-white">Booking Table</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Event</a></li>
                                <li class="active text-gray-silver">Booking</li>
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
                                    <th>Event End</th>
                                    <th>Program Name</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>
                                            {{$event->event_start->format("d-m-Y h:i A ")}}
                                        </td>
                                        <td>
                                            {{$event->event_end->format("d-m-Y h:i A ")}}
                                        </td>
                                        <td>
                                            {{$event->program['name_'.$lang]}}
                                        </td>

                                        <td>
                                            @if($event->pivot->status  == "pending")
                                                <button class="btn btn btn-warning"> <i class="fa fa-clock-o" aria-hidden="true"></i> pending</button>
                                            @elseif($event->pivot->status == "approve" )
                                                <button class="btn btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> approve</button>
                                            @else
                                                <button class="btn btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i> refuse </button>
                                            @endif

                                        </td>
                                    </tr>
                                    {{-- @endif --}}

                                @endforeach
                                </tbody>
                            </table>

                            <div>
                                <a href="{{ route("request.form") }}" class="btn btn-danger btn-lg">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i> Request
                                </a>
                            </div>
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
