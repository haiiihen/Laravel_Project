<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('klorofil/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('klorofil/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('klorofil/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('klorofil/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('klorofil/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('klorofil/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- TOASTR  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<!-- DATA TABLES  -->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css" />

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('klorofil/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('klorofil/assets/img/favicon.png')}}">
	<style>
		.ck-editor__editable {
			min-height: 300px;
		}
	</style>
	@yield('header')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('klorofil/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('klorofil/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('klorofil/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('klorofil/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('klorofil/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('klorofil/assets/scripts/klorofil-common.js')}}"></script>
	<script src="path_to_your_js/footable.sort.js" type="text/javascript"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="{{asset('ckeditor.js')}}"></script>
	<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
	<script>
		@if(Session::has('sukses'))
		toastr.success("{{Session::get('sukses')}}", "Sukses")
		@endif
	</script>

	@yield('footer')

	<script>
		$(function() {
			var data, options;

			// headline charts
			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [
					[23, 29, 24, 40, 25, 24, 35],
					[14, 25, 18, 34, 29, 38, 44],
				]
			};

			options = {
				height: 300,
				showArea: true,
				showLine: false,
				showPoint: false,
				fullWidth: true,
				axisX: {
					showGrid: false
				},
				lineSmooth: false,
			};

			new Chartist.Line('#headline-chart', data, options);


			// visits trend charts
			data = {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				series: [{
					name: 'series-real',
					data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
				}, {
					name: 'series-projection',
					data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
				}]
			};

			options = {
				fullWidth: true,
				lineSmooth: false,
				height: "270px",
				low: 0,
				high: 'auto',
				series: {
					'series-projection': {
						showArea: true,
						showPoint: false,
						showLine: false
					},
				},
				axisX: {
					showGrid: false,

				},
				axisY: {
					showGrid: false,
					onlyInteger: true,
					offset: 0,
				},
				chartPadding: {
					left: 20,
					right: 20
				}
			};

			new Chartist.Line('#visits-trends-chart', data, options);


			// visits chart
			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [
					[6384, 6342, 5437, 2764, 3958, 5068, 7654]
				]
			};

			options = {
				height: 300,
				axisX: {
					showGrid: false
				},
			};

			new Chartist.Bar('#visits-chart', data, options);


			// real-time pie chart
			var sysLoad = $('#system-load').easyPieChart({
				size: 130,
				barColor: function(percent) {
					return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
				},
				trackColor: 'rgba(245, 245, 245, 0.8)',
				scaleColor: false,
				lineWidth: 5,
				lineCap: "square",
				animate: 800
			});

			var updateInterval = 3000; // in milliseconds

			setInterval(function() {
				var randomVal;
				randomVal = getRandomInt(0, 100);

				sysLoad.data('easyPieChart').update(randomVal);
				sysLoad.find('.percent').text(randomVal);
			}, updateInterval);

			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

		});
	</script>
</body>

</html>