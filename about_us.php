<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Whiskers- Home(OrangeHost)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
/* Container styles */
.container {
    margin-top: 50px;
}

/* Section headings */
h2, h3 {
    color: #333;
    font-weight: bold;
}

/* Introduction paragraph */
p {
    color: #444;
    line-height: 1.6;
}

/* Team members list */
ul {
    list-style-type: none;
    padding-left: 0;
}

/* Team member names */
strong {
    color: #333;
}

/* Values list */
ul {
    margin-top: 10px;
}

/* Pet care tips list */
ul {
    margin-top: 10px;
}

/* Testimonials blockquote */
blockquote {
    font-style: italic;
    color: #777;
}

/* Testimonials cite */
cite {
    display: block;
    text-align: right;
    color: #555;
}

/* Contact information */
p {
    margin-bottom: 5px;
}

/* Responsive layout */
@media (max-width: 768px) {
    /* Adjustments for smaller screens */
    .container {
        margin-top: 30px;
    }

    h2, h3 {
        font-size: 24px;
    }

    p {
        font-size: 16px;
    }

    blockquote {
        font-size: 14px;
    }

    cite {
        font-size: 12px;
    }
}       
    </style>
</head>

<body class="bg-body-tertiary">
<header class="h-auto">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="index.php" onclick="openItems('main')"><i class="fas fa-paw"></i> Paws and Whiskers <i class="fas fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dry_dog_food.php" onclick="openItems('dry_dogfood')">Dry Dog Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="wet_dog_food.php" onclick="openItems('wet_dogfood')">Wet Dog Food</a>
                    </li>
                </ul>
            <div class="nav-icons text-light">
                <div class="fas fa-search ms-3" id="search-btn"></div>
                    <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                        <span>0</span>
                        </div>
                    <a class="nav-link text-light btn btn-outline-light" href="login1.php">Login</a>
            </div>
        </div>
    </nav>
</header>

    <main>
        <!----Login Form---->
        <section class="card-container" id="login">
            <?php include('login.php'); ?>
        </section>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>About Us</h2>
                        <p>Welcome to Paws and Whiskers, your one-stop shop for all your pet's needs. Founded in [year], we are dedicated to providing top-quality products and exceptional service to our customers and their furry friends.</p>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Meet Our Team</h3>
                    <p>Our team of pet enthusiasts is here to help you find the perfect products for your pets. Get to know the faces behind Paws and Whiskers!</p>
                    <ul>
                        <li><strong>Jed Moses</strong> - UX Designer</li>
                        <li><strong>Robert Starks</strong> - Back-end Developer</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Our Values</h3>
                    <p>At Paws and Whiskers, we believe in...</p>
                    <ul>
                        <li>Providing the highest quality products for your pets</li>
                        <li>Exceptional customer service</li>
                        <li>Promoting animal welfare and adoption</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Pet Care Tips</h3>
                    <p>Here are some tips to keep your pets happy and healthy:</p>
                    <ul>
                        <li>Regular exercise is essential for your pet's health.</li>
                        <li>Ensure your pet has a balanced diet and access to fresh water at all times.</li>
                        <li>Schedule regular check-ups with your veterinarian.</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>What Our Customers Say</h3>
                    <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis hendrerit diam, vel tincidunt velit."</blockquote>
                    <cite>- Neo Smith, Happy Pet Owner</cite>
                </div>
            </div>
        </article>

        <article class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Contact Us</h3>
                    <p>For inquiries, you can reach us at:</p>
                    <p>Address: 123 Larabel Street, Vercel City</p>
                    <p>Phone: 123-456-7890</p>
                    <p>Email: info@pawsandwhiskers.cloud</p>
                </div>
            </div>
        </article>
     
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Paws and Whiskers</h3>
                    <p>Supplies for your furr babies</p>
                    <div class="share">
                        <a href="https://www.facebook.com/pawsandwhiskers12" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/" class="fab fa-twitter"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Info</h3>
                    <a href="https://mail.google.com/" class="links"> <i class="fas fa-envelope"></i></a>
                    <a href="https://maps.google.com/" class="links"> <i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="col-md-4">
                    <h3>Quick Links</h3>
                    <a href="about_us.php" class="links">About us</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="credit">Made with ♥ by Paws and Whiskers | All Rights Reserved 2024</div>
            </div>
        </div>
    </div>
</footer>

    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">Top</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./js/homepage.js"></script>

    <script>
        /* FACEBOOK customer chat script: */
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1'
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="110063563909634"></div>
        <script type="text/javascript">
        /* YW Tracking Script: */
            (function() {
                var sa = document.createElement('script');
                sa.type = 'text/javascript';
                sa.async = true;
                sa.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.ywxi.net/js/1.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(sa, s);
            }
            )();
    </script>

<script>
function openItems(x) {
    var i, cardContainer, navLinks;
    cardContainer = document.getElementsByClassName("card-container");
    for (i = 0; i < cardContainer.length; i++) {
        if (cardContainer[i].id !== 'login') {
            cardContainer[i].style.display = "none";
        }
    }
    document.getElementById(x).style.display = "grid";
}

document.getElementById('signUp').addEventListener('click', function() {
    var signUpForm = document.getElementById('signupForm');
    signUpForm.style.display = signUpForm.style.display === 'none' ? 'block' : 'none';
});

    // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/* SCROLL TO TOP button functionality: */
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopBtn").style.display = "block";
  } else {
    document.getElementById("scrollToTopBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>
