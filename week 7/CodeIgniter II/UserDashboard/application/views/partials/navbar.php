<!-- 
	Bootstrap navigation bar.  
	Changes depending on whether a user is logged in, 
	and whether that user is an Administrator.
 -->

<?php
$page = $this->session->userdata('active_page');
$this->session->unset_userdata('active_page');

if (empty($page))                //	recover gracefully, but this should never happen
{
    console . log("WARNING: 'active_page' is not set");
    $page = 'home';
}
$active = "<li class='active'>";
$nav_btn_li['home'] = "<li>";
$nav_btn_li['signin'] = "<li>";
$nav_btn_li['register'] = "<li>";
$nav_btn_li['dashboard'] = "<li>";
$nav_btn_li['users'] = "<li>";
$nav_btn_li[$page] = $active;    //	one btn is active		
?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <?php
            $accessType = "User";
            if ($this->session->userdata("user_level") == 9) {
                $accessType = "Admin";
            }
            ?>
            <span class="navbar-brand"><?= $accessType ?> Dashboard</span>
            <span class="navbar-brand">Test App</span>
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?= $nav_btn_li['home'] ?><a href='<?= base_url() ?>'>Home</a></li>
                <?= $nav_btn_li['signin'] ?><a href='<?= base_url('signin') ?>'>Sign in</a></li>
                <?= $nav_btn_li['register'] ?><a href='<?= base_url('registration') ?>'>Register</a></li>
                <?php
                if ($this->session->userdata("is_logged_in")) {
                ?> <?= $nav_btn_li['dashboard'] ?><a href='<?= base_url('dashboard') ?>'>Dashboard</a></li>
                    <?= $nav_btn_li['users'] ?><a href='<?= base_url('users/show') ?>'>Users</a></li>
                    <li><a href='<?= base_url('signin/logout') ?>'>Sign out</a></li>
                <?php   } else {
                ?> <li class='disabled'><a>Dashboard</a></li>
                    <li class='disabled'><a>Users</a></li>
                    <li class='disabled'><a>Sign out</a></li>
                <?php   }
                ?>
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div> <!-- container -->
</nav>