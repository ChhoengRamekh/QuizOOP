
<div class="container mt-4">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="card">
                  <form action="" method="POST">
                  <div class="card-body">
                        <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Province</label>
                            <input type="text" class="form-control" name="province">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm btn-success float-right" type="submit" name="btn-submit">Send Value</button>
                        </div>
                    </div>
                  </form>





                </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                        <?php include "getFormData.php" ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>