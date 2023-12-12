
@include('layoutscotisa.header')





<div class="container-fuid">
  <div class="row">
    <div class="col-md-12">
      <div style="position: relative; text-align: center;">
        <img src="{{ asset('dist/imagecotisa/ibg6t.png') }}" alt="" class="img-fluid" style="width: 100%; height:100%;">
        <div style="position: fixed; top: 52%; left: 50%; transform: translate(-50%, -50%); 
        background-color: rgba(0, 0, 0, 0.3); color: #fff; padding: 169px;
         border-radius: 15px; font-size: 22px;width: 1250px;">
        </div>
        <div style="position: absolute;
    position: fixed; top: 68%; left: 50%; transform: translate(-50%, -50%); color: #fff; padding: 70px; font-size: 23px; width: 640px; height: 100px;">
        <a href="#" class="btn"> <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid" style="width: 15%;position: absolute; left: -35%;top: -190%;"></a>
        </div>

        <h4 style="margin: 0 auto;position: fixed;
          color: #fff; top: 30%; left: 50%;
           transform: translate(-50%, -50%);">
           Bienvenue sur votre compte Employé
          </h4>





          <a href="{{route('cotisation')}}" class="text-white"><div class="col-md-2 text-center btn" 
         style=" width:150px;font-size: 13px; border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
          cursor: pointer; margin: 0 auto;background-color:#036414; color: #fff;position: fixed; top: 72%;
           left: 12.5%;
           transform: translate(-50%, -50%);"
         onmouseover="this.style.backgroundColor='#0F9727';" 
         onmouseout="this.style.backgroundColor='#036414';">Consulter cotisation</div></a>
    
       
         <a href="{{route('inscription')}}" class="text-white"><div class="col-md-2 text-center btn" 
         style=" width:150px;font-size: 13px; border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
          cursor: pointer; margin: 0 auto;background-color:#410364; color: #fff;position: fixed; top: 72%;
           left: 37.5%;
           transform: translate(-50%, -50%);"
          onmouseover="this.style.backgroundColor='#6C149E';" 
         onmouseout="this.style.backgroundColor='#410364';">Info CNSS</div></a>
    

         <a href="{{route('inscription')}}" class="text-white"><div class="col-md-2 text-center btn" 
         style=" width:150px;font-size: 13px; border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
          cursor: pointer; margin: 0 auto;background-color:#410364; color: #fff;position: fixed; top: 72%;
           left: 62.5%;
           transform: translate(-50%, -50%);"
          onmouseover="this.style.backgroundColor='#6C149E';" 
         onmouseout="this.style.backgroundColor='#410364';">Avantages et droits</div></a>
    


    
         <a href="{{route('inscription')}}" class="text-white"><div class="col-md-2 text-center btn" 
         style=" width:150px;font-size: 13px; border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
          cursor: pointer; margin: 0 auto;background-color:#036414; color: #fff;position: fixed; top: 72%;
           left: 87.5%;
           transform: translate(-50%, -50%);"
         onmouseover="this.style.backgroundColor='#0F9727';" 
         onmouseout="this.style.backgroundColor='#036414';">Faire une réclamation</div></a>
    
    







         <a href="#" class="text-white"><div class="col-md-2 text-center btn" style=" z-index:50; border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; position: fixed; top: 87%; left: 50%; transform: translate(-50%, -50%); margin: 0 auto;background-color:#E98109; color: #fff;"
         onmouseover="this.style.backgroundColor='#FFA500';" 
         onmouseout="this.style.backgroundColor='#E98109';">
      Espace retraité</div></a>
    


   
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


<div class="container-fluid pt-2 " style="position: fixed; top: 52%; left: 50%; transform: translate(-50%, -50%); ">
  <div class="row text-center">
    <div class="col-md-3">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner row mx-auto " style="width:62%;">
       <div class="carousel-item active">
        <div class="card">
           <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg1.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg2.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg3.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg1.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg2.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg3.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg1.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
  </div>
        </div>

      <div class="col-md-3">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row mx-auto " style="width:62%;">
     <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg4.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
     </div>
     <div class="carousel-item">
        <div class="card">
           <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg5.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
    </div>
      <div class="carousel-item">
        <div class="card">
           <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg6.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
       </div>
       <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg4.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
       </div>
       <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg5.png') }}" alt="Card image cap" style="width: 400px; height:140px">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
         <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/LOGO CNSS.png') }}" alt="Card image cap" style="width: 200px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
     <div class="carousel-item">
       <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg6.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
          </div>
      </div> 
  </div>
        </div>


        <div class="col-md-3 ">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row mx-auto " style="width:62%;">
      <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg7.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg8.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg5.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg2.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg4.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg3.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg7.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>


        <div class="col-md-3">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row mx-auto " style="width:62%;">
      <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg1.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg3.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg2.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg4.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg8.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg7.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('dist/imagecotisa/ibg8.png') }}" alt="Card image cap" style="width: 400px; height:140px;">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
   </div>            
        </div>
    </div>
    </div>
</div>















