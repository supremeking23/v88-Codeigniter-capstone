<!doctype html>
<html lang="en">
<?php $this->load->view("stores/includes/head");?>
    <body>
<?php $this->load->view("stores/includes/header");?>
        <main class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                   <form action="" class="categories">
                        <h4 class="mb-4">Categories</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Tv Television</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Air Conditioners</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Washing Machine</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" checked class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Audio & Theaters</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Office Electronic</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Car Electronics</label>
                        </div>
                   </form>

                   <form action="" class="sub-categories mt-4">
                        <h4 class="mb-4">Sub Categories</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="sub-category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Speaker</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="category[]" id="tv Television">
                            <label class="form-check-label" for="tv Television">Home Theater System</label>
                        </div>
                   </form>
                </div>

                <div class="col-md-9">
                    <div class="row result-count">
                        <div class="col-md-6">
                            <span>2</span> Products Found
                        </div>
                        
                            <form action="" class="filter-select-form  col-md-6 d-flex justify-content-end align-items-center">
                                <label for="">Sorted by:</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Price</option>
                                    <option value="">most popular</option>
                                </select>
                            </form>
                        
                    </div>
                    <div class="row mt-3 pl-3">
                        <div class="product search-product col-md-3">
                            <a href="#" class="">
                            <div class="product-img">
                                <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-300x300.jpg" class="" alt="" srcset="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-300x300.jpg 300w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-70x70.jpg 70w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-150x150.jpg 150w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-768x768.jpg 768w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-600x600.jpg 600w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a.jpg 1000w" >
                            </div>
                            <h3>$100</h3>
                            <h4>Sound Intone 165 Earphone White Version</h4>
                            <p>Sold By : Young Shop</p>
                            </a>
                            <select name="" class="star">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3" >3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="product search-product col-md-3">
                            <a href="#" class="">
                            <div class="product-img">
                                <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-300x300.jpg" class="" alt="" srcset="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-300x300.jpg 300w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-70x70.jpg 70w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-150x150.jpg 150w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-768x768.jpg 768w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a-600x600.jpg 600w, https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2013/06/4a.jpg 1000w" >
                            </div>
                            <h3>$100</h3>
                            <h4>Sound Intone 165 Earphone White Version</h4>
                            <p>Sold By : Young Shop</p>
                            </a>
                            <select name="" class="star">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3" >3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                    </div>

                    <div class="row mt-5 ">
                        <div class="col-md-12 d-flex flex-row-reverse">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

           
        </main>

        <footer class="mt-5 p-5">
            <div class="container">
                <div class="row row-icon-section pb-5">
                    <div class="col-md-3 row-icons">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        <div class="footer-icon-description  ml-3">
                            <h3>Free Delivery</h3>
                            <p>For all orders over $99</p>
                        </div>
                    </div>

                    <div class="col-md-3 row-icons">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                        <div class="footer-icon-description  ml-3">
                            <h3>Free Delivery</h3>
                            <p>For all orders over $99</p>
                        </div>
                    </div>

                    <div class="col-md-3 row-icons">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <div class="footer-icon-description  ml-3">
                            <h3>Free Delivery</h3>
                            <p>For all orders over $99</p>
                        </div>
                    </div>

                    <div class="col-md-3 row-icons">
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                        <div class="footer-icon-description  ml-3">
                            <h3>Free Delivery</h3>
                            <p>For all orders over $99</p>
                        </div>
                    </div>
                </div>

                <div class="row footer-links mt-5">
                    <div class="col-md-2 ">
                        <h4 class="mb-3">Quick Links</h4>
                        <a href="#">Policy</a>
                        <a href="#">Term & Conditions</a>
                        <a href="#">Shipping</a>
                        <a href="#">Return</a>
                        <a href="#">FAQs</a>
                    </div>

                    <div class="col-md-2 ">
                        <h4 class="mb-3">Company</h4>
                        <a href="#">About Us</a>
                        <a href="#">Affilate</a>
                        <a href="#">Carrer</a>
                        <a href="#">Contact</a>
                      
                    </div>

                    <div class="col-md-2 ">
                        <h4 class="mb-3">Business</h4>
                        <a href="#">Our Press</a>
                        <a href="#">Checkout</a>
                        <a href="#">My Account</a>
                        <a href="#">Shop</a>
                    </div>

                    <div class="col-md-4 ">
                        <h4 class="mb-3">Newsleter</h4>
                        <form action="" class="newsletter-column">
                            <input type="text" class="" id="">
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                    </div>


                </div>

                <div class="row mt-5 copyright-row">
                    <div class="col-md-6">
                        <p>© 2021 Village88 Ecommerce. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <p>We Using Safe Payment For:</p>
                        <ul class="payments"> 
                            <li>
                                <img width="45" height="22" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2017/12/p1.jpg" class="attachment-full size-full" alt="">
                            </li>
                             <li>
                                 <img width="44" height="27" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2017/12/p2.jpg" class="attachment-full size-full" alt="">
                            </li>
                             <li>
                                 <img width="44" height="27" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2017/12/p3.jpg" class="attachment-full size-full" alt="">
                            </li> 
                            <li>
                                <img width="46" height="15" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2017/12/p4.jpg" class="attachment-full size-full" alt=""></li> 
                            <li>
                                <img width="45" height="14" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2017/12/p5.jpg" class="attachment-full size-full" alt="">
                            </li> 
                            <li>
                                <img width="46" height="13" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/2017/12/p6.jpg" class="attachment-full size-full" alt="">
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>