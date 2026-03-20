<!-- <h1>User List</h1>
<a href="./?page=user/create">create user</a> -->

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
            $count =1;
            while ($row = $users->fetch_object()) {
                echo "<tr>
                    <td>$count</td>
                    <td><img src='" .($row->photo ?? './assets/images/emptyuser.png') . "'></td>
                    <td>$row->name</td>
                    <td>
                        <a class='btn btn-primary btn-sm'>Edit</a>
                        <a class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                
                </tr>";
                $count++;
            }
            ?>

            <?php
            $users = getUsers();
            $total = $users->num_rows;
            for ($i = 0; $i < $total; $i++) {
                $row = $users->fetch_object();
                echo "<tr>
                    <td>" . ($i + 1) . "</td>
                    <td><img src='" . ($row->photo ?? './assets/images/emptyuser.png') . "'></td>
                    <td>$row->name</td>
                    <td>
                        <a class='btn btn-primary btn-sm'>Edit</a>
                        <a class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
            }
            ?>

            <?php
            $users = getUsers();
            $data = [];

            while ($row = $users->fetch_object()) {
                $data[] = $row;
            }

            $count = 1;
            foreach ($data as $row) {
                echo "<tr>
                    <td>$count</td>
                    <td><img src='" . ($row->photo ?? './assets/images/emptyuser.png') . "'></td>
                    <td>$row->name</td>
                    <td>
                        <a class='btn btn-primary btn-sm'>Edit</a>
                        <a class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
                $count++;
            }
            ?>

            <?php
            $users = getUsers();
            $count = 1;
            $row = $users->fetch_object();
            if ($row) {
                do {
                    echo "<tr>
                        <td>$count</td>
                        <td><img src='" . ($row->photo ?? './assets/images/emptyuser.png') . "'></td>
                        <td>$row->name</td>
                        <td>
                            <a class='btn btn-primary btn-sm'>Edit</a>
                            <a class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                    </tr>";
                    $count++;
                } while ($row = $users->fetch_object());
            }
            ?>

            <!-- <tr>
                <td>1</td>
                <td><img src="./assets/images/emptyuser.png" alt="User Photo"></td>
                <td>John Doe</td>
                <td>
                    <a class="btn btn-primary btn-sm">Edit</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr> -->

        </tbody>

    </table>
</div>