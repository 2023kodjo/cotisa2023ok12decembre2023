@include('layoutscotisa.header')
<!-- Content Wrapper. Contains page content -->
<div class="container-fuid">
  <section style="height: 50px;"></section>
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
      <div class="col-md-5">
        <div class="row" style="height: 150px;"></div>
        <div class="row">
          <img src="{{ asset('dist/imagecotisa/iprofil2.png') }}" alt="png"
            style="width: 50%;margin: auto;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
        </div>
        <div class="row py-3">
          <div class="col-md-5" style="color: red; margin: auto; text-align: center;">
            <b style="font-size:18px">COTISA c'est 100% visibilité </b>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="row py-1">
          <div class="col-md-8" style="color: green; margin: auto; text-align: center;">
            <b style="font-size:18px">Déclaration d'un employé</b>
          </div>
        </div>

<!-- ---------formulaire star-------- -->
        <div class="row py-1 ">
          <!-----espece form----->
          <div class="col-md-8 m-auto" style="box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
  <form action="{{route('declarer')}}" method="post" class="m-auto">
        @if(session('success'))
          <div class="alert alert-success" id="successAlert">
              {{ session('success')}}
          </div>
        @endif
        @csrf
        @method('post')

        <div class="form-group">
           <input type="hidden" name="id_entreprise" value="{{Auth::user()->id}}" class="form-control bg-light"
           id="check-id_entreprise" placeholder="">
        </div>


        <div class="form-group">
           <label for="check-entreprise">Entreprise</label>
           <input type="text" name="entreprise" class="form-control bg-light"
           id="check-entreprise" placeholder="">
        </div>

      <div class="form-group">
           <label for="check-nom">Nom de l'employé</label>
           <input type="text" name="nom" class="form-control bg-light"
           id="check-nom" placeholder="">
        </div>
        <div class="form-group">
           <label for="check-prenom">Prénom</label>
           <input type="text" name="prenom" class="form-control bg-light"
           id="check-prenom" placeholder="">
        </div>
        <div class="form-group">
          <label for="check-date">Date de naissance</label>
          <input type="date" name="date_de_naissance" class="form-control bg-light"
           id="check-date" placeholder="">
       </div>

    <div class="row">
      <div class="col-md-3">
          <div class="role form-group">
            <input checked="" name="genre" id="check-masculin" value="masculin"  type="radio">
            <label for="check-masculin">Masculin</label>
          </div>
          </div>
        <div class="col-md-3">
          <div class="role form-group">
            <input name="genre" id="check-feminin" value="feminin"  type="radio">
            <label for="check-feminin">Féminin</label>
          </div>
        </div>
    </div>
        <div class="form-group">
           <label for="check-profession">Profession</label>
           <input type="text" name="profession" class="form-control bg-light"
           id="check-profession" placeholder="">
        </div>
        <div class="form-group">
           <input type="hidden" name="validation" value="en_cours" class="form-control bg-light"
           id="check-validation" placeholder="">
        </div>
       <div class="row ">
          <button  type="submit" class="col-md-5 m-auto text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
                   cursor: pointer;background-color:#036414; color: #fff;
                     " onmouseover="this.style.backgroundColor='#0F9727';"
            onmouseout="this.style.backgroundColor='#036414';">
             Déclarer
          </button>
        </div>
       

  </form>
  <a href="{{route('liste_des_declares')}}" class="text-white"><div class="row py-2">
          <button class="col-md-8 m-auto text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
                  cursor: pointer;background-color:#E98109; color: #fff;"
            onmouseover="this.style.backgroundColor='#FFA500';" onmouseout="this.style.backgroundColor='#E98109';">
            Voir la liste des déclarés
          </button></div></a>









</div>
          <!-----espace form----->
        </div>
<!-- --------------formulaire end----------- -->









       
        
      </div>
    </div>
  </section>
  
  <section style="height: 65px;"></section>
</div>

@include('layoutscotisa.footer')