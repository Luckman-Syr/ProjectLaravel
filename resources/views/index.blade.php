<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PetShop</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        @include('partials/navbar')
        <div class="kotak">
            <div class="jumbotron ml-5" >
                <h1 class="display-4">Hallo, Cat Lovers</h1>
                <p class="lead">Ayuk temen - temen semua kita jaga kucing kita tetap sehat dan bersih bersama Little CatShop</p>
                <a class="btn btn-lg" href="#" role="button">Let's Get Start It</a>
            </div>
            <div class="grid">
                <div id="carouselExampleSlidesOnly" class="carousel slide ml-5 mr-5" data-ride="carousel" style="margin-top: 10%;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials/contentindex')
        <footer class="text-center text-lg-start bg-light text-muted">
            <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span><h3>Hubungi Kami</h3></span>
                </div>
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </section>
            <section class="">
                <div class="container text-md-start mt-5">
                <div class="row mt-4">
                    <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                        <h4 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h4>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <h4 class="text-uppercase fw-bold mb-4 mt-5">
                            Contact
                        </h4>
                        <p><i class="fas fa-home me-3"></i> Magelang</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            catshop.22@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +628923212312</p>
                    </div>
                    <div>
                        <h4>Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1813.7636386164606!2d110.23933331392753!3d-7.482209536337852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1638754336910!5m2!1sid!2sid" width="550" height="300" style="border:0; margin-bottom: 5%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                </div>
            </section>
        </footer>
    </body>
</html>
