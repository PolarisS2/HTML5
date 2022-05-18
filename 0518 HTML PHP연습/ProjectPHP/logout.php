<?php 

session_destroy();
session_start();
echo "
    <script>
    location.href='sign_in.php'
    </script>
"

?>