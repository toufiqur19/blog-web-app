<main>
    <section class="page-header bg-tertiary py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Contact Us</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a wire:navigate href="{{route('contractPage')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <div class="row justify-content-center align-items-center pb-5">
                <div class="col-lg-10">
                    <div class="shadow rounded p-5  ">
                        <div class="col-12 mb-5 text-center">
                            <h4 class="con_title fs-4">Leave Us A Message</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 mt-5 mt-lg-0">
                                <div class="contact-info text-center">
                                    <div class="address ">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <h5>Address</h5>
                                        <p>Nischintapur, Dhonut,<br> Bogura</p>
                                      </div>
                                      <div class="phone mt-2">
                                        <i class="fa-solid fa-phone"></i>
                                        <h5>Phone</h5>
                                        <p class="mb-3">+8801884858245</p>
                                        <p class="second">+8801575378379</p>
                                      </div>
                                      <div class="email">
                                        <i class="fa-solid fa-envelope"></i>
                                        <h5>Email</h5>
                                        <p>sobujah4@gmail.com</p>
                                      </div>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                @if(session('message'))
                                    <h6 class="alert alert-success">
                                        {{ session('message') }}
                                    </h6>
                                @endif

                                <form wire:submit.prevent="submit" class="contact-form">
                                    <div class="form-group pb-3 ">
                                        <label>Name</label>
                                        <input type="text" class="form-control shadow-none" id="exampleInputName" placeholder="Enter name" wire:model="name">
                                        @error('name') 
                                        <span class="text-danger">{{ $message }}</span> 
                                        @enderror
                                    </div>
                                    <div class="form-group pb-3">
                                        <label>Email</label>
                                        <input type="text" class="form-control shadow-none" id="exampleInputEmail" placeholder="Enter name" wire:model="email">
                                        @error('email') 
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group pb-3">
                                        <label>Body</label>
                                        <textarea class="form-control shadow-none" id="exampleInputbody" placeholder="Enter Body" wire:model="body" style="height: 150px"></textarea>
                                        @error('body') 
                                        <span class="text-danger">{{ $message }}</span> 
                                        @enderror
                                    </div>
                                        <button type="submit" class="btn btn-dark con_btn">Send Message</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
