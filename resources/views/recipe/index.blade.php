<x-layout>
    <div class="container my-5 items w-50 ">
        <div class="row">
            @forelse ($recipes as $recipe)
            <div class="col-6 col-md-12">
              <x-card :recipe="$recipe" />
            </div>
            @empty
                <p class="text-center textKit fs-1 my-5">No recipes here. <a href="{{ route('recipe.create') }}" class="btn text-decoration-none btn-secondary" >Add One</a></p>
                <div class="d-flex justify-content-center">
                    <img src="/media/empty-plate.avif" class="img-fluid w-50" alt="">
                </div>
            @endforelse
        </div>
        
    </div>

    
</x-layout>