<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($recipe->image) }}" alt="{{ $recipe->title }}" class="img-fluid imgShow">
            </div>

            <div class="col-12 col-md-6 textKit text-center">
                <h2 class="my-5 fs-1">{{$recipe->title }}</h2>
                <p>{{ $recipe->user->name }}</p>
                    
            </div>

            <div class=" my-5">
                <p>{{ $recipe->procedure }}</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('recipe.index')}}" class="btn ">Back To Recipes</a>
            </div>
        </div>
    </div>
</x-layout>