<!DOCTYPE html>
<html lang="en">

   @include('headtag')

    <body>

        <!-- Spinner Start -->
       <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>  -->
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>info@eloge-consult.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>


        
        
        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0" height="200px">
                <a href="index.php" class="navbar-brand p-0">
            
                    <img src="images/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu m-0">
                            <a href="{{url('/leadership')}}" class="dropdown-item">Leadership Workshop</a>
                                <a href="{{url('/engagement')}}" class="dropdown-item">Employee Engagement</a>
                                <a href="{{url('/team_development')}}" class="dropdown-item">Team Development</a>
                                <a href="{{url('/effective')}}" class="dropdown-item">Effective Communication</a>
                                <a href="{{url('/assessment')}}" class="dropdown-item">Individual Behavioral Assessment</a>
                            </div>
                            
                        </div>
                        <a href="about.php" class="nav-item nav-link">About</a>
                    
                        <a href="#" class="nav-item nav-link">Blog</a>
                        
                    </div>
                    
                </div>
            </nav>
            
        
       


     
       
         <!-- Carousel Start -->
            <!-- Carousel Container -->
        <div class="carousel-container">
                <img src="images/11.jpg" alt="Image">
                <div class="overlay"></div>

            <!-- Fixed Content (Positioned Absolutely) -->
            <div class="carousell-caption">
        
                <h5 class="text-capitalize text-white mb-4 text-center">We help transform organizations through effective leadership & communication.</h5>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mx-auto" href="#section1">Let's get started</a>
            
            </div>
        </div>

        <!-- Navbar & Hero End -->



        <!-- About Start -->
        
        <!-- About End -->

        
        <div id="section1" class="container py-4">
            <div class="align-items-center">
                <div class="section-title mb-5" style="text-align: center; margin: auto;">
                    <h5 class="text-black text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">WHY EFFECTIVE COMMUNICATION?</h5>
                    <p class="mb-5 fs-5">Have you ever discussed a change with a colleague that needed to be made to a document, only for them to come back and present you with something different? Or perhaps you tried mediating a conflict amongst your teammates, but you didn't realize that one of them felt unfairly treated, and you wound up leaving gaps that ought to have been filled?</p>
                    <p class="mb-5 fs-5">Without effective communication, misunderstandings arise, opportunities are missed, and progress stagnates. Learning effective communication skills will equip your organization, employees, and teams with the ability to articulate thoughts, listen actively, and adapt messages to diverse audiences, thus enhancing your organization’s overall effectiveness and drive success.</p>
                    </div>
                </div>
                
            </div>
        </div>
      

       <!-- About Start -->
       <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="images/ab1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <div class="about-img-inner">
                                <img src="images/mlct.png" class="img-fluid rounded-circle" alt="Image" style="width: 200px; height: auto;">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">MEET VIVIANE ODOH MIKE-EZE </h4>
                            <h1 class="display-3 mb-4">LEAD CONSULTANT </h1>
                            <p class="mb-4 fs-5">A People and Communications expert with 15+ years of international experience, including senior management in the energy sector. </p>

                            <p class="mb-4 fs-5"> Her professional experience spans across Human Resources, Project Management and Marketing Communication, across diverse organizations and cultures in the UK, France and Nigeria.</p>
                                
                            <p class="mb-4 fs-5">   With an educational background in Psychology and Human Resources Management, she is a certified DISC consultant for behavioural analysis in the workplace, and places a strong focus on human connections as the driver for thriving organizations.
                                </p> 
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Ways to work with me</h4>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="images/a1.jpg" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Leadership Training Programs/Workshops</h5>
                                    <p class="mb-4">We offer a diverse selection of virtual and face-to-face training programs customized to the unique needs of your organization. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="images/et.jpg" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Employee Engagement & Culture</h5>
                                    <p class="mb-4">We help organizations measure employee engagement and company culture through a variety of assessment methods.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="images/c1.jpg" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Team Development & Cohesion</h5>
                                    <p class="mb-4">We deploy tailor-made workshops and programs for cross-functional, new and established teams to foster effective teamwork.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="images/p2.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Effective Communication</h5>
                                    <p class="mb-4">Our effective communication programs help leaders increase their influence by expressing themselves clearly and confidently at all levels of the organization.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="images/Picture2.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Assessments & Behavioral Analysis</h5>
                                    <p class="mb-4">we provide an overview of an individual’s or a team’s strengths and potential limitations, as well as coaching to elaborate an action plan for improvement.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Services End -->


        

        <!-- Feature Start -->
        
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">Clients Review</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                           
                            <p class="text-white fs-7">The expertise, guidance, and teaching style were exceptional. 
                                Throughout the training, I found Viviane to be knowledgeable, engaging, and passionate about helping us develop our leadership skills. Her ability to create an interactive and supportive learning environment allowed us to gain valuable insights and practical tools to apply in our work and personal lives.
                                I was particularly impressed with her ability to tailor the content to meet the unique needs of the group, providing relevant examples and case studies that made the concepts easy to understand and apply.
                                Since completing the training, I have seen a significant positive impact on my leadership style and approach. Her coaching and feedback helped me to identify my strengths and areas for improvement, and I have been able to apply what I learned to my work and personal life with great success.
                                
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Joseph Frangieh </h5>
                                <p class="mb-2 text-white-50">Start-up Manager, ETEX GROUP</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


       
        


        <!-- Footer Start -->
       @include('footer')
        <!-- Copyright End -->

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
        
    </body>

</html>