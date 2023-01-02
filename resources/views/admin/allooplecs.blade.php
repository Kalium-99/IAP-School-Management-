<html>
    <head>
    <link rel="stylesheet" type="text/css" href={{url('css/liststyle.css')}}>
   
   </head>
   <body>
   
       <div class="listbox">
       <h2 class="font-semibold text-l text-gray-800 leading-tight h-4">
              All staff
           </h2>
        
        <table>
            <tr>
                <th>Lecturer ID </th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
               <th>Gender </th>
                
            </tr>
            @foreach ($ooplecs as $ooplec)
            <tr class="p-2">
                <td class="p-2">{{ $ooplec->lec_id }}</td>
                <td class="p-2">{{ $ooplec->lec_name }}</td>
                <td class="p-2">{{ $ooplec->email }}</td>
                <td class="p-2">{{ $ooplec->phone_no }}</td>
                <td class="p-2">{{ $ooplec->gender }}</td>
                <td class="p-2">
@endforeach
        </table>

    </div>
