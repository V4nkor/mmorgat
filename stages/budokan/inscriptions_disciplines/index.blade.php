@extends('layoutadmin')

@section('title')
Inscriptions disciplines
@endsection

@section('content')
<div class="container" id="headerlist">
    <div class="row">
		<div class="col-md-7">
			<h1>Inscriptions disciplines</h1>
		</div>
		<div class="col-md-5 " style="margin-top: 1%">
			<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createmodal">Ajouter
				une inscription</button>
			<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteConfirm">Supprimer les
				inscriptions</button>
		</div>
	</div>
</div>	
<div class="container" id="list">
    @if ($inscriptions->count())
    <table class="table table-hover table-striped">
        <thead>
            <tr>

                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Discipline</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inscriptions as $inscription)
            <tr>

                <td>{{ $inscription->adherent_id}}</td>
                <td>test vide</td>
				<td>{{ $inscription->discipline_id}}</td>
				<td><?php /*<a href={{ URL::route('inscriptions_disciplines.show' , $inscription)}}>*/?><button
                            class="btn btn-primary">Voir</button></td>
            </tr>
            @endforeach
        </tbody>

    </table>
    @else
    il n'y a pas d'inscriptions
    @endif
</div>

<!-- Create Modal -->
<div class="modal fade" data-bs-backdrop="static" id="createmodal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" role="document">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une inscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action={{URL::route('inscriptions_disciplines.store')}}>
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <label for="adherent" class="form-label">Adherent</label>
                            <select name="adherent" class="form-select" id="adherent">
                                @foreach ($adherents as $adherent)
                                <option value="{{ $adherent->id}}">{{ $adherent->id}} {{ $adherent->name}} {{ $adherent->firstname}}</option>
                                @endforeach
                            </select>
                        </div>
						<div class="col-md-6">
                            <label for="discipline" class="form-label">Discipline</label>
                            <select name="discipline" class="form-select" id="discipline">
                                @foreach ($disciplines as $discipline)
                                <option value="{{ $discipline->id}}">{{ $discipline->id}} {{ $discipline->name}}</option>
                                @endforeach
                            </select>
</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Confirmer la création de l'inscription</button>
            </div>

        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteConfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="deleteConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmLabel">
                    Supprimer une Inscription
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment supprimer toutes les inscriptions ?
                <br>
                Cette action est irréversible et dois être réfléchi.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <form method="POST" action={{ URL::route('inscriptions_disciplines.deleteAllInscriptions_disciplines')}}>
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