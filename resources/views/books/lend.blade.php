@extends('layouts.main') @section('title', $title) @section('content')
<div>
  <div
    class="
      sticky
      top-0
      z-40
      flex
      justify-between
      flex-wrap
      md:flex-nowrap
      items-center
      pt-3
      pb-2
      mb-3
      border-b
    "
  >
    <h1 class="card-title">
      {{ $book->title }}
    </h1>
  </div>

  <div class="card bordered grid grid-cols-12">
    <div class="card col-span-3">
      <figure>
        <img src="{{ $book->cover }}" alt="Cover Image" class="card-img-top" />
      </figure>
    </div>

    <div class="card-body overflow-x-auto col-span-9">
      <div class="card">
        <div class="card-body">
          <form action="/books/lend" method="POST" role="form" target="_blank">
            <legend>Borrow Form</legend>

            <input
              type="hidden"
              name="bookId"
              id="bookId"
              class="input input-bordered"
              value="<?= $id; ?>"
            />

            <div class="form-floating mb-3">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <label for="librarianId" class="form-label">Lender</label>
                  <select
                    name="librarianId"
                    id="librarianId"
                    class="form-select"
                  >
                    <option>Select Lender</option>
                    <?php
                  if ($result1->rowCount() > 0) { while ($row1 =
                    $result1->fetch()) { echo '
                    <option value="' . $row1['id'] . '">
                      ' . $row1['name'] . '
                    </option>
                    '; } // Free result set unset($result1); } ?>
                  </select>
                </div>
                <div class="col-12 col-sm-6">
                  <label for="borrowerId" class="form-label">Borrower</label>
                  <select name="borrowerId" id="borrowerId" class="form-select">
                    <option>Select Borrower</option>
                    <?php
                  if ($result2->rowCount() > 0) { while ($row2 =
                    $result2->fetch()) { echo '
                    <option value="' . $row2['id'] . '">
                      ' . $row2['name'] . '
                    </option>
                    '; } // Free result set unset($result2); } ?>
                  </select>
                </div>
              </div>
            </div>

            <button
              type="submit"
              class="btn btn-primary"
              name="lendBook"
              id="lendBook"
            >
              Lend Book
            </button>
            <a
              href="/library_management/books/show.php?id=<?= $id ?>"
              class="btn btn-secondary"
            >
              Cancel
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
</div>
