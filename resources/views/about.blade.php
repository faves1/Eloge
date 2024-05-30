<!DOCTYPE html>
<html lang="en">

   @include('headtag')

    <body>

    @include('header')

    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-white">About us</li>
            </ol>    
        </div>
    </div>

         <!-- About Start -->
         <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="images/b4.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            
                           
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">About us </h4>
                            <h1 class="display-3 mb-4">What we do </h1>
                            <p class="mb-4">ELOGE Leadership offers a <b>practical approach</b> to <b>effective leadership</b>, helping managers improve their communication to build cohesive teams geared towards organizational success.</p>

                            <p class="mb-4"> <b>Our vision</b> is to support people with greater self-awareness and management skills to promote agility and meaningful growth for individuals, teams and organizations.</p>
                                
                            <p class="mb-4"><b>Our values</b> are to deliver on every commitment with passion, empathy and integrity.</p> 
                            <i class="mb-4" style="font-size: 26px; font-weight:600">"At the end of the day, my mission is simple: to build collaborative teams and equip managers with the tools they need to communicate effectively."</i>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

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
        
    </body>

</html>