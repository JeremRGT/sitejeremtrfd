<div class="frm">

<form action="index.php?page=contact" method="POST">
  <div>

  <label for="nom"> Nom :</label>
  <input type="text" name="nom" id="nom" value="<?=$nom ?>"/>
  </div>

  <div>

  <label for="prenom"> Prénom :</label>
  <input type="text" name="prénom" id="prenom" value="<?=$prenom ?>" />
  </div>

  <div>

  <label for="mail"> E-mail:</label>
  <input type="mail" name="mail" id="mail" value="<?=$mail ?>"/>
  </div>

  <div>

  <label for="tel"> tel:</label>
  <input type="text" name="tel" id="tel" value="<?=$tel ?>"/>
  </div>



  <div>
    <label for="msg">Message</label>
    <textarea name="msg" id="msg"> <?=$msg ?> </textarea>

  </div>


  <input type="submit" value="Envoyer">
  <input type="hidden" value="frmcontact">

</form>

</div>
