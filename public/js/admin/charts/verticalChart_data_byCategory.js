// Array with all week days in uppercases
var lastWeekDaysUppercase = windowvar.usersLastWeekDates.map(function(usersLastWeekDates){ return usersLastWeekDates.toUpperCase(); });
var lightBackgroundColorsSet = [
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)',
    'rgba(255, 206, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(79, 147, 181, 0.2)',
    'rgba(162, 128, 26, 0.2)',
    'rgba(130, 98, 192, 0.2)'
    ];
var lightBorderColorsSet = [
    'rgba(255, 99 ,132, 1)',
    'rgba(54, 162, 235, 1)',
    'rgba(255, 206, 86, 1)',
    'rgba(75, 192, 192, 1)',
    'rgba(79, 147, 181, 1)',
    'rgba(162, 128, 26, 1)',
    'rgba(130, 98, 192, 1)'
];
var purpleColorsSet = [
    'rgba(102, 0, 255, .2)',
    'rgba(102, 0, 255, .7)'
];
var orangeColorsSet = [
    'rgba(255, 153, 51, .2)',
    'rgba(255, 153, 51, .7)'
];
var greenColorsSet = [
    'rgba(69, 252, 3, .2)',
    'rgba(69, 252, 3, .7)'
];
var blueColorsSet = [
    'rgba(0, 137, 132, .2)',
    'rgba(0, 137, 132, .7)'
];
var darkBackgroundColorSet = [
    "rgba(167, 143, 188, 1)", 
    "rgba(126, 171, 171, 1)",
    "rgba(187, 191, 138, 1)",
    "rgba(222, 206, 155, 1)",
    "rgba(222, 155, 155, 1)",
    "rgba(173, 120, 155, 1)",
    "rgba(138, 120, 173, 1)",
    "rgba(97, 164, 178, 1)",
    ];
var darkBorderColorSet = [
    "rgba(167, 143, 188, .8)", 
    "rgba(126, 171, 171, .8)",
    "rgba(187, 191, 138, .8)",
    "rgba(222, 206, 155, .8)",
    "rgba(222, 155, 155, .8)",
    "rgba(173, 120, 155, .8)",
    "rgba(138, 120, 173, .8)",
    "rgba(97, 164, 178, .8)",
    ];
var extraBackgroundColorSet = ["#4D5360", "#949FB1", "#46BFBD", "#3399ff", "#00ff99", "#669999"];
var extraHoverBackgroundColorSet = ["#616774", "#A8B3C5", "#5AD3D1", "#57abff", "#80ffcc", "#a3c2c2"];
var basicBackgroundColorSet = ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"];
var basicHoverBackgroundColorSet = ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"];
var yellowColorSet = ['rgb(179, 45, 0, .2)', 'rgb(179, 45, 0, .7)'];
var darkOrangeColorSet = ['rgb(255, 255, 0, .2)', 'rgb(255, 255, 0, .7)'];
    

 // Horizontal chart for Lessons by category 
var lessonsByCategory = document.getElementById("lessonsByCategoryChart").getContext('2d');
var lessonsByCategorymyChart = new Chart(lessonsByCategory, {
    type: 'horizontalBar',
    data: {
        labels: ["Arduino", "Robotika", "Elektronika", "Automatika"],
        datasets: [{
            label: '# Pamokų kiekis pagal kategorijas',
            data: [windowvar.Arduino, windowvar.Elektronika, windowvar.Robotika, windowvar.Automatika],
            backgroundColor: lightBackgroundColorsSet,
            borderColor: lightBorderColorsSet,
            borderWidth: 1
        }]
    },
    options: {
        scales: {

                xAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
        }
    }
});

// Horizontal chart for Posts by category 

