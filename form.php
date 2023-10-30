
<form  action="thanks.php"  method="post">
<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name">
</div>
<div>
  <label  for="prénom">prénom :</label>
  <input  type="text"  id="prenom"  name="user_nameP">
</div>
<div>
  <label  for="e-mail">email:</label>
    <input  type="email"  id="email"  name="user_email">
</div>
<div>
  <label  for="téléphone">téléphone:</label>
    <input  type="text"  id="phone"  name="user_phone">
</div>
<div>
    <label for="sujet">Sujet :</label>
        <select id="sujet" name="sujet" required>
            <option value="Support technique">Support technique</option>
            <option value="Demande de renseignements">Demande de renseignements</option>
            <option value="Autre">Autre</option>
        </select>
</div>
<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="user_message"></textarea>
</div>
<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>
</form>

<?php
  var_dump($_POST);
?>

