<!DOCTYPE html>
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Ion.RangeSlider - Demo Page</title>
    
   <!-- <link rel="stylesheet" href="http://ionden.com/a/plugins/static/bem/style.min.css" /> 
    <link rel="stylesheet" href="http://ionden.com/a/plugins/ion.rangeSlider/static/css/demo_rangeslider.css" />
	-->
    <link rel="stylesheet" href="http://ionden.com/a/plugins/ion.rangeSlider/static/css/ion.rangeSlider.css" />
    
    <link rel="stylesheet" href="http://ionden.com/a/plugins/ion.rangeSlider/static/css/skin1.css" id="skinCss" />

    <!-- All JS -->
    <script src="http://ionden.com/a/plugins/static/js/vendor/modernizr.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script src="http://ionden.com/a/plugins/static/js/vendor/ba-linkify.min.js"></script>
    <script src="http://ionden.com/a/plugins/static/js/engine.js"></script>

    <!-- Plugin JS -->
    <script src="http://ionden.com/a/plugins/ion.rangeSlider/static/js/moment-with-locales.min.js"></script>
    <script src="http://ionden.com/a/plugins/ion.rangeSlider/static/js/ion-rangeSlider/ion.rangeSlider.js"></script>
    <script src="http://ionden.com/a/plugins/ion.rangeSlider/static/js/local.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="wrapper__line"></div>

    


    <div class="wrapper__flex">

        <div class="cols type_table">

            

            <div class="cols__cell">

                <div class="panel">
                    <div class="panel__layout">

                            

                        <div class="demo-big">
                            
                            <div class="demo-big__example">
                                <div class="demo-big__note">Set type to double and specify range, also showing grid and adding prefix "$"</div>

                                <input id="range_03" />

                                <script>
                                    $(document).ready(function () {
                                        $("#range_03").ionRangeSlider({
                                            type: "double",
                                            grid: true,
                                            min: 0,
                                            max: 1000,
                                            from: 200,
                                            to: 800,
                                            prefix: "$",
                                            
                                            onFinish: function (data) {
                                            	
										        console.log(data['from']);
										        console.log(data['to']);
										    }
                                        });
                                    });
                                </script>
                            </div>
                        </div>

 
</body>
</html>
