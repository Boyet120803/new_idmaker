<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<style>
    .id-wrapper {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
    }

  .id {
      width: 204px;
      height: 324px;
    /* background: rgb(0, 0, 0); */
    border-radius: 0px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
  }

    .front {
      background: transparent;
      position: relative;
      overflow: hidden;
    }

    .front-bg {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      background: #5420B5;
      clip-path: polygon(0 70%, 100% 60%, 100% 100%, 0% 100%);
      z-index: 0;
    }
    .id-left {
      position: absolute;
      top: 2px;
      left: -10px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
      z-index: 2;
      width: 90px; /* adjust as needed */
    }
    /* Logo */
    .logo {
      position: absolute;
      top: 18px;
      left: 30px;
      width: 43px;
      height: 43px;
      z-index: 2;
    }

  .school-info {
    position: absolute;
    top: 68px;
    left: -5px;
    width: 120px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    gap: 0;
    text-align: center;
  }
  .school-name {
    font-size: 10px;
    font-weight: bold;
    color: #222;
    line-height: 1.1;
    text-align: center;
  }
  .school-address {
    font-size: 6px;
    color: #222;
    margin-top: 2px;
  }

  .qr {
    position: absolute;
    top: 105px;
    left: 15px;
    width: 65px;
    height: 65px;
    border-radius: 4px;
    object-fit: cover;
    background: #fff;
    z-index: 2;
    border: 2px solid #fff;
  }

  .signature {
    position: absolute;
    top: 150px;
    left: 20px;
    width: 55px;
    height: 78px;
    object-fit: contain;
    z-index: 2;
  }

  .student-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 150%;
    height: 240px; /* adjust as needed para mo-fit gyud sa taas sa polygon */
    object-fit: cover;
    border-radius: 0 0 16px 16px; /* optional: rounded bottom corners */
    border: none;
    background: transparent;
    z-index: -1;
  }

    .bottom-content {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;

      z-index: 2;
    }

    .name-block {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      margin-bottom: 2px;
      padding: 0 5px 5px 5px;
    }

    .name {
      font-size: 16px;
      font-weight: bold;
      line-height: 1.1;
      text-align: right;
      color: #fff;
      letter-spacing: 1px;
      z-index: 2;
    }
    .name span {
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .info-row {
      display: flex;
      justify-content: space-between;
      width: 100%;
      font-size: 10px;
      color: #fff;
      margin-top: 2px;
    }
    .info-row-child {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
    .birth {
      text-align: left;
    }

    .address {
      text-align: right;
    }

    .id-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold;
      background: #fff;
      color: #000000;
      padding: 3px 10px;
      border-radius: 0px;
      margin: 0px 0 0px 0;
      font-size: 13px;
    }

    .footer {
      font-size: 9px;
      display: flex;
      justify-content: space-between;
      color: #fff;
      margin-top: 2px;
        padding: 0 5px 5px 5px;
    }



    .id.back {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      background: none;
      box-shadow: none;
      border-radius: 0;
      padding: 0;
      height: 324px;
      width: 204px;
    }

    .id-card-back {
      /* width: 204px; */
      height: 324px;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      display: flex;
      font-size: 9px;
      position: relative;
      overflow: hidden;

    }

    .left-bar {
      width: 38px;
      color: white;
      display: flex;
      flex-direction: column;
      font-weight: bold;
      font-size: 7px;
    }

    .back-top {
      padding: 12px 8px 5px 8px;
      gap: 5px;
    }

    .left-content{
      width: 25%;
    
    }

    .right-content{
      width: 75%;
      flex: 1;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

    }

    .top-text {
      text-align: center;
      font-size: 7px;
    }

    .top-text b {
      font-size: 7px;
    }

      .back-signature {
        text-align: center;
        margin: 4px 0;
        font-size: 8px;
      }

    .signature-name {
      font-weight: bold;
      font-size: 6px;
    }

    .reminders {
      text-align: center;
      font-size: 7px;
    }

    .reminders b {
      font-size: 6px;
    }

    .contact {
      text-align: center;
      font-size: 6px;
      margin-top: 4px;
    }

    .contact-name {
      font-weight: bold;
      font-size: 7px;
      margin-top: 2px;
    }

    .contact-number {
      font-size: 9px;
      font-weight:bold;
    }

    .qr-box {
      background: black;
      color: white;
      font-size: 6px;
      text-align: center;
      padding: 4px 2px;
      margin-top: 1px; 
      font-weight: bold;
    }

    .facebook-footer {
      background: #000000;
      color: #fff;
      font-size: 8px;
      text-align: center;
      padding: 5px 0 5px 0;
      letter-spacing: 0.5px;  
      width: 204px;
      font-family: inherit;
    }

    .year-strip {
      width: auto;
      background-color: white;
        font-family: "Montserrat", sans-serif;
    }

    .year-strip table {
        border-collapse: collapse;
        table-layout: fixed;
    }

    td {
      text-align: center;
      vertical-align: middle;
      padding: 0;
    }

    .rotated-text {
      writing-mode: vertical-rl;
      transform: rotate(180deg);
      text-orientation: mixed;
      display: inline-block;
      font-size: 7px;
      line-height: 1;
    }


    .year-cell {
      background-color: #000;
      color: white;
      border: 1px solid #333;
      width: 20px;
      height: 56px;
    }


    .word-school-year {
      background-color: #000;
      color: white;
      border: 1px solid #333;
      width: 20px;
      height: 56px;
    
    }


    .semester-cell {
      background-color: #000;
      color: white;
      border: 1px solid #000;
      width: 20px;
      height: 59px;
    }


    .first-cell,
    .second-cell {
      background-color: white;
      color: black;
      border: 1px solid #333;
      width: 20px;
      height: 56px;
    }



    .empty-cell {
      background-color: white;
      border: 1px solid #333;
      width: 15px;
      height: 56px;
    }

</style>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<link rel="stylesheet" href="assets/css/id.css">
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
 <div class="mt-6">
    <div class="id-wrapper">
    <!-- FRONT SIDE -->

<div class="id front">
  <div class="front-bg"></div>
  <div class="id-left">
    <img src="assets/photos/mlg.png" class="logo" alt="Logo">
    <div class="school-info">
      <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
      <span class="school-address">Brgy. Atabay, Hilongos, Leyte</span>
    </div>
    <img src="assets/photos/qr.png" class="qr" alt="QR Code">
    <img src="assets/photos/signature.png" class="signature" alt="Signature">
  </div>
  <img src="assets/photos/sampleid.jpg" class="student-img" alt="Student Photo">
  <div class="bottom-content">
    <div class="name-block">
      <div class="name">KISTADIO<br><span>JHON BRIX P.</span></div>
      <div class="info-row">
        <div class="info-row-child">
          <span class="label">Date of Birth:</span>
          <span class="value">09/04/2000</span>
        </div>
        <div class="info-row-child">
          <br><span class="address">Brgy. Atabay, Hilongos</span>
        </div>
        
      </div>
    </div>
    <div class="id-row">
      <span class="student-id">21-003149</span>
      <span class="course">BSED-SS</span>
    </div>
    <div class="footer">
      <span>https://mlgcl.edu.ph</span>
      <span>mlg@mlgcl.edu.ph</span>
    </div>
  </div>
</div>

<!-- BACK SIDE -->

    <div class="id back">
        <div class="id-card-back back-top">
            <div class="left-content">
                <div class="left-bar year-strip">
                    <table>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="year-cell"><div class="rotated-text">2024-2025</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="year-cell"><div class="rotated-text">2023-2024</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"><div class="rotated-text">SCHOOL YEAR</div></td>
                        <td class="year-cell"><div class="rotated-text">2022-2023</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="year-cell"><div class="rotated-text">2021-2022</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="semester-cell"><div class="rotated-text">Semester</div></td>
                        <td class="first-cell"><div class="rotated-text">First</div></td>
                        <td class="second-cell"><div class="rotated-text">Second</div></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="right-content">
                <div class="top-text">
                    This is to certify that the person<br>
                    whose picture and signature appear<br>
                    herein is a bonafide student of<br>
                    <b>MLC College of Learning, Inc.</b>
                </div>

                <div class="back-signature">
                    <img src="" alt="signature" style="">
                    <div class="signature-name">MARY LILIBETH OUYAN, DEV. ED. D.</div>
                    <div>School Director</div>
                </div>

                <div class="reminders">
                    <b>IMPORTANT REMINDERS</b><br>
                    Always wear this ID while inside<br>
                    the school campus.<br>
                    <b>Do not forget your<br>
                    STUDENT ID NUMBER.</b>
                </div>

                <div class="contact">
                    If lost and found, please surrender<br>
                    this ID to the<br>
                    <b>STUDENT AFFAIRS OFFICE</b>,<br>
                    MLC College of Learning, Inc.,<br>
                    Brgy. Atabay, Hilongos, Leyte
                </div>

                <div class="contact">
                    In case of emergency,<br>
                    please contact
                    <div class="contact-name">EFREN IBAÑEZ</div>
                    <div class="contact-number">0935-121-9395</div>
                </div>

                <div class="qr-box">
                    PLEASE SCAN THE QR<br>
                    CODE AT THE FRONT<br>
                    FOR MORE VALIDATION &<br>
                    CONTACT INFORMATION.
                </div>
            </div>
        </div>
        <div class="facebook-footer back-bottom">
            https://www.facebook.com/mlgcl/
        </div>
    </div>
</div>


<!-- hello -->
 <h2 id="id_full_name"></h2>
<p id="id_first_name"></p>
<p id="id_middle_name"></p>
<p id="id_last_name"></p>
<p id="id_address"></p>
<p id="id_course"></p>
<p id="id_student_id"></p>
<p id="id_contact"></p>
<p id="id_emergency_contact"></p>
<p id="id_birth_date"></p>


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

    document.addEventListener("DOMContentLoaded", async () => {
    const urlParams = new URLSearchParams(window.location.search);
    const studentId = urlParams.get("student_id");

    if (!studentId) {
        console.error("No student_id found in URL");
        return;
    }

    try {
        const response = await fetch(`http://127.0.0.1:8000/api/pending/${studentId}`, {
            method: "GET",
            headers: {
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            }
        });

        if (!response.ok) {
            throw new Error("Record not found");
        }

        const data = await response.json();

        // Fill non-image fields
        document.getElementById("id_full_name").textContent =
            `${data.first_name} ${data.middle_name ?? ''} ${data.last_name}`.trim();

        document.getElementById("id_first_name").textContent = data.first_name;
        document.getElementById("id_middle_name").textContent = data.middle_name ?? "—";
        document.getElementById("id_last_name").textContent = data.last_name;
        document.getElementById("id_address").textContent = data.address;
        document.getElementById("id_course").textContent = data.course;
        document.getElementById("id_student_id").textContent = data.student_id;
        document.getElementById("id_contact").textContent = data.contact;
        document.getElementById("id_emergency_contact").textContent = data.emergency_contact;
        document.getElementById("id_birth_date").textContent = data.birth_date;

    } catch (error) {
        console.error("Error fetching student data:", error);
    }
});

    </script>
