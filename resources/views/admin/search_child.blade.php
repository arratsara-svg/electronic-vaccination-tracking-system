<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <style type="text/css">
        label{
            display: inline-block;
            width:200px;
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
                <form action="{{url('showsearch')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                    <label>number child</label>
                    <input type="number" style="color:black;" name="id" placeholder="ENTER THE number" Required>
                     </div>

                     <div style="padding:15px;">
                    <label>name child</label>
                    <input type="text" style="color:black;" name="namechild" placeholder="ENTER THE name" Required>
                     </div>

                    <div style="padding:15px;">
                   
                    <input type="submit" class="btn btn-success" value="search">
                    
                 </div>

                </form>


                @if(isset($child))
        @if($child)
            <h2>معلومات الطفل:</h2>
            <table border="1">
                <tr>
                    <th>الرقم</th>
                    <th>الاسم</th>
                    <th>تاريخ الميلاد</th>
                    <th>العنوان</th>
                    <th>الأب</th>
                    <th>الأم</th>
                    <th>اللقاح</th>
                    <th>تاريخ الجرعة</th>
                    <th>المركز الصحي</th>
                    <th>الزيارة القادمة</th>
                </tr>
                <tr>
                    <td>{{ $child->id }}</td>
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
            </table>
        @else
            <p>لا توجد بيانات مطابقة.</p>
        @endif
    @endif
    

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
