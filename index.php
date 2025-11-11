<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<link rel="stylesheet"  href="css/styles.css?v=1.10.0">
</head>
<body>
  <img  class="image">

  <div class="topnav">
    <a class="active" href="index.php">Verspätungen</a>
    <a href="statistik.php">Statistiken</a>
    <a href="datenoutput.php">Datenoutput</a>
    <a href="about.php">About</a>
  </div>
  <form method="post" action="/daten_opt.php"   class="form">
    <table>
    <tr>
      <td><label for="lname" class="form-text">Linie:</label></td>
      <td><input type="text" id="lname" name="lname"><br><br></td>
    </tr><tr>
      <td><label for="lname" class="form-text">Haltestelle:</label></td>
      <td><input type="text" id="sname" name="sname"><br><br></td>
    </tr><tr>
      <td><label for="lname" class="form-text">Fahrt:</label></td>
      <td><input type="text" id="linid" name="id"><br><br></td>
    </tr><tr>
    <td></td>
    <td><input type="submit" value="Suchen" class="search"></td>
    </tr>
    </table>
  </form> 
</body>






