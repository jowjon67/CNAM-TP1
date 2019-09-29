<div class="col-md-6 mx-auto">
  <h1>Formulaire</h1>
  <br>
  <form id='form' action="vues/vue_resultat.php" method="get">
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="inputCiv">Civilité</label>
        <select id="inputCiv" class="form-control" required>
          <option></option>
          <option>M</option>
          <option>Mme</option>
          <option>Autre</option>
        </select>
      </div>
      <div class="form-group col-md-5">
        <label for="inputNom">Nom</label>
        <input class="form-control" id="inputNom" placeholder="Nom" required>
      </div>
      <div class="form-group col-md-5">
        <label for="inputPrenom">Prenom</label>
        <input type="password" class="form-control" id="inputPrenom" placeholder="Prenom" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputTelFixe">Téléphone Fixe</label>
        <input class="form-control" id="inputTelFixe" placeholder="0388645201" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputTelPortable">Téléphone Portable</label>
        <input class="form-control" id="inputTelPortable" placeholder="0661005039" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
          <label for="inputLogin">Login</label>
        <input class="form-control" id="inputLogin" placeholder="Login" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputConfirmPassword">Mot de passe</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
        <div class="invalid-feedback">
            Mot de passe non indentique!
        </div>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword">Confirmation mot de passe</label>
        <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Mot de passe" required>
        <div class="invalid-feedback">
            Mot de passe non indentique!
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Adresse</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="10 rue de la cité" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="inputPays">Pays</label>
        <select id="inputPays" class="form-control" required>
          <option></option>
          <option>France</option>
          <option>Allemagne</option>
          <option>Angleterre</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCP">CP</label>
        <input type="text" class="form-control" id="inputCP" placeholder="67114" required>
      </div>
    </div>
    <button type="button" id="btn-envoyer" class="btn btn-primary">S'inscrire</button>
  </form>
</div>
