@extends('layoutadmin')

@section('title')
Cours
@endsection

@section('content')
<div class="container" id="headerlist">
    <div class="row">
        <div class="col-md-8">
            <h1>Cours</h1>
        </div>
		<div class="col-md-4 " style="margin-top: 1%">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createmodal">Ajouter
                un cours</button>
			<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteConfirm">Supprimer tout les
                cours</button>
        </div>
    </div>
</div>
<div class="container" id="list">
    <?php 
	if (isset($ajout)){
	var_dump($ajout);
	}
	else{
	echo("rien");
	}
	?>
	@if ($cours->count())
    <table class="table table-hover table-striped">
        <thead>
            <tr>

                <th scope="col">Jour</th>
                <th scope="col">Heure Debut</th>
                <th scope="col">Heure Fin</th>
                <th scope="col">Professeur</th>
                <th scope="col">Groupe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cours as $cour)
            <tr>
                <td>{{ $cour->jour }}</td>
                <td>{{ $cour->heureDebut }}</td>
                <td>{{ $cour->heureFin }}</td>
                <td>{{ $cour->professeur_id}}</td>
                <td>{{ $cour->groupe_id }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    @else
    il n'y a pas de cours
    @endif
</div>

<!-- Create Modal -->
<div class="modal fade" data-bs-backdrop="static" id="createmodal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un cours</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action={{URL::route('cours.store')}}> <!-- {{URL::route('cours.store')}} -->
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="jour" class="form-label">Jour</label>
                            <select name="jour" class="form-select" id="jour">
                                <option value="lundi">Lundi</option>
								<option value="mardi">Mardi</option>
								<option value="mercredi">Mercredi</option>
								<option value="jeudi">Jeudi</option>
								<option value="vendredi">Vendredi</option>
								<option value="samedis">Samedi</option>
								<option value="dimanche">Dimanche</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="heureDebut" class="form-label">Heure de debut</label>
                            <input type="text" name="heureDebut" class="form-control" id="heureDebut" placeholder="00:00"
                                required>
                        </div>

                        <div class="col-md-4">
                            <label for="heureFin" class="form-label">Heure de fin</label>
                            <input type="text" name="heureFin" class="form-control" id="heureFin" placeholder="00:00"
                                required>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <label for="prof" class="form-label">Professeur</label>
                            <select name="prof" class="form-select" id="professeur_id">
                                @foreach ($professeurs as $professeur)
                                <option value="{{ $professeur->id}}">{{ $professeur->id}} {{ $professeur->name}} {{ $professeur->firstname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="groupe" class="form-label">Groupe</label>
                            <select name="groupe" class="form-select" id="groupe_id">
                                @foreach ($groupes as $groupe)
                                <option value="{{ $groupe->id}}">{{ $groupe->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
            </div
        </div>
		<div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Confirmer la création du cours</button>
        </div>
    </div>
    </form>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteConfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="deleteConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmLabel">
                    Supprimer un cours
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment supprimer tout les cours ?
                <br>
                Cette action est irréversible et dois être réfléchi.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <form method="POST" action={{ URL::route('cours.deleteAllCours')}}>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-success"
                        onCLick="return confirm('Êtes vous sûr ?')">Confirmer</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection