
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

            <div  style="padding-top: 50px;"  >
                <table   style="float: left   !important; width:auto;"  >
                    <tr  style="background-color: black;"  gap="5px">
                        <th style="padding: 10px;"  >Vistor Name</th>
                        <th style="padding: 10px;" gap="6px;" >Email</th>
                        <th  style="padding: 10px;"  gap="6px;" >Phone</th>
                        <th  style="padding: 10px;"  gap="6px;"> Date </th>
                        <th style="padding: 10px;" gap="6px;" >Doctor Name</th>
                        <th  style="padding: 10px;" gap="6px;" >Message</th>
                        <th style="padding: 10px;" gap="6px;" >Status</th>
                        <th style="padding: 10px;" gap="6px;" >Approved</th>
                        <th style="padding: 10px;" gap="6px;" >Canceled</th>
                        <th style="padding: 10px;" gap="6px;" >Send Mail</th>

                    </tr>


                    @foreach ( $data as $appoint )
                    <tr  align="center"   style="background-color: dodgerblue;" >

                    <td >{{ $appoint->name }}</td>
                    <td  >     {{ $appoint->email }}</td>
                    <td  >   {{ $appoint->phone }} </td>
                    <td   >  {{ $appoint->doctor }}</td>
                    <td    >   {{ $appoint->date }} </td>
                    <td    >  {{ $appoint->message }} </td>
                    <td    >  {{ $appoint->status }} </td>
                    <td>
                          <a  class="btn btn-success"  href="{{ url('approved',$appoint->id) }}">Approved</a>
                    </td>
                    <td>
                          <a  class="btn btn-danger"  href="{{ url('canceled',$appoint->id) }}">Canceled</a>
                         </td>


                         <td>
                            <a  class="btn btn-success"  href="{{ url('emailview',$appoint->id) }}">Send Mail</a>
                           </td>



                </tr>
                @endforeach
                </table>
            </div>
            </div>




      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

</body>
</html>


