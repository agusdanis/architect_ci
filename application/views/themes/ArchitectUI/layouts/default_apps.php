<!doctype html>
<html lang="en">

<head>
    <?php echo $head; ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    
        <div class="app-header header-shadow">
            <?php echo $navbar; ?>
        </div>    

        <div class="ui-theme-settings">
            <?php echo $theme_settings; ?>
        </div>    

        <div class="app-main">
        
            <div class="app-sidebar sidebar-shadow">
                <?php echo $sidebar; ?>
            </div>    
            
            <div class="app-main__outer">

                <div class="app-main__inner p-0">

                    <?php echo $content; ?>

                </div>

                <div class="app-wrapper-footer">

                    <?php echo $footer; ?>

                </div>    
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>

    <div class="app-drawer-wrapper">
        <?php echo $app_drawer; ?>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>

<?php echo $script;?>
</body>
</html>
