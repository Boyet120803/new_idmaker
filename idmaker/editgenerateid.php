<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<style>
 


    .id-wrapper {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
        transform: scale(2);      /* adjust 1.2 to your preferred zoom level */
  transform-origin: top center;
  transition: transform 0.2s;
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

    object-fit: cover;
    background: #fff;
    z-index: 2;

  }

  .signature {
 
    top: 150px;
    left: 20px;
    width: 55px;
    height: 78px;
    object-fit: contain;
 
  }

  .student-img {
   
    top: 0;
    left: 0;
    /* width: 150%;
    height: 240px; adjust as needed para mo-fit gyud sa taas sa polygon */
    object-fit: fill;
    border-radius: 0 0 0px 0px; /* optional: rounded bottom corners */
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
  margin-bottom: 0px;
}

.name span {
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.5px;
  margin-top: -2px; /* dikit sa last name */
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
        font-size: 7px;   /* mas maliit ang label */
        margin-top: 6px; /* dikit sa value */
        line-height: 1.2;
      }

      .info-row-child .value {
        font-size: 10px;  /* pwede mong adjustan depende sa gusto mo */
        margin-top: -2px; /* dikit sa label */
        line-height: 1.1;
        margin-bottom: 1px;
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
      /* width: 204px; */
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
  position: relative; /* para anchor ng absolute sa loob */
  text-align: center;
  margin: 18px 0 4px 0; /* dagdagan ang taas para di matakpan ang name */
  font-size: 8px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
  min-height: 0px; /* para may space sa taas */
}
.signature-img-wrap {
  position: absolute;
  top: -11px; /* adjust mo depende sa gusto mong taas */
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
      font-size: 7px;
    }

    .contact {
      text-align: center;
      font-size: 7px;
      margin-top: 1px;
    }
        .contact1{
      text-align: center;
      font-size: 7px;
      margin-top: 1px;
      font-weight: bold;
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
  height: 240px; /* adjust as needed for photo */
  top: 0;
  left: 0;
  pointer-events: none; /* default: di ma-edit */
   box-sizing: border-box; /* <-- important para di lumaki/lumiit pag may border */
  border: none;
  background: transparent;
}
#photoDropArea {
  width: 120%;
  height: 240px;
  top: 0;
  left: 0;
  z-index: 1; /* photo area sa ilalim */
}
#signDropArea {
  width: 55px;
  height: 78px;
  top: 150px;
  left: 20px;
  z-index: 3;
}
.edit-mode .img-drop-area {
  pointer-events: auto; /* pwede na mag-drag pag edit mode */
  border: 2px dashed #5420B5;
  background: rgba(84,32,181,0.05);
}

@media print {
  body *:not(.id):not(.id *) {
    /* font-style: ; */
    visibility: hidden !important;
    
  }
    .name,
  .name span,
  .info-row-child .label,
  .info-row-child .value,
  .info-row-child .address,
   .info-row-child .dateofbirth,
  .footer span {
    color: #fff !important;
    -webkit-print-color-adjust: exact !important;
    print-color-adjust: exact !important;
    text-shadow: none !important;
  }
  .id.front, .id.back {
    visibility: visible !important;
    position: absolute !important;
    left: 0; top: 0;
    width: 2.7in !important;
    height: 4.2in !important;
    box-shadow: none !important;
    z-index: 9999 !important;
    display: none !important;

  }
 
  .id.front[style*="display: block"], .id.back[style*="display: block"] {
    display: block !important;
  }
  .id-wrapper, .mt-6 {
    transform: none !important;
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
    height: auto !important;
    display: block !important;
  }
  body, html {
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
    height: auto !important;
    background: white !important;
    font-family: 'Montserrat', sans-serif !important;
  }
  .switch-btn, #editBtn, #saveBtn, #printBtn {
    display: none !important;
  }
 
.img-drop-area img{
  width: 2.9in !important;
  height: 3.0in !important;
}
.id-left .signature{
  width: 3.8in !important;
  height: 2.0in !important;

}
.name-block .name{
  font-size: 0.3in !important;
  line-height: 1.2 !important;
}

.id-left .signature{
    top: 40px !important;
    left: 15px !important;
    width: 60px !important;
    height: 85px !important;
    object-fit: contain;
}
.id-left .qr{
  width: 0.9in !important;
  height: 0.9in !important;
  position: absolute !important;  
  left: 20px !important;
  margin-top: 3px !important;
}
.id-left .school-name{
   font-size: 9px !important;
    margin-right: -17px !important;
   
}
.id-left .school-address{
  font-size: 7px !important;
  margin-top: 2px !important;
  margin-right: -17px !important;
  font-weight: bold !important;
}
.id-left .logo{
    position: absolute;
    top: 18px !important;
    left: 40px !important;
    width: 43px !important;
    height: 43px !important;
    z-index: 2;
}

