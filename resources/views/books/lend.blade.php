<form
  class="form-control"
  action="/books/{{ $book->id }}/lend"
  method="POST"
  role="form"
>
  @csrf

  <input type="hidden" id="status" name="status" value="0" />

  <div class="mb-3">
    <div class="grid grid-cols-12">
      <div class="col-span-6 mr-2">
        <label for="lender_id" class="label">
          <div class="label-text">Lender</div>
        </label>
        <select
          name="lender_id"
          id="lender_id"
          class="select select-bordered{{ $errors->has('lender_id') ? ' select-error':'' }} w-full max-w-xs"
        >
          <option>Select Lender</option>
          @foreach($users as $lender)
          <option value="{{ $lender->id }}" {{ old('lender_id') == $lender->id ? 'selected' : '' }}>
            {{ $lender->name }}
          </option>
          @endforeach
        </select>
        @if($errors->has('lender_id'))
        <div class="alert alert-error mt-2">
          {{ $errors->first('lender_id') }}
        </div>
        @endif
      </div>

      <div class="col-span-6">
        <label for="borrower_id" class="label">
          <div class="label-text">Borrower</div>
        </label>

        <select
          name="borrower_id"
          id="borrower_id"
          class="select select-bordered{{ $errors->has('borrower_id') ? ' select-error':'' }} w-full max-w-xs"
        >
          <option>Select Borrower</option>
          @foreach($borrowers as $borrower)
          <option value="{{ $borrower->id }}" {{ old('borrower_id') == $borrower->id ? 'selected' : '' }}>
            {{ $borrower->name }}
          </option>
          @endforeach
        </select>
        @if($errors->has('borrower_id'))
        <div class="alert alert-error mt-2">
          {{ $errors->first('borrower_id') }}
        </div>
        @endif
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
