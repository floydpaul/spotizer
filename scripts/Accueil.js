let precedent = document.getElementById('precedent');
let suivant = document.getElementById('suivant');
let contener = document.getElementById('contener');
let test = document.querySelector('.flex.cards')
let content =0;
let cards = document.getElementsByClassName('card');
let cardsLength = cards.length;
console.log(cardsLength);
let division = cardsLength/4;
console.log(division);

suivant.addEventListener('click',()=>{
	
	let position = 0;
	// content+=960;
	
	// if(content>=(200*cardsLength)){
	// 	content=0;
	// }
console.log(position);
	if(division>position){
		content+=960;
		position++;
		
	}

	else {

		content=960;
	}
	
	contener.style.right=content+'px';
	console.log(content);
})

precedent.addEventListener('click',()=>{
	
	content-=960;
	
	// if(content<=-(200*cardsLength)){
	// 	content=0;
	// }

	if(division<0){
		content=0;
	}	
	
	contener.style.right=content+'px';
	
})

	



