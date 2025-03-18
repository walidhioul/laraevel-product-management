<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1 style="background-color: yellow;">Edit Product</h1>
    <form method="post" action="{{ route('product.update', $product->id) }}">
    @csrf
    @method('PUT')  
    
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}" placeholder="Product name">
    </div>

    <div>
        <label>Description</label>
        <input type="text" name="description" value="{{ $product->description }}" placeholder="Description">
    </div>

    <div>
        <input type="submit" value="Update product">
    </div>
    </form>

</body>
</html>