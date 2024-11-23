
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper">


            <div class="container"  align="center" style="padding-top: 100px"  >

                @if(session()->has('message'))

                <div class="alert alert-success  alert-dismissible fade show">

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" >   </button>




                    {{ session()->get('message') }}

                </div>
            @endif


                <form action="{{ url('upload_doctor') }}"  method="POST"  enctype="multipart/form-data" >
                    @csrf
                    <div  style="padding: 15px;">
                        <label for="Doctor Name">Doctor Name</label>
                        <input   style="color: black;" type="text" name="name"   placeholder="Write the name !"  required >
                    </div>
                    <div  style="padding: 15px;"
                    style="color: black;">
                        <label    for="Phone">Phone</label>
                        <input   style="color: black;" type="number" name="phone"  placeholder="Write the phone number here !" required  >
                    </div>
                    <div  style="padding: 15px;">
                        <label for="Speciality">Speciality</label>
                        <select name="speciality" id=""  style="color: black;  width:200px;"  required>
                            <option value="--select--">--SELECT--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="general physician">General Physician</option>


                        </select>
                    </div>

                    <div  style="padding: 15px;">
                        <label for="room no">Room NO</label>
                        <input   style="color: black;" type="text" name="room"  placeholder="Write the room number here ! !" required >
                    </div>
                    <div  style="padding: 15px;">
                        <label for="Doctor image">Doctor Image</label>
                        <input type="file"   name="file"  required>

                    </div>
                    <div  style="padding: 15px;">

                        <input type="submit"   class="btn btn-success">

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
