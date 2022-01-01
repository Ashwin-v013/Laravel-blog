


@extends('layouts.app')

@section('content')
{{-- <div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-12">
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="card">
<div  class="card-header" style="text-align: center">{{ __('Post View') }}</div>

<div class="card-body">

    <div class="col-md-12 ">
        
        @if (count($posts)>0)
        @foreach($posts->all() as $post)
            <h4 >{{ $post->post_title }}</h4>
            <img style="max-width: 70%" src="{{ $post->post_image }}" alt="">
            <p style="margin-top: 25px">{{ ($post->post_body) }}</p>
            <ul class="nav nav-pills ">
                <li style="padding-right: 15px" role="presentation"><a href=" {{ url("/like/{$post->id}") }}">
                    <span>Upvote({{ $likeCtr }})</span>    
                </a></li> 
                <li style="padding-right: 15px" role="presentation"><a href="{{ url("/dislike/{$post->id}") }}">
                    <span><i class="las la-eye"></i>Downvote({{ $dislikeCtr }})</span>    
                </a></li>
                <li style="padding-right: 15px" role="presentation"><a href="{{ url("/comment/{$post->id}") }}">
                    <span><i class="las la-eye"></i>Comment</span>    
                </a></li>
            </ul>
            
            
            @endforeach
        @else
        <p>No Post Available</p>
    @endif

    <form method="POST" action="{{ url("/comment/{$post->id}") }}" >
    {{ csrf_field() }}
    <div class="form-group col-md-6">
        <textarea style="width: 100% ; margin-top: 20px" id="comment" name="comment"  rows="6" required autofocus></textarea>

    </div>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-success btn-lg btn-block">POST COMMENT</button>

    </div>
    </form>
    
    <div class="col-md-12 text-center" style="margin-top: 3rem">
            <h4 style="text-decoration: underline">Comments</h4>
            @if (count($comments)>0)
            @foreach($comments->all() as $comment)
              <h5>{{ $comment->comment }} </h5>
              <p>Posted by: {{ $comment->name }}</p>
            @endforeach
            @else
            <p>No Post Available</p>
        @endif
            
    </div>

    </div>
</div>
</div>
</div>
</div>
</div>

<form method="POST" action="{{ url("/upvote/{$post->id}") }}">
<button type="submit">Upvote</button> 
<button type="submit">DownVote</button>
</form> --}}


<section class="main-content">
    <div class="container-xl">

        <div class="row gy-4">

            <div class="col-lg-12">
                <!-- post single -->
                <div class="post post-single">
                    <!-- post content -->
                    <div class="post-content clearfix">
                        @if (count($posts)>0)
                        @foreach ($posts->all() as $post )
                        
                        <h4>{{ $post->post_title }}</h4> 
                        <img src="{{ $post->post_image }}" class="rounded alignleft" alt="...">
                        
                        <p>{{ $post->post_body }}</p>
                        
                        @endforeach
                        @endif
                        
                    </div>
                   

                    

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">Comments</h3>
                </div>
                
                <!-- post comments -->
                <div class="comments bordered padding-30 rounded ">
                    
                    <ul class="comments">
                        <!-- comment item -->
                        <li class="comment rounded">
                            {{-- <div class="thumb">
                                <img style="max-width: 20px; border-radius:20px" src="{{ url(asset("images/1.jpg")) }}" alt="">
                            </div> --}}
                            <div class="details">
                                @if (count($comments)>0)
                                @foreach ( $comments->all() as $comment)
                                <h4 class="name">{{ $comment->name }}</h4>
                                <span class="date">{{ date('M j, Y ') }}</span>
                                <p>{{ $comment->comment }}</p>
                                @endforeach
                                    @else
                                         <h5>No Post Available</h5>
                                @endif
                            </div>
                        </li> 
                        
                    </ul>
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <h3 style="margin-top: 10px" class="section-title ">Leave Comment</h3>
                </div>
                <!-- comment form -->
                <div class="comment-form rounded bordered padding-30 ">

                    <form action="{{ url("/comment/{$post->id}") }}" method="POST">
                        @csrf
                        <div class="messages"></div>
                        
                        <div class="row">

                            <div class="column col-md-12">
                                <!-- Comment textarea -->
                                <div class="form-group">
                                    <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
                                </div>
                            </div>

                         

                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button>

                    </form>
                </div>
            </div>

            
        </div>

    </div>
    <!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="images/logo.svg" alt="Katen" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active">
				<a href="index.html">Home</a>
				<ul class="submenu">
					<li><a href="index.html">Magazine</a></li>
					<li><a href="personal.html">Personal</a></li>
					<li><a href="personal-alt.html">Personal Alt</a></li>
					<li><a href="minimal.html">Minimal</a></li>
					<li><a href="classic.html">Classic</a></li>
				</ul>
			</li>
			<li><a href="category.html">Lifestyle</a></li>
			<li><a href="category.html">Inspiration</a></li>
			<li>
				<a href="#">Pages</a>
				<ul class="submenu">
					<li><a href="category.html">Category</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
					<li><a href="blog-single-alt.html">Blog Single Alt</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
</section>
@endsection