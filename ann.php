<?
	mysql_connect('localhost','root','root');
	mysql_select_db('annotate');
	$data = $_GET['st'];

		$annstore = mysql_query("INSERT INTO annotate values ('st')");
	if(annstore)
	{
		$status = 'success';
		$message = 'Saved';
	}
	else
	{
		$status = 'failed';
		$message = 'Not Saved';
	}

	$data = array (
		'status' => $status
		'message'=> $message

		);

	echo json_encode($data);

?>

<html>
</head>
<script src = "jquery-2.0.3.js"></script>
<script type = "text/javascript">
var getSelected = function()
{
	var t = '';
	if(window.getSelection)
	{
		t = window.getSelection();
    s = window.getSelection().toString().length;
    //alert(s);
    element = window.getSelection().anchorNode.parentNode;
	  //alert(element);

  }
	
	else if(window.selection)
	{
		t=window.selection.createRange();

		
	}
	return [t,s,element];


  
}


$(document).ready(function(){
	
	$(document).bind("mouseup",mouseup);

	$(document).bind("mousedown",mousedown);
   
});


var mouseup=function(){
		
		
		//$('div#pop-up').show();


		var st = getSelected();
		 //alert(st[2]);
     var parentGuest = st[2];
		st[2].appendChild = st[0];
    var seldiv = document.createElement('div');
    seldiv.id = 'pop-up';
    seldiv.innerHTML = st[0];
    parentGuest.parentNode.insertBefore(seldiv, parentGuest);
    document.getElementById('pop-up').style.display='block';
   innerHTML=st;



   var annData = st.serialize();
   formMethod = "GET"

   $.ajax({
   	  data :annData
   	  success:function(data){

		var responseData = jQuery.parseJSON(data);
		alert(responseData);
		alert("Success");   	  	
   	  }


   })

}
</script>
<body>
<div id = "content">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan malesuada nibh at facilisis. Aliquam consectetur vulputate ante, in tristique justo aliquet non. Aliquam ac pulvinar ante. Nam est elit, lobortis a magna ac, condimentum laoreet felis. Fusce ac varius sapien. Curabitur a rutrum sem. Integer condimentum auctor elit, in egestas tortor volutpat vitae.
</p>
<p>
Aliquam tristique dolor sit amet sapien eleifend, at malesuada augue ultricies. Mauris dapibus felis quis erat vulputate, ac dictum velit accumsan. Praesent mauris lorem, cursus a scelerisque id, congue eu eros. Fusce molestie pretium pulvinar. 
<ul>
<li>Quisque fringilla felis eget leo consectetur</li>
<li> luctus convallis elit porta. Class aptent taciti</li>
<li> sociosqu ad litora torquent per conubia nostra, per</li>
<li> inceptos himenaeos. Nam ornare luctus tortor, non ullamcorper ligula</li>
</ul>


 consequat sed. Ut varius eget nulla id ullamcorper. Nam ullamcorper lorem non ligula lacinia porttitor.
</p>
<p>
Ut mauris ante, imperdiet eu nibh in, pulvinar viverra lorem. Nunc ultrices nisl vitae aliquam faucibus. Donec feugiat sollicitudin tortor non ultrices. Integer eget ante sem. Donec sodales, leo pellentesque pulvinar iaculis, felis lacus pellentesque nunc, a dignissim lacus neque nec neque. Aenean bibendum orci a orci condimentum, eget aliquam lorem mollis. Nam viverra eu velit eu commodo. Fusce sit amet convallis mauris. Vestibulum nec nisl massa. Quisque varius urna quis neque volutpat, ut suscipit dui vulputate. Nullam magna nibh, scelerisque quis pulvinar ac, auctor at mauris. Phasellus quis tempor dolor. Etiam id tortor auctor, molestie nisi eu, feugiat nisi. Phasellus in purus lacus. Duis vel felis a lorem hendrerit cursus. Phasellus posuere, justo sed scelerisque luctus, dolor turpis lobortis felis, eget auctor lacus massa a sem.
</p>

<p>
Quisque volutpat, tortor vel aliquet malesuada, dui sem sollicitudin mauris, eu blandit est dui nec ante. Nam ac facilisis diam. Duis cursus elementum justo a fringilla. Aenean at nisi vel erat consequat pharetra. Ut dapibus odio nunc. Curabitur adipiscing dui lorem, id pulvinar neque bibendum a. In imperdiet pellentesque lacus non mattis.
</p>
<p>
Suspendisse egestas ornare ante nec faucibus. Nam posuere eros sit amet lacus egestas accumsan. Donec placerat nulla ante, a ultrices massa gravida ut. Proin dapibus ante enim, ac feugiat lorem tincidunt nec. Sed eget erat ornare, varius nisl a, congue libero. Nulla ac tristique felis. Mauris porttitor mattis massa sit amet scelerisque. Praesent id eleifend neque. Donec turpis nunc, pellentesque eget condimentum ut, semper luctus tortor. Morbi a justo dignissim, scelerisque orci ut, aliquet sem.
</p>



</body>

</div>
</html>



