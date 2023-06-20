let precedent = document.getElementById('precedent');
let suivant = document.getElementById('suivant');
let contener = document.getElementById('contener');
let test = document.querySelector('.flex.cards')
let content =0;
let cards = document.getElementsByClassName('card');
let cardsLength = cards.length;
let division = cardsLength/5;
let position = 1;

suivant.addEventListener('click',()=>{
	
	if(division>position){
		content+=1200;
		++position;
		console.log(position);
	}

	else {
		content=0;
		position=1;
	}
	
	contener.style.right=content+'px';
	
});

precedent.addEventListener('click',()=>{
	
	
	if(position>1){
		content-=1200;
		--position;
		console.log(position);
	}

	else {
		content=0;
		position=1;
	}	
	
	contener.style.right=content+'px';
	
});

	



