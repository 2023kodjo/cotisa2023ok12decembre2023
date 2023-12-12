
@include('layoutscotisa.header')


<div class="container-fuid">
  <div class="row">
    <div class="col-md-12">
      <div style="position: relative; text-align: center;">
        <img src="{{ asset('dist/imagecotisa/ibg2f.png') }}" alt="" class="img-fluid" style="width: 100%; height:100%">
        <div style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); 
        background-color: rgba(0, 0, 0, 0.3); color: #fff; padding: 140px; border-radius: 15px; font-size: 22px;width: 630px;">
        </div>
        <div style="position: absolute;
         position: fixed; top: 68%; left: 50%; transform: translate(-50%, -50%); color: #fff; padding: 70px; font-size: 23px; width: 640px; height: 100px;">
        <a href="{{url('/')}}" class="btn"> <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid" style="width: 15%;position: absolute; left: -35%;top: -190%;"></a>
        </div>


        <a href="{{route('login')}}" class="text-white col-md-2 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#410364; color: #fff;transform: translate(-50%, -50%);position: absolute;top: 49%; left: 50%;"
             onmouseover="this.style.backgroundColor='#6C149E';" 
           onmouseout="this.style.backgroundColor='#410364';">S'identifier</a>
    


           <a href="{{route('register')}}" class="text-white col-md-2 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#036414; color: #fff;transform: translate(-50%, -50%);position: absolute;top: 56%; left: 50%;"
             onmouseover="this.style.backgroundColor='#0F9727';" 
           onmouseout="this.style.backgroundColor='#036414';">Créer un compte</a>

     


           <a href="https://codes.droit.org/PDF/Code%20du%20travail.pdf" class="text-white col-md-3 text-center m-auto btn"
           style=" border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
            cursor: pointer;background-color:#E98109; color: #fff;transform: translate(-50%, -50%);position: absolute;top: 63%; left: 50%;"
             onmouseover="this.style.backgroundColor='#FFA500';" 
           onmouseout="this.style.backgroundColor='#E98109';">Consulter code du Travail</a>
   
      </div>
    </div>
  </div>
</div>





<!-- <i class="fas fa-hand-pointer" style="color: dark;"></i> -->
<!-- bouton cotisa style -->





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



