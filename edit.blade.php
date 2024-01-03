<html>
   
   <head>
      <title>User Management | Edit</title>
   </head>
   
   <body>
      <form action = "{{ url('/update', $user->Id) }}" method = "POST">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = "text" name = "Name" value= "{{$user->Name}}">
               </td>
               <td>Email</td>
               <td>
                  <input type = "email" name = "Email" value= "{{$user->Email}}"> 
               </td>
               <td>Password</td>
               <td>
                  <input type = "text" name = "Password" value= "{{$user->Password}}"> 
               </td>
               <td>Username</td>
               <td>
                  <input type = "text" name = "Username" value= "{{$user->Username}}"> 
               </td>
               <td>Email</td>
               <td>
                  <input type = "email" name = "userEmail" value= "{{$user->Email}}"> 
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update User" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>
