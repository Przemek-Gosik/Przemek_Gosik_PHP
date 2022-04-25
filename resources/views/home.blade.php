@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Witamy '.Auth::user()->name.'!' ) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Zostałeś poprawnie zalogowany!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
