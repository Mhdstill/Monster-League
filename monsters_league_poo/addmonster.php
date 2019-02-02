<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/inscription.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
					
					<li class="nav-item active">
                        <a class="nav-link" href="index.php">Add Monster <span class="sr-only">(current)</span></a>
                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0">
					
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
		
		
		
		<div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
        </div>
		
		<div class="inscription">
			<form method="POST" action="addToBDD.php">
			
				<h2 class="text-center">Add monster</h2> <br />
				<label for="Name">Name</label> <br />
				<input type="text" name="name"> <br /> <br />
				
				<label for="Strength">Strength</label> <br />
				<input type="text" name="strength"> <br /> <br />
				
				<label for="Life">Life</label> <br />
				<input type="text" name="life"> <br /> <br />
				
				<label for="Type">Type</label> <br />
				<input type="text" name="type"> <br /> <br />
				
				<button class="btn-submit" id="btn-a" type="submit">Sumbit</button>
				<button class="btn-cancel"><a href="connexion.php" id="btn-a"> Cancel </a> </button>
			</form>
		</div>
		
	</body>
</html>

	