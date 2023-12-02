<x-layout>


    <div class="container contAuth shadow textKit">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <form action="{{ route('register') }}" method="POST" class="p-5">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name">

                      @error('name')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm password  </label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <span> are you a registered chef ? <a href="{{ route('login') }}" class="text-decoration-none"> Login</span>
                </form>
            </div>
        </div>
    </div>
</x-layout>

