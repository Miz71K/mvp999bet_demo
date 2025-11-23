<?php
require_once 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $siteName = $title['setting_value'];
  $page = basename($_SERVER['REQUEST_URI'], ".php");
  $pageTitle = !empty($page) ? ucwords(str_replace('_', ' ', $page)) : "";
  $fullTitle = !empty($pageTitle) ? "$siteName - $pageTitle" : $siteName;
  $rnd = uniqid();
  $url = getBaseUrl() . "{$_SERVER['REQUEST_URI']}";
  ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#d4d4d8" />
  <title><?= $fullTitle ?></title>
  <meta name="description" content="<?= $description['setting_value'] ?>" />
  <link rel="manifest" href="/manifest.json?_=<?= $rnd ?>" />
  <meta name="keywords" content="<?= $keywords['setting_value'] ?>" />
  <meta name="robots" content="index, follow, nocache" />
  <link rel="canonical" href="<?= $url ?>" />
  <meta property="og:title" content="<?= $title['setting_value'] ?>" />
  <meta property="og:description" content="<?= $description['setting_value'] ?>" />
  <meta property="og:url" content="<?= $url ?>" />
  <meta property="og:site_name" content="<?= $title['setting_value'] ?>" />
  <meta property="og:image" content="<?= $logo_play['setting_value'] ?>" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= $title['setting_value'] ?>" />
  <meta name="twitter:description" content="<?= $description['setting_value'] ?>" />
  <meta name="twitter:image" content="<?= $logo_play['setting_value'] ?>" />
  <link rel="shortcut icon" href="<?= $logo_play['setting_value'] ?>?_=<?= $rnd ?>" sizes="32x32" type="image/x-icon" />
  <link rel="icon" href="<?= $logo_play['setting_value'] ?>?_=<?= $rnd ?>" sizes="32x32" type="image/png" />
  <link rel="apple-touch-icon" href="<?= $logo_play['setting_value'] ?>?_=<?= $rnd ?>" sizes="32x32" type="image/png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous" />
  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
  <link
    href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css"
    rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="asset/css/style.css?_=<?= $rnd ?>">

  <script>
    console.disableYellowBox = true;
  </script>






</head>

