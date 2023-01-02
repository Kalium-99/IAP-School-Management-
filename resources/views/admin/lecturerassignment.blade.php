<html>
    <head>
    <link rel="stylesheet" type="text/css" href={{url('css/liststyle.css')}}>
   
</head>
<body>
 

    <div class="listbox">
    <h2 class="font-semibold text-l text-gray-800 leading-tight h-4">
            Lecturers' Assignment
        </h2>
        
        <table>
            <tr>
                <th>Lecturer ID </th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone number </th>
               <th>Gender </th>
               
                
            </tr>
            @foreach ($lecturers as $lecturer)
            <tr class="p-2">
                <td class="p-2">{{ $lecturer->id }}</td> 
                <td class="p-2">{{ $lecturer->lec_name }}</td>
                <td class="p-2">{{ $lecturer->email }}</td>
                <td class="p-2">{{ $lecturer->phone_no }}</td>
                <td class="p-2">{{ $lecturer->gender }}</td>
                <td class="p-2">

       
                <div class="form-group col-md-6">
                 




</div>
<form method="POST" action="/lecturers/{{ $lecturer->id }}">
                @csrf
                @method('POST')

                <label for= "unit_name" > Unit </label>
           <select name="unit_name" >
            <option value="OOP" > OOP </option>
            <option value="Data structures" >Data Structures </option>
            <option value="comm skills" > Communication skills </option>
            <option value="Discrete Maths" > Discrete Mathematics  </option>
</select>
                
                
          <!--      <input type="hidden" name="status" value=0> -->
          <input type="hidden"  name="lec_id"
                    value="{{$lecturer->id}}" >

                    <input type="hidden"  name="lec_name"
                    value="{{$lecturer->lec_name}}" >

                    <input type="hidden"  name="email"
                    value="{{$lecturer->email}}" >

                    <input type="hidden"  name="phone_no"
                    value="{{$lecturer->phone_no}}" >

                    <input type="hidden"  name="gender"
                    value="{{$lecturer->gender}}" >   

             

                    
                    <button> Assign </button>

                </td>
              
            </tr>
            @endforeach
        </table>
</form>
    </div>
</div>

</body>
</html>