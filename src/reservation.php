<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/coursweb/Projet_Integrateur_KevinBouhalassa/">
    <title>Livre Éclat</title>
    <link rel="stylesheet" href="src/resources/css/style.css">
</head>

<body>
    <header>
        <section id="navmobile">
            <section class="nav">
                <div id="logo">
                    <img src="src/resources/images/LivrÉclat.png" alt="Livre Éclat">
                </div>
                <div hidden>
                    <h1>Livre Éclat</h1>
                </div>

                <div class="navbar">
                    <ul>
                        <li><a href="principale.php">Accueil</a></li>
                        <li><a href="src/livres.php">Livres</a></li>
                    </ul>
                </div>
            </section>
            <section class="navside">
                <div class="facebook">
                    <p>Suivez-nous sur Facebook pour connaître les nouveautés et promotions</p>
                    <a href="principale.html"><img src="src/resources/images/facebook.256x256.png" width="47.43"
                            height="47.43" alt="Lien facebook Livre Éclat"></a>
                </div>
                <div id="lang">
                    <p>English</p>
                </div>
                <div class="mode">
                    <p>Mode Blanc</p>
                </div>
            </section>
        </section>
        <section id="navbarmob">
            <ul>
                <li><a href="principale.php">Accueil</a></li>
                <li><a href="./src/livres.php">Livres</a></li>
            </ul>
        </section>
    </header>
    <main id="pageReservation">
        <section class="reservation">
            <div class="livres">
                <h3 class="titre">Collection Harry Potter</h3>
                <img class="img-livre" src="./src/resources/images/CollectionHarryPotter.jpg"
                    alt="Harry Potter">
                <div class="Infos">
                    <p class="prix">39.99$</p>
                    <p class="disponibilité">Disponible</p>
                </div>
                <p class="btnSynopsis"></p>
            </div>
        </section>
        <div id="resume">
            <h3>Synopsis</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, ut veritatis reprehenderit voluptatem
                est quos distinctio dolores autem ea dicta tempore, accusantium recusandae tempora velit impedit <br>
                deleniti repellat! Cupiditate, blanditiis!</p>
        </div>
    </section>
    <form id="formulaire" action="./src/Confirmation.php">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <label for="courriel">Courriel</label>
        <input type="text" id="courriel" name="courriel">
        <small class="ErrorMessage">Error Message</small>
        <button type="submit" id="envoi" name="envoi">Réservez</button>
    </form>
    </main>
    <footer>
        <section id="footer">
            <div id="adresse">
                <h4>Adresse:</h4>
                <p>50 rue du blois <br>
                    Montreal, H2T 1P1

                <h4>Heures d'ouvertures:</h4>
                <p>Lundi au vendredi de 9h à 20h<br>
                    Samedi et dimanche de 10h à 16h</p>

                <p>514-555-5555 </p>

                <p><a href="mailto:info@livreeclat.com">info@livreeclat.com</a></p>
            </div>
            <div id="politique">
                <h4>Politique de remboursement:</h4>

                <p>Remboursement ou échange dans les 30 jours suivant l'achat. <br>
                    Le produit ne doit pas être endommagé.
                </p>
            </div>

        </section>
        <div id="auteur">
            <p>©Tout droits réservés - Kevin Bouhalassa</p>
        </div>
    </footer>
    <script src="src/resources/javascript/script.js"></script>
</body>
</body>

</html>