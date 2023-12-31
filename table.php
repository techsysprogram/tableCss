<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table 01</title>
    
    <!--los styles lo pongo aqui porque sinon tendre que ponerlo en los styles aditionales de wordpress o n la carpeta style de de css -->
    
    <style>
        * {
            /* Change your font family */
            font-family: sans-serif;
        }

        .content-table {
            border-collapse: collapse;
            /*margin: 25px 0;*/
            font-size: 0.9em;
            min-width: 300px;
            
            max-width: 800px;

            border-radius: 6px 6px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

            /* esto es para dar un borde de pagine muy bueno
            border-bottom-right-radius: 50px;
            */
        }

        .content-table thead tr {
            background-color: #460fdb;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            /*border-bottom: 2px solid #009879;*/
        }

        .content-table tbody tr.active-row {
            /*font-weight: bold; commentaire*/
            color: #e9f1f0;
            background-color: #009879;
        }

    </style>
</head>

<body>
    <div class="container">
        <table class="content-table">
            <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Domenic</td>
                <td>88,110</td>
                <td>dcode</td>
            </tr>
            <tr class="active-row">
                <td>2</td>
                <td>Sally</td>
                <td>72,400</td>
                <td>Students</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nick</td>
                <td>52,300</td>
                <td>dcode</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Nickooo</td>
                <td>52,300</td>
                <td>dcode</td>
            </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>
