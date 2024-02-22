้้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compare</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <div class="container" style="margin-top: 5%">
        <b style="font-size: 24px">COMPARE SMARTPHONE</b>

        <div class="row col-12 mt-3 mb-4">
            <div class="col-6 ">
                <div class="card hov-primary border-0" style="background-color: rgb(231, 231, 231) ;color:rgb(32, 32, 32); border-radius: 0;">
                    <div class="card-body ">
                        <h6 class="card-subtitle mb-2 text-body-secondary">COMPARE WITH</h6>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 " style="border-radius: 0;" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn " type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card hov-primary border-0" style="background-color: rgb(231, 231, 231) ;color:rgb(32, 32, 32); border-radius: 0;">
                    <div class="card-body ">
                        <h6 class="card-subtitle mb-2 text-body-secondary">COMPARE WITH</h6>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 " style="border-radius: 0;" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn " type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light rounded-5 justify-content-md-center">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center my-3">Apple iPhone 11</h2>
                    <div class="row mx-3">
                        <div class="col-md-4 px-3">
                            <h5 class="text-center">Positive Feeling</h5>
                            <div>
                                <canvas id="doughnutChartPosP1" height="200px"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <h5 class="text-center">Neutral Feeling</h5>
                            <div>
                                <canvas id="doughnutChartNeuP1" height="200px"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <h5 class="text-center">Negative Feeling</h5>
                            <div>
                                <canvas id="doughnutChartNegP1" height="200px"></canvas>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const sentimentPosPercentage = 70;
                                const sentimentNeuPercentage = 20;
                                const sentimentNegPercentage = 10;
                                const allPercentage = sentimentPosPercentage + sentimentNeuPercentage + sentimentNegPercentage

                                // Sample data for positive sentiment
                                var PositiveData = {
                                    labels: ["Positive Sentiment"],
                                    datasets: [{
                                        data: [sentimentPosPercentage, allPercentage - sentimentPosPercentage], // Example data for positive sentiment, you should replace it with your own
                                        backgroundColor: [
                                            'rgba(34, 139, 34, 9)', // Positive
                                            'rgba(34, 139, 34, 0.3)' // Negative
                                        ],
                                        borderColor: [
                                            'rgba(34, 139, 34, 1)',
                                            'rgba(34, 139, 34, 0.3)' // Negative
                                        ],
                                        borderWidth: 1
                                    }]
                                };


                                const dnPos = document.getElementById('doughnutChartPosP1').getContext('2d');

                                const doughnutLabelPos = {
                                    id: 'doughnutLabelPos',
                                    beforeDraw(chart) {
                                        const {
                                            ctx,
                                            chartArea,
                                            config
                                        } = chart;
                                        const {
                                            datasets
                                        } = config.data;
                                        const total = datasets.reduce((acc, dataset) => acc + dataset.data.reduce((a, b) => a + b, 0), 0);
                                        const positivePercentage = ((datasets[0].data[0] / total) * 100) + '%';
                                        const centerX = (chartArea.left + chartArea.right) / 2;
                                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                                        ctx.font = 'bold 20px san-serif';
                                        ctx.fillStyle = 'rgba(34, 139, 34, 1)';
                                        ctx.textAlign = 'center';
                                        ctx.textBaseline = 'middle';
                                        ctx.fillText(positivePercentage, centerX, centerY);
                                    }
                                };

                                // Create the doughnut chart for positive sentiment
                                new Chart(dnPos, {
                                    type: 'doughnut',
                                    data: PositiveData,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: false
                                        },
                                        layout: {
                                            padding: {
                                                left: 15,
                                                right: 15,
                                                top: 0,
                                                bottom: 0
                                            }
                                        }
                                    },
                                    plugins: [doughnutLabelPos]
                                });


                                var NeutralData = {
                                    labels: ["Neutral Sentiment"],
                                    datasets: [{
                                        data: [sentimentNeuPercentage, allPercentage - sentimentNeuPercentage], // Example data for positive sentiment, you should replace it with your own
                                        backgroundColor: [
                                            'rgba(244, 187, 68, 9)', // Positive
                                            'rgba(244, 187, 68, 0.3)' // Negative
                                        ],
                                        borderColor: [
                                            'rgba(244, 187, 68, 1)',
                                            'rgba(244, 187, 68, 0.3)' // Negative
                                        ],
                                        borderWidth: 1
                                    }]
                                };

                                const doughnutLabelNeu = {
                                    id: 'doughnutLabelNeu',
                                    beforeDraw(chart) {
                                        const {
                                            ctx,
                                            chartArea,
                                            config
                                        } = chart;
                                        const {
                                            datasets
                                        } = config.data;
                                        const total = datasets.reduce((acc, dataset) => acc + dataset.data.reduce((a, b) => a + b, 0), 0);
                                        const neutralPercentage = ((datasets[0].data[0] / total) * 100) + '%';
                                        const centerX = (chartArea.left + chartArea.right) / 2;
                                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                                        ctx.font = 'bold 20px san-serif';
                                        ctx.fillStyle = 'rgba(244, 187, 68, 1)';
                                        ctx.textAlign = 'center';
                                        ctx.textBaseline = 'middle';
                                        ctx.fillText(neutralPercentage, centerX, centerY);
                                    }
                                };

                                const dnNeu = document.getElementById('doughnutChartNeuP1').getContext('2d');
                                new Chart(dnNeu, {
                                    type: 'doughnut',
                                    data: NeutralData,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: false
                                        },
                                        layout: {
                                            padding: {
                                                left: 15,
                                                right: 15,
                                                top: 0,
                                                bottom: 0
                                            }
                                        }
                                    },
                                    plugins: [doughnutLabelNeu]
                                });

                                var NegativeData = {
                                    labels: ["Negative Sentiment"],
                                    datasets: [{
                                        data: [sentimentNegPercentage, allPercentage - sentimentNegPercentage], // Example data for positive sentiment, you should replace it with your own
                                        backgroundColor: [
                                            'rgba(210, 43, 43, 9)', // Positive
                                            'rgba(210, 43, 43, 0.3)' // Negative
                                        ],
                                        borderColor: [
                                            'rgba(210, 43, 43, 1)',
                                            'rgba(210, 43, 43, 0.3)' // Negative
                                        ],
                                        borderWidth: 1
                                    }]
                                };

                                const doughnutLabelNeg = {
                                    id: 'doughnutLabelNeg',
                                    beforeDraw(chart) {
                                        const {
                                            ctx,
                                            chartArea,
                                            config
                                        } = chart;
                                        const {
                                            datasets
                                        } = config.data;
                                        const total = datasets.reduce((acc, dataset) => acc + dataset.data.reduce((a, b) => a + b, 0), 0);
                                        const negativePercentage = ((datasets[0].data[0] / total) * 100) + '%';
                                        const centerX = (chartArea.left + chartArea.right) / 2;
                                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                                        ctx.font = 'bold 20px san-serif';
                                        ctx.fillStyle = 'rgba(210, 43, 43, 1)';
                                        ctx.textAlign = 'center';
                                        ctx.textBaseline = 'middle';
                                        ctx.fillText(negativePercentage, centerX, centerY);
                                    }
                                };

                                const dnNeg = document.getElementById('doughnutChartNegP1').getContext('2d');
                                new Chart(dnNeg, {
                                    type: 'doughnut',
                                    data: NegativeData,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: false
                                        },
                                        layout: {
                                            padding: {
                                                left: 15,
                                                right: 15,
                                                top: 0,
                                                bottom: 0
                                            }
                                        }
                                    },
                                    plugins: [doughnutLabelNeg]
                                });

                            });
                        </script>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center my-3">Samsung Galaxy S23</h2>
                    <div class="row mx-3">
                        <div class="col-md-4 px-3">
                            <h5 class="text-center">Positive Feeling</h5>
                            <div>
                                <canvas id="doughnutChartPosP2" height="200px"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <h5 class="text-center">Neutral Feeling</h5>
                            <div>
                                <canvas id="doughnutChartNeuP2" height="200px"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <h5 class="text-center">Negative Feeling</h5>
                            <div>
                                <canvas id="doughnutChartNegP2" height="200px"></canvas>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const sentimentPosPercentage = 50;
                                const sentimentNeuPercentage = 10;
                                const sentimentNegPercentage = 40;
                                const allPercentage = sentimentPosPercentage + sentimentNeuPercentage + sentimentNegPercentage

                                // Sample data for positive sentiment
                                var PositiveData = {
                                    labels: ["Positive Sentiment"],
                                    datasets: [{
                                        data: [sentimentPosPercentage, allPercentage - sentimentPosPercentage], // Example data for positive sentiment, you should replace it with your own
                                        backgroundColor: [
                                            'rgba(34, 139, 34, 9)', // Positive
                                            'rgba(34, 139, 34, 0.3)' // Negative
                                        ],
                                        borderColor: [
                                            'rgba(34, 139, 34, 1)',
                                            'rgba(34, 139, 34, 0.3)' // Negative
                                        ],
                                        borderWidth: 1
                                    }]
                                };


                                const dnPos = document.getElementById('doughnutChartPosP2').getContext('2d');

                                const doughnutLabelPos = {
                                    id: 'doughnutLabelPos',
                                    beforeDraw(chart) {
                                        const {
                                            ctx,
                                            chartArea,
                                            config
                                        } = chart;
                                        const {
                                            datasets
                                        } = config.data;
                                        const total = datasets.reduce((acc, dataset) => acc + dataset.data.reduce((a, b) => a + b, 0), 0);
                                        const positivePercentage = ((datasets[0].data[0] / total) * 100) + '%';
                                        const centerX = (chartArea.left + chartArea.right) / 2;
                                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                                        ctx.font = 'bold 20px san-serif';
                                        ctx.fillStyle = 'rgba(34, 139, 34, 1)';
                                        ctx.textAlign = 'center';
                                        ctx.textBaseline = 'middle';
                                        ctx.fillText(positivePercentage, centerX, centerY);
                                    }
                                };

                                // Create the doughnut chart for positive sentiment
                                new Chart(dnPos, {
                                    type: 'doughnut',
                                    data: PositiveData,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: false
                                        },
                                        layout: {
                                            padding: {
                                                left: 15,
                                                right: 15,
                                                top: 0,
                                                bottom: 0
                                            }
                                        }
                                    },
                                    plugins: [doughnutLabelPos]
                                });


                                var NeutralData = {
                                    labels: ["Neutral Sentiment"],
                                    datasets: [{
                                        data: [sentimentNeuPercentage, allPercentage - sentimentNeuPercentage], // Example data for positive sentiment, you should replace it with your own
                                        backgroundColor: [
                                            'rgba(244, 187, 68, 9)', // Positive
                                            'rgba(244, 187, 68, 0.3)' // Negative
                                        ],
                                        borderColor: [
                                            'rgba(244, 187, 68, 1)',
                                            'rgba(244, 187, 68, 0.3)' // Negative
                                        ],
                                        borderWidth: 1
                                    }]
                                };

                                const doughnutLabelNeu = {
                                    id: 'doughnutLabelNeu',
                                    beforeDraw(chart) {
                                        const {
                                            ctx,
                                            chartArea,
                                            config
                                        } = chart;
                                        const {
                                            datasets
                                        } = config.data;
                                        const total = datasets.reduce((acc, dataset) => acc + dataset.data.reduce((a, b) => a + b, 0), 0);
                                        const neutralPercentage = ((datasets[0].data[0] / total) * 100) + '%';
                                        const centerX = (chartArea.left + chartArea.right) / 2;
                                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                                        ctx.font = 'bold 20px san-serif';
                                        ctx.fillStyle = 'rgba(244, 187, 68, 1)';
                                        ctx.textAlign = 'center';
                                        ctx.textBaseline = 'middle';
                                        ctx.fillText(neutralPercentage, centerX, centerY);
                                    }
                                };

                                const dnNeu = document.getElementById('doughnutChartNeuP2').getContext('2d');
                                new Chart(dnNeu, {
                                    type: 'doughnut',
                                    data: NeutralData,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: false
                                        },
                                        layout: {
                                            padding: {
                                                left: 15,
                                                right: 15,
                                                top: 0,
                                                bottom: 0
                                            }
                                        }
                                    },
                                    plugins: [doughnutLabelNeu]
                                });

                                var NegativeData = {
                                    labels: ["Negative Sentiment"],
                                    datasets: [{
                                        data: [sentimentNegPercentage, allPercentage - sentimentNegPercentage], // Example data for positive sentiment, you should replace it with your own
                                        backgroundColor: [
                                            'rgba(210, 43, 43, 9)', // Positive
                                            'rgba(210, 43, 43, 0.3)' // Negative
                                        ],
                                        borderColor: [
                                            'rgba(210, 43, 43, 1)',
                                            'rgba(210, 43, 43, 0.3)' // Negative
                                        ],
                                        borderWidth: 1
                                    }]
                                };

                                const doughnutLabelNeg = {
                                    id: 'doughnutLabelNeg',
                                    beforeDraw(chart) {
                                        const {
                                            ctx,
                                            chartArea,
                                            config
                                        } = chart;
                                        const {
                                            datasets
                                        } = config.data;
                                        const total = datasets.reduce((acc, dataset) => acc + dataset.data.reduce((a, b) => a + b, 0), 0);
                                        const negativePercentage = ((datasets[0].data[0] / total) * 100) + '%';
                                        const centerX = (chartArea.left + chartArea.right) / 2;
                                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                                        ctx.font = 'bold 20px san-serif';
                                        ctx.fillStyle = 'rgba(210, 43, 43, 1)';
                                        ctx.textAlign = 'center';
                                        ctx.textBaseline = 'middle';
                                        ctx.fillText(negativePercentage, centerX, centerY);
                                    }
                                };

                                const dnNeg = document.getElementById('doughnutChartNegP2').getContext('2d');
                                new Chart(dnNeg, {
                                    type: 'doughnut',
                                    data: NegativeData,
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        plugins: {
                                            legend: false
                                        },
                                        layout: {
                                            padding: {
                                                left: 15,
                                                right: 15,
                                                top: 0,
                                                bottom: 0
                                            }
                                        }
                                    },
                                    plugins: [doughnutLabelNeg]
                                });

                            });
                        </script>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6 bg-dark">.col-12 .col-md-8</div>
                <div class="col-6 bg-danger">.col-6 .col-md-4</div>
            </div>
        </div>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</html>