<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
</head>

<body>
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

        <div align="center" cellspacing="30" style="padding-top: 60px;  border-spacing:30px; ">
            <table cellspacing="20">
                <tr style="background-color: black;">
                    <th style="padding: 10px;">Doctor Name</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Speciality</th>
                    <th style="padding: 10px;"> Room NO </th>
                    <th style="padding: 10px;">Image</th>
                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>

                </tr>

                @foreach ($data as $doctor)
                    <tr align="center" style="background-color: dodgerblue;  ">
                        <td style="padding: 5px;">{{ $doctor->name }}</td>
                        <td style="padding: 5px;">{{ $doctor->phone }}</td>
                        <td style="padding: 5px;">{{ $doctor->speciality }}</td>
                        <td style="padding: 5px;">{{ $doctor->room }}</td>
                        <td style="padding: 5px;"> <img height="80px" width="80px"
                                src="doctorimage/{{ $doctor->image }}" alt=""> </td>
                                <td><a   onclick="return confirm('Are You Sure To Delete This')"  class="btn btn-danger"   href="{{ url('deletedoctor',$doctor->id) }}">Delete</a> </td>
                                <td>  <a   class="btn btn-success" href="{{ url('updatedoctor',$doctor->id) }}"> Update</a> </td>

                    </tr>
                @endforeach

        </div>
        </table>

    </div>




    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

</body>

</html>
