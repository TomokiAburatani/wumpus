<?php
if(empty($_POST['time'])){
  $time = 0;
} else {
  $time = $_POST['time'];
}
?>   


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="./css/main.css" type="text/css" />
    <link rel="icon" href="./img/favicon.ico">

    <title>英語演習課題Wumpus World プロトタイプ</title>
    <script type="text/javascript" src="./js/jquery.min.js"></script>

    
  </head>


  <body>
    <center>    
      <h1>The Wumpus World Prototype</h1>

      <p>現在の時間<?php echo $time; ?></p>
      <p>選択した行動：      </p>
      <form action="./wumpus.php" method="POST">
	<input type="hidden" name="time" value=<?php echo $time + 1; ?> />
	<button type="submit" name="next" value="" class="next-tern">次のターンを見る</button>
      </form>


      <br />
      
      <div id="main-table">
	<table id="board">


	  <!-- ここからのテーブルを自動で生成する方がいい -->
	  <tr>
	    <td class="label">10</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  <tr>
	    <td class="label">9</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">8</td>
	    <td><img src="./img/wumpus.png" width="60px" height="60px" /></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">7</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td class="gold"></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">6</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">5</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td>悪臭<br />風</td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">4</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">3</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">2</td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label">1</td>
	    <td><img src="./img/knight.png" width="60px" height="60px" /></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td></td>
	    <td class="hole"></td>
	    <td></td>
	  </tr>
	  
	  <tr>
	    <td class="label"></td>
	    <td class="label">1</td>
	    <td class="label">2</td>
	    <td class="label">3</td>
	    <td class="label">4</td>
	    <td class="label">5</td>
	    <td class="label">6</td>
	    <td class="label">7</td>
	    <td class="label">8</td>
	    <td class="label">9</td>
	    <td class="label">10</td>
	  </tr>


	  <!-- ここまでのテーブルを自動で生成する方がいい -->
	</table>
      </div>

      <br /><hr /><br /><br />

      <h2>最後の行動の後の状態</h2>
      <table id="status-table">
	<tr>
	  <td>状態</td>
	  <td>座標</td>
	  <td>悪臭</td>
	  <td>風</td>
	  <td>輝き</td>	    
	  <td>呻声</td>
	  <td>壁</td>
	  <td>時間</td>
	</tr>
	<tr>
	  <td>値</td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	</tr>
      </table>

      <br /><hr /><br /><br />
      
      <h2>アイコンの意味</h2>
      <table id="icon-table">
	<tr>
	  <th>アイコンの意味</th>
	  <th>敵(ワンプス)</th>
	  <th>味方(ナイト)</th>
	  <th>落とし穴</th>
	  <th>黄金</th>
	  <th>悪臭</th>
	  <th>風</th>
	</tr>
	<tr>
	  <td>アイコン</td>
	  <td><img src="./img/wumpus.png" width="120px" height="60px" /></td>
	  <td><img src="./img/knight.png" width="60px" height="60px" /></td>
	  <td><img src="./img/hole.png" width="60px" height="60px" /></td>
	  <td><img src="./img/gold.jpg" width="60px" height="60px" /></td>
	  <td>悪臭</td>
	  <td>風</td>
	</tr>
      </table>

    </center>    
  </body>
</html>
