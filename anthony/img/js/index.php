<?php
require_once 'config.php';


$error ='';
$success_message = '';
if ($_SERVE['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];   
}{


    mysqli_co {
        $stmt = $conn->prepare("INSERT INTO users (nom,prenom,email) VALUES(?,?,?)");
        $stmt->bind_param("sssi", $phone,$hashed_password, $new_referral_code, $referred_by);
        $stmt->execute();
        $new_user_id = $stmt->insert_id;

        $conn->commit();
        $success_message= "inscription re";
    }
    catch (Exception $e) {
        $conn->rollback();
        $error = "erreur lors de l'inscription.";
    }
}

?>



<!DOCTYPE html>
<htmllang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Page de Connexion Moderne |immobilier</title>
</head>

<bod

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form  methode="POST" action = "">
                <h1>Créer un Compte</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou utilisez votre email pour vous inscrire</span>
                <input type="text" placeholder="Nom">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Mot de passe">
                <button>S'inscrire</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Se Connecter</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou utilisez votre email et mot de passe</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Mot de passe">
                <a href="#">Mot de passe oublié ?</a>
                <button>Se Connecter</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenue !</h1>
                    <p>Entrez vos informations personnelles pour utiliser toutes les fonctionnalités du site</p>
                    <button class="hidden" id="login">Se Connecter</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bonjour, Ami !</h1>
                    <p>Inscrivez-vous avec vos informations personnelles pour utiliser toutes les fonctionnalités du site</p>
                    <button class="hidden" id="register">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
