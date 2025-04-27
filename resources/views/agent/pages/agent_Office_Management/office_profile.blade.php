@php
    $images =
        auth()->user()->officeProfile && auth()->user()->officeProfile->images
            ? json_decode(auth()->user()->officeProfile->images)
            : [];
@endphp
<x-agent.app>
    <div class=" padding-xxl">
        @if (auth()->user()->officeProfile)
            <div class="d-md-flex justify-content-between align-items-center pt-0 pb-4 px-4">
                <h4 class="m-0" style="font-size: 20px; color: #0666EB;">
                    Office Profile
                </h4>

                <div class="d-none d-md-flex align-items-center gap-2">
                    <a href="#" class="text-decoration-none fw-bold"
                        style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                        Dashboard
                    </a>
                    <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
                    <span style="font-size: 14px;">Office Profile</span>
                </div>
            </div>
            <div class="container ">
              <!-- Carousel Start -->
              <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
                  <ol class="carousel-indicators">
                      @foreach ($images as $index => $image)
                          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                      @endforeach
                  </ol>
                  <div class="carousel-inner rounded">
                      @foreach ($images as $index => $image)
                          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                              <!-- <img class="d-block w-100" style="height: 400px; object-fit: cover;" src="{{ Storage::url($image) }}" alt="Slide {{ $index + 1 }}"> -->
                              <img class="d-block w-100" style="height: 400px; object-fit: cover;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUPIfiGgUML8G3ZqsNLHfaCnZK3I5g4tJabQ&s" alt="Slide {{ $index + 1 }}">
                          </div>
                      @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                  </a>
              </div>
              <!-- Carousel End -->
          
              <!-- Company Profile Section -->
              <div class=" card  p-4 rounded shadow-sm pb-8">
                  <div class="card-body">
                  <div class="row justify-content-between align-items-center">
                      <div class=" d-flex w-40 gap-3 col-md-2 text-center">
                          <!-- <img src="{{ Storage::url(auth()->user()->officeprofile?->logo) }}" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;" alt="Profile Logo"> -->
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUPIfiGgUML8G3ZqsNLHfaCnZK3I5g4tJabQ&s    " class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;" alt="Profile Logo">
                          <h4 class="text-primary pt-3 font-weight-bold">{{ auth()->user()->officeprofile?->name }}</h4>
                      </div>
                      <div class="col-md-3">
                         
                          <ul class="list-unstyled mt-2">
                              <li class="mb-2">
                                <i class="fas fa-map-marker-alt text-primary mr-2 pe-2"></i>{{ auth()->user()->officeprofile?->address }}</li>
                              <li class="mb-2">
                                <i class="fas fa-phone-alt text-primary mr-2 pe-2"></i>{{ auth()->user()->officeprofile?->phone }}</li>
                              <li class="mb-2">
                                <i class="fas fa-envelope text-primary mr-2 pe-2"></i>{{ auth()->user()->officeprofile?->email }}</li>
                          </ul>
                      </div>
                  </div>
                  </div>
          
                  <hr>
          
                  <h4 class="text-secondary font-weight-bold">About:</h4>
                  <p class="text-muted"> {{ auth()->user()->officeprofile?->details }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellat ducimus soluta alias voluptatibus dignissimos voluptatum. Qui, sint sequi quam reprehenderit aspernatur obcaecati culpa sit, cupiditate impedit quo praesentium corrupti tenetur rerum harum ad optio libero totam? Eaque, possimus voluptates ipsa ut porro veritatis accusantium aspernatur ipsam voluptas dolorum laborum? </p>
              </div>
          </div>
        @else
            <div class=" d-flex justify-content-center align-content-center" style="height: 80vh;">
                <div class="w-70 d-flex align-items-center">
                    <div class="card">
                        <div class="card-body px-4">
                            <h4 class="text-primary text-center mt-5 mb-4">Set Up Your Office Profile to Get Started!
                            </h4>
                            <p class="text-center text-dark mb-3">Create your office profile, upload details, and manage
                                your team efficiently. A complete
                                profile helps in better visibility and collaboration.</p>
                            <div class="button d-flex justify-content-center mb-5">
                                <a href="{{ route('agent.dashboard.officeProfile') }}"
                                    class="text-white btn btn-primary "
                                    style="padding-top: 12px;width: 235px;height: 48px;">Set Up Office Profile</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-agent.app>
