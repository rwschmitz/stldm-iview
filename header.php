<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta description="Eat at Mario's Italian Restaurant today!  Located in Matthews, NC.  Pizza, drinks and more!  Reserve a banquet room today!">
    <!-- The above 2 meta tags must come first according to Bootstrap documentation -->
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <title>Demo for STLDM | Custom Wordpress Theme for Interview @ STLDM</title>
</head>

<!-- Navigation start -->
<div class="no-gutters pb-5">
    <nav class="nav fixed-top navbar-expand-lg nav-style">

        <!-- Button responsible for opening/closing navbar on mobile -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarInfo" aria-controls="navbarInfo" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">MENU</span>
        </button>

        <!-- Actual navbar links -->
        <div class="justify-content-end collapse navbar-collapse" id="navbarInfo">
            <a href="https://newtpress.com/stldm-iview/" class="nav-link nav-item"  data-target=".navbar-collapse.show"><button id="goHome" class="nav-btn underline">HOME</button></a>
            <a href="https://newtpress.com/stldm-iview/menu-item-1" class="nav-link nav-item"  data-target=".navbar-collapse.show"><button id="goHome" class="nav-btn underline">menu item 1</button></a>
            <a href="https://newtpress.com/stldm-iview/menu-item-2" class="nav-link nav-item"  data-target=".navbar-collapse.show"><button id="goMenu" class="nav-btn underline">menu item 2</button></a>


            <a href="https://newtpress.com/stldm-iview/menu-item-3" id="mainDropDown1" class="nav-link nav-item" data-target=".navbar-collapse.show">
                <button class="nav-btn underline">menu item 3</button>
                    <div id="subdrop1" class="dropdown-menu">
                        <li><button class="nav-drop-btn underline">Sub-menu item 1</button></li>
                        <li><button class="nav-drop-btn underline">Sub-menu item 2</button></li>
                        <li><button class="nav-drop-btn underline">Sub-menu item 3</button></li>
                    </div>
            </a>
            


            <a href="https://newtpress.com/stldm-iview/menu-item-4" class="nav-link nav-item"  data-target=".navbar-collapse.show"><button id="goMenu" class="nav-btn underline">menu item 4</button></a>
            <a href="https://newtpress.com/stldm-iview/menu-item-5" class="nav-link nav-item"  data-target=".navbar-collapse.show"><button id="goMenu" class="nav-btn underline">menu item 5</button></a>
            

<!-- removed data-toggle="collapse" -->
        </div>
    </nav>
</div> <!-- End no gutters -->
<!-- Navigation end -->

<!--
<a href="https://newtpress.com/stldm-iview/menu-item-3" id="mainDropDown1" class="nav-link nav-item" data-target=".navbar-collapse.show"></a>
                <div id="drop1" class="dropdown">
                    <button class="nav-btn underline">menu item 3</button>
                        <div id="subdrop1" class="dropdown-menu">
                        <li><button class="nav-drop-btn underline">Sub-menu item 1</button></li>
                        <li><button class="nav-drop-btn underline">Sub-menu item 2</button></li>
                        <li><button class="nav-drop-btn underline">Sub-menu item 3</button></li>
                    </div>
                </div>
-->
   