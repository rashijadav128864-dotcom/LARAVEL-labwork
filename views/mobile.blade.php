<html>
<head>
    <title>Mobile Shop</title>
</head>
<body>

    <h2>Mobile Shop</h2>

    <form action="{{ route('mobile') }}" method="GET">

        <label>Select Company:</label>

        <select name="company" id="company" required>
            <option value="">-- Select Company --</option>

            <option value="Apple"
                {{ $company == 'Apple' ? 'selected' : '' }}>
                Apple
            </option>

            <option value="Samsung"
                {{ $company == 'Samsung' ? 'selected' : '' }}>
                Samsung
            </option>

            <option value="Oppo"
                {{ $company == 'Oppo' ? 'selected' : '' }}>
                Oppo
            </option>

            <option value="Vivo"
                {{ $company == 'Vivo' ? 'selected' : '' }}>
                Vivo
            </option>
        </select>

        <br><br>

        <label>Select Mobile Model:</label>

        <select name="model" id="model" required>
            <option value="">-- Select Model --</option>
        </select>

        <br><br>

        <button type="submit">Check Status</button>

    </form>

    @if(request()->filled('company') &&
        request()->filled('model'))

        <h3>Mobile Details</h3>

        @if(count($results) > 0)

            <table border="1">
                <tr>
                    <th>Mobile ID</th>
                    <th>Mobile Name</th>
                    <th>Company Name</th>
                    <th>Price</th>
                    <th>Stock Status</th>
                </tr>

                @foreach($results as $mobile)
                    <tr>
                        <td>{{ $mobile['id'] }}</td>
                        <td>{{ $mobile['name'] }}</td>
                        <td>{{ $mobile['company'] }}</td>
                        <td>{{ $mobile['price'] }}</td>
                        <td>
                            @if($mobile['stock'] == 'Available')
                                Available
                            @else
                                Out of Stock
                            @endif
                        </td>
                    </tr>
                @endforeach

            </table>

        @else
            <p>No matching mobile found for the selected company and model.</p>
        @endif

    @endif

    <script>
        const models = {
            Apple: ['iPhone 15', 'iPhone 16'],
            Samsung: ['Galaxy S24', 'Galaxy A55'],
            Oppo: ['Oppo Reno 12', 'Oppo A3 Pro'],
            Vivo: ['Vivo V30', 'Vivo Y28']
        };

        const companySelect = document.getElementById('company');
        const modelSelect = document.getElementById('model');

        const selectedModel = @json($model);

        function loadModels() {
            const company = companySelect.value;

            modelSelect.innerHTML =
                '<option value="">-- Select Model --</option>';

            if (models[company]) {
                models[company].forEach(function (model) {
                    const option = document.createElement('option');

                    option.value = model;
                    option.textContent = model;

                    if (model === selectedModel) {
                        option.selected = true;
                    }

                    modelSelect.appendChild(option);
                });
            }
        }

        companySelect.addEventListener('change', function () {
            loadModels();
        });

        loadModels();
    </script>

</body>
</html>