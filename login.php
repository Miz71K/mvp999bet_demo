<?php
require_once 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MVP999BET - Login</title>
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
        <div class="flex items-center justify-end p-4">
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
          <div id="lang-menu" class="absolute z-10 hidden float-right my-5 mr-2 right-3 top-12">
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
            <img class="mx-auto w-[80%] max-w-[438px]" src="<?= $logo_auth['setting_value'] ?>" alt="MVP999BET" />
          </div>
          <div class="login-form">
            <div id="step-1">
              <div class="text-xs text-center text-white">ยินดีต้อนรับ</div>
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
                <!-- <div class="flex justify-center mt-4 flex-cols gap-x-2">
                  <div
                    class="flex items-center justify-center text-sm capitalize login-option-box-selected login-option-box login-option-box-item"
                  >
                    <div class="mx-3">ชื่อผู้ใช้ / Username</div>
                  </div>
                  <div
                    class="flex items-center justify-center text-sm capitalize login-option-box login-option-box-item"
                  >
                    หมายเลขโทรศัพท์
                  </div>
                </div> -->
                <div class="w-[85%] mt-5">
                  <!-- <div id="option-username">
                    <div
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
                        <div class="top-1 text-[10px] absolute ml-[14px] opacity-50">
                          เบอร์โทรศัพท์ / Phone number
                        </div>
                        <div
                          class="flex items-center justify-center ml-4 cursor-pointer"
                          data-phone-country
                        >
                          <div class="mt-3 w-[32px] bg-lighter text-[#FBDEB2] current-dial">
                            +66
                          </div>
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
                </div>
                <div class="w-full mt-4">
                  <div class="w-full mb-[15px] cursor-pointer">
                    <div class="flex flex-col relative w-[85%] mx-auto">
                      <a
                        href="/"
                        href="/"
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
                          >เข้าสู่ระบบ</span
                        >
                      </a>
                    </div>
                  </div>
                  <div class="my-2 text-right mx-7">
                    <a
                      href="reset_password"
                      class="text-center text-xs text-[#CDCDCD] cursor-pointer"
                      >ลืมรหัสผ่าน?
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-row items-center justify-center mx-4 mt-6">
            <div class="text-[#FFF] text-sm">ยังไม่มีบัญชีใช่ไหม?</div>
            <div class="w-[100px] ml-4">
              <a
                href="register"
                class="border border-1 border-[#FDD387] text-[#FDD387] font-normal text-sm rounded-xl w-full flex items-center justify-center btn-click-animation p-2"
                >สมัครสมาชิก</a
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
          const cls = ($el.attr('class') || '')
            .split(/\s+/)
            .filter((c) => !/^fi-[a-z]{2}$/i.test(c))
          cls.push(`fi-${iso.toLowerCase()}`)
          $el.attr('class', cls.join(' ')).attr('title', iso)
        }

        function setPhoneUI(iso) {
          setFlag($('.current-flag-phone'), iso)
          $('.current-dial').text(dialMap[iso] || '')
          const $phone = $("input[name='phone']")
          if ($phone.length) {
            const maxLen = phoneLengths[iso] || 15
            $phone.attr('maxlength', maxLen)
            if ($phone.val().length > maxLen) $phone.val($phone.val().slice(0, maxLen))
          }
        }

        setPhoneUI('TH')

        const $langMenu = $('#lang-menu')
        const $langBtn = $('[data-lang-btn]').length
          ? $('[data-lang-btn]')
          : $("img[src*='asset/img/language/icn-lang-']").first()

        $langBtn.on('click', function (e) {
          e.stopPropagation()
          $langMenu.toggleClass('hidden')
        })
        $langMenu.on('click', (e) => e.stopPropagation())

        $(document).on('click', function (e) {
          if (!$(e.target).closest('#lang-menu, [data-lang-btn]').length) {
            $langMenu.addClass('hidden')
          }
          if (!$(e.target).closest('[data-phone-country]').length) {
            $('[data-phone-country] .modal-container').addClass('hidden')
          }
        })

        $(document).on('click', '[data-phone-country]', function (e) {
          if ($(e.target).closest('.modal-container').length) return
          $(this).find('.modal-container').toggleClass('hidden')
        })

        $(document).on('click', '[data-phone-country] .choice-item', function (e) {
          e.stopPropagation()
          const klass = $(this).find("[class*='fi-']").attr('class') || ''
          const mIso = klass.match(/fi-([a-z]{2})/i)
          const iso = (mIso ? mIso[1] : 'TH').toUpperCase()
          setPhoneUI(iso)
          $(this).closest('.modal-container').addClass('hidden')
        })

        function norm(s) {
          return (s || '')
            .toString()
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
        }
        $(document).on('input', ".modal-container input[type='text']", function () {
          const q = norm($(this).val())
          const $items = $(this).closest('.modal-container').find('.choice-item')
          $items.each(function () {
            const hay = norm($(this).text())
            $(this).toggleClass('hidden', !!q && !hay.includes(q))
          })
        })

        $(document).on('input', "input[name='phone']", function () {
          this.value = this.value.replace(/\D/g, '')
        })

        $(document).on('click', '[data-pw-toggle]', function () {
          const $input = $('#password-field')
          const show = $input.attr('type') === 'password'
          $input.attr('type', show ? 'text' : 'password')
          $(this).attr('src', show ? 'asset/img/hide-password.svg' : 'asset/img/show-password.svg')
        })

        const $boxes = $('.login-option-box-item')
        const targets = ['#option-username', '#option-phone']

        $boxes.each(function (i) {
          $(this).attr('data-target', targets[i] || '')
        })

        function selectLoginOption($box) {
          const target = $box.attr('data-target')
          if (!target) return

          $boxes.removeClass('login-option-box-selected').attr('aria-selected', 'false')
          $box.addClass('login-option-box-selected').attr('aria-selected', 'true')

          $('#option-username, #option-phone').addClass('hidden')
          $(target).removeClass('hidden')

          const $u = $('#option-username #username-field')
          const $p = $("#option-phone input[name='phone']")
          const isUser = target === '#option-username'

          $u.prop('disabled', !isUser).attr('required', isUser)
          $p.prop('disabled', isUser).attr('required', !isUser)

          setTimeout(() => (isUser ? $u : $p).trigger('focus'), 0)
        }

        $boxes.on('click', function () {
          selectLoginOption($(this))
        })

        const $default = $boxes.filter('.login-option-box-selected').first()
        selectLoginOption($default.length ? $default : $boxes.first())
      })
    </script>
  </body>
</html>
