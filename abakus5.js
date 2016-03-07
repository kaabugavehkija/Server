window.onload = function(){
	var ketas = document.querySelectorAll(".bead");
	for(var i=0; i< ketas.length; i++){	
		ketas[i].onclick = function(){
			var k = getComputedStyle(this,null).getPropertyValue("float");
			if(k=="right"){
				this.style.cssFloat="left";
			}else if(k=="left"){
				this.style.cssFloat="right"}
				
			}
		}
	}