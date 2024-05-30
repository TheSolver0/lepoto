<!DOCTYPE html>
<html>
<head>
    <title>Laravel SweetAlert Example</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <button id="alertButton">Show Alert</button>

    <script>
        document.getElementById('alertButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Success!',
                text: 'This is a SweetAlert message.',
                icon: 'success',
                confirmButtonText: 'Cool'
            });
        });
    </script>
</body>
</html>
