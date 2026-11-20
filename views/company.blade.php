<!DOCTYPE html>
<html>
<head>
    <title>Company and Product System</title>
</head>
<body>

    <h2>Company and Product Management System</h2>

    <form action="{{ route('company') }}" method="GET">

        <label>Select Company:</label>

        <select name="company" required>

            <option value="">-- Select Company --</option>

            <option value="Apple"
                {{ $company == 'Apple' ? 'selected' : '' }}>
                Apple
            </option>

            <option value="Samsung"
                {{ $company == 'Samsung' ? 'selected' : '' }}>
                Samsung
            </option>

            <option value="Dell"
                {{ $company == 'Dell' ? 'selected' : '' }}>
                Dell
            </option>

        </select>

        <br><br>

        <label>Select Product:</label>

        <select name="product" required>

            <option value="">-- Select Product --</option>

            <option value="iPhone"
                {{ $product == 'iPhone' ? 'selected' : '' }}>
                iPhone
            </option>

            <option value="MacBook"
                {{ $product == 'MacBook' ? 'selected' : '' }}>
                MacBook
            </option>

            <option value="Galaxy Phone"
                {{ $product == 'Galaxy Phone' ? 'selected' : '' }}>
                Galaxy Phone
            </option>

            <option value="Tablet"
                {{ $product == 'Tablet' ? 'selected' : '' }}>
                Tablet
            </option>

            <option value="Laptop"
                {{ $product == 'Laptop' ? 'selected' : '' }}>
                Laptop
            </option>

            <option value="Monitor"
                {{ $product == 'Monitor' ? 'selected' : '' }}>
                Monitor
            </option>

        </select>

        <br><br>

        <button type="submit">View Product</button>

    </form>

    @if(request()->filled('company') && request()->filled('product'))

        <h3>Product Details</h3>

        @if(count($results) > 0)

            <table border="1" cellpadding="10">

                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>

                @foreach($results as $item)

                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['company'] }}</td>
                        <td>{{ $item['product'] }}</td>
                        <td>₹{{ number_format($item['price']) }}</td>
                    </tr>

                @endforeach

            </table>

        @else

            <p>No product found for the selected company.</p>

        @endif

    @endif

</body>
</html>