.name-block .name{
  font-size: 0.3in !important;
  line-height: 1.2 !important;
}
.name-block .name span{
  font-size: 0.2in !important;
  line-height: 1.1 !important;  
}
.name-block{
  margin-bottom: 0px !important;
  padding: 0 10px 2px 5px !important;
}
.info-row{
  padding: 5 10px 2px 10px !important;
  font-size: 11px !important;
  font-weight: bold !important;
}

.info-row .label{

  font-size: 9px !important;
  font-weight: bold !important;
}
.info-row .value{

  font-size: 11px !important;
  font-weight: bold !important;
}


.id-row{
  padding: 5 10px 2px 10px !important;
  height: 23px !important;
  font-size: 15px !important;

}

.footer{
  padding: 5 10px 2px 10px !important;
  font-weight: bold !important;
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
                        <a href="#" class="text-gray-500 hover:text-primary">Generate ID</a>
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
  </div>
 <div class="mt-6">
    <div class="id-wrapper">
    <!-- FRONT SIDE -->
 
<div class="id front" id="idFront" style="display: block;">
  <div class="front-bg"></div>
  <div class="id-left">
    <img src="assets/img/log.png" class="logo" alt="Logo">
    <div class="school-info">
      <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
      <span class="school-address">Brgy. Atabay, Hilongos, Leyte</span>
    </div>
    <img src="assets/photos/qr.png" class="qr" alt="QR Code" id="qr_code">
    <div class="img-drop-area" id="signDropArea">
      <img src="assets/img/yan.png" class="signature" id="signatureImg" alt="Signature">
    </div>
  </div>
  <div class="img-drop-area" id="photoDropArea">
  <img src="assets/img/id_final.png" class="student-img" id="studentImg" alt="Student Photo" style="width:150%;height:240px;">
</div>
  <div class="bottom-content">
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
      <span class="course">BSED-SS</span>
    </div>
    <div class="footer">
      <span>https://mlgcl.edu.ph</span>
      <span>mlg@mlgcl.edu.ph</span>
    </div>
  </div>
</div>

<!-- BACK SIDE -->

    <div class="id back" id="idBack" style="display: none;">
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
                    <div class="signature-img-wrap">
                        <img src="assets/img/yan.png" alt="signature" class="back-signature-img">
                    </div>
                    <div class="signature-name">MARY LILIBETH O. YAN, DEV. ED. D.</div>
                    <div class="director">School Director</div>
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

                <div class="contact1">
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

<script>
printBtn.onclick = function() {
  lastView = idFront.style.display !== 'none' ? 'front' : 'back';
  if (lastView === 'front') {
    idBack.style.display = 'none';
    idFront.style.display = 'block';
  } else {
    idFront.style.display = 'none';
    idBack.style.display = 'block';
  }

  // --- DYNAMIC PRINT COLOR PATCH ---
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
  // --- END PATCH ---

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

// Drag and drop for photo
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
    newPhotoFile = file; // <-- Mark as new photo
  }
});

// Drag and drop for signature
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
    newSignatureFile = file; // <-- Mark as new signature
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

  // 8 handles: tl, t, tr, r, br, b, bl, l
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
      // Direction logic
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
      // Minimum size
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

// Init for photo
makeDraggableResizable(
  document.getElementById('studentImg'),
  document.getElementById('photoDropArea')
);
// Init for signature
makeDraggableResizable(
  document.getElementById('signatureImg'),
  document.getElementById('signDropArea')
);
</script>

