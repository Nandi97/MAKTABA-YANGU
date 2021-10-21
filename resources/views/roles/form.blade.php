<div class="grid">
  <div class="grid-cols-12">
    <label for="name" class="label">Role Name:</label>
    <input
      type="text"
      name="name"
      id="name"
      class="input input-bordered w-ful"
      placeholder="Role Name"
      value="{{ isset($role->name) ? $role->name : old('name') }}"
    />
  </div>

  <div class="grid-cols-12">
    <label for="description" class="label">Description:</label>
    <textarea
      name="description"
      id="description"
      class="textarea textarea-bordered w-full"
      placeholder="Description"
      >{{ isset($role->description)
            ? $role->description : old('description') }}</textarea
    >
  </div>

  <div class="flex flex-row card-actions">
    <button class="btn btn-primary btn-sm" type="submit">
      {{ $title }} Role
    </button>
    <a href="/roles" class="btn btn-outline btn-primary btn-sm pl-3">
      Cancel
    </a>
  </div>
</div>
