<?php include_once('header.php'); ?>
                <h3>Ngữ pháp cơ bản</h3>
                <ul>
                <?php
                    foreach ($data as $val){
                        echo '<li><a href="?c=nguphap&a=bieudien&id='.$val['id'].'"> '.$val['name'].' </a></li>';
                    }
                ?>
                </ul>
<?php include_once('footer.php'); ?>