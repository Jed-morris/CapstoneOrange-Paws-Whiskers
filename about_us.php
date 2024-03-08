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
                    <button class="nav-link text-light btn btn-outline-light" href='login.php'>Login</button>
            </div>
        </div>
    </nav>
</header>

    <main>
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

<?php include('footer.php')?>