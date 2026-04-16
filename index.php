<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>RETRO CLOUD · Emulador Universal · Plataforma Completa</title>
    <link rel="stylesheet" href="Assets/Css/style.css">
</head>
<body>
    <canvas class="particle-bg" id="particleCanvas"></canvas>
    <?php include __DIR__ . '/Components/header.php'; ?>
    <main>
        <?php include __DIR__ . '/Components/landing.php'; ?>
        <?php include __DIR__ . '/Components/dashboard.php'; ?>
    </main>
    <?php include __DIR__ . '/Components/footer.php'; ?>
    <?php include __DIR__ . '/Components/modals.php'; ?>
    <script src="Assets/Scripts/app.js"></script>
</body>
</html>
