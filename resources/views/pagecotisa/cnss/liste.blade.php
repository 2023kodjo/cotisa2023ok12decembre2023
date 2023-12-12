@include('layoutscotisa.header')
<!-- Content Wrapper. Contains page content -->
<div class="container-fuid">
  <section style="height: 40px;"></section>
  <section>
    <div class="row">
      <div class="col-md-2" style="margin-left: 9%;">
        <a href="{{url('/')}}" class="btn my-1">
          <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid"
            style="z-index: 50;width: 8%; position:fixed; top: 90px;">
        </a>
      </div>
    </div>
  </section>
  <section>
    <div class="row ">
        <img src="{{ asset('dist/imagecotisa/LOGO CNSS.png') }}" alt="png"
        style=" width:10%; height:10%; margin: auto; border-radius: 100px;;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
    </div>
  </section>
  <section>
    <div class="row py-2">
           <div class="col-md-3" style="color: red; margin: auto; text-align: center;">
             <b style="font-size:18px">Caisse nationale de sécurité sociale</b>
           </div>
    </div>
  </section>

  <!-- ----------------- -->




  <section>


    <div class="container">
        <h1 class="bg-success text-center shadow">Liste des inscrits à la CNSS</h1>
        <table class="table table-striped table-bordered shadow fw-bold " id="tableau">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Entreprise</th>
                    <th>Employé</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Genre</th>
                    <th>Profession</th>
                    <th>Validation</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $id=1;
                @endphp
                        @foreach($declarations as $declaration)
                            @if ($declaration->validation === 'valider')
                                <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $declaration->entreprise }}</td>
                                    <td>{{ $declaration->nom }}</td>
                                    <td>{{ $declaration->prenom }}</td>
                                    <td>{{ $declaration->date_de_naissance }}</td>
                                    <td>{{ $declaration->genre }}</td>
                                    <td>{{ $declaration->profession }}</td>
                                    <td>{{ $declaration->validation }}</td>
                                    <td>
                                        {{-- <a href="" class="btn btn-info d-inline"><i class="fas fa-eye" style="color: dark;"> Détails</i></a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
            </tbody>
        </table>
    </div>

</section>


  <!-- ---------------- -->
  <section style="height: 150px;"></section>
</div>

@include('layoutscotisa.footer')
