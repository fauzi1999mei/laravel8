<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Test</title>
</head>
<body>
    <h1>read test</h1>
    <h1>list produk dengan lebih teratur</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>price</th>
                <th>image_url</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)


            {{-- <tr>
                <td>Baju Polos</td>
                <td>Baju import korea</td>
                <td>1000000</td>
                <td>www.facebook.com</td>
            </tr> --}}
            <tr>
                <td>{{ $product-> name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product-> price }}</td>
                <td>{{ $product-> image_url }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
