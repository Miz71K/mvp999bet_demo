<?php
require_once 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MVP999BET - Congraturation!</title>
    <link rel="stylesheet" href="asset/css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="overflow-hidden">
    <div>
      <div
        class="w-screen h-dvh bg-cover bg-center relative mx-auto max-w-[438px]"
        style="background-image: url('<?= $background['setting_value'] ?>')"
      >
        <div class="mx-auto max-w-[438px]">
          <div class="flex justify-center">
            <div class="overlay"></div>
            <div
              style="
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1000;
              "
            >
              <div
                class="relative flex flex-col items-center custom-dialog-container"
                style="background-image: url('asset/img/reg-complete-bg.png')"
              >
                <div class="text-[#202020] text-md mt-[100px]">ยินดีด้วย!</div>
                <div class="text-[#202020] my-1" style="font-weight: 600"></div>
                <div class="text-[#8D6B3C] text-xs">
                  <div
                    class="flex flex-row justify-center items-center text-center w-[220px]"
                  >
                    บัญชีของคุณสร้างสำเร็จแล้ว!
                    มาเริ่มการฝากเงินครั้งแรกกันเถอะ!
                  </div>
                </div>
                <div class="absolute flex items-center justify-center bottom-8">
                  <div class="w-full" type="primary">
                    <div class="relative flex">
                      <div class="">
                        <div
                          disabled="false"
                          class="flex items-center justify-center btn-default-container btn-click-animation"
                        >
                          <a
                            href="/"
                            class="text-[#202020]"
                            style="font-weight: 600"
                          >
                            OK
                          </a>
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
          <div class="h-[calc(100vh-72px)] overflow-auto pb-[100px]">
            <div class="pt-[20%] mb-10">
              <img
                class="mx-auto w-[80%] max-w-[438px]"
                src="<?= $logo_auth['setting_value'] ?>"
                alt="MVP999BET"
              />
            </div>
            <!-- <div class="login-form">
              <div class="mt-10 text-xs text-center text-white">
                ยินดีต้อนรับสู่
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
