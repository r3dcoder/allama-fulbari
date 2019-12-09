@extends('frontend.main')

@section('content')

@php
$answer = App\Answer::all();
$i=1;

@endphp
<div class="container">
    <div class="row justify-content-center">
        @foreach($questions as $key=>$question)
        <div class="col-md-8" style="padding-top: 20px; padding-bottom: 10px" >
            <div class="card">
               
                <div class="card-header">
                    <h6>{{$question->question}}</h6>
                    <h8>Asked By <a href="">{{ $question->user->name}}</a> on {{ $question->created_at->format('j F, Y') }} </h8>
                </div>
                @php
                 $answers = App\Answer::where('question_id', $question->id)->get();
                @endphp
                @if(App\Answer::where('question_id', $question->id ))
                <div id="card-body-{{$key}}" style="margin: 15px">
                    @foreach($answers as $ans)
                    <hr>
                    
                    <h7 > {{$ans->answer}}<br></h7>

                    <h8 >Replied by <a href="">{{$ans->user->name}}</a> on {{ $ans->created_at->format('j F, Y') }} </h8>
                    <!-- <h6 style="padding-left: 15px"></h6> -->
                
                @endforeach
                </div>
                @endif
                
                    
            </div>
            <form  >
             @csrf

                  <div class="form-group" data-tt="{{$question->id}}">
                        <label for="content"></label>
                        <textarea name="content" rows="3"  type="text" class="form-control @error('content') is-invalid @enderror" id="{{$key}}" placeholder="write your answer" value="{{old('content')}}" ></textarea>


                         <input  data-rr="{{$question->id}}" name="{{$key}}" type="hidden" id="custId"  value="{{$question->id}}">

                        @error('content')
                             <div class="alert alert-danger">{{ $message }}</div>
                         @enderror

                         <button type = "submit" data-id1="{{$key}}" class="btn btn-primary submitButton" id="ajaxSubmit1">Submit</button>

                    </div>
                    
                </form> 
        </div>
        @endforeach
        <hr>
        
    </div>
</div>
@endsection

