@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                <div class="panel-body">
                 <div class="row">
                     <div class="col-md-12 col-md-offdet-2">
                     <div class="panel panel-default">
                     <div class="panel-heading"></div>
                     <div class="panel-body"> 

                        <div class="card">
                <div  class="card-header" style="text-align: center">{{ __('Add Post') }}</div>

                            <div class="card-body">

                                <form class="form-horizontal" method="POST" action="{{ url('/addpost') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
                        <label for="post_title" class="col-md-4 control-label">Title</label>
                        
                        <div class="col-md-10">
                            <input type="text" name="post_title" id="post_title" class="form-control" value="{{ old('post_title') }}" required autofocus>
                            
                            @if ($errors->has('post_title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('post_title') }}</strong>
                            </span>
                            
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="post_body" class="col-md-4 control-label">Body</label>
                        <div class="col-md-10">
                            <textarea type="text" rows="5" id="post_body"  name="post_body" class="form-control" value="{{ old('post_body') }}" required> </textarea>
    
                            @if ($errors->has('post_body'))
                            <span class="help-block">
                                <strong>{{ $errors->first('post_body') }} </strong>
                            </span>  
                            @endif
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="post_image" class="col-md-4 control-label">Featured image</label>
                        <div class="col-md-10">
                            <input type="file" id="post_image"  name="post_image" class="form-control"  required>
                            
                           @if ($errors->has('post_image'))
                           <span class="help-block">
                               <strong>{{ $errors->first('post_image') }} </strong>
                            </span>  
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add Post
                               </button>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection