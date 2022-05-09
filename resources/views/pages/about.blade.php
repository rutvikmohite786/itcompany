  <!-- About Start -->
  <div class="container-fluid py-5">
      <div class="container">
          <div class="row align-items-center pb-1">
              <div class="col-lg-5">
                  <img class="img-thumbnail p-3" src="img/about.jpg" alt="">
              </div>
              <div class="col-lg-7 mt-5 mt-lg-0">
                  <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Who We Are</small>
                  <h1 class="mt-2 mb-4">{{$user['title']}}</h1>
                  <p class="mb-4">{{$user['description']}}.</p>
                  <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
              </div>
          </div>
          <div class="row mt-4">
              <div class="col-md-4">
                  <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                      <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                      <div class="d-flex flex-column">
                          <h5 class="font-weight-bold">Our Office</h5>
                          <p class="m-0">{{$user['office_address']}}</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                      <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                      <div class="d-flex flex-column">
                          <h5 class="font-weight-bold">Email Us</h5>
                          <p class="m-0">{{$user['email']}}</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                      <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                      <div class="d-flex flex-column">
                          <h5 class="font-weight-bold">Call Us</h5>
                          <p class="m-0">{{$user['mobile']}}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->