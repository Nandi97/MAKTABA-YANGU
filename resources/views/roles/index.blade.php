@include('/resources/views/layouts/header.blade.php')

<div class="flex justify-between flex-wrap md:flex-nowrap items-center pt-3 pb-2
    mb-3 border-b">
    <ul class="rounded-full py-3 px-6">
        <li>
            <a href="../users/">Users</a>
        </li>
        <li>
            <a class="active" aria-current="page" href="../roles/">Roles</a>
        </li>
    </ul>
    <button class="bg-white border-blue-700">
        <a href="../roles/create.blade.php">
            <i></i>
            Add Role
        </a>
    </button>
</div>

<table class="order-collapse border border-gray-800">
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
            $sql="SELECT * FROM roles" ;
            $result= $db->query($sql);
            $counter = 0;
            if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
            $counter++;
            ?>
            <tr>
                <td><?php echo $counter; ?></td>
                    <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                            <td>
                                <button class="bg-white border-blue-700 hover:">
                                    <a href="../roles/update.blade.php?id=<?=
                                        $row['id'] ?>">
                                        <i class="bi bi-pencil"></i>
                                        Edit Role
                                    </a>
                                </button>
                            </td>
                        </tr>
                        <?php
                            }
                            // Free result set
                            unset($result);
                            } else {
                            echo"No records matching your query were found." ;
                            }
                            ?>
                        </tbody>
                    </table>
                    @include('/resources/views/layouts/footer.blade.php')
