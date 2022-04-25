@extends('layouts.app')<!-- comment -->

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="container w-75 bg-light">
 @foreach($comments as $comment)
<div class="row">
   
    <div class="col-md-8">
        <div class="media g-mb-30 media-comment">
            <img class="d-flex g- rounded-circle g-mt-3 g-mr-15"  src="/uploads/profilepics/{{$comment->user->profilepic}}" style="width:30px; height:30px;" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
              <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0">{{$comment->user->name}}</h5>
                <span class="g-color-gray-dark-v4 g-font-size-12">{{$comment->created_at}}</span>
              </div>
              <p>{{$comment->message}}
              
              @can('isAdmin')
              <a class=" u-link-v5 delete g-color-gray-dark-v1 g-color-primary--hover" data-id="{{$comment->id}}" href="#">Usuń</a>
              @endcan
              </p>
            </div>
            
        </div>
    </div>
</div>

@endforeach
{{$comments->links()}}
    <form role='form' action="{{ route('store') }}" id='comment-form' method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group purple-border">
        <label for="message">Utwórz nowy komentarz</label>
  <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
 
<button type="submit" class="btn btn-primary">Dodaj</button>


</div>
@endsection
@section('funkcje')
   const deleteurl = "http://projekt.test/admin_content/commentslist/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}" ></script>
@endsection

