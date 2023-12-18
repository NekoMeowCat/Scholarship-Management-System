<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-hidden">
        <div class="flex">
            <x-sidebar></x-sidebar>
            <div class="min-h-screen w-full bg-gray-50 m-4 block">
                <div class="bg-gray-white rounded-md shadow-2xl">
                    @if($student->scholarship && $student->scholarship->name == 'SM')
                        <div class="w-full block md:flex bg-gray-50 rounded-md">
                            <div class="flex justify-center items-center md:border-r-4 border-[#E7BCDE] my-6 md:w-1/2">
                                <img src="{{ asset('storage/images/sm.png') }}" alt="" class="h-64">
                            </div>
                            <div class="block h-64 w-1/2">
                                <div class="flex justify-center items-center m-2 h-full">
                                    <span class="px-6 font-zilla text-5xl md:text-8xl uppercase text-[#1e398d] tracking-normal font-medium md:font-semibold text-center">
                                        supermalls
                                        <small class="block text-2xl text-[#1e398d]">we got it all for you</small>
                                    </span>
                                </div>                            
                            </div>
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'CHED')
                        <div class="w-full block md:flex bg-gray-50 rounded-md">
                            <div class="flex justify-center items-center md:border-r-4 border-[#fcd116] my-6 md:w-1/2">
                                <img src="{{ asset('storage/images/cc.png') }}" alt="" class="h-64">
                            </div>
                            <div class="block h-64 md:w-1/2">
                                <div class="flex justify-center items-start md:items-center m-2 h-full">
                                    <span class="px-6 font-zilla text-4xl md:text-6xl uppercase text-[#0038a8] tracking-normal font-medium md:font-semibold text-center">
                                        The Commission on Higher Education
                                    </span>
                                </div>                             
                            </div>
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'SAGAP')
                        <div class="w-full block md:flex bg-gray-50 rounded-md">
                            <div class="flex justify-center items-center md:border-r-4 border-[#019247] my-6 md:w-4/6">
                                <img src="{{ asset('storage/images/yes.png') }}" alt="" class="h-64">
                            </div>
                            <div class="block h-64">
                                <div class="flex justify-center items-center m-2 h-full">
                                    <span class="px-6 font-zilla text-5xl md:text-6xl uppercase text-[#003946] tracking-normal font-medium md:font-semibold text-center">
                                        father saturnino urios university
                                        <small class="block text-2xl text-[#019247]">luceat lux vestra</small>
                                    </span>
                                </div>                            
                            </div>
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'Sunlife')
                        <div class="w-full block md:flex bg-gray-50 rounded-md">
                            <div class="flex justify-center items-center md:border-r-4 border-[#eaab00] my-6 md:w-1/2">
                                <img src="{{ asset('storage/images/Sunlife.png') }}" alt="" class="h-64">
                            </div>
                            <div class="block h-64 md:w-1/2">
                                <div class="flex justify-center items-start md:items-center m-2 h-full">
                                    <span class="px-6 font-zilla text-4xl md:text-6xl uppercase text-[#003946] tracking-normal font-medium md:font-semibold text-center">
                                        Life's Brighter Under The Sun
                                    </span>
                                </div>                             
                            </div>
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'TES')
                        <div class="w-full block md:flex bg-gray-50 rounded-md">
                            <div class="flex justify-center items-center border-r-4 border-[#f58632] my-6 w-4/6">
                                <img src="{{ asset('storage/images/tes.png') }}" alt="" class="h-64">
                            </div>
                            <div class="block h-64">
                                <div class="flex justify-center items-center m-2 h-full">
                                    <span class="px-6 font-zilla text-4xl md:text-6xl uppercase text-gray-800 tracking-normal font-medium md:font-semibold text-center">
                                        Tertiary Education Subsidy
                                    </span>
                                </div>                             
                            </div>
                        </div>
                    @elseif($student->scholarship && $student->scholarship->name == 'TESDA')
                        <div class="w-full block md:flex bg-gray-50 rounded-md">
                            <div class="flex justify-center items-center border-r-4 border-[#1c3148] my-6 w-4/6">
                                <img src="{{ asset('storage/images/tesda.png') }}" alt="" class="h-64">
                            </div>
                            <div class="block h-64">
                                <div class="flex justify-center items-center m-2 h-full">
                                    <span class="px-6 font-zilla text-4xl md:text-6xl uppercase text-[#1e6392] tracking-normal font-medium md:font-semibold text-center">
                                        The Technical Education and Skills Development Authority
                                    </span>
                                </div>                             
                            </div>
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
                    @error('status')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <form action="{{ route('students.update', ['student' => $student->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="bg-gray-50 my-2 rounded-md shadow-2xl">
                        <div class="flex">
                            <div class="w-full flex bg-gray-50 justify-start lg:justify-end p-4">
                                <select name="status" id="status" class="mr-1 py-3 px-4 pe-9 block text-black border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    <option value="verified" {{ $student->status === 'verified' ? 'selected' : '' }}>Verified</option>
                                    <option value="not_verified" {{ $student->status === 'not_verified' ? 'selected' : '' }}>Not Verified</option>
                                    <option value="graduated" {{ $student->status === 'graduated' ? 'selected' : '' }}>Graduated</option>
                                </select>
                                <select name="semester" id="semester" class="py-3 px-4 pe-9 block text-black border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    <option value="1st Semester" {{ $student->semester === '1st Semester' ? 'selected' : '' }}>1st Semester</option>
                                    <option value="2nd Semester" {{ $student->semester === '2nd Semester' ? 'selected' : '' }}>2nd Semester</option>
                                </select>
                            </div>
                        </div>
                        <div class="block md:flex bg-gray-50 min-h-screen s">
                            <div class="p-10 flex justify-center items-center md:items-start">
                                <div class="h-64 w-64 rounded-full bg-gray-400 border-gray-50 border-4 flex justify-center relative">
                                    <img src="{{ asset('storage/images/unknown.png') }}" alt="" class="p-1 object-cover w-full h-full rounded-full text-white">                                    
                                    <label for="fileInput" class="absolute inset-0 w-full h-full cursor-pointer flex items-center justify-center"></label>
                                    <input name="student_image" type="file" id="fileInput" class="hidden" accept="image/*">
                                </div> 
                            </div>
                            <div class="md:m-4 min-h-screen w-full rounded-md">
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                First Name
                                            </label>
                                            <input type="text" name="name" id="name" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->name }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                Middle Name
                                            </label>
                                            <input type="text" name="middle_name" id="middle_name" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->middle_name }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                Last Name
                                            </label>
                                            <input type="text" name="last_name" id="last_name" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->last_name }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                id no
                                            </label>
                                            <input type="text" name="id_number" id="id_number" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->id_number }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                year level
                                            </label>
                                            <input type="text" name="year_level" id="year_level" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->year_level }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                gender
                                            </label>
                                            <input type="text" name="gender" id="gender" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->gender }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                course
                                            </label>
                                            <input type="text" name="course" id="course" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->course }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                email
                                            </label>
                                            <input type="email" name="email" id="email" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->email }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                date of birth
                                            </label>
                                            <input type="date" name="date_of_birth" id="date_of_birth" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->date_of_birth }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" for="grid-password">
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
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" for="grid-password">
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
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                phone no.
                                            </label>
                                            <input type="text" name="phone_number" id="phone_number" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                address
                                            </label>
                                            <input type="text" name="address" id="address" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->address }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                guardian
                                            </label>
                                            <input type="text" name="contact_person" id="contact_person" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->contact_person }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                guardian no.
                                            </label>
                                            <input type="text" name="contact_person_number" id="contact_person_number" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->contact_person_number }}">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-2">
                                        <div class="relative w-full mb-6">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-1" htmlfor="grid-password">
                                                Graduated
                                            </label>
                                            <input type="date" name="graduated_at" id="graduated_at" class="border-0 px-3 py-3 text-gray-800 font-poppins bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $student->scholarDetails->graduated_at }}">
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
                            <button type="submit" class="py-3 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#164863] text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                                Update
                            </button>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>