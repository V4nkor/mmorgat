    <body data-spy="scroll" data-target="#menu" data-offset="0">

        <header id="presentation" class="navMargin">
            <div class="jumbotron no-margin opaque2">
                <div class="row no-margin">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="margin-top:20px;">
                        <h1 class="display-4 bahnschrift_title">TP Banque :</i></h1>
                        <p class="lead bahnschrift_text">
                            Ce logiciel a été réalisé avec Visual Studio en C# et utilise les formulaires Windows Form dans le cadre d'un TP.<br> 
                            Il s'agit d'un logiciel back-end qui permet la gestion de comptes bancaires.
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
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="style/image/banque/banque-projet.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Projet Visual Studio</h5>
                                    <p>Voici le projet ouvert sur Visual Studio</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/banque/banque-crediter.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Créditer un compte</h5>
                                    <p>Option qui permet de créditer le compte sélectionné</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="style/image/banque/banque-modifier-client.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block carousel-background rounded_border2">
                                    <h5>Modifier un compte</h5>
                                    <p>Option qui ouvre une nouvelle fenêtre afin de changer le département du client sélectionné</p>
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
                    Apprentissage du code en C#.<br>
                    Création de logiciel sous forme graphique grâce à Windows Forms.<br>
                    Création de logiciel de gestion de données avec sérialisation.<br>
                    Utilisation de la norme de projet MVC.
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
                                    Formulaire gestion :
                                </button>
                            </h2>
    
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="terminale" data-bs-parent="#accordionExample">
                                <div class="accordion-body bahnschrift_text">
                                    <div class="row">
                                        <pre id="appel-index" class="language-clike" style="text-align:left">
                                            <code class="language-clike" style="text-align:left"><xmp>
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Collections;
using System.IO ;
using System.Runtime.Serialization.Formatters.Binary ;
using Banque.Modele;
using Banque.Controleur;

namespace Banque.Vue
{
    [Serializable]
    public partial class Gestion : Form
    {
        public   List<Compte> lstcpt = new List<Compte>();
        public Gestion()
        {
            InitializeComponent();
        }
        private void crediterToolStripMenuItem_Click(object sender, EventArgs e)
        {
            lab.Visible = true;
            lab.Text = "Montant à créditer";
            bouton.Visible = true;
            bouton.Text = "Valider le crédit";
            tb.Visible = true;
        }
        private void debiterToolStripMenuItem_Click(object sender, EventArgs e)
        {
            lab.Visible = true;
            lab.Text = "Montant à débiter";
            bouton.Visible = true;
            bouton.Text = "Valider le débit";
            tb.Visible = true;
        }
        private void bouton_Click(object sender, EventArgs e)
        {
            try
            {
                int i;
                i = lBox.SelectedIndex;
                Compte c = (Compte)lBox.SelectedItem;
                if (bouton.Text == "Valider le crédit")
                {
                    Mgr.crediter(c, Convert.ToDouble(tb.Text));
                }
                if (bouton.Text == "Valider le débit")
                {
                    /*
                    if (!c.debiter(Convert.ToDouble(tb.Text))) { MessageBox.Show("Debit interdit"); }
                    */
                    Mgr.debiter(c, Convert.ToDouble(tb.Text));
                    tb.Clear();
                }
                if (bouton.Text == "Valider le découvert")
                {
                    if (c.GetType().Name == "CompteCourant")
                    {
                        if (!((CompteCourant)c).setDecouv(Convert.ToDouble(tb.Text))) { MessageBox.Show("découvert interdit"); }
                    }
                }
                rafraichirListBox();
            }
            catch (DebitException Ex)
            {
                MessageBox.Show("" + Ex.Message);
            }
            catch (Exception Ex)
            {
                        MessageBox.Show("" + Ex.Message);
            }
        }

