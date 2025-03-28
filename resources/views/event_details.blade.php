<!DOCTYPE html>
<html lang="en" style="color: #005cbf">

<head>
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPOUlZPsPchNR84lNmMMuF1Cndnlhdly4&callback=initMap" async defer>
    </script>
<title></title>
<base href="/public">

@include('home.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
input{
text-align: center;
justify-content: space-between;
}
label{
    align-items: center;
    display: flex;
    text-align: center;
    flex-direction: column;
    max-width: 300px; /* Adjust width as needed */
    margin: 20px auto; /* Centers the content */
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #f9f9f9
}


</style>

</head>

<body>
<header>
@include('home.header')
</header>

<!--==========================
Header
============================-->

<!--==========================
Intro Section
============================-->
<section id="intro">
<div class="intro-container wow fadeIn">

<p class="mb-4 pb-0">Nairobi, Kenya</p>

<a href="#about" class="about-btn scrollto">About eventapp</a>
</div>
</section>

<main id="main" style="color: #005cbf">

<!--==========================
About Section
============================-->

<!--==========================
Speakers Section
============================-->

<!--==========================
Schedule Section
============================-->

<!--==========================
Venue Section
============================-->

<!--==========================
Hotels Section
============================-->

<!--==========================
Gallery Section
============================-->

<!--==========================
Sponsors Section
============================-->

<!--==========================
F.A.Q Section
============================-->

<!--==========================
Buy Ticket Section
============================-->

<!--==========================
Contact Section
============================-->

</main>
<section>
<div class="event" >
<div class="container" >
<div class="row">
<div class="col-md-12">
<div class="titlepage" style="color: #005cbf">
       <h2>event</h2>
<p>Lorem Ipsum available, but the majority have suffered </p>
</div>
</div>
</div>
<form>
<div class="row">

<div class="col-md-8">
<div id="serv_hover" class="event">
<div style="padding:20px" class="event_img">
<figure><img style="text-align: center" src="event/{{$event->image}}" alt="#"/></figure>
</div>
<div class="event">
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900">category</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"> {{$event->category}}</dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900">name</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"> {{$event->event_name}}</dd>
    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900">description</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"> {{$event->event_description}}</dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900">location</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"> {{$event->location}}</dd>
        <div id="map-container" style="display: none;">
            <div id="map" style="height: 400px; width: 100%;"></div>
        </div>
        <button id="toggle-map" class="btn btn-primary">Show Map</button>
        <script>
            function initMap() {
                let eventLocation = { lat: -1.286389, lng: 36.817223 }; // Default to Nairobi
                let map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: eventLocation,
                });

                let marker = new google.maps.Marker({
                    position: eventLocation,
                    map: map,
                });
            }

            document.getElementById("toggle-map").addEventListener("click", function () {
                let mapContainer = document.getElementById("map-container");
                if (mapContainer.style.display === "none") {
                    mapContainer.style.display = "block";
                    this.textContent = "Hide Map";
                } else {
                    mapContainer.style.display = "none";
                    this.textContent = "Show Map";
                }
            });
        </script>
        <script>
            function initMap() {
                let eventLocation = {
                    lat: {{ $event->latitude ?? -1.286389 }},
                    lng: {{ $event->longitude ?? 36.817223 }}
                };

                let map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: eventLocation,
                });

                let marker = new google.maps.Marker({
                    position: eventLocation,
                    map: map,
                });
            }
        </script>

    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900">date</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$event->date}}</dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900"> start time</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"> {{$event->start_time}}  </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900">organizer</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"> {{$event->organizer}}</dd>
    </div>
    <button   type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#RegisterModal">
        Book Event
    </button>
</div>
</div>
</div>

<div style="text-align: center" class="col-md-4">

    <!-- Button to Open Modal -->

        <!-- Button to Open Modal -->



        <!-- Event Registration Modal -->
        <div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        //<h5 class="modal-title" id="eventModalLabel">Event Registration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="eventForm" action="{{ url('book', $event->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>

                            <button type="text" class="btn btn-primary">book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <div>
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-bs-dismiss="alert">x</button>
{{session()->get('message')}}
</div>

@endif
</div>
<form action="{{url('add_booking',$event->id)}}" method="post">
@csrf
<div>



    @if (Auth::check())

    @else
        <a href="{{url('login')}}" class="btn btn-success">Login to Book</a>
        <a href="{{url('register')}}" class="btn btn-primary">Register</a>
    @endif

</section>

<!--==========================
Footer
============================-->
@include('home.footer')

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset("lib/jquery/jquery.min.js")}}"></script>
<script src="{{asset("lib/jquery/jquery-migrate.min.js")}}"></script>
<script src="{{asset("lib/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("lib/easing/easing.min.js")}}"></script>
<script src="{{asset("lib/superfish/hoverIntent.js")}}"></script>
<script src="{{asset("lib/superfish/superfish.min.js")}}"></script>
<script src="{{asset("lib/wow/wow.min.js")}}"></script>
<script src="{{asset("lib/venobox/venobox.min.js")}}"></script>
<script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset("contactform/contactform.js")}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset("s/main.js")}}"></script>

<script type="text/javascript">
$(function(){
let dtToday = new Date();
let month = dtToday.getMonth() + 1;
let day = dtToday.getDate();
let year = dtToday.getFullYear();

// Ensure month and day are two digits
if(month < 10){
month = '0' + month.toString();
}
if(day < 10){
day = '0' + day.toString();
}

// Format the max date as YYYY-MM-DD
    let maxDate = year + '-' + month + '-' + day;

// Set the min attribute for both startDate and endDate
$('#startDate').attr('min', maxDate);
$('#endDate').attr('min', maxDate);
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("eventForm").addEventListener("submit", function(e) {
        let form = document.getElementById('eventForm');
        if(!form){
            console.error("error. eventform not found in the DOM!");
            return;
        }
        form.addEventListener('submit',function (e){
            //
            }
        )
        {


            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);

            fetch("{{ route('register') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.message === "Registration successful!") {
                        alert("Registration successful!");
                        document.getElementById("eventForm").reset(); // Clear form
                        let modal = bootstrap.Modal.getInstance(document.getElementById('RegisterModal'));
                        modal.hide(); // Hide modal after success
                    } else {
                        alert("Registration failed! Check inputs.");
                    }
                })
                .catch(error => console.error("Error:", error));
        }
    });
</script>
</body>

</html>
