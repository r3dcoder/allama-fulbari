@extends('frontend.main')

@section('content')

    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>All article</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                @foreach( $posts as $post )
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- <img src="{{asset('frontend/img/bg-img/book.jpg')}}" alt=""> -->
                        <!-- Course Content -->
                        
                        <div class="course-content">
                            <a href="{{route('singlePost', $post->id)}}"><h4>{{$post->title}}</h4></a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">{{$post->user->name}} </a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">{{$post->category}}</a>
                            </div>
                            
                        </div>
                       
                    
                    </div>
                </div> @endforeach

              
            </div>
            
        </div>
    </section>

@endsection

