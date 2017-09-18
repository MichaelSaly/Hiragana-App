function play(name) {
	var audio = new Audio(name);
	audio.play();
}

function genRandomId(set) {
	switch(set) {
		case 1:
			return Math.floor(Math.random() * (46 - 1 + 1)) + 1; //http://stackoverflow.com/questions/1527803/generating-random-whole-numbers-in-javascript-in-a-specific-range
			break;
		case 2:
			return Math.floor(Math.random() * (5 - 1 + 1)) + 1;
			break;
		case 3:
			return Math.floor(Math.random() * (15 - 6 + 1)) + 6;
			break;
		case 4:
			return Math.floor(Math.random() * (25 - 16 + 1)) + 16;
			break;
		case 5:
			return Math.floor(Math.random() * (35 - 26 + 1)) + 26;
			break;
		case 6:
			return Math.floor(Math.random() * (44 - 36 + 1)) + 36;
			break;
		default:
			break;
	}
}

function submit(quiz) {
	switch(quiz) {
		case 1:
			var total = 0;
			if(document.getElementById('1q1').checked) total++; //http://stackoverflow.com/questions/1423777/how-can-i-check-whether-a-radio-button-is-selected-with-javascript
			if(document.getElementById('1q6').checked) total++;
			if(document.getElementById('1q11').checked) total++;
			if(document.getElementById('1q16').checked) total++;
			if(document.getElementById('1q17').checked) total++;
			if(document.getElementById('1q22').checked) total++;
			if(document.getElementById('1q27').checked) total++;
			if(document.getElementById('1q32').checked) total++;
			if(document.getElementById('1q33').checked) total++;
			if(document.getElementById('1q38').checked) total++;
			alert(total/10*100 + "%");
			break;
			
		case 2:
			var total = 0;
			if(document.getElementById('2q1').checked) total++;
			if(document.getElementById('2q6').checked) total++;
			if(document.getElementById('2q11').checked) total++;
			if(document.getElementById('2q16').checked) total++;
			if(document.getElementById('2q17').checked) total++;
			if(document.getElementById('2q22').checked) total++;
			if(document.getElementById('2q27').checked) total++;
			if(document.getElementById('2q32').checked) total++;
			if(document.getElementById('2q33').checked) total++;
			if(document.getElementById('2q38').checked) total++;
			alert(total/10*100 + "%");
			break;
			
		default:
			alert("error");
			break;
	}
}