<?php 

$page = "enrollment";
$stat = "payment";

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Admin | Enrollment</title>

      <?php include '../links.php'; ?>
   </head>
   <body>
      <?php include '../components/navbar.php'; ?>
      <div class="container mx-auto mt-10">
         <div class="flex items-center mb-13">
            <div class="text-3xl text-gray-700 font-semibold flex items-center">
               ENROLLMENT TRACKING
               <ul class="uk-breadcrumb">
                  <li><a href=""></a></li>
                  <li><span>Payments</span></li>
               </ul>
            </div>
         </div>
         <?php include '../components/enrollment-btn.php'; ?>
         <div class="mt-7">
            <?php include '../components/tbl-advising.php'; ?>
         </div>
      </div>
   </body>
</html>
