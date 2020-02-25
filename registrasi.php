<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Restoran-Ku</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="regis.css" />
    
    <script src="regis.js"></script>
    <link rel="stylesheet" type="text/css" href="Regiss.css">

</head>
<body>

<center>

<div class="Register">
        
        <h1 style="text-align:center;text-size:70px">RESTORANKU</h1>
          
         <p style="text-align:center;font-size: 20px;">REGISTER</p>
        
        <form action="database.php" method="POST" style="text-align:center">

        <!-- Masukkan Username -->

		    <label>USERNAME</label>
		    <input type="text" name="username" class="Input_Register" placeholder="Username">
        
        <!-- Masukkan Password -->

		    <label>PASSWORD</label>
		    <input type="text" name="password" class="Input_Register" placeholder="Password">
        
        <!-- Tombol Register -->

		    <input type="submit" class="Submit_register" value="REGISTER">

      </form>    
    </div>
        
</center>

</body>
</html>