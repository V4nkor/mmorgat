@extends('layoutadmin')

@section('title')
Creation de la fiche d'appel
@endsection

@section('content')
Le <?php echo($jour);?> <br>
<?php var_dump($cour);?>
<?php 
echo($heureDebut);
if(isset($cour))
{
	echo("Horaire: {{ $cour->heureDebut}}-{{ $cour->heureFin}}--><br>");
}
else
{
	echo("Cours non trouve<br>");
}
var_dump($test);
echo('<br>');
?>
Avec le professeur {{ $professeur->firstname}} {{ $professeur->name}} <br>
{{ $discipline->name}}
@endsection
