<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<?php include('admin-partials/config.php')?>
<style>

    .float-input-group {
        position: relative;
        margin: 20px 0;
    }

    .float-input {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
        background-color: transparent;
    }

    .float-label {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 17px;
        color: rgb(44, 42, 42);
        pointer-events: none;
        transition: all 0.2s ease;
    }

    .float-highlight {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 2px;
        width: 0;
        background-color: rgb(40, 93, 207);
        transition: all 0.3s ease;
    }

    .float-input:focus + .float-label,
    .float-input:not(:placeholder-shown) + .float-label {
        top: -20px;
        font-size: 12px;
        color: #000000;
    }

    .float-input:focus + .float-label + .float-highlight,
    .float-input:not(:placeholder-shown) + .float-label + .float-highlight {
        width: 100%;
    }


    /* input style */

    .input {
    line-height: 28px;
    border: 2px solid transparent;
    border-bottom-color: #777;
    padding: .2rem 0;
    outline: none;
    background-color: transparent;
    color: #0d0c22;
    transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
    width: 250px; /* adjust as needed */
    }

    .input:focus,
    .input:hover {
    outline: none;
    padding: .2rem 1rem;
    border-radius: 1rem;
    border-color: #7a9cc6;
    }

    .input::placeholder {
    color: #777;
    }

    .input:focus::placeholder {
    opacity: 0;
    transition: opacity .3s;
    }

</style>
<style>
#input-loader {
  pointer-events: none;
}
</style>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <main class="flex-1 ml-64">
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button id="toggle-sidebar" class="mr-4 text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-menu-line"></i>
                            </div>
                        </button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-notification-3-line"></i>
                            </div>
                        </button>
                        <div class="h-6 border-r border-gray-200"></div>
                   <div class="relative flex items-center space-x-2" id="user-dropdown-wrapper">
                  <span class="text-sm font-medium" id="fullName">Loading...</span>
                    <button id="user-dropdown-btn"
                        class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center focus:outline-none transition duration-200 hover:bg-gray-300">
                        <i class="ri-user-line text-gray-500 text-lg transition duration-200 group-hover:text-gray-700"></i>
                    </button>
                    <div id="user-dropdown-menu"
                        class="absolute right-0 mt-12 w-40 bg-white rounded-md shadow-lg border border-gray-200 hidden z-10 overflow-hidden transition-all duration-300 ease-in-out">
                       <a href="#"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition duration-200">
                            <i class="ri-user-line mr-2 text-base"></i>
                            Profile
                        </a>
                       <a href="#"
                        id="logout-btn"
                        class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition duration-200">
                            <i class="ri-logout-box-r-line mr-2 text-base"></i>
                            Logout
                        </a>
                    </div>
                </div>
                    </div>
                </div>
                <div class="px-6 py-2 border-t border-gray-100">
                    <div class="flex items-center text-sm">
                        <a href="#" class="text-gray-500 hover:text-primary">Generate ID</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
                </div>
            </header>
        <div class="p-3 relative mt-1 flex justify-end">
        <div class="mb-4 relative">
            <label for="employee_name" class="block text-sm font-medium text-gray-700 mb-1">
                Enter Employee Name:
            </label>

            <div class="relative">
                <input
                type="text"
                id="employee_name"
                placeholder="e.g. Jaevoy Palautog"
                class="input border border-gray-300 rounded-md focus:ring-0 focus:outline-none w-full pr-10"
                required
                >

                <!-- loader spinner -->
                <div id="input-spinner" class="absolute top-1/2 right-3 transform -translate-y-1/2 hidden">
                <svg class="animate-spin h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
                </div>
            </div>

            <ul
                id="employee_dropdown"
                class="absolute z-10 mt-1 bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden"
                style="width: 250px;"
            ></ul>

            <p id="employee_name_result" class="mt-1 text-sm text-green-600"></p>
            </div>
            </div>
            <div class="flex justify-center py-4 px-2">
                <div id="id_template" class="hidden w-full max-w-xl bg-white border rounded-xl shadow-md p-6">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-4">
                        <div class="flex-shrink-0">
                            <img id="qr_image" src="" alt="QR Code" class="w-28 h-28 rounded border shadow-sm" />
                        </div>
                        <div class="text-gray-700 text-sm space-y-1">
                            <h4 id="template_name" class="text-base font-semibold text-gray-800">Employee Name</h4>
                            <p><span id="template_address"></span></p>
                            <p><span id="template_birthdate"></span></p>
                            <p><span id="template_contact"></span></p>
                        </div>
                    </div>
                 <div class="p-6 mb-6 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="float-input-group">
                            <input required type="text" id="employee_id" name="employee_id" class="float-input" placeholder=" " />
                            <label class="float-label">Employee ID</label>
                            <span class="float-highlight"></span>
                        </div>

                        <div class="float-input-group">
                            <input required list="positionList" id="position" name="position" class="float-input" placeholder=" " />
                            <label class="float-label">Position</label>
                            <span class="float-highlight"></span>
                            <datalist id="positionList">
                                <option value="Officer">
                                <option value="Instructor">
                                <option value="Cashier">
                                <option value="Registrar">
                                <option value="Admin Assistant">
                                <option value="Security">
                                <option value="Maintenance">
                                <option value="Security-Guard">
                            </datalist>
                        </div>

                        <div class="float-input-group">
                            <input required type="text" id="tin" name="tin" class="float-input" placeholder=" " />
                            <label class="float-label">TIN No.</label>
                            <span class="float-highlight"></span>
                        </div>

                        <div class="float-input-group">
                            <input required type="text" id="sss" name="sss" class="float-input" placeholder=" " />
                            <label class="float-label">SSS No.</label>
                            <span class="float-highlight"></span>
                        </div>

                        <div class="float-input-group">
                            <input required type="text" id="philhealth" name="philhealth" class="float-input" placeholder=" " />
                            <label class="float-label">PhilHealth No.</label>
                            <span class="float-highlight"></span>
                        </div>

                        <div class="float-input-group">
                            <input required type="text" id="hdmf" name="hdmf" class="float-input" placeholder=" " />
                            <label class="float-label">HDMF No.</label>
                            <span class="float-highlight"></span>
                        </div>
                    </div>
                </div>
        <!-- Save button -->
        <div class="mt-6 flex justify-center">
            <button id="save_button"
                class="w-full px-6 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-700 transition duration-200">
                Edit
            </button>
        </div>
    </div>
