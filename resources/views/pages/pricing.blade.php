  <!-- Pricing Plan Start -->
  <div class="container-fluid pt-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-7">
                  <div class="row">
                      @foreach($pricing as $price)
                      @php
                      $values = explode(",",$price->technology);
                      @endphp
                      <div class="col-md-6 mb-5">
                          <div class="d-flex flex-column align-items-center justify-content-center bg-primary p-4">
                              <h3>{{$price->title}}</h3>
                              <h1 class="display-4 mb-0">
                                  <small class="align-top" style="font-size: 22px; line-height: 45px;">Rs</small>{{$price->price}}<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                      Mo</small>
                              </h1>
                          </div>
                          <div class="border border-top-0 d-flex flex-column align-items-center py-4">
                              @foreach($values as $skill)
                              {{ $skill }} <br />
                              @endforeach
                             <!-- <p>Bootstrap 4</p>
                              <p>Responsive Layout</p>
                              <p>Compatible With All Browsers</p>-->
                              <a href="order" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold my-2">Order Now</a>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
              <div class="col-lg-5 mb-5">
                  <small class="d-inline bg-primary text-white text-uppercase font-weight-bold px-1">Our Pricing Plan</small>
                  <h1 class="mt-2 mb-3">We Offer Affordable and Flexible Packages</h1>
                  <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd dolores elitr sed est duo ea ipsum justo diam, est erat lorem. Est magna sea clita diam tempor elitr</h4>
                  <h5 class="font-weight-bold mb-4">Need A Custom Package?</h5>
                  <a href="contact" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Contact Now</a>
              </div>
          </div>
      </div>
  </div>
  <!-- Pricing Plan End -->