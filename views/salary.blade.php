<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Management System</title>
</head>
<body>

    <h2>Employee Salary Management System</h2>

    <form action="{{ route('salary') }}" method="GET">

        <label>Select Employee:</label>

        <select name="employee" required>

            <option value="">-- Select Employee --</option>

            @foreach($employees as $item)

                <option value="{{ $item['name'] }}"
                    {{ $employee == $item['name'] ? 'selected' : '' }}>

                    {{ $item['name'] }}

                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">View Salary</button>

    </form>

    @if(request()->filled('employee'))

        <h3>Employee Salary Details</h3>

        @if(count($results) > 0)

            <table border="1" cellpadding="10">

                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Monthly Salary</th>
                </tr>

                @foreach($results as $item)

                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['department'] }}</td>
                        <td>₹{{ number_format($item['salary']) }}</td>
                    </tr>

                @endforeach

            </table>

        @else

            <p>No employee records found.</p>

        @endif

    @endif

</body>
</html>
