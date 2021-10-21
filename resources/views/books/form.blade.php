<div class="grid grid-cols-12 form-control">
  <div class="col-span-12 md:col-span-6">
    <label for="name" class="label">Title:</label>
    <input
      type="text"
      name="title"
      id="title"
      class="input input-bordered"
      placeholder="Book Title"
      value="{{ isset($book->title) ? $book->title : old('title') }}"
    />
  </div>

  <div class="col-span-12 md:col-span-6">
    <label for="name" class="label">Author:</label>
    <input
      type="text"
      name="author"
      id="author"
      class="input input-bordered"
      placeholder="Book Author"
      value="{{ isset($book->author) ? $book->author : old('author') }}"
    />
  </div>

  <div class="col-span-12">
    <label for="description" class="label">Description:</label>
    <textarea
      name="description"
      id="description"
      class="textarea textarea-bordered w-full"
      placeholder="Description"
    >
      {{ isset($book->description) ? $book->description : old('description') }}
    </textarea>
  </div>

  <div class="col-span-12 md:col-span-6">
    <label for="name" class="label">Cover:</label>
    <input
      type="text"
      name="cover"
      id="cover"
      class="input input-bordered"
      placeholder="Book Cover"
      value="{{ isset($book->cover) ? $book->cover : old('cover') }}"
    />
  </div>

  <div class="col-span-12 md:col-span-6">
    <label for="name" class="label">Publish Date:</label>
    <input
      type="date"
      name="publishDate"
      id="publishDate"
      class="input input-bordered"
      placeholder="Date of Publish"
      value="{{ isset($book->publishDate) ? $book->publishDate : old('publishDate') }}"
    />
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
