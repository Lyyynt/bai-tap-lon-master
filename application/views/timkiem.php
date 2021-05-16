<?php include_once('header.php'); ?>
    <h3>Kết quả tìm kiếm</h3>
                <ul>
                <?php
                     if(empty($data)){
                        echo 'Không tìm thấy ';
                     } else {
                         foreach ($data as $val){
                            echo '<li><a href="?c=nguphap&a=bieudien&id='.$val['id'].'"> '.$val['name'].' </a></li>';
                        }
                     }
                ?>
                </ul>
<?php include_once('footer.php'); ?>