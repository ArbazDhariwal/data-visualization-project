<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Visualization</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin-bottom: 20px;
        }

        textarea {
            width: 100%;
            margin-bottom: 10px;
        }

        button {
            cursor: pointer;
        }

        #chart-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="h4">Database Information</h2>
        <table class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <td>DB Port:</td>
                    <td>{{ env('DB_PORT') }}</td>
                </tr>
                <tr>
                    <td>DB Name:</td>
                    <td>{{ env('DB_DATABASE') }}</td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>{{ env('DB_USERNAME') }}</td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>{{ env('DB_PASSWORD') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2 class="h4">Query Box</h2>
        <div class="mb-3">
            <textarea id="query-box" rows="4" class="form-control" placeholder="Enter your SQL query"></textarea>
        </div>
        <button class="btn btn-primary" onclick="executeQuery()">Execute Query</button>
    </div>

    <div class="container">
        <h2 class="h4">Visualization</h2>
        <div id="chart-container"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', { packages: ['corechart'] });

        function executeQuery() {
            const query = document.getElementById('query-box').value;

            fetch('execute-query', {
                method: 'POST',
                body: JSON.stringify({ query }),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Create a new DataTable object
                var chartData = new google.visualization.DataTable();

                // Add columns to the DataTable objectchartData.addColumn('string', 'Name');
                chartData.addColumn('number', 'Value Count');

                // Add rows to the DataTable object
                data.forEach(item => {
                    chartData.addRow([item.name, item.value_count]);
                });

                const options = {
                    title: 'Query Result Visualization',
                    width: 600,
                    height: 400
                };

                const chart = new google.visualization.BarChart(document.getElementById('chart-container'));
                chart.draw(chartData, options);
            })
            .catch(error => console.error('Error executing query:', error));
        }
    </script>
</body>
</html>
