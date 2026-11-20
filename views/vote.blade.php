<!DOCTYPE html>
<html>
<head>
    <title>Voting System</title>
</head>
<body>

    <h1>Online Voting System</h1>

    <form action="{{ route('vote.submit') }}" method="POST">
        @csrf

        <label>Enter Your Name:</label>
        <input type="text" name="name"
               value="{{ old('name') }}" required>
        <br><br>

        <label>Select Candidate:</label>

        <select name="candidate" required>
            <option value="">-- Select Candidate --</option>

            <option value="Candidate A"
                {{ old('candidate') == 'Candidate A' ? 'selected' : '' }}>
                Candidate A
            </option>

            <option value="Candidate B"
                {{ old('candidate') == 'Candidate B' ? 'selected' : '' }}>
                Candidate B
            </option>

            <option value="Candidate C"
                {{ old('candidate') == 'Candidate C' ? 'selected' : '' }}>
                Candidate C
            </option>
        </select>

        <br><br>

        <button type="submit">Submit Vote</button>
    </form>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @isset($candidate)
        <h2>Vote Submitted Successfully!</h2>
        <p>Name: {{ $name }}</p>
        <p>Your selected candidate: {{ $candidate }}</p>
    @endisset

</body>
</html>
