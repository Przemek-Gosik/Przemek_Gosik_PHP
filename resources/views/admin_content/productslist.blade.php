@extends('layouts.app')

@section('content')
<div class="container  w-75 bg-light">
    <div class="row">
        <div class="col-3">
            <h2>Lista produktów w sklepie</h2>
        </div>
        <div class="col-3">
            <a class="float-right" href="{{route('admin_content'.create')}}" 
        </div>
    </div>
    <table class="table bg-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Opis</th>
      <th scope="col">Ilość</th>
      <th scope="col">Cena</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
   @foreach($products as $product)
   <tr>
       <th scope="row">{{$product->id}}</th>
       <th scope="row">{{$product->name}}</th>
       <th scope="row">{{$product->description}}</th><!-- comment -->
       <th scope="row">{{$product->amount}}</th><!-- comment -->
       <th scope="row">{{$product->price}}</th>
       <th scope='row'> 
           <button class="btn-danger btn-sn delete" data-id="{{$user->id}}">X</button></th>
   </tr>
   @endforeach
  </tbody>
</table>
    {{$products->links()}}
</div>

@endsection
@section('funkcje')
   const deleteurl = "http://projekt.test/admin_content/productslist/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}" ></script>
@endsection
