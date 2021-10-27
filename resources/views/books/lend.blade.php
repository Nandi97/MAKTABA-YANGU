<form
  class="form-control"
  action="/books/{{ $book->id }}/lend"
  method="POST"
  role="form"
>
  @csrf
  <legend>Borrow Form</legend>

  <div class="mb-3">
    <div class="grid grid-cols-12">
      <div class="col-span-6">
        <label for="lender_id" class="label">
          <div class="label-text">Lender</div>
        </label>
        <select
          name="lender_id"
          id="lender_id"
          class="select select-bordered w-full max-w-xs"
        >
          <option>Select Lender</option>
          @foreach($users as $user)
          <option value="{{ $user->id }}">
            {{ $user->name }}
          </option>
          @endforeach
        </select>
      </div>

      <div class="col-span-6">
        <label for="borrower_id" class="label">
          <div class="label-text">Borrower</div>
        </label>
        <select
          name="borrower_id"
          id="borrower_id"
          class="select select-bordered w-full max-w-xs"
        >
          <option>Select Borrower</option>
          @foreach($borrowers as $borrower)
          <option value="{{ $borrower->id }}">
            {{ $borrower->name }}
          </option>
          @endforeach'
        </select>
      </div>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary" name="lendBook" id="lendBook">
      Lend Book
    </button>
    <div id="hide-lend-form" class="btn btn-secondary">Cancel</div>
  </div>
</form>
