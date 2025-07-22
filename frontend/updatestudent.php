<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<?php include ('admin-partials/config.php')?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
 
    .esc-logo{
          position: absolute;
          right: 5px;
          top: -15px;
          width: 40px;  
          height: auto;
          z-index: 5;       
          pointer-events: none; 
        }

    .esc{
      display:flex;
      justify-content: flex-end;
      align-items: center;
      font-size:8px;
      margin-top:10px;
      margin-right:5px;
      font-weight: bold;
    }

    .id-wrapper {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
    transform: scale(1.4); 
    transform-origin: top center;
    transition: transform 0.2s;
    }
    
    .id {
      width: 204px;
      height: 324px;
      border-radius: 0px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      position: relative;
      overflow: hidden;
      
    }

    .front {
     background: #b8d3e6;
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
      clip-path: polygon(0 68%, 100% 58%, 100% 100%, 0% 100%);
      z-index: 2;
    }
    .id-left {
      position: absolute;
      top: 2px;
      left: -7px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
      z-index: 2;
      width: 90px; 
    }
   
    .logo {
      position: absolute;
      top: 10px;
      left: 28px;
      width: 43px;
      height: 43px;
      z-index: 2;
    }

  .school-info {
     position: absolute;
    top: 55px;
    left: -12px;
    width: 120px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    gap: 0;
    text-align: center;
  }
  .school-name {
    font-size: 7px;
    font-weight: bold;
    color: #222;
    line-height: 1.0;
    text-align: center;
  }
  .school-address {
    font-size: 6px;
    color: #222;
    margin-top: -2px;
    font-weight: 500;
  }

  .qr {
    position: absolute;
    top: 78px;
    left: 14px;
    width: 70px;
    height: 70px;

    object-fit: cover;
    background: #fff;
    z-index: 2;


  }

  .signature {
    top: auto;
    left: auto;
    width: 220px !important;
    height:auto;
    object-fit: contain;
  }

  .student-img {
   
    top: 0;
    left: 0;
    object-fit: fill;
    border-radius: 0 0 0px 0px;
    border: none;
    background: transparent;
 
  }

    .bottom-content {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;

      z-index: 2;
    }

  .name-block {
    margin-bottom: 0px;
    padding: 0 5px 2px 5px;
  }

  .name {
    font-size: 16px;
    font-weight: bold;
    line-height: 1.4; /* mas dikit */
    text-align: right;
    color: #fff;
    letter-spacing: 1px;
    z-index: 2;
    margin-bottom: -6px;
  }

  .name span {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-top: -6px; /* dikit sa last name */
    display: block;
    line-height: 1.05;
  }

    .info-row {
      display: flex;
      justify-content: space-between;
      width: 100%;
      font-size: 10px;
      color: #fff;
      margin-top: 0px;
    }
    .info-row-child {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 0;
      justify-content: end; /* tanggalin ang extra space */
      gap: 2px;           /* tanggalin ang gap */
    }
    /* Adjust label and value font size */
      .info-row-child .label {
        font-size: 8px;   /* mas maliit ang label */
        margin-top: 6px; /* dikit sa value */
        line-height: 1.2;
      }

      .info-row-child .value {
        font-size: 8px;  /* pwede mong adjustan depende sa gusto mo */
        margin-top: -2px; /* dikit sa label */
        line-height: 1.1;
        margin-bottom: 1px;
      }
          .birth {
      text-align: left;
    }

    .address {
      text-align: right;
        font-size: 8px;
    }

    .id-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold;
      background: #fff;
      color: #000000;
      padding: 0px 10px;
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
      height: 300px;
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
      gap: 0.8px;

    }

    .top-text {
      text-align: center;
      font-size: 7px;
    }

    .top-text b {
      font-size: 7px;
    }

    .back-signature {
      position: relative;
      text-align: center;
      margin: 18px 0 4px 0; 
      font-size: 8px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 2px;
      min-height: 0px; 
    }
    .signature-img-wrap {
      position: absolute;
      top: -11px;
      left: 50%;
      transform: translateX(-50%);
      width: 70px;
      height: 28px;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      margin: 0;
      z-index: 2;
    }
    .back-signature-img {
      width: 85px;
      height: 45px;
      object-fit: contain;
      display: block;
    }

    .signature-name {
      font-weight: bold;
      font-size: 7px;
    }
    .director{
      font-size: 7px;
      margin-top: -5px;
    }

    .reminders {
      text-align: center;
      font-size: 7px;
      margin-top: 13px;
    }

    .reminders b {
      font-size: 6px;
    }

    .contact {
      text-align: center;
      font-size: 7px;
      margin-top: 1px;
    }
        .contact_1{
      text-align: center;
      font-size: 6px;
      margin-top: -9px;
      font-weight: bold;
    }

    .contact-name {
      font-weight: bold;
      font-size: 10px;
      margin-top: 2px;
    }

    .contact-number {
      font-size: 9px;
      font-weight:bold;
    }

    .qr-box {
      background: black;
      color: white;
      font-size: 7px;
      text-align: center;
      padding: 4px 2px;
      margin-top: 1px; 
      font-weight: bold;
    }

    .facebook-footer {
      background: #000000;
      color: #fff;
      font-size: 7px;
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


    .switch-btn {
  background: linear-gradient(90deg, #5420B5 60%, #7B3FF2 100%);
  color: #fff;
  border: none;
  outline: none;
  padding: 10px 28px;
  margin: 0 8px;
  border-radius: 24px;
  font-size: 15px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(84,32,181,0.08);
  transition: background 0.2s, transform 0.2s;
    }

    .switch-btn:hover, .switch-btn.active {
      background: linear-gradient(90deg, #2b2a2c 60%, #212122 100%);
      transform: translateY(-2px) scale(1.04);
    }

    .img-drop-area {
      position: absolute;
      overflow: visible;
      width: 100%;
      height: 240px; 
      top: 0;
      left: 0;
      pointer-events: none; 
      box-sizing: border-box; 
      border: none;
      background: transparent;
    }
    #photoDropArea {
      width: 120%;
      height: 240px;
      top: 0;
      left: 0;
      z-index: 1; 
    }
   #signDropArea{
      width: 90px;
      height: 78px;
      top: 150px;
      left: 20px;
      z-index: 3;
    }
    .edit-mode .img-drop-area {
      pointer-events: auto; 
      border: 2px dashed #5420B5;
      background: rgba(84,32,181,0.05);
    }

   
  

</style>

<style>
     @media print {
      html, body {
        zoom: 1.03; 
        padding: 0;
        margin: 0;
      }

      body * {
        visibility: hidden;
      }

      #idWrapper, #idWrapper * {
        visibility: visible;
      }

      #idWrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background: white;
      }

      #idFront, #idBack {
        page-break-before: avoid;
        page-break-after: avoid;
      }

      .front {
        background-color: #b8d3e6 !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      @page {
        margin: 0;
        size: auto;
      }
    
      .back {
        background-color: white !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      .id.back .back-top {
        background-color: white !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }


      .year-cell,
      .semester-cell {
        background-color: black !important;
        color: white !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }


      .rotated-text {
        color: white !important;
        background-color: black !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }


      .first-cell .rotated-text,
      .second-cell .rotated-text {
        background-color: white !important;
        color: black !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      /* Print setup */
      @page {
        margin: 0;
        size: auto;
      }
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
                        <a href="#" class="text-gray-500 hover:text-primary">Update ID</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
             </div>
            </header>
    <div style="width:100%; display:flex; flex-direction:column; align-items:center; margin-top:40px;">
      <div style="margin-bottom: 20px;">
        <button id="showFront" class="switch-btn active">Front</button>
        <button id="showBack" class="switch-btn">Back</button>
        <button id="editBtn" class="switch-btn">Edit</button>
        <button id="saveBtn" class="switch-btn" style="display:none;">Save</button>
        <button id="printBtn" class="switch-btn">Print</button>
        <label for="schoolYearSelect" class="ml-4 text-sm font-medium text-gray-700">
            School Year:
        </label>
        <select id="schoolYearSelect" class="inline-block ml-2 px-3 py-1.5 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700 text-sm">
          <option value="">Select year</option>
          <!-- Dynamic options here -->
        </select>
      </div>
<div class="mt-6">
   <div class="id-wrapper hidden" id="idWrapper">
          <div class="id front" id="idFront" style="display: block;">
            <div class="front-bg"></div>
                <div class="id-left">
                    <img src="assets/img/log.png" class="logo" alt="Logo">
                    <div class="school-info">
                        <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
                        <span class="school-address">Atabay, Hilongos, Leyte</span>
                    </div>
                    <img src="assets/photos/qr.png" class="qr" alt="QR Code" id="qr_code">
                    <div class="img-drop-area" id="signDropArea" style="position: relative;">                   
                          <img
                              src="assets/img/yan.png"
                              class="signature"
                              id="signatureImg"
                              alt="Signature"
                              style="position: absolute;"
                          />                       
                    </div>
                </div>
                <!-- STUDENT PHOTO -->
                <div class="img-drop-area" id="photoDropArea" style="position: relative;">
                    <img
                    src="assets/img/id_final.png"
                    class="student-img"
                    id="studentImg"
                    alt="Student Photo"
                    style="position: absolute; width: 150%; height: 240px;"
                    />
                </div>
                <div class="bottom-content">
                   <div class="esc" style="display: none; text-align: right; margin-right: 7px;">
                    ESC # <span id="esc_number"></span>
                   </div>
                    <div class="name-block">
                      <div class="name">KISTADIO<br><span class="firstname">JHON BRIX P.</span></div>
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
                        <span id="course_span" class="course">BSED-SS</span>
                    </div>
                    <div class="footer">
                        <span>https://mlgcl.edu.ph</span>
                        <span>mlg@mlgcl.edu.ph</span>
                    </div>
                    <div class="esc-logo"style="display: none;">
                      <img src="assets/img/ESC-Logo.png" class="esc-logo" alt="ESC Logo">
                  </div>
            </div>
        </div>

        
        <!-- BACK SIDE -->
            <div class="id back" id="idBack" style="display: block;">
                <div class="id-card-back back-top">
                    <div class="left-content">
                        <div class="left-bar year-strip">
                           <table id="schoolYearTable">
                            <tr>
                              <td class="word-school-year"></td>
                              <td class="year-cell"><div class="rotated-text" id="year-2025-2026">2025-2026</div></td>
                              <td class="empty-cell"></td>
                              <td class="empty-cell"></td>
                            </tr>
                            <tr>
                              <td class="word-school-year"></td>
                              <td class="year-cell"><div class="rotated-text" id="year-2024-2025">2024-2025</div></td>
                              <td class="empty-cell"></td>
                              <td class="empty-cell"></td>
                            </tr>
                            <tr>
                              <td class="word-school-year"><div class="rotated-text">SCHOOL YEAR</div></td>
                              <td class="year-cell"><div class="rotated-text" id="year-2023-2024">2023-2024</div></td>
                              <td class="empty-cell"></td>
                              <td class="empty-cell"></td>
                            </tr>
                            <tr>
                              <td class="word-school-year"></td>
                              <td class="year-cell"><div class="rotated-text" id="year-2022-2023">2022-2023</div></td>
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
                            <div class="signature-img-wrap">
                                <img src="assets/img/yan.png" alt="signature" class="back-signature-img">
                            </div>
                            <div class="signature-name">MARY LILIBETH O. YAN, DEV. ED. D.</div>
                            <div class="director">School Director</div>
                        </div>

                        <div class="reminders">
                            <b class="first">IMPORTANT REMINDERS</b><br>
                            Always wear this ID while inside<br>
                            the school campus.<br>
                            <b class="second">Do not forget your<br>
                            STUDENT ID NUMBER.</b>
                        </div>

                        <div class="contact_1">
                            If lost and found, please surrender<br>
                            this ID to the<br>
                            STUDENT AFFAIRS OFFICE,<br>
                            MLC College of Learning, Inc.,<br>
                            Brgy. Atabay, Hilongos, Leyte
                        </div>

                        <div class="contact">
                        <b> In case of emergency,<br>
                            please contact</b>
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

<script>
  printBtn.onclick = function() 
{
    lastView = idFront.style.display !== 'none' ? 'front' : 'back';
    if (lastView === 'front') {
      idBack.style.display = 'none';
      idFront.style.display = 'block';
    } else {
      idFront.style.display = 'none';
      idBack.style.display = 'block';
    }
    const polygonColor = getComputedStyle(document.querySelector('.front-bg')).backgroundColor;
    let printStyle = document.getElementById('dynamicPrintStyle');
    if (!printStyle) {
      printStyle = document.createElement('style');
      printStyle.id = 'dynamicPrintStyle';
      document.head.appendChild(printStyle);
    }
    printStyle.textContent = `
      @media print {
        .front-bg {
          background: ${polygonColor} !important;
          -webkit-print-color-adjust: exact !important;
          print-color-adjust: exact !important;
          display: block !important;
        }
      }
    `;
    window.print();
};
</script>
 <script>
          const frontBtn = document.getElementById('showFront');
          const backBtn = document.getElementById('showBack');
          frontBtn.onclick = function() {
            document.getElementById('idFront').style.display = 'block';
            document.getElementById('idBack').style.display = 'none';
            frontBtn.classList.add('active');
            backBtn.classList.remove('active');
          };
          backBtn.onclick = function() {
            document.getElementById('idFront').style.display = 'none';
            document.getElementById('idBack').style.display = 'block';
            backBtn.classList.add('active');
            frontBtn.classList.remove('active');
          };
  </script>
<script>
  let newPhotoFile = null;
  let newSignatureFile = null;

  const editBtn = document.getElementById('editBtn');
  const saveBtn = document.getElementById('saveBtn');
  editBtn.onclick = function() {
    document.querySelector('.id.front').classList.toggle('edit-mode');
    saveBtn.style.display = document.querySelector('.id.front').classList.contains('edit-mode') ? 'inline-block' : 'none';
  };


  const photoDropArea = document.getElementById('photoDropArea');
  const studentImg = document.getElementById('studentImg');
  photoDropArea.addEventListener('dragover', function(e) {
    if (!photoDropArea.closest('.edit-mode')) return;
    e.preventDefault();
    photoDropArea.style.background = '#f3eaff';
  });
  photoDropArea.addEventListener('dragleave', function(e) {
    if (!photoDropArea.closest('.edit-mode')) return;
    photoDropArea.style.background = '';
  });
  photoDropArea.addEventListener('drop', function(e) {
    if (!photoDropArea.closest('.edit-mode')) return;
    e.preventDefault();
    photoDropArea.style.background = '';
    const file = e.dataTransfer.files[0];
    if (file && file.type.startsWith('image/')) {
      const reader = new FileReader();
      reader.onload = function(evt) {
        studentImg.src = evt.target.result;
      };
      reader.readAsDataURL(file);
      newPhotoFile = file; 
    }
  });
    const signDropArea = document.getElementById('signDropArea');
    const signatureImg = document.getElementById('signatureImg');
    signDropArea.addEventListener('dragover', function(e) {
      if (!signDropArea.closest('.edit-mode')) return;
      e.preventDefault();
      signDropArea.style.background = '#f3eaff';
    });
    signDropArea.addEventListener('dragleave', function(e) {
      if (!signDropArea.closest('.edit-mode')) return;
      signDropArea.style.background = '';
    });
    signDropArea.addEventListener('drop', function(e) {
      if (!signDropArea.closest('.edit-mode')) return;
      e.preventDefault();
      signDropArea.style.background = '';
      const file = e.dataTransfer.files[0];
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          signatureImg.src = evt.target.result;
        };
        reader.readAsDataURL(file);
        newSignatureFile = file; 
      }
    });
