  <!-- Services Start -->
  <div class="container-fluid pt-5 pb-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 mb-5">
                  <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What we do</small>
                  <h1 class="mt-2 mb-3">{{$serviceInfo->title}}</h1>
                  <h4 class="font-weight-normal text-muted mb-4">{{$serviceInfo->description}}</h4>
                  <a href="service" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Discover More</a>
              </div>
              <div class="col-lg-8">
                  <div class="row">
                      @foreach($service as $ser)
                      <div class="col-md-6 mb-5">
                          <div class="d-flex">
                              <i class="{{$ser->icon}}"></i>
                              <div class="d-flex flex-column">
                                  <h4 class="font-weight-bold mb-3">{{$ser->title}}</h4>
                                  <p>{{$ser->description}}</p>
                                  <a class="font-weight-semi-bold" href="{{$ser->url}}">Read More <i class="fa fa-angle-double-right"></i></a>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Services End -->