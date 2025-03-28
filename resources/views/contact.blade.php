<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Contact us anytime.</p>
        </div>

        <div class="row contact-info"></div>

        <div class="form">
            <form action="{{ url('contact') }}" method="post" class="main-form">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5" required></textarea>
                </div>
                <div class="text-center">
                    <button  onclick="myFunction()"  type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Include jQuery & SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<!-- Display SweetAlert if the session contains 'success' -->
@if(session('success'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "message sent successfully",
            showConfirmButton: false,
            timer: 1500
        });
    </script>

@endif
