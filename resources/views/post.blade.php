
@extends('layout.app')
@section('content')

{{
  setting('site.title')
}}


<div class="blog_feature_img">

 <img class="img-responsive" src="/{{ $post->image }}" alt="#"> </div>
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>{{ $post->title }}</h2>
                        <p class="large">{!! $post->body !!}</p>
                          <p class="large">{{ $post->meta_description }}</p>
  <p class="large">{{ $post->excerpt }}</p>

              <a class="btn btn-success" href="{{ url('/')}}"> All Posts </a>
                    </div>


                </div>
            </div>

        </div>


    </div>




 History comments for this post
@foreach($comments as $comment)
<ol>

<li>{{ $comment->comment }}</li>
</ol>
@endforeach


@if(\Illuminate\Support\Facades\Auth ::check())
    <div class="container">

  <form action="{{ url ('add/comment') }}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}
{{ method_field('post') }}


<div class="form-group">
    <label> Comment </label>
    <textarea  name="comment" class="form-control">
      {{ old('comment') }}

   </textarea>
</div>
@else
<a href="{{ url('login')}}"> Login</a>
<a href="{{ url('register')}}"> register</a>
@endif


  <div class="form-group">
    <input type="hidden" value="{{ $post->id }}" name="post_id">
  </div>

<div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Comment</button>
</div>

</form><!-- end of form -->


</div>



<!-- end section -->


<!-- Modal -->


@endsection
