<div class="card cardKit">
    <div class="row ">
      <div class="col-md-6">
        <img src="{{ Storage::url($recipe->image) }}" class="img-fluid imgKit" alt="{{ $recipe->title }}">
      </div>
      <div class="col-md-6 text-center ">
        <div class="card-body">
          <h5 class="card-title">{{ $recipe->title }}</h5>
        </div>
        <div class="my-5">
          <small class="card-text">{{ $recipe->created_at->diffForHumans() }}</small>
        </div>
      </div>

      <a href="{{ route('recipe.show', $recipe) }}" class="btn btn-info text-decoration-none w-100 my-3">Show</a>
    </div>
</div>