	let sliderId = document.getElementById('slider');
	let btnNext = document.getElementById('btn-next');
	let btnPrevious = document.getElementById('btn-prev');
	let slideIndex=0;
	let animationRunning=false;
	let titre = document.querySelectorAll('h2');


	
	function slideRight(){

		animationRunning=true;

			if(slideIndex===0){
				sliderId.style.left='-100%';
				slideIndex++;
				titre[0].classList.add('animation');
				
			}

			else if(slideIndex===1){
				sliderId.style.left='-200%';
				slideIndex++;
				titre[1].classList.add('animation');
				
			}

			else if(slideIndex===2){
				sliderId.style.left='0%';
				slideIndex=0;
				titre[2].classList.add('animation');
				
			}

			setTimeout(()=>{

				animationRunning=false;
			},1000);
	}


		function slideLeft(){

		animationRunning=true;

			if(slideIndex===0){
				sliderId.style.left='-200%';
				slideIndex=2;
				
			}

			else if(slideIndex===1){
				sliderId.style.left='0%';
				slideIndex--;
				
			}

			else if(slideIndex===2){
				sliderId.style.left='-100%';
				slideIndex--;
				
			}

			setTimeout(()=>{

				animationRunning=false;
			},1000);
	}
	

				
		  			btnNext.addEventListener('click',()=>{

		  				

		  				if(animationRunning===true){
		  					return;
		  				}

		  				slideRight();	
		  				console.log(slideIndex);  				
		  			});	
				



					btnPrevious.addEventListener('click',()=>{

		  				if(animationRunning===true){
		  					return;
		  				}

		  				slideLeft();	 
		  				console.log(slideIndex); 				
		  			});	
	
	



