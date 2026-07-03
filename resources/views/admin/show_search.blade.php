<!DOCTYPE html>
<html lang="en">
  <head>

  <title>Child Search Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Tajawal&display=swap" rel="stylesheet">
    <style type="text/css">

         label{
            display: inline-block;
            width:200px;
        }

       
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 25px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
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
        .alert {
            border-radius: 10px;
            font-size: 16px;
            margin-top: 20px;
        }
        .back-button {
            display: block;
            width: 200px;
            margin: 30px auto 0;
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

    <!-- Required meta tags -->
     

    
    @include('admin.css')
  
    
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top:100px;">
                 <div class="container-scroller">
                                 

                    <h2>Child Search Result</h2>

                    @if($children)
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Child's ID</th>
                                        <th>Child's Name</th>
                                        <th>Date of Birth</th>
                                        <th>Address</th>
                                        <th>Father's Name</th>
                                        <th>Mother's Name</th>
                                        <th>Vaccine Type</th>
                                        <th>Vaccination Date</th>
                                        <th>Health Center</th>
                                        <th>Next Visit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $children->id }}</td>
                                        <td>{{ $children->namechild }}</td>
                                        <td>{{ $children->birthchild }}</td>
                                        <td>{{ $children->addresschild }}</td>
                                        <td>{{ $children->father }}</td>
                                        <td>{{ $children->mother }}</td>
                                        <td>{{ $children->vaccchild }}</td>
                                        <td>{{ $children->datechild }}</td>
                                        <td>{{ $children->healthcenter }}</td>
                                        <td>{{ $children->nextvisit }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-warning text-center">
                            No child found matching the search criteria.
                        </div>
                    @endif

                    <a href="{{ url('/searchchild') }}" class="back-button">&#8592; Back to Search</a>

                



                

                 </div>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
