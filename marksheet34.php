<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 20px auto;
            width: 90%;
            max-width: 1000px;
            border: 2px solid #000;
            padding: 20px;
            box-shadow: 0 0 10px #ccc;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        h1, h2 {
            margin: 5px;
        }
        .school-details {
            text-align: center;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 10px;
        }
        .table-container th, .table-container td {
            border: 1px solid #000;
            padding: 8px;
            font-size: 12px;
        }
        .table-container th {
            background-color: #f2f2f2;
        }
        .gradesheet {
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 20px;
            text-align: right;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h2>First Terminal Examination - 2081</h2>
            <h1>Gradesheet</h1>
        </div>

        <!-- School Details -->
        <div class="school-details">
            <p><strong>Kawashi Municipality</strong></p>
            <p>Namajagrishi (East of Barhaghari Sastra)</p>
            <p>Est. 2081</p>
            <p>(World Bank of Hazard Certified School)</p>
        </div>

        <!-- Personal Details -->
        <div>
            <p><strong>Class:</strong> 7</p>
            <p><strong>Name:</strong> [Student Name] &nbsp;&nbsp;&nbsp;&nbsp; <strong>Roll No:</strong> [Roll No]</p>
            <p><strong>Date of Birth:</strong> [DOB]</p>
        </div>

        <!-- Subject Marks Table -->
        <div class="gradesheet">
            <table class="table-container">
                <tr>
                    <th rowspan="2">SN</th>
                    <th rowspan="2">Subjects</th>
                    <th rowspan="2">Credit Hour</th>
                    <th colspan="2">Full Marks</th>
                    <th rowspan="2">Obtained Marks</th>
                    <th rowspan="2">Class Highest</th>
                    <th rowspan="2">Grade</th>
                    <th rowspan="2">Grade Point</th>
                </tr>
                <tr>
                    <th>TH</th>
                    <th>PR</th>
                </tr>
                <!-- Row Entries -->
                <tr>
                    <td>1</td>
                    <td>English</td>
                    <td>4</td>
                    <td>75</td>
                    <td>25</td>
                    <td>92</td>
                    <td>95</td>
                    <td>A+</td>
                    <td>4.0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mathematics</td>
                    <td>4</td>
                    <td>75</td>
                    <td>25</td>
                    <td>88</td>
                    <td>92</td>
                    <td>A</td>
                    <td>3.6</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Science</td>
                    <td>4</td>
                    <td>75</td>
                    <td>25</td>
                    <td>85</td>
                    <td>90</td>
                    <td>A</td>
                    <td>3.4</td>
                </tr>
            </table>
        </div>

        <!-- ECA and Grade Details -->
        <div>
            <h3>Details of ECA Grade</h3>
            <table class="table-container">
                <tr>
                    <th>SN</th>
                    <th>Category</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TT Theory</td>
                    <td>A</td>
                    <td>Excellent</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Physical</td>
                    <td>B+</td>
                    <td>Good</td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Signature of Principal</strong></p>
        </div>
    </div>
</body>
</html>
