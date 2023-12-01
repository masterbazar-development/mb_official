<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="view-register">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Register Users
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/category-add">Add Category</a>
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/category-view">View Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsposts" aria-expanded="false" aria-controls="collapseLayoutsposts">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    Post
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsposts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/post/post-add">Add Post</a>
                        <!-- <a class="nav-link" href="post-edit">Edit Post</a> -->
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/post/post-view">View Post</a>
                    </nav>
                </div>
                <!-- testimonial -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutstestimonial" aria-expanded="false" aria-controls="collapseLayoutstestimonial">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    Testimonial
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutstestimonial" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/testimonial/add-logo">Add Logo</a>
                        <!-- <a class="nav-link" href="post-edit">Edit Post</a> -->
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/testimonial/view-logo">View Logo</a>
                        
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/testimonial/client-testimonial">Add Testimonial</a>

                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/testimonial/view-testimonial">View Testimonial</a>
                    </nav>
                </div>
                   <!-- FAQ-->
                   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsfaq" aria-expanded="false" aria-controls="collapseLayoutsfaq">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                    FAQ
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsfaq" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/faq/">Add FAQ</a>
                        <!-- <a class="nav-link" href="post-edit">Edit Post</a> -->
    
                    </nav>
                </div>
                <!-- gallery -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsgallery" aria-expanded="false" aria-controls="collapseLayoutsgallery">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                   Gallery
                   <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsgallery" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/gallery/images-add">Add Images</a>

                        <a class="nav-link" href="<?php echo $mainurl; ?>mb-admin/gallery/team-add">Add Team</a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>