<section class="">
   <div class="row mx-3 my-5 flex justify-center">
    <div class="col-lg-4 border rounded p-4 bg-light login_form">
        <h1 class="text-center text-3xl my-3">Login</h1>
        <hr>
        <form class="my-4" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-11/12">
                    <input type="email" class="p-2.5 bg-gray-200 rounded focus:outline-none w-full" placeholder="Email"
                        wire:model="form.email" />
                    @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-11/12">
                    <input type="password" class="p-2.5 bg-gray-200 rounded focus:outline-none w-full" placeholder="Password"
                        wire:model="form.password" />
                    @error('form.password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-11/12">
                    <input type="submit" value="Login"
                        class="p-2 bg-gray-800 text-white w-full rounded tracking-wider cursor-pointer" />
                </div>
            </div>
            <p class="hover:text-gray-800 ml-2.5" >Don't have an account? <a class="text-blue-800" wire:navigate href="{{route('registration')}}">Sign Up</a></p>
        </form>
    </div>
   </div>
</section>