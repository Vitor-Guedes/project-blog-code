<?= component('header') ?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $post['title'] ?> </h1>
        <p id="post-description"> <?= $post['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $app->getRoutePathByName('home') ?>imgs/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, enim molestias, minus pariatur nulla sunt voluptatum sequi adipisci alias iusto labore excepturi, eos odit quam asperiores dolorum ab laboriosam at!
        Dolorum obcaecati dolorem iste temporibus aspernatur quam ullam eius, qui maiores! Architecto exercitationem quis natus omnis perspiciatis sed, quae hic saepe alias magni velit eaque nihil blanditiis id necessitatibus sit.
        Quas quia harum fugiat doloribus obcaecati, ipsa animi dignissimos nesciunt! Cumque dicta maiores laudantium? Sed, necessitatibus? Voluptatem laudantium impedit dignissimos eligendi facilis modi perspiciatis dolore a fugiat nulla! Enim, a!
        Reiciendis hic excepturi tenetur corporis porro quis recusandae aut eaque accusantium deleniti, reprehenderit, maiores rem commodi unde, rerum culpa nam architecto nobis quam molestias iure ea nostrum voluptate? Sapiente, iste.
        Officia rem maiores eius magnam cupiditate natus? Laboriosam beatae quos officia blanditiis ut adipisci maxime sint eius assumenda! Eius quidem excepturi magnam et? Voluptate quia dolore, debitis laudantium at ullam.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, enim molestias, minus pariatur nulla sunt voluptatum sequi adipisci alias iusto labore excepturi, eos odit quam asperiores dolorum ab laboriosam at!
        Dolorum obcaecati dolorem iste temporibus aspernatur quam ullam eius, qui maiores! Architecto exercitationem quis natus omnis perspiciatis sed, quae hic saepe alias magni velit eaque nihil blanditiis id necessitatibus sit.
        Quas quia harum fugiat doloribus obcaecati, ipsa animi dignissimos nesciunt! Cumque dicta maiores laudantium? Sed, necessitatibus? Voluptatem laudantium impedit dignissimos eligendi facilis modi perspiciatis dolore a fugiat nulla! Enim, a!
        Reiciendis hic excepturi tenetur corporis porro quis recusandae aut eaque accusantium deleniti, reprehenderit, maiores rem commodi unde, rerum culpa nam architecto nobis quam molestias iure ea nostrum voluptate? Sapiente, iste.
        Officia rem maiores eius magnam cupiditate natus? Laboriosam beatae quos officia blanditiis ut adipisci maxime sint eius assumenda! Eius quidem excepturi magnam et? Voluptate quia dolore, debitis laudantium at ullam.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, enim molestias, minus pariatur nulla sunt voluptatum sequi adipisci alias iusto labore excepturi, eos odit quam asperiores dolorum ab laboriosam at!
        Dolorum obcaecati dolorem iste temporibus aspernatur quam ullam eius, qui maiores! Architecto exercitationem quis natus omnis perspiciatis sed, quae hic saepe alias magni velit eaque nihil blanditiis id necessitatibus sit.
        Quas quia harum fugiat doloribus obcaecati, ipsa animi dignissimos nesciunt! Cumque dicta maiores laudantium? Sed, necessitatibus? Voluptatem laudantium impedit dignissimos eligendi facilis modi perspiciatis dolore a fugiat nulla! Enim, a!
        Reiciendis hic excepturi tenetur corporis porro quis recusandae aut eaque accusantium deleniti, reprehenderit, maiores rem commodi unde, rerum culpa nam architecto nobis quam molestias iure ea nostrum voluptate? Sapiente, iste.
        Officia rem maiores eius magnam cupiditate natus? Laboriosam beatae quos officia blanditiis ut adipisci maxime sint eius assumenda! Eius quidem excepturi magnam et? Voluptate quia dolore, debitis laudantium at ullam.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
        <?php foreach ($post['tags'] as $tag) : ?>
                <li><a href="#"> <?= $tag ?> </a></li>
            <?php endforeach ; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"> <?= $category ?> </a></li>
            <?php endforeach ; ?>
        </ul>
    </aside>
</main>

<?= component('footer') ?>