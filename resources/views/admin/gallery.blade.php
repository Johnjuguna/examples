<!DOCTYPE html>
<html>
<head>
@include('admin.css')
</head>
<body>
@include('admin.header')
@include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    <div class="page-content"  style="color: #1c7430" >
    <div class="page-header"  style="color: #1c7430" >
        <div class="container-fluid">
            <center>

           
            <h1 style="font-size: 40; font-weight:bolder; color:white">
                gallery
            </h1>
            @foreach($gallery as $gallery)
            <img src="gallery/{{$gallery->image}}" alt="" width="200">
            @endforeach
            <form action="{{url('upload_gallery')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">upload</label>
                    <input type="file" name="image" id="">
                </div>
                <div>
                   
                    <input type="submit" value="upload">
                </div>
            </form>
            </center>
        </div>
    </div>
    </div>

            

@include('admin.footer')

</body>
</html>

