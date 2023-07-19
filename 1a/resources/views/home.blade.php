<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dekoor</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
        <link href="css/style.css" rel="stylesheet" />
        <link href="js/style.js" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        {{-- Navbar --}}
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ url('img/logo.jpeg')}}" height="50" width="150">
                    </a>
                  <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About us</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#">Furniture</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action1</a></li>
                          <li><a class="dropdown-item" href="#">Action2</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Partnerships</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                      </li>
                    </ul>
                    <div>
                        <nav class="navbar navbar-light bg-light">
                            <form class="container-fluid justify-content-start">
                                <button class="custom-button me-2" type="button">Sign Up</button>
                                <button class="custom-buttonn" type="button"><i class="bi bi-handbag"></i></button>
                            </form>
                          </nav>
                    </div>
                  </div>
                </div>
              </nav>
        </div>

        {{-- Display --}}
        <div class="container">
            <!-- Kolom kiri -->
            <div class="col-left">
                <h1 class="fw-bold">The kind of</h1>
                <h1 class="fw-bold"><span class="colored-text"> furniture</span> you have</h1>
                <h1 class="fw-bold">been lookning for</h1>
                <button class="button1" type="button"><i class="bi bi-search"></i> SEARCH CATALOG</button>
                <button class="button2" type="button"><i class="bi bi-play-circle"></i> WATCH VIDEOS</button>
            </div>

            <!-- Kolom kanan -->
            <div class="col-right">
              <!-- Ganti URL gambar di bawah ini dengan URL gambar yang Anda inginkan -->
                <img src="{{ url('img/sofa.jpeg')}}" alt="...">
                <button class="button-top">$329</button>
                <p class="text">Posht Sofa</p>
                <button class="button-bottom">VIEW DETAILS <i class="bi bi-chevron-right"></i></button>
            </div>
        </div>

        {{-- Why Choose Us? --}}
        <div class="wcu-container">
            <!-- Teks pertama -->
            <div class="text-1">
                <p>WHY CHOOSE US?</p>
            </div>
            <!-- Teks kedua -->
            <div class="text-2">
                <p>We care about details and the quality of our product</p>
            </div>
            <div class="column-container">
                <!-- Kolom pertama -->
                <div class="column">
                    <div class="Features">
                        <div class="IconFrame" >
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="wcu-contents">
                            <p>MANUFACTURED WITH QUALITY MATERIALS</p>
                        </div>
                    </div>
                </div>
                <!-- Kolom kedua -->
                <div class="column">
                    <div class="Features">
                        <div class="IconFrame">
                            <i class="fa-sharp fa-solid fa-5"></i>
                        </div>
                        <div class="wcu-contents">
                            <p>5 YEARS OF WARRANTY FOR EACH PROFUCT</p>
                        </div>
                    </div>
                </div>
                <!-- Kolom ketiga -->
                <div class="column">
                    <div class="Features">
                        <div class="IconFrame">
                            <i class="bi bi-bag"></i>
                        </div>
                        <div class="wcu-contents">
                            <p>20 YEARS OF EXPERTISE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Partner--}}
        <div class="partner-container">
            <div class="row">
                <div class="col-3">
                    <p class="partner-number">25+</p>
                    <p class="partner-text">PARTNERED BRANDS</p>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="partner-brands">
                            <img src="{{ url('img/gusto.jpeg')}}" class="img-brands" height="60" width="120"  alt="...">
                            <img src="{{ url('img/stripe.jpeg')}}" class="img-brands" height="60" width="120" alt="...">
                            <img src="{{ url('img/treehouse.jpeg')}}" class="img-brands" height="60" width="120" alt="...">
                            <img src="{{ url('img/upwork.jpeg')}}" class="img-brands" height="60" width="120" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Categories--}}
        <div class="categories">
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <div class="col col-lg-2">
                            <img src="{{ url ('img/gambar1.jpeg')}}" alt="..." class="img-cat">
                        </div>
                        <div class="col col-lg-2">
                            <img src="{{ url ('img/gambar2.jpeg')}}" alt="..." class="img-cat">
                        </div>
                        <div class="col">
                            <img src="{{ url ('img/gambar3.jpeg')}}" alt="..." class="img-cat2">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="cat-rec">
                        <p class="cat-rec-title">Categories</p>
                        <p class="cat-rec-sets">Furniture Sets Recomendations</p>
                        <!-- List grup 1 -->
                        <ul class="list-group">
                            <li class="list-item" onclick="toggleContent('content1')">Bedroom</li>
                                <div class="list-content" id="content1">
                                    <p>Penjelasan untuk Grup 1</p>
                                </div>
                        <!-- List grup 2 -->
                            <li class="list-item" onclick="toggleContent('content2')">Living Room</li>
                                <div class="list-content" id="content2">
                                    <p>Enjoy a great living room aesthetic with your family</p>
                                    <p>Design created for increases comfortability</p>
                                </div>
                        <!-- List grup 3 -->
                            <li class="list-item" onclick="toggleContent('content3')">Home Office</li>
                                <div class="list-content" id="content3">
                                    <p>Penjelasan untuk Grup 3</p>
                                </div>
                        <!-- List grup 4 -->
                            <li class="list-item" onclick="toggleContent('content4')">Gaming Room</li>
                                <div class="list-content" id="content4">
                                    <p>Penjelasan untuk Grup 4</p>
                                </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    {{--Our Product--}}
    <div class="product">
        <div class="row">
            <div class="col-8">
                <p class="product-title">OUR PRODUCTS</p>
                <p class="product-text">This month's best seller</p>
            </div>
            <div class="col-4">
                <button class="product-all">SEE MORE</button>
            </div>
        </div>
          <div id="carouselExampleInterval" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ url ('img/produkkursi.jpeg')}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Chair</h5>
                      <a href="#" class="btn btn-light">$329</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ url ('img/produksofa.jpeg')}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Sofa</h5>
                      <a href="#" class="btn btn-light">$329</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ url ('img/produkmeja.jpeg')}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Table</h5>
                      <a href="#" class="btn btn-light">$329</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ url ('img/produktatakan.jpeg')}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Shelves</h5>
                      <a href="#" class="btn btn-light">$329</a>
                    </div>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    {{--Deals--}}
    <div class="deals">
        <div>
            <p class="deals-title">LIMITED DEALS</p>
            <p class="deals-text">Become a member and get 10% off of your first purchase</p>
        </div>
        <div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </body>
</html>
