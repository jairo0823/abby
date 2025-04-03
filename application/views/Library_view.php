<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body>
<h2>Library Management System</h2>

<h3> Add Book </h3>
<form action ="<?= site_url('library/add') ?>" method="post">
     <input type="text" name="title" placeholder="Title" required>
     <input type="text" name="author" placeholder="Author" required>
     <input type="text" name="published_year" placeholder="Published Year" required>
     <button type="submit">Add</button>
</form>

<h3> Book List </h3>
<table border="1">
    <thead> 
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Status</th>
            <th>Actions</th>
        </tr> 
    </thead>
    <tbody>
        <?php foreach ($Books as $Book) { ?>
            <tr>
                <td><?= htmlspecialchars($Book['id']) ?></td>
                <td><?= htmlspecialchars($Book['Title']) ?></td>
                <td><?= htmlspecialchars($Book['Author']) ?></td>
                <td><?= htmlspecialchars($Book['Published_year']) ?></td>
                <td><?= htmlspecialchars($Book['Status']) ?></td>
                <td>
                    <?php if ($Book['Status'] == 'Available') { ?>
                        <a href="<?= site_url('library/borrow/' . $Book['id']) ?>">Borrow</a>
                    <?php } else { ?>
                        <a href="<?= site_url('library/return_book/' . $Book['id']) ?>">Return</a>
                    <?php } ?>
                    <a href="<?= site_url('library/delete/' . $Book['id']) ?>">Delete</a>
                </td>
            </tr>
        <?php } ?> 
    </tbody>
</table>

</body>
</html>
