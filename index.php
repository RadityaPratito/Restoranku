<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Restoran-Ku</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tampil.css" />
    
    <script src="tampil.js"></script>
    <link rel="stylesheet" type="text/css" href="tampilan.css">

</head>
<body>

<center>

<div class="Login">
        
        <h1 style="text-align:center;text-size:70px">RESTORANKU</h1>
          
          <p style="text-align:center;font-size: 20px;">LOGIN</p>
        
        <form action="registrasi.php" method="POST" style="text-align:center">

        <!-- Masukkan Username -->

		    <label>USERNAME</label>
		    <input type="text" name="username" class="Input" placeholder="Username">
        
        <!-- Masukkan Password -->

		    <label>PASSWORD</label>
		    <input type="text" name="password" class="Input" placeholder="Password">
        
        <!-- Tombol Login -->

		    <input type="submit" class="Submit" value="LOGIN">

      </form>    
    </div>
        
</center>

</body>
</html>