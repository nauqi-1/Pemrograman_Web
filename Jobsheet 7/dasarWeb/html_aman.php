<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $input = $_POST['input'];
   $input2 = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
   echo "Input yang aman: " . $input2 . "<br>";

   $email = $_POST['email'];
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "Email yang dimasukkan valid: " . $email;
   } else {
       echo "Email yang dimasukkan tidak valid";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Form Input</title>
   <style>
       body {
           font-family: Arial, sans-serif;
           padding: 20px;
       }
       h1 {
           color: #333;
       }
       form {
           margin-top: 20px;
       }
       input[type=text], input[type=submit] {
           padding: 5px;
           margin-bottom: 10px;
       }
   </style>
</head>
<body>
   <h1>Masukkan Input</h1>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       Input: <input type="text" name="input"><br>
       Email: <input type="text" name="email"><br>
       <input type="submit" name="submit" value="Kirim">
   </form>
</body>
</html>