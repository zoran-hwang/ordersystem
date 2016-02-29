window.onload=function(){
	var oPath=document.getElementsByTagName('path');
	for(var i=0;i<oPath.length;i++){
		oPath[i].onmouseover=function(){
			this.style.opacity=0.6;
			this.opacity=0.6;
		};
		oPath[i].onmouseout=function(){
			this.style.opacity=1;
			this.opacity=1;
		};				
	}
};	