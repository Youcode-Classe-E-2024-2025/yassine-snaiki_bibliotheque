<!DOCTYPE html>
<html lang="en" class="bg-gray-100 h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body class="bg-gray-100">

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div>
            <div class="ml-10 flex items-baseline space-x-4">

              <x-navlink href='/'  :active="request()->is('/')" >Home</x-navlink>
              <x-navlink href='/books' :active="request()->is('books')">Books</x-navlink>
              @if(!Auth::check() || Auth::user()->role === 'user')
              <x-navlink href='/borrowed'  :active="request()->is('borrowed')" >Borrowed</x-navlink>
              @else
              <x-navlink href='/dashboard'  :active="request()->is('dashboard')" >dashboard</x-navlink>
              @endif
            </div>
          </div>
        </div>
        <div >
          <div class="ml-4 flex items-center md:ml-6">
            @if(Auth::check())
            <x-navlink href='/logout'>Logout</x-navlink>
            @else
            <x-navlink href='/login'>Login</x-navlink>
            @endif
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
  </main>
</div>
</body>
</html>