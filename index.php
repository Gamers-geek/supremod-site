<html>
    <head>
        <title>Supremod - Site Officiel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./content/css/style.css">
        <script defer src="content/js/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
    <body>
        <header>
            <div id="header"></div>
        </header>
        <section class="hero">
            <div class="hero-body">
              <div class="container">
                <br><br><br>
                <h1 class="title">
                    Supremod
                </h1>
                <h2 class="subtitle">
                    Supremod est un serveur Minecraft Moddé, avec un total de 20 mods. Partez à l'aventure sur notre serveur !
                </h2>
              </div>
              <br><br>
                <div class="content has-text-centered">
                  <a href="./about.html">
                    <button class="button">
                        <span class="icon">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span>
                            Voir plus
                        </span>
                    </button>
                  </a>
                  <a href="https://discord.gg/TxuPV6X" target="_blank">
                    <button class="button">
                        <span class="icon">
                            <i class="fab fa-discord"></i>
                        </span>
                        <span>
                            Discord
                        </span>
                    </button>
                    </a>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <br>
            </section>

            <br>

            <article class="message is-info" id="betaI">
                <div class="message-header">
                  Information
                  <!--<button class="delete"></button>-->
                </div>
                <div class="message-body">
                  Le serveur n'est pas encore ouvert ! Une bêta est bientôt prévue, mais les places sont très limités !
                </div>
              </article>


            <!--<span id="more">Plus</span>-->
              <nav class="level is-mobile">
                <div class="level-item has-text-centered">
                  <div>
                    <p class="heading">Joueurs inscrits</p>
                    <p class="title"><?php 
                      try {
                        $bdd = new PDO('mysql:host=localhost;dbname=supremod;charset=utf8', 'supremod', '');
                      } catch (Exception $e) {
                          die('Erreur ! ' . $e->getMessage());
                      }

                      $req = $bdd->query('SELECT * FROM `users`');
                      $user = 0;
                      while ($response = $req->fetch())
                      {
                        $user = $user + 1;
                      }
                      echo $user;
                    ?>
                    </p>
                  </div>
                </div>
                <div class="level-item has-text-centered">
                  <div>
                    <p class="heading">Nombres de joueurs connectés simultanément</p>
                    <p class="title"><?php 
                      try {
                        $bdd = new PDO('mysql:host=localhost;dbname=supremod;charset=utf8', 'supremod', '');
                      } catch (Exception $e) {
                          die('Erreur ! ' . $e->getMessage());
                      }

                      $req = $bdd->query('SELECT maxPlayers FROM `stats`');
                      $user = 0;
                      while ($response = $req->fetch())
                      {
                        $user = $response["maxPlayers"];
                      }
                      echo $user;
                    ?>
                    </p>
                  </div>
                </div>
                <div class="level-item has-text-centered">
                  <div>
                    <p class="heading">Nombres de membres sur Discord</p>
                    <p class="title"><?php 
                      try {
                        $bdd = new PDO('mysql:host=localhost;dbname=supremod;charset=utf8', 'supremod', '');
                      } catch (Exception $e) {
                          die('Erreur ! ' . $e->getMessage());
                      }

                      $req = $bdd->query('SELECT discord FROM `stats`');
                      $user = 0;
                      while ($response = $req->fetch())
                      {
                        $user = $response["discord"];
                      }
                      echo $user;
                    ?>
                    </p>
                  </div>
                </div>
              </nav>
            <div id="footer"></div>
    </body>
</html>