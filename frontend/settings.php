<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<?php include('admin-partials/config.php') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
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
                        <a href="#" class="text-gray-500 hover:text-primary">Settings</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
               </div>
            </header>
            <div class="-mt-3 p-4">
              <div class="mt-6 p-6 border rounded-xl shadow bg-white max-w-full w-full sm:w-[480px] space-y-4">
                  <h2 class="text-lg font-semibold text-gray-800 border-b pb-2">School Year</h2>
                    <div class="space-y-1">
                         <div class="flex gap-3">
                            <select id="schoolYearSelect" class="p-2 w-56 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            </select>
                            <button onclick="saveSchoolYear()" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm rounded-md shadow transition duration-150">
                              Save
                            </button>
                        </div>
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
                            window.location.href = "index.php";
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
</script>

<script>
const notyf = new Notyf(
{
  duration: 1000,
  position: { x: 'right', y: 'top' }
});
async function populateSchoolYears() 
{
  const select = document.getElementById("schoolYearSelect");
  let selectedYear = "";
  try {
    const res = await fetch(`${APP_URL}/api/settings/school-year`, {
      headers: {
        "Accept": "application/json",
        "Authorization": "Bearer " + localStorage.getItem("auth_token")
      }
    });

    const data = await res.json();
    selectedYear = data.school_year || "";
  } catch (err) {
    console.error("Failed to fetch selected school year:", err);
  }
  select.innerHTML = `<option value="" selected disabled>${selectedYear || 'Select School Year'}</option>`;
  for (let year = 1995; year <= 2030; year++) {
    const sy = `${year}-${year + 1}`;
    if (sy === selectedYear) continue;
    const option = document.createElement("option");
    option.value = sy;
    option.textContent = sy;
    select.appendChild(option);
  }
}
async function saveSchoolYear() 
{
  const selected = document.getElementById("schoolYearSelect").value.trim();

  if (!selected) {
    notyf.error("Please select a school year.");
    return;
  }

  try {
    const res = await fetch(`${APP_URL}/api/settings/school-year`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Authorization": "Bearer " + localStorage.getItem("auth_token")
      },
      body: JSON.stringify({ school_year: selected })
    });

    const data = await res.json();

    if (res.ok) {
      notyf.success(data.message || "School year updated.");
    } else {
      notyf.error(data.message || "Failed to update school year.");
    }
  } catch (err) {
    console.error("Error saving school year:", err);
    notyf.error("Something went wrong. Please try again.");
  }
}
populateSchoolYears();
</script>