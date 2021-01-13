<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <?php require_once 'email.php'; ?>

  <?php
  if($message_sent):
  ?>

  <h3>Thanks, we'll be in touch soon. </h3>

  <?php
    else:
  ?>

  <div class="container">
    <h1 class="brand">School Partnerships</h1>
      <div class="brand-info">
        <h3>Complete the form below for consideration by our Partner Relations Team. We will be in touch soon </h3>
      </div>
      <div class="wrapper">
      <div class="contact">
        <form action="email.php" method="POST" >
          <p class="full">
            <label for="">School Name</label>
            <input type="text" name="school">
          </p>

          <p>
            <label for="">Contact First Name</label>
            <input type="text" name="first-name">
          </p>

          <p>
            <label for="">Contact Last Name</label>
            <input type="text" name="last-name">
          </p>

          <p>
            <label for="">Contact Email</label>
            <input class="<?= $invalid_class_name ?? "" ?>"  type="email" name="email">
          </p>

          <p>
            <label for="">Phone Number</label>
            <input type="text" name="phone">
          </p>

          <p class="full">
            <label for="">Contact Title</label>
            <input type="text" name="title">
          </p>

          <p class="full">
            <label for="">Additional Comments</label>
            <textarea class="full" name="comments" id="" cols="30" rows="5"></textarea>
          </p>

          <p class="full">
            <h4>Terms & Conditions</h4>
            <input type="checkbox" name="vehicle1" value="Bike">
            <label for="">I declare that the information contained in this application and all supporting documentation is true and correct</label>
          </p>

          <p class="full">
            <button>Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>

  <?php
  endif;
  ?>
</body>
</html>