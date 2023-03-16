@extends('layoutadmin')

@section('title')
Creation de la fiche d'appel
@endsection

@section('content')
<h1 style="text-align:center" >Création de la fiche d'appel</h1>
<br>
<div class="card" style="width: 25rem; margin-left:auto; margin-right:auto;">
	<div class="card-body">
		<h5 class="card-title">Informations à remplir :</h5>
		<p class="card-text">
			<form method="POST" enctype="multipart/form-data" action={{URL::route('appel.store')}}>
				@csrf
				<div class="form-group">
					<label for="formJour">Jour:</label>
					<select class="form-control" id="formJour" name="jour">
                            <option value="lundi">Lundi</option>
							<option value="mardi">Mardi</option>
							<option value="mercredi">Mercredi</option>
							<option value="jeudi">Jeudi</option>
							<option value="vendredi">Vendredi</option>
							<option value="samedi">Samedi</option>
							<option value="dimanche">Dimanche</option>
					</select>
				</div>
				<br>
				<label for="time">Heure</label>
				<input type="time" id="formHeure" value="08:00" name="heure"/>
				<br><br>
				<div class="form-group">
					<label for="formProfesseur">Professeur:</label>
					<select class="form-control" id="formProfesseur" name="professeur">
						@foreach ($professeurs as $professeur)
                            <option value="{{ $professeur->id}}">{{ $professeur->firstname}} {{ $professeur->name}}</option>
                        @endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="formDiscipline">Discipline:</label>
					<select class="form-control" id="formDiscipline" name="discipline">
						@foreach ($disciplines as $discipline)
                            <option value="{{ $discipline->id}}">{{ $discipline->name}}</option>
                        @endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="formDiscipline">Categorie:</label>
					<select class="form-control" id="formCategorie" name="categorie">
						@foreach ($categories as $categorie)
                            <option value="{{ $categorie->category}}">{{ $categorie->category}}</option>
                        @endforeach
					</select>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Valider</button>
			</form>
		</p>
	</div>
</div>
@endsection