let heures=document.querySelectorAll('.cell');
let value;
heures.forEach(heure =>{
	heure.addEventListener("click",function(e){
        console.log(this);
	})
})
console.log('hello word!');