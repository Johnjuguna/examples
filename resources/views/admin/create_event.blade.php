<!DOCTYPE html>
<html>
<head>
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
    <h1>Add events</h1>
    <form action="{{url('add_event')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="div_deg">
            <label>event category</label>
            <select name="category" required>
                <option value="conference">Conference</option>
                <option value="music_festival">Music Festival</option>
                <option value="workshop">Workshop</option>
                <option value="seminar">Seminar</option>
                <option value="networking">Networking Event</option>
            </select>
        </div>
        <div class="div_deg">
            <label>event name</label>
            <input type="text" name="name">

            <div class="div_deg">
                <label>event description</label>
                <textarea name="event_description"></textarea>
        </div>

        </div>
        <div class="div_deg">
            <label>event location</label>
            <input type="" name="location" required>
        </div>
        <div class="div_deg">
            <label>event date</label>
            <input type="date" name="date" required>
        </div>
        <div class="div_deg">
            <label>Start Time</label>
            <input type="time" name="start_time" required>
        </div>
        <div class="div_deg">
            <label>event organizer</label>
            <input type="text" name="organizer" required>
        </div>
        <div class="div_deg">
            <label>upload image</label>
            <input type="file" name="image" required>
        </div>
        <div class="div_deg">
            <input class="btn btn-primary"  type="submit" name="" value="add event">
        </div>

    </form>
</div>
</div>
</div>
</div>

@include('admin.footer')

</body>
</html>

