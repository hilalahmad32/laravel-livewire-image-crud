<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Image Crud</title>
    @livewireStyles
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="container p-4">
            <h1 class="text-center">Laravel Livewire Image Crud</h1>
        </div>
    </div>

    {{$slot}}

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>
    @livewireScripts
</body>
</html>