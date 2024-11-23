
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

<style>
  label{
    display: inline-block;
    width: 200px;
  }
</style>

    @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
    </head>
    <body>
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">




          <div  class="container" align="center"  style="padding: 100px;"  >


            @if(session()->has('message'))

            <div class="alert alert-success  alert-dismissible fade show">

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" >   </button>




                {{ session()->get('message') }}

            </div>
        @endif

            <form action="{{ url('editdoctor',$data->id) }}"  method="POST"  enctype="multipart/form-data" >

              @csrf
              <div  style="padding:15px;" >
                <label for="Name">Doctor Name</label>
                <input type="text"  name="name"  style="color: black"  value="{{ $data->name }}" >
              </div>

              <div  style="padding:15px;" >
                <label for="phone">Phone</label>
                <input type="number"  name="phone"  style="color: black"  value="{{ $data->phone }}" >
              </div>

              <div  style="padding:15px;" >

                <label for="speciality">Speciality</label>
                <input type="text"  name="speciality"   style="color: black"  value="{{ $data->speciality }}" >
              </div>
              <div  style="padding:15px;" >
                <label for="room">Room</label>
                <input type="text"  name="room"   style="color: black"  value="{{ $data->room }}" >
              </div>
              <div  style="padding:15px;" >
                <label for=" old image">  Old Image</label>
              <img   height="130px" width="130px"  src="doctorimage/{{ $data->image }}" alt="">
              </div>

              <div  style="padding:5px;" >
                <label for="change image">Change Image</label>
                <input type="file"  name="file"   >
              </div>

              <div  style="padding:15px;" >

                <input type="submit"  class="btn btn-primary"   >
              </div>
            </form>

          </div>
        </div>


      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

</body>
</html>

