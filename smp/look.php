<html>
<head>
    <title>Notes</title>
    <meta charset="utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
        body {
            background-image: url("img/qqq.png");
        }
    </style>
</head>
	<form action="leave.php">
		<div align="center"><input type="submit" value="Выход" class="btn btn-danger btn-block"/></div>
	</form>
  <div class="container">
      <div class="row">
       <div class="navbar navbar-inverse">
       <div class="container">
       <div class="navbar-header">
       <div class="collapse navbar-collapse" id="responsive-menu">
       <ul class="nav navbar-nav">
           <li><a href="title.php">Главное меню</a></li>
           <li><a href="notes.php">Создать Заметку</a></li>
           <li><a href="look.php">Просмотр Заметок</a></li>
       </ul>
       </div>    
       </div>
    </div>
    </div>
    </div>
    </div>
	<form action="add.php">
  <font color="white">
<div align="left" style="font-size:32px">Ваши заметки: </div>
<?
    session_start();
    //
$db=new MongoClient();
$users=$db->notes->users;
$notes=$db->notes->notes;
$log=$_SESSION['log'];
$cursor = $notes->find();
$text=$_GET['text'];
$title=$_GET['title'];
echo '
<script>
document.getElementById("title").value="'.$title.'";
document.getElementById("text").value="'.$text.'";
</script>
';
  foreach ($cursor as $obj) {
  	if ($obj['acc']==$log){
		echo '<hr>';
  		echo '<div align="left" style="font-size:24px">Название Заметки :   '.$obj['title'].'</div><br />';
  		echo '<div align="left" style="font-size:20px">Текст Заметки :  '.$obj['text'].'</div><br />';
      echo '<div align="left"><a href="changenote.php?title='.$obj['title'].'&text='.$obj['text'].'">Изменить заметку</a></div>';
  		echo '<div align="left"><a href="deletenote.php?title='.$obj['title'].'&text='.$obj['text'].'">Удалить заметку</a></div>';
  		echo '<br/>';
  	}
  
 }

?>
</body>
</html>