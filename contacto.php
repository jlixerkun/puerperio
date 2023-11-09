<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $enviadoPor = "proyectococuyo@gmail.com";

    // Replace with your email address
    $to = "afpera@gmail.com";
    $subject = "Form Submission from Website";

    $message = "Nombre: $nombre\n..";
    $message .= "Correo: $correo\n..";
    $message .= "Mensaje:\n..$mensaje";

    $headers = "From: $enviadoPor\r\n..";
    $headers .= "Reply-To: $enviadoPor\r\n..";

    if (mail($to, $subject, $message, $headers)) {
        $response = "¡Hemos recibido tu mensaje. Pronto podrás verlo publicado!";
    } else {
        $response = "Ha habido un error al enviar tu mensaje. Por favor intenta de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacto | puerperio</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/ui/favicon_puerperio16.png">
    <link rel="icon" type="image/png" sizes="32x31" href="assets/img/ui/favicon_puerperio32.png">
    <link rel="icon" type="image/png" sizes="180x171" href="assets/img/ui/favicon_puerperio180.png">
    <link rel="icon" type="image/png" sizes="192x182" href="assets/img/ui/favicon_puerperio192.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Rockwell%20Std.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>

        <?php require 'cabeza.php' ?>

        <section id="contacto">
            <div class="container py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>El muro de las comentaciones</h2>
                        <p class="w-lg-50">He aquí lo que dice la gente</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col comments">
                        <div class="comentario">
                            <!-- Start: comAut -->
                            <h5 class="text-start comAut">Catalina Mosquera</h5><!-- End: comAut -->
                            <!-- Start: comBox -->
                            <p class="fst-italic comBox">Este es un mensaje que haya dejado alguien escrito con el formulario adjunto, el cual llega al correo de puerperio.</p><!-- End: comBox -->
                        </div>
    
    
                        <div class="comentario">
                            <!-- Start: comAut -->
                            <h5 class="text-start comAut">Catalina Mosquera</h5><!-- End: comAut -->
                            <!-- Start: comBox -->
                            <p class="fst-italic comBox">Este es un mensaje que haya dejado alguien escrito con el formulario adjunto, el cual llega al correo de puerperio.</p><!-- End: comBox -->
                        </div>
                        
    
                        <div class="comentario">
                            <!-- Start: comAut -->
                            <h5 class="text-start comAut">Catalina Mosquera</h5><!-- End: comAut -->
                            <!-- Start: comBox -->
                            <p class="fst-italic comBox">Este es un mensaje que haya dejado alguien escrito con el formulario adjunto, el cual llega al correo de puerperio.</p><!-- End: comBox -->
                        </div>
                    </div>
                    <div class="col msgbox">
                        <h3 class="fw-bold" 
                        
                        >Deja tú también un mensaje...</h3>
                
                        <form action="./contacto.php" method="post" name="mandelo" id="mandelo">
                            <input type="text" class="formInput" placeholder="Nombre" name="nombre">
                            <input type="email" class="formInput" placeholder="correo" name="correo">
                            <textarea class="formInput" placeholder="mensaje" rows="3" name="mensaje"></textarea>
                            <input class="btn btn-primary" type="submit">
                        </form>
                
                        <section class="main row">
                            <h2>
                                <?php
                                if ($response) {
                                    echo $response;
                                }
                                ?>
                            </h2>
                        </section>

                    </div>


                </div>
            </div>
        </section>


        <?php require 'pie.php' ?>
    </div>
</body>