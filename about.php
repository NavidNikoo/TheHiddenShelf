<?php
include 'config.php';
session_start();

$user_id=$_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">

</head>
<body>
  
<?php
include 'user_header.php';
?>
<section class="about_cont">
    <img src="about1.png" alt="">
    <div class="about_descript">
      <h2>Why Choose Us ?</h2>
      <p>At The Hidden Shelf, we do more than sell books — we curate experiences. Whether you're diving into fantasy realms, uncovering forgotten histories, or seeking wisdom in quiet philosophy, our shelves are lined with carefully selected titles for every kind of reader.

          Our passionate team is made up of lifelong book lovers, always ready to share recommendations and help you discover stories that speak to you. From cozy in-store book clubs to virtual author talks, we foster a welcoming community that celebrates the joy of reading.

          With an intuitive online shop, secure checkout, and timely delivery, your next adventure is just a click away. And if you ever need help, we're here — kind, prompt, and ready to assist. Join us, and make The Hidden Shelf your go-to corner of the literary world.
    </p>
    </div>
  </section>

  <section class="questions_cont">
    <div class="questions">
    <h2>Have Any Queries?</h2>
    <p>At The Hidden Shelf, you're not just a customer — you're a fellow reader. If you have questions, need a book recommendation, or want help with your order, our friendly team is always here to support you. We're just one message away from helping you turn the page to your next favorite story.</p>
    <button class="product_btn" onclick="window.location.href='contact.php'">Contact Us</button>
    </div>
    
  </section>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>