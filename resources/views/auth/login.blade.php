<x-layout>
    <div class="container contAuth shadow textKit">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <form action="{{ route('login') }}" method="POST" class="p-5">
                    @csrf                   
                    <div class="mb-3">
                        <label for="email" class="form-label" >email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email') }}">
                      </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" >
                    </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <span>are you a chef ?<a href="{{ route('register') }}" class="text-decoration-none" > Sign in</span>
                </form>
            </div>
        </div>
    </div>
</x-layout>