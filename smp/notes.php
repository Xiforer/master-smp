<html>
<head>
    <title>Notes</title>
    <meta charset="utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
        body {
            background-image: url("img/qqq.png");
        }

        #parent_popup {
  background: #000;
  height: 100%;
  opacity: 0.9;
  position: fixed;
  width: 100%;
  z-index: 100;
  top: 0;
  left: 0;
}
        #popup {
  background-color: #00f;
  height: 200px;
  position: fixed;
  top: 100px;
  left: 40%;
  color: #f00;
  width: 300px;
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
<p class="fig"><img src="img/cat.png"  div align="right" alt="Фотография"></p>
    <div align="left"><font size="5" color="white">Название Заметки:</font></div><br />
        <div align="left"><input type="text" name="title" id="title" style="height:30px;width:500px" required/></div><br />
   <div align="left"><font size="5" color="white">Текст Заметки:</font></div><br />
        <div align="left" ><textarea style="height:150px;width:500px" name="text" id="text" required ></textarea></div><br />
        <div align="left"><input type="submit"  value="Добавить" class="btn btn-primary" /></div><br /><br /><br />
         <audio controls loop="1">
    <source src="img/pool.ogg" type="audio/ogg; codecs=vorbis">
    <source src="img/pool.mp3" type="audio/mpeg">
  </audio>
  </form>
</body>
</html>