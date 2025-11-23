<div class="border-b-2 border-white group">
    <div class="sticky top-0 z-20 flex flex-row items-center justify-between p-6 bg-white group-hover:bg-neutral-100">
        <label class="font-bold text-black/50">Telegram OTP</label>
        <button id="telegram-update" class="px-6 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
            บันทึก
        </button>
    </div>
    <form class="flex flex-col gap-6 px-6 pb-6 bg-white group-hover:bg-neutral-100">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">

            <div class="flex flex-col col-span-1 gap-1">
                <label for="telegram_bot_token" class="text-sm font-medium text-black/50">BOT Token</label>
                <input type="text" id="telegram_bot_token" name="telegram_bot_token" value="<?= $telegram_bot_token['setting_value'] ?>" required
                    class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">
                <input type="hidden" id="telegram_bot_token_id" name="telegram_bot_token_id" value="<?= $telegram_bot_token['id'] ?>" required>
            </div>

            <div class="flex flex-col col-span-1 gap-1">
                <label for="telegram_otp_chat_id" class="text-sm font-medium text-black/50">Chat ID</label>
                <input type="text" id="telegram_otp_chat_id" name="telegram_otp_chat_id" value="<?= $telegram_otp_chat_id['setting_value'] ?>" required
                    class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">
                <input type="hidden" id="telegram_otp_chat_id_id" name="telegram_otp_chat_id_id" value="<?= $telegram_otp_chat_id['id'] ?>" required>
            </div>
        </div>
    </form>
</div>