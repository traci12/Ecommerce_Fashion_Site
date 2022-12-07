@php
/**
 * The template for layout component.
 *
 * This is the main layout of the ecommerce fashion site. The $slot blade component
 * will render addition contents inside the layout component.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  {{-- NAVIGATION SECTION --}}
  <x-navigation />

  {{-- Include $slot component for addition contents. --}}
  {{ $slot }}
</body>
</html>
