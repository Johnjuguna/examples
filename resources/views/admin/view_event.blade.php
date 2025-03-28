 <!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        .table_deg{
            border: 2px solid white;
            margin: auto;
            width: 50%;
            text-align:center;
            margin-top: 40px;


        }
        .th_deg{
            background-color: #0e1b4d;
            padding: 8px;
        }
        tr{
            border: 3px solid white;
        }
        td{
            padding:3px;
        }
    </style>
</head>
<body>
@include('admin.header')
@include('admin.sidebar')
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <table class="table_deg">
                <tr>
                    <th class="th_deg">category</th>
                    <th  class="th_deg">event name</th>
                    <th  class="th_deg">image</th>
                    <th  class="th_deg">event description</th>
                    <th  class="th_deg">location</th>
                    <th  class="th_deg">date</th>
                    <th class="th_deg">start time</th>
                    <th  class="th_deg">organizer</th>
                    <th  class="th_deg">Delete</th>
                    <th  class="th_deg">Update</th>

                </tr>
                @foreach($data as $data)
<tr>
    <td>{{$data->category}}</td>
    <td>{{$data->event_name}}</td>
    <td>
        <img width="60" src="event/{{$data->image}}" alt="">
    </td>
    <td>{!! Str::limit($data->event_description,100) !!}</td>

<td>{{$data->location}}</td>

<td>{{$data->date}}</td>
<td>{{$data->start_time}}</td>
    <td>{{$data->organizer}}</td>
    <td>
        <a onclick="return confirm('are you sure you want to delete');"
           class="btn btn-danger"
           href="{{url('event_delete', $data->id)}}">
            Delete</a>

    </td>
    <td>
        <a
           class="btn btn-warning"
           href="{{url('event_update', $data->id)}}">
            Update</a>
</tr>
@endforeach
</table>

</div>
    </div>
</div>


@include('admin.footer')

</body>
</html>

