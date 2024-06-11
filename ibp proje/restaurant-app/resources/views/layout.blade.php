<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-green-200" style="background-color: rgb(0, 0, 0)">
  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <div class="space-y-6">
        <div class="bg-gray-100 p-6 rounded-lg shadow">
          <div class="space-y-4">
            @yield('form')
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
