anychart.onDocumentReady(function () {
    
    chartData = {
        title: 'Statistics on Youtube',
        rows: [
            ["view Count", document.getElementById('viewcount').value],
            ["like", document.getElementById('like').value],
            ["comment", document.getElementById('comment').value],
            ["subscribes", document.getElementById('subscribes').value]
        ]
    };

    var chart = anychart.column();
    chart.data(chartData);  
    chart.animation(true);

            chart.labels()
            .enabled(true)
            .position('center-top')
            .anchor('center-bottom')
            
    chart.hovered().labels(false);
    chart.interactivity().hoverMode('single');

    chart.container('column');

    
    chart.draw();
});