var postsByCategory = document.getElementById("postsByCategoryChart").getContext('2d');
var postsByCategoryChart = new Chart(postsByCategory, {
    type: 'horizontalBar',
    data: {
        labels: ["Arduino", "Robotika", "Elektronika", "Automatika"],
        datasets: [{
            label: '# Projektų kiekis pagal kategorijas',
            data: [windowvar.ArduinoP, windowvar.ElektronikaP, windowvar.RobotikaP, windowvar.AutomatikaP],
            backgroundColor: lightBackgroundColorsSet,
            borderColor: lightBorderColorsSet,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});
    
    //Line chart for get content uploads by month
        var contentByMonth = document.getElementById("contentByMonthChart").getContext('2d');
        var contentByMonthChart = new Chart(contentByMonth , {
            type: 'line',
            data: {
                labels: ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis"],
                datasets: [{
                        label: "Pamokų patalpinimas pagal mėnesius",
                        backgroundColor: purpleColorsSet['0'],
                        borderColor: purpleColorsSet['1'],
                        borderWidth: 2,
                        data: windowvar.LessonsByMonth,
                    },
                    {
                        label: "Projektų patalpinimas pagal mėnesius",
                        backgroundColor: orangeColorsSet['0'],
                        borderColor: orangeColorsSet['1'],
                        data: windowvar.PostsByMonth,
                    }
                ]
            },
            options: {
                responsive: true
            }
        });

        //Pie chart - last 7 days users sessions by used browser
        var usedBrowser = document.getElementById("usedBrowserChart").getContext('2d');
        var usedBrowserChart = new Chart(usedBrowser, {
            type: 'pie',
            data: {
                labels: windowvar.sevenDaysBrowser,
                datasets: [{
                    label: "Puslapių peržiūros",
                    data: windowvar.sevenDaysBrowserSessions,
                    backgroundColor: darkBackgroundColorSet,
                    hoverBackgroundColor: darkBorderColorSet
                }]
            },
            options: {
                responsive: true,
                legend: false
            }
        });

// Radar chart for last 7 days Visitors and pageViews / array with original week days in lowercase - windowvar.sevenDaysWeekDays
var visitorsSevenDays = document.getElementById("visitorsSevenDaysChart").getContext('2d');
var visitorsSevenDaysChart = new Chart(visitorsSevenDays, {
   type: 'radar',
    data: {
        labels: lastWeekDaysUppercase,
        datasets: [{
            label: "Puslapių peržiūros",
            data: windowvar.sevenDaysPageViews,
            backgroundColor: greenColorsSet['0'],
            borderColor: greenColorsSet['1'],
            borderWidth: 2
        }, {
            label: "Unikalus apsilankymai",
            data: windowvar.sevenDaysVisitors,
            backgroundColor: blueColorsSet['0'],
            borderColor: blueColorsSet['1'],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true
    }
});


//doughnut chart for user by device
var visitorsDevices = document.getElementById("visitorsDevicesChart").getContext('2d');
var visitorsDevicesChart = new Chart(visitorsDevices, {
    type: 'doughnut',
    data: {
        labels: windowvar.devices,
        datasets: [{
            data: windowvar.deviceWithUsers,
            backgroundColor: basicBackgroundColorSet,
            hoverBackgroundColor: basicHoverBackgroundColorSet
        }]
    },
    options: {
        responsive: true
    }
});
        
//doughnut chart for user by country
var visitorsCountrys = document.getElementById("visitorsCountrysChart").getContext('2d');
var visitorsCountrysChart = new Chart(visitorsCountrys, {
    type: 'doughnut',
    data: {
        labels: windowvar.countrys,
        datasets: [{
            data: windowvar.visitorsByCountrys,
            backgroundColor: extraBackgroundColorSet,
            hoverBackgroundColor: extraHoverBackgroundColorSet
        }]
    },
    options: {
        responsive: true
    }
});

//Pie chart - last 7 days users sessions by citys
var usersFromCitys = document.getElementById("usersFromCitysChart").getContext('2d');
var usersFromCitysChart = new Chart(usersFromCitys, {
    type: 'pie',
    data: {
        labels: windowvar.citys,
        datasets: [{
            label: "Puslapių peržiūros",
            data: windowvar.visitorsFromCitys,
            backgroundColor: darkBackgroundColorSet,
            hoverBackgroundColor: darkBorderColorSet
        }]
    },
    options: {
        responsive: true,
        
    }
});

//Line chart to users activity by hours
var usersActivityByHours = document.getElementById("usersActivityByHoursChart").getContext('2d');
var usersActivityByHoursChart = new Chart(usersActivityByHours, {
    type: 'line',
    data: {
        labels: windowvar.hours,
        datasets: [{
                label: "Lankytojų aktyvumas",
                backgroundColor: blueColorsSet['0'],
                borderColor: blueColorsSet['1'],
                borderWidth: 2,
                data: windowvar.activeUsers,
            },

        ]
    },
    options: {
        responsive: true
    }
});

//Horizontal bar chart to users activity by week days windowvar.sevenDaysWeekDays   
var usersActivityByDays = document.getElementById("usersActivityByDaysChart").getContext('2d');
var usersActivityByDaysChart = new Chart(usersActivityByDays, {
    type: 'horizontalBar',
    data: {
        labels: lastWeekDaysUppercase,
        datasets: [{
            data: windowvar.sevenDaysVisitors,
            backgroundColor: lightBackgroundColorsSet,
            borderColor: lightBorderColorsSet,
            borderWidth: 1
        }]
    },
    options: {
        legend: false,
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});



//Visits compare chart in last two weeks 
var visitsCompare = document.getElementById("visitsCompareChart").getContext('2d');
var visitsCompareChart = new Chart(visitsCompare, {
    type: 'line',
    data: {
        labels: lastWeekDaysUppercase,
        datasets: [{
                label: "Praėjusios savaitės vizitai",
                backgroundColor: greenColorsSet['0'],
                borderColor: greenColorsSet['1'],
                borderWidth: 2,
                data: windowvar.lastWeekVisitors,
            },
            {
            label: "Pastarosios savaitės vizitai",
            backgroundColor: blueColorsSet['0'],
            borderColor: blueColorsSet['1'],
            data: windowvar.sevenDaysVisitors,
        }
        ]
    },
    options: {
        responsive: true
    }
});

//Users types ratio in last 7 days doughnut chart 
var userTypesRatio = document.getElementById("userTypesRatioChart").getContext('2d');
var userTypesRatioChart = new Chart(userTypesRatio, {
    type: 'doughnut',
    data: {
        labels: windowvar.userTypeKey,
        datasets: [{
            data: windowvar.userTypeValue,
            backgroundColor: lightBorderColorsSet,
            hoverBackgroundColor: lightBackgroundColorsSet
        }]
    },
    options: {
        responsive: true
    }
});

//Page views compare in two last weeks
var viewsCompare = document.getElementById("viewsCompareChart").getContext('2d');
var viewsCompareChart = new Chart(viewsCompare, {
    type: 'line',
    data: {
        labels: lastWeekDaysUppercase,
        datasets: [{
                label: "Praėjusios savaitės peržiūros",
                backgroundColor: orangeColorsSet['0'],
                borderColor: orangeColorsSet['1'],
                borderWidth: 2,
                data: windowvar.lastWeekPageViews,
            },
            {
            label: "Pastarosios savaitės peržiūros",
            backgroundColor: purpleColorsSet['0'],
            borderColor: purpleColorsSet['1'],
            data: windowvar.sevenDaysPageViews,
        }
        ]
    },
    options: {
        responsive: true
    }
});











