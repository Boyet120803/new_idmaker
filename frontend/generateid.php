<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<?php include ('admin-partials/config.php')?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.5/dist/signature_pad.umd.min.js"></script>
<style>
    .input {
    line-height: 28px;
    border: 2px solid transparent;
    border-bottom-color: #777;
    padding: .2rem 0;
    outline: none;
    background-color: transparent;
    color: #0d0c22;
    transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
    width: 250px; 
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


  .input-loader {
    position: absolute;
    top: 50%;
    right: 12px;
    width: 18px;
    height: 18px;
    border: 2px solid #ccc;
    border-top: 2px solid #3498db;
    border-radius: 50%;
    animation: spin 0.6s linear infinite;
    transform: translateY(-50%);
  }

  @keyframes spin {
    0%   { transform: translateY(-50%) rotate(0deg); }
    100% { transform: translateY(-50%) rotate(360deg); }
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
                        <a href="#" class="text-gray-500 hover:text-primary">Generate ID</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
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
            </header>
        <div class="p-4 mt-1">
           <div class="flex flex-wrap justify-center items-end gap-6 mb-6">
            <div>
              <label for="school_year" class="block text-sm font-medium text-gray-700 mb-1 text-center">Select School Year</label>
              <select id="school_year" class="input w-56" required>
                  <option value="">-- Select School Year --</option>
                  <option value="2025-2026">2025-2026</option>
                  <option value="2024-2025">2024-2025</option>
                  <option value="2023-2024">2023-2024</option>
                  <option value="2022-2023">2022-2023</option>
              </select>
            </div>
            <div>
              <label for="level" class="block text-sm font-medium text-gray-700 mb-1 text-center">Select Level</label>
              <select id="level" class="input w-56" required>
                  <option value="">-- Select Level --</option>
                  <option value="college">College</option>
                  <option value="jhs">Junior High School</option>
                  <option value="shs">Senior High School</option>
              </select>
            </div>
           <div class="relative" id="student_input_wrapper">
              <label for="student_id" class="block text-sm font-medium text-gray-700 mb-1 text-center">Enter Student ID or Name:</label>
              <input type="text" id="student_id" placeholder="e.g. SHS-24-003738" class="input w-64" required>
              <div id="student_input_loader" class="input-loader hidden"></div>
              <ul id="student_dropdown" class="absolute z-10 mt-1 bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden w-full"></ul>
           </div>
        </div>
        </div>

  <!-- ID Preview -->
<div class="flex justify-center py-5 px-2">
  <div id="id_template" class="hidden w-full max-w-xl bg-white border rounded-xl shadow-md p-5">
    <h2 id="template_name" class="text-base font-semibold text-gray-800 mb-4 text-center">Name</h2>

    <div class="flex items-start gap-6">
      <div class="flex flex-col items-center">
        <p class="text-sm text-gray-700">
          <span class="font-medium">ID:</span> <span id="template_id"></span>
        </p>
        <img id="qr_image" src="" alt="QR Code" class="w-24 h-24 rounded border shadow-sm mb-2" />
        <img id="signaturePreview" src="" alt="Signature Preview" class="mt-2 w-28 h-15 object-contain " style="display: none;" />
      </div>

      <div class="flex-1 text-gray-700 text-sm">
        <p><span class="font-medium">Address:</span> <span id="template_address"></span></p>
        <p><span class="font-medium">Birthdate:</span> <span id="template_birthdate"></span></p>
        <p><span class="font-medium">Contact:</span> <span id="template_contact"></span></p>
        <p><span class="font-medium">Emergency Contact:</span> <span id="template_emergency_contact"></span></p>

        <!-- ESC Input -->
        <div id="esc_input_wrapper" class="mt-4 hidden">
          <label for="esc_input" class="block text-sm font-medium text-gray-700 mb-1">Education Service Contracting (ESC):</label>
          <input type="text" id="esc_input" name="esc_input"
            class="w-full border border-gray-300 rounded px-3 py-2" placeholder="" />
        </div>

        <!-- Course Input -->
        <div id="course_input_wrapper" class="mt-4 hidden">
          <label for="course_input" class="block text-sm font-medium text-gray-700 mb-1">Strand / Track:</label>
          <input list="course_list" id="course_input" name="course_input"
            class="w-full border border-gray-300 rounded px-3 py-2" placeholder="e.g. ABM or custom..." />
          <datalist id="course_list">
            <option value="ABM"></option>
            <option value="HUMSS"></option>
            <option value="TVL-ICT"></option>
          </datalist>
        </div>

        <!-- LRN Input -->
        <div id="lrn_input_wrapper" class="mt-4 hidden">
          <label for="lrn_input" class="block text-sm font-medium text-gray-700 mb-1">Learner Reference Number (LRN):</label>
          <input type="text" id="lrn_input" name="lrn_input"
            class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Enter LRN" />
        </div>

        <!-- Signature Button -->
    <div id="signatureBtnWrapper" class="mt-6 text-left">
    <label class="block text-sm font-medium text-gray-700 mb-1">Signature:</label>
    <button id="openSignaturePadModal"
        class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded shadow">
        Add Signature
    </button>
    </div>

        <!-- Signature Modal -->
        <div id="signaturePadModal"
          class="fixed inset-0 z-50 bg-black bg-opacity-70 hidden flex items-center justify-center">
          <div class="bg-white w-full h-full flex flex-col justify-center items-center relative font-medium">
            <h2 class="text-xl font-semibold mb-4 mt-6">Draw Your Signature</h2>

            <!-- Stroke Thickness Selector -->
            <div class="mb-4">
              <label for="signatureStrokeWeight" class="block text-sm font-medium text-gray-700 mb-1">Stroke Thickness:</label>
              <select id="signatureStrokeWeight" class="border rounded px-3 py-1">
                <option value="1">Thin</option>
                <option value="2">Light</option>
                <option value="3" selected>Normal</option>
                <option value="5">Bold</option>
                <option value="7">Extra Bold</option>
                <option value="10">Heavy</option>
              </select>
            </div>

            <!-- Canvas -->
            <div class="border border-gray-400 bg-gray-100 rounded p-2 shadow">
              <canvas id="signaturePadCanvasBox"
                style="width: 700px; height: 400px;" class="bg-white rounded shadow"></canvas>
            </div>

            <!-- Buttons -->
            <div class="mt-4 flex gap-4 font-normal mb-6">
              <button id="clearSignaturePadBtn"
                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Clear</button>
              <button id="closeSignaturePadModal"
                class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Done</button>
            </div>
          </div>
        </div>
        <input type="hidden" id="signatureBase64" name="signature">
        <div class="mt-6 text-center">
          <button id="save_button"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded shadow">
            Edit
          </button>
        </div>
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
    const notyf = new Notyf(
    {
        duration: 2000,
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
    const schoolYearInput = document.getElementById("school_year");
    const levelInput      = document.getElementById("level");
    const searchInput     = document.getElementById("student_id");
    const dropdown        = document.getElementById("student_dropdown");
    const idCard          = document.getElementById("id_template");

   let allStudents = [];
   (function populateSchoolYears() {
    const thisYear = new Date().getFullYear();
    const firstYearToShow = thisYear - 3;
    const nextSchoolYear = thisYear + 1;
    schoolYearInput.innerHTML = '<option value="">-- Select School Year --</option>';
    for (let y = nextSchoolYear; y >= firstYearToShow; y--) {
      const sy = `${y}-${y + 1}`;
      const opt = document.createElement("option");
      opt.value = sy;
      opt.textContent = sy;
      schoolYearInput.appendChild(opt);
    }
  })();
  function getLatestIDForLevel(idArray = [], level = "") {
    if (!idArray.length) return null;
    if (level === "shs") {
      const shsId = idArray.find(
        (o) =>
          (o.id_type && o.id_type.toLowerCase() === "shs") ||
          o.student_id.toUpperCase().startsWith("SHS")
      );
      if (shsId) return shsId;
    }
    const digits = (s) => parseInt(s.replace(/\D/g, ""), 10) || 0;
    return idArray
      .slice()
      .sort((a, b) => digits(b.student_id) - digits(a.student_id))[0];
  }
  async function fetchStudents() {
    const schoolYear = schoolYearInput.value;
    const level = levelInput.value;
    const loader = document.getElementById("student_input_loader"); 
    if (!schoolYear || !level) return;
    allStudents = [];
    dropdown.innerHTML = "";
    const token = localStorage.getItem("auth_token");
    if (!token) {
      console.error("No auth token found");
      return;
    }
    loader.classList.remove("hidden");
    try {
      const res = await fetch(`${APP_URL}/api/mlgcl-students`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "Authorization": `Bearer ${token}`,
        },
        body: JSON.stringify({
          school_year: schoolYear,
          level: level
        }),
      });
      if (!res.ok) {
        console.error("API fetch failed:", res.statusText);
        return;
      }
      allStudents = await res.json();
      searchStudent();
    } catch (e) {
      console.error("Fetch error:", e);
    } finally {
      loader.classList.add("hidden");
    }
  }
function searchStudent() {
  const query         = searchInput.value.trim().toLowerCase();
  const selectedLevel = levelInput.value;
  const results       = [];
  const seenKeys      = new Set();

  if (!query) {
    dropdown.classList.add("hidden");
    return;
  }

  allStudents.forEach((student) => {
    const rawName   = `${student.first_name} ${student.middle_name || ""} ${student.last_name}`;
    const fullName  = rawName.replace(/\s+/g, " ").trim();
    const nameKey   = fullName.toLowerCase();
    const nameMatch = nameKey.includes(query);

    const newestObj = getLatestIDForLevel(
      student.student_identification_number || [],
      selectedLevel
    );
    const newestID = newestObj ? newestObj.student_id : "N/A";

    const idMatches = (student.student_identification_number || []).some((idObj) => {
      const idLower = idObj.student_id.toLowerCase();
      const idType  = idObj.id_type?.toLowerCase() || "";
      const isHS    = ["jhs", "shs"].includes(selectedLevel);

      return (
        idLower.includes(query) ||
        (isHS &&
          (
            query.includes("shs") ||
            query.includes("jhs") ||
            query.includes("-")
          ) &&
          (
            idLower.includes(query) ||
            (idType === "shs" && query.includes("shs")) ||
            (idType === "jhs" && query.includes("jhs"))
          ))
      );
    });

    if ((idMatches || nameMatch) && !seenKeys.has(nameKey)) {
      seenKeys.add(nameKey);
      results.push({ name: fullName, id: newestID });
    }
  });

  renderDropdown(results, query);
}

    function renderDropdown(matches, query) {
    dropdown.innerHTML = "";

    if (matches.length === 0) {
        const li = document.createElement("li");
        li.className = "px-3 py-2 text-sm text-gray-500";
        li.textContent = `No matches found for "${query}"`;
        dropdown.appendChild(li);
    } else {
        matches.forEach((m) => {
        const li = document.createElement("li");
        li.className = "px-3 py-2 cursor-pointer hover:bg-blue-100 text-sm";
        li.textContent = `${m.name} - ${m.id}`;
        li.onclick = () => selectStudent(m.id);
        dropdown.appendChild(li);
        });
    }

    dropdown.classList.remove("hidden");
    }


    function selectStudent(studentID) {
    const student = allStudents.find((s) =>
        s.student_identification_number?.some((id) => id.student_id === studentID)
    );
    if (!student) return;

    const latest  = getLatestIDForLevel(
        student.student_identification_number,
        levelInput.value
    );
    const showID  = latest ? latest.student_id : studentID;

    searchInput.value = showID;
    dropdown.classList.add("hidden");

    const fullName = `${student.first_name} ${student.middle_name || ""} ${student.last_name}`.replace(/\s+/g, " ").trim();
    document.getElementById("template_name").textContent        = fullName;
    document.getElementById("template_id").textContent          = showID;
    document.getElementById("template_address").textContent     = student.full_address   || "-";
    document.getElementById("template_birthdate").textContent   = student.birthdate      || "-";
    document.getElementById("template_contact").textContent     = student.contact_number || "-";

    const emergencyName   = student.emergency_contact?.name   || "";
    const emergencyNumber = student.emergency_contact?.number || "";
    document.getElementById("template_emergency_contact").textContent =
        emergencyName && emergencyNumber ? `${emergencyName} - ${emergencyNumber}` : "-";

    document.getElementById("qr_image").src = student.qr_code || "";
    idCard.classList.remove("hidden");
    }


    schoolYearInput.addEventListener("change", fetchStudents);
    levelInput.addEventListener("change", fetchStudents);
    searchInput.addEventListener("input", () => {
    clearTimeout(searchInput._debounce);
    searchInput._debounce = setTimeout(searchStudent, 200);
    });


        const courseWrapper = document.getElementById("course_input_wrapper");
        const courseInput = document.getElementById("course_input");

        const escWrapper = document.getElementById("esc_input_wrapper");
        const escInput = document.getElementById("esc_input");

        const lrnWrapper = document.getElementById("lrn_input_wrapper");
        const lrnInput = document.getElementById("lrn_input");

        levelInput.addEventListener("change", () => {
        const level = levelInput.value;
        if (level === "shs" || level === "jhs") {
            escWrapper.classList.remove("hidden");
        } else {
            escWrapper.classList.add("hidden");
            escInput.value = "";
        }
        if (level === "jhs") {
            lrnWrapper.classList.remove("hidden");
        } else {
            lrnWrapper.classList.add("hidden");
            lrnInput.value = "";
        }

        // Course input ONLY for SHS
        if (level === "shs") {
            courseWrapper.classList.remove("hidden");
        } else {
            courseWrapper.classList.add("hidden");
            courseInput.value = "";
        }
        });

        document.getElementById("save_button").addEventListener("click", async () => {
    const studentIdText = document.getElementById("template_id").textContent.trim();
    const escValue = escInput.value.trim();
    const lrnValue = lrnInput.value.trim();
    const studentId = studentIdText;

    const selectedStudent = allStudents.find(s =>
      s.student_identification_number?.some(idObj => idObj.student_id === studentId)
    );

    if (!selectedStudent) {
      notyf.error("Student not found.");
      return;
    }

    const level = levelInput.value;
    const emergency = selectedStudent.emergency_contact || {};

    let barangay = selectedStudent.address?.barangay || "—";
    let municipality = selectedStudent.address?.municipality || "—";
    barangay = barangay.replace(/\bLeyte\b/i, "").trim();

    let address = barangay.toLowerCase().includes(municipality.toLowerCase())
      ? barangay
      : `${barangay}, ${municipality}`;

    let course = "N/A";
    if (level === "college") {
      course = selectedStudent.course?.description || "N/A";
    } else if (level === "jhs") {
      if (!lrnValue || !/^\d+$/.test(lrnValue)) {
        notyf.error("Please enter a valid numeric LRN.");
        return;
      }
      course = lrnValue;
    } else if (level === "shs") {
      course = courseInput.value.trim() || selectedStudent.course?.description || "SHS";
    }

    const payload = {
      first_name: selectedStudent.first_name,
      last_name: selectedStudent.last_name,
      middle_name: selectedStudent.middle_name,
      address: address,
      course: course,
      student_id: studentId,
      contact: selectedStudent.contact_number || "—",
      emergency_contact_name: emergency.name || "N/A",
      emergency_contact_number: emergency.number || "N/A",
      birth_date: selectedStudent.birthdate || "2000-01-01",
      signature: signatureBase64Input.value || null,
      image: null,
      qr_code: selectedStudent.qr_code || "",
      esc: escValue
    };

    try {
      const response = await fetch(`${APP_URL}/api/store`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "Accept": "application/json",
          "Authorization": "Bearer " + localStorage.getItem("auth_token")
        },
        body: JSON.stringify(payload)
      });

      if (response.ok || response.status === 409) {
        window.location.href = `editgenerateid.php?student_id=${studentId}`;
      } else {
        const error = await response.json();
        console.error("Save failed:", error);
        notyf.error("Saving failed. Check console.");
      }
    } catch (error) {
      console.error("Server error:", error);
      notyf.error("Server error. Please try again.");
    }
});
</script>

