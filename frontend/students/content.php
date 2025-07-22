<?php include ('admin-partials/config.php') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>

  
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
                        <a href="#" class="text-gray-500 hover:text-primary">Student List</a>
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
                       <a href="archivestudent.php" class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1">
                          <i class="bi bi-folder-symlink-fill"></i>
                          <span>Archived </span>
                       </a>
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
                                id="search-student-id"
                                name="search-student-id"
                                class="searchbar-input"
                                maxlength="2048"
                                autocapitalize="off"
                                autocomplete="off"
                                title="Search"
                                role="combobox"
                                placeholder="Search student">
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

             <!-- Table Display -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-4 text-left">
                               Action                            
                            </th>
                            <th class="py-2 px-4 text-left">Student ID</th>
                            <th class="py-2 px-4 text-left">Full Name</th>
                            <th class="py-2 px-4 text-left">Course/LRN</th>
                            <th class="py-2 px-4 text-left">Status</th>
                            <th class="py-2 px-4 text-left">Reason</th>
                        </tr>
                    </thead>
                  <tbody id="student-table-body" class="text-gray-600 text-sm font-light">
                   
                  </tbody>
                </table>
            <div id="pagination-controls" class="flex justify-between items-center mt-2">
             <div></div>
                <div class="flex items-center space-x-2">
                    <button id="prev-page" class="flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded">
                        <i class="ri-arrow-left-s-line text-lg mr-1"></i>
                       
                    </button>
                    <span id="page-info" class="text-sm text-gray-600">Page 1 of 1</span>
                    <button id="next-page" class="flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded">
                      
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
    document.addEventListener("DOMContentLoaded", async () => 
    {
        const tableBody   = document.getElementById("student-table-body");
        const searchInput = document.getElementById("search-student-id");
        const prevBtn     = document.getElementById("prev-page");
        const nextBtn     = document.getElementById("next-page");
        const pageInfo    = document.getElementById("page-info");

        let allStudents = [];
        let currentPage = 1;
        const rowsPerPage = 10;
        showLoader();
        try {
            const response = await fetch(`${APP_URL}/api/complete`, {
                headers: {
                    Accept: "application/json",
                    Authorization: "Bearer " + localStorage.getItem("auth_token")
                }
            });
            if (!response.ok) throw new Error("Failed to fetch data");
            allStudents = await response.json();
            renderPaginatedTable(filteredStudents());
            } catch (err) {
                console.error("Error loading student data:", err);
                tableBody.innerHTML = `
                    <tr><td colspan="6" class="py-4 text-center text-red-500">
                        Failed to load data.
                    </td></tr>`;
            }
        function showLoader() {
            tableBody.innerHTML = `
                <tr><td colspan="6" class="text-center py-10">
                    Loading students…
                </td></tr>`;
        }
        function filteredStudents() {
            const keyword = searchInput.value.trim().toLowerCase();
            return allStudents
                .filter(s => !s.is_archived)
                .filter(s => {
                    const full = `${s.firstname||''} ${s.middlename||''} ${s.lastname||''}`.toLowerCase();
                    return (s.student_id   ?? '').toLowerCase().includes(keyword) ||
                        (s.full_name    ?? '').toLowerCase().includes(keyword) ||
                        (s.firstname    ?? '').toLowerCase().includes(keyword) ||
                        (s.middlename   ?? '').toLowerCase().includes(keyword) ||
                        (s.lastname     ?? '').toLowerCase().includes(keyword) ||
                        full.includes(keyword);
                });
        }
        function renderPaginatedTable(list) {
            const totalPages = Math.ceil(list.length / rowsPerPage) || 1;
            currentPage = Math.max(1, Math.min(currentPage, totalPages));

            const slice = list.slice((currentPage-1)*rowsPerPage, currentPage*rowsPerPage);
            renderTable(slice);
            updatePaginationInfo(currentPage, totalPages);
        }
        function renderTable(data) {
        tableBody.innerHTML = "";
        if (data.length === 0) {
            tableBody.innerHTML = `
                <tr><td colspan="6" class="text-center py-4 text-gray-500">
                    No students found.
                </td></tr>`;
            return;
        }
        data.forEach(st => {
            const tr = document.createElement("tr");
            tr.className = "border-b border-gray-200 hover:bg-gray-100";
            tr.innerHTML = `
                <td class="py-2 px-4">
                    <button class="btn btn-warning btn-sm"
                            onclick="archiveStudent(${st.id}, event)" title="Archive">
                        <i class="bi bi-archive"></i>
                    </button>
                    <a href="viewstudent.php?id=${st.id}" title="View student">
                        <i class="ri-eye-line text-blue-500 hover:text-blue-700 text-lg"></i>
                    </a>
                    <a href="updatestudent.php?id=${st.id}" title="Edit student">
                        <i class="ri-edit-line text-green-500 hover:text-green-700 text-lg"></i>
                    </a>
                </td>
                <td class="py-2 px-4">${st.student_id || ''}</td>
                <td class="py-2 px-4">${st.full_name   || ''}</td>
                <td class="py-2 px-4">${st.course      || ''}</td>
                <td class="py-2 px-4">${formatStatus(st.status)}</td>
                <td class="py-2 px-4">${formatReason(st.reason)}</td>`;
            tableBody.appendChild(tr);
          });
        }
        function updatePaginationInfo(current, total) {
            pageInfo.textContent = `Page ${current} of ${total || 1}`;
            prevBtn.disabled = current === 1;
            nextBtn.disabled = current === total || total === 0;
        }
        prevBtn.addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                renderPaginatedTable(filteredStudents());
            }
        });
        nextBtn.addEventListener("click", () => {
            const totalPages = Math.ceil(filteredStudents().length / rowsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                renderPaginatedTable(filteredStudents());
            }
        });
        searchInput.addEventListener("input", () => {
            currentPage = 1;
            renderPaginatedTable(filteredStudents());
        });
            function formatStatus(status) {
                if (status === 'first_print') {
                    return `<span style="background-color: #3498db; color: white; padding: 3px 8px; border-radius: 12px; font-size: 12px; display: inline-block;">First Print</span>`;
                }
                if (status === 're_print') {
                    return `<span style="background-color: #e67e22; color: white; padding: 3px 8px; border-radius: 12px; font-size: 12px; display: inline-block;">Reprint</span>`;
                }
                return `<span style="background-color: #7f8c8d; color: white; padding: 3px 8px; border-radius: 12px; font-size: 12px; display: inline-block;">${status}</span>`;
            }
           function formatReason(reason) {
                return reason && reason.trim() !== '' ? reason : '------------';
            }
    });
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
    const notyf = new Notyf(
    {
        duration: 900,
        position: {
            x: 'right',
            y: 'top',
        }
    });
     const token = localStorage.getItem("auth_token");
        fetch(`${APP_URL}/api/profile-show`, 
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

        fetch(`${APP_URL}/api/profile-edit/${userId}`, {
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
  function archiveStudent(id, event) 
  {
    if (event) event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: 'You want to archive this student.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {

            fetch(`${APP_URL}/api/archive/${id}/archive`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${localStorage.getItem('auth_token')}`
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    if (typeof notyf !== 'undefined') {
                        notyf.success('Archived successfully!');
                    } else {
                        alert('Student archived successfully!');
                    }

                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                } else {
                    Swal.fire('Error!', data.message || 'Failed to archive student.', 'error');
                }
            })
            .catch(err => {
                Swal.fire('Error!', 'Something went wrong while archiving.', 'error');
                console.error(err);
            });

        }
    });
  }
</script>