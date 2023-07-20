<?= component('header') ?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> Categorias </h1>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li> <a href="#"> <?= $category ?> </a> </li>
            <?php endforeach ; ?>
        </ul>
    </div>
</main>

<?= component('footer') ?>