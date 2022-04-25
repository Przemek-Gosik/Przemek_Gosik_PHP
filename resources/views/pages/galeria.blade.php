@extends('layouts.app')
@section('content')<!-- comment -->
<link href="{{ asset('css/Galeria.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="container bg-light w-75" id="galeria">
    <div class="row">
        <div class="col-6 " >
            <h2>Galeria zdjęć</h2>
            </br>
        </div>
        
        <div class="col-6">
            @can('isAdmin')
            <a class="float-md-right" href="{{route('pages.createphoto')}}"  >
                
                <button class='btn btn-primary'>Dodaj zdjęcie</button>
               
            </a>
            @endcan
        </div>
        <div class ='d-flex align-content-between flex-wrap  '>
           
             @foreach ($obrazy as $obraz)
                <div class="col-6">
                 <img src="{{asset('storage/'.$obraz->image)}}" class="img-fluid" alt={{$obraz->opis}} >
                 @can('isAdmin')
                 <figcaption class="figure-caption text-center"><a class=" u-link-v5 delete g-color-gray-dark-v1 g-color-primary--hover  " data-id="{{$obraz->id}}" href="#">Usuń</a></figcaption>
              @endcan
                </div>
             
             @endforeach
             {{$obrazy->links()}}
        </div>
            
        
        
    </div>
    
    
</div>

@endsection
@section('funkcje')
   const deleteurl = "http://projekt.test/pages/galeria/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}" ></script>
@endsection


