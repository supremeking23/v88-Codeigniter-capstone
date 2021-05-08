        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#">Village<span>88</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-search my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                        <ul class="navbar-nav ml-auto">
                           
                           <li class="nav-item">
                               <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#login">Login</a>
                           </li>
                         
                           <li class="nav-item">
                               <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#register">Register</a>
                           </li>
                       </ul>
                        
                    </div>
                </nav>
            </div>
        </header>


                <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-darkblue">
                        <h5 class="modal-title text-center" id="login">Village<span>88</span> | Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?= form_open("login_process")?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-darkblue">
                        <h5 class="modal-title text-center" id="register">Village<span>88</span> | Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?= form_open("registration_process")?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>