<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.children_vaccination_title') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Tajawal&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', 'Tajawal', sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 25px;
            padding: 50px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h1, h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
            font-weight: bold;
        }
        p {
            text-align: center;
            font-size: 18px;
            margin-bottom: 30px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 15px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            font-size: 15px;
        }
        th {
            background: #26a69a;
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f0f8ff;
        }
        .note {
            margin-top: 20px;
            font-size: 15px;
            color: #444;
            text-align: center;
        }
        .highlight {
            color: #d81b60;
            font-weight: bold;
        }
        .alert {
            border-radius: 10px;
            font-size: 16px;
        }
        .back-button {
            display: block;
            width: 200px;
            margin: 20px auto 0;
            padding: 12px 20px;
            text-align: center;
            background-color: #26a69a;
            color: #fff;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .back-button:hover {
            background-color: #00796b;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<div class="container">
    <h2>{{ __('messages.my_children_info') }}</h2>
    <p>{{ __('messages.children_list_note') }}</p>

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    @if($children->isEmpty())
        <div class="alert alert-info text-center">
            {{ __('messages.no_children_registered') }}
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>{{ __('messages.child_name') }}</th>
                    <th>{{ __('messages.birth_date') }}</th>
                    <th>{{ __('messages.address') }}</th>
                    <th>{{ __('messages.father_name') }}</th>
                    <th>{{ __('messages.mother_name') }}</th>
                    <th>{{ __('messages.vaccine_type') }}</th>
                    <th>{{ __('messages.vaccination_date') }}</th>
                    <th>{{ __('messages.health_center') }}</th>
                    <th>{{ __('messages.next_visit') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($children as $child)
                    <tr>
                        <td>{{ $child->namechild }}</td>
                        <td>{{ $child->birthchild }}</td>
                        <td>{{ $child->addresschild }}</td>
                        <td>{{ $child->father }}</td>
                        <td>{{ $child->mother }}</td>
                        <td>{{ $child->vaccchild }}</td>
                        <td>{{ $child->datechild }}</td>
                        <td>{{ $child->healthcenter }}</td>
                        <td>{{ $child->nextvisit }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <h1>{{ __('messages.children_vaccination_schedule') }}</h1>
    <p>{{ __('messages.schedule_note') }}</p>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>{{ __('messages.visit') }}</th>
                <th>{{ __('messages.child_age') }}</th>
                <th>{{ __('messages.recommended_vaccine') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ __('messages.first') }}</td>
                <td>{{ __('messages.at_birth') }}</td>
                <td>{{ __('messages.bcg_hepb') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.second') }}</td>
                <td>{{ __('messages.three_months') }}</td>
                <td>{{ __('messages.pentavalent_polio') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.third') }}</td>
                <td>{{ __('messages.five_months') }}</td>
                <td>{{ __('messages.tetravalent_polio') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.fourth') }}</td>
                <td>{{ __('messages.seven_months') }}</td>
                <td>{{ __('messages.pentavalent_oralpolio') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.fifth') }}</td>
                <td>{{ __('messages.twelve_months') }}</td>
                <td>{{ __('messages.mmr_oralpolio_vitamin') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.sixth') }}</td>
                <td>{{ __('messages.eighteen_months') }}</td>
                <td>{{ __('messages.tetravalent_oralpolio_mmr_vitamin') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.seventh') }}</td>
                <td>{{ __('messages.first_grade') }}</td>
                <td>{{ __('messages.dtp_oralpolio_meningitis') }}</td>
            </tr>
            <tr>
                <td>{{ __('messages.eighth') }}</td>
                <td>{{ __('messages.sixth_grade') }}</td>
                <td>{{ __('messages.tdap_teen') }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <p class="note">
        <span class="highlight">{{ __('messages.tetravalent') }}</span><br>
        <span class="highlight">{{ __('messages.mmr') }}</span>
    </p>

    <a href="javascript:history.back()" class="back-button">&#8592; {{ __('messages.go_back') }}</a>
</div>
</body>
</html>