<form class="shadow p-5 card" wire:submit.revent="store">
    @csrf
    @if (session('message'))
        <div class="alert alert-success text-success text-center">
            {{ session('message') }}    
        </div>    
    @endif                  
    <div class="mb-3">
        <label for="title" class="form-label " >Title</label>
        <input type="title" class="form-control rounded-0" id="title" wire:model="title" >
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Category</label>
        <select id="" class="form-select" wire:model="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option> 
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control rounded-0" id="image" wire:model="image" >
      
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    @if ($image)
        <div class="mb-3">
            <label for="">preview</label>
            <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid w-25 rounded-3">
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label" >Process</label>
        <textarea class="form-control rounded-0" id="procedure" wire:model="procedure" cols="30" rows="5"></textarea>
      
        @error('procedure')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

 
    <button type="submit" class="btn">Add recipe</button>
</form>