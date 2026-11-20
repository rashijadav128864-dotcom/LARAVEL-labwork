<html>
<head>
<title> Maximum Number</title>
</head>
<body>
  <h2>Find Maximum out of 3 numbers</h2>

  <form method = "POST" action = "maximum">
  @csrf

  Enter Frist Number :
  <input type = "number name = "num1" required>
  <br><br>

  Enter Second Number :
  <input type = "number name = "num2" required>
  <br><br>

  Enter Third Number :
  <input type = "number name = "num3" required>
  <br><br>

  <button type = "submit">Find Maximum</button>
  </form>

  <h3>{{$result}}</h3>
</body>
</html>

