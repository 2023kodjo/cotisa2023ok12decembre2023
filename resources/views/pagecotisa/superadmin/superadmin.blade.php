@include('layoutscotisa.headeradmin')
<!-- Content Wrapper. Contains page content -->
<div class="container-fuid">
  <section style="height: 75px;"></section>
  <section>
    <div class="row">
      <a href="#" class="m-auto"><img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" style="z-index: 50; width:100%;"></a>
    </div>
    <div class="row py-2">
      <div class="col-md-6 text-center m-auto">
        <h5 style="color: green;z-index: 100;">Espace administrateur</h5>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-2">
      <div class="col-md-8 m-auto">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider1.png') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-3">
      <div class="col-md-6 text-center m-auto">
        <h5 style="color: green;">Vous êtes le super administrateur de la plateforme COTISA</h5>
      </div>
    </div>
  </section>
  <section>
    <div class="row">
      <a href="{{route('inscription')}}" class="text-white col-md-3 text-center m-auto btn"
         style="border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; background-color:#E98109; color: #fff;"
         onmouseover="this.style.backgroundColor='#FFA500';"
         onmouseout="this.style.backgroundColor='#E98109';">Ajouter un utilisateur</a>
    </div>
  </section>
  <section>
    <div class="row py-3">
      <a href="{{asset('profile')}}" class="text-white col-md-2 text-center m-auto btn"
         style="border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; background-color:#036414; color: #fff;"
         onmouseover="this.style.backgroundColor='#0F9727';"
         onmouseout="this.style.backgroundColor='#036414';">Paramètre</a>
    </div>
  </section>
</div>
@include('layoutscotisa.footer')
