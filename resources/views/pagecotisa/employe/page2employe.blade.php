@include('layoutscotisa.header')
<!-- Content Wrapper. Contains page content -->
<div class="container-fuid">
  <section style="height: 150px;"></section>
  <section>
    <div class="row">
      <div class="col-md-2" style="margin-left: 9%;">
        <a href="{{url('/')}}" class="btn my-1">
          <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid"
            style="z-index: 50;width: 8%; position:fixed;top:12%">
        </a>
      </div>
    </div>
  </section>
  <section style="height:90px;"></section>
  <section>
    <div class="row">
      <div class="col-md-5">
        <div class="row">
          <img src="{{ asset('dist/imagecotisa/iprofil1.png') }}" alt="png"
            style="width: 50%;margin: auto;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
        </div>
        <div class="row py-2">
          <div class="col-md-5" style="color: green; margin: auto; text-align: center;">
            <h5>Votre cotisation sur salaire est de 15 % par mois</h5>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="row ">
          <img src="{{ asset('dist/imagecotisa/icon Done.png') }}" alt="png" style="width: 10%;margin: auto;">
        </div>
        <div class="row py-3">
          <div class="col-md-8" style="color: green; margin: auto; text-align: center;">
            <b>Cotisation du mois effectuée avec succès</b>
          </div>
        </div>
        <div class="row py-3">
          <div class="col-md-9" style="color: green; margin: auto; text-align: center;">
            <h6>Chaque mois 35 000 Fcfa sont prélevés
              sur votre salaire et sont reversés à la CNSS.
            </h6>
          </div>
        </div>
        <div class="row py-2">
        <a href="#" class="text-white m-auto"><div class=" text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
                  cursor: pointer;background-color:#E98109; color: #fff;"
            onmouseover="this.style.backgroundColor='#FFA500';"
             onmouseout="this.style.backgroundColor='#E98109';">Voir la date du dernier versement</div></a>
        </div>

        <div class="row py-2">
            <a href="#" class="text-white m-auto"><div class=" text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
                   cursor: pointer;background-color:#036414; color: #fff;
                     " onmouseover="this.style.backgroundColor='#0F9727';"
             onmouseout="this.style.backgroundColor='#036414';">Faire une réclamation</div></a>
        </div>

      </div>
    </div>
  </section>
  <section style="height: 80px;"></section>
</div>

@include('layoutscotisa.footer')