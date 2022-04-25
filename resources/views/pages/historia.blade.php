@extends('layouts.app')

@section('content')
<script src="{{ asset('js/historia.js') }}" defer></script>
<header class='bg-light  container'>   
    <br><br>
            
            <h2 class="text-dark text-center ">Historia</h2>
            <div class="container text-center d-flex">
                <div class='w-75 h-100 '>
                <button class="btn btn-secondary  w-100 h-100" id="poczatki" style="font-size:1vw;">Początki lotnictwa</button>
                </div>
                <div class='  w-75 h-100 '>
                <button class="btn btn-secondary  w-100 h-100 " id="polska" style="font-size:1vw;">Polskie początki</button>
                </div>
                <div class=" w-75 h-100 ">
                <button class="btn btn-secondary w-100 h-100" id="szybowce" style="font-size:1vw;">Początki szybowców</button>
                </div><!-- comment -->
                <div class=' w-75 h-100  '>
                <button class="btn btn-secondary  w-100 h-100" id="wspolczesne" style="font-size:1vw;">Czasy współczesne</button> 
                </div>
            </div>
        
        </header>
  
        <section id='blok' class="bg-light align-items-center mx-auto p-2 w-75">
            <blockquote class="text-center  "><em>
                Tam sięgaj, gdzie wzrok nie sięga;<br>
                Łam czego rozum nie złamie:<br>
                Młodości! – Orla twych lotów potęga,<br>
                Jako piorun twoje ramię.</em><br>
                <br><footer class="blockquote-footer " > Adam Mickiewicz</footer>
            </blockquote>
        </section>


@endsection