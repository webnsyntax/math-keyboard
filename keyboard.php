<html>
<head>
<link rel="stylesheet" href="mathquill/mathquill.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="mathquill/mathquill.js"></script>
<style>
.mstyle{
	width:50px;
	height:25px;
	border: 1px solid red;
}
</style>
</head>
<body style="height: auto">
<h2>Sample Math Keyboard using MathQuill</h2><br/>
<p>Type math here: <span id="some_id1" name="ures1" onclick="mfield('some_id1');" onselect="mfield('some_id1');" onkeyup="mclick('h1');" class="mathquill-embedded-latex"><input type="text"></span></p>
<p>Type math here: <span id="some_id2" name="ures2" onclick="mfield('some_id2');" onselect="mfield('some_id2');" onkeyup="mclick('h2');" class="mathquill-editor"><input type="text"></span></p>

<button onclick="fun('\\sqrt');">square root</button>
<button onclick="fun('^');">power</button>
<button onclick="fun('\\frac');">fraction</button>
<button onclick="fun('\\pm');">+/-</button>
<button onclick="fun('\\nthroot');">nth root</button>
<button onclick="fun('_');">sub</button>
<button onclick="fun('\integral');">subsup</button>
<button onclick="fun('\\text');">text</button>
<script>
var MQ = MathQuill.getInterface(2);

function mfield(mid){

	var htmlElement = document.getElementById(mid);
	var config = {
		spaceBehavesLikeTab: true,
		restrictMismatchedBrackets: true
	};
	window.mathField = MQ.MathField(htmlElement, config);
	mathField.focus();
}
function mclick(h){
	var m = mathField.latex();
	$("#"+h).val(m);
}
function fun(cmdtext){
	mathField.cmd(cmdtext).focus();
}
for(i=0; i<5; i++){
	var problemSpan = document.getElementById('problem'+i);
  MQ.StaticMath(problemSpan);
}

</script>           
</body>
</html>