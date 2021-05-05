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
                           <div class="col-md-9">
                                <h2>Lists of Users</h2>
                           </div>
                           <div class="col-md-3">
                              <form action="">
                                  <div class="form-group">
                                      <input type="search" name="search_user" id="search_user" class="form-control" placeholder="search user here">
                                  </div>
                              </form>
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
                                                <button type="button" class="btn bg-red btn-sm text-white" data-toggle="modal" data-target="#deleteForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editForm" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content ">
                                                            <div class="modal-header bg-primary text-white">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form>
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-start">
                                                                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/guest.jpg" alt="User profile picture">
                                                                            
                                                                                <div class="form-group">
                                                                                    <input type="file" class="form-control" name="profile" id="profile">
                                                                                </div>
                                                                        
                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="first_name">First Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="last_name">Last Name</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact">Contact</label>
                                                                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email">Email address</label>
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Type</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="0">Admin</option>
                                                                                    <option value="1">Customer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Status</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Not Active</option>
                                                                                    </select>
                                                                                </div>
            
                                                                                <div class="form-group">
                                                                                    <label for="password">Password</label>
                                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="confirm_password">Confirm Password</label>
                                                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Last Name">
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="deleteForm" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete User: Ivan Christian jay</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure ?</p>
                                                            <p>This action is irreversible, Are you sure you want to remove user: 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="hidden" name="user_id">
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                                                <button type="button" class="btn bg-red btn-sm text-white" data-toggle="modal" data-target="#deleteForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editForm" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content ">
                                                            <div class="modal-header bg-primary text-white">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form>
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-start">
                                                                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/guest.jpg" alt="User profile picture">
                                                                            
                                                                                <div class="form-group">
                                                                                    <input type="file" class="form-control" name="profile" id="profile">
                                                                                </div>
                                                                        
                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="first_name">First Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="last_name">Last Name</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact">Contact</label>
                                                                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email">Email address</label>
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Type</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="0">Admin</option>
                                                                                    <option value="1">Customer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Status</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Not Active</option>
                                                                                    </select>
                                                                                </div>
            
                                                                                <div class="form-group">
                                                                                    <label for="password">Password</label>
                                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="confirm_password">Confirm Password</label>
                                                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Last Name">
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="deleteForm" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete User: Ivan Christian jay</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure ?</p>
                                                            <p>This action is irreversible, Are you sure you want to remove user: 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="hidden" name="user_id">
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
                                                <button type="button" class="btn bg-red btn-sm text-white" data-toggle="modal" data-target="#deleteForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editForm" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content ">
                                                            <div class="modal-header bg-primary text-white">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form>
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-start">
                                                                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/guest.jpg" alt="User profile picture">
                                                                            
                                                                                <div class="form-group">
                                                                                    <input type="file" class="form-control" name="profile" id="profile">
                                                                                </div>
                                                                        
                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="first_name">First Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="last_name">Last Name</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact">Contact</label>
                                                                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email">Email address</label>
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Type</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="0">Admin</option>
                                                                                    <option value="1">Customer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Status</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Not Active</option>
                                                                                    </select>
                                                                                </div>
            
                                                                                <div class="form-group">
                                                                                    <label for="password">Password</label>
                                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="confirm_password">Confirm Password</label>
                                                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Last Name">
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="deleteForm" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete User: Ivan Christian jay</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure ?</p>
                                                            <p>This action is irreversible, Are you sure you want to remove user: 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="hidden" name="user_id">
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
                                                <button type="button" class="btn bg-red btn-sm text-white" data-toggle="modal" data-target="#deleteForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editForm" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content ">
                                                            <div class="modal-header bg-primary text-white">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form>
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-start">
                                                                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/guest.jpg" alt="User profile picture">
                                                                            
                                                                                <div class="form-group">
                                                                                    <input type="file" class="form-control" name="profile" id="profile">
                                                                                </div>
                                                                        
                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="first_name">First Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="last_name">Last Name</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact">Contact</label>
                                                                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email">Email address</label>
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Type</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="0">Admin</option>
                                                                                    <option value="1">Customer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Status</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Not Active</option>
                                                                                    </select>
                                                                                </div>
            
                                                                                <div class="form-group">
                                                                                    <label for="password">Password</label>
                                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="confirm_password">Confirm Password</label>
                                                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Last Name">
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="deleteForm" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete User: Ivan Christian jay</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure ?</p>
                                                            <p>This action is irreversible, Are you sure you want to remove user: 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="hidden" name="user_id">
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
                                                <button type="button" class="btn bg-red btn-sm text-white" data-toggle="modal" data-target="#deleteForm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editForm" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content ">
                                                            <div class="modal-header bg-primary text-white">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form>
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-start">
                                                                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/guest.jpg" alt="User profile picture">
                                                                            
                                                                                <div class="form-group">
                                                                                    <input type="file" class="form-control" name="profile" id="profile">
                                                                                </div>
                                                                        
                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="first_name">First Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="last_name">Last Name</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="contact">Contact</label>
                                                                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Last Name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email">Email address</label>
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Type</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="0">Admin</option>
                                                                                    <option value="1">Customer</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="account_type">Account Status</label>
                                                                                    <select class="form-control" id="account_type" name="account_type">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Not Active</option>
                                                                                    </select>
                                                                                </div>
            
                                                                                <div class="form-group">
                                                                                    <label for="password">Password</label>
                                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="confirm_password">Confirm Password</label>
                                                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Last Name">
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="deleteForm" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete User: Ivan Christian jay</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure ?</p>
                                                            <p>This action is irreversible, Are you sure you want to remove user: 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <input type="hidden" name="user_id">
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                             
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>