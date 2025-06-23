    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <a href="#" class="text-gray-500 hover:text-primary">Dashboard</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Overview</span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-6">
                <!-- Date and Actions -->
                <div class="flex flex-wrap items-center justify-between mb-6">
                    <div class="text-sm text-gray-500">
                        <div class="flex items-center">
                            <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                        </div>
                    </div>                  
                </div>

                <!--Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow-sm p-6 transition-all hover:shadow-md">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">ID</p>            
                            </div>                        
                        </div>                     
                    </div>


                    <div class="bg-white rounded-lg shadow-sm p-6 transition-all hover:shadow-md">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">ID</p>                            
                            </div>                          
                        </div>                     
                    </div>

                    <!-- New Customers -->
                    <div class="bg-white rounded-lg shadow-sm p-6 transition-all hover:shadow-md">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">ID</p>
                            </div>                        
                        </div>                  
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
    </div>

<script>
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

                    fetch("http://backendidmaker.test/api/logout", {
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

        fetch("http://backendidmaker.test/api/profile", {
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



    
     // modal
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
        duration: 2000,
        position: {
            x: 'right',
            y: 'top',
        }
    });

     const token = localStorage.getItem("auth_token");
        fetch(`http://backendidmaker.test/api/profile-show`, 
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

        fetch(`http://backendidmaker.test/api/profile-edit/${userId}`, {
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