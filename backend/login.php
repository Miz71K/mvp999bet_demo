<?php
require_once 'include/function.php';

if (!empty(getSession())) {
  header('location: website_setting');
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <?php require_once 'template/header.php'; ?>
</head>

<body class="bg-[<?= $secondary_theme_color['setting_value'] ?>] min-h-dvh flex items-center justify-center">
  <div id="loadingOverlay" class="fixed inset-0 z-50 flex items-center justify-center bg-black/75 dark:bg-black/75 backdrop-blur-sm min-h-dvh">
    <img src="<?= $logo_main['setting_value'] ?>" alt="logo" width="160" height="160" class="inline animate-pulse" />
  </div>
  <?= $background['status'] === 1 ? '<img src="' . $background['setting_value'] . '" class="absolute object-cover w-screen h-screen grayscale opacity-5 -z-10">' : null ?>
  <div class="container p-4 mx-auto">
    <div class="bg-[<?= $primary_theme_color['setting_value'] ?>] relative rounded-4xl shadow-lg p-6 max-w-lg mx-auto border border-[<?= $border_theme_color['setting_value'] ?>]/50">
      <div class="mb-8">
        <div class="flex items-end justify-center">
          <a href="#" class="outline-none">
            <img src="<?= $logo_main['setting_value'] ?>" alt="logo" width="200" height="200">
          </a>
        </div>
      </div>

      <form class="text-[<?= $text_theme_color['setting_value'] ?>] flex flex-col gap-4" method="post" action="" name="request-otp">
        <div>
          <label for="username" class="block text-sm font-medium text-[<?= $text_theme_color['setting_value'] ?>] mb-2">ชื่อผู้ใช้</label>
          <input type="text" id="raw-username" name="username" class="w-full text-[<?= $text_theme_color['setting_value'] ?>] px-4 py-2 outline-none transition-all duration-500 bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] focus:shadow-[0_0_15px_5px] focus:shadow-[<?= $shadow_button_color['setting_value'] ?>] rounded-full" required>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-[<?= $text_theme_color['setting_value'] ?>] mb-2">รหัสผ่าน</label>
          <input type="password" id="password" name="password" class="w-full text-[<?= $text_theme_color['setting_value'] ?>] px-4 py-2 outline-none transition-all duration-500 bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] focus:shadow-[0_0_15px_5px] focus:shadow-[<?= $shadow_button_color['setting_value'] ?>] rounded-full" a required>
        </div>

        <button type="submit" class="inline-flex w-full items-center justify-center bg-linear-[180deg,<?= $primary_button_color['setting_value'] ?>,<?= $secondary_button_color['setting_value'] ?>] px-4 py-2 text-sm leading-6 font-bold text-[<?= $text_theme_color['setting_value'] ?>] cursor-pointer transition-all duration-500 hover:shadow-[0_0_15px_5px] hover:shadow-[<?= $shadow_button_color['setting_value'] ?>] rounded-full">
          <span id="buttonRequestOTPText">
            <?php if (empty($telegram_bot_token['setting_value']) || empty($telegram_otp_chat_id['setting_value'])): ?>
              เข้าสู่ระบบ
            <?php else: ?>
              ขอรหัส OTP
            <?php endif; ?>
          </span>
          <svg id="loadingRequestOTPIcon" class="mr-3 -ml-1 size-5 animate-spin text-[<?= $text_theme_color['setting_value'] ?>] hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
        </button>
      </form>

      <form class="text-[<?= $text_theme_color['setting_value'] ?>] flex flex-col gap-4 mt-13" method="post" action="" name="login">
        <input type="hidden" id="username" name="username" required>
        <div id="otpBlock">
          <div class="flex flex-row items-center justify-between mb-2">
            <div class="flex flex-row items-center gap-2">
              <label for="otp" class="block text-sm font-medium text-[<?= $text_theme_color['setting_value'] ?>]">OTP</label>
              <span class="text-[<?= $text_theme_color['setting_value'] ?>]/50">( REF: <span id="refId"></span> )</span>
            </div>
            <span id="timer" class="text-red-500">5:00</span>
          </div>
          <input type="otp" id="otp" name="otp" class="w-full text-[<?= $text_theme_color['setting_value'] ?>] px-4 py-2 outline-none transition-all duration-500 bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] focus:shadow-[0_0_15px_5px] focus:shadow-[<?= $shadow_button_color['setting_value'] ?>] rounded-full" required>
        </div>

        <button type="submit" class="inline-flex w-full items-center justify-center bg-linear-[180deg,<?= $primary_button_color['setting_value'] ?>,<?= $secondary_button_color['setting_value'] ?>] px-4 py-2 text-sm leading-6 font-bold text-[<?= $text_theme_color['setting_value'] ?>] cursor-pointer transition-all duration-500 hover:shadow-[0_0_15px_5px] hover:shadow-[<?= $shadow_button_color['setting_value'] ?>] rounded-full">
          <span id="buttonLoginText">เข้าสู่ระบบ</span>
          <svg id="loadingLoginIcon" class="mr-3 -ml-1 size-5 animate-spin text-[<?= $text_theme_color['setting_value'] ?>] hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
        </button>
      </form>
    </div>
  </div>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="asset/js/notyf.min.js?_=<?= $rnd ?>"></script>
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
    $('#loadingOverlay').show();

    $(window).on('load', function() {
      NProgress.done();

      $('#loadingOverlay').fadeOut(300);
    });

    const notyf = new Notyf({
      ripple: false,
      position: {
        x: "right",
        y: "top"
      }
    });

    $(document).ready(function() {
      $('form[name=login]').addClass('hidden');
      $('form[name=request-otp]').submit(function(e) {
        e.preventDefault();

        notyf.dismissAll();

        $('#buttonRequestOTPText').hide();
        $('#loadingRequestOTPIcon').removeClass('hidden');

        let username = $('#raw-username').val();

        $.ajax({
          method: 'POST',
          url: 'ajax/request_otp.php',
          cache: false,
          data: $(this).serialize(),
        }).done(function(response) {
          if (response.status_code === 400) {

            notyf.error({
              message: response.message,
              duration: 3000
            });

            $('#buttonRequestOTPText').show();
            $('#loadingRequestOTPIcon').addClass('hidden');

            $('input[name=username]').val('');
            $('input[name=password]').val('');
          } else {
            <?php if (empty($telegram_bot_token['setting_value']) || empty($telegram_otp_chat_id['setting_value'])): ?>

              notyf.success({
                message: response.message,
                duration: 1500
              });

              setTimeout(() => {
                window.location.href = 'website_setting';
              }, 1500);

            <?php else: ?>

              $('form[name=request-otp]').addClass('hidden');
              $('form[name=login]').removeClass('hidden');
              $('#refId').text(response.data.ref_id);
              let timeLeft = 5 * 60;

              function updateTimer() {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                let formattedTime = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                $('#timer').text(formattedTime);

                if (timeLeft <= 0) {
                  clearInterval(timerInterval);
                  $('#timer').text('0:00');

                  $('form[name=login]').addClass('hidden');
                  $('form[name=request-otp]').removeClass('hidden');
                  $('#buttonRequestOTPText').show();
                  $('#loadingRequestOTPIcon').addClass('hidden');

                  $('input[name=username]').val('');
                  $('input[name=password]').val('');
                }
                timeLeft--;
              }

              updateTimer();
              let timerInterval = setInterval(updateTimer, 1000);
              $('#username').val(username);

            <?php endif; ?>
          }
        }).fail(function(response) {
          console.log(response);
        });
      });

      $('form[name=login]').submit(function(e) {
        e.preventDefault();

        notyf.dismissAll();

        $('#buttonLoginText').hide();
        $('#loadingLoginIcon').removeClass('hidden');

        $.ajax({
          method: 'POST',
          url: 'ajax/login.php',
          cache: false,
          data: $(this).serialize(),
        }).done(function(response) {
          if (response.status_code === 400) {

            notyf.error({
              message: response.message,
              duration: 3000
            });

            $('#buttonLoginText').show();
            $('#loadingLoginIcon').addClass('hidden');
          } else {
            notyf.success({
              message: response.message,
              duration: 1500
            });

            setTimeout(() => {
              window.location.href = 'website_setting';
            }, 1500);
          }
        }).fail(function(response) {
          console.log(response);
        });
      });
    });
  </script>
</body>

</html>