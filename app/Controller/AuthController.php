<?php

class AuthController
{
    public function get_identifiant()
    {
      if (!empty($_SESSION)) {
        echo '<li class="nav-item nav-item-li" style="color: white;">
                Bonjour ' . $_SESSION['user'] . '
              </li>
              <li class="nav-item nav-item-li">
                <button style="margin-left: 10px" class="btn btn-danger" name="connect-button" type="submit" value="connect">Deconnecter</button>
              </li>';
      }
      else {
        echo '<li class="nav-item nav-item-li" style="color: white;">
                Bonjour visiteur
              </li>
              <li class="nav-item nav-item-li">
                <button style="margin-left: 10px" class="btn btn-primary" name="connect-button" type="submit" value="connect">Connecter</button>
              </li>';
      }
    }
}
