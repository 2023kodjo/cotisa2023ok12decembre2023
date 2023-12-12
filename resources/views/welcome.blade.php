@include('layoutscotisa.header')

<section style="height: 60px"></section>

<div class="container-fuid">
  <div class="row">
    <div class="col-md-12 m-auto">
      <div style=" text-align: center; ">
        <img class="zoom-background" src="{{ asset('dist/imagecotisa/ibg1.png') }}" alt="" class="img-fluid" style="width: 100%; height: 100%">
        <div style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.3); color: #fff; padding: 10px; font-size: 22px;">
          <b>Bienvenue sur l'application</b>
        </div>
        <div class="" style="position: absolute; top: 37%; left: 50%; transform: translate(-50%, -50%);">
          <img src="{{ asset('dist/imagecotisa/LOGO COTISA central petit.png') }}" alt="" style="width:75%;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
        </div>
        <div class="col-md-4" style="position: absolute; top: 53%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(65, 3, 100, 0.5); color: #fff; padding: 15px; font-size: 20px;height: 100px;">
          <p>Plateforme de suivi et de réclamation des cotisations sociales des travailleurs et des retraités</p>
        </div>
        <a href="#commencer" class="text-white"><div class="col-md-2 text-center btn" style="border-radius: 50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%); margin: 0 auto; background-color: #E98109; color: #fff;" onmouseover="this.style.backgroundColor='#FFA500';" onmouseout="this.style.backgroundColor='#E98109';">
          Cliquez pour continuer <i class="fas fa-hand-pointer" style="color: dark;"></i>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>
<section style="height: 50px;"></section>
<div class="container-fluid">
  <div class="row ">
   <div class="col-md-5 m-auto">
      <img src="{{ asset('dist/imagecotisa/LOGO COTISA central grand.png') }}" alt="" style="width: 100%;">
   </div>
  </div>
</div>

<div class="container">
  <div class="row py-4">
    <div class="col-md-12 text-center">
      <div style="margin: 0 auto; background-color: #410364; color: #fff; padding: 15px; font-size: 16px; width: 350px; height: 50px;">
        <p><b>A PROPOS</b></p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div a class="col-md-12">
    <p style="color: #410364; text-align: center;">COTISA est une plateforme conviviale et sécurisée.
      <br> Cotisa permet une lecture claire et rassurante des cotisations sociales des travailleurs et retraités.
      <br> L'application facilite les enregistrements et les opérations liées à la CNSS,
      <br> elle accompagne aussi les entreprises et institutions pour déclarer correctement leurs employés.
    </p>
  </div>
</div>

<!-- bouton cotisa style -->
<div class="container-fluid" id="commencer">
  <div class="row py-5" style="background-color: #ECEBEB;">
  <a href="{{route('transition')}}" class="text-white col-md-2 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#E98109; color: #fff;transform: translate(-50%, -50%);position: absolute; left: 50%;"
             onmouseover="this.style.backgroundColor='#FFA500';" 
           onmouseout="this.style.backgroundColor='#E98109';">Commencer maintenant</a>
    
  </div>
</div>





<!-- Include footer -->
@include('layoutscotisa.footer')

<style>
  @keyframes zoom {
    0% {
      transform: scale(1);
    }
    100% {
      transform: scale(1.1);
    }
  }

  .zoom-background {
    background-image: url('{{ asset('dist/imagecotisa/ibg1.png') }}');
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
    animation: zoom 15s infinite alternate;
    color: white;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