        private void découvertToolStripMenuItem_Click(object sender, EventArgs e)
        {
            lab.Visible = true;
            lab.Text = "Montant du nouveau découvert";
            bouton.Visible = true;
            bouton.Text = "Valider le découvert";
            tb.Visible = true;
        }
        private void rafraichirListBox()
        {
            lBox.DataSource = null;
            lBox.DataSource = lstcpt;
            lBox.DisplayMember = "Description";
        }
        private void Gestion_Load(object sender, EventArgs e)
        {
            /*Client cl1 = new Client(1, "Dupont", "toto", "Créteil");
            Client cl2 = new Client(2, "Abdala", "momo", "Cachan");
            Compte c1 = new CompteCourant(12, cl1);
            Compte c2 = new CompteCourant(12, cl1);
            Compte c3 = new CompteEpargne(11, cl2,1.2);
            Compte c4 = new CompteCourant(9, cl1);
            lstcpt.Add(c1);
            lstcpt.Add(c3);
            lstcpt.Add(c4);
            */
            Serialise.chargement();
            lstcpt = Serialise.Lstcpt;
            rafraichirListBox();
        }
        private void clientToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Compte c = (Compte)lBox.SelectedItem;
            Client cl = c.Propriétaire;
            FormClient fc = new FormClient(cl);
            fc.ShowDialog();
            rafraichirListBox();
        }
        private void Gestion_FormClosing(object sender, FormClosingEventArgs e)
        {
            Serialise.sauvegarde(lstcpt);
        }
    }
}                                         
                                            </xmp></code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="accordion-item">
                            <h2 class="accordion-header navMargin" id="personnel">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                    Formulaire modifications :
                                </button>
                            </h2>
    
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                <div class="accordion-body bahnschrift_text">
                                    <div class="row">
                                        <pre id="appel-index" class="language-clike" style="text-align:left">
                                            <code class="language-clike" style="text-align:left">
                                                <xmp>
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using Banque.Modele;

namespace Banque.Vue
{
    public partial class FormClient : Form
    {

        private Client c;
        
        public FormClient(Client unClient)
        {
            InitializeComponent();

            this.c = unClient;
        }

        public FormClient()
        {
            InitializeComponent();

            
        }



        private void FormClient_Load(object sender, EventArgs e)
        {

            tbNum.Text = c.Num.ToString();
            tbNom.Text = c.Nom;
            tbPrenom.Text = c.Prenom;
            tbAdresse.Text = c.Adresse;

        }

        private void button1_Click(object sender, EventArgs e)
        {
            c.Adresse = tbAdresse.Text;
            this.Close();
        }



    }
}                                                            
                                                </xmp>
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header navMargin" id="personnel">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                        Classes Objets :
                                    </button>
                                </h2>
        
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bahnschrift_text">
                                        <div class="row">
                                            <ul>
                                                <li> 
                                                    Client :
                                                    <pre id="appel-index" class="language-clike" style="text-align:left">
                                                        <code class="language-clike" style="text-align:left">
                                                            <xmp>
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Banque.Modele
{
        [Serializable]
        public class Client
        {
            private int num;
            private string nom;
            private string prenom;
            private string adresse;
            private List<Compte> comptes = new List<Compte>();
            public Client(int num, string nom, string prenom, string ad)
            {
                this.num = num;
                this.nom = nom;
                this.prenom = prenom;
                this.adresse = ad;
            }
        public string Nom { get => nom; }
        public string Prenom { get => prenom; }
        public string Adresse { get => adresse; set => adresse = value; }
        public int Num { get => num;  }
        public override string ToString()
        {
            return (this.Num + "   " + this.Nom + " " + this.prenom + " " + this.Adresse);
        }
    }
}
                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li>
                                                <li> 
                                                    Compte :
                                                    <pre id="appel-index" class="language-clike" style="text-align:left">
                                                        <code class="language-clike" style="text-align:left">
                                                            <xmp>
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
namespace Banque.Modele
{
    [Serializable]
    public abstract class Compte
    {
        protected int num;
        protected Client proprio;
        private double solde = 0;
        public int Num { get => num; }
        public Compte(int n, Client c)
        {
            this.num = n;
            this.solde =0;
            this.proprio = c;
        }
        public virtual string Description
        {
            get => "Compte n° " + num + " " + " Client :  " + proprio + " " + " solde : " + solde + " €" ; 
        }
        public Client Propriétaire
        {
            get { return proprio; }
        }

