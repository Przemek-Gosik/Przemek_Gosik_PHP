@extends('layouts.app')

@section('content')
        <header class=" py-5">
            <div id="przykladowaKaruzela4" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="rounded  d-block w-100 "  src="{{ asset ('images/fot1.jpg') }}" alt="Pierwszy slajd">
      <div class="carousel-caption">
        <h5>Witamy na stronie poświęconej szybowcom !</h5>
        <p>Zaloguj się aby mieć dostęp do ciekawych stron !</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid d-block w-100 "  src="{{ asset ('images/fot2.jpg') }}" alt="Drugi slajd">
      <div class="carousel-caption">
          <p>Przejdź do sklepu i kup nasze pamiątki !</p>
         @guest
         @else
        <a class="btn btn-warning " href="Sklep.html">Odwiedź sklep</a>
        @endguest
      </div>
    </div>
    <div class="carousel-item">
      <img class="rounded d-block w-100 "  src="{{ asset ('images/fot3.jpg') }}" alt="Trzeci slajd">
      <div class="carousel-caption">
           <p>Dowiedz się więcej na temat aeroklubów znajdującch się na Lubelszczyźnie </p>
          @guest
          @else
        <a class="btn btn-warning " href="#features">Poznaj aerokluby</a>
       
        @endguest
      </div>
    </div>
      <div class="carousel-item">
      <img class="rounded  d-block w-100 "  src="{{ asset ('images/fot4.jpg') }}" alt="Czwarty slajd">
      <div class="carousel-caption">
        <p>Dowiedz się więcej na temat historii szybownictwa</p>
        @guest
        @else
        <a class="btn btn-warning " href="Historia.html">Poznaj historie</a>
        @endguest
      </div>
    </div>
      <div class="carousel-item">
      <img class="rounded d-block w-100 " src="{{ asset ('images/fot5.jpeg') }}" alt="Piaty slajd">
      <div class="carousel-caption">
         <p>Zobacz zdjęcia zapierające dech w piersiach!</p>
          @guest
         @else
        
         <a class="btn btn-warning " href="Galeria.html">Zobacz galerie</a>
         @endguest
      </div>
    </div>
  </div>
  <a class="carousel-control-prev " href="#przykladowaKaruzela4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="sr-only "></span>
  </a>
  <a class="carousel-control-next " href="#przykladowaKaruzela4" role="button" data-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true"></span>
    <span class="sr-only "></span>
  </a>
</div> 
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                <h2 class="mx-auto">Odwiedź lokalne aerokluby</h2>
                <p class="lead mb-0">I dowiedz się więcej</p>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="card h-100">
                        <div class="card-header"><img src="{{ asset ('loga/radawiec.png') }}" alt="logo1">
                            <h2 class="h4 fw-bolder">Aeroklub Lubelski w Radawcu</h2></div>
                        <div class="card-body"><p>Aeroklub Lubelski posiada osobowość prawną i może prowadzić działalność gospodarczą w celu pozyskiwania środków na działalność statutową.
Aeroklub Lubelski skupia entuzjastów lotnictwa sportowego i rekreacyjnego, odwołuje się do tradycji Aeroklubu Polskiego i dąży do stworzenia warunków rozwoju i kształcenia adeptów sportów lotniczych</p>
                        </div>
                            <div class="card-footer align-bottom"><a class="align-text-bottom text-decoration-none bg-primary text-light" href="https://www.aeroklub.lublin.pl/">
                            Przejdź na stronę
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        </div>
                        </div>
                    </div>    
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="card h-100">
                        <div class="card-header" ><img src="{{ asset ('loga/SAS_logo.gif') }}" alt="logo2">
                            <h2 class="h4 fw-bolder">Aeroklub Świdnik</h2></div>
                        <div class="card-body"><p>Lotnicze tradycje Świdnika sięgają okresu międzywojennego, kiedy to w drugiej połowie lat 30-tych organizacja Liga Obrony Powietrznej i Przeciwgazowej (LOPP) wykupiła 146 hektarów terenu i przystąpiła do tworzenia w tej miejscowości lotniska.</p>
                        </div>
                            <div class="card-footer align-bottom"><a class=" align-text-bottom text-decoration-none bg-primary text-light" href="http://www.aeroklubswidnik.com.pl/">
                            Przejdź na stronę 
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card h-100">
                        <div class="card-header"><img src="{{ asset ('loga/logozamoj.png') }}" alt="logo3">
                            <h2 class="h4 fw-bolder">Aeroklub Ziemi Zamojskiej</h2></div>
                        <div class="card-body"><p >Czy to może dziwić, że w każdym zakątku Świata znajdą się ludzie chcący zasmakować podniebnych lotów jak też zmagać się z wiatrem lub wykorzystywać go dla swoich potrzeb etc. Tak też i było na Zamojszczyźnie.</p>
                        </div>
                            <div class="card-footer align-bottom"><a class="align-text-bottom text-decoration-none bg-primary text-light" href="https://aeroklubzamosc.pl/">
                            Przejdź na stronę
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection('content')
   




