<?php 
    include "layouts/navbar.php";
    include "dbconnect.php";
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $stmt = $conn->query($sql);
    $stmt->execute();
    $posts = $stmt->fetchAll();
    // var_dump($sql);
    // var_dump($posts);
?>    
       
       <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                    <?php
                        foreach($posts as $post){
                    ?>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="<?php echo $post['image'] ?>" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo $post['created_at'] ?></div>
                                    <h2 class="card-title h4"> <?php echo $post['title'] ?></h2>
                                    <p class="card-text"> <?php echo $post['description'] ?> </p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
<?php 
    include "layouts/footer.php";
?>           