<script>
  const signaturePadModal = document.getElementById("signaturePadModal");
  const openSignatureBtn = document.getElementById("openSignaturePadModal");
  const closeSignatureBtn = document.getElementById("closeSignaturePadModal");
  const clearSignatureBtn = document.getElementById("clearSignaturePadBtn");
  const signatureCanvas = document.getElementById("signaturePadCanvasBox");
  const signatureBase64Input = document.getElementById("signatureBase64");
  const signaturePreview = document.getElementById("signaturePreview");

  function resizeCanvas() {
    const ratio = Math.max(window.devicePixelRatio || 1, 1);
    const style = getComputedStyle(signatureCanvas);
    const width = parseInt(style.width);
    const height = parseInt(style.height);
    signatureCanvas.width = width * ratio;
    signatureCanvas.height = height * ratio;

    const ctx = signatureCanvas.getContext("2d");
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.scale(ratio, ratio);
  }

  const signaturePad = new SignaturePad(signatureCanvas, {
    penColor: "black",
    minWidth: 3,
    maxWidth: 3,
    // ✅ transparent background
  });

  const strokeWeightSelect = document.getElementById("signatureStrokeWeight");
  strokeWeightSelect.addEventListener("change", () => {
    const thickness = parseInt(strokeWeightSelect.value);
    signaturePad.minWidth = thickness;
    signaturePad.maxWidth = thickness;
  });

  openSignatureBtn.addEventListener("click", () => {
    signaturePadModal.classList.remove("hidden");

    setTimeout(() => {
      resizeCanvas();
      signaturePad.clear();
    }, 50);
  });

  clearSignatureBtn.addEventListener("click", () => {
    signaturePad.clear();
  });

  closeSignatureBtn.addEventListener("click", () => {
    signaturePadModal.classList.add("hidden");

    if (!signaturePad.isEmpty()) {
      const canvas = signaturePad.canvas;
      const ctx = canvas.getContext("2d");
      const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
      const data = imageData.data;

      for (let i = 0; i < data.length; i += 4) {
        const r = data[i];
        const g = data[i + 1];
        const b = data[i + 2];
        if (r > 240 && g > 240 && b > 240) {
          data[i + 3] = 0; // make transparent
        }
      }

      ctx.putImageData(imageData, 0, 0);

      const cleanedDataUrl = canvas.toDataURL("image/png");
      signatureBase64Input.value = cleanedDataUrl;
      signaturePreview.src = cleanedDataUrl;
      signaturePreview.style.display = "block";
    } else {
      signatureBase64Input.value = "";
      signaturePreview.style.display = "none";
    }
  });

  window.addEventListener("resize", () => {
    if (!signaturePadModal.classList.contains("hidden")) {
      resizeCanvas();
    }
  });
</script>

<script>
  function toggleSignatureButton() {
    const signatureWrapper = document.getElementById("signatureBtnWrapper");
    if (signatureBase64Input.value) {
      signatureWrapper.classList.add("hidden");
    } else {
      signatureWrapper.classList.remove("hidden");
    }
  }
  window.addEventListener("DOMContentLoaded", toggleSignatureButton);
  closeSignatureBtn.addEventListener("click", () => {
    toggleSignatureButton();
  });
</script>






