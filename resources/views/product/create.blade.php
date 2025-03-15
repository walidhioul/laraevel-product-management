<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="background-color: yellow;">Create a product</h1>
    <form method="post" action="{{ route('product.store') }}">
    @csrf
    @method('POST')  
    
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Product name">
    </div>

    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description">
    </div>

    <div>
        <input type="submit" value="Create new product">
    </div>
    </form>

</body>
</html>