<!DOCTYPE html>
<html>
<head>
    <title>Student Result System</title>
</head>
<body>

    <h2>Student Result System</h2>

    <form action="{{ route('results') }}" method="GET">

        <label>Select Course:</label>

        <select name="course" required>
            <option value="">-- Select Course --</option>

            <option value="BCA" {{ $course == 'BCA' ? 'selected' : '' }}>
                BCA
            </option>

            <option value="BBA" {{ $course == 'BBA' ? 'selected' : '' }}>
                BBA
            </option>

            <option value="BCOM" {{ $course == 'BCOM' ? 'selected' : '' }}>
                BCOM
            </option>
        </select>

        <br><br>

        <label>Select Semester:</label>

        <select name="semester" required>
            <option value="">-- Select Semester --</option>

            @for ($i = 1; $i <= 6; $i++)
                <option value="{{ $i }}"
                    {{ (string)$semester === (string)$i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>

        <br><br>

        <button type="submit">View Result</button>

    </form>

    @if(request()->filled('course') && request()->filled('semester'))

        <h3>
            Result: {{ $course }} - Semester {{ $semester }}
        </h3>

        @if(count($results) > 0)

            <table border="1" cellpadding="8" cellspacing="0">

                <tr>
                    <th>Roll No.</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Marks</th>
                    <th>Result</th>
                </tr>

                @foreach($results as $student)
                    <tr>
                        <td>{{ $student['roll'] }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['course'] }}</td>
                        <td>{{ $student['semester'] }}</td>
                        <td>{{ $student['marks'] }}</td>

                        <td>
                            @if($student['marks'] >= 35)
                                PASS
                            @else
                                FAIL
                            @endif
                        </td>
                    </tr>
                @endforeach

            </table>

        @else

            <p>No student records found for the selected course and semester.</p>

        @endif

    @endif

</body>
</html>
