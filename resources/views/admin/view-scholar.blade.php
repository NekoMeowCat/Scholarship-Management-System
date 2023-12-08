<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-hidden">
        <div class="flex">
            <x-sidebar></x-sidebar>
            <div class="min-h-screen w-full bg-gray-50 m-4 block">
                <div class="bg-gray-white rounded-md shadow-2xl">
                    @if($student->scholarship && $student->scholarship->name == 'SM')
                        <div class="block md:flex w-full p-1">
                            <img src="{{ asset('storage/images/sm.png') }}" alt="" class="h-48 w-48 flex justify-center ml-16 lg:ml-10">
                            <div class="block md:py-6">
                                <div class="flex justify-center m-2 h-auto">
                                    <span class="text-5xl md:text-8xl uppercase text-blue-800 tracking-tighter font-extrabold">
                                        Supermalls
                                    </span>
                                </div>
                                <div class="m-2 h-auto flex justify-center items-center">
                                    <span class="md:text-2xl uppercase text-blue-700 tracking-tighter font-medium">
                                        Everything's here
                                    </span>
                                </div>
                            </div>
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'Chedar')
                        <div class="w-full flex">
                            <img src="{{ asset('storage/images/chedar.png') }}" alt="" class="">
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'Sunlife')
                        <div class="w-full flex">
                            <img src="{{ asset('storage/images/sunlife.png') }}" alt="" class="h-64 p-4">
                        </div>
                    @endif
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('students.update', ['student' => $student->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="bg-gray-100 my-2 rounded-md shadow-2xl">
                        <div class="w-full flex bg-gray-100 justify-start lg:justify-end p-4">
                        <select name="status" id="status" class="py-3 px-4 pe-9 block text-black border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option value="verified" {{ $student->status === 'verified' ? 'selected' : '' }}>Verified</option>
                            <option value="not_verified" {{ $student->status === 'not_verified' ? 'selected' : '' }}>Not Verified</option>
                            <option value="graduated" {{ $student->status === 'graduated' ? 'selected' : '' }}>Graduated</option>
                        </select>
                        </div>  
                        <div class="block md:flex bg-gray-100 min-h-screen s">
                            <div class="p-10 flex justify-center items-center md:items-start">
                                <div class="h-64 w-64 rounded-full bg-gray-400 border-gray-50 border-4 flex justify-center relative">
                                    <img src="{{ asset('storage/images/unknown.png') }}" alt="" class="p-1 object-cover w-full h-full rounded-full text-white">                                    
                                    <label for="fileInput" class="absolute inset-0 w-full h-full cursor-pointer flex items-center justify-center"></label>
                                    <input name="scholar_image" type="file" id="fileInput" class="hidden" accept="image/*">
                                </div> 
                            </div>
                            <div class="md:m-4 min-h-screen bg-yellow-400 w-full rounded-md">
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                First Name
                                            </label>
                                            <input type="text" name="name" id="name" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->name }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                Middle Name
                                            </label>
                                            <input type="text" name="middle_name" id="middle_name" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->middle_name }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                Last Name
                                            </label>
                                            <input type="text" name="last_name" id="last_name" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->last_name }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                id no
                                            </label>
                                            <input type="text" name="id_number" id="id_number" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->id_number }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                year level
                                            </label>
                                            <input type="text" name="year_level" id="year_level" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->year_level }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                gender
                                            </label>
                                            <input type="text" name="gender" id="gender" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->gender }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                course
                                            </label>
                                            <input type="text" name="course" id="course" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->course }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                email
                                            </label>
                                            <input type="email" name="email" id="email" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->email }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                date of birth
                                            </label>
                                            <input type="date" name="date_of_birth" id="date_of_birth" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->date_of_birth }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" for="grid-password">
                                                office assignment
                                            </label>
                                            <select name="department_id" id="department_id" class="w-full py-2 px-4 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                                @foreach($departments as $department)
                                                    <option value="{{ $department->id }}" {{ $department->id == $student->department->id ? 'selected' : '' }}>
                                                        {{ $department->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" for="grid-password">
                                                scholarship
                                            </label>
                                            <select name="scholarship_id" id="scholarship_id" class="w-full py-2 px-4 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                                @foreach($scholarships as $scholarship)
                                                    <option value="{{ $scholarship->id }}" {{ $scholarship->id == $student->scholarship->id ? 'selected' : '' }}>
                                                        {{ $scholarship->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                phone no.
                                            </label>
                                            <input type="text" name="phone_number" id="phone_number" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                address
                                            </label>
                                            <input type="text" name="address" id="address" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->address }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                guardian
                                            </label>
                                            <input type="text" name="contact_person" id="contact_person" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->contact_person }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                guardian no.
                                            </label>
                                            <input type="text" name="contact_person_number" id="contact_person_number" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->contact_person_number }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-1" htmlfor="grid-password">
                                                Graduated 
                                            </label>
                                            <input type="text" name="graduate" id="graduate" class="border-0 px-3 py-3 text-gray-400 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->contact_person_number }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-5 gap-2 p-2">
                                    <div class="h-48 w-full border-4 block">
                                        <img src="{{ asset('storage/images/unknown.png') }}" alt="" class="h-full">
                                    </div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                    <div class="h-48 w-full border-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end p-4">
                            <button type="submit" class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                                Update
                            </button>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>