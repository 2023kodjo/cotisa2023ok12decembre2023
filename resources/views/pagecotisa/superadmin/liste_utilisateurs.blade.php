@include('layoutscotisa.headeradmin')
<section style="height: 85px;"></section>
<section>
    <div class="container">
        <h1>Liste des Utilisateurs</h1>
        <table class="table table-striped table-bordered shadow fw-bold" id="tableau">
            <thead>
                <tr class="bg-success">
                    <th>ID</th>
                    <th>Rôle</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Matricule</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $id = 1;
                @endphp
                @foreach($users as $user)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->matricule }}</td>
                        <td>
                            {{-- <a href="#" class="btn btn-info d-inline"><i class="fas fa-eye"> Détails</i></a> --}}
                            <a class="btn btn-danger d-inline" href="{{route('supprimer', $user->id)}}" onclick="return confirm('Cotisa exige une confirmation par OK!')">
                            <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>

<section style="height: 50px;"></section>

@include('layoutscotisa.footer')
