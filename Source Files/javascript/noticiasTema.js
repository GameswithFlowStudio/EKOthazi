function colorNocturno(){
	var fichas = document.getElementsByName('ficha');
	var color = black;
	for (var i = 0; i < fichas.length; i++){
		fichas[i].style.background-color = color;
	}
}