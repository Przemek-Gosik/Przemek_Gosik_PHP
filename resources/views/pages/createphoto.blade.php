@extends('layouts.app')<!-- comment -->

@section('content')
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edytuj dane') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('pages.store')}}">
                        @csrf
                         <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Zdjecie') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept=".jpg,.gif,.png" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Opis') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('opis') is-invalid @enderror" name="opis"  autofocus>

                                @error('opis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Dodaj zdjęcie') }}
                                </button>
                                
                            </div>
                        </div>
                     </form>

                </div>
               
            </div>

        </div>
   </div>

@endsection

