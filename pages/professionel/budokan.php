    <body data-spy="scroll" data-target="#menu" data-offset="0">

        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2" style="width:fit-content" >
                        <img src="style/image/budokan/budokan.png" width="200" height="200" style="margin-left:50px;margin-top:50px;margin-bottom:50px;margin-right:50px">
                    </div>
                    <div class="col-md-7" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">Budokan club Thiais :</i></h1>
                        <p class="lead bahnschrift_text">
                            Le sujet du stage consistait à améliorer le site d’une association sportive. <br>
                            J'ai donc réalisé des onglets supplémentaires pour la page administrateur du site avec les fonctionnalités suivantes :
                            <ul class="bahnschrift_text">
                                <li>Page d'appel. </li>
                                <li>Suivi des inscriptions par disciplines.</li>
                                <li>Planning des cours.</li>
                                <li>Avec pour ces onglets les fonctions d’édition, modification et suppression des différents éléments stockés dans la base de données.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div id="site" style="margin-top:30px;height:65vh">
            <h2 class="bahnschrift_title" style="padding-left:30px;margin-bottom: 0px;color:rgb(219, 219, 219);width: 65%;">Éléments du site :</h2><br>
            <div class="row no-margin">
                <div class="col-md-2" style="margin-bottom:20px;">
                </div>
                <div class="col-md-8" style="margin-bottom:20px;color:rgb(219, 219, 219);width: 65%;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="style/image/budokan/budokan-admin.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Page admin</h5>
                                    <p>Page admin crée par les élèves de 2nde année</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/budokan/budokan-appel.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Page appel</h5>
                                    <p>Page admin permettant de créer une fiche d'appel grâce à un formulaire</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/budokan/budokan-cours.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Page cours</h5>
                                    <p>Page admin permettant de gérer les cours du club</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/budokan/budokan-inscrip.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Page inscriptions</h5>
                                    <p>Page admin permettant de gérer les inscriptions aux disciplines</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> 

        <div id="competences" class="opaque2 navMargin" style="margin-top:30px;">
            <h2 class="bahnschrift_title" style="margin-left:30px;margin-top:-40px">Compétences :</h2>
            <div class="row bahnschrift_text no-margin">
                <div class="col-md-1">
                </div>
                <div class="col-md-8" style="margin-bottom:20px;width: 65%;">
                    Utilisation de frameworks et analyse de code complexe.
                </div>
            </div>
            <br>
        </div>

        <div id="code" class="navMargin">
            <br>
            <h2 style="margin-left:30px;margin-right:auto;color:rgb(219, 219, 219);width: 65%;">Snippets de code :</h2><br>
            <div class="row no-margin" style="margin-top:-20px;">
                <div class="col-md-1" ></div>
                <div class="col-md-10" >
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item" style="padding-top:15px">
                            <h2 class="accordion-header navMargin" id="terminale">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                    Page appel :
                                </button>
                            </h2>
    
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="terminale" data-bs-parent="#accordionExample">
                                <div class="accordion-body bahnschrift_text">
                                    <div class="row">
                                        <ul>
                                            <li>
                                                index.blade.php :
                                                <pre id="appel-index" data-dependencies="html" class="language-html" style="text-align:left">
                                                    <code class="language-html" style="text-align:left"><xmp>
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
                                                    </xmp></code>
                                                </pre><br>
                                            </li>
                                            <li>
                                                create.blade.php :
                                                <pre id="appel-form" data-dependencies="html" class="language-html" style="text-align:left">
                                                    <code class="language-html" style="text-align:left"><xmp>
@extends('layoutadmin')
@section('title')
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
                                                    </xmp></code>
                                                </pre><br>
                                            </li>
                                            <li> 
                                                index.blade.php :
                                                <pre id="appel-index" data-dependencies="php" class="language-php" style="text-align:left">
                                                    <code class="language-php" style="text-align:left">
                                                        <xmp>
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
                                                        </xmp>
                                                    </code>
                                                </pre>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="accordion-item">
                            <h2 class="accordion-header navMargin" id="personnel">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                    Page inscriptions :
                                </button>
                            </h2>
    
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                <div class="accordion-body bahnschrift_text">
                                    <div class="row">
                                        <ul>
                                            <li> 
                                                index.blade.php :
                                                <pre id="appel-index" data-dependencies="html" class="language-html" style="text-align:left">
                                                    <code class="language-html" style="text-align:left">
                                                        <xmp>
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
                                                        </xmp>
                                                    </code>
                                                </pre>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item" style="padding-bottom:15px">
                                <h2 class="accordion-header navMargin" id="personnel">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                        Page cours :
                                    </button>
                                </h2>
        
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bahnschrift_text">
                                        <div class="row">
                                            <ul>
                                                <li> 
                                                    index.blade.php :
                                                    <pre id="appel-index" data-dependencies="html" class="language-html" style="text-align:left">
                                                        <code class="language-html" style="text-align:left">
                                                            <xmp>
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
                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li>
                                                <li> 
                                                    show.blade.php :
                                                    <pre id="appel-index" data-dependencies="html" class="language-html" style="text-align:left">
                                                        <code class="language-html" style="text-align:left">
                                                            <xmp>
@extends('layoutadmin')

@section('title')
Consulter un cours
@endsection

@section('content')
<div class="container" id="headerlist">
    <div class="row">
        <div class="col-md-6">
            <h1>Détail du cours</h1>
        </div>
    </div>
</div>
<?php
var_dump($ajout);
?>
@endsection
                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>