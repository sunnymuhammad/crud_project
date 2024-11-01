
    <div class="max-w-[1300px] mx-auto p-4">
        <h1 class="text-center text-[40px] font-bold">CRUD Operation</h1>
        <div class="mt-[20px] max-w-[1300px] flex justify-center ">
            <a href=" {{route('create')}} " class="bg-[#3f3fda] text-white flex items-center h-[40px] min-[600px]:p-2 rounded-md">Create</a>
                <table>
                    <thead>
                       <tr class="border-b  border-gray-300">
                           <th class="max-[600px]:px-0 px-4  py-2">Sl</th>
                           <th class="max-[600px]:px-0 px-4  py-2">First Name</th>
                           <th class="max-[600px]:px-0 px-4  py-2">Last Name</th>
                           <th class="max-[600px]:px-0 px-4  py-2">Email</th>
                           <th class="max-[600px]:px-0 px-4  py-2">Password</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($users as $item)
                       <tr class=" border-b border-gray-300">
                           <th class="max-[600px]:px-0 px-4 py-2"> {{$loop->iteration}} </th>
                           <td class="max-[600px]:px-0 px-4 py-2"> {{$item->fname}}</td>
                           <td class="max-[600px]:px-0 px-4 py-2"> {{$item->lname}}</td>
                           <td class="max-[600px]:px-0 px-4 py-2"> {{$item->email}}</td>
                           <td class="max-[600px]:px-0 px-4 py-2"> {{$item->password}}</td>
                           <td class="max-[600px]:px-0 px-4 py-2 whitespace-nowrap max-[706px]:flex flex-col">
                               <a href="{{route('show',$item->id)}}" class="inline bg-green-600 px-1 py-1 m-1 rounded-sm">
                                   <button>Edit</button>
                               </a>

                               <form action=" {{route('del')}} " method="POST" onsubmit="return confirm('Are you Sure to Delete?')" class="inline bg-red-400 px-1 py-1 rounded-sm">
                                   @csrf
                                    <input type="text" name="user_id" hidden value={{$item->id}}>
                                   <button>Delete</button>

                               </form>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
        </div>
        </div>




