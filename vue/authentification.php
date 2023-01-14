     <form method="post" class="form container-2">
        <div class="form">
            <div class="auth">Authentification:</div>
                <label for="Username"></label>
            <input type="text" name="username"  placeholder="Identifiant" id="username" required>
        
            <label for="mdp"></label>
            <input type="password" name="password"  placeholder="Mot de Passe" id="password" required >
            <a href="index.php" class="oublie">Mot de passe oublié?</a>

            <div class="container-6">
                <div>
                    <input type="submit" class="submit" name="connexionAdmin" value="Administrateur">
                </div>
                
                <div >
                    <input type="submit" class="submit" name="connexionEtudiant" value="Etudiant">
                </div>
            </div>
        </div>
    </form>
