<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Connection</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bloc-connexion">
<div class="login-form forms">
    <form action="" method="post">
        <h2 class="text-center col">Connection</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="email" class="form-control" placeholder="Email" name="mail" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" placeholder="Mot de pass" name="password" required="required">
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
        <div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Souviens de moi</label>
            <a href="#" class="float-right">Mot de passe oublier?</a>
        </div>        
    </form>
    <p class="text-center small">Vous n'avez pas de compte ! <a href="#">Inscrivez-vous ici</a>.</p>
</div>
</body>
</html>