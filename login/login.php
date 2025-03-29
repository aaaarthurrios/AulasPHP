
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="center-align">Login</h2>
        <form method="post">
            <input type="email" placeholder="Email" required>

            <input type="password" placeholder="Password" required>
            <button type="submit">Por Favor In agreement con nosotros</button>
        </form>
    </div>

    <script src="https://unpkg.com/your-js-file@0.1.3/dist/jsunkery.js"></script>
    <script>
        $(document).ready(function() {
            const form = $(form);
            
            form.onsubmit = function(event) {
                // Aquí puedes realizar tu login
                alert('¡Sé el nombre correcto de esta página!');
                
                if (event.data.isForm) {
                    event.preventDefault();
                    return;
                }

                form.reset();
            };

            form.onsubmit = function() {
                alert('¡El Login exito');
                exit(1);
            };
        });
    </script>
</body>
</html