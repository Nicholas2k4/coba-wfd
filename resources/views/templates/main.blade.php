<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Template</title>
</head>
<body>
    @include('components.header')

    @if(session()->has('success'))
        <div class="bg-green-500 text-white p-3 text-center">{{ session('success') }}</div>
    @endif
    @if(session()->has('error'))
        <div class="bg-red-500 text-white p-3 text-center">{{ session('error') }}</div>    
    @endif
    @if($errors->any())
        <div class="bg-red-500 text-white p-3 text-center">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>    
    @endif

    <div class="min-h-[700px]">
        @yield('content')
    </div>
   
    @include('components.footer')
</body>
</html>