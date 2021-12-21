// MODAL LOGIN
var btn = document.querySelectorAll("#btnModal");
var form = document.querySelector(".login");

for(let i = 0; i <= btn.length; i++){

	btn[i].addEventListener('click',function(){
		form.classList.toggle("active");
	});

}