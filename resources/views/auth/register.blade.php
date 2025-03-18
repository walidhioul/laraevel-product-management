
<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Register</h2>
        <form action="{{ route('register') }}"  method="POST">
            @csrf
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name') }}"  class="w-full p-2 border rounded mb-3" required>
            
            <label class="block mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"  class="w-full p-2 border rounded mb-3" required>
            
            <label class="block mb-2">Password</label>
            <input type="password" name="password" value="password" class="w-full p-2 border rounded mb-3" required>
            
            <button type="submit" class="w-full bg-green-500 text-white p-2 rounded">Register</button>
        </form>
         <!-- validation error -->
        
         @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
    </div>
</body>
</html>
