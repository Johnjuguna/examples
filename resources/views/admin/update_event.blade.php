<!DOCTYPE html>
<html>
<head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        label
        {
            display:inline-block;
            width:200px;
        }
        .div_deg
        {
            padding-top: 30px;
        }
        .div_center
        {
            text-align: center;
            padding-top: 30px;

        }

    </style>
</head>
<body>
@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="div_center">
                <h1>Update Event</h1>
                <form action="{{url('edit_event',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="div_deg">
                        <label>event category</label>
                        <select name="category" required>
                            <option selected  value="{{$data->category}}">{{$data->category}}</option>
                            <option value="conference">Conference</option>
                            <option value="music_festival">Music Festival</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                            <option value="networking">Networking Event</option>
                        </select>
                    </div>
                    <div class="div_deg">
                        <label>event name</label>
                        <input type="text" name="name" value="{{$data->event_name}}">
                    </div>
                    <div class="div_deg">
                        <label>event description</label>
                        <textarea name="event_description">{{$data->event_description}}
                        </textarea>

                    </div>
                    <div class="div_deg">
                        <label>event location</label>
                        <input type="text" name="location" value="{{$data->location}}" required >
                    </div>
                    <div class="div_deg">
                        <label>event date</label>
                        <input type="date" name="date" value="{{$data->date}}" required>
                    </div>
                    <div class="div_deg">
                        <label>Start Time</label>
                        <input type="time" name="start_time" value="{{$data->start_time}}" required>
                    </div>
                    <div class="div_deg">
                        <label>event organizer</label>
                        <input type="text" name="organizer" value="{{$data->organizer}}"required>
                    </div>

                    <div class="div_deg" style="padding-left: 40%;">
                        <label>current image</label>
                        <img style="margin: auto;"  width="100" src="/event/{{$data->image}}" alt="">
                    </div>
                    <div class="div_deg">

                    <div class="div_deg">
                        <label>upload image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="div_deg">
                        <input class="btn btn-primary"  type="submit" name="" value="update event">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')

</body>
</html>

