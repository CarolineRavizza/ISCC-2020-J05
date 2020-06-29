<!DOCTYPE html>
<html>
    <head>
        <title>Summer Code Camp</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style/vitrine.css">
    </head>

    <body>

        <!-- L'en-tête -->

            <header>
                <div><?php include('navigation.php');?></div>
                <?php include('header.php');?>
            </header>

            <section class="content2">
                <h2>Contact</h2>
                <form method="post" action="traitement.php">
                    <p>
                        <label>Nom</label> : <input class="hauteur" type="text" name="nom" id="nom" autofocus required/>
                    </p>
                    <p>
                        <label>Prénom</label> : <input class="hauteur" type="text" name="prénom" id="prénom" required>
                    </p>
                    <p>
                        <label>E-mail</label> : <input class="border" type="text" name="e-mail" id="e-mail" required>
                    </p>
                    <p>
                        <label>Message : <br/></label> <input class="large" type="text" name="message" id="message" required></p>
                    <p>
                        <input type="button" value="Envoyer">
                    </p>
                </form>
            </section>
    </body>
        <!-- Pied de page -->
        <footer><?php include('footer.php');?></footer>
</html>