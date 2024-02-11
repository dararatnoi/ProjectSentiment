<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sentiment | Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- รวม wordcloud.js library -->
    <script src="https://unpkg.com/wordcloud@2.36.0/dist/wordcloud.js"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-tag-cloud.min.js"></script>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        /* Add some basic styling for better visibility */
        .dropdown {
            display: inline-block;
            margin-right: 10px;
            /* Add margin for spacing */
            position: relative;

        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 1;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
        }

        .btn {
            width: 180px;
            box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.05);
        }

        .custom-dropdown {
            width: 200px;
            /* Set your desired width here */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')


    <!--content-->
    <div class="container" style="margin-top: 7%">

        <div class="row col-12 row-gap-3 mb-5">
            <div class="col-3">
                <div class="card  hov-primary border-0"
                    style="background-color:#8d9ec6 ;color:aliceblue; box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body ">
                        <h3 class="card-title">65,000</h3>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Reviews</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div
                    class="card border-0 hov-primary"style="background-color: #70c1b3 ;color:aliceblue;box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <h3 class="card-title">45,000</h3>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Positive Reviews</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div
                    class="card border-0 hov-primary"style="background-color: #EFBF38;color:aliceblue;box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <h3 class="card-title">10,000</h3>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Neutral Reviews</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-0 hov-primary"
                    style="background-color: #dd7373;color:aliceblue;box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <h3 class="card-title">5,000</h3>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Negative Reviews</h6>
                    </div>
                </div>
            </div>

        </div>


        <!--Chart-->
        <div class="row col-12 mt-3 mb-5">
            <div class="card border-min hov-primary">
                <div class="card-body">
                    <div>
                        <canvas id="myChart" width="50" height="24"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{-- Chartjs --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const barCtx = document.getElementById('myChart');
                new Chart(barCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Apple', 'Samsung', 'Oppo', 'Vivo', 'Xiaomi', 'Huawei'],
                        datasets: [{
                            label: 'Positive',
                            data: [6000, 5000, 4000, 4300, 1200, 3200],
                            borderWidth: 1,
                            backgroundColor: '#70c1b3'
                        }, {
                            label: 'Neutral',
                            data: [2000, 3030, 1000, 1500, 1200, 1200],
                            borderWidth: 1,
                            backgroundColor: '#EFBF38'
                        }, {
                            label: 'Negative',
                            data: [4500, 1234, 1000, 1300, 1400, 2000],
                            borderWidth: 1,
                            backgroundColor: '#dd7373'
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Customer Feelings for Smartphone',
                                font: {
                                    size: 18,
                                    family: 'Kanit',
                                },
                                position: 'top'
                            }
                        }
                    }
                });
                const barCtxAspect = document.getElementById('myChartaspect');
                new Chart(barCtxAspect, {
                    type: 'bar',
                    data: {
                        labels: ['Camera', 'Battery', 'Screen', 'Performance', 'Price', 'Other'],
                        datasets: [{
                            label: 'Positive',
                            data: [6000, 5000, 4000, 4300, 1200, 3200],
                            borderWidth: 1,
                            backgroundColor: '#70c1b3'
                        }, {
                            label: 'Neutral',
                            data: [2000, 3030, 1000, 1500, 1200, 1200],
                            borderWidth: 1,
                            backgroundColor: '#EFBF38'
                        }, {
                            label: 'Negative',
                            data: [4500, 1234, 1000, 1300, 1400, 2000],
                            borderWidth: 1,
                            backgroundColor: '#dd7373'
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Customer feelings towards each aspect of smartphones',
                                font: {
                                    size: 18,
                                    family: 'Kanit',
                                },
                                position: 'top'
                            }
                        }
                    }
                });


            });
        </script>


        <!--filter-->
        <div class="d-flex justify-content-end">
            <div class="d-flex justify-content-end align-items-center">
                <label for="brandDropdown" class="me-2">Brand:</label>
                <select id="brandDropdown" class="form-select" aria-label="Brand selection">
                    <option value="all" selected>All</option>
                    <option value="apple">Apple</option>
                    <option value="samsung">Samsung</option>
                    <option value="huawei">Huawei</option>
                    <option value="vivo">Vivo</option>
                    <option value="xiaomi">Xiaomi</option>
                    <option value="oppo">Oppo</option>
                </select>
            </div>

            <div class="ms-3 d-flex justify-content-end align-items-center">
                <label for="modelDropdown" class="me-2">Model:</label>
                <select id="modelDropdown" class="form-select" aria-label="Model selection">
                    <option value="all" selected>All</option>
                    <option value="iphone 14 pro max" data-brand="apple">iPhone 14 Pro Max</option>
                    <option value="iphone 14 pro" data-brand="apple">iPhone 14 Pro</option>
                    <option value="oppo find n3 flip" data-brand="oppo">OPPO Find N3 Flip</option>
                    <option value="Samsung Galaxy F23 5G" data-brand="samsung">Samsung Galaxy F23 5G</option>
                    <option value="vivo Y27 5G" data-brand="vivo">vivo Y27 5G</option>
                    <option value="Huawei nova 8 SE 4G" data-brand="huawei">Huawei nova 8 SE 4G</option>
                    <option value="Xiaomi 11T" data-brand="xiaomi">Xiaomi 11T</option>
                    <!-- Add other models and their respective brands as needed -->
                </select>
            </div>
        </div>

        <script>
            document.getElementById('brandDropdown').addEventListener('change', function() {
                handleBrandChange();
            });

            document.getElementById('modelDropdown').addEventListener('change', function() {
                handleModelChange();
            });

            function handleBrandChange() {
                const brandDropdown = document.getElementById('brandDropdown');
                const modelDropdown = document.getElementById('modelDropdown');

                // Clear existing options
                modelDropdown.innerHTML = '';

                // Add default "All" option
                const allOption = document.createElement('option');
                allOption.value = 'all';
                allOption.text = 'All';
                modelDropdown.appendChild(allOption);

                // Define a mapping of brands to their respective models
                const brandModels = {
                    'apple': ['iphone 14 pro max', 'iphone 14 pro'],
                    'oppo': ['oppo find n3 flip'],
                    'samsung': ['Samsung Galaxy F23 5G'],
                    'vivo': ['vivo Y27 5G'],
                    'huawei': ['Huawei nova 8 SE 4G'],
                    'xiaomi': ['Xiaomi 11T']
                    // Add more brands and models as needed
                };

                // Get the selected brand
                const selectedBrand = brandDropdown.value;

                // Add specific models based on the selected brand or show all models for "All"
                const modelsToShow = selectedBrand === 'all' ? getAllModels(brandModels) : brandModels[selectedBrand];

                // Add models to the dropdown
                modelsToShow.forEach((model) => {
                    addModelOption(model, model);
                });
            }

            function handleModelChange() {
                // Add logic for handling model changes if needed
            }

            function addModelOption(value, text) {
                const option = document.createElement('option');
                option.value = value;
                option.text = text;
                document.getElementById('modelDropdown').appendChild(option);
            }

            function getAllModels(brandModels) {
                // Extract all models from the brandModels object
                return Object.values(brandModels).flat();
            }
        </script>
        {{-- Select aspect --}}
        <div class="row col-12 mt-3 ">
            <div class="card border-min hov-primary my-3 ">
                <div class="d-flex justify-content-end">

                    <div class="d-flex justify-content-end mb-3 mt-3 ">
                        <select id="aspectFilter" class="form-select" aria-label="selectedAspect">
                            <option value="all">All</option>
                            <option value="Camera">Camera</option>
                            <option value="Battery">Battery</option>
                            <option value="Screen">Screen</option>
                            <option value="Performance">Performance</option>
                            <option value="Price">Price</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChartaspect" width="50" height="24"></canvas>
                </div>
            </div>
        </div>
        {{-- Chartjs --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const barCtxAspect = document.getElementById('myChartaspect');
                const myChart = new Chart(barCtxAspect, {
                    type: 'bar',
                    data: {
                        labels: ['Camera', 'Battery', 'Screen', 'Performance', 'Price', 'Other'],
                        datasets: [{
                            label: 'Positive',
                            data: [6000, 5000, 4000, 4300, 1200, 3200],
                            borderWidth: 1,
                            backgroundColor: '#70c1b3'
                        }, {
                            label: 'Neutral',
                            data: [2000, 3030, 1000, 1500, 1200, 1200],
                            borderWidth: 1,
                            backgroundColor: '#EFBF38'
                        }, {
                            label: 'Negative',
                            data: [4500, 1234, 1000, 1300, 1400, 2000],
                            borderWidth: 1,
                            backgroundColor: '#dd7373'
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Customer feelings towards each aspect of smartphones',
                                font: {
                                    size: 18,
                                    family: 'Kanit',
                                },
                                position: 'top'
                            }
                        }
                    }
                });

                // Event listener for select dropdown
                document.getElementById('aspectFilter').addEventListener('change', function() {
                    handleAspectFilterChange(this.value);
                });

                function handleAspectFilterChange(selectedAspect) {
                    const filteredData = getFilteredChartData(selectedAspect);

                    // Update chart with filtered data
                    myChart.data.datasets.forEach((dataset, index) => {
                        dataset.data = filteredData[index];
                    });

                    // Update chart options (if needed)
                    myChart.options.plugins.title.text =
                        `Customer feelings towards ${selectedAspect === 'all' ? 'all aspects' : selectedAspect} of smartphones`;

                    // Update chart
                    myChart.update();
                }

                function getFilteredChartData(selectedAspect) {
                    if (selectedAspect === 'all') {
                        // If 'All' is selected, return the original data
                        return myChart.data.datasets.map(dataset => Array.from(dataset.data));
                    }

                    // Filter data based on the selected aspect
                    const aspectIndex = myChart.data.labels.indexOf(selectedAspect);
                    return myChart.data.datasets.map(dataset => [dataset.data[aspectIndex]]);
                }
            });
        </script>

        {{-- WORD CLOUD --}}

        <div class="row col-12 row-gap-3 mt-1">
            <div class="col-4" style="">
                <div class="card border-min ">
                    <div class="card-body">
                        WORD CLOUD
                    </div>
                </div>

            </div>
            <div class="col-4" style="">
                <div class="card border-min hov-primary ">
                    <div class="card-body">
                        POSITIVE WORD CLOUD
                    </div>
                </div>

            </div>
            <div class="col-4" style="">
                <div class="card border-min hov-primary ">
                    <div class="card-body">
                        NEGATIVE WORD CLOUD
                    </div>
                </div>

            </div>
        </div>

        <!-- WORD CLOUD--->
        <div class="row col-12 row-gap-3 mt-2 mb-5">
            <div class="col-4" style="">
                <div class="card border-min hov-primary ">
                    <div class="card-body">
                        <div id="wordCloudContainer" style="width: 350px; height: 300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-4" style="">
                <div class="card border-min hov-primary ">
                    <div class="card-body">
                        <div id="poscontainer" style="width: 350px; height: 300px;"></div>
                    </div>
                </div>

            </div>
            <div class="col-4" style="">
                <div class="card border-min hov-primary ">
                    <div class="card-body">
                        <div id="negcontainer" style="width: 350px; height: 300px;"></div>
                    </div>
                </div>

            </div>
        </div>

        <!--COMPARE Smartphone--->

    </div>


