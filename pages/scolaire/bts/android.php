    <body data-spy="scroll" data-target="#menu" data-offset="0">
        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">Android Studio :</i></h1>
                        <p class="lead bahnschrift_text">
                            Ce TP consistait à adapter le site SicilyLines en une application de réservation de traversées en bateau.
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div id="site" style="margin-top:30px;height:85vh">
            <h2 class="bahnschrift_title" style="padding-left:30px;margin-bottom: 0px;color:rgb(219, 219, 219);width: 65%;">Images du logiciel :</h2><br>
            <div class="row no-margin">
                <div class="col-md-2" style="margin-bottom:20px;">
                </div>
                <div class="col-md-8" style="margin-bottom:20px;color:rgb(219, 219, 219);width: 65%;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="style/image/android/android-project.png" class="d-block w-100" style="max-height:750px;" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Projet Android Studio</h5>
                                    <p>Voici le projet ouvert sur Android Studio</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/logos/placeholder-image.png" class="d-block w-100" style="max-height:750px;" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Application sur téléphone</h5>
                                    <p>Voici l'application ouverte sur mon téléphone personnel, afin de tester son bon fonctionnement</p>
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
                    Apprentissage du développement Android sous Java avec Android Studio.<br>
                    Utilisation de XML afin de réaliser des interfaces.<br>
                    Gestion des activités Android avec redirections et transferts de variables.
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
                                    Page d'accueil :
                                </button>
                            </h2>
    
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="terminale" data-bs-parent="#accordionExample">
                                <div class="accordion-body bahnschrift_text">
                                    <div class="row">
                                        <ul>
                                            <li> 
                                                activity_main.xml :
                                                <pre id="appel-index" class="language-xml" style="text-align:left">
                                                    <code class="language-xml" style="text-align:left">
                                                        <xmp>
<?xml version="1.0" encoding="utf-8"?>
<androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity">

    <TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Bienvenue sur l'application SicilyLines"
        android:textSize="20sp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintHorizontal_bias="0.493"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent"
        app:layout_constraintVertical_bias="0.144"
        tools:ignore="HardcodedText" />

    <ImageView
        android:id="@+id/imageView"
        android:layout_width="130dp"
        android:layout_height="116dp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintHorizontal_bias="0.498"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent"
        app:layout_constraintVertical_bias="0.26"
        app:srcCompat="@drawable/ic_action_name"
        tools:ignore="ContentDescription" />

    <TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Connectez-vous pour acceder a l'espace client, \n ou creez un compte :"
        android:textAlignment="center"
        android:textSize="15sp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintHorizontal_bias="0.494"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent"
        app:layout_constraintVertical_bias="0.45"
        tools:ignore="HardcodedText" />

    <Button
        android:id="@+id/btnConnect"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="@string/se_connecter"
        android:onClick="bConnect"
        app:backgroundTint="#2661bf"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintHorizontal_bias="0.498"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent"
        app:layout_constraintVertical_bias="0.686" />

    <Button
        android:id="@+id/btnRegister"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="@string/creer_un_compte"
        android:onClick="bRegister"
        app:backgroundTint="#2661bf"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintHorizontal_bias="0.497"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent"
        app:layout_constraintVertical_bias="0.565" />

</androidx.constraintlayout.widget.ConstraintLayout>
                                                        </xmp>
                                                    </code>
                                                </pre>
                                            </li>
                                            <li> 
                                                MainActivity.java :
                                                <pre id="appel-index" class="language-clike" style="text-align:left">
                                                    <code class="language-clike" style="text-align:left">
                                                        <xmp>
package com.example.sicilylines;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity
{
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void bRegister(View view) {
        Intent intentEnvoyer = new Intent(this, CreerCompteActivity.class);
        startActivity(intentEnvoyer);
    }

    public void bConnect(View view) {
        Intent intentEnvoyer = new Intent(this, ConnexionActivity.class);
        startActivity(intentEnvoyer);
    }
}
                                                        </xmp>
                                                    </code>
                                                </pre>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="accordion-item">
                            <h2 class="accordion-header navMargin" id="personnel">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                    Créer Compte :
                                </button>
                            </h2>
    
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                <div class="accordion-body bahnschrift_text">
                                    <div class="row">
                                        <ul>
                                            <li> 
                                                activity_creer_compte.xml :
                                                <pre id="appel-index" class="language-xml" style="text-align:left">
                                                    <code class="language-xml" style="text-align:left">
                                                        <xmp>

                                                        </xmp>
                                                    </code>
                                                </pre>
                                            </li>
                                            <li> 
                                                CreerCompteActivity.java :
                                                <pre id="appel-index" class="language-clike" style="text-align:left">
                                                    <code class="language-clike" style="text-align:left">
                                                        <xmp>

                                                        </xmp>
                                                    </code>
                                                </pre>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header navMargin" id="personnel">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                        Connexion :
                                    </button>
                                </h2>
        
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bahnschrift_text">
                                        <div class="row">
                                            <ul>
                                                <li> 
                                                    activity_connexion.xml :
                                                    <pre id="appel-index" class="language-xml" style="text-align:left">
                                                        <code class="language-xml" style="text-align:left">
                                                            <xmp>

                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li>
                                                <li> 
                                                    ConnexionActivity.java :
                                                    <pre id="appel-index" class="language-clike" style="text-align:left">
                                                        <code class="language-clike" style="text-align:left">
                                                            <xmp>

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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                        Compte :
                                    </button>
                                </h2>
        
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bahnschrift_text">
                                        <div class="row">
                                            <ul>
                                                <li> 
                                                    activity_compte.xml :
                                                    <pre id="appel-index" class="language-xml" style="text-align:left">
                                                        <code class="language-xml" style="text-align:left">
                                                            <xmp>

                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li>
                                                <li> 
                                                    CompteActivity.java :
                                                    <pre id="appel-index" class="language-clike" style="text-align:left">
                                                        <code class="language-clike" style="text-align:left">
                                                            <xmp>

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
                            <div class="accordion-item" style="padding-bottom:15px">
                                <h2 class="accordion-header navMargin" id="personnel">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                        Classe Objet Compte :
                                    </button>
                                </h2>
        
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bahnschrift_text">
                                        <div class="row">
                                            Compte.java :
                                            <pre id="appel-index" class="language-clike" style="text-align:left">
                                                <code class="language-clike" style="text-align:left">
                                                    <xmp>

                                                    </xmp>
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>