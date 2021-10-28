<div class="grid grid-cols-12 form-control">
  <div class="col-span-12 md:col-span-6 mr-2">
    <label for="title" class="label">Title:</label>
    <input
      type="text"
      name="title"
      id="title"
      class="input input-bordered{{ $errors->has('title')?' input-error':'' }} w-full"
      placeholder="Book Title"
      value="{{ isset($book->title) ? $book->title : old('title') }}"
    />
    @if($errors->has('title'))
    <div class="alert alert-error mt-2">
      {{ $errors->first('title') }}
    </div>
    @endif
  </div>

  <div class="col-span-12 md:col-span-6">
    <label for="name" class="label">Author:</label>
    <input
      type="text"
      name="author"
      id="author"
      class="input input-bordered{{ $errors->has('author')?' input-error':'' }} w-full"
      placeholder="Book Author"
      value="{{ isset($book->author) ? $book->author : old('author') }}"
    />
    @if($errors->has('author'))
    <div class="alert alert-error mt-2">
      {{ $errors->first('author') }}
    </div>
    @endif
  </div>

  <div class="col-span-12">
    <label for="description" class="label">Description:</label>
    <textarea
      name="description"
      id="description"
      class="textarea textarea-bordered{{ $errors->has('description')?' textarea-error':'' }} w-full"
      placeholder="Description"
    >
      {{ isset($book->description) ? $book->description : old('description') }}
    </textarea>
    @if($errors->has('description'))
    <div class="alert alert-error mt-2">
      {{ $errors->first('description') }}
    </div>
    @endif
  </div>

  <div class="col-span-12 md:col-span-6 mr-2">
    <label for="name" class="label">Cover:</label>
    <input
      type="text"
      name="cover"
      id="cover"
      class="input input-bordered{{ $errors->has('cover')?' input-error':'' }} w-full"
      placeholder="Book Cover"
      value="{{ isset($book->cover) ? $book->cover : old('cover') }}"
    />
    @if($errors->has('cover'))
    <div class="alert alert-error mt-2">
      {{ $errors->first('cover') }}
    </div>
    @endif
  </div>

  <div class="col-span-12 md:col-span-6">
    <label for="name" class="label">Publish Date:</label>
    <input
      type="date"
      name="publishDate"
      id="publishDate"
      class="input input-bordered{{ $errors->has('publishDate')?' input-error':'' }} w-full"
      placeholder="Date of Publish"
      value="{{ isset($book->publishDate) ? $book->publishDate : old('publishDate') }}"
    />
    @if($errors->has('publishDate'))
    <div class="alert alert-error mt-2">
      {{ $errors->first('publishDate') }}
    </div>
    @endif
  </div>

  <div class="col-span-12 mt-3 text-center">
    <button class="btn btn-primary btn-sm" type="submit">
      {{ $title }} Book
    </button>

    <a href="/books" class="btn btn-outline btn-primary btn-sm pl-3">
      Cancel
    </a>
  </div>
</div>
