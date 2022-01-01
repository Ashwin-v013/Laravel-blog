    @extends('layouts.app')

    @section('content')
    <!--- <div class="container-fluid">
    <div class="row ">
    <div class="col-md-12">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

    <div class="card-body">

        <div class="col-md-12 ">
            @if (count($posts)>0)
                @foreach($posts->all() as $post)
                    <h4 >{{ $post->post_title }}</h4>
                    <img style="max-width: 100%" src="{{ $post->post_image }}" alt="">
                    <p style="margin-top: 25px">{{ substr($post->post_body, 0 , 150) }}</p>
                    <ul class="nav nav-pills " s>
                        <li style="padding-right: 15px" role="presentation"><a href=" {{ url("/view/{$post->id}") }}">
                            <span><i class="las la-eye"></i>View</span>    
                        </a></li> 
                        <li style="padding-right: 15px" role="presentation"><a href="{{ url("/edit/{$post->id}") }}">
                            <span><i class="las la-eye"></i>Edit</span>    
                        </a></li>
                        <li style="padding-right: 15px" role="presentation"><a href="{{ url("/delete/{$post->id}") }}">
                            <span><i class="las la-eye"></i>Delete</span>    
                        </a></li>
                    </ul>
                    <br> <cite>Posted on: {{ date('M j, Y H:i  ') }}</cite>
                        <hr>
                    @endforeach
                @else
                <p>No Post Available</p>
            @endif
        

            
            {{ $posts->links()}}
            
            
        </div>
    </div>
    </div>
    </div>
    </div>
    </div> --->



    <!-- post -->
    @if (count($posts)>0)
    @foreach ($posts->all() as $post)

    <div class="post post-grid rounded bordered">
    <div class="thumb top-rounded">
    <span class="post-format">
    <i class="icon-picture"></i>
    </span>
    <a href="blog-single.html">
    <div class="inner">
        <img src="{{ $post->post_image }}" alt="" />
    </div>
    </a>
    </div>
    <div class="details">
    <ul class="meta list-inline mb-0">
    <li class="list-inline-item">{{ $user['name'] }}</li>
    <li class="list-inline-item">{{ date('M j, Y ') }}</li>
    </ul>
    <h5 class="post-title mb-3 mt-3"><a href="{{ url("/view/{$post->id}") }}">{{ $post->post_title }}</a></h5>
    <p class="excerpt mb-0">{{ substr($post->post_body, 0 , 150) }}</p>
    </div>
    <div class="post-bottom clearfix d-flex align-items-center">
    <div class="social-share me-auto">
    <button class="toggle-button icon-share"></button>
    <ul class="icons list-unstyled list-inline mb-0">
        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
    </ul>
    </div>
    <div class="float-end d-none d-md-block">
    <a href="{{ url("/view/{$post->id}") }}" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <br> 
    @endforeach

    @endif
    @endsection

