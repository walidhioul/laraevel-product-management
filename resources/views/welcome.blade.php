<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product management </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class=" h-screen bg-gray-100">
        <nav class="flex items-start p-5">
            <a style="color: blue; " class="pr-5 btn" href="{{ route('show_register') }}">register</a>
            <a style="color: blue;" href="{{ route('show_login') }}">log in</a>
        </nav>
    <div class="text-center m-16">
       
        <h1 class="text-4xl font-bold text-blue-600">Product management</h1>
       
    </div>
</body>
</html>
