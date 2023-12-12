@include('layoutscotisa.header')
<div class="container mt-5">
        <div class="row">
            <div class="col text-white text-center bg-success">
               <h1>Détails sur l'inscrit</h1>
            </div>
        </div>
        <br>
    
        <table class="table table-striped table-bordered shadow">
            <tr>
                <th>Nom :</th>
                <td>{{ $declarations->nom }}</td>
            </tr>
            <tr>
                <th>Prénom :</th>
                <td>{{ $declarations->prenom }}</td>
            </tr>
            <tr>
                <th>Date de naissance :</th>
                <td>{{ $declarations->date_de_naissance }}</td>
            </tr>
            <tr>
                <th>Sexe :</th>
                <td>{{ $declarations->sexe }}</td>
            </tr>
            <tr>
                <th>Profession :</th>
                <td>{{ $declarations->profession }}</td>
            </tr>
        </table>
    </div>
    <div class="offset-1 col-md-4 py-3 p mt-4">
        <a href="{{ route('liste') }}"><button type="button" class="btn btn-danger">Retour</button></a>
    </div>
    @include('layoutscotisa.footer')