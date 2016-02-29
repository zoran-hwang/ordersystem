window.onload=function(){
	var aDiv=document.getElementById('automatic');
	var aPre=aDiv.getElementsByClassName('prev')[0];
	var aNext=aDiv.getElementsByClassName('next')[0];
	
	var aLi=aDiv.getElementsByTagName('li');

	// var aImg=aLi[i].getElementsByTagName('img')[0];
	// var aImg=document.getElementsByClassName('imgs');

	var arr=[];
	for(var i=0;i<aLi.length;i++){
		var aImg=aLi[i].getElementsByTagName('img')[0];
		arr.push([parseInt(getStyle(aLi[i],'left')),parseInt(getStyle(aLi[i],'top')),getStyle(aLi[i],'opacity'),getStyle(aLi[i],'z-index'),aImg.width]);			
	}
	aPre.onclick=function(){
		arr.push(arr[0]);
		arr.shift();
		for(var i=0;i<aLi.length;i++){
			var oli=this.parentNode.getElementsByTagName('li')[i];
			var aImg=oli.getElementsByTagName('img')[0];
			oli.style.left=arr[i][0]+'px';
			oli.style.top=arr[i][1]+'px';
			oli.style.opacity=arr[i][2];
			oli.style.zIndex=arr[i][3];
			aImg.style.width=arr[i][4]+'px';
		}
	};
	aNext.onclick=function(){
		arr.unshift(arr[arr.length-1]);
		arr.pop();
		for(var i=0;i<aLi.length;i++){
			var oli=this.parentNode.getElementsByTagName('li')[i];
			var aImg=oli.getElementsByTagName('img')[0];
			oli.style.left=arr[i][0]+'px';
			oli.style.top=arr[i][1]+'px';
			oli.style.opacity=arr[i][2];
			oli.style.zIndex=arr[i][3];
			aImg.style.width=arr[i][4]+'px';
		}
	};

	// for(var i=0;i<aLi.length;i++){
	// 	var aImg=aLi[i].getElementsByTagName('img')[0];
	// 	aImg.onclick=function(){
	// 		if(this==aLi[0].getElementsByTagName('img')[0]){
	// 			arr.unshift(arr[3],arr[4]);
	// 			alert(arr.length);
	// 			arr.pop();
	// 			arr.pop();
	// 			alert(arr[0]);
	// 			alert(arr.length);
	// 			for(var i=0;i<aLi.length;i++){
	// 				var cli=this.parentNode.parentNode.parentNode.getElementsByTagName('li')[i];
	// 				var cImg=cli.getElementsByTagName('img')[0];
	// 				cli.style.left=arr[i][0]+'px';
	// 				cli.style.top=arr[i][1]+'px';
	// 				cli.style.opacity=arr[i][2];
	// 				cli.style.zIndex=arr[i][3];
	// 				cImg.style.width=arr[i][4]+'px';					
	// 			}
	// 		}			
	// 	};
	// }

	function getStyle(obj,attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}
		else{
			return getComputedStyle(obj,false)[attr];
		}
	}
	aDiv.onmouseover=function(){
		aPre.style.opacity=1;
		aNext.style.opacity=1;
	};	
	aDiv.onmouseout=function(){
		aPre.style.opacity=0;
		aNext.style.opacity=0;
	};	
};
