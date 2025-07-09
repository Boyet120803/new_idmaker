<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ID Card Exact Clone</title>
  <style>
    body {
      background: #e5e5e5;
      padding: 40px;
    }
    .id-card {
      width: 259px;
      height: 403px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.18);
      overflow: hidden;
      font-family: Arial, sans-serif;
      position: relative;
      border: 1.5px solid #e0e0e0;
    }
    /* Fixed background logo */
    .bg-logo {
      position: absolute;
      top: 60px;
      left: 50%;
      transform: translateX(-50%);
      width: 170px;
      opacity: 0.13;
      z-index: 0;
      pointer-events: none;
    }
    /* Orange bar for LRN */
    .lrn-bar {
      position: absolute;
      top: 0;
      right: 0;
      width: 44px;
      height: 100%;
      background: #f58220;
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      z-index: 2;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
      overflow: hidden;
    }
    .lrn-label {
      font-size: 12px;
      font-weight: bold;
      margin-top: 18px;
      margin-bottom: 6px;
      letter-spacing: 2px;
      writing-mode: vertical-rl;
      text-orientation: mixed;
    }
    .lrn-number {
      font-size: 19px;
      font-weight: bold;
      letter-spacing: 2px;
      writing-mode: vertical-rl;
      text-orientation: mixed;
      margin-bottom: 0;
    }
    /* Header logo and info */
    .header-logo {
      position: absolute;
      top: 18px;
      left: 18px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #fff;
      border: 2px solid #fff;
      object-fit: contain;
      z-index: 3;
    }
    .header-info {
      position: absolute;
      top: 18px;
      left: 66px;
      z-index: 3;
      color: #222;
      width: 140px;
    }
    .header-info .school-name {
      font-size: 14px;
      font-weight: bold;
      letter-spacing: 0.5px;
      margin-bottom: 0;
    }
    .header-info .school-id {
      font-size: 11px;
      font-weight: normal;
      color: #222;
      margin-top: 2px;
      display: block;
    }
    /* Signature */
    .signature {
      position: absolute;
      top: 80px;
      left: 30px;
      width: 60px;
      height: 28px;
      object-fit: contain;
      opacity: 0.85;
      z-index: 3;
    }
    /* Student photo */
    .photo {
      position: absolute;
      top: 95px;
      left: 50%;
      transform: translateX(-50%);
      width: 110px;
      height: 135px;
      object-fit: cover;
      border-radius: 8px;
      border: 2px solid #fff;
      background: #eaeaea;
      z-index: 3;
    }
    /* Orange info box */
    .orange-box {
      position: absolute;
      left: 0;
      bottom: 38px;
      width: 215px;
      height: 110px;
      background: #f58220;
      border-top-right-radius: 12px;
      z-index: 1;
    }
    /* Info section */
    .info-section {
      position: absolute;
      left: 0;
      bottom: 60px;
      width: 215px;
      padding: 0 16px;
      z-index: 3;
      color: #fff;
    }
    .info-section .lastname {
      font-size: 18px;
      font-weight: bold;
      letter-spacing: 1px;
      color: #fff;
      margin-bottom: 0;
      text-shadow: 1px 1px 2px #b85a0a;
    }
    .info-section .firstname {
      font-size: 13px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 7px;
      text-shadow: 1px 1px 2px #b85a0a;
    }
    .info-section .label {
      font-size: 11px;
      color: #fff;
      font-weight: normal;
      margin-bottom: 0;
    }
    .info-section .value {
      font-size: 11px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 2px;
    }
    .info-section .address {
      font-size: 11px;
      color: #fff;
      margin-bottom: 8px;
    }
    /* QR code */
    .qr {
      position: absolute;
      right: 52px;
      bottom: 70px;
      width: 60px;
      height: 60px;
      background: #fff;
      border-radius: 6px;
      padding: 4px;
      object-fit: contain;
      z-index: 4;
      border: 1px solid #eee;
    }
    /* Footer course */
    .footer {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: #fff;
      color: #222;
      font-size: 12px;
      font-weight: bold;
      text-align: center;
      padding: 8px 0 7px 0;
      letter-spacing: 1px;
      z-index: 5;
      border-top: 2px solid #f58220;
    }
  </style>
</head>
<body>
  <div class="id-card">
    <img src="bg-logo.png" class="bg-logo" alt="BG Logo">
    <div class="lrn-bar">
      <div class="lrn-label">LRN</div>
      <div class="lrn-number">121362090028</div>
    </div>
    <img src="logo.png" class="header-logo" alt="Logo">
    <div class="header-info">
      <div class="school-name">SENIOR HIGH SCHOOL</div>
      <span class="school-id">SCHOOL ID: 303374</span>
    </div>
    <img src="signature.png" class="signature" alt="Signature">
    <img src="photo.jpg" class="photo" alt="Photo">
    <div class="orange-box"></div>
    <div class="info-section">
      <div class="lastname">VILLAHERMOSA</div>
      <div class="firstname">BERNAN JAY B.</div>
      <div class="label">Date of Birth:</div>
      <div class="value">12/15/2003</div>
      <div class="label">Address:</div>
      <div class="address">Marangog, Hilongos</div>
    </div>
    <img src="qr.png" class="qr" alt="QR">
    <div class="footer">
      DRIVING NC II AND AUTOMOTIVE SERVICING NC I
    </div>
  </div>
</body>
</html>