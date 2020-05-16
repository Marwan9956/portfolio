$(document).ready(function(){
    
    $('.goProject').on('click',function(e){
        e.preventDefault();
        document.querySelector('#projects').scrollIntoView({ 
            behavior: 'smooth' 
        });
    });
    
	
});



