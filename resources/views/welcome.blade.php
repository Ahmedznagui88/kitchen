<x-layout>
   
    <div class="container-fluid  cont-recipe">
        <div class="row justify-content-end ">
            <div class="col-6">
                
                <h2 class="text-custom text-center">Last recipes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                    <a href="{{ route('recipe.index') }}" class="btn ">Recipes</a>
            </div>
        </div>
    </div>

     

    <div class="container my-5">
        <div class="row">
            @forelse ($recipes as $recipe)
            <div class="col-6 col-md-5">
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