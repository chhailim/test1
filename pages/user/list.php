<div class="container">
    <div class="d-flex justify-content-between">
        <h3>User List</h3>
        <a href="./?page=user/create" role="button" class="btn btn-success">
            Create New
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $users = getUsers();
            $count = 1;
            while ($row = $users->fetch_object()) {
                echo "<tr>
                    <td>$count</td>
                    <td><img src='" . ($row->photo ?? './assets/images/emptyuser.png') . "'></td>
                    <td>$row->name</td>
                    <td>
                        <a href='./?page=user/update&id=$row->id' class='btn btn-primary btn-sm'>Edit</a>
                        <a href='./?page=user/delete&id=$row->id' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
                $count++;
            }
            ?>
        </tbody>
    </table>
</div>