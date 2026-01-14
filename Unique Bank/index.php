<?php
// Redirect to the main bank page to avoid directory listings
header('Location: bank/bank.php');
exit;

// Fallback message if headers are already sent
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Unique Bank</title>
  </head>
  <body>
    <p><a href="bank/bank.php">Continue to Unique Bank</a></p>
  </body>
</html>
