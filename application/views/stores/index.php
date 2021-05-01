<!doctype html>
<html lang="en">
<?php $this->load->view("stores/includes/head");?>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Search</button>
                        </form>

                        <ul class="navbar-nav ml-auto">
                           
                           <li class="nav-item">
                               <a class="nav-link" href="#">Login</a>
                           </li>
                         
                           <li class="nav-item">
                               <a class="nav-link" href="#">Register</a>
                           </li>
                       </ul>
                        
                    </div>
                </nav>
            </div>
        </header>

        <main class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="http://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2019/07/s1-1.jpg" class="d-block w-100 h-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>SMART TV 43 <br> INCH 43M5500, <br> 4K VFULL HD TIZEN OS</h5>
                                <!-- <h5>Third slide label</h5> -->
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="http://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2019/07/bn132.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="http://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2019/07/bn33.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="feature-image image-one">
                        <div class="banner-content">
                            <h2 class="banner-title"><span class="hl-title">Fluence </span>Minimal<br>Speaker</h2>
                            <div class="banner-desc"><p>Price Just<br><span style="color: #669900; font-size: 18px; font-weight: 600;">$159.99</span></p></div>
                        </div>
                    </div>
                    <div class="feature-image image-two">
                    </div>
                </div>
            </div>

        </main>
    </body>
</html>