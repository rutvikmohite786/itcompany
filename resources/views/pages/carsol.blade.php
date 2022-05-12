  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
      <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!--  <ol class="carousel-indicators">
              <li data-target="#header-carousel" data-id="1" data-slide-to="0" class="carsol"></li>
              <li data-target="#header-carousel" data-id="2" data-slide-to="1" class="active carsol"></li>
              <li data-target="#header-carousel" data-id="3" data-slide-to="2" class="carsol"></li>
          </ol>-->
          <div class="carousel-inner">
              @foreach($carsol as $carsol_info)
              <div class="carousel-item active" data-id="{{$carsol_info->id-1}}">
                  <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                  <div class="carousel-caption d-flex align-items-center justify-content-center">
                      <div class="p-5" style="width: 100%; max-width: 900px;">
                          <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                          <h1 class="display-3 text-white mb-md-4">{{$carsol_info->title}}</h1>
                          <a href="/about" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- Carousel End -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
      $(document).ready(function() {
          $(".carsol").click(function() {
              $(".carsol").removeClass('active');
              $(this).addClass('active');
              var dataId = $(this).data("id");
          });
      });
  </script>