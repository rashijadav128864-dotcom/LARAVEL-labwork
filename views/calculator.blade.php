<html>
<head>
    <title>Laravel Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <form action="{{ url('/calculate') }}" method="POST">
        @csrf

        <label>Enter First Number:</label>
        <input type="number" step="any" name="a" required>
        <br><br>

        <label>Enter Second Number:</label>
        <input type="number" step="any" name="b" required>
        <br><br>

        <label>Select Operation:</label>
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    @isset($result)
        <h2>Result: {{ $result }}</h2>
    @endisset
</body>
</html>
