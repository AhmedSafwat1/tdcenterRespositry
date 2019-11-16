@forelse( $events  as $event)
    <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
        <article class="post clearfix mb-sm-30">
            <div class="entry-header">
                <div class="post-thumb thumb">
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth">
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
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-user mr-5 text-theme-colored"></i> {{ $event->users_count }}  Join</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-users mr-5 text-theme-colored"></i> {{ $event->capacity }} Max </span>
                        </div>
                    </div>
                </div>
                <p  class="mt-10">
                    {{ \Illuminate\Support\Str::limit($event->program["description_".$lang], 120) }}
                </p>
                <p>
                          <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                          </span>
                    {{ $event->location }}
                </p>
                <p>
                    @foreach( explode(",",$event->trainers) as $trainer)
                        <span>
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </span>
                        {{ $trainer }}
                    @endforeach
                </p>
                <a href="{{ route("event.details",['id'=>$event->id]) }}" class="btn-read-more">Read more</a>
                <div class="clearfix"></div>
            </div>
        </article>
    </div>
@empty
    <div class="col-xs-12  alert alert-warning text-center" style="padding: 40px" role="alert">
        No Result
    </div>
@endif