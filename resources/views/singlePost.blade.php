@extends('frontend.main')

@section('content')
<style type="text/css">
    p{
        font-family: Arial, Helvetica, sans-serif; 
        font-size: medium;
    }
</style>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-9">
            <div class="card">
               
                <div class="card-header"><h3>{{$post->title}}</h3><a href="#">{{$post->user->name}} ||  </a> <a href="#">{{$post->category}}</a> || {{ $post->created_at->format('j F, Y')}}</div>
                


                <div class="card-body">
                    

                <div class="card-preview" style="padding-top: 5px; text-align: justify;">
                	<p style="text-align: justify; white-space:pre-wrap;">{{$post->content}}</p>
                    
                </div>
            
                </div>
            </div>
        </div>
        @php 
        $Lifes = App\Post::where('category', "Biography(জীবনী)")->get();;
        @endphp
        <div class="col-md-3">
            <div class="card">
               
                <div class="card-header">
                    <h4>Biography</h4>
                    @foreach($Lifes as $life)
                    <a href="{{route('singlePost', $life->id)}}">{{$life->title}}<br></a>@endforeach
                </div>
                

<!-- 
                <div class="card-body">
                    

                <div class="card-preview" style="padding-top: 5px; text-align: justify;">
                    <p style="text-align: justify; white-space:pre-wrap;">{{$post->content}}</p>
                    
                </div>
            
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection

