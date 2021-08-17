const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-link');
	const navLinks=document.querySelectorAll('.nav-link li')
	

	

	burger.addEventListener('click',()=>{
			//toggle nav
		nav.classList.toggle('nav-active');
		navLinks.forEach((link,index)=>{
    if (link.style.animation){
    	link.style.animation='';
    }else {
    	link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;

	
    }
   });
		

		burger.classList.toggle('toggle');
	
	});
	//animate nav

	//burger anime

	
}
    



navSlide();
