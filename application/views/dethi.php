<?php include_once('header.php'); ?>
                <h3>Đề thi</h3>
                <ul>
                    <?php
                        foreach ($data as $val){
                            echo '<li><a href="?c=dethi&a=bieudiendethi&id='.$val['id'].'"> '.$val['name'].' </a></li>';
                        }
                    ?>
                </ul>
<?php include_once('footer.php'); ?>