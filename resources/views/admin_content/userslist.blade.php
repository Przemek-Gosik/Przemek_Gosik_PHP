@extends('layouts.app')

@section('content')
<div class="container  w-75">
    <table class="table bg-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Kraj</th>
      <th scope="col">Data urodzenia</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
   @foreach($users as $user)
   <tr>
       <th scope="row">{{$user->id}}</th>
       <th scope="row">{{$user->email}}</th>
       <th scope="row">{{$user->name}}</th><!-- comment -->
       <th scope="row">{{$user->surname}}</th><!-- comment -->
       <th scope="row">{{$user->kraj}}</th>
       <th scope="row">{{$user->dataur }}</th>
       <th scope='row'> 
           <a  href="{{route('pages.edit',$user->id)}}">
           <button class="btn-warning btn-sn" ">E</button>
           </a>
           <button class="btn-danger btn-sn delete" data-id="{{$user->id}}">X</button></th>
   </tr>
   @endforeach
  </tbody>
</table>
    {{$users->links()}}
</div>

@endsection
@section('funkcje')
   const deleteurl = "http://projekt.test/admin_content/userslist/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}" ></script>
@endsection
