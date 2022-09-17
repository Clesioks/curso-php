<?php
include_once("templates/header.php");

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postId){
            $currentPost = $post;
                }
    }

}



?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel soluta ipsam ab aliquam hic
            rerum, labore praesentium saepe consequuntur itaque cumque harum iusto. Reiciendis, incidunt odio ratione
            quisquam voluptatem veniam!
            Ratione culpa consequatur impedit labore nisi sapiente pariatur ullam odit vel, reiciendis ex temporibus
            architecto perferendis, perspiciatis tempora asperiores id autem. Fugit eveniet laborum dolor at in, illum
            maiores asperiores.
            Repudiandae, quidem. Laborum temporibus maxime esse ipsa laudantium perferendis animi doloribus. Cum laborum
            earum necessitatibus nam officia. Tenetur enim eligendi illo natus quas iusto eaque fugiat, ea quam nam
            ipsam?
            Explicabo doloremque quas tempora dolor placeat quo. Ipsa beatae aspernatur nulla ipsum esse dignissimos
            maiores impedit sapiente aliquid cumque tenetur temporibus eligendi alias incidunt culpa perferendis, natus
            ad animi fugiat?
            Maxime aliquid distinctio eum pariatur ullam inventore iste recusandae omnis commodi consequuntur rem culpa
            totam, fugiat odit voluptate temporibus error vel doloribus delectus! Quisquam unde alias vitae, voluptatem
            aspernatur aliquid!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel soluta ipsam ab aliquam hic
            rerum, labore praesentium saepe consequuntur itaque cumque harum iusto. Reiciendis, incidunt odio ratione
            quisquam voluptatem veniam!
            Ratione culpa consequatur impedit labore nisi sapiente pariatur ullam odit vel, reiciendis ex temporibus
            architecto perferendis, perspiciatis tempora asperiores id autem. Fugit eveniet laborum dolor at in, illum
            maiores asperiores.
            Repudiandae, quidem. Laborum temporibus maxime esse ipsa laudantium perferendis animi doloribus. Cum laborum
            earum necessitatibus nam officia. Tenetur enim eligendi illo natus quas iusto eaque fugiat, ea quam nam
            ipsam?
            Explicabo doloremque quas tempora dolor placeat quo. Ipsa beatae aspernatur nulla ipsum esse dignissimos
            maiores impedit sapiente aliquid cumque tenetur temporibus eligendi alias incidunt culpa perferendis, natus
            ad animi fugiat?
            Maxime aliquid distinctio eum pariatur ullam inventore iste recusandae omnis commodi consequuntur rem culpa
            totam, fugiat odit voluptate temporibus error vel doloribus delectus! Quisquam unde alias vitae, voluptatem
            aspernatur aliquid!</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php");
?>