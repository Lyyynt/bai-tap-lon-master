<?php include_once('header.php'); ?>
<script>
function Validate1(){
			var name = document.myform2.phanhoi.value;
			name.trim();
			if( name == ""){
				alert("Nhập thông tin phản hồi");
				return false;
			}
			return true;
		}
</script>
<h3>Các phản hồi</h3>
    <table style=" border:1px solid #ffaa56;width:100%;">
        <tr>
            <th style=" border:1px solid #ffaa56;;width:30%;">Tài khoản</th>
            <th style=" border:1px solid #ffaa56">Phản hồi</th>
        </tr>
    <?php
        foreach ($data as $val){
            echo '
                <tr>
                    <td style=" border:1px solid #ffaa56">'.$val['iduser'].'</td>
                    <td style=" border:1px solid #ffaa56">'.$val['phanhoi'].'</td>
                </tr>';
        }
    ?>
    </table>
    <h4>Bạn có muốn phản hồi</h4>
    <form action="?c=phanhoi&a=add" name="myform2" onsubmit="return Validate1()">
		<input type="textarea"  class="search-box" placeholder="Hãy phản hồi vào đây?" id="phanhoi" name="phanhoi"><br>
        <input type="submit" formmethod="post" class="search-button" value="Phản hồi" >
					  
	</form>
<?php include_once('footer.php'); ?>
