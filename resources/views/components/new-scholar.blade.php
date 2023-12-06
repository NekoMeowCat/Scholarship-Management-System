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
                <h6 class="text-white text-xl mt-3 mb-2 font-bold uppercase">
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
                        <input type="text" name="last_name" id="last_name" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Luna">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Middle Name
                    </label>
                    <input type="text" name="middle_name" id="middle_name" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Narciso">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        First Name
                    </label>
                    <input type="text" name="name" id="name" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Juan">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            ID Number
                        </label>
                        <input type="text" name="id_number" id="id_number" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Male">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Year Level
                        </label>
                        <input type="text" name="year_level" id="year_level" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Married">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="email">
                            Gender
                        </label>
                        <input type="text" name="gender" id="gender" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="generalluna@mailinator.com">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Course
                        </label>
                        <input type="text" name="course" id="course" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="1993-11-11">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Email
                        </label>
                        <input type="email" name="email" id="email" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="+63 895 122 1254">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Address
                        </label>
                        <input type="text" name="address" id="address" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="+63 895 122 1254">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Date of Birth
                        </label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="1993-11-11">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Contact no.
                        </label>
                        <input type="text" name="phone_number" id="phone_number" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="+63 895 122 1254">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlfor="grid-password">
                            Office Assignment
                        </label>
                        <select name="department_id" id="department_id" class="w-full py-3 px-4 pe-9 block border-gray-200 text-gray-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option selected>Select a Department</option>
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
                        <input type="text" name="contact_person" id="contact_person" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="1993-11-11">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Guardian contact no.
                        </label>
                        <input type="text" name="contact_person_number" id="contact_person_number" class="border-0 px-3 py-3 text-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="+63 895 122 1254">
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-6">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Scholarship Grant
                        </label>
                        <select name="scholarship_id" id="scholarship_id" class="w-full py-3 px-4 pe-9 block border-gray-200 text-gray-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option selected>Select a Scholarship</option>
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
                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">ID</label>
                        <input name="student_id" id="student_id" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>
                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Transcript of Records</label>
                        <input name="transcript_of_records" id="transcript_of_records" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Certificate Of Enrollment</label>
                        <input name="certificate_of_enrollment" id="certificate_of_enrollment" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Grade Slip</label>
                        <input name="grade_slip" id="grade_slip" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Income Tax Return </label>
                        <input name="income_tax_return" id="income_tax_return" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Cert. Of Indegency</label>
                        <input name="certificate_of_indegency" id="certificate_of_indegency" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Statement Of Account</label>
                        <input name="statement_of_accounts" id="statement_of_accounts" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Birth Certificate</label>
                        <input name="birth_certificate" id="birth_certificate" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Good Moral</label>
                        <input name="good_moral" id="good_moral" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Application Form</label>
                        <input name="application_form" id="application_form" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Essay</label>
                        <input name="essay" id="essay" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>

                <div class="block">          
                    <label class="block mb-2 text-sm font-medium " for="file_input">Endorsement</label>
                        <input name="endorsement" id="endorsement" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>
            </div>     
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t-2 border-blue-500 mt-2">
                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Save changes
                </button>
            </div>      
        </form>
    </div>

