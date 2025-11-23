<?php
require_once 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MVP999BET - Register</title>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div
      class="w-full h-dvh bg-cover bg-center relative mx-auto max-w-[438px]"
      style="background-image: url('<?= $background['setting_value'] ?>')"
    >
      <div class="mx-auto max-w-[438px]">
        <div class="flex items-center justify-between p-4">
          <a href="login" class="flex flex-row items-center justify-center cursor-pointer"
            ><img src="asset/img/layout/icn-left-round.svg" alt="logo" /><span
              class="ml-2 text-[#FBDEB2]"
              >เข้าสู่ระบบ</span
            ></a
          >
          <div class="flex flex-row items-center">
            <!-- <div class="mr-4">
              <a
                href="https://www.line.me/en/"
                target="_blank"
                class="cursor-pointer"
              >
                <div
                  class="flex items-center justify-around cursor-pointer social-media-box social-media-box-line"
                >
                  <div class="p-1 ml-1 mr-1">
                    <img
                      class="icon-img w-[22px] h-[22px]"
                      src="asset/img/layout/icn-line.svg"
                    />
                  </div>
                  <div class="text-[#FFF] text-xs font-bold mr-3">
                    ติดต่อเจ้าหน้าที่
                  </div>
                </div>
              </a>
            </div> -->
            <!-- <div data-lang-btn>
              <img
                class="mx-auto w-[40px] h-[40px] cursor-pointer"
                width="40px"
                src="asset/img/language/icn-lang-th.svg"
                alt="logo"
              />
            </div> -->
          </div>
        </div>
        <div class="h-[calc(100vh-72px)] overflow-auto pb-[100px]">
          <!-- <div id="lang-menu" class="absolute z-10 hidden float-right my-5 mr-2 right-3 top-12">
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
          </div> -->
          <div class="pt-[20%] mb-10">
            <img class="mx-auto w-[80%] max-w-[438px]" src="<?= $logo_auth['setting_value'] ?>" alt="MVP999BET" />
          </div>
          <div class="login-form">
            <div id="step-1">
              <div class="text-xs text-center text-white">คุณยังไม่ได้เป็นสมาชิกใช่ไหม?</div>
              <div class="text-xs text-center text-white">สมัครสมาชิกเลย!</div>
              <div class="w-[70%] h-0.5 bg-[#FBDEB226] bg-opacity-90 mt-4 mx-auto"></div>
              <div
                class="hidden rounded flex items-center text-white text-xs font-normal px-2 py-2 relative alert-danger w-[85%] mx-auto mt-4 mb-2"
                role="alert"
              >
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100%"
                    height="100%"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-5 h-5 mx-2 feather feather-alert-octagon"
                  >
                    <polygon
                      points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"
                    ></polygon>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                  </svg>
                </div>
                <div class="ml-1 mr-auto">Username นี้ไม่สามารถใช้ได้ หรือ อาจถูกใช้แล้ว</div>
              </div>
              <div class="flex flex-col items-center mt-3">
                <div class="flex items-center text-[#FBDEB2] text-xs mb-2">
                  <span class="mr-2">ข้อมูลพื้นฐาน</span>
                </div>
                <div class="w-[85%]">
                  <!-- <div
                    class="flex items-center text-[12px] gap-2 mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                  >
                    <div class="absolute mx-3">
                      <img
                        class=""
                        src="asset/img/layout/icn-user.svg"
                        alt="icn"
                      />
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
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000 custom-input"
                        placeholder="ชื่อผู้ใช้ / Username"
                        autocorrect="off"
                        autocapitalize="off"
                      />
                    </div>
                  </div> -->
                  <div class="hidden mx-8 profile-setting-container mt--4" data-user-rules>
                    <div
                      class="flex text-xs text-white user-rule"
                      data-rule="minlen"
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
                      <div class="mt-2">
                        ชื่อผู้ใช้ (Username) ต้องมีความยาวอย่างน้อย 4 ตัวอักษร
                      </div>
                    </div>
                    <div class="pb-4"></div>
                  </div>
                </div>
                <div class="w-[85%] mt-3">
                  <!-- <div
                    class="flex items-center text-[11px] min-h-[54px] mx-auto rounded-xl bg-[#00000080] bottom-animation"
                  >
                    <div class="relative flex w-full">
                      <div
                        class="flex items-center w-full mx-3 my-1 cursor-pointer"
                        data-country-select
                      >
                        <div>
                          <span
                            class="fi fi-th fis mt-[10px] text-[18px] current-flag-country"
                            title="TH"
                          ></span>
                        </div>
                        <div
                          class="top-1 whitespace-nowrap text-[10px] absolute ml-[30px] opacity-50"
                        >
                          ประเทศ / Country
                        </div>
                        <div
                          class="mt-4 bg-lighter text-[#FBDEB2] flex flex-row items-center flex-1"
                        >
                          <span class="ml-3 current-country">ประเทศไทย / Thailand</span>
                        </div>
                        <img
                          class="mt-2 flex self-center w-[8px]"
                          src="asset/img/layout/icn-down-small.svg"
                        />
                        <div class="hidden modal-container" style="z-index: 2202">
                          <div
                            class="relative flex bg-black"
                            style="z-index: 2203; border-radius: 12px"
                          >
                            <input
                              id="phone-field"
                              type="text"
                              class="h-[40px] w-[100%] mt-3 ml-4 rounded-xl text-[11px] text-[#F5F5F5] bg-inherit border-none focus:outline-none"
                              placeholder="Search"
                              maxlength="15"
                            />
                          </div>
                          <div class="modal-content-container">
                            <div id="country-select" class="pt-10 pb-4">
                              <div class="choice-KH">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-kh fis" title="kh"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Cambodia</div>
                                </div>
                              </div>
                              <div class="choice-ID">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-id fis" title="id"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Indonesia</div>
                                </div>
                              </div>
                              <div class="choice-KR">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-kr fis" title="kr"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Korea, Republic of South Korea</div>
                                </div>
                              </div>
                              <div class="choice-LA">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-la fis" title="la"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Laos</div>
                                </div>
                              </div>
                              <div class="choice-MY">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-my fis" title="my"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Malaysia</div>
                                </div>
                              </div>
                              <div class="choice-MM">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-mm fis" title="mm"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Myanmar</div>
                                </div>
                              </div>
                              <div class="choice-SG">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-sg fis" title="sg"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Singapore</div>
                                </div>
                              </div>
                              <div class="choice-TH">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer choice-item-focus"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-th fis" title="th"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">ประเทศไทย / Thailand</div>
                                </div>
                              </div>
                              <div class="choice-VN">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-vn fis" title="vn"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">Vietnam</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div class="w-[85%] mt-3">
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
                      <div class="top-1 text-[10px] absolute ml-[14px] opacity-50">
                        เบอร์โทรศัพท์ / Phone number
                      </div>
                      <div
                        class="flex items-center justify-center ml-4 cursor-pointer"
                        data-phone-country
                      >
                        <div class="mt-3 w-[32px] bg-lighter text-[#FBDEB2] current-dial">+66</div>
                        <img
                          class="mt-3 flex self-center w-[8px]"
                          src="asset/img/layout/icn-down-small.svg"
                        />
                        <div class="hidden modal-container" style="z-index: 2202">
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
                            <div id="phone-country-select" class="pt-10 pb-4">
                              <div class="choice-KH">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-kh fis" title="kh"></span>
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
                                      <span class="fi fi-id fis" title="id"></span>
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
                                      <span class="fi fi-kr fis" title="kr"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">+82 Korea, Republic of South Korea</div>
                                </div>
                              </div>
                              <div class="choice-LA">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-la fis" title="la"></span>
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
                                      <span class="fi fi-my fis" title="my"></span>
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
                                      <span class="fi fi-mm fis" title="mm"></span>
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
                                      <span class="fi fi-sg fis" title="sg"></span>
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
                                      <span class="fi fi-th fis" title="th"></span>
                                    </div>
                                  </div>
                                  <div class="ml-4">+66 ประเทศไทย / Thailand</div>
                                </div>
                              </div>
                              <div class="choice-VN">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <span class="fi fi-vn fis" title="vn"></span>
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

                <div class="w-[85%] mt-3">
                  <div
                    class="flex items-center text-[12px] mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                  >
                    <div class="absolute mx-3">
                      <img class="" src="asset/img/layout/icn-password.svg" alt="icn" />
                    </div>
                    <div class="input-label w-[85%] ml-6">
                      <div class="pl-6 opacity-50 relative top-2 text-[10px] hidden">
                        รหัสผ่าน / Password
                      </div>
                      <input
                        id="password-field"
                        name="password"
                        type="password"
                        inputmode=""
                        pattern=""
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000 custom-input"
                        placeholder="รหัสผ่าน / Password"
                        minlength="1"
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
                      <div class="mt-2 rule-text">มีอักษรตัวใหญ่ อย่างน้อย 1 ตัว</div>
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
                </div>
                <!-- <div class="mt-3">
                  <div class="flex justify-center items-center text-[#FBDEB2] text-xs">
                    <span class="mr-2">โปรดเลือกวิธีชำระเงิน</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="15"
                      height="15"
                      viewBox="0 0 15 15"
                      fill="none"
                      data-v-bfef427b=""
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.50375 1C8.81376 1 9.98122 1.17662 10.9242 1.47981C11.8759 1.78581 12.5364 2.19981 12.9141 2.62869C13.2029 2.96542 13.4897 3.5981 13.6982 4.50583C13.9015 5.39114 14.0075 6.43757 14.0075 7.5C14.0075 8.56243 13.9015 9.60886 13.6982 10.4942C13.4897 11.4019 13.2029 12.0346 12.9141 12.3713C12.5364 12.8002 11.8759 13.2142 10.9242 13.5202C9.98122 13.8234 8.81376 14 7.50375 14C6.19375 14 5.02628 13.8234 4.08328 13.5202C3.13056 13.2139 2.46971 12.7993 2.09215 12.3699C1.8051 12.0384 1.51807 11.4089 1.30929 10.5003C1.10606 9.61591 1 8.56909 1 7.50563C1 6.44219 1.10605 5.39427 1.30938 4.50768C1.5179 3.5985 1.80481 2.96517 2.09338 2.62868C2.47115 2.19981 3.13159 1.7858 4.08328 1.47981C5.02628 1.17662 6.19375 1 7.50375 1ZM7.50375 0C10.2938 0 12.5963 0.75 13.6688 1.9725C15.4538 4.0425 15.4538 10.9575 13.6688 13.0275C12.5963 14.25 10.2938 15 7.50375 15C4.71375 15 2.41125 14.25 1.33875 13.0275C-0.44625 10.9725 -0.44625 4.0425 1.33875 1.9725C2.41125 0.75 4.71375 0 7.50375 0ZM7.49895 3.49996C7.68428 3.49996 7.86544 3.55492 8.01954 3.65788C8.17363 3.76084 8.29373 3.90718 8.36465 4.0784C8.43557 4.24962 8.45413 4.43802 8.41797 4.61979C8.38182 4.80155 8.29258 4.96852 8.16153 5.09956C8.03049 5.23061 7.86352 5.31985 7.68176 5.356C7.49999 5.39216 7.31159 5.3736 7.14037 5.30268C6.96915 5.23176 6.82281 5.11166 6.71985 4.95757C6.61689 4.80347 6.56193 4.62231 6.56193 4.43699C6.56193 4.18847 6.66065 3.95013 6.83638 3.77441C7.0121 3.59868 7.25044 3.49996 7.49895 3.49996ZM6.74934 11.5584C6.55052 11.5584 6.35986 11.4794 6.21927 11.3388C6.07869 11.1982 5.99972 11.0076 5.99972 10.8087C5.99972 10.6099 6.07869 10.4193 6.21927 10.2787C6.35986 10.1381 6.55052 10.0591 6.74934 10.0591V7.81027C6.55052 7.81027 6.35986 7.73129 6.21927 7.59071C6.07869 7.45013 5.99972 7.25946 5.99972 7.06065C5.99972 6.86184 6.07869 6.67117 6.21927 6.53059C6.35986 6.39001 6.55052 6.31103 6.74934 6.31103H7.49895C7.69777 6.31103 7.88843 6.39001 8.02902 6.53059C8.1696 6.67117 8.24857 6.86184 8.24857 7.06065V10.0591C8.44738 10.0591 8.63805 10.1381 8.77863 10.2787C8.91922 10.4193 8.99819 10.6099 8.99819 10.8087C8.99819 11.0076 8.91922 11.1982 8.77863 11.3388C8.63805 11.4794 8.44738 11.5584 8.24857 11.5584H6.74934Z"
                        fill="url(#paint0_linear_1934_3048)"
                        data-v-bfef427b=""
                      ></path>
                      <defs data-v-bfef427b="">
                        <linearGradient
                          id="paint0_linear_1934_3048"
                          x1="5"
                          y1="14.9999"
                          x2="5.00738"
                          y2="-5.76593e-05"
                          gradientUnits="userSpaceOnUse"
                          data-v-bfef427b=""
                        >
                          <stop stop-color="#8B6832" data-v-bfef427b=""></stop>
                          <stop offset="1" stop-color="#FCDD9A" data-v-bfef427b=""></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div
                    class="grid grid-cols-2 justify-around text-[#FBDEB2] items-center text-[11px] mt-2 mb-4 w-[85%] h-[40px] mx-auto rounded-xl bg-[#00000080] bottom-animation"
                    data-payment-options
                  >
                    <div class="flex flex-row ml-4 cursor-pointer" data-option="cash">
                      <div
                        class="flex justify-center items-center custom-round-box w-[18px] h-[18px] mr-4 rounded-full"
                      ></div>
                      <span>เงินสด</span>
                    </div>
                    <div class="flex flex-row ml-4 cursor-pointer" data-option="crypto">
                      <div
                        class="flex justify-center items-center custom-round-box w-[18px] h-[18px] mr-4 rounded-full"
                      >
                        <span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                          >
                            <circle
                              cx="5"
                              cy="5"
                              r="5"
                              transform="matrix(1 0 0 -1 0 10)"
                              fill="#FBDEB2"
                            ></circle>
                          </svg>
                        </span>
                      </div>
                      <span>คริปโต</span>
                    </div>
                  </div>
                  <div class="flex items-center justify-center mx-6">
                    <div class="register-option-container">
                      <div class="flex text-xs text-white" style="align-items: center">
                        <div class="mx-2 icon-container">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="13"
                            height="13"
                            viewBox="0 0 13 13"
                            fill="none"
                          >
                            <circle cx="6.5" cy="6.5" r="6.5" fill="white" />
                            <path
                              d="M6.5 1C3.464 1 1 3.464 1 6.5C1 9.536 3.464 12 6.5 12C9.536 12 12 9.536 12 6.5C12 3.464 9.536 1 6.5 1ZM6.5 9.8C6.09667 9.8 5.76667 9.47 5.76667 9.06667C5.76667 8.66333 6.09667 8.33333 6.5 8.33333C6.90333 8.33333 7.23333 8.66333 7.23333 9.06667C7.23333 9.47 6.90333 9.8 6.5 9.8ZM7.33967 4.113L7.094 7.05367C7.06833 7.36167 6.81167 7.6 6.5 7.6C6.18833 7.6 5.93167 7.36167 5.906 7.05367L5.66033 4.113C5.62 3.62167 6.005 3.2 6.5 3.2C6.96933 3.2 7.34333 3.58133 7.34333 4.04333C7.34333 4.06533 7.34333 4.091 7.33967 4.113Z"
                              fill="url(#grad-red-a)"
                            />
                            <defs>
                              <linearGradient
                                id="grad-red-a"
                                x1="6.5"
                                y1="1"
                                x2="6.5"
                                y2="12"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#FF0000" />
                                <stop offset="1" stop-color="#FF4E4E" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                        <div class="mt-2">
                          สำคัญ: วิธีชำระเงินที่คุณเลือกจะไม่สามารถเปลี่ยนแปลงได้ในภายหลัง
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="w-full mt-4">
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <button
                        data-step-next="2"
                        id="next-btn"
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
                        <span class="font-semibold text-[14px]" style="color: black"
                          >ขั้นตอนต่อไป</span
                        >
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="flex flex-row justify-center w-full mt-4">
                <p class="w-[80%] text-center text-[10px] text-[#CDCDCD] px-2">
                  หากกดปุ่ม สมัครสมาชิก, ฉันยอมรับว่าฉันอายุมากกว่า 18 ปีและได้อ่านและยอมรับ
                  <a
                    aria-current="page"
                    href="/register"
                    class="router-link-active router-link-exact-active text-center text-xs text-[#ECCA77]"
                    >ข้อตกลงและเงื่อนไข</a
                  >
                </p>
              </div> -->
            </div>
            <div id="step-2" class="hidden">
              <div class="text-xs text-center text-white">ยืนยันเบอร์มือถือของคุณ</div>
              <div class="w-[70%] h-0.5 bg-[#FBDEB226] bg-opacity-90 mt-4 mx-auto"></div>
              <div class="mt-5">
                <div class="w-[85%] mt-5 ml-6 flex flex-row justify-between">
                  <div class="flex flex-col text-[#CDCDCD] text-[10px] text-nowrap">
                    <div>OTP ส่งไปที่ +66 0900000000</div>
                    <div>Ref Code: edhnsM</div>
                  </div>
                  <div
                    class="ml-2 text-xs underline flex justify-center text-center items-center text-nowrap text-[#FBDEB2] cursor-pointer"
                  >
                    เปลี่ยนหมายเลข
                  </div>
                </div>
                <div class="relative w-full mt-3">
                  <div
                    class="flex items-center text-[12px] mb-4 w-[85%] mx-auto rounded-xl bg-[#00000080] bottom-animation relative"
                  >
                    <div class="absolute mx-4">
                      <img class="" src="asset/img/layout/icn-phone-verification.svg" alt="icn" />
                    </div>
                    <div class="input-label w-[85%] ml-6">
                      <input
                        id="verification-code-field"
                        name="verification-code"
                        type="text"
                        inputmode=""
                        pattern=""
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000 custom-input"
                        placeholder="รหัสยืนยัน / code"
                        minlength="1"
                        maxlength="10"
                      />
                    </div>
                    <div class="relative flex items-center mr-2 min-w-[100px]">
                      <div class="w-full">
                        <div class="flex flex-col relative w-[85%] mx-auto whitespace-nowrap">
                          <button
                            class="btn-primary rounded w-full h-[22px] flex items-center justify-center p-[0_18px] btn-click-animation w-[85%] mx-auto whitespace-nowrap"
                            style="color: black; background: rgb(227, 187, 114)"
                          >
                            <span class="font-medium text-[12px]">ส่งใหม่ได้ใน (38)</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <button
                        data-step-next="3"
                        class="btn-primary rounded-xl mx-auto w-full h-[40px] flex items-center justify-center p-[0_18px] font-semibold w-[85%] mx-auto cursor-pointer"
                        style="
                          color: rgba(43, 43, 58, 0.5);
                          background: linear-gradient(
                              270.03deg,
                              rgb(139, 104, 50) 0.05%,
                              rgb(252, 221, 154) 51.59%,
                              rgb(150, 107, 42) 100%
                            ),
                            linear-gradient(0deg, rgb(236, 202, 119), rgb(236, 202, 119));
                          border: 1px solid rgb(236, 202, 119);
                        "
                      >
                        <span class="font-semibold text-[14px]" style="color: rgba(43, 43, 58, 1)"
                          >ขั้นตอนต่อไป</span
                        >
                      </button>
                    </div>
                  </div>
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <button
                        data-step-prev="1"
                        class="btn-outline rounded-xl mx-auto w-full h-[40px] flex items-center justify-center p-[0_18px] font-semibold btn-click-animation cursor-pointer"
                        style="color: #bd9d4f; background: transparent; border: 1px solid #ecca77"
                      >
                        <span class="font-semibold text-[14px]">กลับขั้นตอนก่อนหน้า</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="flex flex-row justify-center w-full mt-4">
                <p class="w-[80%] text-center text-[10px] text-[#CDCDCD] px-2">
                  หากกดปุ่ม สมัครสมาชิก, ฉันยอมรับว่าฉันอายุมากกว่า 18 ปีและได้อ่านและยอมรับ
                  <a
                    aria-current="page"
                    href="/register"
                    class="router-link-active router-link-exact-active text-center text-xs text-[#ECCA77]"
                    >ข้อตกลงและเงื่อนไข</a
                  >
                </p>
              </div> -->
            </div>
            <div id="step-3" class="hidden">
              <div class="text-xs text-center text-white">ข้อมูลพื้นฐาน / บัญชีธนาคาร</div>
              <div class="w-[70%] h-0.5 bg-[#FBDEB226] bg-opacity-90 mt-4 mx-auto"></div>
              <div class="relative">
                <div class="mx-4 mt-4">
                  <div class="text-[#FBDEB2] text-xs mb-2">ธนาคาร</div>
                  <div
                    class="flex items-center text-[11px] min-h-[54px] mx-auto rounded-xl bg-[#00000080] bottom-animation"
                  >
                    <div class="relative flex w-full">
                      <div
                        class="flex items-center w-full mx-4 my-1 cursor-pointer"
                        data-bank-select
                      >
                        <div>
                          <img
                            class="max-w-[30px] max-h-[30px]"
                            src="https://storage.mrwed.cloud/prd/bank-icons/kbank-logo.png"
                          />
                        </div>
                        <div
                          class="top-1 whitespace-nowrap text-[10px] absolute ml-[41px] opacity-50"
                        >
                          ธนาคาร / Bank
                        </div>
                        <div
                          class="mt-4 bg-lighter text-[#FBDEB2] flex flex-row items-center flex-1"
                        >
                          <span class="ml-3">ธนาคารกสิกรไทย (THB)</span>
                        </div>
                        <img
                          class="mt-2 flex self-center w-[8px]"
                          src="asset/img/layout/icn-down-small.svg"
                        />
                        <div class="z-10 hidden modal-container">
                          <div
                            class="relative flex bg-black"
                            style="z-index: 2203; border-radius: 12px"
                          >
                            <input
                              id="phone-field"
                              type="text"
                              class="h-[40px] w-[100%] mt-3 ml-4 rounded-xl text-[11px] text-[#F5F5F5] bg-inherit border-none focus:outline-none"
                              placeholder="Search"
                              maxlength="15"
                            />
                          </div>
                          <div class="modal-content-container">
                            <div id="country-select" class="pt-10 pb-4">
                              <div class="choice-kbank">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer choice-item-focus"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/kbank-logo.png?Expires=4880607096&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=UbEoxy~96CbbAxGMn9eMmcjwrdTG87HPmBhKGVsOMosypkSMfvBVFtPYro1NaEr6xNFKXm7fllrPDTtqrh6f-5UBTdXhFhbiVLkxfWzBSAjy~HQk7GN2xF3oGGhiuPhwehl-Ze4zfsVCzsXJSTFgJcvVB4wG9qMifXYuJkvB6WXLT4ZojUJYinzl8KtEugY2JBBpr6XtKyifclTEPxoO2i43bJIDqvWYzm3z5s960bTqgVeP-saFDUyJANucpmA5W2gqp0CjfB7tZDCIBcmrGfFmTS88cFf8Svqws75RanwZhQCUBliQj~yK0Ai~7lGbe30IflekFW0xDAtD5GrVpw__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารกสิกรไทย
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-scb">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/scb-logo.png?Expires=4880607240&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=ZNkk96RC47sJEjvgcdC~d-WAomVs50BdzV6A0j9ud6vFlZsXUHx~uMf01pasj82JfGJA3MTED2K4j-vvYdDEtz7XpZf3lfqud9-uU4NHpQoLqAxnbk2gSevU6HswEDNpNdEdJpsZrZJYDky5QV8IwrDsDz1RG4m6eQR0M3UZ6mSUzohO1~X-tBpwZ3GlGEwDGtiANZveWvYX3JTCyQ1NVlyNlAehZrNLXwgf7rrq4HNAdUlrDZ6wQzlFOYxFtmK8UBu1ybQSSPuZMCJS01Tvj5Ju560p0mb0FugBoEK1AcOvB-XjnKRQjiXiNOIWiqHhL1TF40IcK2YWchIMzTHX0g__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารไทยพาณิชย์
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-bay">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/bay-logo.png?Expires=4880607654&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=Gr9MfOEj1xBjNn0A8Lwy31zFPuL~p-V5We9wiMHEkHv6MRe4jSnscvvXI50JMqB6EG0qlAEYKQMG2gKylP3jwK6nBnQjakWXA5eidipaU2IAgnHWwr20a62p1w3XSWd5othSXhCWg7Ve4NeLIX52HtOqWqrF6-GJ7kAn9sAEANYur-m1r0iYGqfEGT1TFxY3RNTqXsLfN8KPOIv2yz5KX0nJmev2X4IgjyhWxDfHIsZGNqa1ngYuo4hAwmD7DWKR0f8ZyMZ4jp2JsZwtVCNbctOotgjBr4ZtYlgY6-uR3mQIdE9Ba9KQ0jkDbYoKQlAXujqsCTfZNQToaxQc1kSWig__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารกรุงศรีอยุธยา
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-bbl">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/bbl-logo.png?Expires=4880607454&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=oS-Xq8hmcslWXkjdHoQxg6hD0PbNg8-OWcZjtkbZyb9HNAEGGDo5EsxF5lhU1T1V4YHDp4MFA6UO-YHbJxOFqZr-6UFlxq5ojNVWfa33k6pG-sKf1FZVzu2v-MZ~HSUxP6KJLhcTi5jIkDG3IL0zbCSzSLrlckfNDJk29E8OVn6oJow4VGu~1euRhIeXa2IOc4iYG9MTe~oXxkdOChVsZwlVIuHJW-rGNKrtSb~8WdMTu92wj~pOLn2MkLimqO5KVbQ0-3b5AS9zmBgXawmUmSZ01O4XHzvxonF5UYQM6SKYD55WbWqioagSVfMEJPbIuxMlBiNSCtzXCz8ySkjG9g__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารกรุงเทพ
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-ktb">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/ktb-logo.png?Expires=4880607185&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=HGTtSWc3p3lDSn9-kxtJOaAMHp4da4QoOWZASctaoM01P6lvn-YFBE60ekM2OfZacvyHZnBdYr4LqPm1nPzqHHsIGY~WafRQ-s0PTn-uJyuSYbnY3dPnEma-0-KiUKmGvoHJEsPTA8r1Cjyyp43-sGIIil4qkngFnNbxqTn4I3DfZxHfp7CmDrMSjJcXc18cDs-u9sc-OEfkwThg7VZnLsPp5sfuvcfn4qTEBYpp6v2KqMRSlDFwKsUIsYVd3axm6Pf36xw9IsdzyUtM07MI9iuuS3oKg444CVH8EHUDszp24~amoA54WFEdivuwwhDDpEA9P3tF3Bv4HYfxwVl7Aw__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารกรุงไทย
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-kkp">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/kkp-logo.png?Expires=4880607814&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=VJ2jer4H1Aq8gNioisMguWD~Be-vu9tTe8w~eFCzSFJRY3J2O6aWPdvgSFRI2BDUMvWvd8R8hdW3nFBBfuoxJSp6-4BtK3kLNUekaoGy2NOtxAt5OrbZPex4SyaeRVNptaNg9A0tsp1zE~eLjVS3Pq7-4KGWi8~Wcby9k0ckkqkVh8wLsjtDhTXhEnlqAOxo0iXleMYYuATknnHvWqFq94lbEa53mO10lMH1TYQ7Rfp7I4I-aLwqisuWXvy5eLgnyFDeSe5NYZkzLi4b2kIpVS7QhOGwdSYjQ0Fj1ynM7OB6KF7G1eYfapBhrh7ZIQquqyxgzTpCFKOGY1LUvM95Ag__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารเกียรตินาคิน
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-ttb">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/ttb-logo.png?Expires=4880607595&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=dwTKrx6UCjwPXNyQ3OnSuDRT9kq2KYa4bmG0lAbSfgGhyo72DmsxVvCRyQEwcsFuehhTh5iHro3o-rNeyeTo855WeFJxNoB8skNTQXU6wg0VP32T9g5AYn1VEQDnt~VedO7qdi2dtae3xDpkNGPb-1irgplKImFQdI7155~TEaica~ukHYKcskarXK9ahqf7UAb9GaBO8zN~QZcldUqDoI3tWNLoMWSAk437E4JFCxzRMCNGlS3MeYwa5QsDee-6QvMyGu6p6ca5YvO2Prg1124O5kDmMLqIvrBa7T6KzIk4NMls-Z5qWp9Ah0aSqrHSvnOAg~S7IWlnM842WhtwTA__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารทหารไทยธนชาต
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-gsb">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/gsb-logo.png?Expires=4880607843&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=avhXN5CiaMAHnXOKgBZUSkK5fRn8C1TkIvEQq6dPFUcR48jktkxYHRdjm9aQnRSmFjaXQ~pJIm~oI~PmCSlAXkuIGEjkhFjOZG9MWOYnifR49~Q4m87G7glUjKC8qCjYs-QhBtB0zPusUmYl8D0KogbFFbKj1fwYPzUevwGQfOfOgdeBFRx-rotsvFtQPUQH~ezit7mXGfdGAFeCMDKj9Ps25z17PzY9M7X30EvdW0CMt0BoBrZqJCz60PIIjAudHxd7AqA-PmOYCF9mNdsrBDFuiSQsu~25l-esAbjRbITipsxwJZ79croWsjm9BHcxecvK~UmCnxM0tCOScdAEgg__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารออมสิน
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-ghb">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/ghb-logo.png?Expires=4880608070&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=m8Ngc3NAE6A2u~WeM0BNjH0yr1m2-UXL8u9V9MMRb0H7l0-t8nDwoRPMjraPxif4d0A3I4rqcfiV4CEdj62kBx6r7~ICBNRBJpvgPkdVSwDkiVPnSAI319gKnhEMYBKBBoW9ve3IDAU2D-QNZbF28thzMPcxPIOtbyYurQzy5Ru8vpCl9dmcq0g9Q8Z1O1LP3cBDp1N-7RYHi0-G9G4FpT75edQJaHI-ftIcBUiRU7q0yOXFgMmu60oYoMyj4XEFWY3AQ1MVvgVfx43N5PA1O6-794lD9u7xNigItLbhSfirF7JCqfL90OQs8YZAR96OwXyhhZvqkdsqb388SxOp1Q__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารอาคารสงเคราะห์
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-baac">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/baac-logo.png?Expires=4880608140&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=pk~pK-xxjg97b~M5AtAiE20O0Ceng9CWVNgJTT2Gse8OBrMEQ2yGEbI2I8PYFZti~XhVP1qa31uxxU-HHW8GvM6lY4F5TTZoaILp16kT8S6JUHM76op8xnodeRJMQi~unuADO7BpfvMx7T58b7~Q8srs86P6oLOmARV7HHrchbN57cqvpqcR4vBkUgPsBFYns4l7tuNx5Qr2Lyiih8JX513XtadWP19AxUo2OXIwND59jotI04ll6RKrsOqfsX~~BnR0uReg-DInmnQsB~Ybiec79NdQpc4eiWiUZm0VtikoQm9ZAFQFgH-PTPX5f4LSj5jLxTbBZ9GEA6wjXXs3Mg__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารเพื่อการเกษตรและสหกรณ์
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-anz">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/anz-logo.png?Expires=4880606421&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=QaPmVYCgFV44PQE05VRLYkXrFk8b8p0631avlWQd4m0PfJPJbpF9mWyYbjZw6kGW9WQ7mgiEvOexr7x~qDRbh7118shsYGc8Uyql5POGA2p-gS5Ve0Udk2fZdkzVfNwoCJ3LQUZDSplNopzTO2v0BzEwEei3ye5Jv1JiOhNml3zqXycF49BEILixkoG3wJrM3oyhQV8Cjf~Lktfa4R79vrjeO5ec~VuXzi6bq8mpBu~F-wWnLZVRuQk44E9IiKwvkrtOkE9qS4~B-v9x2kVIZxnYo8DldG3DQgKiU3XCGHtGIyh-OFPsgvXEyL-C6phnuX9sBWUxgTHLARGlbYA6Ng__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคาร เอเอ็นแซด
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-cimbt">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/cimbt-logo.png?Expires=4880607786&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=Y~cKvxZIpTd5LzV218ruaPoXq8ooMm9UrygTMVmRSXB7FYUpU-bnk9-wyV0uH4DADl4jK-vWgXbIullC9ZC1NrdbO4cKNNeq-m1q0daNDTANayCMwrEWrJtU4MUERXE7Nqu~WmwH0P2dweaiw3dVrqsz3m-kYEV1FIB9QrYG8wgIFEUGoClOXyOOINEzSRthz0BpG9atlEJyr~uEQkYNoft54nurU-GLhmQ-FGp6ynwFO2dzZrzH2GO3D-n3SLXsAGAYL-MN6IFI2g6BSOlPuwx2VvdGphtLsND-0blOOqcjqqbAXCSRG9aZtVJVCgiP10LnccOPNKtV9otA2Br4bg__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารซีไอเอ็มบีไทย
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-tisco">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/tisco-logo.png?Expires=4880607985&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=oNySiYxY~FT0Czbshtgz-0c5H-Q-fJZ98a4xm9jrPwfqSdMPnC-UQlGSu5Pby8w~xTZtpPGOIH~yn5bQBzrTsts7cyf8dg58G09yqlCa6vK8mo1O4iPgTNgYE3017tcNSf7nyIywKMaHnocROS~v5PJuTmplm1BTYOHI5mb9Q3oEjwlRlSZ4-KyA0bqRjzq6GqzDYPeHWpmiEru3agoOv1F6bbnsygTbOlw4x9CfVGnmn3izjdACPKEoljDLkq1nWPdaET3Js7nldNIbA5gUzPszyPomF6xmDq7yILVM6wTSMmoGP8u8H4ercrGXDLtAqngvyKuRGmwJAc0gyw~6XQ__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารทิสโก้
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-uobt">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/uobt-logo.png?Expires=4880608105&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=mF-1V4Azfdtkn~BCf4UGOnShbMvcQuM4x0FZaXqA98l~q-pr-KdoI2AY3NOgM63roJl-pnMxHG~WeDIgRdKMBf1ozWPE4XUVdP1ky3VMIZjSQZ~l3IUUpju7wwa0bVapsAwJ8ZH9Y79PX9zjgJVg43mOAmIPzm6XKKtX5IKR40lM1qUObFZf7BLggkxQu-wJGeTsHYP49JH321KRm2wHAGuKBUd9-F6q-SbM~7r8FyO0JVnZXsXgkcFMd-hsRwG8--UdCj7JMKdkQwGr~YC7tjjVq1XomUfN1I~AyhHQk9NlKNylO59g3X1TB~6KZBaGskJoFDpasX0XNcP3GWIySA__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารยูโอบี
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-isbt">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/isbt-logo.png?Expires=4880608070&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=EXvBCpWk3XpycO0a8FXWv8NERyD3s4FEcCIN4zP37ZyJMR8r-bglqNzvoVYgeXF-kj3umDcSmzmXrf7G0joKcJZ57Slrz~au0494wkO0mTaof~-a2ERsfrwVWc2O9tjvHcyzUpkSmIN1hFCXfON6IiwDb7gvgjewslIPur-eAkM8Crt-R1XcfyFIfPhTpszFBKJiqi99Ex~SWxjplAXCluk2FonKtVQ9eBCEYObDrYIYXsNHkHr6E4grTbsscrrrj8soyQFQdNjxv0FmiAk33TACUNrKQbHywYCTwc~0HndaQnCjF1LyfZkQmKCZCid~uF5Si8A5~rBMhJsldli6lg__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารอิสลามแห่งประเทศไทย
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-lhfg">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/lhfg-logo.png?Expires=4880607868&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=dSqu-0mX3EFzJ4JAAFEnEpxJbphKCiEmE2LW3qynDUmiKyOObwr4hPtzo28kXRc3k0xt-UU~ueJ7GjuMoQmj-dnxRfAL~~cu-j2Dj1riU8kti6GDXuTl~hDd5EQN3y7mLH4JZatK6-65dWSszdQMlJzdAcqBHVpS9JaEdJzGonfmTbxmFgPzKcrrVwC65k-SjugjmUuMBpyAtHCEDRCHnm3M2yag55-TWAw~63EpXVEKPlBh3TKC6BhyQY0wYniBlTjxsF9TIXYuheTOloPTH0g~wAP~bvYCdzHnScSIkKyQd9k3cfLbBg0DpSDMPqOpy6q7o25urDfwrJE3ZpwJhg__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารแลนด์ แอนด์ เฮาส์
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-tcd">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/tcd-logo.png?Expires=4880608129&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=Ta1tsyBfqh-GcgmOZlv93QqapVIS4Io7R47BcRTOa67Zz~FZ9KmD2OYABKEbsCvAI7ktY6WYT-0087u3cxXZcvSZj2CHNrNKd268LXQuT37Ztzzt1pQ5E1uJNjUt5wB5dhNGCHqWCf-mHJU360qePXCgSDhx3wSZAq~S3qbX8VhrJCyUgV74HO4spVxIMZIFMcG2FaoMp67GTKpggW9d~OB5QdLhfcX~SBBYHO-cgOzbBbHo~UtrKmhVC5OUM8OK7wmD0WgjFto4dBWnqAsqQ9s3lAYhHm7WvKdEG9PkQBKj1tMOE9yDSsaz4Q7pkzTDFNRUNoYlP0TTSzboxeBJHg__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารไทยเครดิต
                                    <span class="ml-1"> (THB) </span>
                                  </div>
                                </div>
                              </div>
                              <div class="choice-icbc">
                                <div
                                  class="flex flex-row mx-2 my-2 choice-item h-[30px] items-center rounded-md text-[#FFF] text-[#FBDEB2] text-xs cursor-pointer"
                                >
                                  <div class="w-[20px] ml-2">
                                    <div style="font-size: 18px">
                                      <img
                                        class="max-w-[24px] max-h-[24px]"
                                        src="https://storage.mrwed.cloud/prd/bank-icons/icbc-logo.png?Expires=4880608248&amp;Key-Pair-Id=K20K0LBBABZT3J&amp;Signature=FtDJslTPMCy8KRJNzOWJQFnq04z1euHeU39KQNvj9nfjKBJUxE8qXfmDgdItk3ZU5BgOx~Vc3BAI~iHgMTh27rUsUMPzIcTrqZw~OMvqUTLSjvvCqjCHzMOMO6fLJUwWGL3quh2ZOapp1AiN4zn9gm8-S1utYgXTquBSdLSpSSWO1EzDMHZfiEwA69U1DvUL~Htc42zROWKu7tqnGw99mud2gVM2YQvc9obkC8FRw4e5bYcAh4FP4HyJcPp~hiaX~niVihonCylAvhS35HUdXQr6wlYEkT~NvkdJJ~QK8sZxT7HyyFBM76L3KIaZ2teahrCV~~HRe8H14EQD~TAk2Q__"
                                      />
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    ธนาคารไอซีบีซี (ไทย)
                                    <span class="ml-1"> (THB) </span>
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
                <div class="mx-4 mt-4">
                  <div class="text-[#FBDEB2] mb-2 text-xs">
                    <label>หมายเลขบัญชี</label>
                  </div>
                  <div
                    class="flex items-center text-[12px] mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                  >
                    <div class="input-label w-[85%] ml-6">
                      <input
                        id="inputBankAccountNumber"
                        name="inputBankAccountNumber"
                        type="text"
                        inputmode="numeric"
                        pattern="*[0-9]"
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000 custom-input"
                        placeholder=""
                        minlength="1"
                        maxlength="30"
                        autocorrect="off"
                        autocapitalize="off"
                        style="text-align: center"
                      />
                    </div>
                  </div>
                </div>
                <div class="mx-4 mt-4">
                  <div class="text-[#FBDEB2] mb-2 text-xs">
                    <label>ชื่อ</label>
                  </div>
                  <div
                    class="flex items-center text-[12px] mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                  >
                    <div class="input-label w-[85%] ml-6">
                      <input
                        id="first-name-field"
                        name="inputFirstName"
                        type="text"
                        inputmode=""
                        pattern=""
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000 custom-input"
                        placeholder=""
                        minlength="1"
                        maxlength="30"
                        autocorrect="off"
                        autocapitalize="off"
                        style="text-align: center"
                      />
                    </div>
                  </div>
                </div>
                <div class="mx-4 mt-4">
                  <div class="text-[#FBDEB2] mb-2 text-xs">
                    <label>นามสกุล</label>
                  </div>
                  <div
                    class="flex items-center text-[12px] mx-auto rounded-xl bg-[#00000080] bottom-animation relative mb-0"
                  >
                    <div class="input-label w-[85%] ml-6">
                      <input
                        id="last-name-field"
                        name="inputLastName"
                        type="text"
                        inputmode=""
                        pattern=""
                        class="w-[85%] ml-6 rounded-xl h-[40px] text-[12px] text-[#F5F5F5] bg-inherit border-none focus:outline-none color: #FF0000 custom-input"
                        placeholder=""
                        minlength="1"
                        maxlength="30"
                        autocorrect="off"
                        autocapitalize="off"
                        style="text-align: center"
                      />
                    </div>
                  </div>
                </div>
                <div class="mx-4 mt-4">
                  <div class="info-container">
                    <div class="flex items-center text-xs text-white">
                      <div class="mx-2 mt-1 icon-container">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="13"
                          height="13"
                          viewBox="0 0 13 13"
                          fill="none"
                        >
                          <circle cx="6.5" cy="6.5" r="6.5" fill="white"></circle>
                          <path
                            d="M6.5 1C3.464 1 1 3.464 1 6.5C1 9.536 3.464 12 6.5 12C9.536 12 12 9.536 12 6.5C12 3.464 9.536 1 6.5 1ZM6.5 9.8C6.09667 9.8 5.76667 9.47 5.76667 9.06667C5.76667 8.66333 6.09667 8.33333 6.5 8.33333C6.90333 8.33333 7.23333 8.66333 7.23333 9.06667C7.23333 9.47 6.90333 9.8 6.5 9.8ZM7.33967 4.113L7.094 7.05367C7.06833 7.36167 6.81167 7.6 6.5 7.6C6.18833 7.6 5.93167 7.36167 5.906 7.05367L5.66033 4.113C5.62 3.62167 6.005 3.2 6.5 3.2C6.96933 3.2 7.34333 3.58133 7.34333 4.04333C7.34333 4.06533 7.34333 4.091 7.33967 4.113Z"
                            fill="url(#paint0_linear_1934_2958)"
                          ></path>
                          <defs>
                            <linearGradient
                              id="paint0_linear_1934_2958"
                              x1="6.5"
                              y1="1"
                              x2="6.5"
                              y2="12"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="#FF0000"></stop>
                              <stop offset="1" stop-color="#FF4E4E"></stop>
                            </linearGradient>
                          </defs>
                        </svg>
                      </div>
                      <div class="mx-2 mt-2 text-xs">
                        สำคัญ: ชื่อและนามสกุลของคุณต้องตรงกับบัญชีธนาคาร
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col items-center mt-3">
                <div class="w-full mt-4">
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <a
                        href="complete"
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
                        <span class="font-semibold text-[14px]" style="color: black"
                          >สมัครสมาชิก</span
                        >
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="flex flex-row justify-center w-full mt-4">
                <p class="w-[80%] text-center text-[10px] text-[#CDCDCD] px-2">
                  หากกดปุ่ม สมัครสมาชิก, ฉันยอมรับว่าฉันอายุมากกว่า 18 ปีและได้อ่านและยอมรับ
                  <span class="text-center text-xs text-[#ECCA77]">ข้อตกลงและเงื่อนไข</span>
                </p>
              </div> -->
            </div>
          </div>
          <div class="flex flex-row items-center justify-center mx-4 mt-6">
            <div class="text-[#FFF] text-sm">มีบัญชีอยู่แล้ว?</div>
            <div class="w-[100px] ml-4">
              <a
                href="login"
                class="border border-1 border-[#FDD387] text-[#FDD387] font-normal text-sm rounded-xl w-full flex items-center justify-center btn-click-animation p-2"
                >เข้าสู่ระบบ</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function () {
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
        }
        const dialMap = {
          TH: '+66',
          SG: '+65',
          KH: '+855',
          ID: '+62',
          KR: '+82',
          LA: '+856',
          MY: '+60',
          MM: '+95',
          VN: '+84',
        }

        function setFlag($el, iso) {
          if (!$el.length) return
          const classStr = $el.attr('class') || ''
          const cls = classStr.split(/\s+/).filter((c) => !/^fi-[a-z]{2}$/i.test(c))
          cls.push(`fi-${iso.toLowerCase()}`)
          $el.attr('class', cls.join(' ')).attr('title', iso)
        }

        function syncCountryAndPhone(iso, name) {
          setFlag($('.current-flag-country'), iso)
          $('.current-country').text(name)
          setFlag($('.current-flag-phone'), iso)
          $('.current-dial').text(dialMap[iso] || '')
          const $phone = $("input[name='phone']")
          if ($phone.length) {
            const maxLen = phoneLengths[iso] || 15
            $phone.attr('maxlength', maxLen)
            if ($phone.val().length > maxLen) $phone.val($phone.val().slice(0, maxLen))
          }
        }

        syncCountryAndPhone('TH', 'ประเทศไทย / Thailand')

        $(document).on('click', '[data-step-next]', function () {
          const nextStep = $(this).data('step-next')
          $(this).closest("[id^='step-']").addClass('hidden')
          $('#step-' + nextStep).removeClass('hidden')
        })

        $(document).on('click', '[data-step-prev]', function () {
          const prevStep = $(this).data('step-prev')
          $(this).closest("[id^='step-']").addClass('hidden')
          $('#step-' + prevStep).removeClass('hidden')
        })

        $(document).on('click', '[data-pw-toggle]', function () {
          const $input = $('#password-field')
          const show = $input.attr('type') === 'password'
          $input.attr('type', show ? 'text' : 'password')
          $(this).attr('src', show ? 'asset/img/hide-password.svg' : 'asset/img/show-password.svg')
        })

        $(document).on('input', "input[name='phone']", function () {
          this.value = this.value.replace(/\D/g, '')
        })

        $(document).on(
          'click',
          '[data-country-select], [data-phone-country], [data-bank-select]',
          function (e) {
            if ($(e.target).closest('.modal-container').length) return
            $(this).find('.modal-container').toggleClass('hidden')
          }
        )

        $(document).on('click', function (e) {
          if (!$(e.target).closest('[data-country-select]').length) {
            $('[data-country-select] .modal-container').addClass('hidden')
          }
          if (!$(e.target).closest('[data-phone-country]').length) {
            $('[data-phone-country] .modal-container').addClass('hidden')
          }
          if (!$(e.target).closest('[data-bank-select]').length) {
            $('[data-bank-select] .modal-container').addClass('hidden')
          }
          if (!$(e.target).closest('[data-lang-btn], #lang-menu').length) {
            $('#lang-menu').addClass('hidden')
          }
        })

        $(document).on('click', '[data-country-select] .choice-item', function (e) {
          e.stopPropagation()
          const klass = $(this).find("[class*='fi-']").attr('class') || ''
          const m = klass.match(/fi-([a-z]{2})/i)
          const iso = (m ? m[1] : 'TH').toUpperCase()
          const name = $(this).find('.ml-4').text().trim()
          syncCountryAndPhone(iso, name)
          $(this).closest('.modal-container').addClass('hidden')
        })

        $(document).on('click', '[data-phone-country] .choice-item', function (e) {
          e.stopPropagation()
          const klass = $(this).find("[class*='fi-']").attr('class') || ''
          const mIso = klass.match(/fi-([a-z]{2})/i)
          const iso = (mIso ? mIso[1] : 'TH').toUpperCase()
          const text = $(this).text().trim()
          const mTxt = text.match(/\+(\d+)\s+(.+)/)
          const name = mTxt ? mTxt[2] : text
          syncCountryAndPhone(iso, name)
          $(this).closest('.modal-container').addClass('hidden')
        })

        $(document).on('click', '[data-payment-options] [data-option]', function () {
          const $root = $(this).closest('[data-payment-options]')
          $root.find('[data-option] .custom-round-box').empty()
          $(this).find('.custom-round-box').html(`
               <span>
                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                   <circle cx="5" cy="5" r="5" transform="matrix(1 0 0 -1 0 10)" fill="#FBDEB2"></circle>
                 </svg>
               </span>
             `)
          console.log('เลือกวิธีชำระเงิน:', $(this).data('option'))
        })

        function applyBankChoice($select, $item) {
          const bankName = $item.find('.ml-4').text().trim()
          const bankIcon = $item.find('img').attr('src') || ''
          $select.find('> div:first-child img').attr('src', bankIcon)
          $select.find('> .mt-4 span').text(bankName)
          $select.find('.choice-item.choice-item-focus').removeClass('choice-item-focus')
          $item.addClass('choice-item-focus')
          const codeMatch = ($item.closest("div[class*='choice-']").attr('class') || '').match(
            /\bchoice-([a-z0-9-]+)\b/i
          )
          const bankCode = codeMatch ? codeMatch[1].toLowerCase() : ''
          let $hidden = $select.find("input[type='hidden'][name='bank']")
          if (!$hidden.length) $hidden = $('<input type="hidden" name="bank">').appendTo($select)
          $hidden.val(bankCode)
        }

        function initDefaultBank() {
          $('[data-bank-select]').each(function () {
            const $select = $(this)
            let $focused = $select.find('.modal-container .choice-item-focus').first()
            if (!$focused.length) $focused = $select.find('.modal-container .choice-item').first()
            if ($focused.length) applyBankChoice($select, $focused)
          })
        }

        $(document).on('click', '[data-bank-select] .choice-item', function (e) {
          e.stopPropagation()
          const $item = $(this)
          const $select = $item.closest('[data-bank-select]')
          applyBankChoice($select, $item)
          $select.find('.modal-container').addClass('hidden')
        })

        initDefaultBank()

        const $pwd = $('#password-field')
        const $wrap = $('[data-pw-rules]')
        const $rules = $wrap.find('.pw-rule')

        const checks = {
          length: (v) => v.length >= 8 && v.length <= 16,
          upper: (v) => /[A-Z]/.test(v),
          digit: (v) => /\d/.test(v),
        }

        function refreshPwRules() {
          const v = $pwd.val() || ''
          if (!v) {
            $wrap.addClass('hidden')
            return
          }
          let failCount = 0
          for (const [key, test] of Object.entries(checks)) {
            const ok = test(v)
            const $item = $rules.filter(`[data-rule="${key}"]`)
            if (ok) $item.addClass('is-valid hidden').attr('aria-hidden', 'true')
            else {
              $item.removeClass('is-valid hidden').attr('aria-hidden', 'false')
              failCount++
            }
          }
          if (failCount === 0) $wrap.addClass('hidden')
          else $wrap.removeClass('hidden')
        }

        $pwd.on('input', refreshPwRules)
        refreshPwRules()

        const $userInput = $('#username-field')
        const $userWrap = $('[data-user-rules]')
        const $userRules = $userWrap.find('.user-rule')
        const USER_MIN = 4
        const userChecks = { minlen: (v) => v.trim().length >= USER_MIN }

        function refreshUsernameRules() {
          const v = $userInput.val() || ''
          if (!v.trim()) {
            $userWrap.addClass('hidden')
            return
          }
          let failCount = 0
          for (const [key, test] of Object.entries(userChecks)) {
            const ok = test(v)
            const $item = $userRules.filter(`[data-rule="${key}"]`)
            $item
              .toggleClass('is-valid', ok)
              .toggleClass('hidden', ok)
              .attr('aria-hidden', ok ? 'true' : 'false')
            if (!ok) failCount++
          }
          $userWrap.toggleClass('hidden', failCount === 0)
        }

        $userInput.on('input blur', refreshUsernameRules)
        refreshUsernameRules()

        function wireFloatingLabel(inputSelector) {
          const $input = $(inputSelector)
          if (!$input.length) return
          const $label = $input.prev('div')
          if (!$label.length) return
          function refresh() {
            const hasValue = ($input.val() || '').trim().length > 0
            $label.toggleClass('hidden', !hasValue)
          }
          refresh()
          $input.on('input change blur', refresh)
          setTimeout(refresh, 50)
        }

        wireFloatingLabel('#username-field')
        wireFloatingLabel('#password-field')

        function norm(s) {
          return (s || '')
            .toString()
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
        }

        function getItemIndexText($item) {
          let text = $item.text()
          const klass = $item.find("[class*='fi-']").attr('class') || ''
          const mIso = klass.match(/\bfi-([a-z]{2})\b/i)
          if (mIso) text += ' ' + mIso[1]
          return norm(text)
        }

        function toggleNoResults($container, show) {
          let $no = $container.find('.no-results')
          if (!$no.length) {
            $no = $(
              '<div class="no-results text-center text-[#FBDEB2] opacity-70 py-3">ไม่พบผลลัพธ์</div>'
            ).appendTo($container.find('.modal-content-container'))
          }
          $no.toggleClass('hidden', !show)
        }

        function resetModalSearch($container) {
          const $input = $container.find("input[type='text']").first()
          $input.val('')
          $container.find('.choice-item.hidden').removeClass('hidden')
          toggleNoResults($container, false)
          setTimeout(() => $input.trigger('focus'), 0)
        }

        function filterModal($container, queryRaw) {
          const q = norm((queryRaw || '').trim())
          const $items = $container.find('.choice-item')
          let visible = 0
          const qDigits = q.replace(/\D/g, '')
          $items.each(function () {
            const $it = $(this)
            const hay = getItemIndexText($it)
            const hayDigits = hay.replace(/\D/g, '')
            const match = !q || hay.includes(q) || (!!qDigits && hayDigits.includes(qDigits))
            $it.toggleClass('hidden', !match)
            if (match) visible++
          })
          toggleNoResults($container, visible === 0)
        }

        $(document).on(
          'click',
          '[data-country-select], [data-phone-country], [data-bank-select]',
          function (e) {
            if ($(e.target).closest('.modal-container').length) return
            const $container = $(this).find('.modal-container').first()
            setTimeout(() => {
              if (!$container.hasClass('hidden')) resetModalSearch($container)
            }, 0)
          }
        )

        $(document).on('input', ".modal-container input[type='text']", function (e) {
          e.stopPropagation()
          const $container = $(this).closest('.modal-container')
          filterModal($container, $(this).val())
        })

        $(document).on('keydown', ".modal-container input[type='text']", function (e) {
          if (e.key === 'Escape') {
            const $container = $(this).closest('.modal-container')
            if ($(this).val()) {
              $(this).val('').trigger('input')
            } else {
              $container.addClass('hidden')
            }
          }
        })

        const $langMenu = $('#lang-menu')
        const $langBtn = $('[data-lang-btn]').length
          ? $('[data-lang-btn]')
          : $("img[src*='asset/img/language/icn-lang-']").first()

        $langBtn.on('click', function (e) {
          e.stopPropagation()
          $langMenu.toggleClass('hidden')
        })

        $langMenu.on('click', function (e) {
          e.stopPropagation()
        })
      })
    </script>
  </body>
</html>
