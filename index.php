<!DOCTYPE html>
<html lang="da">

<head>
    <title>Sigende titel</title>
    <?php include 'metatags.php'; ?>

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/stylesUniversal.min.css" rel="stylesheet" type="text/css">
    <link href="css/stylesIndex.min.css" rel="stylesheet" type="text/css">
    <link href="css/stylesHeader.min.css" rel="stylesheet" type="text/css">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->
<?php include 'header.php'; ?>

<div class="welcome">
    <div>Velkommen tilbage,&nbsp; <h6>GardenShop</h6>!</div>
    <p>Lad os se hvordan det er gået for din forretning</p>
</div>

<main>
    <section class="analytics main-section">
        <div class="infoTop">
            <h6>Analytics</h6>
            <div>
                <i class="fas fa-sync-alt clickable"></i>
                <div class="clickable">
                    <i class="far fa-calendar"></i>
                    <p>Seneste 6 måneder</p>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
        <div class="blocksContainer">
            <div class="block">
                <div>
                    <p>Total salg</p>
                    <h6>24.526 DKK</h6>
                </div>
                <canvas id="chart1"></canvas>
            </div>
            <div class="block">
                <div>
                    <p>Total profit</p>
                    <h6>7.850 DKK</h6>
                </div>
                <canvas id="chart2"></canvas>
            </div>
            <div class="block">
                <div>
                    <p>Total besøgende</p>
                    <h6>454 pers.</h6>
                </div>
                <canvas id="chart3"></canvas>
            </div>
            <div class="block clickable">
                <div></div>
                <div></div>
            </div>

        </div>

        <p class="showMore clickable">Vis alle analytics</p>
    </section>

    <section class="sales main-section">
        <div class="infoTop">
            <h6>Seneste salg</h6>
            <div>
                <i class="fas fa-sync-alt clickable"></i>
                <div class="clickable">
                    <i class="far fa-calendar"></i>
                    <p>Seneste 5 emner</p>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>

        <div class="recentSalesContainer">
            <div class="infoLabels">
                <p>Ordrenummer:</p>
                <p>Bestillingsdato:</p>
                <p>Navn:</p>
                <p>Beløb:</p>
            </div>
            <div class="recentSale">
                <div>Ordrenummer:&nbsp;<p>GDS0000077</p></div>
                <div>Bestillingsdato:&nbsp;<p>01/09/2020 13:32</p></div>
                <div>Navn:&nbsp;<p>Tobias Larsen</p></div>
                <div class="price">Beløb:<p>399.00 DKK</p></div>

                <p>GDS0000077</p>
                <p>01/09/2020 13:32</p>
                <p>Tobias Larsen</p>
                <p>399.00 DKK</p>
            </div>
            <div class="recentSale">
                <div>Ordrenummer:&nbsp;<p>GDS0000077</p></div>
                <div>Bestillingsdato:&nbsp;<p>01/09/2020 13:32</p></div>
                <div>Navn:&nbsp;<p>Tobias Larsen</p></div>
                <div class="price">Beløb:<p>399.00 DKK</p></div>

                <p>GDS0000077</p>
                <p>01/09/2020 13:32</p>
                <p>Tobias Larsen</p>
                <p>399.00 DKK</p>
            </div>
            <div class="recentSale">
                <div>Ordrenummer:&nbsp;<p>GDS0000077</p></div>
                <div>Bestillingsdato:&nbsp;<p>01/09/2020 13:32</p></div>
                <div>Navn:&nbsp;<p>Tobias Larsen</p></div>
                <div class="price">Beløb:<p>399.00 DKK</p></div>

                <p>GDS0000077</p>
                <p>01/09/2020 13:32</p>
                <p>Tobias Larsen</p>
                <p>399.00 DKK</p>
            </div>
            <div class="recentSale">
                <div>Ordrenummer:&nbsp;<p>GDS0000077</p></div>
                <div>Bestillingsdato:&nbsp;<p>01/09/2020 13:32</p></div>
                <div>Navn:&nbsp;<p>Tobias Larsen</p></div>
                <div class="price">Beløb:<p>399.00 DKK</p></div>

                <p>GDS0000077</p>
                <p>01/09/2020 13:32</p>
                <p>Tobias Larsen</p>
                <p>399.00 DKK</p>
            </div>
            <div class="recentSale">
                <div>Ordrenummer:&nbsp;<p>GDS0000077</p></div>
                <div>Bestillingsdato:&nbsp;<p>01/09/2020 13:32</p></div>
                <div>Navn:&nbsp;<p>Tobias Larsen</p></div>
                <div class="price">Beløb:<p>399.00 DKK</p></div>

                <p>GDS0000077</p>
                <p>01/09/2020 13:32</p>
                <p>Tobias Larsen</p>
                <p>399.00 DKK</p>
            </div>
        </div>

        <p class="showMore clickable">Vis alle analytics</p>
    </section>
</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
<script>

    $(function () {
        let win = $(this); //this = window
        if (win.width() >= 568) {
            let blockWidth = $(".analytics .block").width() + 'px';
            $(".analytics .block").height(blockWidth);

        }

        $(window).on('resize', function(){
            if (win.width() >= 568) {
                let blockWidth = $(".analytics .block").width() + 'px';
                $(".analytics .block").height(blockWidth);
            }
        });

        //Global Options
        Chart.defaults.global.defaultFontFamily = 'Arial';
        Chart.defaults.global.elements.point = 'none';

        let chart1 = document.getElementById('chart1').getContext('2d');
        let lineChart1 = new Chart(chart1, {
           type:'line',
            data:{
               labels:['', '', '', '', ''],
               datasets:[{
                   label: 'totalSales',
                   data: [
                       60, 160, 100, 140, 110

                   ],
                   backgroundColor:'#B9FEBF',
                   borderColor:'#2BFC3C',
                   borderWidth: '2',
                   borderCapStyle: '0',
               }]
            },
            options:{
                legend:{
                    display: false
                },
                scales: {
                    yAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        },
                        ticks: {
                            beginAtZero: true,
                            max: 170
                        }
                    }],
                    xAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]

                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        let chart2 = document.getElementById('chart2').getContext('2d');
        let lineChart2 = new Chart(chart2, {
            type:'line',
            data:{
                labels:['', '', '', '', ''],
                datasets:[{
                    label: 'totalSales',
                    data: [
                        100, 140, 108, 88, 95
                    ],
                    backgroundColor:'#B9FEBF',
                    borderColor:'#2BFC3C',
                    borderWidth: '2',
                    borderCapStyle: '0',
                }]
            },
            options:{
                legend:{
                    display: false
                },
                scales: {
                    yAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        },
                        ticks: {
                            beginAtZero: true,
                            max: 150
                        }
                    }],
                    xAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]

                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        let chart3 = document.getElementById('chart3').getContext('2d');
        let lineChart3 = new Chart(chart3, {
            type:'line',
            data:{
                labels:['', '', '', '', ''],
                datasets:[{
                    label: 'totalSales',
                    data: [
                        80, 64, 72, 90, 64
                    ],
                    backgroundColor:'#B9FEBF',
                    borderColor:'#2BFC3C',
                    borderWidth: '2',
                    borderCapStyle: '0',
                }]
            },
            options:{
                legend:{
                    display: false
                },
                scales: {
                    yAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        },
                        ticks: {
                            beginAtZero: true,
                            max: 100
                        }
                    }],
                    xAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]

                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });

</script>
</body>
</html>