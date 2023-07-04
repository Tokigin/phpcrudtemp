<table class="table table-hover ">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
    </tr>
    <tbody class="table-group-divider">
        <?php foreach ($products_data as $row) : array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo $row["productid"] ?></td>
                <td><a class="text-dark link-light" href="productdetail.php?id=<?php echo $row["productid"] ?>"><?php echo $row["productname"] ?></a></td>
                <td><?php echo $row["description"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><a href="edit.php?id=<?php echo $row["productid"] ?>">
                        <i class="fa-regular fa-pen-to-square" style="color: #000000;"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>