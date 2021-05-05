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
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Number of products</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-list"></i>
                                    </div>
                                    <div class="small-box-footer">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Number of Categories</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-list"></i>
                                    </div>
                                    <a href="#"  data-toggle="modal" data-target="#addCategory" role="button" class="small-box-footer">
                                        Add new category <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="addCategory">Add Category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="category">Category Name</label>
                                                        <input type="text" name="category" id="category" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Number of Sub Categories</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-list"></i>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#addSubCategory" role="button"  class="small-box-footer">
                                        Add new sub category <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </a>
                                </div>

                                
                                <!-- Modal -->
                                <div class="modal fade" id="addSubCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="addCategory">Add sub category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="">
                                                <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="account_type">Category</label>
                                                    <select class="form-control" id="category" name="category">
                                                        <option value="1">Television</option>
                                                        <option value="2">Air Conditioners</option>
                                                    </select>
                                                </div>


                                                    <div class="form-group">
                                                        <label for="sub_category">Category Name</label>
                                                        <input type="text" name="sub_category" id="sub_category" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 col-sm-6 col-xm-12">
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Number of Suppliers</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-help-buoy"></i>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#addSupplier" role="button"  class="small-box-footer">
                                        Add new supplier <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </a>
                                </div>

                                
                                <!-- Modal -->
                                <div class="modal fade" id="addSupplier" tabindex="-1" aria-labelledby="addSupplier" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="addCategory">Add supplier</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="account_type">Supplier</label>
                                                        <input type="text" class="form-control" id="name" name="name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="account_type">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="contact">Contact</label>
                                                        <input type="text" name="contact" id="contact" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       
                        </div>

                        <div class="row box">
                           <div class="col-md-9">
                                <h2>Lists of Products</h2>
                           </div>
                           <div class="col-md-3">
                              <form action="">
                                  <div class="form-group">
                                      <input type="search" name="search_user" id="search_user" class="form-control" placeholder="search here">
                                  </div>
                              </form>
                           </div>
                            <div class="col-md-12 table-responsive ">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Sub category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Description</th>
                                            
                                            <th scope="col">Stocks</th>
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Ivan Christian Jay</th>
                                            <td>November 23 2021</td>
                                            <td>00000000000</td>
                                            <td>$00000000000</td>
                                            <td>email.com</td>
                                            <td>111</td>
                                            <td>LA Lakers</td>
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
                                                                                <img class="img-fluid" src="https://demo2.drfuri.com/martfury13/wp-content/uploads/sites/54/elementor/thumbs/18a-o8h48gm3mliywxtb48t46ayctf9w3xid16q0n6wbok.jpg" title="18a" alt="18a">
                                                                            
                                                                                <div class="form-group">
                                                                                    <input type="file" class="form-control" name="primary_picture" id="primary_picture">
                                                                                </div>
                                                                        
                                                                            </div>  
                                                                            <div class="col-md-8">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="product_name">Product Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="product_name" placeholder="product_name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Category</label>
                                                                                    <select class="form-control" id="category" name="category">
                                                                                        <option value="1">Television</option>
                                                                                        <option value="2">Air Conditioners</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Sub category</label>
                                                                                    <select class="form-control" id="sub_category" name="sub_category">
                                                                                    <option value="1">Smart TV</option>
                                                                                    <option value="2">4k Ultra HD TV's</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="description">Description</label>
                                                                                    <textarea id="summernote" name="description"></textarea>
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="price">Price</label>
                                                                                    <input type="number" class="form-control" id="price" name="price" placeholder="price">
                                                                                </div>
            
                                                                                <div class="form-group">
                                                                                    <label for="account_type">Supplier</label>
                                                                                    <select class="form-control" id="sub_category" name="sub_category">
                                                                                    <option value="1">Nissan</option>
                                                                                    <option value="2">LG</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="product_name">Product Name</label>
                                                                                    <input type="file" name="secondary_pictures" id="secondary_pictures" multiple class="form-control">
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
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product: Ivan Christian jay</h5>
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