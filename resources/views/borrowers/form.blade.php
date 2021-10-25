<div class="card-body w-full h-full">
  <div class="grid grid-cols-2">
    <div class="col-span-1">
      <div class="">
        <label for="name" class="label">Full Name:</label>
        <input
          type="text"
          name="name"
          id="name"
          class="input input-bordered"
          placeholder="Borrower Name"
          value="{{ isset($borrower->name) ?
                $borrower->name : old('name') }}"
        />
      </div>
    </div>

    <div class="col-span-1">
      <div class="">
        <label for="phone_no" class="label">Phone Number:</label>
        <input
          type="text"
          name="phone_no"
          id="phone_no"
          class="input input-bordered"
          placeholder="Phone"
          value="{{ isset($borrower->phone_no) ? $borrower->phone_no : old('phone_no') }}"
          required
        />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-2">
    <div class="col-span-2">
      <div class="">
        <abel for="email" class="label">Email Address:</abel>
        <input
          type="text"
          name="email"
          id="email"
          class="input input-bordered"
          placeholder="Email"
          value="{{ isset($borrower->email) ? $borrower->email : old('email') }}"
          required
        />
      </div>
    </div>
  </div>

  <div class="grid-cols-1">
    <div class="col-span-1">
      <div class="form-control">
        <label for="avatar" class="label">Avatar URL</label>
        <input
          type="text"
          name="avatar"
          id="avatar"
          class="input input-bordered"
          placeholder="Avatar URL"
          value="{{ isset($borrower->avatar) ? $borrower->avatar : old('avatar') }}"
          required
        />
      </div>
    </div>
  </div>

  <div class="flex flex-row card-actions">
    <button class="btn btn-outline btn-primary btn-sm" type="submit">
      {{ $title }} Borrower
    </button>
    <a href="/borrowers" class="btn btn-secondary btn-sm pl-3"> Cancel </a>
  </div>
</div>
