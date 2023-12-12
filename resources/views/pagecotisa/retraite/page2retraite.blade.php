@include('layoutscotisa.header')
<!-- Content Wrapper. Contains page content -->
<div class="container-fuid">
    <section style="height: 55px;"></section>
    <section>
        <div class="row">
            <div class="col-md-2" style="margin-left: 9%;">
              <a href="{{url('/')}}" class="btn my-1">
                <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid"
                style="z-index: 50;width: 8%; position:fixed;">
              </a>
           </div>
        </div>
    </section>
  <section>
    <div class="row">
      <div class="col-md-6 text-center m-auto ">
        <h5 style="color: green;z-index: 100;">
        Bienvenue dans l'espace pension
        </h5>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-2">
      <div class=" col-md-6 m-auto">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/ibg5.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider4.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider5.png') }}" alt="Fourth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-2">
      <div class="col-md-6 text-center m-auto">
        <h5 style="color: green;">
        Chaque mois vous avez droit à 225.000 Fcfa de versement 
        </h5>
      </div>
    </div>
  </section>
  <section class="pb-5">
    <div class="row">


    

    <a href="#" class="text-white col-md-3 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#036414; color: #fff;"
             onmouseover="this.style.backgroundColor='#0F9727';" 
           onmouseout="this.style.backgroundColor='#036414';">Avantages et droits</a>
       

   

      


      <a href="#" class="text-white col-md-2 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#E98109; color: #fff;"
             onmouseover="this.style.backgroundColor='#FFA500';" 
           onmouseout="this.style.backgroundColor='#E98109';">Date dernier virement</a>
       



      


      <a href="#" class="text-white col-md-3 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#036414; color: #fff;"
             onmouseover="this.style.backgroundColor='#0F9727';" 
           onmouseout="this.style.backgroundColor='#036414';">Faire une réclamation</a>
       


    </div>
  </section>
  
</div>

@include('layoutscotisa.footer')