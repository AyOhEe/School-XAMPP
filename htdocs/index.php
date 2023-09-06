<html>
    <body>
        <main>
            <?php echo "<h1>Navigation - htdocs</h1>"?>
            <?php echo "Today is ".date("Y/m/d")?>
            <div id="clock"> It is currently 00:00:00 on a Monday </div>
        
            <ul><?php
                $parentdir = "navtargets";
                $directories = glob($parentdir . '/*' , GLOB_ONLYDIR);
                foreach ($directories as $dir){
                    echo "<li>";
                    echo "<a href =\"".$dir."\">";
                    echo substr($dir, strlen($parentdir) + 1);
                    echo "</a>";
                    echo "</li>";
                }
            ?></ul>
        </main>
    </body>


    
    <head>
        <link href="styles.css" rel="stylesheet" type="text/css">
        <script src="p-time.js"></script>
    </head>
</html>