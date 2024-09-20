<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Shop</title>
    <link rel = "stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
    </style>
</head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="bi bi-bag-check-fill"> E-kart</i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

               <form class="d-flex" role="search"> 
                <input class="form-control me-2" type="search" placeholder="Search for Brands, Products " aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-shop-window"></i> Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="bi bi-person-square"></i> Account</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-cart3"></i> Cart</a>
              </li>

          </div>
        </div>
    </nav>

      <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h3>Our featured</h3>
            <hr>
            <p>Here you can check out our new products with fair price. </p>
        </div>
        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/featured/1.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
               <a href="products/sproduct1.php"><button class="buy-btn">Buy now</button></a> 
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/1.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct2.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/2.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct3.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/3.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct4.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/4.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct5.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/5.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct6.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/6.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct7.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/7.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct8.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/8.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct9.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/9.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct10.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/10.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct11.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/11.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <a href="products/sproduct12.php"><button class="buy-btn">Buy now</button></a>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/12.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <button class="buy-btn">Buy now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/13.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <button class="buy-btn">Buy now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/14.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <button class="buy-btn">Buy now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/shop/15.jpg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <h5 class="p-name">Sports boots</h5>
                <h4 class="p-price">₹92.00</h4>
                <button class="buy-btn">Buy now</button>
            </div>
        </div>
      </section>


      <footer class=" footer mt-5 py-5">
        <div class="row container mx-auto pt-5">

          <div class="footer-one col-lg-3 col-md-6 col-12">
            <a class="navbar-brand" href="#"><i class="bi bi-bag-check-fill"> E-kart</i></a>
            
            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis architecto sit earum iusto est atque odit nulla fugiat hic velit voluptatem veniam delectus
               tempore cumque minima, qui repellendus repellat?</p>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase list-unstyled">
              <li><a href="#">men</a></li>
              <li><a href="#">women</a></li>
              <li><a href="#">boys</a></li>
              <li><a href="#">girls</a></li>
              <li><a href="#">new arrivals</a></li>
              <li><a href="#">shoes</a></li>
            </ul>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Contact us</h5>

            <div>
              <h6 class="text-uppercase">Address</h6>
              <p>123 STREET NAME, CITY. US</p>
            </div>

            <div>
              <h6 class="text-uppercase">Phone</h6>
              <p>(123) 456-7890</p>
            </div>

            <div>
              <h6 class="text-uppercase">E-mail</h6>
              <p>Mail@example.com</p>
            </div>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Instagram</h5>
            <div class="row">
              <img src="img/insta/1.jpg" alt="" class="img-fluid w-25 h-100 m-2">
              <img src="img/insta/2.jpg" alt="" class="img-fluid w-25 h-100 m-2">
              <img src="img/insta/3.jpg" alt="" class="img-fluid w-25 h-100 m-2">
              <img src="img/insta/4.jpg" alt="" class="img-fluid w-25 h-100 m-2">
              <img src="img/insta/5.jpg" alt="" class="img-fluid w-25 h-100 m-2">
            </div>
          </div>

        </div>

        <div class="copyright mt-5">
          <div class="row container mx-auto">

            <div class="col-lg-3 col-md-6 col-12">
              <img src="img/payment.png" alt="">
            </div>

            <div class="col-lg-3 col-md-6 col-12 text-nowrap">
              <p>E-Kart © 2022. All Rights Reserved</p>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <a href="#"> <i class="bi bi-facebook"></i></a>
              <a href="#"> <i class="bi bi-twitter"></i></a>
              <a href="#"> <i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </footer>
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
       integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
       crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
 crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" 
integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" 
crossorigin="anonymous"></script>
</body>
</html>