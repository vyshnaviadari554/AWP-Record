<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About Us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
<video src="images/Farm1.mp4"width="100%" loop autoplay muted></video>     
        </div>

        <div class="content">
            <h3>Why choose us?</h3><center>
            <p>➤ A wide range of pocket-friendly various options for my near and dear ones, including fresh flowers and plants, express delivery of flowers to the destination address itself, improved customer service in case of a problem with immediate feedback and solution.<br>
            ➤First, the company buys products directly from manufacturers and suppliers which provides a more fresh product for you, the customer. This approach also removes wholesalers (middlemen) from the equation which leads to a huge reduction in costs. Those savings are calculated and displayed on each product page in the form of comparable market prices.
        </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>
<br><br><br><br>

    <div class="flex">
        <div class="content">
            <h3>what we provide?</h3>
            <p>&nbsp&nbsp&nbsp ➤ Our vision is to provide you with the best flower options as well as to ensure that what you experience as a customer while searching for flowers is stress-free and enjoyable!Our vision is to provide you with the best flower options as well as to ensure that what you experience as a customer while searching for flowers is stress-free and enjoyable! <br>
&nbsp&nbsp&nbsp <br>➤ Our main objective is to ensure that you get the best quality products including fresh flowers on our portal. It is our responsibility to ensure that customers find the right flowers for their people and can deliver them on time.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <video src="images/Farm2.mp4"width="100%" loop autoplay muted></video>     
        </div>
    </div>
<br><br><br><br>

    <div class="flex">
        <div class="image">
<video src="images/Farm3.mp4"width="100%" loop autoplay muted></video>        
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>&nbsp➤ The website starts at a small local flower shop. After developing a traditional retail flower business, in 2022 the owner decided to try something new by expanding into online sales with innovative business models and a more efficient way of selling flowers. The website was born with its motto of "Fresh, Fast and Fair".<br>
➤ We are proud to support our local communities as well as national not-for-profit and sports agencies, including Hockey Sports India, Ice Skating India and Basketball Children's Foundation.</p>         
   <a href="#reviews" class="btn">clients reviews</a>
        </div>
    </div><br>
</section>

<section class="reviews" id="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="./images/testimonials/Snigdha.jpg" alt="">
            <p>To be honest the red rose vase I ordered is more beautiful than the picture! There is a lot of satisfaction with the experience !
Thank you for the wonderful flower... My family members are happy and it was a bright fresh and beautiful rose flower.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Snigdha Bodepudi</h3>
        </div>
																																																																
        <div class="box">
            <img src="./images/testimonials/mavayya.jpg" alt="">
            <p>Flowers were ordered for my daughter's special birthday.The flowers on the website are exactly the same as the flowers distributed by the team.
It was timely and my requests were present immediately and without any hassle. I'll order here again! Thanks for a great service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>SDS Praneeth</h3>
        </div>

        <div class="box">
            <img src="./images/testimonials/mande.jpg" alt="">
            <p>I was a bit scared while placing my order but it was amazing... Tulips flowers are fresh and beautiful...
Hopefully, in the future too, similar good quality services will be available... Very fast delivery quality and presentation looks good for last minute orders.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sammy Mande</h3>
        </div>

        <div class="box">
            <img src="./images/testimonials/chandu.jpg" alt="">
            <p>I had ordered my aunt to deliver the flowers on her birthday a week ago.The customer service was excellent I had payment problems with a foreign CC it was well laid off.
The flowers were arranged in a magnificent kalagi. Thank you very well...</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hema Chandh</h3>
        </div>

        <div class="box">
            <img src="./images/testimonials/deepu akka.jpg" alt="">
            <p>After calling for the number of flower shops for delivery and rejecting my request to deliver the flowers before 4 pm, 
Only this website gave my request.Today we had a special event. 
<br><br><br></p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Deepika Piku</h3>
        </div>

        <div class="box">
            <img src="./images/testimonials/vinay annaya.jpg" alt="">
            <p>This flower shop website is highly recommended in India! I like that it comes with a food packet of flowers which has some instructions/details on how to extend the freshness of the flowers,
Which is a great help for people like me who know very little in gardening. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Vinay Varma</h3>
        </div>

    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>