<div class="max-w-[1300px] mx-auto p-4 min-[400px]:flex justify-center">
    <form action=" {{route('update')}} " method="post" class="space-y-4">

        @csrf
        <input type="text" name='user_id' hidden value={{$user_id}}>
        <label for="fname" class="block text-gray-700 font-semibold">Your First Name</label>
        <input type="text" name="fname" id="fname" class="border border-gray-800 w-full sm:w-[300px] md:w-[500px] lg:w-[700px] xl:w-[700px] rounded-md p-2">


        <label for="lname" class="block text-gray-700 font-semibold">Your Last Name</label>
        <input type="text" name="lname" id="lname" class="border border-gray-400 w-full sm:w-[300px] md:w-[500px] lg:w-[700px] rounded-md p-2">

        <label for="email" class="block text-gray-700 font-semibold">Your Email Address</label>
        <input type="email" name="email" id="email" class="border border-gray-400 w-full sm:w-[300px] md:w-[500px] lg:w-[700px] rounded-md p-2">

        <label for="password" class="block text-gray-700 font-semibold">Your Password</label>
        <input type="password" name="password" id="password" class="border border-gray-400 w-full sm:w-[300px] md:w-[500px] lg:w-[700px] rounded-md p-2">

        <button class="block bg-green-500 px-2 py-1 rounded-sm">Update</button>
    </form>
</div>
