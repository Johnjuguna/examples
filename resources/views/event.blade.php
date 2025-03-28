<section style="color: #0c5460"  id="events" class="section-bg wow fadeInUp">
<div  class="event" id="event">
    <div class="container">
        <div class="section-header">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2 style="text-align: center">events</h2>
                    <p style="text-align: center">chose event</p>
                </div>
            </div>
        </div>
           <div class="col-md-5 my-auto">
               <form action="{{url('search')}}" method="get" role="search">

                   <div class="input-group">
                       <input type="search" value="{{Request::get('search')}}" placeholder="search event" name="search" class="form-control">
                       <button class="btn bg-white" type="submit">
                           <i class="fa fa-search">

                           </i>

                       </button>
                   </div>
               </form>
           </div>




        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover"  class="event">
                        <div class="event_img">
                            <figure><img src="event/{{$event->image}}" alt="#"/></figure>
                        </div>
                        <div class="event" style="text-align: center;">
                            <h3>{{$event->category}}</h3>



                            <p style="text-align: center;">{!! Str::limit($event->event_description,90)!!}</p>
                            <a class="btn btn-primary" href="{{url('event_details',$event->id)}}">Event details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            {{$events->links()}}
    </div>
</div>
</section>
