
<html style='max-width: 800px;'>
<head>
<script type="text/javascript">
  document.onkeydown = KeyCode;
  x= 300;
  y= 200;

function KeyCode(){
	document.Mario.style.left= x;
	if(document.all){
		kcode = event.keyCode;
	}else if(document.getElementById){
        kcode = (event.keyCode)? event.keyCode: event.charCode;
	}else if(document.layers){
		kcode = event.which;
	}

	var src = document.Mario.src;

	switch(kcode){
		case 0x25:
		// 「←」キー
			if (x>1 && x!=0){
              	x-= 2;
				if(src.match('imgs/mario_4.png')){
					document.Mario.src = 'imgs/mario_5.png';
				}else if(src.match('imgs/mario_5.png')){
					document.Mario.src = 'imgs/mario_6.png';
				}else{
					document.Mario.src = 'imgs/mario_4.png';
				}
			}
		break;
		case 0x27:
    	// 「→」キー
			if(x<600){
				x+= 2;
				if(src.match('imgs/mario_1.png')){
					document.Mario.src = 'imgs/mario_2.png';
				}else if(src.match('imgs/mario_2.png')){
					document.Mario.src = 'imgs/mario_3.png';
				}else{
					document.Mario.src = 'imgs/mario_1.png';
				}
			}
		break;
	}
}
//   function moveImage(){
//     document.Mario.style.left= x;
//   }
</script>
</head>
<!-- <body bgcolor="#f4f8ff" onLoad="setInterval('moveImage()',25)"> -->
<body bgcolor="#f4f8ff">

<h2>TEST2 ANIMATION</h2>
<img src="imgs/mario_1.png" name="Mario" id='Mario' style="position:absolute;left:300px;top:200px;">
</body>
</html>
