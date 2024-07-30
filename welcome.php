<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

require_once 'config.php';

// Display the message if it exists
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-info">' . htmlspecialchars($_SESSION['message']) . '</div>';
    unset($_SESSION['message']);
}

// Change ASC to DESC to sort in descending order
$query = "SELECT * FROM contact ORDER BY id DESC"; // Changed to DESC

$result = mysqli_query($link, $query);

if (!$result) {
    die('Query Failed: ' . mysqli_error($link));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .table th, .table td {
            text-align: center;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        @media (min-width: 1200px) {
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                /* max-width: 1215px; */
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</div>
                    <div class="card-body">
                        <a href="logout.php" class="btn btn-primary mb-3">Logout</a>
                        <div class="table-responsive">
                            <table id="personsTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $serialNo = 1;
                                    while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($serialNo++); ?></td>
                                        <td>
                                            <?php
                                            if ($row['current_datetime'] === '0000-00-00 00:00:00') {
                                                echo '';
                                            } else {
                                                $datetime = new DateTime($row['current_datetime']);
                                                echo htmlspecialchars($datetime->format('F j, Y, g:i:s a')); 
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td>
                                            <button class="btn btn-primary view-btn" 
                                                    data-ip="<?php echo htmlspecialchars($row['ip_address']); ?>" 
                                                    data-row="<?php echo htmlspecialchars(json_encode($row)); ?>">
                                                View
                                            </button>
                                            <a href="delete_contact.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr><th>ID</th><td id="modalId"></td></tr>
                            <tr><th>Date</th><td id="modalDate"></td></tr>
                            <tr><th>Name</th><td id="modalName"></td></tr>
                            <tr><th>Email</th><td id="modalEmail"></td></tr>
                            <tr><th>Phone</th><td id="modalPhone"></td></tr>
                            <tr><th>Scope</th><td id="modalScope"></td></tr>
                            <tr><th>Scopepoint</th><td id="modalScopepoint"></td></tr>
                            <tr><th>Interior Budget</th><td id="modalInteriorBudget"></td></tr>
                            <tr><th>IP Address</th><td id="modalIP"></td></tr>
                            <tr><th>Hostname</th><td id="modalHostname"></td></tr>
                            <tr><th>City</th><td id="modalCity"></td></tr>
                            <tr><th>Region</th><td id="modalRegion"></td></tr>
                            <tr><th>Country</th><td id="modalCountry"></td></tr>
                            <tr><th>Location</th><td id="modalLocation"></td></tr>
                            <tr><th>Organization</th><td id="modalOrganization"></td></tr>
                            <tr><th>Postal Code</th><td id="modalPostal"></td></tr>
                            <tr><th>Timezone</th><td id="modalTimezone"></td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#personsTable').DataTable({
                "paging": true,
                "searching": true,
                "info": true,
                "responsive": true,
                "order": [[0, 'desc']] // Sort by the first column (ID) in descending order
            });

            $('.view-btn').on('click', function() {
                var rowData = $(this).data('row');
                var ip = $(this).data('ip');
                
                $('#modalId').text(rowData.id);
                $('#modalDate').text(rowData.current_datetime);
                $('#modalName').text(rowData.name);
                $('#modalEmail').text(rowData.email);
                $('#modalPhone').text(rowData.phone);
                $('#modalScope').text(rowData.title);
                $('#modalScopepoint').text(rowData.project);
                $('#modalInteriorBudget').text(rowData.description);

                // Initialize IP info fields
                var ipFields = {
                    '#modalIP': 'IP address not found',
                    '#modalHostname': 'Hostname not found',
                    '#modalCity': 'City not found',
                    '#modalRegion': 'Region not found',
                    '#modalCountry': 'Country not found',
                    '#modalLocation': 'Location not found',
                    '#modalOrganization': 'Organization not found',
                    '#modalPostal': 'Postal code not found',
                    '#modalTimezone': 'Timezone not found'
                };
                
                for (var field in ipFields) {
                    $(field).text(ipFields[field]);
                }

                // Check if IP is valid before making the API call
                if (ip && ip !== 'undefined') {
                    $.getJSON(`https://ipinfo.io/${ip}?token=910396cee26488`, function(ipData) {
                        $('#modalIP').text(ipData.ip || 'IP address not found');
                        $('#modalHostname').text(ipData.hostname || 'Hostname not found');
                        $('#modalCity').text(ipData.city || 'City not found');
                        $('#modalRegion').text(ipData.region || 'Region not found');
                        $('#modalCountry').text(ipData.country || 'Country not found');
                        $('#modalLocation').text(ipData.loc || 'Location not found');
                        $('#modalOrganization').text(ipData.org || 'Organization not found');
                        $('#modalPostal').text(ipData.postal || 'Postal code not found');
                        $('#modalTimezone').text(ipData.timezone || 'Timezone not found');
                    }).fail(function() {
                        // Handle API call failure
                        for (var field in ipFields) {
                            $(field).text(ipFields[field]);
                        }
                    });
                } else {
                    // If IP is not valid, set default empty values
                    for (var field in ipFields) {
                        $(field).text(ipFields[field]);
                    }
                }

                $('#viewModal').modal('show');
            });
        });
    </script>
</body>
</html>
