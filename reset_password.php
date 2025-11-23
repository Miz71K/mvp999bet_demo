<?php
require_once 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MVP999BET - Reset Password</title>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css"
    />
    <link rel="stylesheet" href="asset/css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div
      class="w-full h-dvh bg-cover bg-center relative mx-auto max-w-[438px]"
      style="background-image: url('<?= $background['setting_value'] ?>')"
    >
      <div id="otp-confirm" class="hidden">
        <div class="overlay fixed inset-0 bg-black/60 z-[1001]"></div>

        <div class="flex justify-center">
          <div class="fixed top-[32%] z-[1002]">
            <div
              class="mx-8 poopup-dialog-container bg-[#202020] border border-[#464646] rounded-xl"
            >
              <div
                class="flex flex-col items-center justify-center mx-8 mt-4 text-center"
              >
                <div class="px-2 mt-2 text-xs">
                  เราจะส่งรหัสยืนยันไปยังหมายเลขโทรศัพท์มือถือ:
                  <span id="otp-mask" class="text-white">******</span>
                </div>
              </div>
              <div class="p-4">
                <div class="flex justify-center top-[2em] gap-x-4">
                  <div class="w-[152px]">
                    <div class="w-full mt-5">
                      <div
                        class="relative flex flex-col mx-auto cursor-pointer"
                      >
                        <div
                          data-otp-ok
                          class="btn-click-animation btn-primary rounded-xl w-full h-[49px] flex items-center justify-center text-center mx-auto font-normal text-sm black"
                        >
                          ตกลง
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-[152px]">
                    <div class="w-full mt-5">
                      <div
                        class="relative flex flex-col mx-auto cursor-pointer"
                      >
                        <div
                          data-otp-cancel
                          class="rounded-xl w-full flex items-center justify-center btn-click-animation mx-auto font-normal text-sm border border-1 border-[#FDD387] h-[49px]"
                        >
                          ยกเลิก
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

      <div class="mx-auto max-w-[438px]">
        <div class="flex items-center justify-between p-4">
          <a
            href="login"
            class="flex flex-row items-center justify-center cursor-pointer"
            ><img src="asset/img/layout/icn-left-round.svg" alt="logo" /><span
              class="ml-2 text-[#FBDEB2]"
            ></span
          ></a>
          <div class="flex flex-row items-center">
            <div data-lang-btn>
              <img
                class="mx-auto w-[40px] h-[40px] cursor-pointer"
                width="40px"
                src="asset/img/language/icn-lang-th.svg"
                alt="logo"
              />
            </div>
          </div>
        </div>
        <div class="h-[calc(100vh-72px)] overflow-auto pb-[100px]">
          <div
            id="lang-menu"
            class="absolute z-10 hidden float-right my-5 mr-2 right-3 top-12"
          >
            <div
              class="w-[188px] border border-[#464646] bg-[#202020] rounded-lg max-h-[300px] overflow-y-auto"
            >
              <div class="language-item-wrapper">
                <div id="lang-th" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-th.svg" alt="th" />
                  </div>
                  <div class="language-title"><span>ภาษาไทย</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-en" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-en.svg" alt="en" />
                  </div>
                  <div class="language-title"><span>English</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-km" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-km.svg" alt="km" />
                  </div>
                  <div class="language-title"><span>ភាសាខ្មែរ</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-my" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-my.svg" alt="my" />
                  </div>
                  <div class="language-title"><span>မြန်မာ&nbsp;</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-id" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-id.svg" alt="id" />
                  </div>
                  <div class="language-title"><span>bahasa Indo</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-kr" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-kr.svg" alt="kr" />
                  </div>
                  <div class="language-title"><span>한국어</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-vn" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-vn.svg" alt="vn" />
                  </div>
                  <div class="language-title"><span>Tiếng Việt</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-la" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-laos.svg" alt="la" />
                  </div>
                  <div class="language-title"><span>ລາວ</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-cn" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-cn.svg" alt="cn" />
                  </div>
                  <div class="language-title"><span>简体中文</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-es" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-es.svg" alt="es" />
                  </div>
                  <div class="language-title"><span>Español</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-ru" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-ru.svg" alt="ru" />
                  </div>
                  <div class="language-title"><span>Russian</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-fr" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-fr.svg" alt="fr" />
                  </div>
                  <div class="language-title"><span>Français</span></div>
                </div>
              </div>
              <div class="language-item-wrapper">
                <div id="lang-pt" class="language-item">
                  <div class="language-icon">
                    <img src="asset/img/language/icn-lang-pt.svg" alt="pt" />
                  </div>
                  <div class="language-title"><span>Português</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pt-[20%] mb-10">
            <img
              class="mx-auto w-[80%] max-w-[438px]"
              src="<?= $logo_auth['setting_value'] ?>"
              alt="MVP999BET"
            />
          </div>
          <div class="relative">
            <div class="login-form" id="step-1">
              <div class="text-xs text-center text-white">รีเซ็ตรหัสผ่าน</div>
              <div
                class="w-[70%] h-0.5 bg-[#FBDEB226] bg-opacity-90 mt-4 mx-auto"
              >
                <div class="horizontal-line"></div>
              </div>
              <div>
                <div class="flex flex-col items-center mb-2">
                  <div class="w-[85%] mt-5">
                    <!-- <div id="option-username">
                      <div
                        class="flex items-center text-[12px] gap-2 mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                      >
                        <div class="absolute mx-3">
                          <img src="asset/img/layout/icn-user.svg" alt="icn" />
                        </div>
                        <div class="input-label w-[85%] ml-6">
                          <div
                            class="pl-6 opacity-50 relative top-2 text-[10px] hidden"
                          >
                            ชื่อผู้ใช้ / Username
                          </div>
                          <input
                            id="username-field"
                            name="userName"
                            type="text"
                            minlength="4"
                            maxlength="20"
                            class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none custom-input"
                            placeholder="ชื่อผู้ใช้ / Username"
                            autocorrect="off"
                            autocapitalize="off"
                          />
                        </div>
                      </div>
                    </div> -->
                    <div id="option-phone">
                      <div
                        class="flex items-center text-[11px] min-h-[54px] mx-auto rounded-xl bg-[#00000080] bottom-animation"
                      >
                        <div class="ml-3">
                          <span
                            class="fi fi-th fis mt-[10px] text-[18px] current-flag-phone"
                            title="th"
                          ></span>
                        </div>
                        <div class="relative flex w-full">
                          <div
                            class="top-1 text-[10px] absolute ml-[14px] opacity-50"
                          >
                            เบอร์โทรศัพท์ / Phone number
                          </div>
                          <div
                            class="flex items-center justify-center ml-4 cursor-pointer"
                            data-phone-country
                          >
                            <div
                              class="mt-3 w-[32px] bg-lighter text-[#FBDEB2] current-dial"
                            >
                              +66
                            </div>
                            <img
                              class="mt-3 flex self-center w-[8px]"
                              src="asset/img/layout/icn-down-small.svg"
                            />
                            <div
                              class="hidden modal-container"
                              style="z-index: 2202"
                            >
                              <div
                                class="relative flex bg-black"
                                style="z-index: 2203; border-radius: 12px"
                              >
                                <input
                                  type="text"
                                  class="h-[40px] w-[100%] mt-3 ml-4 rounded-xl text-[11px] text-[#F5F5F5] bg-inherit border-none focus:outline-none"
                                  placeholder="Search"
                                  maxlength="15"
                                />
                              </div>
                              <div class="modal-content-container">
                                <div
                                  id="phone-country-select"
                                  class="pt-10 pb-4"
                                >
                                  <div class="choice-KH">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-kh fis"
                                            title="kh"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+855 Cambodia</div>
                                    </div>
                                  </div>
                                  <div class="choice-ID">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-id fis"
                                            title="id"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+62 Indonesia</div>
                                    </div>
                                  </div>
                                  <div class="choice-KR">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-kr fis"
                                            title="kr"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">
                                        +82 Korea, Republic of South Korea
                                      </div>
                                    </div>
                                  </div>
                                  <div class="choice-LA">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-la fis"
                                            title="la"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+856 Laos</div>
                                    </div>
                                  </div>
                                  <div class="choice-MY">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-my fis"
                                            title="my"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+60 Malaysia</div>
                                    </div>
                                  </div>
                                  <div class="choice-MM">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-mm fis"
                                            title="mm"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+95 Myanmar</div>
                                    </div>
                                  </div>
                                  <div class="choice-SG">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-sg fis"
                                            title="sg"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+65 Singapore</div>
                                    </div>
                                  </div>
                                  <div class="choice-TH">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer choice-item-focus"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-th fis"
                                            title="th"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">
                                        +66 ประเทศไทย / Thailand
                                      </div>
                                    </div>
                                  </div>
                                  <div class="choice-VN">
                                    <div
                                      class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                    >
                                      <div class="w-[20px] ml-2">
                                        <div style="font-size: 18px">
                                          <span
                                            class="fi fi-vn fis"
                                            title="vn"
                                          ></span>
                                        </div>
                                      </div>
                                      <div class="ml-4">+84 Vietnam</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="relative flex input-label">
                            <input
                              id="phone-field"
                              name="phone"
                              type="text"
                              pattern="[0-9]*"
                              inputmode="numeric"
                              class="h-[40px] mt-3 w-[85%] ml-4 rounded-xl text-[11px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000"
                              placeholder="เบอร์โทรศัพท์ / Phone number"
                              top-text="เบอร์โทรศัพท์ / Phone number"
                              maxlength="15"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="flex mb-5 ml-8 justify-initial">
                  <div
                    class="text-[#FBDEB2] text-xs underline cursor-pointer"
                    data-reset-toggle
                  >
                    รีเซ็ตโดยใช้หมายเลขโทรศัพท์
                  </div>
                </div> -->
                <div>
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <button
                        type="button"
                        data-next-from-step1
                        class="btn-primary rounded-xl mx-auto w-full h-[40px] flex items-center justify-center p-[0_18px] font-semibold btn-click-animation cursor-pointer"
                        style="
                          color: black;
                          background: linear-gradient(
                              270.03deg,
                              #8b6832 0.05%,
                              #fcdd9a 51.59%,
                              #966b2a 100%
                            ),
                            linear-gradient(0deg, #ecca77, #ecca77);
                          border: 1px solid #ecca77;
                        "
                      >
                        <span
                          class="font-semibold text-[14px]"
                          style="color: black"
                          >ต่อไป</span
                        >
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="step-2" class="hidden login-form">
              <div class="text-xs text-center text-white">รีเซ็ตรหัสผ่าน</div>
              <div
                class="w-[70%] h-0.5 bg-[#FBDEB226] bg-opacity-90 mt-4 mx-auto"
              ></div>

              <div class="mt-5">
                <div class="w-[85%] mt-5 ml-6 flex flex-row justify-initial">
                  <div
                    class="flex flex-col text-[#CDCDCD] text-[10px] text-nowrap"
                  >
                    <div>
                      OTP ส่งไปที่ <span id="otp-sent-to">+66 0900000000</span>
                    </div>
                    <div>Ref Code: <span id="ref-code">edhnsM</span></div>
                  </div>
                </div>

                <div class="relative w-full mt-3">
                  <div
                    class="flex items-center text-[12px] mb-4 w-[85%] mx-auto rounded-xl bg-[#00000080] bottom-animation relative"
                  >
                    <div class="absolute mx-4">
                      <img
                        src="asset/img/layout/icn-phone-verification.svg"
                        alt="icn"
                      />
                    </div>
                    <div class="input-label w-[85%] ml-6">
                      <input
                        id="verification-code-field"
                        name="verification-code"
                        type="text"
                        inputmode="numeric"
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none custom-input"
                        placeholder="รหัสยืนยัน / code"
                        maxlength="6"
                      />
                    </div>
                    <div class="relative flex items-center mr-2 min-w-[120px]">
                      <button
                        type="button"
                        data-otp-resend
                        disabled
                        class="btn-primary rounded w-full h-[28px] flex items-center justify-center p-[0_12px] btn-click-animation"
                        style="
                          color: black;
                          background: rgb(227, 187, 114);
                          opacity: 0.7;
                          pointer-events: none;
                        "
                      >
                        <span
                          class="font-medium text-[12px]"
                          id="otp-resend-text"
                          >ส่งใหม่ได้ใน (60)</span
                        >
                      </button>
                    </div>
                  </div>
                </div>

                <div class="mt-4">
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <button
                        type="button"
                        data-next-from-step2
                        class="btn-primary rounded-xl mx-auto w-full h-[40px] flex items-center justify-center p-[0_18px] font-semibold cursor-pointer"
                        style="
                          color: black;
                          background: linear-gradient(
                              270.03deg,
                              #8b6832 0.05%,
                              #fcdd9a 51.59%,
                              #966b2a 100%
                            ),
                            linear-gradient(0deg, #ecca77, #ecca77);
                          border: 1px solid #ecca77;
                        "
                      >
                        <span
                          class="font-semibold text-[14px]"
                          style="color: black"
                          >รีเซ็ตรหัสผ่าน</span
                        >
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- STEP 3: NEW PASSWORD -->
            <div id="step-3" class="hidden login-form">
              <div class="text-xs text-center text-white">ตั้งรหัสผ่านใหม่</div>
              <div
                class="w-[70%] h-0.5 bg-[#FBDEB226] bg-opacity-90 mt-4 mx-auto"
              ></div>

              <div class="w-[85%] mt-3 mx-auto">
                <div
                  class="flex items-center text-[12px] mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                >
                  <div class="absolute mx-3">
                    <img src="asset/img/layout/icn-password.svg" alt="icn" />
                  </div>
                  <div class="input-label w-[85%] ml-6">
                    <div
                      class="pl-6 opacity-50 relative top-2 text-[10px] hidden"
                    >
                      รหัสผ่าน / Password
                    </div>
                    <input
                      id="password-field"
                      name="password"
                      type="password"
                      class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none custom-input"
                      placeholder="รหัสผ่าน / Password"
                      minlength="8"
                      maxlength="30"
                      autocorrect="off"
                      autocapitalize="off"
                    />
                  </div>
                  <div class="relative flex ml-auto mr-4 flex-end">
                    <img
                      data-pw-toggle
                      class="w-[20px] h-[20px] cursor-pointer"
                      src="asset/img/show-password.svg"
                      alt="toggle password"
                    />
                  </div>
                </div>

                <div class="hidden profile-setting-container" data-pw-rules>
                  <div
                    class="flex text-xs text-white pw-rule"
                    data-rule="length"
                    style="align-items: center"
                  >
                    <div class="icon-container">
                      <img
                        class="w-1.5"
                        data-icon
                        src="asset/img/layout/icn-check-bullet-red.svg"
                        alt="icn-check-bullet"
                      />
                    </div>
                    <div class="mt-2 rule-text">ความยาว 8-16 ตัวอักษร</div>
                  </div>
                  <div
                    class="flex text-xs text-white pw-rule"
                    data-rule="upper"
                    style="align-items: center"
                  >
                    <div class="icon-container">
                      <img
                        class="w-1.5"
                        data-icon
                        src="asset/img/layout/icn-check-bullet-red.svg"
                        alt="icn-check-bullet"
                      />
                    </div>
                    <div class="mt-2 rule-text">
                      มีอักษรตัวใหญ่ อย่างน้อย 1 ตัว
                    </div>
                  </div>
                  <div
                    class="flex text-xs text-white pw-rule"
                    data-rule="digit"
                    style="align-items: center"
                  >
                    <div class="icon-container">
                      <img
                        class="w-1.5"
                        data-icon
                        src="asset/img/layout/icn-check-bullet-red.svg"
                        alt="icn-check-bullet"
                      />
                    </div>
                    <div class="mt-2 rule-text">มีตัวเลข อย่างน้อย 1 ตัว</div>
                  </div>
                  <div class="pb-4"></div>
                </div>

                <div class="w-full mt-4">
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="relative flex flex-col w-full">
                      <button
                        type="button"
                        id="submit-new-password"
                        class="btn-primary rounded-xl mx-auto w-full h-[40px] flex items-center justify-center p-[0_18px] font-semibold btn-click-animation cursor-pointer"
                        style="
                          color: black;
                          background: linear-gradient(
                              270.03deg,
                              #8b6832 0.05%,
                              #fcdd9a 51.59%,
                              #966b2a 100%
                            ),
                            linear-gradient(0deg, #ecca77, #ecca77);
                          border: 1px solid #ecca77;
                        "
                      >
                        <span
                          class="font-semibold text-[14px]"
                          style="color: black"
                          >บันทึกรหัสผ่าน</span
                        >
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function () {
        const OTP_SECONDS = 60;
        const OTP_LENGTH = 6;
        const USER_MINLEN = 4;

        const phoneLengths = {
          TH: 10,
          SG: 8,
          KH: 8,
          ID: 10,
          KR: 10,
          LA: 8,
          MY: 9,
          MM: 9,
          VN: 10,
        };
        const dialMap = {
          TH: "+66",
          SG: "+65",
          KH: "+855",
          ID: "+62",
          KR: "+82",
          LA: "+856",
          MY: "+60",
          MM: "+95",
          VN: "+84",
        };

        function setFlag($el, iso) {
          if (!$el.length) return;
          const cls = ($el.attr("class") || "")
            .split(/\s+/)
            .filter((c) => !/^fi-[a-z]{2}$/i.test(c));
          cls.push(`fi-${iso.toLowerCase()}`);
          $el.attr("class", cls.join(" ")).attr("title", iso);
        }

        function setPhoneUI(iso) {
          setFlag($(".current-flag-phone"), iso);
          $(".current-dial").text(dialMap[iso] || "");
          const $phone = $("#phone-field");
          if ($phone.length) {
            const maxLen = phoneLengths[iso] || 15;
            $phone.attr("maxlength", maxLen);
            if ($phone.val().length > maxLen)
              $phone.val($phone.val().slice(0, maxLen));
          }
        }

        function norm(s) {
          return (s || "")
            .toString()
            .toLowerCase()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "");
        }

        function maskPhone(num) {
          const digits = (num || "").replace(/\D/g, "");
          if (digits.length <= 4) return digits;
          return "******" + digits.slice(-4);
        }

        function randomRef(len = 6) {
          return Array.from(crypto.getRandomValues(new Uint8Array(len)))
            .map((b) => "abcdefghijklmnopqrstuvwxyz0123456789"[b % 36])
            .join("");
        }

        function goToStep(n) {
          $("[id^='step-']").addClass("hidden");
          $("#step-" + n).removeClass("hidden");
        }

        const $langMenu = $("#lang-menu");
        const $langBtn = $("[data-lang-btn]").length
          ? $("[data-lang-btn]")
          : $("img[src*='asset/img/language/icn-lang-']").first();
        $langBtn.on("click", (e) => {
          e.stopPropagation();
          $langMenu.toggleClass("hidden");
        });
        $langMenu.on("click", (e) => e.stopPropagation());
        $(document).on("click", function (e) {
          if (!$(e.target).closest("#lang-menu, [data-lang-btn]").length)
            $langMenu.addClass("hidden");
          if (!$(e.target).closest("[data-phone-country]").length)
            $("[data-phone-country] .modal-container").addClass("hidden");
        });

        $(document).on("click", "[data-phone-country]", function (e) {
          if ($(e.target).closest(".modal-container").length) return;
          $(this).find(".modal-container").toggleClass("hidden");
        });
        $(document).on(
          "click",
          "[data-phone-country] .choice-item",
          function (e) {
            e.stopPropagation();
            const klass = $(this).find("[class*='fi-']").attr("class") || "";
            const mIso = klass.match(/fi-([a-z]{2})/i);
            const iso = (mIso ? mIso[1] : "TH").toUpperCase();
            setPhoneUI(iso);
            $(this).closest(".modal-container").addClass("hidden");
          }
        );
        $(document).on(
          "input",
          ".modal-container input[type='text']",
          function () {
            const q = norm($(this).val());
            $(this)
              .closest(".modal-container")
              .find(".choice-item")
              .each(function () {
                const hay = norm($(this).text());
                $(this).toggleClass("hidden", !!q && !hay.includes(q));
              });
          }
        );

        $(document).on("input", "#phone-field", function () {
          this.value = this.value.replace(/\D/g, "");
        });
        $(document).on("input", "#verification-code-field", function () {
          this.value = this.value.replace(/\D/g, "").slice(0, OTP_LENGTH);
        });

        $(document).on("click", "[data-pw-toggle]", function () {
          const $input = $("#password-field");
          const show = $input.attr("type") === "password";
          $input.attr("type", show ? "text" : "password");
          $(this).attr(
            "src",
            show ? "asset/img/hide-password.svg" : "asset/img/show-password.svg"
          );
        });

        const $pwdWrap = $("[data-pw-rules]");
        const $pwdRules = $pwdWrap.find(".pw-rule");
        const pwChecks = {
          length: (v) => v.length >= 8 && v.length <= 16,
          upper: (v) => /[A-Z]/.test(v),
          digit: (v) => /\d/.test(v),
        };
        function refreshPwRules() {
          const v = $("#password-field").val() || "";
          if (!v) {
            $pwdWrap.addClass("hidden");
            return;
          }
          let fails = 0;
          for (const [key, test] of Object.entries(pwChecks)) {
            const ok = test(v);
            const $it = $pwdRules.filter(`[data-rule="${key}"]`);
            $it
              .toggleClass("hidden", ok)
              .attr("aria-hidden", ok ? "true" : "false");
            if (!ok) fails++;
          }
          $pwdWrap.toggleClass("hidden", fails === 0);
        }
        $("#password-field").on("input", refreshPwRules);

        const $boxes = $(".login-option-box-item");
        const targets = ["#option-username", "#option-phone"];
        $boxes.each(function (i) {
          $(this).attr("data-target", targets[i] || "");
        });

        let resetMode = "username";

        function setResetMode(mode) {
          resetMode = mode;
          const isUser = mode === "username";

          const $chip = $boxes.filter(function () {
            return (
              $(this).attr("data-target") ===
              (isUser ? "#option-username" : "#option-phone")
            );
          });
          $boxes
            .removeClass("login-option-box-selected")
            .attr("aria-selected", "false");
          $chip
            .addClass("login-option-box-selected")
            .attr("aria-selected", "true");

          $("#option-username,#option-phone").addClass("hidden");
          $(isUser ? "#option-username" : "#option-phone").removeClass(
            "hidden"
          );

          $("#username-field")
            .prop("disabled", !isUser)
            .attr("required", isUser);
          $("#phone-field").prop("disabled", isUser).attr("required", !isUser);

          $("[data-reset-toggle]").text(
            isUser ? "รีเซ็ตโดยใช้หมายเลขโทรศัพท์" : "รีเซ็ตโดยชื่อผู้ใช้"
          );

          setTimeout(
            () =>
              (isUser ? $("#username-field") : $("#phone-field")).trigger(
                "focus"
              ),
            0
          );
        }

        $boxes.on("click", function () {
          const t = $(this).attr("data-target");
          setResetMode(t === "#option-username" ? "username" : "phone");
        });
        $(document).on("click", "[data-reset-toggle]", function () {
          setResetMode(resetMode === "username" ? "phone" : "username");
        });

        setPhoneUI("TH");
        setResetMode("phone");

        function overlayMaskText() {
          const dial = $(".current-dial").text().trim() || "+66";
          const phone = $("#phone-field").val().trim();
          const masked = phone ? maskPhone(phone) : "******";
          return `${dial} ${masked}`;
        }
        function showOtpConfirm() {
          $("#otp-mask").text(overlayMaskText());
          $("#otp-confirm").removeClass("hidden");
          $("body").addClass("overflow-hidden");
        }
        function hideOtpConfirm() {
          $("#otp-confirm").addClass("hidden");
          $("body").removeClass("overflow-hidden");
        }

        $(document).on(
          "click",
          "[data-otp-cancel], #otp-confirm .overlay",
          hideOtpConfirm
        );
        $(document).on("click", "[data-otp-ok]", function () {
          hideOtpConfirm();
          fillOtpHeader();
          $("#verification-code-field").val("");
          startOtpTimer(OTP_SECONDS);
          goToStep(2);
          setTimeout(() => $("#verification-code-field").trigger("focus"), 0);
        });

        let otpTimer = null,
          otpRemaining = 0;

        function updateOtpButtonUI() {
          const $btn = $("[data-otp-resend]");
          const $txt = $("#otp-resend-text");
          if (otpRemaining > 0) {
            $btn
              .prop("disabled", true)
              .css({ opacity: 0.7, pointerEvents: "none" });
            $txt.text(`ส่งใหม่ได้ใน (${otpRemaining})`);
          } else {
            $btn
              .prop("disabled", false)
              .css({ opacity: 1, pointerEvents: "auto" });
            $txt.text("ส่งรหัสอีกครั้ง");
          }
        }
        function startOtpTimer(seconds = OTP_SECONDS) {
          clearInterval(otpTimer);
          otpRemaining = seconds;
          updateOtpButtonUI();
          otpTimer = setInterval(() => {
            otpRemaining--;
            if (otpRemaining <= 0) {
              clearInterval(otpTimer);
              otpRemaining = 0;
            }
            updateOtpButtonUI();
          }, 1000);
        }

        function fillOtpHeader() {
          const dial = $(".current-dial").text().trim() || "+66";
          const phone = $("#phone-field").val().trim();
          const masked = phone ? maskPhone(phone) : "********";
          $("#otp-sent-to").text(`${dial} ${masked}`);
          $("#ref-code").text(randomRef(6));
        }

        $(document).on("click", "[data-next-from-step1]", function () {
          if (resetMode === "username") {
            const u = ($("#username-field").val() || "").trim();
            if (u.length < USER_MINLEN) {
              //   alert(
              //     "กรุณากรอกชื่อผู้ใช้อย่างน้อย " + USER_MINLEN + " ตัวอักษร"
              //   );
              return;
            }
          } else {
            const p = ($("#phone-field").val() || "").trim();
            if (p.length < 6) {
              //   alert("กรุณากรอกหมายเลขโทรศัพท์ให้ถูกต้อง");
              return;
            }
          }
          showOtpConfirm();
        });

        $(document).on("click", "[data-otp-resend]", function () {
          if (otpRemaining > 0) return;
          startOtpTimer(OTP_SECONDS);
        });

        $(document).on("click", "[data-next-from-step2]", function () {
          const code = ($("#verification-code-field").val() || "").trim();
          if (code.length !== OTP_LENGTH) {
            // alert(`กรุณากรอกรหัสยืนยัน ${OTP_LENGTH} หลัก`);
            return;
          }
          goToStep(3);
          setTimeout(() => $("#password-field").trigger("focus"), 0);
        });

        $("#submit-new-password").on("click", function () {
          const pwd = $("#password-field").val() || "";
          const ok =
            pwChecks.length(pwd) && pwChecks.upper(pwd) && pwChecks.digit(pwd);
          if (!ok) {
            refreshPwRules();
            // alert("กรุณาตั้งรหัสผ่านให้ตรงตามเงื่อนไข");
            return;
          }
          //  alert("ตั้งรหัสผ่านใหม่สำเร็จ");
          window.location.href = "login";
        });
      });
    </script>
  </body>
</html>
