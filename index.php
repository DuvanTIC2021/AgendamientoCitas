<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Citas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
  
</head>
<body>
    <div class="top-content">
        <h1 style="font-size: 5em;">Bienvenidos a Style</h1>
        <img src="img/style2.png" alt="Descripción de la imagen" style="width: 30%;">
    </div>
    
    <div class="top-content">
        <h1  style="font-size: 3em;">Nuestros Servicios</h1>
     
    </div>
</div>
<div class="box-container">
    <div class="box">
        <h3>SPA</h3>
        <img src="img/style4.png" alt="Descripción de la imagen 1" style="width: 30%;">
        <p>En nuestro servicio de spa encontraras un lugar donde puedes relajarte y cuidarte con una variedad de tratamientos como masajes, faciales y envolturas corporales; el ambiente tranquilo te ayuda a desconectar y renovarte, proporcionando una experiencia de bienestar físico y mental.</p>
    </div>
    <div class="box">
        <h3>BARBERIA</h3>
        <img src="img/style5.png" alt="Descripción de la imagen 2" style="width: 30%;">
        <p>En nuestro servicio de Barberia encontraras un lugar donde puedes disfrutar de servicios de cuidado y estilo de barba y cabello; desde cortes clásicos hasta modernos, cada servicio está diseñado para que te sientas y luzcas lo mejor posible. Disfrutarás de un ambiente acogedor y auténtico, donde los barberos expertos te brindarán una atención personalizada y cuidadosa. Es el lugar perfecto para relajarte, socializar y salir luciendo impecable.</p>
    </div>
    <div class="box">
        <h3>MANICURE</h3>
        <img src="img/style6.png" alt="Descripción de la imagen 3" style="width: 30%;">
        <p>En nuestro servicio de Manicure encontraras un lugar donde puedes cuidar y embellecer tus uñas; desde manicures básicas hasta diseños creativos, cada tratamiento está diseñado para realzar la belleza natural de tus manos. Disfrutarás de un ambiente tranquilo y profesional, donde los especialistas en uñas te brindarán un servicio personalizado y de alta calidad. Es el lugar perfecto para relajarte y consentirte mientras tus manos reciben el cuidado que se merecen.</p>
    </div>
    <div class="box">
        <h3>PEDICURE</h3>
        <img src="img/style7.png" alt="Descripción de la imagen 4" style="width: 30%;">
        <p>En nuestro servicio de Pedicure encontraras un lugar donde puedes cuidar y embellecer tus pies; desde pedicures básicas hasta tratamientos más especializados, cada servicio está diseñado para mantener tus pies saludables y hermosos. </p>
        <p>Disfrutarás de un ambiente relajante y acogedor, donde los profesionales te brindarán una atención personalizada y de alta calidad. Es el lugar perfecto para relajarte y consentirte mientras tus pies reciben el cuidado que se merecen.</p>
    </div>
</div>
    <div class="container">
        <div class="description">
            <h1 style="font-size: 1em;">Agenda una Cita con Nosotros</h1>
            <p>Siga los pasos a continuación para agendar su cita:</p>
            <img src="img/style2.png" alt="Descripción de la imagen" style="width: 80%;">
        </div>
        <div class="appointment-form">
            <h2>Agendar Citas</h2>
            <form action="submit.php" method="post">
                <label for="location">Lugar:</label>
                <select id="location" name="location">
                    <option value="">Seleccionar</option>
                    <option value="oficina">Kennedy</option>
                    <option value="virtual">Chapinero</option>
                </select>
                <label for="person">Servicio:</label>
                <select id="person" name="person">
                    <option value="">Seleccionar</option>
                    <option value="SPA">SPA</option>
                    <option value="Barberia">Barberia</option>
                    <option value="Manicure">Manicure</option>
                    <option value="Pedicure">Pedicure</option>
                </select>
                <label for="date">Día:</label>
                <input type="date" id="date" name="date">
                <label for="time">Hora:</label>
                <input type="time" id="time" name="time">
                <div style="text-align: center;">
                    <button type="submit" style="max-width: 100px;">Agendar</button>
                </div>
            </form>
        </div>
    </div>
    <p></p>
    <div class="social-media">
        <a href="#" class="social-icon"><img src="img/face.png" alt="Facebook"></a>
        <a href="#" class="social-icon"><img src="img/x.png" alt="Twitter"></a>
        <a href="#" class="social-icon"><img src="img/insta.png" alt="Instagram"></a>
    </div>
</body>
</html>
