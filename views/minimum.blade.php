<html>
<head>
<title> Minimum Number </title>
</head>
<body>
   <h2> Find Minimum of Two Numbers</h2>

   <form method = "POST" action = "/minimum">
   @csrf

   Enter First Number :
   <input type = "number" name = "num1" required>
   <br><br>

   Enter Second Number :
   <input type = "number" name = "num2" required>
   <br><br>

   <button type = "submit">find Minimum</button>
   </form>

   <h3>{{$result}}</h3>
</body>
</html>