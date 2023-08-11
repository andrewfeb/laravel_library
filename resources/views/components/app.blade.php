<!-- File resources/views/components/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perpustakaan | {{ $title ?? '' }}</title>
    </head>
    <body>
        <div>
            <h1> {{ $title }} </h1>
            <div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
