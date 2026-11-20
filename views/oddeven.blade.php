<html>
<head>
    <title>Odd Even Checker</title>
</head>
<body>
    <h1>Odd or Even Number</h1>

    <form action="{{ url('/oddeven') }}" method="POST">
        @csrf

        <label>Enter a Number:</label>
        <input type="number" name="number"
               value="{{ old('number') }}" step="1" required>

        <br><br>

        <button type="submit">Check Number</button>
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    @isset($result)
        <h2>Number: {{ $number }}</h2>
        <h2>Result: {{ $result }}</h2>
    @endisset
</body>
</html>