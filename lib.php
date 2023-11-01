<?php
if(isset($_POST['submit'])) {
    $to = "jbarrios@distechlab.com"; // this is your Email address
    $subject = "Nuevo mensaje del formulario de contacto";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "De:" . $email;

    mail($to,$subject,$message,$headers);
    echo "Mensaje enviado. Gracias " . $name . ", nos pondremos en contacto contigo lo antes posible.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtelo de nuevo.";
    }
?>

