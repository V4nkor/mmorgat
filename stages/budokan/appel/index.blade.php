@extends('layoutadmin')

@section('title')
Fiche d'appel
@endsection

@section('content')

<div class="container" id="headerlist">
    <div class="row">
        <div class="col-md-10">
            <h1>Fiche d'appel</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-top: 1%">
        <div class="col-md-4">
			<a href={{ URL::route('appel.create')}}><button
				class="btn btn-primary">Créer la fiche d'appel</button>
		</div>
	</div>
</div>

@endsection