<html>
	<head>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">

	</head>
	<body>
	<meta charset ='utf-8' />

	  
		<h3> <u>Plateforme De Candidature des gérants</u></h3>
		<div id="conteneurlivrai">
			<form action="{{route('connexion')}}" method="get">
			  <fieldset>
				<legend> Se connecter</legend>
				<p>login<input type="email" size="20" required placeholder="login" /></p>
				<p>Password<input type="password" size="20" required placeholder="passwword" /></p>
				</br>
				<p><a href="creecompte.blade.php">Créer un compte</a> </p>
					
				<div class ="ajustsubmit">

					<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" value="connexion" />
					

				</div>
				</br>
				</br>
				</p>   
				 {{-- <p style="color: red;">dedefjb</p> --}}
					
			  </fieldset>
			</form>
		<div>
	</body>
</html>


