<?php $page = "dashboard"; ?>

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- LOGO -->
      <link rel="icon" href="./favicon.ico" sizes="32x32" type="image/png" />

      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />

      <link rel="stylesheet" href="./css/all-styles.css" />

      <link rel="stylesheet" href="./css/navbar.css" />

      <script src="./tailwind/tailwind-cdn.js"></script>
   </head>
   <body class="bg-gray-50">
      <?php include './components/navbar.php'; ?>
      <div class="container mx-auto mt-10">
            <div class="text-3xl">THIS IS THE DASHBOARD</div>
      </div>
   </body>
</html>
