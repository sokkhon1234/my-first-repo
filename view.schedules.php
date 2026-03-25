<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>តារាងពេលវេលាជើងហោះហើរ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Kantumruy Pro', sans-serif; background-color: #f8f9fa; }
        .schedule-card { border: none; border-radius: 15px; overflow: hidden; }
        .table-thead { background-color: #003366; color: white; }
        .status-on-time { color: #28a745; font-weight: bold; }
        .status-delayed { color: #ffc107; font-weight: bold; }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <h3><i class="fas fa-calendar-alt text-primary"></i> តារាងពេលវេលាជើងហោះហើរ</h3>
        </div>
        <div class="col-md-6 text-end">
            <button class="btn btn-outline-primary btn-sm" onclick="window.location.reload();">
                <i class="fas fa-sync"></i> ធ្វើបច្ចុប្បន្នភាព
            </button>
        </div>
    </div>

    <div class="card shadow-sm schedule-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-thead">
                        <tr>
                            <th class="ps-4">លេខជើងហោះហើរ</th>
                            <th>មកពី</th>
                            <th>ទៅកាន់</th>
                            <th>ម៉ោងចេញដំណើរ</th>
                            <th>ស្ថានភាព</th>
                            <th class="text-center">សកម្មភាព</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // សន្មតថាអ្នកមានទិន្នន័យក្នុង Array (ក្នុងករណីពិតវាទាញចេញពី Database)
                        $schedules = [
                            ["id" => 1, "flight" => "LQ901", "from" => "Phnom Penh", "to" => "Bangkok", "time" => "08:30 AM", "status" => "On Time"],
                            ["id" => 2, "flight" => "VN652", "from" => "Siem Reap", "to" => "Hanoi", "time" => "10:15 AM", "status" => "Delayed"],
                            ["id" => 3, "flight" => "KA208", "from" => "Phnom Penh", "to" => "Seoul", "time" => "11:45 PM", "status" => "On Time"]
                        ];

                        foreach ($schedules as $row): 
                        ?>
                        <tr class="align-middle">
                            <td class="ps-4 fw-bold text-primary"><?= $row['flight'] ?></td>
                            <td><?= $row['from'] ?></td>
                            <td><?= $row['to'] ?></td>
                            <td><i class="far fa-clock"></i> <?= $row['time'] ?></td>
                            <td>
                                <?php if($row['status'] == 'On Time'): ?>
                                    <span class="badge bg-success-soft text-success border border-success">ទាន់ពេល</span>
                                <?php else: ?>
                                    <span class="badge bg-warning-soft text-warning border border-warning">យឺតយ៉ាវ</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info text-white"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>