<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENGUNJUNG</title>
    <link rel="stylesheet" href="Styleform.css">
</head>
<body>
    <form action="proses.php" method="post">
      <ul>
          <li>
              <label for="name">Nama :</label>
              <input type="text" id="name" name="user_name">
          </li>
          <li>
            <label for="domisili">Domisili :</label>
            <input type="text" id="domisili" name="user_domisili">
          </li>
          <li>
            <label for="pesan">Pesan dan Kesan : </label>
            <textarea id="pesan" name="user_pesan"></textarea>
          </li>
          <li class = "button">
              <input type="submit" name="button" id="button"
                value="Send your message"/>
          </li>
      </ul>  
    </form>
</body>
</html>