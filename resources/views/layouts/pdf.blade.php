<!DOCTYPE html>
<html lang="en" class="dark h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased w-full min-h-screen bg-gray-900 text-white">
        <div>
            <div
                class="flex flex-col justify-between h-screen max-h-screen">
                <div class="flex flex-col h-screen max-h-screen justify-between m-5 p-5 rounded">
                    <main class="">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
