<?php include(__DIR__ . '/layouts/head.view.php'); ?>

<body>
    <?php include(__DIR__ . '/layouts/navigatie.view.php'); ?>
    <?php include(__DIR__ . '/layouts/header.view.php'); ?>
    <main>
        <section class="AllComments">

            <table>
                <thead>
                    <tr>
                        <th>Comment ID</th>
                        <th>Post ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php // Fetch posts from DB
                    foreach ($comments as $comment): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($comment['commentid']); ?></td>
                            <td><?php echo htmlspecialchars($comment['PostID']); ?></td>
                            <td><?php echo htmlspecialchars($comment['bericht']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <section class="AllPosts">

            <table>
                <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($post['postid']); ?></td>
                            <td><?php echo htmlspecialchars($post['title']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <?php echo $ContentHTML; ?>
    </main>
</body>
<?php include(__DIR__ . '/layouts/footer.view.php'); ?>

</html>