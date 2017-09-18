<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<script type="text/javascript" src="javascript/main.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<title>Hiranga Tutor</title>
	</head>
	
	<script>
		$(document).ready(function(){
			$('#quiz1').hide();
			$('#quiz2').hide();
			$('#regdiv').hide();
		
			$('#clickQuiz1').click(function(){$('#quiz1').toggle();});
			$('#clickQuiz2').click(function(){$('#quiz2').toggle();});
			$('#regbtn').click(function(){$('#regdiv').show();});
		});
	</script>
	
	<?php
		$servername = "localhost"; $username = "root"; $password = "";
        $dbname = "hiragana"; $tablename = "elements";
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if($conn->connect_error) {
			die("Database ".$dbname.": connection failed: " . $conn->connect_error);
		}
	?>
	
	<body>
		<div id="header"><h1>HIRAGANA TUTOR</h1></div>
		<div id="tableArea">
			<p>Hover over symbols to view stroke drawing order! Click on symbols to hear audio pronunciation!</p>
			<table>
				<tr>
					<td><img src="images/static/1.gif" onmouseover="this.src='images/gif/1.gif';" onmouseout="this.src='images/static/1.gif';" onclick="play('audio/1.mp3')"></td> <!-- Sound files: http://www.guidetojapanese.org/learn/complete/hiragana gifs: https://commons.wikimedia.org/wiki/Category:Hiragana_stroke_order, static images converted online from gifs -->
					<td><img src="images/static/2.gif" onmouseover="this.src='images/gif/2.gif';" onmouseout="this.src='images/static/2.gif';" onclick="play('audio/2.mp3')"></td>
					<td><img src="images/static/3.gif" onmouseover="this.src='images/gif/3.gif';" onmouseout="this.src='images/static/3.gif';" onclick="play('audio/3.mp3')"></td>
					<td><img src="images/static/4.gif" onmouseover="this.src='images/gif/4.gif';" onmouseout="this.src='images/static/4.gif';" onclick="play('audio/4.mp3')"></td>
					<td><img src="images/static/5.gif" onmouseover="this.src='images/gif/5.gif';" onmouseout="this.src='images/static/5.gif';" onclick="play('audio/5.mp3')"></td>
					<td><img src="images/static/6.gif" onmouseover="this.src='images/gif/6.gif';" onmouseout="this.src='images/static/6.gif';" onclick="play('audio/6.mp3')"></td>
					<td><img src="images/static/7.gif" onmouseover="this.src='images/gif/7.gif';" onmouseout="this.src='images/static/7.gif';" onclick="play('audio/7.mp3')"></td>
					<td><img src="images/static/8.gif" onmouseover="this.src='images/gif/8.gif';" onmouseout="this.src='images/static/8.gif';" onclick="play('audio/8.mp3')"></td>
					<td><img src="images/static/9.gif" onmouseover="this.src='images/gif/9.gif';" onmouseout="this.src='images/static/9.gif';" onclick="play('audio/9.mp3')"></td>
					<td><img src="images/static/10.gif" onmouseover="this.src='images/gif/10.gif';" onmouseout="this.src='images/static/10.gif';" onclick="play('audio/10.mp3')"></td>
					<td><img src="images/static/11.gif" onmouseover="this.src='images/gif/11.gif';" onmouseout="this.src='images/static/11.gif';" onclick="play('audio/11.mp3')"></td>
					<td><img src="images/static/12.gif" onmouseover="this.src='images/gif/12.gif';" onmouseout="this.src='images/static/12.gif';" onclick="play('audio/12.mp3')"></td>
					<td><img src="images/static/13.gif" onmouseover="this.src='images/gif/13.gif';" onmouseout="this.src='images/static/13.gif';" onclick="play('audio/13.mp3')"></td>
					<td><img src="images/static/14.gif" onmouseover="this.src='images/gif/14.gif';" onmouseout="this.src='images/static/14.gif';" onclick="play('audio/14.mp3')"></td>
					<td><img src="images/static/15.gif" onmouseover="this.src='images/gif/15.gif';" onmouseout="this.src='images/static/15.gif';" onclick="play('audio/15.mp3')"></td>
					<td><img src="images/static/16.gif" onmouseover="this.src='images/gif/16.gif';" onmouseout="this.src='images/static/16.gif';" onclick="play('audio/16.mp3')"></td>
					<td><img src="images/static/17.gif" onmouseover="this.src='images/gif/17.gif';" onmouseout="this.src='images/static/17.gif';" onclick="play('audio/17.mp3')"></td>
				</tr>
				<tr>
					<th>a</th>
					<th>i</th>
					<th>u</th>
					<th>e</th>
					<th>o</th>
					<th>ka</th>
					<th>ki</th>
					<th>ku</th>
					<th>ke</th>
					<th>ko</th>
					<th>sa</th>
					<th>shi</th>
					<th>su</th>
					<th>se</th>
					<th>so</th>
					<th>ta</th>
					<th>chi</th>
				</tr>
				<tr>
					<td><img src="images/static/18.gif" onmouseover="this.src='images/gif/18.gif';" onmouseout="this.src='images/static/18.gif';" onclick="play('audio/18.mp3')"></td>
					<td><img src="images/static/19.gif" onmouseover="this.src='images/gif/19.gif';" onmouseout="this.src='images/static/19.gif';" onclick="play('audio/19.mp3')"></td>
					<td><img src="images/static/20.gif" onmouseover="this.src='images/gif/20.gif';" onmouseout="this.src='images/static/20.gif';" onclick="play('audio/20.mp3')"></td>
					<td><img src="images/static/21.gif" onmouseover="this.src='images/gif/21.gif';" onmouseout="this.src='images/static/21.gif';" onclick="play('audio/21.mp3')"></td>
					<td><img src="images/static/22.gif" onmouseover="this.src='images/gif/22.gif';" onmouseout="this.src='images/static/22.gif';" onclick="play('audio/22.mp3')"></td>
					<td><img src="images/static/23.gif" onmouseover="this.src='images/gif/23.gif';" onmouseout="this.src='images/static/23.gif';" onclick="play('audio/23.mp3')"></td>
					<td><img src="images/static/24.gif" onmouseover="this.src='images/gif/24.gif';" onmouseout="this.src='images/static/24.gif';" onclick="play('audio/24.mp3')"></td>
					<td><img src="images/static/25.gif" onmouseover="this.src='images/gif/25.gif';" onmouseout="this.src='images/static/25.gif';" onclick="play('audio/25.mp3')"></td>
					<td><img src="images/static/26.gif" onmouseover="this.src='images/gif/26.gif';" onmouseout="this.src='images/static/26.gif';" onclick="play('audio/26.mp3')"></td>
					<td><img src="images/static/27.gif" onmouseover="this.src='images/gif/27.gif';" onmouseout="this.src='images/static/27.gif';" onclick="play('audio/27.mp3')"></td>
					<td><img src="images/static/28.gif" onmouseover="this.src='images/gif/28.gif';" onmouseout="this.src='images/static/28.gif';" onclick="play('audio/28.mp3')"></td>
					<td><img src="images/static/29.gif" onmouseover="this.src='images/gif/29.gif';" onmouseout="this.src='images/static/29.gif';" onclick="play('audio/29.mp3')"></td>
					<td><img src="images/static/30.gif" onmouseover="this.src='images/gif/30.gif';" onmouseout="this.src='images/static/30.gif';" onclick="play('audio/30.mp3')"></td>
					<td><img src="images/static/11.gif" onmouseover="this.src='images/gif/31.gif';" onmouseout="this.src='images/static/31.gif';" onclick="play('audio/31.mp3')"></td>
					<td><img src="images/static/32.gif" onmouseover="this.src='images/gif/32.gif';" onmouseout="this.src='images/static/32.gif';" onclick="play('audio/32.mp3')"></td>
					<td><img src="images/static/33.gif" onmouseover="this.src='images/gif/33.gif';" onmouseout="this.src='images/static/33.gif';" onclick="play('audio/33.mp3')"></td>
					<td><img src="images/static/34.gif" onmouseover="this.src='images/gif/34.gif';" onmouseout="this.src='images/static/34.gif';" onclick="play('audio/34.mp3')"></td>
				</tr>
				<tr>
					<th>tsu</th>
					<th>te</th>
					<th>to</th>
					<th>na</th>
					<th>ni</th>
					<th>nu</th>
					<th>ne</th>
					<th>no</th>
					<th>ha</th>
					<th>hi</th>
					<th>fu</th>
					<th>he</th>
					<th>ho</th>
					<th>ma</th>
					<th>mi</th>
					<th>mu</th>
					<th>me</th>
				</tr>
				<tr>
					<td><img src="images/static/35.gif" onmouseover="this.src='images/gif/35.gif';" onmouseout="this.src='images/static/35.gif';" onclick="play('audio/35.mp3')"></td>
					<td><img src="images/static/36.gif" onmouseover="this.src='images/gif/36.gif';" onmouseout="this.src='images/static/36.gif';" onclick="play('audio/36.mp3')"></td>
					<td><img src="images/static/37.gif" onmouseover="this.src='images/gif/37.gif';" onmouseout="this.src='images/static/37.gif';" onclick="play('audio/37.mp3')"></td>
					<td><img src="images/static/38.gif" onmouseover="this.src='images/gif/38.gif';" onmouseout="this.src='images/static/38.gif';" onclick="play('audio/38.mp3')"></td>
					<td><img src="images/static/39.gif" onmouseover="this.src='images/gif/39.gif';" onmouseout="this.src='images/static/39.gif';" onclick="play('audio/39.mp3')"></td>
					<td><img src="images/static/40.gif" onmouseover="this.src='images/gif/40.gif';" onmouseout="this.src='images/static/40.gif';" onclick="play('audio/40.mp3')"></td>
					<td><img src="images/static/41.gif" onmouseover="this.src='images/gif/41.gif';" onmouseout="this.src='images/static/41.gif';" onclick="play('audio/41.mp3')"></td>
					<td><img src="images/static/42.gif" onmouseover="this.src='images/gif/42.gif';" onmouseout="this.src='images/static/42.gif';" onclick="play('audio/42.mp3')"></td>
					<td><img src="images/static/43.gif" onmouseover="this.src='images/gif/43.gif';" onmouseout="this.src='images/static/43.gif';" onclick="play('audio/43.mp3')"></td>
					<td><img src="images/static/44.gif" onmouseover="this.src='images/gif/44.gif';" onmouseout="this.src='images/static/44.gif';" onclick="play('audio/44.mp3')"></td>
					<td><img src="images/static/45.gif" onmouseover="this.src='images/gif/45.gif';" onmouseout="this.src='images/static/45.gif';" onclick="play('audio/45.mp3')"></td>
					<td><img src="images/static/46.gif" onmouseover="this.src='images/gif/46.gif';" onmouseout="this.src='images/static/46.gif';" onclick="play('audio/46.mp3')"></td>
				</tr>
				<tr>
					<th>mo</th>
					<th>ya</th>
					<th>yu</th>
					<th>yo</th>
					<th>ra</th>
					<th>ri</th>
					<th>ru</th>
					<th>re</th>
					<th>ro</th>
					<th>wa</th>
					<th>wo</th>
					<th>n</th>
				</tr>
			</table>
		</div>
		<div id="quizArea">
			<p>Take quizes on different sets of hiragana</p>
			<button id="clickQuiz1" class="button">Practice recognising romaji</button><button id="clickQuiz2" class="button">Practice recognising Hiragana</button><button class="button">Login</button><button id="regbtn" class="button">Register</button>
			<div id="regdiv">
				<p>Name: </p><input type="text" class="" id="name" name="">
				<p>Password: </p><input type="text" class="" id="pass" name="">
				<button id="reg" class="button">Register</button>
			</div>
			<div id="quiz1">
				<p>Choose one of four answers in the following 10 questions:</p>
				<p>ka</p>
				<form action="">
					<input type="radio" id="1q1" name="1"><img src="images/static/6.gif"><br> <!-- radio button helped by w3schools -->
					<input type="radio" id="1q2" name="1"><img src="images/static/46.gif"><br>
					<input type="radio" id="1q3" name="1"><img src="images/static/36.gif"><br>
					<input type="radio" id="1q4" name="1"><img src="images/static/45.gif">
				</form>
			
				<p>wo</p>
				<form action="">
					<input type="radio" id="1q5" name="1"><img src="images/static/3.gif"><br>
					<input type="radio" id="1q6" name="1"><img src="images/static/45.gif"><br>
					<input type="radio" id="1q7" name="1"><img src="images/static/9.gif"><br>
					<input type="radio" id="1q8" name="1"><img src="images/static/32.gif">
				</form>
				
				<p>tsu</p>
				<form action="">
					<input type="radio" id="1q9" name="1"><img src="images/static/43.gif"><br>
					<input type="radio" id="1q10" name="1"><img src="images/static/3.gif"><br>
					<input type="radio" id="1q11" name="1"><img src="images/static/18.gif"><br>
					<input type="radio" id="1q12" name="1"><img src="images/static/1.gif">
				</form>
				
				<p>ni</p>
				<form action="">
					<input type="radio" id="1q13" name="1"><img src="images/static/10.gif"><br>
					<input type="radio" id="1q14" name="1"><img src="images/static/4.gif"><br>
					<input type="radio" id="1q15" name="1"><img src="images/static/23.gif"><br>
					<input type="radio" id="1q16" name="1"><img src="images/static/22.gif">
				</form>
				
				<p>me</p>
				<form action="">
					<input type="radio" id="1q17" name="1"><img src="images/static/34.gif"><br>
					<input type="radio" id="1q18" name="1"><img src="images/static/1.gif"><br>
					<input type="radio" id="1q19" name="1"><img src="images/static/3.gif"><br>
					<input type="radio" id="1q20" name="1"><img src="images/static/5.gif">
				</form>
				
				<p>ro</p>
				<form action="">
					<input type="radio" id="1q21" name="1"><img src="images/static/46.gif"><br>
					<input type="radio" id="1q22" name="1"><img src="images/static/43.gif"><br>
					<input type="radio" id="1q23" name="1"><img src="images/static/40.gif"><br>
					<input type="radio" id="1q24" name="1"><img src="images/static/5.gif">
				</form>
				
				<p>ri</p>
				<form action="">
					<input type="radio" id="1q25" name="1"><img src="images/static/7.gif"><br>
					<input type="radio" id="1q26" name="1"><img src="images/static/1.gif"><br>
					<input type="radio" id="1q27" name="1"><img src="images/static/40.gif"><br>
					<input type="radio" id="1q28" name="1"><img src="images/static/8.gif">
				</form>
				
				<p>a</p>
				<form action="">
					<input type="radio" id="1q29" name="1"><img src="images/static/19.gif"><br>
					<input type="radio" id="1q30" name="1"><img src="images/static/20.gif"><br>
					<input type="radio" id="1q31" name="1"><img src="images/static/21.gif"><br>
					<input type="radio" id="1q32" name="1"><img src="images/static/1.gif">
				</form>
				
				<p>u</p>
				<form action="">
					<input type="radio" id="1q33" name="1"><img src="images/static/9.gif"><br>
					<input type="radio" id="1q34" name="1"><img src="images/static/3.gif"><br>
					<input type="radio" id="1q35" name="1"><img src="images/static/14.gif"><br>
					<input type="radio" id="1q36" name="1"><img src="images/static/27.gif">
				</form>
				
				<p>su</p>
				<form action="">
					<input type="radio" id="1q37" name="1"><img src="images/static/22.gif"><br>
					<input type="radio" id="1q38" name="1"><img src="images/static/14.gif"><br>
					<input type="radio" id="1q39" name="1"><img src="images/static/13.gif"><br>
					<input type="radio" id="1q40" name="1"><img src="images/static/45.gif">
				</form>
				<button onclick="submit(1)" class="button">Submit quiz to get result!</button>
			</div>
			
			<div id="quiz2">
				<p>Choose one of four answers in the following 10 questions:</p>
				<img src="images/static/45.gif"><br>
				<form action="">
					<input type="radio" id="2q1" name="1">wo<br>
					<input type="radio" id="2q2" name="1">su<br>
					<input type="radio" id="2q3" name="1">ru<br>
					<input type="radio" id="2q4" name="1">ro
				</form>
				
				<img src="images/static/3.gif"><br>
				<form action="">
					<input type="radio" id="2q5" name="1">ri<br>
					<input type="radio" id="2q6" name="1">u<br>
					<input type="radio" id="2q7" name="1">yo<br>
					<input type="radio" id="2q8" name="1">chi
				</form>
				
				<img src="images/static/17.gif"><br>
				<form action="">
					<input type="radio" id="2q9" name="1">a<br>
					<input type="radio" id="2q10" name="1">mo<br>
					<input type="radio" id="2q11" name="1">chi<br>
					<input type="radio" id="2q12" name="1">na
				</form>
				
				<img src="images/static/40.gif"><br>
				<form action="">
					<input type="radio" id="2q13" name="1">to<br>
					<input type="radio" id="2q14" name="1">e<br>
					<input type="radio" id="2q15" name="1">o<br>
					<input type="radio" id="2q16" name="1">ri
				</form>
				
				<img src="images/static/35.gif"><br>
				<form action="">
					<input type="radio" id="2q17" name="1">me<br>
					<input type="radio" id="2q18" name="1">n<br>
					<input type="radio" id="2q19" name="1">e<br>
					<input type="radio" id="2q20" name="1">ya
				</form>
				
				<img src="images/static/32.gif"><br>
				<form action="">
					<input type="radio" id="2q21" name="1">ki<br>
					<input type="radio" id="2q22" name="1">ma<br>
					<input type="radio" id="2q23" name="1">u<br>
					<input type="radio" id="2q24" name="1">so
				</form>
				
				<img src="images/static/6.gif"><br>
				<form action="">
					<input type="radio" id="2q25" name="1">o<br>
					<input type="radio" id="2q26" name="1">fu<br>
					<input type="radio" id="2q27" name="1">ka<br>
					<input type="radio" id="2q28" name="1">ni
				</form>
				
				<img src="images/static/10.gif"><br>
				<form action="">
					<input type="radio" id="2q29" name="1">te<br>
					<input type="radio" id="2q30" name="1">wo<br>
					<input type="radio" id="2q31" name="1">yu<br>
					<input type="radio" id="2q32" name="1">ko
				</form>
				
				<img src="images/static/14.gif"><br>
				<form action="">
					<input type="radio" id="2q33" name="1">se<br>
					<input type="radio" id="2q34" name="1">mu<br>
					<input type="radio" id="2q35" name="1">fu<br>
					<input type="radio" id="2q36" name="1">ro
				</form>
				
				<img src="images/static/21.gif"><br>
				<form action="">
					<input type="radio" id="2q37" name="1">o<br>
					<input type="radio" id="2q38" name="1">na<br>
					<input type="radio" id="2q39" name="1">chi<br>
					<input type="radio" id="2q40" name="1">yo
				</form>
				<button onclick="submit(2)" class="button">Submit quiz to get result!</button>
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>