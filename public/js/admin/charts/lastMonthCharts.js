
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

//Charts for last month data
var visitorsLastMonth = document.getElementById("visitorsLastMonthChart").getContext('2d');
var visitorsLastMonthChart = new Chart(visitorsLastMonth, {
    type: 'line',
    data: {
        labels: windowvar.allLastMonthDays,
        datasets: [{
                label: "Praėjusio mėnesio lankytojai",
                backgroundColor: yellowColorSet['0'],
                borderColor: yellowColorSet['1'],
                borderWidth: 2,
                data: windowvar.lastMonthVisitors,
            },
            {
            label: "Praėjusio mėnesio peržiūros",
            backgroundColor: darkOrangeColorSet['0'],
            borderColor: darkOrangeColorSet['1'],
            data: windowvar.lastMonthPageViews,
        }
        ]
    },
    options: {
        responsive: true
    }
});


//doughnut chart for user by device / last month data
var lastMonthDevices = document.getElementById("lastMonthDevicesChart").getContext('2d');
var lastMonthDevicesChart = new Chart(lastMonthDevices, {
    type: 'doughnut',
    data: {
        labels: windowvar.deviceLastMonthArr,
        datasets: [{
            data: windowvar.deviceLastMonthValues,
            backgroundColor: basicBackgroundColorSet,
            hoverBackgroundColor: basicHoverBackgroundColorSet
        }]
    },
    options: {
        responsive: true
    }
});

//doughnut chart for users countrys / last month data
var lastMonthVisitorsCountrys = document.getElementById("lastMonthVisitorsCountrysChart").getContext('2d');
var lastMonthVisitorsCountrysChart = new Chart(lastMonthVisitorsCountrys, {
    type: 'doughnut',
    data: {
        labels: windowvar.lastMonthCountrys,
        datasets: [{
            data: windowvar.lastMonthVisitorsByCountrys,
            backgroundColor: extraBackgroundColorSet,
            hoverBackgroundColor: extraHoverBackgroundColorSet
        }]
    },
    options: {
        responsive: true
    }
});
// pie chart for users citys / last month data
var lastMonthVisitorsCitys = document.getElementById("lastMonthVisitorsCitysChart").getContext('2d');
var lastMonthVisitorsCitysChart = new Chart(lastMonthVisitorsCitys, {
    type: 'pie',
    data: {
        labels: windowvar.lastMonthCitys,
        datasets: [{
            label: "Puslapių peržiūros",
            data: windowvar.lastMonthVisitorsFromCitys,
            backgroundColor: darkBackgroundColorSet,
            hoverBackgroundColor: darkBorderColorSet
        }]
    },
    options: {
        responsive: true,
        
    }
});

// pie chart for users browsers
var lastMonthBrowser = document.getElementById("lastMonthBrowserChart").getContext('2d');
var lastMonthBrowserChart = new Chart(lastMonthBrowser, {
    type: 'pie',
    data: {
        labels: windowvar.lastMonthbrowsers,
        datasets: [{
            label: "Puslapių peržiūros",
            data: windowvar.lastMonthSessionsByBrowser,
            backgroundColor: darkBackgroundColorSet,
            hoverBackgroundColor: darkBorderColorSet
        }]
    },
    options: {
        responsive: true,
        
    }
});

//Line chart to users activity by hours / last mont data
var lastMonthActivityByHours = document.getElementById("lastMonthActivityByHoursChart").getContext('2d');
var lastMonthActivityByHoursChart = new Chart(lastMonthActivityByHours, {
    type: 'line',
    data: {
        labels: windowvar.lastMonthHours,
        datasets: [{
                label: "Lankytojų aktyvumas",
                backgroundColor: orangeColorsSet['0'],
                borderColor: orangeColorsSet['1'],
                borderWidth: 2,
                data: windowvar.lastMonthActiveUsers,
            },

        ]
    },
    options: {
        responsive: true
    }
});