</div>
   <script>
    const APP_URL = '<?= APP_URL ?>';
    document.addEventListener("DOMContentLoaded", function () 
   {
        const dropdownBtn = document.getElementById("user-dropdown-btn");
        const dropdownMenu = document.getElementById("user-dropdown-menu");

        dropdownBtn.addEventListener("click", function (e) {
            e.stopPropagation(); 
            dropdownMenu.classList.toggle("hidden");
        });
        document.addEventListener("click", function (e) {
            const dropdownWrapper = document.getElementById("user-dropdown-wrapper");
            if (!dropdownWrapper.contains(e.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
   });

    document.addEventListener("DOMContentLoaded", function () 
    {
        const logoutBtn = document.getElementById("logout-btn");

        logoutBtn.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Logout?',
                text: "Are you sure you want to logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Yes, logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    const token = localStorage.getItem("auth_token");
                    if (!token) {
                        Swal.fire('Error', 'No token found', 'error');
                        return;
                    }

                    fetch(`${APP_URL}/api/logout`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": "Bearer " + token
                        }
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Logout failed");
                        return response.json();
                    })
                    .then(data => {
                        Swal.fire({
                            title: 'Logged out!',
                            text: data.message,
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            localStorage.removeItem("auth_token");
                            window.location.href = "index.php"; // redirect to login
                        });
                    })
                    .catch(error => {
                        console.error("Logout failed:", error);
                        Swal.fire('Logout Failed', 'Something went wrong.', 'error');
                    });
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", () => 
    {
        const token = localStorage.getItem("auth_token");
        if (!token) return;
        fetch(`${APP_URL}/api/profile`, {
            method: "GET",
            headers: {
            "Authorization": `Bearer ${token}`,
            "Accept": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            const nameElement = document.getElementById("fullName");
            if (nameElement && data.full_name) {
            nameElement.textContent = data.full_name;
            }
        })
        .catch(error => {
            console.error("Error fetching profile:", error);
        });
    });
    let employeeData = [];
    const spinner = document.getElementById("input-spinner");
    const showSpinner = () => spinner.classList.remove("hidden");
    const hideSpinner = () => spinner.classList.add("hidden");
    document.addEventListener("DOMContentLoaded", async function () {
    const token = localStorage.getItem("auth_token");
    if (!token) {
        console.error("Missing auth token.");
        return;
    }
    showSpinner();
    try {
        const response = await fetch(`${APP_URL}/api/fetch-employees`, {
        method: "GET",
        headers: {
            "Accept": "application/json",
            "Authorization": `Bearer ${token}`
        }
        });
        if (!response.ok) {
        throw new Error("Failed to fetch employees.");
        }
        employeeData = await response.json();
        console.log("Fetched employees:", employeeData.length);
    } catch (error) {
        console.error("Fetch error:", error);
    } finally {
        hideSpinner();
    }
    });
    const input = document.getElementById("employee_name");
    const dropdown = document.getElementById("employee_dropdown");
    input.addEventListener("input", function () {
    const value = input.value.trim().toLowerCase();
    dropdown.innerHTML = "";
    dropdown.classList.add("hidden");
    if (value.length < 2) return;
    const matches = employeeData.filter(emp => {
        const fullName = `${emp.first_name} ${emp.middle_name || ''} ${emp.last_name}`.toLowerCase();
        return fullName.includes(value);
    });
    if (matches.length > 0) {
        matches.slice(0, 10).forEach(emp => {
        const li = document.createElement("li");
        const fullName = `${emp.first_name} ${emp.middle_name || ''} ${emp.last_name}`;
        li.textContent = fullName;
        li.className = "px-4 py-2 hover:bg-blue-100 cursor-pointer text-sm";
        li.addEventListener("click", () => {
            input.value = fullName;
            dropdown.innerHTML = "";
            dropdown.classList.add("hidden");

            document.getElementById("id_template").classList.remove("hidden");
            document.getElementById("template_name").textContent = fullName;
            document.getElementById("template_address").textContent = `Address: ${emp.full_address || '—'}`;
            document.getElementById("template_birthdate").textContent = `Birthdate: ${emp.birthdate || '—'}`;
            document.getElementById("template_contact").textContent = `Contact #: ${emp.contact_number || '—'}`;
            document.getElementById("qr_image").src = emp.qr_code || '';
            input.dataset.selectedEmployee = JSON.stringify(emp);
        });
        dropdown.appendChild(li);
        });
        dropdown.classList.remove("hidden");
    }
    });
    document.addEventListener("click", function (e) {
        if (!input.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add("hidden");
        }
    });
    const notyf = new Notyf({
    duration: 3000,
    position: { x: 'right', y: 'top' }
    });
   document.getElementById("save_button").addEventListener("click", async () => {
    const input = document.getElementById("employee_name"); 
    const dataStr = input.dataset.selectedEmployee;
    const employeeIdInput = document.getElementById("employee_id").value.trim();
    const positionInput = document.getElementById("position").value.trim();

    if (!employeeIdInput || !positionInput) {
        notyf.error("All fields are required.");
        return;
    }
    if (!dataStr) return;
    const emp = JSON.parse(dataStr);
    const payload = {
        first_name: emp.first_name,
        middle_name: emp.middle_name || '',
        last_name: emp.last_name,
        address: [emp.address?.barangay, emp.address?.municipality]
           .filter(Boolean)
           .join(", "),
        contact: emp.contact_number || '—',
        emergency_contact: {
            name: emp.emergency_contact?.name || '—',
            number: emp.emergency_contact?.number || '—',
        },
        position: positionInput,
        employee_id: employeeIdInput,
        birth_date: emp.birthdate || '2000-01-01',
        signature: null,
        image: null,
        qr: emp.qr_code || '',
        tin_no: document.getElementById("tin").value.trim(),
        sss_no: document.getElementById("sss").value.trim(),
        philhealth_no: document.getElementById("philhealth").value.trim(),
        hdmf_no: document.getElementById("hdmf").value.trim()
    };
    try {
        const response = await fetch(`${APP_URL}/api/employee-store`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            },
            body: JSON.stringify(payload)
        });
        const result = await response.json();
        if (response.ok) {
            window.location.href = `employeegenerateedit.php?id=${employeeIdInput}`;
        } else {
            console.error("Save failed:");
            console.error("Status:", response.status);
            console.error("Status Text:", response.statusText);
            console.error("Response:", result);
        }

    } catch (error) {
        console.error("🔥 Fetch crashed (probably no connection to server):");
        console.error(error);
    }
});

</script>








