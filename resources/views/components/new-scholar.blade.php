    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('admin.store-scholar') }}" enctype="multipart/form-data">
            @csrf
            <div class="py-6">
                <h6 class="text-black text-xl mt-3 mb-2 font-bold uppercase">
                    Personal Information
                </h6>
                <hr class=" border-b-1 border-blueGray-300">            
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Last Name
                        </label>
                        <input type="text" name="last_name" id="last_name" class="border-0 px-3 py-3 placeholder:text-slate-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter LastName">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Middle Name
                    </label>
                    <input type="text" name="middle_name" id="middle_name" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter MiddleName">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        First Name
                    </label>
                    <input type="text" name="name" id="name" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter FirstName">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            ID Number
                        </label>
                        <input type="text" name="id_number" id="id_number" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter ID Number">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Year Level
                        </label>
                        <input type="text" name="year_level" id="year_level" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Year Level">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="course">
                            Gender
                        </label>
                        <select name="gender" id="gender" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others.,">Others.,</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="course">
                            Course
                        </label>
                        <select name="course" id="course" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="" disabled selected>Select a course</option>
                            <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                            <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
                            <option value="Bachelor of Science in Physics">Bachelor of Science in Physics</option>
                            <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                        </select>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="course">
                            Semester
                        </label>
                        <select name="semester" id="semester" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="" disabled selected>Select a Semester</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                        </select>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="course">
                            School Year
                        </label>
                        <select name="school_year" id="school_year" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="" disabled selected>Select a School Year</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                        </select>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Email
                        </label>
                        <input type="email" name="email" id="email" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Email">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Address
                        </label>
                        <input type="text" name="address" id="address" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Address">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Date of Birth
                        </label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="1993-11-11">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Contact no.
                        </label>
                        <input type="text" name="phone_number" id="phone_number" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Contact No.">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlfor="grid-password">
                            Office Assignment
                        </label>
                        <select name="department_id" id="department_id" class="w-full py-3 px-4 pe-9 block border-gray-200 text-gray-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                            <option value="" selected disabled>Select a Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Guardian
                        </label>
                        <input type="text" name="contact_person" id="contact_person" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Guardian Name">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Guardian contact no.
                        </label>
                        <input type="text" name="contact_person_number" id="contact_person_number" class="border-0 px-3 py-3 placeholder:text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Guardian No">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Scholarship Grant
                        </label>
                        <select name="scholarship_id" id="scholarship_id" class="w-full py-3 px-4 pe-9 block border-gray-200 text-gray-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                            <option value="" selected disabled>Select a Scholarship</option>
                            @foreach($scholarships as $scholarship)
                                <option value="{{ $scholarship->id }}">{{ $scholarship->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>           
            </div>
            <div class="py-2">
                <h6 class="text-blueGray-400 text-xl mt-3 mb-2 font-bold uppercase">
                    requirements
                </h6>
                <hr class=" border-b-2 border-red-300 rounded-sm">            
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2 mt-4">
                <div class="flex">
                    <input type="checkbox" name="transcript_of_records" id="transcript_of_records" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Transcript of Records</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="certificate_of_enrollment" id="certificate_of_enrollment" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Certificate of Enrollment</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="grade_slip" id="grade_slip" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Grade Slip</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="income_tax_return" id="income_tax_return" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Income Tax Return</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="certificate_of_indegency" id="certificate_of_indegency" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Cert. Of Indegency</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="statement_of_accounts" id="statement_of_accounts" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Statement Of Account</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="birth_certificate" id="birth_certificate" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Statement Of Account</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="good_moral" id="good_moral" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Good Moral</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="application_form" id="application_form" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Good Moral</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="essay" id="essay" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Good Moral</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name="endorsement" id="endorsement" class="shrink-0 mt-0.5 border-gray-500 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-gray-700 ms-3">Good Moral</label>
                </div>
            </div>     
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t-2 border-blue-500 mt-2">
                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Save changes
                </button>
            </div>      
        </form>
    </div>

