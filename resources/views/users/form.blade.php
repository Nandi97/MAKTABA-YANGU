<div class="card-body w-full h-full">
  <div class="grid grid-cols-2">
    <div class="col-span-2">
      <div class="">
        <label for="name" class="label">Full Name:</label>
        <input
          type="text"
          name="name"
          id="name"
          class="input input-bordered"
          placeholder="Borrower Name"
          value="{{ isset($user->name) ?
                $user->name : old('name') }}"
        />
      </div>
    </div>
    <!-- <div class="col-span-1">
      <div class="">
        <label for="phoneNo" class="label">Phone Number:</label>
        <input
          type="text"
          name="phoneNo"
          id="phoneNo"
          class="input input-bordered"
          placeholder="Phone"
          value="{{ isset($user->phoneNo) ? $user->phoneNo : old('phoneNo') }}"
          required
        />
      </div> -->
    </div>
  </div>

  <div class="grid grid-cols-2">
    <div class="col-span-1">
      <div class="">
        <abel for="email" class="label">Email:</abel>
        <input
          type="text"
          name="email"
          id="email"
          class="input input-bordered"
          placeholder="Email"
          value="{{ isset($user->email) ? $user->email : old('email') }}"
          required
        />
      </div>
    </div>
    <div iv class="col-span-1">
      <div class="">
        <label for="roleId" class="label">Role:</label>
        <select class="select select-bordered w-full max-w-xs">
          <option disabled="disabled" selected="selected">
            Select User Role
          </option>

          @foreach($roles as $role)
          <option value="{{ $role->id }}">{{$role->name}}</option>
          @endforeach
        </select>
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
          value="{{ isset($user->avatar) ? $user->avatar : old('avatar') }}"
          required
        />
      </div>
    </div>
  </div>
  <div class="flex flex-row card-actions">
    <button
      class="btn btn-outline btn-primary btn-sm"
      type="submit"
      name="submit"
      id="submit"
    >
    {{ $title }} User
    </button>
    <a href="/users" class="btn btn-secondary btn-sm pl-3"> Cancel </a>
  </div>
</div>
