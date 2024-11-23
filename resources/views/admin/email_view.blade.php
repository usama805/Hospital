



<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
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


                <form action="{{ url('sendemail',$data->id) }}"  method="POST"   >
                    @csrf
                    <div  style="padding: 15px;">
                        <label for="greeting">Greeting</label>
                        <input   style="color: black;" type="text" name="greeting"     required >
                    </div>
                    <div  style="padding: 15px;"
                    style="color: black;">
                        <label    for="body">Body</label>
                        <input   style="color: black;" type="text" name="body"   required  >
                    </div>

                    <div  style="padding: 15px;">
                        <label for="action text">Action Text</label>
                        <input   style="color: black;" type="text" name="action text"   required >
                    </div>

                    <div  style="padding: 15px;">
                        <label for="action url">Action Url</label>
                        <input   style="color: black;" type="text" name="action url"   required >
                    </div>

                    <div  style="padding: 15px;">
                        <label for="end part">End part</label>
                        <input   style="color: black;" type="text" name="end part"   required >
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
