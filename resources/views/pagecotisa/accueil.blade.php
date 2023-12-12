
@include('layoutscotisa.header')



<section style="height:50px">

</section>

<div class="container-fuid">
  <div class="row">
    <div class="col-md-12">
      <div style="position: relative; text-align: center;">
        <img src="{{ asset('dist/imagecotisa/ibg1.png') }}" alt="" class="img-fluid" style="width: 100%; height:100%">
        <div style="position: absolute; top: 28%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.3); color: #fff; padding: 10px; font-size: 22px;">
          <b>Bienvenue sur l'application</b>
        </div>
        <div style="position: absolute; top: 55%; left: 50%; transform: translate(-50%, -50%); color: #fff; padding: 70px; font-size: 23px; width: 640px; height: 100px;">
          <img src="{{ asset('dist/imagecotisa/LOGO COTISA central petit.png') }}" alt="" class="img-fluid" style="width: 40%;position: absolute; left: 30%;top: -65%;">
        </div>
        <div style="position: absolute; top: 52%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(65, 3, 100, 0.5); color: #fff; padding: 15px; font-size: 20px; width: 640px; height: 100px;">
          <p>Plateforme de suivi et de réclamation de cotisations <br> sociales des travailleurs et retraités</p>
        </div>      
    <div class="col-md-2 text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%); margin: 0 auto;background-color:#E98109; color: #fff;"
         onmouseover="this.style.backgroundColor='#FFA500';" 
         onmouseout="this.style.backgroundColor='#E98109';">
      <a href="#commencer" class="text-white">Cliquez pour continuer <i class="fas fa-hand-pointer" style="color: dark;"></i></a>
    </div>
  
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="height: 243px;">
      <img src="{{ asset('dist/imagecotisa/LOGO COTISA central grand.png') }}" alt="" class="img-fluid py-4" style="width: 40%;position: absolute; left: 30%;top: 10%;">
    </div>
  </div>
</div>

<div class="container">
  <div class="row py-4">
    <div class="col-md-12 text-center">
      <div style="margin: 0 auto;background-color:#410364; color: #fff; padding: 15px; font-size: 16px; width: 350px; height: 50px;">
        <p><b>A PROPOS</b></p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p style="color:#410364;text-align: center;">COTISA est une plateforme conviviale et sécurisée.
      <br> Cotisa permet une lecture claire et rassurante des cotisations sociales des travailleurs et retraités.
      <br> L'application facilite les enregistrements et les opérations liées à la CNSS,
      <br> elle accompagne aussi les entreprises et institutions pour déclarer correctement leurs employés.
      </p>
    </div>
  </div>
</div>
<!-- bouton cotisa style -->
<div class="container-fluid" id="commencer">
  <div class="row py-4" style="background-color: #ECEBEB;">
    <div class="col-md-2 text-center btn" 
         style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; margin: 0 auto;background-color:#E98109; color: #fff;"
         onmouseover="this.style.backgroundColor='#FFA500'; this.style.transform='translateY(-2px)';" 
         onmouseout="this.style.backgroundColor='#E98109'; this.style.transform='translateY(0px)';">
      <a href="{{route('transition')}}" class="text-white">Commencer maintenant</a>
    </div>
  </div>
</div>




<!-- <div class="container-fluid">
  <div class="row py-5" style="background-color: #ECEBEB;">
    <div class="col-md-2 text-center btn " style="box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; margin: 0 auto;background-color:#E98109; color: #fff;">
      <a href="#" class="text-white">Commencer maintenant</a>
    </div>
  </div>
</div> -->



<!-- <div class="row">
        <div class="col-md-12">
        <img src="{{asset('dist/imagecotisa/ibg1.png')}}" alt="" style="width:100%;" />
        </div>
    </div> -->
@include('layoutscotisa.footer')



