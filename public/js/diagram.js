var ctx = document.getElementById('myClient').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Колличество клиентов',
            backgroundColor: '#1ed709',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 3, 3, 4, 7, 7, 11]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById('myInspecting').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [ 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Колличество инспекторов',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 3, 3, 4, 7, 7, 11]
        }]
    },

    // Configuration options go here
    options: {}
});

