<script>
window.onload = function() {
    var arrayi = <?php echo json_encode(Session::get('test')); ?>; 
    //var test = Object.assign({},arrayi ) ;
    //console.log(test);
                // arrayi.forEach(element => {
                //     console.log(element)
                // });
var options = {
	title: {
		text: "Detail Task & status"
	},
	data: [{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			dataPoints: arrayi
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
