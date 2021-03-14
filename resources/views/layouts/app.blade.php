<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta name="viewport"
            content="width=device-width, initial-scale=1">
      <meta name="csrf-token"
            content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="stylesheet"
            href="https://rsms.me/inter/inter.css">

      <!-- Styles -->
      <link rel="stylesheet"
            href="{{ mix('css/app.css') }}">

      @livewireStyles

      <!-- Scripts -->
      <script src="{{ mix('js/app.js') }}"
              defer></script>
</head>

<body class="font-sans antialiased">

      <div class="h-screen flex overflow-hidden bg-gray-100">
            @include('includes.sidebar.mobile')

            @include('includes.sidebar.desktop')

            <div class="flex-1 overflow-auto focus:outline-none"
                 tabindex="0">

                  @include('includes.header.navbar')

                  <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                        {{ $slot }}
                  </main>
            </div>
      </div>

      @stack('modals')

      @livewireScripts
</body>

</html>