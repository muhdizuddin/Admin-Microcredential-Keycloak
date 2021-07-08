<section class="content">
      <div class="container-fluid">
      <table id="customers">
        <tr>
            <th>Course Title</th>
            <th>Course Code</th>
            <th>Course Summary</th>
            <th>Category</th>
            <th>Approval</th>
        </tr>

        @foreach($create as $key => $data)
        <tr>
            <td>{{ $data->coursetitle }}</td>
            <td>{{ $data->coursecode }}</td>
            <td>{{ $data->courseinfo }}</td>
            <td>{{ $data->category }}</td>
            <td>
              <button onclick="location.href = 'http://localhost/moodle/webservice/rest/server.php?wstoken=2c8b1a438395fa3ff1d3e4b295b22ef2&wsfunction=core_course_create_courses&courses[0][fullname]={{ $data->coursetitle }}&courses[0][shortname]={{ $data->coursecode }}&courses[0][categoryid]={{ $data->category }}&courses[0][summary]={{ $data->courseinfo }}';" id="myButton" class="float-left submit-button" >Approve</button>
            </td>
        </tr>
        
        @endforeach

        </table>

      </div><!-- /.container-fluid -->
    </section>