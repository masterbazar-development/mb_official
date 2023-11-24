<div class=" text-gray-800 border-l-[.1rem] border-head p-3 hidden lg:grid lg:grid-cols-1 2xl:grid-cols-1 justify-start gap-4 xl:col-span-4  my-8">
    <h6 class="text-head text-2xl font-bold"><span class="border-t-2  border-blue">Recent </span>Blogs</h6>
    <?php
    $post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT 4";
    $query = mysqli_query($con, $post);

    $query_run = mysqli_num_rows($query);
    if ($post) {
        while ($result = mysqli_fetch_assoc($query)) {
    ?>
            <div class="grid grid-flow-row gap-6 pt-3">
                <div class="image-container flex gap-4 w-full items-start group/image">
                    <div class="img-wrapper trigger rounded-md w-[45%] h-full group-hover/image">
                        <a href="../blogs/<?= $result['slug'] ?>">
                            <img src="../assets/client/images/blog/<?= $result['image'] ?>" class="rounded-md">
                        </a>
                    </div>
                    <div class="w-[65%]">
                        <a href="../blogs/<?= $result['slug'] ?>">
                            <h6 class=" text-gray-800 text-sm xl:text-sm 2xl:text-[16px]  font-semibold transition duration-150 hover:underline hover:underline-offset-4 target group/edit group-hover/image:underline-offset-4 group-hover/image:underline group-hover/image:text-[#294497] group-hover/image:translate-x-[6px]"><?= $result['name'] ?></h6>
                        </a>
                    </div>
                </div>
            </div>
    <?php        }
    }
    ?>
</div>


<script>

</script>