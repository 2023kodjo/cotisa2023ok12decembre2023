
 <!-----code erreur start----->
 <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    <div>
    @endif -->
    <!-----code erreur end----->



  
@include('layoutscotisa.header')






<div class="container-fuid">
  <div class="row">
    <div class="col-md-12">
      <div style="position: relative; text-align: center;">
        <img src="{{ asset('dist/imagecotisa/ibg4.png') }}" alt="" class="img-fluid" style="width: 100%; height:100%">
        <div style="position: absolute;
        position: fixed; top: 68%; left: 50%; transform: translate(-50%, -50%); color: #fff; padding: 70px; font-size: 23px; width: 640px; height: 100px;">
        <a href="{{url('/')}}" class="btn"> <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid" style="width: 15%;position: absolute; left: -35%;top: -190%;"></a>
        </div>

        <a href="{{route('transition')}}"><button class="retour" style="position: absolute;
        position: fixed; top: 90%; left: 90%; 
        transform: translate(-50%, -50%); box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
        <span><i class="fas fa-arrow-left">Retour</i></span></button>
        </a>




<div style="position: absolute; top: 47%; left: 50%; transform: translate(-50%, -50%); 
        background-color: rgba(3, 100, 20, 0.4); color: #fff; padding: 50px; border-radius: 15px; font-size: 20px;width: 550px; height: 490px;">



 <div class="row">
    <div class="col">
    <h3>Type de compte</h3>
    </div>
 </div>


<div class="login-card text-sm">
<form method="POST" action="{{ route('register') }}">
        @csrf

   

  <div class="role-box  col-md-8 m-auto ">
        
      <div class=" row role-option">
          <div class="col">
          <div class="role">
            <input checked="" name="role" id="check-employe" value="employe"  type="radio">
            <label for="check-employe">Employé</label>
          </div>
          </div>
          <div class="col">
    <div class="role">
            <input name="role" id="check-employeur" value="employeur"  type="radio">
            <label for="check-employeur">Employeur</label>
    </div>
      </div>

        <div class="col">
          <div class="role">
            <input name="role" id="check-retraite" value="retraite"  type="radio">
            <label for="check-retraite">Retraité</label>
          </div>
        </div>
     </div>
    <div class="row role-option">
      @unless(App\Models\User::where('role', 'admin')->exists())
        <div class="col">
          <div class="role">
            <input name="role" id="check-admin" value="admin" type="radio">
            <label for="check-admin">Administateur</label>
          </div>
       </div>
 @endunless   
 @unless(App\Models\User::where('role', 'cnss')->exists())
      <div class="col">
          <div class="role">
            <input name="role" id="check-cnss" value="cnss" type="radio">
            <label for="check-cnss">CNSS</label>
          </div>
      </div>
  @endunless


   </div>
</div>








  


    <div class="form-group m-auto">
      <label for="username">Nom d'utilisateur</label><br>
      <input required="" name="name" id="username" type="text" style="border-radius:50px; border:none; width: 100%;">
    </div>
    <div class="form-group m-auto">
      <label for="email">E-mail</label>
      <input required="" name="email" id="email" type="text" style="border-radius:50px; border:none; width: 100%;">
    </div>
    
    <div class="form-group m-auto">
      <label for="matricule">Numéro matricule</label>
      <input required="" name="matricule" id="matricule" type="text" style="border-radius:50px; border:none; width: 100%;">
    </div>


    <div class="form-group m-auto">
      <label for="password">Mot de passe</label>
      <input required="" name="password" id="password" type="password" style="border-radius:50px; border:none; width: 100%;">
    </div>


    <div class="form-group m-auto">
      <label for="password">Confirmer mot de passe</label>
      <input required="" name="password_confirmation" id="password" type="password" style="border-radius:50px; border:none; width: 100%;">
    </div>


       
         <div class="row py-1">
         <div class=" shadow bg-success btn btn text-white">
            <a href=" {{route('login')}}">J'ai un compte</a>
         </div>
         </div>
         <input value="S'inscrire" type="submit" class="col-md-4 text-center btn" 
      style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
       cursor: pointer; position: absolute; top: 95%; left: 50%;
        transform: translate(-50%, -50%); margin: 0 auto;background-color:#E98109;
         color: #fff;"
         onmouseover="this.style.backgroundColor='#FFA500';" 
         onmouseout="this.style.backgroundColor='#E98109';">
  </form>
</div>

  



</div>
       



  
   
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



   

@if ($errors->any())
    <script>
        var errorMessages = @json($errors->all());
        var errorMessage = errorMessages.join('\n');
        alert('Erreurs:\n' + errorMessage);
    </script>
@endif


@include('layoutscotisa.footer')



