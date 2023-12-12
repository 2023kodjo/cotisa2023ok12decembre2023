@if(Auth::user()->role === 'admin')
    @include('layoutscotisa.headeradmin')
    @else
    @include('layoutscotisa.header')
@endif
<section style="height:100px;"></section>
<section>


    <div class="container">
        <h1 class="bg-success text-center shadow">Liste des Déclarés à la CNSS</h1>
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
                    @if(Auth::user()->role === 'admin' || Auth::user()->role === 'employeur')
                    <th>Validation</th>
                    @endif
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $id=1;
                @endphp

                @if(Auth::user()->role === 'employeur')
                    @foreach($mesemployes as $mesemploye)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $mesemploye->entreprise }}</td>
                        <td>{{ $mesemploye->nom }}</td>
                        <td>{{ $mesemploye->prenom }}</td>
                        <td>{{ $mesemploye->date_de_naissance }}</td>
                        <td>{{ $mesemploye->genre }}</td>
                        <td>{{ $mesemploye->profession }}</td>
                        <td>{{ $mesemploye->validation }}</td>
                        <td>
                            {{-- <a href="" class="btn btn-info d-inline"><i class="fas fa-eye"> Détails</i></a> --}}
                            <a href="{{route('modifier', $mesemploye->id)}}" class="btn btn-warning d-inline"><i class="fas fa-pencil-alt"> Editer</i></a>
                            <a class="btn btn-danger d-inline" href="{{route('supprimer2', $mesemploye->id)}}"
                             onclick="return confirm('Cotisa exige une confirmation par OK!')"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    @if(Auth::user()->role === 'admin')
                        @foreach($declarations as $declaration)
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
                                    {{-- <a href="" class="btn btn-info d-inline"><i class="fas fa-eye"> Détails</i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($declarations as $declaration)
                            @if ($declaration->validation !== 'valider')
                                <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $declaration->entreprise }}</td>
                                    <td>{{ $declaration->nom }}</td>
                                    <td>{{ $declaration->prenom }}</td>
                                    <td>{{ $declaration->date_de_naissance }}</td>
                                    <td>{{ $declaration->genre }}</td>
                                    <td>{{ $declaration->profession }}</td>
                                    <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            {{-- <a href="" class="btn btn-info d-inline"><i class="fas fa-eye"> Détails</i></a> --}}
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{route('modifier', $declaration->id)}}" class="btn btn-warning d-inline"><i class="fas fa-pencil-alt"> Editer</i></a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="" class="btn btn-danger d-inline">Rejeter</a>
                                        </div>
                                        <div class="col-md-3">
                                            <form action="{{ route('validation', ['userId' => $declaration->id]) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="validation" value="valider">
                                                <button class="btn btn-success d-inline" type="submit" style="position:relative; top: -5px;">Valider</button>
                                            </form>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                @endif
            </tbody>
        </table>
    </div>

</section>

<section style="height:250px;"></section>
@include('layoutscotisa.footer')