        public double Solde { get => solde; set => solde = value; }
        public void crediter(double mont)
        {
            if (mont >= 0) solde = solde + mont;
            else throw (new Exception("Pas de valeur negative en entree"));
            solde = solde+mont;
        }
        public abstract void debiter(double mont);
    }
}                                                                
                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li>
                                                <li> 
                                                    CompteCourant :
                                                    <pre id="appel-index" class="language-clike" style="text-align:left">
                                                        <code class="language-clike" style="text-align:left">
                                                            <xmp>
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Banque.Modele
{
    [Serializable]
    public class CompteCourant : Compte
    {
        private double decouv = 0;
        public CompteCourant(int n, Client c) : base (n,c)
        {
        }
        public bool setDecouv(double value)
        {
            bool res = false;
            if (this.Solde > -value)
            {
                decouv = value;
                res = true;

            }
            else
            {
                // Propager une exception

            }
            return (res);
        }
        public double Decouv
        {
            get => decouv;
            set
            {
                if (this.Solde >= (-value)) { decouv = value; }

                else
                {
                    // Propager une exception
                }
            }
        }
        public override void debiter(double mont)
        {
            if (Solde - mont < -decouv)
            {
                throw (new DebitException("impossible de débiter avec ce montant"));
            }
            else
            {
                Solde = Solde - mont;
            }
        }
        public override string Description
        {
            get => base.Description + " - decouvert : " + this.decouv;
        }
    }
}                                                                
                                                            </xmp>
                                                        </code>
                                                    </pre>
                                                </li><li> 
                                                    CompteEpargne :
                                                    <pre id="appel-index" class="language-clike" style="text-align:left">
                                                        <code class="language-clike" style="text-align:left">
                                                            <xmp>
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Banque.Modele
{
    [Serializable]
    public class CompteEpargne : Compte
    {
                static double taux;
        public CompteEpargne(int n, Client c, double unTaux) : base(n, c)
        {
            CompteEpargne.taux = unTaux;
        }
        public override void debiter(double mont)
        {
            if (Solde - mont < 0)
            {
                throw (new DebitException("impossible de débiter avec ce montant sur un compte epargne"));
            }
            else
            {
                Solde = Solde - mont;
            }
        }
        public override string Description
        {
            get => base.Description + " taux : " + CompteEpargne.taux ;
        }
    }
}                                                                
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne" style="font-size:x-large;">
                                        Tests unitaires :
                                    </button>
                                </h2>
        
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="personnel" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bahnschrift_text">
                                        <div class="row">
                                            <pre id="appel-index" class="language-clike" style="text-align:left">
                                                <code class="language-clike" style="text-align:left">
                                                    <xmp>
using Microsoft.VisualStudio.TestTools.UnitTesting;
using System;
using Banque.Modele;

namespace UnitTestBanqueGraphique
{
    [TestClass]
    public class UnitTest1
    {
        private double unCredit;
        private double unDecouvert;
        private double unDebit;
        private int unNum;
        private string unNom;
        private string uneAdresse;
        private string unPrenom;
        Client unClient;
        CompteCourant c1;
        CompteEpargne c2;
        [TestMethod]
        public void TestMethod1()
        {
            unNum = 1;
            unNom = "Morgat";
            unPrenom = "Mathieu";
            uneAdresse = "27 Rue du test";
            unClient = new Client(unNum,unNom,unPrenom,uneAdresse);
            c1 = new CompteCourant(11,unClient);
            c2 = new CompteEpargne(12,unClient,200);
            c1.crediter(200);
            Assert.AreEqual(200, c1.Solde,"erreur");
            c1.Decouv = 500;
            Assert.AreEqual(500,c1.Decouv,"erreur");
            c1.debiter(100);
            Assert.AreEqual(100 ,c1.Solde ,"erreur");
            c2.crediter(200);
            Assert.AreEqual(200, c2.Solde, "erreur");
            c2.debiter(100);
            Assert.AreEqual(100, c2.Solde, "erreur");
        }
        [TestMethod]
        public void TestMethod2()
        {
            unNum = 1;
            unNom = "Morgat";
            unPrenom = "Mathieu";
            uneAdresse = "27 Rue du test";
            unClient = new Client(unNum, unNom, unPrenom, uneAdresse);
            c1 = new CompteCourant(11, unClient);
            var ex = Assert.ThrowsException<Exception>(() => c1.crediter(-50));
            Assert.AreEqual("Pas de valeur negative en entree", ex.Message);
        }
    }
}                                                        
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