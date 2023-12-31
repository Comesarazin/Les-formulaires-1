<?php
// ce blog php est pour la quête formulaire en PHP 2 a retiré pour la correction de la quête les formulaire en php 1
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '') {
      $errors[] = "Le nom est obligatoire";
  }
  if (!isset($_POST['user_nameP']) || trim($_POST['user_nameP']) === '') {
      $errors[] = "Le prénom est obligatoire";
  }
  
  // Validation de l'adresse e-mail
  if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '') {
      $errors[] = "L'e-mail est obligatoire";
  } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
      $errors[] = "L'adresse e-mail n'est pas valide";
  }
  
  if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '') {
      $errors[] = "Le numéro de téléphone est obligatoire";
  }
  if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '') {
      $errors[] = "Le message est obligatoire";
  }

  if (empty($errors)) {
      header('Location: thanks.php');
      exit;
  }
}

var_dump($errors);

?>
<?php
//pour la correction de la quête les formulaire en PHP 1 il faut rajouter "thanks.php" dans action
?>
<form action="" method="post">
<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name" required>
</div>
<div>
  <label  for="prenom">prénom :</label>
  <input  type="text"  id="prenom"  name="user_nameP" required>
</div>
<div>
  <label  for="e-mail">email:</label>
    <input  type="email"  id="email"  name="user_email" required>
</div>
<div>
  <label  for="phone">téléphone:</label>
    <input  type="tel"  id="phone"  name="user_phone" required>
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
  <textarea  id="message"  name="user_message" required></textarea>
</div>
<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>
</form>

