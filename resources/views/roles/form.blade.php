<div class="form-control">
    <input type="text" name="name" id="name" class="input input-bordered" placeholder="Role Name"
        required value="{{ isset($role->name) ? $role->name : old('name') }}">
    <label for="name" class="label">Role Name</label>
</div>
<div class="form-control">
    <textarea name="description" id="description" class="textarea textarea-bordered" placeholder="Description">{{ isset($role->description) ? $role->description : old('description') }}</textarea>
    <label for="description" class="label">Description</label>
</div>

<button class="btn btn-primary btn-sm" type="submit">
    {{ $title }} Role
</button>
<a href="/roles" class="btn btn-outline btn-primary btn-sm">
    Cancel
</a>
