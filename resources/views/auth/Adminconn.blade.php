<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<title>Document</title>
</head>
<body>
	<form action="" class="sign-up-form">
        <h2 class="title">S'inscrire</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username">
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email">
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        <input type="submit" value="S'inscrire'" class="btn solid">
        <p class="social-text">Inscrivez-vous a la plate-forme sociale</p>
                    
    </form>
</body>
</html>