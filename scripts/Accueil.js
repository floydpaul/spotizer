let precedent = document.getElementById('precedent');
let suivant = document.getElementById('suivant');
let contener = document.getElementById('contener');
let test = document.querySelector('.flex.cards')
let cinq = 0;
let cards = document.getElementsByClassName('card');
let cardsLength = cards.length;
console.log(cardsLength);

suivant.addEventListener('click',()=>{
	if(cinq>=(130*cardsLength)){
		cinq=0;
		contener.style.right=cinq+'px';
	}

	else {
	
	cinq+=1000;
	contener.style.right=cinq+'px';
	console.log(cinq);
	}

	
})

precedent.addEventListener('click',()=>{
	if(cinq<=-(130*cardsLength)){
		cinq=0;
		contener.style.right=cinq+'px';
	}

	else {
	
	cinq-=1000;
	contener.style.right=cinq+'px';
	}
console.log(cinq);
	
})

	



