<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="bg-red-100" x-data="{ open: false }">
        <h1>Hello dear</h1>
        <button @click="open=!open">Click Me</button>
        <div x-show="open" class="bg-red-500">Hello wodrld</div>
    </div>

</body>

</html>