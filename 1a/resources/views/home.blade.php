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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        {{-- Navbar --}}
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="...">Dekoor
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
                <h6>WHY CHOOSE US?</h6>
            </div>
            <!-- Teks kedua -->
            <div class="text-2">
                <p class="fw-bold">We care about details and the quality of our product</p>
            </div>
            <!-- Kolom pertama -->
            <div class="column-container">
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

        {{--Partner--}}

    </body>
</html>
