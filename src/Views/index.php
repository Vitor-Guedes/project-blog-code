<?= component('header') ?>

<main>
    <div id="title-container">
        <h1>Blog Codar</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach ($posts as $post) : ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>imgs/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post/<?= $post['id'] ?>"> <?= $post['title'] ?> </a>
                </h2>
                <p class="post-description"> <?= $post['description'] ?> </p>
                <?php foreach ($post['tags'] as $tag) : ?>
                    <a href="#"> <?= $tag ?> </a>
                <?php endforeach ; ?>
            </div>
        <?php endforeach ; ?>
    </div>
</main>

<?= component('footer') ?>