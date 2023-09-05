<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Products CRUD</title>
</head>
<body>
    <!-- Add Bootstrap styling to your list -->
<ul class="list-group">
    <a href="/products/create">Add products</a>
    @foreach ($products as $product)
        <li class="list-group-item">
            <a href="{{ route('products.show', $product->id) }}">
                {{ $product->name }}
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>