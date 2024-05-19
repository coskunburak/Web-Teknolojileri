<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $languages = $_POST['languages'];
    $city = $_POST['sehrim'];
    $message = $_POST['mesaj'];
    ?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Verileri</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <h2>Gönderilen Form Verileri</h2>
            <p><strong>Adınız ve Soyadınız:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Cinsiyet:</strong> <?php echo htmlspecialchars($gender); ?></p>
            <p><strong>Eğitim Durumunuz:</strong> <?php echo htmlspecialchars($education); ?></p>
            <p><strong>Hakim Diller:</strong> <?php echo htmlspecialchars(implode(", ", $languages)); ?></p>
            <p><strong>Şehir:</strong> <?php echo htmlspecialchars($city); ?></p>
            <p><strong>Mesaj:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
        </div>
    </body>

    </html>
<?php
}
?>
