<html>
<head>
    <title>Sum Calculator</title>
</head>
<body>
    <h1>Sum of Two Numbers</h1>

    <form action="{{ url('/sum') }}" method="POST">
        @csrf

        <label>Enter First Number:</label>
        <input type="number" step="any" name="a"
               value="{{ old('a') }}" required>
        <br><br>

        <label>Enter Second Number:</label>
        <input type="number" step="any" name="b"
               value="{{ old('b') }}" required>
        <br><br>

        <button type="submit">Calculate Sum</button>
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    @isset($sum)
        <h2>Sum = {{ $sum }}</h2>
    @endisset
</body>
</html>
