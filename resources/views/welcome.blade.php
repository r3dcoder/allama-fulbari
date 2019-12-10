@extends('frontend.main')
    <!-- ##### Header Area End ##### -->



@section('content')
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>বিখ্যাত উলামায়ে কেরামের জীবনী </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt=""> -->
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="{{route('life')}}"><h4>আল্লামা আব্দুল মতিন চৌধুরী </h4></a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">হাসসান আহমদ চৌধুরী </a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">জীবনী</a>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt=""> -->
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4><a href="{{url('singlePost/hussain+ahmed+madani+9')}}">হোসাইন আহমদ মাদানী রাঃ</a></h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">হাসসান আহমদ চৌধুরী</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">জীবনী </a>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <!-- <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt=""> -->
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>মাওলানা আশরাফ আলী থানভী রহ.</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">হাসসান আহমদ চৌধুরী</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">জীবনী</a>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### Popular Courses End ##### -->

  

    <!-- ##### Upcoming Events Start ##### -->
    <section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>শায়খে ফুলবাড়ী রাঃ এর গ্রন্থমালা </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt="">
                            <h6 class="event-date">August 26</h6>
                            <h4 class="event-title">Shotter Map Kati</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">1954</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt="">
                            <h6 class="event-date">August 7</h6>
                            <h4 class="event-title">Sunnate Nobobir Murto Potik</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 7 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#" class="free">2006</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt="">
                            <h6 class="event-date">August 3</h6>
                            <h4 class="event-title">Tasawuf</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 3 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">2008</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>প্রশ্ন-উত্তর </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- <img src="{{ asset('frontend/img/bg-img/book.jpg') }}" alt=""> -->
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>ফজরের পর নিষিদ্ধ সময়ের পরিমাণ </h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>ফজরের পরে সূর্য উঠা আরম্ভ হওয়ার পর থেকে এক তীর পরিমাণ (যার পরিমাণ নির্ভরযোগ্য মত অনুযায়ী ৯ মিনিট) নামায পড়া নিষেধ । তবে প্রচলিত ক্যালেন্ডারে সতর্কতার জন্য কিছু বেশী বিলম্বের কথা লিখা হয়েছে । হযরত মাওলানা আবরারুল হক সাহেব হারদুয়ী (দাঃ বাঃ) ১৫ মিনিট বিলম্বের কথা বলে থাকেন । আমলের জন্য এটাই উত্তম । [প্রমাণঃ আহসানুল ফাতাওয়া, ২ : ১৪১ # ফাতাওয়া মাহমূদিয়া, ২ : ২৩৮ # শামী, ১ : ৩৬৬-৭১]</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt=""> -->
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>ফজরের পর নিষিদ্ধ সময়ের পরিমাণ </h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>ফজরের পরে সূর্য উঠা আরম্ভ হওয়ার পর থেকে এক তীর পরিমাণ (যার পরিমাণ নির্ভরযোগ্য মত অনুযায়ী ৯ মিনিট) নামায পড়া নিষেধ । তবে প্রচলিত ক্যালেন্ডারে সতর্কতার জন্য কিছু বেশী বিলম্বের কথা লিখা হয়েছে । হযরত মাওলানা আবরারুল হক সাহেব হারদুয়ী (দাঃ বাঃ) ১৫ মিনিট বিলম্বের কথা বলে থাকেন । আমলের জন্য এটাই উত্তম । [প্রমাণঃ আহসানুল ফাতাওয়া, ২ : ১৪১ # ফাতাওয়া মাহমূদিয়া, ২ : ২৩৮ # শামী, ১ : ৩৬৬-৭১]</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/hassan.jpg')}}" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Mawlana Hassan Ahmed Chowdhury</h5>
                                <span>Imam & Khatib</span>
                                <p>Chester, Shah Jalal Masque</p>
                                <!-- <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div> -->
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/mahmud.jpg')}}" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Mawlana Syed Mahmudul Hasan</h5>
                                <span>Teacher & writer</span>
                                <p>Arabic Language & Liturature</p>
                                <!-- <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div> -->
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="{{asset('img/bg-img/book.jpg')}}" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Hafiz Mishkat Ahmed Chowdhury</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <!-- <div class="single-tutors-slides">
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/t4.png" alt="">
                            </div>
                            <div class="tutor-information text-center">
                                <h5>Alex Parker</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Tutors Slide -->
                        <!-- <div class="single-tutors-slides">
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/t5.png" alt="">
                            </div>
                            <div class="tutor-information text-center">
                                <h5>Alex Parker</h5>
                                <span>Teacher</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->
    @endsection
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
  
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
  

</html>