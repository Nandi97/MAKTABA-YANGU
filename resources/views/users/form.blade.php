<div class="grid grid-rows-1 grid-cols-2">
    <div class="col-span-1">
        <div class="mb-3">
            <input type="text" name="name" id="name" class="pt-3 pb-2 block
                w-full px-0 mt-0 bg-transparent border-0 border-b-2
                appearance-none focus:outline-none focus:ring-0
                focus:border-black border-gray-200"
                placeholder="Role Name" value="<?= $name; ?>" required>
            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0
                text-gray-500">Full Name</label>
        </div>
    </div>

    <div class="col-span-1">
        <div class="mb-3">
            <input type="text" name="phoneNo" id="phoneNo" class="pt-3 pb-2
                block w-full px-0 mt-0 bg-transparent border-0 border-b-2
                appearance-none focus:outline-none focus:ring-0
                focus:border-black border-gray-200"
                placeholder="Phone" value="<?= $phoneNo; ?>" required>
            <label for="phoneNo" class="absolute duration-300 top-3 -z-1
                origin-0 text-gray-500">Phone Number</label>
        </div>
    </div>
</div>

<div class="grid grid-rows-1 grid-col-2">
    <div class="col-span-1">
        <div class="mb-3">
            <input type="text" name="address" id="address" class="pt-3 pb-2
                block w-full px-0 mt-0 bg-transparent border-0 border-b-2
                appearance-none focus:outline-none focus:ring-0
                focus:border-black border-gray-200"
                placeholder="Address" value="<?= $address; ?>" required>
            <label for="address" class="absolute duration-300 top-3 -z-1
                origin-0 text-gray-500">Address</label>
        </div>
    </div>

    <div iv class="col-span-1">
        <div class="mb-3 relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path
                    d="M206 171.144L42.678
                    7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763
                    25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677
                    7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764
                    9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206
                    171.144z" fill="#648299" fill-rule="nonzero" /></svg>
                <select name="roleId" id="roleId" class="pt-3 pb-2 block w-full
                    px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none
                    focus:outline-none focus:ring-0 focus:border-black
                    border-gray-200">
                    <option>Select User Role</option>

                    <option> available roles</option>

                </select>

                <label for="roleId" class="absolute duration-300 top-3 -z-1
                    origin-0 text-gray-500">Role</label>
            </div>
        </div>
    </div>

    <div class="grid grid-rows-1 grid-cols-1">
        <div class="col-span-1">
            <div class="mb-3">
                <input type="text" name="avatar" id="avatar"
                    class="form-control" placeholder="Avatar URL"
                    value="avatar" required>
                <label for="avatar" class="absolute duration-300 top-3 -z-1
                origin-0 text-gray-500">Avatar URL</label>
            </div>
        </div>
    </div>

    <button class="bg-blue-500" type="submit" name="submit"
        id="submit">BUTTON TEXT</button>
        <button class="bg-green-500">
        <a href="users" class="btn
            btn-secondary">
            Cancel
        </a>
    </button>
