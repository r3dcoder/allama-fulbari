@extends('frontend.main')

@section('content')

@php
$answer = App\Answer::all();
$i=1;
@endphp
<div class="container">
    <div class="row justify-content-center">
        @foreach($questions as $question)
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
                @foreach($answers as $ans)
                <hr>
                
                <h7 style="padding-left: 15px"> {{$ans->answer}}</h7>
                <h8 style="padding: 15px">Replied by <a href="">{{$ans->user->name}}</a> on {{ $ans->created_at->format('j F, Y') }} </h8>
                
                @endforeach
                
                @endif
                
                    
            </div>
            <form  method="post" action="{{route('answer_submit')}}">
             @csrf

                  <div class="form-group">
                        <label for="content"></label>
                        <textarea name="content" rows="3"  type="text" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="write your answer" value="{{old('content')}}" ></textarea>
                         <input name="id" type="hidden" id="custId"  value="{{$question->id}}">
                        @error('content')
                             <div class="alert alert-danger">{{ $message }}</div>
                         @enderror

                    </div>
                    <button class="btn btn-primary" id="ajaxSubmit1">Submit</button>
                </form> 
        </div>
        <hr>
        @endforeach
    </div>
</div>
@endsection