<body class="d-flex flex-column h-100">
  <div class="wrapper">
    <nav class="header-dashboard">
      <div class="w-24 bandcenter" onclick="openTab(event, 'account')">
        <img src="<?= $logo_main['setting_value'] ?>" />
      </div>

      <div class="x-hamburger js-hamburger-toggle sidebarbtn sidebarCollapse">
        <img src="<?= $user_profile['setting_value'] ?>" class="w-9 h-9 hamburger-user-icon" />

        <span></span>
        <span></span>
      </div>
      <div class="menuslidebox animate__animated animate__fadeInDown">
        <div class="containbox">
          <div>
            <div class="flex flex-row justify-between mb-3 text-white">
              <div class="flex flex-row justify-between text-yellow">
                <a href="javascript:void(0)" class="closebtn text-app_green hover:text-app_green">
                  <i class="fa-solid fa-angles-left"></i>
                </a>
              </div>
            </div>
            <div class="divide-y divide-app_gray">
              <div id="user-data" href="#" class="app__user-login">
                <i class="fa fa-user"></i> 0944989545
              </div>
              <div class="py-2">
                <div class="user-info">
                  <img
                    src="<?= $logo_play['setting_value'] ?>"
                    alt="rankingImg"
                    class="amount-show-coin" />
                  <div class="ml-3 text-white box-info">
                    <!-- <div>
                        <img src="asset/img/icon/diamond.png" alt="pointIcon" />
                        <span> เพชร : </span>
                        <span class="font-primary font-weight-bold">8.00</span>
                      </div> -->
                    <div class="mt-2">
                      <img src="asset/img/icon/coin.png" alt="coinIcon" />
                      <span>ยอดเงิน : </span>
                      <span class="font-primary font-weight-bold">0.00</span>
                    </div>
                  </div>
                </div>
                <div class="my-3 text-center">
                  <button class="mr-1 dpshead" onclick="openTab(event, 'dps')">
                    <span class="px-4 py-2">ฝากเงิน</span>
                  </button>
                  <button class="ml-1 wdhead" onclick="openTab(event, 'wd')">
                    <span class="px-4 py-2">ถอนเงิน</span>
                  </button>
                </div>
                <div class="flex flex-col sidebar">
                  <!-- <div class="flex flex-col items-center justify-end">
                      <a
                        onclick="openTab(event,'dps')"
                        class="cur hover:opacity-60"
                      >
                        <img
                          class="iconside"
                          src="asset/img/icon/icon-deposit.png"
                        />
                        <p class="text-xs text-center text-white">ฝากเงิน</p>
                      </a>
                    </div>
                    <div class="flex flex-col items-center justify-end">
                      <a
                        onclick="openTab(event,'wd')"
                        class="cur hover:opacity-60"
                      >
                        <img
                          class="iconside"
                          src="asset/img/icon/icon-withdraw.png"
                        />
                        <p class="text-xs text-center text-white">ถอนเงิน</p>
                      </a>
                    </div> -->
                  <a onclick="openTab(event,'history')" class="flex items-center cursor-pointer hover:opacity-60">
                    <img class="iconside" src="asset/img/icon/icon-history.png" />
                    <p class="text-white">ประวัติ</p>
                  </a>
                  <a onclick="openTab(event,'promotion')" class="flex items-center cursor-pointer hover:opacity-60">
                    <img class="iconside" src="asset/img/icon/icn-hot.png" />
                    <p class="text-white">โปรโมชั่น</p>
                  </a>
                  <a onclick="openTab(event,'friend')" class="flex items-center cursor-pointer hover:opacity-60">
                    <img class="iconside" src="asset/img/icon/icn-card-2.png" />
                    <p class="text-white">แนะนำเพื่อน</p>
                  </a>
                  <!-- <div class="flex flex-col items-center justify-end">
                      <a class="cur hover:opacity-60">
                        <img class="iconside" src="asset/img/icon/icn-card-2.png" />
                        <p class="text-xs text-center text-white">ตั้งค่าภาษา</p>
                      </a>
                    </div> -->
                  <!-- <div class="flex flex-col items-center justify-end">
                      <a class="cur hover:opacity-60">
                        <img class="iconside" src="asset/img/icon/icn-card-2.png" />
                        <p class="text-xs text-center text-white">ข้อมูลส่วนตัว</p>
                      </a>
                    </div> -->
                  <!-- <div class="flex flex-col items-center justify-end">
                    </div>
                      <a class="cur hover:opacity-60">
                        <img
                          class="iconside"
                          src="asset/img/icon/icn-card-2.png"
                        />
                        <p class="text-xs text-center text-white">รายการเล่น</p>
                      </a>
                    </div>
                    <div class="flex flex-col items-center justify-end">
                      <a class="cur hover:opacity-60">
                        <img
                          class="iconside"
                          src="asset/img/icon/icn-card-2.png"
                        />
                        <p class="text-xs text-center text-white">แชท VIP</p>
                      </a>
                    </div>
                    <div class="flex flex-col items-center justify-end">
                      <a class="cur hover:opacity-60">
                        <img
                          class="iconside"
                          src="asset/img/icon/icn-card-2.png"
                        />
                        <p class="text-xs text-center text-white">
                          พาร์ทเนอร์ ถือหุ้นส่วน 50%
                        </p>
                      </a>
                    </div> -->
                </div>
              </div>
              <div class="app__nav-menu-linkButton">
                <div>
                  <a onclick="location.href='login'" class="app__buttonlink-menu-signout">
                    <i class="fas fa-sign-out"></i>ออกจากระบบ
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="w-full max-w-[1000px] mx-auto mb-2">
      <div class="relative h-8 px-4 pl-12 overflow-hidden text-white bg-neutral-900">
        <div class="absolute z-20 -translate-y-1/2 top-1/2 left-4">
          <i class="fad fa-bullhorn"></i>
        </div>

        <div class="absolute top-0 left-0 z-10 w-48 h-full bg-gradient-to-r from-neutral-950 to-transparent"></div>
        <div class="absolute top-0 right-0 z-10 w-12 h-full bg-gradient-to-l from-neutral-950 to-transparent"></div>

        <?php
        $announcement = getSite("announcement");
        if (!empty($announcement['setting_value'])):
        ?>
          <div class="absolute flex items-center mt-1 whitespace-nowrap animate-marquee">
            <span class="mx-8"><?= htmlspecialchars($announcement['setting_value'], ENT_QUOTES, 'UTF-8') ?></span>
          </div>
        <?php endif; ?>

        <style>
          @keyframes marquee {
            0% {
              transform: translateX(250%);
            }

            100% {
              transform: translateX(-150%);
            }
          }

          .animate-marquee {
            display: inline-block;
            animation: marquee 15s linear infinite;
          }
        </style>
      </div>
    </div>

    <?php require_once 'template/slider.php'; ?>

    <div class="containcbox">
      <div class="creditbox">
        <div class="headercredit">
          <div class="flexcredit cleft">
            <span>
              <i class="fa fa-user" onclick="openTab(event, 'account')"></i>
              098-765-4321
            </span>
          </div>
          <div class="flexcredit cright">
            <i class="fa fa-coins"></i> 5,000.00 ฿<i
              class="ml-2 fa fa-sync-alt text-highlight"></i>
          </div>
        </div>
        <div class="m-0 row">
          <div class="col-6 left">
            <div class="boxheadc">
              <div class="p-0 mb-2 row col-12">
                <div class="col-8">
                  <span class="text-white" style="font-size: 10px">โบนัสโปรโมชั่น</span>
                </div>
              </div>
              <span class="text-center"><i class="far fa-gift"></i> 5,000.00</span>
            </div>
          </div>
          <div class="col-6 right">
            <div class="boxheadc">
              <div class="p-0 mb-2 row col-12">
                <div class="col-8">
                  <span class="text-white" style="font-size: 10px">คืนยอดเสีย</span>
                </div>
                <div class="col-4">
                  <span class="text-white" style="font-size: 10px"></span>
                </div>
              </div>
              <span class="text-center"><i class="far fa-usd-circle"></i> 5,000.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-menu">
      <div class="navmenu deposit" onclick="openTab(event, 'dps')">
        <img src="asset/img/icon/icon-deposit.png" /><br />
        ฝากเงิน
      </div>
      <div class="navmenu withdraw" onclick="openTab(event, 'wd')">
        <img src="asset/img/icon/icon-withdraw.png" /><br />
        ถอนเงิน
      </div>
      <div class="navmenu" onclick="openTab(event, 'history')">
        <img src="asset/img/icon/icon-history.png" /><br />
        ประวัติ
      </div>

      <div class="navmenu friend" onclick="openTab(event, 'friend')">
        <img src="asset/img/icon/icn-card-2.png" /><br />
        แนะนำเพื่อน
      </div>
    </div>

    <div
      class="modal fade"
      id="promodaldetail"
      tabindex="-1"
      aria-labelledby="promodaldetailLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content modalcontent">
          <div class="modal-header headmodalcontent">
            <h5 class="modal-title" id="promodaldetailLabel">สมาชิกใหม่</h5>
            <i class="fas fa-times" data-dismiss="modal" aria-label="Close"></i>
          </div>
          <div class="modal-body angpaocontent">
            -โปรสมาชิกใหม่ รับโบนัส 100% -กดปุ่มรับโบนัสได้เอง อัตโนมัติ -รับสูงสุด 50บาท
            -ทำยอดหมุนเวียนTurnover 10 เท่า ถึงสามารถถอนได้ *หากพบเห็นการตั้งใจสร้างหลาย USER
            เพื่อมาแทงสวนทีมงานจะระงับการจ่ายเงิน ทุกกรณี*
          </div>
          <div class="modal-footer footermodalcontent">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          </div>
        </div>
      </div>
    </div>

    <div id="dps" class="tabcontent">
      <div class="headertab">
        <h2>ฝากอัตโนมัติ</h2>
      </div>
      <div class="pb-5 mt-4 containdps">
        <div class="m-0 mt-3 row">
          <div class="p-0 col-12 leftdps">
            <div
              class="nav flexdeposit nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical">
              <a
                class="nav-link w-100 active"
                id="v-pills-home-tab"
                data-toggle="pill"
                href="#v-pills-home"
                role="tab"
                aria-controls="v-pills-home"
                aria-selected="true"><img class="banktabicon" src="asset/img/icon/bankicon.png?v=2" /> ธนาคาร</a>
              <!-- <a
                  class="nav-link w-100"
                  id="v-pills-profile-tab"
                  data-toggle="pill"
                  href="#v-pills-profile"
                  role="tab"
                  aria-controls="v-pills-profile"
                  aria-selected="false"
                  ><img class="banktabicon" src="asset/img/bank/truewallet.svg?v=1" /> TrueWallet</a
                >-->
            </div>
          </div>
          <div class="p-0 col-12">
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade active show"
                id="v-pills-home"
                role="tabpanel"
                aria-labelledby="v-pills-home-tab">
                <div id="divMainDetail">
                  <div class="app__body deposite withdraw">
                    <div class="app-deposite__main">
                      <div id="cashDetail" class="">
                        <style type="text/css">
                          .pro_detail {
                            display: none;
                            margin-left: 0px;
                            font-size: 0.7rem;
                            margin-bottom: 10px;
                            background: rgb(238 238 238 / 22%);
                            margin-top: 5px;
                            border-radius: 5px;
                            padding: 5px;
                          }
                        </style>

                        <div class="grid max-w-5xl grid-cols-1 gap-6 p-4 mx-auto text-white md:grid-cols-2">

                          <div class="p-6 rounded-lg shadow-md bg-gradient-to-b from-neutral-700 to-neutral-800">
                            <h3 class="pb-4 text-xl font-bold border-b border-neutral-700">สร้างรายการฝากเงิน</h3>

                            <div class="flex items-start gap-4 mt-4">
                              <div class="flex-shrink-0">
                                <img src="asset/img/bank/scb.svg" alt="SCB Logo" class="w-16 h-16">
                              </div>
                              <div>
                                <p class="text-lg font-semibold">ธนาคารไทยพาณิชย์</p>
                                <p>เลขบัญชี: <span class="font-bold text-yellow-400">2062947452</span></p>
                                <p>ชื่อบัญชี: นาย ปรัตถกร สุวรรณ</p>
                              </div>
                            </div>

                            <p class="p-3 mt-6 text-sm text-yellow-300 rounded bg-neutral-600">
                              ⚠️ เตือน: กรุณาโอนจากบัญชีที่สมัครไว้เท่านั้น หากโอนจากบัญชีอื่น อาจไม่ได้รับยอด
                            </p>

                            <div class="p-3 mt-6 text-sm leading-relaxed rounded text-neutral-400 bg-neutral-600">
                              <?php if (!empty($deposit_info['setting_value'])): ?>
                                <?= $deposit_info['setting_value'] ?>
                              <?php endif; ?>
                            </div>
                          </div>

                          <div class="p-6 rounded-lg shadow-md bg-gradient-to-b from-neutral-700 to-neutral-800">
                            <form autocomplete="off">
                              <label for="money_deposit" class="block mb-2 text-sm font-medium">ระบุจำนวนเงิน</label>
                              <div class="relative flex items-center mb-3 h-11">
                                <i class="absolute text-2xl text-yellow-400 left-8 fad fa-usd-circle"></i>
                                <input
                                  type="text"
                                  id="money_deposit"
                                  name="money_deposit"
                                  placeholder="เช่น 500"
                                  class="w-full h-full pl-10 pr-4 text-white border rounded-lg bg-neutral-800 border-neutral-700 focus:outline-none focus:ring-2 focus:ring-yellow-500" />
                              </div>

                              <button
                                type="button"
                                onclick="saveDeposit()"
                                class="w-full md:w-1/2 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold rounded-lg py-2.5 text-lg flex items-center justify-center">
                                <i class="mr-2 text-2xl fad fa-usd-circle"></i> แจ้งฝาก
                              </button>
                            </form>

                            <form autocomplete="off" class="mt-6">
                              <label for="deposit_slip" class="block mb-2 text-sm font-medium">แนบสลิป</label>
                              <div class="relative mb-4">
                                <input
                                  type="file"
                                  id="deposit_slip"
                                  name="deposit_slip"
                                  class="w-full text-white border rounded-lg bg-neutral-800 border-neutral-700 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-yellow-500 file:text-black hover:file:bg-yellow-600" />
                              </div>

                              <button
                                type="button"
                                class="w-full md:w-1/2 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold rounded-lg py-2.5 text-lg flex items-center justify-center">
                                <i class="mr-2 text-2xl fad fa-file-invoice-dollar"></i> ยืนยันการฝาก
                              </button>
                            </form>
                          </div>
                        </div>


                        <script type="text/javascript">
                          function saveDeposit() {
                            $('#loading-m').show()

                            let money = $('#money_depsit').val()
                            let usepro = $('input[name=rdo_pro]:checked').val()

                            if (usepro == undefined) {
                              $.gritter.add({
                                title: languages['z_war'],
                                text: languages['pl_sel_pro'],
                                image: baseUrl + 'assets/asset/img/master/i-gritter/cancel.png?v3',
                                class_name: 'bg-cancel',
                                sticky: false,
                                time: '20000',
                              })
                            } else {
                              $.ajax({
                                url: baseUrl + 'saveDeposit',
                                data: {
                                  money: money,
                                  usepro: usepro
                                },
                                type: 'POST',
                                dataType: 'json',
                                success: function(response) {
                                  // console.log(response);
                                  if (response.status) {
                                    $('#cashDetail').html(response.pagecontent)
                                    intervalChkCash()
                                  } else {
                                    if (response.msg == 'Bank account web not active') {
                                      window.location = baseUrl + 'banknoactive'
                                    } else {
                                      $.gritter.add({
                                        title: languages['z_al_nosuccess'],
                                        text: response.msg,
                                        image: baseUrl +
                                          'assets/asset/img/master/i-gritter/cancel.png?v3',
                                        class_name: 'bg-cancel',
                                        sticky: false,
                                        time: '20000',
                                      })
                                    }
                                  }

                                  $('#loading-m').fadeOut()
                                  $('.loading').fadeOut()
                                },
                              })
                            }
                          }

                          function showhidPro(pid) {
                            $('.pro_detail').slideUp()
                            $('#pd' + pid).slideToggle()
                          }

                          // ===========================

                          $(document).ready(function() {
                            $('#money_depsit').keyup(function() {
                              let inpval = $(this).val()
                              inpval = TrimComma(inpval)
                              let inpval1 = formatNumber(inpval, 0, 1)
                              inpval1 = inpval1 != '0.00' ? inpval1 : ''

                              $(this).attr('value', inpval1)
                              $(this).val(inpval1)
                            })

                            $('#money_depsit').numOnly()
                          })
                        </script>
                      </div>
                    </div>
                  </div>

                  <script type="text/javascript">
                    $(document).ready(function() {
                      let dw = 'deposit'
                      let dwget = dw == 'deposit' ? 'chkDeposit' : 'chkWithdraw'

                      getMenuCash(dwget)
                    })

                    function getMenuCash(page1) {
                      $.ajax({
                        url: baseUrl + page1,
                        type: 'POST',
                        dataType: 'json',
                        success: function(response) {
                          $('#cashDetail').html(response.pagecontent)

                          if (page1 == 'chkDeposit') {
                            $('.div-dw a').removeClass('active')
                            $('.div-dw .deposit').addClass('active')
                          } else if (page1 == 'chkWithdraw') {
                            $('.div-dw a').removeClass('active')
                            $('.div-dw .withdraw').addClass('active')
                          }
                        },
                      })
                    }
                  </script>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-profile"
                role="tabpanel"
                aria-labelledby="v-pills-profile-tab">
                <div class="griddps">
                  <div class="ingriddps">
                    <div class="iningriddps copybtn">
                      <img src="asset/img/bank/truewallet.svg?v=1" /> <br />
                      ธนาคารไทยพาณิชย์ <br />
                      <span>123-456-7890</span> <br />
                      ทดสอบ ทดสอบ <br />
                      <button onclick="copylink()"><i class="fad fa-copy"></i> คัดลอก</button>
                    </div>
                  </div>
                  <div class="ingriddps">
                    <div class="iningriddps copybtn">
                      <img src="asset/img/bank/truewallet.svg?v=1" /> <br />
                      ธนาคารไทยพาณิชย์ <br />
                      <span>123-456-7890</span> <br />
                      ทดสอบ ทดสอบ <br />
                      <button onclick="copylink()"><i class="fad fa-copy"></i> คัดลอก</button>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-crypto"
                role="tabpanel"
                aria-labelledby="v-pills-crypto-tab">
                <!-- <div
                    class="relative grid grid-cols-1 gap-5 mx-auto samhokha-withdraw__blog-detail boxcrypto dps01 md:grid-cols-2 md:w-5/5 md:px-0 fadeInUp animated faster"
                  >
                    <div
                      class="relative flex flex-col content-start w-full h-auto px-2 text-white bg-bn"
                    >
                      <h3 class="text-center">ฝากเงินคริปโต</h3>
                      <div class="hr1__"></div>
                      <p class="px-2 pt-1 mx-auto text-center text-app_yellow md:mx-0 md:text-left">
                        โปรดเลือกโปรโมชั่น
                      </p>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="rdo_pro"
                          id="rdo_0"
                          value=""
                          checked=""
                        />
                        <label class="form-check-label" for="rdo_0">No Promotion</label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="rdo_pro"
                          id="rdo_2"
                          value="2"
                        />
                        <label class="form-check-label" for="rdo_2">
                          Pro 20 % Turn 20.00 X No More than 500 THB
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="rdo_pro"
                          id="rdo_3"
                          value="3"
                        />
                        <label class="form-check-label" for="rdo_3">
                          Pro 30 % Turn 30.00 X No More than 500 THB
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="rdo_pro"
                          id="rdo_4"
                          value="4"
                        />
                        <label class="form-check-label" for="rdo_4">
                          Pro 40 % Turn 40.00 X No More than 500 THB
                        </label>
                      </div>
                    </div>
                    <div
                      class="relative flex flex-col content-start w-full h-auto px-2 mb-8 text-white bg-bn md:mb-0"
                    >
                      <p class="px-2 pt-3 mx-auto text-center text-app_yellow md:mx-0 md:text-left">
                        เลือกเหรียญที่ต้องการฝาก
                      </p>
                      <div class="mb-2">
                        <div>
                          <div class="flex-container wrap">
                            <div class="mb-2 coin-item" onclick="cryptotab();">
                              <div class="dcoin" adata="BUSD">
                                <div class="flex-container">
                                  <div class="icon-crypto">
                                    <img src="asset/img/bank/BUSD.png?v=2" />
                                  </div>
                                  <div>
                                    <div class="tx-network">
                                      <span>BUSD </span>
                                      <span id="txNetworkBUSD">(BNB Smart Chain (BEP20))</span>
                                    </div>
                                    <div class="tx-exch">
                                      <span>Exchange : </span>
                                      <input type="hidden" name="exval_BUSD" value="34.67" />
                                      <span id="txExBUSD">34.67</span>
                                      <span> THB</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-2 coin-item" onclick="cryptotab();">
                              <div class="dcoin" adata="USDT">
                                <div class="flex-container">
                                  <div class="icon-crypto">
                                    <img src="asset/img/bank/USDT.png?v=2" />
                                  </div>
                                  <div>
                                    <div class="tx-network">
                                      <span>USDT </span>
                                      <span id="txNetworkUSDT">(BNB Smart Chain (BEP20))</span>
                                    </div>
                                    <div class="tx-exch">
                                      <span>Exchange : </span>
                                      <input type="hidden" name="exval_USDT" value="34.7" />
                                      <span id="txExUSDT">34.70</span>
                                      <span> THB</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="relative grid grid-cols-1 gap-5 mx-auto samhokha-withdraw__blog-detail boxcrypto dps02 animate__animated animate__fadeInUp md:grid-cols-2 md:w-5/5 md:px-0 fadeInUp animated faster"
                  >
                    <div
                      class="relative flex flex-col content-start w-full h-auto px-5 text-white bg-bn"
                    >
                      <div class="text-center ht3">Depositing Crypto</div>
                      <div class="mb-2 box__titwar">
                        <i class="icon-xl fas fa-bell fa-shake"></i>
                        <span class="">Please transfer to QR code shown below</span>
                      </div>
                      <div class="flex flex-wrap mb-2">
                        <div class="box__qr">
                          <div
                            class="text-center img_qrcode"
                            id="qrcode"
                            title="0xc38dcc4c1d94a23aceeb22f841ede5bb1dff96f5"
                          >
                            <canvas width="150" height="150" style="display: none"></canvas>
                            <img
                              src="data:image/png;base64,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"
                              style="display: block"
                            />
                          </div>
                          <div class="mt-2 text-center tit_reqr">
                            Please use coins
                            <span id="spCoinId">BUSD</span> Transfer to deposit account only.
                          </div>
                          <div class="div_network">
                            <span class="">NETWORK :: BNB Smart Chain (BEP20)</span>
                          </div>
                          <div class="div_address">
                            <span class=""
                              >ADDRESS :: 0xc38dcc4c1d94a23aceeb22f841ede5bb1dff96f5</span
                            >
                            <span class="" id="spAddress"
                              >0xc38dcc4c1d94a23aceeb22f841ede5bb1dff96f5</span
                            >
                            <i class="fas fa-copy i_coppy_addr" onclick="coppy_text()"></i>
                          </div>
                          <div class="div_memo">
                            <span class="">TAG :: </span>
                            <i class="fas fa-copy i_coppy_memo" onclick="coppy_text1()"></i>
                          </div>
                        </div>
                      </div>
                      <div class="">
                        <div class="drow-bxwar">
                          <span
                            >* Please use coins BUSD Transfer deposit account as network BNB Smart
                            Chain (BEP20) Only</span
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="relative flex flex-col content-start w-full h-auto p-5 text-white bg-bn"
                    >
                      <div class="mb-2 box__ex">
                        <span>34.66 THB</span>
                      </div>
                      <div class="mb-2">
                        <div class="mb-2 drow-timedown">
                          <span class="box-time"
                            >Please Transfer Within
                            <label class="lbtime2" id="countdowntime">15:00</label>
                            Minute
                          </span>
                        </div>
                        <div class="drow-pclick2">
                          <span>When transfer Please press button below</span>
                        </div>
                      </div>
                      <div>
                        <div class="">
                          <div
                            class="flex flex-row items-center justify-center w-full h-10 mb-2 text-lg font-semibold duration-150 rounded-lg bg-app_green hover:bg-gray-600 hover:text-app_green text-app_black md:w-2/2 md:text-xl md:font-medium cur"
                            id="btnSuccress"
                            onclick="cryptotabclose();"
                          >
                            OK
                          </div>
                          <div
                            class="flex flex-row items-center justify-center w-full h-10 text-lg font-semibold duration-150 rounded-lg bg-app_gray2 hover:bg-gray-600 hover:text-app_green text-app_black md:w-2/2 md:text-xl md:font-medium cur"
                            id="btnCancel"
                            onclick="cryptotabclose();"
                          >
                            Cancel
                          </div>
                        </div>
                        <div>
                          <div class="drow-txwar">
                            Please transfer to the account number above. The system will
                            automatically add credit within 3-5 minutes if you haven't received the
                            credit or have any doubts. Please select from the menu, contact staff 24
                            hours. Thank you.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="wd" class="tabcontent">
      <div class="headertab">
        <h2>แจ้งถอนเงิน</h2>
      </div>
      <div class="wdtab">
        <div class="wdtablink bank active">
          <img class="banktabicon" src="asset/img/icon/bankicon.png?v=2" />
          <span>ธนาคาร</span>
        </div>

        <!-- <div class="wdtablink crypto">
            <img class="banktabicon" src="asset/img/bank/crypto2.png" />
            <span>Crypto</span>
          </div> -->
      </div>
      <div class="max-w-4xl p-6 mx-auto mt-6 space-y-6 text-white shadow-md bg-gradient-to-b from-neutral-700 to-neutral-800 rounded-xl">

        <!-- Bank Info + Withdrawal Form -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">

          <!-- Bank Information -->
          <div class="flex items-start gap-4">
            <img src="asset/img/bank/bbl.svg" alt="Bank" class="w-12 h-12">
            <div class="text-sm leading-relaxed">
              <div><span class="font-medium text-neutral-300">ธนาคาร:</span> กรุงเทพ</div>
              <div><span class="font-medium text-neutral-300">เลขบัญชี:</span> 8592592090</div>
              <div><span class="font-medium text-neutral-300">ชื่อบัญชี:</span> คุณ ทดสอบ ทดสอบ</div>
            </div>
          </div>

          <!-- Withdrawal Details -->
          <div class="space-y-5">
            <div class="text-lg font-semibold text-white">รายละเอียดการถอน</div>

            <div class="grid grid-cols-2 gap-4 p-4 text-sm text-center rounded-lg bg-neutral-600">
              <div>
                <div class="text-neutral-400">จำนวนเงินที่ถอนได้</div>
                <div class="font-bold text-green-400">1,500.00 ฿</div>
              </div>
              <div>
                <div class="text-neutral-400">ยอดถอนขั้นต่ำ</div>
                <div class="font-bold text-yellow-400"><?= number_format($min_withdraw['setting_value'], 2) ?> ฿</div>
              </div>
            </div>

            <div>
              <label for="withdraw_amount" class="block mb-1 text-sm text-neutral-300">กรอกจำนวนเงิน</label>
              <input
                type="number"
                id="withdraw_amount"
                placeholder="เช่น <?= $min_withdraw['setting_value'] ?>"
                class="w-full px-4 py-2 text-white border rounded-lg bg-neutral-600 border-neutral-700 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-yellow-500" />
            </div>

            <div class="text-center">
              <button
                class="w-full px-6 py-2 font-semibold text-black transition-all duration-200 bg-yellow-500 rounded-lg hover:bg-yellow-600 md:w-1/2">
                ถอนเงิน
              </button>
            </div>
          </div>
        </div>

        <div class="p-4 text-sm leading-relaxed bg-neutral-600 rounded-xl text-neutral-300">
          <?= $withdraw_info['setting_value'] ?>

        </div>

      </div>


      <div
        class="relative grid grid-cols-1 gap-5 mx-auto samhokha-withdraw__blog-detail boxwd crypto md:grid-cols-2 md:w-5/5 md:px-0 fadeInUp animated faster">
        <div
          class="relative flex flex-col content-start h-auto px-2 mb-8 text-white w-100 bg-bn md:mb-0">
          <p class="px-2 pt-3 mx-auto text-center text-app_yellow md:mx-0 md:text-left">
            เลือกเหรียญที่ต้องการถอน
          </p>
          <div class="mb-2">
            <div>
              <div class="flex-container wrap">
                <div class="mb-2 coin-item busd">
                  <div class="dcoin" adata="BUSD">
                    <div class="flex-container">
                      <div class="icon-crypto">
                        <img src="asset/img/bank/BUSD.png?v=2" />
                      </div>
                      <div>
                        <div class="tx-network">
                          <span>BUSD </span>
                          <span id="txNetworkBUSD">(BNB Smart Chain (BEP20))</span>
                        </div>
                        <div class="tx-exch">
                          <span>Exchange : </span>
                          <input type="hidden" name="exval_BUSD" value="34.67" />
                          <span id="txExBUSD">34.67</span>
                          <span> THB</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box_input busd">
                    <div class="hr__"></div>
                    <div class="">
                      <label class="txt-small">Address</label>
                    </div>
                    <div class="mb-3 winput">
                      <div class="relative">
                        <input
                          type="text"
                          id="address_w"
                          placeholder=""
                          name="address_w"
                          autocomplete="cc-number"
                          value=""
                          onkeyup="chkaz09();" />
                        <div class="dpaste" id="dpaste">
                          <i class="fas fa-paste"></i>
                        </div>
                      </div>
                    </div>
                    <div class="">
                      <label class="txt-small">Input money</label>
                    </div>
                    <div class="winput">
                      <div class="relative">
                        <input
                          type="text"
                          id="money_w"
                          placeholder=""
                          name="money_w"
                          autocomplete="cc-number"
                          value="" />
                        <div class="inpmax">Max</div>
                      </div>
                      <div class="mb-3">
                        <div class="mt-1 div_calcoin">
                          <span id="spCal">0</span>
                          <span class="coin_use">BUSD</span> ( Fee :
                          <span id="spFee">0.00</span> ) <span>Min</span> :
                          <span id="spMin">10.00 BUSD</span>
                        </div>
                        <label class="txt-minmax">Min Withdraw <span class="spminbath">346.60</span> THB Max Withdraw
                          50,000 THB
                        </label>
                      </div>
                      <button
                        type="button"
                        class="flex flex-row items-center justify-center w-full h-10 mt-3 text-lg font-semibold duration-150 rounded-lg bg-app_green hover:bg-gray-600 hover:text-app_green text-app_black md:w-1/2 md:text-xl md:font-medium cur"
                        id="btnWithdrawSave">
                        <i class="fa-solid fa-money-simple-from-bracket"></i>&nbsp;Withdraw
                      </button>
                    </div>
                  </div>
                </div>
                <div class="mb-2 coin-item usdt">
                  <div class="dcoin" adata="USDT">
                    <div class="flex-container">
                      <div class="icon-crypto">
                        <img src="asset/img/bank/USDT.png?v=2" />
                      </div>
                      <div>
                        <div class="tx-network">
                          <span>USDT </span>
                          <span id="txNetworkUSDT">(BNB Smart Chain (BEP20))</span>
                        </div>
                        <div class="tx-exch">
                          <span>Exchange : </span>
                          <input type="hidden" name="exval_USDT" value="34.7" />
                          <span id="txExUSDT">34.70</span>
                          <span> THB</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box_input usdt">
                    <div class="hr__"></div>
                    <div class="">
                      <label class="txt-small">Address</label>
                    </div>
                    <div class="mb-3 winput">
                      <div class="relative">
                        <input
                          type="text"
                          id="address_w"
                          placeholder=""
                          name="address_w"
                          autocomplete="cc-number"
                          value=""
                          onkeyup="chkaz09();" />
                        <div class="dpaste" id="dpaste">
                          <i class="fas fa-paste"></i>
                        </div>
                      </div>
                    </div>
                    <div class="">
                      <label class="txt-small">Input money</label>
                    </div>
                    <div class="winput">
                      <div class="relative">
                        <input
                          type="text"
                          id="money_w"
                          placeholder=""
                          name="money_w"
                          autocomplete="cc-number"
                          value="" />
                        <div class="inpmax">Max</div>
                      </div>
                      <div class="mb-3">
                        <div class="mt-1 div_calcoin">
                          <span id="spCal">0</span>
                          <span class="coin_use">BUSD</span> ( Fee :
                          <span id="spFee">0.00</span> ) <span>Min</span> :
                          <span id="spMin">10.00 BUSD</span>
                        </div>
                        <label class="txt-minmax">Min Withdraw <span class="spminbath">346.60</span> THB Max Withdraw
                          50,000 THB
                        </label>
                      </div>
                      <button
                        type="button"
                        class="flex flex-row items-center justify-center w-full h-10 mt-3 text-lg font-semibold duration-150 rounded-lg bg-app_green hover:bg-gray-600 hover:text-app_green text-app_black md:w-1/2 md:text-xl md:font-medium cur"
                        id="btnWithdrawSave">
                        <i class="fa-solid fa-money-simple-from-bracket"></i>&nbsp;Withdraw
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="relative flex flex-col content-start h-auto px-2 text-white w-100 bg-bn">
          <h3 class="pb-3">Withdrawal process</h3>
          <div class="flex flex-wrap">
            <ul class="pb-2 text-sm">
              <li>1). Please minimum amount you want to withdraw 100 THB</li>
              <li>2). Press "withdraw" and wait for review from the admin</li>
            </ul>
            <p class="mx-auto text-center text-app_yellow w-100 md:mx-0 md:text-left">
              Warn! The system will transfer the money to account that member used apply only
            </p>
          </div>
          <div class="hr1__"></div>
          <div class="flexdetail">
            <div>Can use the right to withdraw</div>
            <div id="date-data" class="text-app_green">5 Round/Day</div>
          </div>
          <div class="flexdetail">
            <div>Now use right of withdrawal</div>
            <div id="withdraw-data" class="text-app_green">0 Round</div>
          </div>
          <div class="flexdetail">
            <div>Can maximum withdrawal</div>
            <div id="withdraw-data" class="text-app_green">300,000 THB/Day</div>
          </div>
          <div class="flexdetail">
            <div>Withdraw now</div>
            <div id="withdraw-data" class="text-app_green">0 THB/Day</div>
          </div>
        </div>
      </div>
    </div>
    <div id="history" class="tabcontent">
      <div class="headertab">
        <h2>ประวัติธุรกรรม</h2>
      </div>
      <div class="pb-5 containhis">
        <div class="m-0 mt-3 row">
          <div class="p-0 col-2 leftdps">
            <div
              class="nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical">
              <a
                class="nav-link green active"
                id="v-pills-dps-tab"
                data-toggle="pill"
                href="#v-pills-dps"
                role="tab"
                aria-controls="v-pills-dps"
                aria-selected="true">ฝาก</a>
              <a
                class="nav-link red"
                id="v-pills-wd-tab"
                data-toggle="pill"
                href="#v-pills-wd"
                role="tab"
                aria-controls="v-pills-wd"
                aria-selected="false">ถอน</a>
              <a
                class="nav-link green"
                id="v-pills-bn-tab"
                data-toggle="pill"
                href="#v-pills-bn"
                role="tab"
                aria-controls="v-pills-bn"
                aria-selected="false">โบนัส</a>
            </div>
          </div>
          <div class="p-0 col-10 containhislist">
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="v-pills-dps"
                role="tabpanel"
                aria-labelledby="v-pills-dps-tab">
                <div class="containerhis">
                  <!--  Loop list DPS -->
                  <div class="listht">
                    <table>
                      <tr>
                        <td>
                          859-2-59209-0<br />
                          <span class="timehis">ธนาคารไทยพาณิชย์</span>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="listht">
                    <table>
                      <tr>
                        <td>
                          859-2-59209-0<br />
                          <span class="timehis">ธนาคารไทยพาณิชย์</span>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="listht">
                    <table>
                      <tr>
                        <td>
                          859-2-59209-0<br />
                          <span class="timehis">ธนาคารไทยพาณิชย์</span>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--  END Loop list DPS -->
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-wd"
                role="tabpanel"
                aria-labelledby="v-pills-wd-tab">
                <div class="containerhis">
                  <!--  Loop list WD-->
                  <div class="listhtwd">
                    <table>
                      <tr>
                        <td>
                          859-2-59209-0<br />
                          <span class="timehis">ธนาคารไทยพาณิชย์</span>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="listhtwd">
                    <table>
                      <tr>
                        <td>
                          859-2-59209-0<br />
                          <span class="timehis">ธนาคารไทยพาณิชย์</span>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="listhtwd">
                    <table>
                      <tr>
                        <td>
                          859-2-59209-0<br />
                          <span class="timehis">ธนาคารไทยพาณิชย์</span>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--  END Loop list WD -->
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="v-pills-bn"
                role="tabpanel"
                aria-labelledby="v-pills-bn-tab">
                <div class="containerhis">
                  <!--  Loop list WD-->
                  <div class="listhtbn">
                    <table>
                      <tr>
                        <td>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="listhtbn">
                    <table>
                      <tr>
                        <td>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="listhtbn">
                    <table>
                      <tr>
                        <td>
                        </td>
                        <td>
                          250,000.00 บาท <br />
                          <span class="timehis">15/02/2021 05:50:34</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--  END Loop list WD -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="promotion" class="tabcontent">
      <div class="headertab">
        <h2>โปรโมชั่น</h2>
      </div>
      <div class="swiper mypromotion">
        <div class="swiper-wrapper">
          <?php
          $promos = getPromotions();

          $activePromos = array_filter($promos, fn($p) => $p['status'] === 1);

          if (count($activePromos) > 0):
            foreach ($activePromos as $promo): ?>
              <div class="relative swiper-slide">
                <img src="<?= htmlspecialchars($promo['setting_value'], ENT_QUOTES, 'UTF-8') ?>"
                  alt="Promotion"
                  class="object-cover w-full h-full" />
                <button class="promo-btn"><a href="<?= $promo['setting_link'] ? htmlspecialchars($promo['setting_link'], ENT_QUOTES, 'UTF-8') : '#' ?>" class="promo-btn">รับโปรโมชั่น</a></button>
              </div>
            <?php endforeach;
          else: ?>
            <div class="relative swiper-slide">
              <img src="https://placehold.co/1040x1040"
                alt="Placeholder"
                class="object-cover w-full h-full" />
              <button class="promo-btn">รับโปรโมชั่น</button>
            </div>
          <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div id="friend" class="tabcontent">
      <div class="headertab">
        <h2>แนะนำเพื่อน</h2>
      </div>
      <div class="p-4 my-6 text-white shadow-md bg-gradient-to-b from-neutral-700 to-neutral-800 rounded-xl">

        <div class="flex items-center justify-between px-5 py-4 mb-6 rounded-lg shadow-inner bg-neutral-600">
          <div class="text-base font-medium text-white">โบนัสเชิญเพื่อน</div>
          <div class="flex items-center gap-2">
            <div class="flex items-center justify-center rounded-full w-7 h-7 bg-yellow-500/20">
              <i class="text-yellow-400 fas fa-users"></i>
            </div>
            <span class="text-xl font-bold text-yellow-400">
              <?= number_format(5000, 2) ?>
            </span>
          </div>
        </div>

        <div class="m-0 row">

          <div class="p-3 col-lg-6 col-md-6 col-sm-12">
            <label class="block mb-2 text-sm font-medium text-yellow-400">ลิงค์ชวนเพื่อน</label>
            <div class="relative">
              <input
                type="text"
                onclick="copylink()"
                id="friendlink"
                class="w-full px-4 py-2 pr-10 text-sm text-white border rounded-lg bg-neutral-700 border-neutral-600 focus:outline-none"
                readonly
                value="https://msn.bet/register?prefix=GC289&ref=GC28914942" />

              <div class="absolute inset-y-0 flex items-center text-yellow-400 pointer-events-none right-3">
                <i class="text-lg fad fa-copy"></i>
              </div>
            </div>
          </div>

          <div class="p-3 col-lg-6 col-md-6 col-sm-12">
            <div class="flex gap-4">
              <div class="px-5 py-2 font-semibold text-center bg-yellow-500 rounded-lg cursor-pointer ininwrapgrid001 active"
                onclick="openfriendtab(event, 'allfriend')" id="tabfriendopen">
                <i class="far fa-handshake"></i><br />
                ภาพรวม
              </div>

              <div class="px-5 py-2 text-center rounded-lg cursor-pointer ininwrapgrid001 bg-neutral-700 hover:bg-neutral-600"
                onclick="openfriendtab(event, 'moneyfriendtabs')">
                <i class="far fa-coins"></i><br />
                รายได้
              </div>
            </div>
          </div>

        </div>

        <div class="p-3">

          <div class="containfriendwd" id="allfriend">
            <div class="mb-3 text-lg font-bold text-yellow-400">รายละเอียดแนะนำเพื่อน</div>
            <table class="w-full p-2 text-sm rounded-lg bg-neutral-600">
              <tbody>
                <tr>
                  <td class="py-2 pl-2 text-left">
                    <i class="mr-2 text-yellow-400 fad fa-coins"></i>ส่วนแบ่งรายได้
                  </td>
                  <td class="pr-2 font-semibold text-right text-green-400">30%</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="hidden containfriendwd" id="friendtabs">
            <div class="mt-4 text-center">
              <span class="font-medium text-white">รายชื่อเพื่อน</span>
            </div>
            <div class="mt-2 divoffriends"></div>
          </div>

          <div class="hidden containfriendwd" id="moneyfriendtabs">
            <div class="mb-2 font-medium text-white">เลือกเดือน</div>
            <input
              type="month"
              id="month"
              name="month"
              class="w-full px-4 py-2 text-white border rounded-lg bg-neutral-600 border-neutral-600 focus:outline-none" />
          </div>

        </div>

        <div class="p-4 mt-6 text-sm leading-relaxed rounded-lg bg-neutral-600 text-neutral-300">
          <?= $affiliate_info['setting_value'] ?>
        </div>

      </div>
    </div>
    <div id="account" class="tabcontent">
      <div class="max-w-xl mx-auto space-y-6 text-white accountdetail">

        <div class="p-4 mt-4 bg-gradient-to-b from-neutral-700 to-neutral-800 rounded-xl">
          <div class="flex items-center space-x-4">
            <img src="asset/img/bank/bbl.svg" alt="Bangkok Bank" class="w-12 h-12" />
            <div>
              <div class="font-medium">ธนาคาร: กรุงเทพ</div>
              <div class="text-sm text-neutral-400">เลขบัญชี: 8592592090</div>
            </div>
          </div>
        </div>

        <div class="p-4 space-y-4 bg-gradient-to-b from-neutral-700 to-neutral-800 rounded-xl">

          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center space-x-2">
              <i class="text-3xl text-yellow-400 fad fa-user"></i>
              <div>
                <div class="text-neutral-300">คุณ</div>
                <div class="font-semibold">จีรพล มุสิกบุญเลิศ</div>
              </div>
            </div>
            <div class="flex items-center space-x-2">
              <i class="text-3xl text-yellow-400 fad fa-user-circle"></i>
              <div>
                <div class="text-neutral-300">ยูสเซอร์</div>
                <div class="font-semibold">AC168001</div>
              </div>
            </div>
          </div>

          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center space-x-2">
              <i class="text-3xl text-yellow-400 fad fa-lock"></i>
              <div>
                <div class="text-neutral-300">รหัสผ่าน</div>
                <div class="font-semibold">1234567890</div>
              </div>
            </div>
            <div class="flex items-center space-x-2 cursor-pointer hover:underline" onclick="changepassword()">
              <i class="text-3xl text-yellow-400 fad fa-edit"></i>
              <span class="text-sm font-medium">เปลี่ยนรหัสผ่าน</span>
            </div>
          </div>

          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center space-x-2">
              <i class="text-3xl text-yellow-400 fad fa-gift"></i>
              <div>
                <div class="text-neutral-300">โปรโมชั่น</div>
                <div class="font-semibold">ไม่รับโปรโมชั่น</div>
              </div>
            </div>
            <div class="flex items-center space-x-2">
              <i class="text-3xl text-yellow-400 fad fa-users"></i>
              <div>
                <div class="text-neutral-300">ยอดแนะนำเพื่อน</div>
                <div class="font-semibold">949.00 บาท</div>
              </div>
            </div>
          </div>
        </div>

        <div class="p-4 bg-gradient-to-b from-neutral-700 to-neutral-800 rounded-xl">
          <div class="flex items-center mb-4">
            <i class="mr-2 text-2xl text-yellow-400 fad fa-cog"></i>
            <span class="text-lg font-semibold">การตั้งค่า</span>
          </div>

          <div class="flex items-center justify-between px-4 py-3 rounded-lg bg-neutral-600">
            <div>
              <div class="flex items-center mb-1">
                <i class="mr-2 text-yellow-400 fad fa-sync-alt"></i>
                <span class="text-sm font-medium">เปิดใช้งานกระเป๋าเดียว ไม่ต้องโยกเงิน</span>
              </div>
              <div class="text-xs text-neutral-400">เปิดใช้งาน - ใช้กระเป๋าเดียว</div>
            </div>

            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer">
              <div class="h-6 transition-colors duration-300 bg-gray-600 rounded-full w-11 peer-checked:bg-yellow-500"></div>
              <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full transition-transform duration-300 peer-checked:translate-x-5"></div>
            </label>

          </div>
        </div>

      </div>

      <div class="containcpass">
        <div class="backaccount cursorp"><i class="far fa-chevron-left"></i> ย้อนกลับ</div>
        <form>
          <div class="headertab">
            <h2>เปลี่ยนรหัสผ่าน</h2>
          </div>
          <div class="form-group">
            <div>
              <label> รหัสผ่านใหม่</label>
              <div class="mt-1 el-input">
                <input type="text" placeholder="รหัสผ่านใหม่" class="inputstyle" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <div>
              <label> ยืนยันรหัสผ่านใหม่</label>
              <div class="mt-1 el-input">
                <input type="text" placeholder="ยืนยันรหัสผ่านใหม่" class="inputstyle" />
              </div>
            </div>
          </div>
        </form>
        <button type="button" class="loginbtn" onclick="">
          <span> เปลี่ยนรหัสผ่าน </span>
        </button>
      </div>
    </div>

    <footer>
      <div class="footcontent">
        <div id="account-actions" class="">
          <div class="x-button-actions" id="account-actions-mobile">
            <div class="d-flex -anon-menu-wrapper">
              <div
                class="-btn-container -left"
                onclick="openTab(event, 'account')"
                id="defaultOpen">
                <div class="-space-y-2 btn btn-lg btn-plain-secondary -icon">
                  <div class="-typo">หน้าหลัก</div>
                  <img
                    src="asset/img/icon/5235.png" />
                </div>
              </div>
              <div class="-btn-container -left bordernone" onclick="openTab(event, 'promotion')">
                <div class="-space-y-2 btn btn-lg btn-plain-secondary -icon">
                  <div class="-typo">โปรโมชั่น</div>
                  <img
                    src="asset/img/icon/ic-logged-promotion.png" />
                </div>
              </div>
              <div
                class="-btn-container -center"
                onclick="openTab(event, 'lobby')">
                <div class="btn btn-lg btn-plain-lobby">
                  <div class="-img-container -icon">
                    <div class="-typo">เข้าสู่เกม</div>
                    <img src="<?= $logo_play['setting_value'] ?>" class="pb-2 sm:pb-0 bounce-logo-play" />
                  </div>
                </div>
              </div>
              <div class="-btn-container -right bordernone" onclick="openTab(event, 'dps')">
                <div class="-space-y-2 btn btn-lg btn-plain-primary -icon">
                  <div class="-typo">ฝากเงิน</div>
                  <img src="asset/img/icon/deposit.png" />
                </div>
              </div>

              <div class="-btn-container -right" onclick="openTab(event, 'wd')">
                <div class="-space-y-2 btn btn-lg btn-plain-primary -icon">
                  <div class="-typo">ถอนเงิน</div>
                  <img
                    src="asset/img/icon/withdraw.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="paddingmobile"></div>
  </div>
  <!-- <div class="linebtn">
      <img onclick="location.href='https://lin.ee/Pmvz7pl'" src="asset/img/icon/line.png" />
      <span>ติดต่อเรา</span>
    </div> -->

  <div class="myAlert-top alertcopy">
    <i class="fal fa-check-circle"></i>
    <br />
    <strong> คัดลอกเรียบร้อยแล้ว </strong>
  </div>

  <a href="<?= $line_contact_link['setting_value'] ?>" target="_blank"
    class="fixed z-50 overflow-hidden transition-transform duration-200 bg-white rounded-full shadow-lg bottom-24 right-6 w-14 h-14 hover:scale-110">
    <img src="/asset/img/icon/line.png" alt="Contact Us" class="object-contain w-full h-full" />
  </a>

  <?php if ($popup['status'] == 1): ?>
    <div class="modal fade" id="dashboardPopupModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="bg-transparent border-0 modal-content">
          <div class="p-0 modal-body position-relative">
            <button
              type="button"
              class="text-white close"
              data-dismiss="modal"
              aria-label="Close"
              style="position: absolute; top: 0.5rem; right: 0.75rem; z-index: 5">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php if (!empty($popup['setting_value'])): ?>
              <img
                src="<?= $popup['setting_value'] ?>"
                class="rounded img-fluid w-100"
                alt="Dashboard popup" />
            <?php else: ?>
              <img
                src="https://placehold.co/1040x1040"
                class="rounded img-fluid w-100"
                alt="Dashboard popup" />

            <?php endif ?>
          </div>
        </div>
      </div>
    </div>

  <?php endif; ?>

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    AOS.init({
      once: true
    })
  </script>
  <script type="text/javascript" src="asset/js/script.js?_=<?= $rnd ?>"></script>
  <script>
    $(function() {
      $('#dashboardPopupModal').modal('show')
    })
  </script>
</body>

</html>