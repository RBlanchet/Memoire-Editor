class AuthController
{
    public function get_identifiant{
      if (!empty($_SESSION)) {
          echo "<form method=\"POST\" action=\"?p=admin-deconnect\" class=\"edit-form form-inline my-2 my-lg-0 navbar-text\">
                     Bonjour " . $_SESSION['username'] . "
                     <button style='margin-left: 10px' class=\"btn btn-danger\" name=\"deconnect-button\" type=\"submit\" value=\"deconnect\">Deconnecter</button>
                </form>";
      }
      else {

      }
    }
}