</body>


<script>
    //     anychart.onDocumentReady(function() {
    //         var data = [{
    //                 "x": "Mandarin chinese",
    //                 "value": 1090000000,
    //                 category: "Sino-Tibetan"
    //             },
    //             {
    //                 "x": "English",
    //                 "value": 983000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Hindustani",
    //                 "value": 544000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Spanish",
    //                 "value": 527000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Arabic",
    //                 "value": 422000000,
    //                 category: "Afro-Asiatic"
    //             },
    //             {
    //                 "x": "Malay",
    //                 "value": 281000000,
    //                 category: "Austronesian"
    //             },
    //             {
    //                 "x": "Russian",
    //                 "value": 267000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Bengali",
    //                 "value": 261000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Portuguese",
    //                 "value": 229000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "French",
    //                 "value": 229000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Hausa",
    //                 "value": 150000000,
    //                 category: "Afro-Asiatic"
    //             },
    //             {
    //                 "x": "Punjabi",
    //                 "value": 148000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Japanese",
    //                 "value": 129000000,
    //                 category: "Japonic"
    //             },
    //             {
    //                 "x": "German",
    //                 "value": 129000000,
    //                 category: "Indo-European"
    //             },
    //             {
    //                 "x": "Persian",
    //                 "value": 121000000,
    //                 category: "Indo-European"
    //             }
    //         ];
    //         // create a tag (word) cloud chart
    //         var chart = anychart.tagCloud(data);
    //         //initial for colors
    //         var customcolor = anychart.scales.linearColor();
    //         //add colors
    //         customcolor.colors(["#45b6fe", '#f94449', "#DE73FF"]);
    //         // set the color scale as the color scale of the chart
    //         chart.colorScale(customcolor);
    //         // set an array of angles at which the words will be laid out
    //         chart.angles([0, 45, -45]);
    //         // enable a color range
    //         chart.colorRange(false);
    //         chart.scale(false);
    //         chart.container('wordCloudContainer');
    //         chart.draw();
    //     });
    //     var reviewsData = [
    //     { "review": "The smartphone is amazing, love the camera quality!", "model": "Model A" },
    //     { "review": "Battery life is not great, but overall performance is good.", "model": "Model B" },
    //     // Add more reviews as needed
    // ];

    // // Process data for AnyChart WordCloud
    // const wordCloudData = reviewsData.map(review => ({
    //     x: review.review,
    //     value: Math.random() * 10, // You can adjust the weight as needed
    //     category: review.model
    // }));

    // // Create AnyChart WordCloud
    // anychart.onDocumentReady(function() {
    //     // Set up the chart
    //     const chart = anychart.tagCloud(wordCloudData);

    //     // Set the chart title
    //     chart.title("Word Cloud: Smartphone Reviews");

    //     // Set the container ID
    //     chart.container("container");

    //     // Draw the chart
    //     chart.draw();
    // });

    anychart.onDocumentReady(function() {

        // create data
        var data = [{
                x: "กล้องดีมาก",
                value: 80
            },
            {
                x: "แบต",
                value: 56
            },
            {
                x: "ห่วยแตก",
                value: 44
            },
            {
                x: "แพงมาก",
                value: 40
            },
            {
                x: "สวยงาม",
                value: 36
            },
            {
                x: "ยอดเยี่ยม",
                value: 32
            },
            {
                x: "ดีมาก",
                value: 28
            },
            {
                x: "แนะนำ",
                value: 24
            },
            {
                x: "ใช้งานได้ดี",
                value: 20
            },
            {
                x: "หน้าจอห่วย",
                value: 12
            },
            {
                x: "หล้องไม่ชัด",
                value: 12
            }
        ];
        var chart = anychart.tagCloud(data);
        chart.container("wordCloudContainer");
        chart.draw();
    });
    anychart.onDocumentReady(function() {

        // create data
        var data = [{
                x: "กล้องดีมาก",
                value: 80
            },
            {
                x: "แบตอึดมาก",
                value: 56
            },
            {
                x: "สวยงาม",
                value: 36
            },
            {
                x: "ยอดเยี่ยม",
                value: 32
            },
            {
                x: "ดีมาก",
                value: 28
            },
            {
                x: "แนะนำ",
                value: 24
            },
            {
                x: "ใช้งานได้ดี",
                value: 20
            },

        ];
        var chart = anychart.tagCloud(data);
        chart.container("poscontainer");
        chart.draw();
    });

    anychart.onDocumentReady(function() {
        // create data
        var data = [{
                x: "แบตลดไว",
                value: 56
            },
            {
                x: "ห่วยแตก",
                value: 44
            },
            {
                x: "แพงมาก",
                value: 40
            },
            {
                x: "หน้าจอห่วย",
                value: 12
            },
            {
                x: "หล้องไม่ชัด",
                value: 12
            }
        ];
        var chart = anychart.tagCloud(data);
        chart.container("negcontainer");
        chart.draw();
    });
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>
