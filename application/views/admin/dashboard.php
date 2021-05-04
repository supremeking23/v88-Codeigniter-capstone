<!doctype html>
<html lang="en">
<?php $this->load->view("admin/includes/head");?>
    <body>
       
    <?php $this->load->view("admin/includes/header");?>

        <div class="container-fluid mt-5">
            <div class="row">
<?php $this->load->view("admin/includes/navigation");?>
                <div class="col-md-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>New Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Number of Users</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-stalker"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Number of products</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-list"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>$150</h3>
                                        <p>Total Sales</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-social-usd"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="row box">
                           <div class="col-md-6">
                                <h2>Users</h2>
                           </div>
                            <div class="col-md-12 table-responsive ">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                        <div class="row box mt-5">
                           <div class="col-md-6">
                                <h2>Orders</h2>
                           </div>
                            <div class="col-md-12 table-responsive ">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Billing Address</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>