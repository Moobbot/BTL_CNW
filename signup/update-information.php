<?php include '../reuse/header.php' ?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update personal information</p>

                <div class="mx-1 mx-md-4 signup-form" >

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="txtName" class="form-control " name="txtName" placeholder="Full Name"/>
               
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user-cog fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <select class="form-select" aria-label="Default select example" name="txtPosition" id="txtPosition">
                      <label class="form-label" for="form3Example4c">Chức Vụ</label>
                        <option value="Giảng Viên" >Giảng Viên</option>
                        <option value="Sinh Viên" >Sinh Viên</option>
                      </select>
                    
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone-alt fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="phone" id="phone" class="form-control" name="phone" placeholder="Your Phone"/>
                      
                    </div>
                  </div>

                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button  type="submit" class="btn btn-primary btn-lg submit" name="sbmRegister">Register</button>
                  </div>

               
                </div>

              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include '../reuse/footer.php' ?>