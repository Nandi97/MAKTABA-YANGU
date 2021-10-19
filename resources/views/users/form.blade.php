<div class="card grid grid-rows-4">
<div class="row-span-1 grid grid-cols-2">
    <div class="col-span-1">
        <div class="form-control">
            <label for="name" class="label">Full Name</label>
            <input type="text" name="name" id="name" class="input"
                placeholder="Role Name" value="" required>

        </div>
    </div>

    <div class="col-span-1">
        <div class="form-control">
            <label for="phoneNo" class="label">Phone Number</label>
            <input type="text" name="phoneNo" id="phoneNo" class="input"
                placeholder="Phone" value="" required>

        </div>
    </div>
</div>

<div class="row-span-1 grid grid-cols-2">
    <div class="col-span-1">
        <div class="form-control">
            <label for="address" class="label">Address</label>
            <input type="text" name="address" id="address" class="input"
                placeholder="Address" value="" required>

        </div>
    </div>

    <div iv class="col-span-1">
        <div class="form-control">
            <select class="select select-bordered w-full max-w-xs">
                <option disabled="disabled" selected="selected">Select User Role</option>

                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{$role->name}}</option>
                    @endforeach

                </select>

                <label for="roleId" class="absolute duration-300 top-3 -z-1
                    origin-0 text-gray-500">Role</label>
            </div>
        </div>
    </div>

    <div class="row-span-1 grid-cols-1">
        <div class="col-span-1">
            <div class="form-control">
                <label for="avatar" class="label">Avatar URL</label>
                <input type="text" name="avatar" id="avatar"
                    class="form-control" placeholder="Avatar URL"
                    value="avatar" required>
            </div>
        </div>
    </div>

    <button class="btn btn-outline btn-primary" type="submit" name="submit"
        id="submit">BUTTON TEXT</button>
        <button class="bg-green-500">
        <a href="/users" class="btn
            btn-secondary">
            Cancel
        </a>
    </button>
</div>
