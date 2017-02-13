class Controller{
	constructor(){
		this.arrayTitle=['Game Cards','Game Tank','Air'];
		this.arrayDesc=['Juego de carro de carrera','Juego de tanques de guerra','juego de naves'];
		this.arrayLink=['https://reynaldo-cavero-rosales.github.io/juego-carrito/','#','#'];
		this.blag=false;
		this.cargarCar(1);
		this.search=document.getElementById('searchIco');
		this.string="";
		//this.canvas=new Canvas(50,50);
		self=this;
		this.search.addEventListener('click',function(e) {

			self.cargarData();
			self.findData();

			});
		this.myarray=[];
		this.arrayStore=[];
		$(".button-collapse").sideNav();
	}
	cargarData(){
		var mystring=document.getElementById('search');
		mystring = mystring.value;
		this.myarray = mystring.split( " " );
		this.string=mystring;
		//console.log(this.myarray);
		if (mystring!=='') {
			for (var i = 0; i < this.myarray.length; i++) {
				console.log( "\n" + this.myarray[i]);
			}
		}


	}
	cargarCar(num){
		var dos=document.getElementById('row');

		for (var i = 0; i < num ; i++) {
			dos.innerHTML += "<div  id='m"+i+"' class='col s12 m6 l3'>"+
				"<div class='card silver'>"+
            	"<div  class='card-image'>"+
            	"<img src='images/"+i+".png'>"+
              	"<span class='card-title yellow-text'>"+this.arrayTitle[i]+"</span>"+
            	"</div>"+
            	"<div class='card-content'>"+
              	"<p>"+this.arrayDesc[i]+"</p>"+
            	"</div>"+
           		" <div class='card-action'>"+
              	"<a id='"+i+"' href='"+this.arrayLink[i]+"' class='datos red-text' data-link"+i+"='"+this.arrayTitle[i]+"'><i class='material-icons'>play_arrow</i> Jugar</a>"+
            	"</div></div>";
		}
	}

	findData(){

		if (this.string === "") {
			alert('inserta datos')
		}else{
			for (var i = 0; i < this.myarray.length; i++) {
			for (var j = 0; j < 3 ; j++) {
			var xx=document.getElementById(j);
			var atribute=xx.getAttribute('data-link'+j);
			//console.log(atribute);
			var place=atribute.indexOf(this.myarray[i]);
			//console.log(place);
					if (place !== -1) {
					//window.location='./lista.html';
					this.arrayStore.push(j);
					this.blag=true;
					}
				

				}

			}
		}
		for (var i = 0; i < this.arrayStore.length; i++) {
			console.log(this.arrayStore[i]);
			//this.cargarData(0);
			var ccc=document.getElementById('m'+this.arrayStore[i]);
			var p=ccc.parentNode;
			p.removeChild(ccc);


		}
		
		if (!this.blag) {

			console.log('no encontrado')
		}
		this.borrarArray();

	}
	borrarArray(){
		for (var i = 0,len=this.myarray.length; i < len; i++) {
			this.myarray.splice(i,1);
			len--
			i--
		}

		for (var i = 0,len2=this.arrayStore.length; i < len2; i++) {
			this.arrayStore.splice(i,1);
			len2--
			i--
		}


	}
}

/*
localstore
https://www.youtube.com/watch?v=yzpxUB126YE
javascript
http://javascript.atwebpages.com/tema5/pagina5_3.html

		for (var i = 0; i < this.myarray.length; i++) {
			for (var j = 0; j < 3 ; j++) {
			var xx=document.getElementById(j);
			var atribute=xx.getAttribute('data-link'+j);
			console.log(atribute);
			var place=atribute.indexOf(this.myarray[i]);

					if (place !== -1) {
					console.log('si esta');
					this.blag=true;
					}
				

			}
		}
		if (!this.blag) {
			console.log('no encontrado')
		}
		//this.borrarArray();
*/