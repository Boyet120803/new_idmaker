

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script> 
<style>
   /* From Uiverse.io by TimTrayler */ 
        .searchbar {
        font-size: 14px;
        font-family: arial, sans-serif;
        color: #202124;
        display: flex;
        z-index: 3;
        height: 44px;
        background: white;
        border: 1px solid #dfe1e5;
        box-shadow: none;
        border-radius: 24px;
        margin: 0 auto;
        width: auto;
        max-width: 224px;
        }

        .searchbar:hover {
        box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
        border-color: rgba(223,225,229,0);
        }

        .searchbar-wrapper {
        flex: 1;
        display: flex;
        padding: 5px 8px 0 14px;
        }

        .searchbar-left {
        font-size: 14px;
        font-family: arial, sans-serif;
        color: #202124;
        display: flex;
        align-items: center;
        padding-right: 13px;
        margin-top: -5px;
        }

        .search-icon-wrapper {
        margin: auto;
        }

        .search-icon {
        margin-top: 3px;
        color: #9aa0a6;
        height: 20px;
        line-height: 20px;
        width: 20px;
        }

        .searchbar-icon {
        display: inline-block;
        fill: currentColor;
        height: 24px;
        line-height: 24px;
        position: relative;
        width: 24px;
        }

        .searchbar-center {
        display: flex;
        flex: 1;
        flex-wrap: wrap;
        }

        .searchbar-input-spacer {
        color: transparent;
        flex: 100%;
        white-space: pre;
        height: 34px;
        font-size: 16px;
        }

        .searchbar-input {
        background-color: transparent;
        border: none;
        margin: 0;
        padding: 0;
        color: rgba(0, 0, 0, .87);
        word-wrap: break-word;
        outline: none;
        display: flex;
        flex: 100%;
        margin-top: -37px;
        height: 34px;
        font-size: 16px;
        max-width: 100%;
        width: 100%;
        }

        .searchbar-right {
        display: flex;
        flex: 0 0 auto;
        margin-top: -5px;
        align-items: stretch;
        flex-direction: row;
        }

        .searchbar-clear-icon {
        margin-right: 12px;
        }

        .voice-search {
        flex: 1 0 auto;
        display: flex;
        cursor: pointer;
        align-items: center;
        border: 0;
        background: transparent;
        outline: none;
        padding: 0 8px;
        width: 2.8em;
        }


        /* loader */
          .ui-loader {
      display: inline-block;
      width: 50px;
      height: 50px;
    }

    .loader-blk {
      color: #3f51b5;
      animation: rotate-outer08 1.4s linear infinite;
    }

    .multiColor-loader {
      display: block;
      animation: color-anim08 1.4s infinite;
    }

    .loader-circle {
      stroke: currentColor;
    }

    .MuiCircularProgress-circleStatic {
      transition: stroke-dashoffset 0.3s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    }

    .loader-circle-animation {
      animation: rotate-inner08 1.4s ease-in-out infinite;
      stroke-dasharray: 80px, 200px;
      stroke-dashoffset: 0;
    }

    @keyframes rotate-outer08 {
      0% {
        transform-origin: 50% 50%;
      }
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes rotate-inner08 {
      0% {
        stroke-dasharray: 1px, 200px;
        stroke-dashoffset: 0;
      }
      50% {
        stroke-dasharray: 100px, 200px;
        stroke-dashoffset: -15px;
      }
      100% {
        stroke-dasharray: 100px, 200px;
        stroke-dashoffset: -125px;
      }
    }

    @keyframes color-anim08 {
      0% {
        color: #4285f4;
      }
      25% {
        color: #ea4335;
      }
      50% {
        color: #f9bb2d;
      }
      75% {
        color: #34a853;
      }
    }

</style>
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
                     <a href="" id="openProfileModal"
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
                        <a href="#" class="text-gray-500 hover:text-primary">Employee List</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
                </div>
            </header>
            <div class="p-4">
               <div class="flex flex-wrap items-center justify-between mb-2">
                    <div class="text-sm text-gray-500">
                      
                    </div>
             <div class="relative">
                <div class="searchbar">
                    <div class="searchbar-wrapper">
                        <div class="searchbar-left">
                            <div class="search-icon-wrapper">
                                <span class="search-icon searchbar-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="searchbar-center">
                            <div class="searchbar-input-spacer"></div>

                            <input
                                type="text"
                                id="search-employee-id"
                                name="search-student-id"
                                class="searchbar-input"
                                maxlength="2048"
                                autocapitalize="off"
                                autocomplete="off"
                                title="Search"
                                role="combobox"
                                placeholder="Search Employee">
                        </div>
                        <div class="searchbar-right">
                            <svg class="voice-search" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="#4285f4" d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z"></path>
                                <path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path>
                                <path fill="#fbbc05" d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z"></path>
                                <path fill="#ea4335" d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
             </div>
         </div>

          
            <div class="overflow-x-auto mt-4">
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-4 text-left">Action</th>
                            <th class="py-2 px-4 text-left">Employee ID</th>
                            <th class="py-2 px-4 text-left">Full Name</th>
                            <th class="py-2 px-4 text-left">Position</th>
                            <th class="py-2 px-4 text-left">Status</th>
                            <th class="py-2 px-4 text-left">Reason</th>
                        </tr>
                    </thead>
                    <tbody id="employee-table-body" class="text-gray-600 text-sm font-light">
                        <tr id="pageLoader">
                            <td colspan="6" class="text-center py-10">
                                <div class="ui-loader loader-blk mx-auto">
                                    <svg viewBox="22 22 44 44" class="multiColor-loader w-12 h-12 mx-auto">
                                        <circle cx="44" cy="44" r="20.2" fill="none" stroke-width="3.6"
                                            class="loader-circle loader-circle-animation"></circle>
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="pagination-controls" class="flex justify-between items-center mt-2">
                    <div></div>
                    <div class="flex items-center space-x-2">
                        <button id="prev-page" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded">
                            <i class="ri-arrow-left-s-line text-lg mr-1"></i>
                        </button>
                        <span id="page-info" class="text-sm text-gray-600">Page 1 of 1</span>
                        <button id="next-page" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded">
                            <i class="ri-arrow-right-s-line text-lg ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>

  <!-- modal -->
        <div id="profileModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden opacity-0 transition-opacity duration-300">
            <div id="profileModalContent" class="relative bg-white w-[500px] max-h-[90vh] overflow-y-auto p-8 rounded shadow-lg transform scale-95 transition-transform duration-300">
             <div id="modalLoadingBar"
                class="absolute top-0 left-0 h-1 bg-blue-600 transition-all duration-700 ease-out rounded-r"
                style="width: 0;">
            </div>
                <h2 class="text-xl font-semibold mb-4">Edit Profile</h2>
                <form id="updateProfileForm">
            <div class="space-y-4">
            <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md border:1px solid;">
                <svg class="group-hover:rotate-[360deg] duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" height="1em" width="1em">
                <path d="M5 13l4 4L19 7" />
                </svg>
                <input type="text" id="first_name" name="first_name" class="flex-1 focus:outline-none" placeholder="First Name" />
            </div>
            <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md">
                <svg class="group-hover:rotate-[360deg] duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" height="1em" width="1em">
                <path d="M5 13l4 4L19 7" />
                </svg>
                <input type="text" id="middle_name" name="middle_name" class="flex-1 focus:outline-none" placeholder="Middle Name" />
            </div>
            <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md">
                <svg class="group-hover:rotate-[360deg] duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" height="1em" width="1em">
                <path d="M5 13l4 4L19 7" />
                </svg>
                <input type="text" id="last_name" name="last_name" class="flex-1 focus:outline-none" placeholder="Last Name" />
            </div>
            <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md">
                <svg class="group-hover:rotate-[360deg] duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" height="1em" width="1em">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <path d="M22 6l-10 7L2 6" />
                </svg>
                <input type="email" id="email" name="email" class="flex-1 focus:outline-none" placeholder="Email" />
            </div>
        </div>
            <div class="text-right mt-3">
                <button type="button" id="changePasswordBtn" class="text-sm text-blue-600 hover:underline">Change Password</button>
            </div>

            <div class="text-right mt-5 space-x-2">
                <button type="button" id="closeProfileModal" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
            </div>
            </form>
        </div>
        </div>
        </main>
<script>
  document.addEventListener("DOMContentLoaded", function () {
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



      document.addEventListener("DOMContentLoaded", function () {
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

                    fetch("http://127.0.0.1:8000/api/logout", {
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


    document.addEventListener("DOMContentLoaded", () => {
        const token = localStorage.getItem("auth_token");

        if (!token) return;

        fetch("http://127.0.0.1:8000/api/profile", {
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


const notyf = new Notyf({
  duration: 3000,
  position: { x: 'right', y: 'top' }
});
   


 document.addEventListener("DOMContentLoaded", () => {
    const tableBody = document.getElementById("employee-table-body");
    const searchInput = document.getElementById("search-employee-id");
    const token = localStorage.getItem("auth_token");

    let employees = [];

    fetch("http://127.0.0.1:8000/api/employeecomplete", {
        headers: {
            "Accept": "application/json",
            "Authorization": "Bearer " + token
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Failed to fetch data");
        }
        return response.json();
    })
    .then(data => {
        employees = data;
        renderTable(employees);
    })
    .catch(error => {
        console.error("Error loading employee data:", error);
        tableBody.innerHTML = `<tr><td colspan="4" class="py-4 px-4 text-red-500">Failed to load data.</td></tr>`;
    });

    function renderTable(data) {
        tableBody.innerHTML = "";

        data.forEach(employee => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td class="py-2 px-4">
                    <a href="viewemployee.php?id=${employee.id}" title="View employee">
                        <i class="ri-eye-line text-blue-500 hover:text-blue-700 cursor-pointer text-lg view-icon"></i>
                    </a>
                    <a href="updateemployee.php?id=${employee.id}" title="Edit employee">
                        <i class="ri-edit-line text-green-500 hover:text-green-700 cursor-pointer text-lg edit-icon"></i>
                    </a>
                </td>
                <td class="py-2 px-4">${employee.employee_id}</td>
                <td class="py-2 px-4">${employee.full_name}</td>
                <td class="py-2 px-4">${employee.position}</td>
                <td class="py-2 px-4">${formatStatus(employee.status)}</td>
                <td class="py-2 px-4">${formatReason(employee.reason)}</td>
            `;
            tableBody.appendChild(row);
        });
            function formatStatus(status) {
                if (status === 'first_print') {
                    return `<span style="
                        background-color: #3498db;
                        color: white;
                        padding: 3px 8px;
                        border-radius: 12px;
                        font-size: 12px;
                        display: inline-block;
                    ">First Print</span>`;
                }
                if (status === 're_print') {
                    return `<span style="
                        background-color: #e67e22;
                        color: white;
                        padding: 3px 8px;
                        border-radius: 12px;
                        font-size: 12px;
                        display: inline-block;
                    ">Reprint</span>`;
                }
                return `<span style="
                    background-color: #7f8c8d;
                    color: white;
                    padding: 3px 8px;
                    border-radius: 12px;
                    font-size: 12px;
                    display: inline-block;
                ">${status}</span>`;
            }
            function formatReason(reason) {
                if (!reason || reason.trim() === '') {
                    return `<span style="color: #7f8c8d;">------------</span>`;
                }
                return `<span style="background-color: #2ecc71; color: white; padding: 3px 8px; border-radius: 12px; font-size: 12px;">${reason}</span>`;
            }

        if (data.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="4" class="py-4 px-4 text-gray-500 text-center">No employees found.</td></tr>`;
        }
    }

    searchInput.addEventListener("input", (e) => {
        const searchTerm = e.target.value.toLowerCase();

        const filtered = employees.filter(emp => {
            const fullName = `${emp.firstname || ''} ${emp.middlename || ''} ${emp.lastname || ''}`.toLowerCase();

            return (
                emp.employee_id?.toLowerCase().includes(searchTerm) ||
                emp.full_name?.toLowerCase().includes(searchTerm) ||
                emp.firstname?.toLowerCase().includes(searchTerm) ||
                emp.middlename?.toLowerCase().includes(searchTerm) ||
                emp.lastname?.toLowerCase().includes(searchTerm) ||
                fullName.includes(searchTerm)
            );
        });

        renderTable(filtered);
    });
});
   //modal
        const modal = document.getElementById("profileModal");
        const modalContent = document.getElementById("profileModalContent");

        document.getElementById("openProfileModal").addEventListener("click", function (e) 
     {
            e.preventDefault();
            modal.classList.remove("hidden");
            setTimeout(() => {
            modal.classList.add("opacity-100");
            modalContent.classList.add("scale-100");
            modalContent.classList.remove("scale-95");
            }, 10);
        });

        document.getElementById("closeProfileModal").addEventListener("click", function () {
            modal.classList.remove("opacity-100");
            modalContent.classList.remove("scale-100");
            modalContent.classList.add("scale-95");

            setTimeout(() => {
            modal.classList.add("hidden");
            }, 300); 
     });

     const token = localStorage.getItem("auth_token");
        fetch(`http://127.0.0.1:8000/api/profile-show`, 
    {
            method: "GET",
            headers: {
                "Authorization": `Bearer ${token}`,
                "Accept": "application/json"
            }
        })
        .then(res => res.json())
        .then(user => {
            localStorage.setItem("id", user.id);
            document.getElementById("first_name").value = user.first_name;
            document.getElementById("middle_name").value = user.middle_name;
            document.getElementById("last_name").value = user.last_name;
            document.getElementById("email").value = user.email;
        })
        .catch(error => {
            console.error("Failed to fetch user:", error);
            alert("Failed to load profile.");
    });

    function showLoadingBar() 
    {
        const bar = document.getElementById("modalLoadingBar");
        bar.style.width = "0";
        void bar.offsetWidth;
        bar.style.width = "100%";
        bar.addEventListener("transitionend", function handleTransition() {
            bar.removeEventListener("transitionend", handleTransition);
            document.getElementById("closeProfileModal").click();
            notyf.success("Profile updated successfully!");
            setTimeout(() => {
                location.reload();
            }, 1200);
        });
    }
    function hideLoadingBar() 
    {
      const bar = document.getElementById("modalLoadingBar");
      bar.style.width = "0";
    }
    
   document.getElementById("updateProfileForm").addEventListener("submit", function (e) 
    {
        e.preventDefault();
        const token = localStorage.getItem("auth_token");
        const userId = localStorage.getItem("id");

        const data = {
            first_name: document.getElementById("first_name").value,
            middle_name: document.getElementById("middle_name").value,
            last_name: document.getElementById("last_name").value,
            email: document.getElementById("email").value,
        };

        fetch(`http://127.0.0.1:8000/api/profile-edit/${userId}`, {
            method: "POST",
            headers: {
                "Authorization": `Bearer ${token}`,
                "Accept": "application/json",
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(res => {
            if (!res.ok) return res.json().then(err => { throw err; });
            return res.json();
        })
        .then(response => {
            showLoadingBar(); 
        })
        .catch(error => {
            console.error("Update failed:", error);
            hideLoadingBar(); 
        });
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const loader = document.getElementById("pageLoader");
        setTimeout(() => {
            if (loader) loader.remove();
        }, 1500);
    });
</script>