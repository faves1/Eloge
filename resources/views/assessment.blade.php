<!DOCTYPE html>
<html lang="en">

   @include('headtag')
  

    <body>
    @include('header')

    <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-white">Assessment</li>
                </ol>    
            </div>
        </div>
        <!-- services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">What We Do</h4>
                    </div>
                    <h1 class="mb-4">INDIVIDUAL / TEAM ASSESSMENTS & BEHAVIOURAL ANALYSIS</h1>
                    <p class="mb-0">The  Maxwell Leadership MDPI - DISC Personality Style Report, identifies one’s communication tendencies, predictable behaviors, environmental preferences, leadership and decision-making abilities. 
                    Through this assessment, we provide an overview of an individual’s or a team’s strengths and potential limitations, as well as coaching to elaborate an action plan for personal/ team improvement.
                    </p>
                </div>
            </div>
            <div class="container-fluid about bg-light py-5">
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="about-img pb-5 ps-5">
                                <img src="images/Picture1.png" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="section-title text-start mb-5">
                                
                                
                                <p class="mb-4">Discover  your motivation, ideal work environment, strengths, personal growth areas and communication style. 10-minute online assessment.</p>
                                <p class="mb-4"> Includes 1:1 Debrief Call </p>
                                
                                <a href="https://static.showit.co/file/D6g-apAzTXa1dmfEGVwAbA/216650/maxwell_disc_personality_indicator_report_sample.pdf" target="_blank" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">View Sample Results</a> 
                                <button type="button" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Request Test
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ url('submit_form') }}">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Request Test Form</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Jonny Fisher">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="debrief_call" name="debrief_call" value="true">
                                <label class="form-check-label" for="debrief_call">1 on 1 debrief call (150$) </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary text-white">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>


        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="images/s1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">

                            
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            
                            <h1 class="display-3 mb-4">More than just a personality assessment</h1>
                            <p class="mb-4">Comprehensive and personalized approach, with specific insights and recommendations tailored to  your unique strengths</p>
                            <p class="mb-4">Actionable strategies and resources to drive tangible results in in both personal and professional settings</p>
                            <div class="mb-4">
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i> Enhanced Leadership and Influence</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i> Improved Communication</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i> Better Relationships</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i> Reduced conflicts</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!--<script>
    $(document).ready(function(){
        $('.header-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            dots: false,
            nav: false
        });
    });
</script> -->

    </body>

</html>