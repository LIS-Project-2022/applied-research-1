<?php
    require_once('../../app/models/database.class.php');
    require_once('../../helpers/validator.class.php');
    require_once('../../helpers/component.class.php');
    class Page extends Component{
        public static function templateHeader($title)
        {
            print("
            <!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>$title</title>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
                <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                <link rel='icon' href='../../web/img/iconos.png'>
            </head>
            <body>
                <header>
                    <nav class='navbar navbar-expand-md navbar navbar-light' style='background-color:lightsalmon'>
                        <div class='container-fluid'>
                            <a class='navbar-brand' href='../../dashboard/pizzas'>
                                <img src='../../web/img/iconos.png' alt='' width='50' height='50'>
                            </a>
                            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
                            <div class='collapse navbar-collapse' id='navbarCollapse'>
                                <ul class='navbar-nav me-auto mb-2 mb-md-0'>
                                    <li class='nav-item'>
                                        <a class='nav-link active' style='font-weight: bold;' aria-current='page' href='index.html'>Pizzeria SORWX</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <main class='my-3'>
            ");
        }

        public static function templateFooter()
        {
            print('
                </main>
            </body>
            </html>
            ');
        }
    }

?>