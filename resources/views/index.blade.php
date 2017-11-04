<!doctype html>
<html lang="en" class="bg-grey-lighter antialiased">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tailwind CSS Components</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<header class="p-8 bg-purple-dark border-purple-darker border-t-8 shadow-md mb-8">
<h1 class="text-white text-center mt-8 text-4xl font-thin">
    Some components<br> Crafted with
    <a class="font-semibold text-white" href="https://tailwindcss.com/">Tailwind CSS</a>
</h1>
</header>

<div class="flex flex-row flex-wrap p-4 justify-center">
    <div class="w-80 mb-2 mr-4">
        <p class="font-semibold text-xl text-center mb-4">Entity Search and Selection</p>

        @include('components.item.classic')
        @include('components.item.search')
        @include('components.item.by-brand')
        @include('components.item.by-brand-group')
        @include('components.item.by-interal-ref')
        @include('components.item.by-sku')


    </div>
    <div class="w-80 mb-2 mr-4">
        <p class="font-semibold text-xl text-center mb-4">Price Entry</p>

        @include('components.price.basic')
        @include('components.price.promo')
        @include('components.price.freeform')

        <p class="font-semibold text-xl text-center my-4">Stepper</p>
        @include('components.quantity.card')

        <p class="font-semibold text-xl text-center my-4">Color Picker</p>

        @include('components.color.card')
        @include('components.color.picker')
    </div>
    <div class="w-80 mb-2">
        <p class="font-semibold text-xl text-center mb-4">Image View and Picker</p>
        @include('components.image.card')
        @include('components.image.picker')


        <p class="font-semibold text-xl text-center my-4">Toggle Button</p>
        @include('components.buttons.toggle')

        <p class="font-semibold text-xl text-center my-4">Action Buttons</p>
        @include('components.buttons.action')

    </div>
</div>
@include('icons')
</body>
</html>