</script>

<script>
function makeDraggableResizable(img, container) {
  let isDragging = false, isResizing = false, resizeDir = '';
  let startX, startY, startLeft, startTop, startWidth, startHeight;

  img.style.position = 'absolute';
  img.style.left = img.style.left || '0px';
  img.style.top = img.style.top || '0px';
  const handles = {};
  const positions = [
    ['tl', 'nwse-resize', '0', '0'],
    ['t', 'ns-resize', '50%', '0'],
    ['tr', 'nesw-resize', '100%', '0'],
    ['r', 'ew-resize', '100%', '50%'],
    ['br', 'nwse-resize', '100%', '100%'],
    ['b', 'ns-resize', '50%', '100%'],
    ['bl', 'nesw-resize', '0', '100%'],
    ['l', 'ew-resize', '0', '50%'],
  ];
  positions.forEach(([dir, cursor, left, top]) => {
    const h = document.createElement('div');
    h.className = 'resize-handle';
    h.dataset.dir = dir;
    h.style.position = 'absolute';
    h.style.width = '12px';
    h.style.height = '12px';
    h.style.background = '#5420B5';
    h.style.border = '2px solid #fff';
    h.style.borderRadius = '50%';
    h.style.cursor = cursor;
    h.style.left = left;
    h.style.top = top;
    h.style.transform = 'translate(-50%, -50%)';
    h.style.zIndex = 99;
    h.style.display = 'none';
    container.appendChild(h);
    handles[dir] = h;

    h.addEventListener('mousedown', function(e) {
      if (!container.closest('.edit-mode')) return;
      isResizing = true;
      resizeDir = dir;
      startX = e.clientX;
      startY = e.clientY;
      startLeft = img.offsetLeft;
      startTop = img.offsetTop;
      startWidth = img.offsetWidth;
      startHeight = img.offsetHeight;
      e.stopPropagation();
      document.body.style.userSelect = 'none';
    });
  });

  function updateHandles() {
    const show = container.closest('.edit-mode');
    Object.values(handles).forEach(h => h.style.display = show ? 'block' : 'none');
  }
  updateHandles();

  img.addEventListener('mousedown', function(e) {
    if (!container.closest('.edit-mode')) return;
    if (e.target.classList.contains('resize-handle')) return;
    isDragging = true;
    startX = e.clientX;
    startY = e.clientY;
    startLeft = img.offsetLeft;
    startTop = img.offsetTop;
    document.body.style.userSelect = 'none';
  });

  document.addEventListener('mousemove', function(e) {
    if (isDragging) {
      let dx = e.clientX - startX;
      let dy = e.clientY - startY;
      img.style.left = (startLeft + dx) + 'px';
      img.style.top = (startTop + dy) + 'px';
    }
    if (isResizing) {
      let dx = e.clientX - startX;
      let dy = e.clientY - startY;
      let newLeft = startLeft, newTop = startTop, newWidth = startWidth, newHeight = startHeight;
      if (resizeDir.includes('l')) {
        newLeft = startLeft + dx;
        newWidth = startWidth - dx;
      }
      if (resizeDir.includes('r')) {
        newWidth = startWidth + dx;
      }
      if (resizeDir.includes('t')) {
        newTop = startTop + dy;
        newHeight = startHeight - dy;
      }
      if (resizeDir.includes('b')) {
        newHeight = startHeight + dy;
      }
      newWidth = Math.max(30, newWidth);
      newHeight = Math.max(30, newHeight);
      img.style.left = newLeft + 'px';
      img.style.top = newTop + 'px';
      img.style.width = newWidth + 'px';
      img.style.height = newHeight + 'px';
    }
  });

  document.addEventListener('mouseup', function() {
    isDragging = false;
    isResizing = false;
    document.body.style.userSelect = '';
  });

  document.getElementById('editBtn').addEventListener('click', updateHandles);
}

