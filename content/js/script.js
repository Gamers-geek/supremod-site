let header = document.getElementById("header")
let headerContent = `
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      <img src="./content/img/icon.png">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="./index.php">
        <span class="icon">
          <i class="fa fa-home"></i>
        </span>
        <span>
          Supremod
        </span>
      </a>

      <a class="navbar-item" href="./download.html">
        <span class="icon">
          <i class="fa fa-download"></i>
        </span>
        <span>
          Télécharger
        </span>
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          <span class="icon">
            <i class="fa fa-plus"></i>
          </span>
          <span>
           Aide
          </span>
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="./about.html">
            A propos
          </a>
          <a class="navbar-item" href="./contact.html">
            Contact & Support
          </a>
          <a class="navbar-item" href="https://discord.gg/TxuPV6X">
            Discord
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="./bug-report.html">
            Signaler un bug
          </a>
          <a class="navbar-item" href="./player-report.html">
            Signaler un joueur
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="./account.html">
          <span clas="icon">
            <i class="fa fa-user-plus"></i>
          </span>
          <span>
            &nbsp;S'inscrire
          </span>
          </a>
          <a class="button is-light" href="./account.html">
            <span clas="icon">
              <i class="fa fa-user"></i>
            </span>
            <span>
              &nbsp;Se connecter
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
`
header.innerHTML = headerContent 

let footer = document.getElementById("footer")
const year = new Date().getFullYear()
let footerContent = `
<footer class="footer">
<div class="content has-text-centered">
  <p>
    &copy; ${year} Supremod 
    <div class="social">
        <a href="https://discord.gg/TxuPV6X" target="_blank">
            <span class="icon is-large">
                <i class="fab fa-discord icon is-large"></i>
            </span>
        </a>
        <a href="https://www.youtube.com/channel/UC_NcPiYDjIxkG_s3p5PL4uw" target="_blank">
            <span class="icon is-large">
                <i class="fab fa-instagram icon is-large"></i>
            </span>
        </a>
        <a href="http://store..fr" target="_blank">
            <span class="icon is-large">
                <i class="fas fa-shopping-cart icon is-large"></i>
            </span>
        </a>
        <a href="mailto:contact.supremod@gmail.com" target="_blank">
            <span class="icon is-large">
                <i class="fa fa-at icon is-large"></i>
            </span>
        </a>
        <a href="https://www.youtube.com/channel/UC_NcPiYDjIxkG_s3p5PL4uw" target="_blank">
            <span class="icon is-large">
                <i class="fab fa-youtube icon is-large"></i>
            </span>
        </a>
    </div> <br>
  </p>
</div>
</footer>
` 

footer.innerHTML = footerContent;
let popupInfo = document.getElementById("message")

document.getElementsByClassName("delete").addEventListener("click", () => {
  const e = document.getElementById("betaI");
  e.parentElement.removeChild(e);
});

//width="112" height="28"