@extends('frontend.main')

@section('content')

<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-light">
                            Create Post
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


                  <form method="post" action="{{ route('new_post_post')}}" style="padding: 50px">
                            @csrf


                            <div class="form-group" style="size: 200px">
                                <label for="title">Title</label>
                                <input name="title" type="textarea" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="eg: Life Of Allama Fulbari" value="{{old('title')}}" >

                                @error('title')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            

                           <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category" >
                              <option>Biography(জীবনী)</option>
                              <option>Trading(লেনদেন)</option>
                              <option>Namaj</option>
                              <option>Siyam</option>
                              <option>Hajj</option>
                            </select>
                          </div>


                          <div class="form-group">
                                <label for="content">Content</label>
                                <textarea rows="20" name="content" type="text" class="summernote" id="content" placeholder="" value="{{old('content')}}" ></textarea>
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