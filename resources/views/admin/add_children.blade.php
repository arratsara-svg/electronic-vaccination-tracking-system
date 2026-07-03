<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <style type="text/css">
        label{
            display: inline-block;
            width:200px;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
            width: 50%;
            margin: 0 auto 20px;
            text-align: center;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
            width: 50%;
            margin: 0 auto 20px;
        }
     </style>
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

            {{-- عرض رسالة النجاح --}}
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            {{-- عرض رسائل الأخطاء --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style-type:none; padding:0;">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{url('upload_children')}}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div style="padding:15px;">
                    <label>Child name</label>
                    <input type="text" style="color:black;" name="namechild" placeholder="ENTER THE NAME" value="{{ old('namechild') }}">
                </div>

                  <div style="padding:15px;">
                    <label>user_email</label>
                    <input type="email" style="color:black;" name="user_email" placeholder="ENTER THE email" required value="{{ old('emailuser') }}">
                </div>

                 <div style="padding:15px;">
                    <label>Date of birth</label>
                    <input type="number" style="color:black;" name="birthchild" placeholder="ENTER THE BIRTH" value="{{ old('birthchild') }}">
                </div>
                <div style="padding:15px;">
                    <label>Child Address</label>
                    <input type="text" style="color:black;" name="addresschild" placeholder="ENTER THE ADDRESS" value="{{ old('addresschild') }}">
                </div>

                 <div style="padding:15px;">
                    <label>Father Name</label>
                    <input type="text" style="color:black;" name="father" placeholder="ENTER THE FATHER NAME" value="{{ old('father') }}">
                </div>

                 <div style="padding:15px;">
                    <label>Mother Name</label>
                    <input type="text" style="color:black;" name="mother" placeholder="ENTER THE MOTHER NAME" value="{{ old('mother') }}">
                </div>

                 <div style="padding:15px;">
                    <label>Child vacc </label>
                    <input type="text" style="color:black;" name="vaccchild" placeholder="ENTER THE CHILD VACC" value="{{ old('vaccchild') }}">
                </div>

                 <div style="padding:15px;">
                    <label>Date vacc</label>
                    <input type="date" style="color:black;" name="datechild" placeholder="ENTER THE CHILD DATE" value="{{ old('datechild') }}">
                </div>

                 <div style="padding:15px;">
                    <label>Health Center</label>
                    <input type="text" style="color:black;" name="healthcenter" placeholder="ENTER THE HEALTH CENTER" value="{{ old('healthcenter') }}">
                </div>

                <div style="padding:15px;">
                    <label>Next visit</label>
                    <input type="date" style="color:black;" name="nextvisit" placeholder="ENTER THE Next visit" value="{{ old('nextvisit') }}">
                </div>

                 <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>   
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>