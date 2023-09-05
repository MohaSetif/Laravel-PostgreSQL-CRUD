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
    <!-- Add Bootstrap styling to the product details -->
<div class="card my-4">
    <div class="card-body">
        <h1 class="card-title">Product Details</h1>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
        <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

</body>
</html>