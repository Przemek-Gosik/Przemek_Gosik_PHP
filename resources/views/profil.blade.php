@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header"><img src="/uploads/profilepics/{{$user->profilepic}}" style="width:150px; height:150px; float:left;border-radius: 50%;"><h4>{{ __('Profil użytkownika: '.Auth::user()->name ) }}</h4></div>

                <form enctype="multipart/form-data" action="/profil" method="POST">
                    <label>Zaktualizuj zdjęcie profilowe</label>
                    <input type="file" name="profilepic" accept=".jpg,.gif,.png">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-primary">Dodaj zdjęcie</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