makeDraggableResizable(
  document.getElementById('studentImg'),
  document.getElementById('photoDropArea')
);
makeDraggableResizable(
  document.getElementById('signatureImg'),
  document.getElementById('signDropArea')
);
</script>

<script>
const APP_URL = '<?= APP_URL ?>';
saveBtn.onclick = async function () {
 const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get("id"); 
console.log("ID from URL:", id); 
  try {
    const completeRes = await fetch(`${APP_URL}/api/completeid/${id}`, {
      method: "GET",
      headers: {
        "Accept": "application/json",
        "Authorization": "Bearer " + localStorage.getItem("auth_token")
      }
    });

    const data = await completeRes.json();
    const schoolYearSelect = document.getElementById('schoolYearSelect');
    const schoolYear = schoolYearSelect?.value ? schoolYearSelect.value : (data.school_year || '');
    const studentImg = document.getElementById('studentImg');
    const photoPosition = JSON.stringify({
      left: studentImg.style.left,
      top: studentImg.style.top,
      width: studentImg.style.width,
      height: studentImg.style.height
    });

    const signatureImg = document.getElementById('signatureImg');
    const signaturePosition = JSON.stringify({
      left: signatureImg.style.left,
      top: signatureImg.style.top,
      width: signatureImg.style.width,
      height: signatureImg.style.height
    });

    let response;

    if (newPhotoFile || newSignatureFile) {
      const formData = new FormData();
      formData.append('first_name', data.first_name || '');
      formData.append('last_name', data.last_name || '');
      formData.append('middle_name', data.middle_name || '');
      formData.append('address', data.address || '');
      formData.append('course', data.course || '');
      formData.append('contact', data.contact || '');
      formData.append('birth_date', data.birth_date || '');
      formData.append('photo_position', photoPosition);
      formData.append('signature_position', signaturePosition);
      formData.append('qr_code', data.qr_code || '');
      formData.append('emergency_contact_name', data.emergency_contact_name || '');
      formData.append('emergency_contact_number', data.emergency_contact_number || '');
      formData.append('school_year', schoolYear);
      if (newPhotoFile) formData.append('image', newPhotoFile);
      if (newSignatureFile) formData.append('signature', newSignatureFile);

      response = await fetch(`${APP_URL}/api/completed/${id}`, {
        method: 'POST',
        headers: {
          'Authorization': 'Bearer ' + localStorage.getItem("auth_token")
        },
        body: formData
      });
    } else {
      const payload = {
        first_name: data.first_name || '',
        last_name: data.last_name || '',
        middle_name: data.middle_name || '',
        address: data.address || '',
        course: data.course || '',
        contact: data.contact || '',
        birth_date: data.birth_date || '',
        qr_code: data.qr_code || '',
        emergency_contact_name: data.emergency_contact_name || '',
        emergency_contact_number: data.emergency_contact_number || '',
        photo_position: photoPosition,
        signature_position: signaturePosition,
        school_year: schoolYear
      };

      response = await fetch(`${APP_URL}/api/completed/${id}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + localStorage.getItem("auth_token")
        },
        body: JSON.stringify(payload)
      });
    }

    if (response.ok) {
      Swal.fire('Saved!', 'ID layout has been saved.', 'success');
      document.querySelector('.id.front').classList.remove('edit-mode');
      saveBtn.style.display = 'none';
      newPhotoFile = null;
      newSignatureFile = null;
    } else {
      const error = await response.json();
      Swal.fire('Error', error.message || 'Failed to save changes.', 'error');
    }
  } catch (err) {
    console.error(err);
    Swal.fire('Error', 'An unexpected error occurred.', 'error');
  }
};


</script>

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


  document.addEventListener("DOMContentLoaded", async () => {
  console.log("Edit page loaded");

  const urlParams = new URLSearchParams(window.location.search);
  const completeId = urlParams.get("id");

  if (!completeId) {
    console.error("No complete_id found in URL");
    return;
  }

  try {
    const response = await fetch(`${APP_URL}/api/showcompleteid/${completeId}`, {
      method: "GET",
      headers: {
        "Accept": "application/json",
        "Authorization": "Bearer " + localStorage.getItem("auth_token")
      }
    });

    if (!response.ok) throw new Error("Record not found");
    const data = await response.json();
    const baseYear = data.school_year?.split("-")[0];
    if (baseYear && !isNaN(parseInt(baseYear))) {
      const start = parseInt(baseYear);
      const yearTexts = document.querySelectorAll(".year-cell .rotated-text");
      for (let i = 0; i < 4 && i < yearTexts.length; i++) {
        const y1 = start + i;
        const y2 = y1 + 1;
        const schoolYearStr = `${y1}-${y2}`;
        const target = yearTexts[yearTexts.length - 1 - i];
        target.textContent = schoolYearStr;
        target.id = `year-${schoolYearStr}`;
      }
    }
    const schoolYear = data.school_year;
    document.querySelectorAll(".year-cell .rotated-text").forEach((el) => {
      if (el.textContent.trim() === schoolYear) {
        el.style.fontWeight = "bold";
        el.style.borderRadius = "4px";
        el.style.padding = "2px 4px";
      }
    });

    const lastName = (data.last_name || "").toUpperCase();
    const firstName = (data.first_name || "").toUpperCase();
    const middleInitial = data.middle_name ? data.middle_name.charAt(0).toUpperCase() + "." : "";

    let birthDate = data.birth_date || "";
    if (birthDate.includes("T")) birthDate = birthDate.split("T")[0];
    if (birthDate) {
      const dateObj = new Date(birthDate);
      birthDate = dateObj.toLocaleDateString("en-US", {
        year: "numeric", month: "2-digit", day: "2-digit"
      });
    }

    function toTitleCase(str) {
      return str.toLowerCase().replace(/\b\w/g, c => c.toUpperCase());
    }

    let address = data.address || "";
    address = toTitleCase(address);
    const pobMatch = address.match(/([A-Za-z\s]+Pob\.\s*Hilongos)/i);
    if (pobMatch) {
      address = "Brgy. " + pobMatch[1].trim();
    } else {
      const brgyIndex = address.indexOf("Brgy.");
      const hilongosIndex = address.indexOf("Hilongos");
      if (brgyIndex !== -1 && hilongosIndex !== -1) {
        address = address.substring(brgyIndex, hilongosIndex + "Hilongos".length);
      }
    }

    const student_id = data.student_id || "";
    const isJhs = student_id.toUpperCase().startsWith("JHS");
    const isShsOrJhs = student_id.toUpperCase().startsWith("SHS") || isJhs;

    const courseSpan = document.querySelector(".course");
    let course = (data.course || "").toLowerCase();
    let polygonColor = "#FFCC00";

    if (course.includes("elementary")) {
      course = "BEED"; polygonColor = "#6EC6FF";
    } else if (course.includes("information technology")) {
      course = "BSIT"; polygonColor = "#FF9800";
    } else if (course.includes("social studies")) {
      course = "BSED-SS"; polygonColor = "#5420B5";
    } else if (course.includes("math")) {
      course = "BSED-MATH"; polygonColor = "#43A047";
    } else {
      const lowerCourse = course.trim().toLowerCase();
      if (["tvl-ict", "abm", "humms"].includes(lowerCourse)) {
        course = lowerCourse.toUpperCase(); polygonColor = "#FFCC00";
      } else {
        course = course.toUpperCase().substring(0, 30);
      }
    }
    document.querySelector(".front-bg").style.background = polygonColor;
    const fontColor = isShsOrJhs ? '#000' : '#fff';
    document.querySelector(".name").style.color = fontColor;
    document.querySelector(".info-row-child .value").style.color = fontColor;
    document.querySelector(".info-row-child .address").style.color = fontColor;
    document.querySelector(".info-row-child .label").style.color = fontColor;
    document.querySelectorAll(".footer span").forEach(e => e.style.color = fontColor);
    document.querySelector(".name").innerHTML = `${lastName}<br><span class="firstname">${firstName} ${middleInitial}</span>`;
    document.querySelector(".info-row-child .value").textContent = birthDate;
    document.querySelector(".info-row-child .address").textContent = address;
    document.querySelector(".student-id").textContent = student_id;
    document.querySelector(".contact-name").textContent = data.emergency_contact_name || "N/A";
    document.querySelector(".contact-number").textContent = data.emergency_contact_number || "N/A";
    if (isShsOrJhs && courseSpan) {
      let courseText = course;
      if (data.course && data.course.toLowerCase().startsWith("lrn")) {
        courseText = data.course;
      }
      courseSpan.textContent = courseText;
      if (isJhs) {
        courseSpan.style.fontSize = "9px"; 
      } else {
        courseSpan.style.fontSize = "14px";
      }
    } else if (courseSpan) {
      courseSpan.textContent = course;
      courseSpan.style.fontSize = "14px";
    }
    if (data.qr_code) document.querySelector("#qr_code").src = data.qr_code;
    const escSpan = document.getElementById("esc_number");
    const escContainer = document.querySelector(".esc");
    const escLogo = document.querySelector(".esc-logo");

    const escHasValue = data.esc && data.esc.trim() !== "";

    if (escHasValue) {
      if (escSpan && escContainer) {
        escSpan.textContent = data.esc;
        escContainer.style.display = "block";
      }
      if (escLogo) escLogo.style.display = "block";
    } else {
      if (escContainer) escContainer.style.display = "none";
      if (escLogo) escLogo.style.display = "none";
    }
    const studentImg = document.getElementById("studentImg");
    if (studentImg && data.image) {
      studentImg.src = `${APP_URL}/storage/${data.image}`;
      studentImg.style.position = "absolute";
      studentImg.style.objectFit = "cover";
    }
    const signatureImg = document.getElementById("signatureImg");
    if (signatureImg && data.signature) {
      signatureImg.src = `${APP_URL}/storage/${data.signature}`;
      signatureImg.style.position = "absolute";
      signatureImg.style.objectFit = "contain";
    }
    if (data.photo_position && studentImg) {
      try {
        const pos = JSON.parse(data.photo_position);
        Object.assign(studentImg.style, pos);
      } catch (e) {}
    }
    if (data.signature_position && signatureImg) {
      try {
        const pos = JSON.parse(data.signature_position);
        Object.assign(signatureImg.style, pos);
      } catch (e) {}
    }
    if (data.firstname_fontsize) {
      const span = document.querySelector(".name .firstname");
      if (span) span.style.fontSize = data.firstname_fontsize + "px";
    }
    if (data.lastname_fontsize) {
      const span = document.querySelector(".name-block .name");
      if (span) span.style.fontSize = data.lastname_fontsize + "px";
    }

  } catch (error) {
    console.error("Error fetching student data:", error);
  }
});
</script>


  <script>
  for (let year = 1995; year <= 2030; year++) {
    const option = document.createElement('option');
    option.value = `${year}-${year + 1}`;
    option.textContent = `${year}-${year + 1}`;
    schoolYearSelect.appendChild(option);
  }
</script>


