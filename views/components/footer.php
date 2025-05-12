</div>
</div>
<script src=""></script>
    
    <?php
        if(isset($javascript)) {
            echo "<script src='{$javascript['file_name']}'></script>";
        } else {
            echo "";
        }
    ?>
</body>
</html>