<script>

 saveBtn.onclick = async function() {
  const urlParams = new URLSearchParams(window.location.search);
  const studentId = urlParams.get("student_id");

  // Fetch pending data para makuha ang info
  const pendingRes = await fetch(`http://backendidmaker.test/api/pending/${studentId}`, {
    method: "GET",
    headers: {
      "Accept": "application/json",
      "Authorization": "Bearer " + localStorage.getItem("auth_token")
    }
  });
  const data = await pendingRes.json();

  // Get positions
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
  formData.append('student_id', studentId);
  formData.append('first_name', data.first_name);
  formData.append('last_name', data.last_name);
  formData.append('middle_name', data.middle_name);
  formData.append('address', data.address);
  formData.append('course', data.course);
  formData.append('contact', data.contact);
  formData.append('birth_date', data.birth_date);
  formData.append('photo_position', photoPosition);
  formData.append('signature_position', signaturePosition);
  formData.append('qr_code', data.qr_code || '');

  // Ito ang tamang paraan para sa nested array/object
  if (typeof data.emergency_contact === 'object' && data.emergency_contact !== null) {
    formData.append('emergency_contact[name]', data.emergency_contact.name || '');
    formData.append('emergency_contact[number]', data.emergency_contact.number || '');
  } else {
    formData.append('emergency_contact[name]', '');
    formData.append('emergency_contact[number]', '');
  }

  if (newPhotoFile) formData.append('image', newPhotoFile);
  if (newSignatureFile) formData.append('signature', newSignatureFile);

    response = await fetch('http://backendidmaker.test/api/completed', {
      method: 'POST',
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem("auth_token")
      },
      body: formData
    });
  } else {
    // Walang bagong upload, JSON lang
    const payload = {
      student_id: studentId,
      first_name: data.first_name,
      last_name: data.last_name,
      middle_name: data.middle_name,
      address: data.address,
      course: data.course,
      contact: data.contact,
      emergency_contact: data.emergency_contact,
      birth_date: data.birth_date,
      photo_position: photoPosition,
      signature_position: signaturePosition,
      qr_code: data.qr_code || ''

    };

    response = await fetch('http://backendidmaker.test/api/completed', {
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
    Swal.fire('Error', 'Failed to save changes.', 'error');
  }
};
</script>

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


        document.addEventListener("DOMContentLoaded", () => {
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



     document.addEventListener("DOMContentLoaded", async () => {
    const urlParams = new URLSearchParams(window.location.search);
    const studentId = urlParams.get("student_id");

    if (!studentId) {
        console.error("No student_id found in URL");
        return;
    }

    try {
        const response = await fetch(`http://backendidmaker.test/api/pending/${studentId}`, {
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

        // Pangalan: LASTNAME (all caps), tapos FIRSTNAME M.
        const lastName = (data.last_name || "").toUpperCase();
        const firstName = (data.first_name || "").toUpperCase();
        const middleInitial = data.middle_name ? data.middle_name.charAt(0).toUpperCase() + "." : "";

        // Birthday: tanggalin ang oras at timezone
          let birthDate = data.birth_date || "";
          if (birthDate.includes("T")) {
              birthDate = birthDate.split("T")[0];
          }
          if (birthDate) {
              const dateObj = new Date(birthDate);
             birthDate = dateObj.toLocaleDateString("en-US", {
    year: "numeric",
    month: "2-digit",
    day: "2-digit"
});
          }

// Function para gawing Title Case
function toTitleCase(str) {
    return str.toLowerCase().replace(/\b\w/g, c => c.toUpperCase());
}

// Address: kunin lang ang "Eastern Pob. Hilongos" at lagyan ng "Brgy." sa unahan
let address = data.address || "";

// Convert to Title Case muna para standardized
address = toTitleCase(address);

// Hanapin ang "Pob." at "Hilongos"
const pobMatch = address.match(/([A-Za-z\s]+Pob\.\s*Hilongos)/i);
if (pobMatch) {
    address = "Brgy. " + pobMatch[1].trim();
} else {
    // fallback: hanapin ang "Brgy." at "Hilongos"
    const brgyIndex = address.indexOf("Brgy.");
    const hilongosIndex = address.indexOf("Hilongos");
    if (brgyIndex !== -1 && hilongosIndex !== -1) {
        address = address.substring(brgyIndex, hilongosIndex + "Hilongos".length);
    }
}

        // Student ID
        const student_id = data.student_id || "";

       let course = (data.course || "").toLowerCase();
        let polygonColor = "#5420B5"; // default violet

        if (course.includes("elementary")) {
            course = "BEED";
            polygonColor = "#6EC6FF"; // sky blue
        } else if (course.includes("information technology")) {
            course = "BSIT";
            polygonColor = "#FF9800"; // orange
        } else if (course.includes("social studies")) {
            course = "BSED-SS";
            polygonColor = "#5420B5"; // orange
        }else if (course.includes("math")) {
            course = "BSED-MATH";
            polygonColor = "#43A047"; // orange
        }
      else {
            course = course.toUpperCase().substring(0, 6); // fallback
        }

        // BAGUHIN ANG POLYGON COLOR
        document.querySelector('.front-bg').style.background = polygonColor;
        // GAWING WHITE ANG TEXT NG NAME, BIRTHDATE, ADDRESS, WEBSITE, AT EMAIL
document.querySelector('.name').style.color = '#fff';
document.querySelector('.info-row-child .value').style.color = '#fff';
document.querySelector('.info-row-child .address').style.color = '#fff';
document.querySelectorAll('.footer span').forEach(e => e.style.color = '#fff');
        // QR code
        document.querySelector("#qr_code").src = data.qr_code;

        // Ilagay sa ID card
        document.querySelector(".name").innerHTML = `${lastName}<br><span>${firstName} ${middleInitial}</span>`;
        document.querySelector(".info-row-child .value").textContent = birthDate;
        document.querySelector(".info-row-child .address").textContent = address;
        document.querySelector(".student-id").textContent = student_id;
        document.querySelector(".course").textContent = course;

    } catch (error) {
        console.error("Error fetching student data:", error);
    }
});

    </script>
