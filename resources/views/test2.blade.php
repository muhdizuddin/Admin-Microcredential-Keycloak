<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Courses</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/c2" method="POST">
               @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="coursecode">Course Code</label>
                    <input type="coursecode" class="form-control" id="coursecode" placeholder="Enter Course Code">
                  </div>

                  <div class="form-group">
                    <label for="coursetitle">Course Title</label>
                    <input type="coursetitle" class="form-control" id="coursetitle" placeholder="Enter Course Title">
                  </div>
                  <div class="form-group">
                    <label for="courseinfo">Course Information</label>
                    <input type="courseinfo" class="form-control" id="courseinfo" placeholder="Enter Course Information">
                  </div>
                  <div class="form-group">
                    <label for="credithr">Course Category</label>
                    <input type="credithr" class="form-control" id="category" placeholder="Enter Credit Hour">
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>