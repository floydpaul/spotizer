let precedent = document.getElementById('precedent');
let suivant = document.getElementById('suivant');
let contener = document.getElementById('contener');
let test = document.querySelector('.flex.cards')
let content =0;
let cards = document.getElementsByClassName('card');
let cardsLength = cards.length;
console.log(cardsLength);
console.log(cardsLength*200);

suivant.addEventListener('click',()=>{
	
	content+=960;
	
	if(content>=(200*cardsLength)){
		content=0;
	}
	
	contener.style.right=content+'px';
	console.log(content);
})

precedent.addEventListener('click',()=>{
	
	content-=960;
	
	if(content<=-(200*cardsLength)){
		content=0;
	}
	
	contener.style.right=content+'px';
	
})

	



