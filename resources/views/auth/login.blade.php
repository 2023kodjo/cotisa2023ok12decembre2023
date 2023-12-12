


@include('layoutscotisa.header')


<section style="height: 58px;"></section>


<div class="container-fuid">
  <div class="row">
    <div class="col-md-12">
      <div style="position: relative; text-align: center;">
        <img src="{{ asset('dist/imagecotisa/ibg2h.png') }}" alt="" class="img-fluid" style="width: 100%; height:100%">
        <div style="position: absolute;
        position: fixed; top: 68%; left: 50%; transform: translate(-50%, -50%); color: #fff; padding: 70px; font-size: 23px; width: 640px; height: 100px;">
        <a href="{{url('/')}}" class="btn"> <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid" style="width: 15%;position: absolute; left: -35%;top: -190%;"></a>
        </div>
<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
        background-color: rgba(3, 100, 20, 0.4); color: #fff; padding: 35px; border-radius: 15px; font-size: 18px;width: 630px;">



<!-- ----------------------------- -->
@if ($errors->any())
<div class="alert alert-danger d-flex align-items-center m-auto shadow col-md-10" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div class="m-auto">
        
            @foreach ($errors->all() as $error)
              {{ $error }}
            @endforeach
        
  </div>
</div>

@endif
<!-- --------------------------- -->

<div class="login-card mb-3">
<form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="form-group m-auto">
      <label for="email">Email</label><br>
      <input required="" name="email" id="email" type="email" style="border-radius:50px; border:none; width: 100%;">
    </div>
    <div class="form-group m-auto">
      <label for="password">Mot de passe</label>
      <input required="" name="password" id="password" type="password" style="border-radius:50px; border:none; width: 100%;">
    </div>
    
    <div class="block ">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Enregistrer mot de passe') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="text-white underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif <br>
            @if (Route::has('register'))
                <a class=" text-white underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                    {{ __( 'Pas de compte?') }}
                </a>
            @endif 
        </div>
        <br>

      <input value="Se connecter" type="submit" class="col-md-4 text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; position: absolute; top: 85%; transform: translate(-50%, -50%); margin: 0 auto;background-color:#E98109; color: #fff;"
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



<!-- <div class="row">
        <div class="col-md-12">
        <img src="{{asset('dist/imagecotisa/ibg1.png')}}" alt="" style="width:100%;" />
        </div>
    </div> -->



    <!-- <section class="container">
  <header>Registration Form</header>
  <form class="form" action="#">
      <div class="input-box">
          <label>Full Name</label>
          <input required="" placeholder="Enter full name" type="text">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input required="" placeholder="Enter phone number" type="telephone">
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input required="" placeholder="Enter birth date" type="date">
          </div>
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio">
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-other" type="radio">
            <label for="check-other">Prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input required="" placeholder="Enter street address" type="text">
        <div class="column">
          <div class="select-box">
            <select>
              <option hidden="">Country</option>
              <option>USA</option>
              <option>UK</option>
              <option>Germany</option>
              <option>Japan</option>
            </select>
          </div>
        <input required="" placeholder="Enter your city" type="text">
        </div>
      </div>
      <button>Submit</button>
  </form>
</section> -->


<a href="{{route('transition')}}"><button class="retour" style="position: absolute;
        position: fixed; top: 90%; left: 90%; 
        transform: translate(-50%, -50%); box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
        <span><i class="fas fa-arrow-left">Retour</i></span></button>
        </a>





        <script>
 const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
</script>


@include('layoutscotisa.footer')


