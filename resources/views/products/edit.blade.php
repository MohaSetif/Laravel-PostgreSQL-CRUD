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
    <!-- Apply Bootstrap form classes to the edit form -->
<form method="POST" action="{{ route('products.update', $product->id) }}" class="my-4">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="details">Details:</label>
        <textarea name="details" id="details" class="form-control" required>{{ $product->details }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>