<section class="mt-28 z-[40] bg-white pt-20">
    <h4 class="text-center text-5xl mb-4 text-head font-extrabold">Our Blogs</h4>

    <div class="text-lg max-w-7xl mx-auto">
        <h4 class="text-center font-livvic text-lg mb-12 text-gray-700 max-w-5xl mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat incidunt consequuntur nisi hic quasi earum ea esse nemo suscipit cupiditate. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque porro voluptas, possimus sed perferendis vel quos hic illum voluptatibus consequatur sit iure ut labore magnam tempore nihil vero totam nam!</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <?php
        $post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT 1 offset 0";

        $query = mysqli_query($con, $post);

        $query_run = mysqli_num_rows($query);

        ?>
        <?php
        if ($post) {
          while ($results = mysqli_fetch_assoc($query)) {
            $fullText = $results['description'];

            $words = explode(' ', $fullText);
            $first50Words = implode(' ', array_slice($words, 0, 50));


        ?>

        
            <div class="rounded-xl lg:col-span-3 shadow">
                <div class="">
                    <div class="flex justify-between items-center mb-3">
                        <div class="">
                            <a href="./blogs/<?= $results['slug'] ?>">
                            <img class="rounded-t-xl w-full" src="<?php echo $mainUrl ?>assets/client/images/blog/<?= $results['image'] ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="items-start justify-between leading-tight gap-2 p-2 md:p-4">
                        <h1 class="text-lg group-hover:text-white mb-3">
                            <a class="group-hover:text-white no-underline font-bold text-head md:text-3xl text-lg" href="./blogs/<?= $results['slug'] ?>">
                            <?= $results['name'] ?>
                            </a>
                        </h1>
                        <!-- <p class=" text-sm group-hover:text-white font-livvic text-head ">
                           Created on 11/1/19
                        </p> -->
                    </div>
                </div>
            </div>
            <?php        }
        }
        ?>

            <div class="">
            <?php
        $post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT 2 offset 1";

        $query = mysqli_query($con, $post);

        $query_run = mysqli_num_rows($query);

        ?>
        <?php
        if ($post) {
          while ($result = mysqli_fetch_assoc($query)) {
            $fullText = $result['description'];

            $words = explode(' ', $fullText);
            $first50Words = implode(' ', array_slice($words, 0, 50));


        ?>
            <div class="rounded-xl shadow mb-8">
                <div class="">
                    <div class="flex justify-between items-center mb-3">
                        <div class="">
                        <a href="./blogs/<?= $result['slug'] ?>">
                            <img class="rounded-t-xl w-full" src="<?php echo $mainUrl ?>assets/client/images/blog/<?= $result['image'] ?>" alt="">
                        </a>
                        </div>
                    </div>
                    <div class=" items-start justify-between leading-tight gap-2 p-2 md:p-4">
                        <h1 class="text-lg mb-3 group-hover:text-white">
                            <a class="group-hover:text-white no-underline font-bold text-head text-lg" href="#">
                            <?= $result['name'] ?>
                            </a>
                        </h1>
                        <!-- <p class=" text-sm group-hover:text-white font-livvic text-head ">
                          Created on  11/1/19
                        </p> -->
                    </div>
                </div>
            </div> 
            <?php        }
        }
        ?>

            </div>

            <?php
        $post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT 4 offset 3";

        $query = mysqli_query($con, $post);

        $query_run = mysqli_num_rows($query);

        ?>
        <?php
        if ($post) {
          while ($resultt = mysqli_fetch_assoc($query)) {
            $fullText = $resultt['description'];

            $words = explode(' ', $fullText);
            $first50Words = implode(' ', array_slice($words, 0, 50));


        ?>

            <div class=" rounded-xl shadow">
                <div class="">
                    <div class="flex justify-between items-center mb-3">
                        <div class="">
                        <a href="./blogs/<?= $resultt['slug'] ?>">
                            <img class="rounded-t-xl w-full" src="<?php echo $mainUrl ?>assets/client/images/blog/<?= $resultt['image'] ?>" alt="">
                        </a>
                        </div>
                    </div>
                    <div class=" items-start justify-between leading-tight gap-2 p-2 md:p-4">
                        <h1 class="text-lg mb-3 group-hover:text-white">
                            <a class="group-hover:text-white no-underline font-bold text-head text-lg" href="./blogs/<?= $resultt['slug'] ?>">
                            <?= $resultt['name'] ?>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
            <?php        }
        }
        ?>

        </div>
    </div>
</section>