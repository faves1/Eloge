<!DOCTYPE html>
<html lang="en">

   @include("headtag")

    <body>
    @include("header")

    <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-white">Communication</li>
                </ol>    
            </div>
        </div>
        <!-- services Start -->
       
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">What We Do</h4>
            </div>
            <h1 class="mb-4">EFFECTIVE COMMUNICATION</h1>
        </div>
        

        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="images/p2.png" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">

                            
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            
                          
                            <p class="mb-4">Our effective communication programs help leaders increase their influence by expressing themselves clearly and confidently at all levels of the organization, including publicly, exerting executive presence and ensuring alignment in verbal and non-verbal communication.</p>
                            <p class="mb-4"> Other topics covered include:</p>
                            <ul>
                                <li>Understanding your personality type and adapting your communication to other behavioral styles to avoid conflicts</li>
                                <li>Giving constructive feedback</li>
                                <li>Written professional communication</li>
                            </ul>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    @include("footer")

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