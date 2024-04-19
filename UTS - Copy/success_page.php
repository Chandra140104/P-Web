<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="navbar">
        <a href="landingPage.html"><img src="logo.png" alt="Logo" class="navbar-logo"></a>
        <a href="http://wa.me/6281334613705">Contact</a>
        <a href="landingPage.html">Home</a>
        
    </div>
    <div class="container">
        <h1>Registrasi berhasil</h1>
        <p>Terima kasih telah mendaftar bersama kami. Kami telah menerima informasi Anda dan akan segera menghubungi Anda.</p>
        
        <?php if(isset($_SESSION['form_data'])): ?>
            <h2>Hasil Jawaban:</h2>
            <ul>
                <li>Nama: <?php echo htmlspecialchars($_SESSION['form_data']['nama']); ?></li>
                <li>Tempat Lahir: <?php echo htmlspecialchars($_SESSION['form_data']['tempat-lahir']); ?></li>
                
            </ul>
        <?php endif; ?>

        <a href="landingPage.html">Home</a><br>
        
    </div>
    <script type="text/javascript">
    
    alert('Terima kasih sudah mendaftar. Kami telah menerima informasi Anda dan akan segera menghubungi Anda.');
    </script>
    
    
</body>
</html>
