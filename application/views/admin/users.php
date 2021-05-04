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
                       
                        </div>

                        <div class="row box">
                           <div class="col-md-6">
                                <h2>Users</h2>
                           </div>
                            <div class="col-md-12 table-responsive ">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Date Registered</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">User Type</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Ivan Christian Jay</th>
                                            <td>November 23 2021</td>
                                            <td>00000000000</td>
                                            <td>email.com</td>
                                            <td>Active</td>
                                            <td>Admin</td>
                                            <td>
                                                <button type="button" class="btn bg-yellow btn-sm text-white" data-toggle="modal" data-target="#editForm">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </button> |
                                                <button type="button" class="btn bg-red btn-sm text-white" data-toggle="modal" data-target="#editForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                               
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editForm" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-4 d-flex flex-column justify-content-center align-items-start">
                                                                            <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/guest.jpg" alt="User profile picture">
                                                                            <form action="">
                                                                                <input type="file" name="" id="profile">
                                                                            </form>
                                                                        </div>  
                                                                        <div class="col-md-8">
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlInput1">Email address</label>
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlSelect1">Example select</label>
                                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlSelect2">Example multiple select</label>
                                                                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                        
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