@props([
    'title' => '',
    'illustration' => null,
])

<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
    </head>
    <body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f9fafb; color: #1e293b; width: 100%; min-height: 100vh; box-sizing: border-box;">
        <div style="max-width: 600px; margin: 2rem auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <div style="padding: 2rem; text-align: center;">
                <img src="https://raw.githubusercontent.com//bellikal/projekt/main/public/assets/BRIAN-DATA-HUB_Logo.png" style="width: 15%; height: auto; display: inline-block;" />
            </div>

            @if($illustration)
                <div style="text-align: center;">
                    <img src="{{ $illustration }}" alt="E-Mail Illustration"
                         style="background-color: #ffffff; max-width: 40%; height: auto; border-radius: 8px;">
                </div>
            @endif

            <main>
                {{ $slot }}
            </main>

            <div style="background-color: #f1f5f9; padding: 1rem; text-align: center; font-size: 0.875rem; color: #6b7280;">
                © {{ date('Y') }} {{ config('app.name') }}. Alle Rechte vorbehalten.
            </div>
        </div>
    </body>
</html>
