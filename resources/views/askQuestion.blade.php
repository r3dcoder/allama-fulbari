@extends('frontend.main')

@section('content')

<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Ask a Question
                        </div>
                        

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                        @endif


                  <form method="post" action="{{ route('ask_question_post')}}" style="padding: 50px">
                            @csrf

                           <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category" >
                              <option>Biography(জীবনী)"</option>
                              <option>Masayel</option>
                              <option>Namaj</option>
                              <option>Siyam</option>
                              <option>Hajj</option>
                            </select>
                          </div>


                          <div class="form-group">
                                <label for="content">Question</label>
                                <textarea rows="10" name="content" type="text" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="" value="{{old('content')}}" ></textarea>
                                @error('content')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror

                            </div>

                        
                            <button class="btn btn-primary">Submit</button>
                        
                  </form> 
                        
                    </div>

                </div>
            </div>

        </div>
</div>

@endsection