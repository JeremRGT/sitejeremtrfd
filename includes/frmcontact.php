<form action="index.php?page=contact" method="post">
  <div>

  <label for="nom"> Nom :</label>
  <input type="text" name="nom" id="nom"/>
  </div>

  <div>

  <label for="prénom"> Prénom :</label>
  <input type="text" name="prénom" id="prénom"/>
  </div>

  <div>

  <label for="âge"> âge:</label>
  <input type="text" name="âge" id="âge"/>
  </div>

  <div>

  <label for="mail"> E-mail:</label>
  <input type="mail" name="mail" id="mail"/>
  </div>

  <div>

  <label for="mdp">Mot de passe :</label>
  <input type="password" name="mdp" id="mdp"/>
  </div>
  <div>
    <label for="msg">Message</label>
    <textarea name="msg" id="msg"></textarea>

  </div>


  <input type="submit" value="Envoyer">
  <input type="hidden" value="formcontact">

</form>
