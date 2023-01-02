<html>
    <head>
    <link rel="stylesheet" type="text/css" href={{url('css/liststyle.css')}}>
   
</head>
<body>

    <div class="listbox">
    <h2 class="font-semibold text-l text-gray-800 leading-tight h-4">
            Staff applying in the School
        </h2>
        
        <table>
            <tr>
                <th>Staff ID </th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
               <th>Gender </th>
               <th>Action </th>
                
            </tr>
            @foreach ($applicants as $applicant)
            <tr class="p-2">
                <td class="p-2">{{ $applicant->id }}</td>
                <td class="p-2">{{ $applicant->name }}</td>
                <td class="p-2">{{ $applicant->email }}</td>
                <td class="p-2">{{ $applicant->department }}</td>
                <td class="p-2">{{ $applicant->gender }}</td>
                <td class="p-2">
<form method="POST" action="/applicants/{{ $applicant->id }}">
                @csrf 
                @method('PUT')
                
                <input type="hidden" name="status" value=0>
                    <button> Accept </button>
</form>
                </td>
                <td class="p-2">
<form method="POST" action="/applicants/{{ $applicant->id }}">
                @csrf
                @method('DELETE')

                    <button> Decline </button>
</form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
</body>
</html>