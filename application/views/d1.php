<?php include_once('header.php'); ?>
<style type="text/css">
.class6{
	margin-top:5%;
	text-decoration: none;
   	font-family:candara;
   	font-size: 60%;
   	border:3px solid #007bff;
   	border-radius: 5px;
   	padding: 1%;
   	transition:0.3s;
   	cursor:pointer;
   	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.class61{
   	background-color:#007bff;
   	color:white;
}

.class61:hover{
   	background-color:white;
   	color:#007bff;
	
}
</style>
<script type="text/javascript">
    function check()
    {
        var question_01 = document.myform3.question_01.value;
        var question_02 = document.myform3.question_02.value;
        var question_03 = document.myform3.question_03.value;
        var count = 0;
        if(question_01 == "c")
        {
            count++;
        }
        if(question_02 == "a")
        {
            count++;
        }
        if(question_03 == "a")
        {
            count++;
        }
        var b=document.querySelector(".points");
	    b.innerHTML = "Điểm:" + "  " + count;
    }
</script>
<form name='myform3'>
<ol>
    <li>What is the capital of Vietnam ?<br>
    <input type="radio" name="question_01" value="a"> Da Nang<br>
    <input type="radio" name="question_01" value="b"> Ho Chi Minh<br>
    <input type="radio" name="question_01" value="c"> Ha Noi<br>
    <input type="radio" name="question_01" value="d"> Hai Phong<br><br>
    <li>HTML stands for...?<br>
    <input type="radio" name="question_02" value="a"> hypertext markup language<br>
    <input type="radio" name="question_02" value="b"> hypertension markup language<br><br>
    <li> Which country is the largest in the world?<br>
    <input type="radio" name="question_03" value="a"> Russia<br>
    <input type="radio" name="question_03" value="b"> China<br>
    <input type="radio" name="question_03" value="c"> America<br>
    <input type="radio" name="question_03" value="d"> India<br><br>
</ol>
<input  type="button" class="search-button" value="submit" onclick="check()">
</form>
<div class="points"></div>
<?php include_once('footer.php'); ?>